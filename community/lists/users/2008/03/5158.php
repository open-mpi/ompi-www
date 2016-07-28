<?
$subject_val = "Re: [OMPI users] eager limits?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar  7 12:42:04 2008" -->
<!-- isoreceived="20080307174204" -->
<!-- sent="Fri, 7 Mar 2008 12:40:40 -0500" -->
<!-- isosent="20080307174040" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] eager limits?" -->
<!-- id="6C14286E-344B-43B9-86BE-616AF328D0B7_at_umich.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.LNX.4.64.0803031439560.13397_at_marvin.we-be-smart.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] eager limits?<br>
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-07 12:40:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5159.php">Jeff Squyres: "Re: [OMPI users] Problem: openmpi using lam"</a>
<li><strong>Previous message:</strong> <a href="5157.php">Justus Schwabedal: "[OMPI users] Problem: openmpi using lam"</a>
<li><strong>In reply to:</strong> <a href="5122.php">Brian W. Barrett: "Re: [OMPI users] eager limits?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 3, 2008, at 3:51 PM, Brian W. Barrett wrote:
<br>
<p><span class="quotelev1">&gt; On Mon, 3 Mar 2008, Brock Palen wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I was writing a simple code to demonstrate deadlock.  I create an
</span><br>
<span class="quotelev2">&gt;&gt; array of some number of doubles, when sizeof(double)*SIZE is &gt;
</span><br>
<span class="quotelev2">&gt;&gt; btl_sm_eager_limit (on a smp machine) I expect the code to deadlock
</span><br>
<span class="quotelev2">&gt;&gt; but not until the buffer size is greater than the eager limit.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Now in 1.2.3 sm_eager_limit is 4096 (bytes?)  So i expect a buffer of
</span><br>
<span class="quotelev2">&gt;&gt; doubles created with malloc to have up to 512 before the code
</span><br>
<span class="quotelev2">&gt;&gt; deadlocks.  (remember this is for demonstrations only) The code
</span><br>
<span class="quotelev2">&gt;&gt; deadlocks at 504 doubles, does the eager limit not include the
</span><br>
<span class="quotelev2">&gt;&gt; envelope overhead?  Is it really 64 Kbytes?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thus does every message take up 64K no matter the size of buffer* ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think you missed an order of magnitude somewhere :).  504 doubles  
</span><br>
<span class="quotelev1">&gt; would
</span><br>
<span class="quotelev1">&gt; take 4032 bytes, so that would leave 64 bytes for header.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The eager limit is the total packet size, so headers are also  
</span><br>
<span class="quotelev1">&gt; included in
</span><br>
<span class="quotelev1">&gt; that space (explaining why you wouldn't be able to pack a full 512
</span><br>
<span class="quotelev1">&gt; doubles) into a single eager message.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There are two headers sent in the SM case - one for the PML (16  
</span><br>
<span class="quotelev1">&gt; bytes) and
</span><br>
<span class="quotelev1">&gt; one for the SM BTL (16 bytes for 32 bit builds, 24 bytes for 64 bit
</span><br>
<span class="quotelev1">&gt; builds).  So the grand total of header space for an SM message is  
</span><br>
<span class="quotelev1">&gt; 32 or 40
</span><br>
<span class="quotelev1">&gt; bytes, depending on build size.  I'm not sure where the other 24 bytes
</span><br>
<span class="quotelev1">&gt; would be going in your case.
</span><br>
<p>Ok cool, yes my math sucked that day :-)   It all adds up now.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hope this helps,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5159.php">Jeff Squyres: "Re: [OMPI users] Problem: openmpi using lam"</a>
<li><strong>Previous message:</strong> <a href="5157.php">Justus Schwabedal: "[OMPI users] Problem: openmpi using lam"</a>
<li><strong>In reply to:</strong> <a href="5122.php">Brian W. Barrett: "Re: [OMPI users] eager limits?"</a>
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
