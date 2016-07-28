<?
$subject_val = "Re: [OMPI devel] A Couple of Questions";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 13 10:05:28 2009" -->
<!-- isoreceived="20090413140528" -->
<!-- sent="Mon, 13 Apr 2009 10:05:15 -0400" -->
<!-- isosent="20090413140515" -->
<!-- name="Rolf Vandevaart" -->
<!-- email="Rolf.Vandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] A Couple of Questions" -->
<!-- id="49E3469B.2010503_at_Sun.COM" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="16389003-ECA9-481F-BBDD-B48210188FC3_at_eecs.utk.edu" -->
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
<strong>From:</strong> Rolf Vandevaart (<em>Rolf.Vandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-13 10:05:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5811.php">George Bosilca: "Re: [OMPI devel] A Couple of Questions"</a>
<li><strong>Previous message:</strong> <a href="5809.php">George Bosilca: "Re: [OMPI devel] A Couple of Questions"</a>
<li><strong>In reply to:</strong> <a href="5809.php">George Bosilca: "Re: [OMPI devel] A Couple of Questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5811.php">George Bosilca: "Re: [OMPI devel] A Couple of Questions"</a>
<li><strong>Reply:</strong> <a href="5811.php">George Bosilca: "Re: [OMPI devel] A Couple of Questions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 04/13/09 09:40, George Bosilca wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Apr 12, 2009, at 21:58 , Timothy Hayes wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I was wondering if someone might be able to shed some light on a 
</span><br>
<span class="quotelev2">&gt;&gt; couple of questions I have.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When you receive a fragment/base_descriptor in a BTL module, is the 
</span><br>
<span class="quotelev2">&gt;&gt; raw data allowed to be fragmented when you invoke the callback 
</span><br>
<span class="quotelev2">&gt;&gt; function? By that I mean, I'm using a circular buffer in each endpoint 
</span><br>
<span class="quotelev2">&gt;&gt; so sometimes data loops back around. Currently I'm doing a two step 
</span><br>
<span class="quotelev2">&gt;&gt; copy: from my socket to the circular buffer and then from the circular 
</span><br>
<span class="quotelev2">&gt;&gt; buffer to the fragment. This actually effects my total throughput 
</span><br>
<span class="quotelev2">&gt;&gt; quite a bit, it would be much nicer to just point to the buffer 
</span><br>
<span class="quotelev2">&gt;&gt; instead. When I tried using two base_segments to point to the start 
</span><br>
<span class="quotelev2">&gt;&gt; and end of buffer I got some pretty strange errors. I'm just wondering 
</span><br>
<span class="quotelev2">&gt;&gt; if someone could confirm or deny that you can or can't do this, maybe 
</span><br>
<span class="quotelev2">&gt;&gt; those errors were down to human error instead.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On the descriptor you can set a number of iovec containing the raw data. 
</span><br>
<span class="quotelev1">&gt; You don't have to make it contiguous prior to calling up in the PML. I 
</span><br>
<span class="quotelev1">&gt; think the PML header has to be contiguous, so you have to make sure that 
</span><br>
<span class="quotelev1">&gt; the first 32 bytes of the message are contiguous.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  My other question is about the BTL failover system. Would someone be 
</span><br>
<span class="quotelev2">&gt;&gt; able to briefly explain how it works or maybe point me to some docs? 
</span><br>
<span class="quotelev2">&gt;&gt; I'm actually expecting the file descriptors in my module to fail a 
</span><br>
<span class="quotelev2">&gt;&gt; certain point during an Open MPI job and I'd like my BTL module to 
</span><br>
<span class="quotelev2">&gt;&gt; fail gracefully and allow the TCP module to take over in its place. 
</span><br>
<span class="quotelev2">&gt;&gt; I'm not sure how to explicitly make the the BTL module say to the rest 
</span><br>
<span class="quotelev2">&gt;&gt; of Open MPI &quot;don't use my anymore&quot; though.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There is no way to say don't use me &quot;at all&quot; anymore. This is per peer 
</span><br>
<span class="quotelev1">&gt; based, so you will have to return an error on every peer. Try returning 
</span><br>
<span class="quotelev1">&gt; OMPI_ERR_OUT_OF_RESOURCE from all functions that allocate descriptors 
</span><br>
<span class="quotelev1">&gt; (_alloc, _prepare_src and _prepare_dst), and the PML will end-up 
</span><br>
<span class="quotelev1">&gt; removing this BTL from the list.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   george.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>We also looking at mapping out a BTL when we get an error.  We are going 
<br>
down the path of looking at registering a PML OB1 callback function that 
<br>
gets invoked when we get an error in the BTL.  Then this PML OB1 
<br>
callback function can map out the BTL via a call to 
<br>
mca_bml.bml_del_btl(btl) which seems to be doing the right thing.
<br>
<p>But, to make this all work requires changes to the PML OB1 layer.
<br>
<p>We are also figuring out what we do for retransmission when we get an error.
<br>
<p>Rolf
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5811.php">George Bosilca: "Re: [OMPI devel] A Couple of Questions"</a>
<li><strong>Previous message:</strong> <a href="5809.php">George Bosilca: "Re: [OMPI devel] A Couple of Questions"</a>
<li><strong>In reply to:</strong> <a href="5809.php">George Bosilca: "Re: [OMPI devel] A Couple of Questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5811.php">George Bosilca: "Re: [OMPI devel] A Couple of Questions"</a>
<li><strong>Reply:</strong> <a href="5811.php">George Bosilca: "Re: [OMPI devel] A Couple of Questions"</a>
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
