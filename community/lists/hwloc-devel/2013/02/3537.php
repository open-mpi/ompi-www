<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r5324 -	branches/libpciaccess/doc";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Feb 16 09:43:53 2013" -->
<!-- isoreceived="20130216144353" -->
<!-- sent="Sat, 16 Feb 2013 15:43:47 +0100" -->
<!-- isosent="20130216144347" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r5324 -	branches/libpciaccess/doc" -->
<!-- id="511F9B23.8030304_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC43F43B18_at_xmb-rcd-x01.cisco.com" -->
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
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-16 09:43:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3538.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r5324 -	branches/libpciaccess/doc"</a>
<li><strong>Previous message:</strong> <a href="3536.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r5324 -	branches/libpciaccess/doc"</a>
<li><strong>In reply to:</strong> <a href="3536.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r5324 -	branches/libpciaccess/doc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3538.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r5324 -	branches/libpciaccess/doc"</a>
<li><strong>Reply:</strong> <a href="3538.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r5324 -	branches/libpciaccess/doc"</a>
<li><strong>Reply:</strong> <a href="3540.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r5324	-	branches/libpciaccess/doc"</a>
<li><strong>Reply:</strong> <a href="3547.php">Brice Goglin: "[hwloc-devel] libpciaccess tests"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 16/02/2013 15:22, Jeff Squyres (jsquyres) a &#233;crit :
<br>
<span class="quotelev1">&gt; No, it's not. RHEL6, for example, does have libpciaccess, but does not
</span><br>
<span class="quotelev1">&gt; have a libpciaccess-dev (or devel). 
</span><br>
<p>Are you sure? CentOS 6.3 has it (Ubuntu, Debian and OpenSuse too).
<br>
I can't find the URL of the main RHEL6 RPM repo, but
<br>
<a href="ftp://ftp.redhat.com/pub/redhat/linux/enterprise/6Server/en/os/SRPMS/libpciaccess-0.12.1-1.el6.src.rpm">ftp://ftp.redhat.com/pub/redhat/linux/enterprise/6Server/en/os/SRPMS/libpciaccess-0.12.1-1.el6.src.rpm</a>
<br>
contains a RPM spec file that says they build libpciaccess-devel
<br>
<p>libpciaccess-devel is needed to build X.org. Building it and using it
<br>
for other builds and then dropping it instead of distributing it looks
<br>
like non-sense to me.
<br>
<p><span class="quotelev2">&gt;&gt; If we add the upstream URL for all packages that are not available by
</span><br>
<span class="quotelev2">&gt;&gt; default, we need one for libxml-devel and numactl-devel too since devel
</span><br>
<span class="quotelev2">&gt;&gt; headers are rarely installed by default.
</span><br>
<span class="quotelev2">&gt;&gt; In brief, just remove that URL :)
</span><br>
<span class="quotelev1">&gt; Since this is a GPL taint issue, and since PCI support is pretty important, I think it's worth listing that URL -- especially since the first hit for googling libpciaccess reveals developer tarballs (<a href="http://cgit.freedesktop.org/xorg/lib/libpciaccess/">http://cgit.freedesktop.org/xorg/lib/libpciaccess/</a>), not official release tarballs (e.g., <a href="http://lists.x.org/archives/xorg-announce/2012-March/001845.html">http://lists.x.org/archives/xorg-announce/2012-March/001845.html</a>)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So having this URL *somewhere* would be a good idea, IMHO.
</span><br>
<p>It all depends on RHEL6 shipping the -devel or not. If -devel is widely
<br>
available as a package, the situation is exactly like libxml2-devel or
<br>
numactl-devel
<br>
<p><span class="quotelev3">&gt;&gt;&gt; +
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +&lt;li&gt;pciutils (libpci). The relevant development package is usually
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +&lt;tt&gt;pciutils-devel&lt;/tt&gt; or &lt;tt&gt;libpci-dev&lt;/tt&gt;.  Unfortunately, while
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +the libpci library from the pciutils package is pre-installed (or
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +readily available) on many platforms, it is licensed under the GPL.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +Hence, if hwloc is configured to build/link against libpci, the hwloc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +library and binaries will be tainted with GPL (&lt;strong&gt;this has
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +serious implications for 3rd parties developing tools that link
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +against libhwloc!&lt;/strong&gt;)&lt;/li&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +&lt;/ol&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  &lt;/li&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This text is way too long. That section about dependencies was meant to
</span><br>
<span class="quotelev2">&gt;&gt; be easy to read before a first manual build of hwloc, that's why it's
</span><br>
<span class="quotelev2">&gt;&gt; a small list of short items. You're adding half a page about libpci in the
</span><br>
<span class="quotelev2">&gt;&gt; middle, making it hard to read. That long discussion can move somewhere
</span><br>
<span class="quotelev2">&gt;&gt; else, I'd say a FAQ entry at the end of doxy.
</span><br>
<span class="quotelev1">&gt; I can see moving it out of this short list, but something like it should stay within the installation section.
</span><br>
<p>Move it to the end of that section then, right after the small list of
<br>
dependencies?
<br>
<p>We just have to make sure that &quot;GPL&quot; appears nearby each occurence of
<br>
--enable-libpci. But that won't ever prevent bad users from enabling it
<br>
without reading the doc. If they don't read configure --help or the doc
<br>
before adding --enable-libpci, they won't read you 20 lines about the
<br>
GPL issue :/
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3538.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r5324 -	branches/libpciaccess/doc"</a>
<li><strong>Previous message:</strong> <a href="3536.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r5324 -	branches/libpciaccess/doc"</a>
<li><strong>In reply to:</strong> <a href="3536.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r5324 -	branches/libpciaccess/doc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3538.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r5324 -	branches/libpciaccess/doc"</a>
<li><strong>Reply:</strong> <a href="3538.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r5324 -	branches/libpciaccess/doc"</a>
<li><strong>Reply:</strong> <a href="3540.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r5324	-	branches/libpciaccess/doc"</a>
<li><strong>Reply:</strong> <a href="3547.php">Brice Goglin: "[hwloc-devel] libpciaccess tests"</a>
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
