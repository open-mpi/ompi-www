<?
$subject_val = "Re: [OMPI users] How do I integrate OpenMPI with a local cluster and EC2";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Apr 17 22:03:45 2010" -->
<!-- isoreceived="20100418020345" -->
<!-- sent="Sat, 17 Apr 2010 20:03:35 -0600" -->
<!-- isosent="20100418020335" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How do I integrate OpenMPI with a local cluster and EC2" -->
<!-- id="7BD65D47-75FA-47BF-AB7E-E691F80BED72_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="u2j3c8226f71004171539wa148b1f9r4aef43cd72eb698_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] How do I integrate OpenMPI with a local cluster and EC2<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-17 22:03:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12680.php">Ralph Castain: "Re: [OMPI users] Fwd: Open MPI v1.4 cant find default hostfile"</a>
<li><strong>Previous message:</strong> <a href="12678.php">Ralph Castain: "Re: [OMPI users] Dynamic processes connection and segfault on MPI_Comm_accept"</a>
<li><strong>In reply to:</strong> <a href="12675.php">Theodore Van Rooy: "[OMPI users] How do I integrate OpenMPI with a local cluster and EC2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12690.php">Jeff Squyres: "Re: [OMPI users] How do I integrate OpenMPI with a local clusterand EC2"</a>
<li><strong>Reply:</strong> <a href="12690.php">Jeff Squyres: "Re: [OMPI users] How do I integrate OpenMPI with a local clusterand EC2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm afraid you'll have to ask the EC2 folks - you probably need something to get through their firewall.
<br>
<p>If you just try &quot;ssh ec2-174-129-183-64.compute-1.amazonaws.com hostname&quot;, does that work? I would just try to make that work first - once it does, so should mpirun.
<br>
<p>On Apr 17, 2010, at 4:39 PM, Theodore Van Rooy wrote:
<br>
<p><span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm trying to add EC2 instances into my local cluster with openMPI.  So far openMPI works well on the local cluster, and I have set up passwordless SSH between the local cluster and the Amazon EC2 instance.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Howver, when I add the public DNS into a file (defaulthostfiletest)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; comp1 slots=2 max-slots=8
</span><br>
<span class="quotelev1">&gt; comp2 slots=2 max-slots=8
</span><br>
<span class="quotelev1">&gt; comp3 slots=2 max-slots=4
</span><br>
<span class="quotelev1">&gt; ec2-174-129-183-64.compute-1.amazonaws.com slots=2 max-slots=2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and then run:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [/home/ntlp/cashmoney/mainFrame]$mpirun -np 6 --hostfile defaulthostfiletest hostname
</span><br>
<span class="quotelev1">&gt; foretell
</span><br>
<span class="quotelev1">&gt; foretell
</span><br>
<span class="quotelev1">&gt; augur
</span><br>
<span class="quotelev1">&gt; augur
</span><br>
<span class="quotelev1">&gt; predict
</span><br>
<span class="quotelev1">&gt; predict
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; it works, but trying to use the amazon cluster I get:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [/home/ntlp/cashmoney/mainFrame]$mpirun -np 8 --hostfile defaulthostfiletest hostname (it hangs so I kill it)
</span><br>
<span class="quotelev1">&gt; ^C^Cmpirun: killing job...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev1">&gt; that caused that situation.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun was unable to cleanly terminate the daemons on the nodes shown
</span><br>
<span class="quotelev1">&gt; below. Additional manual cleanup may be required - please refer to
</span><br>
<span class="quotelev1">&gt; the &quot;orte-clean&quot; tool for assistance.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;         ec2-174-129-183-64.compute-1.amazonaws.com - daemon did not report back when launched
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any advice?  are there any settings in /etc/sssh/sshd_config that I might need to change?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Theo
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Theodore Van Rooy
</span><br>
<span class="quotelev1">&gt; <a href="http://greentheo.scroggles.com">http://greentheo.scroggles.com</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Theodore Van Rooy
</span><br>
<span class="quotelev1">&gt; <a href="http://greentheo.scroggles.com">http://greentheo.scroggles.com</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12679/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12680.php">Ralph Castain: "Re: [OMPI users] Fwd: Open MPI v1.4 cant find default hostfile"</a>
<li><strong>Previous message:</strong> <a href="12678.php">Ralph Castain: "Re: [OMPI users] Dynamic processes connection and segfault on MPI_Comm_accept"</a>
<li><strong>In reply to:</strong> <a href="12675.php">Theodore Van Rooy: "[OMPI users] How do I integrate OpenMPI with a local cluster and EC2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12690.php">Jeff Squyres: "Re: [OMPI users] How do I integrate OpenMPI with a local clusterand EC2"</a>
<li><strong>Reply:</strong> <a href="12690.php">Jeff Squyres: "Re: [OMPI users] How do I integrate OpenMPI with a local clusterand EC2"</a>
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
