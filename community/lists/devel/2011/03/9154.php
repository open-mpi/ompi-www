<?
$subject_val = "Re: [OMPI devel] Too many open files (24)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 30 21:19:22 2011" -->
<!-- isoreceived="20110331011922" -->
<!-- sent="Wed, 30 Mar 2011 19:19:18 -0600 (MDT)" -->
<!-- isosent="20110331011918" -->
<!-- name="Samuel K. Gutierrez" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Too many open files (24)" -->
<!-- id="53645.128.165.0.81.1301534358.squirrel_at_webmail.lanl.gov" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="34EBBCFD-910E-4A46-A2AB-644FD91ED5A8_at_nd.edu" -->
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
<strong>Date:</strong> 2011-03-30 21:19:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9155.php">Hugo Meyer: "Re: [OMPI devel] Add child to another parent."</a>
<li><strong>Previous message:</strong> <a href="9153.php">Ralph Castain: "Re: [OMPI devel] Add child to another parent."</a>
<li><strong>In reply to:</strong> <a href="9152.php">Timothy Stitt: "Re: [OMPI devel] Too many open files (24)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Tim,
<br>
<p>Great news!  Happy calculating :-).
<br>
<p><pre>
--
Samuel K. Gutierrez
Los Alamos National Laboratory
&gt; Dear Samuel,
&gt;
&gt; Just as you replied I was trying that on the compute nodes. Surprise,
&gt; surprise...the value returned as the hard and soft limits is 1024.
&gt;
&gt; Thanks for confirming my suspicions...
&gt;
&gt; Regards,
&gt;
&gt; Tim.
&gt;
&gt; On Mar 30, 2011, at 7:41 PM, Samuel K. Gutierrez wrote:
&gt;
&gt; Hi,
&gt;
&gt; It sounds like Open MPI is hitting your system's open file descriptor
&gt; limit.  If that's the case, one potential workaround is to have your
&gt; system administrator raise file descriptor limits.
&gt;
&gt; On a compute node, what does &quot;ulimit -a&quot; show (using bash)?
&gt;
&gt; Hope that helps,
&gt;
&gt; --
&gt; Samuel K. Gutierrez
&gt; Los Alamos National Laboratory
&gt;
&gt; On Mar 30, 2011, at 5:22 PM, Timothy Stitt wrote:
&gt;
&gt; Dear OpenMPI developers,
&gt;
&gt; One of our users was running a benchmark on a 1032 core simulation. He had
&gt; a successful run at 900 cores but when he stepped up to 1032 cores the job
&gt; just stalled and his logs contained many occurrences of the following
&gt; line:
&gt;
&gt; [d6copt368.crc.nd.edu][[25621,1],0][btl_tcp_component.c:885:mca_btl_tcp_component_accept_handler]
&gt; accept() failed: Too many open files (24)
&gt;
&gt; The simulation has a single master task that communicates with all the
&gt; other tasks to write out some I/O via the master. We are assuming the
&gt; message is related to this bottleneck. Is there a 1024 limit on the number
&gt; of open files/connections for instance?
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
&gt; P.O. Box 539, Notre Dame, IN 46556 | Phone:  574-631-5287 | Email:
&gt; tstitt_at_[hidden]&lt;mailto:tstitt_at_[hidden]&gt;
&gt;
&gt; _______________________________________________
&gt; devel mailing list
&gt; devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&gt;
&gt; &lt;ATT00001..txt&gt;
&gt;
&gt; Tim Stitt PhD (User Support Manager).
&gt; Center for Research Computing | University of Notre Dame |
&gt; P.O. Box 539, Notre Dame, IN 46556 | Phone:  574-631-5287 | Email:
&gt; tstitt_at_[hidden]&lt;mailto:tstitt_at_[hidden]&gt;
&gt;
&gt; _______________________________________________
&gt; devel mailing list
&gt; devel_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9155.php">Hugo Meyer: "Re: [OMPI devel] Add child to another parent."</a>
<li><strong>Previous message:</strong> <a href="9153.php">Ralph Castain: "Re: [OMPI devel] Add child to another parent."</a>
<li><strong>In reply to:</strong> <a href="9152.php">Timothy Stitt: "Re: [OMPI devel] Too many open files (24)"</a>
<!-- nextthread="start" -->
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
