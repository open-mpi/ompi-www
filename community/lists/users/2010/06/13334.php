<?
$subject_val = "[OMPI users] ompi-ps failure on WinXP";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 16 12:55:15 2010" -->
<!-- isoreceived="20100616165515" -->
<!-- sent="Wed, 16 Jun 2010 18:55:09 +0200" -->
<!-- isosent="20100616165509" -->
<!-- name="Stephan Hackstedt" -->
<!-- email="stephan.hackstedt_at_[hidden]" -->
<!-- subject="[OMPI users] ompi-ps failure on WinXP" -->
<!-- id="AANLkTimcN4LnOlkNHp2qqaKo5QR2V0XFO7Ps-b338LY7_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] ompi-ps failure on WinXP<br>
<strong>From:</strong> Stephan Hackstedt (<em>stephan.hackstedt_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-16 12:55:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13335.php">Charlie E. Strauss: "[OMPI users] Xgrid an openmpi  1.2 and 1.5rc1"</a>
<li><strong>Previous message:</strong> <a href="13333.php">Kevin.Buckley_at_[hidden]: "[OMPI users] Building on SPARC-Enterprise-T5120"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13346.php">Stephan Hackstedt: "Re: [OMPI users] ompi-ps failure on WinXP"</a>
<li><strong>Reply:</strong> <a href="13346.php">Stephan Hackstedt: "Re: [OMPI users] ompi-ps failure on WinXP"</a>
<li><strong>Reply:</strong> <a href="13357.php">Shiqing Fan: "Re: [OMPI users] ompi-ps failure on WinXP"</a>
<li><strong>Maybe reply:</strong> <a href="13363.php">Shiqing Fan: "Re: [OMPI users] ompi-ps failure on WinXP"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>i am using Open-MPI on a WinXP Professional VirtualBox machine.
<br>
Open-MPI is build with cmake and nmake.
<br>
When i'm trying to use the ompi-ps tool i got the following failure (the
<br>
same with ompi-server, ompi-clean and orted):
<br>
<p><p><p>#######################################################################
<br>
<p>D:\project\cluster_ompi&gt;ompi-ps.exe
<br>
[vbox:03552] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in file
<br>
D:\project\op
<br>
enmpi_1_4_2_src\orte\runtime\orte_init.c at line 125
<br>
--------------------------------------------------------------------------
<br>
It looks like orte_init failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during orte_init; some of which are due to configuration or
<br>
environment problems.  This failure appears to be an internal failure;
<br>
here's some additional information (which may only be relevant to an
<br>
Open MPI developer):
<br>
<p>&nbsp;&nbsp;orte_ess_base_select failed
<br>
&nbsp;&nbsp;--&gt; Returned value Not found (-13) instead of ORTE_SUCCESS
<br>
--------------------------------------------------------------------------
<br>
<p>########################################################################
<br>
<p><p><p>on the other way, when use mpirun to start the tools like &quot;mpirun
<br>
ompi-ps.exe&quot; there is no error.
<br>
It this normal, or maybe is there an fix to solve my problem?
<br>
I'm would be nice if somebody has a solution for this.
<br>
<p><p>Stephan
<br>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13334/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13334/ompi_info.7z">ompi_info.7z</a>
</ul>
<!-- attachment="ompi_info.7z" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13335.php">Charlie E. Strauss: "[OMPI users] Xgrid an openmpi  1.2 and 1.5rc1"</a>
<li><strong>Previous message:</strong> <a href="13333.php">Kevin.Buckley_at_[hidden]: "[OMPI users] Building on SPARC-Enterprise-T5120"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13346.php">Stephan Hackstedt: "Re: [OMPI users] ompi-ps failure on WinXP"</a>
<li><strong>Reply:</strong> <a href="13346.php">Stephan Hackstedt: "Re: [OMPI users] ompi-ps failure on WinXP"</a>
<li><strong>Reply:</strong> <a href="13357.php">Shiqing Fan: "Re: [OMPI users] ompi-ps failure on WinXP"</a>
<li><strong>Maybe reply:</strong> <a href="13363.php">Shiqing Fan: "Re: [OMPI users] ompi-ps failure on WinXP"</a>
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
