<?
$subject_val = "Re: [OMPI devel] GCC atomic intrinsics";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 16 18:18:17 2010" -->
<!-- isoreceived="20101216231817" -->
<!-- sent="Fri, 17 Dec 2010 00:18:03 +0100" -->
<!-- isosent="20101216231803" -->
<!-- name="Manuel Prinz" -->
<!-- email="manuel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] GCC atomic intrinsics" -->
<!-- id="20101216231803.GB7279_at_woodstock" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="657021FC-1CB8-4882-AB74-2E76F6ACFD0B_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] GCC atomic intrinsics<br>
<strong>From:</strong> Manuel Prinz (<em>manuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-16 18:18:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8783.php">’≈æß: "[OMPI devel] Connection architectures behind the MPI"</a>
<li><strong>Previous message:</strong> <a href="8781.php">Pascal Deveze: "Re: [OMPI devel] RFC: Bring the	lastest	ROMIO	version	from	MPICH2-1.3 into the trunk"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/07/8206.php">Jeff Squyres: "Re: [OMPI devel] GCC atomic intrinsics"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>it's been some time since and I'd like to give an update on the issue.
<br>
Sorry for the long mail!
<br>
<p>On Thu, Jul 22, 2010 at 08:34:54AM -0400, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; If anything moves on this front, let me know and I can create a mercurial
</span><br>
<span class="quotelev1">&gt; branch out on bitbucket.org and add the relevant configury magic for the
</span><br>
<span class="quotelev1">&gt; GCC intrinsics.
</span><br>
<p>I investigated several solutions lately and I'd like to share my &quot;results&quot;.
<br>
Please bear in mind that I am in no way in expert in this and I can try to
<br>
work on the issue but the more help I can get the better. I guess I can get
<br>
Open MPI to compile on all platforms but that does not neccessarily mean
<br>
that it works.
<br>
<p>So, as a summary (I can give details if needed):
<br>
<p>&nbsp;* Debian currently cares about 12 architectures officially, as well as
<br>
&nbsp;&nbsp;&nbsp;9 ports. Of those, Open MPI comiles on 8 and 3, respectively.[1] The
<br>
&nbsp;&nbsp;&nbsp;ones failing are armel, mips, mipsel, and s390. (For the ports: arm,
<br>
&nbsp;&nbsp;&nbsp;armhf, avr32, hppa, m68k, and sh4.)
<br>
&nbsp;* The parts can be ignored but of those at least hppa and m68k have a
<br>
&nbsp;&nbsp;&nbsp;userbase that seems to be interested in having Open MPI.
<br>
<p>&nbsp;* I tried to build OpenPA on all architectures and ports. It compiled
<br>
&nbsp;&nbsp;&nbsp;and passed the test suite on 10 of them. I was not able to test mipsel
<br>
&nbsp;&nbsp;&nbsp;(no porterbox available) but mips is fine so I expect mipsel to be OK
<br>
&nbsp;&nbsp;&nbsp;too. I was not able to test on sparc (same reason) but it build on
<br>
&nbsp;&nbsp;&nbsp;sparc64. Unfortunately, the test suite failed. So all architectures we
<br>
&nbsp;&nbsp;&nbsp;care about can be build with a fallback to OpenPA, though it may not
<br>
&nbsp;&nbsp;&nbsp;produce anything that works. On hppa the test suite failed, and I was
<br>
&nbsp;&nbsp;&nbsp;not able to test m68k at all.
<br>
&nbsp;* OpenPA is not in Debian as a seperate package but as part of MPICH2. I
<br>
&nbsp;&nbsp;&nbsp;think we will split it out as a separate package so Open MPI could be
<br>
&nbsp;&nbsp;&nbsp;linked against it. MPICH2 builds on all of the official architectures,
<br>
&nbsp;&nbsp;&nbsp;so this in an indicator that OpenPA might be a suitable alternative.
<br>
<p>&nbsp;* I also talked to the porters about the GCC intrinsics. The result was
<br>
&nbsp;&nbsp;&nbsp;that if the atomic operations are defined, they are implemented and
<br>
&nbsp;&nbsp;&nbsp;working. I did not check on which platforms this is the case but my
<br>
&nbsp;&nbsp;&nbsp;current understanding is that all of the official architectures have
<br>
&nbsp;&nbsp;&nbsp;them defined. I can test this at request, though I do not know how to
<br>
&nbsp;&nbsp;&nbsp;verify that they work correctly.[2]
<br>
<p>&nbsp;* I had a look at libatomic-ops. It builds on all official architectures.
<br>
&nbsp;&nbsp;&nbsp;It fails on 3 ports, one being m68k.
<br>
<p>&nbsp;* Atomic operations are also provided by glib. libglib2.0 builds on all
<br>
&nbsp;&nbsp;&nbsp;official architectures. It fails on 2 ports, one being m68k. I may
<br>
&nbsp;&nbsp;&nbsp;very well be that it does not provide all operations necessary, though.
<br>
<p>My personal conclusion from this is:
<br>
<p>&nbsp;* All choices (OpenPA, GCC intrinsics, libatomic-ops, glib) would enable
<br>
&nbsp;&nbsp;&nbsp;Open MPI to build on all official arches, as well as hppa. m68k does
<br>
&nbsp;&nbsp;&nbsp;not work with any of them but since it's a port only, I do not (and
<br>
&nbsp;&nbsp;&nbsp;don't have to) care about that.
<br>
&nbsp;* libatomic-ops and glib provide their own data types etc. This might
<br>
&nbsp;&nbsp;&nbsp;make integration harder.
<br>
&nbsp;* OpenPA seems a reasonable choice since it's used by MPICH2 and as far
<br>
&nbsp;&nbsp;&nbsp;as I know you already have good contact to the MPICH2 developers, so
<br>
&nbsp;&nbsp;&nbsp;everyone could benefit.
<br>
&nbsp;* GCC intrinsics are fine as well. My understanding is that the OpenPA
<br>
&nbsp;&nbsp;&nbsp;implementation might be faster.
<br>
<p>That's about the status quo. Jeff, if you could create a branch to play
<br>
with I can do so. Not sure if I will succeed but I'll give it a shot. I
<br>
have not touched Mercurial for a while but I'll find my way. (I'm using
<br>
Git but DVCS are not that different after all.)
<br>
<p>Please let me know which solution is the preffered by the developers. If
<br>
I can do more tests or provide additional information, feel free to ask!
<br>
<p>Best regards,
<br>
Manuel
<br>
<p><p>[1] Archticture that I was not able to test were counted as failing, but
<br>
&nbsp;&nbsp;&nbsp;&nbsp;this is only an issues for the ports. I have results for all official
<br>
&nbsp;&nbsp;&nbsp;&nbsp;architectures.
<br>
[2] If someone knows a simple test case that I could run, please point me
<br>
&nbsp;&nbsp;&nbsp;&nbsp;to it. Also, I'm not totally clear about which operations are currently
<br>
&nbsp;&nbsp;&nbsp;&nbsp;used in Open MPI.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8783.php">’≈æß: "[OMPI devel] Connection architectures behind the MPI"</a>
<li><strong>Previous message:</strong> <a href="8781.php">Pascal Deveze: "Re: [OMPI devel] RFC: Bring the	lastest	ROMIO	version	from	MPICH2-1.3 into the trunk"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/07/8206.php">Jeff Squyres: "Re: [OMPI devel] GCC atomic intrinsics"</a>
<!-- nextthread="start" -->
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
