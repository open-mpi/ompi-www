<?
$subject_val = "Re: [OMPI users] Openmpi problem";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  3 12:09:12 2012" -->
<!-- isoreceived="20120503160912" -->
<!-- sent="Thu, 3 May 2012 10:09:04 -0600" -->
<!-- isosent="20120503160904" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Openmpi problem" -->
<!-- id="E6EC0715-985F-4580-9D04-6B637650D458_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="24535_1336060760_4FA2AB58_24535_5541_1_50C74E87FB16FB4F9356E175CA15423E059FFEC1_at_STR.ciemat.es" -->
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
<strong>Subject:</strong> Re: [OMPI users] Openmpi problem<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-03 12:09:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19177.php">Jingcha Joba: "Re: [OMPI users] Regarding the execution time calculation"</a>
<li><strong>Previous message:</strong> <a href="19175.php">Acero Fernandez Alicia: "[OMPI users] Openmpi problem"</a>
<li><strong>In reply to:</strong> <a href="19175.php">Acero Fernandez Alicia: "[OMPI users] Openmpi problem"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You apparently are running on a cluster that uses Torque, yes? If so, it won't use ssh to do the launch - it uses Torque to do it, so the passwordless ssh setup is irrelevant.
<br>
<p>Did you ensure that your LD_LIBRARY_PATH includes the OMPI install lib location?
<br>
<p><p>On May 3, 2012, at 9:59 AM, Acero Fernandez Alicia wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have a problem when running a mpi program with openmpi library. I did the following.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1.- I installed the ofed 1.5.4 from RHEL. The hardware are qlogic 7340 ib cards.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2.- I am using openmpi 1.4.3 , the one that comes with ofed 1.5.4
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 3.- I have check openmpi website, and I have all the requirements they asked:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        ssh passwordless
</span><br>
<span class="quotelev1">&gt;        same ofed/openmpi version in all the cluster nodes 
</span><br>
<span class="quotelev1">&gt;        iband conectivity between the nodes, etc
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 4.- When I run an mpi program it runs properly in one node, but it doesn&#180;t run in more than one node. The error I can see in the execution is the following:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; dirac13.ciemat.es:06415] plm:tm: failed to poll for a spawned daemon, return status = 17002 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A daemon (pid unknown) died unexpectedly on signal 1  while attempting to launch so we are aborting.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There may be more information reported by the environment (see above).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This may be because the daemon was unable to find all the needed shared libraries on the remote node. You may set your LD_LIBRARY_PATH to have the location of the shared libraries on the remote nodes and this will automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpiexec noticed that the job aborted, but has no info as to the process that caused that situation.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpiexec was unable to cleanly terminate the daemons on the nodes shown below. Additional manual cleanup may be required - please refer to the &quot;orte-clean&quot; tool for assistance.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        dirac12.ciemat.es - daemon did not report back when launched
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The command I use to run the mpi program is the following:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        mpiexec -H dirac12,dirac13 ./cpi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have also tried
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        mpiexec -np 24 -H dirac12,dirac13 ./cpi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And sending to the batch
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        mpiexec -np 24 -hostfile $PBS_NODEFILE ./cpi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; All of them with the same result.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; All the mpi libraries in the cluster are the same in all the nodes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please, could anyone help me?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Alicia
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ----------------------------
</span><br>
<span class="quotelev1">&gt; Confidencialidad: 
</span><br>
<span class="quotelev1">&gt; Este mensaje y sus ficheros adjuntos se dirige exclusivamente a su destinatario y puede contener informaci&#243;n privilegiada o confidencial. Si no es vd. el destinatario indicado, queda notificado de que la utilizaci&#243;n, divulgaci&#243;n y/o copia sin autorizaci&#243;n est&#225; prohibida en virtud de la legislaci&#243;n vigente. Si ha recibido este mensaje por error, le rogamos que nos lo comunique inmediatamente respondiendo al mensaje y proceda a su destrucci&#243;n.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Disclaimer: 
</span><br>
<span class="quotelev1">&gt; This message and its attached files is intended exclusively for its recipients and may contain confidential information. If you received this e-mail in error you are hereby notified that any dissemination, copy or disclosure of this communication is strictly prohibited and may be unlawful. In this case, please notify us by a reply and delete this email and its contents immediately. 
</span><br>
<span class="quotelev1">&gt; ----------------------------
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
<li><strong>Next message:</strong> <a href="19177.php">Jingcha Joba: "Re: [OMPI users] Regarding the execution time calculation"</a>
<li><strong>Previous message:</strong> <a href="19175.php">Acero Fernandez Alicia: "[OMPI users] Openmpi problem"</a>
<li><strong>In reply to:</strong> <a href="19175.php">Acero Fernandez Alicia: "[OMPI users] Openmpi problem"</a>
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
