<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Oct 13 13:56:38 2005" -->
<!-- isoreceived="20051013185638" -->
<!-- sent="Thu, 13 Oct 2005 11:56:35 -0700" -->
<!-- isosent="20051013185635" -->
<!-- name="Brooks Davis" -->
<!-- email="brooks_at_[hidden]" -->
<!-- subject="Re:  porting guide?" -->
<!-- id="20051013185635.GF27418_at_odin.ac.hmc.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="eeefbd0d0fa9eb2292ac56c4c28e3c4e_at_open-mpi.org" -->
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
<strong>From:</strong> Brooks Davis (<em>brooks_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-10-13 13:56:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0448.php">Jeff Squyres: "Re:  porting guide?"</a>
<li><strong>Previous message:</strong> <a href="0446.php">Jeff Squyres: "Re:  porting guide?"</a>
<li><strong>In reply to:</strong> <a href="0446.php">Jeff Squyres: "Re:  porting guide?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0448.php">Jeff Squyres: "Re:  porting guide?"</a>
<li><strong>Reply:</strong> <a href="0448.php">Jeff Squyres: "Re:  porting guide?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks!  Which rc will include these changes?
<br>
<p>At this point I've run a trivial local job so at least something
<br>
works. :)
<br>
<p>-- Brooks
<br>
<p>On Thu, Oct 13, 2005 at 11:46:12AM -0400, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Brooks --
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Many thanks!  I have committed your entire patch to both the trunk and 
</span><br>
<span class="quotelev1">&gt; the v1.0 branch.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Oct 12, 2005, at 4:20 PM, Brooks Davis wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; No testing yet, but I've modified configure.am and
</span><br>
<span class="quotelev2">&gt; &gt; opal/util/stacktrace.c to work by probing for backtrace() and
</span><br>
<span class="quotelev2">&gt; &gt; libexecinfo.  The configure code is cribbed from the sched_yeild and 
</span><br>
<span class="quotelev2">&gt; &gt; -lrt
</span><br>
<span class="quotelev2">&gt; &gt; code for Solaris.  The diff below includes that, some changes to
</span><br>
<span class="quotelev2">&gt; &gt; detect libutil.h and it include as needed and the added ifdef from my
</span><br>
<span class="quotelev2">&gt; &gt; last message in stacktrace.c.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; {+} Jeff Squyres
</span><br>
<span class="quotelev1">&gt; {+} The Open MPI Project
</span><br>
<span class="quotelev1">&gt; {+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<pre>
-- 
Any statement of the form &quot;X is the one, true Y&quot; is FALSE.
PGP fingerprint 655D 519C 26A7 82E7 2529  9BF0 5D8E 8BE9 F238 1AD4

</pre>
<p>
<p><hr>
<ul>
<li>application/pgp-signature attachment: <a href="../../att-0447/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0448.php">Jeff Squyres: "Re:  porting guide?"</a>
<li><strong>Previous message:</strong> <a href="0446.php">Jeff Squyres: "Re:  porting guide?"</a>
<li><strong>In reply to:</strong> <a href="0446.php">Jeff Squyres: "Re:  porting guide?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0448.php">Jeff Squyres: "Re:  porting guide?"</a>
<li><strong>Reply:</strong> <a href="0448.php">Jeff Squyres: "Re:  porting guide?"</a>
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
