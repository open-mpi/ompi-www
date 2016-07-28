<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Dec  6 13:08:50 2006" -->
<!-- isoreceived="20061206180850" -->
<!-- sent="Wed, 6 Dec 2006 13:07:30 -0500" -->
<!-- isosent="20061206180730" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] running with the dr pml." -->
<!-- id="3D314FA3-0FC1-4608-9699-8E0D7116B8EB_at_umich.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4575FD91.5080500_at_lanl.gov" -->
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
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-12-06 13:07:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2312.php">Galen Shipman: "Re: [OMPI users] running with the dr pml."</a>
<li><strong>Previous message:</strong> <a href="2310.php">Jeff Squyres: "Re: [OMPI users] OpenMPI for 32/64 bit IB drivers"</a>
<li><strong>In reply to:</strong> <a href="2304.php">Galen M. Shipman: "Re: [OMPI users] running with the dr pml."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is there any gotchas on using the dr pml?
</span><br>
<span class="quotelev2">&gt;&gt; also if the dr pml is finding errors, and is resending data, can i
</span><br>
<span class="quotelev2">&gt;&gt; have it tell me when that happens?  Like a verbose mode?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Unfortunately you will need to update the source and recompile, try:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Updating this file: topdir/ompi/mca/pml/dr/pml_dr.h:245:#define
</span><br>
<span class="quotelev1">&gt; MCA_PML_DR_DEBUG_LEVEL -1
</span><br>
<span class="quotelev1">&gt; And change MCA_PML_DR_DEBUG_LEVEL to 0..
</span><br>
Well i did this, to no avail, i still get nothing out STDOUT, I get  
<br>
the usual ompi messages when i kill it though.
<br>
Also if i let it run long enough that it should complete it doest not  
<br>
finish.
<br>
Should i try anything else before filing a bug for 1.2b1 dr on OSX PPC?
<br>
Try a nightly snapshot?
<br>
Brock
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I also tried the following (just praying)  That it might work,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ mpirun  --mca pml dr --mca btl ^gm -np 4 ./xhpl
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; You are telling Open MPI not to use GM in this case...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I still get no output to the screen.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is on G5 xserve, with 1.2b1 OMPI.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brock Palen
</span><br>
<span class="quotelev2">&gt;&gt; Center for Advanced Computing
</span><br>
<span class="quotelev2">&gt;&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; (734)936-1985
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2312.php">Galen Shipman: "Re: [OMPI users] running with the dr pml."</a>
<li><strong>Previous message:</strong> <a href="2310.php">Jeff Squyres: "Re: [OMPI users] OpenMPI for 32/64 bit IB drivers"</a>
<li><strong>In reply to:</strong> <a href="2304.php">Galen M. Shipman: "Re: [OMPI users] running with the dr pml."</a>
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
