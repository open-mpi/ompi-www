<?
$subject_val = "Re: [OMPI users] mpirun hangs when launching job on remote node";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 18 05:15:31 2009" -->
<!-- isoreceived="20090318091531" -->
<!-- sent="Wed, 18 Mar 2009 10:15:24 +0100 (CET)" -->
<!-- isosent="20090318091524" -->
<!-- name="Bogdan Costescu" -->
<!-- email="Bogdan.Costescu_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun hangs when launching job on remote node" -->
<!-- id="Pine.LNX.4.64.0903181004510.6411_at_kenzo.iwr.uni-heidelberg.de" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49C08F7E.7020105_at_kuicr.kyoto-u.ac.jp" -->
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
<strong>From:</strong> Bogdan Costescu (<em>Bogdan.Costescu_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-18 05:15:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8497.php">Raymond Wan: "Re: [OMPI users] mpirun hangs when launching job on remote node"</a>
<li><strong>Previous message:</strong> <a href="8495.php">Reuti: "Re: [OMPI users] open mpi on non standard ssh port"</a>
<li><strong>In reply to:</strong> <a href="8492.php">Raymond Wan: "Re: [OMPI users] mpirun hangs when launching job on remote node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8497.php">Raymond Wan: "Re: [OMPI users] mpirun hangs when launching job on remote node"</a>
<li><strong>Reply:</strong> <a href="8497.php">Raymond Wan: "Re: [OMPI users] mpirun hangs when launching job on remote node"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, 18 Mar 2009, Raymond Wan wrote:
<br>
<p><span class="quotelev1">&gt; Perhaps it has something to do with RH's defaults for the firewall settings?
</span><br>
<p>If your sysadmin uses kickstart to configure the systems, (s)he has to 
<br>
add 'firewall --disabled'; similar for SELinux which seems to have 
<br>
caused problems to another person on this list. OTOH, if (s)he blindly 
<br>
copied the config for a workstation to a cluster node, maybe some more 
<br>
education is needed first...
<br>
<p><span class="quotelev1">&gt; Another system that worked &quot;immediately&quot; was a Debian system.
</span><br>
<p>That's because Debian doesn't configure a firewall or SELinux, leaving 
<br>
the admin the responsability to do it.
<br>
<p><span class="quotelev1">&gt; Anyway, if you find out a solution that doesn't require the firewall 
</span><br>
<span class="quotelev1">&gt; to be turned off, please let me know -- I think our sysadmin would 
</span><br>
<span class="quotelev1">&gt; be interested, too.
</span><br>
<p>Depending on your definition of 'firewall turned off', the new feature 
<br>
of restricting ports used by OpenMPI will help. The firewall can stay 
<br>
on, but it should be configured to open a range of ports used by 
<br>
OpenMPI.
<br>
<p><pre>
-- 
Bogdan Costescu
IWR, University of Heidelberg, INF 368, D-69120 Heidelberg, Germany
Phone: +49 6221 54 8240, Fax: +49 6221 54 8850
E-mail: bogdan.costescu_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8497.php">Raymond Wan: "Re: [OMPI users] mpirun hangs when launching job on remote node"</a>
<li><strong>Previous message:</strong> <a href="8495.php">Reuti: "Re: [OMPI users] open mpi on non standard ssh port"</a>
<li><strong>In reply to:</strong> <a href="8492.php">Raymond Wan: "Re: [OMPI users] mpirun hangs when launching job on remote node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8497.php">Raymond Wan: "Re: [OMPI users] mpirun hangs when launching job on remote node"</a>
<li><strong>Reply:</strong> <a href="8497.php">Raymond Wan: "Re: [OMPI users] mpirun hangs when launching job on remote node"</a>
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
