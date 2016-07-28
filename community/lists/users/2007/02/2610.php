<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Feb  5 15:16:32 2007" -->
<!-- isoreceived="20070205201632" -->
<!-- sent="Mon, 5 Feb 2007 15:16:16 -0500" -->
<!-- isosent="20070205201616" -->
<!-- name="Alex Tumanov" -->
<!-- email="atumanov_at_[hidden]" -->
<!-- subject="[OMPI users] running OpenMPI jobs over Myrinet gm interconnect" -->
<!-- id="2453e2900702051216o5c1e0a82ya9269b0f0f55b2eb_at_mail.gmail.com" -->
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
<strong>From:</strong> Alex Tumanov (<em>atumanov_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-02-05 15:16:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2611.php">Jason Martin: "[OMPI users] 64-bit Open-mpi on Intel Mac OS X? (opal_if error)"</a>
<li><strong>Previous message:</strong> <a href="2609.php">Joe Griffin: "Re: [OMPI users] -prefix not working"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2616.php">Reese Faucette: "Re: [OMPI users] running OpenMPI jobs over Myrinet gm interconnect"</a>
<li><strong>Reply:</strong> <a href="2616.php">Reese Faucette: "Re: [OMPI users] running OpenMPI jobs over Myrinet gm interconnect"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello list,
<br>
<p>I'm having difficulty with running a simple hello world OpenMPI
<br>
program over Myrinet gm interconnect - please see the log at the end
<br>
of this email. The error is tripped by a call to the function
<br>
gm_global_id_to_node_id(
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;gm_btl-&gt;port,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;gm_endpoint-&gt;endpoint_addr.global_id,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;gm_endpoint-&gt;endpoint_addr.node_id))
<br>
My hardware setup is identical to the one described here:
<br>
<a href="http://www.open-mpi.org/community/lists/users/2007/02/2577.php">http://www.open-mpi.org/community/lists/users/2007/02/2577.php</a>
<br>
and I'm using the latest stable release - OpenMPI 1.1.4. Has anybody
<br>
encountered this error before? Google returns nothing on it...
<br>
<p>Thanks,
<br>
Alex.
<br>
<p>P.S. Note that the hello-world job does run despite the error, but
<br>
HPLinpack benchmark does fail.
<br>
<p>Hello World LOG:
<br>
<p># mpirun -np 4  --prefix $MPIHOME -H c0-0,f0-0.local  --mca btl
<br>
gm,self --mca btl_tcp_if_exclude eth1 ~/testdir/hello
<br>
[f0-0:25256] [btl_gm_proc.c:184] error in converting global to local id
<br>
[f0-0:25256] [btl_gm_proc.c:184] error in converting global to local id
<br>
[compute-0-0.local:31918] [btl_gm_proc.c:184] error in converting
<br>
global to local id
<br>
[f0-0:25257] [btl_gm_proc.c:184] error in converting global to local id
<br>
[f0-0:25257] [btl_gm_proc.c:184] error in converting global to local id
<br>
[compute-0-0.local:31919] [btl_gm_proc.c:184] error in converting
<br>
global to local id
<br>
[compute-0-0.local:31919] [btl_gm_proc.c:184] error in converting
<br>
global to local id
<br>
[compute-0-0.local:31918] [btl_gm_proc.c:184] error in converting
<br>
global to local id
<br>
Hello from Alex' MPI test program
<br>
Process 1 on f0-0 out of 4
<br>
Hello from Alex' MPI test program
<br>
Hello from Alex' MPI test program
<br>
Process 2 on compute-0-0.local out of 4
<br>
Process 0 on compute-0-0.local out of 4
<br>
Hello from Alex' MPI test program
<br>
Process 3 on f0-0 out of 4
<br>
<p>HPLinpack LOG:
<br>
<p># mpirun -np 4  --prefix $MPIHOME -H c0-0,f0-0.local  --mca btl
<br>
gm,self /opt/hpl/openmpi-hpl/bin/xhpl
<br>
[f0-0:25443] [btl_gm_proc.c:184] error in converting global to local id
<br>
[compute-0-0.local:32595] [btl_gm_proc.c:184] error in converting
<br>
global to local id
<br>
[compute-0-0.local:32595] [btl_gm_proc.c:184] error in converting
<br>
global to local id
<br>
[f0-0:25444] [btl_gm_proc.c:184] error in converting global to local id
<br>
[f0-0:25444] [btl_gm_proc.c:184] error in converting global to local id
<br>
[compute-0-0.local:32596] [btl_gm_proc.c:184] error in converting
<br>
global to local id
<br>
[compute-0-0.local:32596] [btl_gm_proc.c:184] error in converting
<br>
global to local id
<br>
[f0-0:25443] [btl_gm_proc.c:184] error in converting global to local id
<br>
[f0-0:25443] *** An error occurred in MPI_Send
<br>
[f0-0:25443] *** on communicator MPI_COMM_WORLD
<br>
[f0-0:25443] *** MPI_ERR_INTERN: internal error
<br>
[f0-0:25443] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
[f0-0:25444] *** An error occurred in MPI_Send
<br>
[f0-0:25444] *** on communicator MPI_COMM_WORLD
<br>
[f0-0:25444] *** MPI_ERR_INTERN: internal error
<br>
[f0-0:25444] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
mpirun noticed that job rank 0 with PID 32595 on node &quot;c0-0&quot; exited on
<br>
signal 15.
<br>
3 additional processes aborted (not shown)
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2611.php">Jason Martin: "[OMPI users] 64-bit Open-mpi on Intel Mac OS X? (opal_if error)"</a>
<li><strong>Previous message:</strong> <a href="2609.php">Joe Griffin: "Re: [OMPI users] -prefix not working"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2616.php">Reese Faucette: "Re: [OMPI users] running OpenMPI jobs over Myrinet gm interconnect"</a>
<li><strong>Reply:</strong> <a href="2616.php">Reese Faucette: "Re: [OMPI users] running OpenMPI jobs over Myrinet gm interconnect"</a>
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
