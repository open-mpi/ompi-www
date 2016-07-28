<?
$subject_val = "Re: [OMPI devel] Build regression: VampirTrace libraries built with debug symbols and no optimization";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 10 14:35:55 2015" -->
<!-- isoreceived="20150810183555" -->
<!-- sent="Mon, 10 Aug 2015 21:35:24 +0300" -->
<!-- isosent="20150810183524" -->
<!-- name="Lisandro Dalcin" -->
<!-- email="dalcinl_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Build regression: VampirTrace libraries built with debug symbols and no optimization" -->
<!-- id="CAEcYPwBhdP=nxAjdyAFsh2+1fNJKjQMLdNzJn73YjdWPPFrqrg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="5585A784.3070603_at_tu-dresden.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Build regression: VampirTrace libraries built with debug symbols and no optimization<br>
<strong>From:</strong> Lisandro Dalcin (<em>dalcinl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-10 14:35:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17736.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Build regression: VampirTrace libraries built with debug symbols and no optimization"</a>
<li><strong>Previous message:</strong> <a href="17734.php">Gilles Gouaillardet: "Re: [OMPI devel] new branch on open-mpi/ompi?"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2015/06/17511.php">Bert Wesarg: "Re: [OMPI devel] Build regression: VampirTrace libraries built with debug symbols and no optimization"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17736.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Build regression: VampirTrace libraries built with debug symbols and no optimization"</a>
<li><strong>Reply:</strong> <a href="17736.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Build regression: VampirTrace libraries built with debug symbols and no optimization"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 20 June 2015 at 20:48, Bert Wesarg &lt;bert.wesarg_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Lisandro,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 06/20/2015 05:03 AM, Lisandro Dalcin wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI 1.8.6 was released, and this issue seems to be still there.
</span><br>
<span class="quotelev2">&gt;&gt; Linux binaries are near 3 times larger:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://binstar.org/mpi4py/openmpi/files">https://binstar.org/mpi4py/openmpi/files</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; sorry for the delay. The problem appears with commit
</span><br>
<span class="quotelev1">&gt; open-mpi/ompi-releases_at_c540cf8d69edfaa51ce7f487efd418515ac8311f
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In this commit, Jeff (in Cc) removed 'export CFLAGS' from the top-level
</span><br>
<span class="quotelev1">&gt; configure before calling into sub-configure, and thus the sub-configure
</span><br>
<span class="quotelev1">&gt; piles up its own CFLAGS, which mostly results in '-g -O2' on GNU systems.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff, the ball is now in your hands.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I've just built the 1.8.8 tarball, and the issue is still there,
<br>
compare the sizes of the osx-64 vs. linux-64 builds:
<br>
<a href="https://anaconda.org/mpi4py/openmpi/files?sort=uploaded">https://anaconda.org/mpi4py/openmpi/files?sort=uploaded</a>
<br>
<p><p><p><span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 8 May 2015 at 06:47, Lisandro Dalcin &lt;dalcinl_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; A build of 1.8.4 with just &quot;./configure --prefix=...&quot; produces the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; following VT libraries with reasonable sizes which are similar to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; previous releases (the largest one is 1.5 MB):
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ cd /home/devel/mpi/openmpi/1.8.4/lib/ &amp;&amp; ls -lh *.a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -rw-r--r--. 1 dalcinl users 531K May  8 13:42 libopen-trace-format.a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -rw-r--r--. 1 dalcinl users  44K May  8 13:42 libotfaux.a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -rw-r--r--. 1 dalcinl users 664K May  8 13:42 libvt.a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -rw-r--r--. 1 dalcinl users 1.1M May  8 13:42 libvt-hyb.a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -rw-r--r--. 1 dalcinl users 970K May  8 13:42 libvt-mpi.a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -rw-r--r--. 1 dalcinl users 1.5M May  8 13:42 libvt-mpi-unify.a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -rw-r--r--. 1 dalcinl users 655K May  8 13:42 libvt-mt.a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -rw-r--r--. 1 dalcinl users  65K May  8 13:42 libvt-pomp.a
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; After cheking the build directory, I confirm VT seems to be being
</span><br>
<span class="quotelev3">&gt;&gt;&gt; built with optimization and no debug symbols:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ grep CFLAGS
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/dalcinl/Devel/BUILD/openmpi-1.8.4/ompi/contrib/vt/vt/Makefile
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CFLAGS = -O3 -DNDEBUG -finline-functions -fno-strict-aliasing -pthread
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CFLAGS_FOR_BUILD = -O3 -DNDEBUG -finline-functions -fno-strict-aliasing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -pthread
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However, after building 1.8.5 exactly the same way (i.e, just
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./configure --prefix=...), VT libraries have much larger sizes (the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; largest one is now 16 MB, i.e. 10 times larger):
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ cd /home/devel/mpi/openmpi/1.8.5/lib/ &amp;&amp; ls -lh *.a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -rw-r--r--. 1 dalcinl users 1.7M May  8 13:42 libopen-trace-format.a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -rw-r--r--. 1 dalcinl users 181K May  8 13:42 libotfaux.a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -rw-r--r--. 1 dalcinl users 1.9M May  8 13:43 libvt.a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -rw-r--r--. 1 dalcinl users 2.9M May  8 13:43 libvt-hyb.a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -rw-r--r--. 1 dalcinl users 2.8M May  8 13:43 libvt-mpi.a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -rw-r--r--. 1 dalcinl users  16M May  8 13:43 libvt-mpi-unify.a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -rw-r--r--. 1 dalcinl users 1.9M May  8 13:43 libvt-mt.a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -rw-r--r--. 1 dalcinl users 175K May  8 13:43 libvt-pomp.a
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and after inspecting CFLAGS in the build directory I get:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ grep CFLAGS
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/dalcinl/Devel/BUILD/openmpi-1.8.5/ompi/contrib/vt/vt/Makefile
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CFLAGS = -g -O2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CFLAGS_FOR_BUILD = -g -O2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However, plase take a look at the Makefile in one directory up:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ grep CFLAGS
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/dalcinl/Devel/BUILD/openmpi-1.8.5/ompi/contrib/vt/Makefile
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CFLAGS = -O3 -DNDEBUG -finline-functions -fno-strict-aliasing -pthread
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CFLAGS_WITHOUT_OPTFLAGS =  -DNDEBUG -fno-strict-aliasing -pthread
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So it seems that in 1.8.5 CFLAGS is not being propagated from
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi/contrib/vt to ompi/contrib/vt/vt
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Given that the Makefile ompi/contrib/vt looks ok, but the all the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; others in subdirs under ompi/contrib/vt are not, this smells as a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; build regression your are likely not aware of.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Lisandro Dalcin
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ============
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Research Scientist
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Computer, Electrical and Mathematical Sciences &amp; Engineering (CEMSE)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Numerical Porous Media Center (NumPor)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; King Abdullah University of Science and Technology (KAUST)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://numpor.kaust.edu.sa/">http://numpor.kaust.edu.sa/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 4700 King Abdullah University of Science and Technology
</span><br>
<span class="quotelev3">&gt;&gt;&gt; al-Khawarizmi Bldg (Bldg 1), Office # 4332
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thuwal 23955-6900, Kingdom of Saudi Arabia
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.kaust.edu.sa">http://www.kaust.edu.sa</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Office Phone: +966 12 808-0459
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Dipl.-Inf. Bert Wesarg
</span><br>
<span class="quotelev1">&gt; wiss. Mitarbeiter
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Technische Universit&#195;&#164;t Dresden
</span><br>
<span class="quotelev1">&gt; Zentrum f&#195;&#188;r Informationsdienste und Hochleistungsrechnen (ZIH)
</span><br>
<span class="quotelev1">&gt; 01062 Dresden
</span><br>
<span class="quotelev1">&gt; Tel.: +49 (351) 463-42451
</span><br>
<span class="quotelev1">&gt; Fax: +49 (351) 463-37773
</span><br>
<span class="quotelev1">&gt; E-Mail: bert.wesarg_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Lisandro Dalcin
============
Research Scientist
Computer, Electrical and Mathematical Sciences &amp; Engineering (CEMSE)
Numerical Porous Media Center (NumPor)
King Abdullah University of Science and Technology (KAUST)
<a href="http://numpor.kaust.edu.sa/">http://numpor.kaust.edu.sa/</a>
4700 King Abdullah University of Science and Technology
al-Khawarizmi Bldg (Bldg 1), Office # 4332
Thuwal 23955-6900, Kingdom of Saudi Arabia
<a href="http://www.kaust.edu.sa">http://www.kaust.edu.sa</a>
Office Phone: +966 12 808-0459
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17736.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Build regression: VampirTrace libraries built with debug symbols and no optimization"</a>
<li><strong>Previous message:</strong> <a href="17734.php">Gilles Gouaillardet: "Re: [OMPI devel] new branch on open-mpi/ompi?"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2015/06/17511.php">Bert Wesarg: "Re: [OMPI devel] Build regression: VampirTrace libraries built with debug symbols and no optimization"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17736.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Build regression: VampirTrace libraries built with debug symbols and no optimization"</a>
<li><strong>Reply:</strong> <a href="17736.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Build regression: VampirTrace libraries built with debug symbols and no optimization"</a>
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
