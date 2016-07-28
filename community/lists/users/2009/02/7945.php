<?
$subject_val = "Re: [OMPI users] Open MPI error";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  3 09:29:19 2009" -->
<!-- isoreceived="20090203142919" -->
<!-- sent="Tue, 3 Feb 2009 09:29:13 -0500" -->
<!-- isosent="20090203142913" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI error" -->
<!-- id="180A6811-83F5-4BF6-AA4C-CDFDA9ACDD64_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="OF85070995.2D64E458-ON86257551.006C707F-86257551.006D2496_at_exxonmobil.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open MPI error<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-03 09:29:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7946.php">Jeff Squyres: "Re: [OMPI users] v1.3: mca_common_sm_mmap_init error"</a>
<li><strong>Previous message:</strong> <a href="7944.php">Jeff Squyres: "Re: [OMPI users] Joe Griffin: &quot;Re: Cannot compile onLinuxItanium	system&quot;"</a>
<li><strong>In reply to:</strong> <a href="7939.php">c.j.kao_at_[hidden]: "[OMPI users] Open MPI error"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Have you tried this:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/faq/?category=openfabrics#v1.2-use-early-completion">http://www.open-mpi.org/faq/?category=openfabrics#v1.2-use-early-completion</a>
<br>
<p><p><p>On Feb 2, 2009, at 2:52 PM, c.j.kao_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am using openmpi to run a job on 4 nodes, 2 processors per node.  
</span><br>
<span class="quotelev1">&gt; Seems
</span><br>
<span class="quotelev1">&gt; like 5 out of the 8 processors executed the app successfully and 3  
</span><br>
<span class="quotelev1">&gt; of them
</span><br>
<span class="quotelev1">&gt; did not. Here is the error message I got. The last thing I did in  
</span><br>
<span class="quotelev1">&gt; the code
</span><br>
<span class="quotelev1">&gt; is an MPI_Barrier  call and it never returns (probably because 3 of  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; processes never gets executed properly?)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [0,1,7][btl_openib_component.c:1332:btl_openib_component_progress]  
</span><br>
<span class="quotelev1">&gt; from
</span><br>
<span class="quotelev1">&gt; hplcnla160 to: hplcnla162 error polling HP CQ with status LOCAL LENGTH
</span><br>
<span class="quotelev1">&gt; ERROR status number 1 for wr_id 6158264 opcode 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and here is the script I used:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #!/bin/bash -debug
</span><br>
<span class="quotelev1">&gt; #PBS -N mytest
</span><br>
<span class="quotelev1">&gt; #PBS -l nodes=4:ppn=2,walltime=00:05:00,tpn=2
</span><br>
<span class="quotelev1">&gt; #PBS -j oe
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; NP=$(wc -l $PBS_NODEFILE | awk '{print $1}')
</span><br>
<span class="quotelev1">&gt; /opt/openmpi-1.2.4/gnu/bin/mpirun -np $NP My_Executable
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Has anybody seen this kind of error before? Thanks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; CJ
</span><br>
<span class="quotelev1">&gt;
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
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7946.php">Jeff Squyres: "Re: [OMPI users] v1.3: mca_common_sm_mmap_init error"</a>
<li><strong>Previous message:</strong> <a href="7944.php">Jeff Squyres: "Re: [OMPI users] Joe Griffin: &quot;Re: Cannot compile onLinuxItanium	system&quot;"</a>
<li><strong>In reply to:</strong> <a href="7939.php">c.j.kao_at_[hidden]: "[OMPI users] Open MPI error"</a>
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
