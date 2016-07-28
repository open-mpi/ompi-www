<?
$subject_val = "Re: [OMPI users] statically linked OpenMPI 1.10.1 with PGI compilers";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 31 16:37:33 2015" -->
<!-- isoreceived="20151231213733" -->
<!-- sent="Thu, 31 Dec 2015 13:37:32 -0800" -->
<!-- isosent="20151231213732" -->
<!-- name="Jeff Hammond" -->
<!-- email="jeff.science_at_[hidden]" -->
<!-- subject="Re: [OMPI users] statically linked OpenMPI 1.10.1 with PGI compilers" -->
<!-- id="CAGKz=uLo6FOd8HJS+rcxoFaipy+SvPPr74HNSxWA-NRJ+E=+Kw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="0d9a1836eb0a4e7fb5badca9af6a262a_at_MAILBOX2.umb.sk" -->
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
<strong>Subject:</strong> Re: [OMPI users] statically linked OpenMPI 1.10.1 with PGI compilers<br>
<strong>From:</strong> Jeff Hammond (<em>jeff.science_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-12-31 16:37:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28210.php">Matt Thompson: "Re: [OMPI users] statically linked OpenMPI 1.10.1 with PGI compilers"</a>
<li><strong>Previous message:</strong> <a href="28208.php">Ilias Miroslav: "[OMPI users] statically linked OpenMPI 1.10.1 with PGI compilers"</a>
<li><strong>In reply to:</strong> <a href="28208.php">Ilias Miroslav: "[OMPI users] statically linked OpenMPI 1.10.1 with PGI compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28210.php">Matt Thompson: "Re: [OMPI users] statically linked OpenMPI 1.10.1 with PGI compilers"</a>
<li><strong>Reply:</strong> <a href="28210.php">Matt Thompson: "Re: [OMPI users] statically linked OpenMPI 1.10.1 with PGI compilers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Try using the same LDFLAGS for PGI. I think you got exactly what you asked
<br>
for from PGI when you used -Bstatic_pgi.
<br>
<p>I'm not sure what value there is to having mpirun be a static binary, other
<br>
than enabling users to be ignorant of how LD_LIBRARY_PATH works and wasting
<br>
space in your filesystem. You should instead consider rpath.
<br>
<p>Jeff
<br>
<p>On Thursday, December 31, 2015, Ilias Miroslav &lt;Miroslav.Ilias_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Dear experts,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; while I have succeeded to build fully statically linked OpenMPI with Intel
</span><br>
<span class="quotelev1">&gt; compilers:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/home/ilias/bin/openmpi-1.10.1_intel_static
</span><br>
<span class="quotelev1">&gt; --without-memory-manager CXX=icpc CC=icc F77=ifort FC=ifort
</span><br>
<span class="quotelev1">&gt; LDFLAGS=--static --disable-shared --enable-static
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ilias_at_[hidden]:~/bin/openmpi-1.10.1_intel_static/bin/.ldd mpif90;
</span><br>
<span class="quotelev1">&gt; ldd mpicc; ldd mpirun
</span><br>
<span class="quotelev1">&gt; not a dynamic executable
</span><br>
<span class="quotelev1">&gt; not a dynamic executable
</span><br>
<span class="quotelev1">&gt; not a dynamic executable
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#226;&#128;&#139;
</span><br>
<span class="quotelev1">&gt; I have not succeeded with PGI compilers:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   $ ./configure --prefix=/home/ilias/bin/openmpi-1.10.1_pgi_static
</span><br>
<span class="quotelev1">&gt; CXX=pgCC CC=pgcc F77=pgf77 FC=pgf90 CPP=cpp LDFLAGS=-Bstatic_pgi
</span><br>
<span class="quotelev1">&gt; --disable-shared --enable-static --without-memory-manager
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ilias_at_[hidden]:~/bin/openmpi-1.10.1_pgi_static/bin/.ldd mpif90
</span><br>
<span class="quotelev1">&gt;         linux-vdso.so.1 =&gt;  (0x00007fffc75da000)
</span><br>
<span class="quotelev1">&gt;         libdl.so.2 =&gt; /lib64/libdl.so.2 (0x00007f2f0820e000)
</span><br>
<span class="quotelev1">&gt;         libm.so.6 =&gt; /lib64/libm.so.6 (0x00007f2f07f89000)
</span><br>
<span class="quotelev1">&gt;         libnuma.so =&gt; /opt/pgi/linux86-64/13.10/lib/libnuma.so
</span><br>
<span class="quotelev1">&gt; (0x00007f2f07e88000)
</span><br>
<span class="quotelev1">&gt;         librt.so.1 =&gt; /lib64/librt.so.1 (0x00007f2f07c80000)
</span><br>
<span class="quotelev1">&gt;         libutil.so.1 =&gt; /lib64/libutil.so.1 (0x00007f2f07a7c000)
</span><br>
<span class="quotelev1">&gt;         libpthread.so.0 =&gt; /lib64/libpthread.so.0 (0x00007f2f0785f000)
</span><br>
<span class="quotelev1">&gt;         libc.so.6 =&gt; /lib64/libc.so.6 (0x00007f2f074cb000)
</span><br>
<span class="quotelev1">&gt;         /lib64/ld-linux-x86-64.so.2 (0x00007f2f0842a000)
</span><br>
<span class="quotelev1">&gt; ilias_at_[hidden]:~/bin/openmpi-1.10.1_pgi_static/bin/.ldd mpirun
</span><br>
<span class="quotelev1">&gt;         linux-vdso.so.1 =&gt;  (0x00007fffe75ed000)
</span><br>
<span class="quotelev1">&gt;         libdl.so.2 =&gt; /lib64/libdl.so.2 (0x00007f4f264b3000)
</span><br>
<span class="quotelev1">&gt;         libm.so.6 =&gt; /lib64/libm.so.6 (0x00007f4f2622e000)
</span><br>
<span class="quotelev1">&gt;         libnuma.so =&gt; /opt/pgi/linux86-64/13.10/lib/libnuma.so
</span><br>
<span class="quotelev1">&gt; (0x00007f4f2612d000)
</span><br>
<span class="quotelev1">&gt;         librt.so.1 =&gt; /lib64/librt.so.1 (0x00007f4f25f25000)
</span><br>
<span class="quotelev1">&gt;         libutil.so.1 =&gt; /lib64/libutil.so.1 (0x00007f4f25d21000)
</span><br>
<span class="quotelev1">&gt;         libpthread.so.0 =&gt; /lib64/libpthread.so.0 (0x00007f4f25b04000)
</span><br>
<span class="quotelev1">&gt;         libc.so.6 =&gt; /lib64/libc.so.6 (0x00007f4f25770000)
</span><br>
<span class="quotelev1">&gt;         /lib64/ld-linux-x86-64.so.2 (0x00007f4f266cf000)
</span><br>
<span class="quotelev1">&gt; ilias_at_[hidden]:~/bin/openmpi-1.10.1_pgi_static/bin/.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any help, please ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#226;&#128;&#139;Miro
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
Jeff Hammond
jeff.science_at_[hidden]
<a href="http://jeffhammond.github.io/">http://jeffhammond.github.io/</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28209/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28210.php">Matt Thompson: "Re: [OMPI users] statically linked OpenMPI 1.10.1 with PGI compilers"</a>
<li><strong>Previous message:</strong> <a href="28208.php">Ilias Miroslav: "[OMPI users] statically linked OpenMPI 1.10.1 with PGI compilers"</a>
<li><strong>In reply to:</strong> <a href="28208.php">Ilias Miroslav: "[OMPI users] statically linked OpenMPI 1.10.1 with PGI compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28210.php">Matt Thompson: "Re: [OMPI users] statically linked OpenMPI 1.10.1 with PGI compilers"</a>
<li><strong>Reply:</strong> <a href="28210.php">Matt Thompson: "Re: [OMPI users] statically linked OpenMPI 1.10.1 with PGI compilers"</a>
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
