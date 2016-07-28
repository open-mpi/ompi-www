<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Oct  4 17:06:12 2007" -->
<!-- isoreceived="20071004210612" -->
<!-- sent="Thu, 4 Oct 2007 17:06:07 -0400" -->
<!-- isosent="20071004210607" -->
<!-- name="Jinhui Qin" -->
<!-- email="qin.jinhui_at_[hidden]" -->
<!-- subject="[OMPI devel] problem in runing MPI job through XGrid" -->
<!-- id="11a712d60710041406s5f5997dfy9bc236b813efb3a1_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Jinhui Qin (<em>qin.jinhui_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-04 17:06:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2382.php">David Daniel: "[OMPI devel] collective problems"</a>
<li><strong>Previous message:</strong> <a href="2380.php">Tobias Hilbrich: "[OMPI devel] Hybrid examples"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2414.php">Brian Barrett: "Re: [OMPI devel] problem in runing MPI job through XGrid"</a>
<li><strong>Reply:</strong> <a href="2414.php">Brian Barrett: "Re: [OMPI devel] problem in runing MPI job through XGrid"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
I have set up an Xgrid including one laptop and 7 Mac mini nodes (all are
<br>
duo core machines). I have also installed openMPI (openmpi 1.2.1) on all
<br>
nodes. The laptop node (hostname: sib) has three roles: agent, controller
<br>
and client, all the other nodes are only agents.
<br>
<p>When I started &quot;mpirun -n 8 /bin/hostname&quot; on my laptop node terminal, it
<br>
shows all 8 nodes' hostnames correctly. It seems that xgrid works fine.
<br>
<p>Then I wanted to run a simple mpi code. The source code &quot;Hello.c&quot; has been
<br>
compiled (use mpicc) and the excuatalbe &quot;Hello&quot; has been copied to each node
<br>
under same path(I have also tested they all run properly on each of the
<br>
local nodes.). when I asked for 1 or 2 processors to run the job, xgrid
<br>
worked fine, but when I asked for 3 or more processors, all jobs were
<br>
failed. Following are the commands and the results/messages that I got.
<br>
<p>Can anybody help me out?
<br>
<p>*************************************
<br>
running &quot;hostname&quot; and the results, they looks good.
<br>
*************************************
<br>
sib:sharcnet$ mpirun -n 8 /bin/hostname
<br>
node2
<br>
node8
<br>
node4
<br>
node5
<br>
node3
<br>
node7
<br>
sib
<br>
node6
<br>
<p>*************************************
<br>
the simple mpi program Hello.c source code
<br>
*************************************
<br>
#include
<br>
#include
<br>
<p>int main(int argc, char *argv[]) {
<br>
int numprocs, rank, namelen;
<br>
char processor_name[MPI_MAX_PROCESSOR_NAME];
<br>
<p>MPI_Init(&amp;argc, &amp;argv);
<br>
MPI_Comm_size(MPI_COMM_WORLD, &amp;numprocs);
<br>
MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
<br>
MPI_Get_processor_name(processor_name, &amp;namelen);
<br>
<p>printf(&quot;Process %d on %s out of %d\n&quot;, rank, processor_name, numprocs);
<br>
<p>MPI_Finalize();
<br>
}
<br>
<p>*************************************
<br>
ask for 1 and 2 processors to run &quot;Hello&quot;
<br>
and the results are all good
<br>
*************************************
<br>
sib:sharcnet$ mpirun -n 1 ~/openMPI_sutuff/Hello
<br>
Process 0 on sib out of 1
<br>
<p>sib:sharcnet$ mpiurun -n 2 ~/openMPI_stuff/Hello
<br>
Process 1 on node2 out of 2
<br>
Process 0 on sib out of 2
<br>
<p>*************************************
<br>
Here is the problem when
<br>
ask for 3 processors to run the job,
<br>
following are all the messages I got
<br>
*************************************
<br>
<p>sib:sharcnet$ mpirun -n 3 ~/openMPI_stuff/Hello
<br>
<p>Process 0.1.1 is unable to reach 0.1.2 for MPI communication.
<br>
If you specified the use of a BTL component, you may have
<br>
forgotten a component (such as &quot;self&quot;) in the list of
<br>
usable components.
<br>
<p>Process 0.1.2 is unable to reach 0.1.1 for MPI communication.
<br>
If you specified the use of a BTL component, you may have
<br>
forgotten a component (such as &quot;self&quot;) in the list of
<br>
usable components.
<br>
<p>It looks like MPI_INIT failed for some reason; your parallel process is
<br>
likely to abort. There are many reasons that a parallel process can
<br>
fail during MPI_INIT; some of which are due to configuration or environment
<br>
problems. This failure appears to be an internal failure; here's some
<br>
additional information (which may only be relevant to an Open MPI
<br>
developer):
<br>
<p>PML add procs failed
<br>
--&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)
<br>
<p>*** An error occurred in MPI_Init
<br>
*** before MPI was initialized
<br>
*** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
<p>It looks like MPI_INIT failed for some reason; your parallel process is
<br>
likely to abort. There are many reasons that a parallel process can
<br>
fail during MPI_INIT; some of which are due to configuration or environment
<br>
problems. This failure appears to be an internal failure; here's some
<br>
additional information (which may only be relevant to an Open MPI
<br>
developer):
<br>
<p>PML add procs failed
<br>
--&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)
<br>
<p>*** An error occurred in MPI_Init
<br>
*** before MPI was initialized
<br>
*** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
mpirun noticed that job rank 0 with PID 817 on node xgrid-node-0 exited on
<br>
signal 15 (Terminated).
<br>
<p>sib:sharcnet$
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-2381/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2382.php">David Daniel: "[OMPI devel] collective problems"</a>
<li><strong>Previous message:</strong> <a href="2380.php">Tobias Hilbrich: "[OMPI devel] Hybrid examples"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2414.php">Brian Barrett: "Re: [OMPI devel] problem in runing MPI job through XGrid"</a>
<li><strong>Reply:</strong> <a href="2414.php">Brian Barrett: "Re: [OMPI devel] problem in runing MPI job through XGrid"</a>
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
