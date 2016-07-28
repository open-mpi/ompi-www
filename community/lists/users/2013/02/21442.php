<?
$subject_val = "Re: [OMPI users] openmpi MPI_Init doesn't work after fork under gdb";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 21 18:36:38 2013" -->
<!-- isoreceived="20130221233638" -->
<!-- sent="Thu, 21 Feb 2013 15:36:30 -0800" -->
<!-- isosent="20130221233630" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi MPI_Init doesn't work after fork under gdb" -->
<!-- id="44E0746F-583C-406F-B763-76C907FA4FF5_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAJ1ofpdO-8HWMmx1KtG4j7QBNzc3dDYA87RtCLpEUcsgRMzcOg_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2013-02-21 18:36:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21443.php">Geoffrey Irving: "Re: [OMPI users] openmpi MPI_Init doesn't work after fork under gdb"</a>
<li><strong>Previous message:</strong> <a href="21441.php">Geoffrey Irving: "[OMPI users] openmpi MPI_Init doesn't work after fork under gdb"</a>
<li><strong>In reply to:</strong> <a href="21441.php">Geoffrey Irving: "[OMPI users] openmpi MPI_Init doesn't work after fork under gdb"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21443.php">Geoffrey Irving: "Re: [OMPI users] openmpi MPI_Init doesn't work after fork under gdb"</a>
<li><strong>Reply:</strong> <a href="21443.php">Geoffrey Irving: "Re: [OMPI users] openmpi MPI_Init doesn't work after fork under gdb"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Singletons fork/exec a daemon to support them - my guess is that gdb may not like it on your machine?
<br>
<p>FWIW - it runs fine for me using the developer's trunk. You might try with 1.6.4 in case it's a bug in 1.6.0
<br>
<p><p>On Feb 21, 2013, at 3:18 PM, Geoffrey Irving &lt;irving_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; The attached program illustrates the problem.  It forks, and the child
</span><br>
<span class="quotelev1">&gt; calls MPI_Init.  This works fine unless I'm inside gdb.  Inside gdb,
</span><br>
<span class="quotelev1">&gt; MPI_Init silently crashes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm using OpenMPI 1.6.0 on Mac 10.8.2.  I'm running the program
</span><br>
<span class="quotelev1">&gt; directly, not through mpirun.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any ideas what might be wrong?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Geoffrey
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; cone:scratch% /usr/local/bin/mpicc -o fork-bug fork-bug.c
</span><br>
<span class="quotelev1">&gt; cone:scratch% ./fork-bug
</span><br>
<span class="quotelev1">&gt; We're an MPI program!
</span><br>
<span class="quotelev1">&gt; child status = 0
</span><br>
<span class="quotelev1">&gt; cone:scratch% gdb ./fork-bug
</span><br>
<span class="quotelev1">&gt; gdb ./fork-bug
</span><br>
<span class="quotelev1">&gt; GNU gdb 6.3.50-20050815 (Apple version gdb-1824) (Thu Nov 15 10:42:43 UTC 2012)
</span><br>
<span class="quotelev1">&gt; Copyright 2004 Free Software Foundation, Inc.
</span><br>
<span class="quotelev1">&gt; GDB is free software, covered by the GNU General Public License, and you are
</span><br>
<span class="quotelev1">&gt; welcome to change it and/or distribute copies of it under certain conditions.
</span><br>
<span class="quotelev1">&gt; Type &quot;show copying&quot; to see the conditions.
</span><br>
<span class="quotelev1">&gt; There is absolutely no warranty for GDB.  Type &quot;show warranty&quot; for details.
</span><br>
<span class="quotelev1">&gt; This GDB was configured as &quot;x86_64-apple-darwin&quot;...Reading symbols for
</span><br>
<span class="quotelev1">&gt; shared libraries ... done
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (gdb) run
</span><br>
<span class="quotelev1">&gt; Reading symbols for shared libraries ++............................. done
</span><br>
<span class="quotelev1">&gt; child status = 5
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Program exited normally.
</span><br>
<span class="quotelev1">&gt; (gdb) cone:scratch%
</span><br>
<span class="quotelev1">&gt; &lt;fork-bug.c&gt;_______________________________________________
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
<li><strong>Next message:</strong> <a href="21443.php">Geoffrey Irving: "Re: [OMPI users] openmpi MPI_Init doesn't work after fork under gdb"</a>
<li><strong>Previous message:</strong> <a href="21441.php">Geoffrey Irving: "[OMPI users] openmpi MPI_Init doesn't work after fork under gdb"</a>
<li><strong>In reply to:</strong> <a href="21441.php">Geoffrey Irving: "[OMPI users] openmpi MPI_Init doesn't work after fork under gdb"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21443.php">Geoffrey Irving: "Re: [OMPI users] openmpi MPI_Init doesn't work after fork under gdb"</a>
<li><strong>Reply:</strong> <a href="21443.php">Geoffrey Irving: "Re: [OMPI users] openmpi MPI_Init doesn't work after fork under gdb"</a>
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
