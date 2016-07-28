<?
$subject_val = "Re: [OMPI users] checkpoint opempi-1.3.3+sge62";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  6 09:08:47 2009" -->
<!-- isoreceived="20091106140847" -->
<!-- sent="Fri, 6 Nov 2009 07:08:43 -0700" -->
<!-- isosent="20091106140843" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] checkpoint opempi-1.3.3+sge62" -->
<!-- id="C86CDED3-2DA4-407F-ADD4-273EBC788AF3_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
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
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-06 09:08:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11089.php">Josh Hursey: "Re: [OMPI users] Question about checkpoint/restart protocol"</a>
<li><strong>Previous message:</strong> <a href="11087.php">Josh Hursey: "Re: [OMPI users] problems with checkpointing an mpi job"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/10/10982.php">Sergio D&#237;az: "[OMPI users]  checkpoint opempi-1.3.3+sge62"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11107.php">Sergio Díaz: "Re: [OMPI users] checkpoint opempi-1.3.3+sge62"</a>
<li><strong>Reply:</strong> <a href="11107.php">Sergio Díaz: "Re: [OMPI users] checkpoint opempi-1.3.3+sge62"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 28, 2009, at 7:41 AM, Sergio D&#237;az wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
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
<p>I do not have any experience with the SGE environment, so I suspect  
<br>
that there may something 'special' about the environment that is  
<br>
tripping up the ompi-checkpoint tool.
<br>
<p>First of all, what version of Open MPI are you using?
<br>
<p>Somethings to check:
<br>
&nbsp;&nbsp;- Does 'ompi-ps' work when your application is running?
<br>
&nbsp;&nbsp;- Is there an /tmp/openmpi-sessions-* directory on the node where  
<br>
mpirun is currently running? This directory contains information on  
<br>
how to connect to the mpirun process from an external tool, if it's  
<br>
missing then this could be the cause of the problem.
<br>
<p><span class="quotelev1">&gt;
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
<p>I do not know of any integration of the Open MPI checkpointing work  
<br>
with SGE at the moment.
<br>
<p>As far as time triggered checkpointing, I have a feature ticket open  
<br>
about this:
<br>
&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/ticket/1961">https://svn.open-mpi.org/trac/ompi/ticket/1961</a>
<br>
<p>It is not available yet, but in the works.
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is it possible choose the name of the ckpt folder when you do the  
</span><br>
<span class="quotelev1">&gt; ompi-checkpoint? I can't find the option to do it.
</span><br>
<p>Not at this time. Though I could see it as a useful feature, and  
<br>
shouldn't be too hard to implement. I filed a ticket if you want to  
<br>
follow the progress:
<br>
&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/ticket/2098">https://svn.open-mpi.org/trac/ompi/ticket/2098</a>
<br>
<p>-- Josh
<br>
<p><span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; sdiaz    20072  0.0  0.0 53172 1212 ?        Ss   13:28   0:00       
</span><br>
<span class="quotelev1">&gt; \_ -bash /opt/cesga/sge62/default/spool/compute-3-17/job_scripts/ 
</span><br>
<span class="quotelev1">&gt; 2645150
</span><br>
<span class="quotelev1">&gt; sdiaz    20112  0.2  0.0 41028 2480 ?        S    13:28    
</span><br>
<span class="quotelev1">&gt; 0:00          \_ mpirun -np 2 -am ft-enable-cr pi3
</span><br>
<span class="quotelev1">&gt; sdiaz    20113  0.0  0.0 36484 1824 ?        Sl   13:28    
</span><br>
<span class="quotelev1">&gt; 0:00              \_ /opt/cesga/sge62/bin/lx24-x86/qrsh -inherit - 
</span><br>
<span class="quotelev1">&gt; nostdin -V compute-3-18..........
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
<span class="quotelev1">&gt;                          Pass global MCA parameters that are  
</span><br>
<span class="quotelev1">&gt; applicable to
</span><br>
<span class="quotelev1">&gt;                          all contexts (arg0 is the parameter name;  
</span><br>
<span class="quotelev1">&gt; arg1 is
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
<span class="quotelev1">&gt;                          Pass context-specific MCA parameters; they  
</span><br>
<span class="quotelev1">&gt; are
</span><br>
<span class="quotelev1">&gt;                          considered global if --gmca is not used and  
</span><br>
<span class="quotelev1">&gt; only
</span><br>
<span class="quotelev1">&gt;                          one context is specified (arg0 is the  
</span><br>
<span class="quotelev1">&gt; parameter
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
<span class="quotelev1">&gt; sdiaz    14412  0.0  0.0  1888  560 ?        Ss   13:28   0:00       
</span><br>
<span class="quotelev1">&gt; \_ /opt/cesga/sge62/utilbin/lx24-x86/qrsh_starter /opt/cesga/sge62/ 
</span><br>
<span class="quotelev1">&gt; default/spool/compute-3-18/active_jobs/2645150.1/1.compute-3-18
</span><br>
<span class="quotelev1">&gt; sdiaz    14419  0.0  0.0 35728 2260 ?        S    13:28    
</span><br>
<span class="quotelev1">&gt; 0:00          \_ orted -mca ess env -mca orte_ess_jobid 2295267328 - 
</span><br>
<span class="quotelev1">&gt; mca orte_ess_vpid 1 -mca orte_ess_num_procs 2 --hnp-uri  
</span><br>
<span class="quotelev1">&gt; 2295267328.0;tcp://192.168.4.144:36596 -mca  
</span><br>
<span class="quotelev1">&gt; mca_base_param_file_prefix ft-enable-cr -mca  
</span><br>
<span class="quotelev1">&gt; mca_base_param_file_path /opt/cesga/openmpi-1.3.3/share/openmpi/amca- 
</span><br>
<span class="quotelev1">&gt; param-sets:/home_no_usc/cesga/sdiaz/mpi_test -mca  
</span><br>
<span class="quotelev1">&gt; mca_base_param_file_path_force /home_no_usc/cesga/sdiaz/mpi_test
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
<li><strong>Next message:</strong> <a href="11089.php">Josh Hursey: "Re: [OMPI users] Question about checkpoint/restart protocol"</a>
<li><strong>Previous message:</strong> <a href="11087.php">Josh Hursey: "Re: [OMPI users] problems with checkpointing an mpi job"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/10/10982.php">Sergio D&#237;az: "[OMPI users]  checkpoint opempi-1.3.3+sge62"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11107.php">Sergio Díaz: "Re: [OMPI users] checkpoint opempi-1.3.3+sge62"</a>
<li><strong>Reply:</strong> <a href="11107.php">Sergio Díaz: "Re: [OMPI users] checkpoint opempi-1.3.3+sge62"</a>
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
