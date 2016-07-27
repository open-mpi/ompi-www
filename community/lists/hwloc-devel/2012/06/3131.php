<?
$subject_val = "Re: [hwloc-devel] HWLOC_NBMAXCPUS";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 21 10:06:13 2012" -->
<!-- isoreceived="20120621140613" -->
<!-- sent="Thu, 21 Jun 2012 10:06:05 -0400" -->
<!-- isosent="20120621140605" -->
<!-- name="TERRY DONTJE" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] HWLOC_NBMAXCPUS" -->
<!-- id="4FE32A4D.6080907_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4FE325B9.9030909_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] HWLOC_NBMAXCPUS<br>
<strong>From:</strong> TERRY DONTJE (<em>terry.dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-21 10:06:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3132.php">Brice Goglin: "Re: [hwloc-devel] HWLOC_NBMAXCPUS"</a>
<li><strong>Previous message:</strong> <a href="3130.php">Samuel Thibault: "Re: [hwloc-devel] HWLOC_NBMAXCPUS"</a>
<li><strong>In reply to:</strong> <a href="3129.php">TERRY DONTJE: "[hwloc-devel] HWLOC_NBMAXCPUS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3132.php">Brice Goglin: "Re: [hwloc-devel] HWLOC_NBMAXCPUS"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I guess I was looking at the wrong version of code since I now see that 
<br>
topology-linux.c has fixed this issue.  I guess I will need to look to 
<br>
port this change over to solaris-topology.c
<br>
<p>--td
<br>
<p>On 6/21/2012 9:46 AM, TERRY DONTJE wrote:
<br>
<span class="quotelev1">&gt; I see a couple places where HWLOC_NBMAXCPUS is defined with a comment 
</span><br>
<span class="quotelev1">&gt; of &quot;FIXME: drop&quot;.  This static size just bit me on a machine that has 
</span><br>
<span class="quotelev1">&gt; 1440 CPUs.  I can bump up the define in my clone but I was wondering 
</span><br>
<span class="quotelev1">&gt; if this fixed size might change in the near future?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Terry D. Dontje | Principal Software Engineer
</span><br>
<span class="quotelev1">&gt; Developer Tools Engineering | +1.781.442.2631
</span><br>
<span class="quotelev1">&gt; Oracle *- Performance Technologies*
</span><br>
<span class="quotelev1">&gt; 95 Network Drive, Burlington, MA 01803
</span><br>
<span class="quotelev1">&gt; Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<p><pre>
-- 
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.781.442.2631
Oracle *- Performance Technologies*
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-3131/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3132.php">Brice Goglin: "Re: [hwloc-devel] HWLOC_NBMAXCPUS"</a>
<li><strong>Previous message:</strong> <a href="3130.php">Samuel Thibault: "Re: [hwloc-devel] HWLOC_NBMAXCPUS"</a>
<li><strong>In reply to:</strong> <a href="3129.php">TERRY DONTJE: "[hwloc-devel] HWLOC_NBMAXCPUS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3132.php">Brice Goglin: "Re: [hwloc-devel] HWLOC_NBMAXCPUS"</a>
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
