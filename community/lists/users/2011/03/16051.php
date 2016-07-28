<?
$subject_val = "Re: [OMPI users] printf and scanf problem of C code compiled with Open MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 30 07:13:16 2011" -->
<!-- isoreceived="20110330111316" -->
<!-- sent="Wed, 30 Mar 2011 06:13:04 -0500" -->
<!-- isosent="20110330111304" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] printf and scanf problem of C code compiled with Open MPI" -->
<!-- id="AE27B566-2397-4BB9-9736-1641BC8741E5_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="AANLkTimMTRAqULGy2e8-PBZiHYEW89bJNZKWm68NYLAi_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-30 07:13:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16052.php">Jeff Squyres: "Re: [OMPI users] help with hybrid openmp and mpi"</a>
<li><strong>Previous message:</strong> <a href="16050.php">Meilin Bai: "Re: [OMPI users] printf and scanf problem of C code compiled with Open MPI"</a>
<li><strong>In reply to:</strong> <a href="16050.php">Meilin Bai: "Re: [OMPI users] printf and scanf problem of C code compiled with Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16061.php">Yevgeny Kliteynik: "Re: [OMPI users] printf and scanf problem of C code compiled with Open MPI"</a>
<li><strong>Reply:</strong> <a href="16061.php">Yevgeny Kliteynik: "Re: [OMPI users] printf and scanf problem of C code compiled with Open MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I don't remember this being a function of the C language or the compiler; I'm pretty sure you can change whether stdout is line buffered or not at the OS level.
<br>
<p>As for OMPI, we deliberately set each MPI process' stdout to be line buffered before relaying it up to the mpirun process.  This was because we wanted to limit non-MPI network traffic (i.e., bundle more output into fewer, longer messages, rather than more, shorter messages -- i.e., less overall network and CPU overhead).  I don't know if that makes anything more or less friendly to interactive computing; I don't think using fflush() or \n is onerous.  
<br>
<p>Indeed, stdout / stdin processing likely isn't part of the high performance section of your application, so we figured it was an easy tradeoff to make (i.e., less network overhead leading to potentially better MPI message performance).
<br>
<p><p>On Mar 30, 2011, at 3:31 AM, Meilin Bai wrote:
<br>
<p><span class="quotelev1">&gt; You remind me. I now realize that it is not an matter of compiler, but an issue of C language. The printf() function in C doesn't print messages onto the standard ouput immediately, but instead stores them in a buffer. Only in some cases does the standard output work, defined in standard C:
</span><br>
<span class="quotelev1">&gt;     1. The buffer is full or freshed compulsively (like use fflush()).
</span><br>
<span class="quotelev1">&gt;     2. When a newline comes (\n).
</span><br>
<span class="quotelev1">&gt;     3. Needs reading from buffer (such as scanf()).
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Some compilers may deal with this function, and compiled by Mpich2 this code seems be well-off.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thanks very much.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; On Wed, Mar 30, 2011 at 3:39 PM, Pascal Deveze &lt;Pascal.Deveze_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Maybe this could solve your problem: Just add \n in the string you want to display:
</span><br>
<span class="quotelev1">&gt; printf(&quot;Please give N= \n&quot;);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Of course, this will return, but the string is displayed. This run by me without the fflush().
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On the other hand, do you really observe that the time of the scanf () and the time to enter &quot;N&quot; be insignificant ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Pascal
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Meilin Bai a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; So it means that MPI doesn't suit to interactive programming? Though we can really use fflush(stdout) to get the right order, it takes too more time, and it's said that using fflush() is not a good progrmming style in C.
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; On the other hand, in Fortran language, this situation won't exist. Maybe it is because I/O implement is a built-in part of Fortran, while in C/C++ it is realized only through function like scanf, printf, et al?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, Mar 30, 2011 at 2:38 AM, Prentice Bisbal &lt;prentice_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On 03/29/2011 01:29 PM, Meilin Bai wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Dear open-mpi users:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I come across a little problem when running a MPI C program compiled
</span><br>
<span class="quotelev3">&gt;&gt; &gt; with Open MPI 1.4.3. A part of codes as follows:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     MPI_Comm_size(MPI_COMM_WORLD, &amp;numprocs);
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     MPI_Comm_rank(MPI_COMM_WORLD, &amp;myid);
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     MPI_Get_processor_name(processor_name, &amp;namelen);
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     if (myid == 0) {
</span><br>
<span class="quotelev3">&gt;&gt; &gt;          printf(&quot;Please give N= &quot;);
</span><br>
<span class="quotelev3">&gt;&gt; &gt;          //fflush(stdout);
</span><br>
<span class="quotelev3">&gt;&gt; &gt;          scanf(&quot;%d&quot;, &amp;n);
</span><br>
<span class="quotelev3">&gt;&gt; &gt;          startwtime = MPI_Wtime();
</span><br>
<span class="quotelev3">&gt;&gt; &gt;      }
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; If comment out the sentence of &quot;fflush(stdout);&quot;, it doesn't print out
</span><br>
<span class="quotelev3">&gt;&gt; &gt; the message till I input an integer n. And if I add the fflush function
</span><br>
<span class="quotelev3">&gt;&gt; &gt; between them, it works as expected, though comsumming time obviously.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; However, when I compiled it with Mpich2-1.3.2p1, without fflush function
</span><br>
<span class="quotelev3">&gt;&gt; &gt; in the code, it works correctly.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Can anyone know what the matter is.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The Open MPI Developers (Jeff, Ralph, etc) can confirm this:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The MPI standard doesn't have a lot of strict requirements for I/O
</span><br>
<span class="quotelev2">&gt;&gt; behavior like this, so implementations are allowed to buffer I/O if they
</span><br>
<span class="quotelev2">&gt;&gt; want. There is nothing wrong with requiring fflush(stdout) in order to
</span><br>
<span class="quotelev2">&gt;&gt; get the behavior you want. In fact, if you check some text books on MPI
</span><br>
<span class="quotelev2">&gt;&gt; programming, I'm pretty sure they recommend using fflush to minimize
</span><br>
<span class="quotelev2">&gt;&gt; this problem.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; MPICH behaves differently because its developers made different design
</span><br>
<span class="quotelev2">&gt;&gt; choices.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Neither behavior is &quot;wrong&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Prentice
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
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Meilin Bai
</span><br>
<span class="quotelev1">&gt; School of Electronic Engineering and Computer Science, Peking University
</span><br>
<span class="quotelev1">&gt; Beijing 100871, China
</span><br>
<span class="quotelev1">&gt; E-Mail: meilin.bai_at_[hidden]
</span><br>
<span class="quotelev1">&gt;            meilin_at_[hidden]
</span><br>
<span class="quotelev1">&gt; MSN: meilin.bai_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Cellular: +86-1342-619-8430
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
<li><strong>Next message:</strong> <a href="16052.php">Jeff Squyres: "Re: [OMPI users] help with hybrid openmp and mpi"</a>
<li><strong>Previous message:</strong> <a href="16050.php">Meilin Bai: "Re: [OMPI users] printf and scanf problem of C code compiled with Open MPI"</a>
<li><strong>In reply to:</strong> <a href="16050.php">Meilin Bai: "Re: [OMPI users] printf and scanf problem of C code compiled with Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16061.php">Yevgeny Kliteynik: "Re: [OMPI users] printf and scanf problem of C code compiled with Open MPI"</a>
<li><strong>Reply:</strong> <a href="16061.php">Yevgeny Kliteynik: "Re: [OMPI users] printf and scanf problem of C code compiled with Open MPI"</a>
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
