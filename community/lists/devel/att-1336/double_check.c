#define OMPI_BUILDING 0
#include "ompi_config.h"

#include "opal/sys/atomic.h"

static opal_atomic_lock_t lock = { { OPAL_ATOMIC_UNLOCKED } };

int
main(int argc, char *argv[])
{
    int test = (argc == 1);

    __asm__ ("# first if\n");
    if (1 == test) {
        return 1;
    }
    __asm__ ("# lock\n");
    opal_atomic_lock(&lock);

    __asm__ ("# second if\n");
    if (1 == test) {
        __asm__ ("# if unlock\n");
        opal_atomic_unlock(&lock);
        return 2;
    }

    test = 1;
    __asm__ ("# unlock\n");
    opal_atomic_unlock(&lock);

    return 0;
}


