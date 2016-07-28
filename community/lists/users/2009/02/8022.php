<?
$subject_val = "Re: [OMPI users] undefined symbol: tm_init";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 11 18:50:37 2009" -->
<!-- isoreceived="20090211235037" -->
<!-- sent="Thu, 12 Feb 2009 10:50:14 +1100" -->
<!-- isosent="20090211235014" -->
<!-- name="Brett Pemberton" -->
<!-- email="brett_at_[hidden]" -->
<!-- subject="Re: [OMPI users] undefined symbol: tm_init" -->
<!-- id="49936436.6030303_at_vpac.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="2E2E9CED-BBBE-44A8-9F61-9D11D504A5C4_at_lanl.gov" -->
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
<strong>From:</strong> Brett Pemberton (<em>brett_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-11 18:50:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8023.php">Ralph Castain: "Re: [OMPI users] undefined symbol: tm_init"</a>
<li><strong>Previous message:</strong> <a href="8021.php">Ashley Pittman: "Re: [OMPI users] Supporting OpenMPI compiled for multiple compilers"</a>
<li><strong>In reply to:</strong> <a href="8007.php">Ralph Castain: "Re: [OMPI users] undefined symbol: tm_init"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8023.php">Ralph Castain: "Re: [OMPI users] undefined symbol: tm_init"</a>
<li><strong>Reply:</strong> <a href="8023.php">Ralph Castain: "Re: [OMPI users] undefined symbol: tm_init"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Feb 9, 2009, at 6:41 PM, Brett Pemberton wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hey,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I've just installed OpenMPI 1.3 on our cluster, and am getting this 
</span><br>
<span class="quotelev2">&gt;&gt; issue on jobs &gt; 1 node.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpiexec: symbol lookup error: 
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/openmpi/1.3-pgi/lib/openmpi/mca_plm_tm.so: undefined 
</span><br>
<span class="quotelev2">&gt;&gt; symbol: tm_init
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; As reported before, I saw someone saying that they solved this with: 
</span><br>
<span class="quotelev2">&gt;&gt; --enable-mca-static=plm:tm
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; A new install using this configure option does work for me, but only 
</span><br>
<span class="quotelev2">&gt;&gt; for code recompiled with this new mpicc.  Existing code doesn't spawn 
</span><br>
<span class="quotelev2">&gt;&gt; properly.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; No, it won't since the static libraries for tm plm component weren't 
</span><br>
<span class="quotelev1">&gt; linked directly into the code.
</span><br>
<p>Ahh, didn't think of that.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; As such, I'd much rather get the existing install working again.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It was suggested that I need the torque libraries on the compute 
</span><br>
<span class="quotelev2">&gt;&gt; nodes, which they are.  However adding them to ld.so.conf has not 
</span><br>
<span class="quotelev2">&gt;&gt; solved this, so I'm not sure what more needs to be done to solve this 
</span><br>
<span class="quotelev2">&gt;&gt; without recompiling openmpi.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm not sure what you mean by adding them to ld.so.conf. What you need 
</span><br>
<span class="quotelev1">&gt; to do is install the torque libraries on the compute node in the same 
</span><br>
<span class="quotelev1">&gt; absolute path where they reside on the node where OMPI was built. OMPI 
</span><br>
<span class="quotelev1">&gt; points the executable to look for that location.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Other than that, there shouldn't be a problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>This is what confuses me.
<br>
We export /usr/local from the mgt node to all compute nodes.
<br>
<p>Both torque and openmpi are installed to /usr/local.
<br>
<p>So why are we hitting this issue?
<br>
<p>cheers,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/ Brett
<br>
<p><pre>
-- 
Brett Pemberton - VPAC Senior Systems Administrator
<a href="http://www.vpac.org/">http://www.vpac.org/</a> - (03) 9925 4899

</pre>
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8022/signature.asc">OpenPGP digital signature</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8023.php">Ralph Castain: "Re: [OMPI users] undefined symbol: tm_init"</a>
<li><strong>Previous message:</strong> <a href="8021.php">Ashley Pittman: "Re: [OMPI users] Supporting OpenMPI compiled for multiple compilers"</a>
<li><strong>In reply to:</strong> <a href="8007.php">Ralph Castain: "Re: [OMPI users] undefined symbol: tm_init"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8023.php">Ralph Castain: "Re: [OMPI users] undefined symbol: tm_init"</a>
<li><strong>Reply:</strong> <a href="8023.php">Ralph Castain: "Re: [OMPI users] undefined symbol: tm_init"</a>
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
