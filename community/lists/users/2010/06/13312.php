<?
$subject_val = "Re: [OMPI users] Master / Slave with Fortran / C languages";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 11 07:12:51 2010" -->
<!-- isoreceived="20100611111251" -->
<!-- sent="Fri, 11 Jun 2010 07:12:48 -0400" -->
<!-- isosent="20100611111248" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Master / Slave with Fortran / C languages" -->
<!-- id="B2A4F8C3-1811-48CE-97EA-0A22C964ECCB_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4C120914.4090309_at_free.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] Master / Slave with Fortran / C languages<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-11 07:12:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13313.php">Jeff Squyres: "Re: [OMPI users] problem with mpirun"</a>
<li><strong>Previous message:</strong> <a href="13311.php">Peter Kjellstrom: "Re: [OMPI users] (no subject)"</a>
<li><strong>In reply to:</strong> <a href="13310.php">Giraudon Cyril: "[OMPI users] Master / Slave with Fortran / C languages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13314.php">Giraudon Cyril: "Re: [OMPI users] Master / Slave with Fortran / C languages"</a>
<li><strong>Reply:</strong> <a href="13314.php">Giraudon Cyril: "Re: [OMPI users] Master / Slave with Fortran / C languages"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 11, 2010, at 5:59 AM, Giraudon Cyril wrote:
<br>
<p><span class="quotelev1">&gt; I'd like to know if it is possible to make communicate fortran and C
</span><br>
<span class="quotelev1">&gt; programs with MPI-2/Open MPI using the master / slave mode ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The master is in Fortran
</span><br>
<span class="quotelev1">&gt; The slave is in C
</span><br>
<span class="quotelev1">&gt; The exchanged Data are real, integer and character scalars and arrays.
</span><br>
<p>Yes, it should be no problem.  It is easiest when the representations of the data by your two compilers are the same (e.g., REAL == float, INTEGER == int).  It may be easiest to use compilers from the same vendor / family for linkage purposes, but it probably isn't 100% necessary.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13313.php">Jeff Squyres: "Re: [OMPI users] problem with mpirun"</a>
<li><strong>Previous message:</strong> <a href="13311.php">Peter Kjellstrom: "Re: [OMPI users] (no subject)"</a>
<li><strong>In reply to:</strong> <a href="13310.php">Giraudon Cyril: "[OMPI users] Master / Slave with Fortran / C languages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13314.php">Giraudon Cyril: "Re: [OMPI users] Master / Slave with Fortran / C languages"</a>
<li><strong>Reply:</strong> <a href="13314.php">Giraudon Cyril: "Re: [OMPI users] Master / Slave with Fortran / C languages"</a>
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
