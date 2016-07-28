<?
$subject_val = "Re: [OMPI users] Open mpi 123 install error for BLACS";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  2 20:31:15 2009" -->
<!-- isoreceived="20090203013115" -->
<!-- sent="Mon, 02 Feb 2009 20:30:59 -0500" -->
<!-- isosent="20090203013059" -->
<!-- name="Rainer Keller" -->
<!-- email="keller_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open mpi 123 install error for BLACS" -->
<!-- id="200902022030.59868.keller_at_ornl.gov" -->
<!-- charset="iso-8859-15" -->
<!-- inreplyto="BLU149-W68D687722425D81E9FF834CBC70_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open mpi 123 install error for BLACS<br>
<strong>From:</strong> Rainer Keller (<em>keller_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-02 20:30:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7943.php">Hana Milani: "[OMPI users] signal 15 (terminated)"</a>
<li><strong>Previous message:</strong> <a href="7941.php">Prentice Bisbal: "Re: [OMPI users] v1.3: mca_common_sm_mmap_init error"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/01/7912.php">Jack Bryan: "[OMPI users] Open mpi 123 install error for BLACS"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jack,
<br>
On Saturday 31 January 2009 02:03:23 pm Jack Bryan wrote:
<br>
<span class="quotelev1">&gt; I am installing BLACS in order to install PCSDP - a parallell interior
</span><br>
<span class="quotelev1">&gt; point solver for linear programming.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I need to install it on Open MPI 1.2.3 platform.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I ahve installed BLAS, LAPACK successfully.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now I need to install BLACS.
</span><br>
Actually, BLACS and PCSDP compile fine here (w/ Open MPI-1.2.8)
<br>
<p><span class="quotelev1">&gt; I can run &quot;make mpi&quot; successfully.
</span><br>
<span class="quotelev1">&gt; But, When I run &quot;make tester&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [BLACS]$ make tester
</span><br>
<span class="quotelev1">&gt; ( cd TESTING ; make  )
</span><br>
<span class="quotelev1">&gt; make[1]: Entering directory `/home/PCSDP/BLACS/TESTING'
</span><br>
<span class="quotelev1">&gt; mpif77  -o /home/PCSDP/BLACS/TESTING/EXE/xFbtest_MPI-LINUX-0 blacstest.o
</span><br>
<span class="quotelev1">&gt; btprim_MPI.o tools.o /home/PCSDP/BLACS/LIB/blacsF77init_MPI-LINUX-0.a
</span><br>
<span class="quotelev1">&gt; /home/PCSDP/BLACS/LIB/blacs_MPI-LINUX-0.a
</span><br>
<span class="quotelev1">&gt; /home/PCSDP/BLACS/LIB/blacsF77init_MPI-LINUX-0.a
</span><br>
<span class="quotelev1">&gt; /home/openmpi_123/lib/libmpi_cxx.la /home/openmpi_123/lib/libmpi_cxx.la:
</span><br>
<span class="quotelev1">&gt; file not recognized: File format not recognized collect2: ld returned 1
</span><br>
<span class="quotelev1">&gt; exit status
</span><br>
The libtool files (.la) will not help You in this case.
<br>
If You want to link against the Open MPI's C++ Interface, You'd just need to 
<br>
pass
<br>
&nbsp;&nbsp;&nbsp;mpif77 .... -L/home/openmpi_123/lib -lmpi_cxx
<br>
The compiler-wrapper mpif77 actually includes the library-search path (-L):
<br>
Use mpif77 -showme:
<br>
&nbsp;gfortran -I/opt/openmpi-1.2.8/include -L/opt/openmpi-1.2.8/lib -lmpi_f77 ...
<br>
<p><span class="quotelev1">&gt; In &quot;Bconfig.h&quot;, I have changed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; include &quot;/home/openmpi_123/include/mpi.h&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In OpenMPI 1.2.3, the lib directory does not include: &quot;*.a&quot; library.
</span><br>
<span class="quotelev1">&gt; only &quot;*.la&quot; library.
</span><br>
These are the libtool '.la' files, which help when linking using libtool.
<br>
The lib-library however should contain the shard-library files (libmpi.so* 
<br>
libmpi_cxx.so*), right?
<br>
<p>So You can link against the shared libraries.
<br>
<p>With best regards,
<br>
Rainer
<br>
<pre>
-- 
------------------------------------------------------------------------
Rainer Keller, PhD                  Tel: (865) 241-6293
Oak Ridge National Lab          Fax: (865) 241-4811
PO Box 2008 MS 6164           Email: keller_at_[hidden]
Oak Ridge, TN 37831-2008    AIM/Skype: rusraink
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7943.php">Hana Milani: "[OMPI users] signal 15 (terminated)"</a>
<li><strong>Previous message:</strong> <a href="7941.php">Prentice Bisbal: "Re: [OMPI users] v1.3: mca_common_sm_mmap_init error"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/01/7912.php">Jack Bryan: "[OMPI users] Open mpi 123 install error for BLACS"</a>
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
