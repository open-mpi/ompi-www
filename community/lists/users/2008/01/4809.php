<?
$subject_val = "Re: [OMPI users] Ideal MTU in Infiniband";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 10 20:43:23 2008" -->
<!-- isoreceived="20080111014323" -->
<!-- sent="Thu, 10 Jan 2008 20:43:10 -0500" -->
<!-- isosent="20080111014310" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Ideal MTU in Infiniband" -->
<!-- id="B986DDE6-F30D-4833-A87E-0852C1C725E0_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="736082cf0801101056m7701986ak8735542b52d25e31_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Ideal MTU in Infiniband<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-10 20:43:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4810.php">Lydia Heck: "[OMPI users] how to select a specific network"</a>
<li><strong>Previous message:</strong> <a href="4808.php">8mj6tc902_at_[hidden]: "Re: [OMPI users] Open MPI v1.2.5 released"</a>
<li><strong>In reply to:</strong> <a href="4805.php">Parag Kalra: "Re: [OMPI users] Ideal MTU in Infiniband"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In an Open MPI installation, have a look in $prefix/share/openmpi/mca- 
<br>
btl-openib-hca-params.ini, find your HCA hardware, and you'll see what  
<br>
value Open MPI sets the MTU to.
<br>
<p>Hope that helps.
<br>
<p><p>On Jan 10, 2008, at 1:56 PM, Parag Kalra wrote:
<br>
<p><span class="quotelev1">&gt; But still can someone please tell the numerical value that is idealy  
</span><br>
<span class="quotelev1">&gt; set or should be set.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 10, 2008 8:29 PM, Gleb Natapov &lt;glebn_at_[hidden] &gt; wrote:
</span><br>
<span class="quotelev1">&gt; On Thu, Jan 10, 2008 at 06:23:50PM +0530, Parag Kalra wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hello all,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Any ideas?
</span><br>
<span class="quotelev1">&gt; Yes. The idea is that Open MPI knows what best. Run it with a default
</span><br>
<span class="quotelev1">&gt; value. Usually bigger MTU is better, but some HW has bugs. Open MPI
</span><br>
<span class="quotelev1">&gt; knows this and choses the best value for your HW.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Parag Kalra
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Jan 10, 2008 4:15 AM, Parag Kalra &lt;paragkalra_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hello all,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I am using Open MPI with Infiniband configured.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; What should be the ideal MTU size for infiniband?
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --
</span><br>
<span class="quotelev3">&gt; &gt; &gt; PARAG . A . KALRA
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;                        Gleb.
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Love,
</span><br>
<span class="quotelev1">&gt; PARAG . A . KALRA
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Good judgment comes from experience, and experience comes from bad  
</span><br>
<span class="quotelev1">&gt; judgment
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://discoverlinux.blogspot.com">http://discoverlinux.blogspot.com</a>
</span><br>
<span class="quotelev1">&gt; A Linux machine! because a 486 is a terrible thing to waste
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4810.php">Lydia Heck: "[OMPI users] how to select a specific network"</a>
<li><strong>Previous message:</strong> <a href="4808.php">8mj6tc902_at_[hidden]: "Re: [OMPI users] Open MPI v1.2.5 released"</a>
<li><strong>In reply to:</strong> <a href="4805.php">Parag Kalra: "Re: [OMPI users] Ideal MTU in Infiniband"</a>
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
