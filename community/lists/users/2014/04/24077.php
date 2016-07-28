<?
$subject_val = "Re: [OMPI users] Openmpi 1.8 &quot;rmaps seq&quot; doesn't work";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  7 11:42:57 2014" -->
<!-- isoreceived="20140407154257" -->
<!-- sent="Mon, 7 Apr 2014 08:42:26 -0700" -->
<!-- isosent="20140407154226" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Openmpi 1.8 &amp;quot;rmaps seq&amp;quot; doesn't work" -->
<!-- id="E117E077-ACCE-45F9-9EF0-1E307D512926_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CADMff4Odzuw-M5Ui_3QraBdy1PRE1VhLWyOqi=fos1kQd9g5tw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Openmpi 1.8 &quot;rmaps seq&quot; doesn't work<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-07 11:42:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24078.php">Kamal: "Re: [OMPI users] Open Mpi execution error"</a>
<li><strong>Previous message:</strong> <a href="24076.php">Kamal: "Re: [OMPI users] Open Mpi execution error"</a>
<li><strong>In reply to:</strong> <a href="24070.php">Chen Bill: "[OMPI users] Openmpi 1.8 &quot;rmaps seq&quot; doesn't work"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Looks like bit-rot has struck the sequential mapper support - I'll revive it for 1.8.1
<br>
<p>On Apr 6, 2014, at 7:17 PM, Chen Bill &lt;billchen001_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi ,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I just tried the openmpi 1.8, but I found the feature --mca rmaps seq doesn't work.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; for example,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;mpirun -np 4 -hostfile hostsfle --mca rmaps seq hostname
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It shows below error,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Your job failed to map. Either no mapper was available, or none
</span><br>
<span class="quotelev1">&gt; of the available mappers was able to perform the requested
</span><br>
<span class="quotelev1">&gt; mapping operation. This can happen if you request a map type
</span><br>
<span class="quotelev1">&gt; (e.g., loadbalance) and the corresponding mapper was not built.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; but when I use ompi_info ,it shows has this feature
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;ompi_info |grep -i rmaps
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: lama (MCA v2.0, API v2.0, Component v1.8)
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: mindist (MCA v2.0, API v2.0, Component v1.8)
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: ppr (MCA v2.0, API v2.0, Component v1.8)
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: rank_file (MCA v2.0, API v2.0, Component v1.8)
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: resilient (MCA v2.0, API v2.0, Component v1.8)
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: round_robin (MCA v2.0, API v2.0, Component v1.8)
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: seq (MCA v2.0, API v2.0, Component v1.8)
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: staged (MCA v2.0, API v2.0, Component v1.8)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any suggestions?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Many thanks,
</span><br>
<span class="quotelev1">&gt; Bill
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24077/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24078.php">Kamal: "Re: [OMPI users] Open Mpi execution error"</a>
<li><strong>Previous message:</strong> <a href="24076.php">Kamal: "Re: [OMPI users] Open Mpi execution error"</a>
<li><strong>In reply to:</strong> <a href="24070.php">Chen Bill: "[OMPI users] Openmpi 1.8 &quot;rmaps seq&quot; doesn't work"</a>
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
