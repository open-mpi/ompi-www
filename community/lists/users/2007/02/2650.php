<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Feb  8 17:51:53 2007" -->
<!-- isoreceived="20070208225153" -->
<!-- sent="Thu, 8 Feb 2007 17:51:47 -0500" -->
<!-- isosent="20070208225147" -->
<!-- name="Mark Kosmowski" -->
<!-- email="mark.kosmowski_at_[hidden]" -->
<!-- subject="Re: [OMPI users] first time user - can run mpi job SMP but not over cluster" -->
<!-- id="c84311bb0702081451n3004a6dal69b40d7e5b7e3544_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="c84311bb0702081404l46c9eecif9387c7b4b1bc522_at_mail.gmail.com" -->
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
<strong>From:</strong> Mark Kosmowski (<em>mark.kosmowski_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-02-08 17:51:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2651.php">Alex Tumanov: "Re: [OMPI users] NetPipe benchmark &amp; spanning multiple interconnects"</a>
<li><strong>Previous message:</strong> <a href="2649.php">Mark Kosmowski: "Re: [OMPI users] first time user - can run mpi job SMP but not over cluster"</a>
<li><strong>In reply to:</strong> <a href="2649.php">Mark Kosmowski: "Re: [OMPI users] first time user - can run mpi job SMP but not over cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2652.php">Mark Kosmowski: "Re: [OMPI users] first time user - can run mpi job SMP but not over cluster"</a>
<li><strong>Reply:</strong> <a href="2652.php">Mark Kosmowski: "Re: [OMPI users] first time user - can run mpi job SMP but not over cluster"</a>
<li><strong>Reply:</strong> <a href="2659.php">Alex Tumanov: "Re: [OMPI users] first time user - can run mpi job SMP but not over cluster"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think I fixed the problem.  I at least have mpirun ... hostname
<br>
working over the cluster.
<br>
<p>The first thing I needed to do was to make the gigabit network an
<br>
internal zone in Yast ... firewall (which essentially turns off the
<br>
firewall over this interface).
<br>
<p>Next I needed to add the -mca options as follows:
<br>
<p>mpirun --prefix /opt/openmpi -mca oob_tcp_include eth0 -mca
<br>
btl_tcp_if_include eth0 --hostfile ~/work/openmpi_hostfile -np 4
<br>
hostname
<br>
<p>The above command works properly without the --prefix option,
<br>
verifying that my PATH and LD_LIBRARY_PATH variables are properly set
<br>
up.
<br>
<p>Unfortunately, I have jobs running on each machine in SMP mode that
<br>
will take the better part of this coming week to complete, so it will
<br>
be awhile before I will be able to do more than just mpirun ...
<br>
hostname.
<br>
<p>Could a section be added to the FAQ mentioning that the firewall
<br>
service should be shutdown over the mpi interface and that the two
<br>
-mca switches should be used?  This could perhaps be most useful to a
<br>
beginner in either the 'Running MPI Jobs' or 'Troubleshooting'
<br>
sections of the FAQ.
<br>
<p>Thanks,
<br>
<p>Mark Kosmowski
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2651.php">Alex Tumanov: "Re: [OMPI users] NetPipe benchmark &amp; spanning multiple interconnects"</a>
<li><strong>Previous message:</strong> <a href="2649.php">Mark Kosmowski: "Re: [OMPI users] first time user - can run mpi job SMP but not over cluster"</a>
<li><strong>In reply to:</strong> <a href="2649.php">Mark Kosmowski: "Re: [OMPI users] first time user - can run mpi job SMP but not over cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2652.php">Mark Kosmowski: "Re: [OMPI users] first time user - can run mpi job SMP but not over cluster"</a>
<li><strong>Reply:</strong> <a href="2652.php">Mark Kosmowski: "Re: [OMPI users] first time user - can run mpi job SMP but not over cluster"</a>
<li><strong>Reply:</strong> <a href="2659.php">Alex Tumanov: "Re: [OMPI users] first time user - can run mpi job SMP but not over cluster"</a>
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
