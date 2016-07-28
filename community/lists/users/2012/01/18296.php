<?
$subject_val = "Re: [OMPI users] MPI_AllGather null terminator character";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 27 10:16:35 2012" -->
<!-- isoreceived="20120127151635" -->
<!-- sent="Fri, 27 Jan 2012 08:16:25 -0700" -->
<!-- isosent="20120127151625" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_AllGather null terminator character" -->
<!-- id="5DC58EA8-A112-482B-A53D-06B2CC32DBFA_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAJNPZUXRtRKMfoZgpiJB=TNDWmAYSj=eKQjQwtcyvC-pv5p-Rg_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-27 10:16:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18297.php">Gabriele Fatigati: "Re: [OMPI users] MPI_AllGather null terminator character"</a>
<li><strong>Previous message:</strong> <a href="18295.php">Gabriele Fatigati: "Re: [OMPI users] MPI_AllGather null terminator character"</a>
<li><strong>In reply to:</strong> <a href="18295.php">Gabriele Fatigati: "Re: [OMPI users] MPI_AllGather null terminator character"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18297.php">Gabriele Fatigati: "Re: [OMPI users] MPI_AllGather null terminator character"</a>
<li><strong>Reply:</strong> <a href="18297.php">Gabriele Fatigati: "Re: [OMPI users] MPI_AllGather null terminator character"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I suspect that valgrind doesn't recognize that MPI_Allgather will ensure that hostname_recv_buf is filled prior to calling strcmp. If you want to eliminate the warning, you should memset hostname_recv_buf to 0 so it has a guaranteed value.
<br>
<p>On Jan 27, 2012, at 6:21 AM, Gabriele Fatigati wrote:
<br>
<p><span class="quotelev1">&gt; Hi Jeff,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; yes, very stupid bug in a code, but also with the correction the problem with Valgrind in strcmp remains:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ==21779== Conditional jump or move depends on uninitialised value(s)
</span><br>
<span class="quotelev1">&gt; ==21779==    at 0x4A0898C: strcmp (mc_replace_strmem.c:711)
</span><br>
<span class="quotelev1">&gt; ==21779==    by 0x400BA8: main (all_gather.c:28)
</span><br>
<span class="quotelev1">&gt; ==21779==
</span><br>
<span class="quotelev1">&gt; ==21779== Conditional jump or move depends on uninitialised value(s)
</span><br>
<span class="quotelev1">&gt; ==21779==    at 0x4A0899A: strcmp (mc_replace_strmem.c:711)
</span><br>
<span class="quotelev1">&gt; ==21779==    by 0x400BA8: main (all_gather.c:28)
</span><br>
<span class="quotelev1">&gt; ==21779==
</span><br>
<span class="quotelev1">&gt; ==21779== Conditional jump or move depends on uninitialised value(s)
</span><br>
<span class="quotelev1">&gt; ==21779==    at 0x4A089BA: strcmp (mc_replace_strmem.c:711)
</span><br>
<span class="quotelev1">&gt; ==21779==    by 0x400BA8: main (all_gather.c:28)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Do you have the same warning with Valgrind?  Localhost name is something like &quot;node343&quot; &quot;node344&quot; and so on.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2012/1/27 Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; I see one problem:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    gethostname(local_hostname, sizeof(local_hostname));
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That should be:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    gethostname(local_hostname, max_name_len);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; because sizeof(local_hostname) will be sizeof(void*).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But if that's what you were intending, just to simulate a small hostname buffer, then be aware that gethostname() will not put a \0 after the string, because it'll copy in sizeof(local_hostname) characters and then stop.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Specifically, the man page on OS X says:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     The gethostname() function returns the standard host name for the current
</span><br>
<span class="quotelev1">&gt;     processor, as previously set by sethostname().  The namelen argument
</span><br>
<span class="quotelev1">&gt;     specifies the size of the name array.  The returned name is null-termi-
</span><br>
<span class="quotelev1">&gt;     nated, unless insufficient space is provided.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hence, MPI is transmitting the entire 255 characters in your source array (regardless of content -- MPI is not looking for \0's; you gave it the explicit length of the buffer), but if they weren't filled with \0's, then the receiver's printf will have problems handling it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jan 27, 2012, at 4:03 AM, Gabriele Fatigati wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Sorry,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; this is the right code.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 2012/1/27 Gabriele Fatigati &lt;g.fatigati_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi Jeff,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The problem is when I use strcmp on ALLGather buffer and Valgrind that raise a warning.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Please check if the attached code is right, where size(local_hostname) is very small.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Valgrind is used as:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; mpirun valgrind --leak-check=full --tool=memcheck ./all_gather
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; and openmpi/1.4.4 compiled with &quot;-O0 -g&quot;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 2012/1/26 Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'm not sure what you're asking.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The entire contents of hostname[] will be sent -- from position 0 to position (MAX_STRING_LEN-1).  If there's a \0 in there, it will be sent.  If the \0 occurs after that, then it won't.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Be aware that get_hostname(buf, size) will not put a \0 in the buffer if the hostname is exactly &quot;size&quot; bytes.  So you might want to double check that your get_hostname() is returning a \0-terminated string.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Does that make sense?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Here's a sample I wrote to verify this:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;string.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #define MAX_LEN 64
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; static void where_null(char *ptr, int len, int rank)
</span><br>
<span class="quotelev2">&gt; &gt; {
</span><br>
<span class="quotelev2">&gt; &gt;    int i;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    for (i = 0; i &lt; len; ++i) {
</span><br>
<span class="quotelev2">&gt; &gt;        if ('\0' == ptr[i]) {
</span><br>
<span class="quotelev2">&gt; &gt;            printf(&quot;Rank %d: Null found at position %d (string: %s)\n&quot;,
</span><br>
<span class="quotelev2">&gt; &gt;                   rank, i, ptr);
</span><br>
<span class="quotelev2">&gt; &gt;            return;
</span><br>
<span class="quotelev2">&gt; &gt;        }
</span><br>
<span class="quotelev2">&gt; &gt;    }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    printf(&quot;Rank %d: Null not found! (string: &quot;, rank);
</span><br>
<span class="quotelev2">&gt; &gt;    for (i = 0; i &lt; len; ++i) putc(ptr[i], stdout);
</span><br>
<span class="quotelev2">&gt; &gt;    putc('\n', stdout);
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; int main()
</span><br>
<span class="quotelev2">&gt; &gt; {
</span><br>
<span class="quotelev2">&gt; &gt;    int i;
</span><br>
<span class="quotelev2">&gt; &gt;    char hostname[MAX_LEN];
</span><br>
<span class="quotelev2">&gt; &gt;    char *hostname_recv_buf;
</span><br>
<span class="quotelev2">&gt; &gt;    int rank, size;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    MPI_Init(NULL, NULL);
</span><br>
<span class="quotelev2">&gt; &gt;    MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev2">&gt; &gt;    MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    gethostname(hostname, MAX_LEN - 1);
</span><br>
<span class="quotelev2">&gt; &gt;    where_null(hostname, MAX_LEN, rank);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    hostname_recv_buf = calloc(size * (MAX_LEN), (sizeof(char)));
</span><br>
<span class="quotelev2">&gt; &gt;    MPI_Allgather(hostname, MAX_LEN, MPI_CHAR,
</span><br>
<span class="quotelev2">&gt; &gt;                  hostname_recv_buf, MAX_LEN, MPI_CHAR, MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt; &gt;    for (i = 0; i &lt; size; ++i) {
</span><br>
<span class="quotelev2">&gt; &gt;        where_null(hostname_recv_buf + i * MAX_LEN, MAX_LEN, rank);
</span><br>
<span class="quotelev2">&gt; &gt;    }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    MPI_Finalize();
</span><br>
<span class="quotelev2">&gt; &gt;    return 0;
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Jan 13, 2012, at 2:32 AM, Gabriele Fatigati wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Dear OpenMPI,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; using MPI_Allgather with MPI_CHAR type, I have a doubt about null-terminated character. Imaging I want to spawn node names where my program is running on:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ----------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; char hostname[MAX_LEN];
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; char* hostname_recv_buf=(char*)calloc(num_procs*(MAX_STRING_LEN),(sizeof(char)));
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; MPI_Allgather(hostname, MAX_STRING_LEN, MPI_CHAR, hostname_recv_buf, MAX_STRING_LEN, MPI_CHAR, MPI_COMM_WORLD);
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ----------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Now, is the null-terminated character of each local string included? Or I have to send and receive in MPI_Allgather MAX_STRING_LEN+1 elements?
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Using Valgrind, in a subsequent simple strcmp:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; for( i= 0; i&lt; num_procs; i++){
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                 if(strcmp(&amp;hostname_recv_buf[MAX_STRING_LEN*i], local_hostname)==0){
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                        ... doing something....
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                 }
</span><br>
<span class="quotelev3">&gt; &gt; &gt;         }
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; raise a warning:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Conditional jump or move depends on uninitialised value(s)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ==19931==    at 0x4A06E5C: strcmp (mc_replace_strmem.c:412)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; The same warning is not present if I use MAX_STRING_LEN+1 in MPI_Allgather.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Thanks in forward.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Ing. Gabriele Fatigati
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; HPC specialist
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; SuperComputing Applications and Innovation Department
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; www.cineca.it                    Tel:   +39 051 6171722
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; g.fatigati [AT] cineca.it
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
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
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
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
<span class="quotelev2">&gt; &gt; &lt;all_gather.c&gt;_______________________________________________
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
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; &lt;all_gather.c&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18296/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18297.php">Gabriele Fatigati: "Re: [OMPI users] MPI_AllGather null terminator character"</a>
<li><strong>Previous message:</strong> <a href="18295.php">Gabriele Fatigati: "Re: [OMPI users] MPI_AllGather null terminator character"</a>
<li><strong>In reply to:</strong> <a href="18295.php">Gabriele Fatigati: "Re: [OMPI users] MPI_AllGather null terminator character"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18297.php">Gabriele Fatigati: "Re: [OMPI users] MPI_AllGather null terminator character"</a>
<li><strong>Reply:</strong> <a href="18297.php">Gabriele Fatigati: "Re: [OMPI users] MPI_AllGather null terminator character"</a>
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
