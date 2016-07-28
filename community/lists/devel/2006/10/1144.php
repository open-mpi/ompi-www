<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct 25 09:05:56 2006" -->
<!-- isoreceived="20061025130556" -->
<!-- sent="Wed, 25 Oct 2006 15:06:14 +0200" -->
<!-- isosent="20061025130614" -->
<!-- name="Adrian Knoth" -->
<!-- email="adi_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] New oob/tcp?" -->
<!-- id="20061025130614.GR2105_at_drcomp.erfurt.thur.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20061025124833.GQ2105_at_drcomp.erfurt.thur.de" -->
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
<strong>From:</strong> Adrian Knoth (<em>adi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-25 09:06:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1145.php">Ralph H Castain: "Re: [OMPI devel] New oob/tcp?"</a>
<li><strong>Previous message:</strong> <a href="1143.php">Adrian Knoth: "Re: [OMPI devel] New oob/tcp?"</a>
<li><strong>In reply to:</strong> <a href="1143.php">Adrian Knoth: "Re: [OMPI devel] New oob/tcp?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1145.php">Ralph H Castain: "Re: [OMPI devel] New oob/tcp?"</a>
<li><strong>Reply:</strong> <a href="1145.php">Ralph H Castain: "Re: [OMPI devel] New oob/tcp?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Oct 25, 2006 at 02:48:33PM +0200, Adrian Knoth wrote:
<br>
<p><span class="quotelev2">&gt; &gt; I don't see any new component, Adrian. There have been a few updates to the
</span><br>
<span class="quotelev2">&gt; &gt; existing component, some of which might cause conflicts with the merge, but
</span><br>
<span class="quotelev2">&gt; &gt; those shouldn't be too hard to resolve.
</span><br>
<span class="quotelev1">&gt; Ok, I just saw something with &quot;create_listen_thread&quot; and so on, but
</span><br>
<span class="quotelev1">&gt; didn't look closer.
</span><br>
<p>The &quot;new&quot; (current) oob/tcp (in the v1.2 branch) does not have Brian's
<br>
fix for #493. (the following constant is missing, the code, too)
<br>
<p>&nbsp;&nbsp;&nbsp;MCA_OOB_TCP_ADDR_TYPE_AFINET
<br>
<p>There are probably more differences...
<br>
<p>If you want, I can do the merge and we'll use my IPv6 oob with
<br>
all the patches up to r12050.
<br>
<p><p><pre>
-- 
mail: adi_at_[hidden]  	<a href="http://adi.thur.de">http://adi.thur.de</a>	PGP: v2-key via keyserver
&gt; Pine ist geil. Jedenfalls als Mailer.		(Holger Marzen und)
Pine stinkt.  Insbesondere als Mailer.		(Felix von Leitner in dasr)
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1145.php">Ralph H Castain: "Re: [OMPI devel] New oob/tcp?"</a>
<li><strong>Previous message:</strong> <a href="1143.php">Adrian Knoth: "Re: [OMPI devel] New oob/tcp?"</a>
<li><strong>In reply to:</strong> <a href="1143.php">Adrian Knoth: "Re: [OMPI devel] New oob/tcp?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1145.php">Ralph H Castain: "Re: [OMPI devel] New oob/tcp?"</a>
<li><strong>Reply:</strong> <a href="1145.php">Ralph H Castain: "Re: [OMPI devel] New oob/tcp?"</a>
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
