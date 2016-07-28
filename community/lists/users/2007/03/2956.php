<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Mar 30 14:20:16 2007" -->
<!-- isoreceived="20070330182016" -->
<!-- sent="Fri, 30 Mar 2007 14:19:51 -0400" -->
<!-- isosent="20070330181951" -->
<!-- name="Prakash Velayutham" -->
<!-- email="Prakash.Velayutham_at_[hidden]" -->
<!-- subject="[OMPI users] Spawning to processors outside of the process manager assigned	nodes" -->
<!-- id="s60d1c99.048_at_n6mcgw16.cchmc.org" -->
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
<strong>From:</strong> Prakash Velayutham (<em>Prakash.Velayutham_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-30 14:19:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2957.php">Heywood, Todd: "Re: [OMPI users] Measuring MPI message size used by application"</a>
<li><strong>Previous message:</strong> <a href="2955.php">George Bosilca: "Re: [OMPI users] Getting a core-dump with OpenMPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I have Torque as the batch manager and Open MPI (1.0.1) as the MPI
<br>
library. Initially I request for 'n' processors through Torque. After
<br>
the Open MPI jobs starts, based on certain conditions, I want to acquire
<br>
more processors outside of the initially assigned nodes by Torque. Is
<br>
this a problem? Is this why my MPI_Comm_spawn is failing (where I say
<br>
the MPI_Info element's key as &quot;host&quot; and value as the hostname of the
<br>
new node outside of Torque's initial assignment)?
<br>
<p>Any ideas?
<br>
<p>Thanks,
<br>
Prakash
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2957.php">Heywood, Todd: "Re: [OMPI users] Measuring MPI message size used by application"</a>
<li><strong>Previous message:</strong> <a href="2955.php">George Bosilca: "Re: [OMPI users] Getting a core-dump with OpenMPI"</a>
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
