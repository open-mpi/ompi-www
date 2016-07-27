/* vim: set expandtab cindent fdm=marker ts=2 sw=2: */

/*
gcc -Wall -Wextra -o parse parse.c -lhwloc
See also
hwloc-calc -p --hierarchical socket.core.PU pu:3
*/

#include <stdlib.h>
#include <stdio.h>
#include <errno.h>
#include <string.h>
#include <hwloc.h>

FILE *util_Fopen (const char *path, const char *mode) {
  FILE *f;
  errno = 0;
  f = fopen (path, mode);
  if (f == NULL) {
    fprintf (stdout, "\nOpening of %s failed: %s\n\n",
        path, strerror (errno));
    exit (EXIT_FAILURE);
    return NULL;     /* to eliminate a warning from the compiler */
  } else
    return f;
}

int util_Fclose (FILE * f)
{
  int s;
  if (f == NULL)
    return 0;
  errno = 0;
  s = fclose (f);
  if (s != 0)
    fprintf (stdout, "\nClosing of file failed: %s\n\n", strerror (errno));
  return s;
}

int util_GetLine (FILE *infile, char *Line, char c) {
  size_t j;

  while (NULL != fgets (Line, 1024, infile)) { /* Not EOF and no error */
    /* Find first non-white character in Line */
    j = strspn (Line, " \t\r\f\v");
    /* Discard blank lines and lines whose first non-white character is c */
    if (Line[j] == '\n' ||  Line[j] == c) 
      continue;
    else {
      char *p;
      /* If the character c appears, delete the rest of the line*/
      if ((p = strchr (Line, c)))
        *p = '\0';

      else {
        /* Remove the \n char at the end of line */
        j = strlen (Line);
        if (Line[j - 1] == '\n')
          Line[j - 1] = '\0';
      }
      return 0;
    }
  }

  util_Fclose (infile);
  return -1;
  /*  util_Error ("GetLine: an error has occurred on reading"); */
}



/************************************************************************/

void *util_Malloc (size_t size) {
  void *p;
  errno = 0;
  p = malloc (size);
  if (p == NULL) {
    fprintf (stdout, "\nmalloc failed: %s\n\n", strerror (errno));
    exit (EXIT_FAILURE);
    return NULL;     /* to eliminate a warning from the compiler */
  } else
    return p;
}

void *util_Calloc (size_t count, size_t esize) {
  void *p;
  errno = 0;/* vim: set expandtab cindent fdm=marker ts=2 sw=2: */
  p = calloc (count, esize);
  if (p == NULL) {
    fprintf (stdout, "\ncalloc failed: %s\n\n", strerror (errno));
    exit (EXIT_FAILURE);
    return NULL;     /* to eliminate a warning from the compiler */
  } else
    return p;
}

void *util_Realloc (void *ptr, size_t size) {
  void *p;
  errno = 0;
  p = realloc (ptr, size);
  if ((p == NULL) && (size != 0)) {
    fprintf (stdout, "\nrealloc failed: %s\n\n", strerror (errno));
    exit (EXIT_FAILURE);
    return ptr;      /* to eliminate a warning from the compiler */
  } else
    return p;

}

void *util_Free (void *p) {
  if (p == NULL)
    return NULL;
  free (p);
  return NULL;
}

typedef struct {
  unsigned int *cpu;
  size_t used;
  size_t size;
} Line_t;

Line_t* initLine(size_t initialSize) {
  Line_t* l;
  l = (Line_t*) util_Malloc(sizeof(Line_t));
  l->cpu = (unsigned int *)util_Malloc(initialSize * sizeof(unsigned int));
  l->used = 0;
  l->size = initialSize;
  return l;
}

Line_t* copyLine(Line_t* d) {
  Line_t* l;
  l = (Line_t*) util_Malloc(sizeof(Line_t));
  l->cpu = (unsigned int *)util_Malloc(d->size * sizeof(unsigned int));
  memcpy(l->cpu, d->cpu, d->used * sizeof(unsigned int));
  l->used = d->used;
  l->size = d->size;
  return l;
}


void insertElement(Line_t *l, unsigned int element) {
  if (l->used == l->size) {
    l->size *= 2;
    l->cpu = (unsigned int *)util_Realloc(l->cpu, l->size * sizeof(unsigned int));
  }
  l->cpu[l->used++] = element;
}

void clearLine(Line_t *l) {
  l->used = 0;
}


void freeLine(Line_t *l) {
  util_Free(l->cpu);
  l->cpu = NULL;
  l->used = l->size = 0;
  util_Free(l);
}

void printLine(Line_t *l) {
  unsigned int i;

  for(i=0; i < l->used; ++i) {
    printf("%d ", l->cpu[i]);
  }
  printf("\n");
}

