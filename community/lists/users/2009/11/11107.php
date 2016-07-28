<?
$subject_val = "Re: [OMPI users] checkpoint opempi-1.3.3+sge62";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  9 08:34:54 2009" -->
<!-- isoreceived="20091109133454" -->
<!-- sent="Mon, 09 Nov 2009 14:33:59 +0100" -->
<!-- isosent="20091109133359" -->
<!-- name="Sergio D&#237;az" -->
<!-- email="sdiaz_at_[hidden]" -->
<!-- subject="Re: [OMPI users] checkpoint opempi-1.3.3+sge62" -->
<!-- id="4AF81A47.9070208_at_cesga.es" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C86CDED3-2DA4-407F-ADD4-273EBC788AF3_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] checkpoint opempi-1.3.3+sge62<br>
<strong>From:</strong> Sergio D&#237;az (<em>sdiaz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-09 08:33:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11108.php">Martin Siegert: "Re: [OMPI users] sending/receiving large buffers"</a>
<li><strong>Previous message:</strong> <a href="11106.php">Ashley Pittman: "Re: [OMPI users] sending/receiving large buffers"</a>
<li><strong>In reply to:</strong> <a href="11088.php">Josh Hursey: "Re: [OMPI users] checkpoint opempi-1.3.3+sge62"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11164.php">Josh Hursey: "Re: [OMPI users] checkpoint opempi-1.3.3+sge62"</a>
<li><strong>Reply:</strong> <a href="11164.php">Josh Hursey: "Re: [OMPI users] checkpoint opempi-1.3.3+sge62"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Josh,
<br>
<p>The OpenMPI version is 1.3.3.
<br>
<p>The command ompi-ps doesn't work.
<br>
<p>[root_at_compute-3-18 ~]# ompi-ps -j 2726959 -p 16241
<br>
[root_at_compute-3-18 ~]# ompi-ps -v -j 2726959 -p 16241
<br>
[compute-3-18.local:16254] orte_ps: Acquiring list of HNPs and setting 
<br>
contact info into RML...
<br>
[root_at_compute-3-18 ~]# ompi-ps -v -j 2726959
<br>
[compute-3-18.local:16255] orte_ps: Acquiring list of HNPs and setting 
<br>
contact info into RML...
<br>
<p>[root_at_compute-3-18 ~]# ps uaxf | grep sdiaz
<br>
root     16260  0.0  0.0 51084  680 pts/0    S+   13:38   0:00          
<br>
\_ grep sdiaz
<br>
sdiaz    16203  0.0  0.0 53164 1220 ?        Ss   13:37   0:00      \_ 
<br>
-bash /opt/cesga/sge62/default/spool/compute-3-18/job_scripts/2726959
<br>
sdiaz    16241  0.0  0.0 41028 2480 ?        S    13:37   0:00          
<br>
\_ mpirun -np 2 -am ft-enable-cr ./pi3
<br>
sdiaz    16242  0.0  0.0 36484 1840 ?        Sl   13:37   
<br>
0:00              \_ /opt/cesga/sge62/bin/lx24-x86/qrsh -inherit 
<br>
-nostdin -V compute-3-17.local  orted -mca ess env -mca orte_ess_jobid 
<br>
2769879040 -mca orte_ess_vpid 1 -mca orte_ess_num_procs 2 --hnp-uri 
<br>
&quot;2769879040.0;tcp://192.168.4.143:57010&quot; -mca mca_base_param_file_prefix 
<br>
ft-enable-cr -mca mca_base_param_file_path 
<br>
/opt/cesga/openmpi-1.3.3/share/openmpi/amca-param-sets:/home_no_usc/cesga/sdiaz/mpi_test 
<br>
-mca mca_base_param_file_path_force /home_no_usc/cesga/sdiaz/mpi_test
<br>
sdiaz    16245  0.1  0.0 99464 4616 ?        Sl   13:37   
<br>
0:00              \_ ./pi3
<br>
<p>[root_at_compute-3-18 ~]# ompi-ps -n c3-18
<br>
[root_at_compute-3-18 ~]# ompi-ps -n compute-3-18
<br>
[root_at_compute-3-18 ~]# ompi-ps -n
<br>
<p>There is not directory on the /tmp of the node. However, if the 
<br>
application is run without SGE, the directory is created but if I do 
<br>
ompi-ps -j MPIRUN_PID, it seems hanged and I interrupt it. Does it take 
<br>
long time?
<br>
what means the option -j of ompi-ps command? isn't it related to a batch 
<br>
system(like sge, condor...), is it?
<br>
<p>Thanks for the ticket. I will follow it.
<br>
<p>Talking with Alan, I realized that there are few transport protocols 
<br>
that are supported. And maybe it is the problem. Currently, SGE is using 
<br>
qrsh to expand mpi process. I can change this protocol and use ssh. So, 
<br>
I'm going to test it this afternoon and I will comment to you the results.
<br>
<p>Regards,
<br>
Sergio
<br>
<p><p>Josh Hursey escribi&#243;:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 28, 2009, at 7:41 AM, Sergio D&#237;az wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have achieved the checkpoint of an easy program without SGE. Now, 
</span><br>
<span class="quotelev2">&gt;&gt; I'm trying to do the integration openmpi+sge but I have some 
</span><br>
<span class="quotelev2">&gt;&gt; problems... When I try to do checkpoint of the mpirun PID, I got an 
</span><br>
<span class="quotelev2">&gt;&gt; error similar to the error gotten when the PID doesn't exit. The 
</span><br>
<span class="quotelev2">&gt;&gt; example below.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I do not have any experience with the SGE environment, so I suspect 
</span><br>
<span class="quotelev1">&gt; that there may something 'special' about the environment that is 
</span><br>
<span class="quotelev1">&gt; tripping up the ompi-checkpoint tool.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; First of all, what version of Open MPI are you using?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Somethings to check:
</span><br>
<span class="quotelev1">&gt;  - Does 'ompi-ps' work when your application is running?
</span><br>
<span class="quotelev1">&gt;  - Is there an /tmp/openmpi-sessions-* directory on the node where 
</span><br>
<span class="quotelev1">&gt; mpirun is currently running? This directory contains information on 
</span><br>
<span class="quotelev1">&gt; how to connect to the mpirun process from an external tool, if it's 
</span><br>
<span class="quotelev1">&gt; missing then this could be the cause of the problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any ideas?
</span><br>
<span class="quotelev2">&gt;&gt; Somebody have a script to do it automatic with SGE?. For example I 
</span><br>
<span class="quotelev2">&gt;&gt; have one to do checkpoint each X seconds with BLCR and non-mpi jobs. 
</span><br>
<span class="quotelev2">&gt;&gt; It is launched by SGE if you have configured the queue and the ckpt 
</span><br>
<span class="quotelev2">&gt;&gt; environment.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I do not know of any integration of the Open MPI checkpointing work 
</span><br>
<span class="quotelev1">&gt; with SGE at the moment.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As far as time triggered checkpointing, I have a feature ticket open 
</span><br>
<span class="quotelev1">&gt; about this:
</span><br>
<span class="quotelev1">&gt;   <a href="https://svn.open-mpi.org/trac/ompi/ticket/1961">https://svn.open-mpi.org/trac/ompi/ticket/1961</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It is not available yet, but in the works.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is it possible choose the name of the ckpt folder when you do the 
</span><br>
<span class="quotelev2">&gt;&gt; ompi-checkpoint? I can't find the option to do it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Not at this time. Though I could see it as a useful feature, and 
</span><br>
<span class="quotelev1">&gt; shouldn't be too hard to implement. I filed a ticket if you want to 
</span><br>
<span class="quotelev1">&gt; follow the progress:
</span><br>
<span class="quotelev1">&gt;   <a href="https://svn.open-mpi.org/trac/ompi/ticket/2098">https://svn.open-mpi.org/trac/ompi/ticket/2098</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; Sergio
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [sdiaz_at_compute-3-17 ~]$ ps auxf
</span><br>
<span class="quotelev2">&gt;&gt; ....
</span><br>
<span class="quotelev2">&gt;&gt; root     20044  0.0  0.0  4468 1224 ?        S    13:28   0:00  \_ 
</span><br>
<span class="quotelev2">&gt;&gt; sge_shepherd-2645150 -bg
</span><br>
<span class="quotelev2">&gt;&gt; sdiaz    20072  0.0  0.0 53172 1212 ?        Ss   13:28   0:00      
</span><br>
<span class="quotelev2">&gt;&gt; \_ -bash /opt/cesga/sge62/default/spool/compute-3-17/job_scripts/2645150
</span><br>
<span class="quotelev2">&gt;&gt; sdiaz    20112  0.2  0.0 41028 2480 ?        S    13:28   
</span><br>
<span class="quotelev2">&gt;&gt; 0:00          \_ mpirun -np 2 -am ft-enable-cr pi3
</span><br>
<span class="quotelev2">&gt;&gt; sdiaz    20113  0.0  0.0 36484 1824 ?        Sl   13:28   
</span><br>
<span class="quotelev2">&gt;&gt; 0:00              \_ /opt/cesga/sge62/bin/lx24-x86/qrsh -inherit 
</span><br>
<span class="quotelev2">&gt;&gt; -nostdin -V compute-3-18..........
</span><br>
<span class="quotelev2">&gt;&gt; sdiaz    20116  1.2  0.0 99464 4616 ?        Sl   13:28   
</span><br>
<span class="quotelev2">&gt;&gt; 0:00              \_ pi3
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [sdiaz_at_compute-3-17 ~]$ ompi-checkpoint 20112
</span><br>
<span class="quotelev2">&gt;&gt; [compute-3-17.local:20124] HNP with PID 20112 Not found!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [sdiaz_at_compute-3-17 ~]$ ompi-checkpoint -s 20112
</span><br>
<span class="quotelev2">&gt;&gt; [compute-3-17.local:20135] HNP with PID 20112 Not found!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [sdiaz_at_compute-3-17 ~]$ ompi-checkpoint -s --term 20112
</span><br>
<span class="quotelev2">&gt;&gt; [compute-3-17.local:20136] HNP with PID 20112 Not found!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [sdiaz_at_compute-3-17 ~]$ ompi-checkpoint --hnp-pid 20112
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ompi-checkpoint PID_OF_MPIRUN
</span><br>
<span class="quotelev2">&gt;&gt;   Open MPI Checkpoint Tool
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    -am &lt;arg0&gt;            Aggregate MCA parameter set file list
</span><br>
<span class="quotelev2">&gt;&gt;    -gmca|--gmca &lt;arg0&gt; &lt;arg1&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                          Pass global MCA parameters that are 
</span><br>
<span class="quotelev2">&gt;&gt; applicable to
</span><br>
<span class="quotelev2">&gt;&gt;                          all contexts (arg0 is the parameter name; 
</span><br>
<span class="quotelev2">&gt;&gt; arg1 is
</span><br>
<span class="quotelev2">&gt;&gt;                          the parameter value)
</span><br>
<span class="quotelev2">&gt;&gt; -h|--help                This help message
</span><br>
<span class="quotelev2">&gt;&gt;    --hnp-jobid &lt;arg0&gt;    This should be the jobid of the HNP whose
</span><br>
<span class="quotelev2">&gt;&gt;                          applications you wish to checkpoint.
</span><br>
<span class="quotelev2">&gt;&gt;    --hnp-pid &lt;arg0&gt;      This should be the pid of the mpirun whose
</span><br>
<span class="quotelev2">&gt;&gt;                          applications you wish to checkpoint.
</span><br>
<span class="quotelev2">&gt;&gt;    -mca|--mca &lt;arg0&gt; &lt;arg1&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                          Pass context-specific MCA parameters; they are
</span><br>
<span class="quotelev2">&gt;&gt;                          considered global if --gmca is not used and 
</span><br>
<span class="quotelev2">&gt;&gt; only
</span><br>
<span class="quotelev2">&gt;&gt;                          one context is specified (arg0 is the parameter
</span><br>
<span class="quotelev2">&gt;&gt;                          name; arg1 is the parameter value)
</span><br>
<span class="quotelev2">&gt;&gt; -s|--status              Display status messages describing the 
</span><br>
<span class="quotelev2">&gt;&gt; progression
</span><br>
<span class="quotelev2">&gt;&gt;                          of the checkpoint
</span><br>
<span class="quotelev2">&gt;&gt;    --term                Terminate the application after checkpoint
</span><br>
<span class="quotelev2">&gt;&gt; -v|--verbose             Be Verbose
</span><br>
<span class="quotelev2">&gt;&gt; -w|--nowait              Do not wait for the application to finish
</span><br>
<span class="quotelev2">&gt;&gt;                          checkpointing before returning
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [sdiaz_at_compute-3-17 ~]$ exit
</span><br>
<span class="quotelev2">&gt;&gt; logout
</span><br>
<span class="quotelev2">&gt;&gt; Connection to c3-17 closed.
</span><br>
<span class="quotelev2">&gt;&gt; [sdiaz_at_svgd mpi_test]$ ssh c3-18
</span><br>
<span class="quotelev2">&gt;&gt; Last login: Wed Oct 28 13:24:12 2009 from svgd.local
</span><br>
<span class="quotelev2">&gt;&gt; -bash-3.00$ ps auxf |grep sdiaz
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; sdiaz    14412  0.0  0.0  1888  560 ?        Ss   13:28   0:00      
</span><br>
<span class="quotelev2">&gt;&gt; \_ /opt/cesga/sge62/utilbin/lx24-x86/qrsh_starter 
</span><br>
<span class="quotelev2">&gt;&gt; /opt/cesga/sge62/default/spool/compute-3-18/active_jobs/2645150.1/1.compute-3-18 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; sdiaz    14419  0.0  0.0 35728 2260 ?        S    13:28   
</span><br>
<span class="quotelev2">&gt;&gt; 0:00          \_ orted -mca ess env -mca orte_ess_jobid 2295267328 
</span><br>
<span class="quotelev2">&gt;&gt; -mca orte_ess_vpid 1 -mca orte_ess_num_procs 2 --hnp-uri 
</span><br>
<span class="quotelev2">&gt;&gt; 2295267328.0;tcp://192.168.4.144:36596 -mca 
</span><br>
<span class="quotelev2">&gt;&gt; mca_base_param_file_prefix ft-enable-cr -mca mca_base_param_file_path 
</span><br>
<span class="quotelev2">&gt;&gt; /opt/cesga/openmpi-1.3.3/share/openmpi/amca-param-sets:/home_no_usc/cesga/sdiaz/mpi_test 
</span><br>
<span class="quotelev2">&gt;&gt; -mca mca_base_param_file_path_force /home_no_usc/cesga/sdiaz/mpi_test
</span><br>
<span class="quotelev2">&gt;&gt; sdiaz    14420  0.0  0.0 99452 4596 ?        Sl   13:28   
</span><br>
<span class="quotelev2">&gt;&gt; 0:00              \_ pi3
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
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Sergio D&#237;az Montes
</span><br>
<span class="quotelev2">&gt;&gt; Centro de Supercomputacion de Galicia
</span><br>
<span class="quotelev2">&gt;&gt; Avda. de Vigo. s/n (Campus Sur) 15706 Santiago de Compostela (Spain)
</span><br>
<span class="quotelev2">&gt;&gt; Tel: +34 981 56 98 10 ; Fax: +34 981 59 46 16
</span><br>
<span class="quotelev2">&gt;&gt; email: sdiaz_at_[hidden] ; <a href="http://www.cesga.es/">http://www.cesga.es/</a>
</span><br>
<span class="quotelev2">&gt;&gt; &lt;image002.jpg&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------
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
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11107/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-11107/image002.jpg" alt="image002.jpg">
<!-- attachment="image002.jpg" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11108.php">Martin Siegert: "Re: [OMPI users] sending/receiving large buffers"</a>
<li><strong>Previous message:</strong> <a href="11106.php">Ashley Pittman: "Re: [OMPI users] sending/receiving large buffers"</a>
<li><strong>In reply to:</strong> <a href="11088.php">Josh Hursey: "Re: [OMPI users] checkpoint opempi-1.3.3+sge62"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11164.php">Josh Hursey: "Re: [OMPI users] checkpoint opempi-1.3.3+sge62"</a>
<li><strong>Reply:</strong> <a href="11164.php">Josh Hursey: "Re: [OMPI users] checkpoint opempi-1.3.3+sge62"</a>
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
