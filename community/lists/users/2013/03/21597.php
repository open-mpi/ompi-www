<?
$subject_val = "Re: [OMPI users] Running openmpi jobs on two system";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 22 06:42:11 2013" -->
<!-- isoreceived="20130322104211" -->
<!-- sent="Fri, 22 Mar 2013 15:42:07 +0500" -->
<!-- isosent="20130322104207" -->
<!-- name="Syed Ahsan Ali" -->
<!-- email="ahsanshah01_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Running openmpi jobs on two system" -->
<!-- id="CAMvdAsLg7_7E7cgaFaPrg5Pu-TuQ1EOQtzKp7LkBmq1rWZ7dJA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="A0F8714F-C141-4D90-9C8A-D15D7661D84C_at_staff.uni-marburg.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Running openmpi jobs on two system<br>
<strong>From:</strong> Syed Ahsan Ali (<em>ahsanshah01_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-22 06:42:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21598.php">David A. Boger: "Re: [OMPI users] mpi_init waits 64 seconds if vpn is connected"</a>
<li><strong>Previous message:</strong> <a href="21596.php">Reuti: "Re: [OMPI users] Running openmpi jobs on two system"</a>
<li><strong>In reply to:</strong> <a href="21596.php">Reuti: "Re: [OMPI users] Running openmpi jobs on two system"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21602.php">Ralph Castain: "Re: [OMPI users] Running openmpi jobs on two system"</a>
<li><strong>Reply:</strong> <a href="21602.php">Ralph Castain: "Re: [OMPI users] Running openmpi jobs on two system"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Actually due to some data base corruption I am not able to add any new node
<br>
to cluster from the installer node. So I want to run parallel job on more
<br>
nodes without adding them to existing cluster.
<br>
You are right the binaries must be present on the remote node as well.
<br>
Is this possible throught nfs? just as the compute nodes are nfs mounted
<br>
with the installer node.
<br>
<p>Ahsan
<br>
<p><p>On Fri, Mar 22, 2013 at 3:33 PM, Reuti &lt;reuti_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Am 22.03.2013 um 10:14 schrieb Syed Ahsan Ali:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have a very basic question. If we want to run mpirun job on two
</span><br>
<span class="quotelev1">&gt; systems which are not part of cluster, then how we can make it possible.
</span><br>
<span class="quotelev1">&gt; Can the host be specifiend on mpirun which is not compute node, rather a
</span><br>
<span class="quotelev1">&gt; stand alone system.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sure, the machines can be specified as argument to `mpiexec`. But do you
</span><br>
<span class="quotelev1">&gt; want to run applications just between these two machines, or should they
</span><br>
<span class="quotelev1">&gt; participate on a larger parallel job with machines of the cluster: then a
</span><br>
<span class="quotelev1">&gt; direct network connection between outside and inside of the cluster is
</span><br>
<span class="quotelev1">&gt; necessary by some kind of forwarding in case these are separated networks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also the paths to the started binaries may be different, in case the two
</span><br>
<span class="quotelev1">&gt; machines are not sharing the same /home with the cluster and this needs to
</span><br>
<span class="quotelev1">&gt; be honored.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In case you are using a queuing system and want to route jobs to outside
</span><br>
<span class="quotelev1">&gt; machines of the set up cluster: it's necessary to negotiate with the admin
</span><br>
<span class="quotelev1">&gt; to allow jobs being scheduled thereto.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks
</span><br>
<span class="quotelev2">&gt; &gt; Ahsan
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Syed Ahsan Ali Bokhari
Electronic Engineer (EE)
Research &amp; Development Division
Pakistan Meteorological Department H-8/4, Islamabad.
Phone # off  +92518358714
Cell # +923155145014
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21597/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21598.php">David A. Boger: "Re: [OMPI users] mpi_init waits 64 seconds if vpn is connected"</a>
<li><strong>Previous message:</strong> <a href="21596.php">Reuti: "Re: [OMPI users] Running openmpi jobs on two system"</a>
<li><strong>In reply to:</strong> <a href="21596.php">Reuti: "Re: [OMPI users] Running openmpi jobs on two system"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21602.php">Ralph Castain: "Re: [OMPI users] Running openmpi jobs on two system"</a>
<li><strong>Reply:</strong> <a href="21602.php">Ralph Castain: "Re: [OMPI users] Running openmpi jobs on two system"</a>
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
