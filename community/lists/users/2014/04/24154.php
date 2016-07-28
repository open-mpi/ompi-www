<?
$subject_val = "Re: [OMPI users] Troubleshooting mpirun with tree spawn hang";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 11 09:52:59 2014" -->
<!-- isoreceived="20140411135259" -->
<!-- sent="Fri, 11 Apr 2014 06:52:00 -0700" -->
<!-- isosent="20140411135200" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Troubleshooting mpirun with tree spawn hang" -->
<!-- id="1F81ACEE-6D02-40CB-B5EC-DCD68E0A4E50_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CADkWibdU3NzCNdxxGmgrBdkXauUDa5cLm-v1Kqk4PX_cd4Aaig_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Troubleshooting mpirun with tree spawn hang<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-11 09:52:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24155.php">Ralph Castain: "Re: [OMPI users] can't run mpi-jobs on remote host"</a>
<li><strong>Previous message:</strong> <a href="24153.php">Jeff Squyres (jsquyres): "Re: [OMPI users] File locking in ADIO, OpenMPI 1.6.4"</a>
<li><strong>In reply to:</strong> <a href="24149.php">Anthony Alba: "[OMPI users] Troubleshooting mpirun with tree spawn hang"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24158.php">Anthony Alba: "Re: [OMPI users] Troubleshooting mpirun with tree spawn hang"</a>
<li><strong>Reply:</strong> <a href="24158.php">Anthony Alba: "Re: [OMPI users] Troubleshooting mpirun with tree spawn hang"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm a little confused - the &quot;no_tree_spawn=true&quot; option means that we are *not* using tree spawn, and so mpirun is directly launching each daemon onto its node. Thus, this requires that the host mpirun is on be able to ssh to every other host in the allocation.
<br>
<p>You can debug the rsh launcher by setting &quot;-mca plm_base_verbose 5 --debug-daemons&quot; on the cmd line.
<br>
<p><p>On Apr 10, 2014, at 9:50 PM, Anthony Alba &lt;ascanio.alba7_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there a way to troubleshoot 
</span><br>
<span class="quotelev1">&gt; plm_rsh_no_tree_spawn=true hang?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have a set of passwordless-ssh nodes, each node can ssh into any other., i.e., 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; for h1 in A B C D; do for h2 in A B C D; do ssh $h1 ssh $h2 hostname; done; done 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; works perfectly.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Generally tree spawn works, however there is one host where
</span><br>
<span class="quotelev1">&gt; launching  mpirun with tree spawn hangs as soon as there are 6 or more host (with launch node also in the host list). If the launcher is not in the host list the hang happens with five hosts.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - Anthony
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
<li><strong>Next message:</strong> <a href="24155.php">Ralph Castain: "Re: [OMPI users] can't run mpi-jobs on remote host"</a>
<li><strong>Previous message:</strong> <a href="24153.php">Jeff Squyres (jsquyres): "Re: [OMPI users] File locking in ADIO, OpenMPI 1.6.4"</a>
<li><strong>In reply to:</strong> <a href="24149.php">Anthony Alba: "[OMPI users] Troubleshooting mpirun with tree spawn hang"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24158.php">Anthony Alba: "Re: [OMPI users] Troubleshooting mpirun with tree spawn hang"</a>
<li><strong>Reply:</strong> <a href="24158.php">Anthony Alba: "Re: [OMPI users] Troubleshooting mpirun with tree spawn hang"</a>
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
