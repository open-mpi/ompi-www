<?
$subject_val = "Re: [OMPI devel] problem running jobs on ompi-master";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 26 10:06:35 2014" -->
<!-- isoreceived="20141226150635" -->
<!-- sent="Sat, 27 Dec 2014 00:06:27 +0900" -->
<!-- isosent="20141226150627" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] problem running jobs on ompi-master" -->
<!-- id="0dpxkpagjs1tmq7m57vu757f.1419606234459_at_email.android.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="[OMPI devel] problem running jobs on ompi-master" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-26 10:06:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16729.php">Ralph Castain: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-618-g9e9261e"</a>
<li><strong>Previous message:</strong> <a href="16727.php">Edgar Gabriel: "[OMPI devel] problem running jobs on ompi-master"</a>
<li><strong>Maybe in reply to:</strong> <a href="16727.php">Edgar Gabriel: "[OMPI devel] problem running jobs on ompi-master"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16730.php">Edgar Gabriel: "Re: [OMPI devel] problem running jobs on ompi-master"</a>
<li><strong>Reply:</strong> <a href="16730.php">Edgar Gabriel: "Re: [OMPI devel] problem running jobs on ompi-master"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Edgar,
<br>
<p>First, make sure your master includes <a href="https://github.com/open-mpi/ompi/commit/05af80b3025dbb95bdd4280087450791291d7219">https://github.com/open-mpi/ompi/commit/05af80b3025dbb95bdd4280087450791291d7219</a>
<br>
<p><p>If this is not enough, try with --mca coll ^ml
<br>
<p>Hope this helps
<br>
<p>Gilles. 
<br>
<p>Edgar Gabriel &lt;gabriel_at_[hidden]&gt;&#227;&#129;&#149;&#227;&#130;&#147;&#227;&#129;&#174;&#227;&#131;&#161;&#227;&#131;&#188;&#227;&#131;&#171;:
<br>
<span class="quotelev1">&gt;I have some problems running jobs with ompi-master on one of our 
</span><br>
<span class="quotelev1">&gt;clusters (after doing a major software update). Here are scenarios that 
</span><br>
<span class="quotelev1">&gt;work and don't work.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;1. Everything still seems to work with 1.8.x series without any issues
</span><br>
<span class="quotelev1">&gt;2. With master, I can run without any issues single node, multi-process jobs
</span><br>
<span class="quotelev1">&gt;3. With master, I can run without any issues multi node jobs, as long as 
</span><br>
<span class="quotelev1">&gt;there is only a single MPI process per node
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;4. I can not run multi-node jobs with multiple processes per node, ompi 
</span><br>
<span class="quotelev1">&gt;hangs for that scenario. This is independent of whether I enforce using 
</span><br>
<span class="quotelev1">&gt;openib or tcp, and just for the sake of simplicity I attach the output 
</span><br>
<span class="quotelev1">&gt;for tcp (there is another openib parameter issue that still linguers, 
</span><br>
<span class="quotelev1">&gt;but I will report that later).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Here is the output that I receive if setting btl_base_verbose
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;---------------snip------------------
</span><br>
<span class="quotelev1">&gt;gabriel_at_crill:~&gt; salloc -N 2 -n 4
</span><br>
<span class="quotelev1">&gt;gabriel_at_crill:~&gt; mpirun --mca btl tcp,self --mca btl_base_verbose 30 -np 
</span><br>
<span class="quotelev1">&gt;  4 ./hello_world
</span><br>
<span class="quotelev1">&gt;[crill-004:18161] mca: base: components_register: registering btl components
</span><br>
<span class="quotelev1">&gt;[crill-004:18161] mca: base: components_register: found loaded component 
</span><br>
<span class="quotelev1">&gt;self
</span><br>
<span class="quotelev1">&gt;[crill-004:18161] mca: base: components_register: component self 
</span><br>
<span class="quotelev1">&gt;register function successful
</span><br>
<span class="quotelev1">&gt;[crill-004:18161] mca: base: components_register: found loaded component tcp
</span><br>
<span class="quotelev1">&gt;[crill-004:18161] mca: base: components_register: component tcp register 
</span><br>
<span class="quotelev1">&gt;function successful
</span><br>
<span class="quotelev1">&gt;[crill-004:18161] mca: base: components_open: opening btl components
</span><br>
<span class="quotelev1">&gt;[crill-004:18161] mca: base: components_open: found loaded component self
</span><br>
<span class="quotelev1">&gt;[crill-004:18161] mca: base: components_open: component self open 
</span><br>
<span class="quotelev1">&gt;function successful
</span><br>
<span class="quotelev1">&gt;[crill-004:18161] mca: base: components_open: found loaded component tcp
</span><br>
<span class="quotelev1">&gt;[crill-004:18161] mca: base: components_open: component tcp open 
</span><br>
<span class="quotelev1">&gt;function successful
</span><br>
<span class="quotelev1">&gt;[crill-004:18161] select: initializing btl component self
</span><br>
<span class="quotelev1">&gt;[crill-004:18161] select: init of component self returned success
</span><br>
<span class="quotelev1">&gt;[crill-004:18161] select: initializing btl component tcp
</span><br>
<span class="quotelev1">&gt;[crill-004:18161] btl: tcp: Searching for exclude address+prefix: 
</span><br>
<span class="quotelev1">&gt;127.0.0.1 / 8
</span><br>
<span class="quotelev1">&gt;[crill-004:18161] btl: tcp: Found match: 127.0.0.1 (lo)
</span><br>
<span class="quotelev1">&gt;[crill-004:18161] select: init of component tcp returned success
</span><br>
<span class="quotelev1">&gt;[crill-003:18962] mca: base: components_register: registering btl components
</span><br>
<span class="quotelev1">&gt;[crill-003:18962] mca: base: components_register: found loaded component 
</span><br>
<span class="quotelev1">&gt;self
</span><br>
<span class="quotelev1">&gt;[crill-003:18962] mca: base: components_register: component self 
</span><br>
<span class="quotelev1">&gt;register function successful
</span><br>
<span class="quotelev1">&gt;[crill-003:18962] mca: base: components_register: found loaded component tcp
</span><br>
<span class="quotelev1">&gt;[crill-003:18962] mca: base: components_register: component tcp register 
</span><br>
<span class="quotelev1">&gt;function successful
</span><br>
<span class="quotelev1">&gt;[crill-003:18962] mca: base: components_open: opening btl components
</span><br>
<span class="quotelev1">&gt;[crill-003:18962] mca: base: components_open: found loaded component self
</span><br>
<span class="quotelev1">&gt;[crill-003:18962] mca: base: components_open: component self open 
</span><br>
<span class="quotelev1">&gt;function successful
</span><br>
<span class="quotelev1">&gt;[crill-003:18962] mca: base: components_open: found loaded component tcp
</span><br>
<span class="quotelev1">&gt;[crill-003:18962] mca: base: components_open: component tcp open 
</span><br>
<span class="quotelev1">&gt;function successful
</span><br>
<span class="quotelev1">&gt;[crill-003:18963] mca: base: components_register: registering btl components
</span><br>
<span class="quotelev1">&gt;[crill-003:18963] mca: base: components_register: found loaded component 
</span><br>
<span class="quotelev1">&gt;self
</span><br>
<span class="quotelev1">&gt;[crill-003:18963] mca: base: components_register: component self 
</span><br>
<span class="quotelev1">&gt;register function successful
</span><br>
<span class="quotelev1">&gt;[crill-003:18963] mca: base: components_register: found loaded component tcp
</span><br>
<span class="quotelev1">&gt;[crill-003:18963] mca: base: components_register: component tcp register 
</span><br>
<span class="quotelev1">&gt;function successful
</span><br>
<span class="quotelev1">&gt;[crill-003:18963] mca: base: components_open: opening btl components
</span><br>
<span class="quotelev1">&gt;[crill-003:18963] mca: base: components_open: found loaded component self
</span><br>
<span class="quotelev1">&gt;[crill-003:18963] mca: base: components_open: component self open 
</span><br>
<span class="quotelev1">&gt;function successful
</span><br>
<span class="quotelev1">&gt;[crill-003:18963] mca: base: components_open: found loaded component tcp
</span><br>
<span class="quotelev1">&gt;[crill-003:18963] mca: base: components_open: component tcp open 
</span><br>
<span class="quotelev1">&gt;function successful
</span><br>
<span class="quotelev1">&gt;[crill-003:18964] mca: base: components_register: registering btl components
</span><br>
<span class="quotelev1">&gt;[crill-003:18964] mca: base: components_register: found loaded component 
</span><br>
<span class="quotelev1">&gt;self
</span><br>
<span class="quotelev1">&gt;[crill-003:18964] mca: base: components_register: component self 
</span><br>
<span class="quotelev1">&gt;register function successful
</span><br>
<span class="quotelev1">&gt;[crill-003:18964] mca: base: components_register: found loaded component tcp
</span><br>
<span class="quotelev1">&gt;[crill-003:18964] mca: base: components_register: component tcp register 
</span><br>
<span class="quotelev1">&gt;function successful
</span><br>
<span class="quotelev1">&gt;[crill-003:18964] mca: base: components_open: opening btl components
</span><br>
<span class="quotelev1">&gt;[crill-003:18964] mca: base: components_open: found loaded component self
</span><br>
<span class="quotelev1">&gt;[crill-003:18964] mca: base: components_open: component self open 
</span><br>
<span class="quotelev1">&gt;function successful
</span><br>
<span class="quotelev1">&gt;[crill-003:18964] mca: base: components_open: found loaded component tcp
</span><br>
<span class="quotelev1">&gt;[crill-003:18964] mca: base: components_open: component tcp open 
</span><br>
<span class="quotelev1">&gt;function successful
</span><br>
<span class="quotelev1">&gt;[crill-003:18962] select: initializing btl component self
</span><br>
<span class="quotelev1">&gt;[crill-003:18962] select: init of component self returned success
</span><br>
<span class="quotelev1">&gt;[crill-003:18962] select: initializing btl component tcp
</span><br>
<span class="quotelev1">&gt;[crill-003:18962] btl: tcp: Searching for exclude address+prefix: 
</span><br>
<span class="quotelev1">&gt;127.0.0.1 / 8
</span><br>
<span class="quotelev1">&gt;[crill-003:18962] btl: tcp: Found match: 127.0.0.1 (lo)
</span><br>
<span class="quotelev1">&gt;[crill-003:18962] select: init of component tcp returned success
</span><br>
<span class="quotelev1">&gt;[crill-003:18963] select: initializing btl component self
</span><br>
<span class="quotelev1">&gt;[crill-003:18963] select: init of component self returned success
</span><br>
<span class="quotelev1">&gt;[crill-003:18963] select: initializing btl component tcp
</span><br>
<span class="quotelev1">&gt;[crill-003:18963] btl: tcp: Searching for exclude address+prefix: 
</span><br>
<span class="quotelev1">&gt;127.0.0.1 / 8
</span><br>
<span class="quotelev1">&gt;[crill-003:18963] btl: tcp: Found match: 127.0.0.1 (lo)
</span><br>
<span class="quotelev1">&gt;[crill-003:18963] select: init of component tcp returned success
</span><br>
<span class="quotelev1">&gt;[crill-003:18964] select: initializing btl component self
</span><br>
<span class="quotelev1">&gt;[crill-003:18964] select: init of component self returned success
</span><br>
<span class="quotelev1">&gt;[crill-003:18964] select: initializing btl component tcp
</span><br>
<span class="quotelev1">&gt;[crill-003:18964] btl: tcp: Searching for exclude address+prefix: 
</span><br>
<span class="quotelev1">&gt;127.0.0.1 / 8
</span><br>
<span class="quotelev1">&gt;[crill-003:18964] btl: tcp: Found match: 127.0.0.1 (lo)
</span><br>
<span class="quotelev1">&gt;[crill-003:18964] select: init of component tcp returned success
</span><br>
<span class="quotelev1">&gt;[crill-003:18964] mca: bml: Using self btl to [[3417,1],2] on node crill-003
</span><br>
<span class="quotelev1">&gt;[crill-003:18964] mca: bml: Using tcp btl to [[3417,1],0] on node crill-003
</span><br>
<span class="quotelev1">&gt;[crill-003:18964] mca: bml: Using tcp btl to [[3417,1],1] on node crill-003
</span><br>
<span class="quotelev1">&gt;[crill-003:18964] mca: bml: Using tcp btl to [[3417,1],3] on node crill-004
</span><br>
<span class="quotelev1">&gt;[crill-004:18161] mca: bml: Using self btl to [[3417,1],3] on node crill-004
</span><br>
<span class="quotelev1">&gt;[crill-004:18161] mca: bml: Using tcp btl to [[3417,1],0] on node crill-003
</span><br>
<span class="quotelev1">&gt;[crill-004:18161] mca: bml: Using tcp btl to [[3417,1],1] on node crill-003
</span><br>
<span class="quotelev1">&gt;[crill-004:18161] mca: bml: Using tcp btl to [[3417,1],2] on node crill-003
</span><br>
<span class="quotelev1">&gt;^C
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;------------
</span><br>
<span class="quotelev1">&gt;and than it just hangs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Does anybody have an idea/suggestion what to try or look for?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Thanks
</span><br>
<span class="quotelev1">&gt;Edgar
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;-- 
</span><br>
<span class="quotelev1">&gt;Edgar Gabriel
</span><br>
<span class="quotelev1">&gt;Associate Professor
</span><br>
<span class="quotelev1">&gt;Parallel Software Technologies Lab      <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
</span><br>
<span class="quotelev1">&gt;Department of Computer Science          University of Houston
</span><br>
<span class="quotelev1">&gt;Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
</span><br>
<span class="quotelev1">&gt;Tel: +1 (713) 743-3857                  Fax: +1 (713) 743-3335
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;devel mailing list
</span><br>
<span class="quotelev1">&gt;devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16727.php">http://www.open-mpi.org/community/lists/devel/2014/12/16727.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16729.php">Ralph Castain: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-618-g9e9261e"</a>
<li><strong>Previous message:</strong> <a href="16727.php">Edgar Gabriel: "[OMPI devel] problem running jobs on ompi-master"</a>
<li><strong>Maybe in reply to:</strong> <a href="16727.php">Edgar Gabriel: "[OMPI devel] problem running jobs on ompi-master"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16730.php">Edgar Gabriel: "Re: [OMPI devel] problem running jobs on ompi-master"</a>
<li><strong>Reply:</strong> <a href="16730.php">Edgar Gabriel: "Re: [OMPI devel] problem running jobs on ompi-master"</a>
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
