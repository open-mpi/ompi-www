<?
$subject_val = "Re: [OMPI users] Qlogic &amp; openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 28 20:23:26 2011" -->
<!-- isoreceived="20111129012326" -->
<!-- sent="Mon, 28 Nov 2011 20:23:21 -0500" -->
<!-- isosent="20111129012321" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Qlogic &amp;amp; openmpi" -->
<!-- id="63CF4C86-8B89-4404-BB54-50255B398C34_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAJ9JPxHxFfuQjzsx56554NVOyCJNPW3Y_mcf4N+mxV5UhQvmQQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Qlogic &amp; openmpi<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-28 20:23:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17854.php">arnaud Heritier: "Re: [OMPI users] Qlogic &amp; openmpi"</a>
<li><strong>Previous message:</strong> <a href="17852.php">Jeff Squyres: "Re: [OMPI users] problem with fortran, MPI_REDUCE and MPI_IN_PLACE"</a>
<li><strong>In reply to:</strong> <a href="17838.php">Arnaud Heritier: "[OMPI users] Qlogic &amp; openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17854.php">arnaud Heritier: "Re: [OMPI users] Qlogic &amp; openmpi"</a>
<li><strong>Reply:</strong> <a href="17854.php">arnaud Heritier: "Re: [OMPI users] Qlogic &amp; openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm afraid we don't have any contacts left at QLogic to ask them any more... do you have a support contract, perchance?
<br>
<p>On Nov 27, 2011, at 3:11 PM, Arnaud Heritier wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I run into a stange problem with qlogic OFED and openmpi. When i submit (through SGE) 2 jobs on the same node, the second job ends up with:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (ipath/PSM)[10292]: can't open /dev/ipath, network down (err=26)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm pretty sure the infiniband is working well as the other job runs fine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here is details about the configuration:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Qlogic HCA: InfiniPath_QMH7342 (2 ports but only one connected to a switch)
</span><br>
<span class="quotelev1">&gt; qlogic_ofed-1.5.3-7.0.0.0.35 (rocks cluster roll)
</span><br>
<span class="quotelev1">&gt; openmpi 1.5.4 (./configure --with-psm --with-openib --with-sge)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In order to fix this problem i recompiled openmpi without psm support, but i faced an other problem:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The OpenFabrics (openib) BTL failed to initialize while trying to
</span><br>
<span class="quotelev1">&gt; allocate some locked memory.  This typically can indicate that the
</span><br>
<span class="quotelev1">&gt; memlock limits are set too low.  For most HPC installations, the
</span><br>
<span class="quotelev1">&gt; memlock limits should be set to &quot;unlimited&quot;.  The failure occured
</span><br>
<span class="quotelev1">&gt; here:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   Local host:    compute-0-6.local
</span><br>
<span class="quotelev1">&gt;   OMPI source:   btl_openib.c:329
</span><br>
<span class="quotelev1">&gt;   Function:      ibv_create_srq()
</span><br>
<span class="quotelev1">&gt;   Device:        qib0
</span><br>
<span class="quotelev1">&gt;   Memlock limit: unlimited
</span><br>
<span class="quotelev1">&gt; 
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
<p><p><pre>
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
<li><strong>Next message:</strong> <a href="17854.php">arnaud Heritier: "Re: [OMPI users] Qlogic &amp; openmpi"</a>
<li><strong>Previous message:</strong> <a href="17852.php">Jeff Squyres: "Re: [OMPI users] problem with fortran, MPI_REDUCE and MPI_IN_PLACE"</a>
<li><strong>In reply to:</strong> <a href="17838.php">Arnaud Heritier: "[OMPI users] Qlogic &amp; openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17854.php">arnaud Heritier: "Re: [OMPI users] Qlogic &amp; openmpi"</a>
<li><strong>Reply:</strong> <a href="17854.php">arnaud Heritier: "Re: [OMPI users] Qlogic &amp; openmpi"</a>
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