typedef struct {
  Line_t** lines ;
  size_t used;
  size_t size;
} Data_t;

Data_t* initData(size_t initialSize) {
  Data_t* d;
  d = (Data_t*) util_Malloc(sizeof(Data_t));
  d->lines = (Line_t**)util_Malloc(initialSize * sizeof(Line_t*));
  d->used = 0;
  d->size = initialSize;
  return d;
}

void insertLine(Data_t *d, Line_t* element) {
  if (d->used == d->size) {
    d->size *= 2;
    d->lines = (Line_t**)util_Realloc(d->lines, d->size * sizeof(Line_t*));
  }
  d->lines[d->used] = copyLine (element);
  d->used++;
}


void util_FreeData(Data_t *d) {
  unsigned int i;
  for (i=0; i<d->used; ++i) {
    freeLine (d->lines[i]);
  } 
  util_Free(d->lines);
  d->lines = NULL;
  d->used = d->size = 0;
  util_Free(d);
}

void printData(Data_t *d) {
  unsigned int i;
  for (i=0; i<d->used; ++i) {
    printLine (d->lines[i]);
  } 
}


int main(int argc, char **argv) {
  hwloc_topology_t topology;
  hwloc_bitmap_t cpuset;
  FILE* in = util_Fopen(argv[1], "r");

  char * line = NULL;
  size_t len = 0;
  ssize_t read, pos;
  char c = '#';
  char *p;
  Data_t* d;
  Line_t* l;
  long int n;

  l = initLine(64);
  d = initData(16);

  while ((read = getline(&line, &len, in)) != -1) {
    /* Find first non-white character in Line */
    pos = strspn (line, " \t\r\f\v");
    /* Discard blank lines and lines whose first non-white character is c */
    if (line[pos] == '\n' ||  line[pos] == c) 
      continue;
    else {
      /* If the character c appears, delete the rest of the line*/
      if ((p = strchr (line, c)))
        *p = '\0';

      else {
        /* Remove the \n char at the end of line */
        pos = strlen (line);
        if (line[pos - 1] == '\n')
          line[pos - 1] = '\0';
      }
      //Split line into the records
      p = strtok (line," ");
      while (p != NULL) {
        n = strtol(p, NULL, 10);
        insertElement(l,n);
        p = strtok (NULL, " ");
      }

      insertLine(d,l);
      clearLine(l);
    }
  }

  if (line)
    free(line);
  printData(d);    

  /* Allocate and initialize topology object. */
  hwloc_topology_init(&topology);

  /* ... Optionally, put detection configuration here to ignore
     some objects types, define a synthetic topology, etc....  

     The default is to detect all the objects of the machine that
     the caller is allowed to access.  See Configure Topology
     Detection. */

  /* Perform the topology detection. */
  hwloc_topology_load(topology);

  cpuset = hwloc_bitmap_alloc();

  unsigned int i, j, max_columns;
  max_columns = 0;
  char data[128];
  for (i=0; i<d->used; ++i) {
    if( d->lines[i]->used > max_columns) max_columns = d->lines[i]->used;
  }

  for (i = 1; i < max_columns; ++i ) {
    for (j=0; j<d->used; ++j) {
      if ( d->lines[j]->used >= i ) {
        hwloc_bitmap_zero(cpuset);
        hwloc_bitmap_set(cpuset, d->lines[j]->cpu[i]);
        snprintf(data, 128, "%d: %d", i, d->lines[j]->cpu[0]);
        printf("%s\n", data);
        hwloc_obj_t  hwloc_obj[2];
        hwloc_obj[0] = hwloc_get_first_largest_obj_inside_cpuset(topology, cpuset);
        hwloc_obj[1] = hwloc_obj[0]->parent;

        if ( hwloc_obj == NULL ) printf("ERROR");
        char string[200];
        hwloc_obj_type_snprintf(string, sizeof(string), hwloc_obj[1], 0);
        printf("%s\n", string);
        hwloc_obj_attr_snprintf(string, sizeof(string), hwloc_obj[1], ": ", 0);
        printf("%s\n", string);
        hwloc_obj_snprintf (string, sizeof(string), topology, hwloc_obj[1], NULL, 1);
        printf("%s\n", string);
        printf("OS index: %u\n", hwloc_obj[1]->os_index);
        hwloc_topology_insert_misc_object_by_parent (topology,  hwloc_obj[1], data);
        //hwloc_topology_insert_misc_object_by_cpuset(topology, cpuset, data);

      }
    }

  }

  hwloc_topology_export_xml(topology,"/tmp/a.xml");

  return(EXIT_SUCCESS);


}

