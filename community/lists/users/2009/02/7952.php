<?
$subject_val = "Re: [OMPI users] v1.3: mca_common_sm_mmap_init error";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  3 13:26:02 2009" -->
<!-- isoreceived="20090203182602" -->
<!-- sent="Tue, 3 Feb 2009 13:25:36 -0500" -->
<!-- isosent="20090203182536" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] v1.3: mca_common_sm_mmap_init error" -->
<!-- id="3DC9865E-4412-4CF1-9AD2-C8210DFC1CB9_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="498889BF.1000704_at_ias.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] v1.3: mca_common_sm_mmap_init error<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-03 13:25:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7953.php">Eugene Loh: "Re: [OMPI users] v1.3: mca_common_sm_mmap_init error"</a>
<li><strong>Previous message:</strong> <a href="7951.php">Prentice Bisbal: "Re: [OMPI users] v1.3: mca_common_sm_mmap_init error"</a>
<li><strong>In reply to:</strong> <a href="7951.php">Prentice Bisbal: "Re: [OMPI users] v1.3: mca_common_sm_mmap_init error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7953.php">Eugene Loh: "Re: [OMPI users] v1.3: mca_common_sm_mmap_init error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
By peers I mean the number of MPI processes on the same host.  So if  
<br>
you run with 4 processes on a single host, OMPI sets up shared memory  
<br>
for those 4 processes during MPI_INIT, regardless of whether you call  
<br>
MPI send/receive functions or not.
<br>
<p><p>On Feb 3, 2009, at 1:15 PM, Prentice Bisbal wrote:
<br>
<p><span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 2, 2009, at 4:48 PM, Prentice Bisbal wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; No. I was running just a simple &quot;Hello, world&quot; program to test  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; v1.3 when
</span><br>
<span class="quotelev3">&gt;&gt;&gt; these errors occured. And as soon as I reverted to 1.2.8, the errors
</span><br>
<span class="quotelev3">&gt;&gt;&gt; disappeared.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; FWIW, OMPI allocates shared memory based on the number of peers on  
</span><br>
<span class="quotelev2">&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt; host.  This allocation is during MPI_INIT, not during the first
</span><br>
<span class="quotelev2">&gt;&gt; MPI_SEND/MPI_RECV call.  So even if you're running &quot;hello world&quot;, you
</span><br>
<span class="quotelev2">&gt;&gt; could still be running out of shared memory space.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for the info. Can you define peers for me?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Prentice
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
<li><strong>Next message:</strong> <a href="7953.php">Eugene Loh: "Re: [OMPI users] v1.3: mca_common_sm_mmap_init error"</a>
<li><strong>Previous message:</strong> <a href="7951.php">Prentice Bisbal: "Re: [OMPI users] v1.3: mca_common_sm_mmap_init error"</a>
<li><strong>In reply to:</strong> <a href="7951.php">Prentice Bisbal: "Re: [OMPI users] v1.3: mca_common_sm_mmap_init error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7953.php">Eugene Loh: "Re: [OMPI users] v1.3: mca_common_sm_mmap_init error"</a>
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
