<?
$subject_val = "Re: [OMPI users] Undefined ompi_mpi_info_null issue";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 12 08:01:31 2015" -->
<!-- isoreceived="20150612120131" -->
<!-- sent="Fri, 12 Jun 2015 08:00:52 -0400" -->
<!-- isosent="20150612120052" -->
<!-- name="Ray Sheppard" -->
<!-- email="rsheppar_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Undefined ompi_mpi_info_null issue" -->
<!-- id="557AC9F4.6040704_at_iu.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAAkFZ5tv4ffdCtC4agaEmPcx+N5HJPZqHqxxWhtuhExoDin03g_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2015-06-12 08:00:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27122.php">kishor sharma: "[OMPI users] Slowness with OpenMPI (1.8.1) and Numpy"</a>
<li><strong>Previous message:</strong> <a href="27120.php">Cian Davis: "Re: [OMPI users] Looking for LAM-MPI sources to create a mirror"</a>
<li><strong>In reply to:</strong> <a href="27119.php">Gilles Gouaillardet: "Re: [OMPI users] Undefined ompi_mpi_info_null issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27127.php">Ray Sheppard: "Re: [OMPI users] Undefined ompi_mpi_info_null issue"</a>
<li><strong>Reply:</strong> <a href="27127.php">Ray Sheppard: "Re: [OMPI users] Undefined ompi_mpi_info_null issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks again Gilles,
<br>
&nbsp;&nbsp;&nbsp;You might be on to something.  Dynamic libraries sound like something 
<br>
a Python developer might love (no offense intended to the stereotype). 
<br>
It would also explain why the build went smoothly but the test run 
<br>
crashed.  I am going to try putting an RPATH variable in the environment 
<br>
and rebuilding.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ray
<br>
<p>On 6/12/2015 7:15 AM, Gilles Gouaillardet wrote:
<br>
<span class="quotelev1">&gt; Ray,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; one possibility is one of the loaded library was built with -rpath and 
</span><br>
<span class="quotelev1">&gt; this causes the mess
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; an other option is you have to link _error.so with libmpi.so
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
<span class="quotelev1">&gt; On Friday, June 12, 2015, Ray Sheppard &lt;rsheppar_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:rsheppar_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Hi Gilles,
</span><br>
<span class="quotelev1">&gt;       Thanks for the reply. I completely forgot that lived in the main
</span><br>
<span class="quotelev1">&gt;     library.  ldd doesn't show that it read my LD_LIBRARY_PATH (I also
</span><br>
<span class="quotelev1">&gt;     push out an LPATH variable just for fun).  I force modules to
</span><br>
<span class="quotelev1">&gt;     echoed when users initialize them.  You can see OpenMPI was
</span><br>
<span class="quotelev1">&gt;     visible to H5py.  Now I wonder why it didn't pick it up...  Thanks
</span><br>
<span class="quotelev1">&gt;     again.
</span><br>
<span class="quotelev1">&gt;                       Ray
</span><br>
<span class="quotelev1">&gt;     GMP arithmetic library version 5.1.1 loaded.
</span><br>
<span class="quotelev1">&gt;     MPFR version 3.1.1 loaded.
</span><br>
<span class="quotelev1">&gt;     Mpc version 1.0.1 loaded.
</span><br>
<span class="quotelev1">&gt;     gcc version 4.9.2 loaded.
</span><br>
<span class="quotelev1">&gt;     Moab Workload Manager scheduling and management system version
</span><br>
<span class="quotelev1">&gt;     7.1.1 loaded.
</span><br>
<span class="quotelev1">&gt;     Python programming language version 2.7.3 loaded.
</span><br>
<span class="quotelev1">&gt;     Perl programming language version 5.16.2 loaded.
</span><br>
<span class="quotelev1">&gt;     Intel compiler suite version 15.0.1 loaded.
</span><br>
<span class="quotelev1">&gt;     OpenMPI libraries (Intel) version 1.8.4 loaded.
</span><br>
<span class="quotelev1">&gt;     TotalView version 8.15.0-15 loaded.
</span><br>
<span class="quotelev1">&gt;     FFTW (Intel, Double precision) version 3.3.3 loaded.
</span><br>
<span class="quotelev1">&gt;     hdf4 version 4.2.10 loaded.
</span><br>
<span class="quotelev1">&gt;     Curl version 7.28.1 loaded.
</span><br>
<span class="quotelev1">&gt;     HDF5 (MPI) version 1.8.14 loaded.
</span><br>
<span class="quotelev1">&gt;     netcdf-c version 4.3.3 loaded.
</span><br>
<span class="quotelev1">&gt;     netcdf-fortran version 4.4.1 loaded.
</span><br>
<span class="quotelev1">&gt;     Gnuplot graphing utility version 4.6.1 loaded.
</span><br>
<span class="quotelev1">&gt;     [rsheppar_at_h2 ~]$ ldd
</span><br>
<span class="quotelev1">&gt;     /N/dc2/projects/ray/quarry/h5py/h5py-2.5.0/build/lib.linux-x86_64-2.7/h5py/_errors.so
</span><br>
<span class="quotelev1">&gt;             linux-vdso.so.1 =&gt;  (0x00007fff39db7000)
</span><br>
<span class="quotelev1">&gt;             libpthread.so.0 =&gt; /lib64/libpthread.so.0 (0x00007facfe887000)
</span><br>
<span class="quotelev1">&gt;             libc.so.6 =&gt; /lib64/libc.so.6 (0x00007facfe4f3000)
</span><br>
<span class="quotelev1">&gt;             /lib64/ld-linux-x86-64.so.2 (0x00007facff049000)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     On 6/11/2015 8:09 PM, Gilles Gouaillardet wrote:
</span><br>
<span class="quotelev2">&gt;&gt;     Ray,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     this symbol is defined in libmpi.so.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     can you run
</span><br>
<span class="quotelev2">&gt;&gt;     ldd
</span><br>
<span class="quotelev2">&gt;&gt;     //N/dc2/projects/ray/quarry/h5py/h5py-2.5.0/build/lib.linux-x86_64-2.7/h5py//_errors.so
</span><br>
<span class="quotelev2">&gt;&gt;     and make sure this is linked with openmpi 1.8.4 ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Gilles
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     On 6/12/2015 1:29 AM, Ray Sheppard wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Hi List,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       I know I saw this issue years ago but have forgotten the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     details. I looked through old posts but only found about half a
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     dozen pertaining to WinDoze.  I am trying to build a Python
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     (2.7.3) extension (h5py) that calls HDF5 (1.8.14).  I built both
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     the OpenMPI (1.8.4) and the HDF5 modules so I know they are
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     consistent.  All goes well until I try to run the tests. Then I
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     get:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     ImportError:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     /N/dc2/projects/ray/quarry/h5py/h5py-2.5.0/build/lib.linux-x86_64-2.7/h5py/_errors.so:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     undefined symbol: ompi_mpi_info_null
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     I am not sure I completely trust the h5py package but I don't
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     have a real good reason for believing that way.  I would
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     appreciate it if someone could explain where ompi_mpi_info_null
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     is defined and possibly a way to tell Python about it.  Thanks!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 Ray
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;     users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;     users_at_[hidden]  &lt;javascript:_e(%7B%7D,'cvml','users_at_[hidden]');&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Subscription:<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;     Link to this post:<a href="http://www.open-mpi.org/community/lists/users/2015/06/27117.php">http://www.open-mpi.org/community/lists/users/2015/06/27117.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/06/27119.php">http://www.open-mpi.org/community/lists/users/2015/06/27119.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27121/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27122.php">kishor sharma: "[OMPI users] Slowness with OpenMPI (1.8.1) and Numpy"</a>
<li><strong>Previous message:</strong> <a href="27120.php">Cian Davis: "Re: [OMPI users] Looking for LAM-MPI sources to create a mirror"</a>
<li><strong>In reply to:</strong> <a href="27119.php">Gilles Gouaillardet: "Re: [OMPI users] Undefined ompi_mpi_info_null issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27127.php">Ray Sheppard: "Re: [OMPI users] Undefined ompi_mpi_info_null issue"</a>
<li><strong>Reply:</strong> <a href="27127.php">Ray Sheppard: "Re: [OMPI users] Undefined ompi_mpi_info_null issue"</a>
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
