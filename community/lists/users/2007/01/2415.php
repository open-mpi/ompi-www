<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jan  2 14:09:08 2007" -->
<!-- isoreceived="20070102190908" -->
<!-- sent="Tue, 2 Jan 2007 13:08:55 -0600" -->
<!-- isosent="20070102190855" -->
<!-- name="Grobe, Gary L. \(JSC-EV\)[ESCG]" -->
<!-- email="gary.l.grobe_at_[hidden]" -->
<!-- subject="[OMPI users] Ompi failing on mx only" -->
<!-- id="559847D38F12F742B0EE27727596F42901A2F996_at_NDJSEVS14.ndc.nasa.gov" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Grobe, Gary L. \(JSC-EV\)[ESCG] (<em>gary.l.grobe_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-01-02 14:08:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2416.php">jcolmenares_at_[hidden]: "Re: [OMPI users] orted: command not found"</a>
<li><strong>Previous message:</strong> <a href="2414.php">George Bosilca: "Re: [OMPI users] orted: command not found"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2420.php">Reese Faucette: "Re: [OMPI users] Ompi failing on mx only"</a>
<li><strong>Reply:</strong> <a href="2420.php">Reese Faucette: "Re: [OMPI users] Ompi failing on mx only"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I was initially using 1.1.2 and moved to 1.2b2 because of a hang on
<br>
MPI_Bcast() which 1.2b2 reports to fix, and seemed to have done so. My
<br>
compute nodes are 2 dual core xeons on myrinet with mx. The problem is
<br>
trying to get ompi running on mx only. My machine file is as follows ...
<br>
<p>node-1 slots=4 max-slots=4
<br>
node-2 slots=4 max-slots=4
<br>
node-3 slots=4 max-slots=4
<br>
<p>'mpirun' with the minimum number of processes in order to get the error
<br>
...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun --prefix /usr/local/openmpi-1.2b2 -x LD_LIBRARY_PATH
<br>
--hostfile ./h1-3 -np 2 --mca btl mx,self ./cpi
<br>
<p>Results with the following output ...
<br>
<p>:~/Projects/ompi/cpi$ mpirun --prefix /usr/local/openmpi-1.2b2 -x
<br>
LD_LIBRARY_PATH --hostfile ./h1-3 -np 2 --mca btl mx,self ./cpi
<br>
<p>------------------------------------------------------------------------
<br>
<pre>
--
Process 0.1.0 is unable to reach 0.1.1 for MPI communication.
If you specified the use of a BTL component, you may have
forgotten a component (such as &quot;self&quot;) in the list of 
usable components.
------------------------------------------------------------------------
--
------------------------------------------------------------------------
--
Process 0.1.1 is unable to reach 0.1.0 for MPI communication.
If you specified the use of a BTL component, you may have
forgotten a component (such as &quot;self&quot;) in the list of 
usable components.
------------------------------------------------------------------------
--
------------------------------------------------------------------------
--
It looks like MPI_INIT failed for some reason; your parallel process is
likely to abort.  There are many reasons that a parallel process can
fail during MPI_INIT; some of which are due to configuration or
environment
problems.  This failure appears to be an internal failure; here's some
additional information (which may only be relevant to an Open MPI
developer):
  PML add procs failed
  --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)
------------------------------------------------------------------------
--
*** An error occurred in MPI_Init
*** before MPI was initialized
*** MPI_ERRORS_ARE_FATAL (goodbye)
------------------------------------------------------------------------
--
It looks like MPI_INIT failed for some reason; your parallel process is
likely to abort.  There are many reasons that a parallel process can
fail during MPI_INIT; some of which are due to configuration or
environment
problems.  This failure appears to be an internal failure; here's some
additional information (which may only be relevant to an Open MPI
developer):
  PML add procs failed
  --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)
------------------------------------------------------------------------
--
*** An error occurred in MPI_Init
*** before MPI was initialized
*** MPI_ERRORS_ARE_FATAL (goodbye)
mpirun noticed that job rank 1 with PID 0 on node node-1 exited on
signal 1.
---------------- end of output -----------------------
I get that same error w/ the examples included in the ompi-1.2b2
distrib. However, if I change the mca params as such ...
	mpirun --prefix /usr/local/openmpi-1.2b2 -x LD_LIBRARY_PATH
--hostfile ./h1-3 -np 5 --mca pml cm ./cpi
Running up to -np 5 works (one of the processes does get put on the 2nd
node), but running with -np 6 fails with the following ...
[node-2:10464] mx_connect fail for node-2:0 with key aaaaffff (error
Endpoint closed or not connectable!)
[node-2:10463] mx_connect fail for node-2:0 with key aaaaffff (error
Endpoint closed or not connectable!)
------------------------------------------------------------------------
--
It looks like MPI_INIT failed for some reason; your parallel process is
likely to abort.  There are many reasons that a parallel process can
fail during MPI_INIT; some of which are due to configuration or
environment
problems.  This failure appears to be an internal failure; here's some
additional information (which may only be relevant to an Open MPI
developer):
  PML add procs failed
  --&gt; Returned &quot;Error&quot; (-1) instead of &quot;Success&quot; (0)
------------------------------------------------------------------------
--
*** An error occurred in MPI_Init
*** before MPI was initialized
*** MPI_ERRORS_ARE_FATAL (goodbye)
------------------------------------------------------------------------
--
It looks like MPI_INIT failed for some reason; your parallel process is
likely to abort.  There are many reasons that a parallel process can
fail during MPI_INIT; some of which are due to configuration or
environment
problems.  This failure appears to be an internal failure; here's some
additional information (which may only be relevant to an Open MPI
developer):
  PML add procs failed
  --&gt; Returned &quot;Error&quot; (-1) instead of &quot;Success&quot; (0)
------------------------------------------------------------------------
--
*** An error occurred in MPI_Init
*** before MPI was initialized
*** MPI_ERRORS_ARE_FATAL (goodbye)
mpirun noticed that job rank 0 with PID 0 on node node-1 exited on
signal 1.
3 additional processes aborted (not shown)
----------------- end of mpirun output ---------------------
I don't believe there'a anything wrong w/ the hardware as I can ping on
mx between this failed node and the master fine. So I tried a different
set of 3 nodes and I got the same error, it always fails on the 2nd node
of any group of nodes I choose.
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2415/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2416.php">jcolmenares_at_[hidden]: "Re: [OMPI users] orted: command not found"</a>
<li><strong>Previous message:</strong> <a href="2414.php">George Bosilca: "Re: [OMPI users] orted: command not found"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2420.php">Reese Faucette: "Re: [OMPI users] Ompi failing on mx only"</a>
<li><strong>Reply:</strong> <a href="2420.php">Reese Faucette: "Re: [OMPI users] Ompi failing on mx only"</a>
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
