<?
$subject_val = "Re: [MTT devel] question about the test run";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  4 14:37:31 2010" -->
<!-- isoreceived="20101104183731" -->
<!-- sent="Thu, 4 Nov 2010 14:37:26 -0400" -->
<!-- isosent="20101104183726" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT devel] question about the test run" -->
<!-- id="B8F01C76-00F2-476A-8075-DEEB91402CE4_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4CD2F06E.7030004_at_osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [MTT devel] question about the test run<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-04 14:37:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0518.php">DongInn Kim: "Re: [MTT devel] question about the test run"</a>
<li><strong>Previous message:</strong> <a href="0516.php">Jeff Squyres: "Re: [MTT devel] question about the test run"</a>
<li><strong>Maybe in reply to:</strong> <a href="0512.php">Joshua Hursey: "Re: [MTT devel] question about the test run"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 4, 2010, at 1:42 PM, DongInn Kim wrote:
<br>
<p><span class="quotelev1">&gt; Yes, if we can manage the MPI part with more generic term, that would be really great so that we can use the same main framework without diverging to another perl module to deal with FTT or something like this.
</span><br>
<p>It would be much mo' preferable to not fork the code to have multiple cores -- one for MPI:: and one for Middleware::.
<br>
<p>Off the top of my head, here's the areas I think would need to be updated:
<br>
<p>- the MPI:: tree; rename to Middleware:: ?
<br>
- update all references in the code s/MPI::/Middleware/g
<br>
- add support for &quot;Middleware Install&quot; and &quot;Middleware Get&quot; section names; &quot;MPI Get&quot; and &quot;MPI Install&quot; phases should become aliases for these
<br>
- update the wiki documentation pages accordingly
<br>
<p>If you've got the cycles to do this, I'd love to see a patch.
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
<li><strong>Next message:</strong> <a href="0518.php">DongInn Kim: "Re: [MTT devel] question about the test run"</a>
<li><strong>Previous message:</strong> <a href="0516.php">Jeff Squyres: "Re: [MTT devel] question about the test run"</a>
<li><strong>Maybe in reply to:</strong> <a href="0512.php">Joshua Hursey: "Re: [MTT devel] question about the test run"</a>
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
