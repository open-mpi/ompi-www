<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r5324 - branches/libpciaccess/doc";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Feb 16 08:59:50 2013" -->
<!-- isoreceived="20130216135950" -->
<!-- sent="Sat, 16 Feb 2013 14:59:43 +0100" -->
<!-- isosent="20130216135943" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r5324 - branches/libpciaccess/doc" -->
<!-- id="511F90CF.8050306_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="[hwloc-devel] [hwloc-svn] svn:hwloc r5324 - branches/libpciaccess/doc" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [hwloc-svn] svn:hwloc r5324 - branches/libpciaccess/doc<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-16 08:59:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3536.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r5324 -	branches/libpciaccess/doc"</a>
<li><strong>Previous message:</strong> <a href="3534.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.7a1r5317)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3536.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r5324 -	branches/libpciaccess/doc"</a>
<li><strong>Reply:</strong> <a href="3536.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r5324 -	branches/libpciaccess/doc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 16/02/2013 14:45, svn-commit-mailer_at_[hidden] a &#233;crit :
<br>
<p><span class="quotelev1">&gt; Author: jsquyres (Jeff Squyres)
</span><br>
<span class="quotelev1">&gt; Date: 2013-02-16 08:45:31 EST (Sat, 16 Feb 2013)
</span><br>
<span class="quotelev1">&gt; New Revision: 5324
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/hwloc/changeset/5324">https://svn.open-mpi.org/trac/hwloc/changeset/5324</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Update doxy docs about libpciaccess.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;    branches/libpciaccess/doc/hwloc.doxy |    39 +++++++++++++++++++++++++++++++++------ 
</span><br>
<span class="quotelev1">&gt;    1 files changed, 33 insertions(+), 6 deletions(-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: branches/libpciaccess/doc/hwloc.doxy
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- branches/libpciaccess/doc/hwloc.doxy	Sat Feb 16 07:40:07 2013	(r5323)
</span><br>
<span class="quotelev1">&gt; +++ branches/libpciaccess/doc/hwloc.doxy	2013-02-16 08:45:31 EST (Sat, 16 Feb 2013)	(r5324)
</span><br>
<span class="quotelev1">&gt; @@ -149,13 +149,28 @@
</span><br>
<span class="quotelev1">&gt;  &lt;li&gt;libnuma for memory binding and migration support on Linux
</span><br>
<span class="quotelev1">&gt;      (&lt;tt&gt;numactl-devel&lt;/tt&gt; or &lt;tt&gt;libnuma-dev&lt;/tt&gt; package).
</span><br>
<span class="quotelev1">&gt;  &lt;/li&gt;
</span><br>
<span class="quotelev1">&gt; -&lt;li&gt;libpciaccess for I/O discovery.
</span><br>
<span class="quotelev1">&gt; -    The relevant development package is usually &lt;tt&gt;libpciaccess-devel&lt;/tt&gt;
</span><br>
<span class="quotelev1">&gt; -    or &lt;tt&gt;libpciaccess-dev&lt;/tt&gt;.
</span><br>
<span class="quotelev1">&gt; -    libpci (from pciutils, development package &lt;tt&gt;pciutils-devel&lt;/tt&gt; or
</span><br>
<span class="quotelev1">&gt; -    &lt;tt&gt;libpci-dev&lt;/tt&gt;) may be used instead if &lt;tt&gt;--enable-libpci&lt;/tt&gt;
</span><br>
<span class="quotelev1">&gt; -    is given at configure, but its GPL license may taint hwloc.
</span><br>
<span class="quotelev1">&gt; +&lt;li&gt;Hwloc can use one of two different libraries for I/O device
</span><br>
<span class="quotelev1">&gt; +discovery:
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +&lt;ol&gt;
</span><br>
<span class="quotelev1">&gt; +&lt;li&gt; libpciaccess.  The relevant development package is usually
</span><br>
<span class="quotelev1">&gt; +&lt;tt&gt;libpciaccess-devel&lt;/tt&gt;.
</span><br>
Please keep libpciaccess-dev as well (debian/ubuntu devel packages are
<br>
&quot;-dev&quot;).
<br>
<p><p><span class="quotelev1">&gt;   This package is preferred by hwloc
</span><br>
<span class="quotelev1">&gt; +because it uses the BSD license, and is therefore license-compatible
</span><br>
<span class="quotelev1">&gt; +with hwloc.  Unfortunately, libpciaccess is not pre-installed on most
</span><br>
<span class="quotelev1">&gt; +systems, and must be obtained from
</span><br>
<span class="quotelev1">&gt; +<a href="http://xorg.freedesktop.org/archive/individual/lib/.</li">http://xorg.freedesktop.org/archive/individual/lib/.</li</a>&gt;
</span><br>
It's not preinstalled, but it's available as a package in all distribs
<br>
that contain X.org (even non-Linux distrib).
<br>
If we add the upstream URL for all packages that are not available by
<br>
default, we need one for libxml-devel and numactl-devel too since devel
<br>
headers are rarely installed by default.
<br>
In brief, just remove that URL :)
<br>
<p><p><span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +&lt;li&gt;pciutils (libpci). The relevant development package is usually
</span><br>
<span class="quotelev1">&gt; +&lt;tt&gt;pciutils-devel&lt;/tt&gt; or &lt;tt&gt;libpci-dev&lt;/tt&gt;.  Unfortunately, while
</span><br>
<span class="quotelev1">&gt; +the libpci library from the pciutils package is pre-installed (or
</span><br>
<span class="quotelev1">&gt; +readily available) on many platforms, it is licensed under the GPL.
</span><br>
<span class="quotelev1">&gt; +Hence, if hwloc is configured to build/link against libpci, the hwloc
</span><br>
<span class="quotelev1">&gt; +library and binaries will be tainted with GPL (&lt;strong&gt;this has
</span><br>
<span class="quotelev1">&gt; +serious implications for 3rd parties developing tools that link
</span><br>
<span class="quotelev1">&gt; +against libhwloc!&lt;/strong&gt;)&lt;/li&gt;
</span><br>
<span class="quotelev1">&gt; +&lt;/ol&gt;
</span><br>
<span class="quotelev1">&gt;  &lt;/li&gt;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
This text is way too long. That section about dependencies was meant to
<br>
be easy to read before a first manual build of hwloc, that's why it's
<br>
a small list of short items. You're adding half a page about libpci in the
<br>
middle, making it hard to read. That long discussion can move somewhere
<br>
else, I'd say a FAQ entry at the end of doxy.
<br>
<p><p><span class="quotelev1">&gt;  &lt;li&gt;the AMD OpenCL implementation for OpenCL device discovery.
</span><br>
<span class="quotelev1">&gt;  &lt;/li&gt;
</span><br>
<span class="quotelev1">&gt;  &lt;li&gt;the NVIDIA CUDA Toolkit for CUDA device discovery.
</span><br>
<span class="quotelev1">&gt; @@ -174,7 +189,19 @@
</span><br>
<span class="quotelev1">&gt;  hwloc library, or as separate dynamically-loaded plugins
</span><br>
<span class="quotelev1">&gt;  (see the \ref plugins section).
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; +Note that if you install supplemental libraries (e.g., libpciaccess)
</span><br>
<span class="quotelev1">&gt; +in non-standard locations,
</span><br>
You really need to stop thinking that libpciaccess needs to be installed manually 
<br>
<p>Brice
<br>
<p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-3535/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3536.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r5324 -	branches/libpciaccess/doc"</a>
<li><strong>Previous message:</strong> <a href="3534.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.7a1r5317)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3536.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r5324 -	branches/libpciaccess/doc"</a>
<li><strong>Reply:</strong> <a href="3536.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r5324 -	branches/libpciaccess/doc"</a>
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
