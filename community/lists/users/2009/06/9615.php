<?
$subject_val = "Re: [OMPI users] Problem with OpenMPI (MX btl and mtl) and threads";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 12 10:49:40 2009" -->
<!-- isoreceived="20090612144940" -->
<!-- sent="Fri, 12 Jun 2009 10:49:26 -0400" -->
<!-- isosent="20090612144926" -->
<!-- name="Scott Atchley" -->
<!-- email="atchley_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with OpenMPI (MX btl and mtl) and threads" -->
<!-- id="A9A46E51-9EE3-4CE7-9701-6315208DF3A9_at_myri.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4A31FF12.9070909_at_labri.fr" -->
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
<strong>From:</strong> Scott Atchley (<em>atchley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-12 10:49:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9616.php">François Trahay: "Re: [OMPI users] Problem with OpenMPI (MX btl and mtl) and threads"</a>
<li><strong>Previous message:</strong> <a href="9614.php">Fran&#231;ois Trahay: "Re: [OMPI users] Problem with OpenMPI (MX btl and mtl) and threads"</a>
<li><strong>In reply to:</strong> <a href="9614.php">Fran&#231;ois Trahay: "Re: [OMPI users] Problem with OpenMPI (MX btl and mtl) and threads"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9616.php">François Trahay: "Re: [OMPI users] Problem with OpenMPI (MX btl and mtl) and threads"</a>
<li><strong>Reply:</strong> <a href="9616.php">François Trahay: "Re: [OMPI users] Problem with OpenMPI (MX btl and mtl) and threads"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Francois,
<br>
<p>How many cores do your machines have?
<br>
<p>The file specifies THREADS_DEFAULT 16. Does this spawn 16 threads per  
<br>
MPI rank?
<br>
<p>I see crashes when I run this with MX (BTL with mx,sm,self and MTL).  
<br>
If I change THREADS_DEFAULT to 4, I see crashes with TCP (BTL with  
<br>
tcp,sm,self) as well.
<br>
<p>With THREADS_DEFAULT at 16, TCP seems to hang. I only have 2 cores,  
<br>
which mmay be why. :-)
<br>
<p>Scott
<br>
<p>On Jun 12, 2009, at 3:09 AM, Fran&#231;ois Trahay wrote:
<br>
<p><span class="quotelev1">&gt; Here's the program.
</span><br>
<span class="quotelev1">&gt; It should print something like that:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [1 communicating threads]
</span><br>
<span class="quotelev1">&gt; [0]     1       2.484936           0.402           0.384
</span><br>
<span class="quotelev1">&gt; [0]     2       2.478036           0.807           0.770
</span><br>
<span class="quotelev1">&gt; [0]     4       2.501503           1.599           1.525
</span><br>
<span class="quotelev1">&gt; [0]     8       2.497516           3.203           3.055
</span><br>
<span class="quotelev1">&gt; thread #1
</span><br>
<span class="quotelev1">&gt; [2 communicating threads]
</span><br>
<span class="quotelev1">&gt; [0]     1       3.970628           0.252           0.240
</span><br>
<span class="quotelev1">&gt; [1]     1       3.929280           0.254           0.243
</span><br>
<span class="quotelev1">&gt; [1]     2       4.087206           0.489           0.467
</span><br>
<span class="quotelev1">&gt; [0]     2       5.181758           0.386           0.368
</span><br>
<span class="quotelev1">&gt; [1]     4       3.715222           1.077           1.027
</span><br>
<span class="quotelev1">&gt; [0]     4       4.358013           0.918           0.875
</span><br>
<span class="quotelev1">&gt; [1]     8       4.166852           1.920           1.831
</span><br>
<span class="quotelev1">&gt; [0]     8       3.628287           2.205           2.103
</span><br>
<span class="quotelev1">&gt; thread #2
</span><br>
<span class="quotelev1">&gt; [3 communicating threads]
</span><br>
<span class="quotelev1">&gt; [0]     1       5.922241           0.169           0.161
</span><br>
<span class="quotelev1">&gt; [2]     1       6.896299           0.145           0.138
</span><br>
<span class="quotelev1">&gt; [1]     1       8.973834           0.111           0.106
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Francois
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I will take a look at the BTL problem. Can you provide a copy of  
</span><br>
<span class="quotelev2">&gt;&gt; the benchmarks please.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;    george.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 11, 2009, at 16:05 , Fran&#231;ois Trahay wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; concurrent_ping
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /*
</span><br>
<span class="quotelev1">&gt; * NewMadeleine
</span><br>
<span class="quotelev1">&gt; * Copyright (C) 2006 (see AUTHORS file)
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; * This program is free software; you can redistribute it and/or modify
</span><br>
<span class="quotelev1">&gt; * it under the terms of the GNU General Public License as published by
</span><br>
<span class="quotelev1">&gt; * the Free Software Foundation; either version 2 of the License, or  
</span><br>
<span class="quotelev1">&gt; (at
</span><br>
<span class="quotelev1">&gt; * your option) any later version.
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; * This program is distributed in the hope that it will be useful, but
</span><br>
<span class="quotelev1">&gt; * WITHOUT ANY WARRANTY; without even the implied warranty of
</span><br>
<span class="quotelev1">&gt; * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
</span><br>
<span class="quotelev1">&gt; * General Public License for more details.
</span><br>
<span class="quotelev1">&gt; */
</span><br>
<span class="quotelev1">&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdint.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;string.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;unistd.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;semaphore.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;sched.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /* This program performs several ping pong in parallel.
</span><br>
<span class="quotelev1">&gt; * This evaluates the efficienty to access nmad from 1, 2, 3, ...n  
</span><br>
<span class="quotelev1">&gt; threads simultanously
</span><br>
<span class="quotelev1">&gt; */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #define LEN_DEFAULT      4
</span><br>
<span class="quotelev1">&gt; #define WARMUPS_DEFAULT	1000
</span><br>
<span class="quotelev1">&gt; #define LOOPS_DEFAULT	10000
</span><br>
<span class="quotelev1">&gt; #define THREADS_DEFAULT 16
</span><br>
<span class="quotelev1">&gt; #define DATA_CONTROL_ACTIVATED 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; static int	comm_rank	= -1;
</span><br>
<span class="quotelev1">&gt; static int	comm_size	= -1;
</span><br>
<span class="quotelev1">&gt; static char	host_name[1024]	= &quot;&quot;;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; static int       max_len   =  16;
</span><br>
<span class="quotelev1">&gt; static int	 loops;
</span><br>
<span class="quotelev1">&gt; static int       threads;
</span><br>
<span class="quotelev1">&gt; static int       warmups;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; static sem_t ready_sem;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; static int go;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; static __inline__
</span><br>
<span class="quotelev1">&gt; uint32_t _next(uint32_t len, uint32_t multiplier, uint32_t increment)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;  if (!len)
</span><br>
<span class="quotelev1">&gt;    return 1+increment;
</span><br>
<span class="quotelev1">&gt;  else
</span><br>
<span class="quotelev1">&gt;    return len*multiplier+increment;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; void usage_ping() {
</span><br>
<span class="quotelev1">&gt;  fprintf(stderr, &quot;-L len - packet length [%d]\n&quot;, LEN_DEFAULT);
</span><br>
<span class="quotelev1">&gt;  fprintf(stderr, &quot;-N iterations - iterations [%d]\n&quot;, LOOPS_DEFAULT);
</span><br>
<span class="quotelev1">&gt;  fprintf(stderr, &quot;-T thread - number of communicating threads [%d] 
</span><br>
<span class="quotelev1">&gt; \n&quot;, THREADS_DEFAULT);
</span><br>
<span class="quotelev1">&gt;  fprintf(stderr, &quot;-W warmup - number of warmup iterations [%d]\n&quot;,  
</span><br>
<span class="quotelev1">&gt; WARMUPS_DEFAULT);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; static void fill_buffer(char *buffer, int len) {
</span><br>
<span class="quotelev1">&gt;  unsigned int i = 0;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  for (i = 0; i &lt; len; i++) {
</span><br>
<span class="quotelev1">&gt;    buffer[i] = 'a'+(i%26);
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; static void clear_buffer(char *buffer, int len) {
</span><br>
<span class="quotelev1">&gt;  memset(buffer, 0, len);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #if DATA_CONTROL_ACTIVATED
</span><br>
<span class="quotelev1">&gt; static void control_buffer(char *msg, char *buffer, int len) {
</span><br>
<span class="quotelev1">&gt;  tbx_bool_t   ok = tbx_true;
</span><br>
<span class="quotelev1">&gt;  unsigned char expected_char;
</span><br>
<span class="quotelev1">&gt;  unsigned int          i  = 0;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  for(i = 0; i &lt; len; i++){
</span><br>
<span class="quotelev1">&gt;    expected_char = 'a'+(i%26);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    if(buffer[i] != expected_char){
</span><br>
<span class="quotelev1">&gt;      printf(&quot;Bad data at byte %d: expected %c, received %c\n&quot;,
</span><br>
<span class="quotelev1">&gt;             i, expected_char, buffer[i]);
</span><br>
<span class="quotelev1">&gt;      ok = tbx_false;
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  if (!ok) {
</span><br>
<span class="quotelev1">&gt;    printf(&quot;Controling %s - &quot;, msg);
</span><br>
<span class="quotelev1">&gt;    printf(&quot;%d bytes reception failed\n&quot;, len);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    TBX_FAILURE(&quot;data corruption&quot;);
</span><br>
<span class="quotelev1">&gt;  } else {
</span><br>
<span class="quotelev1">&gt;    printf(&quot;ok\n&quot;);
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; void
</span><br>
<span class="quotelev1">&gt; server(void* arg) {
</span><br>
<span class="quotelev1">&gt;  int    my_pos = (uint8_t)arg;
</span><br>
<span class="quotelev1">&gt;  char	*buf	= NULL;
</span><br>
<span class="quotelev1">&gt;  uint8_t tag   = (uint8_t)arg;
</span><br>
<span class="quotelev1">&gt;  int    i, k;
</span><br>
<span class="quotelev1">&gt;  int len;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  buf = malloc(max_len);
</span><br>
<span class="quotelev1">&gt;  clear_buffer(buf, max_len);
</span><br>
<span class="quotelev1">&gt;  for(i = my_pos; i &lt;= threads; i++) {
</span><br>
<span class="quotelev1">&gt;    /* Be sure all the communicating threads have been created before  
</span><br>
<span class="quotelev1">&gt; we start */
</span><br>
<span class="quotelev1">&gt;    while(go &lt; i )
</span><br>
<span class="quotelev1">&gt;      sched_yield();
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    for(len=1; len &lt; max_len; len*=2){
</span><br>
<span class="quotelev1">&gt;      for(k = 0; k &lt; loops + warmups; k++) {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      MPI_Request request;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      MPI_Recv(buf, len, MPI_CHAR, (comm_rank+1)%2, tag,  
</span><br>
<span class="quotelev1">&gt; MPI_COMM_WORLD, MPI_STATUS_IGNORE);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #if DATA_CONTROL_ACTIVATED
</span><br>
<span class="quotelev1">&gt;      control_buffer(&quot;received&quot;, buf, len);
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt;      MPI_Send(buf, len , MPI_CHAR, (comm_rank+1)%2, tag,  
</span><br>
<span class="quotelev1">&gt; MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    sem_post(&amp;ready_sem);
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int
</span><br>
<span class="quotelev1">&gt; client(void *arg) {
</span><br>
<span class="quotelev1">&gt;  int        my_pos = (uint8_t)arg;
</span><br>
<span class="quotelev1">&gt;  uint8_t    tag    = (uint8_t)my_pos;
</span><br>
<span class="quotelev1">&gt;  char	    *buf    = NULL;
</span><br>
<span class="quotelev1">&gt;  double t1, t2;
</span><br>
<span class="quotelev1">&gt;  double     sum, lat, bw_million_byte, bw_mbyte;
</span><br>
<span class="quotelev1">&gt;  int        i, k;
</span><br>
<span class="quotelev1">&gt;  int len;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  fprintf(stderr, &quot;thread #%d\n&quot;, my_pos);
</span><br>
<span class="quotelev1">&gt;  buf = malloc(max_len);
</span><br>
<span class="quotelev1">&gt;  clear_buffer(buf, max_len);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  fill_buffer(buf, len);
</span><br>
<span class="quotelev1">&gt;  for(i = my_pos; i &lt;= threads; i++) {
</span><br>
<span class="quotelev1">&gt;    /* Be sure all the communicating threads have been created before  
</span><br>
<span class="quotelev1">&gt; we start */
</span><br>
<span class="quotelev1">&gt;    while(go &lt; i )
</span><br>
<span class="quotelev1">&gt;      sched_yield();
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    for(len=1; len &lt; max_len; len*=2){
</span><br>
<span class="quotelev1">&gt;      for(k = 0; k &lt; warmups; k++) {
</span><br>
<span class="quotelev1">&gt; 	    MPI_Request request;
</span><br>
<span class="quotelev1">&gt; #if DATA_CONTROL_ACTIVATED
</span><br>
<span class="quotelev1">&gt; 	    control_buffer(&quot;sending&quot;, buf, len);
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt; 	    MPI_Send(buf, len, MPI_CHAR, (comm_rank+1)%2, tag,  
</span><br>
<span class="quotelev1">&gt; MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	    MPI_Recv(buf, len, MPI_CHAR, (comm_rank+1)%2, tag,  
</span><br>
<span class="quotelev1">&gt; MPI_COMM_WORLD, MPI_STATUS_IGNORE);
</span><br>
<span class="quotelev1">&gt; #if DATA_CONTROL_ACTIVATED
</span><br>
<span class="quotelev1">&gt; 	    control_buffer(&quot;received&quot;, buf, len);
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      t1= MPI_Wtime();
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      for(k = 0; k &lt; loops; k++) {
</span><br>
<span class="quotelev1">&gt;        MPI_Request request;
</span><br>
<span class="quotelev1">&gt;  #if DATA_CONTROL_ACTIVATED
</span><br>
<span class="quotelev1">&gt;        control_buffer(&quot;sending&quot;, buf, len);
</span><br>
<span class="quotelev1">&gt;  #endif
</span><br>
<span class="quotelev1">&gt;        MPI_Send(buf, len, MPI_CHAR, (comm_rank+1)%2, tag,  
</span><br>
<span class="quotelev1">&gt; MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;        MPI_Recv(buf, len, MPI_CHAR, (comm_rank+1)%2, tag,  
</span><br>
<span class="quotelev1">&gt; MPI_COMM_WORLD, MPI_STATUS_IGNORE);
</span><br>
<span class="quotelev1">&gt;  #if DATA_CONTROL_ACTIVATED
</span><br>
<span class="quotelev1">&gt;        control_buffer(&quot;received&quot;, buf, len);
</span><br>
<span class="quotelev1">&gt;  #endif
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      t2 = MPI_Wtime();
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      sum = (t2 - t1)*1e6;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      lat	      = sum / (2 * loops);
</span><br>
<span class="quotelev1">&gt;      bw_million_byte = len * (loops / (sum / 2));
</span><br>
<span class="quotelev1">&gt;      bw_mbyte        = bw_million_byte / 1.048576;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      printf(&quot;[%d]\t%d\t%lf\t%8.3f\t%8.3f\n&quot;, my_pos, len, lat,  
</span><br>
<span class="quotelev1">&gt; bw_million_byte, bw_mbyte);
</span><br>
<span class="quotelev1">&gt;      fflush(stdout);
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    sem_post(&amp;ready_sem);
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; int
</span><br>
<span class="quotelev1">&gt; main(int	  argc,
</span><br>
<span class="quotelev1">&gt;     char	**argv) {
</span><br>
<span class="quotelev1">&gt;  int		 i, j;
</span><br>
<span class="quotelev1">&gt;  pthread_t    * pid;
</span><br>
<span class="quotelev1">&gt;  static sem_t bourrin_ready;
</span><br>
<span class="quotelev1">&gt;  pthread_attr_t attr;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  //len =        LEN_DEFAULT;
</span><br>
<span class="quotelev1">&gt;  loops = LOOPS_DEFAULT;
</span><br>
<span class="quotelev1">&gt;  threads =    THREADS_DEFAULT;
</span><br>
<span class="quotelev1">&gt;  warmups =    WARMUPS_DEFAULT;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  int provided;
</span><br>
<span class="quotelev1">&gt;  int needed = MPI_THREAD_MULTIPLE;
</span><br>
<span class="quotelev1">&gt;  MPI_Init_thread(&amp;argc, &amp;argv, needed, &amp;provided);
</span><br>
<span class="quotelev1">&gt;  if(provided &lt; needed){
</span><br>
<span class="quotelev1">&gt; 	  fprintf(stderr, &quot;needed: %d, provided: %d\n&quot;, needed, provided);
</span><br>
<span class="quotelev1">&gt; 	  exit(0);
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;  MPI_Comm_size(MPI_COMM_WORLD, &amp;comm_size);
</span><br>
<span class="quotelev1">&gt;  MPI_Comm_rank(MPI_COMM_WORLD, &amp;comm_rank);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  if (argc &gt; 1 &amp;&amp; !strcmp(argv[1], &quot;--help&quot;)) {
</span><br>
<span class="quotelev1">&gt;    usage_ping();
</span><br>
<span class="quotelev1">&gt;    exit(0);
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  for(i=1 ; i&lt;argc ; i+=2) {
</span><br>
<span class="quotelev1">&gt;    if (!strcmp(argv[i], &quot;-N&quot;)) {
</span><br>
<span class="quotelev1">&gt;      loops = atoi(argv[i+1]);
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;    else if (!strcmp(argv[i], &quot;-L&quot;)) {
</span><br>
<span class="quotelev1">&gt; 	    //len = atoi(argv[i+1]);
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;    else if (!strcmp(argv[i], &quot;-T&quot;)) {
</span><br>
<span class="quotelev1">&gt;      threads = atoi(argv[i+1]);
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;    else if (!strcmp(argv[i], &quot;-W&quot;)) {
</span><br>
<span class="quotelev1">&gt;      warmups = atoi(argv[i+1]);
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;    else {
</span><br>
<span class="quotelev1">&gt;      fprintf(stderr, &quot;Illegal argument %s\n&quot;, argv[i]);
</span><br>
<span class="quotelev1">&gt;      usage_ping();
</span><br>
<span class="quotelev1">&gt;      exit(0);
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  pthread_attr_init(&amp;attr);
</span><br>
<span class="quotelev1">&gt;  pid = malloc(sizeof(pthread_t) * threads);
</span><br>
<span class="quotelev1">&gt;  sem_init(&amp;ready_sem, 0, 0);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  go = 0;
</span><br>
<span class="quotelev1">&gt;  for (i = 0 ; i&lt; threads ; i++) {
</span><br>
<span class="quotelev1">&gt;    printf(&quot;[%d communicating threads]\n&quot;, i+1);
</span><br>
<span class="quotelev1">&gt;    if (comm_rank == 0) {
</span><br>
<span class="quotelev1">&gt;      pthread_create(&amp;pid[i], &amp;attr, (void*)server, (uint8_t)i);
</span><br>
<span class="quotelev1">&gt;    } else {
</span><br>
<span class="quotelev1">&gt;      pthread_create(&amp;pid[i], &amp;attr, (void*)client, (uint8_t)i);
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    for( j = 0; j &lt;= i; j++){
</span><br>
<span class="quotelev1">&gt;      sem_wait(&amp;ready_sem); 	
</span><br>
<span class="quotelev1">&gt;      go=j;
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;    go++;
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  for(i=0;i&lt;threads;i++)
</span><br>
<span class="quotelev1">&gt;    pthread_join(pid[i],NULL);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;  exit(0);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9616.php">François Trahay: "Re: [OMPI users] Problem with OpenMPI (MX btl and mtl) and threads"</a>
<li><strong>Previous message:</strong> <a href="9614.php">Fran&#231;ois Trahay: "Re: [OMPI users] Problem with OpenMPI (MX btl and mtl) and threads"</a>
<li><strong>In reply to:</strong> <a href="9614.php">Fran&#231;ois Trahay: "Re: [OMPI users] Problem with OpenMPI (MX btl and mtl) and threads"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9616.php">François Trahay: "Re: [OMPI users] Problem with OpenMPI (MX btl and mtl) and threads"</a>
<li><strong>Reply:</strong> <a href="9616.php">François Trahay: "Re: [OMPI users] Problem with OpenMPI (MX btl and mtl) and threads"</a>
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
