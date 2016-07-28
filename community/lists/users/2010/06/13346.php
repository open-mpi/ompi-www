<?
$subject_val = "Re: [OMPI users] ompi-ps failure on WinXP";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jun 20 05:15:00 2010" -->
<!-- isoreceived="20100620091500" -->
<!-- sent="Sun, 20 Jun 2010 11:14:56 +0200" -->
<!-- isosent="20100620091456" -->
<!-- name="Stephan Hackstedt" -->
<!-- email="stephan.hackstedt_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ompi-ps failure on WinXP" -->
<!-- id="AANLkTinaaMTAuYI6C3wooY_z1EcCXhaNMBjnjXsKphJx_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTimcN4LnOlkNHp2qqaKo5QR2V0XFO7Ps-b338LY7_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] ompi-ps failure on WinXP<br>
<strong>From:</strong> Stephan Hackstedt (<em>stephan.hackstedt_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-20 05:14:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13347.php">Jack Bryan: "[OMPI users] Open MPI task scheduler"</a>
<li><strong>Previous message:</strong> <a href="13345.php">Jeff Squyres: "Re: [OMPI users] problem with -npernode"</a>
<li><strong>In reply to:</strong> <a href="13334.php">Stephan Hackstedt: "[OMPI users] ompi-ps failure on WinXP"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13358.php">Shiqing Fan: "Re: [OMPI users] ompi-ps failure on WinXP"</a>
<li><strong>Reply:</strong> <a href="13358.php">Shiqing Fan: "Re: [OMPI users] ompi-ps failure on WinXP"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>i found no solution for this until yet.
<br>
Is there anyone who has a running ompi-server.exe on Windows XP?
<br>
If so, it would be great to tell me what i can do, to make ompi-server-exe
<br>
running properly on WinXP.
<br>
<p>Stephan
<br>
<p><p>2010/6/16 Stephan Hackstedt &lt;stephan.hackstedt_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i am using Open-MPI on a WinXP Professional VirtualBox machine.
</span><br>
<span class="quotelev1">&gt; Open-MPI is build with cmake and nmake.
</span><br>
<span class="quotelev1">&gt; When i'm trying to use the ompi-ps tool i got the following failure (the
</span><br>
<span class="quotelev1">&gt; same with ompi-server, ompi-clean and orted):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #######################################################################
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; D:\project\cluster_ompi&gt;ompi-ps.exe
</span><br>
<span class="quotelev1">&gt; [vbox:03552] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev1">&gt; D:\project\op
</span><br>
<span class="quotelev1">&gt; enmpi_1_4_2_src\orte\runtime\orte_init.c at line 125
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like orte_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev1">&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev1">&gt; Open MPI developer):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   orte_ess_base_select failed
</span><br>
<span class="quotelev1">&gt;   --&gt; Returned value Not found (-13) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ########################################################################
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; on the other way, when use mpirun to start the tools like &quot;mpirun
</span><br>
<span class="quotelev1">&gt; ompi-ps.exe&quot; there is no error.
</span><br>
<span class="quotelev1">&gt; It this normal, or maybe is there an fix to solve my problem?
</span><br>
<span class="quotelev1">&gt; I'm would be nice if somebody has a solution for this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Stephan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13346/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13347.php">Jack Bryan: "[OMPI users] Open MPI task scheduler"</a>
<li><strong>Previous message:</strong> <a href="13345.php">Jeff Squyres: "Re: [OMPI users] problem with -npernode"</a>
<li><strong>In reply to:</strong> <a href="13334.php">Stephan Hackstedt: "[OMPI users] ompi-ps failure on WinXP"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13358.php">Shiqing Fan: "Re: [OMPI users] ompi-ps failure on WinXP"</a>
<li><strong>Reply:</strong> <a href="13358.php">Shiqing Fan: "Re: [OMPI users] ompi-ps failure on WinXP"</a>
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
