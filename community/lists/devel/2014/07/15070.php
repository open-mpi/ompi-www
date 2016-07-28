<?
$subject_val = "Re: [OMPI devel] mpirun Produces Extraneous Output";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  2 23:50:21 2014" -->
<!-- isoreceived="20140703035021" -->
<!-- sent="Wed, 2 Jul 2014 20:50:17 -0700" -->
<!-- isosent="20140703035017" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] mpirun Produces Extraneous Output" -->
<!-- id="09645CE4-64B9-461B-A43C-E48F0C349FCC_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="53B45463.9030700_at_arlut.utexas.edu" -->
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
<strong>Date:</strong> 2014-07-02 23:50:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15071.php">Greg Thomsen: "Re: [OMPI devel] mpirun Produces Extraneous Output"</a>
<li><strong>Previous message:</strong> <a href="15069.php">Nathan Hjelm: "[OMPI devel] RFC: BTL Interface Change (1 of 5)"</a>
<li><strong>In reply to:</strong> <a href="15068.php">Greg Thomsen: "Re: [OMPI devel] mpirun Produces Extraneous Output"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15071.php">Greg Thomsen: "Re: [OMPI devel] mpirun Produces Extraneous Output"</a>
<li><strong>Reply:</strong> <a href="15071.php">Greg Thomsen: "Re: [OMPI devel] mpirun Produces Extraneous Output"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Rats - this is one tough race condition. I've been cycling it since your note, without hitting one problem.
<br>
<p>I'm running Centos6 on a dual processor, 6-core Xeon, with a dedicated disk installed on the node. Apparently, that seems to be adequate to mitigate the problem.
<br>
<p>I'll keep trying to find a way to replicate this, and will audit the code and see if I can visually spot something. If I do and send you a patch, would you be willing/able to test it?
<br>
<p><p>On Jul 2, 2014, at 11:50 AM, Greg Thomsen &lt;gthomsen_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I finally got some time to look into this again.  I can reproduce the issue when running against the latest nightlies for 1.8.2 (r32119) and 1.9 (r32113).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; While verifying that, I noticed that testing on a different system required a much larger number of iterations (~2000), while on the original system the iterations were unaffected (~3).  Both are RHEL5 systems and which differ by the kernel revision booted, and the underlying hardware.  The harder to reproduce system is a quad processor, 16-core Opteron 6276 running 2.6.18-274.el5xen while the original system is a quad processor, 4-core Xeon X5450 running 2.6.18-308.el5.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The only option supplied during configuration was the prefix to install.  Attached is the log used for the latest trunk nightly (r32113).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for looking into this.  Let me know if you need anything else.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Greg
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 6/13/14 10:38 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi Greg
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I've been running your script over and over again with the current 1.8.2 and svn developer's trunk, and I cannot get a failure. It just merrily runs.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Could you tell me how you configured OMPI to get this behavior?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 10, 2014, at 11:59 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ouch - I'll try to chase it down.I'm unaware of anyone passing a significant amount of data via stdin before, so it's quite possible this has been around for awhile. Normally one avoids that practice.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jun 10, 2014, at 11:36 AM, Greg Thomsen &lt;gthomsen_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; All,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I believe I've found a bug in the I/O forwarding portion of OpenMPI which occasionally causes mpirun to generate additional data on standard output that was not produced by the application being run.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The application in question reads from standard input and writes to standard output only on the rank 0 process.  All non-rank 0 processes only participate in computation and do not produce data on standard output.  The application is used in standard Unix-like pipelines like so:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  A | mpirun -np 4 application | B
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Since B is looking for structured input, it is sensitive to additional data being generated.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; While chasing down the source of this problem, I've observed the following:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; * The problem is sensitive to timing.  Using strace to figure out where
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the problem lies can easily hide it.  Either of the following would
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; change how the issue was expressed:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   A | mpirun -np 4 strace -o output.txt -e read,write application | B
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   A | strace -ff -o output.txt -e read,write mpirun -np 4 application
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   | B
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; While harder to state definitively, redirecting in from file and out
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to file, rather than through pipes, also appears to hide the problem.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Since the workflow in question has large volumes of data, using
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; file-based I/O isn't feasible and wasn't thoroughly explored during
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; testing.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; * It appears to be correlated to a short I/O operation.  A short read
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; from application's standard output maps to the first byte of the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; extraneous output sent to B.  Looking at hex dumps indicates that the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; contents of a recent buffer are inadvertently written to B.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The attached text case can show this.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; * This also is an issue for forwarding standard error from the rank 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; process.  Modifying application so that it only writes to standard
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; error, and then redirecting standard error to standard output in the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; shell, will still cause the problem:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   A | mpirun -np 4 application 2&gt;&amp;1 | B
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; * This seems to only occur at the end of the data stream.  The pipeline
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; in question works through records and if it occurred earlier than the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; last, it would be noticed.  The conditions where it was seen
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; regularly always pointed to the end of the data stream.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The attached shell script reproduces the problem in every version of OpenMPI tested (1.5.0, 1.6.3, 1.7.4, and 1.8.1).  Without any arguments, it reads a fixed amount of data from /dev/zero and then compares the size of the output from the above pipeline.  For versions exhibiting the bug, and the above conditions, the problem should be seen within the first ~20 attempts.  For other conditions I've seen the script run for a week without problem.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; With an input path, it reads the first 1,000,000 bytes from the path supplied.  With a fixed pattern in the data (see the compressed test input), it is easy to see that the extra data generated is a copy from earlier in the data stream.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hopefully this gets someone in the right section of the code.  Let me know if additional information is needed.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Greg
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;mpi_test_input.bz2&gt;&lt;mpi-test.sh&gt;_______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/06/14999.php">http://www.open-mpi.org/community/lists/devel/2014/06/14999.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/06/15006.php">http://www.open-mpi.org/community/lists/devel/2014/06/15006.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;config.log.bz2&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15068.php">http://www.open-mpi.org/community/lists/devel/2014/07/15068.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15071.php">Greg Thomsen: "Re: [OMPI devel] mpirun Produces Extraneous Output"</a>
<li><strong>Previous message:</strong> <a href="15069.php">Nathan Hjelm: "[OMPI devel] RFC: BTL Interface Change (1 of 5)"</a>
<li><strong>In reply to:</strong> <a href="15068.php">Greg Thomsen: "Re: [OMPI devel] mpirun Produces Extraneous Output"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15071.php">Greg Thomsen: "Re: [OMPI devel] mpirun Produces Extraneous Output"</a>
<li><strong>Reply:</strong> <a href="15071.php">Greg Thomsen: "Re: [OMPI devel] mpirun Produces Extraneous Output"</a>
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
