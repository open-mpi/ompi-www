<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Feb  8 20:15:35 2007" -->
<!-- isoreceived="20070209011535" -->
<!-- sent="Thu, 8 Feb 2007 20:15:30 -0500" -->
<!-- isosent="20070209011530" -->
<!-- name="Mark Kosmowski" -->
<!-- email="mark.kosmowski_at_[hidden]" -->
<!-- subject="Re: [OMPI users] first time user - can run mpi job SMP but not over cluster" -->
<!-- id="c84311bb0702081715g758921e2hc1312019849f201d_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="c84311bb0702081451n3004a6dal69b40d7e5b7e3544_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2007-02-08 20:15:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2653.php">Troy Telford: "[OMPI users] Open MPI/OpenIB Error/Problem"</a>
<li><strong>Previous message:</strong> <a href="2651.php">Alex Tumanov: "Re: [OMPI users] NetPipe benchmark &amp; spanning multiple interconnects"</a>
<li><strong>In reply to:</strong> <a href="2650.php">Mark Kosmowski: "Re: [OMPI users] first time user - can run mpi job SMP but not over cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2655.php">Brian W. Barrett: "Re: [OMPI users] first time user - can run mpi job SMP but not over cluster"</a>
<li><strong>Reply:</strong> <a href="2655.php">Brian W. Barrett: "Re: [OMPI users] first time user - can run mpi job SMP but not over cluster"</a>
<li><strong>Reply:</strong> <a href="2657.php">Alex Tumanov: "Re: [OMPI users] first time user - can run mpi job SMP but not over cluster"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have a style question related to this issue that I think is resolved.
<br>
<p>I have added the following line to my .bashrc:
<br>
<p>export OMPIFLAGS=&quot;-mca oob_tcp_include eth0 -mca btl_tcp_if_include
<br>
eth0 --hostfile ~/work/openmpi_hostfile&quot;
<br>
<p>and have verified that mpirun $OMPIFLAGS -np 4 hostname works.
<br>
<p>Is there a better way of accomplishing this, or is this a matter of
<br>
there being more than one way to skin the proverbial cat?
<br>
<p>Thanks,
<br>
<p>Mark Kosmowski
<br>
<p>On 2/8/07, Mark Kosmowski &lt;mark.kosmowski_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; I think I fixed the problem.  I at least have mpirun ... hostname
</span><br>
<span class="quotelev1">&gt; working over the cluster.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The first thing I needed to do was to make the gigabit network an
</span><br>
<span class="quotelev1">&gt; internal zone in Yast ... firewall (which essentially turns off the
</span><br>
<span class="quotelev1">&gt; firewall over this interface).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Next I needed to add the -mca options as follows:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun --prefix /opt/openmpi -mca oob_tcp_include eth0 -mca
</span><br>
<span class="quotelev1">&gt; btl_tcp_if_include eth0 --hostfile ~/work/openmpi_hostfile -np 4
</span><br>
<span class="quotelev1">&gt; hostname
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The above command works properly without the --prefix option,
</span><br>
<span class="quotelev1">&gt; verifying that my PATH and LD_LIBRARY_PATH variables are properly set
</span><br>
<span class="quotelev1">&gt; up.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Unfortunately, I have jobs running on each machine in SMP mode that
</span><br>
<span class="quotelev1">&gt; will take the better part of this coming week to complete, so it will
</span><br>
<span class="quotelev1">&gt; be awhile before I will be able to do more than just mpirun ...
</span><br>
<span class="quotelev1">&gt; hostname.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Could a section be added to the FAQ mentioning that the firewall
</span><br>
<span class="quotelev1">&gt; service should be shutdown over the mpi interface and that the two
</span><br>
<span class="quotelev1">&gt; -mca switches should be used?  This could perhaps be most useful to a
</span><br>
<span class="quotelev1">&gt; beginner in either the 'Running MPI Jobs' or 'Troubleshooting'
</span><br>
<span class="quotelev1">&gt; sections of the FAQ.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Mark Kosmowski
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2653.php">Troy Telford: "[OMPI users] Open MPI/OpenIB Error/Problem"</a>
<li><strong>Previous message:</strong> <a href="2651.php">Alex Tumanov: "Re: [OMPI users] NetPipe benchmark &amp; spanning multiple interconnects"</a>
<li><strong>In reply to:</strong> <a href="2650.php">Mark Kosmowski: "Re: [OMPI users] first time user - can run mpi job SMP but not over cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2655.php">Brian W. Barrett: "Re: [OMPI users] first time user - can run mpi job SMP but not over cluster"</a>
<li><strong>Reply:</strong> <a href="2655.php">Brian W. Barrett: "Re: [OMPI users] first time user - can run mpi job SMP but not over cluster"</a>
<li><strong>Reply:</strong> <a href="2657.php">Alex Tumanov: "Re: [OMPI users] first time user - can run mpi job SMP but not over cluster"</a>
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
