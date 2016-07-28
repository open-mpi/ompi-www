<?
$subject_val = "Re: [OMPI users] Embarrassingly parallel problems with MapReduce and MPI ?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 13 05:36:13 2009" -->
<!-- isoreceived="20090713093613" -->
<!-- sent="Mon, 13 Jul 2009 10:36:24 +0100" -->
<!-- isosent="20090713093624" -->
<!-- name="Ashley Pittman" -->
<!-- email="ashley_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Embarrassingly parallel problems with MapReduce and MPI ?" -->
<!-- id="1247477784.3733.66.camel_at_alpha" -->
<!-- inreplyto="4A5ADCF5.9020801_at_biggjapan.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Embarrassingly parallel problems with MapReduce and MPI ?<br>
<strong>From:</strong> Ashley Pittman (<em>ashley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-13 05:36:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9937.php">Rodrigo Delgado Urzúa: "[OMPI users] OpenMPI SCI support"</a>
<li><strong>Previous message:</strong> <a href="9935.php">Ashley Pittman: "Re: [OMPI users] Problems in OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="9933.php">Ashika Umanga Umagiliya: "[OMPI users] Embarrassingly parallel problems with MapReduce and MPI ?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, 2009-07-13 at 16:06 +0900, Ashika Umanga Umagiliya wrote:
<br>
<p><span class="quotelev1">&gt; I am just curious, if the problem is embarrassingly parallel , then how 
</span><br>
<span class="quotelev1">&gt; effective using MPI over a 'MapReduce' implementation(apache Hadoop ) .
</span><br>
<p>Almost impossible.  You could implement MapReduce on top of MPI fairly
<br>
trivially however.
<br>
<p>The problem being Embarrassingly parallel is of no consequence beyond
<br>
the fact that if it was they you wouldn't need either MPI or MapReduce.
<br>
<p>Ashley.
<br>
<p><pre>
-- 
Ashley Pittman, Bath, UK.
Padb - A parallel job inspection tool for cluster computing
<a href="http://padb.pittman.org.uk">http://padb.pittman.org.uk</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9937.php">Rodrigo Delgado Urzúa: "[OMPI users] OpenMPI SCI support"</a>
<li><strong>Previous message:</strong> <a href="9935.php">Ashley Pittman: "Re: [OMPI users] Problems in OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="9933.php">Ashika Umanga Umagiliya: "[OMPI users] Embarrassingly parallel problems with MapReduce and MPI ?"</a>
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
