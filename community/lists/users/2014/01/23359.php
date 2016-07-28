<?
$subject_val = "[OMPI users] Can't get a fully functional openmpi build on Mac OSX Mavericks";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 15 13:04:52 2014" -->
<!-- isoreceived="20140115180452" -->
<!-- sent="Wed, 15 Jan 2014 10:04:10 -0800" -->
<!-- isosent="20140115180410" -->
<!-- name="Ronald Cohen" -->
<!-- email="rhcohen_at_[hidden]" -->
<!-- subject="[OMPI users] Can't get a fully functional openmpi build on Mac OSX Mavericks" -->
<!-- id="CAMuam9M=Sc_+FuX=6cKJhWTMyJ8QRujtjbwEr2V1nPsV17hHsQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Can't get a fully functional openmpi build on Mac OSX Mavericks<br>
<strong>From:</strong> Ronald Cohen (<em>rhcohen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-15 13:04:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23360.php">Ralph Castain: "Re: [OMPI users] Can't get a fully functional openmpi build on Mac OSX Mavericks"</a>
<li><strong>Previous message:</strong> <a href="23358.php">CUDENNEC Loic: "[OMPI users] [ICCS/Alchemy] Last Call for Papers: Architecture, Languages, Compilation and Hardware support for Emerging ManYcore systems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23360.php">Ralph Castain: "Re: [OMPI users] Can't get a fully functional openmpi build on Mac OSX Mavericks"</a>
<li><strong>Reply:</strong> <a href="23360.php">Ralph Castain: "Re: [OMPI users] Can't get a fully functional openmpi build on Mac OSX Mavericks"</a>
<li><strong>Reply:</strong> <a href="23362.php">Ronald Cohen: "Re: [OMPI users] Can't get a fully functional openmpi build on Mac OSX Mavericks"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have been struggling trying to get a usable build of openmpi on Mac OSX
<br>
Mavericks (10.9.1).  I can get openmpi to configure and build without
<br>
error, but have problems after that which depend on the openmpi version.
<br>
<p>With 1.6.5, make check fails the opal_datatype_test, ddt_test, and ddt_raw
<br>
tests.  The various atomic_* tests pass.    See checklogs_1.6.5, attached
<br>
as a .gz file.
<br>
<p>Following suggestions from openmpi discussions I tried openmpi version
<br>
1.7.4rc1.  In this case make check indicates all tests passed.  But when I
<br>
proceeded to try to build a parallel code (parallel HDF5) it failed.
<br>
Following an email exchange with the HDF5 support people, they suggested I
<br>
try to compile and run the attached bit of simple code Sample_mpio.c (which
<br>
they supplied) which does not use any HDF5, but just attempts a parallel
<br>
write to a file and parallel read.   That test failed when requesting more
<br>
than 1 processor -- which they say indicates a failure of the openmpi
<br>
installation.   The error message was:
<br>
<p>MPI_INIT: argc 1
<br>
MPI_INIT: argc 1
<br>
Testing simple C MPIO program with 2 processes accessing file ./mpitest.data
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(Filename can be specified via program argument)
<br>
Proc 0: hostname=Ron-Cohen-MBP.local
<br>
Proc 1: hostname=Ron-Cohen-MBP.local
<br>
MPI_BARRIER[0]: comm MPI_COMM_WORLD
<br>
MPI_BARRIER[1]: comm MPI_COMM_WORLD
<br>
Proc 0: MPI_File_open with MPI_MODE_EXCL failed (MPI_ERR_FILE: invalid file)
<br>
MPI_ABORT[0]: comm MPI_COMM_WORLD errorcode 1
<br>
MPI_BCAST[1]: buffer 7fff5a483048 count 1 datatype MPI_INT root 0 comm
<br>
MPI_COMM_WORLD
<br>
<p>I then went back to my openmpi directories and tried running some of the
<br>
individual tests in the test and examples directories.  In particular in
<br>
test/class I found one test that seem to not be run as part of make check
<br>
which failed, even with one processor; this is opal_bitmap.  Not sure if
<br>
this is because 1.7.4rc1 is incomplete, or there is something wrong with
<br>
the installation, or maybe a 32 vs 64 bit thing?   The error message is
<br>
<p>mpirun detected that one or more processes exited with non-zero status,
<br>
thus causing the job to be terminated. The first process to do so was:
<br>
<p>&nbsp;&nbsp;Process name: [[48805,1],0]
<br>
&nbsp;&nbsp;Exit code:    255
<br>
<p>Any suggestions?
<br>
<p>More generally has anyone out there gotten an openmpi build on Mavericks to
<br>
work with sufficient success that they can get the attached Sample_mpio.c
<br>
(or better yet, parallel HDF5) to build?
<br>
<p>Details: Running Mac OS X 10.9.1 on a mid-2009 Macbook pro with 4 GB
<br>
memory; tried openmpi 1.6.5 and 1.7.4rc1.  Built openmpi against the stock
<br>
gcc that comes with XCode 5.0.2, and gfortran 4.9.0.
<br>
<p>Files attached: config.log.gz, openmpialllog.gz (output of running
<br>
ompi_info --all), checklog2.gz (output of make.check in top openmpi
<br>
directory).
<br>
<p>I am not attaching logs of make and install since those seem to have been
<br>
successful, but can generate those if that would be helpful.
<br>
<p>


<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23359/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23359/ompiinfoalllog.gz">ompiinfoalllog.gz</a>
</ul>
<!-- attachment="ompiinfoalllog.gz" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23359/checklog2.gz">checklog2.gz</a>
</ul>
<!-- attachment="checklog2.gz" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23359/config.log.gz">config.log.gz</a>
</ul>
<!-- attachment="config.log.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23360.php">Ralph Castain: "Re: [OMPI users] Can't get a fully functional openmpi build on Mac OSX Mavericks"</a>
<li><strong>Previous message:</strong> <a href="23358.php">CUDENNEC Loic: "[OMPI users] [ICCS/Alchemy] Last Call for Papers: Architecture, Languages, Compilation and Hardware support for Emerging ManYcore systems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23360.php">Ralph Castain: "Re: [OMPI users] Can't get a fully functional openmpi build on Mac OSX Mavericks"</a>
<li><strong>Reply:</strong> <a href="23360.php">Ralph Castain: "Re: [OMPI users] Can't get a fully functional openmpi build on Mac OSX Mavericks"</a>
<li><strong>Reply:</strong> <a href="23362.php">Ronald Cohen: "Re: [OMPI users] Can't get a fully functional openmpi build on Mac OSX Mavericks"</a>
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
