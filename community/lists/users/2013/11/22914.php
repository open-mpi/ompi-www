<?
$subject_val = "Re: [OMPI users] No spaces between concatenated string literals causes warning on GCC 4.9 prerelease in C++11 mode";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  5 14:25:56 2013" -->
<!-- isoreceived="20131105192556" -->
<!-- sent="Tue, 5 Nov 2013 19:25:54 +0000" -->
<!-- isosent="20131105192554" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] No spaces between concatenated string literals causes warning on GCC 4.9 prerelease in C++11 mode" -->
<!-- id="613B48B8-73D2-4766-B2D2-2BA83CEE2716_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="alpine.LRH.2.03.1311051407290.65237_at_cs.indiana.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] No spaces between concatenated string literals causes warning on GCC 4.9 prerelease in C++11 mode<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-05 14:25:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22915.php">Jeremiah Willcock: "Re: [OMPI users] No spaces between concatenated string literals causes warning on GCC 4.9 prerelease in C++11 mode"</a>
<li><strong>Previous message:</strong> <a href="22913.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Conflict between OpenMPI 1.7.3 and libevent"</a>
<li><strong>In reply to:</strong> <a href="22912.php">Jeremiah Willcock: "[OMPI users] No spaces between concatenated string literals causes warning on GCC 4.9 prerelease in C++11 mode"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22915.php">Jeremiah Willcock: "Re: [OMPI users] No spaces between concatenated string literals causes warning on GCC 4.9 prerelease in C++11 mode"</a>
<li><strong>Reply:</strong> <a href="22915.php">Jeremiah Willcock: "Re: [OMPI users] No spaces between concatenated string literals causes warning on GCC 4.9 prerelease in C++11 mode"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for reporting the issue.  Can you try this patch, and see if it fixes the issue on your trunk checkout?
<br>
<p><p><p><p>On Nov 5, 2013, at 11:12 AM, Jeremiah Willcock &lt;jewillco_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; In version 1.6.1 (and the same issue appears to be in SVN trunk), there are some warnings when using &lt;mpi.h&gt; from code compiled in C++11 mode with more recent snapshots of GCC 4.9:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; .../include/mpi_portable_platform.h:102:38: warning: invalid suffix on literal; C++11 requires a space between literal and string macro [-Wliteral-suffix]
</span><br>
<span class="quotelev1">&gt;          _STRINGIFY(__INTEL_COMPILER)&quot;.&quot;_STRINGIFY(_PLATFORM_INTEL_COMPILER_BUILD_DATE)
</span><br>
<span class="quotelev1">&gt;                                      ^
</span><br>
<span class="quotelev1">&gt; .../include/mpi_portable_platform.h:135:33: warning: invalid suffix on literal; C++11 requires a space between literal and string macro [-Wliteral-suffix]
</span><br>
<span class="quotelev1">&gt;             _STRINGIFY(__PGIC__)&quot;.&quot;_STRINGIFY(__PGIC_MINOR__)&quot;-&quot;_STRINGIFY(__PGIC_PATCHLEVEL__)
</span><br>
<span class="quotelev1">&gt;                                 ^
</span><br>
<span class="quotelev1">&gt; .../include/mpi_portable_platform.h:135:62: warning: invalid suffix on literal; C++11 requires a space between literal and string macro [-Wliteral-suffix]
</span><br>
<span class="quotelev1">&gt;             _STRINGIFY(__PGIC__)&quot;.&quot;_STRINGIFY(__PGIC_MINOR__)&quot;-&quot;_STRINGIFY(__PGIC_PATCHLEVEL__)
</span><br>
<span class="quotelev1">&gt;                                                              ^
</span><br>
<span class="quotelev1">&gt; .../include/mpi_portable_platform.h:374:34: warning: invalid suffix on literal; C++11 requires a space between literal and string macro [-Wliteral-suffix]
</span><br>
<span class="quotelev1">&gt;              _STRINGIFY(__GNUC__)&quot;.&quot;_STRINGIFY(__GNUC_MINOR__)&quot;.&quot;_STRINGIFY(__GNUC_PATCHLEVEL__)
</span><br>
<span class="quotelev1">&gt;                                  ^
</span><br>
<span class="quotelev1">&gt; .../include/mpi_portable_platform.h:374:63: warning: invalid suffix on literal; C++11 requires a space between literal and string macro [-Wliteral-suffix]
</span><br>
<span class="quotelev1">&gt;              _STRINGIFY(__GNUC__)&quot;.&quot;_STRINGIFY(__GNUC_MINOR__)&quot;.&quot;_STRINGIFY(__GNUC_PATCHLEVEL__)
</span><br>
<span class="quotelev1">&gt;                                                               ^
</span><br>
<span class="quotelev1">&gt; .../include/mpi_portable_platform.h:377:34: warning: invalid suffix on literal; C++11 requires a space between literal and string macro [-Wliteral-suffix]
</span><br>
<span class="quotelev1">&gt;              _STRINGIFY(__GNUC__)&quot;.&quot;_STRINGIFY(__GNUC_MINOR__)&quot;.?&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The fix is to insert spaces between the strings like the warnings say; doing that is compatible with both older and new language standards.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Jeremiah Willcock
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
--
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22914/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22914/cxx11.patch">cxx11.patch</a>
</ul>
<!-- attachment="cxx11.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22915.php">Jeremiah Willcock: "Re: [OMPI users] No spaces between concatenated string literals causes warning on GCC 4.9 prerelease in C++11 mode"</a>
<li><strong>Previous message:</strong> <a href="22913.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Conflict between OpenMPI 1.7.3 and libevent"</a>
<li><strong>In reply to:</strong> <a href="22912.php">Jeremiah Willcock: "[OMPI users] No spaces between concatenated string literals causes warning on GCC 4.9 prerelease in C++11 mode"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22915.php">Jeremiah Willcock: "Re: [OMPI users] No spaces between concatenated string literals causes warning on GCC 4.9 prerelease in C++11 mode"</a>
<li><strong>Reply:</strong> <a href="22915.php">Jeremiah Willcock: "Re: [OMPI users] No spaces between concatenated string literals causes warning on GCC 4.9 prerelease in C++11 mode"</a>
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
