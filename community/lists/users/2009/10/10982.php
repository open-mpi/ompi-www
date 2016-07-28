<?
$subject_val = "[OMPI users]  checkpoint opempi-1.3.3+sge62";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 28 09:43:23 2009" -->
<!-- isoreceived="20091028134323" -->
<!-- sent="Wed, 28 Oct 2009 14:41:14 +0100" -->
<!-- isosent="20091028134114" -->
<!-- name="Sergio D&#237;az" -->
<!-- email="sdiaz_at_[hidden]" -->
<!-- subject="[OMPI users]  checkpoint opempi-1.3.3+sge62" -->
<!-- id="4AE849FA.4040102_at_cesga.es" -->
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
<strong>Subject:</strong> [OMPI users]  checkpoint opempi-1.3.3+sge62<br>
<strong>From:</strong> Sergio D&#237;az (<em>sdiaz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-28 09:41:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10983.php">nam kim: "Re: [OMPI users] compiling openmpi with mixed CISCO infiniband. cardand Mellanox infiniband cards."</a>
<li><strong>Previous message:</strong> <a href="10981.php">Jeff Squyres: "Re: [OMPI users] MPI-3 Fortran feedback"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/11/11053.php">Sergio Díaz: "Re: [OMPI users] checkpoint opempi-1.3.3+sge62"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/11/11053.php">Sergio Díaz: "Re: [OMPI users] checkpoint opempi-1.3.3+sge62"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/11/11088.php">Josh Hursey: "Re: [OMPI users] checkpoint opempi-1.3.3+sge62"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I have achieved the checkpoint of an easy program without SGE. Now, I'm 
<br>
trying to do the integration openmpi+sge but I have some problems... 
<br>
When I try to do checkpoint of the mpirun PID, I got an error similar to 
<br>
the error gotten when the PID doesn't exit. The example below.
<br>
<p>Any ideas?
<br>
Somebody have a script to do it automatic with SGE?. For example I have 
<br>
one to do checkpoint each X seconds with BLCR and non-mpi jobs. It is 
<br>
launched by SGE if you have configured the queue and the ckpt environment.
<br>
<p>Is it possible choose the name of the ckpt folder when you do the 
<br>
ompi-checkpoint? I can't find the option to do it.
<br>
<p><p>Regards,
<br>
Sergio
<br>
<p><p>--------------------------------
<br>
<p>[sdiaz_at_compute-3-17 ~]$ ps auxf
<br>
....
<br>
root     20044  0.0  0.0  4468 1224 ?        S    13:28   0:00  \_ 
<br>
sge_shepherd-2645150 -bg
<br>
sdiaz    20072  0.0  0.0 53172 1212 ?        Ss   13:28   0:00      \_ 
<br>
-bash /opt/cesga/sge62/default/spool/compute-3-17/job_scripts/2645150
<br>
sdiaz    20112  0.2  0.0 41028 2480 ?        S    13:28   0:00          
<br>
\_ mpirun -np 2 -am ft-enable-cr pi3
<br>
sdiaz    20113  0.0  0.0 36484 1824 ?        Sl   13:28   
<br>
0:00              \_ /opt/cesga/sge62/bin/lx24-x86/qrsh -inherit 
<br>
-nostdin -V compute-3-18..........
<br>
sdiaz    20116  1.2  0.0 99464 4616 ?        Sl   13:28   
<br>
0:00              \_ pi3
<br>
<p><p>[sdiaz_at_compute-3-17 ~]$ ompi-checkpoint 20112
<br>
[compute-3-17.local:20124] HNP with PID 20112 Not found!
<br>
<p>[sdiaz_at_compute-3-17 ~]$ ompi-checkpoint -s 20112
<br>
[compute-3-17.local:20135] HNP with PID 20112 Not found!
<br>
<p>[sdiaz_at_compute-3-17 ~]$ ompi-checkpoint -s --term 20112
<br>
[compute-3-17.local:20136] HNP with PID 20112 Not found!
<br>
<p>[sdiaz_at_compute-3-17 ~]$ ompi-checkpoint --hnp-pid 20112
<br>
--------------------------------------------------------------------------
<br>
ompi-checkpoint PID_OF_MPIRUN
<br>
&nbsp;&nbsp;Open MPI Checkpoint Tool
<br>
<p>&nbsp;&nbsp;&nbsp;-am &lt;arg0&gt;            Aggregate MCA parameter set file list
<br>
&nbsp;&nbsp;&nbsp;-gmca|--gmca &lt;arg0&gt; &lt;arg1&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pass global MCA parameters that are applicable to
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;all contexts (arg0 is the parameter name; arg1 is
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;the parameter value)
<br>
-h|--help                This help message
<br>
&nbsp;&nbsp;&nbsp;--hnp-jobid &lt;arg0&gt;    This should be the jobid of the HNP whose
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;applications you wish to checkpoint.
<br>
&nbsp;&nbsp;&nbsp;--hnp-pid &lt;arg0&gt;      This should be the pid of the mpirun whose
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;applications you wish to checkpoint.
<br>
&nbsp;&nbsp;&nbsp;-mca|--mca &lt;arg0&gt; &lt;arg1&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pass context-specific MCA parameters; they are
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;considered global if --gmca is not used and only
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;one context is specified (arg0 is the parameter
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;name; arg1 is the parameter value)
<br>
-s|--status              Display status messages describing the progression
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;of the checkpoint
<br>
&nbsp;&nbsp;&nbsp;--term                Terminate the application after checkpoint
<br>
-v|--verbose             Be Verbose
<br>
-w|--nowait              Do not wait for the application to finish
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;checkpointing before returning
<br>
<p>--------------------------------------------------------------------------
<br>
[sdiaz_at_compute-3-17 ~]$ exit
<br>
logout
<br>
Connection to c3-17 closed.
<br>
[sdiaz_at_svgd mpi_test]$ ssh c3-18
<br>
Last login: Wed Oct 28 13:24:12 2009 from svgd.local
<br>
-bash-3.00$ ps auxf |grep sdiaz
<br>
<p>sdiaz    14412  0.0  0.0  1888  560 ?        Ss   13:28   0:00      \_ 
<br>
/opt/cesga/sge62/utilbin/lx24-x86/qrsh_starter 
<br>
/opt/cesga/sge62/default/spool/compute-3-18/active_jobs/2645150.1/1.compute-3-18
<br>
sdiaz    14419  0.0  0.0 35728 2260 ?        S    13:28   0:00          
<br>
\_ orted -mca ess env -mca orte_ess_jobid 2295267328 -mca orte_ess_vpid 
<br>
1 -mca orte_ess_num_procs 2 --hnp-uri 
<br>
2295267328.0;tcp://192.168.4.144:36596 -mca mca_base_param_file_prefix 
<br>
ft-enable-cr -mca mca_base_param_file_path 
<br>
/opt/cesga/openmpi-1.3.3/share/openmpi/amca-param-sets:/home_no_usc/cesga/sdiaz/mpi_test 
<br>
-mca mca_base_param_file_path_force /home_no_usc/cesga/sdiaz/mpi_test
<br>
sdiaz    14420  0.0  0.0 99452 4596 ?        Sl   13:28   
<br>
0:00              \_ pi3
<br>
<p><p><p><p><p><pre>
-- 
Sergio D&#237;az Montes
Centro de Supercomputacion de Galicia
Avda. de Vigo. s/n (Campus Sur) 15706 Santiago de Compostela (Spain)
Tel: +34 981 56 98 10 ; Fax: +34 981 59 46 16
email: sdiaz_at_[hidden] ; <a href="http://www.cesga.es/">http://www.cesga.es/</a>
------------------------------------------------
</pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10982/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-10982/image002.jpg" alt="image002.jpg">
<!-- attachment="image002.jpg" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10983.php">nam kim: "Re: [OMPI users] compiling openmpi with mixed CISCO infiniband. cardand Mellanox infiniband cards."</a>
<li><strong>Previous message:</strong> <a href="10981.php">Jeff Squyres: "Re: [OMPI users] MPI-3 Fortran feedback"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/11/11053.php">Sergio Díaz: "Re: [OMPI users] checkpoint opempi-1.3.3+sge62"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/11/11053.php">Sergio Díaz: "Re: [OMPI users] checkpoint opempi-1.3.3+sge62"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/11/11088.php">Josh Hursey: "Re: [OMPI users] checkpoint opempi-1.3.3+sge62"</a>
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
