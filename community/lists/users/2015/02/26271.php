<?
$subject_val = "Re: [OMPI users] orted seg fault when using MPI_Comm_spawn on more than one host";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  3 12:23:43 2015" -->
<!-- isoreceived="20150203172343" -->
<!-- sent="Tue, 3 Feb 2015 09:23:42 -0800" -->
<!-- isosent="20150203172342" -->
<!-- name="Evan Samanas" -->
<!-- email="evan.samanas_at_[hidden]" -->
<!-- subject="Re: [OMPI users] orted seg fault when using MPI_Comm_spawn on more than one host" -->
<!-- id="CA+TA=9LfcVRHf0WL0yRRDm42fSaNaecPMUJ0jQV39xCpoFhu2w_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="[OMPI users] orted seg fault when using MPI_Comm_spawn on more than one host" -->
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
<strong>Subject:</strong> Re: [OMPI users] orted seg fault when using MPI_Comm_spawn on more than one host<br>
<strong>From:</strong> Evan Samanas (<em>evan.samanas_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-03 12:23:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26272.php">Ralph Castain: "Re: [OMPI users] orted seg fault when using MPI_Comm_spawn on more than one host"</a>
<li><strong>Previous message:</strong> <a href="26270.php">Nick Papior Andersen: "Re: [OMPI users] configuring a code with MPI/OPENMPI"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/01/26235.php">Evan: "[OMPI users] orted seg fault when using MPI_Comm_spawn on more than one host"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26272.php">Ralph Castain: "Re: [OMPI users] orted seg fault when using MPI_Comm_spawn on more than one host"</a>
<li><strong>Reply:</strong> <a href="26272.php">Ralph Castain: "Re: [OMPI users] orted seg fault when using MPI_Comm_spawn on more than one host"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p>Good to know you've reproduced it.  I was experiencing this using both the
<br>
hostfile and host key.  A simple comm_spawn was working for me as well, but
<br>
it was only launching locally, and I'm pretty sure each node only has 4
<br>
slots given past behavior (the mpirun -np 8 example I gave in my first
<br>
email launches on both hosts).  Is there a way to specify the hosts I want
<br>
to launch on without the hostfile or host key so I can test remote launch?
<br>
<p>And to the &quot;hostname&quot; response...no wonder it was hanging!  I just
<br>
constructed that as a basic example.  In my real use I'm launching
<br>
something that calls MPI_Init.
<br>
<p>Evan
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26271/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26272.php">Ralph Castain: "Re: [OMPI users] orted seg fault when using MPI_Comm_spawn on more than one host"</a>
<li><strong>Previous message:</strong> <a href="26270.php">Nick Papior Andersen: "Re: [OMPI users] configuring a code with MPI/OPENMPI"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/01/26235.php">Evan: "[OMPI users] orted seg fault when using MPI_Comm_spawn on more than one host"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26272.php">Ralph Castain: "Re: [OMPI users] orted seg fault when using MPI_Comm_spawn on more than one host"</a>
<li><strong>Reply:</strong> <a href="26272.php">Ralph Castain: "Re: [OMPI users] orted seg fault when using MPI_Comm_spawn on more than one host"</a>
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
