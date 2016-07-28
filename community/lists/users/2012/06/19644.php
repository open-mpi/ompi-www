<?
$subject_val = "Re: [OMPI users] Using OpenMPI on a network";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 22 03:47:26 2012" -->
<!-- isoreceived="20120622074726" -->
<!-- sent="Fri, 22 Jun 2012 09:48:32 +0200" -->
<!-- isosent="20120622074832" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Using OpenMPI on a network" -->
<!-- id="4FE42350.1070507_at_hlrs.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="DE2CB86A93428A408B1E6BE8E73DCCB4018E41FB_at_CLEOHSMB13.napa.ad.etn.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Using OpenMPI on a network<br>
<strong>From:</strong> Shiqing Fan (<em>fan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-22 03:48:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19645.php">Shiqing Fan: "Re: [OMPI users] Mpiexec hanging when running &quot;hello world&quot; on 2 EC2 windows instances"</a>
<li><strong>Previous message:</strong> <a href="19643.php">Peter Soukalopoulos: "[OMPI users] Mpiexec hanging when running &quot;hello world&quot; on 2 EC2 windows instances"</a>
<li><strong>In reply to:</strong> <a href="19622.php">VimalMathew_at_[hidden]: "[OMPI users] Using OpenMPI on a network"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>This was a bug due to the late release of Windows installers. You can 
<br>
simply copy the file from 
<br>
/openmpi-source/orte/etc/openmpi-default-hostfile to 
<br>
C:\OpenMPI\openmpi-1.6\installed\etc\. This problem only happens when 
<br>
you build from the released source, but not with the Windows installers.
<br>
<p>Shiqing
<br>
<p>On 2012-06-18 9:31 PM, VimalMathew_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So I configured and compiled a simple MPI program.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now the issue is when I try to do the same thing on my computer on a 
</span><br>
<span class="quotelev1">&gt; corporate network, I get this error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; C:\OpenMPI\openmpi-1.6\installed\bin&gt;mpiexec MPI_Tutorial_1.exe
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *Open RTE was unable to open the hostfile:*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *C:\OpenMPI\openmpi-1.6\installed\bin/../etc/openmpi-default-hostfile*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *Check to make sure the path and filename are correct.*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *--------------------------------------------------------------------------*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *[SOUMIWHP5003567:01884] [[37936,0],0] ORTE_ERROR_LOG: Not found in 
</span><br>
<span class="quotelev1">&gt; file C:\OpenM*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *PI\openmpi-1.6\orte\mca\ras\base\ras_base_allocate.c at line 200*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *[SOUMIWHP5003567:01884] [[37936,0],0] ORTE_ERROR_LOG: Not found in 
</span><br>
<span class="quotelev1">&gt; file C:\OpenM*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *PI\openmpi-1.6\orte\mca\plm\base\plm_base_launch_support.c at line 99*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *[SOUMIWHP5003567:01884] [[37936,0],0] ORTE_ERROR_LOG: Not found in 
</span><br>
<span class="quotelev1">&gt; file C:\OpenM*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *PI\openmpi-1.6\orte\mca\plm\process\plm_process_module.c at line 996*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What network settings should I be using? I'm sure this is because of 
</span><br>
<span class="quotelev1">&gt; the network because when I unplug the network cable, I get the error 
</span><br>
<span class="quotelev1">&gt; message I got below.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Vimal
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *From:*users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] 
</span><br>
<span class="quotelev1">&gt; *On Behalf Of *Damien
</span><br>
<span class="quotelev1">&gt; *Sent:* Friday, June 15, 2012 3:15 PM
</span><br>
<span class="quotelev1">&gt; *To:* Open MPI Users
</span><br>
<span class="quotelev1">&gt; *Subject:* Re: [OMPI users] Building MPI on Windows
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OK, that's what orte_rml_base_select failed means, no TCP connection.  
</span><br>
<span class="quotelev1">&gt; But you should be able to make OpenMPI &amp; mpiexec work without a 
</span><br>
<span class="quotelev1">&gt; network if you're just running in local memory.  There's probably a 
</span><br>
<span class="quotelev1">&gt; runtime parameter to set but I don't know what it is.  Maybe Jeff or 
</span><br>
<span class="quotelev1">&gt; Shiqing can weigh in with what that is.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Damien
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 15/06/2012 1:10 PM, VimalMathew_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:VimalMathew_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just figured it out.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The only thing different from when it ran yesterday to today was I was 
</span><br>
<span class="quotelev1">&gt; connected to a network. So I connected my laptop to a network and it 
</span><br>
<span class="quotelev1">&gt; worked again.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for all your help, Damien!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm sure I'm gonna get stuck more along the way so hoping you can help.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Vimal
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *From:*users-bounces_at_[hidden] &lt;mailto:users-bounces_at_[hidden]&gt; 
</span><br>
<span class="quotelev1">&gt; [mailto:users-bounces_at_[hidden]] *On Behalf Of *Damien
</span><br>
<span class="quotelev1">&gt; *Sent:* Friday, June 15, 2012 2:57 PM
</span><br>
<span class="quotelev1">&gt; *To:* Open MPI Users
</span><br>
<span class="quotelev1">&gt; *Subject:* Re: [OMPI users] Building MPI on Windows
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hmmm.  Two things.  Can you run helloworldMPI.exe on it's own?  It 
</span><br>
<span class="quotelev1">&gt; should output &quot;Number of threads = 1, My rank = 0&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also, can you post the output of ompi_info ?  I think you might still 
</span><br>
<span class="quotelev1">&gt; have some path mixups.  A successful OpenMPI build with this simple 
</span><br>
<span class="quotelev1">&gt; program should just work.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you still have the other OpenMPIs installed from the binaries, you 
</span><br>
<span class="quotelev1">&gt; might want to try uninstalling all of them and rebooting.  Also if you 
</span><br>
<span class="quotelev1">&gt; rebuilt OpenMPI and helloworldMPI with VS 2010, make sure that 
</span><br>
<span class="quotelev1">&gt; helloworldMPI is actually linked to those VS2010 OpenMPI libs by 
</span><br>
<span class="quotelev1">&gt; setting the right lib path in the Linker options.  Linking to VS2008 
</span><br>
<span class="quotelev1">&gt; libs and trying to run with VS2010 dlls/exes could cause problems too.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Damien
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 15/06/2012 11:44 AM, VimalMathew_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:VimalMathew_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Damien,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I installed MS Visual Studio 2010 and tried the whole procedure again 
</span><br>
<span class="quotelev1">&gt; and it worked!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That's the great news.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now the bad news is that I'm trying to run the program again using 
</span><br>
<span class="quotelev1">&gt; mpiexec and it won't!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I get these error messages:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; orte_rml_base_select failed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; orte_ess_set_name failed, with a bunch of text saying it could be due 
</span><br>
<span class="quotelev1">&gt; to configuration or environment problems and will make sense only to 
</span><br>
<span class="quotelev1">&gt; an OpenMPI developer.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Help!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Vimal
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *From:*users-bounces_at_[hidden] &lt;mailto:users-bounces_at_[hidden]&gt; 
</span><br>
<span class="quotelev1">&gt; [mailto:users-bounces_at_[hidden]] *On Behalf Of *Damien
</span><br>
<span class="quotelev1">&gt; *Sent:* Thursday, June 14, 2012 4:55 PM
</span><br>
<span class="quotelev1">&gt; *To:* Open MPI Users
</span><br>
<span class="quotelev1">&gt; *Subject:* Re: [OMPI users] Building MPI on Windows
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You did build the project, right? The helloworldMPI.exe is in the 
</span><br>
<span class="quotelev1">&gt; Debug directory?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 14/06/2012 1:49 PM, VimalMathew_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:VimalMathew_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No luck.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Output:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *Microsoft Windows [Version 6.1.7601]*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *Copyright (c) 2009 Microsoft Corporation.  All rights reserved.*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *C:\Users\...&gt;cd &quot;C:\Users\C9995799\Downloads\helloworldMPI\Debug&quot;*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *C:\Users\...\Downloads\helloworldMPI\Debug&gt;mpiexec -n 2 
</span><br>
<span class="quotelev1">&gt; helloworldMPI.exe*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *--------------------------------------------------------------------------*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *mpiexec was unable to launch the specified application as it could 
</span><br>
<span class="quotelev1">&gt; not find an e*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *xecutable:*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *Executable: helloworldMPI.exe*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *Node: SOUMIWHP5003567*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *while attempting to start process rank 0.*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *--------------------------------------------------------------------------*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *2 total processes failed to start*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *C:\Users\...\Downloads\helloworldMPI\Debug&gt;*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Vimal
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *From:*users-bounces_at_[hidden] &lt;mailto:users-bounces_at_[hidden]&gt; 
</span><br>
<span class="quotelev1">&gt; [mailto:users-bounces_at_[hidden]] *On Behalf Of *Damien
</span><br>
<span class="quotelev1">&gt; *Sent:* Thursday, June 14, 2012 3:38 PM
</span><br>
<span class="quotelev1">&gt; *To:* Open MPI Users
</span><br>
<span class="quotelev1">&gt; *Subject:* Re: [OMPI users] Building MPI on Windows
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here's a MPI Hello World project based on your code.  It runs fine on 
</span><br>
<span class="quotelev1">&gt; my machine. You'll need to change the include and lib paths as we 
</span><br>
<span class="quotelev1">&gt; discussed before to match your paths, and copy those bin files over to 
</span><br>
<span class="quotelev1">&gt; the Debug directory.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Run it with this to start:  &quot;mpiexec -n 1 helloworldMPI.exe&quot;.  Then 
</span><br>
<span class="quotelev1">&gt; change the -n 1 to -n x where x is the number of cores you have.  Say 
</span><br>
<span class="quotelev1">&gt; yes to allowing mpiexec firewall access if that comes up.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If this bombs out, there's something wrong on your machine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Damien
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]  &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; users_at_[hidden]  &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
---------------------------------------------------------------
Shiqing Fan
High Performance Computing Center Stuttgart (HLRS)
Tel: ++49(0)711-685-87234      Nobelstrasse 19
Fax: ++49(0)711-685-65832      70569 Stuttgart
<a href="http://www.hlrs.de/organization/people/shiqing-fan/">http://www.hlrs.de/organization/people/shiqing-fan/</a>
email: fan_at_[hidden]
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19644/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19645.php">Shiqing Fan: "Re: [OMPI users] Mpiexec hanging when running &quot;hello world&quot; on 2 EC2 windows instances"</a>
<li><strong>Previous message:</strong> <a href="19643.php">Peter Soukalopoulos: "[OMPI users] Mpiexec hanging when running &quot;hello world&quot; on 2 EC2 windows instances"</a>
<li><strong>In reply to:</strong> <a href="19622.php">VimalMathew_at_[hidden]: "[OMPI users] Using OpenMPI on a network"</a>
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
