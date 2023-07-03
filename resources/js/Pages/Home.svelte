<script context="module">
    export { default as layout } from '$components/layouts/HomeLayout.svelte'
</script>

<script lang="ts">
    import BlogPreview from '$components/BlogPreview.svelte'
    import SearchBar from '$components/nav/SearchBar.svelte';
    import Paginator from '$components/nav/Paginator.svelte';
    import { Link } from '@inertiajs/svelte'
    import type { Blog, Pagination } from '$lib/types';

    export let blogs: Blog[];
    export let pagination: Pagination
    console.log(blogs)
</script>

<svelte:head>
    <title>Home</title>
</svelte:head>

<!-- <SearchBar /> -->
<div class="max-w-7xl flex flex-wrap gap-10 mb-10">
    {#each blogs as blog (blog.id)}
        <BlogPreview {blog} />
    {/each}
</div>

<Paginator {pagination} />