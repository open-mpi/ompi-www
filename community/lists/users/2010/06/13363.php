<?
$subject_val = "Re: [OMPI users] ompi-ps failure on WinXP";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 21 17:25:07 2010" -->
<!-- isoreceived="20100621212507" -->
<!-- sent="Mon, 21 Jun 2010 23:26:50 +0200" -->
<!-- isosent="20100621212650" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ompi-ps failure on WinXP" -->
<!-- id="4C1FD91A.8070804_at_hlrs.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTikfhpl6a6OKANltVopo4CWVeiB3f0Rboa-OfCw4_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2010-06-21 17:26:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13364.php">Riccardo Murri: "[OMPI users] Segmentation fault / Address not mapped (1) with 2-node job on Rocks 5.2"</a>
<li><strong>Previous message:</strong> <a href="13362.php">charlie strauss: "Re: [OMPI users] Xgrid an openmpi  1.2 and 1.5rc1"</a>
<li><strong>Maybe in reply to:</strong> <a href="13334.php">Stephan Hackstedt: "[OMPI users] ompi-ps failure on WinXP"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Stephan,
<br>
<p>I haven't tried to generate NMake Makefile to build Open MPI on Window, 
<br>
the original purpose of using CMake was to generate Visual Studio 
<br>
solution files. But if you can provide more information, e.g. error 
<br>
messages, maybe I can figure out the problem for NMake.
<br>
<p>Thanks,
<br>
Shiqing
<br>
<p>On 2010-6-21 7:43 PM, Stephan Hackstedt wrote:
<br>
<span class="quotelev1">&gt; Update: NMake Makefile creation works with VC8, but using nmake to 
</span><br>
<span class="quotelev1">&gt; install openmpi creates an error...
</span><br>
<span class="quotelev1">&gt; i will try to find a way to build it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Stephan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Stephan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2010/6/21 Stephan Hackstedt &lt;stephan.hackstedt_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:stephan.hackstedt_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Hi Shiqing,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     i just checked out the code, but i am unable to create the nmake
</span><br>
<span class="quotelev1">&gt;     makefile with cmake.
</span><br>
<span class="quotelev1">&gt;     cmake tells me, it is unable to define 8-bit types.
</span><br>
<span class="quotelev1">&gt;     i also noticed, that for windows, the 1.4.2 release works with
</span><br>
<span class="quotelev1">&gt;     cmake, version above this making cmake to fail.
</span><br>
<span class="quotelev1">&gt;     i am using the VC10 compiler, but as an alternative i can use VC8.
</span><br>
<span class="quotelev1">&gt;     maybe it's worth a try.
</span><br>
<span class="quotelev1">&gt;     if i can make it, i will report :)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Stephan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     2010/6/21 Shiqing Fan &lt;fan_at_[hidden] &lt;mailto:fan_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Hi Stephan,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         For ompi-server test, you could probably refer to this Open
</span><br>
<span class="quotelev1">&gt;         MPI doc: <a href="http://www.open-mpi.org/doc/v1.4/man1/ompi-server.1.php">http://www.open-mpi.org/doc/v1.4/man1/ompi-server.1.php</a> .
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Possible tests would be &quot;ompi-server -r -&quot;, &quot;ompi-server -r
</span><br>
<span class="quotelev1">&gt;         +&quot;, &quot;ompi-server -r file&quot;, or you can also write a MPI program
</span><br>
<span class="quotelev1">&gt;         using MPI_Lookup_name/MPI_Publish_name functions.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Regards,
</span><br>
<span class="quotelev1">&gt;         Shiqing
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         On 2010-6-20 11:14 AM, Stephan Hackstedt wrote:
</span><br>
<span class="quotelev2">&gt;&gt;         Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         i found no solution for this until yet.
</span><br>
<span class="quotelev2">&gt;&gt;         Is there anyone who has a running ompi-server.exe on Windows XP?
</span><br>
<span class="quotelev2">&gt;&gt;         If so, it would be great to tell me what i can do, to make
</span><br>
<span class="quotelev2">&gt;&gt;         ompi-server-exe running properly on WinXP.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Stephan
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         2010/6/16 Stephan Hackstedt &lt;stephan.hackstedt_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;mailto:stephan.hackstedt_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             i am using Open-MPI on a WinXP Professional VirtualBox
</span><br>
<span class="quotelev2">&gt;&gt;             machine.
</span><br>
<span class="quotelev2">&gt;&gt;             Open-MPI is build with cmake and nmake.
</span><br>
<span class="quotelev2">&gt;&gt;             When i'm trying to use the ompi-ps tool i got the
</span><br>
<span class="quotelev2">&gt;&gt;             following failure (the same with ompi-server, ompi-clean
</span><br>
<span class="quotelev2">&gt;&gt;             and orted):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             #######################################################################
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             D:\project\cluster_ompi&gt;ompi-ps.exe
</span><br>
<span class="quotelev2">&gt;&gt;             [vbox:03552] [[INVALID],INVALID] ORTE_ERROR_LOG: Not
</span><br>
<span class="quotelev2">&gt;&gt;             found in file D:\project\op
</span><br>
<span class="quotelev2">&gt;&gt;             enmpi_1_4_2_src\orte\runtime\orte_init.c at line 125
</span><br>
<span class="quotelev2">&gt;&gt;             --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;             It looks like orte_init failed for some reason; your
</span><br>
<span class="quotelev2">&gt;&gt;             parallel process is
</span><br>
<span class="quotelev2">&gt;&gt;             likely to abort.  There are many reasons that a parallel
</span><br>
<span class="quotelev2">&gt;&gt;             process can
</span><br>
<span class="quotelev2">&gt;&gt;             fail during orte_init; some of which are due to
</span><br>
<span class="quotelev2">&gt;&gt;             configuration or
</span><br>
<span class="quotelev2">&gt;&gt;             environment problems.  This failure appears to be an
</span><br>
<span class="quotelev2">&gt;&gt;             internal failure;
</span><br>
<span class="quotelev2">&gt;&gt;             here's some additional information (which may only be
</span><br>
<span class="quotelev2">&gt;&gt;             relevant to an
</span><br>
<span class="quotelev2">&gt;&gt;             Open MPI developer):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;               orte_ess_base_select failed
</span><br>
<span class="quotelev2">&gt;&gt;               --&gt; Returned value Not found (-13) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev2">&gt;&gt;             --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             ########################################################################
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             on the other way, when use mpirun to start the tools like
</span><br>
<span class="quotelev2">&gt;&gt;             &quot;mpirun ompi-ps.exe&quot; there is no error.
</span><br>
<span class="quotelev2">&gt;&gt;             It this normal, or maybe is there an fix to solve my problem?
</span><br>
<span class="quotelev2">&gt;&gt;             I'm would be nice if somebody has a solution for this.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             Stephan
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;         users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;         users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         -- 
</span><br>
<span class="quotelev1">&gt;         --------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;         Shiqing Fan<a href="http://www.hlrs.de/people/fan">http://www.hlrs.de/people/fan</a>
</span><br>
<span class="quotelev1">&gt;         High Performance Computing           Tel.: +49 711 685 87234
</span><br>
<span class="quotelev1">&gt;            Center Stuttgart (HLRS)            Fax.: +49 711 685 65832
</span><br>
<span class="quotelev1">&gt;         Address:Allmandring 30               email:fan_at_[hidden]  &lt;mailto:fan_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;         70569 Stuttgart
</span><br>
<span class="quotelev1">&gt;                
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13363/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13364.php">Riccardo Murri: "[OMPI users] Segmentation fault / Address not mapped (1) with 2-node job on Rocks 5.2"</a>
<li><strong>Previous message:</strong> <a href="13362.php">charlie strauss: "Re: [OMPI users] Xgrid an openmpi  1.2 and 1.5rc1"</a>
<li><strong>Maybe in reply to:</strong> <a href="13334.php">Stephan Hackstedt: "[OMPI users] ompi-ps failure on WinXP"</a>
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
