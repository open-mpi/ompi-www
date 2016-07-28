<?
$subject_val = "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 19 16:01:06 2013" -->
<!-- isoreceived="20130319200106" -->
<!-- sent="Tue, 19 Mar 2013 16:00:23 -0400" -->
<!-- isosent="20130319200023" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8" -->
<!-- id="5148C3D7.7040905_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="OF8B56E0EC.65E48B19-ON49257B33.006530D2-49257B33.00698C23_at_jcity.maeda.co.jp" -->
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
<strong>Subject:</strong> Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-19 16:00:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21564.php">tmishima_at_[hidden]: "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8"</a>
<li><strong>Previous message:</strong> <a href="21562.php">tmishima_at_[hidden]: "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8"</a>
<li><strong>In reply to:</strong> <a href="21562.php">tmishima_at_[hidden]: "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21564.php">tmishima_at_[hidden]: "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8"</a>
<li><strong>Reply:</strong> <a href="21564.php">tmishima_at_[hidden]: "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Tetsuya
<br>
<p>Your script that edits $PBS_NODEFILE into a separate hostfile
<br>
is very similar to some that I used here for
<br>
hybrid OpenMP+MPI programs on older versions of OMPI.
<br>
I haven't tried this in 1.6.X,
<br>
but it looks like you did and it works also.
<br>
I haven't tried 1.7 either.
<br>
Since we run production machines,
<br>
I try to stick to the stable versions of OMPI (even numbered:
<br>
1.6.X, 1.4.X, 1.2.X).
<br>
<p>I believe you can get the same effect even if you
<br>
don't edit your $PBS_NODEFILE and let OMPI use it as is.
<br>
Say, if you choose carefully the values in your
<br>
#PBS -l nodes=?:ppn=?
<br>
of your
<br>
$OMP_NUM_THREADS
<br>
and use an mpiexec with --npernode or --cpus-per-proc.
<br>
<p>For instance, for twelve MPI processes, with two threads each,
<br>
on nodes with eight cores each, I would try
<br>
(but I haven't tried!):
<br>
<p>#PBS -l nodes=3:ppn=8
<br>
<p>export $OMP_NUM_THREADS=2
<br>
<p>mpiexec -np 12 -npernode 4
<br>
<p>or perhaps more tightly:
<br>
<p>mpiexec -np 12 --report-bindings --bind-to-core --cpus-per-proc 2
<br>
<p>I hope this helps,
<br>
Gus Correa
<br>
<p><p><p>On 03/19/2013 03:12 PM, tmishima_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Reuti and Gus,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you for your comments.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Our cluster is a little bit heterogeneous, which has nodes with 4, 8, 32
</span><br>
<span class="quotelev1">&gt; cores.
</span><br>
<span class="quotelev1">&gt; I used 8-core nodes for &quot;-l nodes=4:ppn=8&quot; and 4-core nodes for &quot;-l
</span><br>
<span class="quotelev1">&gt; nodes=2:ppn=4&quot;.
</span><br>
<span class="quotelev1">&gt; (strictly speaking, Torque picked up proper nodes.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As I mentioned before, I usually use openmpi-1.6.x, which has no troble
</span><br>
<span class="quotelev1">&gt; against that kind
</span><br>
<span class="quotelev1">&gt; of use. I encountered the issue when I was evaluating openmpi-1.7 to check
</span><br>
<span class="quotelev1">&gt; when we could
</span><br>
<span class="quotelev1">&gt; move on to it, although we have no positive reason to do that at this
</span><br>
<span class="quotelev1">&gt; moment.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As Gus pointed out, I use a script file as shown below for a practical use
</span><br>
<span class="quotelev1">&gt; of openmpi-1.6.x.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #PBS -l nodes=2:ppn=32  # even &quot;-l nodes=1:ppn=32+4:ppn=8&quot; works fine
</span><br>
<span class="quotelev1">&gt; export OMP_NUM_THREADS=4
</span><br>
<span class="quotelev1">&gt; modify $PBS_NODEFILE pbs_hosts # 64 lines are condensed to 16 lines here
</span><br>
<span class="quotelev1">&gt; mpirun -hostfile pbs_hosts -np 16 -cpus-per-proc 4 -report-bindings \
</span><br>
<span class="quotelev1">&gt; -x OMP_NUM_THREADS ./my_program  # 32-core node has 8 numanodes, 8-core
</span><br>
<span class="quotelev1">&gt; node has 2 numanodes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It works well under the combination of openmpi-1.6.x and Torque. The
</span><br>
<span class="quotelev1">&gt; problem is just
</span><br>
<span class="quotelev1">&gt; openmpi-1.7's behavior.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Tetsuya Mishima
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Tetsuya Mishima
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Mpiexec offers you a number of possibilities that you could try:
</span><br>
<span class="quotelev2">&gt;&gt; --bynode,
</span><br>
<span class="quotelev2">&gt;&gt; --pernode,
</span><br>
<span class="quotelev2">&gt;&gt; --npernode,
</span><br>
<span class="quotelev2">&gt;&gt; --bysocket,
</span><br>
<span class="quotelev2">&gt;&gt; --bycore,
</span><br>
<span class="quotelev2">&gt;&gt; --cpus-per-proc,
</span><br>
<span class="quotelev2">&gt;&gt; --cpus-per-rank,
</span><br>
<span class="quotelev2">&gt;&gt; --rankfile
</span><br>
<span class="quotelev2">&gt;&gt; and more.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Most likely one or more of them will fit your needs.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; There are also associated flags to bind processes to cores,
</span><br>
<span class="quotelev2">&gt;&gt; to sockets, etc, to report the bindings, and so on.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Check the mpiexec man page for details.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Nevertheless, I am surprised that modifying the
</span><br>
<span class="quotelev2">&gt;&gt; $PBS_NODEFILE doesn't work for you in OMPI 1.7.
</span><br>
<span class="quotelev2">&gt;&gt; I have done this many times in older versions of OMPI.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Would it work for you to go back to the stable OMPI 1.6.X,
</span><br>
<span class="quotelev2">&gt;&gt; or does it lack any special feature that you need?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I hope this helps,
</span><br>
<span class="quotelev2">&gt;&gt; Gus Correa
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 03/19/2013 03:00 AM, tmishima_at_[hidden] wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Jeff,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I didn't have much time to test this morning. So, I checked it again
</span><br>
<span class="quotelev3">&gt;&gt;&gt; now. Then, the trouble seems to depend on the number of nodes to use.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This works(nodes&lt;   4):
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpiexec -bynode -np 4 ./my_program&amp;&amp;     #PBS -l nodes=2:ppn=8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (OMP_NUM_THREADS=4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This causes error(nodes&gt;= 4):
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpiexec -bynode -np 8 ./my_program&amp;&amp;     #PBS -l nodes=4:ppn=8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (OMP_NUM_THREADS=4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Tetsuya Mishima
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Oy; that's weird.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'm afraid we're going to have to wait for Ralph to answer why that is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; happening -- sorry!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Mar 18, 2013, at 4:45 PM,&lt;tmishima_at_[hidden]&gt;   wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi Correa and Jeff,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thank you for your comments. I quickly checked your suggestion.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; As a result, my simple example case worked well.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; export OMP_NUM_THREADS=4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpiexec -bynode -np 2 ./my_program&amp;&amp;     #PBS -l nodes=2:ppn=4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; But, practical case that more than 1 process was allocated to a node
</span><br>
<span class="quotelev3">&gt;&gt;&gt; like
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; below did not work.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; export OMP_NUM_THREADS=4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpiexec -bynode -np 4 ./my_program&amp;&amp;     #PBS -l nodes=2:ppn=8
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The error message is as follows:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [node08.cluster:11946] [[30666,0],3] ORTE_ERROR_LOG: A message is
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; attempting to be sent to a process whose contact infor
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mation is unknown in file rml_oob_send.c at line 316
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [node08.cluster:11946] [[30666,0],3] unable to find address for
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [[30666,0],1]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [node08.cluster:11946] [[30666,0],3] ORTE_ERROR_LOG: A message is
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; attempting to be sent to a process whose contact infor
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mation is unknown in file base/grpcomm_base_rollup.c at line 123
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Here is our openmpi configuration:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ./configure \
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --prefix=/home/mishima/opt/mpi/openmpi-1.7rc8-pgi12.9 \
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --with-tm \
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --with-verbs \
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --disable-ipv6 \
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; CC=pgcc CFLAGS=&quot;-fast -tp k8-64e&quot; \
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; CXX=pgCC CXXFLAGS=&quot;-fast -tp k8-64e&quot; \
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; F77=pgfortran FFLAGS=&quot;-fast -tp k8-64e&quot; \
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; FC=pgfortran FCFLAGS=&quot;-fast -tp k8-64e&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Tetsuya Mishima
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Mar 17, 2013, at 10:55 PM, Gustavo Correa&lt;gus_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; In your example, have you tried not to modify the node file,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; launch two mpi processes with mpiexec, and request a &quot;-bynode&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; distribution of processes:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; mpiexec -bynode -np 2 ./my_program
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; This should work in 1.7, too (I use these kinds of options with
</span><br>
<span class="quotelev1">&gt; SLURM
</span><br>
<span class="quotelev3">&gt;&gt;&gt; all
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the time).
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; However, we should probably verify that the hostfile functionality
</span><br>
<span class="quotelev1">&gt; in
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; batch jobs hasn't been broken in 1.7, too, because I'm pretty sure
</span><br>
<span class="quotelev1">&gt; that
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; what you described should work.  However, Ralph, our
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; run-time guy, is on vacation this week.  There might be a delay in
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; checking into this.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev2">&gt;&gt;
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
<li><strong>Next message:</strong> <a href="21564.php">tmishima_at_[hidden]: "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8"</a>
<li><strong>Previous message:</strong> <a href="21562.php">tmishima_at_[hidden]: "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8"</a>
<li><strong>In reply to:</strong> <a href="21562.php">tmishima_at_[hidden]: "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21564.php">tmishima_at_[hidden]: "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8"</a>
<li><strong>Reply:</strong> <a href="21564.php">tmishima_at_[hidden]: "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8"</a>
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
