
#include <assert.h>
#include <inttypes.h>
#include <stdio.h>
#include <stdlib.h>
#include <mpi.h>

typedef signed char	int8;
typedef unsigned char	uint8;
typedef short		int16;
typedef unsigned short	uint16;
typedef int		int32;
typedef unsigned int	uint32;
typedef long		int64;
typedef unsigned long	uint64;

#define	I64(c)		(c##L)
#define	UI64(c)		(c##uL)

#define	_BR_RUNUP_	128
#define	_BR_LG_TABSZ_	7
#define	_BR_TABSZ_	(I64(1) << _BR_LG_TABSZ_)

#define	_ZERO64		UI64(0x0)

#define	_maskl(x)	(((x) == 0) ? _ZERO64 : ((~_ZERO64) << (64-(x))))
#define	_maskr(x)	(((x) == 0) ? _ZERO64 : ((~_ZERO64) >> (64-(x))))

#define	_BR_64STEP_(H,L,A,B) {\
	uint64	x;\
	x = H ^ (H << A) ^ (L >> (64 - A));\
	H = L | (x >> (B - 64));\
	L = x << (128 - B);\
}

static uint64_t _rtc()
{
	unsigned hi, lo, tmp;
	asm volatile ("rdtsc" : "=a" (lo), "=d" (hi));
	return (uint64_t)hi << 32 | lo;
}

typedef struct
{
	uint64	hi, lo, ind;
	uint64	tab[_BR_TABSZ_];
} brand_t;

static uint64 brand (brand_t *p)
{
	uint64	hi=p->hi, lo=p->lo, i=p->ind, ret;
	
	ret = p->tab[i];

	// 64-step a primitive trinomial LRS:  0, 45, 118   
	_BR_64STEP_(hi,lo,45,118);

	p->tab[i] = ret + hi;
	p->hi  = hi;
	p->lo  = lo;
	p->ind = hi & _maskr(_BR_LG_TABSZ_);

	return ret;
}

static void brand_init (brand_t *p, uint64 val)
{
	int64	i;
	uint64	hi, lo;

	hi = UI64(0x9ccae22ed2c6e578) ^ val;
	lo = UI64(0xce4db5d70739bd22) & _maskl(118-64);

	// we 64-step 0, 33, 118 in the initialization   
	for (i = 0; i < 64; i++)
		_BR_64STEP_(hi,lo,33,118);

	for (i = 0; i < _BR_TABSZ_; i++) {
		_BR_64STEP_(hi,lo,33,118);
		p->tab[i] = hi;
	}
	p->ind = _BR_TABSZ_/2;
	p->hi  = hi;
	p->lo  = lo;

	for (i = 0; i < _BR_RUNUP_; i++)
		brand(p);
}

void rubbish(brand_t* state, uint64_t n_words, uint64_t array[])
{
	uint64_t	i;

	for (i = 0; i < n_words; i++)
		array[i] = brand(state);
}

void usage(const char* prog)
{
	int	me;

	MPI_Comm_rank(MPI_COMM_WORLD, &me);
	if (me == 0)
		fprintf(stderr, "usage: %s #bytes/process\n", prog);

	exit(2);
}

int main(int argc, char* argv[])
{
	brand_t		state;
	int		i_proc, n_procs, words_per_chunk, loop;
	size_t		array_size;
	uint64_t*	source;
	uint64_t*	dest;

	MPI_Init(&argc, &argv);
	MPI_Comm_size(MPI_COMM_WORLD, &n_procs);
	MPI_Comm_rank(MPI_COMM_WORLD, &i_proc);
	MPI_Datatype uint64_type = MPI_LONG;
	MPI_Aint foo = 0;
	MPI_Type_extent(uint64_type, &foo);

	assert(foo == 8);

	if (argc < 2)
		usage(argv[0]);

	array_size = strtoull(argv[1], NULL, 0);
	words_per_chunk = (array_size >> 3) / n_procs;

	if (i_proc == 0)
		printf("array size is 0x%zx bytes (%g)\n", array_size,

	(double)array_size);
	source = malloc(array_size);
	dest = malloc(array_size);
	
	if (source == NULL || dest == NULL) {
		fprintf(stderr, "process %d out of memory\n", i_proc);
		exit(1);
	}

	brand_init(&state, i_proc+1);
	rubbish(&state, array_size >> 3, source);
	printf("process %d starting\n", i_proc);

	for (loop = 0; loop < 3; loop++) {
		int64_t time = _rtc();
		int err;

		err = MPI_Alltoall(source, words_per_chunk, uint64_type, dest, words_per_chunk, uint64_type, MPI_COMM_WORLD);
		time = _rtc() - time;

		if (err != MPI_SUCCESS)
			printf("process %d MPI error: %d\n", i_proc, err);
		else
			printf("process %d: time %g ticks/byte\n", i_proc, (double)time / array_size);
	}

	if (i_proc == 1)
		printf("%016" PRIx64 "\n", dest[0]);

	MPI_Finalize();
	return 0;
}


