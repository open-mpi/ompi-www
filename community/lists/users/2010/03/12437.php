<?
$subject_val = "[OMPI users] Trouble executing remote processes";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 25 12:31:40 2010" -->
<!-- isoreceived="20100325163140" -->
<!-- sent="Thu, 25 Mar 2010 11:31:30 -0500" -->
<!-- isosent="20100325163130" -->
<!-- name="Robert Collyer" -->
<!-- email="rcollyer_at_[hidden]" -->
<!-- subject="[OMPI users] Trouble executing remote processes" -->
<!-- id="4BAB8FE2.6030307_at_phys.lsu.edu" -->
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
<strong>Subject:</strong> [OMPI users] Trouble executing remote processes<br>
<strong>From:</strong> Robert Collyer (<em>rcollyer_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-25 12:31:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12438.php">Andreas Knüpfer: "Re: [OMPI users] Question - OTF file"</a>
<li><strong>Previous message:</strong> <a href="12436.php">Jeff Squyres: "Re: [OMPI users] Multi-rail support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12439.php">Robert Collyer: "Re: [OMPI users] Trouble executing remote processes"</a>
<li><strong>Reply:</strong> <a href="12439.php">Robert Collyer: "Re: [OMPI users] Trouble executing remote processes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm running on a Fedora Core 9 Linux cluster with the mpi and home 
<br>
directories mounted on the compute nodes via NFS.  Since the executables 
<br>
are on a remote server, I have configured mpi with --disable-dlopen and 
<br>
have even gone as far as far enabling static and disabling shared.  In 
<br>
the process of trying to work around this problem, I upgraded from 
<br>
openmpi 1.3.3 to 1.4.1.  Also, the binaries were compiled with gcc 
<br>
4.3.0, and the interconnect is ssh over ethernet.
<br>
<p>Running from the fileserver, which is practically identical to the 
<br>
compute nodes, I can run the c++ hello world (examples/hello_cxx.cc) on 
<br>
up to three machines including the fileserver, but only two if the 
<br>
fileserver is not included in the hostname list.  In other words, either 
<br>
this
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;mpirun -H filesrv,node1,node2 cpphello
<br>
<p>or
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;mpirun -H node1,node2 cpphello
<br>
<p>for any number of processes functions correctly.  However, beyond the 
<br>
two remote node limit, the application just hangs.  orted shows up on 
<br>
the remote systems, but nothing happens.  Additionally, if I attempt to 
<br>
do the same thing from any of the compute nodes, any attempt to run on a 
<br>
remote node just hangs like before.  Incidentally, this behavior is not 
<br>
limited to hello world, and it occurs with non-mpi programs, like 
<br>
hostname, also.  Alternatively, when I run the c hello world 
<br>
(examples/hello_c.c), I get the same hanging behavior.  But, I also get 
<br>
mca_btl_tcp_endpoint_complete_connect &quot;no route to host&quot; errors, even 
<br>
though the processes appear to complete successfully.   Although, I need 
<br>
to kill (via ctrl-c) the overall mpi process. 
<br>
<p>As a further note, when testing this I also ran the boost::mpi tests, 
<br>
and I noticed that the all_gather_test process would eventually start 
<br>
remotely, but would peg the processor and never return.  I have not 
<br>
noticed this occur with the hello world programs.
<br>
<p>Since they run better from the fileserver, I suspect it has something to 
<br>
do with the NFS mount.  But, I have no idea how to test that, or what to 
<br>
do about it.
<br>
<p>Any help would be greatly appreciated.
<br>
<p>Rob
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12438.php">Andreas Knüpfer: "Re: [OMPI users] Question - OTF file"</a>
<li><strong>Previous message:</strong> <a href="12436.php">Jeff Squyres: "Re: [OMPI users] Multi-rail support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12439.php">Robert Collyer: "Re: [OMPI users] Trouble executing remote processes"</a>
<li><strong>Reply:</strong> <a href="12439.php">Robert Collyer: "Re: [OMPI users] Trouble executing remote processes"</a>
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
