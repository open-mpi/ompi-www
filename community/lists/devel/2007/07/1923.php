<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jul 18 08:29:23 2007" -->
<!-- isoreceived="20070718122923" -->
<!-- sent="Wed, 18 Jul 2007 06:29:15 -0600" -->
<!-- isosent="20070718122915" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] iof / oob issues" -->
<!-- id="C2C363BB.A06E%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="EF381098-8946-47D2-9989-6BF9D47CFF20_at_cisco.com" -->
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
<strong>Date:</strong> 2007-07-18 08:29:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1924.php">Gleb Natapov: "[OMPI devel] LD_LIBRARY_PATH and process launch on a head node"</a>
<li><strong>Previous message:</strong> <a href="1922.php">Jeff Squyres: "Re: [OMPI devel] iof / oob issues"</a>
<li><strong>In reply to:</strong> <a href="1922.php">Jeff Squyres: "Re: [OMPI devel] iof / oob issues"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just to further clarify the clarification... ;-)
<br>
<p>This condition has existed for the last several months. The root problem
<br>
dates at least back into the 1.1 series. We chased the problem down to the
<br>
iof_flush call in the odls when a process terminates in something like Jan
<br>
or Feb this year, at which point we #if 0'd the iof_flush out of the code
<br>
pending a resolution (tickets were filed, emails flew, phone calls ensued -
<br>
just took awhile for people to have time to deal with it). It is still &quot;on&quot;
<br>
in 1.2 - just has been turned &quot;off&quot; in the trunk for months.
<br>
<p>[Actually, I did turn it back on briefly following r15390. Turned out the
<br>
timing changed just enough to make it work most of the time with things that
<br>
called orte_finalize, but always fail for programs that didn't, so we turned
<br>
it back off again]
<br>
<p>So the problem of having clipped output has been around for quite some time.
<br>
Since only Galen ever commented to me about being impacted by it, I gather
<br>
nobody has really noticed. ;-)
<br>
<p>Hopefully, we'll be able to turn it back on again soon.
<br>
<p><p>On 7/18/07 6:02 AM, &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; BTW, the fix didn't occur over the weekend because of some merging
</span><br>
<span class="quotelev1">&gt; issues.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I also didn't explain the problem well; you may see some clipped
</span><br>
<span class="quotelev1">&gt; output from your program or the orted may hang while everything is
</span><br>
<span class="quotelev1">&gt; shutting down.  This is especially likely to occur for very short
</span><br>
<span class="quotelev1">&gt; applications.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The problem is actually in the oob; the orted gets into a state where
</span><br>
<span class="quotelev1">&gt; it's waiting for some IOF OOB callbacks to occur for messages that
</span><br>
<span class="quotelev1">&gt; were already successfully sent, but the callbacks never occur due
</span><br>
<span class="quotelev1">&gt; to... well, it's a long story.  The IOF is basically spinning during
</span><br>
<span class="quotelev1">&gt; the orted shutdown waiting for pending OOB callbacks that will never
</span><br>
<span class="quotelev1">&gt; occur.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I can explain in more detail if anyone cares, but hopefully Brian
</span><br>
<span class="quotelev1">&gt; will be able to work the fix in within the next few days.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jul 13, 2007, at 5:04 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; FYI: there is an issue on the OMPI trunk right now that the tail
</span><br>
<span class="quotelev2">&gt;&gt; end of output from applications may get clipped.  The fix is coming
</span><br>
<span class="quotelev2">&gt;&gt; this weekend.  If you care, I'll explain, but I just wanted to give
</span><br>
<span class="quotelev2">&gt;&gt; everyone heads up that if you see the tail end of your stdout/
</span><br>
<span class="quotelev2">&gt;&gt; stderr not show up, it's probably not your fault.  :-)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1924.php">Gleb Natapov: "[OMPI devel] LD_LIBRARY_PATH and process launch on a head node"</a>
<li><strong>Previous message:</strong> <a href="1922.php">Jeff Squyres: "Re: [OMPI devel] iof / oob issues"</a>
<li><strong>In reply to:</strong> <a href="1922.php">Jeff Squyres: "Re: [OMPI devel] iof / oob issues"</a>
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
