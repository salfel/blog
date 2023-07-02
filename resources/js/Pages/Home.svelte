<script context="module">
    export { default as layout } from '$components/layouts/HomeLayout.svelte'
</script>

<script lang="ts">
    import BlogPreview from '$components/BlogPreview.svelte'
    import SearchBar from '$components/SearchBar.svelte';
    import type { Blog } from '$lib/types';

    export let blogs: Blog[];
    $: console.log(blogs)
</script>

<!-- <SearchBar /> -->
<div class="flex flex-wrap justify-center gap-10">
    {#each blogs as blog (blog.id)}
        <BlogPreview {blog} />
    {/each}
</div>