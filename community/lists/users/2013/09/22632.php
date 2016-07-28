<?
$subject_val = "Re: [OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 10 05:58:19 2013" -->
<!-- isoreceived="20130910095819" -->
<!-- sent="Tue, 10 Sep 2013 09:58:17 +0000" -->
<!-- isosent="20130910095817" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F8797B0_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1378523670.1888.18963041.02171C01_at_webmail.messagingengine.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-10 05:58:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22633.php">caohaijun: "Re: [OMPI users] how to build a relocatable OpenMPI RPM ?"</a>
<li><strong>Previous message:</strong> <a href="22631.php">caohaijun: "Re: [OMPI users] how to build a relocatable OpenMPI RPM ?"</a>
<li><strong>In reply to:</strong> <a href="22615.php">Hugo Gagnon: "Re: [OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22634.php">Hugo Gagnon: "Re: [OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran"</a>
<li><strong>Reply:</strong> <a href="22634.php">Hugo Gagnon: "Re: [OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 7, 2013, at 5:14 AM, Hugo Gagnon &lt;opensource.openmpi_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; $ openmpif90 test.f90
</span><br>
<span class="quotelev1">&gt; $ openmpirun -np 2 a.out
</span><br>
<span class="quotelev1">&gt;           0           4           6
</span><br>
<span class="quotelev1">&gt;           1           4           6
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now I'd be curious to know why your OpenMPI implementation handles
</span><br>
<span class="quotelev1">&gt; MPI_IN_PLACE correctly and not mine!
</span><br>
<p>I don't understand -- this looks like the correct output to me.
<br>
<p>Are you seeing some other problem?
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
<li><strong>Next message:</strong> <a href="22633.php">caohaijun: "Re: [OMPI users] how to build a relocatable OpenMPI RPM ?"</a>
<li><strong>Previous message:</strong> <a href="22631.php">caohaijun: "Re: [OMPI users] how to build a relocatable OpenMPI RPM ?"</a>
<li><strong>In reply to:</strong> <a href="22615.php">Hugo Gagnon: "Re: [OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22634.php">Hugo Gagnon: "Re: [OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran"</a>
<li><strong>Reply:</strong> <a href="22634.php">Hugo Gagnon: "Re: [OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran"</a>
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
