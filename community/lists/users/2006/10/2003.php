<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct 18 13:03:59 2006" -->
<!-- isoreceived="20061018170359" -->
<!-- sent="Wed, 18 Oct 2006 18:03:40 +0100 (BST)" -->
<!-- isosent="20061018170340" -->
<!-- name="Lydia Heck" -->
<!-- email="lydia.heck_at_[hidden]" -->
<!-- subject="[OMPI users] job fails to terminate" -->
<!-- id="Pine.GSO.4.53.0610181757220.29896_at_duss0-ast.phyast.dur.ac.uk" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="mailman.6368.1161160243.28407.users_at_open-mpi.org" -->
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
<strong>From:</strong> Lydia Heck (<em>lydia.heck_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-18 13:03:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2004.php">Ralph H Castain: "Re: [OMPI users] job fails to terminate"</a>
<li><strong>Previous message:</strong> <a href="2002.php">Dan Cardin: "Re: [OMPI users] mac os x 10.3 openmpi won't compile hello world"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2004.php">Ralph H Castain: "Re: [OMPI users] job fails to terminate"</a>
<li><strong>Reply:</strong> <a href="2004.php">Ralph H Castain: "Re: [OMPI users] job fails to terminate"</a>
<li><strong>Maybe reply:</strong> <a href="2017.php">Lydia Heck: "Re: [OMPI users] job fails to terminate"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have recently installed openmpi 1.3r1212a over tcp and gigabit
<br>
on a Solaris 10 x86/64 system.
<br>
<p>The compilation of some test codes
<br>
monte (a monte carlo estimate of pi),
<br>
connectivity which test connectivity between processes and nodes
<br>
prime, which calculates prime numbers  (these testcode are examples
<br>
which are bundled with Sun HPC).
<br>
<p>compile fine using the openmpi version of mpicc, mpif95 and mpic++
<br>
<p>And sometimes the jobs work fine, but most of the time the jobs freeze
<br>
leaving zombies behind.
<br>
<p>my run time command is
<br>
<p>mpirun --hostfile my-hosts -mca pls_rsh_agent rsh --mca btl tcp,self -np 14 \
<br>
monte
<br>
<p>and I get as output
<br>
oberon(209) &gt; mpirun --hostfile my-hosts -mca pls_rsh_agent rsh --mca btl
<br>
tcp,self -np 14 monte
<br>
Monte-Carlo estimate of pi by   14 processes is 3.141503.
<br>
<p>with the cursor hanging.
<br>
<p>The process table shows
<br>
<p>oberon# ps -eaf | grep dph0elh
<br>
&nbsp;dph0elh  9583  7445   7 17:45:01 pts/26      9:22 mpirun --hostfile my-hosts
<br>
-mca pls_rsh_agent rsh --mca btl tcp,self -np 14 mon
<br>
&nbsp;dph0elh  9595  9588   0        - ?           0:02 &lt;defunct&gt;
<br>
&nbsp;dph0elh  9588     1   7 17:45:01 ??          9:03 orted --bootproxy 1 --name
<br>
0.0.1 --num_procs 5 --vpid_start 0 --nodename oberon
<br>
&nbsp;dph0elh  7445  6924   0 17:01:38 pts/26      0:00 -tcsh
<br>
&nbsp;&nbsp;&nbsp;&nbsp;root  9656  4151   0 18:01:31 pts/36      0:00 grep dph0elh
<br>
&nbsp;dph0elh  9593  9588   0        - ?           0:02 &lt;defunct&gt;
<br>
<p><p>one of the nodes offers 8 cpus the other nodes in the hostfile offer 2.
<br>
There are a total of 14 cpus available. and as you can see from the command line
<br>
I use --mca btl tcp,self
<br>
<p>There are no other interconnects.
<br>
<p>I could not find any entry in the FAQs, except for the advice on using
<br>
--mca btl tcp,self.
<br>
<p><p><p><p>------------------------------------------
<br>
Dr E L  Heck
<br>
<p>University of Durham
<br>
Institute for Computational Cosmology
<br>
Ogden Centre
<br>
Department of Physics
<br>
South Road
<br>
<p>DURHAM, DH1 3LE
<br>
United Kingdom
<br>
<p>e-mail: lydia.heck_at_[hidden]
<br>
<p>Tel.: + 44 191 - 334 3628
<br>
Fax.: + 44 191 - 334 3645
<br>
___________________________________________
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2004.php">Ralph H Castain: "Re: [OMPI users] job fails to terminate"</a>
<li><strong>Previous message:</strong> <a href="2002.php">Dan Cardin: "Re: [OMPI users] mac os x 10.3 openmpi won't compile hello world"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2004.php">Ralph H Castain: "Re: [OMPI users] job fails to terminate"</a>
<li><strong>Reply:</strong> <a href="2004.php">Ralph H Castain: "Re: [OMPI users] job fails to terminate"</a>
<li><strong>Maybe reply:</strong> <a href="2017.php">Lydia Heck: "Re: [OMPI users] job fails to terminate"</a>
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
