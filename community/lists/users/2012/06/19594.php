<?
$subject_val = "Re: [OMPI users] Building MPI on Windows";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 15 13:45:03 2012" -->
<!-- isoreceived="20120615174503" -->
<!-- sent="Fri, 15 Jun 2012 13:44:57 -0400" -->
<!-- isosent="20120615174457" -->
<!-- name="VimalMathew_at_[hidden]" -->
<!-- email="VimalMathew_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Building MPI on Windows" -->
<!-- id="DE2CB86A93428A408B1E6BE8E73DCCB4018B11D9_at_CLEOHSMB13.napa.ad.etn.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="4FDA4FB2.4010603_at_khubla.com" -->
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
<strong>Date:</strong> 2012-06-15 13:44:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19595.php">Damien: "Re: [OMPI users] Building MPI on Windows"</a>
<li><strong>Previous message:</strong> <a href="19593.php">Jeff Squyres: "Re: [OMPI users] openib_reg_mr"</a>
<li><strong>In reply to:</strong> <a href="19584.php">Damien: "Re: [OMPI users] Building MPI on Windows"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19595.php">Damien: "Re: [OMPI users] Building MPI on Windows"</a>
<li><strong>Reply:</strong> <a href="19595.php">Damien: "Re: [OMPI users] Building MPI on Windows"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Damien,
<br>
<p>&nbsp;
<br>
<p>I installed MS Visual Studio 2010 and tried the whole procedure again
<br>
and it worked!
<br>
<p>That's the great news.
<br>
<p>Now the bad news is that I'm trying to run the program again using
<br>
mpiexec and it won't!
<br>
<p>&nbsp;
<br>
<p>I get these error messages: 
<br>
<p>orte_rml_base_select failed
<br>
<p>orte_ess_set_name failed, with a bunch of text saying it could be due to
<br>
configuration or environment problems and will make sense only to an
<br>
OpenMPI developer.
<br>
<p>&nbsp;
<br>
<p>Help!
<br>
<p>&nbsp;
<br>
<p><pre>
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
 
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19594/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19595.php">Damien: "Re: [OMPI users] Building MPI on Windows"</a>
<li><strong>Previous message:</strong> <a href="19593.php">Jeff Squyres: "Re: [OMPI users] openib_reg_mr"</a>
<li><strong>In reply to:</strong> <a href="19584.php">Damien: "Re: [OMPI users] Building MPI on Windows"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19595.php">Damien: "Re: [OMPI users] Building MPI on Windows"</a>
<li><strong>Reply:</strong> <a href="19595.php">Damien: "Re: [OMPI users] Building MPI on Windows"</a>
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
