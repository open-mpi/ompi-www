<?
$subject_val = "Re: [OMPI users] Sending an objects vector via MPI C++";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  7 08:10:02 2010" -->
<!-- isoreceived="20100707121002" -->
<!-- sent="Wed, 7 Jul 2010 08:10:12 -0400" -->
<!-- isosent="20100707121012" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Sending an objects vector via MPI C++" -->
<!-- id="D2CD1936-C889-441F-A84B-A7899A39B186_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTilSQ5i-h30lHlcoNyaBcsDAEvPxHT9mxd8wodlw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Sending an objects vector via MPI C++<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-07 08:10:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13495.php">Grzegorz Maj: "[OMPI users] MPI_Init failing in singleton"</a>
<li><strong>Previous message:</strong> <a href="13493.php">Jeff Squyres: "Re: [OMPI users] OpenMPI Hangs, No Error"</a>
<li><strong>In reply to:</strong> <a href="13492.php">Saygin Arkan: "[OMPI users] Sending an objects vector via MPI C++"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You might want to look at the Boost.mpi project.  They wrote some nice C++ wrappers around MPI to handle things like STL vectors, etc.
<br>
<p><p>On Jul 7, 2010, at 5:07 AM, Saygin Arkan wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm a newbie on MPI, just playing around with the things.
</span><br>
<span class="quotelev1">&gt; I've searched through the internet but couldn't find an appropriate code example for my problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm making comparisons, correlations on my cluster, and gaining the results like this:
</span><br>
<span class="quotelev1">&gt; vector&lt;ComparisonResult&gt; results;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In every node, they calculate and create the results array, in their local storage.
</span><br>
<span class="quotelev1">&gt; And then I'd like to collect these vectors in my server node, rank (0).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I had done this with MPI gather but just for double arrays, not with objects or vectors.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have some guess about MPI::Create_contiguous, or MPI::Create_vector functions,
</span><br>
<span class="quotelev1">&gt; but all these ask for another associated MPI type, such as CHAR or INT or etc.
</span><br>
<span class="quotelev1">&gt; And I don't know if I should use packing somehow...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; is there a way to collect these vectors in my server node with Gather function?
</span><br>
<span class="quotelev1">&gt; or even with send &amp; recv?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks a lot, 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Saygin _______________________________________________
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
<li><strong>Next message:</strong> <a href="13495.php">Grzegorz Maj: "[OMPI users] MPI_Init failing in singleton"</a>
<li><strong>Previous message:</strong> <a href="13493.php">Jeff Squyres: "Re: [OMPI users] OpenMPI Hangs, No Error"</a>
<li><strong>In reply to:</strong> <a href="13492.php">Saygin Arkan: "[OMPI users] Sending an objects vector via MPI C++"</a>
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
