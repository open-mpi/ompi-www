<?
$subject_val = "Re: [hwloc-devel] Missing header";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep  8 15:01:00 2014" -->
<!-- isoreceived="20140908190100" -->
<!-- sent="Mon, 08 Sep 2014 21:00:58 +0200" -->
<!-- isosent="20140908190058" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Missing header" -->
<!-- id="540DFCEA.2010202_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="72B5FA6A-614A-4EA6-B38E-5E22A065D879_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Missing header<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-08 15:00:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4205.php">Jeff Squyres (jsquyres): "[hwloc-devel] Fwd: [OMPI svn-full] svn:open-mpi r32675 - in	trunk/opal/mca/hwloc/hwloc191/hwloc: include/hwloc src"</a>
<li><strong>Previous message:</strong> <a href="4203.php">Ralph Castain: "[hwloc-devel] Missing header"</a>
<li><strong>In reply to:</strong> <a href="4203.php">Ralph Castain: "[hwloc-devel] Missing header"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Arg, this strncasecmp mess was really a pandora box. I hope this fix is
<br>
the last one.
<br>
Thanks
<br>
Brice
<br>
<p><p><p>Le 08/09/2014 20:31, Ralph Castain a &#233;crit :
<br>
<span class="quotelev1">&gt; Hey guys
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; With the Intel compilers, you get an error in 1.9.1 relating to your
</span><br>
<span class="quotelev1">&gt; private/misc.h header:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In file included from bitmap.c(12):
</span><br>
<span class="quotelev1">&gt; /home/common/openmpi/svn-trunk/opal/mca/hwloc/hwloc191/hwloc/include/private/misc.h(364):
</span><br>
<span class="quotelev1">&gt; warning #266: function &quot;tolower&quot; declared implicitly
</span><br>
<span class="quotelev1">&gt;       char c1 = tolower(*s1), c2 = tolower(*s2);
</span><br>
<span class="quotelev1">&gt;                 ^
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It is missing
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;ctype.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2014/09/4203.php">http://www.open-mpi.org/community/lists/hwloc-devel/2014/09/4203.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-4204/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4205.php">Jeff Squyres (jsquyres): "[hwloc-devel] Fwd: [OMPI svn-full] svn:open-mpi r32675 - in	trunk/opal/mca/hwloc/hwloc191/hwloc: include/hwloc src"</a>
<li><strong>Previous message:</strong> <a href="4203.php">Ralph Castain: "[hwloc-devel] Missing header"</a>
<li><strong>In reply to:</strong> <a href="4203.php">Ralph Castain: "[hwloc-devel] Missing header"</a>
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
