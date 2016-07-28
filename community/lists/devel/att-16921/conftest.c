/* -*- Mode: C; c-basic-offset:4 ; indent-tabs-mode:nil -*- */
#include <stdint.h>
#include <assert.h>

union opal_counted_pointer_t {
    struct {
        uint64_t counter;
        uint64_t item;
    } data;
    __int128_t value;
};
typedef union opal_counted_pointer_t opal_counted_pointer_t;

int main (int argc, char *argv[]) {
    volatile opal_counted_pointer_t a;
    opal_counted_pointer_t b;

    a.data.counter = 0;
    a.data.item = 0x1234567890ABCDEF;

    b.data.counter = a.data.counter;
    b.data.item = a.data.item;

    /* bozo checks */
    assert(16 == sizeof(opal_counted_pointer_t));
    assert(a.data.counter == b.data.counter);
    assert(a.data.item == b.data.item);
    /* 
     * following assert fails on buggy compilers
     * so far, with icc -o conftest conftest.c 
     *  - intel icc 14.0.0.080 (aka 2013sp1)
     *  - intel icc 14.0.1.106 (aka 2013sp1u1)
     * older and more recents compilers work fine
     * buggy compilers work also fine but only with -O0
     */
    assert(a.value == b.value);
    return 0;
}

