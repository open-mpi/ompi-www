<?
$subject_val = "Re: [OMPI users] ompi + bash + GE + modules";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 11 13:51:35 2012" -->
<!-- isoreceived="20120111185135" -->
<!-- sent="Wed, 11 Jan 2012 19:51:23 +0100" -->
<!-- isosent="20120111185123" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ompi + bash + GE + modules" -->
<!-- id="4043F058-6CE5-4C31-9D1F-1168B415C3FA_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="8D7ABFEB8540934DB54AECDF259D0D601870FDEE3E_at_ICE-MBX-1.ice.nd.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] ompi + bash + GE + modules<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-11 13:51:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18143.php">Shaandar Nyamtulga: "Re: [OMPI users] Passwordless ssh"</a>
<li><strong>Previous message:</strong> <a href="18141.php">Gustavo Correa: "Re: [OMPI users] ompi + bash + GE + modules"</a>
<li><strong>In reply to:</strong> <a href="18140.php">Mark Suhovecky: "Re: [OMPI users] ompi + bash + GE + modules"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18146.php">Dave Love: "Re: [OMPI users] ompi + bash + GE + modules"</a>
<li><strong>Reply:</strong> <a href="18146.php">Dave Love: "Re: [OMPI users] ompi + bash + GE + modules"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Am 11.01.2012 um 19:12 schrieb Mark Suhovecky:
<br>
<p><span class="quotelev1">&gt; Edmund-
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yeah, I've tried that.  No difference.  Our template .bash_profile sources
</span><br>
<span class="quotelev1">&gt; the user's .bashrc, so non-interactive  bash shells in our setup are sourcing .bashrc.
</span><br>
<p>SGE 6.2u5 can't handle multi line environment variables or functions, it was fixed in 6.2u6 which isn't free. Do you use -V while submitting the job? Just ignore the error or look into Son of Gridengine which fixed it too.
<br>
<p>If you can avoid -V, then it could be defined in any of the .profile or alike if you use -l as suggested. You could even define a started_method in SGE to define it for all users by default and avoid to use -V:
<br>
<p>#!/bin/sh
<br>
module() { ...command...here... }
<br>
export -f module
<br>
exec &quot;${@}&quot;
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; The modules environment is defined, and works- only jonbs that run across multiple machines see this error.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Mark Suhovecky
</span><br>
<span class="quotelev1">&gt; HPC System Administrator
</span><br>
<span class="quotelev1">&gt; Center for Research Computing
</span><br>
<span class="quotelev1">&gt; University of Notre Dame
</span><br>
<span class="quotelev1">&gt; suhovecky_at_[hidden]
</span><br>
<span class="quotelev1">&gt; ________________________________________
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [users-bounces_at_[hidden]] On Behalf Of Edmund Sumbar [esumbar_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; Sent: Wednesday, January 11, 2012 12:52 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] ompi + bash + GE + modules
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Mark,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Have you tried adding -l to the #! line?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #!/bin/bash -l
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, Jan 11, 2012 at 10:42 AM, Mark Suhovecky &lt;suhovecky_at_[hidden]&lt;mailto:suhovecky_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; #!/bin/bash
</span><br>
<span class="quotelev1">&gt; #$ &lt;some GE directives&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; module load ompi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpiexec
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; when the mpiexec is run, we'll see the following errors
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; bash: module: line 1: syntax error: unexpected end of file
</span><br>
<span class="quotelev1">&gt; bash: error importing function definition for `module'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Edmund Sumbar
</span><br>
<span class="quotelev1">&gt; Research Computing Support
</span><br>
<span class="quotelev1">&gt; University of Alberta
</span><br>
<span class="quotelev1">&gt; +1 780 492 9360
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18143.php">Shaandar Nyamtulga: "Re: [OMPI users] Passwordless ssh"</a>
<li><strong>Previous message:</strong> <a href="18141.php">Gustavo Correa: "Re: [OMPI users] ompi + bash + GE + modules"</a>
<li><strong>In reply to:</strong> <a href="18140.php">Mark Suhovecky: "Re: [OMPI users] ompi + bash + GE + modules"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18146.php">Dave Love: "Re: [OMPI users] ompi + bash + GE + modules"</a>
<li><strong>Reply:</strong> <a href="18146.php">Dave Love: "Re: [OMPI users] ompi + bash + GE + modules"</a>
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
