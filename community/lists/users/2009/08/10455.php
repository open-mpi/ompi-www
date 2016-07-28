<?
$subject_val = "Re: [OMPI users] RETRY EXCEEDED ERROR status number 12";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 21 17:45:01 2009" -->
<!-- isoreceived="20090821214501" -->
<!-- sent="Sat, 22 Aug 2009 00:44:54 +0300" -->
<!-- isosent="20090821214454" -->
<!-- name="Pavel Shamis (Pasha)" -->
<!-- email="pashash_at_[hidden]" -->
<!-- subject="Re: [OMPI users] RETRY EXCEEDED ERROR status number 12" -->
<!-- id="4A8F1556.4080408_at_dev.mellanox.co.il" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4A8EEA9E.8050506_at_ias.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] RETRY EXCEEDED ERROR status number 12<br>
<strong>From:</strong> Pavel Shamis (Pasha) (<em>pashash_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-21 17:44:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10456.php">Shao-Ching Huang: "[OMPI users] MPI_Alltoall problem: error creating qp"</a>
<li><strong>Previous message:</strong> <a href="10454.php">Prentice Bisbal: "[OMPI users] RETRY EXCEEDED ERROR status number 12"</a>
<li><strong>In reply to:</strong> <a href="10454.php">Prentice Bisbal: "[OMPI users] RETRY EXCEEDED ERROR status number 12"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You may try to use ibdiagnet tool:
<br>
<a href="http://linux.die.net/man/1/ibdiagnet">http://linux.die.net/man/1/ibdiagnet</a>
<br>
<p>The tool is part of OFED (<a href="http://www.openfabrics.org/">http://www.openfabrics.org/</a>)
<br>
<p>Pasha.
<br>
<p>Prentice Bisbal wrote:
<br>
<span class="quotelev1">&gt; Several jobs on my cluster just died with the error below.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Are there any IB/Open MPI diagnostics I should use to diagnose, should I
</span><br>
<span class="quotelev1">&gt; just reboot the nodes, or should I have the user who submitted these
</span><br>
<span class="quotelev1">&gt; jobs just increase the retry count/timeout paramters?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [0,1,6][../../../../../ompi/mca/btl/openib/btl_openib_component.c:1375:btl_openib_component_progress]
</span><br>
<span class="quotelev1">&gt; from node14.aurora to: node40.aurora error polling HP CQ with status
</span><br>
<span class="quotelev1">&gt; RETRY EXCEEDED ERROR status number 12 for wr_id 13606831800 opcode 11119
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; The InfiniBand retry count between two MPI processes has been
</span><br>
<span class="quotelev1">&gt; exceeded. &quot;Retry count&quot; is defined in the InfiniBand spec 1.2
</span><br>
<span class="quotelev1">&gt; (section 12.7.38):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The total number of times that the sender wishes the receiver to
</span><br>
<span class="quotelev1">&gt; retry timeout, packet sequence, etc. errors before posting a
</span><br>
<span class="quotelev1">&gt; completion error.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This error typically means that there is something awry within the
</span><br>
<span class="quotelev1">&gt; InfiniBand fabric itself. You should note the hosts on which this
</span><br>
<span class="quotelev1">&gt; error has occurred; it has been observed that rebooting or removing a
</span><br>
<span class="quotelev1">&gt; particular host from the job can sometimes resolve this issue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Two MCA parameters can be used to control Open MPI's behavior with
</span><br>
<span class="quotelev1">&gt; respect to the retry count:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * btl_openib_ib_retry_count - The number of times the sender will
</span><br>
<span class="quotelev1">&gt; attempt to retry (defaulted to 7, the maximum value).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * btl_openib_ib_timeout - The local ACK timeout parameter (defaulted
</span><br>
<span class="quotelev1">&gt; to 10). The actual timeout value used is calculated as:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 4.096 microseconds * (2^btl_openib_ib_timeout)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; See the InfiniBand spec 1.2 (section 12.7.34) for more details.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10456.php">Shao-Ching Huang: "[OMPI users] MPI_Alltoall problem: error creating qp"</a>
<li><strong>Previous message:</strong> <a href="10454.php">Prentice Bisbal: "[OMPI users] RETRY EXCEEDED ERROR status number 12"</a>
<li><strong>In reply to:</strong> <a href="10454.php">Prentice Bisbal: "[OMPI users] RETRY EXCEEDED ERROR status number 12"</a>
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
