<?
$subject_val = "Re: [OMPI users] Problem with OpenMPI (MX btl and mtl) and threads";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 12 11:53:03 2009" -->
<!-- isoreceived="20090612155303" -->
<!-- sent="Fri, 12 Jun 2009 17:54:27 +0200" -->
<!-- isosent="20090612155427" -->
<!-- name="Fran&#231;ois Trahay" -->
<!-- email="francois.trahay_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with OpenMPI (MX btl and mtl) and threads" -->
<!-- id="4A327A33.8000802_at_labri.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="A9A46E51-9EE3-4CE7-9701-6315208DF3A9_at_myri.com" -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>Subject:</strong> Re: [OMPI users] Problem with OpenMPI (MX btl and mtl) and threads<br>
<strong>From:</strong> Fran&#231;ois Trahay (<em>francois.trahay_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-12 11:54:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9617.php">Jeff Squyres: "Re: [OMPI users] uninstall"</a>
<li><strong>Previous message:</strong> <a href="9615.php">Scott Atchley: "Re: [OMPI users] Problem with OpenMPI (MX btl and mtl) and threads"</a>
<li><strong>In reply to:</strong> <a href="9615.php">Scott Atchley: "Re: [OMPI users] Problem with OpenMPI (MX btl and mtl) and threads"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9607.php">George Bosilca: "Re: [OMPI users] Problem with OpenMPI (MX btl and mtl) and threads"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The machines have 4 cores. The THREADS_DEFAULT corresponds to a limit: 
<br>
the program spawns threads once at a time. So at the beginning, only one 
<br>
thread performs the ping pong test, then a thread is created and the two 
<br>
threads run the ping pong test, then a thread is created and 3 threads 
<br>
run the test, etc.
<br>
<p>If your machines have 2 cores, you should set THREADS_DEFAULT to 2, so 
<br>
that the machines are not overloaded.
<br>
<p>In my case (machines with 4 cores), THREADS_DEFAULT is set to 16 in 
<br>
order to study the behavior of the MPI implementation in an extreme 
<br>
case. However, TCP seems to handle the concurrency quite fine up to 8 
<br>
threads. Then, it tends to crash/hang (I guess the problem of 
<br>
overloading cpu has not been studied deeply in OpenMPI)
<br>
<p>Francois
<br>
<p><p>Scott Atchley wrote:
<br>
<span class="quotelev1">&gt; Francois,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; How many cores do your machines have?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The file specifies THREADS_DEFAULT 16. Does this spawn 16 threads per 
</span><br>
<span class="quotelev1">&gt; MPI rank?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I see crashes when I run this with MX (BTL with mx,sm,self and MTL). 
</span><br>
<span class="quotelev1">&gt; If I change THREADS_DEFAULT to 4, I see crashes with TCP (BTL with 
</span><br>
<span class="quotelev1">&gt; tcp,sm,self) as well.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; With THREADS_DEFAULT at 16, TCP seems to hang. I only have 2 cores, 
</span><br>
<span class="quotelev1">&gt; which mmay be why. :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Scott
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 12, 2009, at 3:09 AM, Fran&#231;ois Trahay wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here's the program.
</span><br>
<span class="quotelev2">&gt;&gt; It should print something like that:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [1 communicating threads]
</span><br>
<span class="quotelev2">&gt;&gt; [0]     1       2.484936           0.402           0.384
</span><br>
<span class="quotelev2">&gt;&gt; [0]     2       2.478036           0.807           0.770
</span><br>
<span class="quotelev2">&gt;&gt; [0]     4       2.501503           1.599           1.525
</span><br>
<span class="quotelev2">&gt;&gt; [0]     8       2.497516           3.203           3.055
</span><br>
<span class="quotelev2">&gt;&gt; thread #1
</span><br>
<span class="quotelev2">&gt;&gt; [2 communicating threads]
</span><br>
<span class="quotelev2">&gt;&gt; [0]     1       3.970628           0.252           0.240
</span><br>
<span class="quotelev2">&gt;&gt; [1]     1       3.929280           0.254           0.243
</span><br>
<span class="quotelev2">&gt;&gt; [1]     2       4.087206           0.489           0.467
</span><br>
<span class="quotelev2">&gt;&gt; [0]     2       5.181758           0.386           0.368
</span><br>
<span class="quotelev2">&gt;&gt; [1]     4       3.715222           1.077           1.027
</span><br>
<span class="quotelev2">&gt;&gt; [0]     4       4.358013           0.918           0.875
</span><br>
<span class="quotelev2">&gt;&gt; [1]     8       4.166852           1.920           1.831
</span><br>
<span class="quotelev2">&gt;&gt; [0]     8       3.628287           2.205           2.103
</span><br>
<span class="quotelev2">&gt;&gt; thread #2
</span><br>
<span class="quotelev2">&gt;&gt; [3 communicating threads]
</span><br>
<span class="quotelev2">&gt;&gt; [0]     1       5.922241           0.169           0.161
</span><br>
<span class="quotelev2">&gt;&gt; [2]     1       6.896299           0.145           0.138
</span><br>
<span class="quotelev2">&gt;&gt; [1]     1       8.973834           0.111           0.106
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Francois
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; George Bosilca wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I will take a look at the BTL problem. Can you provide a copy of the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; benchmarks please.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    george.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jun 11, 2009, at 16:05 , Fran&#231;ois Trahay wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; concurrent_ping
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /*
</span><br>
<span class="quotelev2">&gt;&gt; * NewMadeleine
</span><br>
<span class="quotelev2">&gt;&gt; * Copyright (C) 2006 (see AUTHORS file)
</span><br>
<span class="quotelev2">&gt;&gt; *
</span><br>
<span class="quotelev2">&gt;&gt; * This program is free software; you can redistribute it and/or modify
</span><br>
<span class="quotelev2">&gt;&gt; * it under the terms of the GNU General Public License as published by
</span><br>
<span class="quotelev2">&gt;&gt; * the Free Software Foundation; either version 2 of the License, or (at
</span><br>
<span class="quotelev2">&gt;&gt; * your option) any later version.
</span><br>
<span class="quotelev2">&gt;&gt; *
</span><br>
<span class="quotelev2">&gt;&gt; * This program is distributed in the hope that it will be useful, but
</span><br>
<span class="quotelev2">&gt;&gt; * WITHOUT ANY WARRANTY; without even the implied warranty of
</span><br>
<span class="quotelev2">&gt;&gt; * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
</span><br>
<span class="quotelev2">&gt;&gt; * General Public License for more details.
</span><br>
<span class="quotelev2">&gt;&gt; */
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;stdint.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;string.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;unistd.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;semaphore.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;sched.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /* This program performs several ping pong in parallel.
</span><br>
<span class="quotelev2">&gt;&gt; * This evaluates the efficienty to access nmad from 1, 2, 3, ...n 
</span><br>
<span class="quotelev2">&gt;&gt; threads simultanously
</span><br>
<span class="quotelev2">&gt;&gt; */
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #define LEN_DEFAULT      4
</span><br>
<span class="quotelev2">&gt;&gt; #define WARMUPS_DEFAULT    1000
</span><br>
<span class="quotelev2">&gt;&gt; #define LOOPS_DEFAULT    10000
</span><br>
<span class="quotelev2">&gt;&gt; #define THREADS_DEFAULT 16
</span><br>
<span class="quotelev2">&gt;&gt; #define DATA_CONTROL_ACTIVATED 0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; static int    comm_rank    = -1;
</span><br>
<span class="quotelev2">&gt;&gt; static int    comm_size    = -1;
</span><br>
<span class="quotelev2">&gt;&gt; static char    host_name[1024]    = &quot;&quot;;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; static int       max_len   =  16;
</span><br>
<span class="quotelev2">&gt;&gt; static int     loops;
</span><br>
<span class="quotelev2">&gt;&gt; static int       threads;
</span><br>
<span class="quotelev2">&gt;&gt; static int       warmups;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; static sem_t ready_sem;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; static int go;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; static __inline__
</span><br>
<span class="quotelev2">&gt;&gt; uint32_t _next(uint32_t len, uint32_t multiplier, uint32_t increment)
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;  if (!len)
</span><br>
<span class="quotelev2">&gt;&gt;    return 1+increment;
</span><br>
<span class="quotelev2">&gt;&gt;  else
</span><br>
<span class="quotelev2">&gt;&gt;    return len*multiplier+increment;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; void usage_ping() {
</span><br>
<span class="quotelev2">&gt;&gt;  fprintf(stderr, &quot;-L len - packet length [%d]\n&quot;, LEN_DEFAULT);
</span><br>
<span class="quotelev2">&gt;&gt;  fprintf(stderr, &quot;-N iterations - iterations [%d]\n&quot;, LOOPS_DEFAULT);
</span><br>
<span class="quotelev2">&gt;&gt;  fprintf(stderr, &quot;-T thread - number of communicating threads 
</span><br>
<span class="quotelev2">&gt;&gt; [%d]\n&quot;, THREADS_DEFAULT);
</span><br>
<span class="quotelev2">&gt;&gt;  fprintf(stderr, &quot;-W warmup - number of warmup iterations [%d]\n&quot;, 
</span><br>
<span class="quotelev2">&gt;&gt; WARMUPS_DEFAULT);
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; static void fill_buffer(char *buffer, int len) {
</span><br>
<span class="quotelev2">&gt;&gt;  unsigned int i = 0;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  for (i = 0; i &lt; len; i++) {
</span><br>
<span class="quotelev2">&gt;&gt;    buffer[i] = 'a'+(i%26);
</span><br>
<span class="quotelev2">&gt;&gt;  }
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; static void clear_buffer(char *buffer, int len) {
</span><br>
<span class="quotelev2">&gt;&gt;  memset(buffer, 0, len);
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #if DATA_CONTROL_ACTIVATED
</span><br>
<span class="quotelev2">&gt;&gt; static void control_buffer(char *msg, char *buffer, int len) {
</span><br>
<span class="quotelev2">&gt;&gt;  tbx_bool_t   ok = tbx_true;
</span><br>
<span class="quotelev2">&gt;&gt;  unsigned char expected_char;
</span><br>
<span class="quotelev2">&gt;&gt;  unsigned int          i  = 0;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  for(i = 0; i &lt; len; i++){
</span><br>
<span class="quotelev2">&gt;&gt;    expected_char = 'a'+(i%26);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    if(buffer[i] != expected_char){
</span><br>
<span class="quotelev2">&gt;&gt;      printf(&quot;Bad data at byte %d: expected %c, received %c\n&quot;,
</span><br>
<span class="quotelev2">&gt;&gt;             i, expected_char, buffer[i]);
</span><br>
<span class="quotelev2">&gt;&gt;      ok = tbx_false;
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt;  }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  if (!ok) {
</span><br>
<span class="quotelev2">&gt;&gt;    printf(&quot;Controling %s - &quot;, msg);
</span><br>
<span class="quotelev2">&gt;&gt;    printf(&quot;%d bytes reception failed\n&quot;, len);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    TBX_FAILURE(&quot;data corruption&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;  } else {
</span><br>
<span class="quotelev2">&gt;&gt;    printf(&quot;ok\n&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;  }
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; #endif
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; void
</span><br>
<span class="quotelev2">&gt;&gt; server(void* arg) {
</span><br>
<span class="quotelev2">&gt;&gt;  int    my_pos = (uint8_t)arg;
</span><br>
<span class="quotelev2">&gt;&gt;  char    *buf    = NULL;
</span><br>
<span class="quotelev2">&gt;&gt;  uint8_t tag   = (uint8_t)arg;
</span><br>
<span class="quotelev2">&gt;&gt;  int    i, k;
</span><br>
<span class="quotelev2">&gt;&gt;  int len;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  buf = malloc(max_len);
</span><br>
<span class="quotelev2">&gt;&gt;  clear_buffer(buf, max_len);
</span><br>
<span class="quotelev2">&gt;&gt;  for(i = my_pos; i &lt;= threads; i++) {
</span><br>
<span class="quotelev2">&gt;&gt;    /* Be sure all the communicating threads have been created before 
</span><br>
<span class="quotelev2">&gt;&gt; we start */
</span><br>
<span class="quotelev2">&gt;&gt;    while(go &lt; i )
</span><br>
<span class="quotelev2">&gt;&gt;      sched_yield();
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    for(len=1; len &lt; max_len; len*=2){
</span><br>
<span class="quotelev2">&gt;&gt;      for(k = 0; k &lt; loops + warmups; k++) {
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      MPI_Request request;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      MPI_Recv(buf, len, MPI_CHAR, (comm_rank+1)%2, tag, 
</span><br>
<span class="quotelev2">&gt;&gt; MPI_COMM_WORLD, MPI_STATUS_IGNORE);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #if DATA_CONTROL_ACTIVATED
</span><br>
<span class="quotelev2">&gt;&gt;      control_buffer(&quot;received&quot;, buf, len);
</span><br>
<span class="quotelev2">&gt;&gt; #endif
</span><br>
<span class="quotelev2">&gt;&gt;      MPI_Send(buf, len , MPI_CHAR, (comm_rank+1)%2, tag, 
</span><br>
<span class="quotelev2">&gt;&gt; MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      }
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    sem_post(&amp;ready_sem);
</span><br>
<span class="quotelev2">&gt;&gt;  }
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; int
</span><br>
<span class="quotelev2">&gt;&gt; client(void *arg) {
</span><br>
<span class="quotelev2">&gt;&gt;  int        my_pos = (uint8_t)arg;
</span><br>
<span class="quotelev2">&gt;&gt;  uint8_t    tag    = (uint8_t)my_pos;
</span><br>
<span class="quotelev2">&gt;&gt;  char        *buf    = NULL;
</span><br>
<span class="quotelev2">&gt;&gt;  double t1, t2;
</span><br>
<span class="quotelev2">&gt;&gt;  double     sum, lat, bw_million_byte, bw_mbyte;
</span><br>
<span class="quotelev2">&gt;&gt;  int        i, k;
</span><br>
<span class="quotelev2">&gt;&gt;  int len;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  fprintf(stderr, &quot;thread #%d\n&quot;, my_pos);
</span><br>
<span class="quotelev2">&gt;&gt;  buf = malloc(max_len);
</span><br>
<span class="quotelev2">&gt;&gt;  clear_buffer(buf, max_len);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  fill_buffer(buf, len);
</span><br>
<span class="quotelev2">&gt;&gt;  for(i = my_pos; i &lt;= threads; i++) {
</span><br>
<span class="quotelev2">&gt;&gt;    /* Be sure all the communicating threads have been created before 
</span><br>
<span class="quotelev2">&gt;&gt; we start */
</span><br>
<span class="quotelev2">&gt;&gt;    while(go &lt; i )
</span><br>
<span class="quotelev2">&gt;&gt;      sched_yield();
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    for(len=1; len &lt; max_len; len*=2){
</span><br>
<span class="quotelev2">&gt;&gt;      for(k = 0; k &lt; warmups; k++) {
</span><br>
<span class="quotelev2">&gt;&gt;         MPI_Request request;
</span><br>
<span class="quotelev2">&gt;&gt; #if DATA_CONTROL_ACTIVATED
</span><br>
<span class="quotelev2">&gt;&gt;         control_buffer(&quot;sending&quot;, buf, len);
</span><br>
<span class="quotelev2">&gt;&gt; #endif
</span><br>
<span class="quotelev2">&gt;&gt;         MPI_Send(buf, len, MPI_CHAR, (comm_rank+1)%2, tag, 
</span><br>
<span class="quotelev2">&gt;&gt; MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         MPI_Recv(buf, len, MPI_CHAR, (comm_rank+1)%2, tag, 
</span><br>
<span class="quotelev2">&gt;&gt; MPI_COMM_WORLD, MPI_STATUS_IGNORE);
</span><br>
<span class="quotelev2">&gt;&gt; #if DATA_CONTROL_ACTIVATED
</span><br>
<span class="quotelev2">&gt;&gt;         control_buffer(&quot;received&quot;, buf, len);
</span><br>
<span class="quotelev2">&gt;&gt; #endif
</span><br>
<span class="quotelev2">&gt;&gt;      }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      t1= MPI_Wtime();
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      for(k = 0; k &lt; loops; k++) {
</span><br>
<span class="quotelev2">&gt;&gt;        MPI_Request request;
</span><br>
<span class="quotelev2">&gt;&gt;  #if DATA_CONTROL_ACTIVATED
</span><br>
<span class="quotelev2">&gt;&gt;        control_buffer(&quot;sending&quot;, buf, len);
</span><br>
<span class="quotelev2">&gt;&gt;  #endif
</span><br>
<span class="quotelev2">&gt;&gt;        MPI_Send(buf, len, MPI_CHAR, (comm_rank+1)%2, tag, 
</span><br>
<span class="quotelev2">&gt;&gt; MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt;&gt;        MPI_Recv(buf, len, MPI_CHAR, (comm_rank+1)%2, tag, 
</span><br>
<span class="quotelev2">&gt;&gt; MPI_COMM_WORLD, MPI_STATUS_IGNORE);
</span><br>
<span class="quotelev2">&gt;&gt;  #if DATA_CONTROL_ACTIVATED
</span><br>
<span class="quotelev2">&gt;&gt;        control_buffer(&quot;received&quot;, buf, len);
</span><br>
<span class="quotelev2">&gt;&gt;  #endif
</span><br>
<span class="quotelev2">&gt;&gt;      }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      t2 = MPI_Wtime();
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      sum = (t2 - t1)*1e6;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      lat          = sum / (2 * loops);
</span><br>
<span class="quotelev2">&gt;&gt;      bw_million_byte = len * (loops / (sum / 2));
</span><br>
<span class="quotelev2">&gt;&gt;      bw_mbyte        = bw_million_byte / 1.048576;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      printf(&quot;[%d]\t%d\t%lf\t%8.3f\t%8.3f\n&quot;, my_pos, len, lat, 
</span><br>
<span class="quotelev2">&gt;&gt; bw_million_byte, bw_mbyte);
</span><br>
<span class="quotelev2">&gt;&gt;      fflush(stdout);
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    sem_post(&amp;ready_sem);
</span><br>
<span class="quotelev2">&gt;&gt;  }
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; int
</span><br>
<span class="quotelev2">&gt;&gt; main(int      argc,
</span><br>
<span class="quotelev2">&gt;&gt;     char    **argv) {
</span><br>
<span class="quotelev2">&gt;&gt;  int         i, j;
</span><br>
<span class="quotelev2">&gt;&gt;  pthread_t    * pid;
</span><br>
<span class="quotelev2">&gt;&gt;  static sem_t bourrin_ready;
</span><br>
<span class="quotelev2">&gt;&gt;  pthread_attr_t attr;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  //len =        LEN_DEFAULT;
</span><br>
<span class="quotelev2">&gt;&gt;  loops = LOOPS_DEFAULT;
</span><br>
<span class="quotelev2">&gt;&gt;  threads =    THREADS_DEFAULT;
</span><br>
<span class="quotelev2">&gt;&gt;  warmups =    WARMUPS_DEFAULT;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  int provided;
</span><br>
<span class="quotelev2">&gt;&gt;  int needed = MPI_THREAD_MULTIPLE;
</span><br>
<span class="quotelev2">&gt;&gt;  MPI_Init_thread(&amp;argc, &amp;argv, needed, &amp;provided);
</span><br>
<span class="quotelev2">&gt;&gt;  if(provided &lt; needed){
</span><br>
<span class="quotelev2">&gt;&gt;       fprintf(stderr, &quot;needed: %d, provided: %d\n&quot;, needed, provided);
</span><br>
<span class="quotelev2">&gt;&gt;       exit(0);
</span><br>
<span class="quotelev2">&gt;&gt;  }
</span><br>
<span class="quotelev2">&gt;&gt;  MPI_Comm_size(MPI_COMM_WORLD, &amp;comm_size);
</span><br>
<span class="quotelev2">&gt;&gt;  MPI_Comm_rank(MPI_COMM_WORLD, &amp;comm_rank);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  if (argc &gt; 1 &amp;&amp; !strcmp(argv[1], &quot;--help&quot;)) {
</span><br>
<span class="quotelev2">&gt;&gt;    usage_ping();
</span><br>
<span class="quotelev2">&gt;&gt;    exit(0);
</span><br>
<span class="quotelev2">&gt;&gt;  }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  for(i=1 ; i&lt;argc ; i+=2) {
</span><br>
<span class="quotelev2">&gt;&gt;    if (!strcmp(argv[i], &quot;-N&quot;)) {
</span><br>
<span class="quotelev2">&gt;&gt;      loops = atoi(argv[i+1]);
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt;    else if (!strcmp(argv[i], &quot;-L&quot;)) {
</span><br>
<span class="quotelev2">&gt;&gt;         //len = atoi(argv[i+1]);
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt;    else if (!strcmp(argv[i], &quot;-T&quot;)) {
</span><br>
<span class="quotelev2">&gt;&gt;      threads = atoi(argv[i+1]);
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt;    else if (!strcmp(argv[i], &quot;-W&quot;)) {
</span><br>
<span class="quotelev2">&gt;&gt;      warmups = atoi(argv[i+1]);
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt;    else {
</span><br>
<span class="quotelev2">&gt;&gt;      fprintf(stderr, &quot;Illegal argument %s\n&quot;, argv[i]);
</span><br>
<span class="quotelev2">&gt;&gt;      usage_ping();
</span><br>
<span class="quotelev2">&gt;&gt;      exit(0);
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt;  }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  pthread_attr_init(&amp;attr);
</span><br>
<span class="quotelev2">&gt;&gt;  pid = malloc(sizeof(pthread_t) * threads);
</span><br>
<span class="quotelev2">&gt;&gt;  sem_init(&amp;ready_sem, 0, 0);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  go = 0;
</span><br>
<span class="quotelev2">&gt;&gt;  for (i = 0 ; i&lt; threads ; i++) {
</span><br>
<span class="quotelev2">&gt;&gt;    printf(&quot;[%d communicating threads]\n&quot;, i+1);
</span><br>
<span class="quotelev2">&gt;&gt;    if (comm_rank == 0) {
</span><br>
<span class="quotelev2">&gt;&gt;      pthread_create(&amp;pid[i], &amp;attr, (void*)server, (uint8_t)i);
</span><br>
<span class="quotelev2">&gt;&gt;    } else {
</span><br>
<span class="quotelev2">&gt;&gt;      pthread_create(&amp;pid[i], &amp;attr, (void*)client, (uint8_t)i);
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    for( j = 0; j &lt;= i; j++){
</span><br>
<span class="quotelev2">&gt;&gt;      sem_wait(&amp;ready_sem);    
</span><br>
<span class="quotelev2">&gt;&gt;      go=j;
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt;    go++;
</span><br>
<span class="quotelev2">&gt;&gt;  }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  for(i=0;i&lt;threads;i++)
</span><br>
<span class="quotelev2">&gt;&gt;    pthread_join(pid[i],NULL);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  MPI_Finalize();
</span><br>
<span class="quotelev2">&gt;&gt;  exit(0);
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9617.php">Jeff Squyres: "Re: [OMPI users] uninstall"</a>
<li><strong>Previous message:</strong> <a href="9615.php">Scott Atchley: "Re: [OMPI users] Problem with OpenMPI (MX btl and mtl) and threads"</a>
<li><strong>In reply to:</strong> <a href="9615.php">Scott Atchley: "Re: [OMPI users] Problem with OpenMPI (MX btl and mtl) and threads"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9607.php">George Bosilca: "Re: [OMPI users] Problem with OpenMPI (MX btl and mtl) and threads"</a>
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>
