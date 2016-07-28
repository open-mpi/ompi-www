<?
$subject_val = "Re: [OMPI devel] How to disable paffinity";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 12 23:35:17 2010" -->
<!-- isoreceived="20100813033517" -->
<!-- sent="Fri, 13 Aug 2010 11:35:12 +0800" -->
<!-- isosent="20100813033512" -->
<!-- name="&#213;&#197;&#190;&#167;" -->
<!-- email="iam.chilli_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] How to disable paffinity" -->
<!-- id="AANLkTi=dFOoeyrqnMKS75KiJo4jXPFEMXWXX08zqBsyi_at_mail.gmail.com" -->
<!-- charset="GB2312" -->
<!-- inreplyto="AANLkTimzuBi-8hH9od2oZ98I3fAntaurNiIXGPBPE6Oe_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2010-08-12 23:35:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8269.php">Ralph Castain: "Re: [OMPI devel] How to disable paffinity"</a>
<li><strong>Previous message:</strong> <a href="8267.php">Samuel K. Gutierrez: "Re: [OMPI devel] Trunk Commit Heads-up: New Common Shared Memory Component"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/07/8150.php">&#213;&#197;&#190;&#167;: "Re: [OMPI devel] How to disable paffinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8269.php">Ralph Castain: "Re: [OMPI devel] How to disable paffinity"</a>
<li><strong>Reply:</strong> <a href="8269.php">Ralph Castain: "Re: [OMPI devel] How to disable paffinity"</a>
<li><strong>Reply:</strong> <a href="8272.php">Jeff Squyres: "Re: [OMPI devel] How to disable paffinity"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,Jeff and all
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;It is a good news that I can almost run the openmpi on the vxworks
<br>
,but there are also still some bugs.The final test which has passed is:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rank 0 process  calls mpi_send running on the host 0,rank 1 process
<br>
calls mpi_recv running on the host 1. It works well .For the absence of  the
<br>
mmap in the vxworks  ,which is used in the btl sm component , it still fails
<br>
running two processes in the same host.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The difference between the vxworks and unix is the real trouble .For
<br>
example pipe(),fork(),exec(),socketpair(),fcntl() ,sshd  and so no are not
<br>
implemented in the vxworks .Replacing these lost with the correspond
<br>
functions is the key work of the migration.After having a clear
<br>
understanding of the function of rsh component ,I write a  simple daemon and
<br>
client to launch the orted for the calling of the rlogin() in the user space
<br>
of the vxworks complain.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I think there are still many test needed to be launching .Maybe I'd
<br>
better to look into  MTT.
<br>
<p>&#212;&#218; 2010&#196;&#234;7&#212;&#194;8&#200;&#213; &#201;&#207;&#206;&#231;9:54&#163;&#172;&#213;&#197;&#190;&#167; &lt;iam.chilli_at_[hidden]&gt;&#208;&#180;&#181;&#192;&#163;&#186;
<br>
<p><span class="quotelev1">&gt; Thank you ,Squyres , it is really useful !
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#212;&#218; 2010&#196;&#234;7&#212;&#194;7&#200;&#213; &#207;&#194;&#206;&#231;7:22&#163;&#172;Jeff Squyres &lt;jsquyres_at_[hidden]&gt;&#208;&#180;&#181;&#192;&#163;&#186;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 6, 2010, at 10:48 PM, &#213;&#197;&#190;&#167; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 1.If I write a rlogin component ,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is the command line of rlogin that much different than that of rsh/ssh?
</span><br>
<span class="quotelev2">&gt;&gt;  For example, can you just s/rsh/rlogin/ on the overall command line and
</span><br>
<span class="quotelev2">&gt;&gt; have it just work?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If so, I suspect that tweaking the rsh plm might be far simpler than
</span><br>
<span class="quotelev2">&gt;&gt; having your own component.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; can I just login in the node in the cluster and launch the process .  If
</span><br>
<span class="quotelev2">&gt;&gt; it is ,what the role the odls plays ??
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ODLS = ORTE Daemon Local launch Subsystem.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; PLM = Process Lifecycle Management.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Meaning: the PLM is used to launch orteds (more on this below) across
</span><br>
<span class="quotelev2">&gt;&gt; multiple nodes.  The ODLS is used to launch processes locally from the orted
</span><br>
<span class="quotelev2">&gt;&gt; (e.g., via POSIX fork/exec).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 2.what is orted? Should the orted exists in every node and functions as
</span><br>
<span class="quotelev2">&gt;&gt; a node process launch proxy ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yes.  The orted = ORTE daemon.  It is almost always the first thing
</span><br>
<span class="quotelev2">&gt;&gt; launched on each node and acts as a proxy for launching, killing, and
</span><br>
<span class="quotelev2">&gt;&gt; monitoring the user's applications on each node.  It also does other control
</span><br>
<span class="quotelev2">&gt;&gt; kinds of things, like relay stdout/stderr back up to the HNP (more below),
</span><br>
<span class="quotelev2">&gt;&gt; etc.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 3,what is hnp ? Is every job has only one hnp ,and when I use mpirun ,
</span><br>
<span class="quotelev2">&gt;&gt; the mpirun process is hnp ??
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; HNP = head node process, meaning mpirun (or actually, orterun -- mpirun is
</span><br>
<span class="quotelev2">&gt;&gt; a symlink to orterun).  The HNP functions as an orted as well, so it can use
</span><br>
<span class="quotelev2">&gt;&gt; the ODLS to launch processes locally, etc.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph can provide more detail on all of the above, but these are the
</span><br>
<span class="quotelev2">&gt;&gt; basics.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<p><p><p><pre>
-- 
&#213;&#197;&#190;&#167;
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8268/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8269.php">Ralph Castain: "Re: [OMPI devel] How to disable paffinity"</a>
<li><strong>Previous message:</strong> <a href="8267.php">Samuel K. Gutierrez: "Re: [OMPI devel] Trunk Commit Heads-up: New Common Shared Memory Component"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/07/8150.php">&#213;&#197;&#190;&#167;: "Re: [OMPI devel] How to disable paffinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8269.php">Ralph Castain: "Re: [OMPI devel] How to disable paffinity"</a>
<li><strong>Reply:</strong> <a href="8269.php">Ralph Castain: "Re: [OMPI devel] How to disable paffinity"</a>
<li><strong>Reply:</strong> <a href="8272.php">Jeff Squyres: "Re: [OMPI devel] How to disable paffinity"</a>
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
