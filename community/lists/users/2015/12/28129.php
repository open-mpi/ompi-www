<?
$subject_val = "Re: [OMPI users] Bug in Fortran-module MPI of OpenMPI 1.10.0 with Intel-Ftn-compiler";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec  3 16:38:19 2015" -->
<!-- isoreceived="20151203213819" -->
<!-- sent="Thu, 3 Dec 2015 21:38:14 +0000" -->
<!-- isosent="20151203213814" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Bug in Fortran-module MPI of OpenMPI 1.10.0 with Intel-Ftn-compiler" -->
<!-- id="FD5D0D0A-3625-4594-A0EE-3B91BAFD9F5B_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="8337B490252F0944BF1D38541059627E173BB5C6_at_DLREXMBX01.intra.dlr.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Bug in Fortran-module MPI of OpenMPI 1.10.0 with Intel-Ftn-compiler<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-12-03 16:38:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28130.php">Ralph Castain: "Re: [OMPI users] Open MPI not using parameters passed from PBS scheduler"</a>
<li><strong>Previous message:</strong> <a href="28128.php">Gregory Cary: "[OMPI users] Open MPI not using parameters passed from PBS scheduler"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/11/28098.php">Michael.Rachner_at_[hidden]: "Re: [OMPI users] Bug in Fortran-module MPI of OpenMPI 1.10.0 with Intel-Ftn-compiler"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 23, 2015, at 11:07 AM, Michael.Rachner_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In the meantime the administrators have installed (Thanks!)  OpenMPI-1.10.1 with Intel-16.0.0 on the cluster.
</span><br>
<span class="quotelev1">&gt; I have tested it with our code:  It works.
</span><br>
<span class="quotelev1">&gt; The time spent for MPI-data transmission was the same as with OpenMPI-1.8.3&amp;Intel-14.0.4, but was ~20% higher than with IMPI-5.1.1&amp;Intel-16.0.0
</span><br>
<span class="quotelev1">&gt; for the same case running on 3 nodes and 8 procs per node.
</span><br>
<p>There can be a lot of reasons for this.
<br>
<p>What kind of network are you using?  How big is the data set?  How long does the application run?
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
<li><strong>Next message:</strong> <a href="28130.php">Ralph Castain: "Re: [OMPI users] Open MPI not using parameters passed from PBS scheduler"</a>
<li><strong>Previous message:</strong> <a href="28128.php">Gregory Cary: "[OMPI users] Open MPI not using parameters passed from PBS scheduler"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/11/28098.php">Michael.Rachner_at_[hidden]: "Re: [OMPI users] Bug in Fortran-module MPI of OpenMPI 1.10.0 with Intel-Ftn-compiler"</a>
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
