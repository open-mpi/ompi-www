<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jun  6 12:55:21 2007" -->
<!-- isoreceived="20070606165521" -->
<!-- sent="Wed, 6 Jun 2007 12:54:26 -0400" -->
<!-- isosent="20070606165426" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MX MPI latency measurements" -->
<!-- id="742698F8-835C-488B-AD6E-C172231BF194_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="347180497203A942A6AA82C85846CBC9034F6340_at_ES23SNLNT.srn.sandia.gov" -->
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
<strong>Date:</strong> 2007-06-06 12:54:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3386.php">Christopher D. Maestas: "Re: [OMPI users] MX MPI latency measurements"</a>
<li><strong>Previous message:</strong> <a href="3384.php">Maestas, Christopher Daniel: "[OMPI users] MX MPI latency measurements"</a>
<li><strong>In reply to:</strong> <a href="3384.php">Maestas, Christopher Daniel: "[OMPI users] MX MPI latency measurements"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3386.php">Christopher D. Maestas: "Re: [OMPI users] MX MPI latency measurements"</a>
<li><strong>Reply:</strong> <a href="3386.php">Christopher D. Maestas: "Re: [OMPI users] MX MPI latency measurements"</a>
<li><strong>Reply:</strong> <a href="3388.php">Tim Prins: "Re: [OMPI users] MX MPI latency measurements"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Which one is the latency with Open MPI ? Which version of Open MPI ?
<br>
<p>You might want to use OMPI_MCA_btl=mx,self to see if it makes any  
<br>
difference.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Jun 6, 2007, at 12:26 PM, Maestas, Christopher Daniel wrote:
<br>
<p><span class="quotelev1">&gt; With 2 nodes using 1.1.7 with the patch we measured (using mpich-mx
</span><br>
<span class="quotelev1">&gt; 1.2.7..4):
</span><br>
<span class="quotelev1">&gt; 	3.07us
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; With mx 1.2.1-rc18 we measure:
</span><br>
<span class="quotelev1">&gt; 	3.69 us
</span><br>
<span class="quotelev1">&gt; And with mpich-mx 1.2.7..4 we see:
</span><br>
<span class="quotelev1">&gt; 	3.20us
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Our Open MPI settings:
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt; # env | grep OMPI
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_pml=cm
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_mpi_keep_hostnames=1
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_oob_tcp_include=eth0
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_btl=mx,sm,self
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does anyone know why the latency would be slightly higher using  
</span><br>
<span class="quotelev1">&gt; Open MPI
</span><br>
<span class="quotelev1">&gt; versus MPICH-MX?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; -cdm
</span><br>
<span class="quotelev1">&gt;
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
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3385/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3386.php">Christopher D. Maestas: "Re: [OMPI users] MX MPI latency measurements"</a>
<li><strong>Previous message:</strong> <a href="3384.php">Maestas, Christopher Daniel: "[OMPI users] MX MPI latency measurements"</a>
<li><strong>In reply to:</strong> <a href="3384.php">Maestas, Christopher Daniel: "[OMPI users] MX MPI latency measurements"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3386.php">Christopher D. Maestas: "Re: [OMPI users] MX MPI latency measurements"</a>
<li><strong>Reply:</strong> <a href="3386.php">Christopher D. Maestas: "Re: [OMPI users] MX MPI latency measurements"</a>
<li><strong>Reply:</strong> <a href="3388.php">Tim Prins: "Re: [OMPI users] MX MPI latency measurements"</a>
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
