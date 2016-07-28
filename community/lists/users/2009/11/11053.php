<?
$subject_val = "Re: [OMPI users] checkpoint opempi-1.3.3+sge62";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  2 11:42:31 2009" -->
<!-- isoreceived="20091102164231" -->
<!-- sent="Mon, 02 Nov 2009 17:43:45 +0100" -->
<!-- isosent="20091102164345" -->
<!-- name="Sergio D&#237;az" -->
<!-- email="sdiaz_at_[hidden]" -->
<!-- subject="Re: [OMPI users] checkpoint opempi-1.3.3+sge62" -->
<!-- id="4AEF0C40.8070400_at_cesga.es" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4AE849FA.4040102_at_cesga.es" -->
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
<strong>Date:</strong> 2009-11-02 11:43:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11054.php">Andreea m. \(Costea\): "Re: [OMPI users] checkpoint opempi-1.3.3+sge62"</a>
<li><strong>Previous message:</strong> <a href="11052.php">Jeff Squyres: "Re: [OMPI users] Runtime error while running mpirun"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/10/10982.php">Sergio D&#237;az: "[OMPI users]  checkpoint opempi-1.3.3+sge62"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11054.php">Andreea m. \(Costea\): "Re: [OMPI users] checkpoint opempi-1.3.3+sge62"</a>
<li><strong>Reply:</strong> <a href="11054.php">Andreea m. \(Costea\): "Re: [OMPI users] checkpoint opempi-1.3.3+sge62"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi again,
<br>
<p>I found a C program to test ompi-checkpoint/restart an it works fine. 
<br>
The program was written by Alan Woodland and shared in the following 
<br>
distribution list: debian-bugs-dist_at_[hidden]
<br>
This program starts a countdown from 10 to 0 and when the countdown is 
<br>
6, do a checkpoint, kill the process and restart the process.
<br>
<p>However, I still have the problem when I try to do (by hand) 
<br>
checkpointing directly into a node
<br>
<p>Any ideas? :-(
<br>
<p>Best regards
<br>
Sergio
<br>
<p><p><p>Sergio D&#237;az escribi&#243;:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have achieved the checkpoint of an easy program without SGE. Now, 
</span><br>
<span class="quotelev1">&gt; I'm trying to do the integration openmpi+sge but I have some 
</span><br>
<span class="quotelev1">&gt; problems... When I try to do checkpoint of the mpirun PID, I got an 
</span><br>
<span class="quotelev1">&gt; error similar to the error gotten when the PID doesn't exit. The 
</span><br>
<span class="quotelev1">&gt; example below.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any ideas?
</span><br>
<span class="quotelev1">&gt; Somebody have a script to do it automatic with SGE?. For example I 
</span><br>
<span class="quotelev1">&gt; have one to do checkpoint each X seconds with BLCR and non-mpi jobs. 
</span><br>
<span class="quotelev1">&gt; It is launched by SGE if you have configured the queue and the ckpt 
</span><br>
<span class="quotelev1">&gt; environment.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is it possible choose the name of the ckpt folder when you do the 
</span><br>
<span class="quotelev1">&gt; ompi-checkpoint? I can't find the option to do it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Sergio
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [sdiaz_at_compute-3-17 ~]$ ps auxf
</span><br>
<span class="quotelev1">&gt; ....
</span><br>
<span class="quotelev1">&gt; root     20044  0.0  0.0  4468 1224 ?        S    13:28   0:00  \_ 
</span><br>
<span class="quotelev1">&gt; sge_shepherd-2645150 -bg
</span><br>
<span class="quotelev1">&gt; sdiaz    20072  0.0  0.0 53172 1212 ?        Ss   13:28   0:00      \_ 
</span><br>
<span class="quotelev1">&gt; -bash /opt/cesga/sge62/default/spool/compute-3-17/job_scripts/2645150
</span><br>
<span class="quotelev1">&gt; sdiaz    20112  0.2  0.0 41028 2480 ?        S    13:28   
</span><br>
<span class="quotelev1">&gt; 0:00          \_ mpirun -np 2 -am ft-enable-cr pi3
</span><br>
<span class="quotelev1">&gt; sdiaz    20113  0.0  0.0 36484 1824 ?        Sl   13:28   
</span><br>
<span class="quotelev1">&gt; 0:00              \_ /opt/cesga/sge62/bin/lx24-x86/qrsh -inherit 
</span><br>
<span class="quotelev1">&gt; -nostdin -V compute-3-18..........
</span><br>
<span class="quotelev1">&gt; sdiaz    20116  1.2  0.0 99464 4616 ?        Sl   13:28   
</span><br>
<span class="quotelev1">&gt; 0:00              \_ pi3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [sdiaz_at_compute-3-17 ~]$ ompi-checkpoint 20112
</span><br>
<span class="quotelev1">&gt; [compute-3-17.local:20124] HNP with PID 20112 Not found!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [sdiaz_at_compute-3-17 ~]$ ompi-checkpoint -s 20112
</span><br>
<span class="quotelev1">&gt; [compute-3-17.local:20135] HNP with PID 20112 Not found!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [sdiaz_at_compute-3-17 ~]$ ompi-checkpoint -s --term 20112
</span><br>
<span class="quotelev1">&gt; [compute-3-17.local:20136] HNP with PID 20112 Not found!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [sdiaz_at_compute-3-17 ~]$ ompi-checkpoint --hnp-pid 20112
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ompi-checkpoint PID_OF_MPIRUN
</span><br>
<span class="quotelev1">&gt;   Open MPI Checkpoint Tool
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    -am &lt;arg0&gt;            Aggregate MCA parameter set file list
</span><br>
<span class="quotelev1">&gt;    -gmca|--gmca &lt;arg0&gt; &lt;arg1&gt;
</span><br>
<span class="quotelev1">&gt;                          Pass global MCA parameters that are applicable to
</span><br>
<span class="quotelev1">&gt;                          all contexts (arg0 is the parameter name; arg1 is
</span><br>
<span class="quotelev1">&gt;                          the parameter value)
</span><br>
<span class="quotelev1">&gt; -h|--help                This help message
</span><br>
<span class="quotelev1">&gt;    --hnp-jobid &lt;arg0&gt;    This should be the jobid of the HNP whose
</span><br>
<span class="quotelev1">&gt;                          applications you wish to checkpoint.
</span><br>
<span class="quotelev1">&gt;    --hnp-pid &lt;arg0&gt;      This should be the pid of the mpirun whose
</span><br>
<span class="quotelev1">&gt;                          applications you wish to checkpoint.
</span><br>
<span class="quotelev1">&gt;    -mca|--mca &lt;arg0&gt; &lt;arg1&gt;
</span><br>
<span class="quotelev1">&gt;                          Pass context-specific MCA parameters; they are
</span><br>
<span class="quotelev1">&gt;                          considered global if --gmca is not used and only
</span><br>
<span class="quotelev1">&gt;                          one context is specified (arg0 is the parameter
</span><br>
<span class="quotelev1">&gt;                          name; arg1 is the parameter value)
</span><br>
<span class="quotelev1">&gt; -s|--status              Display status messages describing the 
</span><br>
<span class="quotelev1">&gt; progression
</span><br>
<span class="quotelev1">&gt;                          of the checkpoint
</span><br>
<span class="quotelev1">&gt;    --term                Terminate the application after checkpoint
</span><br>
<span class="quotelev1">&gt; -v|--verbose             Be Verbose
</span><br>
<span class="quotelev1">&gt; -w|--nowait              Do not wait for the application to finish
</span><br>
<span class="quotelev1">&gt;                          checkpointing before returning
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [sdiaz_at_compute-3-17 ~]$ exit
</span><br>
<span class="quotelev1">&gt; logout
</span><br>
<span class="quotelev1">&gt; Connection to c3-17 closed.
</span><br>
<span class="quotelev1">&gt; [sdiaz_at_svgd mpi_test]$ ssh c3-18
</span><br>
<span class="quotelev1">&gt; Last login: Wed Oct 28 13:24:12 2009 from svgd.local
</span><br>
<span class="quotelev1">&gt; -bash-3.00$ ps auxf |grep sdiaz
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; sdiaz    14412  0.0  0.0  1888  560 ?        Ss   13:28   0:00      \_ 
</span><br>
<span class="quotelev1">&gt; /opt/cesga/sge62/utilbin/lx24-x86/qrsh_starter 
</span><br>
<span class="quotelev1">&gt; /opt/cesga/sge62/default/spool/compute-3-18/active_jobs/2645150.1/1.compute-3-18
</span><br>
<span class="quotelev1">&gt; sdiaz    14419  0.0  0.0 35728 2260 ?        S    13:28   
</span><br>
<span class="quotelev1">&gt; 0:00          \_ orted -mca ess env -mca orte_ess_jobid 2295267328 
</span><br>
<span class="quotelev1">&gt; -mca orte_ess_vpid 1 -mca orte_ess_num_procs 2 --hnp-uri 
</span><br>
<span class="quotelev1">&gt; 2295267328.0;tcp://192.168.4.144:36596 -mca mca_base_param_file_prefix 
</span><br>
<span class="quotelev1">&gt; ft-enable-cr -mca mca_base_param_file_path 
</span><br>
<span class="quotelev1">&gt; /opt/cesga/openmpi-1.3.3/share/openmpi/amca-param-sets:/home_no_usc/cesga/sdiaz/mpi_test 
</span><br>
<span class="quotelev1">&gt; -mca mca_base_param_file_path_force /home_no_usc/cesga/sdiaz/mpi_test
</span><br>
<span class="quotelev1">&gt; sdiaz    14420  0.0  0.0 99452 4596 ?        Sl   13:28   
</span><br>
<span class="quotelev1">&gt; 0:00              \_ pi3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<p><p><pre>
-- 
Sergio D&#237;az Montes
Centro de Supercomputacion de Galicia
Avda. de Vigo. s/n (Campus Sur) 15706 Santiago de Compostela (Spain)
Tel: +34 981 56 98 10 ; Fax: +34 981 59 46 16
email: sdiaz_at_[hidden] ; <a href="http://www.cesga.es/">http://www.cesga.es/</a>
------------------------------------------------
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11054.php">Andreea m. \(Costea\): "Re: [OMPI users] checkpoint opempi-1.3.3+sge62"</a>
<li><strong>Previous message:</strong> <a href="11052.php">Jeff Squyres: "Re: [OMPI users] Runtime error while running mpirun"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/10/10982.php">Sergio D&#237;az: "[OMPI users]  checkpoint opempi-1.3.3+sge62"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11054.php">Andreea m. \(Costea\): "Re: [OMPI users] checkpoint opempi-1.3.3+sge62"</a>
<li><strong>Reply:</strong> <a href="11054.php">Andreea m. \(Costea\): "Re: [OMPI users] checkpoint opempi-1.3.3+sge62"</a>
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
