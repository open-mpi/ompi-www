<?
$subject_val = "Re: [OMPI users] EXTERNAL: Re: Unresolved reference 'mbind' and	'get_mempolicy'";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 30 09:45:01 2011" -->
<!-- isoreceived="20110930134501" -->
<!-- sent="Fri, 30 Sep 2011 08:03:18 -0400" -->
<!-- isosent="20110930120318" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] EXTERNAL: Re: Unresolved reference 'mbind' and	'get_mempolicy'" -->
<!-- id="CEA5A2D4-8F08-4403-B967-B92E118EAF32_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="E9F276A0010AF44ABD2C03ED2EDAE7DB275FE9724A_at_HDXMSPB.us.lmco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] EXTERNAL: Re: Unresolved reference 'mbind' and	'get_mempolicy'<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-30 08:03:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17480.php">Jeff Squyres: "Re: [OMPI users] EXTERNAL: Re: Unresolved reference 'mbind' and	'get_mempolicy'"</a>
<li><strong>Previous message:</strong> <a href="17478.php">Jeff Squyres: "Re: [OMPI users] EXTERNAL: Re: Unresolved reference 'mbind' and 'get_mempolicy'"</a>
<li><strong>In reply to:</strong> <a href="17471.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: Unresolved reference 'mbind' and	'get_mempolicy'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/12/17911.php">Rayson Ho: "Re: [OMPI users] EXTERNAL: Re: Unresolved reference 'mbind' and 'get_mempolicy'"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/12/17911.php">Rayson Ho: "Re: [OMPI users] EXTERNAL: Re: Unresolved reference 'mbind' and 'get_mempolicy'"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 29, 2011, at 12:45 PM, Blosch, Edwin L wrote:
<br>
<p><span class="quotelev1">&gt; If I add --without-hwloc in addition to --without-libnuma, then it builds.  Is that a reasonable thing to do?  Is there a better workaround?  This 'hwloc' module looks like it might be important.
</span><br>
<p>As a note of explanation: hwloc is effectively our replacement for libnuma.  You might want to check out hwloc (the standalone software package) -- it has a CLI and is quite useful for administrating servers, even outside of an HPC environment:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/projects/hwloc/">http://www.open-mpi.org/projects/hwloc/</a>
<br>
<p>hwloc may use libnuma under the covers; that's where this issue is coming from (i.e., OMPI may still use libnuma -- it's just now doing so indirectly, instead of directly).
<br>
<p><span class="quotelev1">&gt; For what it's worth, if there's something wrong with my configure line, let me know what to improve. Otherwise, as weird as &quot;--enable-mca-no-build=maffinity --disable-io-romio --enable-static --disable-shared&quot; may look, I am not trying to build fully static binaries. I have unavoidable need to build OpenMPI on certain machines and then transfer the executables to other machines that are compatable but not identical, and over the years these are the minimal set of configure flags necessary to make that possible. I may revisit these choices at some point, but if they are supposed to work, then I'd rather just keep using them.
</span><br>
<p>Your configure line looks fine to me.
<br>
<p>FWIW/heads up: in the 1.7 series, we're going to be ignoring the $F77 and $FFLAGS variables; we'll *only* be using $FC and $FCFLAGS.  There's still plenty of time before this hits mainstream, but I figured I'd let you know it's coming.  :-)
<br>
<p><pre>
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
<li><strong>Next message:</strong> <a href="17480.php">Jeff Squyres: "Re: [OMPI users] EXTERNAL: Re: Unresolved reference 'mbind' and	'get_mempolicy'"</a>
<li><strong>Previous message:</strong> <a href="17478.php">Jeff Squyres: "Re: [OMPI users] EXTERNAL: Re: Unresolved reference 'mbind' and 'get_mempolicy'"</a>
<li><strong>In reply to:</strong> <a href="17471.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: Unresolved reference 'mbind' and	'get_mempolicy'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/12/17911.php">Rayson Ho: "Re: [OMPI users] EXTERNAL: Re: Unresolved reference 'mbind' and 'get_mempolicy'"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/12/17911.php">Rayson Ho: "Re: [OMPI users] EXTERNAL: Re: Unresolved reference 'mbind' and 'get_mempolicy'"</a>
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
