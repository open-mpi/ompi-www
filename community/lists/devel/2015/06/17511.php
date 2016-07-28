<?
$subject_val = "Re: [OMPI devel] Build regression: VampirTrace libraries built with debug symbols and no optimization";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jun 20 13:48:57 2015" -->
<!-- isoreceived="20150620174857" -->
<!-- sent="Sat, 20 Jun 2015 19:48:52 +0200" -->
<!-- isosent="20150620174852" -->
<!-- name="Bert Wesarg" -->
<!-- email="bert.wesarg_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Build regression: VampirTrace libraries built with debug symbols and no optimization" -->
<!-- id="5585A784.3070603_at_tu-dresden.de" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAEcYPwCCqTftKkDHp74Fzmui9JdnY9hc_3icrSRkpRK002rn8w_at_mail.gmail.com" -->
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
<strong>From:</strong> Bert Wesarg (<em>bert.wesarg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-20 13:48:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17512.php">Gilles Gouaillardet: "Re: [OMPI devel] v2.0 branch has been created"</a>
<li><strong>Previous message:</strong> <a href="17510.php">Jeff Squyres (jsquyres): "[OMPI devel] v2.0 branch has been created"</a>
<li><strong>In reply to:</strong> <a href="17508.php">Lisandro Dalcin: "Re: [OMPI devel] Build regression: VampirTrace libraries built with debug symbols and no optimization"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2015/08/17735.php">Lisandro Dalcin: "Re: [OMPI devel] Build regression: VampirTrace libraries built with debug symbols and no optimization"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2015/08/17735.php">Lisandro Dalcin: "Re: [OMPI devel] Build regression: VampirTrace libraries built with debug symbols and no optimization"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Lisandro,
<br>
<p>On 06/20/2015 05:03 AM, Lisandro Dalcin wrote:
<br>
<span class="quotelev1">&gt; Open MPI 1.8.6 was released, and this issue seems to be still there.
</span><br>
<span class="quotelev1">&gt; Linux binaries are near 3 times larger:
</span><br>
<span class="quotelev1">&gt; <a href="https://binstar.org/mpi4py/openmpi/files">https://binstar.org/mpi4py/openmpi/files</a>
</span><br>
<p>sorry for the delay. The problem appears with commit 
<br>
open-mpi/ompi-releases_at_c540cf8d69edfaa51ce7f487efd418515ac8311f
<br>
<p>In this commit, Jeff (in Cc) removed 'export CFLAGS' from the top-level 
<br>
configure before calling into sub-configure, and thus the sub-configure 
<br>
piles up its own CFLAGS, which mostly results in '-g -O2' on GNU systems.
<br>
<p>Jeff, the ball is now in your hands.
<br>
<p>Regards,
<br>
Bert
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 8 May 2015 at 06:47, Lisandro Dalcin &lt;dalcinl_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; A build of 1.8.4 with just &quot;./configure --prefix=...&quot; produces the
</span><br>
<span class="quotelev2">&gt;&gt; following VT libraries with reasonable sizes which are similar to
</span><br>
<span class="quotelev2">&gt;&gt; previous releases (the largest one is 1.5 MB):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ cd /home/devel/mpi/openmpi/1.8.4/lib/ &amp;&amp; ls -lh *.a
</span><br>
<span class="quotelev2">&gt;&gt; -rw-r--r--. 1 dalcinl users 531K May  8 13:42 libopen-trace-format.a
</span><br>
<span class="quotelev2">&gt;&gt; -rw-r--r--. 1 dalcinl users  44K May  8 13:42 libotfaux.a
</span><br>
<span class="quotelev2">&gt;&gt; -rw-r--r--. 1 dalcinl users 664K May  8 13:42 libvt.a
</span><br>
<span class="quotelev2">&gt;&gt; -rw-r--r--. 1 dalcinl users 1.1M May  8 13:42 libvt-hyb.a
</span><br>
<span class="quotelev2">&gt;&gt; -rw-r--r--. 1 dalcinl users 970K May  8 13:42 libvt-mpi.a
</span><br>
<span class="quotelev2">&gt;&gt; -rw-r--r--. 1 dalcinl users 1.5M May  8 13:42 libvt-mpi-unify.a
</span><br>
<span class="quotelev2">&gt;&gt; -rw-r--r--. 1 dalcinl users 655K May  8 13:42 libvt-mt.a
</span><br>
<span class="quotelev2">&gt;&gt; -rw-r--r--. 1 dalcinl users  65K May  8 13:42 libvt-pomp.a
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; After cheking the build directory, I confirm VT seems to be being
</span><br>
<span class="quotelev2">&gt;&gt; built with optimization and no debug symbols:
</span><br>
<span class="quotelev2">&gt;&gt; $ grep CFLAGS /home/dalcinl/Devel/BUILD/openmpi-1.8.4/ompi/contrib/vt/vt/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; CFLAGS = -O3 -DNDEBUG -finline-functions -fno-strict-aliasing -pthread
</span><br>
<span class="quotelev2">&gt;&gt; CFLAGS_FOR_BUILD = -O3 -DNDEBUG -finline-functions -fno-strict-aliasing -pthread
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; However, after building 1.8.5 exactly the same way (i.e, just
</span><br>
<span class="quotelev2">&gt;&gt; ./configure --prefix=...), VT libraries have much larger sizes (the
</span><br>
<span class="quotelev2">&gt;&gt; largest one is now 16 MB, i.e. 10 times larger):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ cd /home/devel/mpi/openmpi/1.8.5/lib/ &amp;&amp; ls -lh *.a
</span><br>
<span class="quotelev2">&gt;&gt; -rw-r--r--. 1 dalcinl users 1.7M May  8 13:42 libopen-trace-format.a
</span><br>
<span class="quotelev2">&gt;&gt; -rw-r--r--. 1 dalcinl users 181K May  8 13:42 libotfaux.a
</span><br>
<span class="quotelev2">&gt;&gt; -rw-r--r--. 1 dalcinl users 1.9M May  8 13:43 libvt.a
</span><br>
<span class="quotelev2">&gt;&gt; -rw-r--r--. 1 dalcinl users 2.9M May  8 13:43 libvt-hyb.a
</span><br>
<span class="quotelev2">&gt;&gt; -rw-r--r--. 1 dalcinl users 2.8M May  8 13:43 libvt-mpi.a
</span><br>
<span class="quotelev2">&gt;&gt; -rw-r--r--. 1 dalcinl users  16M May  8 13:43 libvt-mpi-unify.a
</span><br>
<span class="quotelev2">&gt;&gt; -rw-r--r--. 1 dalcinl users 1.9M May  8 13:43 libvt-mt.a
</span><br>
<span class="quotelev2">&gt;&gt; -rw-r--r--. 1 dalcinl users 175K May  8 13:43 libvt-pomp.a
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; and after inspecting CFLAGS in the build directory I get:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ grep CFLAGS /home/dalcinl/Devel/BUILD/openmpi-1.8.5/ompi/contrib/vt/vt/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; CFLAGS = -g -O2
</span><br>
<span class="quotelev2">&gt;&gt; CFLAGS_FOR_BUILD = -g -O2
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; However, plase take a look at the Makefile in one directory up:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ grep CFLAGS /home/dalcinl/Devel/BUILD/openmpi-1.8.5/ompi/contrib/vt/Makefile
</span><br>
<span class="quotelev2">&gt;&gt; CFLAGS = -O3 -DNDEBUG -finline-functions -fno-strict-aliasing -pthread
</span><br>
<span class="quotelev2">&gt;&gt; CFLAGS_WITHOUT_OPTFLAGS =  -DNDEBUG -fno-strict-aliasing -pthread
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So it seems that in 1.8.5 CFLAGS is not being propagated from
</span><br>
<span class="quotelev2">&gt;&gt; ompi/contrib/vt to ompi/contrib/vt/vt
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Given that the Makefile ompi/contrib/vt looks ok, but the all the
</span><br>
<span class="quotelev2">&gt;&gt; others in subdirs under ompi/contrib/vt are not, this smells as a
</span><br>
<span class="quotelev2">&gt;&gt; build regression your are likely not aware of.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Lisandro Dalcin
</span><br>
<span class="quotelev2">&gt;&gt; ============
</span><br>
<span class="quotelev2">&gt;&gt; Research Scientist
</span><br>
<span class="quotelev2">&gt;&gt; Computer, Electrical and Mathematical Sciences &amp; Engineering (CEMSE)
</span><br>
<span class="quotelev2">&gt;&gt; Numerical Porous Media Center (NumPor)
</span><br>
<span class="quotelev2">&gt;&gt; King Abdullah University of Science and Technology (KAUST)
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://numpor.kaust.edu.sa/">http://numpor.kaust.edu.sa/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 4700 King Abdullah University of Science and Technology
</span><br>
<span class="quotelev2">&gt;&gt; al-Khawarizmi Bldg (Bldg 1), Office # 4332
</span><br>
<span class="quotelev2">&gt;&gt; Thuwal 23955-6900, Kingdom of Saudi Arabia
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.kaust.edu.sa">http://www.kaust.edu.sa</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Office Phone: +966 12 808-0459
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
Dipl.-Inf. Bert Wesarg
wiss. Mitarbeiter
Technische Universit&#228;t Dresden
Zentrum f&#252;r Informationsdienste und Hochleistungsrechnen (ZIH)
01062 Dresden
Tel.: +49 (351) 463-42451
Fax: +49 (351) 463-37773
E-Mail: bert.wesarg_at_[hidden]

</pre>
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17511/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17512.php">Gilles Gouaillardet: "Re: [OMPI devel] v2.0 branch has been created"</a>
<li><strong>Previous message:</strong> <a href="17510.php">Jeff Squyres (jsquyres): "[OMPI devel] v2.0 branch has been created"</a>
<li><strong>In reply to:</strong> <a href="17508.php">Lisandro Dalcin: "Re: [OMPI devel] Build regression: VampirTrace libraries built with debug symbols and no optimization"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2015/08/17735.php">Lisandro Dalcin: "Re: [OMPI devel] Build regression: VampirTrace libraries built with debug symbols and no optimization"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2015/08/17735.php">Lisandro Dalcin: "Re: [OMPI devel] Build regression: VampirTrace libraries built with debug symbols and no optimization"</a>
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
