<?
$subject_val = "Re: [OMPI users] Can't get a fully functional openmpi build on Mac OSX Mavericks";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 15 13:34:39 2014" -->
<!-- isoreceived="20140115183439" -->
<!-- sent="Wed, 15 Jan 2014 10:34:36 -0800" -->
<!-- isosent="20140115183436" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Can't get a fully functional openmpi build on Mac OSX Mavericks" -->
<!-- id="CAMD57od9mi1c3+0ho1Rnya+Kg+edQFOytxtg1p1uLeRNE0KzvQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAMuam9M=Sc_+FuX=6cKJhWTMyJ8QRujtjbwEr2V1nPsV17hHsQ_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-15 13:34:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23361.php">Ralph Castain: "Re: [OMPI users] Can't get a fully functional openmpi build on Mac OSX Mavericks"</a>
<li><strong>Previous message:</strong> <a href="23359.php">Ronald Cohen: "[OMPI users] Can't get a fully functional openmpi build on Mac OSX Mavericks"</a>
<li><strong>In reply to:</strong> <a href="23359.php">Ronald Cohen: "[OMPI users] Can't get a fully functional openmpi build on Mac OSX Mavericks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23361.php">Ralph Castain: "Re: [OMPI users] Can't get a fully functional openmpi build on Mac OSX Mavericks"</a>
<li><strong>Reply:</strong> <a href="23361.php">Ralph Castain: "Re: [OMPI users] Can't get a fully functional openmpi build on Mac OSX Mavericks"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I regularly build on Mavericks and run without problem, though I haven't
<br>
tried a parallel IO app. I'll give yours a try later, when I get back to my
<br>
Mac.
<br>
<p><p><p>On Wed, Jan 15, 2014 at 10:04 AM, Ronald Cohen &lt;rhcohen_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I have been struggling trying to get a usable build of openmpi on Mac OSX
</span><br>
<span class="quotelev1">&gt; Mavericks (10.9.1).  I can get openmpi to configure and build without
</span><br>
<span class="quotelev1">&gt; error, but have problems after that which depend on the openmpi version.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; With 1.6.5, make check fails the opal_datatype_test, ddt_test, and ddt_raw
</span><br>
<span class="quotelev1">&gt; tests.  The various atomic_* tests pass.    See checklogs_1.6.5, attached
</span><br>
<span class="quotelev1">&gt; as a .gz file.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Following suggestions from openmpi discussions I tried openmpi version
</span><br>
<span class="quotelev1">&gt; 1.7.4rc1.  In this case make check indicates all tests passed.  But when I
</span><br>
<span class="quotelev1">&gt; proceeded to try to build a parallel code (parallel HDF5) it failed.
</span><br>
<span class="quotelev1">&gt; Following an email exchange with the HDF5 support people, they suggested I
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI_INIT: argc 1
</span><br>
<span class="quotelev1">&gt; MPI_INIT: argc 1
</span><br>
<span class="quotelev1">&gt; Testing simple C MPIO program with 2 processes accessing file
</span><br>
<span class="quotelev1">&gt; ./mpitest.data
</span><br>
<span class="quotelev1">&gt;     (Filename can be specified via program argument)
</span><br>
<span class="quotelev1">&gt; Proc 0: hostname=Ron-Cohen-MBP.local
</span><br>
<span class="quotelev1">&gt; Proc 1: hostname=Ron-Cohen-MBP.local
</span><br>
<span class="quotelev1">&gt; MPI_BARRIER[0]: comm MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; MPI_BARRIER[1]: comm MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; Proc 0: MPI_File_open with MPI_MODE_EXCL failed (MPI_ERR_FILE: invalid
</span><br>
<span class="quotelev1">&gt; file)
</span><br>
<span class="quotelev1">&gt; MPI_ABORT[0]: comm MPI_COMM_WORLD errorcode 1
</span><br>
<span class="quotelev1">&gt; MPI_BCAST[1]: buffer 7fff5a483048 count 1 datatype MPI_INT root 0 comm
</span><br>
<span class="quotelev1">&gt; MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I then went back to my openmpi directories and tried running some of the
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun detected that one or more processes exited with non-zero status,
</span><br>
<span class="quotelev1">&gt; thus causing the job to be terminated. The first process to do so was:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Process name: [[48805,1],0]
</span><br>
<span class="quotelev1">&gt;   Exit code:    255
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any suggestions?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; More generally has anyone out there gotten an openmpi build on Mavericks
</span><br>
<span class="quotelev1">&gt; to work with sufficient success that they can get the attached
</span><br>
<span class="quotelev1">&gt; Sample_mpio.c (or better yet, parallel HDF5) to build?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Details: Running Mac OS X 10.9.1 on a mid-2009 Macbook pro with 4 GB
</span><br>
<span class="quotelev1">&gt; memory; tried openmpi 1.6.5 and 1.7.4rc1.  Built openmpi against the stock
</span><br>
<span class="quotelev1">&gt; gcc that comes with XCode 5.0.2, and gfortran 4.9.0.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Files attached: config.log.gz, openmpialllog.gz (output of running
</span><br>
<span class="quotelev1">&gt; ompi_info --all), checklog2.gz (output of make.check in top openmpi
</span><br>
<span class="quotelev1">&gt; directory).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am not attaching logs of make and install since those seem to have been
</span><br>
<span class="quotelev1">&gt; successful, but can generate those if that would be helpful.
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23360/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23361.php">Ralph Castain: "Re: [OMPI users] Can't get a fully functional openmpi build on Mac OSX Mavericks"</a>
<li><strong>Previous message:</strong> <a href="23359.php">Ronald Cohen: "[OMPI users] Can't get a fully functional openmpi build on Mac OSX Mavericks"</a>
<li><strong>In reply to:</strong> <a href="23359.php">Ronald Cohen: "[OMPI users] Can't get a fully functional openmpi build on Mac OSX Mavericks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23361.php">Ralph Castain: "Re: [OMPI users] Can't get a fully functional openmpi build on Mac OSX Mavericks"</a>
<li><strong>Reply:</strong> <a href="23361.php">Ralph Castain: "Re: [OMPI users] Can't get a fully functional openmpi build on Mac OSX Mavericks"</a>
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
