<?
$subject_val = "Re: [OMPI users] openmpi 1.8.1 gfortran not working";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug  5 15:18:18 2014" -->
<!-- isoreceived="20140805191818" -->
<!-- sent="Tue, 5 Aug 2014 19:18:15 +0000" -->
<!-- isosent="20140805191815" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi 1.8.1 gfortran not working" -->
<!-- id="511902E6-EBD4-4D26-852B-2F7CDD4DB48A_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="FB5ADA41E173495EB9EF2C82CE78155F_at_WDC" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi 1.8.1 gfortran not working<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-05 15:18:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24926.php">Dan Shell: "Re: [OMPI users] openmpi 1.8.1 gfortran not working"</a>
<li><strong>Previous message:</strong> <a href="24924.php">Gus Correa: "Re: [OMPI users] How to keep multiple installations at same time"</a>
<li><strong>In reply to:</strong> <a href="24920.php">Dan Shell: "Re: [OMPI users] openmpi 1.8.1 gfortran not working"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24926.php">Dan Shell: "Re: [OMPI users] openmpi 1.8.1 gfortran not working"</a>
<li><strong>Reply:</strong> <a href="24926.php">Dan Shell: "Re: [OMPI users] openmpi 1.8.1 gfortran not working"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 5, 2014, at 1:13 PM, Dan Shell &lt;dshellwireless_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Need to use mpif.h for my application
</span><br>
<span class="quotelev1">&gt; I will get the newest versions of gcc and gfortran
</span><br>
<p>You should be fine without the newest versions of gcc/gfortran.  The older gcc/gfortran will support mpif.h and a limited form of the mpi module.  It just won't support the new MPI-3 mpi_f08 module.
<br>
<p>It certainly doesn't hurt to upgrade your gcc/gfortran to the newest, but be aware that it's a bit difficult to compile these suites properly...
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24926.php">Dan Shell: "Re: [OMPI users] openmpi 1.8.1 gfortran not working"</a>
<li><strong>Previous message:</strong> <a href="24924.php">Gus Correa: "Re: [OMPI users] How to keep multiple installations at same time"</a>
<li><strong>In reply to:</strong> <a href="24920.php">Dan Shell: "Re: [OMPI users] openmpi 1.8.1 gfortran not working"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24926.php">Dan Shell: "Re: [OMPI users] openmpi 1.8.1 gfortran not working"</a>
<li><strong>Reply:</strong> <a href="24926.php">Dan Shell: "Re: [OMPI users] openmpi 1.8.1 gfortran not working"</a>
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
