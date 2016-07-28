<?
$subject_val = "Re: [OMPI users] OpenMPI failed when running across two mac machines";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 20 15:40:55 2012" -->
<!-- isoreceived="20120120204055" -->
<!-- sent="Fri, 20 Jan 2012 15:40:36 -0500" -->
<!-- isosent="20120120204036" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI failed when running across two mac machines" -->
<!-- id="22F84971-5B74-4034-902F-A1631DADAEE2_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="9EFB4EE4-AD80-47B6-A018-80449FF7E5A4_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI failed when running across two mac machines<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-20 15:40:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18242.php">Mike Dubman: "Re: [OMPI users] Possible bug in finalize, OpenMPI v1.5, head revision"</a>
<li><strong>Previous message:</strong> <a href="18240.php">Ralph Castain: "Re: [OMPI users] rankfiles on really big nodes broken?"</a>
<li><strong>In reply to:</strong> <a href="18238.php">Ralph Castain: "Re: [OMPI users] OpenMPI failed when running across two mac machines"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'll take it as a friendly fix for 1.5.5 -- please file a CMR.
<br>
<p><p>On Jan 20, 2012, at 2:07 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Looks okay to me - thanks! I'll add it in.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jan 20, 2012, at 11:02 AM, Teng Lin wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We are distributing OpenMPI as part of software suite. Therefore, the prefix we used for building is not expected to be the same when running on customer's machine. However, we did manage to get it running by setting OPLA_PREFIX, PATH and LD_LIBARAY_PATH on Linux). We tried do the same thing on Mac by using  DYLD_LIBRARY_PATH instead of LD_LIBARAY_PATH. Unfortunately, we run into below error:
</span><br>
<span class="quotelev2">&gt;&gt; dyld: lazy symbol binding failed: Symbol not found: _orte_daemon
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; After looking at orte/mca/plm/rsh/plm_rsh_module.c, we realized that the problem is DYLD_LIBARAY_PATH is not setting before launching orted. Instead plm_rsh_module.c still tries to set LD_LIBRARY_PATH. We had a patch for this and it seems to address the issue. We will be thrilled if the attached patch will be accepted.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Teng
</span><br>
<span class="quotelev2">&gt;&gt; &lt;plm_rsh_module.c.patch&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="18242.php">Mike Dubman: "Re: [OMPI users] Possible bug in finalize, OpenMPI v1.5, head revision"</a>
<li><strong>Previous message:</strong> <a href="18240.php">Ralph Castain: "Re: [OMPI users] rankfiles on really big nodes broken?"</a>
<li><strong>In reply to:</strong> <a href="18238.php">Ralph Castain: "Re: [OMPI users] OpenMPI failed when running across two mac machines"</a>
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
