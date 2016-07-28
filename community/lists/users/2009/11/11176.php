<?
$subject_val = "Re: [OMPI users] checkpoint opempi-1.3.3+sge62";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 12 10:55:54 2009" -->
<!-- isoreceived="20091112155554" -->
<!-- sent="Thu, 12 Nov 2009 16:54:16 +0100" -->
<!-- isosent="20091112155416" -->
<!-- name="Sergio D&#237;az" -->
<!-- email="sdiaz_at_[hidden]" -->
<!-- subject="Re: [OMPI users] checkpoint opempi-1.3.3+sge62" -->
<!-- id="4AFC2FA8.6020301_at_cesga.es" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CB5988C7-ABE1-4F0D-8B2C-040B8EADDDB0_at_open-mpi.org" -->
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
<strong>Date:</strong> 2009-11-12 10:54:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11177.php">Jeff Squyres: "Re: [OMPI users] users Digest, Vol 1401, Issue 2"</a>
<li><strong>Previous message:</strong> <a href="11175.php">Eugene Loh: "Re: [OMPI users] Release date for 1.3.4?"</a>
<li><strong>In reply to:</strong> <a href="11164.php">Josh Hursey: "Re: [OMPI users] checkpoint opempi-1.3.3+sge62"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/12/11481.php">Josh Hursey: "Re: [OMPI users] checkpoint opempi-1.3.3+sge62"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/12/11481.php">Josh Hursey: "Re: [OMPI users] checkpoint opempi-1.3.3+sge62"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Josh,
<br>
<p>You were right. The main problem was the /tmp. SGE uses a scratch 
<br>
directory in which the jobs have temporary files. Setting TMPDIR to 
<br>
/tmp, checkpoint works!
<br>
However, when I try to restart it... I got the following error (see 
<br>
ERROR1). Option -v agrees these lines (see ERRO2).
<br>
<p>I was trying to use ssh instead of rsh but I was impossible. By default 
<br>
it should use ssh and if it finds a problem, it will use rsh. It seems 
<br>
that ssh doesn't work because always use rsh.
<br>
If I change this MCA parameter, It still uses rsh.
<br>
If I set OMPI_MCA_plm_rsh_disable_qrsh variable to 1, It try to use ssh 
<br>
and doesn't works. I got --&gt; &quot;bash: orted: command not found&quot; and the 
<br>
mpi process dies.
<br>
The command which try to execute is the following and I haven't found 
<br>
yet the reason why this command doesn't found orted because I set the 
<br>
/etc/bashrc in order to get always the right path and I have the right 
<br>
path into my application. (see ERROR4).
<br>
<p>Many thanks!,
<br>
Sergio
<br>
<p>P.S. Sorry about these long emails. I just try to show you useful 
<br>
information to identify my problems.
<br>
<p><p>ERROR 1
<br>
<span class="quotelev1"> &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1"> &gt; [sdiaz_at_compute-3-18 ~]$ ompi-restart ompi_global_snapshot_28454.ckpt
</span><br>
<span class="quotelev1"> &gt; 
</span><br>
--------------------------------------------------------------------------
<br>
<span class="quotelev1"> &gt; Error: Unable to obtain the proper restart command to restart from the
</span><br>
<span class="quotelev1"> &gt;        checkpoint file (opal_snapshot_0.ckpt). Returned -1.
</span><br>
<span class="quotelev1"> &gt;
</span><br>
<span class="quotelev1"> &gt; 
</span><br>
--------------------------------------------------------------------------
<br>
<span class="quotelev1"> &gt; 
</span><br>
--------------------------------------------------------------------------
<br>
<span class="quotelev1"> &gt; Error: Unable to obtain the proper restart command to restart from the
</span><br>
<span class="quotelev1"> &gt;        checkpoint file (opal_snapshot_1.ckpt). Returned -1.
</span><br>
<span class="quotelev1"> &gt;
</span><br>
<span class="quotelev1"> &gt; 
</span><br>
--------------------------------------------------------------------------
<br>
<span class="quotelev1"> &gt; [compute-3-18:28792] *** Process received signal ***
</span><br>
<span class="quotelev1"> &gt; [compute-3-18:28792] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1"> &gt; [compute-3-18:28792] Signal code:  (128)
</span><br>
<span class="quotelev1"> &gt; [compute-3-18:28792] Failing at address: (nil)
</span><br>
<span class="quotelev1"> &gt; [compute-3-18:28792] [ 0] /lib64/tls/libpthread.so.0 [0x33bbf0c430]
</span><br>
<span class="quotelev1"> &gt; [compute-3-18:28792] [ 1] /lib64/tls/libc.so.6(__libc_free+0x25) 
</span><br>
[0x33bb669135]
<br>
<span class="quotelev1"> &gt; [compute-3-18:28792] [ 2] 
</span><br>
/opt/cesga/openmpi-1.3.3/lib/libopen-pal.so.0(opal_argv_free+0x2e) 
<br>
[0x2a95586658]
<br>
<span class="quotelev1"> &gt; [compute-3-18:28792] [ 3] 
</span><br>
/opt/cesga/openmpi-1.3.3/lib/libopen-pal.so.0(opal_event_fini+0x1e) 
<br>
[0x2a9557906e]
<br>
<span class="quotelev1"> &gt; [compute-3-18:28792] [ 4] 
</span><br>
/opt/cesga/openmpi-1.3.3/lib/libopen-pal.so.0(opal_finalize+0x36) 
<br>
[0x2a9556bcfa]
<br>
<span class="quotelev1"> &gt; [compute-3-18:28792] [ 5] opal-restart [0x40312a]
</span><br>
<span class="quotelev1"> &gt; [compute-3-18:28792] [ 6] 
</span><br>
/lib64/tls/libc.so.6(__libc_start_main+0xdb) [0x33bb61c3fb]
<br>
<span class="quotelev1"> &gt; [compute-3-18:28792] [ 7] opal-restart [0x40272a]
</span><br>
<span class="quotelev1"> &gt; [compute-3-18:28792] *** End of error message ***
</span><br>
<span class="quotelev1"> &gt; [compute-3-18:28793] *** Process received signal ***
</span><br>
<span class="quotelev1"> &gt; [compute-3-18:28793] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1"> &gt; [compute-3-18:28793] Signal code:  (128)
</span><br>
<span class="quotelev1"> &gt; [compute-3-18:28793] Failing at address: (nil)
</span><br>
<span class="quotelev1"> &gt; [compute-3-18:28793] [ 0] /lib64/tls/libpthread.so.0 [0x33bbf0c430]
</span><br>
<span class="quotelev1"> &gt; [compute-3-18:28793] [ 1] /lib64/tls/libc.so.6(__libc_free+0x25) 
</span><br>
[0x33bb669135]
<br>
<span class="quotelev1"> &gt; [compute-3-18:28793] [ 2] 
</span><br>
/opt/cesga/openmpi-1.3.3/lib/libopen-pal.so.0(opal_argv_free+0x2e) 
<br>
[0x2a95586658]
<br>
<span class="quotelev1"> &gt; [compute-3-18:28793] [ 3] 
</span><br>
/opt/cesga/openmpi-1.3.3/lib/libopen-pal.so.0(opal_event_fini+0x1e) 
<br>
[0x2a9557906e]
<br>
<span class="quotelev1"> &gt; [compute-3-18:28793] [ 4] 
</span><br>
/opt/cesga/openmpi-1.3.3/lib/libopen-pal.so.0(opal_finalize+0x36) 
<br>
[0x2a9556bcfa]
<br>
<span class="quotelev1"> &gt; [compute-3-18:28793] [ 5] opal-restart [0x40312a]
</span><br>
<span class="quotelev1"> &gt; [compute-3-18:28793] [ 6] 
</span><br>
/lib64/tls/libc.so.6(__libc_start_main+0xdb) [0x33bb61c3fb]
<br>
<span class="quotelev1"> &gt; [compute-3-18:28793] [ 7] opal-restart [0x40272a]
</span><br>
<span class="quotelev1"> &gt; [compute-3-18:28793] *** End of error message ***
</span><br>
<span class="quotelev1"> &gt; 
</span><br>
--------------------------------------------------------------------------
<br>
<span class="quotelev1"> &gt; mpirun noticed that process rank 0 with PID 28792 on node 
</span><br>
compute-3-18.local exited on signal 11 (Segmentation fault).
<br>
<span class="quotelev1"> &gt; 
</span><br>
--------------------------------------------------------------------------
<br>
<span class="quotelev1"> &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<p><p>ERROR 2
<br>
<span class="quotelev4"> &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1"> &gt; [sdiaz_at_compute-3-18 ~]$ ompi-restart -v ompi_global_snapshot_28454.ckpt
</span><br>
<span class="quotelev1"> &gt;[compute-3-18.local:28941] Checking for the existence of 
</span><br>
(/home/cesga/sdiaz/ompi_global_snapshot_28454.ckpt)  
<br>
<span class="quotelev1"> &gt; [compute-3-18.local:28941] Restarting from file 
</span><br>
(ompi_global_snapshot_28454.ckpt)                                               
<br>
<p><span class="quotelev1"> &gt; [compute-3-18.local:28941]       Exec in self             
</span><br>
<span class="quotelev1"> &gt; .......                                                               
</span><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<span class="quotelev4"> &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<p><p>ERROR3
<br>
<span class="quotelev4"> &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1"> &gt;[sdiaz_at_compute-3-18 ~]$ ompi_info  --all|grep &quot;plm_rsh_agent&quot;
</span><br>
<span class="quotelev1"> &gt;         How many plm_rsh_agent instances to invoke concurrently (must 
</span><br>
be &gt; 0)
<br>
<span class="quotelev1"> &gt;         MCA plm: parameter &quot;plm_rsh_agent&quot; (current value: &quot;ssh : 
</span><br>
rsh&quot;, data source: default value, synonyms: pls_rsh_agent)
<br>
<span class="quotelev4"> &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<p>ERROR4
<br>
<span class="quotelev4"> &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1"> &gt;/usr/bin/ssh -x compute-3-17.local  orted --debug-daemons -mca ess env 
</span><br>
-mca orte_ess_jobid 2152464384 -mca orte_ess_vpid 1 -mca 
<br>
orte_ess_num_procs 2 --hnp-uri &gt;&quot;2152464384.0;tcp://192.168.4.143:59176&quot; 
<br>
-mca mca_base_param_file_prefix ft-enable-cr -mca 
<br>
mca_base_param_file_path 
<br>
<span class="quotelev1"> &gt;/opt/cesga/openmpi-1.3.3/share/openmpi/amca-param-sets:/home_no_usc/cesga/sdiaz/mpi_test 
</span><br>
-mca mca_base_param_file_path_force /home_no_usc/cesga/sdiaz/mpi_test
<br>
<span class="quotelev4"> &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<p><p><p><p><p><p><p><p><p><p>Josh Hursey escribi&#243;:
<br>
<span class="quotelev1">&gt; On Nov 9, 2009, at 5:33 AM, Sergio D&#237;az wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Hi Josh,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The OpenMPI version is 1.3.3.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The command ompi-ps doesn't work.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [root_at_compute-3-18 ~]# ompi-ps -j 2726959 -p 16241
</span><br>
<span class="quotelev2">&gt;&gt; [root_at_compute-3-18 ~]# ompi-ps -v -j 2726959 -p 16241
</span><br>
<span class="quotelev2">&gt;&gt; [compute-3-18.local:16254] orte_ps: Acquiring list of HNPs and setting contact info into RML...
</span><br>
<span class="quotelev2">&gt;&gt; [root_at_compute-3-18 ~]# ompi-ps -v -j 2726959
</span><br>
<span class="quotelev2">&gt;&gt; [compute-3-18.local:16255] orte_ps: Acquiring list of HNPs and setting contact info into RML...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [root_at_compute-3-18 ~]# ps uaxf | grep sdiaz
</span><br>
<span class="quotelev2">&gt;&gt; root     16260  0.0  0.0 51084  680 pts/0    S+   13:38   0:00          \_ grep sdiaz
</span><br>
<span class="quotelev2">&gt;&gt; sdiaz    16203  0.0  0.0 53164 1220 ?        Ss   13:37   0:00      \_ -bash /opt/cesga/sge62/default/spool/compute-3-18/job_scripts/2726959
</span><br>
<span class="quotelev2">&gt;&gt; sdiaz    16241  0.0  0.0 41028 2480 ?        S    13:37   0:00          \_ mpirun -np 2 -am ft-enable-cr ./pi3
</span><br>
<span class="quotelev2">&gt;&gt; sdiaz    16242  0.0  0.0 36484 1840 ?        Sl   13:37   0:00              \_ /opt/cesga/sge62/bin/lx24-x86/qrsh -inherit -nostdin -V compute-3-17.local  orted -mca ess env -mca orte_ess_jobid 2769879040 -mca orte_ess_vpid 1 -mca orte_ess_num_procs 2 --hnp-uri &quot;2769879040.0;tcp://192.168.4.143:57010&quot; -mca mca_base_param_file_prefix ft-enable-cr -mca mca_base_param_file_path /opt/cesga/openmpi-1.3.3/share/openmpi/amca-param-sets:/home_no_usc/cesga/sdiaz/mpi_test -mca mca_base_param_file_path_force /home_no_usc/cesga/sdiaz/mpi_test
</span><br>
<span class="quotelev2">&gt;&gt; sdiaz    16245  0.1  0.0 99464 4616 ?        Sl   13:37   0:00              \_ ./pi3
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [root_at_compute-3-18 ~]# ompi-ps -n c3-18
</span><br>
<span class="quotelev2">&gt;&gt; [root_at_compute-3-18 ~]# ompi-ps -n compute-3-18
</span><br>
<span class="quotelev2">&gt;&gt; [root_at_compute-3-18 ~]# ompi-ps -n
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; There is not directory on the /tmp of the node. However, if the application is run without SGE, the directory is created
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This may be the core of the problem. ompi-ps and other command line tools (e.g., ompi-checkpoint) look for the Open MPI session directory in /tmp in order to find the connection information to connect to the mpirun process (internally called the HNP or Head Node Process).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you change the location of the temporary directory in SGE? The temporary directory is usually set via an environment variable (e.g., TMPDIR, or TMP). So removing the environment variable or setting it to /tmp might help.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; but if I do ompi-ps -j MPIRUN_PID, it seems hanged and I interrupt it. Does it take long time?
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It should not take a long time. It is just querying the mpirun process for state information.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; what means the option -j of ompi-ps command? isn't it related to a batch system(like sge, condor...), is it?
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The '-j' option allows the user to specify the Open MPI jobid. This is completely different than the jobid provided by the batch system. In general, users should not need to specify the -j option. It is useful when you have multiple Open MPI jobs, and want a summary of just one of them.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for the ticket. I will follow it.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Talking with Alan, I realized that there are few transport protocols that are supported. And maybe it is the problem. Currently, SGE is using qrsh to expand mpi process. I can change this protocol and use ssh. So, I'm going to test it this afternoon and I will comment to you the results.
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Try 'ssh' and see if that helps. I suspect the problem is with the session directory location though.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; Sergio
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Josh Hursey escribi&#243;:
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Oct 28, 2009, at 7:41 AM, Sergio D&#237;az wrote: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hello, 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I have achieved the checkpoint of an easy program without SGE. Now, I'm trying to do the integration openmpi+sge but I have some problems... When I try to do checkpoint of the mpirun PID, I got an error similar to the error gotten when the PID doesn't exit. The example below.     
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I do not have any experience with the SGE environment, so I suspect that there may something 'special' about the environment that is tripping up the ompi-checkpoint tool. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; First of all, what version of Open MPI are you using? 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Somethings to check: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  - Does 'ompi-ps' work when your application is running? 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  - Is there an /tmp/openmpi-sessions-* directory on the node where mpirun is currently running? This directory contains information on how to connect to the mpirun process from an external tool, if it's missing then this could be the cause of the problem. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Any ideas? 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Somebody have a script to do it automatic with SGE?. For example I have one to do checkpoint each X seconds with BLCR and non-mpi jobs. It is launched by SGE if you have configured the queue and the ckpt environment. 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I do not know of any integration of the Open MPI checkpointing work with SGE at the moment. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; As far as time triggered checkpointing, I have a feature ticket open about this: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   <a href="https://svn.open-mpi.org/trac/ompi/ticket/1961">https://svn.open-mpi.org/trac/ompi/ticket/1961</a> 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It is not available yet, but in the works. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Is it possible choose the name of the ckpt folder when you do the ompi-checkpoint? I can't find the option to do it. 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Not at this time. Though I could see it as a useful feature, and shouldn't be too hard to implement. I filed a ticket if you want to follow the progress: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   <a href="https://svn.open-mpi.org/trac/ompi/ticket/2098">https://svn.open-mpi.org/trac/ompi/ticket/2098</a> 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- Josh 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Regards, 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Sergio 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -------------------------------- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sdiaz_at_compute-3-17 ~]$ ps auxf 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; .... 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; root     20044  0.0  0.0  4468 1224 ?        S    13:28   0:00  \_ sge_shepherd-2645150 -bg 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; sdiaz    20072  0.0  0.0 53172 1212 ?        Ss   13:28   0:00      \_ -bash /opt/cesga/sge62/default/spool/compute-3-17/job_scripts/2645150 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; sdiaz    20112  0.2  0.0 41028 2480 ?        S    13:28   0:00          \_ mpirun -np 2 -am ft-enable-cr pi3 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; sdiaz    20113  0.0  0.0 36484 1824 ?        Sl   13:28   0:00              \_ /opt/cesga/sge62/bin/lx24-x86/qrsh -inherit -nostdin -V compute-3-18.......... 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; sdiaz    20116  1.2  0.0 99464 4616 ?        Sl   13:28   0:00              \_ pi3 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sdiaz_at_compute-3-17 ~]$ ompi-checkpoint 20112 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [compute-3-17.local:20124] HNP with PID 20112 Not found! 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sdiaz_at_compute-3-17 ~]$ ompi-checkpoint -s 20112 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [compute-3-17.local:20135] HNP with PID 20112 Not found! 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sdiaz_at_compute-3-17 ~]$ ompi-checkpoint -s --term 20112 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [compute-3-17.local:20136] HNP with PID 20112 Not found! 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sdiaz_at_compute-3-17 ~]$ ompi-checkpoint --hnp-pid 20112 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ompi-checkpoint PID_OF_MPIRUN 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   Open MPI Checkpoint Tool 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    -am &lt;arg0&gt;            Aggregate MCA parameter set file list 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    -gmca|--gmca &lt;arg0&gt; &lt;arg1&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                          Pass global MCA parameters that are applicable to 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                          all contexts (arg0 is the parameter name; arg1 is 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                          the parameter value) 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -h|--help                This help message 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    --hnp-jobid &lt;arg0&gt;    This should be the jobid of the HNP whose 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                          applications you wish to checkpoint. 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    --hnp-pid &lt;arg0&gt;      This should be the pid of the mpirun whose 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                          applications you wish to checkpoint. 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    -mca|--mca &lt;arg0&gt; &lt;arg1&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                          Pass context-specific MCA parameters; they are 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                          considered global if --gmca is not used and only 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                          one context is specified (arg0 is the parameter 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                          name; arg1 is the parameter value) 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -s|--status              Display status messages describing the progression 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                          of the checkpoint 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    --term                Terminate the application after checkpoint 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -v|--verbose             Be Verbose 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -w|--nowait              Do not wait for the application to finish 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                          checkpointing before returning 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sdiaz_at_compute-3-17 ~]$ exit 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; logout 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Connection to c3-17 closed. 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [sdiaz_at_svgd mpi_test]$ ssh c3-18 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Last login: Wed Oct 28 13:24:12 2009 from svgd.local 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -bash-3.00$ ps auxf |grep sdiaz 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; sdiaz    14412  0.0  0.0  1888  560 ?        Ss   13:28   0:00      \_ /opt/cesga/sge62/utilbin/lx24-x86/qrsh_starter /opt/cesga/sge62/default/spool/compute-3-18/active_jobs/2645150.1/1.compute-3-18 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; sdiaz    14419  0.0  0.0 35728 2260 ?        S    13:28   0:00          \_ orted -mca ess env -mca orte_ess_jobid 2295267328 -mca orte_ess_vpid 1 -mca orte_ess_num_procs 2 --hnp-uri 2295267328.0;tcp://192.168.4.144:36596 -mca mca_base_param_file_prefix ft-enable-cr -mca mca_base_param_file_path /opt/cesga/openmpi-1.3.3/share/openmpi/amca-param-sets:/home_no_usc/cesga/sdiaz/mpi_test -mca mca_base_param_file_path_force /home_no_usc/cesga/sdiaz/mpi_test 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; sdiaz    14420  0.0  0.0 99452 4596 ?        Sl   13:28   0:00              \_ pi3 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Sergio D&#237;az Montes 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Centro de Supercomputacion de Galicia 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Avda. de Vigo. s/n (Campus Sur) 15706 Santiago de Compostela (Spain) 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Tel: +34 981 56 98 10 ; Fax: +34 981 59 46 16 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; email: sdiaz_at_[hidden] ; <a href="http://www.cesga.es/">http://www.cesga.es/</a> 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;image002.jpg&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ------------------------------------------------ 
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
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden] 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
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
<span class="quotelev2">&gt;&gt;     
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11176/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-11176/image002.jpg" alt="image002.jpg">
<!-- attachment="image002.jpg" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11177.php">Jeff Squyres: "Re: [OMPI users] users Digest, Vol 1401, Issue 2"</a>
<li><strong>Previous message:</strong> <a href="11175.php">Eugene Loh: "Re: [OMPI users] Release date for 1.3.4?"</a>
<li><strong>In reply to:</strong> <a href="11164.php">Josh Hursey: "Re: [OMPI users] checkpoint opempi-1.3.3+sge62"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/12/11481.php">Josh Hursey: "Re: [OMPI users] checkpoint opempi-1.3.3+sge62"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/12/11481.php">Josh Hursey: "Re: [OMPI users] checkpoint opempi-1.3.3+sge62"</a>
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
