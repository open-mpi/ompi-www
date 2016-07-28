<?
$subject_val = "[OMPI users] openmpi MPI_Init doesn't work after fork under gdb";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 21 18:18:54 2013" -->
<!-- isoreceived="20130221231854" -->
<!-- sent="Thu, 21 Feb 2013 15:18:33 -0800" -->
<!-- isosent="20130221231833" -->
<!-- name="Geoffrey Irving" -->
<!-- email="irving_at_[hidden]" -->
<!-- subject="[OMPI users] openmpi MPI_Init doesn't work after fork under gdb" -->
<!-- id="CAJ1ofpdO-8HWMmx1KtG4j7QBNzc3dDYA87RtCLpEUcsgRMzcOg_at_mail.gmail.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI users] openmpi MPI_Init doesn't work after fork under gdb<br>
<strong>From:</strong> Geoffrey Irving (<em>irving_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-21 18:18:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21442.php">Ralph Castain: "Re: [OMPI users] openmpi MPI_Init doesn't work after fork under gdb"</a>
<li><strong>Previous message:</strong> <a href="21440.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Windows C++ Linker Error &quot;unresolved symbol&quot; for MPI::Datatype::Free"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21442.php">Ralph Castain: "Re: [OMPI users] openmpi MPI_Init doesn't work after fork under gdb"</a>
<li><strong>Reply:</strong> <a href="21442.php">Ralph Castain: "Re: [OMPI users] openmpi MPI_Init doesn't work after fork under gdb"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The attached program illustrates the problem.  It forks, and the child
<br>
calls MPI_Init.  This works fine unless I'm inside gdb.  Inside gdb,
<br>
MPI_Init silently crashes.
<br>
<p>I'm using OpenMPI 1.6.0 on Mac 10.8.2.  I'm running the program
<br>
directly, not through mpirun.
<br>
<p>Any ideas what might be wrong?
<br>
<p>Thanks,
<br>
Geoffrey
<br>
<p>cone:scratch% /usr/local/bin/mpicc -o fork-bug fork-bug.c
<br>
cone:scratch% ./fork-bug
<br>
We're an MPI program!
<br>
child status = 0
<br>
cone:scratch% gdb ./fork-bug
<br>
gdb ./fork-bug
<br>
GNU gdb 6.3.50-20050815 (Apple version gdb-1824) (Thu Nov 15 10:42:43 UTC 2012)
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
This GDB was configured as &quot;x86_64-apple-darwin&quot;...Reading symbols for
<br>
shared libraries ... done
<br>
<p>(gdb) run
<br>
Reading symbols for shared libraries ++............................. done
<br>
child status = 5
<br>
<p>Program exited normally.
<br>
(gdb) cone:scratch%
<br>
<p>
<br><hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21441/fork-bug.c">fork-bug.c</a>
</ul>
<!-- attachment="fork-bug.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21442.php">Ralph Castain: "Re: [OMPI users] openmpi MPI_Init doesn't work after fork under gdb"</a>
<li><strong>Previous message:</strong> <a href="21440.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Windows C++ Linker Error &quot;unresolved symbol&quot; for MPI::Datatype::Free"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21442.php">Ralph Castain: "Re: [OMPI users] openmpi MPI_Init doesn't work after fork under gdb"</a>
<li><strong>Reply:</strong> <a href="21442.php">Ralph Castain: "Re: [OMPI users] openmpi MPI_Init doesn't work after fork under gdb"</a>
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
