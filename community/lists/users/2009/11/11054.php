<?
$subject_val = "Re: [OMPI users] checkpoint opempi-1.3.3+sge62";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  2 19:56:20 2009" -->
<!-- isoreceived="20091103005620" -->
<!-- sent="Mon, 2 Nov 2009 16:56:15 -0800 (PST)" -->
<!-- isosent="20091103005615" -->
<!-- name="Andreea m. \(Costea\)" -->
<!-- email="doodlie_snew_at_[hidden]" -->
<!-- subject="Re: [OMPI users] checkpoint opempi-1.3.3+sge62" -->
<!-- id="758990.1007.qm_at_web54304.mail.re2.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4AEF0C40.8070400_at_cesga.es" -->
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
<strong>From:</strong> Andreea m. \(Costea\) (<em>doodlie_snew_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-02 19:56:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11055.php">Jeff Squyres: "Re: [OMPI users] segmentation fault: Address not mapped"</a>
<li><strong>Previous message:</strong> <a href="11053.php">Sergio D&#237;az: "Re: [OMPI users] checkpoint opempi-1.3.3+sge62"</a>
<li><strong>In reply to:</strong> <a href="11053.php">Sergio D&#237;az: "Re: [OMPI users] checkpoint opempi-1.3.3+sge62"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11088.php">Josh Hursey: "Re: [OMPI users] checkpoint opempi-1.3.3+sge62"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am having the same problem when I want to checkpoint manually: &quot;HNP with PID xxxx Not found!&quot;, though I am sure I put the right PID 
<br>
<p>--- On Mon, 11/2/09, Sergio D&#237;az &lt;sdiaz_at_[hidden]&gt; wrote:
<br>
<p>From: Sergio D&#237;az &lt;sdiaz_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] checkpoint opempi-1.3.3+sge62
<br>
To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
<br>
Date: Monday, November 2, 2009, 6:43 PM
<br>
<p>Hi again,
<br>
<p>I found a C program to test ompi-checkpoint/restart an it works fine. The program was written by Alan Woodland and shared in the following distribution list: debian-bugs-dist_at_[hidden]
<br>
This program starts a countdown from 10 to 0 and when the countdown is 6, do a checkpoint, kill the process and restart the process.
<br>
<p>However, I still have the problem when I try to do (by hand) checkpointing directly into a node
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
<span class="quotelev1">&gt; I have achieved the checkpoint of an easy program without SGE. Now, I'm trying to do the integration openmpi+sge but I have some problems... When I try to do checkpoint of the mpirun PID, I got an error similar to the error gotten when the PID doesn't exit. The example below.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any ideas?
</span><br>
<span class="quotelev1">&gt; Somebody have a script to do it automatic with SGE?. For example I have one to do checkpoint each X seconds with BLCR and non-mpi jobs. It is launched by SGE if you have configured the queue and the ckpt environment.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is it possible choose the name of the ckpt folder when you do the ompi-checkpoint? I can't find the option to do it.
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
<span class="quotelev1">&gt; root&#160; &#160;&#160;&#160;20044&#160; 0.0&#160; 0.0&#160; 4468 1224 ?&#160; &#160; &#160; &#160; S&#160; &#160; 13:28&#160;&#160;&#160;0:00&#160; \_ sge_shepherd-2645150 -bg
</span><br>
<span class="quotelev1">&gt; sdiaz&#160; &#160; 20072&#160; 0.0&#160; 0.0 53172 1212 ?&#160; &#160; &#160; &#160; Ss&#160;&#160;&#160;13:28&#160;&#160;&#160;0:00&#160; &#160; &#160; \_ -bash /opt/cesga/sge62/default/spool/compute-3-17/job_scripts/2645150
</span><br>
<span class="quotelev1">&gt; sdiaz&#160; &#160; 20112&#160; 0.2&#160; 0.0 41028 2480 ?&#160; &#160; &#160; &#160; S&#160; &#160; 13:28&#160;&#160;&#160;0:00&#160; &#160; &#160; &#160; &#160; \_ mpirun -np 2 -am ft-enable-cr pi3
</span><br>
<span class="quotelev1">&gt; sdiaz&#160; &#160; 20113&#160; 0.0&#160; 0.0 36484 1824 ?&#160; &#160; &#160; &#160; Sl&#160;&#160;&#160;13:28&#160;&#160;&#160;0:00&#160; &#160; &#160; &#160; &#160; &#160; &#160; \_ /opt/cesga/sge62/bin/lx24-x86/qrsh -inherit -nostdin -V compute-3-18..........
</span><br>
<span class="quotelev1">&gt; sdiaz&#160; &#160; 20116&#160; 1.2&#160; 0.0 99464 4616 ?&#160; &#160; &#160; &#160; Sl&#160;&#160;&#160;13:28&#160;&#160;&#160;0:00&#160; &#160; &#160; &#160; &#160; &#160; &#160; \_ pi3
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
<span class="quotelev1">&gt;&#160;&#160;&#160;Open MPI Checkpoint Tool
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;&#160; &#160; -am &lt;arg0&gt;&#160; &#160; &#160; &#160; &#160; &#160; Aggregate MCA parameter set file list
</span><br>
<span class="quotelev1">&gt;&#160; &#160; -gmca|--gmca &lt;arg0&gt; &lt;arg1&gt;
</span><br>
<span class="quotelev1">&gt;&#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; Pass global MCA parameters that are applicable to
</span><br>
<span class="quotelev1">&gt;&#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; all contexts (arg0 is the parameter name; arg1 is
</span><br>
<span class="quotelev1">&gt;&#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; the parameter value)
</span><br>
<span class="quotelev1">&gt; -h|--help&#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; This help message
</span><br>
<span class="quotelev1">&gt;&#160; &#160; --hnp-jobid &lt;arg0&gt;&#160; &#160; This should be the jobid of the HNP whose
</span><br>
<span class="quotelev1">&gt;&#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; applications you wish to checkpoint.
</span><br>
<span class="quotelev1">&gt;&#160; &#160; --hnp-pid &lt;arg0&gt;&#160; &#160; &#160; This should be the pid of the mpirun whose
</span><br>
<span class="quotelev1">&gt;&#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; applications you wish to checkpoint.
</span><br>
<span class="quotelev1">&gt;&#160; &#160; -mca|--mca &lt;arg0&gt; &lt;arg1&gt;
</span><br>
<span class="quotelev1">&gt;&#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; Pass context-specific MCA parameters; they are
</span><br>
<span class="quotelev1">&gt;&#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; considered global if --gmca is not used and only
</span><br>
<span class="quotelev1">&gt;&#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; one context is specified (arg0 is the parameter
</span><br>
<span class="quotelev1">&gt;&#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; name; arg1 is the parameter value)
</span><br>
<span class="quotelev1">&gt; -s|--status&#160; &#160; &#160; &#160; &#160; &#160; &#160; Display status messages describing the progression
</span><br>
<span class="quotelev1">&gt;&#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; of the checkpoint
</span><br>
<span class="quotelev1">&gt;&#160; &#160; --term&#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; Terminate the application after checkpoint
</span><br>
<span class="quotelev1">&gt; -v|--verbose&#160; &#160; &#160; &#160; &#160; &#160;&#160;&#160;Be Verbose
</span><br>
<span class="quotelev1">&gt; -w|--nowait&#160; &#160; &#160; &#160; &#160; &#160; &#160; Do not wait for the application to finish
</span><br>
<span class="quotelev1">&gt;&#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; checkpointing before returning
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
<span class="quotelev1">&gt; sdiaz&#160; &#160; 14412&#160; 0.0&#160; 0.0&#160; 1888&#160; 560 ?&#160; &#160; &#160; &#160; Ss&#160;&#160;&#160;13:28&#160;&#160;&#160;0:00&#160; &#160; &#160; \_ /opt/cesga/sge62/utilbin/lx24-x86/qrsh_starter /opt/cesga/sge62/default/spool/compute-3-18/active_jobs/2645150.1/1.compute-3-18
</span><br>
<span class="quotelev1">&gt; sdiaz&#160; &#160; 14419&#160; 0.0&#160; 0.0 35728 2260 ?&#160; &#160; &#160; &#160; S&#160; &#160; 13:28&#160;&#160;&#160;0:00&#160; &#160; &#160; &#160; &#160; \_ orted -mca ess env -mca orte_ess_jobid 2295267328 -mca orte_ess_vpid 1 -mca orte_ess_num_procs 2 --hnp-uri 2295267328.0;tcp://192.168.4.144:36596 -mca mca_base_param_file_prefix ft-enable-cr -mca mca_base_param_file_path /opt/cesga/openmpi-1.3.3/share/openmpi/amca-param-sets:/home_no_usc/cesga/sdiaz/mpi_test -mca mca_base_param_file_path_force /home_no_usc/cesga/sdiaz/mpi_test
</span><br>
<span class="quotelev1">&gt; sdiaz&#160; &#160; 14420&#160; 0.0&#160; 0.0 99452 4596 ?&#160; &#160; &#160; &#160; Sl&#160;&#160;&#160;13:28&#160;&#160;&#160;0:00&#160; &#160; &#160; &#160; &#160; &#160; &#160; \_ pi3
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
<span class="quotelev1">&gt; -- Sergio D&#237;az Montes
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
<p><p>-- Sergio D&#237;az Montes
<br>
Centro de Supercomputacion de Galicia
<br>
Avda. de Vigo. s/n (Campus Sur) 15706 Santiago de Compostela (Spain)
<br>
Tel: +34 981 56 98 10 ; Fax: +34 981 59 46 16
<br>
email: sdiaz_at_[hidden] ; <a href="http://www.cesga.es/">http://www.cesga.es/</a>
<br>
<p>------------------------------------------------
<br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11054/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11055.php">Jeff Squyres: "Re: [OMPI users] segmentation fault: Address not mapped"</a>
<li><strong>Previous message:</strong> <a href="11053.php">Sergio D&#237;az: "Re: [OMPI users] checkpoint opempi-1.3.3+sge62"</a>
<li><strong>In reply to:</strong> <a href="11053.php">Sergio D&#237;az: "Re: [OMPI users] checkpoint opempi-1.3.3+sge62"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11088.php">Josh Hursey: "Re: [OMPI users] checkpoint opempi-1.3.3+sge62"</a>
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
