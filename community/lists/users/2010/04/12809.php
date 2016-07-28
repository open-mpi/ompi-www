<?
$subject_val = "Re: [OMPI users] problem using new OMPI1.4.1 vie SGE";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 26 16:38:38 2010" -->
<!-- isoreceived="20100426203838" -->
<!-- sent="Mon, 26 Apr 2010 16:38:33 -0400" -->
<!-- isosent="20100426203833" -->
<!-- name="Prentice Bisbal" -->
<!-- email="prentice_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem using new OMPI1.4.1 vie SGE" -->
<!-- id="4BD5F9C9.6000604_at_ias.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="i2h76aeda4a1004261148i79713901s66a417223c3916bd_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] problem using new OMPI1.4.1 vie SGE<br>
<strong>From:</strong> Prentice Bisbal (<em>prentice_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-26 16:38:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12810.php">Nev: "Re: [OMPI users] unresolved symbol mca_base_param_reg_int"</a>
<li><strong>Previous message:</strong> <a href="12808.php">Prentice Bisbal: "Re: [OMPI users] problem using new OMPI1.4.1 vie SGE"</a>
<li><strong>In reply to:</strong> <a href="12804.php">Matthew MacManes: "Re: [OMPI users] problem using new OMPI1.4.1 vie SGE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12784.php">Addepalli, Srirangam V: "Re: [OMPI users] problem using new OMPI1.4.1 vie SGE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Matt,
<br>
<p>I just found something else with your job script. You are defining the
<br>
LD_LIBRARY_PATH environment variable, and *then* loading the openmpi
<br>
environment module:
<br>
<p><span class="quotelev3">&gt;&gt;&gt;         #!/bin/bash
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         export TMPDIR=$SCRATCH/abyss_tmp/
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         LD_LIBRARY_PATH=/work/01301/mmacmane
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         LD_LIBRARY_PATH=/work/01301/mmacmane/bin
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         LD_LIBRARY_PATH=/work/01301/mmacmane/include
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         LD_LIBRARY_PATH=/work/01301/mmacmane/etc
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         LD_LIBRARY_PATH=/work/01301/mmacmane/lib
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         LD_LIBRARY_PATH=/work/01301/mmacmane/openmpi-1.4.1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         cd /work/01301/mmacmane/Ray-0.0.6
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         module load openmpi
</span><br>
<p>This is bad. Not only are you incorrectly setting your LD_LIBRARY_PATH,
<br>
but after you modify it, the command
<br>
<p>module load openmpi
<br>
<p>is overwriting your customizations with what I presume is the default
<br>
evironment for the officially supported openmpi version at TACC/on Ranger.
<br>
<p>Also from this line:
<br>
<p><span class="quotelev3">&gt;&gt;&gt;             Module mvapich superceded
</span><br>
<p>it looks like you already had the mvapich module loaded before you
<br>
submitted your openmpi job with qsub. This isn't a good idea, either. I
<br>
don't know how your modules are written, but it's possible that your
<br>
mvapich module has settings that are incompatible with your home-grown
<br>
openmpi setup.
<br>
<p>You should make sure you remove your mvapich module before submitting
<br>
your script. I don't use GNU environment modules (yet), so you'll have
<br>
to contact your local system admin or read the module man page to learn
<br>
how to remove the mvapich module.
<br>
<p>Just to be clear, these problems are problems with your basic Linux/Unix
<br>
environment, and aren't really SGE- or OpenMPI-specific problems.
<br>
<p><pre>
-- 
Prentice
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12810.php">Nev: "Re: [OMPI users] unresolved symbol mca_base_param_reg_int"</a>
<li><strong>Previous message:</strong> <a href="12808.php">Prentice Bisbal: "Re: [OMPI users] problem using new OMPI1.4.1 vie SGE"</a>
<li><strong>In reply to:</strong> <a href="12804.php">Matthew MacManes: "Re: [OMPI users] problem using new OMPI1.4.1 vie SGE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12784.php">Addepalli, Srirangam V: "Re: [OMPI users] problem using new OMPI1.4.1 vie SGE"</a>
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
