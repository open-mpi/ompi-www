<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Nov 22 06:17:29 2006" -->
<!-- isoreceived="20061122111729" -->
<!-- sent="Wed, 22 Nov 2006 13:17:20 +0200 (EET)" -->
<!-- isosent="20061122111720" -->
<!-- name="Epitropakis Mixalis 00064" -->
<!-- email="mikeagn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Advice for a cluster software" -->
<!-- id="Pine.LNX.4.62.0611221251030.12200_at_student.math.upatras.gr" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="F8A6714E-F9F7-411E-9301-478E9F06C219_at_staff.uni-marburg.de" -->
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
<strong>From:</strong> Epitropakis Mixalis 00064 (<em>mikeagn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-22 06:17:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2213.php">Adam Moody: "Re: [OMPI users] Build OpenMPI for SHM only"</a>
<li><strong>Previous message:</strong> <a href="2211.php">Brock Palen: "Re: [OMPI users] MX performance problem on two processor nodes"</a>
<li><strong>In reply to:</strong> <a href="2191.php">Reuti: "Re: [OMPI users] Advice for a cluster software"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, 20 Nov 2006, Reuti wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Am 20.11.2006 um 13:12 schrieb Epitropakis Mixalis 00064:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello everyone!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Hello,
<br>
<p><span class="quotelev1">&gt; I think this question is of broader audience on the beowulf.org
</span><br>
<span class="quotelev1">&gt; mailing list, but anyway: what are you using in the cluster besides
</span><br>
Yes, I think you are right, but we are going to use OpenMPI and we wanted 
<br>
to hear and your opinion (OpenMPI experts opinion) :)
<br>
<p><span class="quotelev1">&gt; OpenMPI? Although I'm biased, I would suggest SGE GridEngine, as it
</span><br>
<span class="quotelev1">&gt; supports more parallel libs than Torque by its qrsh replacement; e.g.
</span><br>
<span class="quotelev1">&gt; Linda or PVM. Also the integration between the qmaster and scheduler
</span><br>
<p>At this moment we use MPI and PVM but we would like to test and use other 
<br>
technologies, projects, ideas as well. I think that SGE GridEngine is a 
<br>
very good project and maybe that is our final choise!
<br>
<p><span class="quotelev1">&gt; is tighter. In Torque you have two commands: &quot;qstat&quot; and &quot;showq&quot;. The
</span><br>
<span class="quotelev1">&gt; former is the view of the cluster by Torque, the latter the one of
</span><br>
<span class="quotelev1">&gt; the Maui scheduler - and sometimes I observe that they disagree about
</span><br>
<span class="quotelev1">&gt; what's running in the cluster and what not (we use SGE, but we have
</span><br>
<span class="quotelev1">&gt; access to some clusters in other locations which prefer Torque).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The support for SGE will be in OpenMPI in1.2 AFAIK.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Question: you have a central filer server in the cluster, to serve
</span><br>
<span class="quotelev1">&gt; the home directory to the nodes and which could also act as a NIS,
</span><br>
<span class="quotelev1">&gt; NTP and SGE qmaster server? You mentioned only the nodes.
</span><br>
<p>Yes, at this time we think to use an additional node as the master node 
<br>
with a better HDD for these jobs
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Reuti
</span><br>
<p>Thank you for your help and your time :)
<br>
<p>Michael
<br>
<p><span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks very much for your time and I am sure that your opinion will be
</span><br>
<span class="quotelev2">&gt;&gt; of of great help to us!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Michael
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2213.php">Adam Moody: "Re: [OMPI users] Build OpenMPI for SHM only"</a>
<li><strong>Previous message:</strong> <a href="2211.php">Brock Palen: "Re: [OMPI users] MX performance problem on two processor nodes"</a>
<li><strong>In reply to:</strong> <a href="2191.php">Reuti: "Re: [OMPI users] Advice for a cluster software"</a>
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
