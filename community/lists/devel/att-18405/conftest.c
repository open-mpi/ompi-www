/* confdefs.h */
#define PACKAGE_NAME "ROMIO"
#define PACKAGE_TARNAME "romio"
#define PACKAGE_VERSION "Open MPI"
#define PACKAGE_STRING "ROMIO Open MPI"
#define PACKAGE_BUGREPORT "discuss@mpich.org"
#define PACKAGE_URL "http://www.mpich.org/"
#define PACKAGE "romio"
#define VERSION "Open MPI"
#define STDC_HEADERS 1
#define HAVE_SYS_TYPES_H 1
#define HAVE_SYS_STAT_H 1
#define HAVE_STDLIB_H 1
#define HAVE_STRING_H 1
#define HAVE_MEMORY_H 1
#define HAVE_STRINGS_H 1
#define HAVE_INTTYPES_H 1
#define HAVE_STDINT_H 1
#define HAVE_UNISTD_H 1
#define HAVE_DLFCN_H 1
#define LT_OBJDIR ".libs/"
#define HAVE_MPI_OFFSET 1
#define HAVE_MEMALIGN 1
#define HAVE_UNISTD_H 1
#define HAVE_FCNTL_H 1
#define HAVE_MALLOC_H 1
#define HAVE_STDDEF_H 1
#define HAVE_SYS_TYPES_H 1
#define u_char unsigned char
#define u_short unsigned short
#define u_int unsigned int
#define u_long unsigned long
#define SIZEOF_INT 4
#define SIZEOF_VOID_P 8
#define INT_LT_POINTER 1
#define HAVE_INT_LT_POINTER 1
#define SIZEOF_LONG_LONG 8
#define HAVE_LONG_LONG_64 1
#define HAVE_MPI_LONG_LONG_INT 1
#define HAVE_MPI_INFO 1
#define ROMIO_NFS 1
#define ROMIO_UFS 1
#define ROMIO_TESTFS 1
/* end confdefs.h.  */
#include <stdio.h>
#ifdef HAVE_SYS_TYPES_H
# include <sys/types.h>
#endif
#ifdef HAVE_SYS_STAT_H
# include <sys/stat.h>
#endif
#ifdef STDC_HEADERS
# include <stdlib.h>
# include <stddef.h>
#else
# ifdef HAVE_STDLIB_H
#  include <stdlib.h>
# endif
#endif
#ifdef HAVE_STRING_H
# if !defined STDC_HEADERS && defined HAVE_MEMORY_H
#  include <memory.h>
# endif
# include <string.h>
#endif
#ifdef HAVE_STRINGS_H
# include <strings.h>
#endif
#ifdef HAVE_INTTYPES_H
# include <inttypes.h>
#endif
#ifdef HAVE_STDINT_H
# include <stdint.h>
#endif
#ifdef HAVE_UNISTD_H
# include <unistd.h>
#endif
#include <lustre/lustre_user.h>