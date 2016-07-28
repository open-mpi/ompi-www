<?
$subject_val = "Re: [OMPI devel] Too many open files (24)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 30 19:41:11 2011" -->
<!-- isoreceived="20110330234111" -->
<!-- sent="Wed, 30 Mar 2011 17:41:05 -0600" -->
<!-- isosent="20110330234105" -->
<!-- name="Samuel K. Gutierrez" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Too many open files (24)" -->
<!-- id="81B87D98-638D-4880-9C1A-28AF95FA378C_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="5D62B72F-41C2-4328-B023-CF10102DA772_at_nd.edu" -->
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
<strong>From:</strong> Samuel K. Gutierrez (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-30 19:41:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9152.php">Timothy Stitt: "Re: [OMPI devel] Too many open files (24)"</a>
<li><strong>Previous message:</strong> <a href="9150.php">Timothy Stitt: "[OMPI devel] Too many open files (24)"</a>
<li><strong>In reply to:</strong> <a href="9150.php">Timothy Stitt: "[OMPI devel] Too many open files (24)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9152.php">Timothy Stitt: "Re: [OMPI devel] Too many open files (24)"</a>
<li><strong>Reply:</strong> <a href="9152.php">Timothy Stitt: "Re: [OMPI devel] Too many open files (24)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>It sounds like Open MPI is hitting your system's open file descriptor  
<br>
limit.  If that's the case, one potential workaround is to have your  
<br>
system administrator raise file descriptor limits.
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
&gt; Dear OpenMPI developers,
&gt;
&gt; One of our users was running a benchmark on a 1032 core simulation.  
&gt; He had a successful run at 900 cores but when he stepped up to 1032  
&gt; cores the job just stalled and his logs contained many occurrences  
&gt; of the following line:
&gt;
&gt;&gt; [d6copt368.crc.nd.edu][[25621,1],0][btl_tcp_component.c: 
&gt;&gt; 885:mca_btl_tcp_component_accept_handler] accept() failed: Too many  
&gt;&gt; open files (24)
&gt;
&gt; The simulation has a single master task that communicates with all  
&gt; the other tasks to write out some I/O via the master. We are  
&gt; assuming the message is related to this bottleneck. Is there a 1024  
&gt; limit on the number of open files/connections for instance?
&gt;
&gt; Can anyone confirm the meaning of this error and secondly provide a  
&gt; resolution that hopefully doesn't involve a code rewrite.
&gt;
&gt; Thanks in advance,
&gt;
&gt; Tim.
&gt;
&gt; Tim Stitt PhD (User Support Manager).
&gt; Center for Research Computing | University of Notre Dame |
&gt; P.O. Box 539, Notre Dame, IN 46556 | Phone:  574-631-5287 | Email: tstitt_at_[hidden]
&gt;
&gt; _______________________________________________
&gt; devel mailing list
&gt; devel_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9151/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9152.php">Timothy Stitt: "Re: [OMPI devel] Too many open files (24)"</a>
<li><strong>Previous message:</strong> <a href="9150.php">Timothy Stitt: "[OMPI devel] Too many open files (24)"</a>
<li><strong>In reply to:</strong> <a href="9150.php">Timothy Stitt: "[OMPI devel] Too many open files (24)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9152.php">Timothy Stitt: "Re: [OMPI devel] Too many open files (24)"</a>
<li><strong>Reply:</strong> <a href="9152.php">Timothy Stitt: "Re: [OMPI devel] Too many open files (24)"</a>
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
