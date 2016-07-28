<?
$subject_val = "Re: [OMPI users] Undefined ompi_mpi_info_null issue";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 12 07:07:49 2015" -->
<!-- isoreceived="20150612110749" -->
<!-- sent="Fri, 12 Jun 2015 07:07:37 -0400" -->
<!-- isosent="20150612110737" -->
<!-- name="Ray Sheppard" -->
<!-- email="rsheppar_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Undefined ompi_mpi_info_null issue" -->
<!-- id="557ABD79.3010502_at_iu.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="557A2349.9040004_at_rist.or.jp" -->
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
<strong>Subject:</strong> Re: [OMPI users] Undefined ompi_mpi_info_null issue<br>
<strong>From:</strong> Ray Sheppard (<em>rsheppar_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-12 07:07:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27119.php">Gilles Gouaillardet: "Re: [OMPI users] Undefined ompi_mpi_info_null issue"</a>
<li><strong>Previous message:</strong> <a href="27117.php">Gilles Gouaillardet: "Re: [OMPI users] Undefined ompi_mpi_info_null issue"</a>
<li><strong>In reply to:</strong> <a href="27117.php">Gilles Gouaillardet: "Re: [OMPI users] Undefined ompi_mpi_info_null issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27119.php">Gilles Gouaillardet: "Re: [OMPI users] Undefined ompi_mpi_info_null issue"</a>
<li><strong>Reply:</strong> <a href="27119.php">Gilles Gouaillardet: "Re: [OMPI users] Undefined ompi_mpi_info_null issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Gilles,
<br>
&nbsp;&nbsp;&nbsp;Thanks for the reply. I completely forgot that lived in the main 
<br>
library.  ldd doesn't show that it read my LD_LIBRARY_PATH (I also push 
<br>
out an LPATH variable just for fun).  I force modules to echoed when 
<br>
users initialize them.  You can see OpenMPI was visible to H5py.  Now I 
<br>
wonder why it didn't pick it up...  Thanks again.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ray
<br>
GMP arithmetic library version 5.1.1 loaded.
<br>
MPFR version 3.1.1 loaded.
<br>
Mpc version 1.0.1 loaded.
<br>
gcc version 4.9.2 loaded.
<br>
Moab Workload Manager scheduling and management system version 7.1.1 loaded.
<br>
Python programming language version 2.7.3 loaded.
<br>
Perl programming language version 5.16.2 loaded.
<br>
Intel compiler suite version 15.0.1 loaded.
<br>
OpenMPI libraries (Intel) version 1.8.4 loaded.
<br>
TotalView version 8.15.0-15 loaded.
<br>
FFTW (Intel, Double precision) version 3.3.3 loaded.
<br>
hdf4 version 4.2.10 loaded.
<br>
Curl version 7.28.1 loaded.
<br>
HDF5 (MPI) version 1.8.14 loaded.
<br>
netcdf-c version 4.3.3 loaded.
<br>
netcdf-fortran version 4.4.1 loaded.
<br>
Gnuplot graphing utility version 4.6.1 loaded.
<br>
[rsheppar_at_h2 ~]$ ldd 
<br>
/N/dc2/projects/ray/quarry/h5py/h5py-2.5.0/build/lib.linux-x86_64-2.7/h5py/_errors.so
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;linux-vdso.so.1 =&gt;  (0x00007fff39db7000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libpthread.so.0 =&gt; /lib64/libpthread.so.0 (0x00007facfe887000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libc.so.6 =&gt; /lib64/libc.so.6 (0x00007facfe4f3000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/lib64/ld-linux-x86-64.so.2 (0x00007facff049000)
<br>
<p><p>On 6/11/2015 8:09 PM, Gilles Gouaillardet wrote:
<br>
<span class="quotelev1">&gt; Ray,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; this symbol is defined in libmpi.so.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; can you run
</span><br>
<span class="quotelev1">&gt; ldd 
</span><br>
<span class="quotelev1">&gt; /N/dc2/projects/ray/quarry/h5py/h5py-2.5.0/build/lib.linux-x86_64-2.7/h5py/_errors.so
</span><br>
<span class="quotelev1">&gt; and make sure this is linked with openmpi 1.8.4 ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 6/12/2015 1:29 AM, Ray Sheppard wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi List,
</span><br>
<span class="quotelev2">&gt;&gt;   I know I saw this issue years ago but have forgotten the details. I 
</span><br>
<span class="quotelev2">&gt;&gt; looked through old posts but only found about half a dozen pertaining 
</span><br>
<span class="quotelev2">&gt;&gt; to WinDoze.  I am trying to build a Python (2.7.3) extension (h5py) 
</span><br>
<span class="quotelev2">&gt;&gt; that calls HDF5 (1.8.14).  I built both the OpenMPI (1.8.4) and the 
</span><br>
<span class="quotelev2">&gt;&gt; HDF5 modules so I know they are consistent.  All goes well until I 
</span><br>
<span class="quotelev2">&gt;&gt; try to run the tests. Then I get:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ImportError: 
</span><br>
<span class="quotelev2">&gt;&gt; /N/dc2/projects/ray/quarry/h5py/h5py-2.5.0/build/lib.linux-x86_64-2.7/h5py/_errors.so: 
</span><br>
<span class="quotelev2">&gt;&gt; undefined symbol: ompi_mpi_info_null
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am not sure I completely trust the h5py package but I don't have a 
</span><br>
<span class="quotelev2">&gt;&gt; real good reason for believing that way.  I would appreciate it if 
</span><br>
<span class="quotelev2">&gt;&gt; someone could explain where ompi_mpi_info_null is defined and 
</span><br>
<span class="quotelev2">&gt;&gt; possibly a way to tell Python about it.  Thanks!
</span><br>
<span class="quotelev2">&gt;&gt;             Ray
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/06/27117.php">http://www.open-mpi.org/community/lists/users/2015/06/27117.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27118/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27119.php">Gilles Gouaillardet: "Re: [OMPI users] Undefined ompi_mpi_info_null issue"</a>
<li><strong>Previous message:</strong> <a href="27117.php">Gilles Gouaillardet: "Re: [OMPI users] Undefined ompi_mpi_info_null issue"</a>
<li><strong>In reply to:</strong> <a href="27117.php">Gilles Gouaillardet: "Re: [OMPI users] Undefined ompi_mpi_info_null issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27119.php">Gilles Gouaillardet: "Re: [OMPI users] Undefined ompi_mpi_info_null issue"</a>
<li><strong>Reply:</strong> <a href="27119.php">Gilles Gouaillardet: "Re: [OMPI users] Undefined ompi_mpi_info_null issue"</a>
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
