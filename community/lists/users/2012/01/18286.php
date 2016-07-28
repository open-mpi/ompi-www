<?
$subject_val = "Re: [OMPI users] MPI_AllGather null terminator character";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 26 16:52:09 2012" -->
<!-- isoreceived="20120126215209" -->
<!-- sent="Thu, 26 Jan 2012 16:52:04 -0500" -->
<!-- isosent="20120126215204" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_AllGather null terminator character" -->
<!-- id="882D90D0-ED56-4D30-B53A-DFE7468845E6_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAJNPZUUSdhyQhTi5yVZqU8YXJZ3zdG8HJOtM17R+DpT+DNW-vw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_AllGather null terminator character<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-26 16:52:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18287.php">Jeff Squyres: "Re: [OMPI users] MPI_Allgather problem"</a>
<li><strong>Previous message:</strong> <a href="18285.php">Jeff Squyres: "Re: [OMPI users] OpenMPI: How many connections?"</a>
<li><strong>In reply to:</strong> <a href="18158.php">Gabriele Fatigati: "[OMPI users] MPI_AllGather null terminator character"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18288.php">Gabriele Fatigati: "Re: [OMPI users] MPI_AllGather null terminator character"</a>
<li><strong>Reply:</strong> <a href="18288.php">Gabriele Fatigati: "Re: [OMPI users] MPI_AllGather null terminator character"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm not sure what you're asking.  
<br>
<p>The entire contents of hostname[] will be sent -- from position 0 to position (MAX_STRING_LEN-1).  If there's a \0 in there, it will be sent.  If the \0 occurs after that, then it won't.
<br>
<p>Be aware that get_hostname(buf, size) will not put a \0 in the buffer if the hostname is exactly &quot;size&quot; bytes.  So you might want to double check that your get_hostname() is returning a \0-terminated string.
<br>
<p>Does that make sense?
<br>
<p>Here's a sample I wrote to verify this:
<br>
<p>#include &lt;stdio.h&gt;
<br>
#include &lt;string.h&gt;
<br>
#include &lt;mpi.h&gt;
<br>
#include &lt;stdlib.h&gt;
<br>
<p>#define MAX_LEN 64
<br>
<p>static void where_null(char *ptr, int len, int rank)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int i;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;for (i = 0; i &lt; len; ++i) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if ('\0' == ptr[i]) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Rank %d: Null found at position %d (string: %s)\n&quot;, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rank, i, ptr);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Rank %d: Null not found! (string: &quot;, rank);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for (i = 0; i &lt; len; ++i) putc(ptr[i], stdout);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;putc('\n', stdout);
<br>
}
<br>
<p>int main()
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int i;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;char hostname[MAX_LEN];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;char *hostname_recv_buf;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int rank, size;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(NULL, NULL);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;gethostname(hostname, MAX_LEN - 1);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;where_null(hostname, MAX_LEN, rank);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;hostname_recv_buf = calloc(size * (MAX_LEN), (sizeof(char)));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Allgather(hostname, MAX_LEN, MPI_CHAR, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hostname_recv_buf, MAX_LEN, MPI_CHAR, MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for (i = 0; i &lt; size; ++i) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;where_null(hostname_recv_buf + i * MAX_LEN, MAX_LEN, rank);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
<p><p><p>On Jan 13, 2012, at 2:32 AM, Gabriele Fatigati wrote:
<br>
<p><span class="quotelev1">&gt; Dear OpenMPI,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; using MPI_Allgather with MPI_CHAR type, I have a doubt about null-terminated character. Imaging I want to spawn node names where my program is running on:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ----------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; char hostname[MAX_LEN];
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; char* hostname_recv_buf=(char*)calloc(num_procs*(MAX_STRING_LEN),(sizeof(char)));
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPI_Allgather(hostname, MAX_STRING_LEN, MPI_CHAR, hostname_recv_buf, MAX_STRING_LEN, MPI_CHAR, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ----------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now, is the null-terminated character of each local string included? Or I have to send and receive in MPI_Allgather MAX_STRING_LEN+1 elements?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Using Valgrind, in a subsequent simple strcmp:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; for( i= 0; i&lt; num_procs; i++){
</span><br>
<span class="quotelev1">&gt;                 if(strcmp(&amp;hostname_recv_buf[MAX_STRING_LEN*i], local_hostname)==0){
</span><br>
<span class="quotelev1">&gt;                        ... doing something....
</span><br>
<span class="quotelev1">&gt;                 }
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; raise a warning:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Conditional jump or move depends on uninitialised value(s)
</span><br>
<span class="quotelev1">&gt; ==19931==    at 0x4A06E5C: strcmp (mc_replace_strmem.c:412)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The same warning is not present if I use MAX_STRING_LEN+1 in MPI_Allgather.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks in forward.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Ing. Gabriele Fatigati
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; HPC specialist
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; SuperComputing Applications and Innovation Department
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; www.cineca.it                    Tel:   +39 051 6171722
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; g.fatigati [AT] cineca.it           
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18287.php">Jeff Squyres: "Re: [OMPI users] MPI_Allgather problem"</a>
<li><strong>Previous message:</strong> <a href="18285.php">Jeff Squyres: "Re: [OMPI users] OpenMPI: How many connections?"</a>
<li><strong>In reply to:</strong> <a href="18158.php">Gabriele Fatigati: "[OMPI users] MPI_AllGather null terminator character"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18288.php">Gabriele Fatigati: "Re: [OMPI users] MPI_AllGather null terminator character"</a>
<li><strong>Reply:</strong> <a href="18288.php">Gabriele Fatigati: "Re: [OMPI users] MPI_AllGather null terminator character"</a>
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
