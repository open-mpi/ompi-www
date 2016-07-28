<?
$subject_val = "Re: [OMPI users] --without-tm [SEC=UNCLASSIFIED]";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 21 12:29:48 2011" -->
<!-- isoreceived="20110221172948" -->
<!-- sent="Mon, 21 Feb 2011 12:29:41 -0500" -->
<!-- isosent="20110221172941" -->
<!-- name="Joshua Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] --without-tm [SEC=UNCLASSIFIED]" -->
<!-- id="33534704-F8B3-471A-AC0E-0B6CA3137421_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="70F5927E-2984-4E7F-AF6C-2FB22E32306F_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] --without-tm [SEC=UNCLASSIFIED]<br>
<strong>From:</strong> Joshua Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-21 12:29:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15669.php">Jeff Squyres: "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="15667.php">Jeff Squyres: "Re: [OMPI users] --without-tm [SEC=UNCLASSIFIED]"</a>
<li><strong>In reply to:</strong> <a href="15667.php">Jeff Squyres: "Re: [OMPI users] --without-tm [SEC=UNCLASSIFIED]"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There is no restriction to use the C/R functionality in Open MPI in a TM environment (that I am aware of), if you use the ompi-checkpoint/ompi-restart commands directly.
<br>
<p>If you want TM to checkpoint/restart Open MPI processes for you as part of the resource management role, then there is a bit of a work around that you have to go through. The 'cr_mpirun' wrapper (mentioned in the email) that BLCR is/will be providing does the necessary things to make the two work together. The BLCR folks would be the best to contact if there are issues of compatibility when using that script since they maintain it.
<br>
<p>-- Josh
<br>
<p>On Feb 21, 2011, at 9:57 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Feb 21, 2011, at 12:50 AM, DOHERTY, Greg wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; blcr needs cr_mpirun to start the job without torque support to be able
</span><br>
<span class="quotelev2">&gt;&gt; to checkpoint the mpi job correctly.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Josh --
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Do we have a restriction on BLCR support when used with TM?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>------------------------------------
<br>
Joshua Hursey
<br>
Postdoctoral Research Associate
<br>
Oak Ridge National Laboratory
<br>
<a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15669.php">Jeff Squyres: "Re: [OMPI users] RoCE (IBoE) &amp; OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="15667.php">Jeff Squyres: "Re: [OMPI users] --without-tm [SEC=UNCLASSIFIED]"</a>
<li><strong>In reply to:</strong> <a href="15667.php">Jeff Squyres: "Re: [OMPI users] --without-tm [SEC=UNCLASSIFIED]"</a>
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
