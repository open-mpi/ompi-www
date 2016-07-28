<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Nov 20 09:10:53 2006" -->
<!-- isoreceived="20061120141053" -->
<!-- sent="Mon, 20 Nov 2006 15:10:27 +0100" -->
<!-- isosent="20061120141027" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Advice for a cluster software" -->
<!-- id="F8A6714E-F9F7-411E-9301-478E9F06C219_at_staff.uni-marburg.de" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.LNX.4.62.0611201401240.24192_at_student.math.upatras.gr" -->
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
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-20 09:10:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2192.php">Patrick Jessee: "[OMPI users] removing hard-coded paths from OpenMPI shared libraries"</a>
<li><strong>Previous message:</strong> <a href="2190.php">Michael: "Re: [OMPI users] Error: SAVE statement at (1) follows blanket SAVE statement in file mpif.h"</a>
<li><strong>In reply to:</strong> <a href="2189.php">Epitropakis Mixalis 00064: "[OMPI users] Advice for a cluster software"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2212.php">Epitropakis Mixalis 00064: "Re: [OMPI users] Advice for a cluster software"</a>
<li><strong>Reply:</strong> <a href="2212.php">Epitropakis Mixalis 00064: "Re: [OMPI users] Advice for a cluster software"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Am 20.11.2006 um 13:12 schrieb Epitropakis Mixalis 00064:
<br>
<p><span class="quotelev1">&gt; Hello everyone!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am a member of a research laboratory in University of Patras,  
</span><br>
<span class="quotelev1">&gt; Greece.
</span><br>
<span class="quotelev1">&gt; We have ordered our first cluster and in the following days it will
</span><br>
<span class="quotelev1">&gt; arrive. So, we will need the help of experts in order to decide which
</span><br>
<span class="quotelev1">&gt; cluster management and job scheduling software is the most suitable  
</span><br>
<span class="quotelev1">&gt; for it
</span><br>
<span class="quotelev1">&gt; :) .
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Each computer of the cluster consists of: 2 x (Dual-Core Intel Xeon
</span><br>
<span class="quotelev1">&gt; Processor 5060 (3.2 GHz, 1066 MHz Bus)), (motherboard: S5000PAL)
</span><br>
<span class="quotelev1">&gt; , 4GB ECC RAM and 250GB HDD. All parts are interconnected with a
</span><br>
<span class="quotelev1">&gt; Gigabit Ethernet Switch.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What we need, is your opinion and experience for a software package
</span><br>
<span class="quotelev1">&gt; (or a collection) that will make easier the use of the cluster (job
</span><br>
<span class="quotelev1">&gt; scheduling) as well as the administration of it (update and upgrade of
</span><br>
<span class="quotelev1">&gt; the OS, installation of new software, user administration, etc). We  
</span><br>
<span class="quotelev1">&gt; are
</span><br>
<span class="quotelev1">&gt; proficient with Linux administration (any distro).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On our first search in the internet, we found some packages that do  
</span><br>
<span class="quotelev1">&gt; not
</span><br>
<span class="quotelev1">&gt; combine both job scheduling and administration. If there is a  
</span><br>
<span class="quotelev1">&gt; package that
</span><br>
<span class="quotelev1">&gt; could be suggested and that could combine both we would be really  
</span><br>
<span class="quotelev1">&gt; happy.
</span><br>
<span class="quotelev1">&gt; We would prefer the software packages to be open source. :)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Some of them found and studied so far are the following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [1] TORQUE Resource Manager
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.clusterresources.com/pages/products/torque-resource">http://www.clusterresources.com/pages/products/torque-resource</a>- 
</span><br>
<span class="quotelev1">&gt; manager.php
</span><br>
<span class="quotelev1">&gt; [2] <a href="http://gridengine.sunsource.net/">http://gridengine.sunsource.net/</a>
</span><br>
<span class="quotelev1">&gt; [3] <a href="http://oscar.openclustergroup.org/">http://oscar.openclustergroup.org/</a>
</span><br>
<span class="quotelev1">&gt; [4] <a href="http://dcc.irb.hr/">http://dcc.irb.hr/</a>
</span><br>
<p>I think this question is of broader audience on the beowulf.org  
<br>
mailing list, but anyway: what are you using in the cluster besides  
<br>
OpenMPI? Although I'm biased, I would suggest SGE GridEngine, as it  
<br>
supports more parallel libs than Torque by its qrsh replacement; e.g.  
<br>
Linda or PVM. Also the integration between the qmaster and scheduler  
<br>
is tighter. In Torque you have two commands: &quot;qstat&quot; and &quot;showq&quot;. The  
<br>
former is the view of the cluster by Torque, the latter the one of  
<br>
the Maui scheduler - and sometimes I observe that they disagree about  
<br>
what's running in the cluster and what not (we use SGE, but we have  
<br>
access to some clusters in other locations which prefer Torque).
<br>
<p>The support for SGE will be in OpenMPI in1.2 AFAIK.
<br>
<p>Question: you have a central filer server in the cluster, to serve  
<br>
the home directory to the nodes and which could also act as a NIS,  
<br>
NTP and SGE qmaster server? You mentioned only the nodes.
<br>
<p>-- Reuti
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; These are some of our thoughts. We know that the distribution choice
</span><br>
<span class="quotelev1">&gt; as well as the cluster management software will apply only ONCE and we
</span><br>
<span class="quotelev1">&gt; will not be able to test/change it easily...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks very much for your time and I am sure that your opinion will be
</span><br>
<span class="quotelev1">&gt; of of great help to us!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Michael
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
<li><strong>Next message:</strong> <a href="2192.php">Patrick Jessee: "[OMPI users] removing hard-coded paths from OpenMPI shared libraries"</a>
<li><strong>Previous message:</strong> <a href="2190.php">Michael: "Re: [OMPI users] Error: SAVE statement at (1) follows blanket SAVE statement in file mpif.h"</a>
<li><strong>In reply to:</strong> <a href="2189.php">Epitropakis Mixalis 00064: "[OMPI users] Advice for a cluster software"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2212.php">Epitropakis Mixalis 00064: "Re: [OMPI users] Advice for a cluster software"</a>
<li><strong>Reply:</strong> <a href="2212.php">Epitropakis Mixalis 00064: "Re: [OMPI users] Advice for a cluster software"</a>
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
