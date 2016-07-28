<?
$subject_val = "Re: [OMPI users] printf and scanf problem of C code compiled with Open MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 31 04:44:51 2011" -->
<!-- isoreceived="20110331084451" -->
<!-- sent="Thu, 31 Mar 2011 10:44:41 +0200" -->
<!-- isosent="20110331084441" -->
<!-- name="Yevgeny Kliteynik" -->
<!-- email="kliteyn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] printf and scanf problem of C code compiled with Open MPI" -->
<!-- id="4D943EF9.7040803_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AE27B566-2397-4BB9-9736-1641BC8741E5_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] printf and scanf problem of C code compiled with Open MPI<br>
<strong>From:</strong> Yevgeny Kliteynik (<em>kliteyn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-31 04:44:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16062.php">Hellmüller  Roman: "Re: [OMPI users] Fault tolerant ompi - Error: Unable to find a list of active MPIRUN processes on this machine."</a>
<li><strong>Previous message:</strong> <a href="16060.php">David Zhang: "Re: [OMPI users] mpi problems,"</a>
<li><strong>In reply to:</strong> <a href="16051.php">Jeff Squyres: "Re: [OMPI users] printf and scanf problem of C code compiled with Open MPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You can explicitly specify the type of buffering
<br>
that you want to get with setvbuf() C function.
<br>
It can be block-buffered, line-buffered and unbuffered.
<br>
<p>Stdout is line-buffered by default.
<br>
To make it un-buffered, you need something like this:
<br>
<p>setvbuf(stdout, NULL, _IONBF, 0)
<br>
<p>-- YK
<br>
<p>On 30-Mar-11 1:13 PM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; I don't remember this being a function of the C language or the compiler; I'm pretty sure you can change whether stdout is line buffered or not at the OS level.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As for OMPI, we deliberately set each MPI process' stdout to be line buffered before relaying it up to the mpirun process.  This was because we wanted to limit non-MPI network traffic (i.e., bundle more output into fewer, longer messages, rather than more, shorter messages -- i.e., less overall network and CPU overhead).  I don't know if that makes anything more or less friendly to interactive computing; I don't think using fflush() or \n is onerous.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Indeed, stdout / stdin processing likely isn't part of the high performance section of your application, so we figured it was an easy tradeoff to make (i.e., less network overhead leading to potentially better MPI message performance).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 30, 2011, at 3:31 AM, Meilin Bai wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; You remind me. I now realize that it is not an matter of compiler, but an issue of C language. The printf() function in C doesn't print messages onto the standard ouput immediately, but instead stores them in a buffer. Only in some cases does the standard output work, defined in standard C:
</span><br>
<span class="quotelev2">&gt;&gt;      1. The buffer is full or freshed compulsively (like use fflush()).
</span><br>
<span class="quotelev2">&gt;&gt;      2. When a newline comes (\n).
</span><br>
<span class="quotelev2">&gt;&gt;      3. Needs reading from buffer (such as scanf()).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Some compilers may deal with this function, and compiled by Mpich2 this code seems be well-off.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks very much.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, Mar 30, 2011 at 3:39 PM, Pascal Deveze&lt;Pascal.Deveze_at_[hidden]&gt;  wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Maybe this could solve your problem: Just add \n in the string you want to display:
</span><br>
<span class="quotelev2">&gt;&gt; printf(&quot;Please give N= \n&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Of course, this will return, but the string is displayed. This run by me without the fflush().
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On the other hand, do you really observe that the time of the scanf () and the time to enter &quot;N&quot; be insignificant ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Pascal
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Meilin Bai a &#233;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So it means that MPI doesn't suit to interactive programming? Though we can really use fflush(stdout) to get the right order, it takes too more time, and it's said that using fflush() is not a good progrmming style in C.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On the other hand, in Fortran language, this situation won't exist. Maybe it is because I/O implement is a built-in part of Fortran, while in C/C++ it is realized only through function like scanf, printf, et al?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Wed, Mar 30, 2011 at 2:38 AM, Prentice Bisbal&lt;prentice_at_[hidden]&gt;  wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 03/29/2011 01:29 PM, Meilin Bai wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Dear open-mpi users:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I come across a little problem when running a MPI C program compiled
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; with Open MPI 1.4.3. A part of codes as follows:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      MPI_Init(&amp;argc,&amp;argv);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      MPI_Comm_size(MPI_COMM_WORLD,&amp;numprocs);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      MPI_Comm_rank(MPI_COMM_WORLD,&amp;myid);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      MPI_Get_processor_name(processor_name,&amp;namelen);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      if (myid == 0) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;           printf(&quot;Please give N= &quot;);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;           //fflush(stdout);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;           scanf(&quot;%d&quot;,&amp;n);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;           startwtime = MPI_Wtime();
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If comment out the sentence of &quot;fflush(stdout);&quot;, it doesn't print out
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the message till I input an integer n. And if I add the fflush function
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; between them, it works as expected, though comsumming time obviously.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; However, when I compiled it with Mpich2-1.3.2p1, without fflush function
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; in the code, it works correctly.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Can anyone know what the matter is.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The Open MPI Developers (Jeff, Ralph, etc) can confirm this:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The MPI standard doesn't have a lot of strict requirements for I/O
</span><br>
<span class="quotelev3">&gt;&gt;&gt; behavior like this, so implementations are allowed to buffer I/O if they
</span><br>
<span class="quotelev3">&gt;&gt;&gt; want. There is nothing wrong with requiring fflush(stdout) in order to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; get the behavior you want. In fact, if you check some text books on MPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; programming, I'm pretty sure they recommend using fflush to minimize
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this problem.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPICH behaves differently because its developers made different design
</span><br>
<span class="quotelev3">&gt;&gt;&gt; choices.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Neither behavior is &quot;wrong&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Prentice
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
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Meilin Bai
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Meilin Bai
</span><br>
<span class="quotelev2">&gt;&gt; School of Electronic Engineering and Computer Science, Peking University
</span><br>
<span class="quotelev2">&gt;&gt; Beijing 100871, China
</span><br>
<span class="quotelev2">&gt;&gt; E-Mail: meilin.bai_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;             meilin_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; MSN: meilin.bai_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Cellular: +86-1342-619-8430
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16062.php">Hellmüller  Roman: "Re: [OMPI users] Fault tolerant ompi - Error: Unable to find a list of active MPIRUN processes on this machine."</a>
<li><strong>Previous message:</strong> <a href="16060.php">David Zhang: "Re: [OMPI users] mpi problems,"</a>
<li><strong>In reply to:</strong> <a href="16051.php">Jeff Squyres: "Re: [OMPI users] printf and scanf problem of C code compiled with Open MPI"</a>
<!-- nextthread="start" -->
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
