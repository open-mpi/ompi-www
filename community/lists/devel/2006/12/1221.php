<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Dec  6 09:07:52 2006" -->
<!-- isoreceived="20061206140752" -->
<!-- sent="Wed, 06 Dec 2006 07:07:42 -0700" -->
<!-- isosent="20061206140742" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Major revision to the RML/OOB" -->
<!-- id="C19C1CBE.6410%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20061205181806.GZ7117_at_drcomp.erfurt.thur.de" -->
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
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-12-06 09:07:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1222.php">Ralph H Castain: "Re: [OMPI devel] Major revision to the RML/OOB"</a>
<li><strong>Previous message:</strong> <a href="1220.php">Adrian Knoth: "Re: [OMPI devel] Major revision to the RML/OOB"</a>
<li><strong>In reply to:</strong> <a href="1220.php">Adrian Knoth: "Re: [OMPI devel] Major revision to the RML/OOB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1223.php">Adrian Knoth: "Re: [OMPI devel] Major revision to the RML/OOB"</a>
<li><strong>Reply:</strong> <a href="1223.php">Adrian Knoth: "Re: [OMPI devel] Major revision to the RML/OOB"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We aren't ignoring your situation, Adrian - Jeff and I are talking about how
<br>
best to deal with the situation and your offer to help. This revision will
<br>
indeed see some significant change in the oob/tcp component, mostly in the
<br>
init and connect procedures.
<br>
<p>The concern is that we want to leave open the possibility of putting this
<br>
revision into 1.2 since it will have a major performance impact on both
<br>
startup time and the max cluster size we can support. The IP6 code is
<br>
scheduled for 1.3 and we don't know what the performance impact will look
<br>
like - hence the hesitation.
<br>
<p>We are both a little buried at the moment with other crises, but I hope we
<br>
can give you a more intelligent reply shortly.
<br>
<p>Thanks
<br>
Ralph
<br>
<p><p>On 12/5/06 11:18 AM, &quot;Adrian Knoth&quot; &lt;adi_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Mon, Dec 04, 2006 at 06:26:26AM -0700, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hello all
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi!
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; With some luck and (hopefully) not too many conflicting priorities, Jeff
</span><br>
<span class="quotelev2">&gt;&gt; and I may complete this work by Christmas
</span><br>
<span class="quotelev1">&gt; [..]
</span><br>
<span class="quotelev2">&gt;&gt; As always, feel free to comment and/or make suggestions!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You wrote a lot about oob, sockets and connections. Does this
</span><br>
<span class="quotelev1">&gt; imply changes to oob/tcp? If so, I suggest to integrate the
</span><br>
<span class="quotelev1">&gt; IPv6 support first (may be ported from /tmp/adi-ipv6, see
</span><br>
<span class="quotelev1">&gt; &lt;<a href="http://www.open-mpi.org/community/lists/devel/2006/10/1147.php">http://www.open-mpi.org/community/lists/devel/2006/10/1147.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; for details).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Of course, I'd like to help. Has anybody ever tested the code?
</span><br>
<span class="quotelev1">&gt; (surely we did, but someone else?)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1222.php">Ralph H Castain: "Re: [OMPI devel] Major revision to the RML/OOB"</a>
<li><strong>Previous message:</strong> <a href="1220.php">Adrian Knoth: "Re: [OMPI devel] Major revision to the RML/OOB"</a>
<li><strong>In reply to:</strong> <a href="1220.php">Adrian Knoth: "Re: [OMPI devel] Major revision to the RML/OOB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1223.php">Adrian Knoth: "Re: [OMPI devel] Major revision to the RML/OOB"</a>
<li><strong>Reply:</strong> <a href="1223.php">Adrian Knoth: "Re: [OMPI devel] Major revision to the RML/OOB"</a>
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
