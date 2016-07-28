<?
$subject_val = "Re: [OMPI users] SGE and openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 12 01:46:41 2011" -->
<!-- isoreceived="20110412054641" -->
<!-- sent="Mon, 11 Apr 2011 23:46:32 -0600" -->
<!-- isosent="20110412054632" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] SGE and openmpi" -->
<!-- id="0414F2FE-9973-48F1-9672-4C3D0659BF39_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="2acc30da67bb4ccd7ccc5e6f00ea5e23.squirrel_at_mail.ecs.vuw.ac.nz" -->
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
<strong>Subject:</strong> Re: [OMPI users] SGE and openmpi<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-12 01:46:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16197.php">hi: "Re: [OMPI users] &quot;Value out of bounds in file&quot; error"</a>
<li><strong>Previous message:</strong> <a href="16195.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] SGE and openmpi"</a>
<li><strong>In reply to:</strong> <a href="16195.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] SGE and openmpi"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 11, 2011, at 11:33 PM, Kevin.Buckley_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #!/bin/bash
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #$ -cwd
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #$ -j y
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #$ -S /bin/bash
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #$ -q all.q
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #$ -pe orte 18
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_DIR=/home/jason/openmpi-1.4.3-install/bin
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/jason/openmpi-1.4.3-install/bin/mpirun -np $NSLOTS  myprog
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If you have SGE integration, you should not specify the number
</span><br>
<span class="quotelev2">&gt;&gt; of slots requested on the command-line. Open MPI will speak
</span><br>
<span class="quotelev2">&gt;&gt; directly to SGE (or vice versa, to get this information.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've always thought that the tight integration merely removed the
</span><br>
<span class="quotelev1">&gt; need for a hostfile, or equivalent, to be specified?
</span><br>
<p>That is correct. -np specifies the number of processes to be run, not the number of slots in the allocation. The latter is determined by the SGE integration.
<br>
<p>In this case, I believe the author's intent was that the two be the same, which is why I let it go without comment. However, if that was the intent, he could have left the &quot;-np&quot; argument off entirely - with no number of processes specified, mpirun will simply assign a process to each allocated slot.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've been basing this belief on the examples here:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=running#qsub-notify">http://www.open-mpi.org/faq/?category=running#qsub-notify</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; where, in all three examples, both the SGE submission script's
</span><br>
<span class="quotelev1">&gt; #$ directives and the mpirun commands invoked, specify the
</span><br>
<span class="quotelev1">&gt; number of processors but there's no hostfile/list.
</span><br>
<p>To be precise, the mpirun commands specify the number of -processes- to be run, not the number of -processors- to be used.
<br>
<p>Sounds technical, but one needs to remember that you can oversubscribe processes in MPI, so this distinction is critical.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Kevin M. Buckley                                  Room:  CO327
</span><br>
<span class="quotelev1">&gt; School of Engineering and                         Phone: +64 4 463 5971
</span><br>
<span class="quotelev1">&gt; Computer Science
</span><br>
<span class="quotelev1">&gt; Victoria University of Wellington
</span><br>
<span class="quotelev1">&gt; New Zealand
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16197.php">hi: "Re: [OMPI users] &quot;Value out of bounds in file&quot; error"</a>
<li><strong>Previous message:</strong> <a href="16195.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] SGE and openmpi"</a>
<li><strong>In reply to:</strong> <a href="16195.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] SGE and openmpi"</a>
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
