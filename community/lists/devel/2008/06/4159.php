<?
$subject_val = "Re: [OMPI devel] MPI_Iprobe and mca_btl_sm_component_progress";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 19 08:50:22 2008" -->
<!-- isoreceived="20080619125022" -->
<!-- sent="Thu, 19 Jun 2008 14:50:10 +0200" -->
<!-- isosent="20080619125010" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_Iprobe and mca_btl_sm_component_progress" -->
<!-- id="1B8288FA-A8C3-496E-8ECB-5D4D00DBA7B6_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="485A4E0B.4020505_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] MPI_Iprobe and mca_btl_sm_component_progress<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-19 08:50:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4160.php">Lenny Verkhovsky: "Re: [OMPI devel] BW benchmark hangs after r 18551"</a>
<li><strong>Previous message:</strong> <a href="4158.php">Terry Dontje: "[OMPI devel] MPI_Iprobe and mca_btl_sm_component_progress"</a>
<li><strong>In reply to:</strong> <a href="4158.php">Terry Dontje: "[OMPI devel] MPI_Iprobe and mca_btl_sm_component_progress"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4161.php">Terry Dontje: "Re: [OMPI devel] MPI_Iprobe and mca_btl_sm_component_progress"</a>
<li><strong>Reply:</strong> <a href="4161.php">Terry Dontje: "Re: [OMPI devel] MPI_Iprobe and mca_btl_sm_component_progress"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Terry,
<br>
<p>We had a discussion about this few weeks ago. I have a version that  
<br>
modify this behavior (SM progress will not return as long as there are  
<br>
pending acks). There was no benefit from doing so (even if one might  
<br>
think that less calls to opal_progress might improve the performances).
<br>
<p>In fact TCP has the potential to exhibit the same behavior. However,  
<br>
TCP after each successful poll it empty the socket, so it might read  
<br>
more than one message. As we have to empty the temporary buffer, we  
<br>
interpret most of the messages inside, and this is why TCP exhibit a  
<br>
different behavior.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Jun 19, 2008, at 2:16 PM, Terry Dontje wrote:
<br>
<p><span class="quotelev1">&gt; Galen, George and others that might have SM BTL interest.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In my quest of looking at MPI_Iprobe performance I found what I  
</span><br>
<span class="quotelev1">&gt; think is an issue.  If you have an application that is using the SM  
</span><br>
<span class="quotelev1">&gt; BTL and does a small message send &lt;=256 followed by an MPI_Iprobe  
</span><br>
<span class="quotelev1">&gt; the mca_btl_sm_component function that is eventually called as a  
</span><br>
<span class="quotelev1">&gt; result of the opal_progress will receive and ack message from its  
</span><br>
<span class="quotelev1">&gt; send and then return.  The net affect is that the real message is  
</span><br>
<span class="quotelev1">&gt; after the ack message doesn't get read until a second MPI_Iprobe is  
</span><br>
<span class="quotelev1">&gt; made.
</span><br>
<span class="quotelev1">&gt; It seems to me that mca_btl_sm_component should read all Ack  
</span><br>
<span class="quotelev1">&gt; messages from a particular fifo until it either finds a real send  
</span><br>
<span class="quotelev1">&gt; fragment or no more messages on the fifo.  Otherwise, we are forcing  
</span><br>
<span class="quotelev1">&gt; calls like MPI_Iprobe to not return messages that are really there.   
</span><br>
<span class="quotelev1">&gt; I am not sure by IB but I know that the TCP BTL does not show this  
</span><br>
<span class="quotelev1">&gt; issue (which doesn't surprise me since I imagine the BTL is relying  
</span><br>
<span class="quotelev1">&gt; on TCP to handle this type of protocol stuff).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Before I go munging with the code I wanted to make sure I am not  
</span><br>
<span class="quotelev1">&gt; overlooking something here.  One concern is if I change the code to  
</span><br>
<span class="quotelev1">&gt; drain all the ack messages is that going to disrupt performance  
</span><br>
<span class="quotelev1">&gt; elsewhere?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --td
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
<li><strong>Next message:</strong> <a href="4160.php">Lenny Verkhovsky: "Re: [OMPI devel] BW benchmark hangs after r 18551"</a>
<li><strong>Previous message:</strong> <a href="4158.php">Terry Dontje: "[OMPI devel] MPI_Iprobe and mca_btl_sm_component_progress"</a>
<li><strong>In reply to:</strong> <a href="4158.php">Terry Dontje: "[OMPI devel] MPI_Iprobe and mca_btl_sm_component_progress"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4161.php">Terry Dontje: "Re: [OMPI devel] MPI_Iprobe and mca_btl_sm_component_progress"</a>
<li><strong>Reply:</strong> <a href="4161.php">Terry Dontje: "Re: [OMPI devel] MPI_Iprobe and mca_btl_sm_component_progress"</a>
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
