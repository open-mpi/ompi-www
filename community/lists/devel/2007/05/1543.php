<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri May 11 15:07:45 2007" -->
<!-- isoreceived="20070511190745" -->
<!-- sent="Fri, 11 May 2007 12:07:40 -0700" -->
<!-- isosent="20070511190740" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI over ofed udapl over iwarp" -->
<!-- id="4644BEFC.3030400_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1EF1E44200D82B47BD5BA61171E8CE9D03C338D5_at_NT-IRVA-0750.brcm.ad.broadcom.com" -->
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
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-11 15:07:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1544.php">Galen Shipman: "Re: [OMPI devel] OMPI over ofed udapl over iwarp"</a>
<li><strong>Previous message:</strong> <a href="1542.php">Galen Shipman: "Re: [OMPI devel] OMPI over ofed udapl over iwarp"</a>
<li><strong>In reply to:</strong> <a href="1541.php">Caitlin Bestler: "Re: [OMPI devel] OMPI over ofed udapl over iwarp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1544.php">Galen Shipman: "Re: [OMPI devel] OMPI over ofed udapl over iwarp"</a>
<li><strong>Reply:</strong> <a href="1544.php">Galen Shipman: "Re: [OMPI devel] OMPI over ofed udapl over iwarp"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Caitlin Bestler wrote:
<br>
[snip]
<br>
<span class="quotelev1">&gt; The DAPL semantics are very clear that send/recv operations must
</span><br>
<span class="quotelev1">&gt; be matched one to one, that the receive buffer must be large
</span><br>
<span class="quotelev1">&gt; enough for the received message and that there must be a receive
</span><br>
<span class="quotelev1">&gt; buffer for each incoming send/recv message. That means that
</span><br>
<span class="quotelev1">&gt; the sender needs to have some basis for believing that the
</span><br>
<span class="quotelev1">&gt; RECV has been posted. Usually this is an explicit credit
</span><br>
<span class="quotelev1">&gt; that is decremented per message and incremented per response.
</span><br>
[snip]
<br>
<p>As a former member of both the VI Developers Forum and DAT
<br>
Collaborative, and an implementer of VI provider software and of IB
<br>
client software, I will back up Caitlin here.
<br>
<p>In my own words (not quoting any spec):
<br>
<p>1) A correct DAPL consumer *shall* post receives in sufficient quantity
<br>
and of sufficient size prior to the peer posting the sends.
<br>
2) A DAPL provider's response to a lack of preposted receives is
<br>
undefined and may include providing implicit flow control (IB) to
<br>
terminating the connection (iWARP and VI).
<br>
<p>It appears that IB's forgiving nature here has allowed the BTL to get
<br>
away with violating the preposted recv requirement.
<br>
<p>As an aside, my personal feeling is that even when running over IB the
<br>
preposting of recvs is worth the small overhead of piggybacking a credit
<br>
system on the messages that already cross the wire.  If nothing else,
<br>
this avoids adding congestion of RNR-NAKS and the resends they trigger.
<br>
&nbsp;Put another way, I favor programming for IB as if it lacked the
<br>
link-level flow control that the current BTL apparently assumes.
<br>
<p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
HPC Research Department                   Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1544.php">Galen Shipman: "Re: [OMPI devel] OMPI over ofed udapl over iwarp"</a>
<li><strong>Previous message:</strong> <a href="1542.php">Galen Shipman: "Re: [OMPI devel] OMPI over ofed udapl over iwarp"</a>
<li><strong>In reply to:</strong> <a href="1541.php">Caitlin Bestler: "Re: [OMPI devel] OMPI over ofed udapl over iwarp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1544.php">Galen Shipman: "Re: [OMPI devel] OMPI over ofed udapl over iwarp"</a>
<li><strong>Reply:</strong> <a href="1544.php">Galen Shipman: "Re: [OMPI devel] OMPI over ofed udapl over iwarp"</a>
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
