<?
$subject_val = "Re: [OMPI users] Problem with openmpi and infiniband";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Dec 28 04:00:36 2008" -->
<!-- isoreceived="20081228090036" -->
<!-- sent="Sun, 28 Dec 2008 11:00:27 +0200" -->
<!-- isosent="20081228090027" -->
<!-- name="Pavel Shamis (Pasha)" -->
<!-- email="pashash_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with openmpi and infiniband" -->
<!-- id="4957402B.7070803_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4956BA23.4070907_at_swansea.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem with openmpi and infiniband<br>
<strong>From:</strong> Pavel Shamis (Pasha) (<em>pashash_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-28 04:00:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7611.php">doriankrause: "[OMPI users] segmentation fault in opal_free_list_grow (derived datatypes + onesided)"</a>
<li><strong>Previous message:</strong> <a href="7609.php">Biagio Lucini: "Re: [OMPI users] Problem with openmpi and infiniband"</a>
<li><strong>In reply to:</strong> <a href="7609.php">Biagio Lucini: "Re: [OMPI users] Problem with openmpi and infiniband"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7617.php">Biagio Lucini: "Re: [OMPI users] Problem with openmpi and infiniband"</a>
<li><strong>Reply:</strong> <a href="7617.php">Biagio Lucini: "Re: [OMPI users] Problem with openmpi and infiniband"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/01/7621.php">Biagio Lucini: "Re: [OMPI users] Problem with openmpi and infiniband"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev2">&gt;&gt; Another thing to try is a change that we made late in the Open MPI 
</span><br>
<span class="quotelev2">&gt;&gt; v1.2 series with regards to IB:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=openfabrics#v1.2-use-early-completion">http://www.open-mpi.org/faq/?category=openfabrics#v1.2-use-early-completion</a> 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Thanks, this is something worth investigating. What would be the exact 
</span><br>
<span class="quotelev1">&gt; syntax to use to turn off pml_ob1_use_early_completion? 
</span><br>
Your problem definitely maybe related to the know issue with early 
<br>
completions. The exact syntax is:|
<br>
--mca pml_ob1_use_early_completion 0|
<br>
<p><span class="quotelev1">&gt; Do you think the same problem can also happen in the 1.1(.2) release, 
</span><br>
<span class="quotelev1">&gt; which is the one I have also tested, since it comes with Ofed 1.2.5? Would
</span><br>
I'm not sure , but I think it is very old issue, so it is big chance 
<br>
that it exist in 1.1 as well.
<br>
<p><span class="quotelev1">&gt; it be worth to try the 1.3? So far I have avoided it since it is 
</span><br>
<span class="quotelev1">&gt; tagged as &quot;prerelease&quot;.
</span><br>
The early completion issue was resolved in 1.3. You may try 1.3, i hope 
<br>
that it will work for you.
<br>
<p>Pasha
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7611.php">doriankrause: "[OMPI users] segmentation fault in opal_free_list_grow (derived datatypes + onesided)"</a>
<li><strong>Previous message:</strong> <a href="7609.php">Biagio Lucini: "Re: [OMPI users] Problem with openmpi and infiniband"</a>
<li><strong>In reply to:</strong> <a href="7609.php">Biagio Lucini: "Re: [OMPI users] Problem with openmpi and infiniband"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7617.php">Biagio Lucini: "Re: [OMPI users] Problem with openmpi and infiniband"</a>
<li><strong>Reply:</strong> <a href="7617.php">Biagio Lucini: "Re: [OMPI users] Problem with openmpi and infiniband"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/01/7621.php">Biagio Lucini: "Re: [OMPI users] Problem with openmpi and infiniband"</a>
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
