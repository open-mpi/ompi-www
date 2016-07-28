<?
$subject_val = "Re: [OMPI devel] trunk and fortran errors";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  9 06:46:15 2014" -->
<!-- isoreceived="20140709104615" -->
<!-- sent="Wed, 9 Jul 2014 10:46:11 +0000" -->
<!-- isosent="20140709104611" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trunk and fortran errors" -->
<!-- id="FC146769-ED59-4860-91D2-3749DA58BDD3_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAO1KyYF9vRjg4pv8wm8WvV75HqGkzFAQ8RTR6FmSJe4pCmL6g_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] trunk and fortran errors<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-09 06:46:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15082.php">Gilles Gouaillardet: "Re: [OMPI devel] segv in ompi_info"</a>
<li><strong>Previous message:</strong> <a href="15080.php">Mike Dubman: "Re: [OMPI devel] segv in ompi_info"</a>
<li><strong>In reply to:</strong> <a href="15079.php">Mike Dubman: "[OMPI devel] trunk and fortran errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15089.php">Gilles Gouaillardet: "Re: [OMPI devel] trunk and fortran errors"</a>
<li><strong>Reply:</strong> <a href="15089.php">Gilles Gouaillardet: "Re: [OMPI devel] trunk and fortran errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
@#%$#@!$%
<br>
<p>This is almost certainly due to r32162 (Fortran commit from last night).
<br>
<p>I'm offline most of today; I won't be able to look at this until tonight at the earliest, sorry.  :-(
<br>
<p>For the moment/as a workaround, use --disable-mpi-fortran in your builds if you are building with an older gfortran.
<br>
<p><p>On Jul 9, 2014, at 6:33 AM, Mike Dubman &lt;miked_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; The latest svn/trunks fails to install on centos 5.7,5.8,5.9 but works fine on others.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; after:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure --with-platform=contrib/platform/mellanox/optimized --with-knem=/opt/knem-0.9.7mlnx1 --with-fca=/opt/mellanox/fca --with-ompi-param-check --enable-picky --prefix=/scrap/jenkins/workspace/hpc-ompi-shmem-2/label/r-vmb-centos5-u7-x86-64/ompi_install1 &amp;&amp; make clean &amp;&amp; make install
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; errors during &quot;make install&quot;:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 10:58:23 
</span><br>
<span class="quotelev1">&gt;  /bin/mkdir -p '/scrap/jenkins/workspace/hpc-ompi-shmem-2/label/r-vmb-centos5-u7-x86-64/ompi_install1/include/openmpi/ompi/mpi/fortran/mpif-h'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 10:58:23 
</span><br>
<span class="quotelev1">&gt;  /usr/bin/install -c -m 644 bindings.h prototypes_mpi.h status-conversion.h '/scrap/jenkins/workspace/hpc-ompi-shmem-2/label/r-vmb-centos5-u7-x86-64/ompi_install1/include/openmpi/ompi/mpi/fortran/mpif-h'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 10:58:23 
</span><br>
<span class="quotelev1">&gt; make[4]: Leaving directory `/scrap/jenkins/workspace/hpc-ompi-shmem-2/label/r-vmb-centos5-u7-x86-64/ompi/mpi/fortran/mpif-h'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 10:58:23 
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory `/scrap/jenkins/workspace/hpc-ompi-shmem-2/label/r-vmb-centos5-u7-x86-64/ompi/mpi/fortran/mpif-h'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 10:58:23 
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/scrap/jenkins/workspace/hpc-ompi-shmem-2/label/r-vmb-centos5-u7-x86-64/ompi/mpi/fortran/mpif-h'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 10:58:23 
</span><br>
<span class="quotelev1">&gt; Making install in mpi/fortran/use-mpi-tkr
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 10:58:23 
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `/scrap/jenkins/workspace/hpc-ompi-shmem-2/label/r-vmb-centos5-u7-x86-64/ompi/mpi/fortran/use-mpi-tkr'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 10:58:23 
</span><br>
<span class="quotelev1">&gt;   PPFC     mpi.lo
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 10:58:25 
</span><br>
<span class="quotelev1">&gt;  In file mpi-f90-interfaces.h:2900
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 10:58:25 
</span><br>
<span class="quotelev1">&gt; 10:58:25 
</span><br>
<span class="quotelev1">&gt;      Included at mpi.F90:45
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 10:58:25 
</span><br>
<span class="quotelev1">&gt; 10:58:25 
</span><br>
<span class="quotelev1">&gt;   use, intrinsic :: iso_c_binding, only : c_ptr
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 10:58:25 
</span><br>
<span class="quotelev1">&gt;  1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 10:58:25 
</span><br>
<span class="quotelev1">&gt; Error: Unclassifiable statement at (1)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 10:58:25 
</span><br>
<span class="quotelev1">&gt;  In file mpi-f90-interfaces.h:2904
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 10:58:25 
</span><br>
<span class="quotelev1">&gt; 10:58:25 
</span><br>
<span class="quotelev1">&gt;      Included at mpi.F90:45
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 10:58:25 
</span><br>
<span class="quotelev1">&gt; 10:58:25 
</span><br>
<span class="quotelev1">&gt;   type(C_PTR) :: baseptr
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 10:58:25 
</span><br>
<span class="quotelev1">&gt;             1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 10:58:25 
</span><br>
<span class="quotelev1">&gt; Error: Derived type 'c_ptr' at (1) is being used before it is defined
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 10:58:25 
</span><br>
<span class="quotelev1">&gt;  In file mpi-f90-interfaces.h:3121
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 10:58:25 
</span><br>
<span class="quotelev1">&gt; 10:58:25 
</span><br>
<span class="quotelev1">&gt;      Included at mpi.F90:45
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 10:58:25 
</span><br>
<span class="quotelev1">&gt; 10:58:25 
</span><br>
<span class="quotelev1">&gt;   use, intrinsic :: iso_c_binding, only : c_ptr
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 10:58:25 
</span><br>
<span class="quotelev1">&gt;  1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 10:58:25 
</span><br>
<span class="quotelev1">&gt; Error: Unclassifiable statement at (1)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 10:58:25 
</span><br>
<span class="quotelev1">&gt;  In file mpi-f90-interfaces.h:3127
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 10:58:25 
</span><br>
<span class="quotelev1">&gt; 10:58:25 
</span><br>
<span class="quotelev1">&gt;      Included at mpi.F90:45
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 10:58:25 
</span><br>
<span class="quotelev1">&gt; 10:58:25 
</span><br>
<span class="quotelev1">&gt;   type(C_PTR), intent(out) :: baseptr
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 10:58:25 
</span><br>
<span class="quotelev1">&gt;             1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 10:58:25 
</span><br>
<span class="quotelev1">&gt; Error: Derived type 'c_ptr' at (1) is being used before it is defined
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 10:58:25 
</span><br>
<span class="quotelev1">&gt; make[2]: *** [mpi.lo] Error 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 10:58:25 
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/scrap/jenkins/workspace/hpc-ompi-shmem-2/label/r-vmb-centos5-u7-x86-64/ompi/mpi/fortran/use-mpi-tkr'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 10:58:25 make[1]: *** [install-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15079.php">http://www.open-mpi.org/community/lists/devel/2014/07/15079.php</a>
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
<li><strong>Next message:</strong> <a href="15082.php">Gilles Gouaillardet: "Re: [OMPI devel] segv in ompi_info"</a>
<li><strong>Previous message:</strong> <a href="15080.php">Mike Dubman: "Re: [OMPI devel] segv in ompi_info"</a>
<li><strong>In reply to:</strong> <a href="15079.php">Mike Dubman: "[OMPI devel] trunk and fortran errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15089.php">Gilles Gouaillardet: "Re: [OMPI devel] trunk and fortran errors"</a>
<li><strong>Reply:</strong> <a href="15089.php">Gilles Gouaillardet: "Re: [OMPI devel] trunk and fortran errors"</a>
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
