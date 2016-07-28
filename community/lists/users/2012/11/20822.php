<?
$subject_val = "Re: [OMPI users] OpenMPI 1.6.3 and Memory Issues";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 29 19:54:29 2012" -->
<!-- isoreceived="20121130005429" -->
<!-- sent="Thu, 29 Nov 2012 16:54:22 -0800" -->
<!-- isosent="20121130005422" -->
<!-- name="Joseph Farran" -->
<!-- email="jfarran_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.6.3 and Memory Issues" -->
<!-- id="50B803BE.4030809_at_uci.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="50B80055.8070902_at_dev.mellanox.co.il" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI 1.6.3 and Memory Issues<br>
<strong>From:</strong> Joseph Farran (<em>jfarran_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-29 19:54:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20823.php">shiny knight: "Re: [OMPI users] cluster with iOS or Android devices?"</a>
<li><strong>Previous message:</strong> <a href="20821.php">Yevgeny Kliteynik: "Re: [OMPI users] OpenMPI 1.6.3 and Memory Issues"</a>
<li><strong>In reply to:</strong> <a href="20821.php">Yevgeny Kliteynik: "Re: [OMPI users] OpenMPI 1.6.3 and Memory Issues"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi again.
<br>
<p>I am using /etc/modprobe.d/mofed.conf, otherwise I get:
<br>
<p>WARNING: Deprecated config file /etc/modprobe.conf, all config files belong into /etc/modprobe.d/
<br>
<p>But I am still getting the memory errors after making the changes and rebooting:
<br>
<p>$ cat /etc/modprobe.d/mofed.conf
<br>
options mlx4_core log_num_mtt=24
<br>
options mlx4_core log_mtts_per_seg=1
<br>
<p>$ mpirun hello
<br>
--------------------------------------------------------------------------
<br>
WARNING: It appears that your OpenFabrics subsystem is configured to only
<br>
allow registering part of your physical memory.  This can cause MPI jobs to
<br>
run with erratic performance, hang, and/or crash.
<br>
....
<br>
<p><p>On 11/29/2012 04:39 PM, Yevgeny Kliteynik wrote:
<br>
<span class="quotelev1">&gt; You can also set these parameters in /etc/modprobe.conf:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    options mlx4_core log_num_mtt=24 log_mtts_per_seg=1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- YK
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20823.php">shiny knight: "Re: [OMPI users] cluster with iOS or Android devices?"</a>
<li><strong>Previous message:</strong> <a href="20821.php">Yevgeny Kliteynik: "Re: [OMPI users] OpenMPI 1.6.3 and Memory Issues"</a>
<li><strong>In reply to:</strong> <a href="20821.php">Yevgeny Kliteynik: "Re: [OMPI users] OpenMPI 1.6.3 and Memory Issues"</a>
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
