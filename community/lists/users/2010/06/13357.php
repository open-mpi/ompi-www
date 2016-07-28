<?
$subject_val = "Re: [OMPI users] ompi-ps failure on WinXP";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 21 05:50:19 2010" -->
<!-- isoreceived="20100621095019" -->
<!-- sent="Mon, 21 Jun 2010 11:52:03 +0200" -->
<!-- isosent="20100621095203" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ompi-ps failure on WinXP" -->
<!-- id="4C1F3643.9030206_at_hlrs.de" -->
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
<strong>From:</strong> Shiqing Fan (<em>fan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-21 05:52:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13358.php">Shiqing Fan: "Re: [OMPI users] ompi-ps failure on WinXP"</a>
<li><strong>Previous message:</strong> <a href="13356.php">Matthieu Brucher: "Re: [OMPI users] Open MPI task scheduler"</a>
<li><strong>In reply to:</strong> <a href="13334.php">Stephan Hackstedt: "[OMPI users] ompi-ps failure on WinXP"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13363.php">Shiqing Fan: "Re: [OMPI users] ompi-ps failure on WinXP"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Stephan,
<br>
<p>ompi-ps is now fixed in trunk (r23286), it should work again with this 
<br>
fix, could you please update and try it again?
<br>
<p><p>Thanks,
<br>
Shiqing
<br>
<p>On 2010-6-16 6:55 PM, Stephan Hackstedt wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i am using Open-MPI on a WinXP Professional VirtualBox machine.
</span><br>
<span class="quotelev1">&gt; Open-MPI is build with cmake and nmake.
</span><br>
<span class="quotelev1">&gt; When i'm trying to use the ompi-ps tool i got the following failure 
</span><br>
<span class="quotelev1">&gt; (the same with ompi-server, ompi-clean and orted):
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
<p><p><pre>
-- 
--------------------------------------------------------------
Shiqing Fan                          <a href="http://www.hlrs.de/people/fan">http://www.hlrs.de/people/fan</a>
High Performance Computing           Tel.: +49 711 685 87234
   Center Stuttgart (HLRS)            Fax.: +49 711 685 65832
Address:Allmandring 30               email: fan_at_[hidden]
70569 Stuttgart
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13357/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13358.php">Shiqing Fan: "Re: [OMPI users] ompi-ps failure on WinXP"</a>
<li><strong>Previous message:</strong> <a href="13356.php">Matthieu Brucher: "Re: [OMPI users] Open MPI task scheduler"</a>
<li><strong>In reply to:</strong> <a href="13334.php">Stephan Hackstedt: "[OMPI users] ompi-ps failure on WinXP"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13363.php">Shiqing Fan: "Re: [OMPI users] ompi-ps failure on WinXP"</a>
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
