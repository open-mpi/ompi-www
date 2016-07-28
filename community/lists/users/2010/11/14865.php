<?
$subject_val = "Re: [OMPI users] SYSTEM CPU with OpenMPI 1.4.3";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 22 11:25:00 2010" -->
<!-- isoreceived="20101122162500" -->
<!-- sent="Mon, 22 Nov 2010 11:24:56 -0500" -->
<!-- isosent="20101122162456" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] SYSTEM CPU with OpenMPI 1.4.3" -->
<!-- id="5DFFDD9C-D4C5-45FC-892F-DF9DD51EABCE_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="OFAA0AEAC2.DAFD36A0-ON492577DF.00364E81-492577DF.0038AEB6_at_jcity.maeda.co.jp" -->
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
<strong>Subject:</strong> Re: [OMPI users] SYSTEM CPU with OpenMPI 1.4.3<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-22 11:24:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14866.php">Hicham Mouline: "Re: [OMPI users] launching the mpi runtime"</a>
<li><strong>Previous message:</strong> <a href="14864.php">Jeff Squyres: "Re: [OMPI users] mpi-io, fortran, going crazy... (ADENDA)"</a>
<li><strong>In reply to:</strong> <a href="14823.php">tmishima_at_[hidden]: "Re: [OMPI users] SYSTEM CPU with OpenMPI 1.4.3"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for tracking that down!
<br>
<p>Here's where it was removed:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/changeset/23434">https://svn.open-mpi.org/trac/ompi/changeset/23434</a>
<br>
<p>and then it was later applied to the v1.4 branch in r23448.
<br>
<p>I'll double check back with Ralph (the ORTE guy), but I don't think that this change matters.
<br>
<p><p>On Nov 18, 2010, at 5:19 AM, tmishima_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I found that ./openmpi-1.4.3/ompi/runtime/ompi_mpi_init.c was changed.
</span><br>
<span class="quotelev1">&gt; Calling opal_progress_event_users_decrement was deleted as below.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $diff openmpi-1.4.2/ompi/runtime/ompi_mpi_init.c openmpi-1.4.3
</span><br>
<span class="quotelev1">&gt; /ompi/runtime/ompi_mpi_init.c
</span><br>
<span class="quotelev1">&gt; 813,819d812
</span><br>
<span class="quotelev1">&gt; &lt;     /* Undo ORTE calling opal_progress_event_users_increment() during
</span><br>
<span class="quotelev1">&gt; &lt;        MPI lifetime, to get better latency when not using TCP.  Do
</span><br>
<span class="quotelev1">&gt; &lt;        this *after* dyn_init, as dyn init uses lots of ORTE
</span><br>
<span class="quotelev1">&gt; &lt;        communication and we don't want to hinder the performance of
</span><br>
<span class="quotelev1">&gt; &lt;        that code. */
</span><br>
<span class="quotelev1">&gt; &lt;     opal_progress_event_users_decrement();
</span><br>
<span class="quotelev1">&gt; &lt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I confirmed that this change affects SYSTEM CPU &amp; performace decrement.
</span><br>
<span class="quotelev1">&gt; Is it safe to replace the routine with older one?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Anyway, if it's just a mistake, please fix it in the next version.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Tetsuya Mishima
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
<li><strong>Next message:</strong> <a href="14866.php">Hicham Mouline: "Re: [OMPI users] launching the mpi runtime"</a>
<li><strong>Previous message:</strong> <a href="14864.php">Jeff Squyres: "Re: [OMPI users] mpi-io, fortran, going crazy... (ADENDA)"</a>
<li><strong>In reply to:</strong> <a href="14823.php">tmishima_at_[hidden]: "Re: [OMPI users] SYSTEM CPU with OpenMPI 1.4.3"</a>
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
