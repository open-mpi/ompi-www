<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Feb  8 21:40:10 2007" -->
<!-- isoreceived="20070209024010" -->
<!-- sent="Thu, 8 Feb 2007 21:40:05 -0500" -->
<!-- isosent="20070209024005" -->
<!-- name="Alex Tumanov" -->
<!-- email="atumanov_at_[hidden]" -->
<!-- subject="Re: [OMPI users] first time user - can run mpi job SMP but not over cluster" -->
<!-- id="2453e2900702081840v3506d0a6paf54c8d4fcfde83f_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="c84311bb0702081715g758921e2hc1312019849f201d_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2007-02-08 21:40:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2658.php">Brian W. Barrett: "Re: [OMPI users] install script issue"</a>
<li><strong>Previous message:</strong> <a href="2656.php">Brian W. Barrett: "Re: [OMPI users] Open MPI/OpenIB Error/Problem"</a>
<li><strong>In reply to:</strong> <a href="2652.php">Mark Kosmowski: "Re: [OMPI users] first time user - can run mpi job SMP but not over cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2659.php">Alex Tumanov: "Re: [OMPI users] first time user - can run mpi job SMP but not over cluster"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; I have added the following line to my .bashrc:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; export OMPIFLAGS=&quot;-mca oob_tcp_include eth0 -mca btl_tcp_if_include
</span><br>
<span class="quotelev1">&gt; eth0 --hostfile ~/work/openmpi_hostfile&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and have verified that mpirun $OMPIFLAGS -np 4 hostname works.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there a better way of accomplishing this, or is this a matter of
</span><br>
<span class="quotelev1">&gt; there being more than one way to skin the proverbial cat?
</span><br>
<p>There's definitely a better way to accomplish this. You can set mca
<br>
parameters in $OMPIDIR/etc/openmpi-mca-params.conf
<br>
There you would have btl_tcp_if_include=eth0, for instance, as well as
<br>
any other mca params you need to set (for a complete list try
<br>
ompi_info --param all all). I don't think you need oob_tcp_include, by
<br>
the way - try without it.
<br>
<p>Alex.
<br>
<p><span class="quotelev2">&gt; &gt; The first thing I needed to do was to make the gigabit network an
</span><br>
<span class="quotelev2">&gt; &gt; internal zone in Yast ... firewall (which essentially turns off the
</span><br>
<span class="quotelev2">&gt; &gt; firewall over this interface).
</span><br>
<p><span class="quotelev2">&gt; &gt; Could a section be added to the FAQ mentioning that the firewall
</span><br>
<span class="quotelev2">&gt; &gt; service should be shutdown over the mpi interface and that the two
</span><br>
<span class="quotelev2">&gt; &gt; -mca switches should be used?  This could perhaps be most useful to a
</span><br>
<span class="quotelev2">&gt; &gt; beginner in either the 'Running MPI Jobs' or 'Troubleshooting'
</span><br>
<span class="quotelev2">&gt; &gt; sections of the FAQ.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Mark Kosmowski
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2658.php">Brian W. Barrett: "Re: [OMPI users] install script issue"</a>
<li><strong>Previous message:</strong> <a href="2656.php">Brian W. Barrett: "Re: [OMPI users] Open MPI/OpenIB Error/Problem"</a>
<li><strong>In reply to:</strong> <a href="2652.php">Mark Kosmowski: "Re: [OMPI users] first time user - can run mpi job SMP but not over cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2659.php">Alex Tumanov: "Re: [OMPI users] first time user - can run mpi job SMP but not over cluster"</a>
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
