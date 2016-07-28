<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jun 12 10:51:34 2006" -->
<!-- isoreceived="20060612145134" -->
<!-- sent="Mon, 12 Jun 2006 16:51:05 +0200" -->
<!-- isosent="20060612145105" -->
<!-- name="Jens Klostermann" -->
<!-- email="Jens.Klostermann_at_[hidden]" -->
<!-- subject="[OMPI users] Why does it suddenly not run?" -->
<!-- id="1150123865.8611.31.camel_at_pc076.imfd.tu-freiberg.de" -->
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
<strong>From:</strong> Jens Klostermann (<em>Jens.Klostermann_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-12 10:51:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1395.php">Brian Barrett: "Re: [OMPI users] Why does openMPI abort processes?"</a>
<li><strong>Previous message:</strong> <a href="1393.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] F90 interfaces again"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1496.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Why does it suddenly not run?"</a>
<li><strong>Maybe reply:</strong> <a href="1496.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Why does it suddenly not run?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This morning I was running 
<br>
<p>mpirun -v --mca btl mvapi,self -np 12 --hostfile ompimachinefile
<br>
oodles . les_test1100k -parallel &gt;&gt; ./les_test1100k/log12 &amp;
<br>
<p>with openmpi-1.2a1r10111 and everything worked and still works as
<br>
expected.
<br>
<p>Now I tried to start a second (very same) job with the following error
<br>
message as a result:
<br>
<p>[stokes:29489] [0,0,0] ORTE_ERROR_LOG: Error in file
<br>
runtime/orte_init_stage1.c at line 302
<br>
--------------------------------------------------------------------------
<br>
It looks like orte_init failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during orte_init; some of which are due to configuration or
<br>
environment problems.  This failure appears to be an internal failure;
<br>
here's some additional information (which may only be relevant to an
<br>
Open MPI developer):
<br>
<p>&nbsp;&nbsp;orte_session_dir failed
<br>
&nbsp;&nbsp;--&gt; Returned value -1 instead of ORTE_SUCCESS
<br>
<p>--------------------------------------------------------------------------
<br>
[stokes:29489] [0,0,0] ORTE_ERROR_LOG: Error in file
<br>
runtime/orte_system_init.c at line 42
<br>
[stokes:29489] [0,0,0] ORTE_ERROR_LOG: Error in file runtime/orte_init.c
<br>
at line 49
<br>
--------------------------------------------------------------------------
<br>
Open RTE was unable to initialize properly.  The error occured while
<br>
attempting to orte_init().  Returned value -1 instead of ORTE_SUCCESS.
<br>
<p>Has anybody an idea what the error might be or how to trag it down?
<br>
<p>Regards Jens
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1395.php">Brian Barrett: "Re: [OMPI users] Why does openMPI abort processes?"</a>
<li><strong>Previous message:</strong> <a href="1393.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] F90 interfaces again"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1496.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Why does it suddenly not run?"</a>
<li><strong>Maybe reply:</strong> <a href="1496.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Why does it suddenly not run?"</a>
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
