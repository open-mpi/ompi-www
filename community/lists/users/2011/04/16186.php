<?
$subject_val = "Re: [OMPI users] SGE and openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr  7 11:01:02 2011" -->
<!-- isoreceived="20110407150102" -->
<!-- sent="Thu, 07 Apr 2011 11:00:58 -0400" -->
<!-- isosent="20110407150058" -->
<!-- name="Prentice Bisbal" -->
<!-- email="prentice_at_[hidden]" -->
<!-- subject="Re: [OMPI users] SGE and openmpi" -->
<!-- id="4D9DD1AA.8000407_at_ias.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="053101cbf4af$aeac9070$0c05b150$_at_gmail.com" -->
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
<strong>From:</strong> Prentice Bisbal (<em>prentice_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-07 11:00:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16187.php">Nehemiah Dacres: "Re: [OMPI users] mpi problems,"</a>
<li><strong>Previous message:</strong> <a href="16185.php">jody: "Re: [OMPI users] problems with the -xterm option"</a>
<li><strong>In reply to:</strong> <a href="16175.php">Jason Palmer: "[OMPI users] SGE and openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16198.php">Jason Palmer: "Re: [OMPI users] SGE and openmpi"</a>
<li><strong>Reply:</strong> <a href="16198.php">Jason Palmer: "Re: [OMPI users] SGE and openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 04/06/2011 07:09 PM, Jason Palmer wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; I am having trouble running a batch job in SGE using openmpi.  I have read
</span><br>
<span class="quotelev1">&gt; the faq, which says that openmpi will automatically do the right thing, but
</span><br>
<span class="quotelev1">&gt; something seems to be wrong.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Previously I used MPICH1 under SGE without any problems. I'm avoiding MPICH2
</span><br>
<span class="quotelev1">&gt; because it doesn't seem to support static compilation, whereas I was able to
</span><br>
<span class="quotelev1">&gt; get openmpi to compile with open64 and compile my program statically.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But I am having problems launching. According to the documentation, I should
</span><br>
<span class="quotelev1">&gt; be able to have a script file, qsub.sh:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #!/bin/bash
</span><br>
<span class="quotelev1">&gt; #$ -cwd
</span><br>
<span class="quotelev1">&gt; #$ -j y
</span><br>
<span class="quotelev1">&gt; #$ -S /bin/bash
</span><br>
<span class="quotelev1">&gt; #$ -q all.q
</span><br>
<span class="quotelev1">&gt; #$ -pe orte 18
</span><br>
<span class="quotelev1">&gt; MPI_DIR=/home/jason/openmpi-1.4.3-install/bin
</span><br>
<span class="quotelev1">&gt; /home/jason/openmpi-1.4.3-install/bin/mpirun -np $NSLOTS  myprog
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>If you have SGE integration, you should not specify the number of slots
<br>
requested on the command-line. Open MPI will speak directly to SGE (or
<br>
vice versa, to get this information.
<br>
<p>Also, what is the significance of specifying MPI_DIR? I think want to
<br>
add that to your PATH, and then export it to the rest of the nodes by
<br>
using the -V switch to qsub. If the correct mpirun isn't found first in
<br>
your PATH, your job will definitely fail when launched on the slave hosts.
<br>
<p>You also should add the path to the MPI libraries to your LD_LIBRARY
<br>
PATH, too, or else you'll endup with run-time linking problems.
<br>
<p>For example, I would change your submission script to look like this:
<br>
<p>#!/bin/bash
<br>
#$ -cwd
<br>
#$ -j y
<br>
#$ -S /bin/bash
<br>
#$ -q all.q
<br>
#$ -pe orte 18
<br>
#$ -V
<br>
<p>MPI_DIR=/home/jason/openmpi-1.4.3-install
<br>
export PATH=$MPI_DIR/bin:$PATH
<br>
export LD_LIBRARY_PATH=$MPI_DIR/lib:$LD_LIBRARY_PATH
<br>
<p>mpirun myprog
<br>
<p>This may not fix all your problems, but will definitely fix some of them.
<br>
<p><p><pre>
-- 
Prentice
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16187.php">Nehemiah Dacres: "Re: [OMPI users] mpi problems,"</a>
<li><strong>Previous message:</strong> <a href="16185.php">jody: "Re: [OMPI users] problems with the -xterm option"</a>
<li><strong>In reply to:</strong> <a href="16175.php">Jason Palmer: "[OMPI users] SGE and openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16198.php">Jason Palmer: "Re: [OMPI users] SGE and openmpi"</a>
<li><strong>Reply:</strong> <a href="16198.php">Jason Palmer: "Re: [OMPI users] SGE and openmpi"</a>
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
