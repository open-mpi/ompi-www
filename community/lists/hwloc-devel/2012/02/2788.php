<?
$subject_val = "Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  2 05:54:29 2012" -->
<!-- isoreceived="20120202105429" -->
<!-- sent="Thu, 2 Feb 2012 11:54:24 +0100" -->
<!-- isosent="20120202105424" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7" -->
<!-- id="20120202105424.GN4314_at_type.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="709237761.637934.1328143425836.JavaMail.root_at_zmbs4.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-02 05:54:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2789.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-1.4 &quot;gmake check&quot; failure on Solaris-10/SPARC/gccfss [PATCH]"</a>
<li><strong>Previous message:</strong> <a href="2787.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2012/01/2733.php">Paul H. Hargrove: "[hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2799.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7"</a>
<li><strong>Reply:</strong> <a href="2799.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Paul H. Hargrove, le Thu 02 Feb 2012 01:43:45 +0100, a &#233;crit :
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 2/1/2012 4:14 PM, Christopher Samuel wrote:
</span><br>
<span class="quotelev2">&gt; &gt;On 02/02/12 10:38, Paul H. Hargrove wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;  I am not sure if one should fix this by:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;  a) Document the need for CFLAGS=-qhalt=e
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;  b) Force &quot;-qhalt=e&quot; at configure time when CC=xlc
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;  c) Find some other way to fix the configure probe
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;  &gt;  My vote is for &quot;(b)&quot;
</span><br>
<span class="quotelev2">&gt; &gt;Mine too, either that or:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;d) Exit saying the user has to set it, or use a different compiler.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think I'd like to change my vote to (d) IFF we can determine the flag is
</span><br>
<span class="quotelev1">&gt; needed but not set.
</span><br>
<span class="quotelev1">&gt; Something like (untested):
</span><br>
<p>I would actually say both: pass -qhalt=e to xlc, and also check in all
<br>
cases that the compiler does check for argument count. Perhaps also
<br>
add a configure option to force either setschedaffinity way, in case a
<br>
compiler does not have an option to detect argument count issue.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2789.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-1.4 &quot;gmake check&quot; failure on Solaris-10/SPARC/gccfss [PATCH]"</a>
<li><strong>Previous message:</strong> <a href="2787.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2012/01/2733.php">Paul H. Hargrove: "[hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2799.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7"</a>
<li><strong>Reply:</strong> <a href="2799.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7"</a>
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
