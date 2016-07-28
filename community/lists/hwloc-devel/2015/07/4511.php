<?
$subject_val = "Re: [hwloc-devel] whelk warning";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jul 26 04:47:04 2015" -->
<!-- isoreceived="20150726084704" -->
<!-- sent="Sun, 26 Jul 2015 10:46:32 +0200" -->
<!-- isosent="20150726084632" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] whelk warning" -->
<!-- id="55B49E68.9060201_at_inria.fr" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="06E591F6-EED6-4303-830C-648BA9F5FA74_at_anl.gov" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] whelk warning<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-26 04:46:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4512.php">Brice Goglin: "Re: [hwloc-devel] &quot;make check&quot; of 1.11 broken on x86 RedHat 8"</a>
<li><strong>Previous message:</strong> <a href="4510.php">Paul Hargrove: "Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler"</a>
<li><strong>In reply to:</strong> <a href="4506.php">Balaji, Pavan: "[hwloc-devel] whelk warning"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Applied a slightly better one, thanks.
<br>
<a href="https://github.com/open-mpi/hwloc/commit/6376438e558f4a1541f4bb1cef18c0e86f222821">https://github.com/open-mpi/hwloc/commit/6376438e558f4a1541f4bb1cef18c0e86f222821</a>
<br>
<p>Brice
<br>
<p><p><p>Le 21/07/2015 19:07, Balaji, Pavan a &#233;crit :
<br>
<span class="quotelev1">&gt; Folks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We see a warning about assignment from a const string to a regular string (CFLAGS=&quot;-Wall -Werror&quot;).  Please see the fix we are maintaining for this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://git.mpich.org/mpich.git/commitdiff/5ce7102445fe0f6fbcf3fac0e49b092bf3069778">http://git.mpich.org/mpich.git/commitdiff/5ce7102445fe0f6fbcf3fac0e49b092bf3069778</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Could you consider including this or an alternative (e.g., direct typecast of the const string to &quot;char *&quot;) in the next hwloc release?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   -- Pavan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2015/07/4507.php">http://www.open-mpi.org/community/lists/hwloc-devel/2015/07/4507.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4512.php">Brice Goglin: "Re: [hwloc-devel] &quot;make check&quot; of 1.11 broken on x86 RedHat 8"</a>
<li><strong>Previous message:</strong> <a href="4510.php">Paul Hargrove: "Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler"</a>
<li><strong>In reply to:</strong> <a href="4506.php">Balaji, Pavan: "[hwloc-devel] whelk warning"</a>
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
