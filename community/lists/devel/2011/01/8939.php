<?
$subject_val = "Re: [OMPI devel] OFED question";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 27 20:29:59 2011" -->
<!-- isoreceived="20110128012959" -->
<!-- sent="Thu, 27 Jan 2011 20:29:52 -0500" -->
<!-- isosent="20110128012952" -->
<!-- name="Shamis, Pavel" -->
<!-- email="shamisp_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OFED question" -->
<!-- id="5E97F4B2-01E8-494C-BD04-43DB604C9D35_at_ornl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="64462691-FF3D-4CE5-84E0-FD850D580861_at_sandia.gov" -->
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
<strong>Date:</strong> 2011-01-27 20:29:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8940.php">Shamis, Pavel: "Re: [OMPI devel] OFED question"</a>
<li><strong>Previous message:</strong> <a href="8938.php">Paul H. Hargrove: "Re: [OMPI devel] OFED question"</a>
<li><strong>In reply to:</strong> <a href="8937.php">Barrett, Brian W: "Re: [OMPI devel] OFED question"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brain,
<br>
I would calculate maximum number of qps for all-to-all connection:
<br>
4*num_nodes*num_cores^2
<br>
And then compare it to the number reported by : ibv_devinfo -v | grep max_qp
<br>
If your theoretical maximum is close to ib_devinfo number, then I would suspect the qp limitation. Driver manage some internal qps, so you can not get the max.
<br>
<p>For memory limit, I do not have any good idea. If it happens in early stages of app, then probably the limit is really small and I would verify it with IT.
<br>
<p>Regards,
<br>
Pavel (Pasha) Shamis
<br>
<pre>
---
Application Performance Tools Group
Computer Science and Math Division
Oak Ridge National Laboratory
On Jan 27, 2011, at 8:09 PM, Barrett, Brian W wrote:
&gt; Pasha -
&gt; 
&gt; Is there a way to tell which of the two happened or to check the number of QPs available per node?  The app likely does talk to a large number of peers from each process, and the nodes are fairly &quot;fat&quot; - it's quad socket, quad core and they are running 16 MPI ranks for each node.  
&gt; 
&gt; Brian
&gt; 
&gt; On Jan 27, 2011, at 6:17 PM, Shamis, Pavel wrote:
&gt; 
&gt;&gt; Unfortunately verbose error reports are not so friendly...anyway , I may think about 2 issues:
&gt;&gt; 
&gt;&gt; 1. You trying to open open too much QPs. By default ib devices support fairly large amount of QPs and it is quite hard to push it to this corner. But If your job is really huge it may be the case. Or for example, if you share the compute nodes with some other processes that create a lot of qps. The maximum amount of supported qps you may see in ibv_devinfo.
&gt;&gt; 
&gt;&gt; 2. The memory limit for registered memory is too low, as result driver fails allocate and register memory for QP. This scenario is most common. Just happened to me recently, system folks pushed some crap into limits.conf.
&gt;&gt; 
&gt;&gt; Regards,
&gt;&gt; 
&gt;&gt; Pavel (Pasha) Shamis
&gt;&gt; ---
&gt;&gt; Application Performance Tools Group
&gt;&gt; Computer Science and Math Division
&gt;&gt; Oak Ridge National Laboratory
&gt;&gt; 
&gt;&gt; 
&gt;&gt; 
&gt;&gt; 
&gt;&gt; 
&gt;&gt; 
&gt;&gt; On Jan 27, 2011, at 5:56 PM, Barrett, Brian W wrote:
&gt;&gt; 
&gt;&gt;&gt; All -
&gt;&gt;&gt; 
&gt;&gt;&gt; On one of our clusters, we're seeing the following on one of our applications, I believe using Open MPI 1.4.3:
&gt;&gt;&gt; 
&gt;&gt;&gt; [xxx:27545] *** An error occurred in MPI_Scatterv
&gt;&gt;&gt; [xxx:27545] *** on communicator MPI COMMUNICATOR 5 DUP FROM 4
&gt;&gt;&gt; [xxx:27545] *** MPI_ERR_OTHER: known error not in list
&gt;&gt;&gt; [xxx:27545] *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
&gt;&gt;&gt; [xxx][[31806,1],0][connect/btl_openib_connect_oob.c:857:qp_create_one] error creating qp errno says Resource temporarily unavailable
&gt;&gt;&gt; --------------------------------------------------------------------------
&gt;&gt;&gt; mpirun has exited due to process rank 0 with PID 27545 on
&gt;&gt;&gt; node rs1891 exiting without calling &quot;finalize&quot;. This may
&gt;&gt;&gt; have caused other processes in the application to be
&gt;&gt;&gt; terminated by signals sent by mpirun (as reported here).
&gt;&gt;&gt; --------------------------------------------------------------------------
&gt;&gt;&gt; 
&gt;&gt;&gt; 
&gt;&gt;&gt; The problem goes away if we modify the eager protocol msg sizes so that there are only two QPs necessary instead of the default 4.  Is there a way to bump up the number of QPs that can be created on a node, assuming the issue is just running out of available QPs?  If not, any other thoughts on working around the problem?
&gt;&gt;&gt; 
&gt;&gt;&gt; Thanks,
&gt;&gt;&gt; 
&gt;&gt;&gt; Brian
&gt;&gt;&gt; 
&gt;&gt;&gt; --
&gt;&gt;&gt; Brian W. Barrett
&gt;&gt;&gt; Dept. 1423: Scalable System Software
&gt;&gt;&gt; Sandia National Laboratories
&gt;&gt;&gt; 
&gt;&gt;&gt; 
&gt;&gt;&gt; 
&gt;&gt;&gt; 
&gt;&gt;&gt; 
&gt;&gt;&gt; _______________________________________________
&gt;&gt;&gt; devel mailing list
&gt;&gt;&gt; devel_at_[hidden]
&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&gt;&gt; 
&gt;&gt; 
&gt;&gt; _______________________________________________
&gt;&gt; devel mailing list
&gt;&gt; devel_at_[hidden]
&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&gt;&gt; 
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
<li><strong>Next message:</strong> <a href="8940.php">Shamis, Pavel: "Re: [OMPI devel] OFED question"</a>
<li><strong>Previous message:</strong> <a href="8938.php">Paul H. Hargrove: "Re: [OMPI devel] OFED question"</a>
<li><strong>In reply to:</strong> <a href="8937.php">Barrett, Brian W: "Re: [OMPI devel] OFED question"</a>
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
