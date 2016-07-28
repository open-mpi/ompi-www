<?
$subject_val = "Re: [OMPI users] ompi + bash + GE + modules";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 11 13:12:24 2012" -->
<!-- isoreceived="20120111181224" -->
<!-- sent="Wed, 11 Jan 2012 13:12:30 -0500" -->
<!-- isosent="20120111181230" -->
<!-- name="Mark Suhovecky" -->
<!-- email="suhovecky_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ompi + bash + GE + modules" -->
<!-- id="8D7ABFEB8540934DB54AECDF259D0D601870FDEE3E_at_ICE-MBX-1.ice.nd.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAPkgxczKw=wfDxG6efcXJh1tRrMYXS=hVfrT8TPHP7GwCcrZwA_at_mail.gmail.com" -->
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
<strong>From:</strong> Mark Suhovecky (<em>suhovecky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-11 13:12:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18141.php">Gustavo Correa: "Re: [OMPI users] ompi + bash + GE + modules"</a>
<li><strong>Previous message:</strong> <a href="18139.php">Edmund Sumbar: "Re: [OMPI users] ompi + bash + GE + modules"</a>
<li><strong>In reply to:</strong> <a href="18139.php">Edmund Sumbar: "Re: [OMPI users] ompi + bash + GE + modules"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18142.php">Reuti: "Re: [OMPI users] ompi + bash + GE + modules"</a>
<li><strong>Reply:</strong> <a href="18142.php">Reuti: "Re: [OMPI users] ompi + bash + GE + modules"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Edmund-
<br>
<p>Yeah, I've tried that.  No difference.  Our template .bash_profile sources
<br>
the user's .bashrc, so non-interactive  bash shells in our setup are sourcing .bashrc.
<br>
<p>The modules environment is defined, and works- only jonbs that run across multiple machines see this error.
<br>
<p>Mark Suhovecky
<br>
HPC System Administrator
<br>
Center for Research Computing
<br>
University of Notre Dame
<br>
suhovecky_at_[hidden]
<br>
________________________________________
<br>
From: users-bounces_at_[hidden] [users-bounces_at_[hidden]] On Behalf Of Edmund Sumbar [esumbar_at_[hidden]]
<br>
Sent: Wednesday, January 11, 2012 12:52 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] ompi + bash + GE + modules
<br>
<p>Hi Mark,
<br>
<p>Have you tried adding -l to the #! line?
<br>
<p>#!/bin/bash -l
<br>
<p>On Wed, Jan 11, 2012 at 10:42 AM, Mark Suhovecky &lt;suhovecky_at_[hidden]&lt;mailto:suhovecky_at_[hidden]&gt;&gt; wrote:
<br>
#!/bin/bash
<br>
#$ &lt;some GE directives&gt;
<br>
<p>module load ompi
<br>
<p>mpiexec
<br>
<p>when the mpiexec is run, we'll see the following errors
<br>
<p><p>bash: module: line 1: syntax error: unexpected end of file
<br>
bash: error importing function definition for `module'
<br>
<p><p><p><pre>
--
Edmund Sumbar
Research Computing Support
University of Alberta
+1 780 492 9360
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18141.php">Gustavo Correa: "Re: [OMPI users] ompi + bash + GE + modules"</a>
<li><strong>Previous message:</strong> <a href="18139.php">Edmund Sumbar: "Re: [OMPI users] ompi + bash + GE + modules"</a>
<li><strong>In reply to:</strong> <a href="18139.php">Edmund Sumbar: "Re: [OMPI users] ompi + bash + GE + modules"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18142.php">Reuti: "Re: [OMPI users] ompi + bash + GE + modules"</a>
<li><strong>Reply:</strong> <a href="18142.php">Reuti: "Re: [OMPI users] ompi + bash + GE + modules"</a>
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
