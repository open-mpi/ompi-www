<?
$subject_val = "Re: [OMPI users] openmpi src rpm and message coalesce";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 15 07:14:30 2009" -->
<!-- isoreceived="20090415111430" -->
<!-- sent="Wed, 15 Apr 2009 07:14:24 -0400" -->
<!-- isosent="20090415111424" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi src rpm and message coalesce" -->
<!-- id="4680B901-0EA5-4B74-ABA7-911FBB249DE5_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49DF4F7D.1010304_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi src rpm and message coalesce<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-15 07:14:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8935.php">Jeff Squyres: "Re: [OMPI users] mpirun: symbol lookup error:/usr/local/lib/openmpi/mca_plm_lsf.so: undefined symbol: ls b_init"</a>
<li><strong>Previous message:</strong> <a href="8933.php">Jeff Squyres: "Re: [OMPI users] Incorrect results with MPI-IO under OpenMPI v1.3.1"</a>
<li><strong>In reply to:</strong> <a href="8859.php">vkm: "[OMPI users] openmpi src rpm and message coalesce"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 10, 2009, at 9:54 AM, vkm wrote:
<br>
<p><span class="quotelev1">&gt; I was trying to understand how &quot;btl_openib_use_message_coalescing&quot;  
</span><br>
<span class="quotelev1">&gt; is working.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Heh.  It's ugly.  :-)
<br>
<p>It's purely a benchmark optimization; there are very few (if any) real- 
<br>
world apps that will benefit from this feature.  I freely admit that  
<br>
we were pressured by marketing types to put in this feature (despite  
<br>
resisting this feature for a year or two).  Basically, if you're  
<br>
sending the same exact message to the same MPI peer repeatedly, and if  
<br>
you run out of networking buffers (e.g., you're waiting for the  
<br>
current set of messages to drain before any more network buffers will  
<br>
become available), if you notice that the last message on the queue is  
<br>
exactly the same as your message, then you can just increment a  
<br>
counter on the last message.  This effectively means that when you  
<br>
send that last message, you are effectively sending N (where N == the  
<br>
counter) messages in that one fragment.  The receiver knows/ 
<br>
understands this optimization and will match N posted MPI receives  
<br>
against that one incoming message.
<br>
<p>This is a bunch of logic that was added that benefits benchmarks but  
<br>
not real apps.  Yuck.  :-(
<br>
<p><span class="quotelev1">&gt; Since for a certain test scenario, IMB-EXT is working if I use  
</span><br>
<span class="quotelev1">&gt; &quot;btl_openib_use_message_coalescing = 0&quot; and not for  
</span><br>
<span class="quotelev1">&gt; &quot;btl_openib_use_message_coalescing = 1&quot;
</span><br>
<span class="quotelev1">&gt; No idea, who can have BUG here either open-mpi or low-level- 
</span><br>
<span class="quotelev1">&gt; driver !! ??
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Could this be related to <a href="http://www.open-mpi.org/community/lists/announce/2009/03/0029.php">http://www.open-mpi.org/community/lists/announce/2009/03/0029.php</a>?
<br>
<p><span class="quotelev1">&gt; Howsoever, I have one more concern as well. I added some prints to  
</span><br>
<span class="quotelev1">&gt; debug openmpi.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I was following below procedure,
</span><br>
<span class="quotelev1">&gt; Extract OFED TAR
</span><br>
<span class="quotelev1">&gt; Extract openmpi*.src.rpm
</span><br>
<span class="quotelev1">&gt; Go to SOURCE
</span><br>
<span class="quotelev1">&gt; Extract openmpi*.tgz
</span><br>
<span class="quotelev1">&gt; modify code
</span><br>
<span class="quotelev1">&gt; Create TAR
</span><br>
<span class="quotelev1">&gt; Create openmpi*.src.rpm
</span><br>
<span class="quotelev1">&gt; Build rpm
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>It is probably a whole lot simpler / faster to just get a source  
<br>
tarball from www.open-mpi.org and build / install it manually (rather  
<br>
than create a new RPM every time).  Particularly if you're adding  
<br>
printf's in Open MPI components -- you can just &quot;make install&quot;  
<br>
directly from the component directory (which will compile and install  
<br>
just that plugin -- not all of OMPI).
<br>
<p>Note, too, that you might want to use &quot;opal_output(0, &quot;printf-like  
<br>
string with %d, %s, ...etc.&quot;, ...printf-like varargs....)&quot; for  
<br>
debugging output instead of printf.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8935.php">Jeff Squyres: "Re: [OMPI users] mpirun: symbol lookup error:/usr/local/lib/openmpi/mca_plm_lsf.so: undefined symbol: ls b_init"</a>
<li><strong>Previous message:</strong> <a href="8933.php">Jeff Squyres: "Re: [OMPI users] Incorrect results with MPI-IO under OpenMPI v1.3.1"</a>
<li><strong>In reply to:</strong> <a href="8859.php">vkm: "[OMPI users] openmpi src rpm and message coalesce"</a>
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
