<?
$subject_val = "Re: [OMPI users] WRF run on multiple Nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Apr  3 23:29:09 2011" -->
<!-- isoreceived="20110404032909" -->
<!-- sent="Mon, 4 Apr 2011 08:29:04 +0500" -->
<!-- isosent="20110404032904" -->
<!-- name="Ahsan Ali" -->
<!-- email="ahsanshah01_at_[hidden]" -->
<!-- subject="Re: [OMPI users] WRF run on multiple Nodes" -->
<!-- id="BANLkTimBB3TZsFxLmsM-CuLsLNFB5XhT8g_at_mail.gmail.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="[OMPI users] WRF run on multiple Nodes" -->
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
<strong>Subject:</strong> Re: [OMPI users] WRF run on multiple Nodes<br>
<strong>From:</strong> Ahsan Ali (<em>ahsanshah01_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-03 23:29:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16100.php">Pascal Deveze: "Re: [OMPI users] Deadlock with mpi_init_thread + mpi_file_set_view"</a>
<li><strong>Previous message:</strong> <a href="16098.php">Ralph Castain: "Re: [OMPI users] openmpi/pbsdsh/Torque problem"</a>
<li><strong>Maybe in reply to:</strong> <a href="16068.php">Ahsan Ali: "[OMPI users] WRF run on multiple Nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16101.php">John Hearns: "Re: [OMPI users] WRF run on multiple Nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear David,
<br>
<p>&nbsp;I don't know where the machinefile is ?. I found a command *Running with
<br>
Open MPI mpirun -np 168 -mca btl self,sm,openib &#150;hostfile
<br>
/home/demo/hostfile-ompi.14 -mca mpi_paffinity_alone 1
<br>
~/WRFV3.2.1/run/wrf.exe.* for* *Dell PowerEdge M610 14-node cluster
<br>
with Mellanox QDR InfiniBand Switch , but I am still not able to make it run
<br>
with my system. i have Dell PowerEdge M600 cluster with Infiniband.
<br>
<p><p><p><p><span class="quotelev1">&gt; Message: 3
</span><br>
<span class="quotelev1">&gt; Date: Fri, 1 Apr 2011 22:02:59 -0700
</span><br>
<span class="quotelev1">&gt; From: David Zhang &lt;solarbikedz_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] WRF run on multiple Nodes
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;BANLkTikufhi=8HK-MPoUoCPNCkiqFsPKoQ_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=&quot;iso-8859-1&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; look into -machinefile
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Apr 1, 2011 at 8:16 PM, Ahsan Ali &lt;ahsanshah01_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hello,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  I want to run WRF on multiple nodes in a linux cluster using openmpi,
</span><br>
<span class="quotelev2">&gt; &gt; giving the command *mpirun -np 4 ./wrf.exe* just submit it to the single
</span><br>
<span class="quotelev2">&gt; &gt; node . I don't know how to run it on other nodes as well. Help needed.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Regards,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Syed Ahsan Ali Bokhari
</span><br>
<span class="quotelev2">&gt; &gt; Electronic Engineer (EE)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Research &amp; Development Division
</span><br>
<span class="quotelev2">&gt; &gt; Pakistan Meteorological Department H-8/4, Islamabad.
</span><br>
<span class="quotelev2">&gt; &gt; Phone # off  +92518358714
</span><br>
<span class="quotelev2">&gt; &gt; Cell # +923155145014
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16099/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16100.php">Pascal Deveze: "Re: [OMPI users] Deadlock with mpi_init_thread + mpi_file_set_view"</a>
<li><strong>Previous message:</strong> <a href="16098.php">Ralph Castain: "Re: [OMPI users] openmpi/pbsdsh/Torque problem"</a>
<li><strong>Maybe in reply to:</strong> <a href="16068.php">Ahsan Ali: "[OMPI users] WRF run on multiple Nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16101.php">John Hearns: "Re: [OMPI users] WRF run on multiple Nodes"</a>
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
