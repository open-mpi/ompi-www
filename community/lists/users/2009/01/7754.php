<?
$subject_val = "Re: [OMPI users] One additional (unwanted) process when using	dynamical process management";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 21 13:38:56 2009" -->
<!-- isoreceived="20090121183856" -->
<!-- sent="Wed, 21 Jan 2009 11:38:48 -0700" -->
<!-- isosent="20090121183848" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] One additional (unwanted) process when using	dynamical process management" -->
<!-- id="75C59577-D1EA-422B-A0B9-7F1C28E8D4CF_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="497769C3.8070201_at_pci.uni-heidelberg.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] One additional (unwanted) process when using	dynamical process management<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-21 13:38:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7755.php">Ralph Castain: "Re: [OMPI users] openmpi 1.3 and --wdir problem"</a>
<li><strong>Previous message:</strong> <a href="7753.php">Evgeniy Gromov: "Re: [OMPI users] One additional (unwanted) process when using	dynamical process management"</a>
<li><strong>In reply to:</strong> <a href="7753.php">Evgeniy Gromov: "Re: [OMPI users] One additional (unwanted) process when using	dynamical process management"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If you can, 1.3 would certainly be a good step to take. I'm not sure  
<br>
why 1.2.5 would be behaving this way, though, so it may indeed be  
<br>
something in the application (perhaps in the info key being passed to  
<br>
us?) that is the root cause.
<br>
<p>Still, if it isn't too much trouble, moving to 1.3 will provide you  
<br>
with a better platform for dynamic process management regardless.
<br>
<p>Ralph
<br>
<p><p>On Jan 21, 2009, at 11:30 AM, Evgeniy Gromov wrote:
<br>
<p><span class="quotelev1">&gt; Dear Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for your reply.
</span><br>
<span class="quotelev1">&gt; I encountered this problem using openmpi-1.2.5,
</span><br>
<span class="quotelev1">&gt; on a Opteron cluster with Myrinet-mx. I tried for
</span><br>
<span class="quotelev1">&gt; compilation of Global Arrays different compilers
</span><br>
<span class="quotelev1">&gt; (gfortran, intel, pathscale), the result is the same.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As I mentioned in the previous message GA itself works
</span><br>
<span class="quotelev1">&gt; fine, but the application which uses it doesn't work
</span><br>
<span class="quotelev1">&gt; correctly if it runs on several nodes. If it runs on
</span><br>
<span class="quotelev1">&gt; one node with several cores everything is fine. So I
</span><br>
<span class="quotelev1">&gt; thought that the problem might be in this additional
</span><br>
<span class="quotelev1">&gt; process.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Should I try to use the latest 1.3 version of openmpi?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best,
</span><br>
<span class="quotelev1">&gt; Evgeniy
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Not that I've seen. What version of OMPI are you using, and on what  
</span><br>
<span class="quotelev2">&gt;&gt; type of machine/environment?
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 21, 2009, at 11:02 AM, Evgeniy Gromov wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dear OpenMPI users,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have the following (problem) related to OpenMPI:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have recently compiled with OPenMPI the new (4-1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Global Arrays package using ARMCI_NETWORK=MPI-SPAWN,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; which implies the use of dynamic process management
</span><br>
<span class="quotelev3">&gt;&gt;&gt; realised in MPI2. It got compiled and tested successfully.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However when it is spawning on different nodes (machine) one
</span><br>
<span class="quotelev3">&gt;&gt;&gt; additional process on each node appears, i.e. if nodes=2:ppn=2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; then on each node there are 3 running processes. In the case
</span><br>
<span class="quotelev3">&gt;&gt;&gt; when it runs just on one pc with a few cores (let say  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; nodes=1:ppn=4),
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the number of processes exactly equals the number of cpus (ppn)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; requested and there is no additional process.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am wondering whether it is normal behavior. Thanks!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Best regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Evgeniy
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; _______________________________________
</span><br>
<span class="quotelev1">&gt; Dr. Evgeniy Gromov
</span><br>
<span class="quotelev1">&gt; Theoretische Chemie
</span><br>
<span class="quotelev1">&gt; Physikalisch-Chemisches Institut
</span><br>
<span class="quotelev1">&gt; Im Neuenheimer Feld 229
</span><br>
<span class="quotelev1">&gt; D-69120 Heidelberg
</span><br>
<span class="quotelev1">&gt; Germany
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Telefon: +49/(0)6221/545263
</span><br>
<span class="quotelev1">&gt; Fax: +49/(0)6221/545221
</span><br>
<span class="quotelev1">&gt; E-mail: evgeniy_at_[hidden]
</span><br>
<span class="quotelev1">&gt; _______________________________________
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="7755.php">Ralph Castain: "Re: [OMPI users] openmpi 1.3 and --wdir problem"</a>
<li><strong>Previous message:</strong> <a href="7753.php">Evgeniy Gromov: "Re: [OMPI users] One additional (unwanted) process when using	dynamical process management"</a>
<li><strong>In reply to:</strong> <a href="7753.php">Evgeniy Gromov: "Re: [OMPI users] One additional (unwanted) process when using	dynamical process management"</a>
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
