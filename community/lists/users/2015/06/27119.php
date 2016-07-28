<?
$subject_val = "Re: [OMPI users] Undefined ompi_mpi_info_null issue";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 12 07:15:48 2015" -->
<!-- isoreceived="20150612111548" -->
<!-- sent="Fri, 12 Jun 2015 20:15:47 +0900" -->
<!-- isosent="20150612111547" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Undefined ompi_mpi_info_null issue" -->
<!-- id="CAAkFZ5tv4ffdCtC4agaEmPcx+N5HJPZqHqxxWhtuhExoDin03g_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="557ABD79.3010502_at_iu.edu" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-12 07:15:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27120.php">Cian Davis: "Re: [OMPI users] Looking for LAM-MPI sources to create a mirror"</a>
<li><strong>Previous message:</strong> <a href="27118.php">Ray Sheppard: "Re: [OMPI users] Undefined ompi_mpi_info_null issue"</a>
<li><strong>In reply to:</strong> <a href="27118.php">Ray Sheppard: "Re: [OMPI users] Undefined ompi_mpi_info_null issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27121.php">Ray Sheppard: "Re: [OMPI users] Undefined ompi_mpi_info_null issue"</a>
<li><strong>Reply:</strong> <a href="27121.php">Ray Sheppard: "Re: [OMPI users] Undefined ompi_mpi_info_null issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ray,
<br>
<p>one possibility is one of the loaded library was built with -rpath and this
<br>
causes the mess
<br>
<p>an other option is you have to link _error.so with libmpi.so
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Friday, June 12, 2015, Ray Sheppard &lt;rsheppar_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  Hi Gilles,
</span><br>
<span class="quotelev1">&gt;   Thanks for the reply. I completely forgot that lived in the main
</span><br>
<span class="quotelev1">&gt; library.  ldd doesn't show that it read my LD_LIBRARY_PATH (I also push out
</span><br>
<span class="quotelev1">&gt; an LPATH variable just for fun).  I force modules to echoed when users
</span><br>
<span class="quotelev1">&gt; initialize them.  You can see OpenMPI was visible to H5py.  Now I wonder
</span><br>
<span class="quotelev1">&gt; why it didn't pick it up...  Thanks again.
</span><br>
<span class="quotelev1">&gt;                   Ray
</span><br>
<span class="quotelev1">&gt; GMP arithmetic library version 5.1.1 loaded.
</span><br>
<span class="quotelev1">&gt; MPFR version 3.1.1 loaded.
</span><br>
<span class="quotelev1">&gt; Mpc version 1.0.1 loaded.
</span><br>
<span class="quotelev1">&gt; gcc version 4.9.2 loaded.
</span><br>
<span class="quotelev1">&gt; Moab Workload Manager scheduling and management system version 7.1.1
</span><br>
<span class="quotelev1">&gt; loaded.
</span><br>
<span class="quotelev1">&gt; Python programming language version 2.7.3 loaded.
</span><br>
<span class="quotelev1">&gt; Perl programming language version 5.16.2 loaded.
</span><br>
<span class="quotelev1">&gt; Intel compiler suite version 15.0.1 loaded.
</span><br>
<span class="quotelev1">&gt; OpenMPI libraries (Intel) version 1.8.4 loaded.
</span><br>
<span class="quotelev1">&gt; TotalView version 8.15.0-15 loaded.
</span><br>
<span class="quotelev1">&gt; FFTW (Intel, Double precision) version 3.3.3 loaded.
</span><br>
<span class="quotelev1">&gt; hdf4 version 4.2.10 loaded.
</span><br>
<span class="quotelev1">&gt; Curl version 7.28.1 loaded.
</span><br>
<span class="quotelev1">&gt; HDF5 (MPI) version 1.8.14 loaded.
</span><br>
<span class="quotelev1">&gt; netcdf-c version 4.3.3 loaded.
</span><br>
<span class="quotelev1">&gt; netcdf-fortran version 4.4.1 loaded.
</span><br>
<span class="quotelev1">&gt; Gnuplot graphing utility version 4.6.1 loaded.
</span><br>
<span class="quotelev1">&gt; [rsheppar_at_h2 ~]$ ldd
</span><br>
<span class="quotelev1">&gt; /N/dc2/projects/ray/quarry/h5py/h5py-2.5.0/build/lib.linux-x86_64-2.7/h5py/_errors.so
</span><br>
<span class="quotelev1">&gt;         linux-vdso.so.1 =&gt;  (0x00007fff39db7000)
</span><br>
<span class="quotelev1">&gt;         libpthread.so.0 =&gt; /lib64/libpthread.so.0 (0x00007facfe887000)
</span><br>
<span class="quotelev1">&gt;         libc.so.6 =&gt; /lib64/libc.so.6 (0x00007facfe4f3000)
</span><br>
<span class="quotelev1">&gt;         /lib64/ld-linux-x86-64.so.2 (0x00007facff049000)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 6/11/2015 8:09 PM, Gilles Gouaillardet wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
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
<span class="quotelev1">&gt; */N/dc2/projects/ray/quarry/h5py/h5py-2.5.0/build/lib.linux-x86_64-2.7/h5py/*
</span><br>
<span class="quotelev1">&gt; _errors.so
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi List,
</span><br>
<span class="quotelev1">&gt;   I know I saw this issue years ago but have forgotten the details. I
</span><br>
<span class="quotelev1">&gt; looked through old posts but only found about half a dozen pertaining to
</span><br>
<span class="quotelev1">&gt; WinDoze.  I am trying to build a Python (2.7.3) extension (h5py) that calls
</span><br>
<span class="quotelev1">&gt; HDF5 (1.8.14).  I built both the OpenMPI (1.8.4) and the HDF5 modules so I
</span><br>
<span class="quotelev1">&gt; know they are consistent.  All goes well until I try to run the tests. Then
</span><br>
<span class="quotelev1">&gt; I get:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ImportError:
</span><br>
<span class="quotelev1">&gt; /N/dc2/projects/ray/quarry/h5py/h5py-2.5.0/build/lib.linux-x86_64-2.7/h5py/_errors.so:
</span><br>
<span class="quotelev1">&gt; undefined symbol: ompi_mpi_info_null
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am not sure I completely trust the h5py package but I don't have a real
</span><br>
<span class="quotelev1">&gt; good reason for believing that way.  I would appreciate it if someone could
</span><br>
<span class="quotelev1">&gt; explain where ompi_mpi_info_null is defined and possibly a way to tell
</span><br>
<span class="quotelev1">&gt; Python about it.  Thanks!
</span><br>
<span class="quotelev1">&gt;             Ray
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing listusers_at_[hidden] &lt;javascript:_e(%7B%7D,'cvml','users_at_[hidden]');&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/06/27117.php">http://www.open-mpi.org/community/lists/users/2015/06/27117.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27119/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27120.php">Cian Davis: "Re: [OMPI users] Looking for LAM-MPI sources to create a mirror"</a>
<li><strong>Previous message:</strong> <a href="27118.php">Ray Sheppard: "Re: [OMPI users] Undefined ompi_mpi_info_null issue"</a>
<li><strong>In reply to:</strong> <a href="27118.php">Ray Sheppard: "Re: [OMPI users] Undefined ompi_mpi_info_null issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27121.php">Ray Sheppard: "Re: [OMPI users] Undefined ompi_mpi_info_null issue"</a>
<li><strong>Reply:</strong> <a href="27121.php">Ray Sheppard: "Re: [OMPI users] Undefined ompi_mpi_info_null issue"</a>
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
