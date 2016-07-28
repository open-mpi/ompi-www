<?
$subject_val = "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 19 15:13:01 2013" -->
<!-- isoreceived="20130319191301" -->
<!-- sent="Wed, 20 Mar 2013 04:12:38 +0900" -->
<!-- isosent="20130319191238" -->
<!-- name="tmishima_at_[hidden]" -->
<!-- email="tmishima_at_[hidden]" -->
<!-- subject="Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8" -->
<!-- id="OF8B56E0EC.65E48B19-ON49257B33.006530D2-49257B33.00698C23_at_jcity.maeda.co.jp" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="51488ECC.8080200_at_ldeo.columbia.edu" -->
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
<strong>From:</strong> <a href="mailto:tmishima_at_[hidden]?Subject=Re:%20[OMPI%20users]%20modified%20hostfile%20does%20not%20work%20with%20openmpi1.7rc8"><em>tmishima_at_[hidden]</em></a><br>
<strong>Date:</strong> 2013-03-19 15:12:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21563.php">Gus Correa: "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8"</a>
<li><strong>Previous message:</strong> <a href="21561.php">Gus Correa: "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8"</a>
<li><strong>In reply to:</strong> <a href="21561.php">Gus Correa: "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21563.php">Gus Correa: "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8"</a>
<li><strong>Reply:</strong> <a href="21563.php">Gus Correa: "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Reuti and Gus,
<br>
<p>Thank you for your comments.
<br>
<p>Our cluster is a little bit heterogeneous, which has nodes with 4, 8, 32
<br>
cores.
<br>
I used 8-core nodes for &quot;-l nodes=4:ppn=8&quot; and 4-core nodes for &quot;-l
<br>
nodes=2:ppn=4&quot;.
<br>
(strictly speaking, Torque picked up proper nodes.)
<br>
<p>As I mentioned before, I usually use openmpi-1.6.x, which has no troble
<br>
against that kind
<br>
of use. I encountered the issue when I was evaluating openmpi-1.7 to check
<br>
when we could
<br>
move on to it, although we have no positive reason to do that at this
<br>
moment.
<br>
<p>As Gus pointed out, I use a script file as shown below for a practical use
<br>
of openmpi-1.6.x.
<br>
<p>#PBS -l nodes=2:ppn=32  # even &quot;-l nodes=1:ppn=32+4:ppn=8&quot; works fine
<br>
export OMP_NUM_THREADS=4
<br>
modify $PBS_NODEFILE pbs_hosts # 64 lines are condensed to 16 lines here
<br>
mpirun -hostfile pbs_hosts -np 16 -cpus-per-proc 4 -report-bindings \
<br>
-x OMP_NUM_THREADS ./my_program  # 32-core node has 8 numanodes, 8-core
<br>
node has 2 numanodes
<br>
<p>It works well under the combination of openmpi-1.6.x and Torque. The
<br>
problem is just
<br>
openmpi-1.7's behavior.
<br>
<p>Regards,
<br>
Tetsuya Mishima
<br>
<p><span class="quotelev1">&gt; Hi Tetsuya Mishima
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Mpiexec offers you a number of possibilities that you could try:
</span><br>
<span class="quotelev1">&gt; --bynode,
</span><br>
<span class="quotelev1">&gt; --pernode,
</span><br>
<span class="quotelev1">&gt; --npernode,
</span><br>
<span class="quotelev1">&gt; --bysocket,
</span><br>
<span class="quotelev1">&gt; --bycore,
</span><br>
<span class="quotelev1">&gt; --cpus-per-proc,
</span><br>
<span class="quotelev1">&gt; --cpus-per-rank,
</span><br>
<span class="quotelev1">&gt; --rankfile
</span><br>
<span class="quotelev1">&gt; and more.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Most likely one or more of them will fit your needs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There are also associated flags to bind processes to cores,
</span><br>
<span class="quotelev1">&gt; to sockets, etc, to report the bindings, and so on.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Check the mpiexec man page for details.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Nevertheless, I am surprised that modifying the
</span><br>
<span class="quotelev1">&gt; $PBS_NODEFILE doesn't work for you in OMPI 1.7.
</span><br>
<span class="quotelev1">&gt; I have done this many times in older versions of OMPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Would it work for you to go back to the stable OMPI 1.6.X,
</span><br>
<span class="quotelev1">&gt; or does it lack any special feature that you need?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I hope this helps,
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 03/19/2013 03:00 AM, tmishima_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi Jeff,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I didn't have much time to test this morning. So, I checked it again
</span><br>
<span class="quotelev2">&gt; &gt; now. Then, the trouble seems to depend on the number of nodes to use.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This works(nodes&lt;  4):
</span><br>
<span class="quotelev2">&gt; &gt; mpiexec -bynode -np 4 ./my_program&amp;&amp;    #PBS -l nodes=2:ppn=8
</span><br>
<span class="quotelev2">&gt; &gt; (OMP_NUM_THREADS=4)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This causes error(nodes&gt;= 4):
</span><br>
<span class="quotelev2">&gt; &gt; mpiexec -bynode -np 8 ./my_program&amp;&amp;    #PBS -l nodes=4:ppn=8
</span><br>
<span class="quotelev2">&gt; &gt; (OMP_NUM_THREADS=4)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Regards,
</span><br>
<span class="quotelev2">&gt; &gt; Tetsuya Mishima
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Oy; that's weird.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I'm afraid we're going to have to wait for Ralph to answer why that is
</span><br>
<span class="quotelev2">&gt; &gt; happening -- sorry!
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Mar 18, 2013, at 4:45 PM,&lt;tmishima_at_[hidden]&gt;  wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Hi Correa and Jeff,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Thank you for your comments. I quickly checked your suggestion.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; As a result, my simple example case worked well.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; export OMP_NUM_THREADS=4
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; mpiexec -bynode -np 2 ./my_program&amp;&amp;    #PBS -l nodes=2:ppn=4
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; But, practical case that more than 1 process was allocated to a node
</span><br>
<span class="quotelev2">&gt; &gt; like
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; below did not work.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; export OMP_NUM_THREADS=4
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; mpiexec -bynode -np 4 ./my_program&amp;&amp;    #PBS -l nodes=2:ppn=8
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; The error message is as follows:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [node08.cluster:11946] [[30666,0],3] ORTE_ERROR_LOG: A message is
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; attempting to be sent to a process whose contact infor
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; mation is unknown in file rml_oob_send.c at line 316
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [node08.cluster:11946] [[30666,0],3] unable to find address for
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [[30666,0],1]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [node08.cluster:11946] [[30666,0],3] ORTE_ERROR_LOG: A message is
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; attempting to be sent to a process whose contact infor
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; mation is unknown in file base/grpcomm_base_rollup.c at line 123
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Here is our openmpi configuration:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; ./configure \
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; --prefix=/home/mishima/opt/mpi/openmpi-1.7rc8-pgi12.9 \
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; --with-tm \
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; --with-verbs \
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; --disable-ipv6 \
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; CC=pgcc CFLAGS=&quot;-fast -tp k8-64e&quot; \
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; CXX=pgCC CXXFLAGS=&quot;-fast -tp k8-64e&quot; \
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; F77=pgfortran FFLAGS=&quot;-fast -tp k8-64e&quot; \
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; FC=pgfortran FCFLAGS=&quot;-fast -tp k8-64e&quot;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Tetsuya Mishima
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; On Mar 17, 2013, at 10:55 PM, Gustavo Correa&lt;gus_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; In your example, have you tried not to modify the node file,
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; launch two mpi processes with mpiexec, and request a &quot;-bynode&quot;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; distribution of processes:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; mpiexec -bynode -np 2 ./my_program
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; This should work in 1.7, too (I use these kinds of options with
</span><br>
SLURM
<br>
<span class="quotelev2">&gt; &gt; all
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; the time).
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; However, we should probably verify that the hostfile functionality
</span><br>
in
<br>
<span class="quotelev4">&gt; &gt;&gt;&gt; batch jobs hasn't been broken in 1.7, too, because I'm pretty sure
</span><br>
that
<br>
<span class="quotelev4">&gt; &gt;&gt;&gt; what you described should work.  However, Ralph, our
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; run-time guy, is on vacation this week.  There might be a delay in
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; checking into this.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt; &gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21563.php">Gus Correa: "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8"</a>
<li><strong>Previous message:</strong> <a href="21561.php">Gus Correa: "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8"</a>
<li><strong>In reply to:</strong> <a href="21561.php">Gus Correa: "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21563.php">Gus Correa: "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8"</a>
<li><strong>Reply:</strong> <a href="21563.php">Gus Correa: "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8"</a>
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
