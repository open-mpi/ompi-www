<?
$subject_val = "Re: [OMPI users] [Fwd: Re: Configure OpenMPI and SLURM on Debian	(Lenny)]";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 27 08:17:13 2009" -->
<!-- isoreceived="20090327121713" -->
<!-- sent="Fri, 27 Mar 2009 13:17:07 +0100" -->
<!-- isosent="20090327121707" -->
<!-- name="Manuel Prinz" -->
<!-- email="manuel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [Fwd: Re: Configure OpenMPI and SLURM on Debian	(Lenny)]" -->
<!-- id="1238156227.4321.6.camel_at_ce170155.zmb.uni-essen.de" -->
<!-- inreplyto="49CC418A.7020504_at_mailsnare.net" -->
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
<strong>Subject:</strong> Re: [OMPI users] [Fwd: Re: Configure OpenMPI and SLURM on Debian	(Lenny)]<br>
<strong>From:</strong> Manuel Prinz (<em>manuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-27 08:17:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8609.php">Jerome BENOIT: "Re: [OMPI users] [Fwd: Re: Configure OpenMPI and SLURM on	Debian (Lenny)]"</a>
<li><strong>Previous message:</strong> <a href="8607.php">Ralph Castain: "Re: [OMPI users] 'orte_ess_base_select failed'"</a>
<li><strong>In reply to:</strong> <a href="8605.php">Jerome BENOIT: "[OMPI users] [Fwd: Re: Configure OpenMPI and SLURM on Debian (Lenny)]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8609.php">Jerome BENOIT: "Re: [OMPI users] [Fwd: Re: Configure OpenMPI and SLURM on	Debian (Lenny)]"</a>
<li><strong>Reply:</strong> <a href="8609.php">Jerome BENOIT: "Re: [OMPI users] [Fwd: Re: Configure OpenMPI and SLURM on	Debian (Lenny)]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am Freitag, den 27.03.2009, 11:01 +0800 schrieb Jerome BENOIT:
<br>
<span class="quotelev1">&gt; Finally I succeeded with the sbatch approach ... when my firewall are
</span><br>
<span class="quotelev1">&gt; stopped !
</span><br>
<span class="quotelev1">&gt; So I guess that I have to configure my firewall (I use firehol):
</span><br>
<span class="quotelev1">&gt; I have just tried but without success. I will try again later.
</span><br>
<span class="quotelev1">&gt; Is there any other ports than the SLURM ones which are involved ?
</span><br>
<p>On the SLURM side, you have to open the ports to the SLURM control
<br>
daemons and the service that handles the credentials. On Debian systems
<br>
that's MUNGE.
<br>
<p>Also, you need to open ports for the MPI processes to communicate. The
<br>
port range is rather wide, so the easiest setup (I guess) is to not use
<br>
a firewall between computing nodes.
<br>
<p>Best regards
<br>
Manuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8609.php">Jerome BENOIT: "Re: [OMPI users] [Fwd: Re: Configure OpenMPI and SLURM on	Debian (Lenny)]"</a>
<li><strong>Previous message:</strong> <a href="8607.php">Ralph Castain: "Re: [OMPI users] 'orte_ess_base_select failed'"</a>
<li><strong>In reply to:</strong> <a href="8605.php">Jerome BENOIT: "[OMPI users] [Fwd: Re: Configure OpenMPI and SLURM on Debian (Lenny)]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8609.php">Jerome BENOIT: "Re: [OMPI users] [Fwd: Re: Configure OpenMPI and SLURM on	Debian (Lenny)]"</a>
<li><strong>Reply:</strong> <a href="8609.php">Jerome BENOIT: "Re: [OMPI users] [Fwd: Re: Configure OpenMPI and SLURM on	Debian (Lenny)]"</a>
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
