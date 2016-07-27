<?
$subject_val = "Re: [MTT devel] Converted to git";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 17 09:03:19 2014" -->
<!-- isoreceived="20140417130319" -->
<!-- sent="Thu, 17 Apr 2014 13:03:17 +0000" -->
<!-- isosent="20140417130317" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT devel] Converted to git" -->
<!-- id="C56F46E6-B1E5-45FA-B813-42E687B2845B_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="9E696B86-7A3A-4F18-90FB-2453AD4FE391_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [MTT devel] Converted to git<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-17 09:03:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0625.php">Jeff Squyres (jsquyres): "[MTT devel] MTT moved to final github location"</a>
<li><strong>Previous message:</strong> <a href="0623.php">Jeff Squyres (jsquyres): "Re: [MTT devel] Converted to git"</a>
<li><strong>In reply to:</strong> <a href="0623.php">Jeff Squyres (jsquyres): "Re: [MTT devel] Converted to git"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I assume this means that no one found any problems or has any changes.
<br>
<p>I'll be moving this to its permanent home on github sometime soon and making the MTT SVN be read-only.  Trac will be migrating to be git-based soon as well.
<br>
<p>Please do not use the MTT trac until further notice.  Thanks!
<br>
<p><p>On Apr 16, 2014, at 3:40 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; BTW, I used the following SVN&lt;--&gt;email addresses mapping for creating the git commits.  Let me know if you want something different:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; adkulkar = Abhishek Kulkarni &lt;adkulkar_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; afriedle = Andrew Friedley &lt;afriedle_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; brbarret = Brian Barrett &lt;brbarret_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; cyeoh = Chris Yeoh &lt;cyeoh_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; em162155 = Ethan Mallove &lt;Ethan.Mallove_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; emallove = Ethan Mallove &lt;Ethan.Mallove_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; eugene = Eugene Loh &lt;Eugene.Loh_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; hpcstork = Sven Stork &lt;sven.stork_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; jjhursey = Josh Hursey &lt;jjhursey_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; jsquyres = Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; miked = Mike Dubman &lt;miked_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; pasha = Pavel Shamis &lt;shamisp_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; rusraink = Rainer Keller &lt;Rainer.keller_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; shiqing = Shiqing Fan &lt;fan_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; timattox = Tim Mattox &lt;timattox_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Apr 16, 2014, at 3:37 PM, &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I have done a TRIAL conversion to git and pushed it to a demo repo at github.  Please examine it and let me know if you see any problems:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   <a href="https://github.com/jsquyres/mtt-test">https://github.com/jsquyres/mtt-test</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Note that we converted references to &quot;rXYZ&quot; in log messages -- see <a href="https://github.com/jsquyres/mtt-test/commit/ebb98c67677b02fa00064f8b1ae0d40941c305cd">https://github.com/jsquyres/mtt-test/commit/ebb98c67677b02fa00064f8b1ae0d40941c305cd</a> for an example.
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
<span class="quotelev2">&gt;&gt; mtt-devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0625.php">Jeff Squyres (jsquyres): "[MTT devel] MTT moved to final github location"</a>
<li><strong>Previous message:</strong> <a href="0623.php">Jeff Squyres (jsquyres): "Re: [MTT devel] Converted to git"</a>
<li><strong>In reply to:</strong> <a href="0623.php">Jeff Squyres (jsquyres): "Re: [MTT devel] Converted to git"</a>
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
