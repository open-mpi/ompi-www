<?
$subject_val = "Re: [OMPI users] openmpi MPI_Init doesn't work after fork under gdb";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 21 19:07:24 2013" -->
<!-- isoreceived="20130222000724" -->
<!-- sent="Thu, 21 Feb 2013 16:07:12 -0800" -->
<!-- isosent="20130222000712" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi MPI_Init doesn't work after fork under gdb" -->
<!-- id="E0F9CFDF-9A08-4A73-9792-9E654761EF0A_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAJ1ofpdTy924=Bvm_gFwgQTWhhmNUpS0GDwspRU7hsXXcVZ2LQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi MPI_Init doesn't work after fork under gdb<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-21 19:07:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21445.php">Geoffrey Irving: "Re: [OMPI users] openmpi MPI_Init doesn't work after fork under gdb"</a>
<li><strong>Previous message:</strong> <a href="21443.php">Geoffrey Irving: "Re: [OMPI users] openmpi MPI_Init doesn't work after fork under gdb"</a>
<li><strong>In reply to:</strong> <a href="21443.php">Geoffrey Irving: "Re: [OMPI users] openmpi MPI_Init doesn't work after fork under gdb"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21445.php">Geoffrey Irving: "Re: [OMPI users] openmpi MPI_Init doesn't work after fork under gdb"</a>
<li><strong>Reply:</strong> <a href="21445.php">Geoffrey Irving: "Re: [OMPI users] openmpi MPI_Init doesn't work after fork under gdb"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmmm...works with 1.6.4 for me on Mac 10.8.2:
<br>
<p>Ralphs-iMac:v1.6 rhc$ ./fork-bug 
<br>
We're an MPI program!
<br>
child status = 0
<br>
Ralphs-iMac:v1.6 rhc$ gdb ./fork-bug
<br>
GNU gdb 6.3.50-20050815 (Apple version gdb-1820) (Sat Jun 16 02:40:11 UTC 2012)
<br>
Copyright 2004 Free Software Foundation, Inc.
<br>
GDB is free software, covered by the GNU General Public License, and you are
<br>
welcome to change it and/or distribute copies of it under certain conditions.
<br>
Type &quot;show copying&quot; to see the conditions.
<br>
There is absolutely no warranty for GDB.  Type &quot;show warranty&quot; for details.
<br>
This GDB was configured as &quot;x86_64-apple-darwin&quot;...Reading symbols for shared libraries ... done
<br>
<p>(gdb) r
<br>
Starting program: /Volumes/RHCHD/rhc/openmpi/v1.6/fork-bug 
<br>
Reading symbols for shared libraries ++............................. done
<br>
child status = 0
<br>
<p>Program exited normally.
<br>
(gdb) 
<br>
<p>Afraid I have no idea why you might be hitting the problem, though...
<br>
<p><p>On Feb 21, 2013, at 3:50 PM, Geoffrey Irving &lt;irving_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; The singleton fork/exec itself is fine, since normal MPI programs work
</span><br>
<span class="quotelev1">&gt; under gdb (e.g., fork-bug.c without the fork).  gdb is has
</span><br>
<span class="quotelev1">&gt; follow-fork-mode set to parent, so it's odd that gdb is looking at the
</span><br>
<span class="quotelev1">&gt; child process's trickery at all.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've confirmed that it's still broken under 1.6.4, unfortunately.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Geoffrey
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, Feb 21, 2013 at 3:36 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Singletons fork/exec a daemon to support them - my guess is that gdb may not like it on your machine?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; FWIW - it runs fine for me using the developer's trunk. You might try with 1.6.4 in case it's a bug in 1.6.0
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 21, 2013, at 3:18 PM, Geoffrey Irving &lt;irving_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The attached program illustrates the problem.  It forks, and the child
</span><br>
<span class="quotelev3">&gt;&gt;&gt; calls MPI_Init.  This works fine unless I'm inside gdb.  Inside gdb,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Init silently crashes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm using OpenMPI 1.6.0 on Mac 10.8.2.  I'm running the program
</span><br>
<span class="quotelev3">&gt;&gt;&gt; directly, not through mpirun.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Any ideas what might be wrong?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Geoffrey
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cone:scratch% /usr/local/bin/mpicc -o fork-bug fork-bug.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cone:scratch% ./fork-bug
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We're an MPI program!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; child status = 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cone:scratch% gdb ./fork-bug
</span><br>
<span class="quotelev3">&gt;&gt;&gt; gdb ./fork-bug
</span><br>
<span class="quotelev3">&gt;&gt;&gt; GNU gdb 6.3.50-20050815 (Apple version gdb-1824) (Thu Nov 15 10:42:43 UTC 2012)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Copyright 2004 Free Software Foundation, Inc.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; GDB is free software, covered by the GNU General Public License, and you are
</span><br>
<span class="quotelev3">&gt;&gt;&gt; welcome to change it and/or distribute copies of it under certain conditions.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Type &quot;show copying&quot; to see the conditions.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There is absolutely no warranty for GDB.  Type &quot;show warranty&quot; for details.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This GDB was configured as &quot;x86_64-apple-darwin&quot;...Reading symbols for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; shared libraries ... done
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (gdb) run
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Reading symbols for shared libraries ++............................. done
</span><br>
<span class="quotelev3">&gt;&gt;&gt; child status = 5
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Program exited normally.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (gdb) cone:scratch%
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;fork-bug.c&gt;_______________________________________________
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
<li><strong>Next message:</strong> <a href="21445.php">Geoffrey Irving: "Re: [OMPI users] openmpi MPI_Init doesn't work after fork under gdb"</a>
<li><strong>Previous message:</strong> <a href="21443.php">Geoffrey Irving: "Re: [OMPI users] openmpi MPI_Init doesn't work after fork under gdb"</a>
<li><strong>In reply to:</strong> <a href="21443.php">Geoffrey Irving: "Re: [OMPI users] openmpi MPI_Init doesn't work after fork under gdb"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21445.php">Geoffrey Irving: "Re: [OMPI users] openmpi MPI_Init doesn't work after fork under gdb"</a>
<li><strong>Reply:</strong> <a href="21445.php">Geoffrey Irving: "Re: [OMPI users] openmpi MPI_Init doesn't work after fork under gdb"</a>
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
