#include <stdio.h>
#include <string.h>
#include <unistd.h>
#include <stdlib.h>
#include <malloc.h>
#include <sys/mman.h>

#define MegB (1024*1024)

#define CHUNKSIZE 50*MegB       // initial buffer size to malloc
#define CHUNKREALLOC 1*MegB     // Reallocate the buffer to this size
#define CHUNKDECREASEBY 2*MegB  // decrease malloced buffer by this

#define COUNT 5			// Number of iterations to do

/* Touch one byte on every page of allocated memory to ensure it
   gets requested from the kernel */
void touch_memory(char *base, int size)
{
	int pagesize;
	int offset;
	int i;

	pagesize = getpagesize();
	for(offset = 0; offset < size; offset += pagesize)
		base[offset] = 0xff;
}

int get_malloc_held(void)
{
	struct mallinfo info = mallinfo();
	return info.hblkhd/MegB;
}

void print_mem_usage(void)
{
	struct mallinfo info = mallinfo();
	
	printf("  Current usage is:\n");
	printf("    arena: %d\n", info.arena);
	printf("    ordblks: %d\n", info.ordblks);
	printf("    smblks: %d\n", info.smblks);
	printf("    Number of buckets: %d\n", info.hblks);
	printf("    Size of all buckets: %d MB\n", info.hblkhd/MegB);
	printf("    usmblks: %d\n", info.usmblks);
	printf("    fsmblks: %d\n", info.fsmblks);
	printf("    uordblks: %d\n", info.uordblks);
	printf("    fordblks: %d\n", info.fordblks);
	printf("    keepcost: %d\n", info.keepcost);
}

int main(int argc, char **argv)
{
	void *ptrs[COUNT];
	int i;
	int alloc_size;
	int total_mb;
	
	printf("malloc/free test\n");
	alloc_size = CHUNKSIZE;
	total_mb = 0;
	for(i = 0; i < COUNT; i++) {
		ptrs[i] = malloc(alloc_size);
		touch_memory(ptrs[i], alloc_size);
		total_mb += alloc_size/MegB;
		printf("malloc() % 5d MB, total % 4d MB, malloc held % 4d MB\n", 
			alloc_size/MegB, total_mb, get_malloc_held());
	}
	for(i = 0; i < COUNT; i++) {
		free(ptrs[COUNT-1-i]);
		total_mb -= alloc_size/MegB;
		printf("free() % 7d MB, total % 4d MB, malloc held % 4d MB\n", 
			alloc_size/MegB, total_mb, get_malloc_held());
	}

	
	printf("\nmalloc/realloc/free test\n");
	alloc_size = CHUNKSIZE;
	total_mb = 0;
	for(i = 0; i < COUNT; i++) {
		ptrs[i] = malloc(alloc_size);
		madvise(ptrs[i], alloc_size, MADV_NORMAL);
		touch_memory(ptrs[i], alloc_size);
		total_mb += alloc_size/MegB;
		printf("malloc() % 5d MB, total % 4d MB, malloc held % 4d MB\n", 
			alloc_size/MegB, total_mb, get_malloc_held());
		
		ptrs[i] = realloc(ptrs[i], CHUNKREALLOC);
		madvise(ptrs[i], CHUNKREALLOC, MADV_NORMAL);
		total_mb = total_mb-alloc_size/MegB+CHUNKREALLOC/MegB;
		printf("realloc() % 4d MB, total % 4d MB, malloc held % 4d MB\n", 
 			CHUNKREALLOC/MegB, total_mb, get_malloc_held());
	}
	for(i = 0; i < COUNT; i++) {
		free(ptrs[COUNT-1-i]);
		total_mb -= CHUNKREALLOC/MegB;
		printf("free() % 7d MB, total % 4d MB, malloc held % 4d MB\n", 
			CHUNKREALLOC/MegB, total_mb, get_malloc_held());
	}

	printf("\nmalloc/realloc/free with decrementing size test\n");
	alloc_size = CHUNKSIZE;
	total_mb = 0;
	for(i = 0; i < COUNT; i++) {
		ptrs[i] = malloc(alloc_size);
		madvise(ptrs[i], alloc_size, MADV_NORMAL);
		touch_memory(ptrs[i], alloc_size);
		total_mb += alloc_size/MegB;
		printf("malloc() % 5d MB, total % 4d MB, malloc held % 4d MB\n", 
			alloc_size/MegB, total_mb, get_malloc_held());

		ptrs[i] = realloc(ptrs[i], CHUNKREALLOC);
		madvise(ptrs[i], CHUNKREALLOC, MADV_NORMAL);
		total_mb = total_mb-alloc_size/MegB+CHUNKREALLOC/MegB;
		printf("realloc() % 4d MB, total % 4d MB, malloc held % 4d MB\n", 
 			CHUNKREALLOC/MegB, total_mb, get_malloc_held());

		alloc_size -= CHUNKDECREASEBY;
	}
	for(i = 0; i < COUNT; i++) {
		free(ptrs[COUNT-1-i]);
		total_mb -= CHUNKREALLOC/MegB;
		printf("free() % 7d MB, total % 4d MB, malloc held % 4d MB\n", 
			CHUNKREALLOC/MegB, total_mb, get_malloc_held());
	}


}
