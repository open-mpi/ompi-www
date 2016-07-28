<?
$subject_val = "Re: [OMPI users] mpirun hangs when launching job on remote node";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 18 05:39:47 2009" -->
<!-- isoreceived="20090318093947" -->
<!-- sent="Wed, 18 Mar 2009 18:39:41 +0900" -->
<!-- isosent="20090318093941" -->
<!-- name="Raymond Wan" -->
<!-- email="rwan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun hangs when launching job on remote node" -->
<!-- id="49C0C15D.6040104_at_kuicr.kyoto-u.ac.jp" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="Pine.LNX.4.64.0903181004510.6411_at_kenzo.iwr.uni-heidelberg.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun hangs when launching job on remote node<br>
<strong>From:</strong> Raymond Wan (<em>rwan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-18 05:39:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8498.php">Bernhard Knapp: "[OMPI users] [Fwd: Re: open mpi on non standard ssh port]"</a>
<li><strong>Previous message:</strong> <a href="8496.php">Bogdan Costescu: "Re: [OMPI users] mpirun hangs when launching job on remote node"</a>
<li><strong>In reply to:</strong> <a href="8496.php">Bogdan Costescu: "Re: [OMPI users] mpirun hangs when launching job on remote node"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Bogdan,
<br>
<p>Thanks for the information and looking forward to the new OpenMPI feature of port restriction...
<br>
<p>About Debian, I was wondering about that...I've had no problems with it and I was thinking everything was just done for me; of course, another possibility is that there was no firewall to begin with and I didn't know about it.  Alas, it's the latter...I better look into it as I was basically oblivious to the lack of a firewall...
<br>
<p>Ray
<br>
<p><p><p>Bogdan Costescu wrote:
<br>
<span class="quotelev1">&gt; On Wed, 18 Mar 2009, Raymond Wan wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Perhaps it has something to do with RH's defaults for the firewall 
</span><br>
<span class="quotelev2">&gt;&gt; settings?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If your sysadmin uses kickstart to configure the systems, (s)he has to 
</span><br>
<span class="quotelev1">&gt; add 'firewall --disabled'; similar for SELinux which seems to have 
</span><br>
<span class="quotelev1">&gt; caused problems to another person on this list. OTOH, if (s)he blindly 
</span><br>
<span class="quotelev1">&gt; copied the config for a workstation to a cluster node, maybe some more 
</span><br>
<span class="quotelev1">&gt; education is needed first...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Another system that worked &quot;immediately&quot; was a Debian system.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That's because Debian doesn't configure a firewall or SELinux, leaving 
</span><br>
<span class="quotelev1">&gt; the admin the responsability to do it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Anyway, if you find out a solution that doesn't require the firewall 
</span><br>
<span class="quotelev2">&gt;&gt; to be turned off, please let me know -- I think our sysadmin would be 
</span><br>
<span class="quotelev2">&gt;&gt; interested, too.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Depending on your definition of 'firewall turned off', the new feature 
</span><br>
<span class="quotelev1">&gt; of restricting ports used by OpenMPI will help. The firewall can stay 
</span><br>
<span class="quotelev1">&gt; on, but it should be configured to open a range of ports used by OpenMPI.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8498.php">Bernhard Knapp: "[OMPI users] [Fwd: Re: open mpi on non standard ssh port]"</a>
<li><strong>Previous message:</strong> <a href="8496.php">Bogdan Costescu: "Re: [OMPI users] mpirun hangs when launching job on remote node"</a>
<li><strong>In reply to:</strong> <a href="8496.php">Bogdan Costescu: "Re: [OMPI users] mpirun hangs when launching job on remote node"</a>
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
