<?
$subject_val = "Re: [OMPI devel] How to add a schedule algorithm to the pml";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 22 09:07:34 2010" -->
<!-- isoreceived="20100922130734" -->
<!-- sent="Wed, 22 Sep 2010 09:07:24 -0400" -->
<!-- isosent="20100922130724" -->
<!-- name="Joshua Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] How to add a schedule algorithm to the pml" -->
<!-- id="0FBCBB36-7925-43CA-9F40-E5E06093C66C_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="8822587F-E22E-42A1-8772-0465A001704F_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] How to add a schedule algorithm to the pml<br>
<strong>From:</strong> Joshua Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-22 09:07:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8523.php">Jeff Squyres: "Re: [OMPI devel] Barrier() after Finalize() when a file handle is leaked."</a>
<li><strong>Previous message:</strong> <a href="8521.php">Pascal Deveze: "Re: [OMPI devel] New Romio for OpenMPI available in bitbucket"</a>
<li><strong>In reply to:</strong> <a href="8520.php">Jeff Squyres: "Re: [OMPI devel] How to add a schedule algorithm to the pml"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8527.php">Kenneth Lloyd: "Re: [OMPI devel] How to add a schedule algorithm to the pml"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
crcpw is a wrapper around the PML to support coordinated checkpoint restart. It mostly just replays the call to the 'crcp' framework that tracks the signature of messages traveling through the system.
<br>
<p>If you are not using the C/R feature, then I would not worry about the crcpw PML component (it is disabled automatically in non-CR builds).
<br>
<p>-- Josh
<br>
<p>On Sep 22, 2010, at 8:44 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Sep 22, 2010, at 8:00 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; crcpw: this is a fork of the ob1 PML; it add some failover semantics.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Oops!  I messed this up:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; bfo is the one I meant to write up there -- it's a fork of ob1; it adds failover semantics.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't know exactly what crcpw is -- I suspect this is a Josh creation for some kind of fault tolerance...?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>------------------------------------
<br>
Joshua Hursey
<br>
Postdoctoral Research Associate
<br>
Oak Ridge National Laboratory
<br>
<a href="http://www.cs.indiana.edu/~jjhursey">http://www.cs.indiana.edu/~jjhursey</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8523.php">Jeff Squyres: "Re: [OMPI devel] Barrier() after Finalize() when a file handle is leaked."</a>
<li><strong>Previous message:</strong> <a href="8521.php">Pascal Deveze: "Re: [OMPI devel] New Romio for OpenMPI available in bitbucket"</a>
<li><strong>In reply to:</strong> <a href="8520.php">Jeff Squyres: "Re: [OMPI devel] How to add a schedule algorithm to the pml"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8527.php">Kenneth Lloyd: "Re: [OMPI devel] How to add a schedule algorithm to the pml"</a>
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
