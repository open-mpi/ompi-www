<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Nov  2 08:32:11 2006" -->
<!-- isoreceived="20061102133211" -->
<!-- sent="Thu,  2 Nov 2006 14:32:00 +0100" -->
<!-- isosent="20061102133200" -->
<!-- name="hpetit_at_[hidden]" -->
<!-- email="hpetit_at_[hidden]" -->
<!-- subject="[OMPI users]  Re: Re: Re: Re: Re:MPI_Comm_spawn multiple bproc support" -->
<!-- id="J83UXC$0CC4FA692812697B62B92FC57EC99FDA_at_aliceadsl.fr" -->
<!-- charset="iso-8859-1" -->
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
<strong>From:</strong> <a href="mailto:hpetit_at_[hidden]?Subject=Re:%20[OMPI%20users]%20%20Re:%20Re:%20Re:%20Re:%20Re:MPI_Comm_spawn%20multiple%20bproc%20support"><em>hpetit_at_[hidden]</em></a><br>
<strong>Date:</strong> 2006-11-02 08:32:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2113.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn multiple bproc support"</a>
<li><strong>Previous message:</strong> <a href="2111.php">Kevin Radican: "[OMPI users] Scalapack testing fails with openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2113.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn multiple bproc support"</a>
<li><strong>Reply:</strong> <a href="2113.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn multiple bproc support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I again Ralf,
<br>

<br>
<span class="quotelev1">&gt;I gather you have access to bjs? Could you use bjs to get a node allocation,
</span><br>
<span class="quotelev1">&gt;and then send me a printout of the environment? 
</span><br>

<br>
I have slightly changed my cluster configuration for something like:
<br>
master is running on a machine call: machine10
<br>
node 0 is running on a machine call: machine10 (same as master then)
<br>
node 1 is running on a machine call: machine14
<br>

<br>
node 0 and 1 are up
<br>

<br>
My bjs configration allocates node 0 and 1 to the default pool
<br>
&lt;---------------&gt;
<br>
pool default
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;policy simple
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;nodes 0-1
<br>
&lt;-----------------&gt;
<br>

<br>
Be default, when I run &quot;env&quot; in a terminal, NODES variable is not present.
<br>
If I run env under a job submission command like &quot;bjsub -i env&quot;, then I can see the following new environments variable.
<br>
NODES=0
<br>
JOBID=27 (for instance)
<br>
BPROC_RANK=0000000
<br>
BPROC_PROGNAME=/usr/bin/env
<br>

<br>
When the command is over, NODES is unset again.
<br>

<br>
What is strange is that I would have expected that NODES=0,1. I do not know if you bjs users have the same behaviour.
<br>

<br>
Hopefully, it is the kind of information you were expecting.
<br>

<br>
Regards.
<br>

<br>
Herve
<br>

<br>

<br>
<p><p>--------------------- ALICE SECURITE ENFANTS ---------------------
<br>
Prot&#233;gez vos enfants des dangers d'Internet en installant S&#233;curit&#233; Enfants, le contr&#244;le parental d'Alice.
<br>
<a href="http://www.aliceadsl.fr/securitepc/default_copa.asp">http://www.aliceadsl.fr/securitepc/default_copa.asp</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2113.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn multiple bproc support"</a>
<li><strong>Previous message:</strong> <a href="2111.php">Kevin Radican: "[OMPI users] Scalapack testing fails with openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2113.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn multiple bproc support"</a>
<li><strong>Reply:</strong> <a href="2113.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn multiple bproc support"</a>
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
