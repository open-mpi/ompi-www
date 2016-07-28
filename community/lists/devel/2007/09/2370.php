<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Sep 27 22:18:56 2007" -->
<!-- isoreceived="20070928021856" -->
<!-- sent="Thu, 27 Sep 2007 21:18:39 -0500" -->
<!-- isosent="20070928021839" -->
<!-- name="Dirk Eddelbuettel" -->
<!-- email="edd_at_[hidden]" -->
<!-- subject="[OMPI devel] Small manual page patches from Debian package" -->
<!-- id="18172.25727.441408.226757_at_ron.nulle.part" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Dirk Eddelbuettel (<em>edd_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-27 22:18:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2371.php">Adrian Knoth: "Re: [OMPI devel] Small manual page patches from Debian package"</a>
<li><strong>Previous message:</strong> <a href="2369.php">Don Kerr: "Re: [OMPI devel] Use of the ompi free list"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2371.php">Adrian Knoth: "Re: [OMPI devel] Small manual page patches from Debian package"</a>
<li><strong>Reply:</strong> <a href="2371.php">Adrian Knoth: "Re: [OMPI devel] Small manual page patches from Debian package"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Open MPI developers,
<br>
<p>The Debian (source) package for Open MPI still carries a few tiny patches
<br>
that we thought we had submitted to you, but then maybe we got that mixed up
<br>
with some new manual pages I sent in on June 29.  In any event, the files are
<br>
<p>edd_at_ron:~/src/debian/SVN&gt; ls -l openmpi/debian/patches/
<br>
total 24
<br>
-rw-r--r-- 2 edd edd   81 2007-09-26 19:05 00list
<br>
-rwxr-xr-x 2 edd edd  852 2007-09-26 19:05 10fix_config_infiniband.dpatch
<br>
-rwxr-xr-x 2 edd edd  556 2007-09-26 19:05 20fix_manpage_link.dpatch
<br>
-rwxr-xr-x 2 edd edd 2642 2007-09-26 19:05 30fix_manpage.dpatch
<br>
-rwxr-xr-x 2 edd edd 2466 2007-09-26 19:05 31fix_manpages_lintian.dpatch
<br>
-rwxr-xr-x 2 edd edd 2393 2007-09-26 19:05 50fix_kfreebsd_build.dpatch
<br>
<p>You can ignore 50fix_kfreebsd_build.dpatch which is in 1.2.4, and
<br>
10fix_config_infiniband.dpatch which is just a config file comment on how to
<br>
silence ibverbs in the (common ?) case of no infiniband hardware.
<br>
<p>We apply the one listed here:
<br>
<p>edd_at_ron:~/src/debian/SVN&gt; cat openmpi/debian/patches/00list
<br>
10fix_config_infiniband
<br>
20fix_manpage_link
<br>
30fix_manpage
<br>
31fix_manpages_lintian
<br>
<p>and it is mostly just Makefile gymnastics suggested by our package check
<br>
tool. 
<br>
<p>You can grab the patches from our SVN at 
<br>
&nbsp;&nbsp;<a href="http://svn.debian.org/wsvn/pkg-openmpi">http://svn.debian.org/wsvn/pkg-openmpi</a>
<br>
&nbsp;&nbsp;svn://svn.debian.org/pkg-openmpi/
<br>
or via the diff.gz from
<br>
&nbsp;&nbsp;<a href="http://ftp.debian.org/debian/pool/main/o/openmpi/openmpi_1.2.4-0.diff.gz">http://ftp.debian.org/debian/pool/main/o/openmpi/openmpi_1.2.4-0.diff.gz</a>
<br>
or I'd be glad to tar'em up for you well as they are so tiny.  
<br>
<p>We'd be exited to see these integrated upstream, let us know if we can help
<br>
in other way.  1.2.4 packages for Debian have been built on x86, automated
<br>
builds ports are already available on amd64, alpha and ia64 but sparc and arm
<br>
failed for the 'no atomistic ops' reason as before.
<br>
<p>Regards, Dirk
<br>
<p><pre>
-- 
Three out of two people have difficulties with fractions.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2371.php">Adrian Knoth: "Re: [OMPI devel] Small manual page patches from Debian package"</a>
<li><strong>Previous message:</strong> <a href="2369.php">Don Kerr: "Re: [OMPI devel] Use of the ompi free list"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2371.php">Adrian Knoth: "Re: [OMPI devel] Small manual page patches from Debian package"</a>
<li><strong>Reply:</strong> <a href="2371.php">Adrian Knoth: "Re: [OMPI devel] Small manual page patches from Debian package"</a>
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
