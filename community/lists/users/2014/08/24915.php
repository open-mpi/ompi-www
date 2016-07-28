<?
$subject_val = "Re: [OMPI users] openmpi 1.8.1 gfortran not working";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug  5 11:12:59 2014" -->
<!-- isoreceived="20140805151259" -->
<!-- sent="Tue, 5 Aug 2014 15:12:58 +0000" -->
<!-- isosent="20140805151258" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi 1.8.1 gfortran not working" -->
<!-- id="335C4B56-9250-4046-8CCD-F3FAE0F7BF59_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="7B7CBC62BC434D46933F9243CB6ECAC3_at_WDC" -->
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
<strong>Date:</strong> 2014-08-05 11:12:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24916.php">Gus Correa: "Re: [OMPI users] How to keep multiple installations at same time"</a>
<li><strong>Previous message:</strong> <a href="24914.php">Ralph Castain: "Re: [OMPI users] problem with rankfile in openmpi-1.8.2rc3"</a>
<li><strong>In reply to:</strong> <a href="24913.php">Dan Shell: "Re: [OMPI users] openmpi 1.8.1 gfortran not working"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24920.php">Dan Shell: "Re: [OMPI users] openmpi 1.8.1 gfortran not working"</a>
<li><strong>Reply:</strong> <a href="24920.php">Dan Shell: "Re: [OMPI users] openmpi 1.8.1 gfortran not working"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 5, 2014, at 10:57 AM, Dan Shell &lt;dshellwireless_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Should I look for a newer version of gfortran?
</span><br>
<span class="quotelev1">&gt; I saw from the config fortran compile section that mpi_f08 was not compiled
</span><br>
<p>It depends on what your MPI application needs.  MPI (i.e., the spec, not Open MPI) defines three different Fortran bindings:
<br>
<p>- mpif.h
<br>
- the mpi module
<br>
- the mpi_f08 module
<br>
<p>If your application(s) do not use the mpi_f08 module, then you don't need to worry about a new gcc/gfortran.
<br>
<p>If your application(s) do use the mpi_f08 module, then you'll need to install a new gcc/gfortran suite (which is not trivial -- you need to install both gcc and gfortran together).
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
<li><strong>Next message:</strong> <a href="24916.php">Gus Correa: "Re: [OMPI users] How to keep multiple installations at same time"</a>
<li><strong>Previous message:</strong> <a href="24914.php">Ralph Castain: "Re: [OMPI users] problem with rankfile in openmpi-1.8.2rc3"</a>
<li><strong>In reply to:</strong> <a href="24913.php">Dan Shell: "Re: [OMPI users] openmpi 1.8.1 gfortran not working"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24920.php">Dan Shell: "Re: [OMPI users] openmpi 1.8.1 gfortran not working"</a>
<li><strong>Reply:</strong> <a href="24920.php">Dan Shell: "Re: [OMPI users] openmpi 1.8.1 gfortran not working"</a>
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
