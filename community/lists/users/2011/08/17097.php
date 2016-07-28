<?
$subject_val = "Re: [OMPI users] Compiling both 32-bit and 64-bit?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 24 14:41:25 2011" -->
<!-- isoreceived="20110824184125" -->
<!-- sent="Wed, 24 Aug 2011 18:41:03 +0000" -->
<!-- isosent="20110824184103" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Compiling both 32-bit and 64-bit?" -->
<!-- id="CA7A92EB.60AE%bwbarre_at_sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAGR4S9HVRgPn7PmszZzCdaGkrpRAZ-qC79L-epGg730FH+TcPQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Compiling both 32-bit and 64-bit?<br>
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-24 14:41:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17098.php">Dmitry N. Mikushin: "Re: [OMPI users] Compiling both 32-bit and 64-bit?"</a>
<li><strong>Previous message:</strong> <a href="17096.php">Dmitry N. Mikushin: "[OMPI users] Compiling both 32-bit and 64-bit?"</a>
<li><strong>In reply to:</strong> <a href="17096.php">Dmitry N. Mikushin: "[OMPI users] Compiling both 32-bit and 64-bit?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17098.php">Dmitry N. Mikushin: "Re: [OMPI users] Compiling both 32-bit and 64-bit?"</a>
<li><strong>Reply:</strong> <a href="17098.php">Dmitry N. Mikushin: "Re: [OMPI users] Compiling both 32-bit and 64-bit?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 8/24/11 11:29 AM, &quot;Dmitry N. Mikushin&quot; &lt;maemarcus_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;Quick question: is there an easy switch to compile and install both
</span><br>
<span class="quotelev1">&gt;32-bit and 64-bit OpenMPI libraries into a single tree? E.g. 64-bit in
</span><br>
<span class="quotelev1">&gt;/prefix/lib64 and 32-bit in /prefix/lib.
</span><br>
<p>Quick answer: not easily.
<br>
<p>Long answer: There's not an easy way, but there are some facilities to
<br>
help.  I believe Oracle uses them when building binaries for Solaris.
<br>
There is some documentation available on our Trac wiki:
<br>
<p>&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/wiki/MultiLib">https://svn.open-mpi.org/trac/ompi/wiki/MultiLib</a>
<br>
&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/wiki/compilerwrapper3264">https://svn.open-mpi.org/trac/ompi/wiki/compilerwrapper3264</a>
<br>
<p>The difficulty is that it's up to the user/admin to make sure the correct
<br>
arguments are provided, as well as writing the wrapper script files to do
<br>
the sharing.
<br>
<p>Brian
<br>
<p><pre>
-- 
  Brian W. Barrett
  Dept. 1423: Scalable System Software
  Sandia National Laboratories
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17098.php">Dmitry N. Mikushin: "Re: [OMPI users] Compiling both 32-bit and 64-bit?"</a>
<li><strong>Previous message:</strong> <a href="17096.php">Dmitry N. Mikushin: "[OMPI users] Compiling both 32-bit and 64-bit?"</a>
<li><strong>In reply to:</strong> <a href="17096.php">Dmitry N. Mikushin: "[OMPI users] Compiling both 32-bit and 64-bit?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17098.php">Dmitry N. Mikushin: "Re: [OMPI users] Compiling both 32-bit and 64-bit?"</a>
<li><strong>Reply:</strong> <a href="17098.php">Dmitry N. Mikushin: "Re: [OMPI users] Compiling both 32-bit and 64-bit?"</a>
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
