<?php loadPartial("head"); ?>
<?php loadPartial("navbar"); ?>
<?php loadPartial("top-banner"); ?>

<!-- Post a Job Form Box -->
<section class="flex justify-center items-center mt-20">
    <div class="bg-white p-8 rounded-lg shadow-md w-full md:w-600 mx-6 create-listing-card">
        <h2 class="text-4xl text-center font-bold mb-4">Create Job Listing</h2>
        <!-- <div class="message bg-red-100 p-3 my-3">This is an error message.</div>
        <div class="message bg-green-100 p-3 my-3">
          This is a success message.
        </div> -->
        <form method="POST" class="listing-form">
            <?php if (!empty($error)): ?>
                <div class="message bg-red-100 p-3 my-3">
                    <?= htmlspecialchars($error) ?>
                </div>
            <?php endif; ?>
            <div class="form-intro text-center mb-8">
                <p class="mt-2 text-gray-600">Build a clean, modern job post with organized role and company details.</p>
            </div>

            <div class="listing-form-grid">
                <div class="form-panel">
                    <div class="section-header">
                        <span class="section-icon">💼</span>
                        <div>
                            <h3>Job Details</h3>
                            <p>Tell candidates what the position includes.</p>
                        </div>
                    </div>

                    <div class="field-group">
                        <label>Job Title</label>
                        <input type="text" name="title" placeholder="Job Title"
                            value="<?= htmlspecialchars($old['title'] ?? '') ?>"
                            class="form-input" />
                    </div>

                    <div class="field-group">
                        <label>Job Description</label>
                        <textarea name="description" placeholder="Job Description" class="form-input textarea"><?= htmlspecialchars($old['description'] ?? '') ?></textarea>
                    </div>

                    <div class="field-group">
                        <label>Annual Salary</label>
                        <input type="text" name="salary" placeholder="Annual Salary"
                            value="<?= htmlspecialchars($old['salary'] ?? '') ?>"
                            class="form-input" />
                    </div>

                    <div class="field-group">
                        <label>Tags</label>
                        <input type="text" name="tags" placeholder="Tags"
                            value="<?= htmlspecialchars($old['tags'] ?? '') ?>"
                            class="form-input" />
                    </div>

                    <div class="field-group">
                        <label>Requirements</label>
                        <input type="text" name="requirements" placeholder="Requirements"
                            value="<?= htmlspecialchars($old['requirements'] ?? '') ?>"
                            class="form-input" />
                    </div>

                    <div class="field-group">
                        <label>Benefits</label>
                        <input type="text" name="benefits" placeholder="Benefits"
                            value="<?= htmlspecialchars($old['benefits'] ?? '') ?>"
                            class="form-input" />
                    </div>
                </div>

                <div class="form-panel">
                    <div class="section-header">
                        <span class="section-icon">🏢</span>
                        <div>
                            <h3>Company Info & Location</h3>
                            <p>Provide the employer and contact details.</p>
                        </div>
                    </div>

                    <div class="field-group">
                        <label>Company Name</label>
                        <input type="text" name="company" placeholder="Company Name"
                            value="<?= htmlspecialchars($old['company'] ?? '') ?>"
                            class="form-input" />
                    </div>

                    <div class="field-group">
                        <label>Address</label>
                        <input type="text" name="address" placeholder="Address"
                            value="<?= htmlspecialchars($old['address'] ?? '') ?>"
                            class="form-input" />
                    </div>

                    <div class="field-group">
                        <label>City</label>
                        <input type="text" name="city" placeholder="City"
                            value="<?= htmlspecialchars($old['city'] ?? '') ?>"
                            class="form-input" />
                    </div>

                    <div class="field-group">
                        <label>State</label>
                        <input type="text" name="state" placeholder="State"
                            value="<?= htmlspecialchars($old['state'] ?? '') ?>"
                            class="form-input" />
                    </div>

                    <div class="field-group">
                        <label>Phone</label>
                        <input type="text" name="phone" placeholder="Phone"
                            value="<?= htmlspecialchars($old['phone'] ?? '') ?>"
                            class="form-input" />
                    </div>

                    <div class="field-group">
                        <label>Email Address For Applications</label>
                        <input type="email" name="email" placeholder="Email Address For Applications"
                            value="<?= htmlspecialchars($old['email'] ?? '') ?>"
                            class="form-input" />
                    </div>
                </div>
            </div>

            <div class="button-row">
                <a href="/" class="btn-cancel">Cancel</a>
                <button type="submit" class="btn-save">Save</button>
            </div>
        </form>
    </div>
</section>

<?php loadPartial("footer"); ?>