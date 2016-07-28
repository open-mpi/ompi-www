<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r5324	-	branches/libpciaccess/doc";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Feb 16 11:57:36 2013" -->
<!-- isoreceived="20130216165736" -->
<!-- sent="Sat, 16 Feb 2013 16:57:31 +0000" -->
<!-- isosent="20130216165731" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r5324	-	branches/libpciaccess/doc" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC43F441AC_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="511F9B23.8030304_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [hwloc-svn] svn:hwloc r5324	-	branches/libpciaccess/doc<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-16 11:57:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3541.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] [hwloc-svn] svn:hwloc	r5324	-	branches/libpciaccess/doc"</a>
<li><strong>Previous message:</strong> <a href="3539.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r5324	-	branches/libpciaccess/doc"</a>
<li><strong>In reply to:</strong> <a href="3537.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r5324 -	branches/libpciaccess/doc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3541.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] [hwloc-svn] svn:hwloc	r5324	-	branches/libpciaccess/doc"</a>
<li><strong>Reply:</strong> <a href="3541.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] [hwloc-svn] svn:hwloc	r5324	-	branches/libpciaccess/doc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 16, 2013, at 9:43 AM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev2">&gt;&gt; No, it's not. RHEL6, for example, does have libpciaccess, but does not
</span><br>
<span class="quotelev2">&gt;&gt; have a libpciaccess-dev (or devel). 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Are you sure? CentOS 6.3 has it (Ubuntu, Debian and OpenSuse too).
</span><br>
<p>Per your second mail, I guess I was wrong about that.
<br>
<p><span class="quotelev1">&gt; It all depends on RHEL6 shipping the -devel or not. If -devel is widely
</span><br>
<span class="quotelev1">&gt; available as a package, the situation is exactly like libxml2-devel or
</span><br>
<span class="quotelev1">&gt; numactl-devel
</span><br>
<p>Hmm.  
<br>
<p>It looks like numactl and numactl-devel are on my main RHEL6 DVD.  But only libpciaccess -- not libpciaccess-devel -- is on my main RHEL6 DVD.  
<br>
<p>Here's checking all the RHEL6 DVD iso's that I have:
<br>
<p>-----
<br>
[8:52] savbu-usnic-a:~/downloads % cat check-rhel.csh
<br>
#!/bin/csh
<br>
<p>foreach iso (`ls rhel-server*.iso`)
<br>
&nbsp;&nbsp;mount -o ro,loop $iso /mnt
<br>
&nbsp;&nbsp;echo === $iso
<br>
&nbsp;&nbsp;find /mnt | grep pciaccess
<br>
&nbsp;&nbsp;umount /mnt
<br>
end
<br>
[8:52] savbu-usnic-a:~/downloads % sudo ./check-rhel.csh
<br>
=== rhel-server-6.0-source-dvd1.iso
<br>
=== rhel-server-6.0-source-dvd2.iso
<br>
/mnt/SRPMS/libpciaccess-0.10.9-2.el6.src.rpm
<br>
=== rhel-server-6.0-x86_64-boot.iso
<br>
=== rhel-server-6.0-x86_64-dvd.iso
<br>
/mnt/Packages/libpciaccess-0.10.9-2.el6.i686.rpm
<br>
/mnt/Packages/libpciaccess-0.10.9-2.el6.x86_64.rpm
<br>
=== rhel-server-6.1-x86_64-boot.iso
<br>
=== rhel-server-6.1-x86_64-dvd.iso
<br>
/mnt/Packages/libpciaccess-0.10.9-4.el6.i686.rpm
<br>
/mnt/Packages/libpciaccess-0.10.9-4.el6.x86_64.rpm
<br>
=== rhel-server-6.2-x86_64-boot.iso
<br>
=== rhel-server-6.2-x86_64-dvd.iso
<br>
/mnt/Packages/libpciaccess-0.12.1-1.el6.i686.rpm
<br>
/mnt/Packages/libpciaccess-0.12.1-1.el6.x86_64.rpm
<br>
=== rhel-server-6.3-x86_64-boot.iso
<br>
=== rhel-server-6.3-x86_64-dvd.iso
<br>
/mnt/Packages/libpciaccess-0.12.1-1.el6.i686.rpm
<br>
/mnt/Packages/libpciaccess-0.12.1-1.el6.x86_64.rpm
<br>
[8:52] savbu-usnic-a:~/downloads % 
<br>
-----
<br>
<p>Looking inside the spec file in the SRPM, I see that it builds a devel RPM, but I don't see that devel package anywhere on the RHEL6 DVDs.
<br>
<p>Are there RHEL6 DVD's other than the boot DVD and the main DVD?
<br>
<p><span class="quotelev4">&gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +&lt;li&gt;pciutils (libpci). The relevant development package is usually
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +&lt;tt&gt;pciutils-devel&lt;/tt&gt; or &lt;tt&gt;libpci-dev&lt;/tt&gt;.  Unfortunately, while
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +the libpci library from the pciutils package is pre-installed (or
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +readily available) on many platforms, it is licensed under the GPL.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +Hence, if hwloc is configured to build/link against libpci, the hwloc
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +library and binaries will be tainted with GPL (&lt;strong&gt;this has
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +serious implications for 3rd parties developing tools that link
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +against libhwloc!&lt;/strong&gt;)&lt;/li&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +&lt;/ol&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;/li&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This text is way too long. That section about dependencies was meant to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; be easy to read before a first manual build of hwloc, that's why it's
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a small list of short items. You're adding half a page about libpci in the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; middle, making it hard to read. That long discussion can move somewhere
</span><br>
<span class="quotelev3">&gt;&gt;&gt; else, I'd say a FAQ entry at the end of doxy.
</span><br>
<span class="quotelev2">&gt;&gt; I can see moving it out of this short list, but something like it should stay within the installation section.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Move it to the end of that section then, right after the small list of
</span><br>
<span class="quotelev1">&gt; dependencies?
</span><br>
<p>Sounds good.
<br>
<p><span class="quotelev1">&gt; We just have to make sure that &quot;GPL&quot; appears nearby each occurence of
</span><br>
<span class="quotelev1">&gt; --enable-libpci. But that won't ever prevent bad users from enabling it
</span><br>
<span class="quotelev1">&gt; without reading the doc. If they don't read configure --help or the doc
</span><br>
<span class="quotelev1">&gt; before adding --enable-libpci, they won't read you 20 lines about the
</span><br>
<span class="quotelev1">&gt; GPL issue :/
</span><br>
<p><p>But you might well notice it in boldfaced text in the PDF when figuring out how to install PCI support (because you didn't get it by default).  :-)
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
<li><strong>Next message:</strong> <a href="3541.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] [hwloc-svn] svn:hwloc	r5324	-	branches/libpciaccess/doc"</a>
<li><strong>Previous message:</strong> <a href="3539.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r5324	-	branches/libpciaccess/doc"</a>
<li><strong>In reply to:</strong> <a href="3537.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r5324 -	branches/libpciaccess/doc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3541.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] [hwloc-svn] svn:hwloc	r5324	-	branches/libpciaccess/doc"</a>
<li><strong>Reply:</strong> <a href="3541.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] [hwloc-svn] svn:hwloc	r5324	-	branches/libpciaccess/doc"</a>
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
