<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Feb  8 21:23:52 2007" -->
<!-- isoreceived="20070209022352" -->
<!-- sent="Thu, 8 Feb 2007 19:23:37 -0700" -->
<!-- isosent="20070209022337" -->
<!-- name="Brian W. Barrett" -->
<!-- email="bbarrett_at_[hidden]" -->
<!-- subject="Re: [OMPI users] first time user - can run mpi job SMP but not over cluster" -->
<!-- id="24620F3A-6864-4510-8983-5420FE1ABF41_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Brian W. Barrett (<em>bbarrett_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-02-08 21:23:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2656.php">Brian W. Barrett: "Re: [OMPI users] Open MPI/OpenIB Error/Problem"</a>
<li><strong>Previous message:</strong> <a href="2654.php">Alex Tumanov: "Re: [OMPI users] Open MPI/OpenIB Error/Problem"</a>
<li><strong>In reply to:</strong> <a href="2652.php">Mark Kosmowski: "Re: [OMPI users] first time user - can run mpi job SMP but not over cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2657.php">Alex Tumanov: "Re: [OMPI users] first time user - can run mpi job SMP but not over cluster"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
For things like these, I usually use the &quot;dot file&quot; mca parameter  
<br>
file in my home directory:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/faq/?category=tuning#setting-mca-params">http://www.open-mpi.org/faq/?category=tuning#setting-mca-params</a>
<br>
<p>That way, I don't accidently forget to set the parameters on a given  
<br>
run ;).
<br>
<p>Brian
<br>
<p>On Feb 8, 2007, at 6:15 PM, Mark Kosmowski wrote:
<br>
<p><span class="quotelev1">&gt; I have a style question related to this issue that I think is  
</span><br>
<span class="quotelev1">&gt; resolved.
</span><br>
<span class="quotelev1">&gt;
</span><br>
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
<span class="quotelev1">&gt; On 2/8/07, Mark Kosmowski &lt;mark.kosmowski_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I think I fixed the problem.  I at least have mpirun ... hostname
</span><br>
<span class="quotelev2">&gt;&gt; working over the cluster.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The first thing I needed to do was to make the gigabit network an
</span><br>
<span class="quotelev2">&gt;&gt; internal zone in Yast ... firewall (which essentially turns off the
</span><br>
<span class="quotelev2">&gt;&gt; firewall over this interface).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Next I needed to add the -mca options as follows:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun --prefix /opt/openmpi -mca oob_tcp_include eth0 -mca
</span><br>
<span class="quotelev2">&gt;&gt; btl_tcp_if_include eth0 --hostfile ~/work/openmpi_hostfile -np 4
</span><br>
<span class="quotelev2">&gt;&gt; hostname
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The above command works properly without the --prefix option,
</span><br>
<span class="quotelev2">&gt;&gt; verifying that my PATH and LD_LIBRARY_PATH variables are properly set
</span><br>
<span class="quotelev2">&gt;&gt; up.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Unfortunately, I have jobs running on each machine in SMP mode that
</span><br>
<span class="quotelev2">&gt;&gt; will take the better part of this coming week to complete, so it will
</span><br>
<span class="quotelev2">&gt;&gt; be awhile before I will be able to do more than just mpirun ...
</span><br>
<span class="quotelev2">&gt;&gt; hostname.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Could a section be added to the FAQ mentioning that the firewall
</span><br>
<span class="quotelev2">&gt;&gt; service should be shutdown over the mpi interface and that the two
</span><br>
<span class="quotelev2">&gt;&gt; -mca switches should be used?  This could perhaps be most useful to a
</span><br>
<span class="quotelev2">&gt;&gt; beginner in either the 'Running MPI Jobs' or 'Troubleshooting'
</span><br>
<span class="quotelev2">&gt;&gt; sections of the FAQ.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Mark Kosmowski
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><pre>
-- 
   Brian Barrett
   Open MPI Team, CCS-1
   Los Alamos National Laboratory
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2656.php">Brian W. Barrett: "Re: [OMPI users] Open MPI/OpenIB Error/Problem"</a>
<li><strong>Previous message:</strong> <a href="2654.php">Alex Tumanov: "Re: [OMPI users] Open MPI/OpenIB Error/Problem"</a>
<li><strong>In reply to:</strong> <a href="2652.php">Mark Kosmowski: "Re: [OMPI users] first time user - can run mpi job SMP but not over cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2657.php">Alex Tumanov: "Re: [OMPI users] first time user - can run mpi job SMP but not over cluster"</a>
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
