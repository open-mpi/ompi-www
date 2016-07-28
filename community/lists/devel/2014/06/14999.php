<?
$subject_val = "[OMPI devel] mpirun Produces Extraneous Output";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 10 14:36:38 2014" -->
<!-- isoreceived="20140610183638" -->
<!-- sent="Tue, 10 Jun 2014 13:36:36 -0500" -->
<!-- isosent="20140610183636" -->
<!-- name="Greg Thomsen" -->
<!-- email="gthomsen_at_[hidden]" -->
<!-- subject="[OMPI devel] mpirun Produces Extraneous Output" -->
<!-- id="53975034.8090905_at_arlut.utexas.edu" -->
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
<strong>Subject:</strong> [OMPI devel] mpirun Produces Extraneous Output<br>
<strong>From:</strong> Greg Thomsen (<em>gthomsen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-10 14:36:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15000.php">Rolf vandeVaart: "[OMPI devel] Open MPI Core Developer - Minutes June 10, 2014"</a>
<li><strong>Previous message:</strong> <a href="14998.php">Ralph Castain: "Re: [OMPI devel] v1.8 cannot compile since r31979"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15001.php">Ralph Castain: "Re: [OMPI devel] mpirun Produces Extraneous Output"</a>
<li><strong>Reply:</strong> <a href="15001.php">Ralph Castain: "Re: [OMPI devel] mpirun Produces Extraneous Output"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
All,
<br>
<p>I believe I've found a bug in the I/O forwarding portion of OpenMPI 
<br>
which occasionally causes mpirun to generate additional data on standard 
<br>
output that was not produced by the application being run.
<br>
<p>The application in question reads from standard input and writes to 
<br>
standard output only on the rank 0 process.  All non-rank 0 processes 
<br>
only participate in computation and do not produce data on standard 
<br>
output.  The application is used in standard Unix-like pipelines like so:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;A | mpirun -np 4 application | B
<br>
<p>Since B is looking for structured input, it is sensitive to additional 
<br>
data being generated.
<br>
<p>While chasing down the source of this problem, I've observed the following:
<br>
<p>* The problem is sensitive to timing.  Using strace to figure out where
<br>
&nbsp;&nbsp;&nbsp;the problem lies can easily hide it.  Either of the following would
<br>
&nbsp;&nbsp;&nbsp;change how the issue was expressed:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A | mpirun -np 4 strace -o output.txt -e read,write application | B
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A | strace -ff -o output.txt -e read,write mpirun -np 4 application
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;| B
<br>
<p>&nbsp;&nbsp;&nbsp;While harder to state definitively, redirecting in from file and out
<br>
&nbsp;&nbsp;&nbsp;to file, rather than through pipes, also appears to hide the problem.
<br>
&nbsp;&nbsp;&nbsp;Since the workflow in question has large volumes of data, using
<br>
&nbsp;&nbsp;&nbsp;file-based I/O isn't feasible and wasn't thoroughly explored during
<br>
&nbsp;&nbsp;&nbsp;testing.
<br>
<p>* It appears to be correlated to a short I/O operation.  A short read
<br>
&nbsp;&nbsp;&nbsp;from application's standard output maps to the first byte of the
<br>
&nbsp;&nbsp;&nbsp;extraneous output sent to B.  Looking at hex dumps indicates that the
<br>
&nbsp;&nbsp;&nbsp;contents of a recent buffer are inadvertently written to B.
<br>
<p>&nbsp;&nbsp;&nbsp;The attached text case can show this.
<br>
<p>* This also is an issue for forwarding standard error from the rank 0
<br>
&nbsp;&nbsp;&nbsp;process.  Modifying application so that it only writes to standard
<br>
&nbsp;&nbsp;&nbsp;error, and then redirecting standard error to standard output in the
<br>
&nbsp;&nbsp;&nbsp;shell, will still cause the problem:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A | mpirun -np 4 application 2&gt;&amp;1 | B
<br>
<p>* This seems to only occur at the end of the data stream.  The pipeline
<br>
&nbsp;&nbsp;&nbsp;in question works through records and if it occurred earlier than the
<br>
&nbsp;&nbsp;&nbsp;last, it would be noticed.  The conditions where it was seen
<br>
&nbsp;&nbsp;&nbsp;regularly always pointed to the end of the data stream.
<br>
<p>The attached shell script reproduces the problem in every version of 
<br>
OpenMPI tested (1.5.0, 1.6.3, 1.7.4, and 1.8.1).  Without any arguments, 
<br>
it reads a fixed amount of data from /dev/zero and then compares the 
<br>
size of the output from the above pipeline.  For versions exhibiting the 
<br>
bug, and the above conditions, the problem should be seen within the 
<br>
first ~20 attempts.  For other conditions I've seen the script run for a 
<br>
week without problem.
<br>
<p>With an input path, it reads the first 1,000,000 bytes from the path 
<br>
supplied.  With a fixed pattern in the data (see the compressed test 
<br>
input), it is easy to see that the extra data generated is a copy from 
<br>
earlier in the data stream.
<br>
<p>Hopefully this gets someone in the right section of the code.  Let me 
<br>
know if additional information is needed.
<br>
<p>Thanks!
<br>
<p>Greg
<br>
<p>

<br><p>
<p>
<br><hr>
<ul>
<li>application/x-bzip2 attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14999/mpi_test_input.bz2">mpi_test_input.bz2</a>
</ul>
<!-- attachment="mpi_test_input.bz2" -->
<hr>
<ul>
<li>application/x-sh attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14999/mpi-test.sh">mpi-test.sh</a>
</ul>
<!-- attachment="mpi-test.sh" -->
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14999/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15000.php">Rolf vandeVaart: "[OMPI devel] Open MPI Core Developer - Minutes June 10, 2014"</a>
<li><strong>Previous message:</strong> <a href="14998.php">Ralph Castain: "Re: [OMPI devel] v1.8 cannot compile since r31979"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15001.php">Ralph Castain: "Re: [OMPI devel] mpirun Produces Extraneous Output"</a>
<li><strong>Reply:</strong> <a href="15001.php">Ralph Castain: "Re: [OMPI devel] mpirun Produces Extraneous Output"</a>
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
