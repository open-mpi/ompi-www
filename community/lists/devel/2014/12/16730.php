<?
$subject_val = "Re: [OMPI devel] problem running jobs on ompi-master";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 26 12:02:26 2014" -->
<!-- isoreceived="20141226170226" -->
<!-- sent="Fri, 26 Dec 2014 11:02:05 -0600" -->
<!-- isosent="20141226170205" -->
<!-- name="Edgar Gabriel" -->
<!-- email="gabriel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] problem running jobs on ompi-master" -->
<!-- id="549D948D.9010707_at_cs.uh.edu" -->
<!-- charset="utf-8" -->
<!-- inreplyto="0dpxkpagjs1tmq7m57vu757f.1419606234459_at_email.android.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] problem running jobs on ompi-master<br>
<strong>From:</strong> Edgar Gabriel (<em>gabriel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-26 12:02:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16731.php">Edgar Gabriel: "[OMPI devel] openib receive queue settings"</a>
<li><strong>Previous message:</strong> <a href="16729.php">Ralph Castain: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-618-g9e9261e"</a>
<li><strong>In reply to:</strong> <a href="16728.php">Gilles Gouaillardet: "Re: [OMPI devel] problem running jobs on ompi-master"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I applied the patch manually and it seemed in fact to resolve the issue, 
<br>
thanks! I must have done the git clone just right before this patch was 
<br>
committed two days back, so I just missed it (redoing it right now as well).
<br>
<p>Thanks
<br>
Edgar
<br>
<p>On 12/26/2014 9:06 AM, Gilles Gouaillardet wrote:
<br>
<span class="quotelev1">&gt; Edgar,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; First, make sure your master includes <a href="https://github.com/open-mpi/ompi/commit/05af80b3025dbb95bdd4280087450791291d7219">https://github.com/open-mpi/ompi/commit/05af80b3025dbb95bdd4280087450791291d7219</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If this is not enough, try with --mca coll ^ml
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hope this helps
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Edgar Gabriel &lt;gabriel_at_[hidden]&gt;&#227;&#129;&#149;&#227;&#130;&#147;&#227;&#129;&#174;&#227;&#131;&#161;&#227;&#131;&#188;&#227;&#131;&#171;:
</span><br>
<span class="quotelev2">&gt;&gt; I have some problems running jobs with ompi-master on one of our
</span><br>
<span class="quotelev2">&gt;&gt; clusters (after doing a major software update). Here are scenarios that
</span><br>
<span class="quotelev2">&gt;&gt; work and don't work.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1. Everything still seems to work with 1.8.x series without any issues
</span><br>
<span class="quotelev2">&gt;&gt; 2. With master, I can run without any issues single node, multi-process jobs
</span><br>
<span class="quotelev2">&gt;&gt; 3. With master, I can run without any issues multi node jobs, as long as
</span><br>
<span class="quotelev2">&gt;&gt; there is only a single MPI process per node
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 4. I can not run multi-node jobs with multiple processes per node, ompi
</span><br>
<span class="quotelev2">&gt;&gt; hangs for that scenario. This is independent of whether I enforce using
</span><br>
<span class="quotelev2">&gt;&gt; openib or tcp, and just for the sake of simplicity I attach the output
</span><br>
<span class="quotelev2">&gt;&gt; for tcp (there is another openib parameter issue that still linguers,
</span><br>
<span class="quotelev2">&gt;&gt; but I will report that later).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here is the output that I receive if setting btl_base_verbose
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ---------------snip------------------
</span><br>
<span class="quotelev2">&gt;&gt; gabriel_at_crill:~&gt; salloc -N 2 -n 4
</span><br>
<span class="quotelev2">&gt;&gt; gabriel_at_crill:~&gt; mpirun --mca btl tcp,self --mca btl_base_verbose 30 -np
</span><br>
<span class="quotelev2">&gt;&gt;   4 ./hello_world
</span><br>
<span class="quotelev2">&gt;&gt; [crill-004:18161] mca: base: components_register: registering btl components
</span><br>
<span class="quotelev2">&gt;&gt; [crill-004:18161] mca: base: components_register: found loaded component
</span><br>
<span class="quotelev2">&gt;&gt; self
</span><br>
<span class="quotelev2">&gt;&gt; [crill-004:18161] mca: base: components_register: component self
</span><br>
<span class="quotelev2">&gt;&gt; register function successful
</span><br>
<span class="quotelev2">&gt;&gt; [crill-004:18161] mca: base: components_register: found loaded component tcp
</span><br>
<span class="quotelev2">&gt;&gt; [crill-004:18161] mca: base: components_register: component tcp register
</span><br>
<span class="quotelev2">&gt;&gt; function successful
</span><br>
<span class="quotelev2">&gt;&gt; [crill-004:18161] mca: base: components_open: opening btl components
</span><br>
<span class="quotelev2">&gt;&gt; [crill-004:18161] mca: base: components_open: found loaded component self
</span><br>
<span class="quotelev2">&gt;&gt; [crill-004:18161] mca: base: components_open: component self open
</span><br>
<span class="quotelev2">&gt;&gt; function successful
</span><br>
<span class="quotelev2">&gt;&gt; [crill-004:18161] mca: base: components_open: found loaded component tcp
</span><br>
<span class="quotelev2">&gt;&gt; [crill-004:18161] mca: base: components_open: component tcp open
</span><br>
<span class="quotelev2">&gt;&gt; function successful
</span><br>
<span class="quotelev2">&gt;&gt; [crill-004:18161] select: initializing btl component self
</span><br>
<span class="quotelev2">&gt;&gt; [crill-004:18161] select: init of component self returned success
</span><br>
<span class="quotelev2">&gt;&gt; [crill-004:18161] select: initializing btl component tcp
</span><br>
<span class="quotelev2">&gt;&gt; [crill-004:18161] btl: tcp: Searching for exclude address+prefix:
</span><br>
<span class="quotelev2">&gt;&gt; 127.0.0.1 / 8
</span><br>
<span class="quotelev2">&gt;&gt; [crill-004:18161] btl: tcp: Found match: 127.0.0.1 (lo)
</span><br>
<span class="quotelev2">&gt;&gt; [crill-004:18161] select: init of component tcp returned success
</span><br>
<span class="quotelev2">&gt;&gt; [crill-003:18962] mca: base: components_register: registering btl components
</span><br>
<span class="quotelev2">&gt;&gt; [crill-003:18962] mca: base: components_register: found loaded component
</span><br>
<span class="quotelev2">&gt;&gt; self
</span><br>
<span class="quotelev2">&gt;&gt; [crill-003:18962] mca: base: components_register: component self
</span><br>
<span class="quotelev2">&gt;&gt; register function successful
</span><br>
<span class="quotelev2">&gt;&gt; [crill-003:18962] mca: base: components_register: found loaded component tcp
</span><br>
<span class="quotelev2">&gt;&gt; [crill-003:18962] mca: base: components_register: component tcp register
</span><br>
<span class="quotelev2">&gt;&gt; function successful
</span><br>
<span class="quotelev2">&gt;&gt; [crill-003:18962] mca: base: components_open: opening btl components
</span><br>
<span class="quotelev2">&gt;&gt; [crill-003:18962] mca: base: components_open: found loaded component self
</span><br>
<span class="quotelev2">&gt;&gt; [crill-003:18962] mca: base: components_open: component self open
</span><br>
<span class="quotelev2">&gt;&gt; function successful
</span><br>
<span class="quotelev2">&gt;&gt; [crill-003:18962] mca: base: components_open: found loaded component tcp
</span><br>
<span class="quotelev2">&gt;&gt; [crill-003:18962] mca: base: components_open: component tcp open
</span><br>
<span class="quotelev2">&gt;&gt; function successful
</span><br>
<span class="quotelev2">&gt;&gt; [crill-003:18963] mca: base: components_register: registering btl components
</span><br>
<span class="quotelev2">&gt;&gt; [crill-003:18963] mca: base: components_register: found loaded component
</span><br>
<span class="quotelev2">&gt;&gt; self
</span><br>
<span class="quotelev2">&gt;&gt; [crill-003:18963] mca: base: components_register: component self
</span><br>
<span class="quotelev2">&gt;&gt; register function successful
</span><br>
<span class="quotelev2">&gt;&gt; [crill-003:18963] mca: base: components_register: found loaded component tcp
</span><br>
<span class="quotelev2">&gt;&gt; [crill-003:18963] mca: base: components_register: component tcp register
</span><br>
<span class="quotelev2">&gt;&gt; function successful
</span><br>
<span class="quotelev2">&gt;&gt; [crill-003:18963] mca: base: components_open: opening btl components
</span><br>
<span class="quotelev2">&gt;&gt; [crill-003:18963] mca: base: components_open: found loaded component self
</span><br>
<span class="quotelev2">&gt;&gt; [crill-003:18963] mca: base: components_open: component self open
</span><br>
<span class="quotelev2">&gt;&gt; function successful
</span><br>
<span class="quotelev2">&gt;&gt; [crill-003:18963] mca: base: components_open: found loaded component tcp
</span><br>
<span class="quotelev2">&gt;&gt; [crill-003:18963] mca: base: components_open: component tcp open
</span><br>
<span class="quotelev2">&gt;&gt; function successful
</span><br>
<span class="quotelev2">&gt;&gt; [crill-003:18964] mca: base: components_register: registering btl components
</span><br>
<span class="quotelev2">&gt;&gt; [crill-003:18964] mca: base: components_register: found loaded component
</span><br>
<span class="quotelev2">&gt;&gt; self
</span><br>
<span class="quotelev2">&gt;&gt; [crill-003:18964] mca: base: components_register: component self
</span><br>
<span class="quotelev2">&gt;&gt; register function successful
</span><br>
<span class="quotelev2">&gt;&gt; [crill-003:18964] mca: base: components_register: found loaded component tcp
</span><br>
<span class="quotelev2">&gt;&gt; [crill-003:18964] mca: base: components_register: component tcp register
</span><br>
<span class="quotelev2">&gt;&gt; function successful
</span><br>
<span class="quotelev2">&gt;&gt; [crill-003:18964] mca: base: components_open: opening btl components
</span><br>
<span class="quotelev2">&gt;&gt; [crill-003:18964] mca: base: components_open: found loaded component self
</span><br>
<span class="quotelev2">&gt;&gt; [crill-003:18964] mca: base: components_open: component self open
</span><br>
<span class="quotelev2">&gt;&gt; function successful
</span><br>
<span class="quotelev2">&gt;&gt; [crill-003:18964] mca: base: components_open: found loaded component tcp
</span><br>
<span class="quotelev2">&gt;&gt; [crill-003:18964] mca: base: components_open: component tcp open
</span><br>
<span class="quotelev2">&gt;&gt; function successful
</span><br>
<span class="quotelev2">&gt;&gt; [crill-003:18962] select: initializing btl component self
</span><br>
<span class="quotelev2">&gt;&gt; [crill-003:18962] select: init of component self returned success
</span><br>
<span class="quotelev2">&gt;&gt; [crill-003:18962] select: initializing btl component tcp
</span><br>
<span class="quotelev2">&gt;&gt; [crill-003:18962] btl: tcp: Searching for exclude address+prefix:
</span><br>
<span class="quotelev2">&gt;&gt; 127.0.0.1 / 8
</span><br>
<span class="quotelev2">&gt;&gt; [crill-003:18962] btl: tcp: Found match: 127.0.0.1 (lo)
</span><br>
<span class="quotelev2">&gt;&gt; [crill-003:18962] select: init of component tcp returned success
</span><br>
<span class="quotelev2">&gt;&gt; [crill-003:18963] select: initializing btl component self
</span><br>
<span class="quotelev2">&gt;&gt; [crill-003:18963] select: init of component self returned success
</span><br>
<span class="quotelev2">&gt;&gt; [crill-003:18963] select: initializing btl component tcp
</span><br>
<span class="quotelev2">&gt;&gt; [crill-003:18963] btl: tcp: Searching for exclude address+prefix:
</span><br>
<span class="quotelev2">&gt;&gt; 127.0.0.1 / 8
</span><br>
<span class="quotelev2">&gt;&gt; [crill-003:18963] btl: tcp: Found match: 127.0.0.1 (lo)
</span><br>
<span class="quotelev2">&gt;&gt; [crill-003:18963] select: init of component tcp returned success
</span><br>
<span class="quotelev2">&gt;&gt; [crill-003:18964] select: initializing btl component self
</span><br>
<span class="quotelev2">&gt;&gt; [crill-003:18964] select: init of component self returned success
</span><br>
<span class="quotelev2">&gt;&gt; [crill-003:18964] select: initializing btl component tcp
</span><br>
<span class="quotelev2">&gt;&gt; [crill-003:18964] btl: tcp: Searching for exclude address+prefix:
</span><br>
<span class="quotelev2">&gt;&gt; 127.0.0.1 / 8
</span><br>
<span class="quotelev2">&gt;&gt; [crill-003:18964] btl: tcp: Found match: 127.0.0.1 (lo)
</span><br>
<span class="quotelev2">&gt;&gt; [crill-003:18964] select: init of component tcp returned success
</span><br>
<span class="quotelev2">&gt;&gt; [crill-003:18964] mca: bml: Using self btl to [[3417,1],2] on node crill-003
</span><br>
<span class="quotelev2">&gt;&gt; [crill-003:18964] mca: bml: Using tcp btl to [[3417,1],0] on node crill-003
</span><br>
<span class="quotelev2">&gt;&gt; [crill-003:18964] mca: bml: Using tcp btl to [[3417,1],1] on node crill-003
</span><br>
<span class="quotelev2">&gt;&gt; [crill-003:18964] mca: bml: Using tcp btl to [[3417,1],3] on node crill-004
</span><br>
<span class="quotelev2">&gt;&gt; [crill-004:18161] mca: bml: Using self btl to [[3417,1],3] on node crill-004
</span><br>
<span class="quotelev2">&gt;&gt; [crill-004:18161] mca: bml: Using tcp btl to [[3417,1],0] on node crill-003
</span><br>
<span class="quotelev2">&gt;&gt; [crill-004:18161] mca: bml: Using tcp btl to [[3417,1],1] on node crill-003
</span><br>
<span class="quotelev2">&gt;&gt; [crill-004:18161] mca: bml: Using tcp btl to [[3417,1],2] on node crill-003
</span><br>
<span class="quotelev2">&gt;&gt; ^C
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ------------
</span><br>
<span class="quotelev2">&gt;&gt; and than it just hangs.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Does anybody have an idea/suggestion what to try or look for?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; Edgar
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Edgar Gabriel
</span><br>
<span class="quotelev2">&gt;&gt; Associate Professor
</span><br>
<span class="quotelev2">&gt;&gt; Parallel Software Technologies Lab      <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
</span><br>
<span class="quotelev2">&gt;&gt; Department of Computer Science          University of Houston
</span><br>
<span class="quotelev2">&gt;&gt; Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
</span><br>
<span class="quotelev2">&gt;&gt; Tel: +1 (713) 743-3857                  Fax: +1 (713) 743-3335
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16727.php">http://www.open-mpi.org/community/lists/devel/2014/12/16727.php</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16728.php">http://www.open-mpi.org/community/lists/devel/2014/12/16728.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
Edgar Gabriel
Associate Professor
Parallel Software Technologies Lab      <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
Department of Computer Science          University of Houston
Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
Tel: +1 (713) 743-3857                  Fax: +1 (713) 743-3335
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16731.php">Edgar Gabriel: "[OMPI devel] openib receive queue settings"</a>
<li><strong>Previous message:</strong> <a href="16729.php">Ralph Castain: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-618-g9e9261e"</a>
<li><strong>In reply to:</strong> <a href="16728.php">Gilles Gouaillardet: "Re: [OMPI devel] problem running jobs on ompi-master"</a>
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
