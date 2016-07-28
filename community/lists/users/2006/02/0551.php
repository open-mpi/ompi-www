<?
$subject_val = "[O-MPI users] tcsh 'Unmatched &quot;.' error on localhost";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  1 17:52:17 2006" -->
<!-- isoreceived="20060201225217" -->
<!-- sent="Wed, 01 Feb 2006 14:52:02 -0800" -->
<!-- isosent="20060201225202" -->
<!-- name="Glenn Morris" -->
<!-- email="gmorris_at_[hidden]" -->
<!-- subject="[O-MPI users] tcsh 'Unmatched &amp;quot;.' error on localhost" -->
<!-- id="n54q3i7kvh.fsf_at_iris03.slac.stanford.edu" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Glenn Morris (<em>gmorris_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-02-01 17:52:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0552.php">Jeff Squyres: "Re: [O-MPI users] tcsh 'Unmatched &quot;.' error on localhost"</a>
<li><strong>Previous message:</strong> <a href="0550.php">Konstantin Kudin: "Re: [O-MPI users] forrtl: severe (39): error during read, unit 5, file /dev/ptmx - OpenMPI 1.0.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0552.php">Jeff Squyres: "Re: [O-MPI users] tcsh 'Unmatched &quot;.' error on localhost"</a>
<li><strong>Reply:</strong> <a href="0552.php">Jeff Squyres: "Re: [O-MPI users] tcsh 'Unmatched &quot;.' error on localhost"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Using v1.0.1, with tcsh as user login shell, trying to mpirun a job on
<br>
the localhost that involves tcsh produces an error from tcsh.
<br>
<p>E.g.
<br>
<p>hostfile = &quot;localhost&quot;
<br>
<p>mpirun -np 1 --hostfile ./hostfile \
<br>
&nbsp;&nbsp;--mca pls_rsh_agent ssh ... /bin/tcsh -c hostname
<br>
<p>results in the error `Unmatched &quot;.' from tcsh. /bin/bash is fine, as
<br>
is any host which is not the local machine.
<br>
<p>tcsh -V showed the warning to come from one of the standard files in
<br>
/etc/profile.d/, which was trying to manipulate ${path}.
<br>
<p>I believe the problem is caused by the \n added to the end of PATH and
<br>
LD_LIBRARY_PATH in pls_rsh_module.c at lines 749 and 762. tcsh does
<br>
not seem to like these, and removing them stops the error message
<br>
occurring.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0552.php">Jeff Squyres: "Re: [O-MPI users] tcsh 'Unmatched &quot;.' error on localhost"</a>
<li><strong>Previous message:</strong> <a href="0550.php">Konstantin Kudin: "Re: [O-MPI users] forrtl: severe (39): error during read, unit 5, file /dev/ptmx - OpenMPI 1.0.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0552.php">Jeff Squyres: "Re: [O-MPI users] tcsh 'Unmatched &quot;.' error on localhost"</a>
<li><strong>Reply:</strong> <a href="0552.php">Jeff Squyres: "Re: [O-MPI users] tcsh 'Unmatched &quot;.' error on localhost"</a>
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
