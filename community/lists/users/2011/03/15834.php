<?
$subject_val = "Re: [OMPI users] Open MPI access the same file in parallel ?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 10 01:54:29 2011" -->
<!-- isoreceived="20110310065429" -->
<!-- sent="Wed, 09 Mar 2011 22:54:18 -0800" -->
<!-- isosent="20110310065418" -->
<!-- name="Tim Prince" -->
<!-- email="n8tm_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI access the same file in parallel ?" -->
<!-- id="4D78759A.7040904_at_aol.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTim_r6E_xqL9MVfpFB7y=2Y1xReKHmfLRk5ofZij_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open MPI access the same file in parallel ?<br>
<strong>From:</strong> Tim Prince (<em>n8tm_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-10 01:54:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15835.php">Belaid MOA: "Re: [OMPI users] Open MPI access the same file in parallel ?"</a>
<li><strong>Previous message:</strong> <a href="15833.php">Jack Bryan: "Re: [OMPI users] Open MPI access the same file in parallel ?"</a>
<li><strong>In reply to:</strong> <a href="15829.php">David Zhang: "Re: [OMPI users] Open MPI access the same file in parallel ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15836.php">Jack Bryan: "Re: [OMPI users] Open MPI access the same file in parallel ?"</a>
<li><strong>Reply:</strong> <a href="15836.php">Jack Bryan: "Re: [OMPI users] Open MPI access the same file in parallel ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 3/9/2011 8:57 PM, David Zhang wrote:
<br>
<span class="quotelev1">&gt; Under my programming environment, FORTRAN, it is possible to parallel
</span><br>
<span class="quotelev1">&gt; read (using native read function instead of MPI's parallel read
</span><br>
<span class="quotelev1">&gt; function).  Although you'll run into problem when you try to parallel
</span><br>
<span class="quotelev1">&gt; write to the same file.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>If your Fortran compiler/library are reasonably up to date, you will 
<br>
need to specify action='read' as opening once with default readwrite 
<br>
will lock out other processes.
<br>
<pre>
-- 
Tim Prince
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15835.php">Belaid MOA: "Re: [OMPI users] Open MPI access the same file in parallel ?"</a>
<li><strong>Previous message:</strong> <a href="15833.php">Jack Bryan: "Re: [OMPI users] Open MPI access the same file in parallel ?"</a>
<li><strong>In reply to:</strong> <a href="15829.php">David Zhang: "Re: [OMPI users] Open MPI access the same file in parallel ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15836.php">Jack Bryan: "Re: [OMPI users] Open MPI access the same file in parallel ?"</a>
<li><strong>Reply:</strong> <a href="15836.php">Jack Bryan: "Re: [OMPI users] Open MPI access the same file in parallel ?"</a>
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
