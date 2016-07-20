<?
$subject_val = "Re: [hwloc-users] Finding hwloc'c HWLOC_OBJ_MISC objects";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 14 02:21:39 2015" -->
<!-- isoreceived="20150714062139" -->
<!-- sent="Tue, 14 Jul 2015 08:21:36 +0200" -->
<!-- isosent="20150714062136" -->
<!-- name="Brice Goglin" -->
<!-- email="brice.goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Finding hwloc'c HWLOC_OBJ_MISC objects" -->
<!-- id="B49FE0EA-7D10-4F43-BF43-FD820F504371_at_inria.fr" -->
<!-- charset="utf-8" -->
<!-- inreplyto="5727C5F218FC8F4E80D68EE0DEB0822402CC082C_at_ORSMSX106.amr.corp.intel.com" -->
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
<strong>Subject:</strong> Re: [hwloc-users] Finding hwloc'c HWLOC_OBJ_MISC objects<br>
<strong>From:</strong> Brice Goglin (<em>brice.goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-14 02:21:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1193.php">Bill Broadley: "Re: [hwloc-users] [WARNING: A/V UNSCANNABLE] hwloc 1.11.0 seems to have problem with 3.13 kernel on AMD bulldozer"</a>
<li><strong>Previous message:</strong> <a href="1191.php">Riesen, Lee Ann: "[hwloc-users] Finding hwloc'c HWLOC_OBJ_MISC objects"</a>
<li><strong>In reply to:</strong> <a href="1191.php">Riesen, Lee Ann: "[hwloc-users] Finding hwloc'c HWLOC_OBJ_MISC objects"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello
<br>
<p>In 1.11, they are attached to root. In theory they should be attached to Numa nodes, so you iterate under those. However their locality information isn't easy to find/trust (are we sure &quot;DIMM A3&quot; is in first numa node?) so we just attach to root for now. It's not clear we'll fix that anytime soon.
<br>
<p>In 2.0, get_obj_by_type() and friends will work on Misc just like any other type.
<br>
<p>Brice
<br>
<p>Le 14 juillet 2015 00:23:59 UTC+02:00, &quot;Riesen, Lee Ann&quot; &lt;lee.ann.riesen_at_[hidden]&gt; a &#195;&#169;crit :
<br>
<span class="quotelev1">&gt;I'm using hwloc (1.11) to find memory modules.  They are objects of
</span><br>
<span class="quotelev1">&gt;type HWLOC_OBJ_MISC, but they are not found with
</span><br>
<span class="quotelev1">&gt;hwloc_get_nbobjs_by_type() or hwloc_get_obj_type().  So I find them by
</span><br>
<span class="quotelev1">&gt;reading through the children array of root.  Can I trust that that's
</span><br>
<span class="quotelev1">&gt;where they'll be on all platforms?  Or is there a plan to make them
</span><br>
<span class="quotelev1">&gt;available through the &quot;hwloc_..._type()&quot; functions?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Thank you...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Lee Ann Riesen
</span><br>
<span class="quotelev1">&gt;Technical Computing Group, Intel Corporation, Hillsboro, OR
</span><br>
<span class="quotelev1">&gt;PHONE: +1 503 613 1952 FAX: +1 503 613 6143
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;hwloc-users mailing list
</span><br>
<span class="quotelev1">&gt;hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev1">&gt;Link to this post:
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/community/lists/hwloc-users/2015/07/1191.php">http://www.open-mpi.org/community/lists/hwloc-users/2015/07/1191.php</a>
</span><br>
<p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-1192/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1193.php">Bill Broadley: "Re: [hwloc-users] [WARNING: A/V UNSCANNABLE] hwloc 1.11.0 seems to have problem with 3.13 kernel on AMD bulldozer"</a>
<li><strong>Previous message:</strong> <a href="1191.php">Riesen, Lee Ann: "[hwloc-users] Finding hwloc'c HWLOC_OBJ_MISC objects"</a>
<li><strong>In reply to:</strong> <a href="1191.php">Riesen, Lee Ann: "[hwloc-users] Finding hwloc'c HWLOC_OBJ_MISC objects"</a>
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
