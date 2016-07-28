<?
$subject_val = "Re: [OMPI users] problems building openmpi v 1.6.4 using a local build	of gcc 4.7.2 on rhel6";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr  5 07:45:56 2013" -->
<!-- isoreceived="20130405114556" -->
<!-- sent="Fri, 5 Apr 2013 11:45:51 +0000" -->
<!-- isosent="20130405114551" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problems building openmpi v 1.6.4 using a local build	of gcc 4.7.2 on rhel6" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC43FE344D_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAGzRjXYj8VAhi0XXTgZ0ZHH92wOgg6+J656_t8-e9R8=OSTtOw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] problems building openmpi v 1.6.4 using a local build	of gcc 4.7.2 on rhel6<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-05 07:45:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21685.php">chandan basu: "[OMPI users] OpenMPI collective algorithm selection"</a>
<li><strong>Previous message:</strong> <a href="21683.php">Reuti: "Re: [OMPI users] configure problem"</a>
<li><strong>In reply to:</strong> <a href="21681.php">Alan Sayre: "[OMPI users] problems building openmpi v 1.6.4 using a local build of gcc 4.7.2 on rhel6"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It looks like you configured with gfortran 4.7.2 (/nm/programs/third_party/gcc-4.7.2-rhel5/bin/gfortran).  
<br>
<p>Did you change your path after that, such that a different gfortran was found/used to build Open MPI?
<br>
<p>I ask because real*16 (etc.) were all found and used successfully in configure, but then failed when you built.  I'm guessing that this means that a different fortran compiler was used between configure and make.
<br>
<p><p>On Apr 4, 2013, at 9:41 PM, Alan Sayre &lt;ansayre62_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I'm trying to build openmpi v.1.6.4 using a local build of gcc 4.7.2 on rhel6.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The configure and build scripts are attached. The config.log and build.output are attached.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The last few lines of the build output is:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; make[3]: Entering directory `/nm/programs/third_party/tmp-install/openmpi-1.6.4-blgwap02/ompi/mpi/f77'
</span><br>
<span class="quotelev1">&gt; make[3]: Nothing to be done for `all-am'.
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory `/nm/programs/third_party/tmp-install/openmpi-1.6.4-blgwap02/ompi/mpi/f77'
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/nm/programs/third_party/tmp-install/openmpi-1.6.4-blgwap02/ompi/mpi/f77'
</span><br>
<span class="quotelev1">&gt; Making all in mpi/f90
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `/nm/programs/third_party/tmp-install/openmpi-1.6.4-blgwap02/ompi/mpi/f90'
</span><br>
<span class="quotelev1">&gt; make  all-recursive
</span><br>
<span class="quotelev1">&gt; make[3]: Entering directory `/nm/programs/third_party/tmp-install/openmpi-1.6.4-blgwap02/ompi/mpi/f90'
</span><br>
<span class="quotelev1">&gt; Making all in scripts
</span><br>
<span class="quotelev1">&gt; make[4]: Entering directory `/nm/programs/third_party/tmp-install/openmpi-1.6.4-blgwap02/ompi/mpi/f90/scripts'
</span><br>
<span class="quotelev1">&gt; make[4]: Nothing to be done for `all'.
</span><br>
<span class="quotelev1">&gt; make[4]: Leaving directory `/nm/programs/third_party/tmp-install/openmpi-1.6.4-blgwap02/ompi/mpi/f90/scripts'
</span><br>
<span class="quotelev1">&gt; make[4]: Entering directory `/nm/programs/third_party/tmp-install/openmpi-1.6.4-blgwap02/ompi/mpi/f90'
</span><br>
<span class="quotelev1">&gt;   FC     mpi.lo
</span><br>
<span class="quotelev1">&gt;  In file mpi-f90-interfaces.h:1586
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      Included at mpi.f90:37
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   real*16, intent(in) :: x
</span><br>
<span class="quotelev1">&gt;         1
</span><br>
<span class="quotelev1">&gt; Error: Old-style type declaration REAL*16 not supported at (1)
</span><br>
<span class="quotelev1">&gt;  In file mpi-f90-interfaces.h:1607
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      Included at mpi.f90:37
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   complex*32, intent(in) :: x
</span><br>
<span class="quotelev1">&gt;            1
</span><br>
<span class="quotelev1">&gt; Error: Old-style type declaration COMPLEX*32 not supported at (1)
</span><br>
<span class="quotelev1">&gt;  In file mpi-f90-interfaces.h:1670
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      Included at mpi.f90:37
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   real*16, dimension(*), intent(in) :: x
</span><br>
<span class="quotelev1">&gt;         1
</span><br>
<span class="quotelev1">&gt; Error: Old-style type declaration REAL*16 not supported at (1)
</span><br>
<span class="quotelev1">&gt;  In file mpi-f90-interfaces.h:1691
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      Included at mpi.f90:37
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   complex*32, dimension(*), intent(in) :: x
</span><br>
<span class="quotelev1">&gt;            1
</span><br>
<span class="quotelev1">&gt; Error: Old-style type declaration COMPLEX*32 not supported at (1)
</span><br>
<span class="quotelev1">&gt;  In file mpi-f90-interfaces.h:1754
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      Included at mpi.f90:37
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   real*16, dimension(1,*), intent(in) :: x
</span><br>
<span class="quotelev1">&gt;         1
</span><br>
<span class="quotelev1">&gt; Error: Old-style type declaration REAL*16 not supported at (1)
</span><br>
<span class="quotelev1">&gt;  In file mpi-f90-interfaces.h:1775
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      Included at mpi.f90:37
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   complex*32, dimension(1,*), intent(in) :: x
</span><br>
<span class="quotelev1">&gt;            1
</span><br>
<span class="quotelev1">&gt; Error: Old-style type declaration COMPLEX*32 not supported at (1)
</span><br>
<span class="quotelev1">&gt;  In file mpi-f90-interfaces.h:1838
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      Included at mpi.f90:37
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   real*16, dimension(1,1,*), intent(in) :: x
</span><br>
<span class="quotelev1">&gt;         1
</span><br>
<span class="quotelev1">&gt; Error: Old-style type declaration REAL*16 not supported at (1)
</span><br>
<span class="quotelev1">&gt;  In file mpi-f90-interfaces.h:1859
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      Included at mpi.f90:37
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   complex*32, dimension(1,1,*), intent(in) :: x
</span><br>
<span class="quotelev1">&gt;            1
</span><br>
<span class="quotelev1">&gt; Error: Old-style type declaration COMPLEX*32 not supported at (1)
</span><br>
<span class="quotelev1">&gt;  In file mpi-f90-interfaces.h:1922
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      Included at mpi.f90:37
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   real*16, dimension(1,1,1,*), intent(in) :: x
</span><br>
<span class="quotelev1">&gt;         1
</span><br>
<span class="quotelev1">&gt; Error: Old-style type declaration REAL*16 not supported at (1)
</span><br>
<span class="quotelev1">&gt;  In file mpi-f90-interfaces.h:1943
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      Included at mpi.f90:37
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   complex*32, dimension(1,1,1,*), intent(in) :: x
</span><br>
<span class="quotelev1">&gt;            1
</span><br>
<span class="quotelev1">&gt; Error: Old-style type declaration COMPLEX*32 not supported at (1)
</span><br>
<span class="quotelev1">&gt;  In file mpi-f90-interfaces.h:1946
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      Included at mpi.f90:37
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; end subroutine MPI_Sizeof4DC32
</span><br>
<span class="quotelev1">&gt;                              1
</span><br>
<span class="quotelev1">&gt; Error: Ambiguous interfaces 'mpi_sizeof4dc32' and 'mpi_sizeof4dr16' in generic interface 'mpi_sizeof' at (1)
</span><br>
<span class="quotelev1">&gt; make[4]: *** [mpi.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[4]: Leaving directory `/nm/programs/third_party/tmp-install/openmpi-1.6.4-blgwap02/ompi/mpi/f90'
</span><br>
<span class="quotelev1">&gt; make[3]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory `/nm/programs/third_party/tmp-install/openmpi-1.6.4-blgwap02/ompi/mpi/f90'
</span><br>
<span class="quotelev1">&gt; make[2]: *** [all] Error 2
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/nm/programs/third_party/tmp-install/openmpi-1.6.4-blgwap02/ompi/mpi/f90'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/nm/programs/third_party/tmp-install/openmpi-1.6.4-blgwap02/ompi'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What I am doing wrong?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Alan
</span><br>
<span class="quotelev1">&gt; &lt;build.out.bz2&gt;&lt;config.log.bz2&gt;&lt;1_Warning.txt&gt;&lt;2_Warning.txt&gt;&lt;tail.out&gt;&lt;test.c&gt;&lt;test.out&gt;&lt;3_Warning.txt&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="21685.php">chandan basu: "[OMPI users] OpenMPI collective algorithm selection"</a>
<li><strong>Previous message:</strong> <a href="21683.php">Reuti: "Re: [OMPI users] configure problem"</a>
<li><strong>In reply to:</strong> <a href="21681.php">Alan Sayre: "[OMPI users] problems building openmpi v 1.6.4 using a local build of gcc 4.7.2 on rhel6"</a>
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
