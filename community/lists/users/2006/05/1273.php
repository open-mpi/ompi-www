<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed May 24 13:50:58 2006" -->
<!-- isoreceived="20060524175058" -->
<!-- sent="Wed, 24 May 2006 19:48:46 +0200" -->
<!-- isosent="20060524174846" -->
<!-- name="Jens Klostermann" -->
<!-- email="Jens.Klostermann_at_[hidden]" -->
<!-- subject="[OMPI users] spawn failed with errno=-7" -->
<!-- id="1148492926.9967.34.camel_at_pc076.imfd.tu-freiberg.de" -->
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
<strong>Date:</strong> 2006-05-24 13:48:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1274.php">Ralph Castain: "Re: [OMPI users] spawn failed with errno=-7"</a>
<li><strong>Previous message:</strong> <a href="1272.php">Terry Reeves: "Re: [OMPI users] Fortran support not installing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1274.php">Ralph Castain: "Re: [OMPI users] spawn failed with errno=-7"</a>
<li><strong>Reply:</strong> <a href="1274.php">Ralph Castain: "Re: [OMPI users] spawn failed with errno=-7"</a>
<li><strong>Reply:</strong> <a href="1288.php">Michael Kluskens: "Re: [OMPI users] spawn failed with errno=-7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I did the following run with openmpi1.0.2:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun -np 8 -machinefile ompimachinefile ./hello_world_mpi
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;and got the following errors
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[stokes:00740] [0,0,0] ORTE_ERROR_LOG: Not implemented in file
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rmgr_urm.c at line 177
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[stokes:00740] [0,0,0] ORTE_ERROR_LOG: Not implemented in file
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rmgr_urm.c at line 365
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[stokes:00740] mpirun: spawn failed with errno=-7
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;What should I do to track the error or to get rid of it?
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jens
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1274.php">Ralph Castain: "Re: [OMPI users] spawn failed with errno=-7"</a>
<li><strong>Previous message:</strong> <a href="1272.php">Terry Reeves: "Re: [OMPI users] Fortran support not installing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1274.php">Ralph Castain: "Re: [OMPI users] spawn failed with errno=-7"</a>
<li><strong>Reply:</strong> <a href="1274.php">Ralph Castain: "Re: [OMPI users] spawn failed with errno=-7"</a>
<li><strong>Reply:</strong> <a href="1288.php">Michael Kluskens: "Re: [OMPI users] spawn failed with errno=-7"</a>
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
