#include <errno.h>
#include <unistd.h>
#include <pthread.h>
#include <stdio.h>

static void * fn (void * arg) {
    if (errno == 1) {
        return (void *)-1;
    }
    read(0, NULL, 0);
    if (errno != 0) {
        return (void *)-2;
    }
    errno = 2;
    return NULL;
}

int main (int argc, char *argv[]) {
	pthread_t t;
        void *s = NULL;
        errno = 1;
        if (pthread_create(&t, NULL, fn, NULL) < 0) {
		perror ("pthread_create ");
		return 1;
	}
        if (pthread_join(t, &s) < 0) {
		perror ("pthread_join ");
		return 2;
	}
        if (NULL != s) {
                fprintf(stderr, "KO: error 3 (%ld)\n", (long)s);
		return 3;
	} else if (2 == errno) {
                fprintf(stderr, "KO: error 4 (%ld)\n", (long)s);
		return 4;
	} else {
                fprintf(stderr, "OK\n");
		return 0;
	}
}

