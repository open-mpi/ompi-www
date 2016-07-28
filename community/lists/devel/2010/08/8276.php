<?
$subject_val = "Re: [OMPI devel] How to disable paffinity";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Aug 15 21:22:59 2010" -->
<!-- isoreceived="20100816012259" -->
<!-- sent="Mon, 16 Aug 2010 09:22:54 +0800" -->
<!-- isosent="20100816012254" -->
<!-- name="&#213;&#197;&#190;&#167;" -->
<!-- email="iam.chilli_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] How to disable paffinity" -->
<!-- id="AANLkTi=T_dCYWTFVM=nsu-XJbjLvuZLRugG_p_d+e8pz_at_mail.gmail.com" -->
<!-- charset="GB2312" -->
<!-- inreplyto="2C404DAF-006B-4C19-91F2-6BAABFDF834A_at_open-mpi.org" -->
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
<strong>From:</strong> &#213;&#197;&#190;&#167; (<em>iam.chilli_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-15 21:22:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8277.php">Ralph Castain: "Re: [OMPI devel] How to disable paffinity"</a>
<li><strong>Previous message:</strong> <a href="8275.php">Lisandro Dalcin: "Re: [OMPI devel] VampirTrace and MPI_Init_thread()"</a>
<li><strong>In reply to:</strong> <a href="8269.php">Ralph Castain: "Re: [OMPI devel] How to disable paffinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8277.php">Ralph Castain: "Re: [OMPI devel] How to disable paffinity"</a>
<li><strong>Reply:</strong> <a href="8277.php">Ralph Castain: "Re: [OMPI devel] How to disable paffinity"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;Hi Ralph,
<br>
<p>I wonder if I disable the btl-sm component ,the performance of message
<br>
passing will degrade.I need to test how much performance are lost. The code
<br>
quality now is far from to be integrated into trunk,  I will try to clean up
<br>
my code before sending these changes to you .
<br>
<p>&#212;&#218; 2010&#196;&#234;8&#212;&#194;13&#200;&#213; &#207;&#194;&#206;&#231;12:00&#163;&#172;Ralph Castain &lt;rhc_at_[hidden]&gt;&#208;&#180;&#181;&#192;&#163;&#186;
<br>
<p><span class="quotelev1">&gt; This sounds like excellent progress! Jeff and others know much more about
</span><br>
<span class="quotelev1">&gt; MTT than I do, so I'll leave that question to them.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You have two approaches to the mmap issue. Easiest for now would be to
</span><br>
<span class="quotelev1">&gt; simply disable the shared memory component - you can either turn it off at
</span><br>
<span class="quotelev1">&gt; run-time with -mca btl ^sm, or you can direct that it not even be built with
</span><br>
<span class="quotelev1">&gt; -enable-mca-no-build=btl-sm when configuring OMPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I would think your TCP comm would then allow the two procs sharing a host
</span><br>
<span class="quotelev1">&gt; to communicate. Can you give that a try?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'd be happy to begin reviewing the changes, and can help integrate them
</span><br>
<span class="quotelev1">&gt; back into the OMPI trunk, when you feel ready.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 12, 2010, at 9:35 PM, &#213;&#197;&#190;&#167; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Ralph,Jeff and all
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        It is a good news that I can almost run the openmpi on the vxworks
</span><br>
<span class="quotelev1">&gt; ,but there are also still some bugs.The final test which has passed is:
</span><br>
<span class="quotelev1">&gt;       Rank 0 process  calls mpi_send running on the host 0,rank 1 process
</span><br>
<span class="quotelev1">&gt; calls mpi_recv running on the host 1. It works well .For the absence of  the
</span><br>
<span class="quotelev1">&gt; mmap in the vxworks  ,which is used in the btl sm component , it still fails
</span><br>
<span class="quotelev1">&gt; running two processes in the same host.
</span><br>
<span class="quotelev1">&gt;       The difference between the vxworks and unix is the real trouble .For
</span><br>
<span class="quotelev1">&gt; example pipe(),fork(),exec(),socketpair(),fcntl() ,sshd  and so no are not
</span><br>
<span class="quotelev1">&gt; implemented in the vxworks .Replacing these lost with the correspond
</span><br>
<span class="quotelev1">&gt; functions is the key work of the migration.After having a clear
</span><br>
<span class="quotelev1">&gt; understanding of the function of rsh component ,I write a  simple daemon and
</span><br>
<span class="quotelev1">&gt; client to launch the orted for the calling of the rlogin() in the user space
</span><br>
<span class="quotelev1">&gt; of the vxworks complain.
</span><br>
<span class="quotelev1">&gt;       I think there are still many test needed to be launching .Maybe I'd
</span><br>
<span class="quotelev1">&gt; better to look into  MTT.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#212;&#218; 2010&#196;&#234;7&#212;&#194;8&#200;&#213; &#201;&#207;&#206;&#231;9:54&#163;&#172;&#213;&#197;&#190;&#167; &lt;iam.chilli_at_[hidden]&gt;&#208;&#180;&#181;&#192;&#163;&#186;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you ,Squyres , it is really useful !
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#212;&#218; 2010&#196;&#234;7&#212;&#194;7&#200;&#213; &#207;&#194;&#206;&#231;7:22&#163;&#172;Jeff Squyres &lt;jsquyres_at_[hidden]&gt;&#208;&#180;&#181;&#192;&#163;&#186;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jul 6, 2010, at 10:48 PM, &#213;&#197;&#190;&#167; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; 1.If I write a rlogin component ,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is the command line of rlogin that much different than that of rsh/ssh?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  For example, can you just s/rsh/rlogin/ on the overall command line and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; have it just work?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If so, I suspect that tweaking the rsh plm might be far simpler than
</span><br>
<span class="quotelev3">&gt;&gt;&gt; having your own component.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; can I just login in the node in the cluster and launch the process .
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  If it is ,what the role the odls plays ??
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ODLS = ORTE Daemon Local launch Subsystem.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PLM = Process Lifecycle Management.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Meaning: the PLM is used to launch orteds (more on this below) across
</span><br>
<span class="quotelev3">&gt;&gt;&gt; multiple nodes.  The ODLS is used to launch processes locally from the orted
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (e.g., via POSIX fork/exec).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; 2.what is orted? Should the orted exists in every node and functions as
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a node process launch proxy ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yes.  The orted = ORTE daemon.  It is almost always the first thing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; launched on each node and acts as a proxy for launching, killing, and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; monitoring the user's applications on each node.  It also does other control
</span><br>
<span class="quotelev3">&gt;&gt;&gt; kinds of things, like relay stdout/stderr back up to the HNP (more below),
</span><br>
<span class="quotelev3">&gt;&gt;&gt; etc.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; 3,what is hnp ? Is every job has only one hnp ,and when I use mpirun ,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the mpirun process is hnp ??
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; HNP = head node process, meaning mpirun (or actually, orterun -- mpirun
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is a symlink to orterun).  The HNP functions as an orted as well, so it can
</span><br>
<span class="quotelev3">&gt;&gt;&gt; use the ODLS to launch processes locally, etc.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph can provide more detail on all of the above, but these are the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; basics.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; &#213;&#197;&#190;&#167;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt;  _______________________________________________
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8276/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8277.php">Ralph Castain: "Re: [OMPI devel] How to disable paffinity"</a>
<li><strong>Previous message:</strong> <a href="8275.php">Lisandro Dalcin: "Re: [OMPI devel] VampirTrace and MPI_Init_thread()"</a>
<li><strong>In reply to:</strong> <a href="8269.php">Ralph Castain: "Re: [OMPI devel] How to disable paffinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8277.php">Ralph Castain: "Re: [OMPI devel] How to disable paffinity"</a>
<li><strong>Reply:</strong> <a href="8277.php">Ralph Castain: "Re: [OMPI devel] How to disable paffinity"</a>
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
