<?
$subject_val = "Re: [OMPI users] [Fwd: Re: Configure OpenMPI and SLURM on	Debian (Lenny)]";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 27 08:34:32 2009" -->
<!-- isoreceived="20090327123432" -->
<!-- sent="Fri, 27 Mar 2009 20:34:09 +0800" -->
<!-- isosent="20090327123409" -->
<!-- name="Jerome BENOIT" -->
<!-- email="ml.jgmbenoit_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [Fwd: Re: Configure OpenMPI and SLURM on	Debian (Lenny)]" -->
<!-- id="49CCC7C1.3030703_at_mailsnare.net" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1238156227.4321.6.camel_at_ce170155.zmb.uni-essen.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] [Fwd: Re: Configure OpenMPI and SLURM on	Debian (Lenny)]<br>
<strong>From:</strong> Jerome BENOIT (<em>ml.jgmbenoit_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-27 08:34:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8610.php">Manuel Prinz: "Re: [OMPI users] [Fwd: Re: Configure OpenMPI and SLURM on	Debian	(Lenny)]"</a>
<li><strong>Previous message:</strong> <a href="8608.php">Manuel Prinz: "Re: [OMPI users] [Fwd: Re: Configure OpenMPI and SLURM on Debian	(Lenny)]"</a>
<li><strong>In reply to:</strong> <a href="8608.php">Manuel Prinz: "Re: [OMPI users] [Fwd: Re: Configure OpenMPI and SLURM on Debian	(Lenny)]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8610.php">Manuel Prinz: "Re: [OMPI users] [Fwd: Re: Configure OpenMPI and SLURM on	Debian	(Lenny)]"</a>
<li><strong>Reply:</strong> <a href="8610.php">Manuel Prinz: "Re: [OMPI users] [Fwd: Re: Configure OpenMPI and SLURM on	Debian	(Lenny)]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello List,
<br>
<p>Manuel Prinz wrote:
<br>
<span class="quotelev1">&gt; Am Freitag, den 27.03.2009, 11:01 +0800 schrieb Jerome BENOIT:
</span><br>
<span class="quotelev2">&gt;&gt; Finally I succeeded with the sbatch approach ... when my firewall are
</span><br>
<span class="quotelev2">&gt;&gt; stopped !
</span><br>
<span class="quotelev2">&gt;&gt; So I guess that I have to configure my firewall (I use firehol):
</span><br>
<span class="quotelev2">&gt;&gt; I have just tried but without success. I will try again later.
</span><br>
<span class="quotelev2">&gt;&gt; Is there any other ports than the SLURM ones which are involved ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On the SLURM side, you have to open the ports to the SLURM control
</span><br>
<span class="quotelev1">&gt; daemons and the service that handles the credentials. On Debian systems
</span><br>
<span class="quotelev1">&gt; that's MUNGE.
</span><br>
<p>The SLURM part seems to be fine, as I used for nearly one year.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Also, you need to open ports for the MPI processes to communicate. The
</span><br>
<span class="quotelev1">&gt; port range is rather wide, so the easiest setup (I guess) is to not use
</span><br>
<span class="quotelev1">&gt; a firewall between computing nodes.
</span><br>
<p>Indeed, but I do not like the idea as far as ``my'' cluster is concerned.
<br>
<p><p>I realized this part of the story before to read the email.
<br>
On version 1.3.0 , there is new options which allow to specify
<br>
the open ports: [oon|btl]_tcp_port_[min|rnage]_v4
<br>
I have just tried the Sid package (1.3-2), but it does not work properly
<br>
(when the firewall are off)
<br>
<p>I get (orange being the name of the node)
<br>
<p>[orange:17336] bind() failed: Permission denied (13)
<br>
[orange:17336] mca_oob_tcp_init: unable to create IPv4 listen socket: Error
<br>
.........................
<br>
<p><p>I have just read that the current stable version for OpenMPI is now 1.3.1:
<br>
I will give it a try once it will be packaged in Sid.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best regards
</span><br>
<span class="quotelev1">&gt; Manuel
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
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8610.php">Manuel Prinz: "Re: [OMPI users] [Fwd: Re: Configure OpenMPI and SLURM on	Debian	(Lenny)]"</a>
<li><strong>Previous message:</strong> <a href="8608.php">Manuel Prinz: "Re: [OMPI users] [Fwd: Re: Configure OpenMPI and SLURM on Debian	(Lenny)]"</a>
<li><strong>In reply to:</strong> <a href="8608.php">Manuel Prinz: "Re: [OMPI users] [Fwd: Re: Configure OpenMPI and SLURM on Debian	(Lenny)]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8610.php">Manuel Prinz: "Re: [OMPI users] [Fwd: Re: Configure OpenMPI and SLURM on	Debian	(Lenny)]"</a>
<li><strong>Reply:</strong> <a href="8610.php">Manuel Prinz: "Re: [OMPI users] [Fwd: Re: Configure OpenMPI and SLURM on	Debian	(Lenny)]"</a>
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
