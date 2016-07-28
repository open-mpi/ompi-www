<?
$subject_val = "Re: [OMPI users] Strange OpenMPI messages";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 14 06:14:05 2012" -->
<!-- isoreceived="20120214111405" -->
<!-- sent="Tue, 14 Feb 2012 06:14:00 -0500" -->
<!-- isosent="20120214111400" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Strange OpenMPI messages" -->
<!-- id="EC3593BC-BD7F-4CA6-882C-58C84AD6C458_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CALd0-5320BeAY4bVQhx44KHBaWbQj_dpud60bGVZ8BZ8BfrvcA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Strange OpenMPI messages<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-14 06:14:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18454.php">Richard Bardwell: "Re: [OMPI users] MPI orte_init fails on remote nodes"</a>
<li><strong>Previous message:</strong> <a href="18452.php">Jeff Squyres: "Re: [OMPI users] help: sm btl does not work when I specify the same host twice or more in the node list"</a>
<li><strong>In reply to:</strong> <a href="18449.php">Tohiko Looka: "[OMPI users] Strange OpenMPI messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18463.php">Tohiko Looka: "Re: [OMPI users] Strange OpenMPI messages"</a>
<li><strong>Reply:</strong> <a href="18463.php">Tohiko Looka: "Re: [OMPI users] Strange OpenMPI messages"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Do you have an OpenFabrics-based network?  (e.g., InfiniBand or iWarp)
<br>
<p>If so, this error message usually means that OFED is either installed incorrectly, or is not running properly (e.g., its services didn't get started properly upon boot).
<br>
<p>If you don't have an OpenFabrics-based network, then it usually means that you have OpenFabrics services running when you really shouldn't (because you don't have any OpenFabrics-based devices).
<br>
<p><p>On Feb 14, 2012, at 4:48 AM, Tohiko Looka wrote:
<br>
<p><span class="quotelev1">&gt; Greetings,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Until today I was running my openmpi applications with no errors/warnings
</span><br>
<span class="quotelev1">&gt; Today I restarted my computer (possibly after an automatic openmpi update) and got these warnings when
</span><br>
<span class="quotelev1">&gt; running my program
</span><br>
<span class="quotelev1">&gt; [tohiko_at_kw12614 1d]$ mpirun -x LD_LIBRARY_PATH -hostfile hosts -np 10 hello
</span><br>
<span class="quotelev1">&gt; librdmacm: couldn't read ABI version.
</span><br>
<span class="quotelev1">&gt; librdmacm: assuming: 4
</span><br>
<span class="quotelev1">&gt; CMA: unable to get RDMA device list
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [[21652,1],0]: A high-performance Open MPI point-to-point messaging module
</span><br>
<span class="quotelev1">&gt; was unable to find any relevant network interfaces:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Module: OpenFabrics (openib)
</span><br>
<span class="quotelev1">&gt;   Host: kw12614
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Another transport will be used instead, although this may result in
</span><br>
<span class="quotelev1">&gt; lower performance.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [kw12614:03195] 10 more processes have sent help message help-mpi-btl-base.txt / btl:no-nics
</span><br>
<span class="quotelev1">&gt; [kw12614:03195] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see all help / error messages
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is this normal? And how come it happened now?
</span><br>
<span class="quotelev1">&gt; -- Tohiko
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
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18454.php">Richard Bardwell: "Re: [OMPI users] MPI orte_init fails on remote nodes"</a>
<li><strong>Previous message:</strong> <a href="18452.php">Jeff Squyres: "Re: [OMPI users] help: sm btl does not work when I specify the same host twice or more in the node list"</a>
<li><strong>In reply to:</strong> <a href="18449.php">Tohiko Looka: "[OMPI users] Strange OpenMPI messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18463.php">Tohiko Looka: "Re: [OMPI users] Strange OpenMPI messages"</a>
<li><strong>Reply:</strong> <a href="18463.php">Tohiko Looka: "Re: [OMPI users] Strange OpenMPI messages"</a>
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
