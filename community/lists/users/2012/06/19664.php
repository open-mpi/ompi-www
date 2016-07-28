<?
$subject_val = "Re: [OMPI users] MPI Problem";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 25 16:22:35 2012" -->
<!-- isoreceived="20120625202235" -->
<!-- sent="Mon, 25 Jun 2012 16:22:09 -0400" -->
<!-- isosent="20120625202209" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI Problem" -->
<!-- id="417B5C9E-F62E-4DEA-88BA-74BEEF84ECE0_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1340654351.57429.YahooMailNeo_at_web125701.mail.ne1.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI Problem<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-25 16:22:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19665.php">Dr AD: "[OMPI users] VS2008 : linking against OpenMPI: unresolved external symbols"</a>
<li><strong>Previous message:</strong> <a href="19663.php">Mohamad Ali Rostami: "Re: [OMPI users] MPI Problem"</a>
<li><strong>In reply to:</strong> <a href="19662.php">Mohamad Ali Rostami: "Re: [OMPI users] MPI Problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19674.php">Mohamad Ali Rostami: "Re: [OMPI users] MPI Problem"</a>
<li><strong>Reply:</strong> <a href="19674.php">Mohamad Ali Rostami: "Re: [OMPI users] MPI Problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 25, 2012, at 3:59 PM, Mohamad Ali Rostami wrote:
<br>
<p><span class="quotelev2">&gt; &gt;    mpif90 my_application.f90 -o my_application
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes, as I told you out of make file, it works.
</span><br>
<span class="quotelev1">&gt; The problem is something strange in the make file.
</span><br>
<p>I'm sorry; I must have mis-parsed your issue, then.  So just to make sure I understand:
<br>
<p>shell$ mpif90 my_application.f90 -o my_application
<br>
<p>Works fine, but:
<br>
<p>shell$ make
<br>
...something that eventually invokes &quot;mpif90 my_application.f90 -o my_application&quot;
<br>
<p>doesn't work.  Right?
<br>
<p>If you're invoking the exact same command in both cases (interactive shell and makefile), the *usual* cause of this kind of problem is that the &quot;mpif90&quot; in your Makefile is picking up a different mpif90 than the one that is picked up by your shell.  Meaning: your PATH has been reset in the sub-process where &quot;make&quot; is executed, and so when make forks off &quot;mpif90&quot;, it finds a different one than the one you execute interactively in the shell.
<br>
<p>Check what your path is and/or exactly which mpif90 is getting invoked by your Makefile.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19665.php">Dr AD: "[OMPI users] VS2008 : linking against OpenMPI: unresolved external symbols"</a>
<li><strong>Previous message:</strong> <a href="19663.php">Mohamad Ali Rostami: "Re: [OMPI users] MPI Problem"</a>
<li><strong>In reply to:</strong> <a href="19662.php">Mohamad Ali Rostami: "Re: [OMPI users] MPI Problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19674.php">Mohamad Ali Rostami: "Re: [OMPI users] MPI Problem"</a>
<li><strong>Reply:</strong> <a href="19674.php">Mohamad Ali Rostami: "Re: [OMPI users] MPI Problem"</a>
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
