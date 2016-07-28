<?
$subject_val = "Re: [OMPI users] Can't get a fully functional openmpi build on Mac OSX Mavericks";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 17 15:02:36 2014" -->
<!-- isoreceived="20140117200236" -->
<!-- sent="Fri, 17 Jan 2014 12:02:32 -0800" -->
<!-- isosent="20140117200232" -->
<!-- name="Ronald Cohen" -->
<!-- email="rhcohen_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Can't get a fully functional openmpi build on Mac OSX Mavericks" -->
<!-- id="CAMuam9M-jF-1iHKm4EdrEeF4Je6fLBqK8UwyE7_EGntHzVNFTg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C74A8B46-E870-4D31-A2FA-AAFB1B5442B1_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Can't get a fully functional openmpi build on Mac OSX Mavericks<br>
<strong>From:</strong> Ronald Cohen (<em>rhcohen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-17 15:02:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23393.php">Brock Palen: "Re: [OMPI users] openmpi-1.6.5  intel 14.0 MPI-IO Errors"</a>
<li><strong>Previous message:</strong> <a href="23391.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Can't get a fully functional openmpi build on Mac OSX Mavericks"</a>
<li><strong>In reply to:</strong> <a href="23391.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Can't get a fully functional openmpi build on Mac OSX Mavericks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23395.php">Ralph Castain: "Re: [OMPI users] Can't get a fully functional openmpi build on Mac OSX Mavericks"</a>
<li><strong>Reply:</strong> <a href="23395.php">Ralph Castain: "Re: [OMPI users] Can't get a fully functional openmpi build on Mac OSX Mavericks"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry, too many entries in this thread, I guess.  My general goal is to get
<br>
a working parallel hdf5 with openmpi on Mac OS X Mavericks.  At one point
<br>
in the saga I had romio disabled, which naturally doesn't work for hdf5
<br>
(which is trying to read/write files in parallel).  So the hdf5 tests would
<br>
of course fail.    I subsequently had link errors with hdf5 because I was
<br>
building openmpi with --disable-static, whereas the default (and
<br>
recommended) option for hdf5 is to disable shared and build static.  My
<br>
most recent attempts were with openmpi with enable-static,
<br>
enable-nodlopen.  In that case, with openmpi 1.7.4rc1, hdf5 1.8.12
<br>
configured and built successfully but make chek-p produced many errors in
<br>
its t-mpi tests, with messages like &quot;proc 4: found data error at
<br>
[2140143616+0], expect -7, got 6&quot;.   The errors were reproduced by the HDF5
<br>
testing team with openmpir 1.7.4rc1, but not with 1.7.3 (which I am now
<br>
building).
<br>
<p>Hopefully that is an adequate summary.
<br>
<p>Ron
<br>
<p><p><p>On Fri, Jan 17, 2014 at 11:44 AM, Jeff Squyres (jsquyres) &lt;
<br>
jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Can you specify exactly which issue you're referring to?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - test failing when you had ROMIO disabled
</span><br>
<span class="quotelev1">&gt; - test (sometimes) failing when you had ROMIO disabled
</span><br>
<span class="quotelev1">&gt; - compiling / linking issues
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 17, 2014, at 1:50 PM, Ronald Cohen &lt;rhcohen_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hello Ralph and others, I just got the following back from the HDF-5
</span><br>
<span class="quotelev1">&gt; support group, suggesting an ompi bug.   So I should either try 1.7.3 or a
</span><br>
<span class="quotelev1">&gt; recent nightly 1.7.4.    Will likely opt for 1.7.3, but hopefully someone
</span><br>
<span class="quotelev1">&gt; at openmpi can look at the problem for 1.7.4.   In short, the challenge is
</span><br>
<span class="quotelev1">&gt; to get a parallel hdf5 that passes make check-p with 1.7.4.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ------------------
</span><br>
<span class="quotelev2">&gt; &gt; Hi Ron,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I had sent your message to the developer and he can reproduce the issue.
</span><br>
<span class="quotelev2">&gt; &gt; Here is what he says:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  ---
</span><br>
<span class="quotelev2">&gt; &gt;  I replicated this on Jam with ompi 1.7.4rc1. I saw the same error he is
</span><br>
<span class="quotelev1">&gt; seeing.
</span><br>
<span class="quotelev2">&gt; &gt;  Note that this is an un-stable release for ompi.
</span><br>
<span class="quotelev2">&gt; &gt;  I tried ompi 1.7.3 (feature - little more stable release). I didn't see
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev2">&gt; &gt;  problems there.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  So this is an ompi bug. He can report it to the ompi list. He can just
</span><br>
<span class="quotelev1">&gt; point
</span><br>
<span class="quotelev2">&gt; &gt;  them to the t_mpi.c tests in our test suite in testpar/ and say it
</span><br>
<span class="quotelev1">&gt; occurs with
</span><br>
<span class="quotelev2">&gt; &gt;  their 1.7.4 rc1.
</span><br>
<span class="quotelev2">&gt; &gt;  ---
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -Barbara
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Fri, Jan 17, 2014 at 9:39 AM, Ronald Cohen &lt;rhcohen_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Thanks, I've just gotten an email with some suggestions (and promise of
</span><br>
<span class="quotelev1">&gt; more help) from the HDF5 support team.   I will report back here, as it may
</span><br>
<span class="quotelev1">&gt; be of interest to others trying to build hdf5 on mavericks.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Fri, Jan 17, 2014 at 9:08 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Afraid I have no idea, but hopefully someone else here with experience
</span><br>
<span class="quotelev1">&gt; with HDF5 can chime in?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Jan 17, 2014, at 9:03 AM, Ronald Cohen &lt;rhcohen_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Still a timely response, thank you.    The particular problem I noted
</span><br>
<span class="quotelev1">&gt; hasn't recurred; for reasons I will explain shortly I had to rebuild
</span><br>
<span class="quotelev1">&gt; openmpi again, and this time Sample_mpio.c compiled and ran successfully
</span><br>
<span class="quotelev1">&gt; from the start.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; But now my problem is trying to get parallel HDF5 to run.  In my first
</span><br>
<span class="quotelev1">&gt; attempt to build HDF5 it failed in the load stage because of unsatisifed
</span><br>
<span class="quotelev1">&gt; externals from openmpi, and I deduced the problem was having built openmpi
</span><br>
<span class="quotelev1">&gt; with --disable-static.   So I rebuilt with --enable-static and
</span><br>
<span class="quotelev1">&gt; --disable-dlopen (emulating a successful openmpi + hdf5 combination I had
</span><br>
<span class="quotelev1">&gt; built on Snow Leopard).   Once again openmpi passed its make check's, and
</span><br>
<span class="quotelev1">&gt; as noted above the Sample_mpio.c test compiled and ran fine.   And the
</span><br>
<span class="quotelev1">&gt; parallel hdf5 configure and make steps ran successfully.   But when I ran
</span><br>
<span class="quotelev1">&gt; make check for hdf5, the serial tests passed but none of the parallel tests
</span><br>
<span class="quotelev1">&gt; did.  Over a million test failures!  Error messages like:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Proc 0: *** MPIO File size range test...
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt; MPI_Offset is signed 8 bytes integeral type
</span><br>
<span class="quotelev3">&gt; &gt;&gt; MPIO GB file write test MPItest.h5
</span><br>
<span class="quotelev3">&gt; &gt;&gt; MPIO GB file write test MPItest.h5
</span><br>
<span class="quotelev3">&gt; &gt;&gt; MPIO GB file write test MPItest.h5
</span><br>
<span class="quotelev3">&gt; &gt;&gt; MPIO GB file write test MPItest.h5
</span><br>
<span class="quotelev3">&gt; &gt;&gt; MPIO GB file write test MPItest.h5
</span><br>
<span class="quotelev3">&gt; &gt;&gt; MPIO GB file write test MPItest.h5
</span><br>
<span class="quotelev3">&gt; &gt;&gt; MPIO GB file read test MPItest.h5
</span><br>
<span class="quotelev3">&gt; &gt;&gt; MPIO GB file read test MPItest.h5
</span><br>
<span class="quotelev3">&gt; &gt;&gt; MPIO GB file read test MPItest.h5
</span><br>
<span class="quotelev3">&gt; &gt;&gt; MPIO GB file read test MPItest.h5
</span><br>
<span class="quotelev3">&gt; &gt;&gt; proc 3: found data error at [2141192192+0], expect -6, got 5
</span><br>
<span class="quotelev3">&gt; &gt;&gt; proc 3: found data error at [2141192192+1], expect -6, got 5
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; And -- the specific errors reported, which processor, which location,
</span><br>
<span class="quotelev1">&gt; and the total number of errors changes if I rerun make check.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I've sent configure, make and make check logs to the HDF5 help desk but
</span><br>
<span class="quotelev1">&gt; haven't gotten a response.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I am now configuring openmpi (still 1.7.4rc1) with:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ./configure --prefix=/usr/local/openmpi CC=gcc CXX=g++ FC=gfortran
</span><br>
<span class="quotelev1">&gt; F77=gfortran --enable-static --with-pic --disable-dlopen
</span><br>
<span class="quotelev1">&gt; --enable-mpirun-prefix-by-default
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; and configuring HDF5 (version 1.8.12) with:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; configure --prefix=/usr/local/hdf5/par CC=mpicc CFLAGS=-fPIC FC=mpif90
</span><br>
<span class="quotelev1">&gt; FCFLAGS=-fPIC CXX=mpicxx CXXFLAGS=-fPIC --enable-parallel --enable-fortran
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; This is the combination that worked for me with Snow Leopard (though it
</span><br>
<span class="quotelev1">&gt; was then earlier versions of both openmpi and hdf5.)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; If it matters, the gcc is the stock one with Mavericks' XCode, and
</span><br>
<span class="quotelev1">&gt; gfortran is 4.9.0.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; (I just noticed that the mpi fortran wrapper is now mpifort, but I also
</span><br>
<span class="quotelev1">&gt; see that mpif90 is still there and is a just link to mpifort.)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Any suggestions?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Fri, Jan 17, 2014 at 8:14 AM, Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; sorry for delayed response - just getting back from travel. I don't
</span><br>
<span class="quotelev1">&gt; know why you would get that behavior other than a race condition. Afraid
</span><br>
<span class="quotelev1">&gt; that code path is foreign to me, but perhaps one of the folks in the MPI-IO
</span><br>
<span class="quotelev1">&gt; area can respond
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Jan 15, 2014, at 4:26 PM, Ronald Cohen &lt;rhcohen_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Update: I reconfigured with enable_io_romio=yes, and this time --
</span><br>
<span class="quotelev1">&gt; mostly -- the test using Sample_mpio.c  passes.   Oddly the very first time
</span><br>
<span class="quotelev1">&gt; I tried I got errors:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; % mpirun -np 2 sampleio
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Proc 1: hostname=Ron-Cohen-MBP.local
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Testing simple C MPIO program with 2 processes accessing file
</span><br>
<span class="quotelev1">&gt; ./mpitest.data
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;     (Filename can be specified via program argument)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Proc 0: hostname=Ron-Cohen-MBP.local
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Proc 1: read data[0:1] got 0, expect 1
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Proc 1: read data[0:2] got 0, expect 2
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Proc 1: read data[0:3] got 0, expect 3
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Proc 1: read data[0:4] got 0, expect 4
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Proc 1: read data[0:5] got 0, expect 5
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Proc 1: read data[0:6] got 0, expect 6
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Proc 1: read data[0:7] got 0, expect 7
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Proc 1: read data[0:8] got 0, expect 8
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Proc 1: read data[0:9] got 0, expect 9
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Proc 1: read data[1:0] got 0, expect 10
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Proc 1: read data[1:1] got 0, expect 11
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Proc 1: read data[1:2] got 0, expect 12
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Proc 1: read data[1:3] got 0, expect 13
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Proc 1: read data[1:4] got 0, expect 14
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Proc 1: read data[1:5] got 0, expect 15
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Proc 1: read data[1:6] got 0, expect 16
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Proc 1: read data[1:7] got 0, expect 17
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Proc 1: read data[1:8] got 0, expect 18
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Proc 1: read data[1:9] got 0, expect 19
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; MPI_ABORT was invoked on rank 1 in communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; with errorcode 1.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; But when I reran the same mpirun command, the test was successful.
</span><br>
<span class="quotelev1">&gt; And deleting the executable and recompiling and then again running the same
</span><br>
<span class="quotelev1">&gt; mpirun command, the test was successful.   Can someone explain that?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; On Wed, Jan 15, 2014 at 1:16 PM, Ronald Cohen &lt;rhcohen_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Aha.   I guess I didn't know what the io-romio option does.   If you
</span><br>
<span class="quotelev1">&gt; look at my config.log you will see my configure line included
</span><br>
<span class="quotelev1">&gt; --disable-io-romio.    Guess I should change --disable to --enable.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; You seem to imply that the nightly build is stable enough that I
</span><br>
<span class="quotelev1">&gt; should probably switch to that rather than 1.7.4rc1.   Am I reading between
</span><br>
<span class="quotelev1">&gt; the lines correctly?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; On Wed, Jan 15, 2014 at 10:56 AM, Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Oh, a word of caution on those config params - you might need to check
</span><br>
<span class="quotelev1">&gt; to ensure I don't disable romio in them. I don't normally build it as I
</span><br>
<span class="quotelev1">&gt; don't use it. Since that is what you are trying to use, just change the
</span><br>
<span class="quotelev1">&gt; &quot;no&quot; to &quot;yes&quot; (or delete that line altogether) and it will build.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; On Wed, Jan 15, 2014 at 10:53 AM, Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; You can find my configure options in the OMPI distribution at
</span><br>
<span class="quotelev1">&gt; contrib/platform/intel/bend/mac. You are welcome to use them - just
</span><br>
<span class="quotelev1">&gt; configure --with-platform=intel/bend/mac
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I work on the developer's trunk, of course, but also run the head of
</span><br>
<span class="quotelev1">&gt; the 1.7.4 branch (essentially the nightly tarball) on a fairly regular
</span><br>
<span class="quotelev1">&gt; basis.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; As for the opal_bitmap test: it wouldn't surprise me if that one was
</span><br>
<span class="quotelev1">&gt; stale. I can check on it later tonight, but I'd suspect that the test is
</span><br>
<span class="quotelev1">&gt; bad as we use that class in the code base and haven't seen an issue.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; On Wed, Jan 15, 2014 at 10:49 AM, Ronald Cohen &lt;rhcohen_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Ralph,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I just sent out another post with the c file attached.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; If you can get that to work, and even if you can't can you tell me
</span><br>
<span class="quotelev1">&gt; what configure options you use, and what version of open-mpi?   Thanks.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Ron
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; On Wed, Jan 15, 2014 at 10:36 AM, Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; BTW: could you send me your sample test code?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; On Wed, Jan 15, 2014 at 10:34 AM, Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I regularly build on Mavericks and run without problem, though I
</span><br>
<span class="quotelev1">&gt; haven't tried a parallel IO app. I'll give yours a try later, when I get
</span><br>
<span class="quotelev1">&gt; back to my Mac.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; On Wed, Jan 15, 2014 at 10:04 AM, Ronald Cohen &lt;rhcohen_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I have been struggling trying to get a usable build of openmpi on Mac
</span><br>
<span class="quotelev1">&gt; OSX Mavericks (10.9.1).  I can get openmpi to configure and build without
</span><br>
<span class="quotelev1">&gt; error, but have problems after that which depend on the openmpi version.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; With 1.6.5, make check fails the opal_datatype_test, ddt_test, and
</span><br>
<span class="quotelev1">&gt; ddt_raw tests.  The various atomic_* tests pass.    See checklogs_1.6.5,
</span><br>
<span class="quotelev1">&gt; attached as a .gz file.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Following suggestions from openmpi discussions I tried openmpi version
</span><br>
<span class="quotelev1">&gt; 1.7.4rc1.  In this case make check indicates all tests passed.  But when I
</span><br>
<span class="quotelev1">&gt; proceeded to try to build a parallel code (parallel HDF5) it failed.
</span><br>
<span class="quotelev1">&gt;  Following an email exchange with the HDF5 support people, they suggested I
</span><br>
<span class="quotelev1">&gt; try to compile and run the attached bit of simple code Sample_mpio.c (which
</span><br>
<span class="quotelev1">&gt; they supplied) which does not use any HDF5, but just attempts a parallel
</span><br>
<span class="quotelev1">&gt; write to a file and parallel read.   That test failed when requesting more
</span><br>
<span class="quotelev1">&gt; than 1 processor -- which they say indicates a failure of the openmpi
</span><br>
<span class="quotelev1">&gt; installation.   The error message was:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; MPI_INIT: argc 1
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; MPI_INIT: argc 1
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Testing simple C MPIO program with 2 processes accessing file
</span><br>
<span class="quotelev1">&gt; ./mpitest.data
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;     (Filename can be specified via program argument)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Proc 0: hostname=Ron-Cohen-MBP.local
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Proc 1: hostname=Ron-Cohen-MBP.local
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; MPI_BARRIER[0]: comm MPI_COMM_WORLD
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; MPI_BARRIER[1]: comm MPI_COMM_WORLD
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Proc 0: MPI_File_open with MPI_MODE_EXCL failed (MPI_ERR_FILE: invalid
</span><br>
<span class="quotelev1">&gt; file)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; MPI_ABORT[0]: comm MPI_COMM_WORLD errorcode 1
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; MPI_BCAST[1]: buffer 7fff5a483048 count 1 datatype MPI_INT root 0 comm
</span><br>
<span class="quotelev1">&gt; MPI_COMM_WORLD
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I then went back to my openmpi directories and tried running some of
</span><br>
<span class="quotelev1">&gt; the individual tests in the test and examples directories.  In particular
</span><br>
<span class="quotelev1">&gt; in test/class I found one test that seem to not be run as part of make
</span><br>
<span class="quotelev1">&gt; check which failed, even with one processor; this is opal_bitmap.  Not sure
</span><br>
<span class="quotelev1">&gt; if this is because 1.7.4rc1 is incomplete, or there is something wrong with
</span><br>
<span class="quotelev1">&gt; the installation, or maybe a 32 vs 64 bit thing?   The error message is
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; mpirun detected that one or more processes exited with non-zero
</span><br>
<span class="quotelev1">&gt; status, thus causing the job to be terminated. The first process to do so
</span><br>
<span class="quotelev1">&gt; was:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;   Process name: [[48805,1],0]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;   Exit code:    255
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Any suggestions?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; More generally has anyone out there gotten an openmpi build on
</span><br>
<span class="quotelev1">&gt; Mavericks to work with sufficient success that they can get the attached
</span><br>
<span class="quotelev1">&gt; Sample_mpio.c (or better yet, parallel HDF5) to build?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Details: Running Mac OS X 10.9.1 on a mid-2009 Macbook pro with 4 GB
</span><br>
<span class="quotelev1">&gt; memory; tried openmpi 1.6.5 and 1.7.4rc1.  Built openmpi against the stock
</span><br>
<span class="quotelev1">&gt; gcc that comes with XCode 5.0.2, and gfortran 4.9.0.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Files attached: config.log.gz, openmpialllog.gz (output of running
</span><br>
<span class="quotelev1">&gt; ompi_info --all), checklog2.gz (output of make.check in top openmpi
</span><br>
<span class="quotelev1">&gt;  directory).
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I am not attaching logs of make and install since those seem to have
</span><br>
<span class="quotelev1">&gt; been successful, but can generate those if that would be helpful.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23392/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23393.php">Brock Palen: "Re: [OMPI users] openmpi-1.6.5  intel 14.0 MPI-IO Errors"</a>
<li><strong>Previous message:</strong> <a href="23391.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Can't get a fully functional openmpi build on Mac OSX Mavericks"</a>
<li><strong>In reply to:</strong> <a href="23391.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Can't get a fully functional openmpi build on Mac OSX Mavericks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23395.php">Ralph Castain: "Re: [OMPI users] Can't get a fully functional openmpi build on Mac OSX Mavericks"</a>
<li><strong>Reply:</strong> <a href="23395.php">Ralph Castain: "Re: [OMPI users] Can't get a fully functional openmpi build on Mac OSX Mavericks"</a>
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
