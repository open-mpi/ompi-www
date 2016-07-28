<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Jan 28 14:38:08 2007" -->
<!-- isoreceived="20070128193808" -->
<!-- sent="Sun, 28 Jan 2007 20:37:40 +0100" -->
<!-- isosent="20070128193740" -->
<!-- name="Rainer Keller" -->
<!-- email="keller_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi configure skips --enable-peruse" -->
<!-- id="200701282037.40939.keller_at_hlrs.de" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="20070128182258.GA22856_at_keops.cepba.upc.es" -->
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
<strong>From:</strong> Rainer Keller (<em>keller_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-01-28 14:37:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2552.php">Chevchenkovic Chevchenkovic: "[OMPI users] expected behavior of end statement before MPI_Finalise()"</a>
<li><strong>Previous message:</strong> <a href="2550.php">Harald Servat: "[OMPI users] openmpi configure skips --enable-peruse"</a>
<li><strong>In reply to:</strong> <a href="2550.php">Harald Servat: "[OMPI users] openmpi configure skips --enable-peruse"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Harald,
<br>
On Sunday 28 January 2007 19:22, Harald Servat wrote:
<br>
<span class="quotelev1">&gt;   I've checking configure and your bugtrack and I'm wondering if the line
</span><br>
<span class="quotelev1">&gt; #328 found in <a href="https://svn.open-mpi.org/trac/ompi/changeset/9372">https://svn.open-mpi.org/trac/ompi/changeset/9372</a> must say
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   if test &quot;$enable_peruse&quot; = &quot;yes&quot;; then
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   instead of,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   if test &quot;$enable_peruse&quot; == &quot;yes&quot;; then
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   If I change this line in this manner, it seems to pass the configure with
</span><br>
<span class="quotelev1">&gt; the peruse enabled (at least it is stated on the config.log).
</span><br>
Yes, You're right; however, this is not the case in the SVN-trunk version.
<br>
<p>Thanks for noticing,
<br>
Rainer
<br>
<pre>
-- 
----------------------------------------------------------------
Dipl.-Inf. Rainer Keller       <a href="http://www.hlrs.de/people/keller">http://www.hlrs.de/people/keller</a>
 High Performance Computing       Tel: ++49 (0)711-685 6 5858
   Center Stuttgart (HLRS)           Fax: ++49 (0)711-685 6 5832
 POSTAL:Nobelstrasse 19                 email: keller_at_[hidden]     
 ACTUAL:Allmandring 30, R.O.030            AIM:rusraink
 70550 Stuttgart
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2552.php">Chevchenkovic Chevchenkovic: "[OMPI users] expected behavior of end statement before MPI_Finalise()"</a>
<li><strong>Previous message:</strong> <a href="2550.php">Harald Servat: "[OMPI users] openmpi configure skips --enable-peruse"</a>
<li><strong>In reply to:</strong> <a href="2550.php">Harald Servat: "[OMPI users] openmpi configure skips --enable-peruse"</a>
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
