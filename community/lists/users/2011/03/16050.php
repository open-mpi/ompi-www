<?
$subject_val = "Re: [OMPI users] printf and scanf problem of C code compiled with Open MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 30 04:31:30 2011" -->
<!-- isoreceived="20110330083130" -->
<!-- sent="Wed, 30 Mar 2011 16:31:23 +0800" -->
<!-- isosent="20110330083123" -->
<!-- name="Meilin Bai" -->
<!-- email="meilin.bai_at_[hidden]" -->
<!-- subject="Re: [OMPI users] printf and scanf problem of C code compiled with Open MPI" -->
<!-- id="AANLkTimMTRAqULGy2e8-PBZiHYEW89bJNZKWm68NYLAi_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4D92DE21.1060805_at_bull.net" -->
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
<strong>Date:</strong> 2011-03-30 04:31:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16051.php">Jeff Squyres: "Re: [OMPI users] printf and scanf problem of C code compiled with Open MPI"</a>
<li><strong>Previous message:</strong> <a href="16049.php">Pascal Deveze: "Re: [OMPI users] printf and scanf problem of C code compiled with Open MPI"</a>
<li><strong>In reply to:</strong> <a href="16049.php">Pascal Deveze: "Re: [OMPI users] printf and scanf problem of C code compiled with Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16051.php">Jeff Squyres: "Re: [OMPI users] printf and scanf problem of C code compiled with Open MPI"</a>
<li><strong>Reply:</strong> <a href="16051.php">Jeff Squyres: "Re: [OMPI users] printf and scanf problem of C code compiled with Open MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You remind me. I now realize that it is not an matter of compiler, but an
<br>
issue of C language. The printf() function in C doesn't print messages onto
<br>
the standard ouput immediately, but instead stores them in a buffer. Only in
<br>
some cases does the standard output work, defined in standard C:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;1. The buffer is full or freshed compulsively (like use fflush()).
<br>
&nbsp;&nbsp;&nbsp;&nbsp;2. When a newline comes (\n).
<br>
&nbsp;&nbsp;&nbsp;&nbsp;3. Needs reading from buffer (such as scanf()).
<br>
<p>Some compilers may deal with this function, and compiled by Mpich2 this code
<br>
seems be well-off.
<br>
<p>Thanks very much.
<br>
<p><p>On Wed, Mar 30, 2011 at 3:39 PM, Pascal Deveze &lt;Pascal.Deveze_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt;  Maybe this could solve your problem: Just add \n in the string you want to
</span><br>
<span class="quotelev1">&gt; display:
</span><br>
<span class="quotelev1">&gt; printf(&quot;Please give N= \n&quot;);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Of course, this will return, but the string is displayed. This run by me
</span><br>
<span class="quotelev1">&gt; without the fflush().
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On the other hand, do you really observe that the time of the scanf () and
</span><br>
<span class="quotelev1">&gt; the time to enter &quot;N&quot; be insignificant ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Pascal
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Meilin Bai a &#233;crit :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So it means that MPI doesn't suit to interactive programming? Though we can
</span><br>
<span class="quotelev1">&gt; really use fflush(stdout) to get the right order, it takes too more time,
</span><br>
<span class="quotelev1">&gt; and it's said that using fflush() is not a good progrmming style in C.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On the other hand, in Fortran language, this situation won't exist. Maybe
</span><br>
<span class="quotelev1">&gt; it is because I/O implement is a built-in part of Fortran, while in C/C++ it
</span><br>
<span class="quotelev1">&gt; is realized only through function like scanf, printf, et al?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Mar 30, 2011 at 2:38 AM, Prentice Bisbal &lt;prentice_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  On 03/29/2011 01:29 PM, Meilin Bai wrote:
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
<span class="quotelev2">&gt;&gt;  The Open MPI Developers (Jeff, Ralph, etc) can confirm this:
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
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing listusers_at_[hidden]<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
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
Meilin Bai
School of Electronic Engineering and Computer Science, Peking University
Beijing 100871, China
E-Mail: meilin.bai_at_[hidden]
           meilin_at_[hidden]
MSN: meilin.bai_at_[hidden]
Cellular: +86-1342-619-8430
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16050/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16051.php">Jeff Squyres: "Re: [OMPI users] printf and scanf problem of C code compiled with Open MPI"</a>
<li><strong>Previous message:</strong> <a href="16049.php">Pascal Deveze: "Re: [OMPI users] printf and scanf problem of C code compiled with Open MPI"</a>
<li><strong>In reply to:</strong> <a href="16049.php">Pascal Deveze: "Re: [OMPI users] printf and scanf problem of C code compiled with Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16051.php">Jeff Squyres: "Re: [OMPI users] printf and scanf problem of C code compiled with Open MPI"</a>
<li><strong>Reply:</strong> <a href="16051.php">Jeff Squyres: "Re: [OMPI users] printf and scanf problem of C code compiled with Open MPI"</a>
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
