<?
$subject_val = "Re: [OMPI devel] RFC: warn if running a debug build";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar  2 07:20:08 2016" -->
<!-- isoreceived="20160302122008" -->
<!-- sent="Wed, 2 Mar 2016 12:20:04 +0000" -->
<!-- isosent="20160302122004" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: warn if running a debug build" -->
<!-- id="392CD1C1-4275-4B02-9B1F-D157FB953A61_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAMJJpkXsNYeeZumuM6bBq9zsBuRyNT7-3Lmiko5ZYadLHUm+Aw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: warn if running a debug build<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-02 07:20:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18662.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: warn if running a debug build"</a>
<li><strong>Previous message:</strong> <a href="18660.php">George Bosilca: "Re: [OMPI devel] RFC: warn if running a debug build"</a>
<li><strong>In reply to:</strong> <a href="18660.php">George Bosilca: "Re: [OMPI devel] RFC: warn if running a debug build"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18662.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: warn if running a debug build"</a>
<li><strong>Reply:</strong> <a href="18662.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: warn if running a debug build"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 2, 2016, at 1:02 AM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am not sure why Jeff decided to implement this approach. If I remember correctly last week we converged toward the solution described by Ralph (ie disabling the debug build by default for everyone,  including developers).
</span><br>
<p>Yes, we did.  But that hasn't happened yet.  I don't remember who was supposed to do that, offhand.  If we decide that disabling debug builds by default is a better approach than this one, no problem.  To me, they seem like complimentary ideas -- especially if debug builds are not the default, then it will be unusual to have debug builds, and therefore an extra warning is a not necessarily a bad thing.
<br>
<p>Here's the message that is emitted from <a href="https://github.com/open-mpi/ompi/pull/1417">https://github.com/open-mpi/ompi/pull/1417</a>:
<br>
<p># OPEN MPI: This is a debug build. DO NOT USE IT FOR PERFORMANCE RESULTS!
<br>
# OPEN MPI: Set MCA param &quot;orte_nowarn_debug_build&quot; to disable this msg
<br>
<p>I didn't state it in the message, but you can also &quot;mpirun --nowarn-debug-build&quot; -- I only listed the thing you'd put in your environment to disable it just because that seemed like a more common thing to do.
<br>
<p><span class="quotelev1">&gt; I wish we could fix all the cases. What we tried to achieve is to prevent the most usual blunders, but without finding the perfect solution. Most of the solutions we came up with put the burden on us, the OMPI developers.
</span><br>
<p>+1
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18662.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: warn if running a debug build"</a>
<li><strong>Previous message:</strong> <a href="18660.php">George Bosilca: "Re: [OMPI devel] RFC: warn if running a debug build"</a>
<li><strong>In reply to:</strong> <a href="18660.php">George Bosilca: "Re: [OMPI devel] RFC: warn if running a debug build"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18662.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: warn if running a debug build"</a>
<li><strong>Reply:</strong> <a href="18662.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: warn if running a debug build"</a>
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
