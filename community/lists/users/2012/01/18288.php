<?
$subject_val = "Re: [OMPI users] MPI_AllGather null terminator character";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 27 04:01:17 2012" -->
<!-- isoreceived="20120127090117" -->
<!-- sent="Fri, 27 Jan 2012 10:01:12 +0100" -->
<!-- isosent="20120127090112" -->
<!-- name="Gabriele Fatigati" -->
<!-- email="g.fatigati_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_AllGather null terminator character" -->
<!-- id="CAJNPZUVyHtsbhkADQkr4W0D+xXNFoqXZtP_+g7=9kdAZqJtheA_at_mail.gmail.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="882D90D0-ED56-4D30-B53A-DFE7468845E6_at_cisco.com" -->
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
<strong>From:</strong> Gabriele Fatigati (<em>g.fatigati_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-27 04:01:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18289.php">Gabriele Fatigati: "Re: [OMPI users] MPI_AllGather null terminator character"</a>
<li><strong>Previous message:</strong> <a href="18287.php">Jeff Squyres: "Re: [OMPI users] MPI_Allgather problem"</a>
<li><strong>In reply to:</strong> <a href="18286.php">Jeff Squyres: "Re: [OMPI users] MPI_AllGather null terminator character"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18289.php">Gabriele Fatigati: "Re: [OMPI users] MPI_AllGather null terminator character"</a>
<li><strong>Reply:</strong> <a href="18289.php">Gabriele Fatigati: "Re: [OMPI users] MPI_AllGather null terminator character"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>The problem is when I use strcmp on ALLGather buffer and Valgrind that
<br>
raise a warning.
<br>
<p>Please check if the attached code is right, where size(local_hostname) is
<br>
very small.
<br>
<p>Valgrind is used as:
<br>
<p>mpirun valgrind --leak-check=full --tool=memcheck ./all_gather
<br>
<p>and openmpi/1.4.4 compiled with &quot;-O0 -g&quot;
<br>
<p>Thanks!
<br>
<p>2012/1/26 Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; I'm not sure what you're asking.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The entire contents of hostname[] will be sent -- from position 0 to
</span><br>
<span class="quotelev1">&gt; position (MAX_STRING_LEN-1).  If there's a \0 in there, it will be sent.
</span><br>
<span class="quotelev1">&gt;  If the \0 occurs after that, then it won't.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Be aware that get_hostname(buf, size) will not put a \0 in the buffer if
</span><br>
<span class="quotelev1">&gt; the hostname is exactly &quot;size&quot; bytes.  So you might want to double check
</span><br>
<span class="quotelev1">&gt; that your get_hostname() is returning a \0-terminated string.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does that make sense?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here's a sample I wrote to verify this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;string.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #define MAX_LEN 64
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; static void where_null(char *ptr, int len, int rank)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;    int i;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    for (i = 0; i &lt; len; ++i) {
</span><br>
<span class="quotelev1">&gt;        if ('\0' == ptr[i]) {
</span><br>
<span class="quotelev1">&gt;            printf(&quot;Rank %d: Null found at position %d (string: %s)\n&quot;,
</span><br>
<span class="quotelev1">&gt;                   rank, i, ptr);
</span><br>
<span class="quotelev1">&gt;            return;
</span><br>
<span class="quotelev1">&gt;        }
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    printf(&quot;Rank %d: Null not found! (string: &quot;, rank);
</span><br>
<span class="quotelev1">&gt;    for (i = 0; i &lt; len; ++i) putc(ptr[i], stdout);
</span><br>
<span class="quotelev1">&gt;    putc('\n', stdout);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main()
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;    int i;
</span><br>
<span class="quotelev1">&gt;    char hostname[MAX_LEN];
</span><br>
<span class="quotelev1">&gt;    char *hostname_recv_buf;
</span><br>
<span class="quotelev1">&gt;    int rank, size;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    MPI_Init(NULL, NULL);
</span><br>
<span class="quotelev1">&gt;    MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev1">&gt;    MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    gethostname(hostname, MAX_LEN - 1);
</span><br>
<span class="quotelev1">&gt;    where_null(hostname, MAX_LEN, rank);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    hostname_recv_buf = calloc(size * (MAX_LEN), (sizeof(char)));
</span><br>
<span class="quotelev1">&gt;    MPI_Allgather(hostname, MAX_LEN, MPI_CHAR,
</span><br>
<span class="quotelev1">&gt;                  hostname_recv_buf, MAX_LEN, MPI_CHAR, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;    for (i = 0; i &lt; size; ++i) {
</span><br>
<span class="quotelev1">&gt;        where_null(hostname_recv_buf + i * MAX_LEN, MAX_LEN, rank);
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;    return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 13, 2012, at 2:32 AM, Gabriele Fatigati wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Dear OpenMPI,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; using MPI_Allgather with MPI_CHAR type, I have a doubt about
</span><br>
<span class="quotelev1">&gt; null-terminated character. Imaging I want to spawn node names where my
</span><br>
<span class="quotelev1">&gt; program is running on:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ----------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; char hostname[MAX_LEN];
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; char*
</span><br>
<span class="quotelev1">&gt; hostname_recv_buf=(char*)calloc(num_procs*(MAX_STRING_LEN),(sizeof(char)));
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Allgather(hostname, MAX_STRING_LEN, MPI_CHAR, hostname_recv_buf,
</span><br>
<span class="quotelev1">&gt; MAX_STRING_LEN, MPI_CHAR, MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ----------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Now, is the null-terminated character of each local string included? Or
</span><br>
<span class="quotelev1">&gt; I have to send and receive in MPI_Allgather MAX_STRING_LEN+1 elements?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Using Valgrind, in a subsequent simple strcmp:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; for( i= 0; i&lt; num_procs; i++){
</span><br>
<span class="quotelev2">&gt; &gt;                 if(strcmp(&amp;hostname_recv_buf[MAX_STRING_LEN*i],
</span><br>
<span class="quotelev1">&gt; local_hostname)==0){
</span><br>
<span class="quotelev2">&gt; &gt;                        ... doing something....
</span><br>
<span class="quotelev2">&gt; &gt;                 }
</span><br>
<span class="quotelev2">&gt; &gt;         }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; raise a warning:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Conditional jump or move depends on uninitialised value(s)
</span><br>
<span class="quotelev2">&gt; &gt; ==19931==    at 0x4A06E5C: strcmp (mc_replace_strmem.c:412)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The same warning is not present if I use MAX_STRING_LEN+1 in
</span><br>
<span class="quotelev1">&gt; MPI_Allgather.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks in forward.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Ing. Gabriele Fatigati
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; HPC specialist
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; SuperComputing Applications and Innovation Department
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; www.cineca.it                    Tel:   +39 051 6171722
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; g.fatigati [AT] cineca.it
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<p><p><p><pre>
-- 
Ing. Gabriele Fatigati
HPC specialist
SuperComputing Applications and Innovation Department
Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
www.cineca.it                    Tel:   +39 051 6171722
g.fatigati [AT] cineca.it

</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18288/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18288/all_gather.c">all_gather.c</a>
</ul>
<!-- attachment="all_gather.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18289.php">Gabriele Fatigati: "Re: [OMPI users] MPI_AllGather null terminator character"</a>
<li><strong>Previous message:</strong> <a href="18287.php">Jeff Squyres: "Re: [OMPI users] MPI_Allgather problem"</a>
<li><strong>In reply to:</strong> <a href="18286.php">Jeff Squyres: "Re: [OMPI users] MPI_AllGather null terminator character"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18289.php">Gabriele Fatigati: "Re: [OMPI users] MPI_AllGather null terminator character"</a>
<li><strong>Reply:</strong> <a href="18289.php">Gabriele Fatigati: "Re: [OMPI users] MPI_AllGather null terminator character"</a>
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
