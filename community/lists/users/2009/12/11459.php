<?
$subject_val = "Re: [OMPI users] Pointers for understanding failure messages on NetBSD";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  8 16:29:47 2009" -->
<!-- isoreceived="20091208212947" -->
<!-- sent="Wed, 9 Dec 2009 10:28:45 +1300" -->
<!-- isosent="20091208212845" -->
<!-- name="Kevin.Buckley_at_[hidden]" -->
<!-- email="Kevin.Buckley_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Pointers for understanding failure messages on NetBSD" -->
<!-- id="04bd4ebe58341a8a2a55927367dba6cc.squirrel_at_mail.ecs.vuw.ac.nz" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="87ws0xihnm.fsf_at_inbox.ru" -->
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
<strong>Subject:</strong> Re: [OMPI users] Pointers for understanding failure messages on NetBSD<br>
<strong>From:</strong> <a href="mailto:Kevin.Buckley_at_[hidden]?Subject=Re:%20[OMPI%20users]%20Pointers%20for%20understanding%20failure%20messages%20on%20NetBSD"><em>Kevin.Buckley_at_[hidden]</em></a><br>
<strong>Date:</strong> 2009-12-08 16:28:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11460.php">Jeff Squyres: "[OMPI users] Open MPI v1.4 release: explanation"</a>
<li><strong>Previous message:</strong> <a href="11458.php">Gus Correa: "Re: [OMPI users] mpirun only works when -np &lt;4"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/11/11289.php">Kevin.Buckley_at_[hidden]: "[OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11463.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<li><strong>Reply:</strong> <a href="11463.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<li><strong>Reply:</strong> <a href="11465.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<li><strong>Reply:</strong> <a href="11466.php">Aleksej Saushev: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Aleksej
<br>
<p>Cc: to the OpenMPI list as the oftdump clash might be of interest
<br>
elsewhere.
<br>
<p><span class="quotelev1">&gt; I attach a patch, but it doesn't work and I don't see where the
</span><br>
<span class="quotelev1">&gt; error lies now. It may be that I'm doing something stupid.
</span><br>
<span class="quotelev1">&gt; It produces working OpenMPI-1.3.4 package on Dragonfly though.
</span><br>
<p>Ok, I'll try and merge it in to the working stuff we have here.
<br>
I, obviously, just #ifdef'd for NetBSD as that is all I have to
<br>
try stuff out against.
<br>
<p><span class="quotelev1">&gt; Kevin, I've tried your chunk but it doesn't make any better.
</span><br>
<span class="quotelev1">&gt; Do you really have working OpenMPI on NetBSD?
</span><br>
<p>Oh yes!
<br>
<p>This was the output from a slightly modified hello_c.c that I ran
<br>
against my non-PkgSrc build a couple of days ago
<br>
<p>% cat my_mpirun_job.sh.o419867
<br>
Hello world, I am 0 of 8 on old-bailey.ecs.vuw.ac.nz
<br>
Hello world, I am 2 of 8 on pulcinella.ecs.vuw.ac.nz
<br>
Hello world, I am 4 of 8 on citron.ecs.vuw.ac.nz
<br>
Hello world, I am 1 of 8 on petit-lyon.ecs.vuw.ac.nz
<br>
Hello world, I am 6 of 8 on kipp-cafe.ecs.vuw.ac.nz
<br>
Hello world, I am 3 of 8 on stellar.ecs.vuw.ac.nz
<br>
Hello world, I am 7 of 8 on matterhorn.ecs.vuw.ac.nz
<br>
Hello world, I am 5 of 8 on khmer.ecs.vuw.ac.nz
<br>
<p>Note the EIGHT different hosts there - so it is working on NetBSD !
<br>
<p>I am currently installing the PkgSrc build, having prevented the
<br>
install binary clash, and will post the results of that soon.
<br>
<p>I have placed the tar of current patches from our PkgSrc build in
<br>
<p><a href="http://www.ecs.vuw.ac.nz/~kevin/forMPI/openmpi-1.3.4-20091208-netbsd.tar.gz">http://www.ecs.vuw.ac.nz/~kevin/forMPI/openmpi-1.3.4-20091208-netbsd.tar.gz</a>
<br>
<p>in case you want to try something out from an actual NetBSD build.
<br>
<p>How does your installtion fail ?
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (What conflict do you observe with pkgsrc-wip package by the way?)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>That was detailed in another email but basically the Open Trace Format
<br>
that the Vampire Trace (VT) stuff is looking to install tries to install:
<br>
<p>${LOCALBASE}/bin/otfdump
<br>
<p>and that binary is already installed there as part of another
<br>
package.
<br>
<p>You can get around this for a NetBSD OpenMPI deployment by adding this
<br>
patch to the PkgSrc Makefile which just removes the VT toolkit:
<br>
<p><p>26a27
<br>
<span class="quotelev1">&gt; CONFIGURE_ARGS+=      --enable-contrib-no-build=vt
</span><br>
<p>I have no idea how NetBSD go about resolving such clashes in the long
<br>
term though?
<br>
<p><p>I repeat the info from my previous email:
<br>
<p><p># pkg_info -F /usr/pkg/bin/otfdump
<br>
Information for libotf-0.9.9:
<br>
<p>Comment:
<br>
Library for handling OpenType fonts (OTF)
<br>
<p>Requires:
<br>
Xaw3d&gt;=1.5Enb1
<br>
freetype2&gt;=2.1.10nb1
<br>
<p>Required by:
<br>
m17n-lib-1.5.4nb1
<br>
emacs-23.1nb2
<br>
<p>Description:
<br>
The library &quot;libotf&quot; provides the following facilites.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;o Read Open Type Layout Tables from OTF file.  Currently these
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;tables are supported; head, name, cmap, GDEF, GSUB, and GPOS.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;o Convert a Unicode character sequence to a glyph code sequence by
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;using the above tables.
<br>
<p>The combination of libotf and the FreeType library (Ver.2) realizes
<br>
CTL (complex text layout) by OpenType fonts.
<br>
<p>Homepage:
<br>
<a href="http://www.m17n.org/libotf/">http://www.m17n.org/libotf/</a>
<br>
<p><p><pre>
-- 
Kevin M. Buckley                                  Room:  CO327
School of Engineering and                         Phone: +64 4 463 5971
 Computer Science
Victoria University of Wellington
New Zealand
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11460.php">Jeff Squyres: "[OMPI users] Open MPI v1.4 release: explanation"</a>
<li><strong>Previous message:</strong> <a href="11458.php">Gus Correa: "Re: [OMPI users] mpirun only works when -np &lt;4"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/11/11289.php">Kevin.Buckley_at_[hidden]: "[OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11463.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<li><strong>Reply:</strong> <a href="11463.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<li><strong>Reply:</strong> <a href="11465.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<li><strong>Reply:</strong> <a href="11466.php">Aleksej Saushev: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
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
