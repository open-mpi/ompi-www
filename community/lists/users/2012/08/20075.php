<?
$subject_val = "Re: [OMPI users] what is a &quot;node&quot;?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 30 15:18:13 2012" -->
<!-- isoreceived="20120830191813" -->
<!-- sent="Thu, 30 Aug 2012 21:18:08 +0200" -->
<!-- isosent="20120830191808" -->
<!-- name="Zbigniew Koza" -->
<!-- email="zzkoza_at_[hidden]" -->
<!-- subject="Re: [OMPI users] what is a &amp;quot;node&amp;quot;?" -->
<!-- id="CA+dv2NEikjxBps_x3LEvbgQOMC+qYght1UU1hBVFBduu_9k=UA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="503FB1BC.1050400_at_ldeo.columbia.edu" -->
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
<strong>From:</strong> Zbigniew Koza (<em>zzkoza_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-30 15:18:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20076.php">Yong Qin: "Re: [OMPI users] OMPI 1.6.x Hang on khugepaged 100% CPU time"</a>
<li><strong>Previous message:</strong> <a href="20074.php">Gus Correa: "Re: [OMPI users] what is a &quot;node&quot;?"</a>
<li><strong>In reply to:</strong> <a href="20074.php">Gus Correa: "Re: [OMPI users] what is a &quot;node&quot;?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/09/20089.php">Zbigniew Koza: "Re: [OMPI users] what is a &quot;node&quot;?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks a lot!
<br>
<p>Z Koza
<br>
<p>2012/8/30 Gus Correa &lt;gus_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; Hi  Zbigniew
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Besides the OpenMPI processor affinity capability that Jeff mentioned.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If your Curie cluster has a resource manager [Torque, SGE, etc],
</span><br>
<span class="quotelev1">&gt; your job submission script to the resource manager/ queue system
</span><br>
<span class="quotelev1">&gt; should specifically request a single node, for the test that you have in
</span><br>
<span class="quotelev1">&gt; mind.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For instance, on Torque/PBS, this would be done by adding this directive to
</span><br>
<span class="quotelev1">&gt; the top of the job script:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #PBS -l nodes=1:ppn=8
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; mpiexec -np 8 ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; meaning that you want the 8 processors [i.e. cores] to be in a single node.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On top of this, you need to add the appropriate process binding
</span><br>
<span class="quotelev1">&gt; keywords to the mpiexec command line, as Jeff suggested.
</span><br>
<span class="quotelev1">&gt; 'man mpiexec' will tell you a lot about the OpenMPI process binding
</span><br>
<span class="quotelev1">&gt; capability, specially in 1.6 and 1.4 series.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In the best of the worlds your resource manager has the ability to also
</span><br>
<span class="quotelev1">&gt; assign a group of
</span><br>
<span class="quotelev1">&gt; cores exclusively to each of the jobs that may be sharing the node.
</span><br>
<span class="quotelev1">&gt; Say, job1 requests 4 cores and gets cores 0-3 and cannot use any other
</span><br>
<span class="quotelev1">&gt; cores,
</span><br>
<span class="quotelev1">&gt; job2 requests 8 cores and gets cores 4-11 and cannot use any other cores,
</span><br>
<span class="quotelev1">&gt; and so on.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, not all resource managers/ queue systems are built this way
</span><br>
<span class="quotelev1">&gt; [particularly the older versions],
</span><br>
<span class="quotelev1">&gt; and may let the various job processes to drift across all cores in the
</span><br>
<span class="quotelev1">&gt; node.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If the resource manager is old and doesn't have that hardware locality
</span><br>
<span class="quotelev1">&gt; capability,
</span><br>
<span class="quotelev1">&gt; and if you don't want your performance test to risk being polluted by
</span><br>
<span class="quotelev1">&gt; other jobs running on the same node, that perhaps share the same cores
</span><br>
<span class="quotelev1">&gt; with your job,
</span><br>
<span class="quotelev1">&gt; then you can request all 32 cores in the node for your job,
</span><br>
<span class="quotelev1">&gt; but use only 8 of them to run your MPI program.
</span><br>
<span class="quotelev1">&gt; It is wasteful, but may be the only way to go.
</span><br>
<span class="quotelev1">&gt; For instance, on Torque:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #PBS -l nodes=1:ppn=32
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; mpiexec -np 8 ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Again, add the OpenMPI process binding keywords to the mpiexec command
</span><br>
<span class="quotelev1">&gt; line,
</span><br>
<span class="quotelev1">&gt; to ensure the use of a fixed group of 8 cores.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; With SGE and Slurm the syntax is different than the above,
</span><br>
<span class="quotelev1">&gt; but I would guess that there is an equivalent setup.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I hope this helps,
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 08/30/2012 08:07 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In the OMPI v1.6 series, you can use the processor affinity options.  And
</span><br>
<span class="quotelev2">&gt;&gt; you can use --report-bindings to show exactly where processes were bound.
</span><br>
<span class="quotelev2">&gt;&gt;  For example:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -----
</span><br>
<span class="quotelev2">&gt;&gt; % mpirun -np 4 --bind-to-core --report-bindings -bycore uptime
</span><br>
<span class="quotelev2">&gt;&gt; [svbu-mpi056:18904] MCW rank 0 bound to socket 0[core 0]: [B . . .][. . .
</span><br>
<span class="quotelev2">&gt;&gt; .]
</span><br>
<span class="quotelev2">&gt;&gt; [svbu-mpi056:18904] MCW rank 1 bound to socket 0[core 1]: [. B . .][. . .
</span><br>
<span class="quotelev2">&gt;&gt; .]
</span><br>
<span class="quotelev2">&gt;&gt; [svbu-mpi056:18904] MCW rank 2 bound to socket 0[core 2]: [. . B .][. . .
</span><br>
<span class="quotelev2">&gt;&gt; .]
</span><br>
<span class="quotelev2">&gt;&gt; [svbu-mpi056:18904] MCW rank 3 bound to socket 0[core 3]: [. . . B][. . .
</span><br>
<span class="quotelev2">&gt;&gt; .]
</span><br>
<span class="quotelev2">&gt;&gt;   05:06:13 up 7 days,  6:57,  1 user,  load average: 0.29, 0.10, 0.03
</span><br>
<span class="quotelev2">&gt;&gt;   05:06:13 up 7 days,  6:57,  1 user,  load average: 0.29, 0.10, 0.03
</span><br>
<span class="quotelev2">&gt;&gt;   05:06:13 up 7 days,  6:57,  1 user,  load average: 0.29, 0.10, 0.03
</span><br>
<span class="quotelev2">&gt;&gt;   05:06:13 up 7 days,  6:57,  1 user,  load average: 0.29, 0.10, 0.03
</span><br>
<span class="quotelev2">&gt;&gt; %
</span><br>
<span class="quotelev2">&gt;&gt; -----
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I bound each process to a single core, and mapped them on a round-robin
</span><br>
<span class="quotelev2">&gt;&gt; basis by core.  Hence, all 4 processes ended up on their own cores on a
</span><br>
<span class="quotelev2">&gt;&gt; single processor socket.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The --report-bindings output shows that this particular machine has 2
</span><br>
<span class="quotelev2">&gt;&gt; sockets, each with 4 cores.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 30, 2012, at 5:37 AM, Zbigniew Koza wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; consider this specification:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;Curie fat consists in 360 nodes which contains 4 eight cores CPU
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Nehalem-EX clocked at 2.27 GHz, let 32 cores / node and 11520 cores for the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; full fat configuration&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Suppose I would like to run some performance tests just on a single
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processor rather than 4 of them.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is there a way to do this?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm afraid specifying that I need 1 cluster node with 8 MPI prcesses
</span><br>
<span class="quotelev3">&gt;&gt;&gt; will result in OS distributing these 8 processes among 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processors forming the node, and this is not what I'm after.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Z Koza
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ______________________________**_________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/**mailman/listinfo.cgi/users<http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/**mailman/listinfo.cgi/users<http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; ______________________________**_________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/**mailman/listinfo.cgi/users<http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/**mailman/listinfo.cgi/users<http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20075/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20076.php">Yong Qin: "Re: [OMPI users] OMPI 1.6.x Hang on khugepaged 100% CPU time"</a>
<li><strong>Previous message:</strong> <a href="20074.php">Gus Correa: "Re: [OMPI users] what is a &quot;node&quot;?"</a>
<li><strong>In reply to:</strong> <a href="20074.php">Gus Correa: "Re: [OMPI users] what is a &quot;node&quot;?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/09/20089.php">Zbigniew Koza: "Re: [OMPI users] what is a &quot;node&quot;?"</a>
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
