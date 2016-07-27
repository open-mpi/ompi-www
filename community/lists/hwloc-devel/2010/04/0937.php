<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2018";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 30 07:57:11 2010" -->
<!-- isoreceived="20100430115711" -->
<!-- sent="Fri, 30 Apr 2010 07:57:06 -0400" -->
<!-- isosent="20100430115706" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2018" -->
<!-- id="441A7875-FC42-4092-B6CC-B02ACDEB540E_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4BD9CAED.60502_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2018<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-30 07:57:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0938.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2018"</a>
<li><strong>Previous message:</strong> <a href="0936.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1a1r2020)"</a>
<li><strong>In reply to:</strong> <a href="0935.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2018"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0938.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2018"</a>
<li><strong>Reply:</strong> <a href="0938.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2018"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Check out r2023 -- how's that?
<br>
<p>If you like, please move to v1.0 branch...
<br>
<p><p>On Apr 29, 2010, at 2:07 PM, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; To be backported in 1.0 branch after comments/proof-reading.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 29/04/2010 20:06, bgoglin_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Author: bgoglin
</span><br>
<span class="quotelev2">&gt; &gt; Date: 2010-04-29 14:06:21 EDT (Thu, 29 Apr 2010)
</span><br>
<span class="quotelev2">&gt; &gt; New Revision: 2018
</span><br>
<span class="quotelev2">&gt; &gt; URL: <a href="https://svn.open-mpi.org/trac/hwloc/changeset/2018">https://svn.open-mpi.org/trac/hwloc/changeset/2018</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Log:
</span><br>
<span class="quotelev2">&gt; &gt; Try to document (in the bug/question section) that upgrading the kernel/BIOS may help
</span><br>
<span class="quotelev2">&gt; &gt; Text files modified:
</span><br>
<span class="quotelev2">&gt; &gt;    trunk/doc/hwloc.doxy |    11 +++++++++++                            
</span><br>
<span class="quotelev2">&gt; &gt;    1 files changed, 11 insertions(+), 0 deletions(-)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Modified: trunk/doc/hwloc.doxy
</span><br>
<span class="quotelev2">&gt; &gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- trunk/doc/hwloc.doxy      (original)
</span><br>
<span class="quotelev2">&gt; &gt; +++ trunk/doc/hwloc.doxy      2010-04-29 14:06:21 EDT (Thu, 29 Apr 2010)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -317,6 +317,17 @@
</span><br>
<span class="quotelev2">&gt; &gt;  Bug reports should be reported in the tracker
</span><br>
<span class="quotelev2">&gt; &gt;  (<a href="https://svn.open-mpi.org/trac/hwloc/">https://svn.open-mpi.org/trac/hwloc/</a>).
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; +If you ever notice that hwloc seems to discover a wrong
</span><br>
<span class="quotelev2">&gt; &gt; +or strange topology for your machine, you should first
</span><br>
<span class="quotelev2">&gt; &gt; +make sure that you are running an uptodate operating
</span><br>
<span class="quotelev2">&gt; &gt; +system.
</span><br>
<span class="quotelev2">&gt; &gt; +Indeed, most of hwloc topology discovery relies on hardware
</span><br>
<span class="quotelev2">&gt; &gt; +information retrieved through the operation system, for
</span><br>
<span class="quotelev2">&gt; &gt; +instance in the /sys virtual filesystem of the Linux kernel.
</span><br>
<span class="quotelev2">&gt; &gt; +If upgrading your OS or Linux kernel does not solve your
</span><br>
<span class="quotelev2">&gt; &gt; +problem, upgrading the BIOS may also help in some cases.
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt;  \htmlonly
</span><br>
<span class="quotelev2">&gt; &gt;  &lt;/div&gt;&lt;div class=&quot;section&quot; id=&quot;credits&quot;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;  \endhtmlonly
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; hwloc-svn mailing list
</span><br>
<span class="quotelev2">&gt; &gt; hwloc-svn_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-svn">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-svn</a>
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
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
<li><strong>Next message:</strong> <a href="0938.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2018"</a>
<li><strong>Previous message:</strong> <a href="0936.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1a1r2020)"</a>
<li><strong>In reply to:</strong> <a href="0935.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2018"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0938.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2018"</a>
<li><strong>Reply:</strong> <a href="0938.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2018"</a>
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
