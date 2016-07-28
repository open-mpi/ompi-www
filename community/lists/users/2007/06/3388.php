<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jun  6 17:23:39 2007" -->
<!-- isoreceived="20070606212339" -->
<!-- sent="Wed, 6 Jun 2007 17:23:33 -0400" -->
<!-- isosent="20070606212333" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MX MPI latency measurements" -->
<!-- id="200706061723.34264.tprins_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="742698F8-835C-488B-AD6E-C172231BF194_at_cs.utk.edu" -->
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
<strong>From:</strong> Tim Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-06 17:23:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3389.php">George Bosilca: "Re: [OMPI users] MX MPI latency measurements"</a>
<li><strong>Previous message:</strong> <a href="3387.php">Lie-Quan Lee: "Re: [OMPI users] how to identify openmpi in configure script"</a>
<li><strong>In reply to:</strong> <a href="3385.php">George Bosilca: "Re: [OMPI users] MX MPI latency measurements"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3389.php">George Bosilca: "Re: [OMPI users] MX MPI latency measurements"</a>
<li><strong>Reply:</strong> <a href="3389.php">George Bosilca: "Re: [OMPI users] MX MPI latency measurements"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Note that since you are setting OMPI_MCA_pml to cm, OMPI_MCA_btl will have no 
<br>
effect. You may try setting OMPI_MCA_pml=ob1, and trying your measurements 
<br>
again, but we generally get better performance with the cm pml than then ob1 
<br>
pml.
<br>
<p>Tim
<br>
<p>On Wednesday 06 June 2007 12:54:26 pm George Bosilca wrote:
<br>
<span class="quotelev1">&gt; Which one is the latency with Open MPI ? Which version of Open MPI ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You might want to use OMPI_MCA_btl=mx,self to see if it makes any
</span><br>
<span class="quotelev1">&gt; difference.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    Thanks,
</span><br>
<span class="quotelev1">&gt;      george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 6, 2007, at 12:26 PM, Maestas, Christopher Daniel wrote:
</span><br>
<span class="quotelev2">&gt; &gt; With 2 nodes using 1.1.7 with the patch we measured (using mpich-mx
</span><br>
<span class="quotelev2">&gt; &gt; 1.2.7..4):
</span><br>
<span class="quotelev2">&gt; &gt; 	3.07us
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; With mx 1.2.1-rc18 we measure:
</span><br>
<span class="quotelev2">&gt; &gt; 	3.69 us
</span><br>
<span class="quotelev2">&gt; &gt; And with mpich-mx 1.2.7..4 we see:
</span><br>
<span class="quotelev2">&gt; &gt; 	3.20us
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Our Open MPI settings:
</span><br>
<span class="quotelev2">&gt; &gt; ---
</span><br>
<span class="quotelev2">&gt; &gt; # env | grep OMPI
</span><br>
<span class="quotelev2">&gt; &gt; OMPI_MCA_pml=cm
</span><br>
<span class="quotelev2">&gt; &gt; OMPI_MCA_mpi_keep_hostnames=1
</span><br>
<span class="quotelev2">&gt; &gt; OMPI_MCA_oob_tcp_include=eth0
</span><br>
<span class="quotelev2">&gt; &gt; OMPI_MCA_btl=mx,sm,self
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Does anyone know why the latency would be slightly higher using
</span><br>
<span class="quotelev2">&gt; &gt; Open MPI
</span><br>
<span class="quotelev2">&gt; &gt; versus MPICH-MX?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks,
</span><br>
<span class="quotelev2">&gt; &gt; -cdm
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3389.php">George Bosilca: "Re: [OMPI users] MX MPI latency measurements"</a>
<li><strong>Previous message:</strong> <a href="3387.php">Lie-Quan Lee: "Re: [OMPI users] how to identify openmpi in configure script"</a>
<li><strong>In reply to:</strong> <a href="3385.php">George Bosilca: "Re: [OMPI users] MX MPI latency measurements"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3389.php">George Bosilca: "Re: [OMPI users] MX MPI latency measurements"</a>
<li><strong>Reply:</strong> <a href="3389.php">George Bosilca: "Re: [OMPI users] MX MPI latency measurements"</a>
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
