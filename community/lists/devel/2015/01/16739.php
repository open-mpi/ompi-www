<?
$subject_val = "Re: [OMPI devel] RFC: remove --disable-smp-locks";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan  6 12:04:01 2015" -->
<!-- isoreceived="20150106170401" -->
<!-- sent="Tue, 6 Jan 2015 17:04:00 +0000" -->
<!-- isosent="20150106170400" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: remove --disable-smp-locks" -->
<!-- id="29DD77FE-F58B-4876-A8D5-7C985615C463_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAF1Cqj5cMZZpUHFgcHd3FQ+pSy-+TwPKiL-+PyL9T-qZOZ2eKw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: remove --disable-smp-locks<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-06 12:04:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16740.php">Ralph Castain: "Re: [OMPI devel] RFC: remove --disable-smp-locks"</a>
<li><strong>Previous message:</strong> <a href="16738.php">Dave Goodell (dgoodell): "Re: [OMPI devel] ompi-master build error : make can	require	autotools"</a>
<li><strong>In reply to:</strong> <a href="16737.php">Howard Pritchard: "Re: [OMPI devel] RFC: remove --disable-smp-locks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16740.php">Ralph Castain: "Re: [OMPI devel] RFC: remove --disable-smp-locks"</a>
<li><strong>Reply:</strong> <a href="16740.php">Ralph Castain: "Re: [OMPI devel] RFC: remove --disable-smp-locks"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
+1
<br>
<p>On Jan 6, 2015, at 11:55 AM, Howard Pritchard &lt;hppritcha_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I agree.  Please remove this config option.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2015-01-06 9:44 GMT-07:00 Nathan Hjelm &lt;hjelmn_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What: Remove the --disable-smp-locks configure option from master.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Why: Use of this option produces incorrect results/undefined behavior
</span><br>
<span class="quotelev1">&gt; when any shared memory BTL is in use. Since BTL usage is enabled even
</span><br>
<span class="quotelev1">&gt; when using cm for point-to-point this option can never be safely used.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When: Thurs, Jan 6, 2015
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Nathan
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/01/16736.php">http://www.open-mpi.org/community/lists/devel/2015/01/16736.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/01/16737.php">http://www.open-mpi.org/community/lists/devel/2015/01/16737.php</a>
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
<li><strong>Next message:</strong> <a href="16740.php">Ralph Castain: "Re: [OMPI devel] RFC: remove --disable-smp-locks"</a>
<li><strong>Previous message:</strong> <a href="16738.php">Dave Goodell (dgoodell): "Re: [OMPI devel] ompi-master build error : make can	require	autotools"</a>
<li><strong>In reply to:</strong> <a href="16737.php">Howard Pritchard: "Re: [OMPI devel] RFC: remove --disable-smp-locks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16740.php">Ralph Castain: "Re: [OMPI devel] RFC: remove --disable-smp-locks"</a>
<li><strong>Reply:</strong> <a href="16740.php">Ralph Castain: "Re: [OMPI devel] RFC: remove --disable-smp-locks"</a>
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
