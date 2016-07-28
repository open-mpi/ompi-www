/*
 * NewMadeleine
 * Copyright (C) 2006 (see AUTHORS file)
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or (at
 * your option) any later version.
 *
 * This program is distributed in the hope that it will be useful, but
 * WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * General Public License for more details.
 */
#include <stdlib.h>
#include <stdio.h>
#include <stdint.h>
#include <string.h>
#include <unistd.h>
#include "mpi.h"

#include <semaphore.h>
#include <sched.h>

/* This program performs several ping pong in parallel.
 * This evaluates the efficienty to access nmad from 1, 2, 3, ...n threads simultanously
*/

#define LEN_DEFAULT      4
#define WARMUPS_DEFAULT	1000
#define LOOPS_DEFAULT	10000
#define THREADS_DEFAULT 16
#define DATA_CONTROL_ACTIVATED 0

static int	comm_rank	= -1;
static int	comm_size	= -1;
static char	host_name[1024]	= "";

static int       max_len   =  16;
static int	 loops;
static int       threads;
static int       warmups;

static sem_t ready_sem;

static int go;

static __inline__
uint32_t _next(uint32_t len, uint32_t multiplier, uint32_t increment)
{
  if (!len)
    return 1+increment;
  else
    return len*multiplier+increment;
}

void usage_ping() {
  fprintf(stderr, "-L len - packet length [%d]\n", LEN_DEFAULT);
  fprintf(stderr, "-N iterations - iterations [%d]\n", LOOPS_DEFAULT);
  fprintf(stderr, "-T thread - number of communicating threads [%d]\n", THREADS_DEFAULT);
  fprintf(stderr, "-W warmup - number of warmup iterations [%d]\n", WARMUPS_DEFAULT);
}

static void fill_buffer(char *buffer, int len) {
  unsigned int i = 0;

  for (i = 0; i < len; i++) {
    buffer[i] = 'a'+(i%26);
  }
}

static void clear_buffer(char *buffer, int len) {
  memset(buffer, 0, len);
}

#if DATA_CONTROL_ACTIVATED
static void control_buffer(char *msg, char *buffer, int len) {
  tbx_bool_t   ok = tbx_true;
  unsigned char expected_char;
  unsigned int          i  = 0;

  for(i = 0; i < len; i++){
    expected_char = 'a'+(i%26);

    if(buffer[i] != expected_char){
      printf("Bad data at byte %d: expected %c, received %c\n",
             i, expected_char, buffer[i]);
      ok = tbx_false;
    }
  }


  if (!ok) {
    printf("Controling %s - ", msg);
    printf("%d bytes reception failed\n", len);

    TBX_FAILURE("data corruption");
  } else {
    printf("ok\n");
  }
}
#endif


void 
server(void* arg) {
  int    my_pos = (uint8_t)arg;
  char	*buf	= NULL;
  uint8_t tag   = (uint8_t)arg;
  int    i, k;
  int len;

  buf = malloc(max_len);
  clear_buffer(buf, max_len);
  for(i = my_pos; i <= threads; i++) {   
    /* Be sure all the communicating threads have been created before we start */
    while(go < i )
      sched_yield();

    for(len=1; len < max_len; len*=2){
      for(k = 0; k < loops + warmups; k++) {
      
      MPI_Request request;

      MPI_Recv(buf, len, MPI_CHAR, (comm_rank+1)%2, tag, MPI_COMM_WORLD, MPI_STATUS_IGNORE);

#if DATA_CONTROL_ACTIVATED
      control_buffer("received", buf, len);
#endif
      MPI_Send(buf, len , MPI_CHAR, (comm_rank+1)%2, tag, MPI_COMM_WORLD);

      }
    }

    sem_post(&ready_sem);
  } 
}

