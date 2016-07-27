<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Aug 30 10:37:37 2007" -->
<!-- isoreceived="20070830143737" -->
<!-- sent="Thu, 30 Aug 2007 10:37:15 -0400" -->
<!-- isosent="20070830143715" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT devel] reporter.php" -->
<!-- id="F7B970F6-D6D7-4D0D-86BF-F75A54E0C0AC_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="F0B91347-4FB8-45BB-B67D-81075D053BEF_at_open-mpi.org" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-30 10:37:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0050.php">Josh Hursey: "Re: [MTT devel] reporter.php"</a>
<li><strong>Previous message:</strong> <a href="0048.php">Josh Hursey: "Re: [MTT devel] reporter.php"</a>
<li><strong>In reply to:</strong> <a href="0048.php">Josh Hursey: "Re: [MTT devel] reporter.php"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0050.php">Josh Hursey: "Re: [MTT devel] reporter.php"</a>
<li><strong>Reply:</strong> <a href="0050.php">Josh Hursey: "Re: [MTT devel] reporter.php"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
K.  I made the switch index.php &lt;--&gt; reporter.php.
<br>
<p>On Aug 30, 2007, at 10:33 AM, Josh Hursey wrote:
<br>
<p><span class="quotelev1">&gt; FYI: I finished cleaning up the PHP submit script. It seems that
</span><br>
<span class="quotelev1">&gt; there are some associated issues with the stats PHP script. I'm
</span><br>
<span class="quotelev1">&gt; cleaning that up at the moment.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 30, 2007, at 9:47 AM, Josh Hursey wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I donno. But I would favor the index.php route as well.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Also FYI I'm working on the submit.php script a bit this morning. I'm
</span><br>
<span class="quotelev2">&gt;&gt; doing 2 things:
</span><br>
<span class="quotelev2">&gt;&gt;   - Cleaning up error messages
</span><br>
<span class="quotelev2">&gt;&gt;   - Inserting a transaction to solve a race condition that was
</span><br>
<span class="quotelev2">&gt;&gt; triggered last night by an IU submit.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- Josh
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 30, 2007, at 9:39 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So is there any reason we have the reporter in reporter.php instead
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of index.php?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Or is this only for hysterical raisins?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For aesthetic reasons, I'd be in favor of moving reporter.php  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; back to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; index.php and putting in a redirect file from reporter.php back to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; index.php (or, more specifically, back to .).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mtt-devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; mtt-devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-devel mailing list
</span><br>
<span class="quotelev1">&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0050.php">Josh Hursey: "Re: [MTT devel] reporter.php"</a>
<li><strong>Previous message:</strong> <a href="0048.php">Josh Hursey: "Re: [MTT devel] reporter.php"</a>
<li><strong>In reply to:</strong> <a href="0048.php">Josh Hursey: "Re: [MTT devel] reporter.php"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0050.php">Josh Hursey: "Re: [MTT devel] reporter.php"</a>
<li><strong>Reply:</strong> <a href="0050.php">Josh Hursey: "Re: [MTT devel] reporter.php"</a>
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
