<?
$subject_val = "Re: [OMPI users] Master / Slave with Fortran / C languages";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 11 08:22:40 2010" -->
<!-- isoreceived="20100611122240" -->
<!-- sent="Fri, 11 Jun 2010 14:22:34 +0200" -->
<!-- isosent="20100611122234" -->
<!-- name="Giraudon Cyril" -->
<!-- email="cyril.giraudon_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Master / Slave with Fortran / C languages" -->
<!-- id="4C122A8A.1050706_at_free.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="B2A4F8C3-1811-48CE-97EA-0A22C964ECCB_at_cisco.com" -->
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
<strong>From:</strong> Giraudon Cyril (<em>cyril.giraudon_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-11 08:22:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13315.php">David Zhang: "Re: [OMPI users] Master / Slave with Fortran / C languages"</a>
<li><strong>Previous message:</strong> <a href="13313.php">Jeff Squyres: "Re: [OMPI users] problem with mpirun"</a>
<li><strong>In reply to:</strong> <a href="13312.php">Jeff Squyres: "Re: [OMPI users] Master / Slave with Fortran / C languages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13315.php">David Zhang: "Re: [OMPI users] Master / Slave with Fortran / C languages"</a>
<li><strong>Reply:</strong> <a href="13315.php">David Zhang: "Re: [OMPI users] Master / Slave with Fortran / C languages"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 11/06/2010 13:12, Jeff Squyres a &#233;crit :
<br>
<span class="quotelev1">&gt; On Jun 11, 2010, at 5:59 AM, Giraudon Cyril wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; I'd like to know if it is possible to make communicate fortran and C
</span><br>
<span class="quotelev2">&gt;&gt; programs with MPI-2/Open MPI using the master / slave mode ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The master is in Fortran
</span><br>
<span class="quotelev2">&gt;&gt; The slave is in C
</span><br>
<span class="quotelev2">&gt;&gt; The exchanged Data are real, integer and character scalars and arrays.
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt; Yes, it should be no problem.  It is easiest when the representations of the data by your two compilers are the same (e.g., REAL == float, INTEGER == int).  It may be easiest to use compilers from the same vendor / family for linkage purposes, but it probably isn't 100% necessary.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
Thanks a lot jeff.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13315.php">David Zhang: "Re: [OMPI users] Master / Slave with Fortran / C languages"</a>
<li><strong>Previous message:</strong> <a href="13313.php">Jeff Squyres: "Re: [OMPI users] problem with mpirun"</a>
<li><strong>In reply to:</strong> <a href="13312.php">Jeff Squyres: "Re: [OMPI users] Master / Slave with Fortran / C languages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13315.php">David Zhang: "Re: [OMPI users] Master / Slave with Fortran / C languages"</a>
<li><strong>Reply:</strong> <a href="13315.php">David Zhang: "Re: [OMPI users] Master / Slave with Fortran / C languages"</a>
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
