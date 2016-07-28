<?
$subject_val = "Re: [OMPI users] SGE and openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 12 01:33:15 2011" -->
<!-- isoreceived="20110412053315" -->
<!-- sent="Tue, 12 Apr 2011 17:33:09 +1200" -->
<!-- isosent="20110412053309" -->
<!-- name="Kevin.Buckley_at_[hidden]" -->
<!-- email="Kevin.Buckley_at_[hidden]" -->
<!-- subject="Re: [OMPI users] SGE and openmpi" -->
<!-- id="2acc30da67bb4ccd7ccc5e6f00ea5e23.squirrel_at_mail.ecs.vuw.ac.nz" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="[OMPI users] SGE and openmpi" -->
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
<strong>From:</strong> <a href="mailto:Kevin.Buckley_at_[hidden]?Subject=Re:%20[OMPI%20users]%20SGE%20and%20openmpi"><em>Kevin.Buckley_at_[hidden]</em></a><br>
<strong>Date:</strong> 2011-04-12 01:33:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16196.php">Ralph Castain: "Re: [OMPI users] SGE and openmpi"</a>
<li><strong>Previous message:</strong> <a href="16194.php">Michael Di Domenico: "Re: [OMPI users] alltoall messages &gt; 2^26"</a>
<li><strong>Maybe in reply to:</strong> <a href="16175.php">Jason Palmer: "[OMPI users] SGE and openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16196.php">Ralph Castain: "Re: [OMPI users] SGE and openmpi"</a>
<li><strong>Reply:</strong> <a href="16196.php">Ralph Castain: "Re: [OMPI users] SGE and openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev2">&gt;&gt; #!/bin/bash
</span><br>
<span class="quotelev2">&gt;&gt; #$ -cwd
</span><br>
<span class="quotelev2">&gt;&gt; #$ -j y
</span><br>
<span class="quotelev2">&gt;&gt; #$ -S /bin/bash
</span><br>
<span class="quotelev2">&gt;&gt; #$ -q all.q
</span><br>
<span class="quotelev2">&gt;&gt; #$ -pe orte 18
</span><br>
<span class="quotelev2">&gt;&gt; MPI_DIR=/home/jason/openmpi-1.4.3-install/bin
</span><br>
<span class="quotelev2">&gt;&gt; /home/jason/openmpi-1.4.3-install/bin/mpirun -np $NSLOTS  myprog
</span><br>
<p><p><span class="quotelev1">&gt; If you have SGE integration, you should not specify the number
</span><br>
<span class="quotelev1">&gt; of slots requested on the command-line. Open MPI will speak
</span><br>
<span class="quotelev1">&gt; directly to SGE (or vice versa, to get this information.
</span><br>
<p>I've always thought that the tight integration merely removed the
<br>
need for a hostfile, or equivalent, to be specified?
<br>
<p>I've been basing this belief on the examples here:
<br>
<p>&nbsp;<a href="http://www.open-mpi.org/faq/?category=running#qsub-notify">http://www.open-mpi.org/faq/?category=running#qsub-notify</a>
<br>
<p>where, in all three examples, both the SGE submission script's
<br>
#$ directives and the mpirun commands invoked, specify the
<br>
number of processors but there's no hostfile/list.
<br>
<p><p><pre>
-- 
Kevin M. Buckley                                  Room:  CO327
School of Engineering and                         Phone: +64 4 463 5971
 Computer Science
Victoria University of Wellington
New Zealand
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16196.php">Ralph Castain: "Re: [OMPI users] SGE and openmpi"</a>
<li><strong>Previous message:</strong> <a href="16194.php">Michael Di Domenico: "Re: [OMPI users] alltoall messages &gt; 2^26"</a>
<li><strong>Maybe in reply to:</strong> <a href="16175.php">Jason Palmer: "[OMPI users] SGE and openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16196.php">Ralph Castain: "Re: [OMPI users] SGE and openmpi"</a>
<li><strong>Reply:</strong> <a href="16196.php">Ralph Castain: "Re: [OMPI users] SGE and openmpi"</a>
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
