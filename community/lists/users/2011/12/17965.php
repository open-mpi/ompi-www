<?
$subject_val = "Re: [OMPI users] openmpi - gfortran and ifort conflict";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 14 13:20:57 2011" -->
<!-- isoreceived="20111214182057" -->
<!-- sent="Wed, 14 Dec 2011 16:20:32 -0200" -->
<!-- isosent="20111214182032" -->
<!-- name="Fernanda Oliveira" -->
<!-- email="fgoliveira_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi - gfortran and ifort conflict" -->
<!-- id="CAASfj3SMjO-aSzRZ_UmTRYhpD0vj7KGbyWRiZjYMStu-rbidqQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAKRSGb8AdxWxzxU1=cFYdJDCT+RVKW1FY0N6hkizo7-er8T_uw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi - gfortran and ifort conflict<br>
<strong>From:</strong> Fernanda Oliveira (<em>fgoliveira_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-14 13:20:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17966.php">Gustavo Correa: "Re: [OMPI users] MPI_BCAST and fortran subarrays"</a>
<li><strong>Previous message:</strong> <a href="17964.php">David Warren: "Re: [OMPI users] MPI_BCAST and fortran subarrays"</a>
<li><strong>In reply to:</strong> <a href="17963.php">Micah Sklut: "Re: [OMPI users] openmpi - gfortran and ifort conflict"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17969.php">Tim Prince: "Re: [OMPI users] openmpi - gfortran and ifort conflict"</a>
<li><strong>Reply:</strong> <a href="17969.php">Tim Prince: "Re: [OMPI users] openmpi - gfortran and ifort conflict"</a>
<li><strong>Reply:</strong> <a href="17973.php">Prentice Bisbal: "Re: [OMPI users] openmpi - gfortran and ifort conflict"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Micah,
<br>
<p>I do not know if it is exactly what you need but I know that there are
<br>
environment variables to use with intel mpi. They are: I_MPI_CC,
<br>
I_MPI_CXX, I_MPI_F77, I_MPI_F90. So, you can set this using 'export'
<br>
for bash, for instance or directly when you run.
<br>
<p>I use in my bashrc:
<br>
<p>export I_MPI_CC=icc
<br>
export I_MPI_CXX=icpc
<br>
export I_MPI_F77=ifort
<br>
export I_MPI_F90=ifort
<br>
<p><p>Let me know if it helps.
<br>
Fernanda Oliveira
<br>
<p><p>2011/12/14 Micah Sklut &lt;micahs2005_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt; Hi Gustavo,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here is the output of :
</span><br>
<span class="quotelev1">&gt; barells_at_ip-10-17-153-123:~&gt; /opt/openmpi/intel/bin/mpif90 -showme
</span><br>
<span class="quotelev1">&gt; gfortran -I/usr/lib64/mpi/gcc/openmpi/include -pthread
</span><br>
<span class="quotelev1">&gt; -I/usr/lib64/mpi/gcc/openmpi/lib64 -L/usr/lib64/mpi/gcc/openmpi/lib64
</span><br>
<span class="quotelev1">&gt; -lmpi_f90 -lmpi_f77 -lmpi -lopen-rte -lopen-pal -ldl -Wl,--export-dynamic
</span><br>
<span class="quotelev1">&gt; -lnsl -lutil -lm -ldl
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This points to gfortran.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I do see what you are saying about the 1.4.2 and 1.4.4 components.
</span><br>
<span class="quotelev1">&gt; I'm not sure why that is, but there seems to be some conflict with the
</span><br>
<span class="quotelev1">&gt; existing openmpi, before recently installed 1.4.4 and trying to install with
</span><br>
<span class="quotelev1">&gt; ifort.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Dec 14, 2011 at 12:43 PM, Gustavo Correa &lt;gus_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; How about the output of this?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /opt/openmpi/intel/bin/mpif90 -showme
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Anyway, something seems to be wrong with your OpenMPI installation.
</span><br>
<span class="quotelev2">&gt;&gt; Just read the output of your ompi_info in your email below.
</span><br>
<span class="quotelev2">&gt;&gt; You will see that the OpenMPI version is 1.4.4.
</span><br>
<span class="quotelev2">&gt;&gt; However, most components are version 1.4.2.
</span><br>
<span class="quotelev2">&gt;&gt; Do you agree?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I would download the OpenMPI 1.4.4 tarball again and start fresh.
</span><br>
<span class="quotelev2">&gt;&gt; Untar the tarball in a brand new directory, don't overwrite old stuff.
</span><br>
<span class="quotelev2">&gt;&gt; Also, every time your OpenMPI build fails, or if you want to change
</span><br>
<span class="quotelev2">&gt;&gt; compilers
</span><br>
<span class="quotelev2">&gt;&gt; [say from gfortran to ifort],
</span><br>
<span class="quotelev2">&gt;&gt; do a 'make distclean' to cleanup any leftovers of previous builds,
</span><br>
<span class="quotelev2">&gt;&gt; and change the destination directory in --prefix= , to install in a
</span><br>
<span class="quotelev2">&gt;&gt; different location.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I hope this helps,
</span><br>
<span class="quotelev2">&gt;&gt; Gus Correa
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 14, 2011, at 12:21 PM, Micah Sklut wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hi Gustav,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I did read Price's email:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; When I do &quot;which mpif90&quot;, i get:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; /opt/openmpi/intel/bin/mpif90
</span><br>
<span class="quotelev3">&gt;&gt; &gt; which is the desired directory/binary
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; As I mentioned, the config log file indicated it was using ifort, and
</span><br>
<span class="quotelev3">&gt;&gt; &gt; had no mention of gfortran.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Below is the output from ompi_info. It shows reference to the correct
</span><br>
<span class="quotelev3">&gt;&gt; &gt; ifort compiler. But, yet the mpif90 compiler, still yeilds a gfortran
</span><br>
<span class="quotelev3">&gt;&gt; &gt; compiler.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; --&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; barells_at_ip-10-17-153-123:~&gt; ompi_info
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;Package: Open MPI barells_at_ip-10-17-148-204 Distribution
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; Open MPI: 1.4.4
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#160; &#160;Open MPI SVN revision: r25188
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#160; &#160;Open MPI release date: Sep 27, 2011
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; Open RTE: 1.4.4
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#160; &#160;Open RTE SVN revision: r25188
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#160; &#160;Open RTE release date: Sep 27, 2011
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; OPAL: 1.4.4
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#160; &#160; &#160; &#160;OPAL SVN revision: r25188
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#160; &#160; &#160; &#160;OPAL release date: Sep 27, 2011
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#160; &#160; &#160; &#160; &#160; &#160; Ident string: 1.4.4
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; Prefix: /usr/lib64/mpi/gcc/openmpi
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#160;Configured architecture: x86_64-unknown-linux-gnu
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#160; &#160; &#160; &#160; &#160; Configure host: ip-10-17-148-204
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#160; &#160; &#160; &#160; &#160; &#160;Configured by: barells
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#160; &#160; &#160; &#160; &#160; &#160;Configured on: Wed Dec 14 14:22:43 UTC 2011
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#160; &#160; &#160; &#160; &#160; Configure host: ip-10-17-148-204
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; Built by: barells
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; Built on: Wed Dec 14 14:27:56 UTC 2011
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; Built host: ip-10-17-148-204
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; C bindings: yes
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#160; &#160; &#160; &#160; &#160; &#160; C++ bindings: yes
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#160; &#160; &#160; Fortran77 bindings: yes (all)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#160; &#160; &#160; Fortran90 bindings: yes
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#160;Fortran90 bindings size: small
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; C compiler: gcc
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#160; &#160; &#160;C compiler absolute: /usr/bin/gcc
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#160; &#160; &#160; &#160; &#160; &#160; C++ compiler: g++
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#160; &#160;C++ compiler absolute: /usr/bin/g++
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#160; &#160; &#160; Fortran77 compiler: ifort
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#160; Fortran77 compiler abs: /opt/intel/fce/9.1.040/bin/ifort
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#160; &#160; &#160; Fortran90 compiler: ifort
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#160; Fortran90 compiler abs: /opt/intel/fce/9.1.040/bin/ifort
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160;C profiling: yes
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#160; &#160; &#160; &#160; &#160; &#160;C++ profiling: yes
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#160; &#160; &#160;Fortran77 profiling: yes
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#160; &#160; &#160;Fortran90 profiling: yes
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#160; &#160; &#160; &#160; &#160; C++ exceptions: no
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#160; &#160; &#160; &#160; &#160; Thread support: posix (mpi: no, progress: no)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#160; &#160; &#160; &#160; &#160; &#160;Sparse Groups: no
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#160; Internal debug support: no
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#160; &#160; &#160;MPI parameter check: runtime
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Memory profiling support: no
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Memory debugging support: no
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#160; &#160; &#160; &#160; &#160;libltdl support: yes
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#160; &#160;Heterogeneous support: no
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#160;mpirun default --prefix: no
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#160; &#160; &#160; &#160; &#160;MPI I/O support: yes
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#160; &#160; &#160; &#160;MPI_WTIME support: gettimeofday
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Symbol visibility support: yes
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#160; &#160;FT Checkpoint support: no &#160;(checkpoint thread: no)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#160; &#160; &#160; &#160; &#160; &#160;MCA backtrace: execinfo (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev3">&gt;&gt; &gt; v1.4.2)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; MCA memory: ptmalloc2 (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev3">&gt;&gt; &gt; v1.4.2)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#160; &#160; &#160; &#160; &#160; &#160;MCA paffinity: linux (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;MCA carto: auto_detect (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev3">&gt;&gt; &gt; v1.4.2)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;MCA carto: file (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#160; &#160; &#160; &#160; &#160; &#160;MCA maffinity: first_use (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev3">&gt;&gt; &gt; v1.4.2)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;MCA timer: linux (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#160; &#160; &#160; &#160; &#160;MCA installdirs: env (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#160; &#160; &#160; &#160; &#160;MCA installdirs: config (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;MCA dpm: orte (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; MCA pubsub: orte (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#160; &#160; &#160; &#160; &#160; &#160;MCA allocator: basic (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#160; &#160; &#160; &#160; &#160; &#160;MCA allocator: bucket (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; MCA coll: basic (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; MCA coll: hierarch (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev3">&gt;&gt; &gt; v1.4.2)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; MCA coll: inter (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; MCA coll: self (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; MCA coll: sm (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; MCA coll: sync (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; MCA coll: tuned (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; MCA io: romio (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;MCA mpool: fake (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;MCA mpool: rdma (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;MCA mpool: sm (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;MCA pml: cm (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;MCA pml: csum (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;MCA pml: ob1 (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;MCA pml: v (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;MCA bml: r2 (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; MCA rcache: vma (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;MCA btl: ofud (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;MCA btl: openib (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;MCA btl: self (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;MCA btl: sm (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;MCA btl: tcp (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;MCA btl: udapl (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; MCA topo: unity (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;MCA osc: pt2pt (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;MCA osc: rdma (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;MCA iof: hnp (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;MCA iof: orted (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;MCA iof: tool (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;MCA oob: tcp (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; MCA odls: default (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;MCA ras: slurm (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;MCA rmaps: load_balance (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev3">&gt;&gt; &gt; v1.4.2)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;MCA rmaps: rank_file (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev3">&gt;&gt; &gt; v1.4.2)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;MCA rmaps: round_robin (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev3">&gt;&gt; &gt; v1.4.2)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;MCA rmaps: seq (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;MCA rml: oob (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; MCA routed: binomial (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev3">&gt;&gt; &gt; v1.4.2)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; MCA routed: direct (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; MCA routed: linear (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;MCA plm: rsh (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;MCA plm: slurm (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;MCA filem: rsh (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; MCA errmgr: default (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;MCA ess: env (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;MCA ess: hnp (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;MCA ess: singleton (MCA v2.0, API v2.0, Component
</span><br>
<span class="quotelev3">&gt;&gt; &gt; v1.4.2)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;MCA ess: slurm (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;MCA ess: tool (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160;MCA grpcomm: bad (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160;MCA grpcomm: basic (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; On Wed, Dec 14, 2011 at 12:11 PM, Gustavo Correa &lt;gus_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hi Micah
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Did you read Tim Prince's email to you? &#160;Check it out.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Best thing is to set your environment variables [PATH, LD_LIBRARY_PATH,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; intel setup]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; in your initialization file, .profile/.bashrc or .[t]cshrc.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; What is the output of 'ompi_info'? [From your ifort-built OpenMPI.]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Does it show ifort or gfortran?
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I hope this helps,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Gus Correa
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; On Dec 14, 2011, at 11:21 AM, Micah Sklut wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; Thanks for your thoughts,
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; It would certainly appear that it is a PATH issue, but I still haven't
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; figured it out.
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; When I type the ifort command, ifort does run.
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; The intel path is in my PATH and is the first directory listed.
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; Looking at the configure.log, there is nothing indicating use or
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; mentioning of &quot;gfortran&quot;.
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; gfortran is in the /usr/bin directory, which is in the PATH as well.
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; Any other suggestions of things to look for?
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; Thank you,
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; On Wed, Dec 14, 2011 at 11:05 AM, Gustavo Correa
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; &lt;gus_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; Hi Micah
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; Is &#160;ifort in your PATH?
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; If not, the OpenMPI configure script will use any fortran compiler it
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; finds first, which may be gfortran.
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; You need to run the Intel compiler startup script before you run the
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; OpenMPI configure.
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; The easy thing to do is to source the Intel script inside your
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; .profile/.bashrc or .[t]cshrc file.
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; I hope this helps,
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; Gus Correa
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; On Dec 14, 2011, at 9:49 AM, Micah Sklut wrote:
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt; &gt; Hi All,
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt; &gt; I have installed openmpi for gfortran, but am now attempting to
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt; &gt; install openmpi as ifort.
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt; &gt; I have run the following configuration:
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt; &gt; ./configure --prefix=/opt/openmpi/intel CC=gcc CXX=g++ F77=ifort
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt; &gt; FC=ifort
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt; &gt; The install works successfully, but when I run
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt; &gt; /opt/openmpi/intel/bin/mpif90, it runs as gfortran.
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt; &gt; Oddly, when I am user: root, the same mpif90 runs as ifort.
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt; &gt; Can someone please alleviate my confusion as to why I mpif90 is not
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt; &gt; running as ifort?
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt; &gt; Thank you for your suggestions,
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt; &gt; --
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt; &gt; Micah
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; --
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; Micah Sklut
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; --
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Micah Sklut
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Micah Sklut
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17966.php">Gustavo Correa: "Re: [OMPI users] MPI_BCAST and fortran subarrays"</a>
<li><strong>Previous message:</strong> <a href="17964.php">David Warren: "Re: [OMPI users] MPI_BCAST and fortran subarrays"</a>
<li><strong>In reply to:</strong> <a href="17963.php">Micah Sklut: "Re: [OMPI users] openmpi - gfortran and ifort conflict"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17969.php">Tim Prince: "Re: [OMPI users] openmpi - gfortran and ifort conflict"</a>
<li><strong>Reply:</strong> <a href="17969.php">Tim Prince: "Re: [OMPI users] openmpi - gfortran and ifort conflict"</a>
<li><strong>Reply:</strong> <a href="17973.php">Prentice Bisbal: "Re: [OMPI users] openmpi - gfortran and ifort conflict"</a>
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
