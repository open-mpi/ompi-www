<?
$subject_val = "[OMPI users] Openmpi problem";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  3 11:59:25 2012" -->
<!-- isoreceived="20120503155925" -->
<!-- sent="Thu, 3 May 2012 17:59:20 +0200" -->
<!-- isosent="20120503155920" -->
<!-- name="Acero Fernandez Alicia" -->
<!-- email="alicia.acero_at_[hidden]" -->
<!-- subject="[OMPI users] Openmpi problem" -->
<!-- id="24535_1336060760_4FA2AB58_24535_5541_1_50C74E87FB16FB4F9356E175CA15423E059FFEC1_at_STR.ciemat.es" -->
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
<strong>Subject:</strong> [OMPI users] Openmpi problem<br>
<strong>From:</strong> Acero Fernandez Alicia (<em>alicia.acero_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-03 11:59:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19176.php">Ralph Castain: "Re: [OMPI users] Openmpi problem"</a>
<li><strong>Previous message:</strong> <a href="19174.php">Shamis, Pavel: "Re: [OMPI users] OpenMPI and CUDA on cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19176.php">Ralph Castain: "Re: [OMPI users] Openmpi problem"</a>
<li><strong>Reply:</strong> <a href="19176.php">Ralph Castain: "Re: [OMPI users] Openmpi problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I have a problem when running a mpi program with openmpi library. I did the following.
<br>
<p><p>&nbsp;1.- I installed the ofed 1.5.4 from RHEL. The hardware are qlogic 7340 ib cards.
<br>
&nbsp;
<br>
2.- I am using openmpi 1.4.3 , the one that comes with ofed 1.5.4
<br>
&nbsp;
<br>
3.- I have check openmpi website, and I have all the requirements they asked:
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ssh passwordless
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;same ofed/openmpi version in all the cluster nodes 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;iband conectivity between the nodes, etc
<br>
&nbsp;
<br>
4.- When I run an mpi program it runs properly in one node, but it doesn&#180;t run in more than one node. The error I can see in the execution is the following:
<br>
&nbsp;
<br>
dirac13.ciemat.es:06415] plm:tm: failed to poll for a spawned daemon, return status = 17002 
<br>
------------------------------------------------------------------------
<br>
<p><pre>
--
A daemon (pid unknown) died unexpectedly on signal 1  while attempting to launch so we are aborting.
 
There may be more information reported by the environment (see above).
 
This may be because the daemon was unable to find all the needed shared libraries on the remote node. You may set your LD_LIBRARY_PATH to have the location of the shared libraries on the remote nodes and this will automatically be forwarded to the remote nodes.
------------------------------------------------------------------------
--
------------------------------------------------------------------------
--
mpiexec noticed that the job aborted, but has no info as to the process that caused that situation.
------------------------------------------------------------------------
--
------------------------------------------------------------------------
--
mpiexec was unable to cleanly terminate the daemons on the nodes shown below. Additional manual cleanup may be required - please refer to the &quot;orte-clean&quot; tool for assistance.
------------------------------------------------------------------------
--
        dirac12.ciemat.es - daemon did not report back when launched
 
 
The command I use to run the mpi program is the following:
 
 
        mpiexec -H dirac12,dirac13 ./cpi
 
I have also tried
 
        mpiexec -np 24 -H dirac12,dirac13 ./cpi
 
And sending to the batch
 
        mpiexec -np 24 -hostfile $PBS_NODEFILE ./cpi
 
All of them with the same result.
 
 
All the mpi libraries in the cluster are the same in all the nodes.
 
Please, could anyone help me?
    
Thanks,
Alicia
----------------------------
Confidencialidad: 
Este mensaje y sus ficheros adjuntos se dirige exclusivamente a su destinatario y puede contener informaci&#243;n privilegiada o confidencial. Si no es vd. el destinatario indicado, queda notificado de que la utilizaci&#243;n, divulgaci&#243;n y/o copia sin autorizaci&#243;n est&#225; prohibida en virtud de la legislaci&#243;n vigente. Si ha recibido este mensaje por error, le rogamos que nos lo comunique inmediatamente respondiendo al mensaje y proceda a su destrucci&#243;n.
Disclaimer: 
This message and its attached files is intended exclusively for its recipients and may contain confidential information. If you received this e-mail in error you are hereby notified that any dissemination, copy or disclosure of this communication is strictly prohibited and may be unlawful. In this case, please notify us by a reply and delete this email and its contents immediately. 
----------------------------
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19176.php">Ralph Castain: "Re: [OMPI users] Openmpi problem"</a>
<li><strong>Previous message:</strong> <a href="19174.php">Shamis, Pavel: "Re: [OMPI users] OpenMPI and CUDA on cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19176.php">Ralph Castain: "Re: [OMPI users] Openmpi problem"</a>
<li><strong>Reply:</strong> <a href="19176.php">Ralph Castain: "Re: [OMPI users] Openmpi problem"</a>
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
