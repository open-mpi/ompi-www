<?
$subject_val = "Re: [OMPI users] problem starting openmpi on core duo macosx5";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Aug 15 07:52:09 2009" -->
<!-- isoreceived="20090815115209" -->
<!-- sent="Sat, 15 Aug 2009 07:52:03 -0400" -->
<!-- isosent="20090815115203" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem starting openmpi on core duo macosx5" -->
<!-- id="6B2995F4-A98D-4304-BEEB-59E16AC2755E_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="F2D7D4BD-0249-480D-93F3-DD750D323E12_at_uu.nl" -->
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
<strong>Subject:</strong> Re: [OMPI users] problem starting openmpi on core duo macosx5<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-15 07:52:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10373.php">Joop van Lenthe: "Re: [OMPI users] problem starting openmpi on core duo macosx5"</a>
<li><strong>Previous message:</strong> <a href="10371.php">Joop van Lenthe: "[OMPI users] problem starting openmpi on core duo macosx5"</a>
<li><strong>In reply to:</strong> <a href="10371.php">Joop van Lenthe: "[OMPI users] problem starting openmpi on core duo macosx5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10373.php">Joop van Lenthe: "Re: [OMPI users] problem starting openmpi on core duo macosx5"</a>
<li><strong>Reply:</strong> <a href="10373.php">Joop van Lenthe: "Re: [OMPI users] problem starting openmpi on core duo macosx5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 15, 2009, at 7:44 AM, Joop van Lenthe wrote:
<br>
<p><span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt; I downloaded and compiled openmpi and installed it.
</span><br>
<span class="quotelev1">&gt; I set met public /private keys.
</span><br>
<span class="quotelev1">&gt; I try to run and get:
</span><br>
<span class="quotelev1">&gt; ./gamess
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; A requested component was not found, or was unable to be opened.  This
</span><br>
<span class="quotelev1">&gt; means that this component is either not installed or is unable to be
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Was gamess compiled against the new version of Open MPI that you  
<br>
downloaded and installed?
<br>
<p>Note that OS X ships with its own version of Open MPI -- you should  
<br>
probably install Open MPI into an alternate location (e.g., /usr/ 
<br>
local) and put it in the front of your PATH (e.g., put /usr/local/bin  
<br>
in front of your path).  Then you should be able to use mpicc/mpif77/ 
<br>
etc. to compile and link MPI applications as normal with the new  
<br>
version.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10373.php">Joop van Lenthe: "Re: [OMPI users] problem starting openmpi on core duo macosx5"</a>
<li><strong>Previous message:</strong> <a href="10371.php">Joop van Lenthe: "[OMPI users] problem starting openmpi on core duo macosx5"</a>
<li><strong>In reply to:</strong> <a href="10371.php">Joop van Lenthe: "[OMPI users] problem starting openmpi on core duo macosx5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10373.php">Joop van Lenthe: "Re: [OMPI users] problem starting openmpi on core duo macosx5"</a>
<li><strong>Reply:</strong> <a href="10373.php">Joop van Lenthe: "Re: [OMPI users] problem starting openmpi on core duo macosx5"</a>
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
