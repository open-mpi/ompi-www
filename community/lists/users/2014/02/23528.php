<?
$subject_val = "[OMPI users] Use of __float128 with openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Feb  1 12:42:50 2014" -->
<!-- isoreceived="20140201174250" -->
<!-- sent="Sat, 1 Feb 2014 18:42:47 +0100" -->
<!-- isosent="20140201174247" -->
<!-- name="Patrick Boehl" -->
<!-- email="Patrick.Boehl_at_[hidden]" -->
<!-- subject="[OMPI users] Use of __float128 with openmpi" -->
<!-- id="3C9B9D09-E30C-4C66-B5C4-C493F51E5F7A_at_physik.uni-muenchen.de" -->
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
<strong>Subject:</strong> [OMPI users] Use of __float128 with openmpi<br>
<strong>From:</strong> Patrick Boehl (<em>Patrick.Boehl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-01 12:42:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23529.php">Tim Prince: "Re: [OMPI users] Use of __float128 with openmpi"</a>
<li><strong>Previous message:</strong> <a href="23527.php">Siddhartha Jana: "Re: [OMPI users] Implementation of TCP v/s OpenIB (Eager and Rendezvous) protocols"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23529.php">Tim Prince: "Re: [OMPI users] Use of __float128 with openmpi"</a>
<li><strong>Reply:</strong> <a href="23529.php">Tim Prince: "Re: [OMPI users] Use of __float128 with openmpi"</a>
<li><strong>Reply:</strong> <a href="23530.php">Tim Prince: "Re: [OMPI users] Use of __float128 with openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>I have a question on datatypes in openmpi:
<br>
<p>Is there an (easy?) way to use __float128 variables with openmpi?
<br>
<p>Specifically, functions like  
<br>
<p>MPI_Allreduce
<br>
<p>seem to give weird results with __float128.
<br>
<p>Essentially all I found was
<br>
<p><a href="http://beige.ucs.indiana.edu/I590/node100.html">http://beige.ucs.indiana.edu/I590/node100.html</a>
<br>
<p>where they state
<br>
<pre>
----
MPI_LONG_DOUBLE
  This is a quadruple precision, 128-bit long floating point number.
----
But as far as I have seen, MPI_LONG_DOUBLE is only used for long doubles.
The Open MPI Version is 1.6.3 and gcc is 4.7.3 on a x86_64 machine.
Any help or comment is very appreciated!
Best regards,
Patrick
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23529.php">Tim Prince: "Re: [OMPI users] Use of __float128 with openmpi"</a>
<li><strong>Previous message:</strong> <a href="23527.php">Siddhartha Jana: "Re: [OMPI users] Implementation of TCP v/s OpenIB (Eager and Rendezvous) protocols"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23529.php">Tim Prince: "Re: [OMPI users] Use of __float128 with openmpi"</a>
<li><strong>Reply:</strong> <a href="23529.php">Tim Prince: "Re: [OMPI users] Use of __float128 with openmpi"</a>
<li><strong>Reply:</strong> <a href="23530.php">Tim Prince: "Re: [OMPI users] Use of __float128 with openmpi"</a>
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
