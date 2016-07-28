<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Sep  1 07:18:32 2005" -->
<!-- isoreceived="20050901121832" -->
<!-- sent="Thu, 1 Sep 2005 08:18:26 -0400" -->
<!-- isosent="20050901121826" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re:  ltdl.h problem" -->
<!-- id="c56c432cfb080bec703e2bf44756588f_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="9cf0cd617a8c3fa0aaff321bb06475e7_at_lam-mpi.org" -->
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
<strong>Date:</strong> 2005-09-01 07:18:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0287.php">Jeff Squyres: "Re:  Small ltdl use update"</a>
<li><strong>Previous message:</strong> <a href="0285.php">Jeff Squyres: "Re:  ltdl.h problem"</a>
<li><strong>In reply to:</strong> <a href="0289.php">Jeff Squyres: "Re:  ltdl.h problem"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 1, 2005, at 6:38 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; I see the issue in the source code, and I'll fix it 
</span><br>
<span class="quotelev1">&gt; (opal/mca/base/base.h, which is widely included throughout the tree, 
</span><br>
<span class="quotelev1">&gt; has declarations of some internal functions).
</span><br>
<p>Fixed and committed.  I tested both a regular and a VPATH build, but I 
<br>
do not have a system that does not have ltdl.h installed (e.g., in 
<br>
/usr/include ltdl.h).  So if someone could test this to ensure that I 
<br>
didn't miss anything, I'd appreciate it.
<br>
<p>Also, FYI: mailman is being exceedingly slow today -- it's the 1st of 
<br>
the month, and it's sending thousands and thousands of list membership 
<br>
reminders, so list traffic might be a bit slow...
<br>
<p><pre>
-- 
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0287.php">Jeff Squyres: "Re:  Small ltdl use update"</a>
<li><strong>Previous message:</strong> <a href="0285.php">Jeff Squyres: "Re:  ltdl.h problem"</a>
<li><strong>In reply to:</strong> <a href="0289.php">Jeff Squyres: "Re:  ltdl.h problem"</a>
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
