<?
$subject_val = "Re: [OMPI users] top question";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  3 09:32:14 2009" -->
<!-- isoreceived="20090603133214" -->
<!-- sent="Wed, 3 Jun 2009 09:32:07 -0400" -->
<!-- isosent="20090603133207" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] top question" -->
<!-- id="FE29CA5A-D1E6-48F2-95ED-6BB17727B493_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="FCF6C730-B734-4FAE-94E0-02E64F05A47A_at_myri.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] top question<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-03 09:32:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9511.php">Ralph Castain: "Re: [OMPI users] Pb in configure script when using ifort with &quot;-fast&quot; + link of opal_wrapper"</a>
<li><strong>Previous message:</strong> <a href="9509.php">DEVEL Michel: "Re: [OMPI users] Pb in configure script when using ifort with &quot;-fast&quot; +	link of opal_wrapper"</a>
<li><strong>In reply to:</strong> <a href="9507.php">Scott Atchley: "Re: [OMPI users] top question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9522.php">Number Cruncher: "Re: [OMPI users] top question"</a>
<li><strong>Reply:</strong> <a href="9522.php">Number Cruncher: "Re: [OMPI users] top question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We get this question so much that I really need to add it to the  
<br>
FAQ.  :-\
<br>
<p>Open MPI currently always spins for completion for exactly the reason  
<br>
that Scott cites: lower latency.
<br>
<p>Arguably, when using TCP, we could probably get a bit better  
<br>
performance by blocking and allowing the kernel to make more progress  
<br>
than a single quick pass through the sockets progress engine, but that  
<br>
involves some other difficulties such as simultaneously allowing  
<br>
shared memory progress.  We have ideas how to make this work, but it  
<br>
has unfortunately remained at a lower priority: the performance  
<br>
difference isn't that great, and we've been focusing on the other,  
<br>
lower latency interconnects (shmem, MX, verbs, etc.).
<br>
<p><p><p>On Jun 3, 2009, at 8:37 AM, Scott Atchley wrote:
<br>
<p><span class="quotelev1">&gt; On Jun 3, 2009, at 6:05 AM, tsilva_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Top always shows all the paralell processes at 100% in the %CPU
</span><br>
<span class="quotelev2">&gt; &gt; field, although some of the time these must be waiting for a
</span><br>
<span class="quotelev2">&gt; &gt; communication to complete. How can I see actual processing as
</span><br>
<span class="quotelev2">&gt; &gt; opposed to waiting at a barrier?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks,
</span><br>
<span class="quotelev2">&gt; &gt; Tiago
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Using what interconnect?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For performance reasons (lower latency), the app and/or OMPI may be
</span><br>
<span class="quotelev1">&gt; polling on the completion. Are you using blocking or non-blocking
</span><br>
<span class="quotelev1">&gt; communication?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Scott
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9511.php">Ralph Castain: "Re: [OMPI users] Pb in configure script when using ifort with &quot;-fast&quot; + link of opal_wrapper"</a>
<li><strong>Previous message:</strong> <a href="9509.php">DEVEL Michel: "Re: [OMPI users] Pb in configure script when using ifort with &quot;-fast&quot; +	link of opal_wrapper"</a>
<li><strong>In reply to:</strong> <a href="9507.php">Scott Atchley: "Re: [OMPI users] top question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9522.php">Number Cruncher: "Re: [OMPI users] top question"</a>
<li><strong>Reply:</strong> <a href="9522.php">Number Cruncher: "Re: [OMPI users] top question"</a>
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
