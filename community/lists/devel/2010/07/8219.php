<?
$subject_val = "Re: [OMPI devel] Committing to release branches";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 26 03:10:18 2010" -->
<!-- isoreceived="20100726071018" -->
<!-- sent="Mon, 26 Jul 2010 09:04:35 +0200 (CEST)" -->
<!-- isosent="20100726070435" -->
<!-- name="Sylvain Jeaugey" -->
<!-- email="sylvain.jeaugey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Committing to release branches" -->
<!-- id="alpine.DEB.2.00.1007260902250.19337_at_jeaugeys.frec.bull.fr" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="47CB2667-5E06-4C42-A649-5BED31FE13AD_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Committing to release branches<br>
<strong>From:</strong> Sylvain Jeaugey (<em>sylvain.jeaugey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-26 03:04:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8220.php">Kelly Thompson: "Re: [OMPI devel] Can OpenMPI be compiled with Visual Studio 2010?"</a>
<li><strong>Previous message:</strong> <a href="8218.php">Ralph Castain: "Re: [OMPI devel] [OMPI users] Debug info on Darwin"</a>
<li><strong>In reply to:</strong> <a href="8209.php">Ralph Castain: "Re: [OMPI devel] Committing to release branches"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Jeff for this very useful explanation. I guess locking is not 
<br>
needed as long as the system is well understood by everyone (which was not 
<br>
the case for us, sorry).
<br>
<p>Sylvain
<br>
<p>On Thu, 22 Jul 2010, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 22, 2010, at 8:01 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 22, 2010, at 9:54 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We used to have the branches &quot;locked&quot; to all but the gatekeeper to prevent this kind of mistake. Did this change? Or did you forget to lock the 1.5 branch?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We changed it for v1.5 -- they're *not* locked because Ralph (back when Ralph was the RM from LANL with me) and I anticipated letting developers commit their &quot;larger&quot; features over to the release branch themselves and spare some GK pain.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ah yes - I remember now. However, I thought we were going to lock it, and then selectively unlock it when a particular update was approved. Guess I misunderstood at the time.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Anyway, I would suggest doing it that way.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; E.g., an ORTE refresh may take some pain and iteration to get right.  So let Ralph do it himself rather than do it via George/GK proxy.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Similar for hwloc issues.  Similar for ROMIO refresh.  ...etc.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Instead, however, we might want to change the permissions to lock it down, and then selectively unlock it.  Hindsight is 20-20.  :-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8220.php">Kelly Thompson: "Re: [OMPI devel] Can OpenMPI be compiled with Visual Studio 2010?"</a>
<li><strong>Previous message:</strong> <a href="8218.php">Ralph Castain: "Re: [OMPI devel] [OMPI users] Debug info on Darwin"</a>
<li><strong>In reply to:</strong> <a href="8209.php">Ralph Castain: "Re: [OMPI devel] Committing to release branches"</a>
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
