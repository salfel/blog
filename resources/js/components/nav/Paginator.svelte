<script lang="ts">
    import { Link } from '@inertiajs/svelte'
    import type { Pagination } from "$lib/types";

    export let pagination: Pagination;
    console.log(pagination)
</script>

<div class="join">
    {#each pagination.links as link}
        {#if Math.abs(pagination.current_page - Number(link.label)) < 3 || link.label.includes('&')}
            <Link href={link.url} class="join-item btn btn-sm {link.active ? 'btn-active btn-primary': ''} {!link.url ? 'no-animation': ''} ">{@html link.label}</Link>
        {/if}
    {/each}
</div>