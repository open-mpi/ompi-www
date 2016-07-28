<?
$subject_val = "Re: [OMPI users] How do I integrate OpenMPI with a local clusterand EC2";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 19 08:08:50 2010" -->
<!-- isoreceived="20100419120850" -->
<!-- sent="Mon, 19 Apr 2010 08:08:45 -0400" -->
<!-- isosent="20100419120845" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How do I integrate OpenMPI with a local clusterand EC2" -->
<!-- id="31E97967-A65A-47F5-BC79-AB023EC818E1_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="7BD65D47-75FA-47BF-AB7E-E691F80BED72_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] How do I integrate OpenMPI with a local clusterand EC2<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-19 08:08:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12691.php">Jeff Squyres: "Re: [OMPI users] OS X - Can't find the absoft directory"</a>
<li><strong>Previous message:</strong> <a href="12689.php">Jeff Squyres: "Re: [OMPI users] Fwd: Open MPI v1.4 cant find default hostfile"</a>
<li><strong>In reply to:</strong> <a href="12679.php">Ralph Castain: "Re: [OMPI users] How do I integrate OpenMPI with a local cluster and EC2"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
To be clear, Open MPI essentially requires the ability to open random TCP ports between the nodes used in the job (it's actually a little less restrictive than that, but it's easier to describe that requirement than the actual, less-restrictive requirements).
<br>
<p><p><p>On Apr 17, 2010, at 10:03 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; I'm afraid you'll have to ask the EC2 folks - you probably need something to get through their firewall.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you just try &quot;ssh ec2-174-129-183-64.compute-1.amazonaws.com hostname&quot;, does that work? I would just try to make that work first - once it does, so should mpirun.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Apr 17, 2010, at 4:39 PM, Theodore Van Rooy wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi all,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm trying to add EC2 instances into my local cluster with openMPI.  So far openMPI works well on the local cluster, and I have set up passwordless SSH between the local cluster and the Amazon EC2 instance.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Howver, when I add the public DNS into a file (defaulthostfiletest)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; comp1 slots=2 max-slots=8
</span><br>
<span class="quotelev2">&gt;&gt; comp2 slots=2 max-slots=8
</span><br>
<span class="quotelev2">&gt;&gt; comp3 slots=2 max-slots=4
</span><br>
<span class="quotelev2">&gt;&gt; ec2-174-129-183-64.compute-1.amazonaws.com slots=2 max-slots=2
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; and then run:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [/home/ntlp/cashmoney/mainFrame]$mpirun -np 6 --hostfile defaulthostfiletest hostname
</span><br>
<span class="quotelev2">&gt;&gt; foretell
</span><br>
<span class="quotelev2">&gt;&gt; foretell
</span><br>
<span class="quotelev2">&gt;&gt; augur
</span><br>
<span class="quotelev2">&gt;&gt; augur
</span><br>
<span class="quotelev2">&gt;&gt; predict
</span><br>
<span class="quotelev2">&gt;&gt; predict
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; it works, but trying to use the amazon cluster I get:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [/home/ntlp/cashmoney/mainFrame]$mpirun -np 8 --hostfile defaulthostfiletest hostname (it hangs so I kill it)
</span><br>
<span class="quotelev2">&gt;&gt; ^C^Cmpirun: killing job...
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev2">&gt;&gt; that caused that situation.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpirun was unable to cleanly terminate the daemons on the nodes shown
</span><br>
<span class="quotelev2">&gt;&gt; below. Additional manual cleanup may be required - please refer to
</span><br>
<span class="quotelev2">&gt;&gt; the &quot;orte-clean&quot; tool for assistance.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;         ec2-174-129-183-64.compute-1.amazonaws.com - daemon did not report back when launched
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Any advice?  are there any settings in /etc/sssh/sshd_config that I might need to change?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Theo
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Theodore Van Rooy
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://greentheo.scroggles.com">http://greentheo.scroggles.com</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Theodore Van Rooy
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://greentheo.scroggles.com">http://greentheo.scroggles.com</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12691.php">Jeff Squyres: "Re: [OMPI users] OS X - Can't find the absoft directory"</a>
<li><strong>Previous message:</strong> <a href="12689.php">Jeff Squyres: "Re: [OMPI users] Fwd: Open MPI v1.4 cant find default hostfile"</a>
<li><strong>In reply to:</strong> <a href="12679.php">Ralph Castain: "Re: [OMPI users] How do I integrate OpenMPI with a local cluster and EC2"</a>
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
