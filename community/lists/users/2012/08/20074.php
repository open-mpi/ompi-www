<?
$subject_val = "Re: [OMPI users] what is a &quot;node&quot;?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 30 14:32:37 2012" -->
<!-- isoreceived="20120830183237" -->
<!-- sent="Thu, 30 Aug 2012 14:32:28 -0400" -->
<!-- isosent="20120830183228" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] what is a &amp;quot;node&amp;quot;?" -->
<!-- id="503FB1BC.1050400_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="8023E98D-4B94-40A8-A634-8B20C549A7FD_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] what is a &quot;node&quot;?<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-30 14:32:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20075.php">Zbigniew Koza: "Re: [OMPI users] what is a &quot;node&quot;?"</a>
<li><strong>Previous message:</strong> <a href="20073.php">Jeff Squyres: "Re: [OMPI users] openmpi 1.6.1 and libnuma"</a>
<li><strong>In reply to:</strong> <a href="20066.php">Jeff Squyres: "Re: [OMPI users] what is a &quot;node&quot;?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20075.php">Zbigniew Koza: "Re: [OMPI users] what is a &quot;node&quot;?"</a>
<li><strong>Reply:</strong> <a href="20075.php">Zbigniew Koza: "Re: [OMPI users] what is a &quot;node&quot;?"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/09/20089.php">Zbigniew Koza: "Re: [OMPI users] what is a &quot;node&quot;?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi  Zbigniew
<br>
<p>Besides the OpenMPI processor affinity capability that Jeff mentioned.
<br>
<p>If your Curie cluster has a resource manager [Torque, SGE, etc],
<br>
your job submission script to the resource manager/ queue system
<br>
should specifically request a single node, for the test that you have in 
<br>
mind.
<br>
<p>For instance, on Torque/PBS, this would be done by adding this directive to
<br>
the top of the job script:
<br>
<p>#PBS -l nodes=1:ppn=8
<br>
...
<br>
mpiexec -np 8 ...
<br>
<p>meaning that you want the 8 processors [i.e. cores] to be in a single node.
<br>
<p>On top of this, you need to add the appropriate process binding
<br>
keywords to the mpiexec command line, as Jeff suggested.
<br>
'man mpiexec' will tell you a lot about the OpenMPI process binding 
<br>
capability, specially in 1.6 and 1.4 series.
<br>
<p>In the best of the worlds your resource manager has the ability to also 
<br>
assign a group of
<br>
cores exclusively to each of the jobs that may be sharing the node.
<br>
Say, job1 requests 4 cores and gets cores 0-3 and cannot use any other 
<br>
cores,
<br>
job2 requests 8 cores and gets cores 4-11 and cannot use any other 
<br>
cores, and so on.
<br>
<p>However, not all resource managers/ queue systems are built this way 
<br>
[particularly the older versions],
<br>
and may let the various job processes to drift across all cores in the node.
<br>
<p>If the resource manager is old and doesn't have that hardware locality 
<br>
capability,
<br>
and if you don't want your performance test to risk being polluted by
<br>
other jobs running on the same node, that perhaps share the same cores 
<br>
with your job,
<br>
then you can request all 32 cores in the node for your job,
<br>
but use only 8 of them to run your MPI program.
<br>
It is wasteful, but may be the only way to go.
<br>
For instance, on Torque:
<br>
<p>#PBS -l nodes=1:ppn=32
<br>
...
<br>
mpiexec -np 8 ...
<br>
<p>Again, add the OpenMPI process binding keywords to the mpiexec command line,
<br>
to ensure the use of a fixed group of 8 cores.
<br>
<p>With SGE and Slurm the syntax is different than the above,
<br>
but I would guess that there is an equivalent setup.
<br>
<p>I hope this helps,
<br>
Gus Correa
<br>
<p>On 08/30/2012 08:07 AM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; In the OMPI v1.6 series, you can use the processor affinity options.  And you can use --report-bindings to show exactly where processes were bound.  For example:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; % mpirun -np 4 --bind-to-core --report-bindings -bycore uptime
</span><br>
<span class="quotelev1">&gt; [svbu-mpi056:18904] MCW rank 0 bound to socket 0[core 0]: [B . . .][. . . .]
</span><br>
<span class="quotelev1">&gt; [svbu-mpi056:18904] MCW rank 1 bound to socket 0[core 1]: [. B . .][. . . .]
</span><br>
<span class="quotelev1">&gt; [svbu-mpi056:18904] MCW rank 2 bound to socket 0[core 2]: [. . B .][. . . .]
</span><br>
<span class="quotelev1">&gt; [svbu-mpi056:18904] MCW rank 3 bound to socket 0[core 3]: [. . . B][. . . .]
</span><br>
<span class="quotelev1">&gt;   05:06:13 up 7 days,  6:57,  1 user,  load average: 0.29, 0.10, 0.03
</span><br>
<span class="quotelev1">&gt;   05:06:13 up 7 days,  6:57,  1 user,  load average: 0.29, 0.10, 0.03
</span><br>
<span class="quotelev1">&gt;   05:06:13 up 7 days,  6:57,  1 user,  load average: 0.29, 0.10, 0.03
</span><br>
<span class="quotelev1">&gt;   05:06:13 up 7 days,  6:57,  1 user,  load average: 0.29, 0.10, 0.03
</span><br>
<span class="quotelev1">&gt; %
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I bound each process to a single core, and mapped them on a round-robin basis by core.  Hence, all 4 processes ended up on their own cores on a single processor socket.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The --report-bindings output shows that this particular machine has 2 sockets, each with 4 cores.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 30, 2012, at 5:37 AM, Zbigniew Koza wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; consider this specification:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &quot;Curie fat consists in 360 nodes which contains 4 eight cores CPU Nehalem-EX clocked at 2.27 GHz, let 32 cores / node and 11520 cores for the full fat configuration&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Suppose I would like to run some performance tests just on a single processor rather than 4 of them.
</span><br>
<span class="quotelev2">&gt;&gt; Is there a way to do this?
</span><br>
<span class="quotelev2">&gt;&gt; I'm afraid specifying that I need 1 cluster node with 8 MPI prcesses
</span><br>
<span class="quotelev2">&gt;&gt; will result in OS distributing these 8 processes among 4
</span><br>
<span class="quotelev2">&gt;&gt; processors forming the node, and this is not what I'm after.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Z Koza
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20075.php">Zbigniew Koza: "Re: [OMPI users] what is a &quot;node&quot;?"</a>
<li><strong>Previous message:</strong> <a href="20073.php">Jeff Squyres: "Re: [OMPI users] openmpi 1.6.1 and libnuma"</a>
<li><strong>In reply to:</strong> <a href="20066.php">Jeff Squyres: "Re: [OMPI users] what is a &quot;node&quot;?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20075.php">Zbigniew Koza: "Re: [OMPI users] what is a &quot;node&quot;?"</a>
<li><strong>Reply:</strong> <a href="20075.php">Zbigniew Koza: "Re: [OMPI users] what is a &quot;node&quot;?"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/09/20089.php">Zbigniew Koza: "Re: [OMPI users] what is a &quot;node&quot;?"</a>
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
