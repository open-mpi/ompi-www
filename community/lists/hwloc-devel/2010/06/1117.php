<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2270";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 30 03:48:47 2010" -->
<!-- isoreceived="20100630074847" -->
<!-- sent="Wed, 30 Jun 2010 09:47:34 +0200" -->
<!-- isosent="20100630074734" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2270" -->
<!-- id="4C2AF696.5010909_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTilK0DT698SSub7WT1bXhLR08cA8vhklO92YJQk3_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2270<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-30 03:47:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1118.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2270"</a>
<li><strong>Previous message:</strong> <a href="1116.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2270"</a>
<li><strong>In reply to:</strong> <a href="1115.php">Brad Benton: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2270"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1118.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2270"</a>
<li><strong>Reply:</strong> <a href="1118.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2270"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I reverted a commit that was slightly improving Power7 support with old
<br>
kernels but it was also preventing sockets with unknown id from
<br>
appearing with recent kernels. The P7 topology is properly detected for
<br>
real now. With old kernels, the topology will be slightly more broken,
<br>
but it will never be complete there anyway.
<br>
<p>Brice
<br>
<p><p><p>Le 30/06/2010 00:13, Brad Benton a &#233;crit :
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Jun 29, 2010 at 3:46 PM, Jeff Squyres &lt;jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;mailto:jsquyres_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     On Jun 29, 2010, at 4:38 PM, Samuel Thibault wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; Well, &quot;almost&quot; all: there's no socket information. Could you perhaps
</span><br>
<span class="quotelev2">&gt;     &gt; post the output of gather-topology.sh, in case the information is
</span><br>
<span class="quotelev2">&gt;     &gt; available in /proc or /sys and we have missed it?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     You're right -- in my haste, I missed that.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Brad -- can you send us the gather-topology.sh output?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sure...the tarball and output files are attached. 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --brad
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     --
</span><br>
<span class="quotelev1">&gt;     Jeff Squyres
</span><br>
<span class="quotelev1">&gt;     jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt;     hwloc-devel_at_[hidden] &lt;mailto:hwloc-devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
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
<span class="quotelev1">&gt;   
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-1117/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1118.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2270"</a>
<li><strong>Previous message:</strong> <a href="1116.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2270"</a>
<li><strong>In reply to:</strong> <a href="1115.php">Brad Benton: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2270"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1118.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2270"</a>
<li><strong>Reply:</strong> <a href="1118.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2270"</a>
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
