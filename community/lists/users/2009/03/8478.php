<?
$subject_val = "[OMPI users] open-mpi error: unable to create listen socket";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 17 05:12:40 2009" -->
<!-- isoreceived="20090317091240" -->
<!-- sent="Tue, 17 Mar 2009 16:12:34 +0700" -->
<!-- isosent="20090317091234" -->
<!-- name="-andria-" -->
<!-- email="andria009_at_[hidden]" -->
<!-- subject="[OMPI users] open-mpi error: unable to create listen socket" -->
<!-- id="d39867f70903170212w7e1e99b1i3276a91bc75040b5_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] open-mpi error: unable to create listen socket<br>
<strong>From:</strong> -andria- (<em>andria009_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-17 05:12:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8479.php">Gilbert Grosdidier: "Re: [OMPI users] open mpi on non standard ssh port"</a>
<li><strong>Previous message:</strong> <a href="8477.php">Bernhard Knapp: "[OMPI users] open mpi on non standard ssh port"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8480.php">Ralph Castain: "Re: [OMPI users] open-mpi error: unable to create listen socket"</a>
<li><strong>Reply:</strong> <a href="8480.php">Ralph Castain: "Re: [OMPI users] open-mpi error: unable to create listen socket"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all,
<br>
<p>I am still learning how to create a parallel program with open-mpi.
<br>
<p>I try to run a mpihello program on my cluster, but it gives error when it is
<br>
executed as ordinary (public) user. however, it gives the correct result
<br>
when it is run by root user.
<br>
<p>why this happen? how can it be solved?
<br>
<p>attached you can find ompi_info --all output.
<br>
<p>the code:
<br>
<p>#include &quot;mpi.h&quot;
<br>
#include &quot;stdio.h&quot;
<br>
<p>int main(int argc, char** argv) {
<br>
&nbsp;&nbsp;&nbsp;int numprocs, rank, namelen;
<br>
&nbsp;&nbsp;&nbsp;char processor_name[MPI_MAX_PROCESSOR_NAME];
<br>
<p>&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD, &amp;numprocs);
<br>
&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
<br>
&nbsp;&nbsp;&nbsp;MPI_Get_processor_name(processor_name, &amp;namelen);
<br>
&nbsp;&nbsp;&nbsp;printf(&quot;Process %d on %s out of %d\n&quot;, rank, processor_name, numprocs);
<br>
&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
<p>&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
<p>output:
<br>
[public_at_cisitu01 ~]$ mpicc mpihello.c -o mpihello
<br>
<p>### as public ###
<br>
[public_at_cisitu01 ~]$ mpirun -np 4 -hostfile nodes.lst mpihello
<br>
[cisitu02:02897] mca_oob_tcp_create_listen: bind() failed: Permission denied
<br>
(13)
<br>
[cisitu02:02897] mca_oob_tcp_init: unable to create listen socket
<br>
[cisitu02:02898] mca_oob_tcp_create_listen: bind() failed: Permission denied
<br>
(13)
<br>
[cisitu02:02898] mca_oob_tcp_init: unable to create listen socket
<br>
[cisitu02][0,1,1][btl_tcp_component.c:412:mca_btl_tcp_component_create_listen]
<br>
bind() failed with errno=13
<br>
[cisitu02][0,1,3][btl_tcp_component.c:412:mca_btl_tcp_component_create_listen]
<br>
bind() failed with errno=13
<br>
[cisitu02:02897] [0,1,1] ORTE_ERROR_LOG: Not found in file
<br>
gpr_proxy_deliver_notify_msg.c at line 139
<br>
[cisitu02:02898] [0,1,3] ORTE_ERROR_LOG: Not found in file
<br>
gpr_proxy_deliver_notify_msg.c at line 139
<br>
^Cmpirun: killing job...
<br>
<p>mpirun noticed that job rank 0 with PID 2976 on node cisitu01 exited on
<br>
signal 15 (Terminated).
<br>
3 additional processes aborted (not shown)
<br>
<p>### as root ###
<br>
-bash-3.2# mpirun -np 4 -hostfile nodes.lst mpihello
<br>
Process 0 on cisitu01 out of 4
<br>
Process 1 on cisitu02 out of 4
<br>
Process 3 on cisitu02 out of 4
<br>
Process 2 on cisitu01 out of 4
<br>
-bash-3.2#
<br>
<p>thank you in advance,
<br>
<p>regards,
<br>
-andria
<br>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8478/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8478/ompi_info.all">ompi_info.all</a>
</ul>
<!-- attachment="ompi_info.all" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8479.php">Gilbert Grosdidier: "Re: [OMPI users] open mpi on non standard ssh port"</a>
<li><strong>Previous message:</strong> <a href="8477.php">Bernhard Knapp: "[OMPI users] open mpi on non standard ssh port"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8480.php">Ralph Castain: "Re: [OMPI users] open-mpi error: unable to create listen socket"</a>
<li><strong>Reply:</strong> <a href="8480.php">Ralph Castain: "Re: [OMPI users] open-mpi error: unable to create listen socket"</a>
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
