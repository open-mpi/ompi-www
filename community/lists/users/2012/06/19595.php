<?
$subject_val = "Re: [OMPI users] Building MPI on Windows";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 15 14:57:20 2012" -->
<!-- isoreceived="20120615185720" -->
<!-- sent="Fri, 15 Jun 2012 12:57:10 -0600" -->
<!-- isosent="20120615185710" -->
<!-- name="Damien" -->
<!-- email="damien_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Building MPI on Windows" -->
<!-- id="4FDB8586.7060306_at_khubla.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="DE2CB86A93428A408B1E6BE8E73DCCB4018B11D9_at_CLEOHSMB13.napa.ad.etn.com" -->
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
<strong>From:</strong> Damien (<em>damien_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-15 14:57:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19596.php">VimalMathew_at_[hidden]: "Re: [OMPI users] Building MPI on Windows"</a>
<li><strong>Previous message:</strong> <a href="19594.php">VimalMathew_at_[hidden]: "Re: [OMPI users] Building MPI on Windows"</a>
<li><strong>In reply to:</strong> <a href="19594.php">VimalMathew_at_[hidden]: "Re: [OMPI users] Building MPI on Windows"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19596.php">VimalMathew_at_[hidden]: "Re: [OMPI users] Building MPI on Windows"</a>
<li><strong>Reply:</strong> <a href="19596.php">VimalMathew_at_[hidden]: "Re: [OMPI users] Building MPI on Windows"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmmm.  Two things.  Can you run helloworldMPI.exe on it's own?  It 
<br>
should output &quot;Number of threads = 1, My rank = 0&quot;
<br>
<p>Also, can you post the output of ompi_info ?  I think you might still 
<br>
have some path mixups.  A successful OpenMPI build with this simple 
<br>
program should just work.
<br>
<p>If you still have the other OpenMPIs installed from the binaries, you 
<br>
might want to try uninstalling all of them and rebooting.  Also if you 
<br>
rebuilt OpenMPI and helloworldMPI with VS 2010, make sure that 
<br>
helloworldMPI is actually linked to those VS2010 OpenMPI libs by setting 
<br>
the right lib path in the Linker options.  Linking to VS2008 libs and 
<br>
trying to run with VS2010 dlls/exes could cause problems too.
<br>
<p>Damien
<br>
<p>On 15/06/2012 11:44 AM, VimalMathew_at_[hidden] wrote:
<br>
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
<span class="quotelev1">&gt; *From:*users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] 
</span><br>
<span class="quotelev1">&gt; *On Behalf Of *Damien
</span><br>
<span class="quotelev1">&gt; *Sent:* Thursday, June 14, 2012 4:55 PM
</span><br>
<span class="quotelev1">&gt; *To:* Open MPI Users
</span><br>
<span class="quotelev1">&gt; *Subject:* Re: [OMPI users] Building MPI on Windows
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You did build the project, right?  The helloworldMPI.exe is in the 
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
<span class="quotelev1">&gt; my machine.  You'll need to change the include and lib paths as we 
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19595/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19596.php">VimalMathew_at_[hidden]: "Re: [OMPI users] Building MPI on Windows"</a>
<li><strong>Previous message:</strong> <a href="19594.php">VimalMathew_at_[hidden]: "Re: [OMPI users] Building MPI on Windows"</a>
<li><strong>In reply to:</strong> <a href="19594.php">VimalMathew_at_[hidden]: "Re: [OMPI users] Building MPI on Windows"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19596.php">VimalMathew_at_[hidden]: "Re: [OMPI users] Building MPI on Windows"</a>
<li><strong>Reply:</strong> <a href="19596.php">VimalMathew_at_[hidden]: "Re: [OMPI users] Building MPI on Windows"</a>
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
