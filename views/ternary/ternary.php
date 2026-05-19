<?php
// Listing Snapshot — alternative ternary demo using listing fields and fallbacks
?>

<?php loadPartial("head"); ?>

<?php loadPartial("navbar"); ?>

<?php
// Allow a lightweight sample listing via query params, or fall back to a small demo array
$listing = [
    'title' => $_GET['title'] ?? 'Full‑Stack Engineer',
    'company' => $_GET['company'] ?? 'Acme Co',
    'city' => $_GET['city'] ?? '',
    'state' => $_GET['state'] ?? '',
    'address' => $_GET['address'] ?? '',
    'salary' => $_GET['salary'] ?? '',
    'email' => $_GET['email'] ?? '',
    'phone' => $_GET['phone'] ?? '',
    'tags' => $_GET['tags'] ?? 'php,remote',
];

// Ternary-heavy derivations and fallbacks
$location = $listing['city'] ?: ($listing['state'] ?: ($listing['address'] ?: 'Location not specified'));
$contact = $listing['email'] ?: ($listing['phone'] ?: 'No contact provided');
$salaryRaw = is_numeric($listing['salary']) ? (float) $listing['salary'] : null;
$salaryLabel = $salaryRaw !== null
    ? ($salaryRaw >= 100000 ? '>= 100k' : ($salaryRaw >= 70000 ? '70k–99k' : 'Below 70k'))
    : 'Salary not listed';

// Quick recommendation using nested ternaries
$priority = $salaryRaw !== null
    ? ($salaryRaw >= 100000 ? 'Hot — outreach now' : ($salaryRaw >= 70000 ? 'Consider' : 'Low priority'))
    : 'No salary info';

$tags = array_filter(array_map('trim', explode(',', $listing['tags'])));
$tagDisplay = count($tags) ? implode(', ', $tags) : 'No tags';

// Small safety sanitization for display
function e($v)
{
    return htmlspecialchars((string)$v);
}
?>

<main class="flex-1 py-10">
    <div class="mx-auto max-w-5xl px-4">
        <header class="mb-6 rounded-2xl border border-slate-200 bg-white p-6 shadow-sm">
            <h1 class="text-2xl font-black">Ternary Listing Snapshot</h1>
            <p class="text-sm text-slate-500 mt-1">An alternative demo that uses ternary fallbacks for common listing fields.</p>
        </header>

        <section class="grid gap-6 lg:grid-cols-[1fr_14rem]">
            <article class="rounded-2xl border border-slate-200 bg-white p-6">
                <h2 class="text-xl font-bold"><?= e($listing['title']) ?> <span class="text-sm font-medium text-slate-500">at <?= e($listing['company']) ?></span></h2>

                <dl class="mt-4 space-y-2 text-sm text-slate-700">
                    <div>
                        <dt class="text-xs text-slate-500">Location</dt>
                        <dd class="font-semibold"><?= e($location) ?></dd>
                    </div>
                    <div>
                        <dt class="text-xs text-slate-500">Contact</dt>
                        <dd class="font-semibold"><?= e($contact) ?></dd>
                    </div>
                    <div>
                        <dt class="text-xs text-slate-500">Salary band</dt>
                        <dd class="font-semibold"><?= e($salaryLabel) ?></dd>
                    </div>
                    <div>
                        <dt class="text-xs text-slate-500">Priority</dt>
                        <dd class="font-semibold <?= $priority === 'Hot — outreach now' ? 'text-emerald-700' : ($priority === 'Consider' ? 'text-amber-700' : 'text-rose-700') ?>"><?= e($priority) ?></dd>
                    </div>
                    <div>
                        <dt class="text-xs text-slate-500">Tags</dt>
                        <dd class="font-semibold"><?= e($tagDisplay) ?></dd>
                    </div>
                </dl>

                <div class="mt-6 text-xs text-slate-500">
                    <p class="font-semibold">Ternary examples used in this snapshot</p>
                    <pre class="mt-2 bg-slate-50 p-3 rounded"><code>// location fallback
$location = $listing['city'] ?: ($listing['state'] ?: ($listing['address'] ?: 'Location not specified'));

// salary band
$salaryLabel = $salaryRaw !== null
    ? ($salaryRaw >= 100000 ? '>= 100k' : ($salaryRaw >= 70000 ? '70k–99k' : 'Below 70k'))
    : 'Salary not listed';

// priority with nested ternary
$priority = $salaryRaw !== null
    ? ($salaryRaw >= 100000 ? 'Hot — outreach now' : ($salaryRaw >= 70000 ? 'Consider' : 'Low priority'))
    : 'No salary info';</code></pre>
                </div>
            </article>

            <aside class="rounded-2xl border border-slate-200 bg-white p-6">
                <p class="text-sm font-semibold text-slate-700">Quick inputs</p>
                <form method="GET" action="/ternary">
                    <label class="block text-xs text-slate-500 mt-3">Title <input name="title" value="<?= e($listing['title']) ?>" class="w-full mt-1 rounded border px-2 py-1" /></label>
                    <label class="block text-xs text-slate-500 mt-3">Company <input name="company" value="<?= e($listing['company']) ?>" class="w-full mt-1 rounded border px-2 py-1" /></label>
                    <label class="block text-xs text-slate-500 mt-3">City <input name="city" value="<?= e($listing['city']) ?>" class="w-full mt-1 rounded border px-2 py-1" /></label>
                    <label class="block text-xs text-slate-500 mt-3">State <input name="state" value="<?= e($listing['state']) ?>" class="w-full mt-1 rounded border px-2 py-1" /></label>
                    <label class="block text-xs text-slate-500 mt-3">Salary <input name="salary" value="<?= e($listing['salary']) ?>" class="w-full mt-1 rounded border px-2 py-1" /></label>
                    <label class="block text-xs text-slate-500 mt-3">Email <input name="email" value="<?= e($listing['email']) ?>" class="w-full mt-1 rounded border px-2 py-1" /></label>
                    <label class="block text-xs text-slate-500 mt-3">Phone <input name="phone" value="<?= e($listing['phone']) ?>" class="w-full mt-1 rounded border px-2 py-1" /></label>
                    <label class="block text-xs text-slate-500 mt-3">Tags <input name="tags" value="<?= e($listing['tags']) ?>" class="w-full mt-1 rounded border px-2 py-1" /></label>
                    <button class="mt-4 w-full rounded bg-slate-900 text-white px-3 py-2">Update snapshot</button>
                </form>

                <div class="mt-6 text-xs text-slate-400">
                    <p class="font-semibold">Project ternaries</p>
                    <ul class="mt-2 list-disc pl-5">
                        <li>[config/db.php](config/db.php#L21-L25) — env defaults using `?:`</li>
                        <li>[views/listings/show.view.php](views/listings/show.view.php#L11) — location fallback `?:`</li>
                        <li>[views/partials/job-card.php](views/partials/job-card.php#L10) — job location fallback</li>
                    </ul>
                </div>
            </aside>
        </section>
    </div>
</main>

<?php loadPartial("footer"); ?>