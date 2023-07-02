<script lang="ts">

    import { Link } from '@inertiajs/svelte'
    import type { Blog } from '$lib/types';

    export let blog: Blog;
</script>

<div class="card card-compact md:w-80 shadow-xl">
    <figure><img src={blog.thumbnail} alt={blog.title}/></figure>
</div>