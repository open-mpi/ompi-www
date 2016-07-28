<?
$subject_val = "Re: [OMPI users] Dual ethernet &amp; OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 12 15:44:37 2007" -->
<!-- isoreceived="20071212204437" -->
<!-- sent="Wed, 12 Dec 2007 15:44:27 -0500" -->
<!-- isosent="20071212204427" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Dual ethernet &amp;amp; OpenMPI" -->
<!-- id="DB85F833-6A4C-4989-BC14-02546199E6E5_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="7FC2164A-343D-4AF3-9C60-41167E3D41A7_at_ieee.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Dual ethernet &amp; OpenMPI<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-12 15:44:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4654.php">Brock Palen: "[OMPI users] parpack with openmpi"</a>
<li><strong>Previous message:</strong> <a href="4652.php">Moreland, Kenneth: "Re: [OMPI users] Problems with GATHERV on one process"</a>
<li><strong>In reply to:</strong> <a href="4650.php">Michael: "[OMPI users] Dual ethernet &amp; OpenMPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You can specify which network interface should be used by Open MPI via  
<br>
the btl_tcp_if_include MCA parameter (using the interface name, e.g.  
<br>
eth0,eth1). You can even specify how the messages will be distributed  
<br>
between the networks (please read the FAQ for more info about this).
<br>
<p>To test that you doubled your bandwidth use any point-to-point  
<br>
benchmark such as NetPIPE.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Dec 12, 2007, at 1:42 PM, Michael wrote:
<br>
<p><span class="quotelev1">&gt; In the past I configured a Linux cluster by bonding two ethernet ports
</span><br>
<span class="quotelev1">&gt; together on each node (with the master having a third port of outside
</span><br>
<span class="quotelev1">&gt; communication); however, recent discussions seem to say that if I have
</span><br>
<span class="quotelev1">&gt; two ethernet cards OpenMPI can handle all the setup itself.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My question is what address ranges should I use, that is, should both
</span><br>
<span class="quotelev1">&gt; ports be on the same network range, i.e. 10.0.0.x/255.255.255.0, or
</span><br>
<span class="quotelev1">&gt; should they be on separate network ranges, i.e. 10.0.0.x/255.255.255.0
</span><br>
<span class="quotelev1">&gt; and 10.0.1.x/255.255.255.0.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Would I need a third ethernet card for outside communication or could
</span><br>
<span class="quotelev1">&gt; one port on the master node handle both internal and external
</span><br>
<span class="quotelev1">&gt; communications.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Would there be any special flags to set this up or would OpenMPI
</span><br>
<span class="quotelev1">&gt; detect the two paths -- obviously each port would have a different IP
</span><br>
<span class="quotelev1">&gt; address if I'm not using bonding so do you just double the host list?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; How would I test if I have doubled my bandwidth?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Michael
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4653/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4654.php">Brock Palen: "[OMPI users] parpack with openmpi"</a>
<li><strong>Previous message:</strong> <a href="4652.php">Moreland, Kenneth: "Re: [OMPI users] Problems with GATHERV on one process"</a>
<li><strong>In reply to:</strong> <a href="4650.php">Michael: "[OMPI users] Dual ethernet &amp; OpenMPI"</a>
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
