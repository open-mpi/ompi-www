<?
$subject_val = "Re: [OMPI users] undefined symbol: tm_init";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 10 09:06:57 2009" -->
<!-- isoreceived="20090210140657" -->
<!-- sent="Tue, 10 Feb 2009 07:06:48 -0700" -->
<!-- isosent="20090210140648" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] undefined symbol: tm_init" -->
<!-- id="2E2E9CED-BBBE-44A8-9F61-9D11D504A5C4_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4990DB59.2050909_at_vpac.org" -->
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
<strong>Date:</strong> 2009-02-10 09:06:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8008.php">Prentice Bisbal: "[OMPI users] Supporting OpenMPI compiled for multiple compilers"</a>
<li><strong>Previous message:</strong> <a href="8006.php">Joe Griffin: "Re: [OMPI users] Linux Itanium Configure and Make Logs for 1.2.8"</a>
<li><strong>In reply to:</strong> <a href="8003.php">Brett Pemberton: "[OMPI users] undefined symbol: tm_init"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8022.php">Brett Pemberton: "Re: [OMPI users] undefined symbol: tm_init"</a>
<li><strong>Reply:</strong> <a href="8022.php">Brett Pemberton: "Re: [OMPI users] undefined symbol: tm_init"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 9, 2009, at 6:41 PM, Brett Pemberton wrote:
<br>
<p><span class="quotelev1">&gt; Hey,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've just installed OpenMPI 1.3 on our cluster, and am getting this  
</span><br>
<span class="quotelev1">&gt; issue on jobs &gt; 1 node.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpiexec: symbol lookup error: /usr/local/openmpi/1.3-pgi/lib/openmpi/ 
</span><br>
<span class="quotelev1">&gt; mca_plm_tm.so: undefined symbol: tm_init
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As reported before, I saw someone saying that they solved this with:  
</span><br>
<span class="quotelev1">&gt; --enable-mca-static=plm:tm
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A new install using this configure option does work for me, but only  
</span><br>
<span class="quotelev1">&gt; for code recompiled with this new mpicc.  Existing code doesn't  
</span><br>
<span class="quotelev1">&gt; spawn properly.
</span><br>
<p>No, it won't since the static libraries for tm plm component weren't  
<br>
linked directly into the code.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As such, I'd much rather get the existing install working again.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It was suggested that I need the torque libraries on the compute  
</span><br>
<span class="quotelev1">&gt; nodes, which they are.  However adding them to ld.so.conf has not  
</span><br>
<span class="quotelev1">&gt; solved this, so I'm not sure what more needs to be done to solve  
</span><br>
<span class="quotelev1">&gt; this without recompiling openmpi.
</span><br>
<p>I'm not sure what you mean by adding them to ld.so.conf. What you need  
<br>
to do is install the torque libraries on the compute node in the same  
<br>
absolute path where they reside on the node where OMPI was built. OMPI  
<br>
points the executable to look for that location.
<br>
<p>Other than that, there shouldn't be a problem.
<br>
<p>HTH
<br>
Ralph
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance for any help.
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
<li><strong>Next message:</strong> <a href="8008.php">Prentice Bisbal: "[OMPI users] Supporting OpenMPI compiled for multiple compilers"</a>
<li><strong>Previous message:</strong> <a href="8006.php">Joe Griffin: "Re: [OMPI users] Linux Itanium Configure and Make Logs for 1.2.8"</a>
<li><strong>In reply to:</strong> <a href="8003.php">Brett Pemberton: "[OMPI users] undefined symbol: tm_init"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8022.php">Brett Pemberton: "Re: [OMPI users] undefined symbol: tm_init"</a>
<li><strong>Reply:</strong> <a href="8022.php">Brett Pemberton: "Re: [OMPI users] undefined symbol: tm_init"</a>
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
