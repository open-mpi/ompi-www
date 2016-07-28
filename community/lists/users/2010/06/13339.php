<?
$subject_val = "[OMPI users] problem with -npernode";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 17 17:50:15 2010" -->
<!-- isoreceived="20100617215015" -->
<!-- sent="Thu, 17 Jun 2010 14:50:07 -0700" -->
<!-- isosent="20100617215007" -->
<!-- name="David Turner" -->
<!-- email="dpturner_at_[hidden]" -->
<!-- subject="[OMPI users] problem with -npernode" -->
<!-- id="4C1A988F.70301_at_lbl.gov" -->
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
<strong>Subject:</strong> [OMPI users] problem with -npernode<br>
<strong>From:</strong> David Turner (<em>dpturner_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-17 17:50:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13340.php">Ralph Castain: "Re: [OMPI users] problem with -npernode"</a>
<li><strong>Previous message:</strong> <a href="13338.php">Ralph Castain: "Re: [OMPI users] using rankfiles to control mixed mode programming"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13340.php">Ralph Castain: "Re: [OMPI users] problem with -npernode"</a>
<li><strong>Reply:</strong> <a href="13340.php">Ralph Castain: "Re: [OMPI users] problem with -npernode"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Recently, Christopher Maestas reported a problem with -npernode in
<br>
Open MPI 1.4.2 (&quot;running a ompi 1.4.2 job with -np versus -npernode&quot;).
<br>
I have also encountered this problem, with a simple &quot;hello, world&quot;
<br>
program:
<br>
<p>% mpirun -np 16 ./a.out
<br>
&nbsp;&nbsp;myrank, icount =             0           16
<br>
&nbsp;&nbsp;myrank, icount =             2           16
<br>
&nbsp;&nbsp;myrank, icount =             5           16
<br>
&nbsp;&nbsp;myrank, icount =             7           16
<br>
&nbsp;&nbsp;myrank, icount =             1           16
<br>
&nbsp;&nbsp;myrank, icount =             4           16
<br>
&nbsp;&nbsp;myrank, icount =             6           16
<br>
&nbsp;&nbsp;myrank, icount =             3           16
<br>
&nbsp;&nbsp;myrank, icount =             8           16
<br>
&nbsp;&nbsp;myrank, icount =             9           16
<br>
&nbsp;&nbsp;myrank, icount =            10           16
<br>
&nbsp;&nbsp;myrank, icount =            12           16
<br>
&nbsp;&nbsp;myrank, icount =            13           16
<br>
&nbsp;&nbsp;myrank, icount =            15           16
<br>
&nbsp;&nbsp;myrank, icount =            11           16
<br>
&nbsp;&nbsp;myrank, icount =            14           16
<br>
FORTRAN STOP
<br>
FORTRAN STOP
<br>
FORTRAN STOP
<br>
FORTRAN STOP
<br>
FORTRAN STOP
<br>
FORTRAN STOP
<br>
FORTRAN STOP
<br>
FORTRAN STOP
<br>
FORTRAN STOP
<br>
FORTRAN STOP
<br>
FORTRAN STOP
<br>
FORTRAN STOP
<br>
FORTRAN STOP
<br>
FORTRAN STOP
<br>
FORTRAN STOP
<br>
FORTRAN STOP
<br>
&nbsp;
<br>
<p>% mpirun -np 16 -npernode 8 ./a.out
<br>
[c1146:15313] *** Process received signal ***
<br>
[c1146:15313] Signal: Segmentation fault (11)
<br>
[c1146:15313] Signal code: Address not mapped (1)
<br>
[c1146:15313] Failing at address: 0x50
<br>
[c1146:15313] *** End of error message ***
<br>
Segmentation fault
<br>
[c1138:26571] [[62315,0],1] routed:binomial: Connection to lifeline 
<br>
[[62315,0],0] lost
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;% module swap openmpi openmpi/1.4.1
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;% mpirun -np 16 -npernode 8 ./a.out
<br>
&nbsp;&nbsp;myrank, icount =             8           16
<br>
&nbsp;&nbsp;myrank, icount =            13           16
<br>
&nbsp;&nbsp;myrank, icount =            10           16
<br>
&nbsp;&nbsp;myrank, icount =            11           16
<br>
&nbsp;&nbsp;myrank, icount =            15           16
<br>
&nbsp;&nbsp;myrank, icount =            14           16
<br>
&nbsp;&nbsp;myrank, icount =            12           16
<br>
&nbsp;&nbsp;myrank, icount =             5           16
<br>
&nbsp;&nbsp;myrank, icount =             2           16
<br>
&nbsp;&nbsp;myrank, icount =             3           16
<br>
&nbsp;&nbsp;myrank, icount =             1           16
<br>
&nbsp;&nbsp;myrank, icount =             0           16
<br>
&nbsp;&nbsp;myrank, icount =             9           16
<br>
&nbsp;&nbsp;myrank, icount =             6           16
<br>
&nbsp;&nbsp;myrank, icount =             7           16
<br>
&nbsp;&nbsp;myrank, icount =             4           16
<br>
FORTRAN STOP
<br>
FORTRAN STOP
<br>
FORTRAN STOP
<br>
FORTRAN STOP
<br>
FORTRAN STOP
<br>
FORTRAN STOP
<br>
FORTRAN STOP
<br>
FORTRAN STOP
<br>
FORTRAN STOP
<br>
FORTRAN STOP
<br>
FORTRAN STOP
<br>
FORTRAN STOP
<br>
FORTRAN STOP
<br>
FORTRAN STOP
<br>
FORTRAN STOP
<br>
FORTRAN STOP
<br>
<p>Compilers are PGI/10.5, OS is Scientific Linux 5.4, resource manager is
<br>
torque 2.4.5.  Please let me know if you need more information.  Thanks!
<br>
<p><pre>
-- 
Best regards,
David Turner
User Services Group        email: dpturner_at_[hidden]
NERSC Division             phone: (510) 486-4027
Lawrence Berkeley Lab        fax: (510) 486-4316
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13340.php">Ralph Castain: "Re: [OMPI users] problem with -npernode"</a>
<li><strong>Previous message:</strong> <a href="13338.php">Ralph Castain: "Re: [OMPI users] using rankfiles to control mixed mode programming"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13340.php">Ralph Castain: "Re: [OMPI users] problem with -npernode"</a>
<li><strong>Reply:</strong> <a href="13340.php">Ralph Castain: "Re: [OMPI users] problem with -npernode"</a>
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
