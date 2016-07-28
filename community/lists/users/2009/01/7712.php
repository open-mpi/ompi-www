<?
$subject_val = "[OMPI users] delay in launch?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 15 10:20:40 2009" -->
<!-- isoreceived="20090115152040" -->
<!-- sent="Thu, 15 Jan 2009 10:20:32 -0500" -->
<!-- isosent="20090115152032" -->
<!-- name="Jeff Dusenberry" -->
<!-- email="jdusenberry_at_[hidden]" -->
<!-- subject="[OMPI users] delay in launch?" -->
<!-- id="496F5440.8060402_at_whoi.edu" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] delay in launch?<br>
<strong>From:</strong> Jeff Dusenberry (<em>jdusenberry_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-15 10:20:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7713.php">Biagio Lucini: "Re: [OMPI users] Problem with openmpi and infiniband"</a>
<li><strong>Previous message:</strong> <a href="7711.php">Gabriele Fatigati: "[OMPI users] Timeout problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7715.php">Reuti: "Re: [OMPI users] delay in launch?"</a>
<li><strong>Reply:</strong> <a href="7715.php">Reuti: "Re: [OMPI users] delay in launch?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm trying to launch multiple xterms under OpenMPI 1.2.8 and the SGE job 
<br>
scheduler for purposes of running a serial debugger.  I'm experiencing 
<br>
file-locking problems on the .Xauthority file.
<br>
<p>I tried to fix this by asking for a delay between successive launches, 
<br>
to reduce the chances of contention for the lock by:
<br>
<p>~$ qrsh -pe mpi 4 -P CIS  /share/apps/openmpi/bin/mpiexec --mca 
<br>
pls_rsh_debug 1 --mca pls_rsh_delay 5  xterm
<br>
<p>The 'pls_rsh_delay 5' parameter seems to have no effect.  I tried 
<br>
replacing 'pls_rsh_debug 1' with 'orte_debug 1', which gave me 
<br>
additional debugging output, but didn't fix the file locking problem.
<br>
<p>Sometimes the above commands will work and I will get all 4 xterms, but 
<br>
more often I will get an error:
<br>
<p>/usr/bin/X11/xauth:  error in locking authority file 
<br>
/export/home/duse/.Xauthority
<br>
<p>followed by
<br>
<p>X11 connection rejected because of wrong authentication.
<br>
xterm Xt error: Can't open display: localhost:11.0
<br>
<p>and one or more of the xterms will fail to open.
<br>
<p>Am I missing something?  Is there another debug flag I need to set?  Any 
<br>
suggestions for a better way to do this would be appreciated.
<br>
<p>Thanks,
<br>
Jeff
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7713.php">Biagio Lucini: "Re: [OMPI users] Problem with openmpi and infiniband"</a>
<li><strong>Previous message:</strong> <a href="7711.php">Gabriele Fatigati: "[OMPI users] Timeout problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7715.php">Reuti: "Re: [OMPI users] delay in launch?"</a>
<li><strong>Reply:</strong> <a href="7715.php">Reuti: "Re: [OMPI users] delay in launch?"</a>
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
