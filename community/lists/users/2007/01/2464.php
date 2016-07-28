<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jan 16 07:06:32 2007" -->
<!-- isoreceived="20070116120632" -->
<!-- sent="Tue, 16 Jan 2007 12:06:26 +0000" -->
<!-- isosent="20070116120626" -->
<!-- name="Marcelo Maia Garcia" -->
<!-- email="marcelomgarcia_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI 1.2b2 and SGE" -->
<!-- id="d576661e0701160406o4050223bt7bc37c2e3021bb4c_at_mail.gmail.com" -->
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
<strong>From:</strong> Marcelo Maia Garcia (<em>marcelomgarcia_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-01-16 07:06:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2465.php">Brian W. Barrett: "Re: [OMPI users] OpenMPI on HPUX?"</a>
<li><strong>Previous message:</strong> <a href="2463.php">Bert Wesarg: "[OMPI users] MPI_Allreduce.3: wrong description for use of MPI_IN_PLACE"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi.
<br>
<p>&nbsp;&nbsp;I am having some problems in integrating OpenMPI 1.2b2 with SGE.
<br>
<p>&nbsp;&nbsp;I running the DLPOLY3 code made with pathscale 2.5 compiler suite, the OS
<br>
is Red Hat EL4, and network is Gigabit.
<br>
<p>&nbsp;&nbsp;When I run interactively (mpirun -np 64 --hostfile ./nodes16_slots4.txt
<br>
(...)/DLPOLY.Y, everything goes fine. But when I use SGE I got the following
<br>
error:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Signal:7 info.si_errno:0(Success) si_code:2()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Failing at addr:0x4a2823
<br>
&nbsp;&nbsp;&nbsp;(...)
<br>
&nbsp;&nbsp;[node023:07187] mca_btl_tcp_frag_send: writev failed with errno=104
<br>
&nbsp;&nbsp;[node067:06766] mca_btl_tcp_frag_send: writev failed with errno=104
<br>
&nbsp;&nbsp;[node023:07185] mca_btl_tcp_frag_send: writev failed with errno=104
<br>
&nbsp;&nbsp;[node067:06764] mca_btl_tcp_frag_send: writev failed with errno=104
<br>
I configured de PE as suggest by the list[1], except for the
<br>
&quot;allocation_rule&quot; that I changed to &quot;$fill_up&quot; , like O. Letho[2].
<br>
<p>&nbsp;&nbsp;The ompi_info reports the gridengine correctly
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[ocf_at_master TEST2]$ ompi_info | grep gridengine
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ras: gridengine (MCA v1.0, API v1.3, Component v1.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pls: gridengine (MCA v1.0, API v1.3, Component v1.2)
<br>
and the queue has the PE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[ocf_at_master TEST2]$ qconf -sq ocf.q | grep pe_list
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pe_list               mpich-uni mpich-multi openmp
<br>
<p>&nbsp;&nbsp;Does anyone has/had similar problems with SGE?
<br>
<p>&nbsp;&nbsp;Thanks for your attention.
<br>
<p>Marcelo Garcia
<br>
[1] <a href="http://www.open-mpi.org/faq/?category=running#run-n1ge-or-sge">http://www.open-mpi.org/faq/?category=running#run-n1ge-or-sge</a>
<br>
[2] <a href="http://staff.csc.fi/~oplehto/openmpi-gridengine/">http://staff.csc.fi/~oplehto/openmpi-gridengine/</a>
<br>
=========== PE openmp ===========================================
<br>
[ocf_at_master TEST2]$ qconf -sp openmp
<br>
pe_name           openmp
<br>
slots             300
<br>
user_lists        NONE
<br>
xuser_lists       NONE
<br>
start_proc_args   /bin/true
<br>
stop_proc_args    /bin/true
<br>
allocation_rule   $fill_up
<br>
control_slaves    TRUE
<br>
job_is_first_task FALSE
<br>
urgency_slots     min
<br>
=========== PE openmp ===========================================
<br>
<p>=========== submission script  ===========================================
<br>
[ocf_at_master TEST2]$ more test2.sh
<br>
#!/bin/bash
<br>
#$ -S /bin/bash
<br>
#$ -N DLPOLY2
<br>
#$ -q ocf.q
<br>
#$ -cwd
<br>
#$ -o dlpoly.o
<br>
#$ -e dlpoly.e
<br>
#$ -pe openmp 64
<br>
#$ -V
<br>
<p># This does not make difference, Allways aborts.
<br>
export PATH=/home/ocf/ompi/bin:${PATH}
<br>
export LD_LIBRARY_PATH=/home/ocf/ompi/lib:${LD_LIBRARY_PATH}
<br>
<p>DLPOLY_TEST=/home/ocf/SRIFBENCH/DLPOLY3/data/TEST2
<br>
MPIRUN=/home/ocf/ompi/bin/mpirun
<br>
<p>cd ${DLPOLY_TEST}
<br>
${MPIRUN} -np $NSLOTS /home/ocf/SRIFBENCH/DLPOLY3/execute/DLPOLY.Y
<br>
=========== submission script  ===========================================
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2464/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2465.php">Brian W. Barrett: "Re: [OMPI users] OpenMPI on HPUX?"</a>
<li><strong>Previous message:</strong> <a href="2463.php">Bert Wesarg: "[OMPI users] MPI_Allreduce.3: wrong description for use of MPI_IN_PLACE"</a>
<!-- nextthread="start" -->
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
