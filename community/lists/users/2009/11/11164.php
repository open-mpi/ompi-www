<?
$subject_val = "Re: [OMPI users] checkpoint opempi-1.3.3+sge62";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 11 12:12:13 2009" -->
<!-- isoreceived="20091111171213" -->
<!-- sent="Wed, 11 Nov 2009 09:12:07 -0800" -->
<!-- isosent="20091111171207" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] checkpoint opempi-1.3.3+sge62" -->
<!-- id="CB5988C7-ABE1-4F0D-8B2C-040B8EADDDB0_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4AF81A47.9070208_at_cesga.es" -->
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
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-11 12:12:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11165.php">Eugene Loh: "Re: [OMPI users] MPI Derived datatype + Persistent communication"</a>
<li><strong>Previous message:</strong> <a href="11163.php">amjad ali: "[OMPI users] MPI Derived datatype + Persistent communication"</a>
<li><strong>In reply to:</strong> <a href="11107.php">Sergio D&#237;az: "Re: [OMPI users] checkpoint opempi-1.3.3+sge62"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11176.php">Sergio Díaz: "Re: [OMPI users] checkpoint opempi-1.3.3+sge62"</a>
<li><strong>Reply:</strong> <a href="11176.php">Sergio Díaz: "Re: [OMPI users] checkpoint opempi-1.3.3+sge62"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 9, 2009, at 5:33 AM, Sergio D&#237;az wrote:
<br>
<p><span class="quotelev1">&gt; Hi Josh,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The OpenMPI version is 1.3.3.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The command ompi-ps doesn't work.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [root_at_compute-3-18 ~]# ompi-ps -j 2726959 -p 16241
</span><br>
<span class="quotelev1">&gt; [root_at_compute-3-18 ~]# ompi-ps -v -j 2726959 -p 16241
</span><br>
<span class="quotelev1">&gt; [compute-3-18.local:16254] orte_ps: Acquiring list of HNPs and setting contact info into RML...
</span><br>
<span class="quotelev1">&gt; [root_at_compute-3-18 ~]# ompi-ps -v -j 2726959
</span><br>
<span class="quotelev1">&gt; [compute-3-18.local:16255] orte_ps: Acquiring list of HNPs and setting contact info into RML...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [root_at_compute-3-18 ~]# ps uaxf | grep sdiaz
</span><br>
<span class="quotelev1">&gt; root     16260  0.0  0.0 51084  680 pts/0    S+   13:38   0:00          \_ grep sdiaz
</span><br>
<span class="quotelev1">&gt; sdiaz    16203  0.0  0.0 53164 1220 ?        Ss   13:37   0:00      \_ -bash /opt/cesga/sge62/default/spool/compute-3-18/job_scripts/2726959
</span><br>
<span class="quotelev1">&gt; sdiaz    16241  0.0  0.0 41028 2480 ?        S    13:37   0:00          \_ mpirun -np 2 -am ft-enable-cr ./pi3
</span><br>
<span class="quotelev1">&gt; sdiaz    16242  0.0  0.0 36484 1840 ?        Sl   13:37   0:00              \_ /opt/cesga/sge62/bin/lx24-x86/qrsh -inherit -nostdin -V compute-3-17.local  orted -mca ess env -mca orte_ess_jobid 2769879040 -mca orte_ess_vpid 1 -mca orte_ess_num_procs 2 --hnp-uri &quot;2769879040.0;tcp://192.168.4.143:57010&quot; -mca mca_base_param_file_prefix ft-enable-cr -mca mca_base_param_file_path /opt/cesga/openmpi-1.3.3/share/openmpi/amca-param-sets:/home_no_usc/cesga/sdiaz/mpi_test -mca mca_base_param_file_path_force /home_no_usc/cesga/sdiaz/mpi_test
</span><br>
<span class="quotelev1">&gt; sdiaz    16245  0.1  0.0 99464 4616 ?        Sl   13:37   0:00              \_ ./pi3
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [root_at_compute-3-18 ~]# ompi-ps -n c3-18
</span><br>
<span class="quotelev1">&gt; [root_at_compute-3-18 ~]# ompi-ps -n compute-3-18
</span><br>
<span class="quotelev1">&gt; [root_at_compute-3-18 ~]# ompi-ps -n
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There is not directory on the /tmp of the node. However, if the application is run without SGE, the directory is created
</span><br>
<p>This may be the core of the problem. ompi-ps and other command line tools (e.g., ompi-checkpoint) look for the Open MPI session directory in /tmp in order to find the connection information to connect to the mpirun process (internally called the HNP or Head Node Process).
<br>
<p>Can you change the location of the temporary directory in SGE? The temporary directory is usually set via an environment variable (e.g., TMPDIR, or TMP). So removing the environment variable or setting it to /tmp might help.
<br>
<p><p><span class="quotelev1">&gt; but if I do ompi-ps -j MPIRUN_PID, it seems hanged and I interrupt it. Does it take long time?
</span><br>
<p>It should not take a long time. It is just querying the mpirun process for state information.
<br>
<p><span class="quotelev1">&gt; what means the option -j of ompi-ps command? isn't it related to a batch system(like sge, condor...), is it?
</span><br>
<p>The '-j' option allows the user to specify the Open MPI jobid. This is completely different than the jobid provided by the batch system. In general, users should not need to specify the -j option. It is useful when you have multiple Open MPI jobs, and want a summary of just one of them.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for the ticket. I will follow it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Talking with Alan, I realized that there are few transport protocols that are supported. And maybe it is the problem. Currently, SGE is using qrsh to expand mpi process. I can change this protocol and use ssh. So, I'm going to test it this afternoon and I will comment to you the results.
</span><br>
<p>Try 'ssh' and see if that helps. I suspect the problem is with the session directory location though.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Sergio
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Josh Hursey escribi&#243;:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 28, 2009, at 7:41 AM, Sergio D&#237;az wrote: 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have achieved the checkpoint of an easy program without SGE. Now, I'm trying to do the integration openmpi+sge but I have some problems... When I try to do checkpoint of the mpirun PID, I got an error similar to the error gotten when the PID doesn't exit. The example below.     
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I do not have any experience with the SGE environment, so I suspect that there may something 'special' about the environment that is tripping up the ompi-checkpoint tool. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; First of all, what version of Open MPI are you using? 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Somethings to check: 
</span><br>
<span class="quotelev2">&gt;&gt;  - Does 'ompi-ps' work when your application is running? 
</span><br>
<span class="quotelev2">&gt;&gt;  - Is there an /tmp/openmpi-sessions-* directory on the node where mpirun is currently running? This directory contains information on how to connect to the mpirun process from an external tool, if it's missing then this could be the cause of the problem. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Any ideas? 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Somebody have a script to do it automatic with SGE?. For example I have one to do checkpoint each X seconds with BLCR and non-mpi jobs. It is launched by SGE if you have configured the queue and the ckpt environment. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I do not know of any integration of the Open MPI checkpointing work with SGE at the moment. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; As far as time triggered checkpointing, I have a feature ticket open about this: 
</span><br>
<span class="quotelev2">&gt;&gt;   <a href="https://svn.open-mpi.org/trac/ompi/ticket/1961">https://svn.open-mpi.org/trac/ompi/ticket/1961</a> 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It is not available yet, but in the works. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is it possible choose the name of the ckpt folder when you do the ompi-checkpoint? I can't find the option to do it. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Not at this time. Though I could see it as a useful feature, and shouldn't be too hard to implement. I filed a ticket if you want to follow the progress: 
</span><br>
<span class="quotelev2">&gt;&gt;   <a href="https://svn.open-mpi.org/trac/ompi/ticket/2098">https://svn.open-mpi.org/trac/ompi/ticket/2098</a> 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- Josh 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Regards, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sergio 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------------- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sdiaz_at_compute-3-17 ~]$ ps auxf 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; .... 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; root     20044  0.0  0.0  4468 1224 ?        S    13:28   0:00  \_ sge_shepherd-2645150 -bg 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sdiaz    20072  0.0  0.0 53172 1212 ?        Ss   13:28   0:00      \_ -bash /opt/cesga/sge62/default/spool/compute-3-17/job_scripts/2645150 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sdiaz    20112  0.2  0.0 41028 2480 ?        S    13:28   0:00          \_ mpirun -np 2 -am ft-enable-cr pi3 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sdiaz    20113  0.0  0.0 36484 1824 ?        Sl   13:28   0:00              \_ /opt/cesga/sge62/bin/lx24-x86/qrsh -inherit -nostdin -V compute-3-18.......... 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sdiaz    20116  1.2  0.0 99464 4616 ?        Sl   13:28   0:00              \_ pi3 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sdiaz_at_compute-3-17 ~]$ ompi-checkpoint 20112 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-3-17.local:20124] HNP with PID 20112 Not found! 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sdiaz_at_compute-3-17 ~]$ ompi-checkpoint -s 20112 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-3-17.local:20135] HNP with PID 20112 Not found! 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sdiaz_at_compute-3-17 ~]$ ompi-checkpoint -s --term 20112 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-3-17.local:20136] HNP with PID 20112 Not found! 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sdiaz_at_compute-3-17 ~]$ ompi-checkpoint --hnp-pid 20112 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi-checkpoint PID_OF_MPIRUN 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Open MPI Checkpoint Tool 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    -am &lt;arg0&gt;            Aggregate MCA parameter set file list 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    -gmca|--gmca &lt;arg0&gt; &lt;arg1&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                          Pass global MCA parameters that are applicable to 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                          all contexts (arg0 is the parameter name; arg1 is 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                          the parameter value) 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -h|--help                This help message 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    --hnp-jobid &lt;arg0&gt;    This should be the jobid of the HNP whose 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                          applications you wish to checkpoint. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    --hnp-pid &lt;arg0&gt;      This should be the pid of the mpirun whose 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                          applications you wish to checkpoint. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    -mca|--mca &lt;arg0&gt; &lt;arg1&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                          Pass context-specific MCA parameters; they are 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                          considered global if --gmca is not used and only 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                          one context is specified (arg0 is the parameter 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                          name; arg1 is the parameter value) 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -s|--status              Display status messages describing the progression 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                          of the checkpoint 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    --term                Terminate the application after checkpoint 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -v|--verbose             Be Verbose 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -w|--nowait              Do not wait for the application to finish 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                          checkpointing before returning 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sdiaz_at_compute-3-17 ~]$ exit 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; logout 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Connection to c3-17 closed. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sdiaz_at_svgd mpi_test]$ ssh c3-18 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Last login: Wed Oct 28 13:24:12 2009 from svgd.local 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -bash-3.00$ ps auxf |grep sdiaz 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sdiaz    14412  0.0  0.0  1888  560 ?        Ss   13:28   0:00      \_ /opt/cesga/sge62/utilbin/lx24-x86/qrsh_starter /opt/cesga/sge62/default/spool/compute-3-18/active_jobs/2645150.1/1.compute-3-18 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sdiaz    14419  0.0  0.0 35728 2260 ?        S    13:28   0:00          \_ orted -mca ess env -mca orte_ess_jobid 2295267328 -mca orte_ess_vpid 1 -mca orte_ess_num_procs 2 --hnp-uri 2295267328.0;tcp://192.168.4.144:36596 -mca mca_base_param_file_prefix ft-enable-cr -mca mca_base_param_file_path /opt/cesga/openmpi-1.3.3/share/openmpi/amca-param-sets:/home_no_usc/cesga/sdiaz/mpi_test -mca mca_base_param_file_path_force /home_no_usc/cesga/sdiaz/mpi_test 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sdiaz    14420  0.0  0.0 99452 4596 ?        Sl   13:28   0:00              \_ pi3 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sergio D&#237;az Montes 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Centro de Supercomputacion de Galicia 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Avda. de Vigo. s/n (Campus Sur) 15706 Santiago de Compostela (Spain) 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Tel: +34 981 56 98 10 ; Fax: +34 981 59 46 16 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; email: sdiaz_at_[hidden] ; <a href="http://www.cesga.es/">http://www.cesga.es/</a> 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;image002.jpg&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------------------------------------------------ 
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Sergio D&#237;az Montes
</span><br>
<span class="quotelev1">&gt; Centro de Supercomputacion de Galicia
</span><br>
<span class="quotelev1">&gt; Avda. de Vigo. s/n (Campus Sur) 15706 Santiago de Compostela (Spain)
</span><br>
<span class="quotelev1">&gt; Tel: +34 981 56 98 10 ; Fax: +34 981 59 46 16 
</span><br>
<span class="quotelev1">&gt; email: sdiaz_at_[hidden] ; <a href="http://www.cesga.es/">http://www.cesga.es/</a>
</span><br>
<span class="quotelev1">&gt; &lt;image002.jpg&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------ 
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
<li><strong>Next message:</strong> <a href="11165.php">Eugene Loh: "Re: [OMPI users] MPI Derived datatype + Persistent communication"</a>
<li><strong>Previous message:</strong> <a href="11163.php">amjad ali: "[OMPI users] MPI Derived datatype + Persistent communication"</a>
<li><strong>In reply to:</strong> <a href="11107.php">Sergio D&#237;az: "Re: [OMPI users] checkpoint opempi-1.3.3+sge62"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11176.php">Sergio Díaz: "Re: [OMPI users] checkpoint opempi-1.3.3+sge62"</a>
<li><strong>Reply:</strong> <a href="11176.php">Sergio Díaz: "Re: [OMPI users] checkpoint opempi-1.3.3+sge62"</a>
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
