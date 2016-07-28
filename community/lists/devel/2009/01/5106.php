<?
$subject_val = "Re: [OMPI devel] [Pkg-openmpi-maintainers] Building with rpath disabled";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  8 11:02:33 2009" -->
<!-- isoreceived="20090108160233" -->
<!-- sent="Thu, 8 Jan 2009 10:02:23 -0600" -->
<!-- isosent="20090108160223" -->
<!-- name="Dirk Eddelbuettel" -->
<!-- email="edd_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [Pkg-openmpi-maintainers] Building with rpath disabled" -->
<!-- id="18790.9103.316383.26205_at_ron.nulle.part" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1231429504.9679.14.camel_at_ce170155.zmb.uni-essen.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [Pkg-openmpi-maintainers] Building with rpath disabled<br>
<strong>From:</strong> Dirk Eddelbuettel (<em>edd_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-08 11:02:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5107.php">Jeff Squyres: "Re: [OMPI devel] OpenMPI rpm build 1.3rc3r20226 build failed"</a>
<li><strong>Previous message:</strong> <a href="5105.php">Manuel Prinz: "[OMPI devel] Building with rpath disabled"</a>
<li><strong>In reply to:</strong> <a href="5105.php">Manuel Prinz: "[OMPI devel] Building with rpath disabled"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5119.php">Jeff Squyres: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Building with rpath disabled"</a>
<li><strong>Reply:</strong> <a href="5119.php">Jeff Squyres: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Building with rpath disabled"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 8 January 2009 at 16:45, Manuel Prinz wrote:
<br>
| Hi,
<br>
| 
<br>
| attached you'll find a (trivial) patch against the latest svn trunk
<br>
| (r20227) that adds a --disable-rpath to configure, so libraries can be
<br>
| build with rpath disabled. The reason for adding this feature that was
<br>
| that rpath is often problematic and it is removed in Debian anyway. (We
<br>
| currently delete rpath entries after building which is a little ugly.)
<br>
<p>&quot;In theory, theory and practice are the same. In practive, they are not.&quot;  It
<br>
is true that Debian 'at large' has a policy to not use rpath. This is due to
<br>
the fact that as a distro, we can control ld.so.conf etc. 
<br>
<p>That said, I as a developer often do not nuke rpath because certain systems
<br>
are simply built to use it. With Open MPi, and particularly Rmpi, I have had
<br>
nasty bugs given that symbols are split over several libraries. To be honest,
<br>
that was worse with Ubuntu because they globally tell the linker to
<br>
strip-unneeded (or something like that) as a default which killed till I
<br>
enforced LD_FLAGS=&quot;&quot; to override it for the package.
<br>
<p>Long story short, I'd suggest a short moratorium here til we at Debian have
<br>
figured that all ducks are indeed in a row.  Right now I fear they may not
<br>
be.  Testing standalone C programs against libmpi is not enough of a test.
<br>
<p>Manuel and I will toy with this off-line and report back.
<br>
&nbsp;
<br>
Dirk
<br>
<p>PS  Apologies also for the 'ftbfs' lingo the other day which came from a
<br>
Debian-internal list and a post that was not initially meant for wider
<br>
distribution. 
<br>
<p>| The patch simply adds a call to the macro AC_LIB_RPATH in configure.ac
<br>
| and installs &quot;config.rpath&quot; from gettext which seems to be the preferred
<br>
| way of distributing the m4 macros needed for that. The license should
<br>
| not be an issue, as far as I can say.
<br>
| 
<br>
| I tested it with the current trunk and it worked fine for me. It would
<br>
| be great if you could consider including it since it makes Debian
<br>
| maintainance of Open MPI a little easier and I think other distributions
<br>
| (and some users) may benefit from stripping rpath as well.
<br>
| 
<br>
| Thanks in advance!
<br>
| 
<br>
| Best regards
<br>
| Manuel
<br>
| -- 
<br>
| Pkg-openmpi-maintainers mailing list
<br>
| Pkg-openmpi-maintainers_at_[hidden]
<br>
| <a href="http://lists.alioth.debian.org/mailman/listinfo/pkg-openmpi-maintainers">http://lists.alioth.debian.org/mailman/listinfo/pkg-openmpi-maintainers</a>
<br>
<p><pre>
-- 
Three out of two people have difficulties with fractions.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5107.php">Jeff Squyres: "Re: [OMPI devel] OpenMPI rpm build 1.3rc3r20226 build failed"</a>
<li><strong>Previous message:</strong> <a href="5105.php">Manuel Prinz: "[OMPI devel] Building with rpath disabled"</a>
<li><strong>In reply to:</strong> <a href="5105.php">Manuel Prinz: "[OMPI devel] Building with rpath disabled"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5119.php">Jeff Squyres: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Building with rpath disabled"</a>
<li><strong>Reply:</strong> <a href="5119.php">Jeff Squyres: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Building with rpath disabled"</a>
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
