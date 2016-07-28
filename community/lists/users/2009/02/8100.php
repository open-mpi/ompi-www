<?
$subject_val = "Re: [OMPI users] MPI_Send over 2 GB";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 18 19:56:02 2009" -->
<!-- isoreceived="20090219005602" -->
<!-- sent="Wed, 18 Feb 2009 19:55:51 -0500" -->
<!-- isosent="20090219005551" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Send over 2 GB" -->
<!-- id="EBF42CA3-684E-44D2-B313-14736F2E8AEE_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="499CA5D1.7050407_at_cs.utah.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Send over 2 GB<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-18 19:55:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8101.php">Jeff Squyres: "Re: [OMPI users] Error during ./configure."</a>
<li><strong>Previous message:</strong> <a href="8099.php">Justin: "Re: [OMPI users] MPI_Send over 2 GB"</a>
<li><strong>In reply to:</strong> <a href="8099.php">Justin: "Re: [OMPI users] MPI_Send over 2 GB"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
MPI mandates that the count argument is an &quot;int&quot;, which is signed.   
<br>
Hence, the 2GB limit holds true on most modern platforms.
<br>
<p>If you need to send an aggregate amount of data over 2GB, you should  
<br>
be able to make a composite datatype and send multiple of those.   
<br>
E.g., make a datatype that is 2 doubles; if you send 2GB of those,  
<br>
then you're actually sending 4GB of doubles.  And so on.
<br>
<p><p>On Feb 18, 2009, at 7:20 PM, Justin wrote:
<br>
<p><span class="quotelev1">&gt; My guess would be that your count argument is overflowing.  Is the  
</span><br>
<span class="quotelev1">&gt; count a signed 32 bit integer?  If so it will overflow around 2GB.   
</span><br>
<span class="quotelev1">&gt; Try outputting the size that you are sending and see if you get  
</span><br>
<span class="quotelev1">&gt; large negative number.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Justin
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Vittorio wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi! I'm doing a test to measure the transfer rates and latency of  
</span><br>
<span class="quotelev2">&gt;&gt; ompi over infiniband
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; starting from 1 kB everything was doing fine until i wanted to  
</span><br>
<span class="quotelev2">&gt;&gt; transfer 2 GB and i received this error
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [tatami:02271] *** An error occurred in MPI_Recv
</span><br>
<span class="quotelev2">&gt;&gt; [tatami:02271] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev2">&gt;&gt; [tatami:02271] *** MPI_ERR_COUNT: invalid count argument
</span><br>
<span class="quotelev2">&gt;&gt; [tatami:02271] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev2">&gt;&gt; [randori:12166] *** An error occurred in MPI_Send
</span><br>
<span class="quotelev2">&gt;&gt; [randori:12166] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev2">&gt;&gt; [randori:12166] *** MPI_ERR_COUNT: invalid count argument
</span><br>
<span class="quotelev2">&gt;&gt; [randori:12166] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; this error appears if i run the program either on the same node or  
</span><br>
<span class="quotelev2">&gt;&gt; both
</span><br>
<span class="quotelev2">&gt;&gt; is 2 GB the intrinsic limit of MPI_Send/MPI_Recv?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; thanks a lot
</span><br>
<span class="quotelev2">&gt;&gt; Vittorio
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------------------
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
<li><strong>Next message:</strong> <a href="8101.php">Jeff Squyres: "Re: [OMPI users] Error during ./configure."</a>
<li><strong>Previous message:</strong> <a href="8099.php">Justin: "Re: [OMPI users] MPI_Send over 2 GB"</a>
<li><strong>In reply to:</strong> <a href="8099.php">Justin: "Re: [OMPI users] MPI_Send over 2 GB"</a>
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
