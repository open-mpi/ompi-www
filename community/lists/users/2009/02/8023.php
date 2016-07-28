<?
$subject_val = "Re: [OMPI users] undefined symbol: tm_init";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 11 19:14:30 2009" -->
<!-- isoreceived="20090212001430" -->
<!-- sent="Wed, 11 Feb 2009 17:14:05 -0700" -->
<!-- isosent="20090212001405" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] undefined symbol: tm_init" -->
<!-- id="F4B88E55-A0F3-444B-AB16-E13173E8DD61_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49936436.6030303_at_vpac.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] undefined symbol: tm_init<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-11 19:14:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8024.php">Gary Draving: "[OMPI users] openmpi/ib noob question"</a>
<li><strong>Previous message:</strong> <a href="8022.php">Brett Pemberton: "Re: [OMPI users] undefined symbol: tm_init"</a>
<li><strong>In reply to:</strong> <a href="8022.php">Brett Pemberton: "Re: [OMPI users] undefined symbol: tm_init"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8029.php">흆e Sandgren: "Re: [OMPI users] undefined symbol: tm_init"</a>
<li><strong>Reply:</strong> <a href="8029.php">흆e Sandgren: "Re: [OMPI users] undefined symbol: tm_init"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Actually, this was also the subject of another email thread on the  
<br>
user list earlier today. The user noted that we had lost an important  
<br>
line in our Makefile.am for the tm plm module, and that this was the  
<br>
root cause of the problems you and others have been seeing. We don't  
<br>
see it here because we always configure as shown below.
<br>
<p>This has been fixed in the upcoming 1.3.1 release.
<br>
<p>In the meantime, if you configure with --enable-static  --enable- 
<br>
shared, the required library will be linked into OMPI and will be  
<br>
available.
<br>
<p>Sorry for the problem.
<br>
Ralph
<br>
<p><p>On Feb 11, 2009, at 4:50 PM, Brett Pemberton wrote:
<br>
<p><span class="quotelev1">&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 9, 2009, at 6:41 PM, Brett Pemberton wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hey,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I've just installed OpenMPI 1.3 on our cluster, and am getting  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this issue on jobs &gt; 1 node.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpiexec: symbol lookup error: /usr/local/openmpi/1.3-pgi/lib/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; openmpi/mca_plm_tm.so: undefined symbol: tm_init
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; As reported before, I saw someone saying that they solved this  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with: --enable-mca-static=plm:tm
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; A new install using this configure option does work for me, but  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; only for code recompiled with this new mpicc.  Existing code  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; doesn't spawn properly.
</span><br>
<span class="quotelev2">&gt;&gt; No, it won't since the static libraries for tm plm component  
</span><br>
<span class="quotelev2">&gt;&gt; weren't linked directly into the code.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ahh, didn't think of that.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; As such, I'd much rather get the existing install working again.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It was suggested that I need the torque libraries on the compute  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; nodes, which they are.  However adding them to ld.so.conf has not  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; solved this, so I'm not sure what more needs to be done to solve  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this without recompiling openmpi.
</span><br>
<span class="quotelev2">&gt;&gt; I'm not sure what you mean by adding them to ld.so.conf. What you  
</span><br>
<span class="quotelev2">&gt;&gt; need to do is install the torque libraries on the compute node in  
</span><br>
<span class="quotelev2">&gt;&gt; the same absolute path where they reside on the node where OMPI was  
</span><br>
<span class="quotelev2">&gt;&gt; built. OMPI points the executable to look for that location.
</span><br>
<span class="quotelev2">&gt;&gt; Other than that, there shouldn't be a problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is what confuses me.
</span><br>
<span class="quotelev1">&gt; We export /usr/local from the mgt node to all compute nodes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Both torque and openmpi are installed to /usr/local.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So why are we hitting this issue?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	/ Brett
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Brett Pemberton - VPAC Senior Systems Administrator
</span><br>
<span class="quotelev1">&gt; <a href="http://www.vpac.org/">http://www.vpac.org/</a> - (03) 9925 4899
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8024.php">Gary Draving: "[OMPI users] openmpi/ib noob question"</a>
<li><strong>Previous message:</strong> <a href="8022.php">Brett Pemberton: "Re: [OMPI users] undefined symbol: tm_init"</a>
<li><strong>In reply to:</strong> <a href="8022.php">Brett Pemberton: "Re: [OMPI users] undefined symbol: tm_init"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8029.php">흆e Sandgren: "Re: [OMPI users] undefined symbol: tm_init"</a>
<li><strong>Reply:</strong> <a href="8029.php">흆e Sandgren: "Re: [OMPI users] undefined symbol: tm_init"</a>
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
