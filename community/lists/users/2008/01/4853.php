<?
$subject_val = "Re: [OMPI users] odd network behavior";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 18 20:27:53 2008" -->
<!-- isoreceived="20080119012753" -->
<!-- sent="Fri, 18 Jan 2008 20:27:38 -0500" -->
<!-- isosent="20080119012738" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] odd network behavior" -->
<!-- id="3091B454-94EE-4A7A-88ED-6EB7260FB6EA_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="c84311bb0801151654n3d3eb7f5r9d5e19e8dcef4c5d_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] odd network behavior<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-18 20:27:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4854.php">Jeff Squyres: "Re: [OMPI users] Occasional mpirun hang on completion"</a>
<li><strong>Previous message:</strong> <a href="4852.php">Jeff Squyres: "Re: [OMPI users] ADIOI_Set_lock failure"</a>
<li><strong>In reply to:</strong> <a href="4840.php">Mark Kosmowski: "[OMPI users] odd network behavior"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Are all three machines running the same OS and version, perchance?  If  
<br>
the machines are heterogeneous in terms of OS, glibc version, etc.,  
<br>
weird things like these hangs can occur.
<br>
<p>Additionally, are you running a firewall on any of these machines?   
<br>
Ensure that iptables isn't running.  It doesn't sound like this is  
<br>
your problem, but it's worth checking in terms of crossing off issues  
<br>
that can cause problems...
<br>
<p><p>On Jan 15, 2008, at 7:54 PM, Mark Kosmowski wrote:
<br>
<p><span class="quotelev1">&gt; Dear Open-MPI Community:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have a 3 node cluster, each a dual opteron workstation running
</span><br>
<span class="quotelev1">&gt; OpenSUSE 10.1 64-bit.  The node names are LT, SGT and PFC.  When I
</span><br>
<span class="quotelev1">&gt; start an mpirun job from either SGT or PFC, things work as they are
</span><br>
<span class="quotelev1">&gt; supposed to.  However, if I start the same job from LT, the jobs hangs
</span><br>
<span class="quotelev1">&gt; at SGT - this was confirmed by mpirun --np 6 --hostfile &lt;correct
</span><br>
<span class="quotelev1">&gt; hostfile for the three nodes&gt; hostname, which gives only LT; LT; PFC;
</span><br>
<span class="quotelev1">&gt; PFC (and then hangs) when started from LT (this same command started
</span><br>
<span class="quotelev1">&gt; from either of the other nodes give two of each of the three hostnames
</span><br>
<span class="quotelev1">&gt; and terminates normally).  The nfs share drive is physically located
</span><br>
<span class="quotelev1">&gt; on LT.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have been using ssh to get to either SGT or PFC from a terminal
</span><br>
<span class="quotelev1">&gt; opened originally on LT to run jobs.  I can ssh from any node to any
</span><br>
<span class="quotelev1">&gt; other node.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have attached a gzipped tar archive of the three ifconfig results
</span><br>
<span class="quotelev1">&gt; (for each node) and the results of ompi_info --all command as
</span><br>
<span class="quotelev1">&gt; requested in the &quot;Getting Help&quot; section.  I was unable to locate a
</span><br>
<span class="quotelev1">&gt; config.log file in the shared ompi directory.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any assistance on this matter would be appreciated,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Mark E. Kosmowski
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
<li><strong>Next message:</strong> <a href="4854.php">Jeff Squyres: "Re: [OMPI users] Occasional mpirun hang on completion"</a>
<li><strong>Previous message:</strong> <a href="4852.php">Jeff Squyres: "Re: [OMPI users] ADIOI_Set_lock failure"</a>
<li><strong>In reply to:</strong> <a href="4840.php">Mark Kosmowski: "[OMPI users] odd network behavior"</a>
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
