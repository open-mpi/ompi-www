<?
$subject_val = "[OMPI users] openmpi-v2.x-dev-1468-g6011906 : problem with &quot;--host&quot;";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  8 03:13:41 2016" -->
<!-- isoreceived="20160608071341" -->
<!-- sent="Wed, 8 Jun 2016 09:13:30 +0200" -->
<!-- isosent="20160608071330" -->
<!-- name="Siegmar Gross" -->
<!-- email="siegmar.gross_at_[hidden]" -->
<!-- subject="[OMPI users] openmpi-v2.x-dev-1468-g6011906 : problem with &amp;quot;--host&amp;quot;" -->
<!-- id="45ea7797-18ec-f38b-1d9f-959a5ac46bc9_at_informatik.hs-fulda.de" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] openmpi-v2.x-dev-1468-g6011906 : problem with &quot;--host&quot;<br>
<strong>From:</strong> Siegmar Gross (<em>siegmar.gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-08 03:13:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29405.php">Siegmar Gross: "[OMPI users] openmpi-dev-4221-gb707d13: referenced symbol"</a>
<li><strong>Previous message:</strong> <a href="29403.php">Siegmar Gross: "[OMPI users] openmpi-v1.10.3rc4: another problem with &quot;--slot-list&quot;"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I have built openmpi-v2.x-dev-1468-g6011906 on my machines (Solaris 10
<br>
Sparc, Solaris 10 x86_64, and openSUSE Linux 12.1 x86_64) with gcc-5.1.0
<br>
and Sun C 5.13. Unfortunately I have a problem with &quot;--host&quot; for a MPMD
<br>
program. The behaviour is different on different machines. Why do I need
<br>
two host names on my Sparc machine, although I only start one slave process?
<br>
<p><p>tyr hello_2 126 ompi_info | grep -e &quot;OPAL repo revision:&quot; -e &quot;C compiler absolute:&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL repo revision: v2.x-dev-1468-g6011906
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C compiler absolute: /usr/local/gcc-5.1.0/bin/gcc
<br>
<p>tyr hello_2 127 mpiexec --oversubscribe -np 1 --host tyr hello_2_mpi : -np 1 
<br>
--host tyr hello_2_slave_mpi
<br>
--------------------------------------------------------------------------
<br>
While computing bindings, we found no available cpus on
<br>
the following node:
<br>
<p>&nbsp;&nbsp;&nbsp;Node:  tyr
<br>
<p>Please check your allocation.
<br>
--------------------------------------------------------------------------
<br>
<p><p>tyr hello_2 128 mpiexec --oversubscribe -np 1 --host tyr hello_2_mpi : -np 1 
<br>
--host tyr,tyr hello_2_slave_mpi
<br>
Process 0 of 2 running on tyr.informatik.hs-fulda.de
<br>
<p><p>Now 1 slave tasks are sending greetings.
<br>
<p>Process 1 of 2 running on tyr.informatik.hs-fulda.de
<br>
Greetings from task 1:
<br>
&nbsp;&nbsp;&nbsp;message type:        3
<br>
&nbsp;&nbsp;&nbsp;msg length:          136 characters
<br>
&nbsp;&nbsp;&nbsp;message:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hostname:          tyr.informatik.hs-fulda.de
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;operating system:  SunOS
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;release:           5.10
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;processor:         sun4u
<br>
<p>tyr hello_2 129
<br>
<p><p><p><p>Why does the program break with an error on my Linux and Solaris x86_64
<br>
machines, if I try the same thing? I get the same error message on my
<br>
Solaris x86_64 machine, which I've added for Linux.
<br>
<p>linpc1 fd1026 107 ompi_info | grep -e &quot;OPAL repo revision:&quot; -e &quot;C compiler 
<br>
absolute:&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL repo revision: v2.x-dev-1468-g6011906
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C compiler absolute: /usr/local/gcc-5.1.0/bin/gcc
<br>
linpc1 fd1026 108 mpiexec --oversubscribe -np 1 --host linpc1 hello_2_mpi : -np 
<br>
1 --host linpc1 hello_2_slave_mpi
<br>
--------------------------------------------------------------------------
<br>
While computing bindings, we found no available cpus on
<br>
the following node:
<br>
<p>&nbsp;&nbsp;&nbsp;Node:  linpc1
<br>
<p>Please check your allocation.
<br>
--------------------------------------------------------------------------
<br>
linpc1 fd1026 109 mpiexec --oversubscribe -np 1 --host linpc1 hello_2_mpi : -np 
<br>
1 --host linpc1,linpc1 hello_2_slave_mpi
<br>
--------------------------------------------------------------------------
<br>
A requested component was not found, or was unable to be opened.  This
<br>
means that this component is either not installed or is unable to be
<br>
used on your system (e.g., sometimes this means that shared libraries
<br>
that the component requires are unable to be found/loaded).  Note that
<br>
Open MPI stopped checking at the first component that it did not find.
<br>
<p>Host:      linpc1
<br>
Framework: ess
<br>
Component: pmi
<br>
--------------------------------------------------------------------------
<br>
[linpc1:24949] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in file 
<br>
../../openmpi-1.10.3rc4/orte/runtime/orte_init.c at line 129
<br>
--------------------------------------------------------------------------
<br>
A requested component was not found, or was unable to be opened.  This
<br>
means that this component is either not installed or is unable to be
<br>
used on your system (e.g., sometimes this means that shared libraries
<br>
that the component requires are unable to be found/loaded).  Note that
<br>
Open MPI stopped checking at the first component that it did not find.
<br>
<p>Host:      linpc1
<br>
Framework: ess
<br>
Component: pmi
<br>
--------------------------------------------------------------------------
<br>
[linpc1:24950] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in file 
<br>
../../openmpi-1.10.3rc4/orte/runtime/orte_init.c at line 129
<br>
--------------------------------------------------------------------------
<br>
It looks like orte_init failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during orte_init; some of which are due to configuration or
<br>
environment problems.  This failure appears to be an internal failure;
<br>
here's some additional information (which may only be relevant to an
<br>
Open MPI developer):
<br>
<p>&nbsp;&nbsp;&nbsp;orte_ess_base_open failed
<br>
&nbsp;&nbsp;&nbsp;--&gt; Returned value Not found (-13) instead of ORTE_SUCCESS
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
It looks like orte_init failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during orte_init; some of which are due to configuration or
<br>
environment problems.  This failure appears to be an internal failure;
<br>
here's some additional information (which may only be relevant to an
<br>
Open MPI developer):
<br>
<p>&nbsp;&nbsp;&nbsp;orte_ess_base_open failed
<br>
&nbsp;&nbsp;&nbsp;--&gt; Returned value Not found (-13) instead of ORTE_SUCCESS
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
It looks like MPI_INIT failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during MPI_INIT; some of which are due to configuration or environment
<br>
problems.  This failure appears to be an internal failure; here's some
<br>
additional information (which may only be relevant to an Open MPI
<br>
developer):
<br>
<p>&nbsp;&nbsp;&nbsp;ompi_mpi_init: ompi_rte_init failed
<br>
&nbsp;&nbsp;&nbsp;--&gt; Returned &quot;Not found&quot; (-13) instead of &quot;Success&quot; (0)
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
It looks like MPI_INIT failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during MPI_INIT; some of which are due to configuration or environment
<br>
problems.  This failure appears to be an internal failure; here's some
<br>
additional information (which may only be relevant to an Open MPI
<br>
developer):
<br>
<p>&nbsp;&nbsp;&nbsp;ompi_mpi_init: ompi_rte_init failed
<br>
&nbsp;&nbsp;&nbsp;--&gt; Returned &quot;Not found&quot; (-13) instead of &quot;Success&quot; (0)
<br>
--------------------------------------------------------------------------
<br>
*** An error occurred in MPI_Init
<br>
*** on a NULL communicator
<br>
*** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
<br>
***    and potentially your MPI job)
<br>
[linpc1:24949] Local abort before MPI_INIT completed successfully; not able to 
<br>
aggregate error messages, and not able to guarantee that all other processes 
<br>
were killed!
<br>
*** An error occurred in MPI_Init
<br>
*** on a NULL communicator
<br>
*** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
<br>
***    and potentially your MPI job)
<br>
[linpc1:24950] Local abort before MPI_INIT completed successfully; not able to 
<br>
aggregate error messages, and not able to guarantee that all other processes 
<br>
were killed!
<br>
-------------------------------------------------------
<br>
Primary job  terminated normally, but 1 process returned
<br>
a non-zero exit code.. Per user-direction, the job has been aborted.
<br>
-------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
mpiexec detected that one or more processes exited with non-zero status, thus 
<br>
causing
<br>
the job to be terminated. The first process to do so was:
<br>
<p>&nbsp;&nbsp;&nbsp;Process name: [[2401,1],0]
<br>
&nbsp;&nbsp;&nbsp;Exit code:    1
<br>
--------------------------------------------------------------------------
<br>
linpc1 fd1026 110
<br>
<p><p><p><p>I would be grateful if somebody can fix the problem. Please let me
<br>
know, if you need more information. Thank you very much for any help
<br>
in advance.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<p>

<br><hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29404/hello_2_mpi.c">hello_2_mpi.c</a>
</ul>
<!-- attachment="hello_2_mpi.c" -->
<hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29404/hello_2_slave_mpi.c">hello_2_slave_mpi.c</a>
</ul>
<!-- attachment="hello_2_slave_mpi.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29405.php">Siegmar Gross: "[OMPI users] openmpi-dev-4221-gb707d13: referenced symbol"</a>
<li><strong>Previous message:</strong> <a href="29403.php">Siegmar Gross: "[OMPI users] openmpi-v1.10.3rc4: another problem with &quot;--slot-list&quot;"</a>
<!-- nextthread="start" -->
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
