<?
$subject_val = "Re: [OMPI users] Problem with mpiexec --cpus-per-proc in multiple nodes in OMPI 1.6.4";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 21 15:58:24 2013" -->
<!-- isoreceived="20130321195824" -->
<!-- sent="Thu, 21 Mar 2013 15:58:19 -0400" -->
<!-- isosent="20130321195819" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with mpiexec --cpus-per-proc in multiple nodes in OMPI 1.6.4" -->
<!-- id="514B665B.5000708_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1994FA82-FD47-4169-8049-A15A6BE88E79_at_staff.uni-marburg.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem with mpiexec --cpus-per-proc in multiple nodes in OMPI 1.6.4<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-21 15:58:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21587.php">Ralph Castain: "Re: [OMPI users] Problem with mpiexec --cpus-per-proc in multiple nodes in OMPI 1.6.4"</a>
<li><strong>Previous message:</strong> <a href="21585.php">Reuti: "Re: [OMPI users] Problem with mpiexec --cpus-per-proc in multiple nodes in OMPI 1.6.4"</a>
<li><strong>In reply to:</strong> <a href="21585.php">Reuti: "Re: [OMPI users] Problem with mpiexec --cpus-per-proc in multiple nodes in OMPI 1.6.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21587.php">Ralph Castain: "Re: [OMPI users] Problem with mpiexec --cpus-per-proc in multiple nodes in OMPI 1.6.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 03/21/2013 03:12 PM, Reuti wrote:
<br>
<span class="quotelev1">&gt; Am 21.03.2013 um 20:01 schrieb Gus Correa:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dear Open MPI Pros
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am having trouble using mpiexec with --cpus-per-proc
</span><br>
<span class="quotelev2">&gt;&gt; on multiple nodes in OMPI 1.6.4.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I know there is an ongoing thread on similar runtime issues
</span><br>
<span class="quotelev2">&gt;&gt; of OMPI 1.7.
</span><br>
<span class="quotelev2">&gt;&gt; By no means I am trying to hijack T. Mishima's questions.
</span><br>
<span class="quotelev2">&gt;&gt; My question is genuine, though, and perhaps related to his.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am testing a new cluster remotely, with monster
</span><br>
<span class="quotelev2">&gt;&gt; dual socket 16-core AMD Bulldozer processors (32 cores per node).
</span><br>
<span class="quotelev2">&gt;&gt; I am using OMPI 1.6.4 built with Torque 4.2.1 support.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I read that on these processors each pair of cores share an FPU.
</span><br>
<span class="quotelev2">&gt;&gt; Hence, I am trying to run *one MPI process* on each
</span><br>
<span class="quotelev2">&gt;&gt; *pair of successive cores*.
</span><br>
<span class="quotelev2">&gt;&gt; This trick seems to yield better performance
</span><br>
<span class="quotelev2">&gt;&gt; (at least for HPL/Linpack) than using all cores.
</span><br>
<span class="quotelev2">&gt;&gt; I.e., the goal is to use &quot;each other core&quot;, or perhaps
</span><br>
<span class="quotelev2">&gt;&gt; to allow each process to wobble across two successive cores only,
</span><br>
<span class="quotelev2">&gt;&gt; hence granting exclusive use of one FPU per process.
</span><br>
<span class="quotelev2">&gt;&gt; [BTW, this is *not* an attempt to do hybrid MPI+OpenMP.
</span><br>
<span class="quotelev2">&gt;&gt; The code is HPL with MPI+BLAS/Lapack and NO OpenMP.]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; To achieve this, I am using the mpiexec --cpus-per-proc option.
</span><br>
<span class="quotelev2">&gt;&gt; It works on one node, which is great.
</span><br>
<span class="quotelev2">&gt;&gt; However, unless I made a silly syntax or arithmetic mistake,
</span><br>
<span class="quotelev2">&gt;&gt; it doesn't seem to work on more than one node.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; For instance, this works:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #PBS -l nodes=1:ppn=32
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; mpiexec -np 16 \
</span><br>
<span class="quotelev2">&gt;&gt;     --cpus-per-proc 2 \
</span><br>
<span class="quotelev2">&gt;&gt;     --bind-to-core \
</span><br>
<span class="quotelev2">&gt;&gt;     --report-bindings \
</span><br>
<span class="quotelev2">&gt;&gt;     --tag-output \
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I get a pretty nice process-to-cores distribution, with 16 processes, and each process bound to a couple of successive cores,
</span><br>
<span class="quotelev2">&gt;&gt; as expected:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [1,7]&lt;stderr&gt;:[node33:04744] MCW rank 7 bound to socket 0[core 14-15]: [. . . . . . . . . . . . . . B B][. . . . . . . . . . . . . . . .]
</span><br>
<span class="quotelev2">&gt;&gt; [1,8]&lt;stderr&gt;:[node33:04744] MCW rank 8 bound to socket 1[core 0-1]: [. . . . . . . . . . . . . . . .][B B . . . . . . . . . . . . . .]
</span><br>
<span class="quotelev2">&gt;&gt; [1,9]&lt;stderr&gt;:[node33:04744] MCW rank 9 bound to socket 1[core 2-3]: [. . . . . . . . . . . . . . . .][. . B B . . . . . . . . . . . .]
</span><br>
<span class="quotelev2">&gt;&gt; [1,10]&lt;stderr&gt;:[node33:04744] MCW rank 10 bound to socket 1[core 4-5]: [. . . . . . . . . . . . . . . .][. . . . B B . . . . . . . . . .]
</span><br>
<span class="quotelev2">&gt;&gt; [1,11]&lt;stderr&gt;:[node33:04744] MCW rank 11 bound to socket 1[core 6-7]: [. . . . . . . . . . . . . . . .][. . . . . . B B . . . . . . . .]
</span><br>
<span class="quotelev2">&gt;&gt; [1,12]&lt;stderr&gt;:[node33:04744] MCW rank 12 bound to socket 1[core 8-9]: [. . . . . . . . . . . . . . . .][. . . . . . . . B B . . . . . .]
</span><br>
<span class="quotelev2">&gt;&gt; [1,13]&lt;stderr&gt;:[node33:04744] MCW rank 13 bound to socket 1[core 10-11]: [. . . . . . . . . . . . . . . .][. . . . . . . . . . B B . . . .]
</span><br>
<span class="quotelev2">&gt;&gt; [1,14]&lt;stderr&gt;:[node33:04744] MCW rank 14 bound to socket 1[core 12-13]: [. . . . . . . . . . . . . . . .][. . . . . . . . . . . . B B . .]
</span><br>
<span class="quotelev2">&gt;&gt; [1,15]&lt;stderr&gt;:[node33:04744] MCW rank 15 bound to socket 1[core 14-15]: [. . . . . . . . . . . . . . . .][. . . . . . . . . . . . . . B B]
</span><br>
<span class="quotelev2">&gt;&gt; [1,0]&lt;stderr&gt;:[node33:04744] MCW rank 0 bound to socket 0[core 0-1]: [B B . . . . . . . . . . . . . .][. . . . . . . . . . . . . . . .]
</span><br>
<span class="quotelev2">&gt;&gt; [1,1]&lt;stderr&gt;:[node33:04744] MCW rank 1 bound to socket 0[core 2-3]: [. . B B . . . . . . . . . . . .][. . . . . . . . . . . . . . . .]
</span><br>
<span class="quotelev2">&gt;&gt; [1,2]&lt;stderr&gt;:[node33:04744] MCW rank 2 bound to socket 0[core 4-5]: [. . . . B B . . . . . . . . . .][. . . . . . . . . . . . . . . .]
</span><br>
<span class="quotelev2">&gt;&gt; [1,3]&lt;stderr&gt;:[node33:04744] MCW rank 3 bound to socket 0[core 6-7]: [. . . . . . B B . . . . . . . .][. . . . . . . . . . . . . . . .]
</span><br>
<span class="quotelev2">&gt;&gt; [1,4]&lt;stderr&gt;:[node33:04744] MCW rank 4 bound to socket 0[core 8-9]: [. . . . . . . . B B . . . . . .][. . . . . . . . . . . . . . . .]
</span><br>
<span class="quotelev2">&gt;&gt; [1,5]&lt;stderr&gt;:[node33:04744] MCW rank 5 bound to socket 0[core 10-11]: [. . . . . . . . . . B B . . . .][. . . . . . . . . . . . . . . .]
</span><br>
<span class="quotelev2">&gt;&gt; [1,6]&lt;stderr&gt;:[node33:04744] MCW rank 6 bound to socket 0[core 12-13]: [. . . . . . . . . . . . B B . .][. . . . . . . . . . . . . . . .]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ***************
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; However, when I try to use eight nodes,
</span><br>
<span class="quotelev2">&gt;&gt; the job fails and I get the error message  below (repeatedly from
</span><br>
<span class="quotelev2">&gt;&gt; several nodes):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #PBS -l nodes=8:ppn=32
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; mpiexec -np 128 \
</span><br>
<span class="quotelev2">&gt;&gt;     --cpus-per-proc 2 \
</span><br>
<span class="quotelev2">&gt;&gt;     --bind-to-core \
</span><br>
<span class="quotelev2">&gt;&gt;     --report-bindings \
</span><br>
<span class="quotelev2">&gt;&gt;     --tag-output \
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Error message:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; An invalid physical processor ID was returned when attempting to bind
</span><br>
<span class="quotelev2">&gt;&gt; an MPI process to a unique processor on node:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   Node: node18
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This usually means that you requested binding to more processors than
</span><br>
<span class="quotelev2">&gt;&gt; exist (e.g., trying to bind N MPI processes to M processors, where N&gt;
</span><br>
<span class="quotelev2">&gt;&gt; M), or that the node has an unexpectedly different topology.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Double check that you have enough unique processors for all the
</span><br>
<span class="quotelev2">&gt;&gt; MPI processes that you are launching on this host, and that all nodes
</span><br>
<span class="quotelev2">&gt;&gt; have identical topologies.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You job will now abort.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I got this when I ran it on the command line and specified a hostfile on my own. The weird thing was, that it was working fine when the job was submitted by SGE. Then the allocation was correct like the hostfile being honored only when it was assembled by Open MPI on its own from any given list of granted machines by SGE.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Was Open MPI built with tm-support? I would expect it to work in the same way for Torque.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Thank you, Reuti.
<br>
Yes, OMPI 1.6.4 built --with-tm support (Torque 4.2.1).
<br>
I haven't tried a rankfile yet.
<br>
The problem happens with --cpus-per-proc and only when
<br>
more than one node is requested.
<br>
Gus Correa
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Oddly enough, the binding map *is* shown on STDERR,
</span><br>
<span class="quotelev2">&gt;&gt; and it sounds *correct*, pretty much the same binding map above
</span><br>
<span class="quotelev2">&gt;&gt; that I get for a single node.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *****************
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Finally, replacing  &quot;--cpus-per-core 2&quot; by &quot;--npernode 16&quot;
</span><br>
<span class="quotelev2">&gt;&gt; works to some extent, but doesn't reach my goal.
</span><br>
<span class="quotelev2">&gt;&gt; I.e., the job doesn't fail, and each node gets 16 MPI
</span><br>
<span class="quotelev2">&gt;&gt; processes indeed.
</span><br>
<span class="quotelev2">&gt;&gt; However, it doesn't bind the processes the way I want.
</span><br>
<span class="quotelev2">&gt;&gt; Regardless of whether I continue to use &quot;--bind-to-core&quot;
</span><br>
<span class="quotelev2">&gt;&gt; or replace it by &quot;--bind-to-socket&quot;
</span><br>
<span class="quotelev2">&gt;&gt; all 16 processes on each node always bind to socket 0,
</span><br>
<span class="quotelev2">&gt;&gt; and nothing goes to socket 1.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ************
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is there any simple workaround to this
</span><br>
<span class="quotelev2">&gt;&gt; (other than using a --rankfile),
</span><br>
<span class="quotelev2">&gt;&gt; to make --cpus-per-proc work with multiple nodes,
</span><br>
<span class="quotelev2">&gt;&gt; using &quot;each other core&quot;?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [Only if it is simple workaround.  I must finish this
</span><br>
<span class="quotelev2">&gt;&gt; remote test soon.  Otherwise I can revisit this issue later.]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you,
</span><br>
<span class="quotelev2">&gt;&gt; Gus Correa
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21587.php">Ralph Castain: "Re: [OMPI users] Problem with mpiexec --cpus-per-proc in multiple nodes in OMPI 1.6.4"</a>
<li><strong>Previous message:</strong> <a href="21585.php">Reuti: "Re: [OMPI users] Problem with mpiexec --cpus-per-proc in multiple nodes in OMPI 1.6.4"</a>
<li><strong>In reply to:</strong> <a href="21585.php">Reuti: "Re: [OMPI users] Problem with mpiexec --cpus-per-proc in multiple nodes in OMPI 1.6.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21587.php">Ralph Castain: "Re: [OMPI users] Problem with mpiexec --cpus-per-proc in multiple nodes in OMPI 1.6.4"</a>
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
