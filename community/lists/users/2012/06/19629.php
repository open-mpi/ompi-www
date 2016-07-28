<?
$subject_val = "Re: [OMPI users] Using OpenMPI on a network";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 19 13:12:13 2012" -->
<!-- isoreceived="20120619171213" -->
<!-- sent="Tue, 19 Jun 2012 13:12:07 -0400" -->
<!-- isosent="20120619171207" -->
<!-- name="VimalMathew_at_[hidden]" -->
<!-- email="VimalMathew_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Using OpenMPI on a network" -->
<!-- id="DE2CB86A93428A408B1E6BE8E73DCCB4018E48D5_at_CLEOHSMB13.napa.ad.etn.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="97199083-B9A1-4C18-BCAD-A01D5A542367_at_open-mpi.org" -->
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
<strong>From:</strong> <a href="mailto:VimalMathew_at_[hidden]?Subject=Re:%20[OMPI%20users]%20Using%20OpenMPI%20on%20a%20network"><em>VimalMathew_at_[hidden]</em></a><br>
<strong>Date:</strong> 2012-06-19 13:12:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19630.php">George Bosilca: "Re: [OMPI users] 2012/06/18 14:35:07 &#232;&#135;&#170;&#229;&#138;&#168;&#228;&#191;&#157;&#229;&#173;&#152;&#232;&#141;&#137;&#231;&#168;&#191;"</a>
<li><strong>Previous message:</strong> <a href="19628.php">Ralph Castain: "Re: [OMPI users] Using OpenMPI on a network"</a>
<li><strong>In reply to:</strong> <a href="19628.php">Ralph Castain: "Re: [OMPI users] Using OpenMPI on a network"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19631.php">Damien: "Re: [OMPI users] Using OpenMPI on a network"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Is hostname the name of the system I'm running it on?
<br>
<p>&nbsp;
<br>
<p>Just tried that. Got the same error message
<br>
<p>&nbsp;
<br>
<p><pre>
--
Vimal
 
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
Behalf Of Ralph Castain
Sent: Tuesday, June 19, 2012 1:03 PM
To: Open MPI Users
Subject: Re: [OMPI users] Using OpenMPI on a network
 
You're getting that error because you failed to specify any hosts on
your cmd line - so OMPI has no idea where to launch the procs. It looked
for a default hostfile, but didn't find that either.
 
Just add a -host &lt;hostname&gt; option to your command line and tell it
where you want the procs to run.
 
 
On Jun 19, 2012, at 10:53 AM, &lt;VimalMathew_at_[hidden]&gt; wrote:
Damien, Shiqing, Jeff?
 
--
Vimal
 
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
Behalf Of VimalMathew_at_[hidden]
Sent: Monday, June 18, 2012 3:32 PM
To: users_at_[hidden]
Subject: [OMPI users] Using OpenMPI on a network
 
So I configured and compiled a simple MPI program.
Now the issue is when I try to do the same thing on my computer on a
corporate network, I get this error:
 
C:\OpenMPI\openmpi-1.6\installed\bin&gt;mpiexec MPI_Tutorial_1.exe
------------------------------------------------------------------------
--
Open RTE was unable to open the hostfile:
    C:\OpenMPI\openmpi-1.6\installed\bin/../etc/openmpi-default-hostfile
Check to make sure the path and filename are correct.
------------------------------------------------------------------------
--
[SOUMIWHP5003567:01884] [[37936,0],0] ORTE_ERROR_LOG: Not found in file
C:\OpenM
PI\openmpi-1.6\orte\mca\ras\base\ras_base_allocate.c at line 200
[SOUMIWHP5003567:01884] [[37936,0],0] ORTE_ERROR_LOG: Not found in file
C:\OpenM
PI\openmpi-1.6\orte\mca\plm\base\plm_base_launch_support.c at line 99
[SOUMIWHP5003567:01884] [[37936,0],0] ORTE_ERROR_LOG: Not found in file
C:\OpenM
PI\openmpi-1.6\orte\mca\plm\process\plm_process_module.c at line 996
 
What network settings should I be using? I'm sure this is because of the
network because when I unplug the network cable, I get the error message
I got below.
 
Thanks,
Vimal
 
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
Behalf Of Damien
Sent: Friday, June 15, 2012 3:15 PM
To: Open MPI Users
Subject: Re: [OMPI users] Building MPI on Windows
 
