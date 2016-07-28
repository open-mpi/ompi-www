<?
$subject_val = "Re: [OMPI users] Building MPI on Windows";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 15 15:10:24 2012" -->
<!-- isoreceived="20120615191024" -->
<!-- sent="Fri, 15 Jun 2012 15:10:17 -0400" -->
<!-- isosent="20120615191017" -->
<!-- name="VimalMathew_at_[hidden]" -->
<!-- email="VimalMathew_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Building MPI on Windows" -->
<!-- id="DE2CB86A93428A408B1E6BE8E73DCCB4018E3A27_at_CLEOHSMB13.napa.ad.etn.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="4FDB8586.7060306_at_khubla.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Building MPI on Windows<br>
<strong>From:</strong> <a href="mailto:VimalMathew_at_[hidden]?Subject=Re:%20[OMPI%20users]%20Building%20MPI%20on%20Windows"><em>VimalMathew_at_[hidden]</em></a><br>
<strong>Date:</strong> 2012-06-15 15:10:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19597.php">Damien: "Re: [OMPI users] Building MPI on Windows"</a>
<li><strong>Previous message:</strong> <a href="19595.php">Damien: "Re: [OMPI users] Building MPI on Windows"</a>
<li><strong>In reply to:</strong> <a href="19595.php">Damien: "Re: [OMPI users] Building MPI on Windows"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19597.php">Damien: "Re: [OMPI users] Building MPI on Windows"</a>
<li><strong>Reply:</strong> <a href="19597.php">Damien: "Re: [OMPI users] Building MPI on Windows"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just figured it out.
<br>
<p>The only thing different from when it ran yesterday to today was I was
<br>
connected to a network. So I connected my laptop to a network and it
<br>
worked again.
<br>
<p>&nbsp;
<br>
<p>Thanks for all your help, Damien!
<br>
<p>I'm sure I'm gonna get stuck more along the way so hoping you can help.
<br>
<p>&nbsp;
<br>
<p><pre>
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
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19596/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19597.php">Damien: "Re: [OMPI users] Building MPI on Windows"</a>
<li><strong>Previous message:</strong> <a href="19595.php">Damien: "Re: [OMPI users] Building MPI on Windows"</a>
<li><strong>In reply to:</strong> <a href="19595.php">Damien: "Re: [OMPI users] Building MPI on Windows"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19597.php">Damien: "Re: [OMPI users] Building MPI on Windows"</a>
<li><strong>Reply:</strong> <a href="19597.php">Damien: "Re: [OMPI users] Building MPI on Windows"</a>
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
