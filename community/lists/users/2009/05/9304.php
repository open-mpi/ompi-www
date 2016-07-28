<?
$subject_val = "Re: [OMPI users] New warning messages in 1.3.2 (not present in1.2.8)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 12 08:15:13 2009" -->
<!-- isoreceived="20090512121513" -->
<!-- sent="Tue, 12 May 2009 08:15:07 -0400" -->
<!-- isosent="20090512121507" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] New warning messages in 1.3.2 (not present in1.2.8)" -->
<!-- id="387DF10A-AA82-4920-A367-6D849F6942A0_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="69B4EA22-F8F8-47EB-A332-7177B9096D98_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] New warning messages in 1.3.2 (not present in1.2.8)<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-12 08:15:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9305.php">Matthieu Brucher: "Re: [OMPI users] New warning messages in 1.3.2 (not present in1.2.8)"</a>
<li><strong>Previous message:</strong> <a href="9303.php">Ralph Castain: "Re: [OMPI users] New warning messages in 1.3.2 (not present in 1.2.8)"</a>
<li><strong>In reply to:</strong> <a href="9303.php">Ralph Castain: "Re: [OMPI users] New warning messages in 1.3.2 (not present in 1.2.8)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9305.php">Matthieu Brucher: "Re: [OMPI users] New warning messages in 1.3.2 (not present in1.2.8)"</a>
<li><strong>Reply:</strong> <a href="9305.php">Matthieu Brucher: "Re: [OMPI users] New warning messages in 1.3.2 (not present in1.2.8)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Or it could be that you installed 1.3.2 over 1.2.8 -- some of the  
<br>
1.2.8 components that no longer exist in the 1.3 series are still in  
<br>
the installation tree, but failed to open properly (unfortunately,  
<br>
libltdl gives an incorrect &quot;file not found&quot; error message if it is  
<br>
unable to load a plugin for any reason, such as if a symbol is unable  
<br>
to be resolved from that plugin).
<br>
<p>The best thing to do is to install 1.3 in a clean, fresh tree, or  
<br>
uninstall your 1.2.8 before installing 1.3.
<br>
<p><p>On May 12, 2009, at 7:35 AM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Looking at this output, I would say that the problem is you didn't
</span><br>
<span class="quotelev1">&gt; recompile your code against 1.3.2. These are warnings about attempts
</span><br>
<span class="quotelev1">&gt; to open components that were present in 1.2.8, but no longer exist in
</span><br>
<span class="quotelev1">&gt; the 1.3.x series.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 12, 2009, at 2:30 AM, Matthieu Brucher wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I've managed to use 1.3.2 (still not with LSF and InfiniPath, I  
</span><br>
<span class="quotelev1">&gt; start
</span><br>
<span class="quotelev2">&gt; &gt; one step after another), but I have additional warnings that didn't
</span><br>
<span class="quotelev2">&gt; &gt; show up in 1.2.8:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [host-b:09180] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt; &gt; /home/brucher/lib/openmpi/mca_ras_dash_host: file not found  
</span><br>
<span class="quotelev1">&gt; (ignored)
</span><br>
<span class="quotelev2">&gt; &gt; [host-b:09180] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt; &gt; /home/brucher/lib/openmpi/mca_ras_gridengine: file not found  
</span><br>
<span class="quotelev1">&gt; (ignored)
</span><br>
<span class="quotelev2">&gt; &gt; [host-b:09180] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt; &gt; /home/brucher/lib/openmpi/mca_ras_localhost: file not found  
</span><br>
<span class="quotelev1">&gt; (ignored)
</span><br>
<span class="quotelev2">&gt; &gt; [host-b:09180] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt; &gt; /home/brucher/lib/openmpi/mca_errmgr_hnp: file not found (ignored)
</span><br>
<span class="quotelev2">&gt; &gt; [host-b:09180] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt; &gt; /home/brucher/lib/openmpi/mca_errmgr_orted: file not found (ignored)
</span><br>
<span class="quotelev2">&gt; &gt; [host-b:09180] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt; &gt; /home/brucher/lib/openmpi/mca_errmgr_proxy: file not found (ignored)
</span><br>
<span class="quotelev2">&gt; &gt; [host-b:09180] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt; &gt; /home/brucher/lib/openmpi/mca_iof_proxy: file not found (ignored)
</span><br>
<span class="quotelev2">&gt; &gt; [host-b:09180] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt; &gt; /home/brucher//lib/openmpi/mca_iof_svc: file not found (ignored)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Can this be fixed in some way?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Matthieu
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Information System Engineer, Ph.D.
</span><br>
<span class="quotelev2">&gt; &gt; Website: <a href="http://matthieu-brucher.developpez.com/">http://matthieu-brucher.developpez.com/</a>
</span><br>
<span class="quotelev2">&gt; &gt; Blogs: <a href="http://matt.eifelle.com">http://matt.eifelle.com</a> and <a href="http://blog.developpez.com/?blog=92">http://blog.developpez.com/?blog=92</a>
</span><br>
<span class="quotelev2">&gt; &gt; LinkedIn: <a href="http://www.linkedin.com/in/matthieubrucher">http://www.linkedin.com/in/matthieubrucher</a>
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9305.php">Matthieu Brucher: "Re: [OMPI users] New warning messages in 1.3.2 (not present in1.2.8)"</a>
<li><strong>Previous message:</strong> <a href="9303.php">Ralph Castain: "Re: [OMPI users] New warning messages in 1.3.2 (not present in 1.2.8)"</a>
<li><strong>In reply to:</strong> <a href="9303.php">Ralph Castain: "Re: [OMPI users] New warning messages in 1.3.2 (not present in 1.2.8)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9305.php">Matthieu Brucher: "Re: [OMPI users] New warning messages in 1.3.2 (not present in1.2.8)"</a>
<li><strong>Reply:</strong> <a href="9305.php">Matthieu Brucher: "Re: [OMPI users] New warning messages in 1.3.2 (not present in1.2.8)"</a>
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
