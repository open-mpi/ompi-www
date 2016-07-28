<?
$subject_val = "Re: [OMPI devel] OFED question";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 27 20:35:03 2011" -->
<!-- isoreceived="20110128013503" -->
<!-- sent="Thu, 27 Jan 2011 20:34:57 -0500" -->
<!-- isosent="20110128013457" -->
<!-- name="Shamis, Pavel" -->
<!-- email="shamisp_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OFED question" -->
<!-- id="801A6998-6629-4CE9-8CEF-870929A7FA20_at_ornl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4D4219AB.9070909_at_lbl.gov" -->
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
<strong>Date:</strong> 2011-01-27 20:34:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8941.php">Paul H. Hargrove: "Re: [OMPI devel] OFED question"</a>
<li><strong>Previous message:</strong> <a href="8939.php">Shamis, Pavel: "Re: [OMPI devel] OFED question"</a>
<li><strong>In reply to:</strong> <a href="8938.php">Paul H. Hargrove: "Re: [OMPI devel] OFED question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8941.php">Paul H. Hargrove: "Re: [OMPI devel] OFED question"</a>
<li><strong>Reply:</strong> <a href="8941.php">Paul H. Hargrove: "Re: [OMPI devel] OFED question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Good point Paul.
<br>
<p>I love XRC :-)
<br>
<p>You may try to switch default configuration to XRC.
<br>
--mca btl_openib_receive_queues X,128,256,192,128:X,2048,256,128,32:X,12288,256,128,32:X,65536,256,128,32
<br>
<p>If XRC is not supported on your platform, ompi should report some nice message.
<br>
<p>BTW, on multi core system XRC should show better performance.
<br>
<p>Pavel (Pasha) Shamis
<br>
<pre>
---
Application Performance Tools Group
Computer Science and Math Division
Oak Ridge National Laboratory
On Jan 27, 2011, at 8:19 PM, Paul H. Hargrove wrote:
&gt; Brian,
&gt; 
&gt; As Pasha said:
&gt;&gt; The maximum amount of supported qps you may see in ibv_devinfo.
&gt; 
&gt; However you'll probably need &quot;-v&quot;:
&gt; 
&gt; {hargrove_at_cvrsvc05 ~}$ ibv_devinfo | grep max_qp:
&gt; {hargrove_at_cvrsvc05 ~}$ ibv_devinfo -v | grep max_qp:
&gt;         max_qp:                         261056
&gt; 
&gt; If you really are running out of QPs due to the &quot;fattness&quot; of the node, 
&gt; then you should definitely look at enabling XRC if your HCA and 
&gt; libibverbs version supports it.  ibv_devinfo can query the HCA capability:
&gt; 
&gt; {hargrove_at_cvrsvc05 ~}$ ibv_devinfo -v | grep port_cap_flags:
&gt;                         port_cap_flags:         0x02510868
&gt; 
&gt; and look for bit 0x00100000  ( == 1&lt;&lt;20).
&gt; 
&gt; -Paul
&gt; 
&gt; 
&gt; 
&gt; On 1/27/2011 5:09 PM, Barrett, Brian W wrote:
&gt;&gt; Pasha -
&gt;&gt; 
&gt;&gt; Is there a way to tell which of the two happened or to check the number of QPs available per node?  The app likely does talk to a large number of peers from each process, and the nodes are fairly &quot;fat&quot; - it's quad socket, quad core and they are running 16 MPI ranks for each node.
&gt;&gt; 
&gt;&gt; Brian
&gt;&gt; 
&gt;&gt; On Jan 27, 2011, at 6:17 PM, Shamis, Pavel wrote:
&gt;&gt; 
&gt;&gt;&gt; Unfortunately verbose error reports are not so friendly...anyway , I may think about 2 issues:
&gt;&gt;&gt; 
&gt;&gt;&gt; 1. You trying to open open too much QPs. By default ib devices support fairly large amount of QPs and it is quite hard to push it to this corner. But If your job is really huge it may be the case. Or for example, if you share the compute nodes with some other processes that create a lot of qps. The maximum amount of supported qps you may see in ibv_devinfo.
&gt;&gt;&gt; 
&gt;&gt;&gt; 2. The memory limit for registered memory is too low, as result driver fails allocate and register memory for QP. This scenario is most common. Just happened to me recently, system folks pushed some crap into limits.conf.
&gt;&gt;&gt; 
&gt;&gt;&gt; Regards,
&gt;&gt;&gt; 
&gt;&gt;&gt; Pavel (Pasha) Shamis
&gt;&gt;&gt; ---
&gt;&gt;&gt; Application Performance Tools Group
&gt;&gt;&gt; Computer Science and Math Division
&gt;&gt;&gt; Oak Ridge National Laboratory
&gt;&gt;&gt; 
&gt;&gt;&gt; 
&gt;&gt;&gt; 
&gt;&gt;&gt; 
&gt;&gt;&gt; 
&gt;&gt;&gt; 
&gt;&gt;&gt; On Jan 27, 2011, at 5:56 PM, Barrett, Brian W wrote:
&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; All -
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; On one of our clusters, we're seeing the following on one of our applications, I believe using Open MPI 1.4.3:
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; [xxx:27545] *** An error occurred in MPI_Scatterv
&gt;&gt;&gt;&gt; [xxx:27545] *** on communicator MPI COMMUNICATOR 5 DUP FROM 4
&gt;&gt;&gt;&gt; [xxx:27545] *** MPI_ERR_OTHER: known error not in list
&gt;&gt;&gt;&gt; [xxx:27545] *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
&gt;&gt;&gt;&gt; [xxx][[31806,1],0][connect/btl_openib_connect_oob.c:857:qp_create_one] error creating qp errno says Resource temporarily unavailable
&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
&gt;&gt;&gt;&gt; mpirun has exited due to process rank 0 with PID 27545 on
&gt;&gt;&gt;&gt; node rs1891 exiting without calling &quot;finalize&quot;. This may
&gt;&gt;&gt;&gt; have caused other processes in the application to be
&gt;&gt;&gt;&gt; terminated by signals sent by mpirun (as reported here).
&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; The problem goes away if we modify the eager protocol msg sizes so that there are only two QPs necessary instead of the default 4.  Is there a way to bump up the number of QPs that can be created on a node, assuming the issue is just running out of available QPs?  If not, any other thoughts on working around the problem?
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; Thanks,
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; Brian
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; --
&gt;&gt;&gt;&gt; Brian W. Barrett
&gt;&gt;&gt;&gt; Dept. 1423: Scalable System Software
&gt;&gt;&gt;&gt; Sandia National Laboratories
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; _______________________________________________
&gt;&gt;&gt;&gt; devel mailing list
&gt;&gt;&gt;&gt; devel_at_[hidden]
&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&gt;&gt;&gt; 
&gt;&gt;&gt; _______________________________________________
&gt;&gt;&gt; devel mailing list
&gt;&gt;&gt; devel_at_[hidden]
&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&gt;&gt;&gt; 
&gt;&gt; --
&gt;&gt;   Brian W. Barrett
&gt;&gt;   Dept. 1423: Scalable System Software
&gt;&gt;   Sandia National Laboratories
&gt;&gt; 
&gt;&gt; 
&gt;&gt; 
&gt;&gt; 
&gt;&gt; 
&gt;&gt; _______________________________________________
&gt;&gt; devel mailing list
&gt;&gt; devel_at_[hidden]
&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&gt; 
&gt; -- 
&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
&gt; Future Technologies Group
&gt; HPC Research Department                   Tel: +1-510-495-2352
&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
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
<li><strong>Next message:</strong> <a href="8941.php">Paul H. Hargrove: "Re: [OMPI devel] OFED question"</a>
<li><strong>Previous message:</strong> <a href="8939.php">Shamis, Pavel: "Re: [OMPI devel] OFED question"</a>
<li><strong>In reply to:</strong> <a href="8938.php">Paul H. Hargrove: "Re: [OMPI devel] OFED question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8941.php">Paul H. Hargrove: "Re: [OMPI devel] OFED question"</a>
<li><strong>Reply:</strong> <a href="8941.php">Paul H. Hargrove: "Re: [OMPI devel] OFED question"</a>
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
