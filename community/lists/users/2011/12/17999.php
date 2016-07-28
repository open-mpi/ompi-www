<?
$subject_val = "Re: [OMPI users] Quick question on compiling Openmpi w/ Torque and Infiniband";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Dec 18 21:47:35 2011" -->
<!-- isoreceived="20111219024735" -->
<!-- sent="Sun, 18 Dec 2011 19:47:28 -0700" -->
<!-- isosent="20111219024728" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Quick question on compiling Openmpi w/ Torque and Infiniband" -->
<!-- id="78D34F55-0D4A-453D-9646-38CE18EA9115_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CADNPybOQPLO1Hj6SmAVGYBwbHCSiQKVQSNQPR6BtjOCedgMd-w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Quick question on compiling Openmpi w/ Torque and Infiniband<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-18 21:47:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18000.php">Ralph Castain: "Re: [OMPI users] Accessing OpenMPI processes on EC2 machine over Internet using ssh"</a>
<li><strong>Previous message:</strong> <a href="17998.php">Chaitanya Krishna: "[OMPI users] Quick question on compiling Openmpi w/ Torque and Infiniband"</a>
<li><strong>In reply to:</strong> <a href="17998.php">Chaitanya Krishna: "[OMPI users] Quick question on compiling Openmpi w/ Torque and Infiniband"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18002.php">Addepalli, Srirangam V: "Re: [OMPI users] Quick question on compiling Openmpi w/ Torque and	Infiniband"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 18, 2011, at 5:25 PM, Chaitanya Krishna wrote:
<br>
<p><span class="quotelev1">&gt; Hello there,
</span><br>
<span class="quotelev1">&gt; I am trying to compile openmpi with Torque and Infiniband.
</span><br>
<span class="quotelev1">&gt; The thing is that Torque is installed on the headnode and the
</span><br>
<span class="quotelev1">&gt; Infiniband installation is available only on the slave nodes. I am
</span><br>
<span class="quotelev1">&gt; trying to build openmpi on a slave node with the following configure
</span><br>
<span class="quotelev1">&gt; options.
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=$HOME/opt/openmpi/1.4.4/intel12/infiniband
</span><br>
<span class="quotelev1">&gt; --with-openib --with-tm=/usr/local F77=ifort FC=ifort CC=icc CXX=icpc
</span><br>
<span class="quotelev1">&gt; The configure fails as it fails to find the Torque libraries (tm.h).
</span><br>
<span class="quotelev1">&gt; But I know for sure that the torque libraries are available on the
</span><br>
<span class="quotelev1">&gt; head node at /usr/local.
</span><br>
<span class="quotelev1">&gt; So, I would like to know if there is a way to make configure force to
</span><br>
<span class="quotelev1">&gt; build support for Torque even if it does not find the libraries for
</span><br>
<span class="quotelev1">&gt; Torque on the slave node.
</span><br>
<p>I'm afraid not - we have to find the libraries when we build support. Your best bet would be to install torque in the same location on the slave nodes and compile there.
<br>
<p><p><span class="quotelev1">&gt; Thanks for any help in advance.
</span><br>
<span class="quotelev1">&gt; Best regards,Chai
</span><br>
<span class="quotelev1">&gt; --42
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18000.php">Ralph Castain: "Re: [OMPI users] Accessing OpenMPI processes on EC2 machine over Internet using ssh"</a>
<li><strong>Previous message:</strong> <a href="17998.php">Chaitanya Krishna: "[OMPI users] Quick question on compiling Openmpi w/ Torque and Infiniband"</a>
<li><strong>In reply to:</strong> <a href="17998.php">Chaitanya Krishna: "[OMPI users] Quick question on compiling Openmpi w/ Torque and Infiniband"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18002.php">Addepalli, Srirangam V: "Re: [OMPI users] Quick question on compiling Openmpi w/ Torque and	Infiniband"</a>
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
