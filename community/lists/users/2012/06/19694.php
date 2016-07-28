<?
$subject_val = "Re: [OMPI users] hang in mpi_allreduce in single linux machine&#226;&#128;&#143;";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 27 15:03:29 2012" -->
<!-- isoreceived="20120627190329" -->
<!-- sent="Wed, 27 Jun 2012 15:03:24 -0400" -->
<!-- isosent="20120627190324" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] hang in mpi_allreduce in single linux machine&amp;#226;&amp;#128;&amp;#143;" -->
<!-- id="DC259C9F-8972-4FF8-964F-4E8EB5EAC5D3_at_cisco.com" -->
<!-- charset="windows-1256" -->
<!-- inreplyto="SNT134-W17B65663567C7A41633962D3E70_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] hang in mpi_allreduce in single linux machine&#226;&#128;&#143;<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-27 15:03:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19695.php">Mohamad Ali Rostami: "Re: [OMPI users] Fwd:  MPI Problem"</a>
<li><strong>Previous message:</strong> <a href="19693.php">Iliev, Hristo: "[OMPI users] Fwd:  MPI Problem"</a>
<li><strong>In reply to:</strong> <a href="19692.php">William Au: "[OMPI users] hang in mpi_allreduce in single linux machine&#254;"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Open MPI 1.3.4 is pretty ancient.  Can you upgrade to Open MPI 1.6?
<br>
<p><p>On Jun 27, 2012, at 2:59 PM, William Au wrote:
<br>
<p><span class="quotelev1">&gt; Hi, 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When I ran multiple processes in a single machine, the programs are hanging in mpi_allreduce in different points 
</span><br>
<span class="quotelev1">&gt; during different runs. I am using 1.3.4. When I used different machines to run the processes, it is OK. Also, when 
</span><br>
<span class="quotelev1">&gt; I recompiled open mpi in debug mode, the problem goes away. Since the hangings occurred at different points, 
</span><br>
<span class="quotelev1">&gt; I suspect some race/deadlock situations that due to some optimization in openmpi. I used -O3 in compilation with 
</span><br>
<span class="quotelev1">&gt; gcc44 and gfortran44. The software I am running in MUMPS (4.10.0). Other platforms (solaris 10) do not  have 
</span><br>
<span class="quotelev1">&gt; this problem. Any suggestion I should try out? 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here is stack:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #0  mca_btl_sm_component_progress () at btl_sm_component.c:387
</span><br>
<span class="quotelev1">&gt; #1  0x00002b304a4e1f3a in opal_progress () at runtime/opal_progress.c:207
</span><br>
<span class="quotelev1">&gt; #2  0x00002b3049e20fa5 in opal_condition_wait (count=2, requests=0x7fff1376d850, statuses=0x0)
</span><br>
<span class="quotelev1">&gt;     at ../opal/threads/condition.h:99
</span><br>
<span class="quotelev1">&gt; #3  ompi_request_default_wait_all (count=2, requests=0x7fff1376d850, statuses=0x0)
</span><br>
<span class="quotelev1">&gt;     at request/req_wait.c:262
</span><br>
<span class="quotelev1">&gt; #4  0x00002b304ecb4952 in ompi_coll_tuned_allreduce_intra_recursivedoubling (
</span><br>
<span class="quotelev1">&gt;     sbuf=&lt;value optimized out&gt;, rbuf=0x14c9da10, count=1, dtype=0x2b304a085d40, op=0x2b304a07d280,
</span><br>
<span class="quotelev1">&gt;     comm=0x14ca34d0, module=0x14ca0500) at coll_tuned_allreduce.c:223
</span><br>
<span class="quotelev1">&gt; #5  0x00002b3049e36384 in PMPI_Allreduce (sendbuf=0x14c9d8d0, recvbuf=0x14c9da10, count=1,
</span><br>
<span class="quotelev1">&gt;     datatype=&lt;value optimized out&gt;, op=0x2b304a07d280, comm=0x14ca34d0) at pallreduce.c:102! 
</span><br>
<span class="quotelev1">&gt; #6  0x00002b304a0b9bd3 in mpi_allreduce_f (sendbuf=0x14c9d8d0 &quot;&quot;, recvbuf=0x14c9da10 &quot;&quot;,
</span><br>
<span class="quotelev1">&gt;     count=0x626eb0, datatype=&lt;value optimized out&gt;, op=0x626ec0, comm=&lt;value optimized out&gt;,
</span><br>
<span class="quotelev1">&gt;     ierr=0x7fff1376e530) at pallreduce_f.c:77
</span><br>
<span class="quotelev1">&gt; #7  0x000000000049dbd4 in dmumps_142 (id=...) at dmumps_part5.F:5570
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Willia
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19695.php">Mohamad Ali Rostami: "Re: [OMPI users] Fwd:  MPI Problem"</a>
<li><strong>Previous message:</strong> <a href="19693.php">Iliev, Hristo: "[OMPI users] Fwd:  MPI Problem"</a>
<li><strong>In reply to:</strong> <a href="19692.php">William Au: "[OMPI users] hang in mpi_allreduce in single linux machine&#254;"</a>
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
