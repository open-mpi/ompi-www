<?
$subject_val = "Re: [OMPI users] checkpoint opempi-1.3.3+sge62";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 14 12:27:20 2009" -->
<!-- isoreceived="20091214172720" -->
<!-- sent="Mon, 14 Dec 2009 18:25:27 +0100" -->
<!-- isosent="20091214172527" -->
<!-- name="Sergio D&#237;az" -->
<!-- email="sdiaz_at_[hidden]" -->
<!-- subject="Re: [OMPI users] checkpoint opempi-1.3.3+sge62" -->
<!-- id="4B267507.9010409_at_cesga.es" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="3D9CEC08-70F5-4DCB-A194-A178EA05D8AD_at_staff.uni-marburg.de" -->
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
<strong>Date:</strong> 2009-12-14 12:25:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11530.php">Eugene Loh: "Re: [OMPI users] OpenMPI problem on Fedora Core 12"</a>
<li><strong>Previous message:</strong> <a href="11528.php">Reuti: "Re: [OMPI users] checkpoint opempi-1.3.3+sge62"</a>
<li><strong>In reply to:</strong> <a href="11528.php">Reuti: "Re: [OMPI users] checkpoint opempi-1.3.3+sge62"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11534.php">Reuti: "Re: [OMPI users] checkpoint opempi-1.3.3+sge62"</a>
<li><strong>Reply:</strong> <a href="11534.php">Reuti: "Re: [OMPI users] checkpoint opempi-1.3.3+sge62"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/01/11734.php">Josh Hursey: "Re: [OMPI users] checkpoint opempi-1.3.3+sge62"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Reuti,
<br>
<p>Yes, I sent a job with SGE and I checkpointed the mpirun process, by 
<br>
hand, entering into the mpi master node. Then I killed the job with qdel 
<br>
and after that I did the ompi-restart.
<br>
I will try to integrate with SGE creating a ckpt environment but I think 
<br>
that it could be a bit difficult because:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1 -  when I do checkpoint I can't specify a directory with a 
<br>
name like checkpoint_jobid
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2 -  I can't specify the scratch directory and I have to use 
<br>
the /tmp instead of SGE's scratch directory.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3 -  I tried to restart the snapshot and it only works if I use 
<br>
the same machinefile. That is, If the job ran in the c3-13 and c3-14, I 
<br>
have to restart the job using a machinefile with these two nodes.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[sdiaz_at_svgd ~]$ ompi-restart -v -machinefile 
<br>
mpi_test/lanzar_pi3.sh.po3117822 ompi_global_snapshot_12554.ckpt
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[svgd.cesga.es:28836] Checking for the existence of 
<br>
(/home/cesga/sdiaz/ompi_global_snapshot_12554.ckpt)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[svgd.cesga.es:28836] Restarting from file 
<br>
(ompi_global_snapshot_12554.ckpt)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[svgd.cesga.es:28836]    Exec in self
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;tiempo          110
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process            1 :
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;compute-3-14.local
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;of            2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;tiempo          110
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process            0 :
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;compute-3-13.local
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;of            2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
--------------------------------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun noticed that process rank 1 with PID 8477 
<br>
on node compute-3-15 exited on signal 11 (Segmentation fault).
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
--------------------------------------------------------------------------
<br>
<p>To solve problem 1, there is a feature opened by Josh. 
<br>
(<a href="https://svn.open-mpi.org/trac/ompi/ticket/2098">https://svn.open-mpi.org/trac/ompi/ticket/2098</a>)
<br>
To solve problem 2, there is a thread in which is talked ([OMPI users] 
<br>
Changing location where checkpoints are saved) and also a bug opened by 
<br>
Josh. <a href="https://svn.open-mpi.org/trac/ompi/ticket/2139">https://svn.open-mpi.org/trac/ompi/ticket/2139</a> . I think that it 
<br>
could work... we will see.
<br>
To solve problem 3, I didn't have time to search it. But if Josh or 
<br>
anyone have an idea... please tell to us :-)
<br>
<p>Reuti, Did you test it successfully? How do you solve these problems?
<br>
<p>Regards,
<br>
Sergio
<br>
<p><p>Reuti escribi&#243;:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Am 14.12.2009 um 17:05 schrieb Sergio D&#237;az:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I got a successful checkpoint with a fresh installation and without 
</span><br>
<span class="quotelev2">&gt;&gt; use the trunk. I can't understand why it is working now and before I 
</span><br>
<span class="quotelev2">&gt;&gt; could do a successful restart... Maybe there was something wrong in 
</span><br>
<span class="quotelev2">&gt;&gt; the openmpi installation and then the metadata was created in a wrong 
</span><br>
<span class="quotelev2">&gt;&gt; way.
</span><br>
<span class="quotelev2">&gt;&gt; I will test it more and also I will test the trunk.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; Sergio
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [sdiaz_at_compute-3-13 ~]$ ompi-restart -machinefile 
</span><br>
<span class="quotelev2">&gt;&gt; mpi_test/lanzar_pi3.sh.po3117822 ompi_global_snapshot_12554.ckpt
</span><br>
<span class="quotelev2">&gt;&gt;  tiempo          110
</span><br>
<span class="quotelev2">&gt;&gt;  Process            1 :
</span><br>
<span class="quotelev2">&gt;&gt;  compute-3-14.local
</span><br>
<span class="quotelev2">&gt;&gt;                      of            2
</span><br>
<span class="quotelev2">&gt;&gt;  tiempo          110
</span><br>
<span class="quotelev2">&gt;&gt;  Process            0 :
</span><br>
<span class="quotelev2">&gt;&gt;  compute-3-13.local
</span><br>
<span class="quotelev2">&gt;&gt;                      of            2
</span><br>
<span class="quotelev2">&gt;&gt;  tiempo          120
</span><br>
<span class="quotelev2">&gt;&gt;  Process            1 :
</span><br>
<span class="quotelev2">&gt;&gt;  compute-3-14.local
</span><br>
<span class="quotelev2">&gt;&gt;                      of            2
</span><br>
<span class="quotelev2">&gt;&gt;  tiempo          120
</span><br>
<span class="quotelev2">&gt;&gt;  Process            0 :
</span><br>
<span class="quotelev2">&gt;&gt;  compute-3-13.local
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [sdiaz_at_compute-3-14 ~]$ ps auxf |grep sdiaz
</span><br>
<span class="quotelev2">&gt;&gt; sdiaz    26273  0.0  0.0 34676 1668 ?        Ss   15:58   0:00 orted 
</span><br>
<span class="quotelev2">&gt;&gt; --daemonize -mca ess env -mca orte_ess_jobid 1739128832 -mca
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; in a Tight Integration into SGE the daemon should get the argument 
</span><br>
<span class="quotelev1">&gt; --no-daemonize. Are you restarting a job on the command line, which 
</span><br>
<span class="quotelev1">&gt; ran before under SGE's supervision?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; orte_ess_vpid 1 -mca orte_ess_num_procs 2 --hnp-uri 
</span><br>
<span class="quotelev2">&gt;&gt; 1739128832.0;tcp://192.168.4.148:45551 -mca 
</span><br>
<span class="quotelev2">&gt;&gt; mca_base_param_file_prefix ft-enable-cr -mca mca_base_param_file_path 
</span><br>
<span class="quotelev2">&gt;&gt; /opt/cesga/openmpi-1.3.3_bis/share/openmpi/amca-param-sets:/home_no_usc/cesga/sdiaz 
</span><br>
<span class="quotelev2">&gt;&gt; -mca mca_base_param_file_path_force /home_no_usc/cesga/sdiaz
</span><br>
<span class="quotelev2">&gt;&gt; sdiaz    26274  0.1  0.0 15984  504 ?        Sl   15:58   0:00  \_ 
</span><br>
<span class="quotelev2">&gt;&gt; cr_restart 
</span><br>
<span class="quotelev2">&gt;&gt; /home/cesga/sdiaz/ompi_global_snapshot_12554.ckpt/0/opal_snapshot_1.ckpt/ompi_blcr_context.26047 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; sdiaz    26047  1.5  0.0 99460 3624 ?        Sl   15:58   0:00      
</span><br>
<span class="quotelev2">&gt;&gt; \_ ./pi3
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [sdiaz_at_compute-3-13 ~]$ ps auxf |grep sdiaz
</span><br>
<span class="quotelev2">&gt;&gt; root     12878  0.0  0.0 90260 3000 pts/0    S    15:55   0:00  
</span><br>
<span class="quotelev2">&gt;&gt; |       \_ su - sdiaz
</span><br>
<span class="quotelev2">&gt;&gt; sdiaz    12880  0.0  0.0 53432 1512 pts/0    S    15:55   0:00  
</span><br>
<span class="quotelev2">&gt;&gt; |           \_ -bash
</span><br>
<span class="quotelev2">&gt;&gt; sdiaz    13070  0.3  0.0 39988 2500 pts/0    S+   15:58   0:00  
</span><br>
<span class="quotelev2">&gt;&gt; |               \_ mpirun -am ft-enable-cr --default-hostfile 
</span><br>
<span class="quotelev2">&gt;&gt; mpi_test/lanzar_pi3.sh.po3117822 --app 
</span><br>
<span class="quotelev2">&gt;&gt; /home/cesga/sdiaz/ompi_global_snapshot_12554.ckpt/restart-appfile
</span><br>
<span class="quotelev2">&gt;&gt; sdiaz    13073  0.0  0.0 15988  508 pts/0    Sl+  15:58   0:00  
</span><br>
<span class="quotelev2">&gt;&gt; |                   \_ cr_restart 
</span><br>
<span class="quotelev2">&gt;&gt; /home/cesga/sdiaz/ompi_global_snapshot_12554.ckpt/0/opal_snapshot_0.ckpt/ompi_blcr_context.12558 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; sdiaz    12558  0.2  0.0 99464 3616 pts/0    Sl+  15:58   0:00  
</span><br>
<span class="quotelev2">&gt;&gt; |                       \_ ./pi3
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sergio D&#237;az escribi&#243;:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Josh
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Here you go the file.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I will try to apply the trunk but I think that I broke-up my openmpi 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; installation doing &quot;something&quot; and I don't know what :-( . I was 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; modifying the mca parameters...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When I send a job, the orted daemon expanded in the SLAVE host is 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; launched in a bucle till they spend all the reserved memory.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It is very strange so I will compile it again, I will reproduce the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; bug and then I will test the trunk.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks a lot for the support and tickets opened.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sergio
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sdiaz    30279  0.0  0.0  1888  560 ?        Ds   12:54   0:00      
</span><br>
<span class="quotelev3">&gt;&gt;&gt; \_ /opt/cesga/sge62/utilbin/lx24-x86/qrsh_starter 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/cesga/sge62/default/spool/compute
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sdiaz    30286  0.0  0.0 52772 1188 ?        D    12:54   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0:00          \_ /bin/bash /opt/cesga/openmpi-1.3.3/bin/orted -mca 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ess env -mca orte_ess_jobid 219
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sdiaz    30322  0.0  0.0 52772 1188 ?        S    12:54   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0:00              \_ /bin/bash /opt/cesga/openmpi-1.3.3/bin/orted
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sdiaz    30358  0.0  0.0 52772 1188 ?        D    12:54   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0:00                  \_ /bin/bash /opt/cesga/openmpi-1.3.3/bin/orted
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sdiaz    30394  0.0  0.0 52772 1188 ?        D    12:54   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0:00                      \_ /bin/bash 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/cesga/openmpi-1.3.3/bin/orted
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sdiaz    30430  0.0  0.0 52772 1188 ?        D    12:54   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0:00                          \_ /bin/bash 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/cesga/openmpi-1.3.3/bin/orted
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sdiaz    30466  0.0  0.0 52772 1188 ?        D    12:54   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0:00                              \_ /bin/bash 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/cesga/openmpi-1.3.3/bin/orted
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sdiaz    30502  0.0  0.0 52772 1188 ?        D    12:54   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0:00                                  \_ /bin/bash 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/cesga/openmpi-1.3.3/bin/orted
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sdiaz    30538  0.0  0.0 52772 1188 ?        D    12:54   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0:00                                      \_ /bin/bash 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/cesga/openmpi-1.3.3/bin/orted
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sdiaz    30574  0.0  0.0 52772 1188 ?        D    12:54   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0:00                                          \_ /bin/bash 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/cesga/openmpi-1.3.3/bin/orted
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ....
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Josh Hursey escribi&#243;:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Nov 12, 2009, at 10:54 AM, Sergio D&#237;az wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi Josh,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; You were right. The main problem was the /tmp. SGE uses a scratch 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; directory in which the jobs have temporary files. Setting TMPDIR 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; to /tmp, checkpoint works!
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; However, when I try to restart it... I got the following error 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (see ERROR1). Option -v agrees these lines (see ERRO2).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; It is concerning that ompi-restart is segfault'ing when it errors 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; out. The error message is being generated between the launch of the 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; opal-restart starter command and when we try to exec(cr_restart). 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Usually the failure is related to a corruption of the metadata 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; stored in the checkpoint.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Can you send me the file below:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  ompi_global_snapshot_28454.ckpt/0/opal_snapshot_0.ckpt/snapshot_meta.data 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I was able to reproduce the segv (at least I think it is the same 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; one). We failed to check the validity of a string when we parse the 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; metadata. I committed a fix to the trunk in r22290, and requested 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; that the fix be moved to the v1.4 and v1.5 branches. If you are 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; interested in seeing when they get applied you can follow the 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; following tickets:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   <a href="https://svn.open-mpi.org/trac/ompi/ticket/2140">https://svn.open-mpi.org/trac/ompi/ticket/2140</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   <a href="https://svn.open-mpi.org/trac/ompi/ticket/2141">https://svn.open-mpi.org/trac/ompi/ticket/2141</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Can you try the trunk to see if the problem goes away? The 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; development trunk and v1.5 series have a bunch of improvements to 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the C/R functionality that were never brought over the v1.3/v1.4 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; series.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I was trying to use ssh instead of rsh but I was impossible. By 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; default it should use ssh and if it finds a problem, it will use 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; rsh. It seems that ssh doesn't work because always use rsh.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; If I change this MCA parameter, It still uses rsh.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; If I set OMPI_MCA_plm_rsh_disable_qrsh variable to 1, It try to 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; use ssh and doesn't works. I got --&gt; &quot;bash: orted: command not 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; found&quot; and the mpi process dies.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The command which try to execute is the following and I haven't 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; found yet the reason why this command doesn't found orted because 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I set the /etc/bashrc in order to get always the right path and I 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; have the right path into my application. (see ERROR4).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This seems like an SGE specific issue, so a bit out of my domain. 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Maybe others have suggestions here.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -- Josh
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Many thanks!,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Sergio
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; P.S. Sorry about these long emails. I just try to show you useful 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; information to identify my problems.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ERROR 1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; [sdiaz_at_compute-3-18 ~]$ ompi-restart 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ompi_global_snapshot_28454.ckpt
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; Error: Unable to obtain the proper restart command to restart 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; from the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt;        checkpoint file (opal_snapshot_0.ckpt). Returned -1.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; Error: Unable to obtain the proper restart command to restart 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; from the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt;        checkpoint file (opal_snapshot_1.ckpt). Returned -1.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; [compute-3-18:28792] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; [compute-3-18:28792] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; [compute-3-18:28792] Signal code:  (128)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; [compute-3-18:28792] Failing at address: (nil)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; [compute-3-18:28792] [ 0] /lib64/tls/libpthread.so.0 [0x33bbf0c430]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; [compute-3-18:28792] [ 1] /lib64/tls/libc.so.6(__libc_free+0x25) 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [0x33bb669135]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; [compute-3-18:28792] [ 2] 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /opt/cesga/openmpi-1.3.3/lib/libopen-pal.so.0(opal_argv_free+0x2e) 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [0x2a95586658]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; [compute-3-18:28792] [ 3] 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /opt/cesga/openmpi-1.3.3/lib/libopen-pal.so.0(opal_event_fini+0x1e) 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [0x2a9557906e]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; [compute-3-18:28792] [ 4] 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /opt/cesga/openmpi-1.3.3/lib/libopen-pal.so.0(opal_finalize+0x36) 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [0x2a9556bcfa]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; [compute-3-18:28792] [ 5] opal-restart [0x40312a]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; [compute-3-18:28792] [ 6] 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /lib64/tls/libc.so.6(__libc_start_main+0xdb) [0x33bb61c3fb]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; [compute-3-18:28792] [ 7] opal-restart [0x40272a]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; [compute-3-18:28792] *** End of error message ***
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; [compute-3-18:28793] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; [compute-3-18:28793] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; [compute-3-18:28793] Signal code:  (128)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; [compute-3-18:28793] Failing at address: (nil)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; [compute-3-18:28793] [ 0] /lib64/tls/libpthread.so.0 [0x33bbf0c430]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; [compute-3-18:28793] [ 1] /lib64/tls/libc.so.6(__libc_free+0x25) 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [0x33bb669135]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; [compute-3-18:28793] [ 2] 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /opt/cesga/openmpi-1.3.3/lib/libopen-pal.so.0(opal_argv_free+0x2e) 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [0x2a95586658]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; [compute-3-18:28793] [ 3] 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /opt/cesga/openmpi-1.3.3/lib/libopen-pal.so.0(opal_event_fini+0x1e) 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [0x2a9557906e]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; [compute-3-18:28793] [ 4] 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /opt/cesga/openmpi-1.3.3/lib/libopen-pal.so.0(opal_finalize+0x36) 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [0x2a9556bcfa]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; [compute-3-18:28793] [ 5] opal-restart [0x40312a]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; [compute-3-18:28793] [ 6] 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /lib64/tls/libc.so.6(__libc_start_main+0xdb) [0x33bb61c3fb]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; [compute-3-18:28793] [ 7] opal-restart [0x40272a]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; [compute-3-18:28793] *** End of error message ***
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; mpirun noticed that process rank 0 with PID 28792 on node 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; compute-3-18.local exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ERROR 2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; [sdiaz_at_compute-3-18 ~]$ ompi-restart -v 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ompi_global_snapshot_28454.ckpt
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt;[compute-3-18.local:28941] Checking for the existence of 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (/home/cesga/sdiaz/ompi_global_snapshot_28454.ckpt)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; [compute-3-18.local:28941] Restarting from file 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (ompi_global_snapshot_28454.ckpt)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; [compute-3-18.local:28941]       Exec in self
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; .......
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ERROR3
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt;[sdiaz_at_compute-3-18 ~]$ ompi_info  --all|grep &quot;plm_rsh_agent&quot;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt;         How many plm_rsh_agent instances to invoke concurrently 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (must be &gt; 0)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt;         MCA plm: parameter &quot;plm_rsh_agent&quot; (current value: &quot;ssh 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; : rsh&quot;, data source: default value, synonyms: pls_rsh_agent)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ERROR4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt;/usr/bin/ssh -x compute-3-17.local  orted --debug-daemons -mca 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ess env -mca orte_ess_jobid 2152464384 -mca orte_ess_vpid 1 -mca 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; orte_ess_num_procs 2 --hnp-uri 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt;&quot;2152464384.0;tcp://192.168.4.143:59176&quot; -mca 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mca_base_param_file_prefix ft-enable-cr -mca 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mca_base_param_file_path 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt;/opt/cesga/openmpi-1.3.3/share/openmpi/amca-param-sets:/home_no_usc/cesga/sdiaz/mpi_test 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -mca mca_base_param_file_path_force /home_no_usc/cesga/sdiaz/mpi_test
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
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
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Josh Hursey escribi&#243;:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Nov 9, 2009, at 5:33 AM, Sergio D&#237;az wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi Josh,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; The OpenMPI version is 1.3.3.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; The command ompi-ps doesn't work.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [root_at_compute-3-18 ~]# ompi-ps -j 2726959 -p 16241
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [root_at_compute-3-18 ~]# ompi-ps -v -j 2726959 -p 16241
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-3-18.local:16254] orte_ps: Acquiring list of HNPs and 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; setting contact info into RML...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [root_at_compute-3-18 ~]# ompi-ps -v -j 2726959
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-3-18.local:16255] orte_ps: Acquiring list of HNPs and 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; setting contact info into RML...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [root_at_compute-3-18 ~]# ps uaxf | grep sdiaz
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; root     16260  0.0  0.0 51084  680 pts/0    S+   13:38   
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 0:00          \_ grep sdiaz
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; sdiaz    16203  0.0  0.0 53164 1220 ?        Ss   13:37   
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 0:00      \_ -bash 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; /opt/cesga/sge62/default/spool/compute-3-18/job_scripts/2726959
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; sdiaz    16241  0.0  0.0 41028 2480 ?        S    13:37   
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 0:00          \_ mpirun -np 2 -am ft-enable-cr ./pi3
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; sdiaz    16242  0.0  0.0 36484 1840 ?        Sl   13:37   
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 0:00              \_ /opt/cesga/sge62/bin/lx24-x86/qrsh -inherit 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; -nostdin -V compute-3-17.local  orted -mca ess env -mca 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; orte_ess_jobid 2769879040 -mca orte_ess_vpid 1 -mca 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; orte_ess_num_procs 2 --hnp-uri 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &quot;2769879040.0;tcp://192.168.4.143:57010&quot; -mca 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; mca_base_param_file_prefix ft-enable-cr -mca 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; mca_base_param_file_path 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; /opt/cesga/openmpi-1.3.3/share/openmpi/amca-param-sets:/home_no_usc/cesga/sdiaz/mpi_test 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; -mca mca_base_param_file_path_force 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; /home_no_usc/cesga/sdiaz/mpi_test
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; sdiaz    16245  0.1  0.0 99464 4616 ?        Sl   13:37   
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 0:00              \_ ./pi3
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [root_at_compute-3-18 ~]# ompi-ps -n c3-18
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [root_at_compute-3-18 ~]# ompi-ps -n compute-3-18
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [root_at_compute-3-18 ~]# ompi-ps -n
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; There is not directory on the /tmp of the node. However, if the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; application is run without SGE, the directory is created
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; This may be the core of the problem. ompi-ps and other command 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; line tools (e.g., ompi-checkpoint) look for the Open MPI session 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; directory in /tmp in order to find the connection information to 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; connect to the mpirun process (internally called the HNP or Head 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Node Process).
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Can you change the location of the temporary directory in SGE? 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; The temporary directory is usually set via an environment 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; variable (e.g., TMPDIR, or TMP). So removing the environment 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; variable or setting it to /tmp might help.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; but if I do ompi-ps -j MPIRUN_PID, it seems hanged and I 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; interrupt it. Does it take long time?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; It should not take a long time. It is just querying the mpirun 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; process for state information.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; what means the option -j of ompi-ps command? isn't it related to 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; a batch system(like sge, condor...), is it?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; The '-j' option allows the user to specify the Open MPI jobid. 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; This is completely different than the jobid provided by the batch 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; system. In general, users should not need to specify the -j 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; option. It is useful when you have multiple Open MPI jobs, and 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; want a summary of just one of them.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks for the ticket. I will follow it.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Talking with Alan, I realized that there are few transport 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; protocols that are supported. And maybe it is the problem. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Currently, SGE is using qrsh to expand mpi process. I can change 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; this protocol and use ssh. So, I'm going to test it this 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; afternoon and I will comment to you the results.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Try 'ssh' and see if that helps. I suspect the problem is with 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; the session directory location though.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Sergio
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Josh Hursey escribi&#243;:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Oct 28, 2009, at 7:41 AM, Sergio D&#237;az wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I have achieved the checkpoint of an easy program without SGE. 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Now, I'm trying to do the integration openmpi+sge but I have 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; some problems... When I try to do checkpoint of the mpirun 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; PID, I got an error similar to the error gotten when the PID 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; doesn't exit. The example below.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I do not have any experience with the SGE environment, so I 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; suspect that there may something 'special' about the 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; environment that is tripping up the ompi-checkpoint tool.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; First of all, what version of Open MPI are you using?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Somethings to check:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  - Does 'ompi-ps' work when your application is running?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  - Is there an /tmp/openmpi-sessions-* directory on the node 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; where mpirun is currently running? This directory contains 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; information on how to connect to the mpirun process from an 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; external tool, if it's missing then this could be the cause of 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; the problem.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Any ideas?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Somebody have a script to do it automatic with SGE?. For 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; example I have one to do checkpoint each X seconds with BLCR 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; and non-mpi jobs. It is launched by SGE if you have configured 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; the queue and the ckpt environment.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I do not know of any integration of the Open MPI checkpointing 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; work with SGE at the moment.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; As far as time triggered checkpointing, I have a feature ticket 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; open about this:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;   <a href="https://svn.open-mpi.org/trac/ompi/ticket/1961">https://svn.open-mpi.org/trac/ompi/ticket/1961</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; It is not available yet, but in the works.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Is it possible choose the name of the ckpt folder when you do 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; the ompi-checkpoint? I can't find the option to do it.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Not at this time. Though I could see it as a useful feature, 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; and shouldn't be too hard to implement. I filed a ticket if you 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; want to follow the progress:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;   <a href="https://svn.open-mpi.org/trac/ompi/ticket/2098">https://svn.open-mpi.org/trac/ompi/ticket/2098</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -- Josh
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Sergio
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [sdiaz_at_compute-3-17 ~]$ ps auxf
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ....
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; root     20044  0.0  0.0  4468 1224 ?        S    13:28   
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 0:00  \_ sge_shepherd-2645150 -bg
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; sdiaz    20072  0.0  0.0 53172 1212 ?        Ss   13:28   
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 0:00      \_ -bash 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; /opt/cesga/sge62/default/spool/compute-3-17/job_scripts/2645150
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; sdiaz    20112  0.2  0.0 41028 2480 ?        S    13:28   
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 0:00          \_ mpirun -np 2 -am ft-enable-cr pi3
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; sdiaz    20113  0.0  0.0 36484 1824 ?        Sl   13:28   
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 0:00              \_ /opt/cesga/sge62/bin/lx24-x86/qrsh 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -inherit -nostdin -V compute-3-18..........
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; sdiaz    20116  1.2  0.0 99464 4616 ?        Sl   13:28   
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 0:00              \_ pi3
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [sdiaz_at_compute-3-17 ~]$ ompi-checkpoint 20112
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-3-17.local:20124] HNP with PID 20112 Not found!
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [sdiaz_at_compute-3-17 ~]$ ompi-checkpoint -s 20112
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-3-17.local:20135] HNP with PID 20112 Not found!
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [sdiaz_at_compute-3-17 ~]$ ompi-checkpoint -s --term 20112
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [compute-3-17.local:20136] HNP with PID 20112 Not found!
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [sdiaz_at_compute-3-17 ~]$ ompi-checkpoint --hnp-pid 20112
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ompi-checkpoint PID_OF_MPIRUN
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;   Open MPI Checkpoint Tool
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;    -am &lt;arg0&gt;            Aggregate MCA parameter set file list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;    -gmca|--gmca &lt;arg0&gt; &lt;arg1&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                          Pass global MCA parameters that are 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; applicable to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                          all contexts (arg0 is the parameter 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; name; arg1 is
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                          the parameter value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -h|--help                This help message
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;    --hnp-jobid &lt;arg0&gt;    This should be the jobid of the HNP 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; whose
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                          applications you wish to checkpoint.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;    --hnp-pid &lt;arg0&gt;      This should be the pid of the mpirun 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; whose
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                          applications you wish to checkpoint.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;    -mca|--mca &lt;arg0&gt; &lt;arg1&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                          Pass context-specific MCA parameters; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; they are
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                          considered global if --gmca is not 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; used and only
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                          one context is specified (arg0 is the 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; parameter
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                          name; arg1 is the parameter value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -s|--status              Display status messages describing 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; the progression
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                          of the checkpoint
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;    --term                Terminate the application after 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; checkpoint
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -v|--verbose             Be Verbose
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -w|--nowait              Do not wait for the application to 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; finish
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                          checkpointing before returning
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [sdiaz_at_compute-3-17 ~]$ exit
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; logout
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Connection to c3-17 closed.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [sdiaz_at_svgd mpi_test]$ ssh c3-18
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Last login: Wed Oct 28 13:24:12 2009 from svgd.local
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -bash-3.00$ ps auxf |grep sdiaz
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; sdiaz    14412  0.0  0.0  1888  560 ?        Ss   13:28   
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 0:00      \_ /opt/cesga/sge62/utilbin/lx24-x86/qrsh_starter 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; /opt/cesga/sge62/default/spool/compute-3-18/active_jobs/2645150.1/1.compute-3-18 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; sdiaz    14419  0.0  0.0 35728 2260 ?        S    13:28   
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 0:00          \_ orted -mca ess env -mca orte_ess_jobid 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 2295267328 -mca orte_ess_vpid 1 -mca orte_ess_num_procs 2 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --hnp-uri 2295267328.0;tcp://192.168.4.144:36596 -mca 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mca_base_param_file_prefix ft-enable-cr -mca 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mca_base_param_file_path 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; /opt/cesga/openmpi-1.3.3/share/openmpi/amca-param-sets:/home_no_usc/cesga/sdiaz/mpi_test 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -mca mca_base_param_file_path_force 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; /home_no_usc/cesga/sdiaz/mpi_test
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; sdiaz    14420  0.0  0.0 99452 4596 ?        Sl   13:28   
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 0:00              \_ pi3
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Sergio D&#237;az Montes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Centro de Supercomputacion de Galicia
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Avda. de Vigo. s/n (Campus Sur) 15706 Santiago de Compostela 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (Spain)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Tel: +34 981 56 98 10 ; Fax: +34 981 59 46 16
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; email: sdiaz_at_[hidden] ; <a href="http://www.cesga.es/">http://www.cesga.es/</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &lt;image002.jpg&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Sergio D&#237;az Montes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Centro de Supercomputacion de Galicia
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Avda. de Vigo. s/n (Campus Sur) 15706 Santiago de Compostela 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; (Spain)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Tel: +34 981 56 98 10 ; Fax: +34 981 59 46 16
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; email: sdiaz_at_[hidden] ; <a href="http://www.cesga.es/">http://www.cesga.es/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &lt;image002.jpg&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
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
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Avda. de Vigo. s/n (Campus Sur) 15706 Santiago de Compostela (Spain)
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
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
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
<span class="quotelev3">&gt;&gt;&gt; &lt;mime-attachment.jpeg&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________ users mailing list 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden] <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev2">&gt;&gt; &lt;mime-attachment.jpeg&gt;&lt;image002.jpg&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11529/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-11529/image002.jpg" alt="image002.jpg">
<!-- attachment="image002.jpg" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11530.php">Eugene Loh: "Re: [OMPI users] OpenMPI problem on Fedora Core 12"</a>
<li><strong>Previous message:</strong> <a href="11528.php">Reuti: "Re: [OMPI users] checkpoint opempi-1.3.3+sge62"</a>
<li><strong>In reply to:</strong> <a href="11528.php">Reuti: "Re: [OMPI users] checkpoint opempi-1.3.3+sge62"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11534.php">Reuti: "Re: [OMPI users] checkpoint opempi-1.3.3+sge62"</a>
<li><strong>Reply:</strong> <a href="11534.php">Reuti: "Re: [OMPI users] checkpoint opempi-1.3.3+sge62"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/01/11734.php">Josh Hursey: "Re: [OMPI users] checkpoint opempi-1.3.3+sge62"</a>
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
