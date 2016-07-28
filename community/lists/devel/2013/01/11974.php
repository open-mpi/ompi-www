<?
$subject_val = "[OMPI devel] CUDA support doesn't work starting from 1.9a1r27862";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 24 04:10:46 2013" -->
<!-- isoreceived="20130124091046" -->
<!-- sent="Thu, 24 Jan 2013 10:10:42 +0100" -->
<!-- isosent="20130124091042" -->
<!-- name="Alessandro Fanfarillo" -->
<!-- email="fanfarillo.openmpi_at_[hidden]" -->
<!-- subject="[OMPI devel] CUDA support doesn't work starting from 1.9a1r27862" -->
<!-- id="CAC0a=QNwhPXiAxjBjbb-RGAxOSrPTTqOxRinCRM_cSLFZpdpTw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] CUDA support doesn't work starting from 1.9a1r27862<br>
<strong>From:</strong> Alessandro Fanfarillo (<em>fanfarillo.openmpi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-24 04:10:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11975.php">Rolf vandeVaart: "Re: [OMPI devel] CUDA support doesn't work starting from 1.9a1r27862"</a>
<li><strong>Previous message:</strong> <a href="11973.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] New ARM patch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11975.php">Rolf vandeVaart: "Re: [OMPI devel] CUDA support doesn't work starting from 1.9a1r27862"</a>
<li><strong>Reply:</strong> <a href="11975.php">Rolf vandeVaart: "Re: [OMPI devel] CUDA support doesn't work starting from 1.9a1r27862"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all,
<br>
I would like to report a bug for the CUDA support on the last 5 trunk
<br>
versions.
<br>
The attached code is a simply send/receive test case which correctly works
<br>
with version 1.9a1r27844.
<br>
<p>Starting from version 1.9a1r27862 up to 1.9a1r27897 I get the following
<br>
message:
<br>
<p>./test: symbol lookup error: /usr/local/openmpi/lib/openmpi/mca_pml_ob1.so:
<br>
undefined symbol: progress_one_cuda_htod_event
<br>
./test: symbol lookup error: /usr/local/openmpi/lib/openmpi/mca_pml_ob1.so:
<br>
undefined symbol: progress_one_cuda_htod_event
<br>
--------------------------------------------------------------------------
<br>
mpirun has exited due to process rank 0 with PID 21641 on
<br>
node ip-10-16-24-100 exiting improperly. There are three reasons this could
<br>
occur:
<br>
<p>1. this process did not call &quot;init&quot; before exiting, but others in
<br>
the job did. This can cause a job to hang indefinitely while it waits
<br>
for all processes to call &quot;init&quot;. By rule, if one process calls &quot;init&quot;,
<br>
then ALL processes must call &quot;init&quot; prior to termination.
<br>
<p>2. this process called &quot;init&quot;, but exited without calling &quot;finalize&quot;.
<br>
By rule, all processes that call &quot;init&quot; MUST call &quot;finalize&quot; prior to
<br>
exiting or it will be considered an &quot;abnormal termination&quot;
<br>
<p>3. this process called &quot;MPI_Abort&quot; or &quot;orte_abort&quot; and the mca parameter
<br>
orte_create_session_dirs is set to false. In this case, the run-time cannot
<br>
detect that the abort call was an abnormal termination. Hence, the only
<br>
error message you will receive is this one.
<br>
<p>This may have caused other processes in the application to be
<br>
terminated by signals sent by mpirun (as reported here).
<br>
<p>You can avoid this message by specifying -quiet on the mpirun command line.
<br>
<p>-----------------------------------------------------------------------------------------------------
<br>
<p>I'm using gcc-4.7.2 and CUDA 4.2. The test fails also with CUDA 4.1.
<br>
<p>Thanks in advance.
<br>
<p>Best regards.
<br>
<p>Alessandro Fanfarillo
<br>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11974/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-bzip2 attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11974/test.tar.bz2">test.tar.bz2</a>
</ul>
<!-- attachment="test.tar.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11975.php">Rolf vandeVaart: "Re: [OMPI devel] CUDA support doesn't work starting from 1.9a1r27862"</a>
<li><strong>Previous message:</strong> <a href="11973.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] New ARM patch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11975.php">Rolf vandeVaart: "Re: [OMPI devel] CUDA support doesn't work starting from 1.9a1r27862"</a>
<li><strong>Reply:</strong> <a href="11975.php">Rolf vandeVaart: "Re: [OMPI devel] CUDA support doesn't work starting from 1.9a1r27862"</a>
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
