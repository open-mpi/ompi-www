<?
$subject_val = "Re: [OMPI devel] oob/btl tcp port range - missing htons?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul  7 13:22:05 2009" -->
<!-- isoreceived="20090707172205" -->
<!-- sent="Tue, 7 Jul 2009 13:21:56 -0400" -->
<!-- isosent="20090707172156" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] oob/btl tcp port range - missing htons?" -->
<!-- id="5F85A2BF-E9AB-412D-990D-75DF65920FD9_at_eecs.utk.edu" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="78259bca0907060731p5fa9846o2d9cf4e2a67b173f_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] oob/btl tcp port range - missing htons?<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-07 13:21:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6386.php">Prasadcse Perera: "[OMPI devel] MPI_Recv pre memory checks"</a>
<li><strong>Previous message:</strong> <a href="6384.php">Jeff Squyres: "Re: [OMPI devel] MPI datatype problem in mpi_test_suite?"</a>
<li><strong>In reply to:</strong> <a href="6381.php">Mariusz Mamo&#197;&#132;ski: "[OMPI devel] oob/btl tcp port range - missing htons?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Mariusz,
<br>
<p>You're absolutely right. I pushed your patch into the trunk (revision  
<br>
21610). I'll make sure it get included in the next release.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Jul 6, 2009, at 10:31 , Mariusz Mamo&#197;&#132;ski wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Recently i was testing OMPI in the multi-cluster, heterogeneous
</span><br>
<span class="quotelev1">&gt; environment. Because of the firewall presence between the two test
</span><br>
<span class="quotelev1">&gt; machines i wanted to restrict port used by the OMPI daemons by setting
</span><br>
<span class="quotelev1">&gt; following mca parameters:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; oob_tcp_port_min_v4 = 5000
</span><br>
<span class="quotelev1">&gt; oob_tcp_port_range_v4 = 100
</span><br>
<span class="quotelev1">&gt; btl_tcp_port_min_v4 = 5000
</span><br>
<span class="quotelev1">&gt; btl_tcp_port_range_v4 = 100
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Unfortunately it didn't work. After looking into  source code of the
</span><br>
<span class="quotelev1">&gt; oob and btl  tcp components i noticed that the sin_port member was
</span><br>
<span class="quotelev1">&gt; initialized without the conversion from host to network byte order.
</span><br>
<span class="quotelev1">&gt; After adding of the htons call (sample patch attached), the
</span><br>
<span class="quotelev1">&gt; cross-cluster run start working.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Mariusz
</span><br>
<span class="quotelev1">&gt; &lt;htons.patch&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6386.php">Prasadcse Perera: "[OMPI devel] MPI_Recv pre memory checks"</a>
<li><strong>Previous message:</strong> <a href="6384.php">Jeff Squyres: "Re: [OMPI devel] MPI datatype problem in mpi_test_suite?"</a>
<li><strong>In reply to:</strong> <a href="6381.php">Mariusz Mamo&#197;&#132;ski: "[OMPI devel] oob/btl tcp port range - missing htons?"</a>
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
