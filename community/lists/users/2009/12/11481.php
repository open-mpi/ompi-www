<?
$subject_val = "Re: [OMPI users] checkpoint opempi-1.3.3+sge62";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  9 13:46:16 2009" -->
<!-- isoreceived="20091209184616" -->
<!-- sent="Wed, 9 Dec 2009 13:46:12 -0500" -->
<!-- isosent="20091209184612" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] checkpoint opempi-1.3.3+sge62" -->
<!-- id="B7E4588E-18E4-4CC7-B703-926047F57EDC_at_open-mpi.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4AFC2FA8.6020301_at_cesga.es" -->
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
<strong>Date:</strong> 2009-12-09 13:46:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11482.php">Josh Hursey: "Re: [OMPI users] Changing location where checkpoints are saved"</a>
<li><strong>Previous message:</strong> <a href="11480.php">Matthew MacManes: "Re: [OMPI users] mpirun only works when -np &lt;4"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/11/11176.php">Sergio D&#237;az: "Re: [OMPI users] checkpoint opempi-1.3.3+sge62"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11518.php">Sergio Díaz: "Re: [OMPI users] checkpoint opempi-1.3.3+sge62"</a>
<li><strong>Reply:</strong> <a href="11518.php">Sergio Díaz: "Re: [OMPI users] checkpoint opempi-1.3.3+sge62"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 12, 2009, at 10:54 AM, Sergio D&#237;az wrote:
<br>
<p><span class="quotelev1">&gt; Hi Josh,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You were right. The main problem was the /tmp. SGE uses a scratch  
</span><br>
<span class="quotelev1">&gt; directory in which the jobs have temporary files. Setting TMPDIR to / 
</span><br>
<span class="quotelev1">&gt; tmp, checkpoint works!
</span><br>
<span class="quotelev1">&gt; However, when I try to restart it... I got the following error (see  
</span><br>
<span class="quotelev1">&gt; ERROR1). Option -v agrees these lines (see ERRO2).
</span><br>
<p>It is concerning that ompi-restart is segfault'ing when it errors out.  
<br>
The error message is being generated between the launch of the opal- 
<br>
restart starter command and when we try to exec(cr_restart). Usually  
<br>
the failure is related to a corruption of the metadata stored in the  
<br>
checkpoint.
<br>
<p>Can you send me the file below:
<br>
&nbsp;&nbsp;ompi_global_snapshot_28454.ckpt/0/opal_snapshot_0.ckpt/ 
<br>
snapshot_meta.data
<br>
<p>I was able to reproduce the segv (at least I think it is the same  
<br>
one). We failed to check the validity of a string when we parse the  
<br>
metadata. I committed a fix to the trunk in r22290, and requested that  
<br>
the fix be moved to the v1.4 and v1.5 branches. If you are interested  
<br>
in seeing when they get applied you can follow the following tickets:
<br>
&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/ticket/2140">https://svn.open-mpi.org/trac/ompi/ticket/2140</a>
<br>
&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/ticket/2141">https://svn.open-mpi.org/trac/ompi/ticket/2141</a>
<br>
<p>Can you try the trunk to see if the problem goes away? The development  
<br>
trunk and v1.5 series have a bunch of improvements to the C/R  
<br>
functionality that were never brought over the v1.3/v1.4 series.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I was trying to use ssh instead of rsh but I was impossible. By  
</span><br>
<span class="quotelev1">&gt; default it should use ssh and if it finds a problem, it will use  
</span><br>
<span class="quotelev1">&gt; rsh. It seems that ssh doesn't work because always use rsh.
</span><br>
<span class="quotelev1">&gt; If I change this MCA parameter, It still uses rsh.
</span><br>
<span class="quotelev1">&gt; If I set OMPI_MCA_plm_rsh_disable_qrsh variable to 1, It try to use  
</span><br>
<span class="quotelev1">&gt; ssh and doesn't works. I got --&gt; &quot;bash: orted: command not found&quot;  
</span><br>
<span class="quotelev1">&gt; and the mpi process dies.
</span><br>
<span class="quotelev1">&gt; The command which try to execute is the following and I haven't  
</span><br>
<span class="quotelev1">&gt; found yet the reason why this command doesn't found orted because I  
</span><br>
<span class="quotelev1">&gt; set the /etc/bashrc in order to get always the right path and I have  
</span><br>
<span class="quotelev1">&gt; the right path into my application. (see ERROR4).
</span><br>
<p>This seems like an SGE specific issue, so a bit out of my domain.  
<br>
Maybe others have suggestions here.
<br>
<p>-- Josh
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Many thanks!,
</span><br>
<span class="quotelev1">&gt; Sergio
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; P.S. Sorry about these long emails. I just try to show you useful  
</span><br>
<span class="quotelev1">&gt; information to identify my problems.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ERROR 1
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; [sdiaz_at_compute-3-18 ~]$ ompi-restart ompi_global_snapshot_28454.ckpt
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; Error: Unable to obtain the proper restart command to restart from  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev2">&gt; &gt;        checkpoint file (opal_snapshot_0.ckpt). Returned -1.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; Error: Unable to obtain the proper restart command to restart from  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev2">&gt; &gt;        checkpoint file (opal_snapshot_1.ckpt). Returned -1.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; [compute-3-18:28792] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt; &gt; [compute-3-18:28792] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev2">&gt; &gt; [compute-3-18:28792] Signal code:  (128)
</span><br>
<span class="quotelev2">&gt; &gt; [compute-3-18:28792] Failing at address: (nil)
</span><br>
<span class="quotelev2">&gt; &gt; [compute-3-18:28792] [ 0] /lib64/tls/libpthread.so.0 [0x33bbf0c430]
</span><br>
<span class="quotelev2">&gt; &gt; [compute-3-18:28792] [ 1] /lib64/tls/libc.so.6(__libc_free+0x25)  
</span><br>
<span class="quotelev1">&gt; [0x33bb669135]
</span><br>
<span class="quotelev2">&gt; &gt; [compute-3-18:28792] [ 2] /opt/cesga/openmpi-1.3.3/lib/libopen- 
</span><br>
<span class="quotelev1">&gt; pal.so.0(opal_argv_free+0x2e) [0x2a95586658]
</span><br>
<span class="quotelev2">&gt; &gt; [compute-3-18:28792] [ 3] /opt/cesga/openmpi-1.3.3/lib/libopen- 
</span><br>
<span class="quotelev1">&gt; pal.so.0(opal_event_fini+0x1e) [0x2a9557906e]
</span><br>
<span class="quotelev2">&gt; &gt; [compute-3-18:28792] [ 4] /opt/cesga/openmpi-1.3.3/lib/libopen- 
</span><br>
<span class="quotelev1">&gt; pal.so.0(opal_finalize+0x36) [0x2a9556bcfa]
</span><br>
<span class="quotelev2">&gt; &gt; [compute-3-18:28792] [ 5] opal-restart [0x40312a]
</span><br>
<span class="quotelev2">&gt; &gt; [compute-3-18:28792] [ 6] /lib64/tls/libc.so.6(__libc_start_main 
</span><br>
<span class="quotelev1">&gt; +0xdb) [0x33bb61c3fb]
</span><br>
<span class="quotelev2">&gt; &gt; [compute-3-18:28792] [ 7] opal-restart [0x40272a]
</span><br>
<span class="quotelev2">&gt; &gt; [compute-3-18:28792] *** End of error message ***
</span><br>
<span class="quotelev2">&gt; &gt; [compute-3-18:28793] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt; &gt; [compute-3-18:28793] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev2">&gt; &gt; [compute-3-18:28793] Signal code:  (128)
</span><br>
<span class="quotelev2">&gt; &gt; [compute-3-18:28793] Failing at address: (nil)
</span><br>
<span class="quotelev2">&gt; &gt; [compute-3-18:28793] [ 0] /lib64/tls/libpthread.so.0 [0x33bbf0c430]
</span><br>
<span class="quotelev2">&gt; &gt; [compute-3-18:28793] [ 1] /lib64/tls/libc.so.6(__libc_free+0x25)  
</span><br>
<span class="quotelev1">&gt; [0x33bb669135]
</span><br>
<span class="quotelev2">&gt; &gt; [compute-3-18:28793] [ 2] /opt/cesga/openmpi-1.3.3/lib/libopen- 
</span><br>
<span class="quotelev1">&gt; pal.so.0(opal_argv_free+0x2e) [0x2a95586658]
</span><br>
<span class="quotelev2">&gt; &gt; [compute-3-18:28793] [ 3] /opt/cesga/openmpi-1.3.3/lib/libopen- 
</span><br>
<span class="quotelev1">&gt; pal.so.0(opal_event_fini+0x1e) [0x2a9557906e]
</span><br>
<span class="quotelev2">&gt; &gt; [compute-3-18:28793] [ 4] /opt/cesga/openmpi-1.3.3/lib/libopen- 
</span><br>
<span class="quotelev1">&gt; pal.so.0(opal_finalize+0x36) [0x2a9556bcfa]
</span><br>
<span class="quotelev2">&gt; &gt; [compute-3-18:28793] [ 5] opal-restart [0x40312a]
</span><br>
<span class="quotelev2">&gt; &gt; [compute-3-18:28793] [ 6] /lib64/tls/libc.so.6(__libc_start_main 
</span><br>
<span class="quotelev1">&gt; +0xdb) [0x33bb61c3fb]
</span><br>
<span class="quotelev2">&gt; &gt; [compute-3-18:28793] [ 7] opal-restart [0x40272a]
</span><br>
<span class="quotelev2">&gt; &gt; [compute-3-18:28793] *** End of error message ***
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; mpirun noticed that process rank 0 with PID 28792 on node  
</span><br>
<span class="quotelev1">&gt; compute-3-18.local exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ERROR 2
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; [sdiaz_at_compute-3-18 ~]$ ompi-restart -v  
</span><br>
<span class="quotelev1">&gt; ompi_global_snapshot_28454.ckpt
</span><br>
<span class="quotelev2">&gt; &gt;[compute-3-18.local:28941] Checking for the existence of (/home/ 
</span><br>
<span class="quotelev1">&gt; cesga/sdiaz/ompi_global_snapshot_28454.ckpt)
</span><br>
<span class="quotelev2">&gt; &gt; [compute-3-18.local:28941] Restarting from file  
</span><br>
<span class="quotelev1">&gt; (ompi_global_snapshot_28454.ckpt)
</span><br>
<span class="quotelev2">&gt; &gt; [compute-3-18.local:28941]       Exec in self
</span><br>
<span class="quotelev2">&gt; &gt; .......
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ERROR3
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;[sdiaz_at_compute-3-18 ~]$ ompi_info  --all|grep &quot;plm_rsh_agent&quot;
</span><br>
<span class="quotelev2">&gt; &gt;         How many plm_rsh_agent instances to invoke concurrently  
</span><br>
<span class="quotelev1">&gt; (must be &gt; 0)
</span><br>
<span class="quotelev2">&gt; &gt;         MCA plm: parameter &quot;plm_rsh_agent&quot; (current value: &quot;ssh :  
</span><br>
<span class="quotelev1">&gt; rsh&quot;, data source: default value, synonyms: pls_rsh_agent)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ERROR4
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;/usr/bin/ssh -x compute-3-17.local  orted --debug-daemons -mca ess  
</span><br>
<span class="quotelev1">&gt; env -mca orte_ess_jobid 2152464384 -mca orte_ess_vpid 1 -mca  
</span><br>
<span class="quotelev1">&gt; orte_ess_num_procs 2 --hnp-uri &gt;&quot;2152464384.0;tcp:// 
</span><br>
<span class="quotelev1">&gt; 192.168.4.143:59176&quot; -mca mca_base_param_file_prefix ft-enable-cr - 
</span><br>
<span class="quotelev1">&gt; mca mca_base_param_file_path &gt;/opt/cesga/openmpi-1.3.3/share/openmpi/ 
</span><br>
<span class="quotelev1">&gt; amca-param-sets:/home_no_usc/cesga/sdiaz/mpi_test -mca  
</span><br>
<span class="quotelev1">&gt; mca_base_param_file_path_force /home_no_usc/cesga/sdiaz/mpi_test
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
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
<span class="quotelev1">&gt; Josh Hursey escribi&#243;:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 9, 2009, at 5:33 AM, Sergio D&#237;az wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Josh,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The OpenMPI version is 1.3.3.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The command ompi-ps doesn't work.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [root_at_compute-3-18 ~]# ompi-ps -j 2726959 -p 16241
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [root_at_compute-3-18 ~]# ompi-ps -v -j 2726959 -p 16241
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-3-18.local:16254] orte_ps: Acquiring list of HNPs and  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; setting contact info into RML...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [root_at_compute-3-18 ~]# ompi-ps -v -j 2726959
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [compute-3-18.local:16255] orte_ps: Acquiring list of HNPs and  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; setting contact info into RML...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [root_at_compute-3-18 ~]# ps uaxf | grep sdiaz
</span><br>
<span class="quotelev3">&gt;&gt;&gt; root     16260  0.0  0.0 51084  680 pts/0    S+   13:38    
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0:00          \_ grep sdiaz
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sdiaz    16203  0.0  0.0 53164 1220 ?        Ss   13:37    
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0:00      \_ -bash /opt/cesga/sge62/default/spool/compute-3-18/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; job_scripts/2726959
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sdiaz    16241  0.0  0.0 41028 2480 ?        S    13:37    
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0:00          \_ mpirun -np 2 -am ft-enable-cr ./pi3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sdiaz    16242  0.0  0.0 36484 1840 ?        Sl   13:37    
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0:00              \_ /opt/cesga/sge62/bin/lx24-x86/qrsh -inherit - 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; nostdin -V compute-3-17.local  orted -mca ess env -mca  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orte_ess_jobid 2769879040 -mca orte_ess_vpid 1 -mca  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orte_ess_num_procs 2 --hnp-uri &quot;2769879040.0;tcp:// 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 192.168.4.143:57010&quot; -mca mca_base_param_file_prefix ft-enable-cr - 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mca mca_base_param_file_path /opt/cesga/openmpi-1.3.3/share/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; openmpi/amca-param-sets:/home_no_usc/cesga/sdiaz/mpi_test -mca  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mca_base_param_file_path_force /home_no_usc/cesga/sdiaz/mpi_test
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sdiaz    16245  0.1  0.0 99464 4616 ?        Sl   13:37    
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0:00              \_ ./pi3
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [root_at_compute-3-18 ~]# ompi-ps -n c3-18
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [root_at_compute-3-18 ~]# ompi-ps -n compute-3-18
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [root_at_compute-3-18 ~]# ompi-ps -n
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There is not directory on the /tmp of the node. However, if the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; application is run without SGE, the directory is created
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This may be the core of the problem. ompi-ps and other command line  
</span><br>
<span class="quotelev2">&gt;&gt; tools (e.g., ompi-checkpoint) look for the Open MPI session  
</span><br>
<span class="quotelev2">&gt;&gt; directory in /tmp in order to find the connection information to  
</span><br>
<span class="quotelev2">&gt;&gt; connect to the mpirun process (internally called the HNP or Head  
</span><br>
<span class="quotelev2">&gt;&gt; Node Process).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can you change the location of the temporary directory in SGE? The  
</span><br>
<span class="quotelev2">&gt;&gt; temporary directory is usually set via an environment variable  
</span><br>
<span class="quotelev2">&gt;&gt; (e.g., TMPDIR, or TMP). So removing the environment variable or  
</span><br>
<span class="quotelev2">&gt;&gt; setting it to /tmp might help.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but if I do ompi-ps -j MPIRUN_PID, it seems hanged and I interrupt  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it. Does it take long time?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It should not take a long time. It is just querying the mpirun  
</span><br>
<span class="quotelev2">&gt;&gt; process for state information.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; what means the option -j of ompi-ps command? isn't it related to a  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; batch system(like sge, condor...), is it?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The '-j' option allows the user to specify the Open MPI jobid. This  
</span><br>
<span class="quotelev2">&gt;&gt; is completely different than the jobid provided by the batch  
</span><br>
<span class="quotelev2">&gt;&gt; system. In general, users should not need to specify the -j option.  
</span><br>
<span class="quotelev2">&gt;&gt; It is useful when you have multiple Open MPI jobs, and want a  
</span><br>
<span class="quotelev2">&gt;&gt; summary of just one of them.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks for the ticket. I will follow it.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Talking with Alan, I realized that there are few transport  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; protocols that are supported. And maybe it is the problem.  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Currently, SGE is using qrsh to expand mpi process. I can change  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this protocol and use ssh. So, I'm going to test it this afternoon  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and I will comment to you the results.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Try 'ssh' and see if that helps. I suspect the problem is with the  
</span><br>
<span class="quotelev2">&gt;&gt; session directory location though.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sergio
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Josh Hursey escribi&#243;:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Oct 28, 2009, at 7:41 AM, Sergio D&#237;az wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I have achieved the checkpoint of an easy program without SGE.  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Now, I'm trying to do the integration openmpi+sge but I have  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; some problems... When I try to do checkpoint of the mpirun PID,  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I got an error similar to the error gotten when the PID doesn't  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; exit. The example below.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I do not have any experience with the SGE environment, so I  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; suspect that there may something 'special' about the environment  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; that is tripping up the ompi-checkpoint tool.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; First of all, what version of Open MPI are you using?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Somethings to check:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  - Does 'ompi-ps' work when your application is running?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  - Is there an /tmp/openmpi-sessions-* directory on the node  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; where mpirun is currently running? This directory contains  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; information on how to connect to the mpirun process from an  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; external tool, if it's missing then this could be the cause of  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the problem.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Any ideas?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Somebody have a script to do it automatic with SGE?. For example  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I have one to do checkpoint each X seconds with BLCR and non-mpi  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; jobs. It is launched by SGE if you have configured the queue and  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the ckpt environment.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I do not know of any integration of the Open MPI checkpointing  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; work with SGE at the moment.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; As far as time triggered checkpointing, I have a feature ticket  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; open about this:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   <a href="https://svn.open-mpi.org/trac/ompi/ticket/1961">https://svn.open-mpi.org/trac/ompi/ticket/1961</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; It is not available yet, but in the works.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Is it possible choose the name of the ckpt folder when you do  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the ompi-checkpoint? I can't find the option to do it.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Not at this time. Though I could see it as a useful feature, and  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; shouldn't be too hard to implement. I filed a ticket if you want  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to follow the progress:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   <a href="https://svn.open-mpi.org/trac/ompi/ticket/2098">https://svn.open-mpi.org/trac/ompi/ticket/2098</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -- Josh 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Sergio
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [sdiaz_at_compute-3-17 ~]$ ps auxf
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ....
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; root     20044  0.0  0.0  4468 1224 ?        S    13:28   0:00   
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; \_ sge_shepherd-2645150 -bg
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; sdiaz    20072  0.0  0.0 53172 1212 ?        Ss   13:28    
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 0:00      \_ -bash /opt/cesga/sge62/default/spool/compute-3-17/ 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; job_scripts/2645150
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; sdiaz    20112  0.2  0.0 41028 2480 ?        S    13:28    
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 0:00          \_ mpirun -np 2 -am ft-enable-cr pi3
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; sdiaz    20113  0.0  0.0 36484 1824 ?        Sl   13:28    
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 0:00              \_ /opt/cesga/sge62/bin/lx24-x86/qrsh -inherit  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -nostdin -V compute-3-18..........
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; sdiaz    20116  1.2  0.0 99464 4616 ?        Sl   13:28    
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 0:00              \_ pi3
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [sdiaz_at_compute-3-17 ~]$ ompi-checkpoint 20112
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [compute-3-17.local:20124] HNP with PID 20112 Not found!
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [sdiaz_at_compute-3-17 ~]$ ompi-checkpoint -s 20112
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [compute-3-17.local:20135] HNP with PID 20112 Not found!
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [sdiaz_at_compute-3-17 ~]$ ompi-checkpoint -s --term 20112
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [compute-3-17.local:20136] HNP with PID 20112 Not found!
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [sdiaz_at_compute-3-17 ~]$ ompi-checkpoint --hnp-pid 20112
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ompi-checkpoint PID_OF_MPIRUN
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   Open MPI Checkpoint Tool
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    -am &lt;arg0&gt;            Aggregate MCA parameter set file list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    -gmca|--gmca &lt;arg0&gt; &lt;arg1&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                          Pass global MCA parameters that are  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; applicable to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                          all contexts (arg0 is the parameter  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; name; arg1 is
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                          the parameter value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -h|--help                This help message
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    --hnp-jobid &lt;arg0&gt;    This should be the jobid of the HNP whose
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                          applications you wish to checkpoint.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    --hnp-pid &lt;arg0&gt;      This should be the pid of the mpirun  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; whose
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                          applications you wish to checkpoint.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    -mca|--mca &lt;arg0&gt; &lt;arg1&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                          Pass context-specific MCA parameters;  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; they are
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                          considered global if --gmca is not used  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; and only
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                          one context is specified (arg0 is the  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; parameter
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                          name; arg1 is the parameter value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -s|--status              Display status messages describing the  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; progression
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                          of the checkpoint
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    --term                Terminate the application after  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; checkpoint
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -v|--verbose             Be Verbose
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -w|--nowait              Do not wait for the application to finish
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                          checkpointing before returning
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [sdiaz_at_compute-3-17 ~]$ exit
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; logout
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Connection to c3-17 closed.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [sdiaz_at_svgd mpi_test]$ ssh c3-18
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Last login: Wed Oct 28 13:24:12 2009 from svgd.local
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -bash-3.00$ ps auxf |grep sdiaz
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; sdiaz    14412  0.0  0.0  1888  560 ?        Ss   13:28    
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 0:00      \_ /opt/cesga/sge62/utilbin/lx24-x86/qrsh_starter /opt/ 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; cesga/sge62/default/spool/compute-3-18/active_jobs/ 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 2645150.1/1.compute-3-18
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; sdiaz    14419  0.0  0.0 35728 2260 ?        S    13:28    
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 0:00          \_ orted -mca ess env -mca orte_ess_jobid  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 2295267328 -mca orte_ess_vpid 1 -mca orte_ess_num_procs 2 --hnp- 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; uri 2295267328.0;tcp://192.168.4.144:36596 -mca  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mca_base_param_file_prefix ft-enable-cr -mca  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mca_base_param_file_path /opt/cesga/openmpi-1.3.3/share/openmpi/ 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; amca-param-sets:/home_no_usc/cesga/sdiaz/mpi_test -mca  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mca_base_param_file_path_force /home_no_usc/cesga/sdiaz/mpi_test
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; sdiaz    14420  0.0  0.0 99452 4596 ?        Sl   13:28    
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 0:00              \_ pi3
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Sergio D&#237;az Montes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Centro de Supercomputacion de Galicia
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Avda. de Vigo. s/n (Campus Sur) 15706 Santiago de Compostela  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (Spain)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Tel: +34 981 56 98 10 ; Fax: +34 981 59 46 16
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; email: sdiaz_at_[hidden] ; <a href="http://www.cesga.es/">http://www.cesga.es/</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;image002.jpg&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
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
<span class="quotelev4">&gt;&gt;&gt;&gt;
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
<span class="quotelev3">&gt;&gt;&gt;
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
<li><strong>Next message:</strong> <a href="11482.php">Josh Hursey: "Re: [OMPI users] Changing location where checkpoints are saved"</a>
<li><strong>Previous message:</strong> <a href="11480.php">Matthew MacManes: "Re: [OMPI users] mpirun only works when -np &lt;4"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/11/11176.php">Sergio D&#237;az: "Re: [OMPI users] checkpoint opempi-1.3.3+sge62"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11518.php">Sergio Díaz: "Re: [OMPI users] checkpoint opempi-1.3.3+sge62"</a>
<li><strong>Reply:</strong> <a href="11518.php">Sergio Díaz: "Re: [OMPI users] checkpoint opempi-1.3.3+sge62"</a>
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
