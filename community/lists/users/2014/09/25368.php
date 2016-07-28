<?
$subject_val = "Re: [OMPI users] Process is hanging";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Sep 21 11:54:11 2014" -->
<!-- isoreceived="20140921155411" -->
<!-- sent="Sun, 21 Sep 2014 08:54:01 -0700" -->
<!-- isosent="20140921155401" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Process is hanging" -->
<!-- id="A57EB56A-D549-49EA-8F9E-22FEBA5D008B_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="005901cfd5af$e43538c0$ac9faa40$_at_stanford.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Process is hanging<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-21 11:54:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25369.php">Lee-Ping Wang: "Re: [OMPI users] Process is hanging"</a>
<li><strong>Previous message:</strong> <a href="25367.php">Lee-Ping Wang: "Re: [OMPI users] Process is hanging"</a>
<li><strong>In reply to:</strong> <a href="25367.php">Lee-Ping Wang: "Re: [OMPI users] Process is hanging"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25369.php">Lee-Ping Wang: "Re: [OMPI users] Process is hanging"</a>
<li><strong>Reply:</strong> <a href="25369.php">Lee-Ping Wang: "Re: [OMPI users] Process is hanging"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just to be clear: is your program returning a non-zero status and then exiting, or is it segfaulting?
<br>
<p><p>On Sep 21, 2014, at 8:22 AM, Lee-Ping Wang &lt;leeping_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I&#146;m using version 1.8.1.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; -          Lee-Ping
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Ralph Castain
</span><br>
<span class="quotelev1">&gt; Sent: Sunday, September 21, 2014 6:56 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Process is hanging
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Can you please tell us what version of OMPI you are using?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; On Sep 21, 2014, at 6:08 AM, Lee-Ping Wang &lt;leeping_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi there,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I&#146;m running into an issue where mpirun isn&#146;t terminating when my executable has a nonzero exit status &#150; instead it&#146;s hanging indefinitely.  I&#146;m attaching my process tree, the error message from the application, and the messages printed to stderr.   Please let me know what I can do.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; -          Lee-Ping
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; === Process Tree ===
</span><br>
<span class="quotelev1">&gt; leeping_at_vsp-compute-13:~$ ps xjf
</span><br>
<span class="quotelev1">&gt; PPID   PID  PGID   SID TTY      TPGID STAT   UID   TIME COMMAND
</span><br>
<span class="quotelev1">&gt; 31969 31977 31969 31969 ?           -1 S    48618   0:00 sshd: leeping_at_pts/1
</span><br>
<span class="quotelev1">&gt; 31977 31978 31978 31978 pts/1    32038 Ss   48618   0:00  \_ -bash
</span><br>
<span class="quotelev1">&gt; 31978 32038 32038 31978 pts/1    32038 R+   48618   0:00      \_ ps xjf
</span><br>
<span class="quotelev1">&gt; 23667 29307 29307 29307 ?           -1 Ss   48618   0:00 /bin/bash /home/leeping/temp/leeping-workers/10276/worker1.sh
</span><br>
<span class="quotelev1">&gt; 29307 29308 29307 29307 ?           -1 S    48618   0:00  \_ /bin/bash /home/leeping/temp/leeping-workers/10276/worker2.sh
</span><br>
<span class="quotelev1">&gt; 29308 29425 29307 29307 ?           -1 S    48618   0:00      \_ ./work_queue_worker -d all --cores 6 -t 86400s localhost 9876
</span><br>
<span class="quotelev1">&gt; 29425 26245 26245 29307 ?           -1 S    48618   0:00      |   \_ sh -c optimize-geometry.py initial.xyz --method b3lyp --basis &quot;6-31g(d)&quot; --charge 0 --mult 1 &amp;&gt; optimize.log
</span><br>
<span class="quotelev1">&gt; 26245 26246 26245 29307 ?           -1 Sl   48618   0:01      |       \_ /home/leeping/local/bin/python /home/leeping/local/bin/optimize-geometry.py initial.xyz --method b3lyp --basis 6-31g(d) --charge 0 --mult 1
</span><br>
<span class="quotelev1">&gt; 26246 27834 26245 29307 ?           -1 S    48618   0:00      |           \_ /bin/sh -c qchem42 -np 6 -save optimize.in optimize.out optimize.d 2&gt; optimize.err
</span><br>
<span class="quotelev1">&gt; 27834 27835 26245 29307 ?           -1 S    48618   0:00      |               \_ /bin/bash /home/leeping/opt/bin/qchem42 -np 6 -save optimize.in optimize.out optimize.d
</span><br>
<span class="quotelev1">&gt; 27835 27897 26245 29307 ?           -1 S    48618   0:00      |                   \_ /bin/csh -f /opt/scratch/leeping/opt/qchem-4.2/bin/qchem -np 6 -nt 1 -save optimize.in optimize.out optimize.d
</span><br>
<span class="quotelev1">&gt; 27897 27921 26245 29307 ?           -1 S    48618   0:00      |                       \_ /bin/csh -f /opt/scratch/leeping/opt/qchem-4.2/bin/parallel.csh optimize.in 6 0 ./optimize.d/ 27897
</span><br>
<span class="quotelev1">&gt; 27921 27926 26245 29307 ?           -1 Sl   48618   0:00      |                           \_ /opt/scratch/leeping/opt/qchem-4.2/ext-libs/openmpi/bin/mpirun -np 6 /opt/scratch/leeping/opt/qchem-4.2/exe/qcprog.exe .optimize.in.27897.qcin.1 ./optimize.d/
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; === Application Error Message ===
</span><br>
<span class="quotelev1">&gt; 100    -843.2762335150      5.69E-08  00000    Convergence failure
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Q-Chem fatal error occurred in module /home/leeping/src/qchem/scfman/scfman.C, line 4377:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; SCF failed to converge
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Sat Sep 20 23:57:37 2014
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; === Standard error ===
</span><br>
<span class="quotelev1">&gt; leeping_at_vsp-compute-13:/opt/scratch/leeping/worker-48618-29425/t.62$ cat optimize.err
</span><br>
<span class="quotelev1">&gt; [vsp-compute-13:27929] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [vsp-compute-13:27929] Signal: Aborted (6)
</span><br>
<span class="quotelev1">&gt; [vsp-compute-13:27929] Signal code:  (-6)
</span><br>
<span class="quotelev1">&gt; [vsp-compute-13:27932] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [vsp-compute-13:27932] Signal: Aborted (6)
</span><br>
<span class="quotelev1">&gt; [vsp-compute-13:27932] Signal code:  (-6)
</span><br>
<span class="quotelev1">&gt; [vsp-compute-13:27934] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [vsp-compute-13:27934] Signal: Aborted (6)
</span><br>
<span class="quotelev1">&gt; [vsp-compute-13:27934] Signal code:  (-6)
</span><br>
<span class="quotelev1">&gt; [vsp-compute-13:27928] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [vsp-compute-13:27928] Signal: Aborted (6)
</span><br>
<span class="quotelev1">&gt; [vsp-compute-13:27928] Signal code:  (-6)
</span><br>
<span class="quotelev1">&gt; [vsp-compute-13:27936] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [vsp-compute-13:27936] Signal: Aborted (6)
</span><br>
<span class="quotelev1">&gt; [vsp-compute-13:27936] Signal code:  (-6)
</span><br>
<span class="quotelev1">&gt; [vsp-compute-13:27930] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [vsp-compute-13:27930] Signal: Aborted (6)
</span><br>
<span class="quotelev1">&gt; [vsp-compute-13:27930] Signal code:  (-6)
</span><br>
<span class="quotelev1">&gt; [vsp-compute-13:27932] [ 0] /lib64/libpthread.so.0[0x3464c0eb70]
</span><br>
<span class="quotelev1">&gt; [vsp-compute-13:27932] [ 1] [vsp-compute-13:27928] [ 0] /lib64/libpthread.so.0[0x3464c0eb70]
</span><br>
<span class="quotelev1">&gt; [vsp-compute-13:27928] [ 1] /lib64/libc.so.6(gsignal+0x35)[0x3464430265]
</span><br>
<span class="quotelev1">&gt; [vsp-compute-13:27928] [ 2] [vsp-compute-13:27934] [ 0] /lib64/libpthread.so.0[0x3464c0eb70]
</span><br>
<span class="quotelev1">&gt; [vsp-compute-13:27934] [ 1] /lib64/libc.so.6(gsignal+0x35)[0x3464430265]
</span><br>
<span class="quotelev1">&gt; [vsp-compute-13:27934] [ 2] [vsp-compute-13:27929] [ 0] /lib64/libpthread.so.0[0x3464c0eb70]
</span><br>
<span class="quotelev1">&gt; [vsp-compute-13:27929] [ 1] /lib64/libc.so.6(gsignal+0x35)[0x3464430265]
</span><br>
<span class="quotelev1">&gt; [vsp-compute-13:27929] [ 2] /lib64/libc.so.6(gsignal+0x35)[0x3464430265]
</span><br>
<span class="quotelev1">&gt; [vsp-compute-13:27932] [ 2] /lib64/libc.so.6(abort+0x110)[0x3464431d10]
</span><br>
<span class="quotelev1">&gt; [vsp-compute-13:27932] [ 3] /lib64/libc.so.6(abort+0x110)[0x3464431d10]
</span><br>
<span class="quotelev1">&gt; [vsp-compute-13:27928] [ 3] /opt/scratch/leeping/opt/qchem-4.2/exe/qcprog.exe[0xc304ca6]
</span><br>
<span class="quotelev1">&gt; [vsp-compute-13:27928] [ 4] /opt/scratch/leeping/opt/qchem-4.2/exe/qcprog.exe[0x41a0cf5]
</span><br>
<span class="quotelev1">&gt; [vsp-compute-13:27928] [ 5] /lib64/libc.so.6(abort+0x110)[0x3464431d10]
</span><br>
<span class="quotelev1">&gt; [vsp-compute-13:27934] [ 3] /opt/scratch/leeping/opt/qchem-4.2/exe/qcprog.exe[0xc304ca6]
</span><br>
<span class="quotelev1">&gt; [vsp-compute-13:27934] [ 4] /opt/scratch/leeping/opt/qchem-4.2/exe/qcprog.exe[0x41a0cf5]
</span><br>
<span class="quotelev1">&gt; [vsp-compute-13:27934] [ 5] /lib64/libc.so.6(abort+0x110)[0x3464431d10]
</span><br>
<span class="quotelev1">&gt; [vsp-compute-13:27929] [ 3] /opt/scratch/leeping/opt/qchem-4.2/exe/qcprog.exe[0xc304ca6]
</span><br>
<span class="quotelev1">&gt; [vsp-compute-13:27929] [ 4] /opt/scratch/leeping/opt/qchem-4.2/exe/qcprog.exe[0x41a0cf5]
</span><br>
<span class="quotelev1">&gt; [vsp-compute-13:27929] [ 5] /opt/scratch/leeping/opt/qchem-4.2/exe/qcprog.exe[0xc304ca6]
</span><br>
<span class="quotelev1">&gt; [vsp-compute-13:27932] [ 4] /opt/scratch/leeping/opt/qchem-4.2/exe/qcprog.exe[0x41a0cf5]
</span><br>
<span class="quotelev1">&gt; [vsp-compute-13:27932] [ 5] /opt/scratch/leeping/opt/qchem-4.2/exe/qcprog.exe[0x414a06e]
</span><br>
<span class="quotelev1">&gt; [vsp-compute-13:27934] [ 6] /opt/scratch/leeping/opt/qchem-4.2/exe/qcprog.exe[0x414a06e]
</span><br>
<span class="quotelev1">&gt; [vsp-compute-13:27929] [ 6] /opt/scratch/leeping/opt/qchem-4.2/exe/qcprog.exe[0x463392]
</span><br>
<span class="quotelev1">&gt; [vsp-compute-13:27929] [ 7] /opt/scratch/leeping/opt/qchem-4.2/exe/qcprog.exe[0x414a06e]
</span><br>
<span class="quotelev1">&gt; [vsp-compute-13:27928] [ 6] /opt/scratch/leeping/opt/qchem-4.2/exe/qcprog.exe[0x463392]
</span><br>
<span class="quotelev1">&gt; [vsp-compute-13:27928] [ 7] /opt/scratch/leeping/opt/qchem-4.2/exe/qcprog.exe[0x414a06e]
</span><br>
<span class="quotelev1">&gt; [vsp-compute-13:27932] [ 6] /opt/scratch/leeping/opt/qchem-4.2/exe/qcprog.exe[0x463392]
</span><br>
<span class="quotelev1">&gt; [vsp-compute-13:27932] [ 7] /opt/scratch/leeping/opt/qchem-4.2/exe/qcprog.exe[0x463392]
</span><br>
<span class="quotelev1">&gt; [vsp-compute-13:27934] [ 7] /opt/scratch/leeping/opt/qchem-4.2/exe/qcprog.exe[0x45cdb0]
</span><br>
<span class="quotelev1">&gt; [vsp-compute-13:27934] [ 8] /opt/scratch/leeping/opt/qchem-4.2/exe/qcprog.exe[0x45cdb0]
</span><br>
<span class="quotelev1">&gt; [vsp-compute-13:27932] [ 8] /opt/scratch/leeping/opt/qchem-4.2/exe/qcprog.exe[0x45cdb0]
</span><br>
<span class="quotelev1">&gt; [vsp-compute-13:27929] [ 8] /opt/scratch/leeping/opt/qchem-4.2/exe/qcprog.exe[0x45cdb0]
</span><br>
<span class="quotelev1">&gt; [vsp-compute-13:27928] [ 8] /opt/scratch/leeping/opt/qchem-4.2/exe/qcprog.exe[0x45bfb6]
</span><br>
<span class="quotelev1">&gt; [vsp-compute-13:27928] [ 9] /opt/scratch/leeping/opt/qchem-4.2/exe/qcprog.exe[0x45bfb6]
</span><br>
<span class="quotelev1">&gt; [vsp-compute-13:27932] [ 9] /lib64/libc.so.6(__libc_start_main+0xf4)[0x346441d994]
</span><br>
<span class="quotelev1">&gt; [vsp-compute-13:27932] [10] /opt/scratch/leeping/opt/qchem-4.2/exe/qcprog.exe[0x45bfb6]
</span><br>
<span class="quotelev1">&gt; [vsp-compute-13:27929] [ 9] /lib64/libc.so.6(__libc_start_main+0xf4)[0x346441d994]
</span><br>
<span class="quotelev1">&gt; [vsp-compute-13:27929] [10] /lib64/libc.so.6(__libc_start_main+0xf4)[0x346441d994]
</span><br>
<span class="quotelev1">&gt; [vsp-compute-13:27928] [10] /opt/scratch/leeping/opt/qchem-4.2/exe/qcprog.exe[0x45bfb6]
</span><br>
<span class="quotelev1">&gt; [vsp-compute-13:27934] [ 9] /lib64/libc.so.6(__libc_start_main+0xf4)[0x346441d994]
</span><br>
<span class="quotelev1">&gt; [vsp-compute-13:27934] [10] /opt/scratch/leeping/opt/qchem-4.2/exe/qcprog.exe[0x43e529]
</span><br>
<span class="quotelev1">&gt; [vsp-compute-13:27928] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; /opt/scratch/leeping/opt/qchem-4.2/exe/qcprog.exe[0x43e529]
</span><br>
<span class="quotelev1">&gt; [vsp-compute-13:27929] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; /opt/scratch/leeping/opt/qchem-4.2/exe/qcprog.exe[0x43e529]
</span><br>
<span class="quotelev1">&gt; [vsp-compute-13:27932] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; /opt/scratch/leeping/opt/qchem-4.2/exe/qcprog.exe[0x43e529]
</span><br>
<span class="quotelev1">&gt; [vsp-compute-13:27934] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; [vsp-compute-13:27936] [ 0] /lib64/libpthread.so.0[0x3464c0eb70]
</span><br>
<span class="quotelev1">&gt; [vsp-compute-13:27936] [ 1] /lib64/libc.so.6(gsignal+0x35)[0x3464430265]
</span><br>
<span class="quotelev1">&gt; [vsp-compute-13:27936] [ 2] /lib64/libc.so.6(abort+0x110)[0x3464431d10]
</span><br>
<span class="quotelev1">&gt; [vsp-compute-13:27936] [ 3] /opt/scratch/leeping/opt/qchem-4.2/exe/qcprog.exe[0xc304ca6]
</span><br>
<span class="quotelev1">&gt; [vsp-compute-13:27936] [ 4] /opt/scratch/leeping/opt/qchem-4.2/exe/qcprog.exe[0x41a0cf5]
</span><br>
<span class="quotelev1">&gt; [vsp-compute-13:27936] [ 5] /opt/scratch/leeping/opt/qchem-4.2/exe/qcprog.exe[0x414a06e]
</span><br>
<span class="quotelev1">&gt; [vsp-compute-13:27936] [ 6] /opt/scratch/leeping/opt/qchem-4.2/exe/qcprog.exe[0x463392]
</span><br>
<span class="quotelev1">&gt; [vsp-compute-13:27936] [ 7] /opt/scratch/leeping/opt/qchem-4.2/exe/qcprog.exe[0x45cdb0]
</span><br>
<span class="quotelev1">&gt; [vsp-compute-13:27936] [ 8] /opt/scratch/leeping/opt/qchem-4.2/exe/qcprog.exe[0x45bfb6]
</span><br>
<span class="quotelev1">&gt; [vsp-compute-13:27936] [ 9] /lib64/libc.so.6(__libc_start_main+0xf4)[0x346441d994]
</span><br>
<span class="quotelev1">&gt; [vsp-compute-13:27936] [10] /opt/scratch/leeping/opt/qchem-4.2/exe/qcprog.exe[0x43e529]
</span><br>
<span class="quotelev1">&gt; [vsp-compute-13:27936] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; [vsp-compute-13:27930] [ 0] /lib64/libpthread.so.0[0x3464c0eb70]
</span><br>
<span class="quotelev1">&gt; [vsp-compute-13:27930] [ 1] /lib64/libc.so.6(gsignal+0x35)[0x3464430265]
</span><br>
<span class="quotelev1">&gt; [vsp-compute-13:27930] [ 2] /lib64/libc.so.6(abort+0x110)[0x3464431d10]
</span><br>
<span class="quotelev1">&gt; [vsp-compute-13:27930] [ 3] /opt/scratch/leeping/opt/qchem-4.2/exe/qcprog.exe[0xc304ca6]
</span><br>
<span class="quotelev1">&gt; [vsp-compute-13:27930] [ 4] /opt/scratch/leeping/opt/qchem-4.2/exe/qcprog.exe[0x41a0cf5]
</span><br>
<span class="quotelev1">&gt; [vsp-compute-13:27930] [ 5] /opt/scratch/leeping/opt/qchem-4.2/exe/qcprog.exe[0x414a06e]
</span><br>
<span class="quotelev1">&gt; [vsp-compute-13:27930] [ 6] /opt/scratch/leeping/opt/qchem-4.2/exe/qcprog.exe[0x463392]
</span><br>
<span class="quotelev1">&gt; [vsp-compute-13:27930] [ 7] /opt/scratch/leeping/opt/qchem-4.2/exe/qcprog.exe[0x45cdb0]
</span><br>
<span class="quotelev1">&gt; [vsp-compute-13:27930] [ 8] /opt/scratch/leeping/opt/qchem-4.2/exe/qcprog.exe[0x45bfb6]
</span><br>
<span class="quotelev1">&gt; [vsp-compute-13:27930] [ 9] /lib64/libc.so.6(__libc_start_main+0xf4)[0x346441d994]
</span><br>
<span class="quotelev1">&gt; [vsp-compute-13:27930] [10] /opt/scratch/leeping/opt/qchem-4.2/exe/qcprog.exe[0x43e529]
</span><br>
<span class="quotelev1">&gt; [vsp-compute-13:27930] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/09/25365.php">http://www.open-mpi.org/community/lists/users/2014/09/25365.php</a>
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/09/25367.php">http://www.open-mpi.org/community/lists/users/2014/09/25367.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25368/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25369.php">Lee-Ping Wang: "Re: [OMPI users] Process is hanging"</a>
<li><strong>Previous message:</strong> <a href="25367.php">Lee-Ping Wang: "Re: [OMPI users] Process is hanging"</a>
<li><strong>In reply to:</strong> <a href="25367.php">Lee-Ping Wang: "Re: [OMPI users] Process is hanging"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25369.php">Lee-Ping Wang: "Re: [OMPI users] Process is hanging"</a>
<li><strong>Reply:</strong> <a href="25369.php">Lee-Ping Wang: "Re: [OMPI users] Process is hanging"</a>
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
