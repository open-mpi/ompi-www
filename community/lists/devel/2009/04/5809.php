<?
$subject_val = "Re: [OMPI devel] A Couple of Questions";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 13 09:41:11 2009" -->
<!-- isoreceived="20090413134111" -->
<!-- sent="Mon, 13 Apr 2009 09:40:59 -0400" -->
<!-- isosent="20090413134059" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] A Couple of Questions" -->
<!-- id="16389003-ECA9-481F-BBDD-B48210188FC3_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="f6ed2720904121858x5d66ce5bs89959902428daf45_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2009-04-13 09:40:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5810.php">Rolf Vandevaart: "Re: [OMPI devel] A Couple of Questions"</a>
<li><strong>Previous message:</strong> <a href="5808.php">Timothy Hayes: "[OMPI devel] A Couple of Questions"</a>
<li><strong>In reply to:</strong> <a href="5808.php">Timothy Hayes: "[OMPI devel] A Couple of Questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5810.php">Rolf Vandevaart: "Re: [OMPI devel] A Couple of Questions"</a>
<li><strong>Reply:</strong> <a href="5810.php">Rolf Vandevaart: "Re: [OMPI devel] A Couple of Questions"</a>
<li><strong>Reply:</strong> <a href="5822.php">Timothy Hayes: "Re: [OMPI devel] A Couple of Questions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 12, 2009, at 21:58 , Timothy Hayes wrote:
<br>
<p><span class="quotelev1">&gt; I was wondering if someone might be able to shed some light on a  
</span><br>
<span class="quotelev1">&gt; couple of questions I have.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When you receive a fragment/base_descriptor in a BTL module, is the  
</span><br>
<span class="quotelev1">&gt; raw data allowed to be fragmented when you invoke the callback  
</span><br>
<span class="quotelev1">&gt; function? By that I mean, I'm using a circular buffer in each  
</span><br>
<span class="quotelev1">&gt; endpoint so sometimes data loops back around. Currently I'm doing a  
</span><br>
<span class="quotelev1">&gt; two step copy: from my socket to the circular buffer and then from  
</span><br>
<span class="quotelev1">&gt; the circular buffer to the fragment. This actually effects my total  
</span><br>
<span class="quotelev1">&gt; throughput quite a bit, it would be much nicer to just point to the  
</span><br>
<span class="quotelev1">&gt; buffer instead. When I tried using two base_segments to point to the  
</span><br>
<span class="quotelev1">&gt; start and end of buffer I got some pretty strange errors. I'm just  
</span><br>
<span class="quotelev1">&gt; wondering if someone could confirm or deny that you can or can't do  
</span><br>
<span class="quotelev1">&gt; this, maybe those errors were down to human error instead.
</span><br>
<p>On the descriptor you can set a number of iovec containing the raw  
<br>
data. You don't have to make it contiguous prior to calling up in the  
<br>
PML. I think the PML header has to be contiguous, so you have to make  
<br>
sure that the first 32 bytes of the message are contiguous.
<br>
<p><span class="quotelev1">&gt;  My other question is about the BTL failover system. Would someone  
</span><br>
<span class="quotelev1">&gt; be able to briefly explain how it works or maybe point me to some  
</span><br>
<span class="quotelev1">&gt; docs? I'm actually expecting the file descriptors in my module to  
</span><br>
<span class="quotelev1">&gt; fail a certain point during an Open MPI job and I'd like my BTL  
</span><br>
<span class="quotelev1">&gt; module to fail gracefully and allow the TCP module to take over in  
</span><br>
<span class="quotelev1">&gt; its place. I'm not sure how to explicitly make the the BTL module  
</span><br>
<span class="quotelev1">&gt; say to the rest of Open MPI &quot;don't use my anymore&quot; though.
</span><br>
<p>There is no way to say don't use me &quot;at all&quot; anymore. This is per peer  
<br>
based, so you will have to return an error on every peer. Try  
<br>
returning OMPI_ERR_OUT_OF_RESOURCE from all functions that allocate  
<br>
descriptors (_alloc, _prepare_src and _prepare_dst), and the PML will  
<br>
end-up removing this BTL from the list.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Happy Easter
</span><br>
<span class="quotelev1">&gt; Tim
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5810.php">Rolf Vandevaart: "Re: [OMPI devel] A Couple of Questions"</a>
<li><strong>Previous message:</strong> <a href="5808.php">Timothy Hayes: "[OMPI devel] A Couple of Questions"</a>
<li><strong>In reply to:</strong> <a href="5808.php">Timothy Hayes: "[OMPI devel] A Couple of Questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5810.php">Rolf Vandevaart: "Re: [OMPI devel] A Couple of Questions"</a>
<li><strong>Reply:</strong> <a href="5810.php">Rolf Vandevaart: "Re: [OMPI devel] A Couple of Questions"</a>
<li><strong>Reply:</strong> <a href="5822.php">Timothy Hayes: "Re: [OMPI devel] A Couple of Questions"</a>
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
