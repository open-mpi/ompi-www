<?
$subject_val = "[OMPI users] No spaces between concatenated string literals causes warning on GCC 4.9 prerelease in C++11 mode";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  5 14:12:02 2013" -->
<!-- isoreceived="20131105191202" -->
<!-- sent="Tue, 5 Nov 2013 14:12:02 -0500 (EST)" -->
<!-- isosent="20131105191202" -->
<!-- name="Jeremiah Willcock" -->
<!-- email="jewillco_at_[hidden]" -->
<!-- subject="[OMPI users] No spaces between concatenated string literals causes warning on GCC 4.9 prerelease in C++11 mode" -->
<!-- id="alpine.LRH.2.03.1311051407290.65237_at_cs.indiana.edu" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI users] No spaces between concatenated string literals causes warning on GCC 4.9 prerelease in C++11 mode<br>
<strong>From:</strong> Jeremiah Willcock (<em>jewillco_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-05 14:12:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22913.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Conflict between OpenMPI 1.7.3 and libevent"</a>
<li><strong>Previous message:</strong> <a href="22911.php">Dominique Orban: "Re: [OMPI users] Conflict between OpenMPI 1.7.3 and libevent"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22914.php">Jeff Squyres (jsquyres): "Re: [OMPI users] No spaces between concatenated string literals causes warning on GCC 4.9 prerelease in C++11 mode"</a>
<li><strong>Reply:</strong> <a href="22914.php">Jeff Squyres (jsquyres): "Re: [OMPI users] No spaces between concatenated string literals causes warning on GCC 4.9 prerelease in C++11 mode"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In version 1.6.1 (and the same issue appears to be in SVN trunk), there 
<br>
are some warnings when using &lt;mpi.h&gt; from code compiled in C++11 mode with 
<br>
more recent snapshots of GCC 4.9:
<br>
<p>.../include/mpi_portable_platform.h:102:38: warning: invalid suffix on literal; C++11 requires a space between literal and string macro [-Wliteral-suffix]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_STRINGIFY(__INTEL_COMPILER)&quot;.&quot;_STRINGIFY(_PLATFORM_INTEL_COMPILER_BUILD_DATE)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
.../include/mpi_portable_platform.h:135:33: warning: invalid suffix on literal; C++11 requires a space between literal and string macro [-Wliteral-suffix]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_STRINGIFY(__PGIC__)&quot;.&quot;_STRINGIFY(__PGIC_MINOR__)&quot;-&quot;_STRINGIFY(__PGIC_PATCHLEVEL__)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
.../include/mpi_portable_platform.h:135:62: warning: invalid suffix on literal; C++11 requires a space between literal and string macro [-Wliteral-suffix]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_STRINGIFY(__PGIC__)&quot;.&quot;_STRINGIFY(__PGIC_MINOR__)&quot;-&quot;_STRINGIFY(__PGIC_PATCHLEVEL__)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
.../include/mpi_portable_platform.h:374:34: warning: invalid suffix on literal; C++11 requires a space between literal and string macro [-Wliteral-suffix]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_STRINGIFY(__GNUC__)&quot;.&quot;_STRINGIFY(__GNUC_MINOR__)&quot;.&quot;_STRINGIFY(__GNUC_PATCHLEVEL__)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
.../include/mpi_portable_platform.h:374:63: warning: invalid suffix on literal; C++11 requires a space between literal and string macro [-Wliteral-suffix]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_STRINGIFY(__GNUC__)&quot;.&quot;_STRINGIFY(__GNUC_MINOR__)&quot;.&quot;_STRINGIFY(__GNUC_PATCHLEVEL__)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
.../include/mpi_portable_platform.h:377:34: warning: invalid suffix on literal; C++11 requires a space between literal and string macro [-Wliteral-suffix]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_STRINGIFY(__GNUC__)&quot;.&quot;_STRINGIFY(__GNUC_MINOR__)&quot;.?&quot;
<br>
<p>The fix is to insert spaces between the strings like the warnings say; 
<br>
doing that is compatible with both older and new language standards.
<br>
<p>-- Jeremiah Willcock
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22913.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Conflict between OpenMPI 1.7.3 and libevent"</a>
<li><strong>Previous message:</strong> <a href="22911.php">Dominique Orban: "Re: [OMPI users] Conflict between OpenMPI 1.7.3 and libevent"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22914.php">Jeff Squyres (jsquyres): "Re: [OMPI users] No spaces between concatenated string literals causes warning on GCC 4.9 prerelease in C++11 mode"</a>
<li><strong>Reply:</strong> <a href="22914.php">Jeff Squyres (jsquyres): "Re: [OMPI users] No spaces between concatenated string literals causes warning on GCC 4.9 prerelease in C++11 mode"</a>
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
