<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r5324 -	branches/libpciaccess/doc";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Feb 16 09:22:09 2013" -->
<!-- isoreceived="20130216142209" -->
<!-- sent="Sat, 16 Feb 2013 14:22:04 +0000" -->
<!-- isosent="20130216142204" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r5324 -	branches/libpciaccess/doc" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC43F43B18_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="511F90CF.8050306_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [hwloc-svn] svn:hwloc r5324 -	branches/libpciaccess/doc<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-16 09:22:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3537.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r5324 -	branches/libpciaccess/doc"</a>
<li><strong>Previous message:</strong> <a href="3535.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r5324 - branches/libpciaccess/doc"</a>
<li><strong>In reply to:</strong> <a href="3535.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r5324 - branches/libpciaccess/doc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3537.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r5324 -	branches/libpciaccess/doc"</a>
<li><strong>Reply:</strong> <a href="3537.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r5324 -	branches/libpciaccess/doc"</a>
<li><strong>Reply:</strong> <a href="3554.php">Christopher Samuel: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r5324 -	branches/libpciaccess/doc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 16, 2013, at 8:59 AM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev2">&gt;&gt; +&lt;li&gt; libpciaccess.  The relevant development package is usually
</span><br>
<span class="quotelev2">&gt;&gt; +&lt;tt&gt;libpciaccess-devel&lt;/tt&gt;.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; Please keep libpciaccess-dev as well (debian/ubuntu devel packages are
</span><br>
<span class="quotelev1">&gt; &quot;-dev&quot;).
</span><br>
<p>Oops -- typo; will fix.
<br>
<p><span class="quotelev2">&gt;&gt;   This package is preferred by hwloc
</span><br>
<span class="quotelev2">&gt;&gt; +because it uses the BSD license, and is therefore license-compatible
</span><br>
<span class="quotelev2">&gt;&gt; +with hwloc.  Unfortunately, libpciaccess is not pre-installed on most
</span><br>
<span class="quotelev2">&gt;&gt; +systems, and must be obtained from
</span><br>
<span class="quotelev2">&gt;&gt; +<a href="http://xorg.freedesktop.org/archive/individual/lib/.</li">http://xorg.freedesktop.org/archive/individual/lib/.</li</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; It's not preinstalled, but it's available as a package in all distribs
</span><br>
<span class="quotelev1">&gt; that contain X.org (even non-Linux distrib).
</span><br>
<p>No, it's not.  RHEL6, for example, does have libpciaccess, but does not have a libpciaccess-dev (or devel).  Ergo, you have to get externally.
<br>
<p><span class="quotelev1">&gt; If we add the upstream URL for all packages that are not available by
</span><br>
<span class="quotelev1">&gt; default, we need one for libxml-devel and numactl-devel too since devel
</span><br>
<span class="quotelev1">&gt; headers are rarely installed by default.
</span><br>
<span class="quotelev1">&gt; In brief, just remove that URL :)
</span><br>
<p>Since this is a GPL taint issue, and since PCI support is pretty important, I think it's worth listing that URL -- especially since the first hit for googling libpciaccess reveals developer tarballs (<a href="http://cgit.freedesktop.org/xorg/lib/libpciaccess/">http://cgit.freedesktop.org/xorg/lib/libpciaccess/</a>), not official release tarballs (e.g., <a href="http://lists.x.org/archives/xorg-announce/2012-March/001845.html">http://lists.x.org/archives/xorg-announce/2012-March/001845.html</a>)
<br>
<p>So having this URL *somewhere* would be a good idea, IMHO.
<br>
<p><span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +&lt;li&gt;pciutils (libpci). The relevant development package is usually
</span><br>
<span class="quotelev2">&gt;&gt; +&lt;tt&gt;pciutils-devel&lt;/tt&gt; or &lt;tt&gt;libpci-dev&lt;/tt&gt;.  Unfortunately, while
</span><br>
<span class="quotelev2">&gt;&gt; +the libpci library from the pciutils package is pre-installed (or
</span><br>
<span class="quotelev2">&gt;&gt; +readily available) on many platforms, it is licensed under the GPL.
</span><br>
<span class="quotelev2">&gt;&gt; +Hence, if hwloc is configured to build/link against libpci, the hwloc
</span><br>
<span class="quotelev2">&gt;&gt; +library and binaries will be tainted with GPL (&lt;strong&gt;this has
</span><br>
<span class="quotelev2">&gt;&gt; +serious implications for 3rd parties developing tools that link
</span><br>
<span class="quotelev2">&gt;&gt; +against libhwloc!&lt;/strong&gt;)&lt;/li&gt;
</span><br>
<span class="quotelev2">&gt;&gt; +&lt;/ol&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  &lt;/li&gt;
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; This text is way too long. That section about dependencies was meant to
</span><br>
<span class="quotelev1">&gt; be easy to read before a first manual build of hwloc, that's why it's
</span><br>
<span class="quotelev1">&gt; a small list of short items. You're adding half a page about libpci in the
</span><br>
<span class="quotelev1">&gt; middle, making it hard to read. That long discussion can move somewhere
</span><br>
<span class="quotelev1">&gt; else, I'd say a FAQ entry at the end of doxy.
</span><br>
<p>I can see moving it out of this short list, but something like it should stay within the installation section.  If you move it to the FAQ section, no one will see/read it, and one of two things will happen:
<br>
<p>1. Build without PCI support, because many people just blindly &quot;./configure ; make install&quot; (i.e., not see the configure warning about lack of PCI support).
<br>
<p>2. Build with libpci support without understanding the GPL taint issue.  I.e., people will see &quot;Built without PCI support ... --enable-libpci&quot; in a very Far Side way (<a href="http://kansas-railroad-job-insurance.com/2011/08/12/far-side-cartoon-what-we-say-to-dogs/">http://kansas-railroad-job-insurance.com/2011/08/12/far-side-cartoon-what-we-say-to-dogs/</a>), and just gloss over the GPL taint issue.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3537.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r5324 -	branches/libpciaccess/doc"</a>
<li><strong>Previous message:</strong> <a href="3535.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r5324 - branches/libpciaccess/doc"</a>
<li><strong>In reply to:</strong> <a href="3535.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r5324 - branches/libpciaccess/doc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3537.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r5324 -	branches/libpciaccess/doc"</a>
<li><strong>Reply:</strong> <a href="3537.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r5324 -	branches/libpciaccess/doc"</a>
<li><strong>Reply:</strong> <a href="3554.php">Christopher Samuel: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r5324 -	branches/libpciaccess/doc"</a>
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
