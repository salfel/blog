export interface User {
    id: number;
    name: string;
    email: string;
    image: string;
}

export interface Paragraph {
    id: number; 
    heading: string; 
    body: string;
    order: number;
}

export interface Blog {
    id: number; 
    title: string;
    description: string;
    tags: string;
    author: User;
    paragraphs: Paragraph[];
}

export interface PaginationLink {
    url: string;
    label: string;
    active: boolean;
}

export interface Pagination {
    current_page: number;
    last_page: number;
    from: number; 
    first_page_url: string;
    last_page_url: string;
    next_page_url: string;
    prev_page_url: string;
    links: PaginationLink[];
    per_page: number;
    to: number;
    total: number;
    path: string;
}