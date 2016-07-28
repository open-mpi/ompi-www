<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jun  6 17:38:09 2007" -->
<!-- isoreceived="20070606213809" -->
<!-- sent="Wed, 6 Jun 2007 17:37:53 -0400" -->
<!-- isosent="20070606213753" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MX MPI latency measurements" -->
<!-- id="9D039676-0F7E-4C4E-8077-9760C9ABE643_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200706061723.34264.tprins_at_open-mpi.org" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-06 17:37:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3390.php">Michael Edwards: "[OMPI users] SGE and OFED1.1"</a>
<li><strong>Previous message:</strong> <a href="3388.php">Tim Prins: "Re: [OMPI users] MX MPI latency measurements"</a>
<li><strong>In reply to:</strong> <a href="3388.php">Tim Prins: "Re: [OMPI users] MX MPI latency measurements"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If you use one of the latest version of MX (such as 1.2.0f) there  
<br>
will be less than 0.15 micro-second difference between the MTL and  
<br>
BTL MX. This version of MX allow us to do the matching outside the  
<br>
NIC, which decrease the overhead for small messages. In terms of  
<br>
bandwidth the BTL MX is somehow faster (40Mbs more than the MTL) on a  
<br>
2Gbs network.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Jun 6, 2007, at 5:23 PM, Tim Prins wrote:
<br>
<p><span class="quotelev1">&gt; Note that since you are setting OMPI_MCA_pml to cm, OMPI_MCA_btl  
</span><br>
<span class="quotelev1">&gt; will have no
</span><br>
<span class="quotelev1">&gt; effect. You may try setting OMPI_MCA_pml=ob1, and trying your  
</span><br>
<span class="quotelev1">&gt; measurements
</span><br>
<span class="quotelev1">&gt; again, but we generally get better performance with the cm pml than  
</span><br>
<span class="quotelev1">&gt; then ob1
</span><br>
<span class="quotelev1">&gt; pml.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tim
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wednesday 06 June 2007 12:54:26 pm George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Which one is the latency with Open MPI ? Which version of Open MPI ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You might want to use OMPI_MCA_btl=mx,self to see if it makes any
</span><br>
<span class="quotelev2">&gt;&gt; difference.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;      george.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 6, 2007, at 12:26 PM, Maestas, Christopher Daniel wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; With 2 nodes using 1.1.7 with the patch we measured (using mpich-mx
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1.2.7..4):
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	3.07us
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; With mx 1.2.1-rc18 we measure:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	3.69 us
</span><br>
<span class="quotelev3">&gt;&gt;&gt; And with mpich-mx 1.2.7..4 we see:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	3.20us
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Our Open MPI settings:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ---
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # env | grep OMPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI_MCA_pml=cm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI_MCA_mpi_keep_hostnames=1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI_MCA_oob_tcp_include=eth0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI_MCA_btl=mx,sm,self
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Does anyone know why the latency would be slightly higher using
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Open MPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; versus MPICH-MX?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -cdm
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3389/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3390.php">Michael Edwards: "[OMPI users] SGE and OFED1.1"</a>
<li><strong>Previous message:</strong> <a href="3388.php">Tim Prins: "Re: [OMPI users] MX MPI latency measurements"</a>
<li><strong>In reply to:</strong> <a href="3388.php">Tim Prins: "Re: [OMPI users] MX MPI latency measurements"</a>
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
