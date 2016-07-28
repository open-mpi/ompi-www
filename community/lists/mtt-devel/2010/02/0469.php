<?
$subject_val = "Re: [MTT devel] MTToGDS";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 10 06:01:47 2010" -->
<!-- isoreceived="20100210110147" -->
<!-- sent="Wed, 10 Feb 2010 06:01:42 -0500" -->
<!-- isosent="20100210110142" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT devel] MTToGDS" -->
<!-- id="9DCD6573-4F77-4CEE-B9D6-213F242B46AE_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="39C75744D164D948A170E9792AF8E7CA02FC5763_at_exil.voltaire.com" -->
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
<strong>Subject:</strong> Re: [MTT devel] MTToGDS<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-10 06:01:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0470.php">Jeff Squyres: "Re: [MTT devel] MTToGDS"</a>
<li><strong>Previous message:</strong> <a href="0468.php">Igor Ivanov: "Re: [MTT devel] MTToGDS"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2009/09/0442.php">Mike Dubman: "[MTT devel] MTToGDS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2010/03/0505.php">Jeff Squyres (jsquyres): "Re: [MTT devel] MTToGDS"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 10, 2010, at 1:45 AM, Mike Dubman wrote:
<br>
<p><span class="quotelev1">&gt; The GDS files use libyaml interfaces (there is no explictic 'use Syck'
</span><br>
<span class="quotelev1">&gt; in the code). I think it is implicit dependancy of one of the perl
</span><br>
<span class="quotelev1">&gt; modules or when you do &quot;yum install libyaml perl-Yaml --&gt; it brings syck
</span><br>
<span class="quotelev1">&gt; as well)
</span><br>
<p>It seems to be coming from bquery.pl (I didn't try breport.pl yet) -- if I don't have YAML::Syck installed, perl complains that it can't find it in @INC.  Odd.
<br>
<p><span class="quotelev2">&gt; &gt; I'm testing bquery.pl -- unfortunately, I'm behind some
</span><br>
<span class="quotelev2">&gt; &gt; proxies in the Cisco lab environment.  I'll see if I can add
</span><br>
<span class="quotelev2">&gt; &gt; proxy support...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It works for us behind the proxy with HTTP_PROXY shell vars.
</span><br>
<p>I committed some changes to bquery.pl last night for this.  The issue is that $ENV{http_proxy} is unfortunately overloaded by multiple different apps and environments -- some require the value to be of the form:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;proxy_host_name[:port]
<br>
<p>Others (like LWP) require it to be of the form
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;scheme://proxy_host_name[:port]
<br>
<p>In my environment, I use the former (with no scheme).  So I added some code in bquery.pl to check and see if there is no scheme at the beginning of $ENV{http_proxy}.  If there isn't, add the same scheme that is at the prefix of the URL that we're submitting to.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0470.php">Jeff Squyres: "Re: [MTT devel] MTToGDS"</a>
<li><strong>Previous message:</strong> <a href="0468.php">Igor Ivanov: "Re: [MTT devel] MTToGDS"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2009/09/0442.php">Mike Dubman: "[MTT devel] MTToGDS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2010/03/0505.php">Jeff Squyres (jsquyres): "Re: [MTT devel] MTToGDS"</a>
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
