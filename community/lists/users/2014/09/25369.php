<?
$subject_val = "Re: [OMPI users] Process is hanging";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Sep 21 13:02:59 2014" -->
<!-- isoreceived="20140921170259" -->
<!-- sent="Sun, 21 Sep 2014 10:02:54 -0700" -->
<!-- isosent="20140921170254" -->
<!-- name="Lee-Ping Wang" -->
<!-- email="leeping_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Process is hanging" -->
<!-- id="008201cfd5bd$e2df8b70$a89ea250$_at_stanford.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="A57EB56A-D549-49EA-8F9E-22FEBA5D008B_at_open-mpi.org" -->
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
<strong>From:</strong> Lee-Ping Wang (<em>leeping_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-21 13:02:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25370.php">Ralph Castain: "Re: [OMPI users] Process is hanging"</a>
<li><strong>Previous message:</strong> <a href="25368.php">Ralph Castain: "Re: [OMPI users] Process is hanging"</a>
<li><strong>In reply to:</strong> <a href="25368.php">Ralph Castain: "Re: [OMPI users] Process is hanging"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25370.php">Ralph Castain: "Re: [OMPI users] Process is hanging"</a>
<li><strong>Reply:</strong> <a href="25370.php">Ralph Castain: "Re: [OMPI users] Process is hanging"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
My program isn't segfaulting - it's returning a non-zero status and then
<br>
existing.  
<br>
<p>&nbsp;
<br>
<p>Thanks,
<br>
<p>&nbsp;
<br>
<p>-          Lee-Ping
<br>
<p>&nbsp;
<br>
<p>From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Ralph Castain
<br>
Sent: Sunday, September 21, 2014 8:54 AM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Process is hanging
<br>
<p>&nbsp;
<br>
<p>Just to be clear: is your program returning a non-zero status and then
<br>
exiting, or is it segfaulting?
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>On Sep 21, 2014, at 8:22 AM, Lee-Ping Wang &lt;leeping_at_[hidden]&gt; wrote:
<br>
<p><p><p><p><p>I'm using version 1.8.1.
<br>
<p>&nbsp;
<br>
<p>Thanks,
<br>
<p>&nbsp;
<br>
<p>-          Lee-Ping
<br>
<p>&nbsp;
<br>
<p>From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Ralph Castain
<br>
Sent: Sunday, September 21, 2014 6:56 AM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Process is hanging
<br>
<p>&nbsp;
<br>
<p>Can you please tell us what version of OMPI you are using?
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>On Sep 21, 2014, at 6:08 AM, Lee-Ping Wang &lt; &lt;mailto:leeping_at_[hidden]&gt;
<br>
leeping_at_[hidden]&gt; wrote:
<br>
<p><p><p><p><p><p>Hi there,
<br>
<p>&nbsp;
<br>
<p>I'm running into an issue where mpirun isn't terminating when my executable
<br>
has a nonzero exit status - instead it's hanging indefinitely.  I'm
<br>
attaching my process tree, the error message from the application, and the
<br>
messages printed to stderr.   Please let me know what I can do.
<br>
<p>&nbsp;
<br>
<p>Thanks,
<br>
<p>&nbsp;
<br>
<p>-          Lee-Ping
<br>
<p>&nbsp;
<br>
<p>=== Process Tree ===
<br>
<p>leeping_at_vsp-compute-13:~$ ps xjf
<br>
<p>PPID   PID  PGID   SID TTY      TPGID STAT   UID   TIME COMMAND
<br>
<p>31969 31977 31969 31969 ?           -1 S    48618   0:00 sshd: leeping_at_pts/1
<br>
<p>31977 31978 31978 31978 pts/1    32038 Ss   48618   0:00  \_ -bash
<br>
<p>31978 32038 32038 31978 pts/1    32038 R+   48618   0:00      \_ ps xjf
<br>
<p>23667 29307 29307 29307 ?           -1 Ss   48618   0:00 /bin/bash
<br>
/home/leeping/temp/leeping-workers/10276/worker1.sh
<br>
<p>29307 29308 29307 29307 ?           -1 S    48618   0:00  \_ /bin/bash
<br>
/home/leeping/temp/leeping-workers/10276/worker2.sh
<br>
<p>29308 29425 29307 29307 ?           -1 S    48618   0:00      \_
<br>
./work_queue_worker -d all --cores 6 -t 86400s localhost 9876
<br>
<p>29425 26245 26245 29307 ?           -1 S    48618   0:00      |   \_ sh -c
<br>
optimize-geometry.py initial.xyz --method b3lyp --basis &quot;6-31g(d)&quot; --charge
<br>
0 --mult 1 &amp;&gt; optimize.log
<br>
<p>26245 26246 26245 29307 ?           -1 Sl   48618   0:01      |       \_
<br>
/home/leeping/local/bin/python /home/leeping/local/bin/optimize-geometry.py
<br>
initial.xyz --method b3lyp --basis 6-31g(d) --charge 0 --mult 1
<br>
<p>26246 27834 26245 29307 ?           -1 S    48618   0:00      |           \_
<br>
/bin/sh -c qchem42 -np 6 -save optimize.in optimize.out optimize.d 2&gt;
<br>
optimize.err
<br>
<p>27834 27835 26245 29307 ?           -1 S    48618   0:00      |
<br>
\_ /bin/bash /home/leeping/opt/bin/qchem42 -np 6 -save optimize.in
<br>
optimize.out optimize.d
<br>
<p>27835 27897 26245 29307 ?           -1 S    48618   0:00      |
<br>
\_ /bin/csh -f /opt/scratch/leeping/opt/qchem-4.2/bin/qchem -np 6 -nt 1
<br>
-save optimize.in optimize.out optimize.d
<br>
<p>27897 27921 26245 29307 ?           -1 S    48618   0:00      |
<br>
\_ /bin/csh -f /opt/scratch/leeping/opt/qchem-4.2/bin/parallel.csh
<br>
optimize.in 6 0 ./optimize.d/ 27897
<br>
<p>27921 27926 26245 29307 ?           -1 Sl   48618   0:00      |
<br>
\_ /opt/scratch/leeping/opt/qchem-4.2/ext-libs/openmpi/bin/mpirun -np 6
<br>
/opt/scratch/leeping/opt/qchem-4.2/exe/qcprog.exe .optimize.in.27897.qcin.1
<br>
./optimize.d/
<br>
<p>&nbsp;
<br>
<p>=== Application Error Message ===
<br>
<p>100    -843.2762335150      5.69E-08  00000    Convergence failure
<br>
<p>&nbsp;
<br>
<p>Q-Chem fatal error occurred in module
<br>
/home/leeping/src/qchem/scfman/scfman.C, line 4377:
<br>
<p>&nbsp;
<br>
<p>SCF failed to converge
<br>
<p>&nbsp;
<br>
<p>Sat Sep 20 23:57:37 2014
<br>
<p>&nbsp;
<br>
<p>=== Standard error ===
<br>
<p>&nbsp;
<br>
&lt;mailto:leeping_at_vsp-compute-13:/opt/scratch/leeping/worker-48618-29425/t.62$
<br>
<span class="quotelev1">&gt; leeping_at_vsp-compute-13:/opt/scratch/leeping/worker-48618-29425/t.62$ cat
</span><br>
optimize.err
<br>
<p>[vsp-compute-13:27929] *** Process received signal ***
<br>
<p>[vsp-compute-13:27929] Signal: Aborted (6)
<br>
<p>[vsp-compute-13:27929] Signal code:  (-6)
<br>
<p>[vsp-compute-13:27932] *** Process received signal ***
<br>
<p>[vsp-compute-13:27932] Signal: Aborted (6)
<br>
<p>[vsp-compute-13:27932] Signal code:  (-6)
<br>
<p>[vsp-compute-13:27934] *** Process received signal ***
<br>
<p>[vsp-compute-13:27934] Signal: Aborted (6)
<br>
<p>[vsp-compute-13:27934] Signal code:  (-6)
<br>
<p>[vsp-compute-13:27928] *** Process received signal ***
<br>
<p>[vsp-compute-13:27928] Signal: Aborted (6)
<br>
<p>[vsp-compute-13:27928] Signal code:  (-6)
<br>
<p>[vsp-compute-13:27936] *** Process received signal ***
<br>
<p>[vsp-compute-13:27936] Signal: Aborted (6)
<br>
<p>[vsp-compute-13:27936] Signal code:  (-6)
<br>
<p>[vsp-compute-13:27930] *** Process received signal ***
<br>
<p>[vsp-compute-13:27930] Signal: Aborted (6)
<br>
<p>[vsp-compute-13:27930] Signal code:  (-6)
<br>
<p>[vsp-compute-13:27932] [ 0] /lib64/libpthread.so.0[0x3464c0eb70]
<br>
<p>[vsp-compute-13:27932] [ 1] [vsp-compute-13:27928] [ 0]
<br>
/lib64/libpthread.so.0[0x3464c0eb70]
<br>
<p>[vsp-compute-13:27928] [ 1] /lib64/libc.so.6(gsignal+0x35)[0x3464430265]
<br>
<p>[vsp-compute-13:27928] [ 2] [vsp-compute-13:27934] [ 0]
<br>
/lib64/libpthread.so.0[0x3464c0eb70]
<br>
<p>[vsp-compute-13:27934] [ 1] /lib64/libc.so.6(gsignal+0x35)[0x3464430265]
<br>
<p>[vsp-compute-13:27934] [ 2] [vsp-compute-13:27929] [ 0]
<br>
/lib64/libpthread.so.0[0x3464c0eb70]
<br>
<p>[vsp-compute-13:27929] [ 1] /lib64/libc.so.6(gsignal+0x35)[0x3464430265]
<br>
<p>[vsp-compute-13:27929] [ 2] /lib64/libc.so.6(gsignal+0x35)[0x3464430265]
<br>
<p>[vsp-compute-13:27932] [ 2] /lib64/libc.so.6(abort+0x110)[0x3464431d10]
<br>
<p>[vsp-compute-13:27932] [ 3] /lib64/libc.so.6(abort+0x110)[0x3464431d10]
<br>
<p>[vsp-compute-13:27928] [ 3]
<br>
/opt/scratch/leeping/opt/qchem-4.2/exe/qcprog.exe[0xc304ca6]
<br>
<p>[vsp-compute-13:27928] [ 4]
<br>
/opt/scratch/leeping/opt/qchem-4.2/exe/qcprog.exe[0x41a0cf5]
<br>
<p>[vsp-compute-13:27928] [ 5] /lib64/libc.so.6(abort+0x110)[0x3464431d10]
<br>
<p>[vsp-compute-13:27934] [ 3]
<br>
/opt/scratch/leeping/opt/qchem-4.2/exe/qcprog.exe[0xc304ca6]
<br>
<p>[vsp-compute-13:27934] [ 4]
<br>
/opt/scratch/leeping/opt/qchem-4.2/exe/qcprog.exe[0x41a0cf5]
<br>
<p>[vsp-compute-13:27934] [ 5] /lib64/libc.so.6(abort+0x110)[0x3464431d10]
<br>
<p>[vsp-compute-13:27929] [ 3]
<br>
/opt/scratch/leeping/opt/qchem-4.2/exe/qcprog.exe[0xc304ca6]
<br>
<p>[vsp-compute-13:27929] [ 4]
<br>
/opt/scratch/leeping/opt/qchem-4.2/exe/qcprog.exe[0x41a0cf5]
<br>
<p>[vsp-compute-13:27929] [ 5]
<br>
/opt/scratch/leeping/opt/qchem-4.2/exe/qcprog.exe[0xc304ca6]
<br>
<p>[vsp-compute-13:27932] [ 4]
<br>
/opt/scratch/leeping/opt/qchem-4.2/exe/qcprog.exe[0x41a0cf5]
<br>
<p>[vsp-compute-13:27932] [ 5]
<br>
/opt/scratch/leeping/opt/qchem-4.2/exe/qcprog.exe[0x414a06e]
<br>
<p>[vsp-compute-13:27934] [ 6]
<br>
/opt/scratch/leeping/opt/qchem-4.2/exe/qcprog.exe[0x414a06e]
<br>
<p>[vsp-compute-13:27929] [ 6]
<br>
/opt/scratch/leeping/opt/qchem-4.2/exe/qcprog.exe[0x463392]
<br>
<p>[vsp-compute-13:27929] [ 7]
<br>
/opt/scratch/leeping/opt/qchem-4.2/exe/qcprog.exe[0x414a06e]
<br>
<p>[vsp-compute-13:27928] [ 6]
<br>
/opt/scratch/leeping/opt/qchem-4.2/exe/qcprog.exe[0x463392]
<br>
<p>[vsp-compute-13:27928] [ 7]
<br>
/opt/scratch/leeping/opt/qchem-4.2/exe/qcprog.exe[0x414a06e]
<br>
<p>[vsp-compute-13:27932] [ 6]
<br>
/opt/scratch/leeping/opt/qchem-4.2/exe/qcprog.exe[0x463392]
<br>
<p>[vsp-compute-13:27932] [ 7]
<br>
/opt/scratch/leeping/opt/qchem-4.2/exe/qcprog.exe[0x463392]
<br>
<p>[vsp-compute-13:27934] [ 7]
<br>
/opt/scratch/leeping/opt/qchem-4.2/exe/qcprog.exe[0x45cdb0]
<br>
<p>[vsp-compute-13:27934] [ 8]
<br>
/opt/scratch/leeping/opt/qchem-4.2/exe/qcprog.exe[0x45cdb0]
<br>
<p>[vsp-compute-13:27932] [ 8]
<br>
/opt/scratch/leeping/opt/qchem-4.2/exe/qcprog.exe[0x45cdb0]
<br>
<p>[vsp-compute-13:27929] [ 8]
<br>
/opt/scratch/leeping/opt/qchem-4.2/exe/qcprog.exe[0x45cdb0]
<br>
<p>[vsp-compute-13:27928] [ 8]
<br>
/opt/scratch/leeping/opt/qchem-4.2/exe/qcprog.exe[0x45bfb6]
<br>
<p>[vsp-compute-13:27928] [ 9]
<br>
/opt/scratch/leeping/opt/qchem-4.2/exe/qcprog.exe[0x45bfb6]
<br>
<p>[vsp-compute-13:27932] [ 9]
<br>
/lib64/libc.so.6(__libc_start_main+0xf4)[0x346441d994]
<br>
<p>[vsp-compute-13:27932] [10]
<br>
/opt/scratch/leeping/opt/qchem-4.2/exe/qcprog.exe[0x45bfb6]
<br>
<p>[vsp-compute-13:27929] [ 9]
<br>
/lib64/libc.so.6(__libc_start_main+0xf4)[0x346441d994]
<br>
<p>[vsp-compute-13:27929] [10]
<br>
/lib64/libc.so.6(__libc_start_main+0xf4)[0x346441d994]
<br>
<p>[vsp-compute-13:27928] [10]
<br>
/opt/scratch/leeping/opt/qchem-4.2/exe/qcprog.exe[0x45bfb6]
<br>
<p>[vsp-compute-13:27934] [ 9]
<br>
/lib64/libc.so.6(__libc_start_main+0xf4)[0x346441d994]
<br>
<p>[vsp-compute-13:27934] [10]
<br>
/opt/scratch/leeping/opt/qchem-4.2/exe/qcprog.exe[0x43e529]
<br>
<p>[vsp-compute-13:27928] *** End of error message ***
<br>
<p>/opt/scratch/leeping/opt/qchem-4.2/exe/qcprog.exe[0x43e529]
<br>
<p>[vsp-compute-13:27929] *** End of error message ***
<br>
<p>/opt/scratch/leeping/opt/qchem-4.2/exe/qcprog.exe[0x43e529]
<br>
<p>[vsp-compute-13:27932] *** End of error message ***
<br>
<p>/opt/scratch/leeping/opt/qchem-4.2/exe/qcprog.exe[0x43e529]
<br>
<p>[vsp-compute-13:27934] *** End of error message ***
<br>
<p>[vsp-compute-13:27936] [ 0] /lib64/libpthread.so.0[0x3464c0eb70]
<br>
<p>[vsp-compute-13:27936] [ 1] /lib64/libc.so.6(gsignal+0x35)[0x3464430265]
<br>
<p>[vsp-compute-13:27936] [ 2] /lib64/libc.so.6(abort+0x110)[0x3464431d10]
<br>
<p>[vsp-compute-13:27936] [ 3]
<br>
/opt/scratch/leeping/opt/qchem-4.2/exe/qcprog.exe[0xc304ca6]
<br>
<p>[vsp-compute-13:27936] [ 4]
<br>
/opt/scratch/leeping/opt/qchem-4.2/exe/qcprog.exe[0x41a0cf5]
<br>
<p>[vsp-compute-13:27936] [ 5]
<br>
/opt/scratch/leeping/opt/qchem-4.2/exe/qcprog.exe[0x414a06e]
<br>
<p>[vsp-compute-13:27936] [ 6]
<br>
/opt/scratch/leeping/opt/qchem-4.2/exe/qcprog.exe[0x463392]
<br>
<p>[vsp-compute-13:27936] [ 7]
<br>
/opt/scratch/leeping/opt/qchem-4.2/exe/qcprog.exe[0x45cdb0]
<br>
<p>[vsp-compute-13:27936] [ 8]
<br>
/opt/scratch/leeping/opt/qchem-4.2/exe/qcprog.exe[0x45bfb6]
<br>
<p>[vsp-compute-13:27936] [ 9]
<br>
/lib64/libc.so.6(__libc_start_main+0xf4)[0x346441d994]
<br>
<p>[vsp-compute-13:27936] [10]
<br>
/opt/scratch/leeping/opt/qchem-4.2/exe/qcprog.exe[0x43e529]
<br>
<p>[vsp-compute-13:27936] *** End of error message ***
<br>
<p>[vsp-compute-13:27930] [ 0] /lib64/libpthread.so.0[0x3464c0eb70]
<br>
<p>[vsp-compute-13:27930] [ 1] /lib64/libc.so.6(gsignal+0x35)[0x3464430265]
<br>
<p>[vsp-compute-13:27930] [ 2] /lib64/libc.so.6(abort+0x110)[0x3464431d10]
<br>
<p>[vsp-compute-13:27930] [ 3]
<br>
/opt/scratch/leeping/opt/qchem-4.2/exe/qcprog.exe[0xc304ca6]
<br>
<p>[vsp-compute-13:27930] [ 4]
<br>
/opt/scratch/leeping/opt/qchem-4.2/exe/qcprog.exe[0x41a0cf5]
<br>
<p>[vsp-compute-13:27930] [ 5]
<br>
/opt/scratch/leeping/opt/qchem-4.2/exe/qcprog.exe[0x414a06e]
<br>
<p>[vsp-compute-13:27930] [ 6]
<br>
/opt/scratch/leeping/opt/qchem-4.2/exe/qcprog.exe[0x463392]
<br>
<p>[vsp-compute-13:27930] [ 7]
<br>
/opt/scratch/leeping/opt/qchem-4.2/exe/qcprog.exe[0x45cdb0]
<br>
<p>[vsp-compute-13:27930] [ 8]
<br>
/opt/scratch/leeping/opt/qchem-4.2/exe/qcprog.exe[0x45bfb6]
<br>
<p>[vsp-compute-13:27930] [ 9]
<br>
/lib64/libc.so.6(__libc_start_main+0xf4)[0x346441d994]
<br>
<p>[vsp-compute-13:27930] [10]
<br>
/opt/scratch/leeping/opt/qchem-4.2/exe/qcprog.exe[0x43e529]
<br>
<p>[vsp-compute-13:27930] *** End of error message ***
<br>
<p>_______________________________________________
<br>
users mailing list
<br>
&nbsp;&lt;mailto:users_at_[hidden]&gt; users_at_[hidden]
<br>
Subscription:  &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
Link to this post:
<br>
&lt;<a href="http://www.open-mpi.org/community/lists/users/2014/09/25365.php">http://www.open-mpi.org/community/lists/users/2014/09/25365.php</a>&gt;
<br>
<a href="http://www.open-mpi.org/community/lists/users/2014/09/25365.php">http://www.open-mpi.org/community/lists/users/2014/09/25365.php</a>
<br>
<p>&nbsp;
<br>
<p>_______________________________________________
<br>
users mailing list
<br>
&nbsp;&lt;mailto:users_at_[hidden]&gt; users_at_[hidden]
<br>
Subscription:  &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
Link to this post:
<br>
&lt;<a href="http://www.open-mpi.org/community/lists/users/2014/09/25367.php">http://www.open-mpi.org/community/lists/users/2014/09/25367.php</a>&gt;
<br>
<a href="http://www.open-mpi.org/community/lists/users/2014/09/25367.php">http://www.open-mpi.org/community/lists/users/2014/09/25367.php</a>
<br>
<p>&nbsp;
<br>
<p><p><p>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25369/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25370.php">Ralph Castain: "Re: [OMPI users] Process is hanging"</a>
<li><strong>Previous message:</strong> <a href="25368.php">Ralph Castain: "Re: [OMPI users] Process is hanging"</a>
<li><strong>In reply to:</strong> <a href="25368.php">Ralph Castain: "Re: [OMPI users] Process is hanging"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25370.php">Ralph Castain: "Re: [OMPI users] Process is hanging"</a>
<li><strong>Reply:</strong> <a href="25370.php">Ralph Castain: "Re: [OMPI users] Process is hanging"</a>
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
