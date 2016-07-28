<?
$subject_val = "Re: [OMPI users] difference between single and double precision";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 16 07:07:16 2010" -->
<!-- isoreceived="20101216120716" -->
<!-- sent="Thu, 16 Dec 2010 07:07:12 -0500" -->
<!-- isosent="20101216120712" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] difference between single and double precision" -->
<!-- id="72F509A2-E2B8-478E-8E79-79D6ADDC1557_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4D09E6A0.3080704_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] difference between single and double precision<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-16 07:07:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15174.php">Matthew J. Grismer: "Re: [OMPI users] Using MPI_Put/Get correctly?"</a>
<li><strong>Previous message:</strong> <a href="15172.php">Jeff Squyres: "Re: [OMPI users] Issue with : mca_oob_tcp_peer_recv_connect_ack on SGI Altix"</a>
<li><strong>In reply to:</strong> <a href="15165.php">Mathieu Gontier: "Re: [OMPI users] difference between single and double precision"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15179.php">Eugene Loh: "Re: [OMPI users] difference between single and double precision"</a>
<li><strong>Reply:</strong> <a href="15179.php">Eugene Loh: "Re: [OMPI users] difference between single and double precision"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 16, 2010, at 5:14 AM, Mathieu Gontier wrote:
<br>
<p><span class="quotelev1">&gt; We have lead some tests and the option btl_sm_eager_limit has a positive consequence on the performance. Eugene, thank you for your links.
</span><br>
<p>Good!
<br>
<p>Just be aware of the tradeoff you're making: space for time.
<br>
<p><span class="quotelev1">&gt; Now, to offer a good support to our users, we would like to get the value of this parameters at the runtime. I am aware I can have the value running ompi_info like following:
</span><br>
<span class="quotelev1">&gt; ompi_info --param btl all | grep btl_sm_eager_limit
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; but can I get the value during the computation when I run mpirun -np 12 --mca btl_sm_eager_limit 8192 my_binary? This value could be compared with the buffer size into my code and some warning put into the output.
</span><br>
<p>We don't currently have a user-exposed method of retrieving MCA parameter values.  As you noted in your 2nd email, if the value was set by setting an environment variable, then you can just getenv() it.  But if the value was set some other way (e.g., via a file), it won't necessarily be loaded in the environment.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15174.php">Matthew J. Grismer: "Re: [OMPI users] Using MPI_Put/Get correctly?"</a>
<li><strong>Previous message:</strong> <a href="15172.php">Jeff Squyres: "Re: [OMPI users] Issue with : mca_oob_tcp_peer_recv_connect_ack on SGI Altix"</a>
<li><strong>In reply to:</strong> <a href="15165.php">Mathieu Gontier: "Re: [OMPI users] difference between single and double precision"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15179.php">Eugene Loh: "Re: [OMPI users] difference between single and double precision"</a>
<li><strong>Reply:</strong> <a href="15179.php">Eugene Loh: "Re: [OMPI users] difference between single and double precision"</a>
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
