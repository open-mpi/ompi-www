<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Mar 31 16:43:42 2006" -->
<!-- isoreceived="20060331214342" -->
<!-- sent="Fri, 31 Mar 2006 14:43:27 -0700" -->
<!-- isosent="20060331214327" -->
<!-- name="Josh Aune" -->
<!-- email="ladros_at_[hidden]" -->
<!-- subject="[OMPI devel] process ordering/processes per node" -->
<!-- id="98a233180603311343w49aacbecs7eb2ba5d99ac1b3b_at_mail.gmail.com" -->
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
<strong>From:</strong> Josh Aune (<em>ladros_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-31 16:43:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0803.php">Adrian Knoth: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>Previous message:</strong> <a href="0801.php">Adrian Knoth: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2006/04/0818.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] process ordering/processes per node"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2006/04/0818.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] process ordering/processes per node"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have a simple hello program where each child prints out the hostname
<br>
of the node it is running on.  When I run this (on a bproc machine)
<br>
with -np 4 and no host file it launches one process per node on each
<br>
of the first 4 avaliable nodes.   ie:
<br>
<p>$ mpirun -np 4 ./mpi_hello
<br>
n1 hello
<br>
n3 hello
<br>
n2 hello
<br>
n4 hello
<br>
<p>What I am trying to get is to launch 2 processes per node, or this output:
<br>
<p>$ mpirun -np 4 $magic_arg ./mpi_hello
<br>
n1 hello
<br>
n1 hello
<br>
n2 hello
<br>
n2 hello
<br>
<p><p>ita,
<br>
Josh
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0803.php">Adrian Knoth: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>Previous message:</strong> <a href="0801.php">Adrian Knoth: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2006/04/0818.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] process ordering/processes per node"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2006/04/0818.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] process ordering/processes per node"</a>
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
