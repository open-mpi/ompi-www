<?
$subject_val = "Re: [OMPI users] using openib and psm together";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 21 18:33:36 2011" -->
<!-- isoreceived="20110421223336" -->
<!-- sent="Thu, 21 Apr 2011 18:33:30 -0400" -->
<!-- isosent="20110421223330" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] using openib and psm together" -->
<!-- id="741A5BD7-E045-4E1F-B5E5-052CEA2927F2_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="87k4en9b3x.fsf_at_liv.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] using openib and psm together<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-21 18:33:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16307.php">Jeff Squyres: "Re: [OMPI users] Need help buiding OpenMPI with Intel v12.0 compilers on Linux"</a>
<li><strong>Previous message:</strong> <a href="16305.php">Jeff Squyres: "Re: [OMPI users] huge VmRSS on rank 0 after MPI_Init when using &quot;btl_openib_receive_queues&quot; option"</a>
<li><strong>In reply to:</strong> <a href="16299.php">Dave Love: "[OMPI users] using openib and psm together"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16345.php">Dave Love: "Re: [OMPI users] using openib and psm together"</a>
<li><strong>Reply:</strong> <a href="16345.php">Dave Love: "Re: [OMPI users] using openib and psm together"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I believe it was mainly a startup issue -- there's a complicated sequence of events that happens during MPI_INIT.  IIRC, the issue was that if OMPI had software support for PSM, it assumed that the lack of PSM hardware was effectively an error.
<br>
<p>v1.5 made the startup sequence a little more flexible; the PSM bits in OMPI can say &quot;Oh yes, we have PSM support, but I don't see any PSM hardware, so just ignore me... please move along... nothing to see here...&quot;
<br>
<p>OMPI's openib BTL has had this kind of support for a long time, but PSM and verbs are treated a little differently in the startup sequence because they're fundamentally different kinds of transports (abstraction-wise, anyway).
<br>
<p><p><p>On Apr 21, 2011, at 6:01 AM, Dave Love wrote:
<br>
<p><span class="quotelev1">&gt; We have an installation with both Mellanox and Qlogic IB adaptors (in
</span><br>
<span class="quotelev1">&gt; distinct islands), so I built open-mpi 1.4.3 with openib and psm
</span><br>
<span class="quotelev1">&gt; support.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now I've just read this in the OFED source, but I can't see any relevant
</span><br>
<span class="quotelev1">&gt; issue in the open-mpi tracker:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  OpenMPI support
</span><br>
<span class="quotelev1">&gt;  ---------------
</span><br>
<span class="quotelev1">&gt;  It is recommended to use the OpenMPI v1.5 development branch. Prior versions
</span><br>
<span class="quotelev1">&gt;  of OpenMPI have an issue with support PSM network transports mixed with standard
</span><br>
<span class="quotelev1">&gt;  Verbs transport (BTL openib). This prevents an OpenMPI installation with
</span><br>
<span class="quotelev1">&gt;  network modules available for PSM and Verbs to work correctly on nodes with
</span><br>
<span class="quotelev1">&gt;  no QLogic IB hardware. This has been fixed in the latest development branch
</span><br>
<span class="quotelev1">&gt;  allowing a single OpenMPI installation to target IB hardware via PSM or Verbs
</span><br>
<span class="quotelev1">&gt;  as well as alternate transports seamlessly.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Do I definitely need 1.5 (and is 1.5.3 good enough?) to have openib and
</span><br>
<span class="quotelev1">&gt; psm working correctly?  Also what are the symptoms of it not working
</span><br>
<span class="quotelev1">&gt; correctly?
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
<li><strong>Next message:</strong> <a href="16307.php">Jeff Squyres: "Re: [OMPI users] Need help buiding OpenMPI with Intel v12.0 compilers on Linux"</a>
<li><strong>Previous message:</strong> <a href="16305.php">Jeff Squyres: "Re: [OMPI users] huge VmRSS on rank 0 after MPI_Init when using &quot;btl_openib_receive_queues&quot; option"</a>
<li><strong>In reply to:</strong> <a href="16299.php">Dave Love: "[OMPI users] using openib and psm together"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16345.php">Dave Love: "Re: [OMPI users] using openib and psm together"</a>
<li><strong>Reply:</strong> <a href="16345.php">Dave Love: "Re: [OMPI users] using openib and psm together"</a>
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
