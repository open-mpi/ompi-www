<?
$subject_val = "Re: [OMPI devel] How to disable paffinity";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  7 21:54:35 2010" -->
<!-- isoreceived="20100708015435" -->
<!-- sent="Thu, 8 Jul 2010 09:54:31 +0800" -->
<!-- isosent="20100708015431" -->
<!-- name="&#213;&#197;&#190;&#167;" -->
<!-- email="iam.chilli_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] How to disable paffinity" -->
<!-- id="AANLkTimzuBi-8hH9od2oZ98I3fAntaurNiIXGPBPE6Oe_at_mail.gmail.com" -->
<!-- charset="GB2312" -->
<!-- inreplyto="5367F160-48B8-4188-B71E-559EA4A9FAE1_at_cisco.com" -->
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
<strong>Date:</strong> 2010-07-07 21:54:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8151.php">Jerome Soumagne: "[OMPI devel] alps ras patch for SLURM"</a>
<li><strong>Previous message:</strong> <a href="8149.php">Jeff Squyres: "[OMPI devel] NEWS for v1.5"</a>
<li><strong>In reply to:</strong> <a href="8148.php">Jeff Squyres: "Re: [OMPI devel] How to disable paffinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/08/8268.php">张晶: "Re: [OMPI devel] How to disable paffinity"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/08/8268.php">张晶: "Re: [OMPI devel] How to disable paffinity"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you ,Squyres , it is really useful !
<br>
<p>&#212;&#218; 2010&#196;&#234;7&#212;&#194;7&#200;&#213; &#207;&#194;&#206;&#231;7:22&#163;&#172;Jeff Squyres &lt;jsquyres_at_[hidden]&gt;&#208;&#180;&#181;&#192;&#163;&#186;
<br>
<p><span class="quotelev1">&gt; On Jul 6, 2010, at 10:48 PM, &#213;&#197;&#190;&#167; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; 1.If I write a rlogin component ,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is the command line of rlogin that much different than that of rsh/ssh?
</span><br>
<span class="quotelev1">&gt;  For example, can you just s/rsh/rlogin/ on the overall command line and
</span><br>
<span class="quotelev1">&gt; have it just work?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If so, I suspect that tweaking the rsh plm might be far simpler than having
</span><br>
<span class="quotelev1">&gt; your own component.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; can I just login in the node in the cluster and launch the process .  If
</span><br>
<span class="quotelev1">&gt; it is ,what the role the odls plays ??
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
<span class="quotelev1">&gt; Meaning: the PLM is used to launch orteds (more on this below) across
</span><br>
<span class="quotelev1">&gt; multiple nodes.  The ODLS is used to launch processes locally from the orted
</span><br>
<span class="quotelev1">&gt; (e.g., via POSIX fork/exec).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; 2.what is orted? Should the orted exists in every node and functions as a
</span><br>
<span class="quotelev1">&gt; node process launch proxy ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes.  The orted = ORTE daemon.  It is almost always the first thing
</span><br>
<span class="quotelev1">&gt; launched on each node and acts as a proxy for launching, killing, and
</span><br>
<span class="quotelev1">&gt; monitoring the user's applications on each node.  It also does other control
</span><br>
<span class="quotelev1">&gt; kinds of things, like relay stdout/stderr back up to the HNP (more below),
</span><br>
<span class="quotelev1">&gt; etc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; 3,what is hnp ? Is every job has only one hnp ,and when I use mpirun ,
</span><br>
<span class="quotelev1">&gt; the mpirun process is hnp ??
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; HNP = head node process, meaning mpirun (or actually, orterun -- mpirun is
</span><br>
<span class="quotelev1">&gt; a symlink to orterun).  The HNP functions as an orted as well, so it can use
</span><br>
<span class="quotelev1">&gt; the ODLS to launch processes locally, etc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph can provide more detail on all of the above, but these are the
</span><br>
<span class="quotelev1">&gt; basics.
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
<p><p><p><pre>
-- 
&#213;&#197;&#190;&#167;
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8150/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8151.php">Jerome Soumagne: "[OMPI devel] alps ras patch for SLURM"</a>
<li><strong>Previous message:</strong> <a href="8149.php">Jeff Squyres: "[OMPI devel] NEWS for v1.5"</a>
<li><strong>In reply to:</strong> <a href="8148.php">Jeff Squyres: "Re: [OMPI devel] How to disable paffinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/08/8268.php">张晶: "Re: [OMPI devel] How to disable paffinity"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/08/8268.php">张晶: "Re: [OMPI devel] How to disable paffinity"</a>
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
