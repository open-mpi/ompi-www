<?
$subject_val = "Re: [OMPI users] Can't get a fully functional openmpi build on Mac OSX Mavericks";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 17 13:19:18 2014" -->
<!-- isoreceived="20140117181918" -->
<!-- sent="Fri, 17 Jan 2014 10:19:14 -0800" -->
<!-- isosent="20140117181914" -->
<!-- name="Ronald Cohen" -->
<!-- email="rhcohen_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Can't get a fully functional openmpi build on Mac OSX Mavericks" -->
<!-- id="CAMuam9PJm2qwEJTo9Wr3ZXN9_+Zb=W2LcK+ATLCj=hBnnha_3Q_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AD31AE43-67D5-4B04-897A-4D3B3B88F29F_at_cisco.com" -->
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
<strong>Date:</strong> 2014-01-17 13:19:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23386.php">Ronald Cohen: "Re: [OMPI users] Can't get a fully functional openmpi build on Mac OSX Mavericks"</a>
<li><strong>Previous message:</strong> <a href="23384.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Can't get a fully functional openmpi build on Mac OSX Mavericks"</a>
<li><strong>In reply to:</strong> <a href="23383.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Can't get a fully functional openmpi build on Mac OSX Mavericks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23362.php">Ronald Cohen: "Re: [OMPI users] Can't get a fully functional openmpi build on Mac OSX Mavericks"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Good suggestions, and thanks!   But since I haven't been able to get the
<br>
problem to recur and I'm stuck now on other issues related to getting
<br>
parallel hdf5 to pass its make check, I will likely not follow up on this
<br>
particular (non-recurring) issue (except maybe I should forward your
<br>
comments to the HDF5 support team, since this is their test.)
<br>
<p><p>On Fri, Jan 17, 2014 at 10:12 AM, Jeff Squyres (jsquyres) &lt;
<br>
jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I'm looking at your code, and I'm not actually an expert in the MPI IO
</span><br>
<span class="quotelev1">&gt; sutff... but do you have a race condition in the file close+delete and the
</span><br>
<span class="quotelev1">&gt; open with EXCL?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm asking because I don't know offhand if the the file close+delete is
</span><br>
<span class="quotelev1">&gt; supposed to be collective and not return until the file is guaranteed to be
</span><br>
<span class="quotelev1">&gt; deleted, as visible from all MPI processes, or not.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If this guarantee is not provided, then perhaps a barrier between the
</span><br>
<span class="quotelev1">&gt; close+delete and the next file_open should be sufficient to avoid the
</span><br>
<span class="quotelev1">&gt; race...?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 15, 2014, at 7:26 PM, Ronald Cohen &lt;rhcohen_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Update: I reconfigured with enable_io_romio=yes, and this time -- mostly
</span><br>
<span class="quotelev1">&gt; -- the test using Sample_mpio.c  passes.   Oddly the very first time I
</span><br>
<span class="quotelev1">&gt; tried I got errors:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; % mpirun -np 2 sampleio
</span><br>
<span class="quotelev2">&gt; &gt; Proc 1: hostname=Ron-Cohen-MBP.local
</span><br>
<span class="quotelev2">&gt; &gt; Testing simple C MPIO program with 2 processes accessing file
</span><br>
<span class="quotelev1">&gt; ./mpitest.data
</span><br>
<span class="quotelev2">&gt; &gt;     (Filename can be specified via program argument)
</span><br>
<span class="quotelev2">&gt; &gt; Proc 0: hostname=Ron-Cohen-MBP.local
</span><br>
<span class="quotelev2">&gt; &gt; Proc 1: read data[0:1] got 0, expect 1
</span><br>
<span class="quotelev2">&gt; &gt; Proc 1: read data[0:2] got 0, expect 2
</span><br>
<span class="quotelev2">&gt; &gt; Proc 1: read data[0:3] got 0, expect 3
</span><br>
<span class="quotelev2">&gt; &gt; Proc 1: read data[0:4] got 0, expect 4
</span><br>
<span class="quotelev2">&gt; &gt; Proc 1: read data[0:5] got 0, expect 5
</span><br>
<span class="quotelev2">&gt; &gt; Proc 1: read data[0:6] got 0, expect 6
</span><br>
<span class="quotelev2">&gt; &gt; Proc 1: read data[0:7] got 0, expect 7
</span><br>
<span class="quotelev2">&gt; &gt; Proc 1: read data[0:8] got 0, expect 8
</span><br>
<span class="quotelev2">&gt; &gt; Proc 1: read data[0:9] got 0, expect 9
</span><br>
<span class="quotelev2">&gt; &gt; Proc 1: read data[1:0] got 0, expect 10
</span><br>
<span class="quotelev2">&gt; &gt; Proc 1: read data[1:1] got 0, expect 11
</span><br>
<span class="quotelev2">&gt; &gt; Proc 1: read data[1:2] got 0, expect 12
</span><br>
<span class="quotelev2">&gt; &gt; Proc 1: read data[1:3] got 0, expect 13
</span><br>
<span class="quotelev2">&gt; &gt; Proc 1: read data[1:4] got 0, expect 14
</span><br>
<span class="quotelev2">&gt; &gt; Proc 1: read data[1:5] got 0, expect 15
</span><br>
<span class="quotelev2">&gt; &gt; Proc 1: read data[1:6] got 0, expect 16
</span><br>
<span class="quotelev2">&gt; &gt; Proc 1: read data[1:7] got 0, expect 17
</span><br>
<span class="quotelev2">&gt; &gt; Proc 1: read data[1:8] got 0, expect 18
</span><br>
<span class="quotelev2">&gt; &gt; Proc 1: read data[1:9] got 0, expect 19
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; MPI_ABORT was invoked on rank 1 in communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev2">&gt; &gt; with errorcode 1.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; But when I reran the same mpirun command, the test was successful.   And
</span><br>
<span class="quotelev1">&gt; deleting the executable and recompiling and then again running the same
</span><br>
<span class="quotelev1">&gt; mpirun command, the test was successful.   Can someone explain that?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Wed, Jan 15, 2014 at 1:16 PM, Ronald Cohen &lt;rhcohen_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Aha.   I guess I didn't know what the io-romio option does.   If you
</span><br>
<span class="quotelev1">&gt; look at my config.log you will see my configure line included
</span><br>
<span class="quotelev1">&gt; --disable-io-romio.    Guess I should change --disable to --enable.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; You seem to imply that the nightly build is stable enough that I should
</span><br>
<span class="quotelev1">&gt; probably switch to that rather than 1.7.4rc1.   Am I reading between the
</span><br>
<span class="quotelev1">&gt; lines correctly?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Wed, Jan 15, 2014 at 10:56 AM, Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Oh, a word of caution on those config params - you might need to check
</span><br>
<span class="quotelev1">&gt; to ensure I don't disable romio in them. I don't normally build it as I
</span><br>
<span class="quotelev1">&gt; don't use it. Since that is what you are trying to use, just change the
</span><br>
<span class="quotelev1">&gt; &quot;no&quot; to &quot;yes&quot; (or delete that line altogether) and it will build.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Wed, Jan 15, 2014 at 10:53 AM, Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; You can find my configure options in the OMPI distribution at
</span><br>
<span class="quotelev1">&gt; contrib/platform/intel/bend/mac. You are welcome to use them - just
</span><br>
<span class="quotelev1">&gt; configure --with-platform=intel/bend/mac
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I work on the developer's trunk, of course, but also run the head of the
</span><br>
<span class="quotelev1">&gt; 1.7.4 branch (essentially the nightly tarball) on a fairly regular basis.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; As for the opal_bitmap test: it wouldn't surprise me if that one was
</span><br>
<span class="quotelev1">&gt; stale. I can check on it later tonight, but I'd suspect that the test is
</span><br>
<span class="quotelev1">&gt; bad as we use that class in the code base and haven't seen an issue.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Wed, Jan 15, 2014 at 10:49 AM, Ronald Cohen &lt;rhcohen_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Ralph,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I just sent out another post with the c file attached.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; If you can get that to work, and even if you can't can you tell me what
</span><br>
<span class="quotelev1">&gt; configure options you use, and what version of open-mpi?   Thanks.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Ron
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Wed, Jan 15, 2014 at 10:36 AM, Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; BTW: could you send me your sample test code?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Wed, Jan 15, 2014 at 10:34 AM, Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; I regularly build on Mavericks and run without problem, though I haven't
</span><br>
<span class="quotelev1">&gt; tried a parallel IO app. I'll give yours a try later, when I get back to my
</span><br>
<span class="quotelev1">&gt; Mac.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Wed, Jan 15, 2014 at 10:04 AM, Ronald Cohen &lt;rhcohen_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; I have been struggling trying to get a usable build of openmpi on Mac
</span><br>
<span class="quotelev1">&gt; OSX Mavericks (10.9.1).  I can get openmpi to configure and build without
</span><br>
<span class="quotelev1">&gt; error, but have problems after that which depend on the openmpi version.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; With 1.6.5, make check fails the opal_datatype_test, ddt_test, and
</span><br>
<span class="quotelev1">&gt; ddt_raw tests.  The various atomic_* tests pass.    See checklogs_1.6.5,
</span><br>
<span class="quotelev1">&gt; attached as a .gz file.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Following suggestions from openmpi discussions I tried openmpi version
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
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; MPI_INIT: argc 1
</span><br>
<span class="quotelev2">&gt; &gt; MPI_INIT: argc 1
</span><br>
<span class="quotelev2">&gt; &gt; Testing simple C MPIO program with 2 processes accessing file
</span><br>
<span class="quotelev1">&gt; ./mpitest.data
</span><br>
<span class="quotelev2">&gt; &gt;     (Filename can be specified via program argument)
</span><br>
<span class="quotelev2">&gt; &gt; Proc 0: hostname=Ron-Cohen-MBP.local
</span><br>
<span class="quotelev2">&gt; &gt; Proc 1: hostname=Ron-Cohen-MBP.local
</span><br>
<span class="quotelev2">&gt; &gt; MPI_BARRIER[0]: comm MPI_COMM_WORLD
</span><br>
<span class="quotelev2">&gt; &gt; MPI_BARRIER[1]: comm MPI_COMM_WORLD
</span><br>
<span class="quotelev2">&gt; &gt; Proc 0: MPI_File_open with MPI_MODE_EXCL failed (MPI_ERR_FILE: invalid
</span><br>
<span class="quotelev1">&gt; file)
</span><br>
<span class="quotelev2">&gt; &gt; MPI_ABORT[0]: comm MPI_COMM_WORLD errorcode 1
</span><br>
<span class="quotelev2">&gt; &gt; MPI_BCAST[1]: buffer 7fff5a483048 count 1 datatype MPI_INT root 0 comm
</span><br>
<span class="quotelev1">&gt; MPI_COMM_WORLD
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I then went back to my openmpi directories and tried running some of the
</span><br>
<span class="quotelev1">&gt; individual tests in the test and examples directories.  In particular in
</span><br>
<span class="quotelev1">&gt; test/class I found one test that seem to not be run as part of make check
</span><br>
<span class="quotelev1">&gt; which failed, even with one processor; this is opal_bitmap.  Not sure if
</span><br>
<span class="quotelev1">&gt; this is because 1.7.4rc1 is incomplete, or there is something wrong with
</span><br>
<span class="quotelev1">&gt; the installation, or maybe a 32 vs 64 bit thing?   The error message is
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; mpirun detected that one or more processes exited with non-zero status,
</span><br>
<span class="quotelev1">&gt; thus causing the job to be terminated. The first process to do so was:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   Process name: [[48805,1],0]
</span><br>
<span class="quotelev2">&gt; &gt;   Exit code:    255
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Any suggestions?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; More generally has anyone out there gotten an openmpi build on Mavericks
</span><br>
<span class="quotelev1">&gt; to work with sufficient success that they can get the attached
</span><br>
<span class="quotelev1">&gt; Sample_mpio.c (or better yet, parallel HDF5) to build?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Details: Running Mac OS X 10.9.1 on a mid-2009 Macbook pro with 4 GB
</span><br>
<span class="quotelev1">&gt; memory; tried openmpi 1.6.5 and 1.7.4rc1.  Built openmpi against the stock
</span><br>
<span class="quotelev1">&gt; gcc that comes with XCode 5.0.2, and gfortran 4.9.0.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Files attached: config.log.gz, openmpialllog.gz (output of running
</span><br>
<span class="quotelev1">&gt; ompi_info --all), checklog2.gz (output of make.check in top openmpi
</span><br>
<span class="quotelev1">&gt; directory).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am not attaching logs of make and install since those seem to have
</span><br>
<span class="quotelev1">&gt; been successful, but can generate those if that would be helpful.
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
<span class="quotelev2">&gt; &gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23385/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23386.php">Ronald Cohen: "Re: [OMPI users] Can't get a fully functional openmpi build on Mac OSX Mavericks"</a>
<li><strong>Previous message:</strong> <a href="23384.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Can't get a fully functional openmpi build on Mac OSX Mavericks"</a>
<li><strong>In reply to:</strong> <a href="23383.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Can't get a fully functional openmpi build on Mac OSX Mavericks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23362.php">Ronald Cohen: "Re: [OMPI users] Can't get a fully functional openmpi build on Mac OSX Mavericks"</a>
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
