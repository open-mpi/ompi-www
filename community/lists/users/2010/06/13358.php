<?
$subject_val = "Re: [OMPI users] ompi-ps failure on WinXP";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 21 06:05:47 2010" -->
<!-- isoreceived="20100621100547" -->
<!-- sent="Mon, 21 Jun 2010 12:07:30 +0200" -->
<!-- isosent="20100621100730" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ompi-ps failure on WinXP" -->
<!-- id="4C1F39E2.7030605_at_hlrs.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTinaaMTAuYI6C3wooY_z1EcCXhaNMBjnjXsKphJx_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2010-06-21 06:07:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13359.php">charlie strauss: "Re: [OMPI users] Xgrid an openmpi  1.2 and 1.5rc1"</a>
<li><strong>Previous message:</strong> <a href="13357.php">Shiqing Fan: "Re: [OMPI users] ompi-ps failure on WinXP"</a>
<li><strong>In reply to:</strong> <a href="13346.php">Stephan Hackstedt: "Re: [OMPI users] ompi-ps failure on WinXP"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13357.php">Shiqing Fan: "Re: [OMPI users] ompi-ps failure on WinXP"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Stephan,
<br>
<p>For ompi-server test, you could probably refer to this Open MPI doc: 
<br>
<a href="http://www.open-mpi.org/doc/v1.4/man1/ompi-server.1.php">http://www.open-mpi.org/doc/v1.4/man1/ompi-server.1.php</a> .
<br>
<p>Possible tests would be &quot;ompi-server -r -&quot;, &quot;ompi-server -r +&quot;, 
<br>
&quot;ompi-server -r file&quot;, or you can also write a MPI program using 
<br>
MPI_Lookup_name/MPI_Publish_name functions.
<br>
<p><p>Regards,
<br>
Shiqing
<br>
<p><p><p><p>On 2010-6-20 11:14 AM, Stephan Hackstedt wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i found no solution for this until yet.
</span><br>
<span class="quotelev1">&gt; Is there anyone who has a running ompi-server.exe on Windows XP?
</span><br>
<span class="quotelev1">&gt; If so, it would be great to tell me what i can do, to make 
</span><br>
<span class="quotelev1">&gt; ompi-server-exe running properly on WinXP.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Stephan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2010/6/16 Stephan Hackstedt &lt;stephan.hackstedt_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:stephan.hackstedt_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     i am using Open-MPI on a WinXP Professional VirtualBox machine.
</span><br>
<span class="quotelev1">&gt;     Open-MPI is build with cmake and nmake.
</span><br>
<span class="quotelev1">&gt;     When i'm trying to use the ompi-ps tool i got the following
</span><br>
<span class="quotelev1">&gt;     failure (the same with ompi-server, ompi-clean and orted):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     #######################################################################
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     D:\project\cluster_ompi&gt;ompi-ps.exe
</span><br>
<span class="quotelev1">&gt;     [vbox:03552] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev1">&gt;     D:\project\op
</span><br>
<span class="quotelev1">&gt;     enmpi_1_4_2_src\orte\runtime\orte_init.c at line 125
</span><br>
<span class="quotelev1">&gt;     --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;     It looks like orte_init failed for some reason; your parallel
</span><br>
<span class="quotelev1">&gt;     process is
</span><br>
<span class="quotelev1">&gt;     likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt;     fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt;     environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev1">&gt;     here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev1">&gt;     Open MPI developer):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       orte_ess_base_select failed
</span><br>
<span class="quotelev1">&gt;       --&gt; Returned value Not found (-13) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev1">&gt;     --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     ########################################################################
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     on the other way, when use mpirun to start the tools like &quot;mpirun
</span><br>
<span class="quotelev1">&gt;     ompi-ps.exe&quot; there is no error.
</span><br>
<span class="quotelev1">&gt;     It this normal, or maybe is there an fix to solve my problem?
</span><br>
<span class="quotelev1">&gt;     I'm would be nice if somebody has a solution for this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Stephan
</span><br>
<span class="quotelev1">&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13358/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13359.php">charlie strauss: "Re: [OMPI users] Xgrid an openmpi  1.2 and 1.5rc1"</a>
<li><strong>Previous message:</strong> <a href="13357.php">Shiqing Fan: "Re: [OMPI users] ompi-ps failure on WinXP"</a>
<li><strong>In reply to:</strong> <a href="13346.php">Stephan Hackstedt: "Re: [OMPI users] ompi-ps failure on WinXP"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13357.php">Shiqing Fan: "Re: [OMPI users] ompi-ps failure on WinXP"</a>
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
