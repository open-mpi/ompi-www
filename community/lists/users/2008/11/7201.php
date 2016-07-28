<?
$subject_val = "Re: [OMPI users] Problems installing in Cygwin - Problem with GCC 3.4.4";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  4 04:23:41 2008" -->
<!-- isoreceived="20081104092341" -->
<!-- sent="Tue, 4 Nov 2008 10:23:37 +0100 (CET)" -->
<!-- isosent="20081104092337" -->
<!-- name="Terry Frankcombe" -->
<!-- email="terry_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems installing in Cygwin - Problem with GCC 3.4.4" -->
<!-- id="44804.61.69.3.161.1225790617.squirrel_at_webmail.chalmers.se" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="f79359b60811031919y2b6a14bfybd0f8d9079e8ecfc_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problems installing in Cygwin - Problem with GCC 3.4.4<br>
<strong>From:</strong> Terry Frankcombe (<em>terry_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-04 04:23:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7202.php">Olivier Marsden: "[OMPI users] question regarding the configuration of multiple nics for openmpi"</a>
<li><strong>Previous message:</strong> <a href="7200.php">Gustavo Seabra: "Re: [OMPI users] Problems installing in Cygwin - Problem with GCC 3.4.4"</a>
<li><strong>In reply to:</strong> <a href="7200.php">Gustavo Seabra: "Re: [OMPI users] Problems installing in Cygwin - Problem with GCC 3.4.4"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; *** Fortran 90/95 compiler
</span><br>
<span class="quotelev1">&gt; checking whether we are using the GNU Fortran compiler... yes
</span><br>
<span class="quotelev1">&gt; checking whether g95 accepts -g... yes
</span><br>
<span class="quotelev1">&gt; checking if Fortran compiler works... yes
</span><br>
<span class="quotelev1">&gt; checking whether g95 and g95 compilers are compatible... no
</span><br>
<span class="quotelev1">&gt; configure: WARNING: *** Fortran 77 and Fortran 90 compilers are not
</span><br>
<span class="quotelev1">&gt; link compatible
</span><br>
<span class="quotelev1">&gt; configure: WARNING: *** Disabling MPI Fortran 90/95 bindings
</span><br>
<p><p>OK, for that one I think you need to dig into config.log and see exactly
<br>
what's failing and why.
<br>
<p>I can't speak for the developers, but it seems slightly concerning that
<br>
configure thinks it's using &quot;the GNU Fortran compiler&quot;.  I feel sure the
<br>
GNU people would object to g95 being called that.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7202.php">Olivier Marsden: "[OMPI users] question regarding the configuration of multiple nics for openmpi"</a>
<li><strong>Previous message:</strong> <a href="7200.php">Gustavo Seabra: "Re: [OMPI users] Problems installing in Cygwin - Problem with GCC 3.4.4"</a>
<li><strong>In reply to:</strong> <a href="7200.php">Gustavo Seabra: "Re: [OMPI users] Problems installing in Cygwin - Problem with GCC 3.4.4"</a>
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
