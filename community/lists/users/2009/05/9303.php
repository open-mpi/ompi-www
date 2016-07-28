<?
$subject_val = "Re: [OMPI users] New warning messages in 1.3.2 (not present in 1.2.8)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 12 07:35:41 2009" -->
<!-- isoreceived="20090512113541" -->
<!-- sent="Tue, 12 May 2009 05:35:27 -0600" -->
<!-- isosent="20090512113527" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] New warning messages in 1.3.2 (not present in 1.2.8)" -->
<!-- id="69B4EA22-F8F8-47EB-A332-7177B9096D98_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="e76aa17f0905120130l764db488l8091728147a1bf61_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] New warning messages in 1.3.2 (not present in 1.2.8)<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-12 07:35:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9304.php">Jeff Squyres: "Re: [OMPI users] New warning messages in 1.3.2 (not present in1.2.8)"</a>
<li><strong>Previous message:</strong> <a href="9302.php">Ralph Castain: "Re: [OMPI users] Torque 2.2.1 problem with OpenMPI 1.2.5"</a>
<li><strong>In reply to:</strong> <a href="9297.php">Matthieu Brucher: "[OMPI users] New warning messages in 1.3.2 (not present in 1.2.8)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9304.php">Jeff Squyres: "Re: [OMPI users] New warning messages in 1.3.2 (not present in1.2.8)"</a>
<li><strong>Reply:</strong> <a href="9304.php">Jeff Squyres: "Re: [OMPI users] New warning messages in 1.3.2 (not present in1.2.8)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Looking at this output, I would say that the problem is you didn't  
<br>
recompile your code against 1.3.2. These are warnings about attempts  
<br>
to open components that were present in 1.2.8, but no longer exist in  
<br>
the 1.3.x series.
<br>
<p><p>On May 12, 2009, at 2:30 AM, Matthieu Brucher wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've managed to use 1.3.2 (still not with LSF and InfiniPath, I start
</span><br>
<span class="quotelev1">&gt; one step after another), but I have additional warnings that didn't
</span><br>
<span class="quotelev1">&gt; show up in 1.2.8:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [host-b:09180] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /home/brucher/lib/openmpi/mca_ras_dash_host: file not found (ignored)
</span><br>
<span class="quotelev1">&gt; [host-b:09180] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /home/brucher/lib/openmpi/mca_ras_gridengine: file not found (ignored)
</span><br>
<span class="quotelev1">&gt; [host-b:09180] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /home/brucher/lib/openmpi/mca_ras_localhost: file not found (ignored)
</span><br>
<span class="quotelev1">&gt; [host-b:09180] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /home/brucher/lib/openmpi/mca_errmgr_hnp: file not found (ignored)
</span><br>
<span class="quotelev1">&gt; [host-b:09180] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /home/brucher/lib/openmpi/mca_errmgr_orted: file not found (ignored)
</span><br>
<span class="quotelev1">&gt; [host-b:09180] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /home/brucher/lib/openmpi/mca_errmgr_proxy: file not found (ignored)
</span><br>
<span class="quotelev1">&gt; [host-b:09180] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /home/brucher/lib/openmpi/mca_iof_proxy: file not found (ignored)
</span><br>
<span class="quotelev1">&gt; [host-b:09180] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /home/brucher//lib/openmpi/mca_iof_svc: file not found (ignored)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can this be fixed in some way?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Matthieu
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Information System Engineer, Ph.D.
</span><br>
<span class="quotelev1">&gt; Website: <a href="http://matthieu-brucher.developpez.com/">http://matthieu-brucher.developpez.com/</a>
</span><br>
<span class="quotelev1">&gt; Blogs: <a href="http://matt.eifelle.com">http://matt.eifelle.com</a> and <a href="http://blog.developpez.com/?blog=92">http://blog.developpez.com/?blog=92</a>
</span><br>
<span class="quotelev1">&gt; LinkedIn: <a href="http://www.linkedin.com/in/matthieubrucher">http://www.linkedin.com/in/matthieubrucher</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9304.php">Jeff Squyres: "Re: [OMPI users] New warning messages in 1.3.2 (not present in1.2.8)"</a>
<li><strong>Previous message:</strong> <a href="9302.php">Ralph Castain: "Re: [OMPI users] Torque 2.2.1 problem with OpenMPI 1.2.5"</a>
<li><strong>In reply to:</strong> <a href="9297.php">Matthieu Brucher: "[OMPI users] New warning messages in 1.3.2 (not present in 1.2.8)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9304.php">Jeff Squyres: "Re: [OMPI users] New warning messages in 1.3.2 (not present in1.2.8)"</a>
<li><strong>Reply:</strong> <a href="9304.php">Jeff Squyres: "Re: [OMPI users] New warning messages in 1.3.2 (not present in1.2.8)"</a>
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
