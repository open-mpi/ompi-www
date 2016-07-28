<?
$subject_val = "Re: [OMPI devel] How to disable paffinity";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  7 07:22:00 2010" -->
<!-- isoreceived="20100707112200" -->
<!-- sent="Wed, 7 Jul 2010 07:22:11 -0400" -->
<!-- isosent="20100707112211" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] How to disable paffinity" -->
<!-- id="5367F160-48B8-4188-B71E-559EA4A9FAE1_at_cisco.com" -->
<!-- charset="GB2312" -->
<!-- inreplyto="AANLkTikUJi0dmBEFGFmhHjg0EDMHIt0OU7bQc9iygAaX_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-07 07:22:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8149.php">Jeff Squyres: "[OMPI devel] NEWS for v1.5"</a>
<li><strong>Previous message:</strong> <a href="8147.php">&#213;&#197;&#190;&#167;: "Re: [OMPI devel] How to disable paffinity"</a>
<li><strong>In reply to:</strong> <a href="8146.php">&#213;&#197;&#190;&#167;: "Re: [OMPI devel] How to disable paffinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8150.php">张晶: "Re: [OMPI devel] How to disable paffinity"</a>
<li><strong>Reply:</strong> <a href="8150.php">张晶: "Re: [OMPI devel] How to disable paffinity"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 6, 2010, at 10:48 PM, &#213;&#197;&#190;&#167; wrote:
<br>
<p><span class="quotelev1">&gt; 1.If I write a rlogin component ,
</span><br>
<p>Is the command line of rlogin that much different than that of rsh/ssh?  For example, can you just s/rsh/rlogin/ on the overall command line and have it just work?
<br>
<p>If so, I suspect that tweaking the rsh plm might be far simpler than having your own component.
<br>
<p><span class="quotelev1">&gt; can I just login in the node in the cluster and launch the process .  If it is ,what the role the odls plays ?? 
</span><br>
<p>ODLS = ORTE Daemon Local launch Subsystem.
<br>
<p>PLM = Process Lifecycle Management.
<br>
<p>Meaning: the PLM is used to launch orteds (more on this below) across multiple nodes.  The ODLS is used to launch processes locally from the orted (e.g., via POSIX fork/exec).
<br>
<p><span class="quotelev1">&gt; 2.what is orted? Should the orted exists in every node and functions as a node process launch proxy ?
</span><br>
<p>Yes.  The orted = ORTE daemon.  It is almost always the first thing launched on each node and acts as a proxy for launching, killing, and monitoring the user's applications on each node.  It also does other control kinds of things, like relay stdout/stderr back up to the HNP (more below), etc.
<br>
<p><span class="quotelev1">&gt; 3,what is hnp ? Is every job has only one hnp ,and when I use mpirun , the mpirun process is hnp ??
</span><br>
<p>HNP = head node process, meaning mpirun (or actually, orterun -- mpirun is a symlink to orterun).  The HNP functions as an orted as well, so it can use the ODLS to launch processes locally, etc.
<br>
<p>Ralph can provide more detail on all of the above, but these are the basics.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8149.php">Jeff Squyres: "[OMPI devel] NEWS for v1.5"</a>
<li><strong>Previous message:</strong> <a href="8147.php">&#213;&#197;&#190;&#167;: "Re: [OMPI devel] How to disable paffinity"</a>
<li><strong>In reply to:</strong> <a href="8146.php">&#213;&#197;&#190;&#167;: "Re: [OMPI devel] How to disable paffinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8150.php">张晶: "Re: [OMPI devel] How to disable paffinity"</a>
<li><strong>Reply:</strong> <a href="8150.php">张晶: "Re: [OMPI devel] How to disable paffinity"</a>
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
