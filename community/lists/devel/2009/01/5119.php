<?
$subject_val = "Re: [OMPI devel] [Pkg-openmpi-maintainers] Building with rpath disabled";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 12 18:05:04 2009" -->
<!-- isoreceived="20090112230504" -->
<!-- sent="Mon, 12 Jan 2009 18:04:58 -0500" -->
<!-- isosent="20090112230458" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [Pkg-openmpi-maintainers] Building with rpath disabled" -->
<!-- id="98A403D5-0CDF-4803-ADA2-C898AB5BB277_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="18790.9103.316383.26205_at_ron.nulle.part" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-12 18:04:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5120.php">Paul Franz: "Re: [OMPI devel] FLOSS Weekly and comment about Mercurial"</a>
<li><strong>Previous message:</strong> <a href="5118.php">Eugene Loh: "[OMPI devel] size of shared-memory backing file + maffinity"</a>
<li><strong>In reply to:</strong> <a href="5106.php">Dirk Eddelbuettel: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Building with rpath disabled"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5122.php">Manuel Prinz: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Building with rpath	disabled"</a>
<li><strong>Reply:</strong> <a href="5122.php">Manuel Prinz: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Building with rpath	disabled"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I don't see much harm in including this as long as rpath builds are  
<br>
still the default.  If there's a non-default option to disable rpath  
<br>
builds, that would be fine with me.
<br>
<p>Does this patch disable rpath by default, or do you have to explicitly  
<br>
use the --disable-rpath flag to configure?
<br>
<p><p>On Jan 8, 2009, at 11:02 AM, Dirk Eddelbuettel wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 8 January 2009 at 16:45, Manuel Prinz wrote:
</span><br>
<span class="quotelev1">&gt; | Hi,
</span><br>
<span class="quotelev1">&gt; |
</span><br>
<span class="quotelev1">&gt; | attached you'll find a (trivial) patch against the latest svn trunk
</span><br>
<span class="quotelev1">&gt; | (r20227) that adds a --disable-rpath to configure, so libraries  
</span><br>
<span class="quotelev1">&gt; can be
</span><br>
<span class="quotelev1">&gt; | build with rpath disabled. The reason for adding this feature that  
</span><br>
<span class="quotelev1">&gt; was
</span><br>
<span class="quotelev1">&gt; | that rpath is often problematic and it is removed in Debian  
</span><br>
<span class="quotelev1">&gt; anyway. (We
</span><br>
<span class="quotelev1">&gt; | currently delete rpath entries after building which is a little  
</span><br>
<span class="quotelev1">&gt; ugly.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;In theory, theory and practice are the same. In practive, they are  
</span><br>
<span class="quotelev1">&gt; not.&quot;  It
</span><br>
<span class="quotelev1">&gt; is true that Debian 'at large' has a policy to not use rpath. This  
</span><br>
<span class="quotelev1">&gt; is due to
</span><br>
<span class="quotelev1">&gt; the fact that as a distro, we can control ld.so.conf etc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That said, I as a developer often do not nuke rpath because certain  
</span><br>
<span class="quotelev1">&gt; systems
</span><br>
<span class="quotelev1">&gt; are simply built to use it. With Open MPi, and particularly Rmpi, I  
</span><br>
<span class="quotelev1">&gt; have had
</span><br>
<span class="quotelev1">&gt; nasty bugs given that symbols are split over several libraries. To  
</span><br>
<span class="quotelev1">&gt; be honest,
</span><br>
<span class="quotelev1">&gt; that was worse with Ubuntu because they globally tell the linker to
</span><br>
<span class="quotelev1">&gt; strip-unneeded (or something like that) as a default which killed  
</span><br>
<span class="quotelev1">&gt; till I
</span><br>
<span class="quotelev1">&gt; enforced LD_FLAGS=&quot;&quot; to override it for the package.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Long story short, I'd suggest a short moratorium here til we at  
</span><br>
<span class="quotelev1">&gt; Debian have
</span><br>
<span class="quotelev1">&gt; figured that all ducks are indeed in a row.  Right now I fear they  
</span><br>
<span class="quotelev1">&gt; may not
</span><br>
<span class="quotelev1">&gt; be.  Testing standalone C programs against libmpi is not enough of a  
</span><br>
<span class="quotelev1">&gt; test.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Manuel and I will toy with this off-line and report back.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dirk
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PS  Apologies also for the 'ftbfs' lingo the other day which came  
</span><br>
<span class="quotelev1">&gt; from a
</span><br>
<span class="quotelev1">&gt; Debian-internal list and a post that was not initially meant for wider
</span><br>
<span class="quotelev1">&gt; distribution.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; | The patch simply adds a call to the macro AC_LIB_RPATH in  
</span><br>
<span class="quotelev1">&gt; configure.ac
</span><br>
<span class="quotelev1">&gt; | and installs &quot;config.rpath&quot; from gettext which seems to be the  
</span><br>
<span class="quotelev1">&gt; preferred
</span><br>
<span class="quotelev1">&gt; | way of distributing the m4 macros needed for that. The license  
</span><br>
<span class="quotelev1">&gt; should
</span><br>
<span class="quotelev1">&gt; | not be an issue, as far as I can say.
</span><br>
<span class="quotelev1">&gt; |
</span><br>
<span class="quotelev1">&gt; | I tested it with the current trunk and it worked fine for me. It  
</span><br>
<span class="quotelev1">&gt; would
</span><br>
<span class="quotelev1">&gt; | be great if you could consider including it since it makes Debian
</span><br>
<span class="quotelev1">&gt; | maintainance of Open MPI a little easier and I think other  
</span><br>
<span class="quotelev1">&gt; distributions
</span><br>
<span class="quotelev1">&gt; | (and some users) may benefit from stripping rpath as well.
</span><br>
<span class="quotelev1">&gt; |
</span><br>
<span class="quotelev1">&gt; | Thanks in advance!
</span><br>
<span class="quotelev1">&gt; |
</span><br>
<span class="quotelev1">&gt; | Best regards
</span><br>
<span class="quotelev1">&gt; | Manuel
</span><br>
<span class="quotelev1">&gt; | --
</span><br>
<span class="quotelev1">&gt; | Pkg-openmpi-maintainers mailing list
</span><br>
<span class="quotelev1">&gt; | Pkg-openmpi-maintainers_at_[hidden]
</span><br>
<span class="quotelev1">&gt; | <a href="http://lists.alioth.debian.org/mailman/listinfo/pkg-openmpi-maintainers">http://lists.alioth.debian.org/mailman/listinfo/pkg-openmpi-maintainers</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Three out of two people have difficulties with fractions.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5120.php">Paul Franz: "Re: [OMPI devel] FLOSS Weekly and comment about Mercurial"</a>
<li><strong>Previous message:</strong> <a href="5118.php">Eugene Loh: "[OMPI devel] size of shared-memory backing file + maffinity"</a>
<li><strong>In reply to:</strong> <a href="5106.php">Dirk Eddelbuettel: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Building with rpath disabled"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5122.php">Manuel Prinz: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Building with rpath	disabled"</a>
<li><strong>Reply:</strong> <a href="5122.php">Manuel Prinz: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Building with rpath	disabled"</a>
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
