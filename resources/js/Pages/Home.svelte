<script context="module">
    export { default as layout } from '$components/layouts/HomeLayout.svelte'
</script>

<script lang="ts">
    import BlogPreview from '$components/BlogPreview.svelte'
    import SearchBar from '$components/SearchBar.svelte';
    import { Link } from '@inertiajs/svelte'
    import type { Blog, Pagination } from '$lib/types';

    export let blogs: Blog[];
    export let pagination: Pagination
    console.log(pagination)
</script>

<!-- <SearchBar /> -->
<div class="max-w-7xl flex flex-wrap gap-10">
    {#each blogs as blog (blog.id)}
        <BlogPreview {blog} />
    {/each}
</div>

<div class="join">
    <Link href={pagination.prev_page_url} class="join-item btn  {pagination.prev_page_url ? '': 'btn-disabled'}">« Previous</Link>
    <button class="join-item btn btn-active">PAGE {pagination.current_page}</button>
    <Link href={pagination.next_page_url} class="join-item btn  {pagination.next_page_url ? '': 'btn-disabled'}">Next »</Link>
</div>