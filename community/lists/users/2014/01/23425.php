<?
$subject_val = "Re: [OMPI users] Can't get a fully functional openmpi build on Mac OSX Mavericks";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 21 10:44:27 2014" -->
<!-- isoreceived="20140121154427" -->
<!-- sent="Tue, 21 Jan 2014 08:44:24 -0700" -->
<!-- isosent="20140121154424" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Can't get a fully functional openmpi build on Mac OSX Mavericks" -->
<!-- id="20140121154424.GD31559_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAMuam9PxL8T=jFDtekVqg2upwyw7MPYbUMn44-XS-BhxvyXsNA_at_mail.gmail.com" -->
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
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-21 10:44:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23426.php">Jeff Squyres (jsquyres): "Re: [OMPI users] simple test problem hangs on mpi_finalize	and	consumes all system resources"</a>
<li><strong>Previous message:</strong> <a href="23424.php">Syed Ahsan Ali: "Re: [OMPI users] Error message related to infiniband"</a>
<li><strong>In reply to:</strong> <a href="23398.php">Ronald Cohen: "Re: [OMPI users] Can't get a fully functional openmpi build on Mac OSX Mavericks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23383.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Can't get a fully functional openmpi build on Mac OSX Mavericks"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I found the problem. romio added a new flag to detect extern32. This
<br>
flag was never explicity set by romio but instead by the use of calloc
<br>
in the mpich romio glue. The Open MPI romio glue still used malloc. I
<br>
fixed this on trunk and cmr'd to 1.7.4.
<br>
<p>-Nathan
<br>
<p>On Fri, Jan 17, 2014 at 01:40:43PM -0800, Ronald Cohen wrote:
<br>
<span class="quotelev1">&gt;    Thanks.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    For what it is worth, it looks like I now have a successful build of
</span><br>
<span class="quotelev1">&gt;    open-mpi plus hdf5.   With the caveat (see pasted note below from the HDF5
</span><br>
<span class="quotelev1">&gt;    support desk) about make check-p from hdf5.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    For anyone else trying to get hdf5 going with openmpi on mavericks, here
</span><br>
<span class="quotelev1">&gt;    are the configure combinations that seem to work.  This was with openmpi
</span><br>
<span class="quotelev1">&gt;    1.7.3, hdf5 1.8.12, Mac OS X 10.9.1, the gcc that comes with XCode 5.0.2,
</span><br>
<span class="quotelev1">&gt;    and gfortran 4.9:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    For openmpi:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    configure --prefix=/usr/local/openmpi CC=gcc CXX=g++ FC=gfortran
</span><br>
<span class="quotelev1">&gt;    F77=gfortran --enable-static --with-pic --disable-dlopen
</span><br>
<span class="quotelev1">&gt;    --enable-mpirun-prefix-by-default
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    For hdf5:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    configure --prefix=/usr/local/hdf5/par CC=mpicc CFLAGS=-fPIC FC=mpifort
</span><br>
<span class="quotelev1">&gt;    FCFLAGS=-fPIC CXX=mpicxx CXXFLAGS=-fPIC --enable-parallel --enable-fortran
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Thanks, all.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Ron
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    On Fri, Jan 17, 2014 at 12:29 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      We did update ROMIO at some point in there, so it is possible this is a
</span><br>
<span class="quotelev1">&gt;      ROMIO bug that we have picked up. I've asked someone to check upstream
</span><br>
<span class="quotelev1">&gt;      about it.
</span><br>
<span class="quotelev1">&gt;      On Jan 17, 2014, at 12:02 PM, Ronald Cohen &lt;rhcohen_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        Sorry, too many entries in this thread, I guess.  My general goal is
</span><br>
<span class="quotelev1">&gt;        to get a working parallel hdf5 with openmpi on Mac OS X Mavericks.  At
</span><br>
<span class="quotelev1">&gt;        one point in the saga I had romio disabled, which naturally doesn't
</span><br>
<span class="quotelev1">&gt;        work for hdf5 (which is trying to read/write files in parallel).  So
</span><br>
<span class="quotelev1">&gt;        the hdf5 tests would of course fail.    I subsequently had link errors
</span><br>
<span class="quotelev1">&gt;        with hdf5 because I was building openmpi with --disable-static,
</span><br>
<span class="quotelev1">&gt;        whereas the default (and recommended) option for hdf5 is to disable
</span><br>
<span class="quotelev1">&gt;        shared and build static.  My most recent attempts were with openmpi
</span><br>
<span class="quotelev1">&gt;        with enable-static, enable-nodlopen.  In that case, with openmpi
</span><br>
<span class="quotelev1">&gt;        1.7.4rc1, hdf5 1.8.12 configured and built successfully but make
</span><br>
<span class="quotelev1">&gt;        chek-p produced many errors in its t-mpi tests, with messages like
</span><br>
<span class="quotelev1">&gt;        &quot;proc 4: found data error at [2140143616+0], expect -7, got 6&quot;.   The
</span><br>
<span class="quotelev1">&gt;        errors were reproduced by the HDF5 testing team with openmpir
</span><br>
<span class="quotelev1">&gt;        1.7.4rc1, but not with 1.7.3 (which I am now building).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        Hopefully that is an adequate summary.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        Ron
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        On Fri, Jan 17, 2014 at 11:44 AM, Jeff Squyres (jsquyres)
</span><br>
<span class="quotelev1">&gt;        &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;          Can you specify exactly which issue you're referring to?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;          - test failing when you had ROMIO disabled
</span><br>
<span class="quotelev1">&gt;          - test (sometimes) failing when you had ROMIO disabled
</span><br>
<span class="quotelev1">&gt;          - compiling / linking issues
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;          ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;          On Jan 17, 2014, at 1:50 PM, Ronald Cohen &lt;rhcohen_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;          &gt; Hello Ralph and others, I just got the following back from the
</span><br>
<span class="quotelev1">&gt;          HDF-5 support group, suggesting an ompi bug.   So I should either
</span><br>
<span class="quotelev1">&gt;          try 1.7.3 or a recent nightly 1.7.4.    Will likely opt for 1.7.3,
</span><br>
<span class="quotelev1">&gt;          but hopefully someone at openmpi can look at the problem for 1.7.4.
</span><br>
<span class="quotelev1">&gt;            In short, the challenge is to get a parallel hdf5 that passes make
</span><br>
<span class="quotelev1">&gt;          check-p with 1.7.4.
</span><br>
<span class="quotelev2">&gt;          &gt;
</span><br>
<span class="quotelev2">&gt;          &gt;
</span><br>
<span class="quotelev2">&gt;          &gt;
</span><br>
<span class="quotelev2">&gt;          &gt;
</span><br>
<span class="quotelev2">&gt;          &gt;
</span><br>
<span class="quotelev2">&gt;          &gt; ------------------
</span><br>
<span class="quotelev2">&gt;          &gt; Hi Ron,
</span><br>
<span class="quotelev2">&gt;          &gt;
</span><br>
<span class="quotelev2">&gt;          &gt; I had sent your message to the developer and he can reproduce the
</span><br>
<span class="quotelev1">&gt;          issue.
</span><br>
<span class="quotelev2">&gt;          &gt; Here is what he says:
</span><br>
<span class="quotelev2">&gt;          &gt;
</span><br>
<span class="quotelev2">&gt;          &gt;  ---
</span><br>
<span class="quotelev2">&gt;          &gt;  I replicated this on Jam with ompi 1.7.4rc1. I saw the same error
</span><br>
<span class="quotelev1">&gt;          he is seeing.
</span><br>
<span class="quotelev2">&gt;          &gt;  Note that this is an un-stable release for ompi.
</span><br>
<span class="quotelev2">&gt;          &gt;  I tried ompi 1.7.3 (feature - little more stable release). I
</span><br>
<span class="quotelev1">&gt;          didn't see the
</span><br>
<span class="quotelev2">&gt;          &gt;  problems there.
</span><br>
<span class="quotelev2">&gt;          &gt;
</span><br>
<span class="quotelev2">&gt;          &gt;  So this is an ompi bug. He can report it to the ompi list. He can
</span><br>
<span class="quotelev1">&gt;          just point
</span><br>
<span class="quotelev2">&gt;          &gt;  them to the t_mpi.c tests in our test suite in testpar/ and say
</span><br>
<span class="quotelev1">&gt;          it occurs with
</span><br>
<span class="quotelev2">&gt;          &gt;  their 1.7.4 rc1.
</span><br>
<span class="quotelev2">&gt;          &gt;  ---
</span><br>
<span class="quotelev2">&gt;          &gt;
</span><br>
<span class="quotelev2">&gt;          &gt; -Barbara
</span><br>
<span class="quotelev2">&gt;          &gt;
</span><br>
<span class="quotelev2">&gt;          &gt;
</span><br>
<span class="quotelev2">&gt;          &gt;
</span><br>
<span class="quotelev2">&gt;          &gt; On Fri, Jan 17, 2014 at 9:39 AM, Ronald Cohen &lt;rhcohen_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;          wrote:
</span><br>
<span class="quotelev2">&gt;          &gt; Thanks, I've just gotten an email with some suggestions (and
</span><br>
<span class="quotelev1">&gt;          promise of more help) from the HDF5 support team.   I will report
</span><br>
<span class="quotelev1">&gt;          back here, as it may be of interest to others trying to build hdf5
</span><br>
<span class="quotelev1">&gt;          on mavericks.
</span><br>
<span class="quotelev2">&gt;          &gt;
</span><br>
<span class="quotelev2">&gt;          &gt;
</span><br>
<span class="quotelev2">&gt;          &gt; On Fri, Jan 17, 2014 at 9:08 AM, Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;          wrote:
</span><br>
<span class="quotelev2">&gt;          &gt; Afraid I have no idea, but hopefully someone else here with
</span><br>
<span class="quotelev1">&gt;          experience with HDF5 can chime in?
</span><br>
<span class="quotelev2">&gt;          &gt;
</span><br>
<span class="quotelev2">&gt;          &gt;
</span><br>
<span class="quotelev2">&gt;          &gt; On Jan 17, 2014, at 9:03 AM, Ronald Cohen &lt;rhcohen_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;          &gt;
</span><br>
<span class="quotelev3">&gt;          &gt;&gt; Still a timely response, thank you.    The particular problem I
</span><br>
<span class="quotelev1">&gt;          noted hasn't recurred; for reasons I will explain shortly I had to
</span><br>
<span class="quotelev1">&gt;          rebuild openmpi again, and this time Sample_mpio.c compiled and ran
</span><br>
<span class="quotelev1">&gt;          successfully from the start.
</span><br>
<span class="quotelev3">&gt;          &gt;&gt;
</span><br>
<span class="quotelev3">&gt;          &gt;&gt; But now my problem is trying to get parallel HDF5 to run.  In my
</span><br>
<span class="quotelev1">&gt;          first attempt to build HDF5 it failed in the load stage because of
</span><br>
<span class="quotelev1">&gt;          unsatisifed externals from openmpi, and I deduced the problem was
</span><br>
<span class="quotelev1">&gt;          having built openmpi with --disable-static.   So I rebuilt with
</span><br>
<span class="quotelev1">&gt;          --enable-static and --disable-dlopen (emulating a successful openmpi
</span><br>
<span class="quotelev1">&gt;          + hdf5 combination I had built on Snow Leopard).   Once again
</span><br>
<span class="quotelev1">&gt;          openmpi passed its make check's, and as noted above the
</span><br>
<span class="quotelev1">&gt;          Sample_mpio.c test compiled and ran fine.   And the parallel hdf5
</span><br>
<span class="quotelev1">&gt;          configure and make steps ran successfully.   But when I ran make
</span><br>
<span class="quotelev1">&gt;          check for hdf5, the serial tests passed but none of the parallel
</span><br>
<span class="quotelev1">&gt;          tests did.  Over a million test failures!  Error messages like:
</span><br>
<span class="quotelev3">&gt;          &gt;&gt;
</span><br>
<span class="quotelev3">&gt;          &gt;&gt; Proc 0: *** MPIO File size range test...
</span><br>
<span class="quotelev3">&gt;          &gt;&gt; --------------------------------
</span><br>
<span class="quotelev3">&gt;          &gt;&gt; MPI_Offset is signed 8 bytes integeral type
</span><br>
<span class="quotelev3">&gt;          &gt;&gt; MPIO GB file write test MPItest.h5
</span><br>
<span class="quotelev3">&gt;          &gt;&gt; MPIO GB file write test MPItest.h5
</span><br>
<span class="quotelev3">&gt;          &gt;&gt; MPIO GB file write test MPItest.h5
</span><br>
<span class="quotelev3">&gt;          &gt;&gt; MPIO GB file write test MPItest.h5
</span><br>
<span class="quotelev3">&gt;          &gt;&gt; MPIO GB file write test MPItest.h5
</span><br>
<span class="quotelev3">&gt;          &gt;&gt; MPIO GB file write test MPItest.h5
</span><br>
<span class="quotelev3">&gt;          &gt;&gt; MPIO GB file read test MPItest.h5
</span><br>
<span class="quotelev3">&gt;          &gt;&gt; MPIO GB file read test MPItest.h5
</span><br>
<span class="quotelev3">&gt;          &gt;&gt; MPIO GB file read test MPItest.h5
</span><br>
<span class="quotelev3">&gt;          &gt;&gt; MPIO GB file read test MPItest.h5
</span><br>
<span class="quotelev3">&gt;          &gt;&gt; proc 3: found data error at [2141192192+0], expect -6, got 5
</span><br>
<span class="quotelev3">&gt;          &gt;&gt; proc 3: found data error at [2141192192+1], expect -6, got 5
</span><br>
<span class="quotelev3">&gt;          &gt;&gt;
</span><br>
<span class="quotelev3">&gt;          &gt;&gt; And -- the specific errors reported, which processor, which
</span><br>
<span class="quotelev1">&gt;          location, and the total number of errors changes if I rerun make
</span><br>
<span class="quotelev1">&gt;          check.
</span><br>
<span class="quotelev3">&gt;          &gt;&gt;
</span><br>
<span class="quotelev3">&gt;          &gt;&gt; I've sent configure, make and make check logs to the HDF5 help
</span><br>
<span class="quotelev1">&gt;          desk but haven't gotten a response.
</span><br>
<span class="quotelev3">&gt;          &gt;&gt;
</span><br>
<span class="quotelev3">&gt;          &gt;&gt; I am now configuring openmpi (still 1.7.4rc1) with:
</span><br>
<span class="quotelev3">&gt;          &gt;&gt;
</span><br>
<span class="quotelev3">&gt;          &gt;&gt; ./configure --prefix=/usr/local/openmpi CC=gcc CXX=g++
</span><br>
<span class="quotelev1">&gt;          FC=gfortran F77=gfortran --enable-static --with-pic --disable-dlopen
</span><br>
<span class="quotelev1">&gt;          --enable-mpirun-prefix-by-default
</span><br>
<span class="quotelev3">&gt;          &gt;&gt;
</span><br>
<span class="quotelev3">&gt;          &gt;&gt; and configuring HDF5 (version 1.8.12) with:
</span><br>
<span class="quotelev3">&gt;          &gt;&gt;
</span><br>
<span class="quotelev3">&gt;          &gt;&gt; configure --prefix=/usr/local/hdf5/par CC=mpicc CFLAGS=-fPIC
</span><br>
<span class="quotelev1">&gt;          FC=mpif90 FCFLAGS=-fPIC CXX=mpicxx CXXFLAGS=-fPIC --enable-parallel
</span><br>
<span class="quotelev1">&gt;          --enable-fortran
</span><br>
<span class="quotelev3">&gt;          &gt;&gt;
</span><br>
<span class="quotelev3">&gt;          &gt;&gt; This is the combination that worked for me with Snow Leopard
</span><br>
<span class="quotelev1">&gt;          (though it was then earlier versions of both openmpi and hdf5.)
</span><br>
<span class="quotelev3">&gt;          &gt;&gt;
</span><br>
<span class="quotelev3">&gt;          &gt;&gt; If it matters, the gcc is the stock one with Mavericks' XCode,
</span><br>
<span class="quotelev1">&gt;          and gfortran is 4.9.0.
</span><br>
<span class="quotelev3">&gt;          &gt;&gt;
</span><br>
<span class="quotelev3">&gt;          &gt;&gt; (I just noticed that the mpi fortran wrapper is now mpifort, but
</span><br>
<span class="quotelev1">&gt;          I also see that mpif90 is still there and is a just link to
</span><br>
<span class="quotelev1">&gt;          mpifort.)
</span><br>
<span class="quotelev3">&gt;          &gt;&gt;
</span><br>
<span class="quotelev3">&gt;          &gt;&gt; Any suggestions?
</span><br>
<span class="quotelev3">&gt;          &gt;&gt;
</span><br>
<span class="quotelev3">&gt;          &gt;&gt;
</span><br>
<span class="quotelev3">&gt;          &gt;&gt; On Fri, Jan 17, 2014 at 8:14 AM, Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;          wrote:
</span><br>
<span class="quotelev3">&gt;          &gt;&gt; sorry for delayed response - just getting back from travel. I
</span><br>
<span class="quotelev1">&gt;          don't know why you would get that behavior other than a race
</span><br>
<span class="quotelev1">&gt;          condition. Afraid that code path is foreign to me, but perhaps one
</span><br>
<span class="quotelev1">&gt;          of the folks in the MPI-IO area can respond
</span><br>
<span class="quotelev3">&gt;          &gt;&gt;
</span><br>
<span class="quotelev3">&gt;          &gt;&gt;
</span><br>
<span class="quotelev3">&gt;          &gt;&gt; On Jan 15, 2014, at 4:26 PM, Ronald Cohen &lt;rhcohen_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;          wrote:
</span><br>
<span class="quotelev3">&gt;          &gt;&gt;
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt; Update: I reconfigured with enable_io_romio=yes, and this time
</span><br>
<span class="quotelev1">&gt;          -- mostly -- the test using Sample_mpio.c  passes.   Oddly the very
</span><br>
<span class="quotelev1">&gt;          first time I tried I got errors:
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt; % mpirun -np 2 sampleio
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt; Proc 1: hostname=Ron-Cohen-MBP.local
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt; Testing simple C MPIO program with 2 processes accessing file
</span><br>
<span class="quotelev1">&gt;          ./mpitest.data
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt;     (Filename can be specified via program argument)
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt; Proc 0: hostname=Ron-Cohen-MBP.local
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt; Proc 1: read data[0:1] got 0, expect 1
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt; Proc 1: read data[0:2] got 0, expect 2
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt; Proc 1: read data[0:3] got 0, expect 3
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt; Proc 1: read data[0:4] got 0, expect 4
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt; Proc 1: read data[0:5] got 0, expect 5
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt; Proc 1: read data[0:6] got 0, expect 6
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt; Proc 1: read data[0:7] got 0, expect 7
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt; Proc 1: read data[0:8] got 0, expect 8
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt; Proc 1: read data[0:9] got 0, expect 9
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt; Proc 1: read data[1:0] got 0, expect 10
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt; Proc 1: read data[1:1] got 0, expect 11
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt; Proc 1: read data[1:2] got 0, expect 12
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt; Proc 1: read data[1:3] got 0, expect 13
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt; Proc 1: read data[1:4] got 0, expect 14
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt; Proc 1: read data[1:5] got 0, expect 15
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt; Proc 1: read data[1:6] got 0, expect 16
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt; Proc 1: read data[1:7] got 0, expect 17
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt; Proc 1: read data[1:8] got 0, expect 18
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt; Proc 1: read data[1:9] got 0, expect 19
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;          --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt; MPI_ABORT was invoked on rank 1 in communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt; with errorcode 1.
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt; But when I reran the same mpirun command, the test was
</span><br>
<span class="quotelev1">&gt;          successful.   And deleting the executable and recompiling and then
</span><br>
<span class="quotelev1">&gt;          again running the same mpirun command, the test was successful.  
</span><br>
<span class="quotelev1">&gt;          Can someone explain that?
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt; On Wed, Jan 15, 2014 at 1:16 PM, Ronald Cohen &lt;rhcohen_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;          wrote:
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt; Aha.   I guess I didn't know what the io-romio option does.   If
</span><br>
<span class="quotelev1">&gt;          you look at my config.log you will see my configure line included
</span><br>
<span class="quotelev1">&gt;          --disable-io-romio.    Guess I should change --disable to --enable.
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt; You seem to imply that the nightly build is stable enough that I
</span><br>
<span class="quotelev1">&gt;          should probably switch to that rather than 1.7.4rc1.   Am I reading
</span><br>
<span class="quotelev1">&gt;          between the lines correctly?
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt; On Wed, Jan 15, 2014 at 10:56 AM, Ralph Castain
</span><br>
<span class="quotelev1">&gt;          &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt; Oh, a word of caution on those config params - you might need to
</span><br>
<span class="quotelev1">&gt;          check to ensure I don't disable romio in them. I don't normally
</span><br>
<span class="quotelev1">&gt;          build it as I don't use it. Since that is what you are trying to
</span><br>
<span class="quotelev1">&gt;          use, just change the &quot;no&quot; to &quot;yes&quot; (or delete that line altogether)
</span><br>
<span class="quotelev1">&gt;          and it will build.
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt; On Wed, Jan 15, 2014 at 10:53 AM, Ralph Castain
</span><br>
<span class="quotelev1">&gt;          &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt; You can find my configure options in the OMPI distribution at
</span><br>
<span class="quotelev1">&gt;          contrib/platform/intel/bend/mac. You are welcome to use them - just
</span><br>
<span class="quotelev1">&gt;          configure --with-platform=intel/bend/mac
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt; I work on the developer's trunk, of course, but also run the
</span><br>
<span class="quotelev1">&gt;          head of the 1.7.4 branch (essentially the nightly tarball) on a
</span><br>
<span class="quotelev1">&gt;          fairly regular basis.
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt; As for the opal_bitmap test: it wouldn't surprise me if that one
</span><br>
<span class="quotelev1">&gt;          was stale. I can check on it later tonight, but I'd suspect that the
</span><br>
<span class="quotelev1">&gt;          test is bad as we use that class in the code base and haven't seen
</span><br>
<span class="quotelev1">&gt;          an issue.
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt; On Wed, Jan 15, 2014 at 10:49 AM, Ronald Cohen &lt;rhcohen_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;          wrote:
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt; Ralph,
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt; I just sent out another post with the c file attached.
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt; If you can get that to work, and even if you can't can you tell
</span><br>
<span class="quotelev1">&gt;          me what configure options you use, and what version of open-mpi?  
</span><br>
<span class="quotelev1">&gt;          Thanks.
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt; Ron
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt; On Wed, Jan 15, 2014 at 10:36 AM, Ralph Castain
</span><br>
<span class="quotelev1">&gt;          &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt; BTW: could you send me your sample test code?
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt; On Wed, Jan 15, 2014 at 10:34 AM, Ralph Castain
</span><br>
<span class="quotelev1">&gt;          &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt; I regularly build on Mavericks and run without problem, though I
</span><br>
<span class="quotelev1">&gt;          haven't tried a parallel IO app. I'll give yours a try later, when I
</span><br>
<span class="quotelev1">&gt;          get back to my Mac.
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt; On Wed, Jan 15, 2014 at 10:04 AM, Ronald Cohen &lt;rhcohen_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;          wrote:
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt; I have been struggling trying to get a usable build of openmpi
</span><br>
<span class="quotelev1">&gt;          on Mac OSX Mavericks (10.9.1).  I can get openmpi to configure and
</span><br>
<span class="quotelev1">&gt;          build without error, but have problems after that which depend on
</span><br>
<span class="quotelev1">&gt;          the openmpi version.
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt; With 1.6.5, make check fails the opal_datatype_test, ddt_test,
</span><br>
<span class="quotelev1">&gt;          and ddt_raw tests.  The various atomic_* tests pass.    See
</span><br>
<span class="quotelev1">&gt;          checklogs_1.6.5, attached as a .gz file.
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt; Following suggestions from openmpi discussions I tried openmpi
</span><br>
<span class="quotelev1">&gt;          version 1.7.4rc1.  In this case make check indicates all tests
</span><br>
<span class="quotelev1">&gt;          passed.  But when I proceeded to try to build a parallel code
</span><br>
<span class="quotelev1">&gt;          (parallel HDF5) it failed.  Following an email exchange with the
</span><br>
<span class="quotelev1">&gt;          HDF5 support people, they suggested I try to compile and run the
</span><br>
<span class="quotelev1">&gt;          attached bit of simple code Sample_mpio.c (which they supplied)
</span><br>
<span class="quotelev1">&gt;          which does not use any HDF5, but just attempts a parallel write to a
</span><br>
<span class="quotelev1">&gt;          file and parallel read.   That test failed when requesting more than
</span><br>
<span class="quotelev1">&gt;          1 processor -- which they say indicates a failure of the openmpi
</span><br>
<span class="quotelev1">&gt;          installation.   The error message was:
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt; MPI_INIT: argc 1
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt; MPI_INIT: argc 1
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt; Testing simple C MPIO program with 2 processes accessing file
</span><br>
<span class="quotelev1">&gt;          ./mpitest.data
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt;     (Filename can be specified via program argument)
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt; Proc 0: hostname=Ron-Cohen-MBP.local
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt; Proc 1: hostname=Ron-Cohen-MBP.local
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt; MPI_BARRIER[0]: comm MPI_COMM_WORLD
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt; MPI_BARRIER[1]: comm MPI_COMM_WORLD
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt; Proc 0: MPI_File_open with MPI_MODE_EXCL failed (MPI_ERR_FILE:
</span><br>
<span class="quotelev1">&gt;          invalid file)
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt; MPI_ABORT[0]: comm MPI_COMM_WORLD errorcode 1
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt; MPI_BCAST[1]: buffer 7fff5a483048 count 1 datatype MPI_INT root
</span><br>
<span class="quotelev1">&gt;          0 comm MPI_COMM_WORLD
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt; I then went back to my openmpi directories and tried running
</span><br>
<span class="quotelev1">&gt;          some of the individual tests in the test and examples directories.
</span><br>
<span class="quotelev1">&gt;           In particular in test/class I found one test that seem to not be
</span><br>
<span class="quotelev1">&gt;          run as part of make check which failed, even with one processor;
</span><br>
<span class="quotelev1">&gt;          this is opal_bitmap.  Not sure if this is because 1.7.4rc1 is
</span><br>
<span class="quotelev1">&gt;          incomplete, or there is something wrong with the installation, or
</span><br>
<span class="quotelev1">&gt;          maybe a 32 vs 64 bit thing?   The error message is
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt; mpirun detected that one or more processes exited with non-zero
</span><br>
<span class="quotelev1">&gt;          status, thus causing the job to be terminated. The first process to
</span><br>
<span class="quotelev1">&gt;          do so was:
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt;   Process name: [[48805,1],0]
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt;   Exit code:    255
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt; Any suggestions?
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt; More generally has anyone out there gotten an openmpi build on
</span><br>
<span class="quotelev1">&gt;          Mavericks to work with sufficient success that they can get the
</span><br>
<span class="quotelev1">&gt;          attached Sample_mpio.c (or better yet, parallel HDF5) to build?
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt; Details: Running Mac OS X 10.9.1 on a mid-2009 Macbook pro with
</span><br>
<span class="quotelev1">&gt;          4 GB memory; tried openmpi 1.6.5 and 1.7.4rc1.  Built openmpi
</span><br>
<span class="quotelev1">&gt;          against the stock gcc that comes with XCode 5.0.2, and gfortran
</span><br>
<span class="quotelev1">&gt;          4.9.0.
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt; Files attached: config.log.gz, openmpialllog.gz (output of
</span><br>
<span class="quotelev1">&gt;          running ompi_info --all), checklog2.gz (output of make.check in top
</span><br>
<span class="quotelev1">&gt;          openmpi  directory).
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt; I am not attaching logs of make and install since those seem to
</span><br>
<span class="quotelev1">&gt;          have been successful, but can generate those if that would be
</span><br>
<span class="quotelev1">&gt;          helpful.
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;          &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;          &gt;&gt;
</span><br>
<span class="quotelev3">&gt;          &gt;&gt;
</span><br>
<span class="quotelev3">&gt;          &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;          &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;          &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;          &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;          &gt;&gt;
</span><br>
<span class="quotelev3">&gt;          &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;          &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;          &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;          &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;          &gt;
</span><br>
<span class="quotelev2">&gt;          &gt;
</span><br>
<span class="quotelev2">&gt;          &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;          &gt; users mailing list
</span><br>
<span class="quotelev2">&gt;          &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;          &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;          &gt;
</span><br>
<span class="quotelev2">&gt;          &gt;
</span><br>
<span class="quotelev2">&gt;          &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;          &gt; users mailing list
</span><br>
<span class="quotelev2">&gt;          &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;          &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;          --
</span><br>
<span class="quotelev1">&gt;          Jeff Squyres
</span><br>
<span class="quotelev1">&gt;          jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt;          For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt;          <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;          _______________________________________________
</span><br>
<span class="quotelev1">&gt;          users mailing list
</span><br>
<span class="quotelev1">&gt;          users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;          <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        _______________________________________________
</span><br>
<span class="quotelev1">&gt;        users mailing list
</span><br>
<span class="quotelev1">&gt;        users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;        <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      _______________________________________________
</span><br>
<span class="quotelev1">&gt;      users mailing list
</span><br>
<span class="quotelev1">&gt;      users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;      <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23425/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23426.php">Jeff Squyres (jsquyres): "Re: [OMPI users] simple test problem hangs on mpi_finalize	and	consumes all system resources"</a>
<li><strong>Previous message:</strong> <a href="23424.php">Syed Ahsan Ali: "Re: [OMPI users] Error message related to infiniband"</a>
<li><strong>In reply to:</strong> <a href="23398.php">Ronald Cohen: "Re: [OMPI users] Can't get a fully functional openmpi build on Mac OSX Mavericks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23383.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Can't get a fully functional openmpi build on Mac OSX Mavericks"</a>
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
