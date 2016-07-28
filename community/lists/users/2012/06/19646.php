<?
$subject_val = "Re: [OMPI users] Using OpenMPI on a network";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 22 07:36:16 2012" -->
<!-- isoreceived="20120622113616" -->
<!-- sent="Fri, 22 Jun 2012 13:37:20 +0200" -->
<!-- isosent="20120622113720" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Using OpenMPI on a network" -->
<!-- id="4FE458F0.4020509_at_hlrs.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="DE2CB86A93428A408B1E6BE8E73DCCB40198CB87_at_CLEOHSMB13.napa.ad.etn.com" -->
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
<strong>Date:</strong> 2012-06-22 07:37:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19647.php">Peter Soukalopoulos: "Re: [OMPI users] Mpiexec hanging when running &quot;hello world&quot; on 2 EC2 windows instances"</a>
<li><strong>Previous message:</strong> <a href="19645.php">Shiqing Fan: "Re: [OMPI users] Mpiexec hanging when running &quot;hello world&quot; on 2 EC2 windows instances"</a>
<li><strong>In reply to:</strong> <a href="19633.php">VimalMathew_at_[hidden]: "Re: [OMPI users] Using OpenMPI on a network"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19644.php">Shiqing Fan: "Re: [OMPI users] Using OpenMPI on a network"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I also noticed this problem (see my reply in the original thread). It 
<br>
seems that since 1.6, the etc/openmpmi-default-hostfile is checked by 
<br>
ORTE before running the application. But previous versions on Windows 
<br>
don't have such problem. But anyway, copying over or creating the empty 
<br>
file will solve the problem. The fix is already moved into 1.6 branch.
<br>
<p>Shiqing
<br>
*
<br>
<p>*
<br>
On 2012-06-19 9:17 PM, VimalMathew_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just finished doing that.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Still getting the same error. How do I make sure there are no old 
</span><br>
<span class="quotelev1">&gt; builds/files left?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I uninstalled everything to do with MPI, Cygwin, cleared environment 
</span><br>
<span class="quotelev1">&gt; variables, did the whole Windows build again and then did the 
</span><br>
<span class="quotelev1">&gt; supercomputing tutorial.
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
<span class="quotelev1">&gt; *From:*users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] 
</span><br>
<span class="quotelev1">&gt; *On Behalf Of *Damien
</span><br>
<span class="quotelev1">&gt; *Sent:* Tuesday, June 19, 2012 1:20 PM
</span><br>
<span class="quotelev1">&gt; *To:* Open MPI Users
</span><br>
<span class="quotelev1">&gt; *Subject:* Re: [OMPI users] Using OpenMPI on a network
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There's something else wrong, if that's the Supercomputing Blog 
</span><br>
<span class="quotelev1">&gt; tutorial 1 you're running.  It works happily without a hostfile.  I 
</span><br>
<span class="quotelev1">&gt; think you have some borked paths there.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't know why a Windows version is looking for an etc directory for 
</span><br>
<span class="quotelev1">&gt; a hostfile, unless there's some of your previous Cygwin builds lying 
</span><br>
<span class="quotelev1">&gt; around.  The etc directory is *Nix thing.  Please make sure you've 
</span><br>
<span class="quotelev1">&gt; completely deleted all your old failed OpenMPI builds, code, binaries, 
</span><br>
<span class="quotelev1">&gt; everything. Uninstall any other MPI versions you have tried, OpenMPI, 
</span><br>
<span class="quotelev1">&gt; MPICH, whatever.  You need to make absolutely sure you only have one 
</span><br>
<span class="quotelev1">&gt; version.  Check your paths in your environment after doing all that 
</span><br>
<span class="quotelev1">&gt; and remove any remaining path references to other MPI versions.  You 
</span><br>
<span class="quotelev1">&gt; shouldn't be getting that network error either, if you're running 
</span><br>
<span class="quotelev1">&gt; locally it won't matter if you have a network cable or not.  That has 
</span><br>
<span class="quotelev1">&gt; to be fixed before you can do anything on a cluster.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Damien
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 19/06/2012 10:53 AM, VimalMathew_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:VimalMathew_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Damien, Shiqing, Jeff?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Vimal
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     *From:*users-bounces_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     &lt;mailto:users-bounces_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     [mailto:users-bounces_at_[hidden]] *On Behalf Of
</span><br>
<span class="quotelev1">&gt;     *VimalMathew_at_[hidden] &lt;mailto:VimalMathew_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     *Sent:* Monday, June 18, 2012 3:32 PM
</span><br>
<span class="quotelev1">&gt;     *To:* users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     *Subject:* [OMPI users] Using OpenMPI on a network
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     So I configured and compiled a simple MPI program.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Now the issue is when I try to do the same thing on my computer on
</span><br>
<span class="quotelev1">&gt;     a corporate network, I get this error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     C:\OpenMPI\openmpi-1.6\installed\bin&gt;mpiexec MPI_Tutorial_1.exe
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     *Open RTE was unable to open the hostfile:*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     *C:\OpenMPI\openmpi-1.6\installed\bin/../etc/openmpi-default-hostfile*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     *Check to make sure the path and filename are correct.*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     *--------------------------------------------------------------------------*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     *[SOUMIWHP5003567:01884] [[37936,0],0] ORTE_ERROR_LOG: Not found
</span><br>
<span class="quotelev1">&gt;     in file C:\OpenM*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     *PI\openmpi-1.6\orte\mca\ras\base\ras_base_allocate.c at line 200*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     *[SOUMIWHP5003567:01884] [[37936,0],0] ORTE_ERROR_LOG: Not found
</span><br>
<span class="quotelev1">&gt;     in file C:\OpenM*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     *PI\openmpi-1.6\orte\mca\plm\base\plm_base_launch_support.c at
</span><br>
<span class="quotelev1">&gt;     line 99*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     *[SOUMIWHP5003567:01884] [[37936,0],0] ORTE_ERROR_LOG: Not found
</span><br>
<span class="quotelev1">&gt;     in file C:\OpenM*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     *PI\openmpi-1.6\orte\mca\plm\process\plm_process_module.c at line 996*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     What network settings should I be using? I'm sure this is because
</span><br>
<span class="quotelev1">&gt;     of the network because when I unplug the network cable, I get the
</span><br>
<span class="quotelev1">&gt;     error message I got below.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Vimal
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     *From:*users-bounces_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     &lt;mailto:users-bounces_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     [mailto:users-bounces_at_[hidden]]
</span><br>
<span class="quotelev1">&gt;     &lt;mailto:[mailto:users-bounces_at_[hidden]]&gt; *On Behalf Of *Damien
</span><br>
<span class="quotelev1">&gt;     *Sent:* Friday, June 15, 2012 3:15 PM
</span><br>
<span class="quotelev1">&gt;     *To:* Open MPI Users
</span><br>
<span class="quotelev1">&gt;     *Subject:* Re: [OMPI users] Building MPI on Windows
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     OK, that's what orte_rml_base_select failed means, no TCP
</span><br>
<span class="quotelev1">&gt;     connection.  But you should be able to make OpenMPI &amp; mpiexec work
</span><br>
<span class="quotelev1">&gt;     without a network if you're just running in local memory.  There's
</span><br>
<span class="quotelev1">&gt;     probably a runtime parameter to set but I don't know what it is. 
</span><br>
<span class="quotelev1">&gt;     Maybe Jeff or Shiqing can weigh in with what that is.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Damien
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     On 15/06/2012 1:10 PM, VimalMathew_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     &lt;mailto:VimalMathew_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Just figured it out.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     The only thing different from when it ran yesterday to today was I
</span><br>
<span class="quotelev1">&gt;     was connected to a network. So I connected my laptop to a network
</span><br>
<span class="quotelev1">&gt;     and it worked again.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Thanks for all your help, Damien!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I'm sure I'm gonna get stuck more along the way so hoping you can
</span><br>
<span class="quotelev1">&gt;     help.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Vimal
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     *From:*users-bounces_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     &lt;mailto:users-bounces_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     [mailto:users-bounces_at_[hidden]] *On Behalf Of *Damien
</span><br>
<span class="quotelev1">&gt;     *Sent:* Friday, June 15, 2012 2:57 PM
</span><br>
<span class="quotelev1">&gt;     *To:* Open MPI Users
</span><br>
<span class="quotelev1">&gt;     *Subject:* Re: [OMPI users] Building MPI on Windows
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Hmmm.  Two things.  Can you run helloworldMPI.exe on it's own?  It
</span><br>
<span class="quotelev1">&gt;     should output &quot;Number of threads = 1, My rank = 0&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Also, can you post the output of ompi_info ?  I think you might
</span><br>
<span class="quotelev1">&gt;     still have some path mixups.  A successful OpenMPI build with this
</span><br>
<span class="quotelev1">&gt;     simple program should just work.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     If you still have the other OpenMPIs installed from the binaries,
</span><br>
<span class="quotelev1">&gt;     you might want to try uninstalling all of them and rebooting. 
</span><br>
<span class="quotelev1">&gt;     Also if you rebuilt OpenMPI and helloworldMPI with VS 2010, make
</span><br>
<span class="quotelev1">&gt;     sure that helloworldMPI is actually linked to those VS2010 OpenMPI
</span><br>
<span class="quotelev1">&gt;     libs by setting the right lib path in the Linker options.  Linking
</span><br>
<span class="quotelev1">&gt;     to VS2008 libs and trying to run with VS2010 dlls/exes could cause
</span><br>
<span class="quotelev1">&gt;     problems too.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Damien
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     On 15/06/2012 11:44 AM, VimalMathew_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     &lt;mailto:VimalMathew_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Hi Damien,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I installed MS Visual Studio 2010 and tried the whole procedure
</span><br>
<span class="quotelev1">&gt;     again and it worked!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     That's the great news.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Now the bad news is that I'm trying to run the program again using
</span><br>
<span class="quotelev1">&gt;     mpiexec and it won't!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I get these error messages:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     orte_rml_base_select failed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     orte_ess_set_name failed, with a bunch of text saying it could be
</span><br>
<span class="quotelev1">&gt;     due to configuration or environment problems and will make sense
</span><br>
<span class="quotelev1">&gt;     only to an OpenMPI developer.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Help!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Vimal
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     *From:*users-bounces_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     &lt;mailto:users-bounces_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     [mailto:users-bounces_at_[hidden]] *On Behalf Of *Damien
</span><br>
<span class="quotelev1">&gt;     *Sent:* Thursday, June 14, 2012 4:55 PM
</span><br>
<span class="quotelev1">&gt;     *To:* Open MPI Users
</span><br>
<span class="quotelev1">&gt;     *Subject:* Re: [OMPI users] Building MPI on Windows
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     You did build the project, right?  The helloworldMPI.exe is in the
</span><br>
<span class="quotelev1">&gt;     Debug directory?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     On 14/06/2012 1:49 PM, VimalMathew_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     &lt;mailto:VimalMathew_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     No luck.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Output:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     *Microsoft Windows [Version 6.1.7601]*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     *Copyright (c) 2009 Microsoft Corporation.  All rights reserved.*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     *C:\Users\...&gt;cd &quot;C:\Users\C9995799\Downloads\helloworldMPI\Debug&quot;*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     *C:\Users\...\Downloads\helloworldMPI\Debug&gt;mpiexec -n 2
</span><br>
<span class="quotelev1">&gt;     helloworldMPI.exe*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     *--------------------------------------------------------------------------*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     *mpiexec was unable to launch the specified application as it
</span><br>
<span class="quotelev1">&gt;     could not find an e*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     *xecutable:*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     *Executable: helloworldMPI.exe*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     *Node: SOUMIWHP5003567*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     *while attempting to start process rank 0.*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     *--------------------------------------------------------------------------*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     *2 total processes failed to start*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     *C:\Users\...\Downloads\helloworldMPI\Debug&gt;*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Vimal
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     *From:*users-bounces_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     &lt;mailto:users-bounces_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     [mailto:users-bounces_at_[hidden]] *On Behalf Of *Damien
</span><br>
<span class="quotelev1">&gt;     *Sent:* Thursday, June 14, 2012 3:38 PM
</span><br>
<span class="quotelev1">&gt;     *To:* Open MPI Users
</span><br>
<span class="quotelev1">&gt;     *Subject:* Re: [OMPI users] Building MPI on Windows
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Here's a MPI Hello World project based on your code.  It runs fine
</span><br>
<span class="quotelev1">&gt;     on my machine.  You'll need to change the include and lib paths as
</span><br>
<span class="quotelev1">&gt;     we discussed before to match your paths, and copy those bin files
</span><br>
<span class="quotelev1">&gt;     over to the Debug directory.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Run it with this to start:  &quot;mpiexec -n 1 helloworldMPI.exe&quot;. 
</span><br>
<span class="quotelev1">&gt;     Then change the -n 1 to -n x where x is the number of cores you
</span><br>
<span class="quotelev1">&gt;     have.  Say yes to allowing mpiexec firewall access if that comes up.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     If this bombs out, there's something wrong on your machine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Damien
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
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     users mailing list
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     users_at_[hidden]  &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     users mailing list
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     users_at_[hidden]  &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     users mailing list
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     users_at_[hidden]  &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19646/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19647.php">Peter Soukalopoulos: "Re: [OMPI users] Mpiexec hanging when running &quot;hello world&quot; on 2 EC2 windows instances"</a>
<li><strong>Previous message:</strong> <a href="19645.php">Shiqing Fan: "Re: [OMPI users] Mpiexec hanging when running &quot;hello world&quot; on 2 EC2 windows instances"</a>
<li><strong>In reply to:</strong> <a href="19633.php">VimalMathew_at_[hidden]: "Re: [OMPI users] Using OpenMPI on a network"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19644.php">Shiqing Fan: "Re: [OMPI users] Using OpenMPI on a network"</a>
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
