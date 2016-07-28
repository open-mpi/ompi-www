<?
$subject_val = "Re: [OMPI users] Conflicting versions of libgfortran.so with mpif90? Solved!";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 16 10:17:38 2011" -->
<!-- isoreceived="20110616141738" -->
<!-- sent="Thu, 16 Jun 2011 15:18:03 +0100" -->
<!-- isosent="20110616141803" -->
<!-- name="Michael Cugley" -->
<!-- email="Michael.Cugley_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Conflicting versions of libgfortran.so with mpif90? Solved!" -->
<!-- id="4DFA109B.2050402_at_Glasgow.ac.uk" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="[OMPI users] Conflicting versions of libgfortran.so with mpif90? Solved!" -->
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
<strong>Subject:</strong> Re: [OMPI users] Conflicting versions of libgfortran.so with mpif90? Solved!<br>
<strong>From:</strong> Michael Cugley (<em>Michael.Cugley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-16 10:18:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16726.php">Constantinos Makassikis: "[OMPI users] Meaning of ./configure --with-ft=LAM option"</a>
<li><strong>Previous message:</strong> <a href="16724.php">Barrett, Brian W: "Re: [OMPI users] Passive target performance (was: Deadlock with barrier und RMA)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On June 14, 2011 at 12:35 PM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Are they using a different version of gfortran to compile / link their 
</span><br>
<span class="quotelev1">&gt; application than what was used to compile / build Open MPI?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FWIW: it's typically easier to use the same compilers to build Open 
</span><br>
<span class="quotelev1">&gt; MPI as the application.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>That did, in fact, turn out to be the problem.  After some head 
<br>
scratching and the mighty Google, I found this page: 
<br>
<a href="https://www.scotgrid.ac.uk/wiki/index.php/Building_OPENMPI">https://www.scotgrid.ac.uk/wiki/index.php/Building_OPENMPI</a> which 
<br>
(amongst other things) gave me the requisite flags to feed configure.
<br>
<p>Oddly, ldd on the resulting executable still shows references to 
<br>
libgfortran.so.3 and .so.1, but the warnings are gone and the user is 
<br>
happy, so I'm counting it as a victory.
<br>
<p><pre>
-- 
Michael Cugley
School of Engineering IT Support
M.Cugley_at_[hidden]
Please direct IT support queries to itsupport_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16726.php">Constantinos Makassikis: "[OMPI users] Meaning of ./configure --with-ft=LAM option"</a>
<li><strong>Previous message:</strong> <a href="16724.php">Barrett, Brian W: "Re: [OMPI users] Passive target performance (was: Deadlock with barrier und RMA)"</a>
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
