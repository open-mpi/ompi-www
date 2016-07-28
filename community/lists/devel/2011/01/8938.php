<?
$subject_val = "Re: [OMPI devel] OFED question";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 27 20:20:21 2011" -->
<!-- isoreceived="20110128012021" -->
<!-- sent="Thu, 27 Jan 2011 17:19:39 -0800" -->
<!-- isosent="20110128011939" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OFED question" -->
<!-- id="4D4219AB.9070909_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-27 20:19:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8939.php">Shamis, Pavel: "Re: [OMPI devel] OFED question"</a>
<li><strong>Previous message:</strong> <a href="8937.php">Barrett, Brian W: "Re: [OMPI devel] OFED question"</a>
<li><strong>In reply to:</strong> <a href="8937.php">Barrett, Brian W: "Re: [OMPI devel] OFED question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8940.php">Shamis, Pavel: "Re: [OMPI devel] OFED question"</a>
<li><strong>Reply:</strong> <a href="8940.php">Shamis, Pavel: "Re: [OMPI devel] OFED question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brian,
<br>
<p>As Pasha said:
<br>
<span class="quotelev1">&gt; The maximum amount of supported qps you may see in ibv_devinfo.
</span><br>
<p>However you'll probably need &quot;-v&quot;:
<br>
<p>{hargrove_at_cvrsvc05 ~}$ ibv_devinfo | grep max_qp:
<br>
{hargrove_at_cvrsvc05 ~}$ ibv_devinfo -v | grep max_qp:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;max_qp:                         261056
<br>
<p>If you really are running out of QPs due to the &quot;fattness&quot; of the node, 
<br>
then you should definitely look at enabling XRC if your HCA and 
<br>
libibverbs version supports it.  ibv_devinfo can query the HCA capability:
<br>
<p>{hargrove_at_cvrsvc05 ~}$ ibv_devinfo -v | grep port_cap_flags:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;port_cap_flags:         0x02510868
<br>
<p>and look for bit 0x00100000  ( == 1&lt;&lt;20).
<br>
<p>-Paul
<br>
<p><p><p>On 1/27/2011 5:09 PM, Barrett, Brian W wrote:
<br>
<span class="quotelev1">&gt; Pasha -
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there a way to tell which of the two happened or to check the number of QPs available per node?  The app likely does talk to a large number of peers from each process, and the nodes are fairly &quot;fat&quot; - it's quad socket, quad core and they are running 16 MPI ranks for each node.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 27, 2011, at 6:17 PM, Shamis, Pavel wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Unfortunately verbose error reports are not so friendly...anyway , I may think about 2 issues:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1. You trying to open open too much QPs. By default ib devices support fairly large amount of QPs and it is quite hard to push it to this corner. But If your job is really huge it may be the case. Or for example, if you share the compute nodes with some other processes that create a lot of qps. The maximum amount of supported qps you may see in ibv_devinfo.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2. The memory limit for registered memory is too low, as result driver fails allocate and register memory for QP. This scenario is most common. Just happened to me recently, system folks pushed some crap into limits.conf.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Pavel (Pasha) Shamis
</span><br>
<span class="quotelev2">&gt;&gt; ---
</span><br>
<span class="quotelev2">&gt;&gt; Application Performance Tools Group
</span><br>
<span class="quotelev2">&gt;&gt; Computer Science and Math Division
</span><br>
<span class="quotelev2">&gt;&gt; Oak Ridge National Laboratory
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 27, 2011, at 5:56 PM, Barrett, Brian W wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; All -
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On one of our clusters, we're seeing the following on one of our applications, I believe using Open MPI 1.4.3:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [xxx:27545] *** An error occurred in MPI_Scatterv
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [xxx:27545] *** on communicator MPI COMMUNICATOR 5 DUP FROM 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [xxx:27545] *** MPI_ERR_OTHER: known error not in list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [xxx:27545] *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [xxx][[31806,1],0][connect/btl_openib_connect_oob.c:857:qp_create_one] error creating qp errno says Resource temporarily unavailable
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun has exited due to process rank 0 with PID 27545 on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node rs1891 exiting without calling &quot;finalize&quot;. This may
</span><br>
<span class="quotelev3">&gt;&gt;&gt; have caused other processes in the application to be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The problem goes away if we modify the eager protocol msg sizes so that there are only two QPs necessary instead of the default 4.  Is there a way to bump up the number of QPs that can be created on a node, assuming the issue is just running out of available QPs?  If not, any other thoughts on working around the problem?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brian
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brian W. Barrett
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dept. 1423: Scalable System Software
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sandia National Laboratories
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;    Brian W. Barrett
</span><br>
<span class="quotelev1">&gt;    Dept. 1423: Scalable System Software
</span><br>
<span class="quotelev1">&gt;    Sandia National Laboratories
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
HPC Research Department                   Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8939.php">Shamis, Pavel: "Re: [OMPI devel] OFED question"</a>
<li><strong>Previous message:</strong> <a href="8937.php">Barrett, Brian W: "Re: [OMPI devel] OFED question"</a>
<li><strong>In reply to:</strong> <a href="8937.php">Barrett, Brian W: "Re: [OMPI devel] OFED question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8940.php">Shamis, Pavel: "Re: [OMPI devel] OFED question"</a>
<li><strong>Reply:</strong> <a href="8940.php">Shamis, Pavel: "Re: [OMPI devel] OFED question"</a>
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
