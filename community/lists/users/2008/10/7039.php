<?
$subject_val = "Re: [OMPI users] --mca btl_openib_if_include";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Oct 19 20:30:53 2008" -->
<!-- isoreceived="20081020003053" -->
<!-- sent="Sun, 19 Oct 2008 17:30:48 -0700 (PDT)" -->
<!-- isosent="20081020003048" -->
<!-- name="Mostyn Lewis" -->
<!-- email="Mostyn.Lewis_at_[hidden]" -->
<!-- subject="Re: [OMPI users] --mca btl_openib_if_include" -->
<!-- id="Pine.GSO.4.64.0810191728370.13908_at_aragorn.brc.West.Sun.COM" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="279F8B0B-599D-4B7B-8CDA-A3CB862C338A_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] --mca btl_openib_if_include<br>
<strong>From:</strong> Mostyn Lewis (<em>Mostyn.Lewis_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-19 20:30:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7040.php">Terry Frankcombe: "Re: [OMPI users] Can OpenMPI support multiple compilers?"</a>
<li><strong>Previous message:</strong> <a href="7038.php">Mostyn Lewis: "Re: [OMPI users] Can 2 IB HCAs give twice the bandwidth?"</a>
<li><strong>In reply to:</strong> <a href="7033.php">Jeff Squyres: "Re: [OMPI users] --mca btl_openib_if_include"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think the quoting counts as my own fault as I used
<br>
MCA='--mca btl_openib_verbose 1 --mca btl openib,self --mca btl_openib_if_include &quot;mlx4_0:1,mlx4_1:1&quot;'
<br>
...
<br>
mpirun ... $MCA ...
<br>
<p>DM
<br>
<p>On Sun, 19 Oct 2008, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Oct 18, 2008, at 9:17 PM, Mostyn Lewis wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I traced this and it was the quote marks in &quot;mlx4_0:1,mlx4_1:1&quot; - they were
</span><br>
<span class="quotelev2">&gt;&gt; passed in and caused the mismatch :-(
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Doh!  I totally missed that you were using quotes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is using quotes something that you would expect to be able to do?  I didn't 
</span><br>
<span class="quotelev1">&gt; put quote parsing in there because I didn't think that device names would 
</span><br>
<span class="quotelev1">&gt; contain spaces.  I also would have thought that the shell would have stripped 
</span><br>
<span class="quotelev1">&gt; out the quotes...?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7040.php">Terry Frankcombe: "Re: [OMPI users] Can OpenMPI support multiple compilers?"</a>
<li><strong>Previous message:</strong> <a href="7038.php">Mostyn Lewis: "Re: [OMPI users] Can 2 IB HCAs give twice the bandwidth?"</a>
<li><strong>In reply to:</strong> <a href="7033.php">Jeff Squyres: "Re: [OMPI users] --mca btl_openib_if_include"</a>
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
