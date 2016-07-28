<?
$subject_val = "Re: [OMPI users] OpenMPI 1.6.3 and Memory Issues";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 29 17:23:49 2012" -->
<!-- isoreceived="20121129222349" -->
<!-- sent="Thu, 29 Nov 2012 17:23:44 -0500" -->
<!-- isosent="20121129222344" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.6.3 and Memory Issues" -->
<!-- id="40373DBC-E28B-4202-94CD-1F49176112F8_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="50B7DFF3.4040403_at_uci.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI 1.6.3 and Memory Issues<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-29 17:23:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20815.php">Joseph Farran: "Re: [OMPI users] OpenMPI 1.6.3 and Memory Issues"</a>
<li><strong>Previous message:</strong> <a href="20813.php">Joseph Farran: "[OMPI users] OpenMPI 1.6.3 and Memory Issues"</a>
<li><strong>In reply to:</strong> <a href="20813.php">Joseph Farran: "[OMPI users] OpenMPI 1.6.3 and Memory Issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20815.php">Joseph Farran: "Re: [OMPI users] OpenMPI 1.6.3 and Memory Issues"</a>
<li><strong>Reply:</strong> <a href="20815.php">Joseph Farran: "Re: [OMPI users] OpenMPI 1.6.3 and Memory Issues"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
See <a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-low-reg-mem">http://www.open-mpi.org/faq/?category=openfabrics#ib-low-reg-mem</a>.
<br>
<p>On Nov 29, 2012, at 5:21 PM, Joseph Farran wrote:
<br>
<p><span class="quotelev1">&gt; Hi All.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In compiling a simple Hello world with OpenMPI 1.6.3 and mpirun the hello program, I am getting:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ ulimit -l unlimited
</span><br>
<span class="quotelev1">&gt; $ mpirun -np 2 hello
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; WARNING: It appears that your OpenFabrics subsystem is configured to only
</span><br>
<span class="quotelev1">&gt; allow registering part of your physical memory.  This can cause MPI jobs to
</span><br>
<span class="quotelev1">&gt; run with erratic performance, hang, and/or crash.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This may be caused by your OpenFabrics vendor limiting the amount of
</span><br>
<span class="quotelev1">&gt; physical memory that can be registered.  You should investigate the
</span><br>
<span class="quotelev1">&gt; relevant Linux kernel module parameters that control how much physical
</span><br>
<span class="quotelev1">&gt; memory can be registered, and increase them to allow registering all
</span><br>
<span class="quotelev1">&gt; physical memory on your machine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; See this Open MPI FAQ item for more information on these Linux kernel module
</span><br>
<span class="quotelev1">&gt; parameters:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    <a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages">http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Local host:              hpc
</span><br>
<span class="quotelev1">&gt;  Registerable memory:     4096 MiB
</span><br>
<span class="quotelev1">&gt;  Total memory:            258470 MiB
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Your MPI job will continue, but may be behave poorly and/or hang.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Hello World.   I am the Master Node (hpc) with Rank 0.
</span><br>
<span class="quotelev1">&gt; Hello World.   I am compute Node (hpc) with Rank 1
</span><br>
<span class="quotelev1">&gt; [hpc:08261] 1 more process has sent help message help-mpi-btl-openib.txt / reg mem limit low
</span><br>
<span class="quotelev1">&gt; [hpc:08261] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see all help / error messages
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have my limits setup with:
</span><br>
<span class="quotelev1">&gt; cat /etc/security/limits.conf
</span><br>
<span class="quotelev1">&gt; * soft memlock unlimited
</span><br>
<span class="quotelev1">&gt; * hard memlock unlimited
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What am I missing?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; OS is CentOS 6.3.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Joseph
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
<li><strong>Next message:</strong> <a href="20815.php">Joseph Farran: "Re: [OMPI users] OpenMPI 1.6.3 and Memory Issues"</a>
<li><strong>Previous message:</strong> <a href="20813.php">Joseph Farran: "[OMPI users] OpenMPI 1.6.3 and Memory Issues"</a>
<li><strong>In reply to:</strong> <a href="20813.php">Joseph Farran: "[OMPI users] OpenMPI 1.6.3 and Memory Issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20815.php">Joseph Farran: "Re: [OMPI users] OpenMPI 1.6.3 and Memory Issues"</a>
<li><strong>Reply:</strong> <a href="20815.php">Joseph Farran: "Re: [OMPI users] OpenMPI 1.6.3 and Memory Issues"</a>
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
