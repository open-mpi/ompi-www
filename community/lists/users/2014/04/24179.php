<?
$subject_val = "Re: [OMPI users] mpirun runs in serial even I set np to several	processors";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 14 13:23:28 2014" -->
<!-- isoreceived="20140414172328" -->
<!-- sent="Mon, 14 Apr 2014 17:23:26 +0000" -->
<!-- isosent="20140414172326" -->
<!-- name="Dave Goodell (dgoodell)" -->
<!-- email="dgoodell_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun runs in serial even I set np to several	processors" -->
<!-- id="4D5DBF88-D3D0-482D-B219-341ABBE7EB47_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CACWmqDe19qMHdQ3PL9N4z_ZJPYeOSaL8yOj6bUJ__g_WMAWcgA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun runs in serial even I set np to several	processors<br>
<strong>From:</strong> Dave Goodell (dgoodell) (<em>dgoodell_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-14 13:23:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24180.php">Djordje Romanic: "Re: [OMPI users] mpirun runs in serial even I set np to several processors"</a>
<li><strong>Previous message:</strong> <a href="24178.php">Djordje Romanic: "[OMPI users] mpirun runs in serial even I set np to several processors"</a>
<li><strong>In reply to:</strong> <a href="24178.php">Djordje Romanic: "[OMPI users] mpirun runs in serial even I set np to several processors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24180.php">Djordje Romanic: "Re: [OMPI users] mpirun runs in serial even I set np to several processors"</a>
<li><strong>Reply:</strong> <a href="24180.php">Djordje Romanic: "Re: [OMPI users] mpirun runs in serial even I set np to several processors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 14, 2014, at 12:15 PM, Djordje Romanic &lt;djordje8_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; When I start wrf with mpirun -np 4 ./wrf.exe, I get this:
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------
</span><br>
<span class="quotelev1">&gt;  starting wrf task            0  of            1
</span><br>
<span class="quotelev1">&gt;  starting wrf task            0  of            1
</span><br>
<span class="quotelev1">&gt;  starting wrf task            0  of            1
</span><br>
<span class="quotelev1">&gt;  starting wrf task            0  of            1
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------
</span><br>
<span class="quotelev1">&gt; This indicates that it is not using 4 processors, but 1. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any idea what might be the problem? 
</span><br>
<p>It could be that you compiled WRF with a different MPI implementation than you are using to run it (e.g., MPICH vs. Open MPI).
<br>
<p>-Dave
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24180.php">Djordje Romanic: "Re: [OMPI users] mpirun runs in serial even I set np to several processors"</a>
<li><strong>Previous message:</strong> <a href="24178.php">Djordje Romanic: "[OMPI users] mpirun runs in serial even I set np to several processors"</a>
<li><strong>In reply to:</strong> <a href="24178.php">Djordje Romanic: "[OMPI users] mpirun runs in serial even I set np to several processors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24180.php">Djordje Romanic: "Re: [OMPI users] mpirun runs in serial even I set np to several processors"</a>
<li><strong>Reply:</strong> <a href="24180.php">Djordje Romanic: "Re: [OMPI users] mpirun runs in serial even I set np to several processors"</a>
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
