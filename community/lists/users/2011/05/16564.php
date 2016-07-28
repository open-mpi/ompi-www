<?
$subject_val = "Re: [OMPI users] Segfault after malloc()?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 18 09:21:34 2011" -->
<!-- isoreceived="20110518132134" -->
<!-- sent="Wed, 18 May 2011 14:21:29 +0100" -->
<!-- isosent="20110518132129" -->
<!-- name="Paul van der Walt" -->
<!-- email="paul_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segfault after malloc()?" -->
<!-- id="BANLkTikA3Q=4w9zSuJqNNcCzUGJTAxNoAg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="8D90FC48-2BE3-4D65-B111-1907EC990F49_at_cisco.com" -->
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
<strong>From:</strong> Paul van der Walt (<em>paul_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-18 09:21:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16565.php">Brock Palen: "Re: [OMPI users] btl_openib_cpc_include rdmacm questions"</a>
<li><strong>Previous message:</strong> <a href="16563.php">Jeff Squyres: "Re: [OMPI users] Segfault after malloc()?"</a>
<li><strong>In reply to:</strong> <a href="16563.php">Jeff Squyres: "Re: [OMPI users] Segfault after malloc()?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Okay cool, mine already breaks with P=2, so I'll try this soon. Thanks
<br>
for the impatient-idiot's-guide :)
<br>
<p>On 18 May 2011 14:15, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; If you're only running with a few MPI processes, you might be able to get away with:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np 4 valgrind ./my_mpi_application
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you run any more than that, the output gets too jumbled and you should output each process' valgrind stdout to a different file with the --log-file option (IIRC).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I personally like these valgrind options:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; valgrind --num-callers=50 --db-attach=yes --tool=memcheck --leak-check=yes --show-reachable=yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 18, 2011, at 8:49 AM, Paul van der Walt wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Jeff,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for the response.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 18 May 2011 13:30, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *Usually* when we see segv's in calls to alloc, it means that there was previously some kind of memory bug, such as an array overflow or something like that (i.e., something that stomped on the memory allocation tables, causing the next alloc to fail).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Have you tried running your code through a memory-checking debugger?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I sort-of tried with valgrind, but I'm not really sure how to
</span><br>
<span class="quotelev2">&gt;&gt; interpret the output (I'm not such a C-wizard). I'll have another look
</span><br>
<span class="quotelev2">&gt;&gt; a little later then and report back. I suppose I should RTFM on how to
</span><br>
<span class="quotelev2">&gt;&gt; properly invoke valgrind so it makes sense with an MPI program?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Paul
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; O&lt; ascii ribbon campaign - stop html mail - www.asciiribbon.org
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<p><p><p><pre>
-- 
O&lt; ascii ribbon campaign - stop html mail - www.asciiribbon.org
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16565.php">Brock Palen: "Re: [OMPI users] btl_openib_cpc_include rdmacm questions"</a>
<li><strong>Previous message:</strong> <a href="16563.php">Jeff Squyres: "Re: [OMPI users] Segfault after malloc()?"</a>
<li><strong>In reply to:</strong> <a href="16563.php">Jeff Squyres: "Re: [OMPI users] Segfault after malloc()?"</a>
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
