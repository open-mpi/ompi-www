<?
$subject_val = "Re: [OMPI users] Open MPI not using parameters passed from PBS scheduler";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec  3 17:04:41 2015" -->
<!-- isoreceived="20151203220441" -->
<!-- sent="Thu, 3 Dec 2015 14:04:35 -0800" -->
<!-- isosent="20151203220435" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI not using parameters passed from PBS scheduler" -->
<!-- id="32E41BC7-217D-4A93-8D21-A2A70414DC0A_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="DBB225AB2F60D0498B61F824877398F4235DA7_at_PGH-MSGMB-03.andrew.ad.cmu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open MPI not using parameters passed from PBS scheduler<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-12-03 17:04:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28131.php">Yilmaz, D.: "[OMPI users] OpenMPI library conflicts"</a>
<li><strong>Previous message:</strong> <a href="28129.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Bug in Fortran-module MPI of OpenMPI 1.10.0 with Intel-Ftn-compiler"</a>
<li><strong>In reply to:</strong> <a href="28128.php">Gregory Cary: "[OMPI users] Open MPI not using parameters passed from PBS scheduler"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Check to ensure that OMPI was built with the required support - if you run ompi_info, do you see an output line that indicates the RAS tm module was built?
<br>
<p>If not, then that is the problem.
<br>
<p><span class="quotelev1">&gt; On Dec 3, 2015, at 10:36 AM, Gregory Cary &lt;gregcary_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm having difficulty running mpiblast using the code pasted below. The goal is to run the blast search in parallel on 3 different nodes (2 processors, 8 CPU cores, and 24 GB RAM per node). Whenever I run mpiexec without the -n parameter I get the error message: &quot;Sorry, mpiBLAST must be run on 3 or more nodes&quot;. Whenever I run mpiexec and pass it &quot;-n 24&quot; the job runs, but it takes and excessive amount of time (&gt;8h to search 10 records) and only one of the three designated nodes is active (memory usage, cpu %, network I/O) during the job while the other allocated nodes are quiet. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What am I doing wrong here? It seems as though mpiexec isn't getting the relevant info about number of allocated nodes and/or the identities of the specific hosts from the PBS scheduler. Can anyone help me out with this?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Much appreciated!
</span><br>
<span class="quotelev1">&gt; ----------------------------
</span><br>
<span class="quotelev1">&gt; Greg Cary, Ph.D.
</span><br>
<span class="quotelev1">&gt; Carnegie Mellon University
</span><br>
<span class="quotelev1">&gt; Dept. of Biological Sciences
</span><br>
<span class="quotelev1">&gt; Hinman Lab
</span><br>
<span class="quotelev1">&gt; 412-268-9290
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #!/bin/sh
</span><br>
<span class="quotelev1">&gt; #PBS -N MPI_BLAST -e error_log.txt
</span><br>
<span class="quotelev1">&gt; #PBS -l nodes=3:ppn=8 -n
</span><br>
<span class="quotelev1">&gt; #PBS -l walltime=24:00:00
</span><br>
<span class="quotelev1">&gt; #PBS -M gregcary_at_[hidden] -m abe
</span><br>
<span class="quotelev1">&gt; #PBS -q pool1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpiexec\
</span><br>
<span class="quotelev1">&gt; mpiblast -p blastp -d nr -e 1e-5 -m 7 -v 10000\
</span><br>
<span class="quotelev1">&gt; --removedb\
</span><br>
<span class="quotelev1">&gt; --time-profile=time-profile_1.txt\
</span><br>
<span class="quotelev1">&gt; -i ~/fasta_files/test2.fa\
</span><br>
<span class="quotelev1">&gt; -o ~/fasta_files/blast_results/mpi_test1_10recs.xml
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/12/28128.php">http://www.open-mpi.org/community/lists/users/2015/12/28128.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28131.php">Yilmaz, D.: "[OMPI users] OpenMPI library conflicts"</a>
<li><strong>Previous message:</strong> <a href="28129.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Bug in Fortran-module MPI of OpenMPI 1.10.0 with Intel-Ftn-compiler"</a>
<li><strong>In reply to:</strong> <a href="28128.php">Gregory Cary: "[OMPI users] Open MPI not using parameters passed from PBS scheduler"</a>
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
