<?
$subject_val = "Re: [OMPI devel] Open MPI error";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 25 16:07:07 2011" -->
<!-- isoreceived="20110425200707" -->
<!-- sent="Mon, 25 Apr 2011 14:06:57 -0600" -->
<!-- isosent="20110425200657" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Open MPI error" -->
<!-- id="69917C5D-B6B4-4A33-A80E-DE4163E8B1F7_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="753B7391-B6E3-40A8-9E79-A3305D1C56AD_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Open MPI error<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-25 16:06:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9223.php">周汉清: "[OMPI devel] Question about RMAPS rank_file component patch and modifications"</a>
<li><strong>Previous message:</strong> <a href="9221.php">Joshua Hursey: "Re: [OMPI devel] Open MPI error"</a>
<li><strong>In reply to:</strong> <a href="9221.php">Joshua Hursey: "Re: [OMPI devel] Open MPI error"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It's a fairly big job. I did it for the trunk some time ago - the devel trunk type for app index is now uint32 - and set it up there to be easy to change in the future. Doing it for 1.5 series is non-trivial as it is hard-coded in quite a few places.
<br>
<p>Best advice I can give: Try using the trunk, if you can.
<br>
<p><p>On Apr 25, 2011, at 1:59 PM, Joshua Hursey wrote:
<br>
<p><span class="quotelev1">&gt; Yeah this sounds like the limitation of the number of app contexts that we can use in ORTE. Since ompi-restart uses N app contexts to restart a job (one for each process in the original job), then it is possible that we can hit this limitation.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I suspect that it should not be too difficult to change the type, but I have not looked into it. I filed a ticket so we don't lose track of the issue:
</span><br>
<span class="quotelev1">&gt;  <a href="https://svn.open-mpi.org/trac/ompi/ticket/2783">https://svn.open-mpi.org/trac/ompi/ticket/2783</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you have the time to work on a patch, I would be happy to review it. At this time, I am uncertain when I will get to this (and the other C/R) bugs. Hopefully soon, but it is not top priority at the moment.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Josh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Apr 25, 2011, at 3:34 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 25, 2011, at 3:28 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Can someone provide a solution to this.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Probably won't happen for awhile - this is something peculiar to the restart mechanism. I'll make a note to look at it, but it would be a low priority.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Kishor -- is this something you could work on a patch for?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If so, Josh and/or Ralph might be able to point you in the right direction.
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9223.php">周汉清: "[OMPI devel] Question about RMAPS rank_file component patch and modifications"</a>
<li><strong>Previous message:</strong> <a href="9221.php">Joshua Hursey: "Re: [OMPI devel] Open MPI error"</a>
<li><strong>In reply to:</strong> <a href="9221.php">Joshua Hursey: "Re: [OMPI devel] Open MPI error"</a>
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
