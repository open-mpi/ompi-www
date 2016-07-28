<?
$subject_val = "Re: [OMPI devel] Build regression: VampirTrace libraries built with debug symbols and no optimization";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 19 23:04:07 2015" -->
<!-- isoreceived="20150620030407" -->
<!-- sent="Fri, 19 Jun 2015 22:03:45 -0500" -->
<!-- isosent="20150620030345" -->
<!-- name="Lisandro Dalcin" -->
<!-- email="dalcinl_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Build regression: VampirTrace libraries built with debug symbols and no optimization" -->
<!-- id="CAEcYPwCCqTftKkDHp74Fzmui9JdnY9hc_3icrSRkpRK002rn8w_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAEcYPwBxCYj-LhK-6AePCJgPUbDBoUnT9o33vp=RdVQ3oH2g9Q_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2015-06-19 23:03:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17509.php">Lisandro Dalcin: "[OMPI devel] Bug"</a>
<li><strong>Previous message:</strong> <a href="17507.php">Jeff Squyres (jsquyres): "[OMPI devel] Clarification on Open MPI's version requirements"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2015/05/17391.php">Lisandro Dalcin: "[OMPI devel] Build regression: VampirTrace libraries built with debug symbols and no optimization"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17511.php">Bert Wesarg: "Re: [OMPI devel] Build regression: VampirTrace libraries built with debug symbols and no optimization"</a>
<li><strong>Reply:</strong> <a href="17511.php">Bert Wesarg: "Re: [OMPI devel] Build regression: VampirTrace libraries built with debug symbols and no optimization"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Open MPI 1.8.6 was released, and this issue seems to be still there.
<br>
Linux binaries are near 3 times larger:
<br>
<a href="https://binstar.org/mpi4py/openmpi/files">https://binstar.org/mpi4py/openmpi/files</a>
<br>
<p>On 8 May 2015 at 06:47, Lisandro Dalcin &lt;dalcinl_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; A build of 1.8.4 with just &quot;./configure --prefix=...&quot; produces the
</span><br>
<span class="quotelev1">&gt; following VT libraries with reasonable sizes which are similar to
</span><br>
<span class="quotelev1">&gt; previous releases (the largest one is 1.5 MB):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ cd /home/devel/mpi/openmpi/1.8.4/lib/ &amp;&amp; ls -lh *.a
</span><br>
<span class="quotelev1">&gt; -rw-r--r--. 1 dalcinl users 531K May  8 13:42 libopen-trace-format.a
</span><br>
<span class="quotelev1">&gt; -rw-r--r--. 1 dalcinl users  44K May  8 13:42 libotfaux.a
</span><br>
<span class="quotelev1">&gt; -rw-r--r--. 1 dalcinl users 664K May  8 13:42 libvt.a
</span><br>
<span class="quotelev1">&gt; -rw-r--r--. 1 dalcinl users 1.1M May  8 13:42 libvt-hyb.a
</span><br>
<span class="quotelev1">&gt; -rw-r--r--. 1 dalcinl users 970K May  8 13:42 libvt-mpi.a
</span><br>
<span class="quotelev1">&gt; -rw-r--r--. 1 dalcinl users 1.5M May  8 13:42 libvt-mpi-unify.a
</span><br>
<span class="quotelev1">&gt; -rw-r--r--. 1 dalcinl users 655K May  8 13:42 libvt-mt.a
</span><br>
<span class="quotelev1">&gt; -rw-r--r--. 1 dalcinl users  65K May  8 13:42 libvt-pomp.a
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; After cheking the build directory, I confirm VT seems to be being
</span><br>
<span class="quotelev1">&gt; built with optimization and no debug symbols:
</span><br>
<span class="quotelev1">&gt; $ grep CFLAGS /home/dalcinl/Devel/BUILD/openmpi-1.8.4/ompi/contrib/vt/vt/Makefile
</span><br>
<span class="quotelev1">&gt; CFLAGS = -O3 -DNDEBUG -finline-functions -fno-strict-aliasing -pthread
</span><br>
<span class="quotelev1">&gt; CFLAGS_FOR_BUILD = -O3 -DNDEBUG -finline-functions -fno-strict-aliasing -pthread
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, after building 1.8.5 exactly the same way (i.e, just
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=...), VT libraries have much larger sizes (the
</span><br>
<span class="quotelev1">&gt; largest one is now 16 MB, i.e. 10 times larger):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ cd /home/devel/mpi/openmpi/1.8.5/lib/ &amp;&amp; ls -lh *.a
</span><br>
<span class="quotelev1">&gt; -rw-r--r--. 1 dalcinl users 1.7M May  8 13:42 libopen-trace-format.a
</span><br>
<span class="quotelev1">&gt; -rw-r--r--. 1 dalcinl users 181K May  8 13:42 libotfaux.a
</span><br>
<span class="quotelev1">&gt; -rw-r--r--. 1 dalcinl users 1.9M May  8 13:43 libvt.a
</span><br>
<span class="quotelev1">&gt; -rw-r--r--. 1 dalcinl users 2.9M May  8 13:43 libvt-hyb.a
</span><br>
<span class="quotelev1">&gt; -rw-r--r--. 1 dalcinl users 2.8M May  8 13:43 libvt-mpi.a
</span><br>
<span class="quotelev1">&gt; -rw-r--r--. 1 dalcinl users  16M May  8 13:43 libvt-mpi-unify.a
</span><br>
<span class="quotelev1">&gt; -rw-r--r--. 1 dalcinl users 1.9M May  8 13:43 libvt-mt.a
</span><br>
<span class="quotelev1">&gt; -rw-r--r--. 1 dalcinl users 175K May  8 13:43 libvt-pomp.a
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and after inspecting CFLAGS in the build directory I get:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ grep CFLAGS /home/dalcinl/Devel/BUILD/openmpi-1.8.5/ompi/contrib/vt/vt/Makefile
</span><br>
<span class="quotelev1">&gt; CFLAGS = -g -O2
</span><br>
<span class="quotelev1">&gt; CFLAGS_FOR_BUILD = -g -O2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, plase take a look at the Makefile in one directory up:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ grep CFLAGS /home/dalcinl/Devel/BUILD/openmpi-1.8.5/ompi/contrib/vt/Makefile
</span><br>
<span class="quotelev1">&gt; CFLAGS = -O3 -DNDEBUG -finline-functions -fno-strict-aliasing -pthread
</span><br>
<span class="quotelev1">&gt; CFLAGS_WITHOUT_OPTFLAGS =  -DNDEBUG -fno-strict-aliasing -pthread
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So it seems that in 1.8.5 CFLAGS is not being propagated from
</span><br>
<span class="quotelev1">&gt; ompi/contrib/vt to ompi/contrib/vt/vt
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Given that the Makefile ompi/contrib/vt looks ok, but the all the
</span><br>
<span class="quotelev1">&gt; others in subdirs under ompi/contrib/vt are not, this smells as a
</span><br>
<span class="quotelev1">&gt; build regression your are likely not aware of.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Lisandro Dalcin
</span><br>
<span class="quotelev1">&gt; ============
</span><br>
<span class="quotelev1">&gt; Research Scientist
</span><br>
<span class="quotelev1">&gt; Computer, Electrical and Mathematical Sciences &amp; Engineering (CEMSE)
</span><br>
<span class="quotelev1">&gt; Numerical Porous Media Center (NumPor)
</span><br>
<span class="quotelev1">&gt; King Abdullah University of Science and Technology (KAUST)
</span><br>
<span class="quotelev1">&gt; <a href="http://numpor.kaust.edu.sa/">http://numpor.kaust.edu.sa/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 4700 King Abdullah University of Science and Technology
</span><br>
<span class="quotelev1">&gt; al-Khawarizmi Bldg (Bldg 1), Office # 4332
</span><br>
<span class="quotelev1">&gt; Thuwal 23955-6900, Kingdom of Saudi Arabia
</span><br>
<span class="quotelev1">&gt; <a href="http://www.kaust.edu.sa">http://www.kaust.edu.sa</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Office Phone: +966 12 808-0459
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
<li><strong>Next message:</strong> <a href="17509.php">Lisandro Dalcin: "[OMPI devel] Bug"</a>
<li><strong>Previous message:</strong> <a href="17507.php">Jeff Squyres (jsquyres): "[OMPI devel] Clarification on Open MPI's version requirements"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2015/05/17391.php">Lisandro Dalcin: "[OMPI devel] Build regression: VampirTrace libraries built with debug symbols and no optimization"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17511.php">Bert Wesarg: "Re: [OMPI devel] Build regression: VampirTrace libraries built with debug symbols and no optimization"</a>
<li><strong>Reply:</strong> <a href="17511.php">Bert Wesarg: "Re: [OMPI devel] Build regression: VampirTrace libraries built with debug symbols and no optimization"</a>
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
