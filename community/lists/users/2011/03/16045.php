<?
$subject_val = "Re: [OMPI users] printf and scanf problem of C code compiled with Open	MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 29 14:38:18 2011" -->
<!-- isoreceived="20110329183818" -->
<!-- sent="Tue, 29 Mar 2011 14:38:10 -0400" -->
<!-- isosent="20110329183810" -->
<!-- name="Prentice Bisbal" -->
<!-- email="prentice_at_[hidden]" -->
<!-- subject="Re: [OMPI users] printf and scanf problem of C code compiled with Open	MPI" -->
<!-- id="4D922712.9020109_at_ias.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTimJd85+DfBPuSS+k2DS3JJUg4Hf7u2qhY9jdEMg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] printf and scanf problem of C code compiled with Open	MPI<br>
<strong>From:</strong> Prentice Bisbal (<em>prentice_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-29 14:38:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16046.php">job hunter: "Re: [OMPI users] help with hybrid openmp and mpi"</a>
<li><strong>Previous message:</strong> <a href="16044.php">Meilin Bai: "[OMPI users] printf and scanf problem of C code compiled with Open MPI"</a>
<li><strong>In reply to:</strong> <a href="16044.php">Meilin Bai: "[OMPI users] printf and scanf problem of C code compiled with Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16048.php">Meilin Bai: "Re: [OMPI users] printf and scanf problem of C code compiled with Open MPI"</a>
<li><strong>Reply:</strong> <a href="16048.php">Meilin Bai: "Re: [OMPI users] printf and scanf problem of C code compiled with Open MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 03/29/2011 01:29 PM, Meilin Bai wrote:
<br>
<span class="quotelev1">&gt; Dear open-mpi users:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I come across a little problem when running a MPI C program compiled
</span><br>
<span class="quotelev1">&gt; with Open MPI 1.4.3. A part of codes as follows:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;     MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;     MPI_Comm_size(MPI_COMM_WORLD, &amp;numprocs);
</span><br>
<span class="quotelev1">&gt;     MPI_Comm_rank(MPI_COMM_WORLD, &amp;myid);
</span><br>
<span class="quotelev1">&gt;     MPI_Get_processor_name(processor_name, &amp;namelen);
</span><br>
<span class="quotelev1">&gt;     if (myid == 0) {
</span><br>
<span class="quotelev1">&gt;          printf(&quot;Please give N= &quot;);
</span><br>
<span class="quotelev1">&gt;          //fflush(stdout);
</span><br>
<span class="quotelev1">&gt;          scanf(&quot;%d&quot;, &amp;n);
</span><br>
<span class="quotelev1">&gt;          startwtime = MPI_Wtime();
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; If comment out the sentence of &quot;fflush(stdout);&quot;, it doesn't print out
</span><br>
<span class="quotelev1">&gt; the message till I input an integer n. And if I add the fflush function
</span><br>
<span class="quotelev1">&gt; between them, it works as expected, though comsumming time obviously.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; However, when I compiled it with Mpich2-1.3.2p1, without fflush function
</span><br>
<span class="quotelev1">&gt; in the code, it works correctly.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Can anyone know what the matter is.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<p>The Open MPI Developers (Jeff, Ralph, etc) can confirm this:
<br>
<p>The MPI standard doesn't have a lot of strict requirements for I/O
<br>
behavior like this, so implementations are allowed to buffer I/O if they
<br>
want. There is nothing wrong with requiring fflush(stdout) in order to
<br>
get the behavior you want. In fact, if you check some text books on MPI
<br>
programming, I'm pretty sure they recommend using fflush to minimize
<br>
this problem.
<br>
<p>MPICH behaves differently because its developers made different design
<br>
choices.
<br>
<p>Neither behavior is &quot;wrong&quot;.
<br>
<p><pre>
-- 
Prentice
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16046.php">job hunter: "Re: [OMPI users] help with hybrid openmp and mpi"</a>
<li><strong>Previous message:</strong> <a href="16044.php">Meilin Bai: "[OMPI users] printf and scanf problem of C code compiled with Open MPI"</a>
<li><strong>In reply to:</strong> <a href="16044.php">Meilin Bai: "[OMPI users] printf and scanf problem of C code compiled with Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16048.php">Meilin Bai: "Re: [OMPI users] printf and scanf problem of C code compiled with Open MPI"</a>
<li><strong>Reply:</strong> <a href="16048.php">Meilin Bai: "Re: [OMPI users] printf and scanf problem of C code compiled with Open MPI"</a>
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
