<?
$subject_val = "Re: [OMPI users] One additional (unwanted) process when using	dynamical process management";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 21 13:30:33 2009" -->
<!-- isoreceived="20090121183033" -->
<!-- sent="Wed, 21 Jan 2009 19:30:27 +0100" -->
<!-- isosent="20090121183027" -->
<!-- name="Evgeniy Gromov" -->
<!-- email="Evgeniy.Gromov_at_[hidden]" -->
<!-- subject="Re: [OMPI users] One additional (unwanted) process when using	dynamical process management" -->
<!-- id="497769C3.8070201_at_pci.uni-heidelberg.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4CCBD3F8-937F-4F8B-B953-F9CF9DD45EF5_at_lanl.gov" -->
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
<strong>From:</strong> Evgeniy Gromov (<em>Evgeniy.Gromov_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-21 13:30:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7754.php">Ralph Castain: "Re: [OMPI users] One additional (unwanted) process when using	dynamical process management"</a>
<li><strong>Previous message:</strong> <a href="7752.php">Ralph Castain: "Re: [OMPI users] One additional (unwanted) process when using dynamical process management"</a>
<li><strong>In reply to:</strong> <a href="7752.php">Ralph Castain: "Re: [OMPI users] One additional (unwanted) process when using dynamical process management"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7754.php">Ralph Castain: "Re: [OMPI users] One additional (unwanted) process when using	dynamical process management"</a>
<li><strong>Reply:</strong> <a href="7754.php">Ralph Castain: "Re: [OMPI users] One additional (unwanted) process when using	dynamical process management"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Ralph,
<br>
<p>Thanks for your reply.
<br>
I encountered this problem using openmpi-1.2.5,
<br>
on a Opteron cluster with Myrinet-mx. I tried for
<br>
compilation of Global Arrays different compilers
<br>
(gfortran, intel, pathscale), the result is the same.
<br>
<p>As I mentioned in the previous message GA itself works
<br>
fine, but the application which uses it doesn't work
<br>
correctly if it runs on several nodes. If it runs on
<br>
one node with several cores everything is fine. So I
<br>
thought that the problem might be in this additional
<br>
process.
<br>
<p>Should I try to use the latest 1.3 version of openmpi?
<br>
<p>Best,
<br>
Evgeniy
<br>
<p>Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Not that I've seen. What version of OMPI are you using, and on what type 
</span><br>
<span class="quotelev1">&gt; of machine/environment?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jan 21, 2009, at 11:02 AM, Evgeniy Gromov wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Dear OpenMPI users,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have the following (problem) related to OpenMPI:
</span><br>
<span class="quotelev2">&gt;&gt; I have recently compiled with OPenMPI the new (4-1)
</span><br>
<span class="quotelev2">&gt;&gt; Global Arrays package using ARMCI_NETWORK=MPI-SPAWN,
</span><br>
<span class="quotelev2">&gt;&gt; which implies the use of dynamic process management
</span><br>
<span class="quotelev2">&gt;&gt; realised in MPI2. It got compiled and tested successfully.
</span><br>
<span class="quotelev2">&gt;&gt; However when it is spawning on different nodes (machine) one
</span><br>
<span class="quotelev2">&gt;&gt; additional process on each node appears, i.e. if nodes=2:ppn=2
</span><br>
<span class="quotelev2">&gt;&gt; then on each node there are 3 running processes. In the case
</span><br>
<span class="quotelev2">&gt;&gt; when it runs just on one pc with a few cores (let say nodes=1:ppn=4),
</span><br>
<span class="quotelev2">&gt;&gt; the number of processes exactly equals the number of cpus (ppn)
</span><br>
<span class="quotelev2">&gt;&gt; requested and there is no additional process.
</span><br>
<span class="quotelev2">&gt;&gt; I am wondering whether it is normal behavior. Thanks!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Best regards,
</span><br>
<span class="quotelev2">&gt;&gt; Evgeniy
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<p><p><pre>
-- 
_______________________________________
Dr. Evgeniy Gromov
Theoretische Chemie
Physikalisch-Chemisches Institut
Im Neuenheimer Feld 229
D-69120 Heidelberg
Germany
Telefon: +49/(0)6221/545263
Fax: +49/(0)6221/545221
E-mail: evgeniy_at_[hidden]
_______________________________________
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7754.php">Ralph Castain: "Re: [OMPI users] One additional (unwanted) process when using	dynamical process management"</a>
<li><strong>Previous message:</strong> <a href="7752.php">Ralph Castain: "Re: [OMPI users] One additional (unwanted) process when using dynamical process management"</a>
<li><strong>In reply to:</strong> <a href="7752.php">Ralph Castain: "Re: [OMPI users] One additional (unwanted) process when using dynamical process management"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7754.php">Ralph Castain: "Re: [OMPI users] One additional (unwanted) process when using	dynamical process management"</a>
<li><strong>Reply:</strong> <a href="7754.php">Ralph Castain: "Re: [OMPI users] One additional (unwanted) process when using	dynamical process management"</a>
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
