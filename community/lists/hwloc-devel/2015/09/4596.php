<?
$subject_val = "Re: [hwloc-devel] Fixes for the annoying Windows warnings";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep  4 11:26:07 2015" -->
<!-- isoreceived="20150904152607" -->
<!-- sent="Fri, 04 Sep 2015 17:26:05 +0200" -->
<!-- isosent="20150904152605" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Fixes for the annoying Windows warnings" -->
<!-- id="55E9B80D.1030706_at_inria.fr" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="6B86B7F2A4026246AA81BA1ABF9756906A7B42D5_at_fmsmsx107.amr.corp.intel.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Fixes for the annoying Windows warnings<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-04 11:26:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4597.php">MPI Team: "[hwloc-devel] Create success (hwloc git dev-757-ge3b5a94)"</a>
<li><strong>Previous message:</strong> <a href="4595.php">MPI Team: "[hwloc-devel] Create success (hwloc git 1.11.0-36-g7e6353a)"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2015/08/4558.php">Tannenbaum, Barry M: "[hwloc-devel] Fixes for the annoying Windows warnings"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks a lot for all your patches. I applied everything to master, fixed
<br>
a couple more warnings and updated the list of files to build. And
<br>
thanks to Eloi Gaudry we now have automated nightly builds with Visual
<br>
Studio. Hopefully it will avoid breakage in the future.
<br>
<p>I will backport most of it to v1.11 so that the upcoming v1.11.1
<br>
replaces v1.9 as the last supported release for MSVC...
<br>
<p>Brice
<br>
<p><p><p>Le 18/08/2015 17:09, Tannenbaum, Barry M a &#233;crit :
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I hope I exported them from my local Mercural repository properly. Let
</span><br>
<span class="quotelev1">&gt; me know if you need them in a different format.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There are still warnings from:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#183;        __dummy_nolocale creating an unreferenced local variable,
</span><br>
<span class="quotelev1">&gt; which I&#146;ll probably try to diddle with some more.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#183;        The DWORD_PTR to unsigned long issue in topology-windows.c
</span><br>
<span class="quotelev1">&gt; which we discussed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I&#146;ve also upgraded the projects to VS2013 since that&#146;s what&#146;s on my
</span><br>
<span class="quotelev1">&gt; system. I haven&#146;t included those files because I&#146;m not sure that you
</span><br>
<span class="quotelev1">&gt; want them.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Why was libhwloc.dll being put into a different directory than the
</span><br>
<span class="quotelev1">&gt; executables? If it&#146;s in the same directory as the executables, you can
</span><br>
<span class="quotelev1">&gt; just run the executables in the debugger.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -        Barry (who believes that clean builds are happy builds)
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2015/08/4558.php">http://www.open-mpi.org/community/lists/hwloc-devel/2015/08/4558.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-4596/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4597.php">MPI Team: "[hwloc-devel] Create success (hwloc git dev-757-ge3b5a94)"</a>
<li><strong>Previous message:</strong> <a href="4595.php">MPI Team: "[hwloc-devel] Create success (hwloc git 1.11.0-36-g7e6353a)"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2015/08/4558.php">Tannenbaum, Barry M: "[hwloc-devel] Fixes for the annoying Windows warnings"</a>
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
