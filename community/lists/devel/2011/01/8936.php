<?
$subject_val = "Re: [OMPI devel] OFED question";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 27 18:17:23 2011" -->
<!-- isoreceived="20110127231723" -->
<!-- sent="Thu, 27 Jan 2011 18:17:18 -0500" -->
<!-- isosent="20110127231718" -->
<!-- name="Shamis, Pavel" -->
<!-- email="shamisp_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OFED question" -->
<!-- id="EDE4160A-D8B0-40A7-99E5-4079922DA42C_at_ornl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="B98E2954-DB9B-42D7-8908-F00A0291D890_at_sandia.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OFED question<br>
<strong>From:</strong> Shamis, Pavel (<em>shamisp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-27 18:17:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8937.php">Barrett, Brian W: "Re: [OMPI devel] OFED question"</a>
<li><strong>Previous message:</strong> <a href="8935.php">Paul H. Hargrove: "Re: [OMPI devel] OFED question"</a>
<li><strong>In reply to:</strong> <a href="8934.php">Barrett, Brian W: "[OMPI devel] OFED question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8937.php">Barrett, Brian W: "Re: [OMPI devel] OFED question"</a>
<li><strong>Reply:</strong> <a href="8937.php">Barrett, Brian W: "Re: [OMPI devel] OFED question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Unfortunately verbose error reports are not so friendly...anyway , I may think about 2 issues:
<br>
<p>1. You trying to open open too much QPs. By default ib devices support fairly large amount of QPs and it is quite hard to push it to this corner. But If your job is really huge it may be the case. Or for example, if you share the compute nodes with some other processes that create a lot of qps. The maximum amount of supported qps you may see in ibv_devinfo.
<br>
<p>2. The memory limit for registered memory is too low, as result driver fails allocate and register memory for QP. This scenario is most common. Just happened to me recently, system folks pushed some crap into limits.conf.
<br>
<p>Regards,
<br>
<p>Pavel (Pasha) Shamis
<br>
<pre>
---
Application Performance Tools Group
Computer Science and Math Division
Oak Ridge National Laboratory
On Jan 27, 2011, at 5:56 PM, Barrett, Brian W wrote:
&gt; All -
&gt; 
&gt; On one of our clusters, we're seeing the following on one of our applications, I believe using Open MPI 1.4.3:
&gt; 
&gt; [xxx:27545] *** An error occurred in MPI_Scatterv
&gt; [xxx:27545] *** on communicator MPI COMMUNICATOR 5 DUP FROM 4
&gt; [xxx:27545] *** MPI_ERR_OTHER: known error not in list
&gt; [xxx:27545] *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
&gt; [xxx][[31806,1],0][connect/btl_openib_connect_oob.c:857:qp_create_one] error creating qp errno says Resource temporarily unavailable
&gt; --------------------------------------------------------------------------
&gt; mpirun has exited due to process rank 0 with PID 27545 on
&gt; node rs1891 exiting without calling &quot;finalize&quot;. This may
&gt; have caused other processes in the application to be
&gt; terminated by signals sent by mpirun (as reported here).
&gt; --------------------------------------------------------------------------
&gt; 
&gt; 
&gt; The problem goes away if we modify the eager protocol msg sizes so that there are only two QPs necessary instead of the default 4.  Is there a way to bump up the number of QPs that can be created on a node, assuming the issue is just running out of available QPs?  If not, any other thoughts on working around the problem?
&gt; 
&gt; Thanks,
&gt; 
&gt; Brian
&gt; 
&gt; --
&gt;  Brian W. Barrett
&gt;  Dept. 1423: Scalable System Software
&gt;  Sandia National Laboratories
&gt; 
&gt; 
&gt; 
&gt; 
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
<li><strong>Next message:</strong> <a href="8937.php">Barrett, Brian W: "Re: [OMPI devel] OFED question"</a>
<li><strong>Previous message:</strong> <a href="8935.php">Paul H. Hargrove: "Re: [OMPI devel] OFED question"</a>
<li><strong>In reply to:</strong> <a href="8934.php">Barrett, Brian W: "[OMPI devel] OFED question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8937.php">Barrett, Brian W: "Re: [OMPI devel] OFED question"</a>
<li><strong>Reply:</strong> <a href="8937.php">Barrett, Brian W: "Re: [OMPI devel] OFED question"</a>
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
