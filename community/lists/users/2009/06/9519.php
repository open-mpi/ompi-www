<?
$subject_val = "Re: [OMPI users] Openmpi and processor affinity";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  3 11:31:27 2009" -->
<!-- isoreceived="20090603153127" -->
<!-- sent="Wed, 3 Jun 2009 10:31:22 -0500" -->
<!-- isosent="20090603153122" -->
<!-- name="JACOB_LIBERMAN_at_[hidden]" -->
<!-- email="JACOB_LIBERMAN_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Openmpi and processor affinity" -->
<!-- id="7ADD3FA62176CB4588006774C1CCA43B596662_at_ausx3mps336.aus.amer.dell.com" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="35622AFC-4D99-46A8-9663-461974C919F6_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Openmpi and processor affinity<br>
<strong>From:</strong> <a href="mailto:JACOB_LIBERMAN_at_[hidden]?Subject=Re:%20[OMPI%20users]%20Openmpi%20and%20processor%20affinity"><em>JACOB_LIBERMAN_at_[hidden]</em></a><br>
<strong>Date:</strong> 2009-06-03 11:31:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9520.php">Rainer Keller: "Re: [OMPI users] Pb in configure script when using ifort with &quot;-fast&quot; +	link of opal_wrapper"</a>
<li><strong>Previous message:</strong> <a href="9518.php">Jeff Squyres: "Re: [OMPI users] Openmpi and processor affinity"</a>
<li><strong>In reply to:</strong> <a href="9518.php">Jeff Squyres: "Re: [OMPI users] Openmpi and processor affinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9521.php">Ashley Pittman: "Re: [OMPI users] Openmpi and processor affinity"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>Yes, this technique is particularly helpful for multi-threaded and works consistently across the various MPIs I test. 
<br>
<p>Thanks, jacob
<br>
<p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
</span><br>
<span class="quotelev1">&gt; Behalf Of Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Sent: Wednesday, June 03, 2009 10:27 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Openmpi and processor affinity
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jun 3, 2009, at 10:48 AM, &lt;JACOB_LIBERMAN_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; For HPL, try writing a bash script that pins processes to their
</span><br>
<span class="quotelev2">&gt; &gt; local memory controllers using numactl before kicking off HPL.  This
</span><br>
<span class="quotelev2">&gt; &gt; is particularly helpful when spawning more than 1 thread per
</span><br>
<span class="quotelev2">&gt; &gt; process.  The last line of your script should look like &quot;numactl -c
</span><br>
<span class="quotelev2">&gt; &gt; $cpu_bind -m $ mem_bind $*&quot;.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Believe it or not, I hit 94.5% HPL efficiency using this tactic on a
</span><br>
<span class="quotelev2">&gt; &gt; 16 node cluster. Using processor affinity (various MPIs) my results
</span><br>
<span class="quotelev2">&gt; &gt; were inconsistent and ranged between 88-93%
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you're using multi-threaded HPL, that might be useful.  But if
</span><br>
<span class="quotelev1">&gt; you're not, I'd be surprised if you got any different results than
</span><br>
<span class="quotelev1">&gt; Open MPI binding itself.  If there really is a difference, we should
</span><br>
<span class="quotelev1">&gt; figure out why.  More specifically, calling numactl yourself should be
</span><br>
<span class="quotelev1">&gt; pretty much exactly what we do in OMPI (via API, not via calling
</span><br>
<span class="quotelev1">&gt; numactl).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<li><strong>Next message:</strong> <a href="9520.php">Rainer Keller: "Re: [OMPI users] Pb in configure script when using ifort with &quot;-fast&quot; +	link of opal_wrapper"</a>
<li><strong>Previous message:</strong> <a href="9518.php">Jeff Squyres: "Re: [OMPI users] Openmpi and processor affinity"</a>
<li><strong>In reply to:</strong> <a href="9518.php">Jeff Squyres: "Re: [OMPI users] Openmpi and processor affinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9521.php">Ashley Pittman: "Re: [OMPI users] Openmpi and processor affinity"</a>
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
