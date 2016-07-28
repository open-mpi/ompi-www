<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Jan 28 13:22:03 2007" -->
<!-- isoreceived="20070128182203" -->
<!-- sent="Sun, 28 Jan 2007 19:22:58 +0100" -->
<!-- isosent="20070128182258" -->
<!-- name="Harald Servat" -->
<!-- email="harald_at_[hidden]" -->
<!-- subject="[OMPI users] openmpi configure skips --enable-peruse" -->
<!-- id="20070128182258.GA22856_at_keops.cepba.upc.es" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Harald Servat (<em>harald_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-01-28 13:22:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2551.php">Rainer Keller: "Re: [OMPI users] openmpi configure skips --enable-peruse"</a>
<li><strong>Previous message:</strong> <a href="2549.php">Brian W. Barrett: "Re: [OMPI users] Open mpi with MAC OSX on intel macs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2551.php">Rainer Keller: "Re: [OMPI users] openmpi configure skips --enable-peruse"</a>
<li><strong>Reply:</strong> <a href="2551.php">Rainer Keller: "Re: [OMPI users] openmpi configure skips --enable-peruse"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>&nbsp;&nbsp;I'm trying to compile OpenMPI on a FreeBSD 6.2 machine. I'm experiencing problems when asking configure to add peruse support.
<br>
<p>&nbsp;&nbsp;When launching &gt; ./configure --prefix=mydir --enable-peruse
<br>
<p>&nbsp;&nbsp;it seems to ignore it.
<br>
<p>&nbsp;&nbsp;I've checking configure and your bugtrack and I'm wondering if the line #328 found in <a href="https://svn.open-mpi.org/trac/ompi/changeset/9372">https://svn.open-mpi.org/trac/ompi/changeset/9372</a> must say
<br>
<p>&nbsp;&nbsp;if test &quot;$enable_peruse&quot; = &quot;yes&quot;; then
<br>
<p>&nbsp;&nbsp;instead of,
<br>
<p>&nbsp;&nbsp;if test &quot;$enable_peruse&quot; == &quot;yes&quot;; then
<br>
<p>&nbsp;&nbsp;If I change this line in this manner, it seems to pass the configure with the peruse enabled (at least it is stated on the config.log).
<br>
<p>Regards,
<br>
<p><pre>
-- 
================================================================================
   o//o Harald Servat Gelabert (harald at cepba dot upc dot edu)
  o//o  Centre Europeu de Paral.lelisme de Barcelona (CEPBA)
 o//o   Tel: +34-93-401 74 20 Fax: +34-93-401 25 77
o//o    c/Jordi Girona, 1-3, Modul C6 Despatx E203. E-08034 Barcelona, Catalunya
================================================================================
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2551.php">Rainer Keller: "Re: [OMPI users] openmpi configure skips --enable-peruse"</a>
<li><strong>Previous message:</strong> <a href="2549.php">Brian W. Barrett: "Re: [OMPI users] Open mpi with MAC OSX on intel macs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2551.php">Rainer Keller: "Re: [OMPI users] openmpi configure skips --enable-peruse"</a>
<li><strong>Reply:</strong> <a href="2551.php">Rainer Keller: "Re: [OMPI users] openmpi configure skips --enable-peruse"</a>
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
