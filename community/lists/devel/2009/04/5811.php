<?
$subject_val = "Re: [OMPI devel] A Couple of Questions";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 13 10:16:27 2009" -->
<!-- isoreceived="20090413141627" -->
<!-- sent="Mon, 13 Apr 2009 10:16:18 -0400" -->
<!-- isosent="20090413141618" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] A Couple of Questions" -->
<!-- id="99089C54-A1B3-4B95-8A36-B44AD5872993_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49E3469B.2010503_at_Sun.COM" -->
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
<strong>Subject:</strong> Re: [OMPI devel] A Couple of Questions<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-13 10:16:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5812.php">Eugene Loh: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k, Performance 	degradation ???"</a>
<li><strong>Previous message:</strong> <a href="5810.php">Rolf Vandevaart: "Re: [OMPI devel] A Couple of Questions"</a>
<li><strong>In reply to:</strong> <a href="5810.php">Rolf Vandevaart: "Re: [OMPI devel] A Couple of Questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5822.php">Timothy Hayes: "Re: [OMPI devel] A Couple of Questions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 13, 2009, at 10:05 , Rolf Vandevaart wrote:
<br>
<p><span class="quotelev1">&gt; We also looking at mapping out a BTL when we get an error.  We are  
</span><br>
<span class="quotelev1">&gt; going down the path of looking at registering a PML OB1 callback  
</span><br>
<span class="quotelev1">&gt; function that gets invoked when we get an error in the BTL.  Then  
</span><br>
<span class="quotelev1">&gt; this PML OB1 callback function can map out the BTL via a call to  
</span><br>
<span class="quotelev1">&gt; mca_bml.bml_del_btl(btl) which seems to be doing the right thing.
</span><br>
<p>There is already a PML functions (mca_pml_ob1_error_handler) that get  
<br>
called when an error [not related to any message] is detected by the  
<br>
BTL. However, the only thing this function does is calling abort.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But, to make this all work requires changes to the PML OB1 layer.
</span><br>
<p>I have another version of the PML that is way more resilient than the  
<br>
one in the trunk. It is part of the fault tolerance work we're doing  
<br>
here at UTK, but it wasn't expected to go in the trunk anytime soon ...
<br>
<p><span class="quotelev1">&gt; We are also figuring out what we do for retransmission when we get  
</span><br>
<span class="quotelev1">&gt; an error.
</span><br>
<p>There is some code for this. If the descriptor is for an RMA  
<br>
operation, we simply transform it into a send over another BTL. Right  
<br>
now, we're not dealing in OB1 with transmission failures for the match  
<br>
and rendez-vous fragments.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Rolf
</span><br>
<span class="quotelev1">&gt; _______________________________________________
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
<li><strong>Next message:</strong> <a href="5812.php">Eugene Loh: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k, Performance 	degradation ???"</a>
<li><strong>Previous message:</strong> <a href="5810.php">Rolf Vandevaart: "Re: [OMPI devel] A Couple of Questions"</a>
<li><strong>In reply to:</strong> <a href="5810.php">Rolf Vandevaart: "Re: [OMPI devel] A Couple of Questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5822.php">Timothy Hayes: "Re: [OMPI devel] A Couple of Questions"</a>
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
