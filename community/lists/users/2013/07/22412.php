<?
$subject_val = "Re: [OMPI users] ompi_evesel-&gt;dispatch() failed when running from Java	Process Builder";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 30 10:53:26 2013" -->
<!-- isoreceived="20130730145326" -->
<!-- sent="Tue, 30 Jul 2013 14:52:53 +0000" -->
<!-- isosent="20130730145253" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ompi_evesel-&amp;gt;dispatch() failed when running from Java	Process Builder" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F7878B3_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAr1QLL9U7HHtqmnfgf2tr+-sWBxnFvRA8ih6gXrYm4t2-tfAA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] ompi_evesel-&gt;dispatch() failed when running from Java	Process Builder<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-30 10:52:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22413.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI error in a loop"</a>
<li><strong>Previous message:</strong> <a href="22411.php">Reuti: "Re: [OMPI users] openmpi+infiniband"</a>
<li><strong>In reply to:</strong> <a href="22376.php">David Stuebe: "[OMPI users] ompi_evesel-&gt;dispatch() failed when running from Java Process Builder"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry for the delay in replying.
<br>
<p>That's a really odd one; I haven't seen that before.
<br>
<p>I'm afraid that the only real solution I can think of here is to attach a debugger to your mpirun process (I'm *guessing* it's mpirun that is issuing that error?) and see why ompi_evesel-&gt;dispatch() is failing.
<br>
<p><p><p>On Jul 23, 2013, at 10:00 PM, David Stuebe &lt;stu3b3_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi OpenMPI 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am trying to create a Java GUI to control and run an MPI application. I can run an MPI process from my command line, but am unable to run via the Java Process Builder.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I get the following error immediately after the process starts:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [SCI053_VM003:02928] ..\..\openmpi-1.6.4\opal\event\event.c: ompi_evesel-&gt;dispatch() failed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I suspect there is an environment problem, but I am not sure how to diagnose it. I have printed the environment seen by the java process builder to the log as well as the environment seen by the mpiexec'd process, but I see nothing amiss!?!?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; All the code and the output log are posted on gist
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am trying to run in a windows environment using OpenMPI 1.6.4 packaged for MPI4PY
</span><br>
<span class="quotelev1">&gt; <a href="http://www.lfd.uci.edu/~gohlke/pythonlibs/#mpi4py">http://www.lfd.uci.edu/~gohlke/pythonlibs/#mpi4py</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please help
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; David
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; PS - I am able to run the Java program to launch and run the same code in my MacOS environment, but there I use brew installed MPICH2. 
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
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22413.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI error in a loop"</a>
<li><strong>Previous message:</strong> <a href="22411.php">Reuti: "Re: [OMPI users] openmpi+infiniband"</a>
<li><strong>In reply to:</strong> <a href="22376.php">David Stuebe: "[OMPI users] ompi_evesel-&gt;dispatch() failed when running from Java Process Builder"</a>
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
