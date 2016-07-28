<?
$subject_val = "[OMPI users] Problem with mpiexec --cpus-per-proc in multiple nodes in OMPI 1.6.4";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 21 15:01:11 2013" -->
<!-- isoreceived="20130321190111" -->
<!-- sent="Thu, 21 Mar 2013 15:01:00 -0400" -->
<!-- isosent="20130321190100" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="[OMPI users] Problem with mpiexec --cpus-per-proc in multiple nodes in OMPI 1.6.4" -->
<!-- id="514B58EC.7080103_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> [OMPI users] Problem with mpiexec --cpus-per-proc in multiple nodes in OMPI 1.6.4<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-21 15:01:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21585.php">Reuti: "Re: [OMPI users] Problem with mpiexec --cpus-per-proc in multiple nodes in OMPI 1.6.4"</a>
<li><strong>Previous message:</strong> <a href="21583.php">Ralph Castain: "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21585.php">Reuti: "Re: [OMPI users] Problem with mpiexec --cpus-per-proc in multiple nodes in OMPI 1.6.4"</a>
<li><strong>Reply:</strong> <a href="21585.php">Reuti: "Re: [OMPI users] Problem with mpiexec --cpus-per-proc in multiple nodes in OMPI 1.6.4"</a>
<li><strong>Reply:</strong> <a href="21587.php">Ralph Castain: "Re: [OMPI users] Problem with mpiexec --cpus-per-proc in multiple nodes in OMPI 1.6.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Open MPI Pros
<br>
<p>I am having trouble using mpiexec with --cpus-per-proc
<br>
on multiple nodes in OMPI 1.6.4.
<br>
<p>I know there is an ongoing thread on similar runtime issues
<br>
of OMPI 1.7.
<br>
By no means I am trying to hijack T. Mishima's questions.
<br>
My question is genuine, though, and perhaps related to his.
<br>
<p>I am testing a new cluster remotely, with monster
<br>
dual socket 16-core AMD Bulldozer processors (32 cores per node).
<br>
I am using OMPI 1.6.4 built with Torque 4.2.1 support.
<br>
<p>I read that on these processors each pair of cores share an FPU.
<br>
Hence, I am trying to run *one MPI process* on each
<br>
*pair of successive cores*.
<br>
This trick seems to yield better performance
<br>
(at least for HPL/Linpack) than using all cores.
<br>
I.e., the goal is to use &quot;each other core&quot;, or perhaps
<br>
to allow each process to wobble across two successive cores only,
<br>
hence granting exclusive use of one FPU per process.
<br>
[BTW, this is *not* an attempt to do hybrid MPI+OpenMP.
<br>
The code is HPL with MPI+BLAS/Lapack and NO OpenMP.]
<br>
<p>To achieve this, I am using the mpiexec --cpus-per-proc option.
<br>
It works on one node, which is great.
<br>
However, unless I made a silly syntax or arithmetic mistake,
<br>
it doesn't seem to work on more than one node.
<br>
<p>For instance, this works:
<br>
<p>#PBS -l nodes=1:ppn=32
<br>
...
<br>
mpiexec -np 16 \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--cpus-per-proc 2 \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--bind-to-core \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--report-bindings \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--tag-output \
<br>
<p>I get a pretty nice process-to-cores distribution, with 16 processes, 
<br>
and each process bound to a couple of successive cores,
<br>
as expected:
<br>
<p>[1,7]&lt;stderr&gt;:[node33:04744] MCW rank 7 bound to socket 0[core 14-15]: 
<br>
[. . . . . . . . . . . . . . B B][. . . . . . . . . . . . . . . .]
<br>
[1,8]&lt;stderr&gt;:[node33:04744] MCW rank 8 bound to socket 1[core 0-1]: [. 
<br>
. . . . . . . . . . . . . . .][B B . . . . . . . . . . . . . .]
<br>
[1,9]&lt;stderr&gt;:[node33:04744] MCW rank 9 bound to socket 1[core 2-3]: [. 
<br>
. . . . . . . . . . . . . . .][. . B B . . . . . . . . . . . .]
<br>
[1,10]&lt;stderr&gt;:[node33:04744] MCW rank 10 bound to socket 1[core 4-5]: 
<br>
[. . . . . . . . . . . . . . . .][. . . . B B . . . . . . . . . .]
<br>
[1,11]&lt;stderr&gt;:[node33:04744] MCW rank 11 bound to socket 1[core 6-7]: 
<br>
[. . . . . . . . . . . . . . . .][. . . . . . B B . . . . . . . .]
<br>
[1,12]&lt;stderr&gt;:[node33:04744] MCW rank 12 bound to socket 1[core 8-9]: 
<br>
[. . . . . . . . . . . . . . . .][. . . . . . . . B B . . . . . .]
<br>
[1,13]&lt;stderr&gt;:[node33:04744] MCW rank 13 bound to socket 1[core 10-11]: 
<br>
[. . . . . . . . . . . . . . . .][. . . . . . . . . . B B . . . .]
<br>
[1,14]&lt;stderr&gt;:[node33:04744] MCW rank 14 bound to socket 1[core 12-13]: 
<br>
[. . . . . . . . . . . . . . . .][. . . . . . . . . . . . B B . .]
<br>
[1,15]&lt;stderr&gt;:[node33:04744] MCW rank 15 bound to socket 1[core 14-15]: 
<br>
[. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . B B]
<br>
[1,0]&lt;stderr&gt;:[node33:04744] MCW rank 0 bound to socket 0[core 0-1]: [B 
<br>
B . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .]
<br>
[1,1]&lt;stderr&gt;:[node33:04744] MCW rank 1 bound to socket 0[core 2-3]: [. 
<br>
. B B . . . . . . . . . . . .][. . . . . . . . . . . . . . . .]
<br>
[1,2]&lt;stderr&gt;:[node33:04744] MCW rank 2 bound to socket 0[core 4-5]: [. 
<br>
. . . B B . . . . . . . . . .][. . . . . . . . . . . . . . . .]
<br>
[1,3]&lt;stderr&gt;:[node33:04744] MCW rank 3 bound to socket 0[core 6-7]: [. 
<br>
. . . . . B B . . . . . . . .][. . . . . . . . . . . . . . . .]
<br>
[1,4]&lt;stderr&gt;:[node33:04744] MCW rank 4 bound to socket 0[core 8-9]: [. 
<br>
. . . . . . . B B . . . . . .][. . . . . . . . . . . . . . . .]
<br>
[1,5]&lt;stderr&gt;:[node33:04744] MCW rank 5 bound to socket 0[core 10-11]: 
<br>
[. . . . . . . . . . B B . . . .][. . . . . . . . . . . . . . . .]
<br>
[1,6]&lt;stderr&gt;:[node33:04744] MCW rank 6 bound to socket 0[core 12-13]: 
<br>
[. . . . . . . . . . . . B B . .][. . . . . . . . . . . . . . . .]
<br>
<p><p>***************
<br>
<p>However, when I try to use eight nodes,
<br>
the job fails and I get the error message  below (repeatedly from
<br>
several nodes):
<br>
<p>#PBS -l nodes=8:ppn=32
<br>
...
<br>
mpiexec -np 128 \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--cpus-per-proc 2 \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--bind-to-core \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--report-bindings \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--tag-output \
<br>
<p><p>Error message:
<br>
<p>--------------------------------------------------------------------------
<br>
An invalid physical processor ID was returned when attempting to bind
<br>
an MPI process to a unique processor on node:
<br>
<p>&nbsp;&nbsp;&nbsp;Node: node18
<br>
<p>This usually means that you requested binding to more processors than
<br>
exist (e.g., trying to bind N MPI processes to M processors, where N &gt;
<br>
M), or that the node has an unexpectedly different topology.
<br>
<p>Double check that you have enough unique processors for all the
<br>
MPI processes that you are launching on this host, and that all nodes
<br>
have identical topologies.
<br>
<p>You job will now abort.
<br>
--------------------------------------------------------------------------
<br>
<p>Oddly enough, the binding map *is* shown on STDERR,
<br>
and it sounds *correct*, pretty much the same binding map above
<br>
that I get for a single node.
<br>
<p>*****************
<br>
<p>Finally, replacing  &quot;--cpus-per-core 2&quot; by &quot;--npernode 16&quot;
<br>
works to some extent, but doesn't reach my goal.
<br>
I.e., the job doesn't fail, and each node gets 16 MPI
<br>
processes indeed.
<br>
However, it doesn't bind the processes the way I want.
<br>
Regardless of whether I continue to use &quot;--bind-to-core&quot;
<br>
or replace it by &quot;--bind-to-socket&quot;
<br>
all 16 processes on each node always bind to socket 0,
<br>
and nothing goes to socket 1.
<br>
<p>************
<br>
<p>Is there any simple workaround to this
<br>
(other than using a --rankfile),
<br>
to make --cpus-per-proc work with multiple nodes,
<br>
using &quot;each other core&quot;?
<br>
<p>[Only if it is simple workaround.  I must finish this
<br>
remote test soon.  Otherwise I can revisit this issue later.]
<br>
<p>Thank you,
<br>
Gus Correa
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21585.php">Reuti: "Re: [OMPI users] Problem with mpiexec --cpus-per-proc in multiple nodes in OMPI 1.6.4"</a>
<li><strong>Previous message:</strong> <a href="21583.php">Ralph Castain: "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21585.php">Reuti: "Re: [OMPI users] Problem with mpiexec --cpus-per-proc in multiple nodes in OMPI 1.6.4"</a>
<li><strong>Reply:</strong> <a href="21585.php">Reuti: "Re: [OMPI users] Problem with mpiexec --cpus-per-proc in multiple nodes in OMPI 1.6.4"</a>
<li><strong>Reply:</strong> <a href="21587.php">Ralph Castain: "Re: [OMPI users] Problem with mpiexec --cpus-per-proc in multiple nodes in OMPI 1.6.4"</a>
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
