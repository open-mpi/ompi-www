<?
$subject_val = "Re: [OMPI users] OpenMPI failed when running across two mac machines";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 20 14:07:48 2012" -->
<!-- isoreceived="20120120190748" -->
<!-- sent="Fri, 20 Jan 2012 12:07:40 -0700" -->
<!-- isosent="20120120190740" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI failed when running across two mac machines" -->
<!-- id="9EFB4EE4-AD80-47B6-A018-80449FF7E5A4_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="11901DB1-DA84-4F3D-A02C-A30F029C846A_at_GMAIL.COM" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-20 14:07:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18239.php">Paul Kapinos: "[OMPI users] rankfiles on really big nodes broken?"</a>
<li><strong>Previous message:</strong> <a href="18237.php">Teng Lin: "[OMPI users] OpenMPI failed when running across two mac machines"</a>
<li><strong>In reply to:</strong> <a href="18236.php">Teng Lin: "[OMPI users] OpenMPI failed when running across two mac machines"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18241.php">Jeff Squyres: "Re: [OMPI users] OpenMPI failed when running across two mac machines"</a>
<li><strong>Reply:</strong> <a href="18241.php">Jeff Squyres: "Re: [OMPI users] OpenMPI failed when running across two mac machines"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Looks okay to me - thanks! I'll add it in.
<br>
<p>On Jan 20, 2012, at 11:02 AM, Teng Lin wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We are distributing OpenMPI as part of software suite. Therefore, the prefix we used for building is not expected to be the same when running on customer's machine. However, we did manage to get it running by setting OPLA_PREFIX, PATH and LD_LIBARAY_PATH on Linux). We tried do the same thing on Mac by using  DYLD_LIBRARY_PATH instead of LD_LIBARAY_PATH. Unfortunately, we run into below error:
</span><br>
<span class="quotelev1">&gt; dyld: lazy symbol binding failed: Symbol not found: _orte_daemon
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; After looking at orte/mca/plm/rsh/plm_rsh_module.c, we realized that the problem is DYLD_LIBARAY_PATH is not setting before launching orted. Instead plm_rsh_module.c still tries to set LD_LIBRARY_PATH. We had a patch for this and it seems to address the issue. We will be thrilled if the attached patch will be accepted.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Teng
</span><br>
<span class="quotelev1">&gt; &lt;plm_rsh_module.c.patch&gt;_______________________________________________
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
<li><strong>Next message:</strong> <a href="18239.php">Paul Kapinos: "[OMPI users] rankfiles on really big nodes broken?"</a>
<li><strong>Previous message:</strong> <a href="18237.php">Teng Lin: "[OMPI users] OpenMPI failed when running across two mac machines"</a>
<li><strong>In reply to:</strong> <a href="18236.php">Teng Lin: "[OMPI users] OpenMPI failed when running across two mac machines"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18241.php">Jeff Squyres: "Re: [OMPI users] OpenMPI failed when running across two mac machines"</a>
<li><strong>Reply:</strong> <a href="18241.php">Jeff Squyres: "Re: [OMPI users] OpenMPI failed when running across two mac machines"</a>
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
