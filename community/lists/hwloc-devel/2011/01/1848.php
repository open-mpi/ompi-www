<?
$subject_val = "Re: [hwloc-devel] Man pages and gather-topology";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 20 07:26:44 2011" -->
<!-- isoreceived="20110120122644" -->
<!-- sent="Thu, 20 Jan 2011 07:26:38 -0500" -->
<!-- isosent="20110120122638" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Man pages and gather-topology" -->
<!-- id="F0A784AE-1A80-4977-93DA-13A781F4715A_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4D382817.4060306_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Man pages and gather-topology<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-20 07:26:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1849.php">Jeff Squyres: "Re: [hwloc-devel] Man pages and gather-topology"</a>
<li><strong>Previous message:</strong> <a href="1847.php">Brice Goglin: "Re: [hwloc-devel] Man pages and gather-topology"</a>
<li><strong>In reply to:</strong> <a href="1847.php">Brice Goglin: "Re: [hwloc-devel] Man pages and gather-topology"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1850.php">Brice Goglin: "Re: [hwloc-devel] Man pages and gather-topology"</a>
<li><strong>Reply:</strong> <a href="1850.php">Brice Goglin: "Re: [hwloc-devel] Man pages and gather-topology"</a>
<li><strong>Reply:</strong> <a href="1855.php">Jeff Squyres: "Re: [hwloc-devel] Man pages and gather-topology"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I used my Mac, which I've used to make all the other hwloc tarballs.
<br>
<p>I know that doxygen had been updated since I built the 1.1 tarball, though -- it's possible that the others have been updated, too.  I'll check.
<br>
<p>Did you notice the font selection for the titles in <a href="http://www.open-mpi.org/projects/hwloc/doc/hwloc-v1.1.1rc1-a4.pdf">http://www.open-mpi.org/projects/hwloc/doc/hwloc-v1.1.1rc1-a4.pdf</a>?  I'm pretty sure that this is as result of the doxygen update.
<br>
<p>I don't know where the -e suffixes came from; I'll dig into that.  I had to separate out the massive sed-with-a-million-e's in doc/Makefile.am because I discovered that OS X's sed only accepts one -e per sed.
<br>
<p>On a side note, I'm having problem with a fresh hwloc 1.1 branch checkout on RHEL 5.5 (i.e., not the tarball) -- this is during make install:
<br>
<p>/usr/bin/install: cannot stat `./doxygen-doc/man/man3/HWLOC_API_VERSION.3': No such file or directory
<br>
<p>But a fresh hwloc 1.1 branch works fine on my mac.  Sigh.
<br>
<p>I'll keep checking...
<br>
<p><p><p>On Jan 20, 2011, at 7:18 AM, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; Le 20/01/2011 13:01, Brice Goglin a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; The online tarball doesn't build here either. It doesn't contain the
</span><br>
<span class="quotelev2">&gt;&gt; gather-topology.1in manpage. But make dist (and distcheck) in v1.1
</span><br>
<span class="quotelev2">&gt;&gt; branch work fine here.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I don't know what happen during your make dist. Apart from the missing
</span><br>
<span class="quotelev2">&gt;&gt; manpage. Your tarball contains all files that configure and make
</span><br>
<span class="quotelev2">&gt;&gt; generates (Makefile, .deps, .o, .libs). Your doxygen also created
</span><br>
<span class="quotelev2">&gt;&gt; additional files with -e prefix for each expected html and manpages.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I meant &quot;-e&quot; *suffix*.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Your tarball:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ tar tvfz hwloc-1.1.1rc1.tar.gz | grep get_api_
</span><br>
<span class="quotelev1">&gt; -rw-r--r-- jsquyres/staff      34 2011-01-19 14:21 hwloc-1.1.1rc1/doc/doxygen-doc/man/man3/hwloc_get_api_version.3
</span><br>
<span class="quotelev1">&gt; -rw-r--r-- jsquyres/staff      34 2011-01-19 14:21 hwloc-1.1.1rc1/doc/doxygen-doc/man/man3/hwloc_get_api_version.3-e
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My tarball:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ tar tvfz hwloc-1.1.1rc1r3097.tar.gz | grep get_api_ 
</span><br>
<span class="quotelev1">&gt; -rw-r--r-- bgoglin/users      34 2011-01-20 13:12 hwloc-1.1.1rc1r3097/doc/doxygen-doc/man/man3/hwloc_get_api_version.3
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I don't see anything wrong with get_api_version. Once I manually worked
</span><br>
<span class="quotelev2">&gt;&gt; around the missing manpage, make worked fine.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; FWIW, you used autoconf 2.68 and doxygen 1.7.2. I use 2.67 and 1.7.1.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Upgrading from doxygen 1.7.1 to 1.7.3 didn't change anything (it didn't
</span><br>
<span class="quotelev1">&gt; create &quot;-e&quot; suffixed files).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1849.php">Jeff Squyres: "Re: [hwloc-devel] Man pages and gather-topology"</a>
<li><strong>Previous message:</strong> <a href="1847.php">Brice Goglin: "Re: [hwloc-devel] Man pages and gather-topology"</a>
<li><strong>In reply to:</strong> <a href="1847.php">Brice Goglin: "Re: [hwloc-devel] Man pages and gather-topology"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1850.php">Brice Goglin: "Re: [hwloc-devel] Man pages and gather-topology"</a>
<li><strong>Reply:</strong> <a href="1850.php">Brice Goglin: "Re: [hwloc-devel] Man pages and gather-topology"</a>
<li><strong>Reply:</strong> <a href="1855.php">Jeff Squyres: "Re: [hwloc-devel] Man pages and gather-topology"</a>
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
