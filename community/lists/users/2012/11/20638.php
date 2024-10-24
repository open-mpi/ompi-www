<?
$subject_val = "Re: [OMPI users] MPI_Recv operation time";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  5 09:48:01 2012" -->
<!-- isoreceived="20121105144801" -->
<!-- sent="Mon, 5 Nov 2012 06:47:54 -0800" -->
<!-- isosent="20121105144754" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Recv operation time" -->
<!-- id="527924A0-2CC8-4AD4-B36B-AA0C85313E31_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAFAp2dJqPeXTnFrhAXLVGVX=7uTjZRoJPC-WKNnG=iaPrs7Azw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Recv operation time<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-05 09:47:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20639.php">Eugene Loh: "Re: [OMPI users] MPI_Recv operation time"</a>
<li><strong>Previous message:</strong> <a href="20637.php">huydanlin: "[OMPI users] MPI_Recv operation time"</a>
<li><strong>In reply to:</strong> <a href="20637.php">huydanlin: "[OMPI users] MPI_Recv operation time"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20639.php">Eugene Loh: "Re: [OMPI users] MPI_Recv operation time"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You might take a look at the other profiling tools:
<br>
<p><a href="http://www.open-mpi.org/faq/?category=perftools#OMPI-support">http://www.open-mpi.org/faq/?category=perftools#OMPI-support</a>
<br>
<p><p>On Nov 5, 2012, at 1:07 AM, huydanlin &lt;huydanlin_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi, 
</span><br>
<span class="quotelev1">&gt;    My objective is I want to calculate the time perform by MPI_Send &amp; MPI_Recv . In case MPI_Send, i can put the timer before the MPI_Send and after its. like this &quot;
</span><br>
<span class="quotelev1">&gt; t1=MPI_Wtime(), 
</span><br>
<span class="quotelev1">&gt; MPI_Send.... 
</span><br>
<span class="quotelev1">&gt; t2= MPI_Wtime 
</span><br>
<span class="quotelev1">&gt; tsend= t2 -t1; it mean when the message go to the system buffer, the control return to the sending process. So I can measure the MPI_Send. 
</span><br>
<span class="quotelev1">&gt;    But my problem in MPI_Recv. If i do like MPI_Send( put the timer before and after MPI_Recv) I think it wrong. Because we dont know exactly when the message reach the system buffer in receiving side. 
</span><br>
<span class="quotelev1">&gt;     So how can we measure the MPI_Recv operation time( time when the message is copied from the system buffer to the receive buffer) ? 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
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
<li><strong>Next message:</strong> <a href="20639.php">Eugene Loh: "Re: [OMPI users] MPI_Recv operation time"</a>
<li><strong>Previous message:</strong> <a href="20637.php">huydanlin: "[OMPI users] MPI_Recv operation time"</a>
<li><strong>In reply to:</strong> <a href="20637.php">huydanlin: "[OMPI users] MPI_Recv operation time"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20639.php">Eugene Loh: "Re: [OMPI users] MPI_Recv operation time"</a>
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
