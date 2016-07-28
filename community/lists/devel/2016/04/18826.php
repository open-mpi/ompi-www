<?
$subject_val = "Re: [OMPI devel] Process affinity detection";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 26 19:41:41 2016" -->
<!-- isoreceived="20160426234141" -->
<!-- sent="Tue, 26 Apr 2016 16:41:38 -0700" -->
<!-- isosent="20160426234138" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Process affinity detection" -->
<!-- id="9C5365B1-F3D9-46EE-B5EA-6E496DE0912D_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="571FFAB3.5030508_at_nvidia.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Process affinity detection<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-26 19:41:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18827.php">dpchoudh .: "[OMPI devel] modex receive"</a>
<li><strong>Previous message:</strong> <a href="18825.php">Sylvain Jeaugey: "Re: [OMPI devel] Process affinity detection"</a>
<li><strong>In reply to:</strong> <a href="18825.php">Sylvain Jeaugey: "Re: [OMPI devel] Process affinity detection"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; On Apr 26, 2016, at 4:33 PM, Sylvain Jeaugey &lt;sjeaugey_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Oh, I see. No, we don't want to add a full modex if there isn't one already.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now, if we restrict this to the intra-node (we don't care on which socket/core is a distant process), is there any simple way to do an intra-node-only modex ?
</span><br>
<p>Sure - we can &#226;&#128;&#156;pmix.put&#226;&#128;&#157; the data with &#226;&#128;&#156;local&#226;&#128;&#157; scope to avoid it going anywhere, and then add an option in &#226;&#128;&#156;fence&#226;&#128;&#157; to do only a local fence (i.e., across the procs on the same node) to ensure the data was ready. Or we could do a non-blocking &#226;&#128;&#156;get&#226;&#128;&#157; to retrieve it and let the &#226;&#128;&#156;fence&#226;&#128;&#157; be done in the MPI layer by blocking until the data is returned.
<br>
<p>Either way, not something we would want to do by default. Still, since the user knows they are doing this, should be easy enough for them to provide an option telling us to perform the extra maneuver.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 04/26/2016 04:28 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Apr 26, 2016, at 3:35 PM, Sylvain Jeaugey &lt;sjeaugey_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Indeed, I implied that affinity was set before MPI_Init (usually even before the process is launched).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; And yes, that would require a modex ... but I thought there was one already and maybe we could pack the affinity information inside the existing one.
</span><br>
<span class="quotelev2">&gt;&gt; If the BTLs et al don&#226;&#128;&#153;t require the modex, then we don&#226;&#128;&#153;t perform it (e.g., when launched by mpirun or via a PMIx-enabled RM). So when someone does as you describe, then we would have to force the modex to exchange the info. Doable, but results in a scaling penalty, and so definitely not something we want to do by default.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 04/26/2016 02:56 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hmmm&#226;&#128;&#166;you mean for procs on the same node? I&#226;&#128;&#153;m not sure how you can do it without introducing another data exchange, and that would require the app to execute it since otherwise we have no idea when they set the affinity.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If we assume they set the affinity prior to calling MPI_Init, then we could do it - but at the cost of forcing a modex. You can only detect your own affinity, so to get the relative placement, you have to do an exchange if we can&#226;&#128;&#153;t pass it to you. Perhaps we could offer it as an option?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Apr 26, 2016, at 2:27 PM, Sylvain Jeaugey &lt;sjeaugey_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Within the BTL code (and surely elsewhere), we can use those convenient OPAL_PROC_ON_LOCAL_{NODE,SOCKET, ...} macros to figure out where another endpoint is located compared to us.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The problem is that it only works when ORTE defines it. The NODE works almost always since ORTE is always doing it. But for the NUMA, SOCKET, or CORE to work, we need to use Open MPI binding/mapping capabilities. If the process affinity was set with something else (custom scripts using taskset, cpusets, ...), it doesn't work.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; How hard do you think it would it be to detect the affinity and set those flags using hwloc to figure out if we're on the same {SOCKET, CORE, ...} ? Where would it be simpler to do this ?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thanks.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Sylvain
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -----------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; This email message is for the sole use of the intended recipient(s) and may contain
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; confidential information.  Any unauthorized review, use, disclosure or distribution
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; is prohibited.  If you are not the intended recipient, please contact the sender by
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; reply email and destroy all copies of the original message.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -----------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/04/18821.php">http://www.open-mpi.org/community/lists/devel/2016/04/18821.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/04/18822.php">http://www.open-mpi.org/community/lists/devel/2016/04/18822.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/04/18823.php">http://www.open-mpi.org/community/lists/devel/2016/04/18823.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/04/18824.php">http://www.open-mpi.org/community/lists/devel/2016/04/18824.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/04/18825.php">http://www.open-mpi.org/community/lists/devel/2016/04/18825.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18827.php">dpchoudh .: "[OMPI devel] modex receive"</a>
<li><strong>Previous message:</strong> <a href="18825.php">Sylvain Jeaugey: "Re: [OMPI devel] Process affinity detection"</a>
<li><strong>In reply to:</strong> <a href="18825.php">Sylvain Jeaugey: "Re: [OMPI devel] Process affinity detection"</a>
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
