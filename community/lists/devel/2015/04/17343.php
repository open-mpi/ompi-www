<?
$subject_val = "Re: [OMPI devel] binding output error";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 23 09:22:42 2015" -->
<!-- isoreceived="20150423132242" -->
<!-- sent="Thu, 23 Apr 2015 13:22:39 +0000" -->
<!-- isosent="20150423132239" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] binding output error" -->
<!-- id="397F7E81-83B4-4496-9039-982164B6C6CF_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="F918318E-D8ED-4A17-B8AD-849260B4BE35_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] binding output error<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-23 09:22:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17344.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Minor error in distscript.csh"</a>
<li><strong>Previous message:</strong> <a href="17342.php">Rapha&#235;l Fouassier: "Re: [OMPI devel] Fwd: OpenIB module initialisation causes segmentation fault when locked memory limit too low"</a>
<li><strong>In reply to:</strong> <a href="17341.php">Ralph Castain: "Re: [OMPI devel] binding output error"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Awesome; I think that definitively squashes any confusion.  Thanks!
<br>
<p><span class="quotelev1">&gt; On Apr 23, 2015, at 7:31 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; FWIW: I just pushed a change that makes the devel-map output match the report-bindings output format so we reduce confusion.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; HTH
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 23, 2015, at 4:29 AM, Elena Elkina &lt;elena.elkina_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks guys, you're right.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This is an output of lstopo on our system which confirms that logical cpus numbering is used in report bindings:
</span><br>
<span class="quotelev2">&gt;&gt; lstopo -l
</span><br>
<span class="quotelev2">&gt;&gt; Machine (256GB)
</span><br>
<span class="quotelev2">&gt;&gt;   NUMANode L#0 (P#0 128GB) + Socket L#0 + L3 L#0 (35MB)
</span><br>
<span class="quotelev2">&gt;&gt;     L2 L#0 (256KB) + L1 L#0 (32KB) + Core L#0 + PU L#0 (P#0)
</span><br>
<span class="quotelev2">&gt;&gt;     L2 L#1 (256KB) + L1 L#1 (32KB) + Core L#1 + PU L#1 (P#1)
</span><br>
<span class="quotelev2">&gt;&gt;     L2 L#2 (256KB) + L1 L#2 (32KB) + Core L#2 + PU L#2 (P#2)
</span><br>
<span class="quotelev2">&gt;&gt;     L2 L#3 (256KB) + L1 L#3 (32KB) + Core L#3 + PU L#3 (P#3)
</span><br>
<span class="quotelev2">&gt;&gt;     L2 L#4 (256KB) + L1 L#4 (32KB) + Core L#4 + PU L#4 (P#4)
</span><br>
<span class="quotelev2">&gt;&gt;     L2 L#5 (256KB) + L1 L#5 (32KB) + Core L#5 + PU L#5 (P#5)
</span><br>
<span class="quotelev2">&gt;&gt;     L2 L#6 (256KB) + L1 L#6 (32KB) + Core L#6 + PU L#6 (P#6)
</span><br>
<span class="quotelev2">&gt;&gt;     L2 L#7 (256KB) + L1 L#7 (32KB) + Core L#7 + PU L#7 (P#14)
</span><br>
<span class="quotelev2">&gt;&gt;     L2 L#8 (256KB) + L1 L#8 (32KB) + Core L#8 + PU L#8 (P#15)
</span><br>
<span class="quotelev2">&gt;&gt;     L2 L#9 (256KB) + L1 L#9 (32KB) + Core L#9 + PU L#9 (P#16)
</span><br>
<span class="quotelev2">&gt;&gt;     L2 L#10 (256KB) + L1 L#10 (32KB) + Core L#10 + PU L#10 (P#17)
</span><br>
<span class="quotelev2">&gt;&gt;     L2 L#11 (256KB) + L1 L#11 (32KB) + Core L#11 + PU L#11 (P#18)
</span><br>
<span class="quotelev2">&gt;&gt;     L2 L#12 (256KB) + L1 L#12 (32KB) + Core L#12 + PU L#12 (P#19)
</span><br>
<span class="quotelev2">&gt;&gt;     L2 L#13 (256KB) + L1 L#13 (32KB) + Core L#13 + PU L#13 (P#20)
</span><br>
<span class="quotelev2">&gt;&gt;   NUMANode L#1 (P#1 128GB) + Socket L#1 + L3 L#1 (35MB)
</span><br>
<span class="quotelev2">&gt;&gt;     L2 L#14 (256KB) + L1 L#14 (32KB) + Core L#14 + PU L#14 (P#7)
</span><br>
<span class="quotelev2">&gt;&gt;     L2 L#15 (256KB) + L1 L#15 (32KB) + Core L#15 + PU L#15 (P#8)
</span><br>
<span class="quotelev2">&gt;&gt;     L2 L#16 (256KB) + L1 L#16 (32KB) + Core L#16 + PU L#16 (P#9)
</span><br>
<span class="quotelev2">&gt;&gt;     L2 L#17 (256KB) + L1 L#17 (32KB) + Core L#17 + PU L#17 (P#10)
</span><br>
<span class="quotelev2">&gt;&gt;     L2 L#18 (256KB) + L1 L#18 (32KB) + Core L#18 + PU L#18 (P#11)
</span><br>
<span class="quotelev2">&gt;&gt;     L2 L#19 (256KB) + L1 L#19 (32KB) + Core L#19 + PU L#19 (P#12)
</span><br>
<span class="quotelev2">&gt;&gt;     L2 L#20 (256KB) + L1 L#20 (32KB) + Core L#20 + PU L#20 (P#13)
</span><br>
<span class="quotelev2">&gt;&gt;     L2 L#21 (256KB) + L1 L#21 (32KB) + Core L#21 + PU L#21 (P#21)
</span><br>
<span class="quotelev2">&gt;&gt;     L2 L#22 (256KB) + L1 L#22 (32KB) + Core L#22 + PU L#22 (P#22)
</span><br>
<span class="quotelev2">&gt;&gt;     L2 L#23 (256KB) + L1 L#23 (32KB) + Core L#23 + PU L#23 (P#23)
</span><br>
<span class="quotelev2">&gt;&gt;     L2 L#24 (256KB) + L1 L#24 (32KB) + Core L#24 + PU L#24 (P#24)
</span><br>
<span class="quotelev2">&gt;&gt;     L2 L#25 (256KB) + L1 L#25 (32KB) + Core L#25 + PU L#25 (P#25)
</span><br>
<span class="quotelev2">&gt;&gt;     L2 L#26 (256KB) + L1 L#26 (32KB) + Core L#26 + PU L#26 (P#26)
</span><br>
<span class="quotelev2">&gt;&gt;     L2 L#27 (256KB) + L1 L#27 (32KB) + Core L#27 + PU L#27 (P#27)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Best regards,
</span><br>
<span class="quotelev2">&gt;&gt; Elena
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, Apr 23, 2015 at 2:36 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 22, 2015, at 11:13 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &lt;shrug&gt; every bios does it differently, so there is no way to provide a standardized output. This is why we have report-bindings to tell the user where they actually wound up.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Maybe we should label the --display-devel-map with &quot;P&quot; to indicate that the numbers shown are physical?  E.g.:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;         State: INITIALIZED      Restarts: 0     App_context: 0  Locale: P0,P12  Bind location: P0,P12   Binding: P0,P12
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; (I was liberal in the application of P -- I *think* it belongs in all 6 places, but am not 100% sure)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/04/17339.php">http://www.open-mpi.org/community/lists/devel/2015/04/17339.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/04/17340.php">http://www.open-mpi.org/community/lists/devel/2015/04/17340.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/04/17341.php">http://www.open-mpi.org/community/lists/devel/2015/04/17341.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17344.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Minor error in distscript.csh"</a>
<li><strong>Previous message:</strong> <a href="17342.php">Rapha&#235;l Fouassier: "Re: [OMPI devel] Fwd: OpenIB module initialisation causes segmentation fault when locked memory limit too low"</a>
<li><strong>In reply to:</strong> <a href="17341.php">Ralph Castain: "Re: [OMPI devel] binding output error"</a>
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
