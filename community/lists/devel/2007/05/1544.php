<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri May 11 15:15:57 2007" -->
<!-- isoreceived="20070511191557" -->
<!-- sent="Fri, 11 May 2007 13:15:40 -0600" -->
<!-- isosent="20070511191540" -->
<!-- name="Galen Shipman" -->
<!-- email="gshipman_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI over ofed udapl over iwarp" -->
<!-- id="655D8469-B917-4868-A16F-32698740B65E_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4644BEFC.3030400_at_lbl.gov" -->
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
<strong>From:</strong> Galen Shipman (<em>gshipman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-11 15:15:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1545.php">Tim Mattox: "[OMPI devel] Open MPI v1.2.2rc1 has been posted"</a>
<li><strong>Previous message:</strong> <a href="1543.php">Paul H. Hargrove: "Re: [OMPI devel] OMPI over ofed udapl over iwarp"</a>
<li><strong>In reply to:</strong> <a href="1543.php">Paul H. Hargrove: "Re: [OMPI devel] OMPI over ofed udapl over iwarp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1546.php">Donald Kerr: "Re: [OMPI devel] OMPI over ofed udapl over iwarp"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As an aside, my personal feeling is that even when running over IB the
</span><br>
<span class="quotelev1">&gt; preposting of recvs is worth the small overhead of piggybacking a  
</span><br>
<span class="quotelev1">&gt; credit
</span><br>
<span class="quotelev1">&gt; system on the messages that already cross the wire.  If nothing else,
</span><br>
<span class="quotelev1">&gt; this avoids adding congestion of RNR-NAKS and the resends they  
</span><br>
<span class="quotelev1">&gt; trigger.
</span><br>
<span class="quotelev1">&gt;  Put another way, I favor programming for IB as if it lacked the
</span><br>
<span class="quotelev1">&gt; link-level flow control that the current BTL apparently assumes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>We avoid the RNR-NAKS in the Open IB BTL via a credit system.
<br>
I would have to review the udapl BTL but I believe it does something  
<br>
similar.
<br>
I believe the problem only exists during lazy connection  
<br>
establishment, when credits are probably initialized to the defaults  
<br>
on both ends. We should really just set the credits as part of the  
<br>
handshake (after the receiver has posted the receive buffers).
<br>
<p><p><p>- Galen
<br>
<p><p><p><span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; HPC Research Department                   Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
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
<li><strong>Next message:</strong> <a href="1545.php">Tim Mattox: "[OMPI devel] Open MPI v1.2.2rc1 has been posted"</a>
<li><strong>Previous message:</strong> <a href="1543.php">Paul H. Hargrove: "Re: [OMPI devel] OMPI over ofed udapl over iwarp"</a>
<li><strong>In reply to:</strong> <a href="1543.php">Paul H. Hargrove: "Re: [OMPI devel] OMPI over ofed udapl over iwarp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1546.php">Donald Kerr: "Re: [OMPI devel] OMPI over ofed udapl over iwarp"</a>
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
