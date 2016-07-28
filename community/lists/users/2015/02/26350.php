<?
$subject_val = "Re: [OMPI users] error building openmpi-dev-1031-g008755a with gcc-4.9.2";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 19 08:57:08 2015" -->
<!-- isoreceived="20150219135708" -->
<!-- sent="Thu, 19 Feb 2015 13:57:07 +0000" -->
<!-- isosent="20150219135707" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] error building openmpi-dev-1031-g008755a with gcc-4.9.2" -->
<!-- id="97019D00-7C07-43EE-AF86-EEC768349B21_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201502191300.t1JD0kg8003194_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] error building openmpi-dev-1031-g008755a with gcc-4.9.2<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-19 08:57:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26351.php">Eric Chamberland: "Re: [OMPI users] Help on getting CMA works"</a>
<li><strong>Previous message:</strong> <a href="26349.php">Jeff Squyres (jsquyres): "Re: [OMPI users] error building openmpi-dev-1031-g008755a with gcc-4.9.2"</a>
<li><strong>In reply to:</strong> <a href="26345.php">Siegmar Gross: "[OMPI users] error building openmpi-dev-1031-g008755a with gcc-4.9.2"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Siegmar --
<br>
<p>This looks like an error in ROMIO that we should report upstream.
<br>
<p>Thanks for the heads-up!
<br>
<p><p><span class="quotelev1">&gt; On Feb 19, 2015, at 8:00 AM, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; today I tried to build openmpi-dev-1031-g008755a on my machines
</span><br>
<span class="quotelev1">&gt; (Solaris 10 Sparc, Solaris 10 x86_64, and openSUSE Linux 12.1
</span><br>
<span class="quotelev1">&gt; x86_64) with gcc-4.9.2 and Sun C 5.13 and got errors on all three
</span><br>
<span class="quotelev1">&gt; platforms for both compilers. I used the following configure
</span><br>
<span class="quotelev1">&gt; command for all platforms.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ../openmpi-dev-1031-g008755a/configure --prefix=/usr/local/openmpi-1.9.0_64_gcc \
</span><br>
<span class="quotelev1">&gt;  --libdir=/usr/local/openmpi-1.9.0_64_gcc/lib64 \
</span><br>
<span class="quotelev1">&gt;  --with-jdk-bindir=/usr/local/jdk1.8.0/bin \
</span><br>
<span class="quotelev1">&gt;  --with-jdk-headers=/usr/local/jdk1.8.0/include \
</span><br>
<span class="quotelev1">&gt;  JAVA_HOME=/usr/local/jdk1.8.0 \
</span><br>
<span class="quotelev1">&gt;  LDFLAGS=&quot;-m64&quot; CC=&quot;gcc&quot; CXX=&quot;g++&quot; FC=&quot;gfortran&quot; \
</span><br>
<span class="quotelev1">&gt;  CFLAGS=&quot;-m64&quot; CXXFLAGS=&quot;-m64&quot; FCFLAGS=&quot;-m64&quot; \
</span><br>
<span class="quotelev1">&gt;  CPP=&quot;cpp&quot; CXXCPP=&quot;cpp&quot; \
</span><br>
<span class="quotelev1">&gt;  CPPFLAGS=&quot;&quot; CXXCPPFLAGS=&quot;&quot; \
</span><br>
<span class="quotelev1">&gt;  --enable-mpi-cxx \
</span><br>
<span class="quotelev1">&gt;  --enable-cxx-exceptions \
</span><br>
<span class="quotelev1">&gt;  --enable-mpi-java \
</span><br>
<span class="quotelev1">&gt;  --enable-heterogeneous \
</span><br>
<span class="quotelev1">&gt;  --enable-mpi-thread-multiple \
</span><br>
<span class="quotelev1">&gt;  --with-hwloc=internal \
</span><br>
<span class="quotelev1">&gt;  --without-verbs \
</span><br>
<span class="quotelev1">&gt;  --with-wrapper-cflags=&quot;-std=c11 -m64&quot; \
</span><br>
<span class="quotelev1">&gt;  --with-wrapper-cxxflags=&quot;-m64&quot; \
</span><br>
<span class="quotelev1">&gt;  --with-wrapper-fcflags=&quot;-m64&quot; \
</span><br>
<span class="quotelev1">&gt;  --enable-debug \
</span><br>
<span class="quotelev1">&gt;  |&amp; tee log.configure.$SYSTEM_ENV.$MACHINE_ENV.64_gcc
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I got the following warning on my Solaris Sparc machine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;  CC       mpi-io/get_extent.lo
</span><br>
<span class="quotelev1">&gt; In file included from ../../../../../../openmpi-dev-1031-g008755a/ompi/mca/io/romio/romio/adio/include/adioi
</span><br>
<span class="quotelev1">&gt; .h:950:0,
</span><br>
<span class="quotelev1">&gt;                 from ../../../../../../openmpi-dev-1031-g008755a/ompi/mca/io/romio/romio/adio/include/adio.
</span><br>
<span class="quotelev1">&gt; h:454,
</span><br>
<span class="quotelev1">&gt;                 from ../../../../../../openmpi-dev-1031-g008755a/ompi/mca/io/romio/romio/mpi-io/mpioimpl.h:
</span><br>
<span class="quotelev1">&gt; 15,
</span><br>
<span class="quotelev1">&gt;                 from ../../../../../../openmpi-dev-1031-g008755a/ompi/mca/io/romio/romio/mpi-io/get_extent.
</span><br>
<span class="quotelev1">&gt; c:8:
</span><br>
<span class="quotelev1">&gt; ../../../../../../openmpi-dev-1031-g008755a/ompi/mca/io/romio/romio/mpi-io/get_extent.c: In function 'mca_io
</span><br>
<span class="quotelev1">&gt; _romio_dist_MPI_File_get_type_extent':
</span><br>
<span class="quotelev1">&gt; ../../../../../../openmpi-dev-1031-g008755a/ompi/mca/io/romio/romio/adio/include/adioi_error.h:74:24: warnin
</span><br>
<span class="quotelev1">&gt; g: 'error_code' may be used uninitialized in this function [-Wmaybe-uninitialized]
</span><br>
<span class="quotelev1">&gt;             error_code = MPIO_Err_return_file(fh, error_code);      \
</span><br>
<span class="quotelev1">&gt;                        ^
</span><br>
<span class="quotelev1">&gt; ../../../../../../openmpi-dev-1031-g008755a/ompi/mca/io/romio/romio/mpi-io/get_extent.c:42:9: note: 'error_c
</span><br>
<span class="quotelev1">&gt; ode' was declared here
</span><br>
<span class="quotelev1">&gt;     int error_code;
</span><br>
<span class="quotelev1">&gt;         ^
</span><br>
<span class="quotelev1">&gt;  CC       mpi-io/get_group.lo
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I got the same error that I have already reported for my
</span><br>
<span class="quotelev1">&gt; Linux machine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I would be grateful, if somebody could fix the problem. Thank
</span><br>
<span class="quotelev1">&gt; you very much for any help in advance.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Kind regards
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Siegmar
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/02/26345.php">http://www.open-mpi.org/community/lists/users/2015/02/26345.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26351.php">Eric Chamberland: "Re: [OMPI users] Help on getting CMA works"</a>
<li><strong>Previous message:</strong> <a href="26349.php">Jeff Squyres (jsquyres): "Re: [OMPI users] error building openmpi-dev-1031-g008755a with gcc-4.9.2"</a>
<li><strong>In reply to:</strong> <a href="26345.php">Siegmar Gross: "[OMPI users] error building openmpi-dev-1031-g008755a with gcc-4.9.2"</a>
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
