<?
$subject_val = "[OMPI users] question about OMPI_MPIF90";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 20 15:28:56 2011" -->
<!-- isoreceived="20111220202856" -->
<!-- sent="Tue, 20 Dec 2011 12:28:49 -0800" -->
<!-- isosent="20111220202849" -->
<!-- name="Steve Heistand" -->
<!-- email="steve.heistand_at_[hidden]" -->
<!-- subject="[OMPI users] question about OMPI_MPIF90" -->
<!-- id="4EF0F001.9090800_at_nasa.gov" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] question about OMPI_MPIF90<br>
<strong>From:</strong> Steve Heistand (<em>steve.heistand_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-20 15:28:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18014.php">V. Ram: "Re: [OMPI users] Error launching w/ 1.5.3 on IB mthca nodes"</a>
<li><strong>Previous message:</strong> <a href="18012.php">Mathieu westphal: "Re: [OMPI users] Passwordless ssh"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
so from what Ive seen all over the interwweb the OMPI_MPIF77/90 environment variables are able to
<br>
override the default compilers when using the mpif77/mpif90 wrappers.
<br>
But from what I have seen the F90 one doesnt seem to.
<br>
<p>Using 1.4.3 and 1.4.4 for example:
<br>
<p>bridge3:heistand% mpif90 -v
<br>
Version 11.1
<br>
bridge3:heistand% setenv OMPI_MPIF90 test
<br>
bridge3:heistand% mpif90 -v
<br>
Version 11.1
<br>
<p>bridge3:heistand% setenv OMPI_MPIF90 gfortran
<br>
bridge3:heistand% mpif90 -v
<br>
Version 11.1
<br>
<p>(didnt change what the wrapper used.)
<br>
but for F77:
<br>
<p>bridge3:heistand% mpif77 -v
<br>
Version 11.1
<br>
<p>bridge3:heistand% setenv OMPI_MPIF77 gfortran
<br>
bridge3:heistand% mpif77 -v
<br>
Using built-in specs.
<br>
Target: x86_64-suse-linux
<br>
<p>this one works just fine.
<br>
<p>so Im confused.
<br>
<p>any comments/suggestions?
<br>
<p>thanks
<br>
<p>steve
<br>
<p><p><pre>
-- 
************************************************************************
 Steve Heistand                           NASA Ames Research Center
 SciCon Group                             Mail Stop 258-6
 steve.heistand_at_[hidden]  (650) 604-4369  Moffett Field, CA 94035-1000
************************************************************************
 &quot;Any opinions expressed are those of our alien overlords, not my own.&quot;

</pre>
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18013/signature.asc">OpenPGP digital signature</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18014.php">V. Ram: "Re: [OMPI users] Error launching w/ 1.5.3 on IB mthca nodes"</a>
<li><strong>Previous message:</strong> <a href="18012.php">Mathieu westphal: "Re: [OMPI users] Passwordless ssh"</a>
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
