<?
$subject_val = "Re: [OMPI users] Abort";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 12 22:49:08 2010" -->
<!-- isoreceived="20100813024908" -->
<!-- sent="Thu, 12 Aug 2010 22:48:58 -0400" -->
<!-- isosent="20100813024858" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Abort" -->
<!-- id="4C64B29A.8050306_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTi=RFTUyN3RhzQAFWmAE1_P=Sao0HTJHgA=70LgG_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Abort<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-12 22:48:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14007.php">Jed Brown: "Re: [OMPI users] OpenMPI Run-Time &quot;Freedom&quot; Question"</a>
<li><strong>Previous message:</strong> <a href="14005.php">Ralph Castain: "Re: [OMPI users] Abort"</a>
<li><strong>In reply to:</strong> <a href="14004.php">David Zhang: "Re: [OMPI users] Abort"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14005.php">Ralph Castain: "Re: [OMPI users] Abort"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
David Zhang wrote:
<br>
<span class="quotelev1">&gt; When my MPI code fails (seg fault), it usually cause the rest of the mpi 
</span><br>
<span class="quotelev1">&gt; process to abort as well.  Perhaps rather than calling abort(), perhaps 
</span><br>
<span class="quotelev1">&gt; you could do a divide-by-zero operation to halt the program?
</span><br>
<span class="quotelev1">&gt; David Zhang
</span><br>
<span class="quotelev1">&gt; University of California, San Diego
</span><br>
<span class="quotelev1"> &gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Aug 12, 2010 at 6:49 PM, David Ronis &lt;David.Ronis_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:David.Ronis_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     I've got a mpi program that is supposed to to generate a core file if
</span><br>
<span class="quotelev1">&gt;     problems arise on any of the nodes.   I tried to do this by adding a
</span><br>
<span class="quotelev1">&gt;     call to abort() to my exit routines but this doesn't work; I get no core
</span><br>
<span class="quotelev1">&gt;     file, and worse, mpirun doesn't detect that one of my nodes has
</span><br>
<span class="quotelev1">&gt;     aborted(?) and doesn't kill off the entire job, except in the trivial
</span><br>
<span class="quotelev1">&gt;     case where the number of processors I'm running on is 1.   I've replaced
</span><br>
<span class="quotelev1">&gt;     abort with MPI_Abort, which kills everything off, but leaves no core
</span><br>
<span class="quotelev1">&gt;     file.  Any suggestions how I can get one and still have mpi exit?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     Thanks in advance.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     David
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<p>Also, make sure your computers' coredumpsize / core file size
<br>
limit is not zero, which is sometimes the case.
<br>
<p>Gus Correa
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14007.php">Jed Brown: "Re: [OMPI users] OpenMPI Run-Time &quot;Freedom&quot; Question"</a>
<li><strong>Previous message:</strong> <a href="14005.php">Ralph Castain: "Re: [OMPI users] Abort"</a>
<li><strong>In reply to:</strong> <a href="14004.php">David Zhang: "Re: [OMPI users] Abort"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14005.php">Ralph Castain: "Re: [OMPI users] Abort"</a>
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
