<?
$subject_val = "Re: [OMPI users] Undefined ompi_mpi_info_null issue";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 12 11:27:27 2015" -->
<!-- isoreceived="20150612152727" -->
<!-- sent="Fri, 12 Jun 2015 11:30:28 -0400" -->
<!-- isosent="20150612153028" -->
<!-- name="Ray Sheppard" -->
<!-- email="rsheppar_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Undefined ompi_mpi_info_null issue" -->
<!-- id="557AFB14.80400_at_iu.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="557AC9F4.6040704_at_iu.edu" -->
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
<strong>Date:</strong> 2015-06-12 11:30:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27128.php">borno_borno_at_[hidden]: "Re: [OMPI users] OpenMPI (1.8.3) and environment variable export"</a>
<li><strong>Previous message:</strong> <a href="27126.php">Noam Bernstein: "Re: [OMPI users] OpenMPI (1.8.3) and environment variable export"</a>
<li><strong>In reply to:</strong> <a href="27121.php">Ray Sheppard: "Re: [OMPI users] Undefined ompi_mpi_info_null issue"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just a follow-up.  RPATH was the trouble.  All is well now in the land 
<br>
of the climatologists again.  Thanks again for the help.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ray
<br>
<p><p>On 6/12/2015 8:00 AM, Ray Sheppard wrote:
<br>
<span class="quotelev1">&gt; Thanks again Gilles,
</span><br>
<span class="quotelev1">&gt;   You might be on to something.  Dynamic libraries sound like 
</span><br>
<span class="quotelev1">&gt; something a Python developer might love (no offense intended to the 
</span><br>
<span class="quotelev1">&gt; stereotype). It would also explain why the build went smoothly but the 
</span><br>
<span class="quotelev1">&gt; test run crashed.  I am going to try putting an RPATH variable in the 
</span><br>
<span class="quotelev1">&gt; environment and rebuilding.
</span><br>
<span class="quotelev1">&gt;               Ray
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 6/12/2015 7:15 AM, Gilles Gouaillardet wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Ray,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; one possibility is one of the loaded library was built with -rpath 
</span><br>
<span class="quotelev2">&gt;&gt; and this causes the mess
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; an other option is you have to link _error.so with libmpi.so
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Friday, June 12, 2015, Ray Sheppard &lt;rsheppar_at_[hidden] 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:rsheppar_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Hi Gilles,
</span><br>
<span class="quotelev2">&gt;&gt;       Thanks for the reply. I completely forgot that lived in the
</span><br>
<span class="quotelev2">&gt;&gt;     main library.  ldd doesn't show that it read my LD_LIBRARY_PATH
</span><br>
<span class="quotelev2">&gt;&gt;     (I also push out an LPATH variable just for fun).  I force
</span><br>
<span class="quotelev2">&gt;&gt;     modules to echoed when users initialize them.  You can see
</span><br>
<span class="quotelev2">&gt;&gt;     OpenMPI was visible to H5py.  Now I wonder why it didn't pick it
</span><br>
<span class="quotelev2">&gt;&gt;     up...  Thanks again.
</span><br>
<span class="quotelev2">&gt;&gt;                       Ray
</span><br>
<span class="quotelev2">&gt;&gt;     GMP arithmetic library version 5.1.1 loaded.
</span><br>
<span class="quotelev2">&gt;&gt;     MPFR version 3.1.1 loaded.
</span><br>
<span class="quotelev2">&gt;&gt;     Mpc version 1.0.1 loaded.
</span><br>
<span class="quotelev2">&gt;&gt;     gcc version 4.9.2 loaded.
</span><br>
<span class="quotelev2">&gt;&gt;     Moab Workload Manager scheduling and management system version
</span><br>
<span class="quotelev2">&gt;&gt;     7.1.1 loaded.
</span><br>
<span class="quotelev2">&gt;&gt;     Python programming language version 2.7.3 loaded.
</span><br>
<span class="quotelev2">&gt;&gt;     Perl programming language version 5.16.2 loaded.
</span><br>
<span class="quotelev2">&gt;&gt;     Intel compiler suite version 15.0.1 loaded.
</span><br>
<span class="quotelev2">&gt;&gt;     OpenMPI libraries (Intel) version 1.8.4 loaded.
</span><br>
<span class="quotelev2">&gt;&gt;     TotalView version 8.15.0-15 loaded.
</span><br>
<span class="quotelev2">&gt;&gt;     FFTW (Intel, Double precision) version 3.3.3 loaded.
</span><br>
<span class="quotelev2">&gt;&gt;     hdf4 version 4.2.10 loaded.
</span><br>
<span class="quotelev2">&gt;&gt;     Curl version 7.28.1 loaded.
</span><br>
<span class="quotelev2">&gt;&gt;     HDF5 (MPI) version 1.8.14 loaded.
</span><br>
<span class="quotelev2">&gt;&gt;     netcdf-c version 4.3.3 loaded.
</span><br>
<span class="quotelev2">&gt;&gt;     netcdf-fortran version 4.4.1 loaded.
</span><br>
<span class="quotelev2">&gt;&gt;     Gnuplot graphing utility version 4.6.1 loaded.
</span><br>
<span class="quotelev2">&gt;&gt;     [rsheppar_at_h2 ~]$ ldd
</span><br>
<span class="quotelev2">&gt;&gt;     /N/dc2/projects/ray/quarry/h5py/h5py-2.5.0/build/lib.linux-x86_64-2.7/h5py/_errors.so
</span><br>
<span class="quotelev2">&gt;&gt;             linux-vdso.so.1 =&gt;  (0x00007fff39db7000)
</span><br>
<span class="quotelev2">&gt;&gt;             libpthread.so.0 =&gt; /lib64/libpthread.so.0
</span><br>
<span class="quotelev2">&gt;&gt;     (0x00007facfe887000)
</span><br>
<span class="quotelev2">&gt;&gt;             libc.so.6 =&gt; /lib64/libc.so.6 (0x00007facfe4f3000)
</span><br>
<span class="quotelev2">&gt;&gt;             /lib64/ld-linux-x86-64.so.2 (0x00007facff049000)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     On 6/11/2015 8:09 PM, Gilles Gouaillardet wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Ray,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     this symbol is defined in libmpi.so.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     can you run
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     ldd
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     //N/dc2/projects/ray/quarry/h5py/h5py-2.5.0/build/lib.linux-x86_64-2.7/h5py//_errors.so
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     and make sure this is linked with openmpi 1.8.4 ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Cheers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Gilles
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     On 6/12/2015 1:29 AM, Ray Sheppard wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     Hi List,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       I know I saw this issue years ago but have forgotten the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     details. I looked through old posts but only found about half a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     dozen pertaining to WinDoze.  I am trying to build a Python
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     (2.7.3) extension (h5py) that calls HDF5 (1.8.14).  I built
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     both the OpenMPI (1.8.4) and the HDF5 modules so I know they
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     are consistent.  All goes well until I try to run the tests.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     Then I get:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     ImportError:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     /N/dc2/projects/ray/quarry/h5py/h5py-2.5.0/build/lib.linux-x86_64-2.7/h5py/_errors.so:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     undefined symbol: ompi_mpi_info_null
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     I am not sure I completely trust the h5py package but I don't
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     have a real good reason for believing that way.  I would
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     appreciate it if someone could explain where ompi_mpi_info_null
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     is defined and possibly a way to tell Python about it.  Thanks!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 Ray
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     users_at_[hidden]  &lt;javascript:_e(%7B%7D,'cvml','users_at_[hidden]');&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Subscription:<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Link to this post:<a href="http://www.open-mpi.org/community/lists/users/2015/06/27117.php">http://www.open-mpi.org/community/lists/users/2015/06/27117.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt; Subscription:<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:<a href="http://www.open-mpi.org/community/lists/users/2015/06/27119.php">http://www.open-mpi.org/community/lists/users/2015/06/27119.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/06/27121.php">http://www.open-mpi.org/community/lists/users/2015/06/27121.php</a>
</span><br>
<p><pre>
-- 
                          Respectfully,
                            Ray Sheppard
                            RSheppar_at_[hidden]
                            <a href="http://rt.uits.iu.edu/systems/SciAPT">http://rt.uits.iu.edu/systems/SciAPT</a>
                            317-274-0016
                    Principal Analyst
                    Senior Technical Lead
                    Scientific Applications and Performance Tuning
                    Research Technologies
                    University Information Technological Services
                    IUPUI campus
                    Indiana University
    My &quot;pithy&quot; saying:  Science is the art of translating the world
        into language. Unfortunately, that language is mathematics.
    Bumper sticker wisdom: Make it idiot-proof and they will make a
        better idiot.
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27127/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27128.php">borno_borno_at_[hidden]: "Re: [OMPI users] OpenMPI (1.8.3) and environment variable export"</a>
<li><strong>Previous message:</strong> <a href="27126.php">Noam Bernstein: "Re: [OMPI users] OpenMPI (1.8.3) and environment variable export"</a>
<li><strong>In reply to:</strong> <a href="27121.php">Ray Sheppard: "Re: [OMPI users] Undefined ompi_mpi_info_null issue"</a>
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