OK, that's what orte_rml_base_select failed means, no TCP connection.
But you should be able to make OpenMPI &amp; mpiexec work without a network
if you're just running in local memory.  There's probably a runtime
parameter to set but I don't know what it is.  Maybe Jeff or Shiqing can
weigh in with what that is.
Damien
On 15/06/2012 1:10 PM, VimalMathew_at_[hidden] wrote:
Just figured it out.
The only thing different from when it ran yesterday to today was I was
connected to a network. So I connected my laptop to a network and it
worked again.
 
Thanks for all your help, Damien!
I'm sure I'm gonna get stuck more along the way so hoping you can help.
 
--
Vimal
 
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
Behalf Of Damien
Sent: Friday, June 15, 2012 2:57 PM
To: Open MPI Users
Subject: Re: [OMPI users] Building MPI on Windows
 
Hmmm.  Two things.  Can you run helloworldMPI.exe on it's own?  It
should output &quot;Number of threads = 1, My rank = 0&quot;
Also, can you post the output of ompi_info ?  I think you might still
have some path mixups.  A successful OpenMPI build with this simple
program should just work.
If you still have the other OpenMPIs installed from the binaries, you
might want to try uninstalling all of them and rebooting.  Also if you
rebuilt OpenMPI and helloworldMPI with VS 2010, make sure that
helloworldMPI is actually linked to those VS2010 OpenMPI libs by setting
the right lib path in the Linker options.  Linking to VS2008 libs and
trying to run with VS2010 dlls/exes could cause problems too.
Damien   
On 15/06/2012 11:44 AM, VimalMathew_at_[hidden] wrote:
Hi Damien,
 
I installed MS Visual Studio 2010 and tried the whole procedure again
and it worked!
That's the great news.
Now the bad news is that I'm trying to run the program again using
mpiexec and it won't!
 
I get these error messages:
orte_rml_base_select failed
orte_ess_set_name failed, with a bunch of text saying it could be due to
configuration or environment problems and will make sense only to an
OpenMPI developer.
 
Help!
 
--
Vimal
 
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
Behalf Of Damien
Sent: Thursday, June 14, 2012 4:55 PM
To: Open MPI Users
Subject: Re: [OMPI users] Building MPI on Windows
 
You did build the project, right?  The helloworldMPI.exe is in the Debug
directory?
On 14/06/2012 1:49 PM, VimalMathew_at_[hidden] wrote:
No luck.
Output:
 
Microsoft Windows [Version 6.1.7601]
Copyright (c) 2009 Microsoft Corporation.  All rights reserved.
 
C:\Users\...&gt;cd &quot;C:\Users\C9995799\Downloads\helloworldMPI\Debug&quot;
 
C:\Users\...\Downloads\helloworldMPI\Debug&gt;mpiexec -n 2
helloworldMPI.exe
------------------------------------------------------------------------
--
mpiexec was unable to launch the specified application as it could not
find an e
xecutable:
 
Executable: helloworldMPI.exe
Node: SOUMIWHP5003567
 
while attempting to start process rank 0.
------------------------------------------------------------------------
--
2 total processes failed to start
 
C:\Users\...\Downloads\helloworldMPI\Debug&gt;
 
--
Vimal
 
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
Behalf Of Damien
Sent: Thursday, June 14, 2012 3:38 PM
To: Open MPI Users
Subject: Re: [OMPI users] Building MPI on Windows
 
Here's a MPI Hello World project based on your code.  It runs fine on my
machine.  You'll need to change the include and lib paths as we
discussed before to match your paths, and copy those bin files over to
the Debug directory.
Run it with this to start:  &quot;mpiexec -n 1 helloworldMPI.exe&quot;.  Then
change the -n 1 to -n x where x is the number of cores you have.  Say
yes to allowing mpiexec firewall access if that comes up.
If this bombs out, there's something wrong on your machine.
Damien
 
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
 
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19629/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19630.php">George Bosilca: "Re: [OMPI users] 2012/06/18 14:35:07 &#232;&#135;&#170;&#229;&#138;&#168;&#228;&#191;&#157;&#229;&#173;&#152;&#232;&#141;&#137;&#231;&#168;&#191;"</a>
<li><strong>Previous message:</strong> <a href="19628.php">Ralph Castain: "Re: [OMPI users] Using OpenMPI on a network"</a>
<li><strong>In reply to:</strong> <a href="19628.php">Ralph Castain: "Re: [OMPI users] Using OpenMPI on a network"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19631.php">Damien: "Re: [OMPI users] Using OpenMPI on a network"</a>
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
