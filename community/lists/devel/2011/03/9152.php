<?
$subject_val = "Re: [OMPI devel] Too many open files (24)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 30 19:44:27 2011" -->
<!-- isoreceived="20110330234427" -->
<!-- sent="Wed, 30 Mar 2011 19:44:22 -0400" -->
<!-- isosent="20110330234422" -->
<!-- name="Timothy Stitt" -->
<!-- email="Timothy.Stitt.9_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Too many open files (24)" -->
<!-- id="34EBBCFD-910E-4A46-A2AB-644FD91ED5A8_at_nd.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="81B87D98-638D-4880-9C1A-28AF95FA378C_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Too many open files (24)<br>
<strong>From:</strong> Timothy Stitt (<em>Timothy.Stitt.9_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-30 19:44:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9153.php">Ralph Castain: "Re: [OMPI devel] Add child to another parent."</a>
<li><strong>Previous message:</strong> <a href="9151.php">Samuel K. Gutierrez: "Re: [OMPI devel] Too many open files (24)"</a>
<li><strong>In reply to:</strong> <a href="9151.php">Samuel K. Gutierrez: "Re: [OMPI devel] Too many open files (24)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9154.php">Samuel K. Gutierrez: "Re: [OMPI devel] Too many open files (24)"</a>
<li><strong>Reply:</strong> <a href="9154.php">Samuel K. Gutierrez: "Re: [OMPI devel] Too many open files (24)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Samuel,
<br>
<p>Just as you replied I was trying that on the compute nodes. Surprise, surprise...the value returned as the hard and soft limits is 1024.
<br>
<p>Thanks for confirming my suspicions...
<br>
<p>Regards,
<br>
<p>Tim.
<br>
<p>On Mar 30, 2011, at 7:41 PM, Samuel K. Gutierrez wrote:
<br>
<p>Hi,
<br>
<p>It sounds like Open MPI is hitting your system's open file descriptor limit.  If that's the case, one potential workaround is to have your system administrator raise file descriptor limits.
<br>
<p>On a compute node, what does &quot;ulimit -a&quot; show (using bash)?
<br>
<p>Hope that helps,
<br>
<p><pre>
--
Samuel K. Gutierrez
Los Alamos National Laboratory
On Mar 30, 2011, at 5:22 PM, Timothy Stitt wrote:
Dear OpenMPI developers,
One of our users was running a benchmark on a 1032 core simulation. He had a successful run at 900 cores but when he stepped up to 1032 cores the job just stalled and his logs contained many occurrences of the following line:
[d6copt368.crc.nd.edu][[25621,1],0][btl_tcp_component.c:885:mca_btl_tcp_component_accept_handler] accept() failed: Too many open files (24)
The simulation has a single master task that communicates with all the other tasks to write out some I/O via the master. We are assuming the message is related to this bottleneck. Is there a 1024 limit on the number of open files/connections for instance?
Can anyone confirm the meaning of this error and secondly provide a resolution that hopefully doesn't involve a code rewrite.
Thanks in advance,
Tim.
Tim Stitt PhD (User Support Manager).
Center for Research Computing | University of Notre Dame |
P.O. Box 539, Notre Dame, IN 46556 | Phone:  574-631-5287 | Email: tstitt_at_[hidden]&lt;mailto:tstitt_at_[hidden]&gt;
_______________________________________________
devel mailing list
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&lt;ATT00001..txt&gt;
Tim Stitt PhD (User Support Manager).
Center for Research Computing | University of Notre Dame |
P.O. Box 539, Notre Dame, IN 46556 | Phone:  574-631-5287 | Email: tstitt_at_[hidden]&lt;mailto:tstitt_at_[hidden]&gt;
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9152/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9153.php">Ralph Castain: "Re: [OMPI devel] Add child to another parent."</a>
<li><strong>Previous message:</strong> <a href="9151.php">Samuel K. Gutierrez: "Re: [OMPI devel] Too many open files (24)"</a>
<li><strong>In reply to:</strong> <a href="9151.php">Samuel K. Gutierrez: "Re: [OMPI devel] Too many open files (24)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9154.php">Samuel K. Gutierrez: "Re: [OMPI devel] Too many open files (24)"</a>
<li><strong>Reply:</strong> <a href="9154.php">Samuel K. Gutierrez: "Re: [OMPI devel] Too many open files (24)"</a>
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
