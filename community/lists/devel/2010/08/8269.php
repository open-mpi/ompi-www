<?
$subject_val = "Re: [OMPI devel] How to disable paffinity";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 13 00:00:54 2010" -->
<!-- isoreceived="20100813040054" -->
<!-- sent="Thu, 12 Aug 2010 22:00:45 -0600" -->
<!-- isosent="20100813040045" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] How to disable paffinity" -->
<!-- id="2C404DAF-006B-4C19-91F2-6BAABFDF834A_at_open-mpi.org" -->
<!-- charset="GB2312" -->
<!-- inreplyto="AANLkTi=dFOoeyrqnMKS75KiJo4jXPFEMXWXX08zqBsyi_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] How to disable paffinity<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-13 00:00:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8270.php">Matthias Jurenz: "Re: [OMPI devel] VampirTrace and MPI_Init_thread()"</a>
<li><strong>Previous message:</strong> <a href="8268.php">&#213;&#197;&#190;&#167;: "Re: [OMPI devel] How to disable paffinity"</a>
<li><strong>In reply to:</strong> <a href="8268.php">&#213;&#197;&#190;&#167;: "Re: [OMPI devel] How to disable paffinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8271.php">Jeff Squyres: "Re: [OMPI devel] How to disable paffinity"</a>
<li><strong>Reply:</strong> <a href="8271.php">Jeff Squyres: "Re: [OMPI devel] How to disable paffinity"</a>
<li><strong>Reply:</strong> <a href="8276.php">’≈æß: "Re: [OMPI devel] How to disable paffinity"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This sounds like excellent progress! Jeff and others know much more about MTT than I do, so I'll leave that question to them.
<br>
<p>You have two approaches to the mmap issue. Easiest for now would be to simply disable the shared memory component - you can either turn it off at run-time with -mca btl ^sm, or you can direct that it not even be built with -enable-mca-no-build=btl-sm when configuring OMPI.
<br>
<p>I would think your TCP comm would then allow the two procs sharing a host to communicate. Can you give that a try?
<br>
<p>I'd be happy to begin reviewing the changes, and can help integrate them back into the OMPI trunk, when you feel ready.
<br>
<p><p>On Aug 12, 2010, at 9:35 PM, &#213;&#197;&#190;&#167; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Ralph,Jeff and all
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        It is a good news that I can almost run the openmpi on the vxworks ,but there are also still some bugs.The final test which has passed is:
</span><br>
<span class="quotelev1">&gt;       Rank 0 process  calls mpi_send running on the host 0,rank 1 process calls mpi_recv running on the host 1. It works well .For the absence of  the mmap in the vxworks  ,which is used in the btl sm component , it still fails running two processes in the same host.
</span><br>
<span class="quotelev1">&gt;       The difference between the vxworks and unix is the real trouble .For example pipe(),fork(),exec(),socketpair(),fcntl() ,sshd  and so no are not implemented in the vxworks .Replacing these lost with the correspond functions is the key work of the migration.After having a clear understanding of the function of rsh component ,I write a  simple daemon and client to launch the orted for the calling of the rlogin() in the user space of the vxworks complain. 
</span><br>
<span class="quotelev1">&gt;       I think there are still many test needed to be launching .Maybe I'd better to look into  MTT.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &#212;&#218; 2010&#196;&#234;7&#212;&#194;8&#200;&#213; &#201;&#207;&#206;&#231;9:54&#163;&#172;&#213;&#197;&#190;&#167; &lt;iam.chilli_at_[hidden]&gt;&#208;&#180;&#181;&#192;&#163;&#186;
</span><br>
<span class="quotelev1">&gt; Thank you ,Squyres , it is really useful !
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &#212;&#218; 2010&#196;&#234;7&#212;&#194;7&#200;&#213; &#207;&#194;&#206;&#231;7:22&#163;&#172;Jeff Squyres &lt;jsquyres_at_[hidden]&gt;&#208;&#180;&#181;&#192;&#163;&#186;
</span><br>
<span class="quotelev1">&gt; On Jul 6, 2010, at 10:48 PM, &#213;&#197;&#190;&#167; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 1.If I write a rlogin component ,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is the command line of rlogin that much different than that of rsh/ssh?  For example, can you just s/rsh/rlogin/ on the overall command line and have it just work?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If so, I suspect that tweaking the rsh plm might be far simpler than having your own component.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; can I just login in the node in the cluster and launch the process .  If it is ,what the role the odls plays ??
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ODLS = ORTE Daemon Local launch Subsystem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; PLM = Process Lifecycle Management.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Meaning: the PLM is used to launch orteds (more on this below) across multiple nodes.  The ODLS is used to launch processes locally from the orted (e.g., via POSIX fork/exec).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 2.what is orted? Should the orted exists in every node and functions as a node process launch proxy ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes.  The orted = ORTE daemon.  It is almost always the first thing launched on each node and acts as a proxy for launching, killing, and monitoring the user's applications on each node.  It also does other control kinds of things, like relay stdout/stderr back up to the HNP (more below), etc.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 3,what is hnp ? Is every job has only one hnp ,and when I use mpirun , the mpirun process is hnp ??
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; HNP = head node process, meaning mpirun (or actually, orterun -- mpirun is a symlink to orterun).  The HNP functions as an orted as well, so it can use the ODLS to launch processes locally, etc.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph can provide more detail on all of the above, but these are the basics.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; &#213;&#197;&#190;&#167;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; &#213;&#197;&#190;&#167;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8269/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8270.php">Matthias Jurenz: "Re: [OMPI devel] VampirTrace and MPI_Init_thread()"</a>
<li><strong>Previous message:</strong> <a href="8268.php">&#213;&#197;&#190;&#167;: "Re: [OMPI devel] How to disable paffinity"</a>
<li><strong>In reply to:</strong> <a href="8268.php">&#213;&#197;&#190;&#167;: "Re: [OMPI devel] How to disable paffinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8271.php">Jeff Squyres: "Re: [OMPI devel] How to disable paffinity"</a>
<li><strong>Reply:</strong> <a href="8271.php">Jeff Squyres: "Re: [OMPI devel] How to disable paffinity"</a>
<li><strong>Reply:</strong> <a href="8276.php">’≈æß: "Re: [OMPI devel] How to disable paffinity"</a>
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
