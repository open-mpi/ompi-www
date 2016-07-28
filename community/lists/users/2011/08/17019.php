<?
$subject_val = "[OMPI users] Program hangs on send when run with nodes on remote machine";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug  4 13:59:31 2011" -->
<!-- isoreceived="20110804175931" -->
<!-- sent="Thu, 4 Aug 2011 13:59:05 -0400" -->
<!-- isosent="20110804175905" -->
<!-- name="Keith Manville" -->
<!-- email="kmanville_at_[hidden]" -->
<!-- subject="[OMPI users] Program hangs on send when run with nodes on remote machine" -->
<!-- id="CAFfXFGyMki=ROK3s0ekwz6nd0OJ=oSQ4Uyi8az8a=r1rkKQhEA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Program hangs on send when run with nodes on remote machine<br>
<strong>From:</strong> Keith Manville (<em>kmanville_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-04 13:59:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17020.php">Jeff Squyres: "Re: [OMPI users] OpenMPI causing WRF to crash"</a>
<li><strong>Previous message:</strong> <a href="17018.php">Christopher Jones: "[OMPI users] openmpi 1.2.8 on Xgrid noob issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17022.php">Jeff Squyres: "Re: [OMPI users] Program hangs on send when run with nodes on remote machine"</a>
<li><strong>Reply:</strong> <a href="17022.php">Jeff Squyres: "Re: [OMPI users] Program hangs on send when run with nodes on remote machine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am having trouble running my MPI program on multiple nodes. I can
<br>
run multiple processes on a single node, and I can spawn processes on
<br>
on remote nodes, but when I call Send from a remote node, the node
<br>
never returns, even though there is an appropriate Recv waiting. I'm
<br>
pretty sure this is an issue with my configuration, not my code. I've
<br>
tried some other sample programs I found and had the same problem of
<br>
hanging on a send from one host to another.
<br>
<p>Here's an in depth description:
<br>
<p>I wrote a quick test program where each process with rank &gt; 1 sends an
<br>
int to the master (rank 0), and the master receives until it gets
<br>
something from every other process.
<br>
<p>My test program works fine when I run multiple processes on a single machine.
<br>
<p>either the local node:
<br>
<p>$ ./mpirun -n 4 ./mpi-test
<br>
Hi I'm localhost:2
<br>
Hi I'm localhost:1
<br>
localhost:1 sending 11...
<br>
localhost:2 sending 12...
<br>
localhost:2 sent 12
<br>
localhost:1 sent 11
<br>
Hi I'm localhost:0
<br>
localhost:0 received 11 from 1
<br>
localhost:0 received 12 from 2
<br>
Hi I'm localhost:3
<br>
localhost:3 sending 13...
<br>
localhost:3 sent 13
<br>
localhost:0 received 13 from 3
<br>
all workers checked in!
<br>
<p>or a remote one:
<br>
<p>$ ./mpirun -np 2 -host remotehost ./mpi-test
<br>
Hi I'm remotehost:0
<br>
remotehost:0 received 11 from 1
<br>
all workers checked in!
<br>
Hi I'm remotehost:1
<br>
remotehost:1 sending 11...
<br>
remotehost:1 sent 11
<br>
<p>But when I try to run the master locally and the worker(s) remotely
<br>
(this is the way I am actually interested in running it), Send never
<br>
returns and it hangs indefinitely.
<br>
<p>$ ./mpirun -np 2 -host localhost,remotehost ./mpi-test
<br>
Hi I'm localhost:0
<br>
Hi I'm remotehost:1
<br>
remotehost:1 sending 11...
<br>
<p>Just to see if it would work, I tried spawning the master on the
<br>
remotehost and the worker on the localhost.
<br>
<p>$ ./mpirun -np 2 -host remotehost,localhost ./mpi-test
<br>
Hi I'm localhost:1
<br>
localhost:1 sending 11...
<br>
localhost:1 sent 11
<br>
Hi I'm remotehost:0
<br>
remotehost:0 received 0 from 1
<br>
all workers checked in!
<br>
<p>It doesn't hang on Send, but the wrong value is received.
<br>
<p>Any idea what's going on? I've attached my code, my config.log,
<br>
ifconfig output, and ompi_info output.
<br>
<p>Thanks,
<br>
Keith
<br>
<p>
<br><hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17019/mpi.tgz">mpi.tgz</a>
</ul>
<!-- attachment="mpi.tgz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17020.php">Jeff Squyres: "Re: [OMPI users] OpenMPI causing WRF to crash"</a>
<li><strong>Previous message:</strong> <a href="17018.php">Christopher Jones: "[OMPI users] openmpi 1.2.8 on Xgrid noob issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17022.php">Jeff Squyres: "Re: [OMPI users] Program hangs on send when run with nodes on remote machine"</a>
<li><strong>Reply:</strong> <a href="17022.php">Jeff Squyres: "Re: [OMPI users] Program hangs on send when run with nodes on remote machine"</a>
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
