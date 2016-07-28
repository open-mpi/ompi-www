<?
$subject_val = "Re: [OMPI users] Using OpenMPI on a network";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 19 13:03:12 2012" -->
<!-- isoreceived="20120619170312" -->
<!-- sent="Tue, 19 Jun 2012 11:03:04 -0600" -->
<!-- isosent="20120619170304" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Using OpenMPI on a network" -->
<!-- id="97199083-B9A1-4C18-BCAD-A01D5A542367_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="DE2CB86A93428A408B1E6BE8E73DCCB4018E48A6_at_CLEOHSMB13.napa.ad.etn.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-19 13:03:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19629.php">VimalMathew_at_[hidden]: "Re: [OMPI users] Using OpenMPI on a network"</a>
<li><strong>Previous message:</strong> <a href="19627.php">VimalMathew_at_[hidden]: "Re: [OMPI users] Using OpenMPI on a network"</a>
<li><strong>In reply to:</strong> <a href="19627.php">VimalMathew_at_[hidden]: "Re: [OMPI users] Using OpenMPI on a network"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19629.php">VimalMathew_at_[hidden]: "Re: [OMPI users] Using OpenMPI on a network"</a>
<li><strong>Reply:</strong> <a href="19629.php">VimalMathew_at_[hidden]: "Re: [OMPI users] Using OpenMPI on a network"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You're getting that error because you failed to specify any hosts on your cmd line - so OMPI has no idea where to launch the procs. It looked for a default hostfile, but didn't find that either.
<br>
<p>Just add a -host &lt;hostname&gt; option to your command line and tell it where you want the procs to run.
<br>
<p><p>On Jun 19, 2012, at 10:53 AM, &lt;VimalMathew_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Damien, Shiqing, Jeff?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Vimal
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of VimalMathew_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Sent: Monday, June 18, 2012 3:32 PM
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] Using OpenMPI on a network
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; So I configured and compiled a simple MPI program.
</span><br>
<span class="quotelev1">&gt; Now the issue is when I try to do the same thing on my computer on a corporate network, I get this error:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; C:\OpenMPI\openmpi-1.6\installed\bin&gt;mpiexec MPI_Tutorial_1.exe
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Open RTE was unable to open the hostfile:
</span><br>
<span class="quotelev1">&gt;     C:\OpenMPI\openmpi-1.6\installed\bin/../etc/openmpi-default-hostfile
</span><br>
<span class="quotelev1">&gt; Check to make sure the path and filename are correct.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [SOUMIWHP5003567:01884] [[37936,0],0] ORTE_ERROR_LOG: Not found in file C:\OpenM
</span><br>
<span class="quotelev1">&gt; PI\openmpi-1.6\orte\mca\ras\base\ras_base_allocate.c at line 200
</span><br>
<span class="quotelev1">&gt; [SOUMIWHP5003567:01884] [[37936,0],0] ORTE_ERROR_LOG: Not found in file C:\OpenM
</span><br>
<span class="quotelev1">&gt; PI\openmpi-1.6\orte\mca\plm\base\plm_base_launch_support.c at line 99
</span><br>
<span class="quotelev1">&gt; [SOUMIWHP5003567:01884] [[37936,0],0] ORTE_ERROR_LOG: Not found in file C:\OpenM
</span><br>
<span class="quotelev1">&gt; PI\openmpi-1.6\orte\mca\plm\process\plm_process_module.c at line 996
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; What network settings should I be using? I&#146;m sure this is because of the network because when I unplug the network cable, I get the error message I got below.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Vimal
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Damien
</span><br>
<span class="quotelev1">&gt; Sent: Friday, June 15, 2012 3:15 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Building MPI on Windows
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; OK, that's what orte_rml_base_select failed means, no TCP connection.  But you should be able to make OpenMPI &amp; mpiexec work without a network if you're just running in local memory.  There's probably a runtime parameter to set but I don't know what it is.  Maybe Jeff or Shiqing can weigh in with what that is.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Damien
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 15/06/2012 1:10 PM, VimalMathew_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt; Just figured it out.
</span><br>
<span class="quotelev1">&gt; The only thing different from when it ran yesterday to today was I was connected to a network. So I connected my laptop to a network and it worked again.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thanks for all your help, Damien!
</span><br>
<span class="quotelev1">&gt; I&#146;m sure I&#146;m gonna get stuck more along the way so hoping you can help.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Vimal
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Damien
</span><br>
<span class="quotelev1">&gt; Sent: Friday, June 15, 2012 2:57 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Building MPI on Windows
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Hmmm.  Two things.  Can you run helloworldMPI.exe on it's own?  It should output &quot;Number of threads = 1, My rank = 0&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Also, can you post the output of ompi_info ?  I think you might still have some path mixups.  A successful OpenMPI build with this simple program should just work.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you still have the other OpenMPIs installed from the binaries, you might want to try uninstalling all of them and rebooting.  Also if you rebuilt OpenMPI and helloworldMPI with VS 2010, make sure that helloworldMPI is actually linked to those VS2010 OpenMPI libs by setting the right lib path in the Linker options.  Linking to VS2008 libs and trying to run with VS2010 dlls/exes could cause problems too.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Damien   
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 15/06/2012 11:44 AM, VimalMathew_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt; Hi Damien,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I installed MS Visual Studio 2010 and tried the whole procedure again and it worked!
</span><br>
<span class="quotelev1">&gt; That&#146;s the great news.
</span><br>
<span class="quotelev1">&gt; Now the bad news is that I&#146;m trying to run the program again using mpiexec and it won&#146;t!
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I get these error messages:
</span><br>
<span class="quotelev1">&gt; orte_rml_base_select failed
</span><br>
<span class="quotelev1">&gt; orte_ess_set_name failed, with a bunch of text saying it could be due to configuration or environment problems and will make sense only to an OpenMPI developer.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Help!
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Vimal
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Damien
</span><br>
<span class="quotelev1">&gt; Sent: Thursday, June 14, 2012 4:55 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Building MPI on Windows
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; You did build the project, right?  The helloworldMPI.exe is in the Debug directory?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 14/06/2012 1:49 PM, VimalMathew_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt; No luck.
</span><br>
<span class="quotelev1">&gt; Output:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Microsoft Windows [Version 6.1.7601]
</span><br>
<span class="quotelev1">&gt; Copyright (c) 2009 Microsoft Corporation.  All rights reserved.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; C:\Users\...&gt;cd &quot;C:\Users\C9995799\Downloads\helloworldMPI\Debug&quot;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; C:\Users\...\Downloads\helloworldMPI\Debug&gt;mpiexec -n 2 helloworldMPI.exe
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpiexec was unable to launch the specified application as it could not find an e
</span><br>
<span class="quotelev1">&gt; xecutable:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Executable: helloworldMPI.exe
</span><br>
<span class="quotelev1">&gt; Node: SOUMIWHP5003567
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; while attempting to start process rank 0.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 2 total processes failed to start
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; C:\Users\...\Downloads\helloworldMPI\Debug&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Vimal
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Damien
</span><br>
<span class="quotelev1">&gt; Sent: Thursday, June 14, 2012 3:38 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Building MPI on Windows
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Here's a MPI Hello World project based on your code.  It runs fine on my machine.  You'll need to change the include and lib paths as we discussed before to match your paths, and copy those bin files over to the Debug directory.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Run it with this to start:  &quot;mpiexec -n 1 helloworldMPI.exe&quot;.  Then change the -n 1 to -n x where x is the number of cores you have.  Say yes to allowing mpiexec firewall access if that comes up.
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
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19628/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19629.php">VimalMathew_at_[hidden]: "Re: [OMPI users] Using OpenMPI on a network"</a>
<li><strong>Previous message:</strong> <a href="19627.php">VimalMathew_at_[hidden]: "Re: [OMPI users] Using OpenMPI on a network"</a>
<li><strong>In reply to:</strong> <a href="19627.php">VimalMathew_at_[hidden]: "Re: [OMPI users] Using OpenMPI on a network"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19629.php">VimalMathew_at_[hidden]: "Re: [OMPI users] Using OpenMPI on a network"</a>
<li><strong>Reply:</strong> <a href="19629.php">VimalMathew_at_[hidden]: "Re: [OMPI users] Using OpenMPI on a network"</a>
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