int 
client(void *arg) {
  int        my_pos = (uint8_t)arg;
  uint8_t    tag    = (uint8_t)my_pos;
  char	    *buf    = NULL;
  double t1, t2;
  double     sum, lat, bw_million_byte, bw_mbyte;
  int        i, k;
  int len;

  fprintf(stderr, "thread #%d\n", my_pos);
  buf = malloc(max_len);
  clear_buffer(buf, max_len);

  fill_buffer(buf, len);
  for(i = my_pos; i <= threads; i++) {
    /* Be sure all the communicating threads have been created before we start */
    while(go < i )
      sched_yield();

    for(len=1; len < max_len; len*=2){
      for(k = 0; k < warmups; k++) {
	    MPI_Request request;
#if DATA_CONTROL_ACTIVATED
	    control_buffer("sending", buf, len);
#endif
	    MPI_Send(buf, len, MPI_CHAR, (comm_rank+1)%2, tag, MPI_COMM_WORLD);

	    MPI_Recv(buf, len, MPI_CHAR, (comm_rank+1)%2, tag, MPI_COMM_WORLD, MPI_STATUS_IGNORE);
#if DATA_CONTROL_ACTIVATED
	    control_buffer("received", buf, len);
#endif
      }
  
      t1= MPI_Wtime();
    
      for(k = 0; k < loops; k++) {
        MPI_Request request;
  #if DATA_CONTROL_ACTIVATED
        control_buffer("sending", buf, len);
  #endif
        MPI_Send(buf, len, MPI_CHAR, (comm_rank+1)%2, tag, MPI_COMM_WORLD);
        MPI_Recv(buf, len, MPI_CHAR, (comm_rank+1)%2, tag, MPI_COMM_WORLD, MPI_STATUS_IGNORE);
  #if DATA_CONTROL_ACTIVATED
        control_buffer("received", buf, len);
  #endif
      }
      
      t2 = MPI_Wtime();
    
      sum = (t2 - t1)*1e6;
    
      lat	      = sum / (2 * loops);
      bw_million_byte = len * (loops / (sum / 2));
      bw_mbyte        = bw_million_byte / 1.048576;
    
      printf("[%d]\t%d\t%lf\t%8.3f\t%8.3f\n", my_pos, len, lat, bw_million_byte, bw_mbyte);
      fflush(stdout);
    }

    sem_post(&ready_sem);
  }
}
int
main(int	  argc,
     char	**argv) {
  int		 i, j;
  pthread_t    * pid;
  static sem_t bourrin_ready;
  pthread_attr_t attr;

  //len =        LEN_DEFAULT;
  loops = LOOPS_DEFAULT;
  threads =    THREADS_DEFAULT;
  warmups =    WARMUPS_DEFAULT;

  int provided;
  int needed = MPI_THREAD_MULTIPLE;
  MPI_Init_thread(&argc, &argv, needed, &provided);
  if(provided < needed){
	  fprintf(stderr, "needed: %d, provided: %d\n", needed, provided);
	  exit(0);
  }
  MPI_Comm_size(MPI_COMM_WORLD, &comm_size);
  MPI_Comm_rank(MPI_COMM_WORLD, &comm_rank);


  if (argc > 1 && !strcmp(argv[1], "--help")) {
    usage_ping();
    exit(0);
  }

  for(i=1 ; i<argc ; i+=2) {
    if (!strcmp(argv[i], "-N")) {
      loops = atoi(argv[i+1]);
    }
    else if (!strcmp(argv[i], "-L")) {
	    //len = atoi(argv[i+1]);
    }
    else if (!strcmp(argv[i], "-T")) {
      threads = atoi(argv[i+1]);
    }
    else if (!strcmp(argv[i], "-W")) {
      warmups = atoi(argv[i+1]);
    }
    else {
      fprintf(stderr, "Illegal argument %s\n", argv[i]);
      usage_ping();
      exit(0);
    }
  }

  pthread_attr_init(&attr);
  pid = malloc(sizeof(pthread_t) * threads);
  sem_init(&ready_sem, 0, 0);

  go = 0;
  for (i = 0 ; i< threads ; i++) {
    printf("[%d communicating threads]\n", i+1);
    if (comm_rank == 0) {
      pthread_create(&pid[i], &attr, (void*)server, (uint8_t)i);
    } else {
      pthread_create(&pid[i], &attr, (void*)client, (uint8_t)i);
    }

    for( j = 0; j <= i; j++){
      sem_wait(&ready_sem); 	
      go=j;
    }
    go++;
  }
  
  for(i=0;i<threads;i++)
    pthread_join(pid[i],NULL);

  MPI_Finalize();
  exit(0);
}

