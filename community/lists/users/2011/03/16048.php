<?
$subject_val = "Re: [OMPI users] printf and scanf problem of C code compiled with Open MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 29 22:27:35 2011" -->
<!-- isoreceived="20110330022735" -->
<!-- sent="Wed, 30 Mar 2011 10:27:28 +0800" -->
<!-- isosent="20110330022728" -->
<!-- name="Meilin Bai" -->
<!-- email="meilin.bai_at_[hidden]" -->
<!-- subject="Re: [OMPI users] printf and scanf problem of C code compiled with Open MPI" -->
<!-- id="AANLkTim+aO-QmjkTYYrRRe2ftpHu6KqNKyTv=mBWT6NR_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4D922712.9020109_at_ias.edu" -->
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
<strong>From:</strong> Meilin Bai (<em>meilin.bai_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-29 22:27:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16049.php">Pascal Deveze: "Re: [OMPI users] printf and scanf problem of C code compiled with Open MPI"</a>
<li><strong>Previous message:</strong> <a href="16047.php">atexannamedbob_at_[hidden]: "Re: [OMPI users] Connection Errors: Socket is not connected (57) but works for a one messages to each place at first. Works on machine order."</a>
<li><strong>In reply to:</strong> <a href="16045.php">Prentice Bisbal: "Re: [OMPI users] printf and scanf problem of C code compiled with Open	MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16049.php">Pascal Deveze: "Re: [OMPI users] printf and scanf problem of C code compiled with Open MPI"</a>
<li><strong>Reply:</strong> <a href="16049.php">Pascal Deveze: "Re: [OMPI users] printf and scanf problem of C code compiled with Open MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
So it means that MPI doesn't suit to interactive programming? Though we can
<br>
really use fflush(stdout) to get the right order, it takes too more time,
<br>
and it's said that using fflush() is not a good progrmming style in C.
<br>
<p>On the other hand, in Fortran language, this situation won't exist. Maybe it
<br>
is because I/O implement is a built-in part of Fortran, while in C/C++ it is
<br>
realized only through function like scanf, printf, et al?
<br>
<p><p><p>On Wed, Mar 30, 2011 at 2:38 AM, Prentice Bisbal &lt;prentice_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On 03/29/2011 01:29 PM, Meilin Bai wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Dear open-mpi users:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I come across a little problem when running a MPI C program compiled
</span><br>
<span class="quotelev2">&gt; &gt; with Open MPI 1.4.3. A part of codes as follows:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev2">&gt; &gt;     MPI_Comm_size(MPI_COMM_WORLD, &amp;numprocs);
</span><br>
<span class="quotelev2">&gt; &gt;     MPI_Comm_rank(MPI_COMM_WORLD, &amp;myid);
</span><br>
<span class="quotelev2">&gt; &gt;     MPI_Get_processor_name(processor_name, &amp;namelen);
</span><br>
<span class="quotelev2">&gt; &gt;     if (myid == 0) {
</span><br>
<span class="quotelev2">&gt; &gt;          printf(&quot;Please give N= &quot;);
</span><br>
<span class="quotelev2">&gt; &gt;          //fflush(stdout);
</span><br>
<span class="quotelev2">&gt; &gt;          scanf(&quot;%d&quot;, &amp;n);
</span><br>
<span class="quotelev2">&gt; &gt;          startwtime = MPI_Wtime();
</span><br>
<span class="quotelev2">&gt; &gt;      }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; If comment out the sentence of &quot;fflush(stdout);&quot;, it doesn't print out
</span><br>
<span class="quotelev2">&gt; &gt; the message till I input an integer n. And if I add the fflush function
</span><br>
<span class="quotelev2">&gt; &gt; between them, it works as expected, though comsumming time obviously.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; However, when I compiled it with Mpich2-1.3.2p1, without fflush function
</span><br>
<span class="quotelev2">&gt; &gt; in the code, it works correctly.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Can anyone know what the matter is.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The Open MPI Developers (Jeff, Ralph, etc) can confirm this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The MPI standard doesn't have a lot of strict requirements for I/O
</span><br>
<span class="quotelev1">&gt; behavior like this, so implementations are allowed to buffer I/O if they
</span><br>
<span class="quotelev1">&gt; want. There is nothing wrong with requiring fflush(stdout) in order to
</span><br>
<span class="quotelev1">&gt; get the behavior you want. In fact, if you check some text books on MPI
</span><br>
<span class="quotelev1">&gt; programming, I'm pretty sure they recommend using fflush to minimize
</span><br>
<span class="quotelev1">&gt; this problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPICH behaves differently because its developers made different design
</span><br>
<span class="quotelev1">&gt; choices.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Neither behavior is &quot;wrong&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Prentice
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
Meilin Bai
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16048/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16049.php">Pascal Deveze: "Re: [OMPI users] printf and scanf problem of C code compiled with Open MPI"</a>
<li><strong>Previous message:</strong> <a href="16047.php">atexannamedbob_at_[hidden]: "Re: [OMPI users] Connection Errors: Socket is not connected (57) but works for a one messages to each place at first. Works on machine order."</a>
<li><strong>In reply to:</strong> <a href="16045.php">Prentice Bisbal: "Re: [OMPI users] printf and scanf problem of C code compiled with Open	MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16049.php">Pascal Deveze: "Re: [OMPI users] printf and scanf problem of C code compiled with Open MPI"</a>
<li><strong>Reply:</strong> <a href="16049.php">Pascal Deveze: "Re: [OMPI users] printf and scanf problem of C code compiled with Open MPI"</a>
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
