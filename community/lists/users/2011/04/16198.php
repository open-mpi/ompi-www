<?
$subject_val = "Re: [OMPI users] SGE and openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 12 04:07:00 2011" -->
<!-- isoreceived="20110412080700" -->
<!-- sent="Tue, 12 Apr 2011 01:06:51 -0700" -->
<!-- isosent="20110412080651" -->
<!-- name="Jason Palmer" -->
<!-- email="japalmer29_at_[hidden]" -->
<!-- subject="Re: [OMPI users] SGE and openmpi" -->
<!-- id="1302595611.10379.23.camel_at_ubuntu" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="4D9DD1AA.8000407_at_ias.edu" -->
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
<strong>From:</strong> Jason Palmer (<em>japalmer29_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-12 04:06:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16199.php">Jeff Squyres: "Re: [OMPI users] &quot;Value out of bounds in file&quot; error"</a>
<li><strong>Previous message:</strong> <a href="16197.php">hi: "Re: [OMPI users] &quot;Value out of bounds in file&quot; error"</a>
<li><strong>In reply to:</strong> <a href="16186.php">Prentice Bisbal: "Re: [OMPI users] SGE and openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16195.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] SGE and openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for your resply. My problem was actually caused by having include
<br>
mpif.h in the code still, rather than use mpi. But the info about
<br>
NSLOTS, etc is good to know. 
<br>
<p>Cheers,
<br>
Jason
<br>
<p>P.S. I had originally used $MPI_DIR in mpirun call, but changed it to
<br>
the explicit directory in the course of trying fix the problem.
<br>
<p>On Thu, 2011-04-07 at 11:00 -0400, Prentice Bisbal wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 04/06/2011 07:09 PM, Jason Palmer wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt; I am having trouble running a batch job in SGE using openmpi.  I have read
</span><br>
<span class="quotelev2">&gt; &gt; the faq, which says that openmpi will automatically do the right thing, but
</span><br>
<span class="quotelev2">&gt; &gt; something seems to be wrong.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Previously I used MPICH1 under SGE without any problems. I'm avoiding MPICH2
</span><br>
<span class="quotelev2">&gt; &gt; because it doesn't seem to support static compilation, whereas I was able to
</span><br>
<span class="quotelev2">&gt; &gt; get openmpi to compile with open64 and compile my program statically.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; But I am having problems launching. According to the documentation, I should
</span><br>
<span class="quotelev2">&gt; &gt; be able to have a script file, qsub.sh:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; #!/bin/bash
</span><br>
<span class="quotelev2">&gt; &gt; #$ -cwd
</span><br>
<span class="quotelev2">&gt; &gt; #$ -j y
</span><br>
<span class="quotelev2">&gt; &gt; #$ -S /bin/bash
</span><br>
<span class="quotelev2">&gt; &gt; #$ -q all.q
</span><br>
<span class="quotelev2">&gt; &gt; #$ -pe orte 18
</span><br>
<span class="quotelev2">&gt; &gt; MPI_DIR=/home/jason/openmpi-1.4.3-install/bin
</span><br>
<span class="quotelev2">&gt; &gt; /home/jason/openmpi-1.4.3-install/bin/mpirun -np $NSLOTS  myprog
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you have SGE integration, you should not specify the number of slots
</span><br>
<span class="quotelev1">&gt; requested on the command-line. Open MPI will speak directly to SGE (or
</span><br>
<span class="quotelev1">&gt; vice versa, to get this information.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Also, what is the significance of specifying MPI_DIR? I think want to
</span><br>
<span class="quotelev1">&gt; add that to your PATH, and then export it to the rest of the nodes by
</span><br>
<span class="quotelev1">&gt; using the -V switch to qsub. If the correct mpirun isn't found first in
</span><br>
<span class="quotelev1">&gt; your PATH, your job will definitely fail when launched on the slave hosts.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You also should add the path to the MPI libraries to your LD_LIBRARY
</span><br>
<span class="quotelev1">&gt; PATH, too, or else you'll endup with run-time linking problems.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For example, I would change your submission script to look like this:
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
<span class="quotelev1">&gt; #$ -V
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPI_DIR=/home/jason/openmpi-1.4.3-install
</span><br>
<span class="quotelev1">&gt; export PATH=$MPI_DIR/bin:$PATH
</span><br>
<span class="quotelev1">&gt; export LD_LIBRARY_PATH=$MPI_DIR/lib:$LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun myprog
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This may not fix all your problems, but will definitely fix some of them.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16199.php">Jeff Squyres: "Re: [OMPI users] &quot;Value out of bounds in file&quot; error"</a>
<li><strong>Previous message:</strong> <a href="16197.php">hi: "Re: [OMPI users] &quot;Value out of bounds in file&quot; error"</a>
<li><strong>In reply to:</strong> <a href="16186.php">Prentice Bisbal: "Re: [OMPI users] SGE and openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16195.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] SGE and openmpi"</a>
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
