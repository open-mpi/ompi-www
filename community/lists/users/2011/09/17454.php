<?
$subject_val = "Re: [OMPI users] Role of ethernet interfaces of startup of openmpi job using IB";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 27 17:03:28 2011" -->
<!-- isoreceived="20110927210328" -->
<!-- sent="Tue, 27 Sep 2011 17:03:23 -0400" -->
<!-- isosent="20110927210323" -->
<!-- name="Prentice Bisbal" -->
<!-- email="prentice_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Role of ethernet interfaces of startup of openmpi job using IB" -->
<!-- id="4E823A1B.3090801_at_ias.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5D42BDD1-297C-4499-A5A3-0885475B7A41_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Role of ethernet interfaces of startup of openmpi job using IB<br>
<strong>From:</strong> Prentice Bisbal (<em>prentice_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-27 17:03:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17455.php">Dave Schulz: "Re: [OMPI users] ompi-checkpoint problem on shared storage"</a>
<li><strong>Previous message:</strong> <a href="17453.php">Rob Latham: "Re: [OMPI users] maximum size for read buffer in MPI_File_read/write"</a>
<li><strong>In reply to:</strong> <a href="17443.php">Jeff Squyres: "Re: [OMPI users] Role of ethernet interfaces of startup of openmpi job using IB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17456.php">Jeff Squyres: "Re: [OMPI users] Role of ethernet interfaces of startup of openmpi job using IB"</a>
<li><strong>Reply:</strong> <a href="17456.php">Jeff Squyres: "Re: [OMPI users] Role of ethernet interfaces of startup of openmpi job using IB"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 09/27/2011 07:50 AM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Sep 27, 2011, at 6:35 AM, Salvatore Podda wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 	We would like to know if the ethernet interfaces play any role in the startup phase of an opempi job using InfiniBand
</span><br>
<span class="quotelev2">&gt;&gt; In this case, where we can found some literature on this topic?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Unfortunately, there's not a lot of docs about this other than people asking questions on this list.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; IP is used by default during Open MPI startup.  Specifically, it is used as our &quot;out of band&quot; communication channel for things like stdin/stdout/stderr redirection, launch command relaying, process control, etc.  The OOB channel is also used by default for bootstrapping IB queue pairs.
</span><br>
<p>To clarify, is IP/Ethernet required, or will IPoIB be used if it's
<br>
configured on the nodes? Would this make a difference.
<br>
<p>Just curious,
<br>
Prentice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17455.php">Dave Schulz: "Re: [OMPI users] ompi-checkpoint problem on shared storage"</a>
<li><strong>Previous message:</strong> <a href="17453.php">Rob Latham: "Re: [OMPI users] maximum size for read buffer in MPI_File_read/write"</a>
<li><strong>In reply to:</strong> <a href="17443.php">Jeff Squyres: "Re: [OMPI users] Role of ethernet interfaces of startup of openmpi job using IB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17456.php">Jeff Squyres: "Re: [OMPI users] Role of ethernet interfaces of startup of openmpi job using IB"</a>
<li><strong>Reply:</strong> <a href="17456.php">Jeff Squyres: "Re: [OMPI users] Role of ethernet interfaces of startup of openmpi job using IB"</a>
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
