<?
$subject_val = "Re: [OMPI devel] mpirun Produces Extraneous Output";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 10 14:59:45 2014" -->
<!-- isoreceived="20140610185945" -->
<!-- sent="Tue, 10 Jun 2014 11:59:41 -0700" -->
<!-- isosent="20140610185941" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] mpirun Produces Extraneous Output" -->
<!-- id="9D94F70C-8C30-4679-9A50-707DB6D067D9_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="53975034.8090905_at_arlut.utexas.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] mpirun Produces Extraneous Output<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-10 14:59:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15002.php">Jeff Squyres (jsquyres): "[OMPI devel] Link to this post"</a>
<li><strong>Previous message:</strong> <a href="15000.php">Rolf vandeVaart: "[OMPI devel] Open MPI Core Developer - Minutes June 10, 2014"</a>
<li><strong>In reply to:</strong> <a href="14999.php">Greg Thomsen: "[OMPI devel] mpirun Produces Extraneous Output"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15006.php">Ralph Castain: "Re: [OMPI devel] mpirun Produces Extraneous Output"</a>
<li><strong>Reply:</strong> <a href="15006.php">Ralph Castain: "Re: [OMPI devel] mpirun Produces Extraneous Output"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ouch - I'll try to chase it down.I'm unaware of anyone passing a significant amount of data via stdin before, so it's quite possible this has been around for awhile. Normally one avoids that practice.
<br>
<p><p>On Jun 10, 2014, at 11:36 AM, Greg Thomsen &lt;gthomsen_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; All,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I believe I've found a bug in the I/O forwarding portion of OpenMPI which occasionally causes mpirun to generate additional data on standard output that was not produced by the application being run.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The application in question reads from standard input and writes to standard output only on the rank 0 process.  All non-rank 0 processes only participate in computation and do not produce data on standard output.  The application is used in standard Unix-like pipelines like so:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   A | mpirun -np 4 application | B
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Since B is looking for structured input, it is sensitive to additional data being generated.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; While chasing down the source of this problem, I've observed the following:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * The problem is sensitive to timing.  Using strace to figure out where
</span><br>
<span class="quotelev1">&gt;  the problem lies can easily hide it.  Either of the following would
</span><br>
<span class="quotelev1">&gt;  change how the issue was expressed:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    A | mpirun -np 4 strace -o output.txt -e read,write application | B
</span><br>
<span class="quotelev1">&gt;    A | strace -ff -o output.txt -e read,write mpirun -np 4 application
</span><br>
<span class="quotelev1">&gt;    | B
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  While harder to state definitively, redirecting in from file and out
</span><br>
<span class="quotelev1">&gt;  to file, rather than through pipes, also appears to hide the problem.
</span><br>
<span class="quotelev1">&gt;  Since the workflow in question has large volumes of data, using
</span><br>
<span class="quotelev1">&gt;  file-based I/O isn't feasible and wasn't thoroughly explored during
</span><br>
<span class="quotelev1">&gt;  testing.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * It appears to be correlated to a short I/O operation.  A short read
</span><br>
<span class="quotelev1">&gt;  from application's standard output maps to the first byte of the
</span><br>
<span class="quotelev1">&gt;  extraneous output sent to B.  Looking at hex dumps indicates that the
</span><br>
<span class="quotelev1">&gt;  contents of a recent buffer are inadvertently written to B.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  The attached text case can show this.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * This also is an issue for forwarding standard error from the rank 0
</span><br>
<span class="quotelev1">&gt;  process.  Modifying application so that it only writes to standard
</span><br>
<span class="quotelev1">&gt;  error, and then redirecting standard error to standard output in the
</span><br>
<span class="quotelev1">&gt;  shell, will still cause the problem:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    A | mpirun -np 4 application 2&gt;&amp;1 | B
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * This seems to only occur at the end of the data stream.  The pipeline
</span><br>
<span class="quotelev1">&gt;  in question works through records and if it occurred earlier than the
</span><br>
<span class="quotelev1">&gt;  last, it would be noticed.  The conditions where it was seen
</span><br>
<span class="quotelev1">&gt;  regularly always pointed to the end of the data stream.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The attached shell script reproduces the problem in every version of OpenMPI tested (1.5.0, 1.6.3, 1.7.4, and 1.8.1).  Without any arguments, it reads a fixed amount of data from /dev/zero and then compares the size of the output from the above pipeline.  For versions exhibiting the bug, and the above conditions, the problem should be seen within the first ~20 attempts.  For other conditions I've seen the script run for a week without problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; With an input path, it reads the first 1,000,000 bytes from the path supplied.  With a fixed pattern in the data (see the compressed test input), it is easy to see that the extra data generated is a copy from earlier in the data stream.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hopefully this gets someone in the right section of the code.  Let me know if additional information is needed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Greg
</span><br>
<span class="quotelev1">&gt; &lt;mpi_test_input.bz2&gt;&lt;mpi-test.sh&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/06/14999.php">http://www.open-mpi.org/community/lists/devel/2014/06/14999.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15002.php">Jeff Squyres (jsquyres): "[OMPI devel] Link to this post"</a>
<li><strong>Previous message:</strong> <a href="15000.php">Rolf vandeVaart: "[OMPI devel] Open MPI Core Developer - Minutes June 10, 2014"</a>
<li><strong>In reply to:</strong> <a href="14999.php">Greg Thomsen: "[OMPI devel] mpirun Produces Extraneous Output"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15006.php">Ralph Castain: "Re: [OMPI devel] mpirun Produces Extraneous Output"</a>
<li><strong>Reply:</strong> <a href="15006.php">Ralph Castain: "Re: [OMPI devel] mpirun Produces Extraneous Output"</a>
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
