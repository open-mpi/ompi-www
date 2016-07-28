<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon May 29 11:22:38 2006" -->
<!-- isoreceived="20060529152238" -->
<!-- sent="Mon, 29 May 2006 17:22:41 +0200" -->
<!-- isosent="20060529152241" -->
<!-- name="Jens Klostermann" -->
<!-- email="Jens.Klostermann_at_[hidden]" -->
<!-- subject="[OMPI users] spawn failed with errno=-7" -->
<!-- id="1148916161.9967.48.camel_at_pc076.imfd.tu-freiberg.de" -->
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
<strong>Date:</strong> 2006-05-29 11:22:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1324.php">Ralph Castain: "Re: [OMPI users] spawn failed with errno=-7"</a>
<li><strong>Previous message:</strong> <a href="1322.php">Francoise Roch: "[OMPI users] openmpi-1.1a7  on solaris10 opteron"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1324.php">Ralph Castain: "Re: [OMPI users] spawn failed with errno=-7"</a>
<li><strong>Reply:</strong> <a href="1324.php">Ralph Castain: "Re: [OMPI users] spawn failed with errno=-7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
@ Ralph
<br>
<p>password-less execution of commands is enabled
<br>
<p>@ Michael
<br>
I did the following with openmpi 1.1 and 1.2 alphas now I get the
<br>
following error. 
<br>
<p>mpirun --mca pls_rsh_agent ssh -np 2 -machinefile
<br>
ompimachinefile ./hello_world_mpi
<br>
--------------------------------------------------------------------------
<br>
No available launching agents were found.
<br>
<p>This is an unusual error; it means that Open RTE was unable to find
<br>
any mechanism to launch proceses, and therefore is unable start the
<br>
process(es) in your application.
<br>
--------------------------------------------------------------------------
<br>
[stokes:11293] [0,0,0] ORTE_ERROR_LOG: Not found in file
<br>
rmgr_urm_component.c at line 190
<br>
<p>Jens
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1324.php">Ralph Castain: "Re: [OMPI users] spawn failed with errno=-7"</a>
<li><strong>Previous message:</strong> <a href="1322.php">Francoise Roch: "[OMPI users] openmpi-1.1a7  on solaris10 opteron"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1324.php">Ralph Castain: "Re: [OMPI users] spawn failed with errno=-7"</a>
<li><strong>Reply:</strong> <a href="1324.php">Ralph Castain: "Re: [OMPI users] spawn failed with errno=-7"</a>
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
