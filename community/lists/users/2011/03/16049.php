<?
$subject_val = "Re: [OMPI users] printf and scanf problem of C code compiled with Open MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 30 03:39:24 2011" -->
<!-- isoreceived="20110330073924" -->
<!-- sent="Wed, 30 Mar 2011 09:39:13 +0200" -->
<!-- isosent="20110330073913" -->
<!-- name="Pascal Deveze" -->
<!-- email="Pascal.Deveze_at_[hidden]" -->
<!-- subject="Re: [OMPI users] printf and scanf problem of C code compiled with Open MPI" -->
<!-- id="4D92DE21.1060805_at_bull.net" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTim+aO-QmjkTYYrRRe2ftpHu6KqNKyTv=mBWT6NR_at_mail.gmail.com" -->
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
<strong>From:</strong> Pascal Deveze (<em>Pascal.Deveze_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-30 03:39:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16050.php">Meilin Bai: "Re: [OMPI users] printf and scanf problem of C code compiled with Open MPI"</a>
<li><strong>Previous message:</strong> <a href="16048.php">Meilin Bai: "Re: [OMPI users] printf and scanf problem of C code compiled with Open MPI"</a>
<li><strong>In reply to:</strong> <a href="16048.php">Meilin Bai: "Re: [OMPI users] printf and scanf problem of C code compiled with Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16050.php">Meilin Bai: "Re: [OMPI users] printf and scanf problem of C code compiled with Open MPI"</a>
<li><strong>Reply:</strong> <a href="16050.php">Meilin Bai: "Re: [OMPI users] printf and scanf problem of C code compiled with Open MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Maybe this could solve your problem: Just add \n in the string you want 
<br>
to display:
<br>
printf(&quot;Please give N= \n&quot;);
<br>
<p>Of course, this will return, but the string is displayed. This run by me 
<br>
without the fflush().
<br>
<p>On the other hand, do you really observe that the time of the scanf () 
<br>
and the time to enter &quot;N&quot; be insignificant ?
<br>
<p>Pascal
<br>
<p>Meilin Bai a &#233;crit :
<br>
<span class="quotelev1">&gt; So it means that MPI doesn't suit to interactive programming? Though 
</span><br>
<span class="quotelev1">&gt; we can really use fflush(stdout) to get the right order, it takes too 
</span><br>
<span class="quotelev1">&gt; more time, and it's said that using fflush() is not a good progrmming 
</span><br>
<span class="quotelev1">&gt; style in C.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; On the other hand, in Fortran language, this situation won't exist. 
</span><br>
<span class="quotelev1">&gt; Maybe it is because I/O implement is a built-in part of Fortran, while 
</span><br>
<span class="quotelev1">&gt; in C/C++ it is realized only through function like scanf, printf, et al?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; On Wed, Mar 30, 2011 at 2:38 AM, Prentice Bisbal &lt;prentice_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:prentice_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     On 03/29/2011 01:29 PM, Meilin Bai wrote:
</span><br>
<span class="quotelev2">&gt;     &gt; Dear open-mpi users:
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; I come across a little problem when running a MPI C program compiled
</span><br>
<span class="quotelev2">&gt;     &gt; with Open MPI 1.4.3. A part of codes as follows:
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt;     MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev2">&gt;     &gt;     MPI_Comm_size(MPI_COMM_WORLD, &amp;numprocs);
</span><br>
<span class="quotelev2">&gt;     &gt;     MPI_Comm_rank(MPI_COMM_WORLD, &amp;myid);
</span><br>
<span class="quotelev2">&gt;     &gt;     MPI_Get_processor_name(processor_name, &amp;namelen);
</span><br>
<span class="quotelev2">&gt;     &gt;     if (myid == 0) {
</span><br>
<span class="quotelev2">&gt;     &gt;          printf(&quot;Please give N= &quot;);
</span><br>
<span class="quotelev2">&gt;     &gt;          //fflush(stdout);
</span><br>
<span class="quotelev2">&gt;     &gt;          scanf(&quot;%d&quot;, &amp;n);
</span><br>
<span class="quotelev2">&gt;     &gt;          startwtime = MPI_Wtime();
</span><br>
<span class="quotelev2">&gt;     &gt;      }
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; If comment out the sentence of &quot;fflush(stdout);&quot;, it doesn't
</span><br>
<span class="quotelev1">&gt;     print out
</span><br>
<span class="quotelev2">&gt;     &gt; the message till I input an integer n. And if I add the fflush
</span><br>
<span class="quotelev1">&gt;     function
</span><br>
<span class="quotelev2">&gt;     &gt; between them, it works as expected, though comsumming time
</span><br>
<span class="quotelev1">&gt;     obviously.
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; However, when I compiled it with Mpich2-1.3.2p1, without fflush
</span><br>
<span class="quotelev1">&gt;     function
</span><br>
<span class="quotelev2">&gt;     &gt; in the code, it works correctly.
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; Can anyone know what the matter is.
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     The Open MPI Developers (Jeff, Ralph, etc) can confirm this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     The MPI standard doesn't have a lot of strict requirements for I/O
</span><br>
<span class="quotelev1">&gt;     behavior like this, so implementations are allowed to buffer I/O
</span><br>
<span class="quotelev1">&gt;     if they
</span><br>
<span class="quotelev1">&gt;     want. There is nothing wrong with requiring fflush(stdout) in order to
</span><br>
<span class="quotelev1">&gt;     get the behavior you want. In fact, if you check some text books
</span><br>
<span class="quotelev1">&gt;     on MPI
</span><br>
<span class="quotelev1">&gt;     programming, I'm pretty sure they recommend using fflush to minimize
</span><br>
<span class="quotelev1">&gt;     this problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     MPICH behaves differently because its developers made different design
</span><br>
<span class="quotelev1">&gt;     choices.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Neither behavior is &quot;wrong&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     --
</span><br>
<span class="quotelev1">&gt;     Prentice
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     users mailing list
</span><br>
<span class="quotelev1">&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<p><p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16049/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16050.php">Meilin Bai: "Re: [OMPI users] printf and scanf problem of C code compiled with Open MPI"</a>
<li><strong>Previous message:</strong> <a href="16048.php">Meilin Bai: "Re: [OMPI users] printf and scanf problem of C code compiled with Open MPI"</a>
<li><strong>In reply to:</strong> <a href="16048.php">Meilin Bai: "Re: [OMPI users] printf and scanf problem of C code compiled with Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16050.php">Meilin Bai: "Re: [OMPI users] printf and scanf problem of C code compiled with Open MPI"</a>
<li><strong>Reply:</strong> <a href="16050.php">Meilin Bai: "Re: [OMPI users] printf and scanf problem of C code compiled with Open MPI"</a>
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
