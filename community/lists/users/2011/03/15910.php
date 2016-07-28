<?
$subject_val = "Re: [OMPI users] OMPI free() error";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 18 10:40:56 2011" -->
<!-- isoreceived="20110318144056" -->
<!-- sent="Fri, 18 Mar 2011 09:55:16 +0000" -->
<!-- isosent="20110318095516" -->
<!-- name="Ashley Pittman" -->
<!-- email="ashley_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI free() error" -->
<!-- id="4258FEAE-BF71-405F-ADAA-2CED11E4FD91_at_pittman.co.uk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="SNT134-w838315735C901E9B74C3FCBB00_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] OMPI free() error<br>
<strong>From:</strong> Ashley Pittman (<em>ashley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-18 05:55:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15911.php">Jeff Squyres: "Re: [OMPI users] OMPI free() error"</a>
<li><strong>Previous message:</strong> <a href="15909.php">Jack Bryan: "Re: [OMPI users] OMPI seg fault by a class with weird address."</a>
<li><strong>In reply to:</strong> <a href="15908.php">Jack Bryan: "[OMPI users] OMPI free() error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15911.php">Jeff Squyres: "Re: [OMPI users] OMPI free() error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 18 Mar 2011, at 06:07, Jack Bryan wrote:
<br>
<p><span class="quotelev1">&gt; Hi, 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am running a C++ program with OMPI.
</span><br>
<span class="quotelev1">&gt; I got error: 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *** glibc detected *** /nsga2b: free(): invalid next size (fast): 0x0000000001817a90 ***
</span><br>
<p>This error indicates that when glibc tried to free some memory the internal data structures it uses were corrupt.
<br>
<p><span class="quotelev1">&gt; In valgrind, 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; there are some invalid read and write butno errors about this 
</span><br>
<span class="quotelev1">&gt;  free(): invalid next size .
</span><br>
<p>You need to fix the invalid write errors, the above error is almost certainly a symptom is these.
<br>
<p>Ashley.
<br>
<p><pre>
-- 
Ashley Pittman, Bath, UK.
Padb - A parallel job inspection tool for cluster computing
<a href="http://padb.pittman.org.uk">http://padb.pittman.org.uk</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15911.php">Jeff Squyres: "Re: [OMPI users] OMPI free() error"</a>
<li><strong>Previous message:</strong> <a href="15909.php">Jack Bryan: "Re: [OMPI users] OMPI seg fault by a class with weird address."</a>
<li><strong>In reply to:</strong> <a href="15908.php">Jack Bryan: "[OMPI users] OMPI free() error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15911.php">Jeff Squyres: "Re: [OMPI users] OMPI free() error"</a>
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
