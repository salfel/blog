<script lang="ts">

    import { Link } from '@inertiajs/svelte'
    import type { Blog } from '$lib/types';

    export let blog: Blog;
</script>

<div class="card card-compact w-96 shadow-xl">
    <div class="card-body">
        <h2 class="card-title line-clamp-2">{blog.title}</h2>
        <p class="line-clamp-2">{blog.description}</p>
        <div class="card-actions items-center justify-between mt-2">
            <!--TODO  Add Link for user too see all of his blogs -->
            <Link href="#" class="flex items-center gap-1">
                <img src={blog.author.image} alt={blog.author.name} class="inline-block aspect-square h-6 rounded-full"/>
                <span class="link link-hover text-xs">{blog.author.name}</span>
            </Link>
            <ul class="space-x-2" role="list">
                {#each blog.tags.split(',') as tag}
                    <li class="badge badge-sm badge-outline">{tag}</li>
                {/each}
            </ul>
        </div>
    </div>
    
</div>

