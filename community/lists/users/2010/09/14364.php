<?
$subject_val = "Re: [OMPI users] Potential developer to reinstate Xgrid support";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 30 23:16:07 2010" -->
<!-- isoreceived="20101001031607" -->
<!-- sent="Thu, 30 Sep 2010 21:15:55 -0600" -->
<!-- isosent="20101001031555" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Potential developer to reinstate Xgrid support" -->
<!-- id="996042F4-A083-4E6D-9E91-A0B735F343EF_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C8CA6764.1ACD%daniel.beatty_at_navy.mil" -->
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
<strong>Subject:</strong> Re: [OMPI users] Potential developer to reinstate Xgrid support<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-30 23:15:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/10/14365.php">Jeff Squyres: "Re: [OMPI users] Potential developer to reinstate Xgrid support"</a>
<li><strong>Previous message:</strong> <a href="14363.php">Daniel Beatty: "[OMPI users] Potential developer to reinstate Xgrid support"</a>
<li><strong>In reply to:</strong> <a href="14363.php">Daniel Beatty: "[OMPI users] Potential developer to reinstate Xgrid support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/10/14365.php">Jeff Squyres: "Re: [OMPI users] Potential developer to reinstate Xgrid support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Daniel
<br>
<p>I had actually volunteered to do this once Apple provided me with the required Mac OSX Server license, but I honestly haven't had time to do so. We would welcome any patches you can provide!
<br>
<p>The relevant code is located in orte/mca/plm/xgrid/src. I believe it currently compiles, but doesn't work - you'll need to verify that situation. To build the code, just add --with-xgrid to the configure line.
<br>
<p>I believe the code contains comments from the prior developer, but I'll be happy to answer questions as to the required operations. The most critical file is plm_xgrid_module.m. Basically, the code creates some fake node entries required by ORTE, and then spawns the ORTE daemons. Once this is accomplished, ORTE will do the rest - all you need to do is get those daemons out there! :-)
<br>
<p>Some of the required xgrid &quot;glue&quot; is in plm_xgrid_component.m, so please take a look at it too.
<br>
<p>I think the ORTE stuff is right, but the xgrid interface is out-of-date.
<br>
<p>HTH
<br>
Ralph
<br>
<p>On Sep 30, 2010, at 5:12 PM, Daniel Beatty wrote:
<br>
<p><span class="quotelev1">&gt; Greetings all,
</span><br>
<span class="quotelev1">&gt; I am working on obtaining a developer or time for myself to work on restoring support for MPI using Xgrid.  Do we have any documentation on the Xgrid supporting section of Open-MPI, and could you point out to me what sections of MPI that were providing the said support in the first place.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you,
</span><br>
<span class="quotelev1">&gt; Daniel Beatty
</span><br>
<span class="quotelev1">&gt; Computer Scientist, Detonation Sciences Branch
</span><br>
<span class="quotelev1">&gt; Code 474300D
</span><br>
<span class="quotelev1">&gt; 2401 E. Pilot Plant Rd. M/S 1109
</span><br>
<span class="quotelev1">&gt; China Lake, CA 93555
</span><br>
<span class="quotelev1">&gt; daniel.beatty_at_[hidden]
</span><br>
<span class="quotelev1">&gt; (760)939-7097 
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14364/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/10/14365.php">Jeff Squyres: "Re: [OMPI users] Potential developer to reinstate Xgrid support"</a>
<li><strong>Previous message:</strong> <a href="14363.php">Daniel Beatty: "[OMPI users] Potential developer to reinstate Xgrid support"</a>
<li><strong>In reply to:</strong> <a href="14363.php">Daniel Beatty: "[OMPI users] Potential developer to reinstate Xgrid support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/10/14365.php">Jeff Squyres: "Re: [OMPI users] Potential developer to reinstate Xgrid support"</a>
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
