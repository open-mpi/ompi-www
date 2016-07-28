<?
$subject_val = "Re: [OMPI users] Segfault after malloc()?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 18 09:15:33 2011" -->
<!-- isoreceived="20110518131533" -->
<!-- sent="Wed, 18 May 2011 09:15:18 -0400" -->
<!-- isosent="20110518131518" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segfault after malloc()?" -->
<!-- id="8D90FC48-2BE3-4D65-B111-1907EC990F49_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="BANLkTinPqHKwrND6bFNUbQBrYQFkhhc4iA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Segfault after malloc()?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-18 09:15:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16564.php">Paul van der Walt: "Re: [OMPI users] Segfault after malloc()?"</a>
<li><strong>Previous message:</strong> <a href="16562.php">Paul van der Walt: "Re: [OMPI users] Segfault after malloc()?"</a>
<li><strong>In reply to:</strong> <a href="16562.php">Paul van der Walt: "Re: [OMPI users] Segfault after malloc()?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16564.php">Paul van der Walt: "Re: [OMPI users] Segfault after malloc()?"</a>
<li><strong>Reply:</strong> <a href="16564.php">Paul van der Walt: "Re: [OMPI users] Segfault after malloc()?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If you're only running with a few MPI processes, you might be able to get away with:
<br>
<p>mpirun -np 4 valgrind ./my_mpi_application
<br>
<p>If you run any more than that, the output gets too jumbled and you should output each process' valgrind stdout to a different file with the --log-file option (IIRC).
<br>
<p>I personally like these valgrind options:
<br>
<p>valgrind --num-callers=50 --db-attach=yes --tool=memcheck --leak-check=yes --show-reachable=yes
<br>
<p><p><p>On May 18, 2011, at 8:49 AM, Paul van der Walt wrote:
<br>
<p><span class="quotelev1">&gt; Hi Jeff,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for the response.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 18 May 2011 13:30, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; *Usually* when we see segv's in calls to alloc, it means that there was previously some kind of memory bug, such as an array overflow or something like that (i.e., something that stomped on the memory allocation tables, causing the next alloc to fail).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Have you tried running your code through a memory-checking debugger?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I sort-of tried with valgrind, but I'm not really sure how to
</span><br>
<span class="quotelev1">&gt; interpret the output (I'm not such a C-wizard). I'll have another look
</span><br>
<span class="quotelev1">&gt; a little later then and report back. I suppose I should RTFM on how to
</span><br>
<span class="quotelev1">&gt; properly invoke valgrind so it makes sense with an MPI program?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; O&lt; ascii ribbon campaign - stop html mail - www.asciiribbon.org
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
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16564.php">Paul van der Walt: "Re: [OMPI users] Segfault after malloc()?"</a>
<li><strong>Previous message:</strong> <a href="16562.php">Paul van der Walt: "Re: [OMPI users] Segfault after malloc()?"</a>
<li><strong>In reply to:</strong> <a href="16562.php">Paul van der Walt: "Re: [OMPI users] Segfault after malloc()?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16564.php">Paul van der Walt: "Re: [OMPI users] Segfault after malloc()?"</a>
<li><strong>Reply:</strong> <a href="16564.php">Paul van der Walt: "Re: [OMPI users] Segfault after malloc()?"</a>
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
