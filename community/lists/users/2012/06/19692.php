<?
$subject_val = "[OMPI users] hang in mpi_allreduce in single linux machine&#254;";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 27 14:59:27 2012" -->
<!-- isoreceived="20120627185927" -->
<!-- sent="Wed, 27 Jun 2012 11:59:22 -0700" -->
<!-- isosent="20120627185922" -->
<!-- name="William Au" -->
<!-- email="au_wai_chung_at_[hidden]" -->
<!-- subject="[OMPI users] hang in mpi_allreduce in single linux machine&amp;#254;" -->
<!-- id="SNT134-W17B65663567C7A41633962D3E70_at_phx.gbl" -->
<!-- charset="windows-1256" -->
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
<strong>Subject:</strong> [OMPI users] hang in mpi_allreduce in single linux machine&#254;<br>
<strong>From:</strong> William Au (<em>au_wai_chung_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-27 14:59:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19693.php">Iliev, Hristo: "[OMPI users] Fwd:  MPI Problem"</a>
<li><strong>Previous message:</strong> <a href="19691.php">Mohamad Ali Rostami: "Re: [OMPI users] MPI Problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19694.php">Jeff Squyres: "Re: [OMPI users] hang in mpi_allreduce in single linux machine&#226;&#128;&#143;"</a>
<li><strong>Reply:</strong> <a href="19694.php">Jeff Squyres: "Re: [OMPI users] hang in mpi_allreduce in single linux machine&#226;&#128;&#143;"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p><p><p>When I ran multiple processes in a single machine, the programs are 
<br>
hanging in mpi_allreduce in different points
<br>
<p>during different runs. I am using 1.3.4. When I used different machines 
<br>
to run the processes, it is OK. Also, when
<br>
<p>I recompiled open mpi in debug mode, the problem goes away. Since the 
<br>
hangings occurred at different points,
<br>
<p>I suspect some race/deadlock situations that due to some optimization in 
<br>
openmpi. I used -O3 in compilation with
<br>
<p>gcc44 and gfortran44. The software I am running in MUMPS (4.10.0). Other 
<br>
platforms (solaris 10) do not  have
<br>
<p>this problem. Any suggestion I should try out?
<br>
<p><p><p><p>Here is stack:
<br>
<p>#0  mca_btl_sm_component_progress () at btl_sm_component.c:387
<br>
#1  0x00002b304a4e1f3a in opal_progress () at runtime/opal_progress.c:207
<br>
#2  0x00002b3049e20fa5 in opal_condition_wait (count=2, requests=0x7fff1376d850, statuses=0x0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../opal/threads/condition.h:99
<br>
#3  ompi_request_default_wait_all (count=2, requests=0x7fff1376d850, statuses=0x0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at request/req_wait.c:262
<br>
#4  0x00002b304ecb4952 in ompi_coll_tuned_allreduce_intra_recursivedoubling (
<br>
&nbsp;&nbsp;&nbsp;&nbsp;sbuf=&lt;value optimized out&gt;, rbuf=0x14c9da10, count=1, dtype=0x2b304a085d40, op=0x2b304a07d280,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;comm=0x14ca34d0, module=0x14ca0500) at coll_tuned_allreduce.c:223
<br>
#5  0x00002b3049e36384 in PMPI_Allreduce (sendbuf=0x14c9d8d0, recvbuf=0x14c9da10, count=1,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;datatype=&lt;value optimized out&gt;, op=0x2b304a07d280, comm=0x14ca34d0) at pallreduce.c:102
<br>
#6  0x00002b304a0b9bd3 in mpi_allreduce_f (sendbuf=0x14c9d8d0 &quot;&quot;, recvbuf=0x14c9da10 &quot;&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;count=0x626eb0, datatype=&lt;value optimized out&gt;, op=0x626ec0, comm=&lt;value optimized out&gt;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;ierr=0x7fff1376e530) at pallreduce_f.c:77
<br>
#7  0x000000000049dbd4 in dmumps_142 (id=...) at dmumps_part5.F:5570
<br>
<p><p>Thanks.
<br>
<p><p><p>Willia 		 	   		  
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19692/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19693.php">Iliev, Hristo: "[OMPI users] Fwd:  MPI Problem"</a>
<li><strong>Previous message:</strong> <a href="19691.php">Mohamad Ali Rostami: "Re: [OMPI users] MPI Problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19694.php">Jeff Squyres: "Re: [OMPI users] hang in mpi_allreduce in single linux machine&#226;&#128;&#143;"</a>
<li><strong>Reply:</strong> <a href="19694.php">Jeff Squyres: "Re: [OMPI users] hang in mpi_allreduce in single linux machine&#226;&#128;&#143;"</a>
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
