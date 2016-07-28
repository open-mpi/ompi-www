<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Oct 11 15:04:21 2007" -->
<!-- isoreceived="20071011190421" -->
<!-- sent="Fri, 12 Oct 2007 00:34:16 +0530" -->
<!-- isosent="20071011190416" -->
<!-- name="Amit Kumar Saha" -->
<!-- email="amitsaha.in_at_[hidden]" -->
<!-- subject="Re: [OMPI docs] Where to start?" -->
<!-- id="547db2260710111204i4ed811f3rff24e949779842da_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="470C05C8.3010209_at_sun.com" -->
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
<strong>From:</strong> Amit Kumar Saha (<em>amitsaha.in_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-11 15:04:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0064.php">Amit Kumar Saha: "[OMPI docs] License Submission"</a>
<li><strong>Previous message:</strong> <a href="0062.php">Richard Friedman: "[OMPI docs] Where to start?"</a>
<li><strong>In reply to:</strong> <a href="0062.php">Richard Friedman: "[OMPI docs] Where to start?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0068.php">Jeff Squyres: "Re: [OMPI docs] Where to start?"</a>
<li><strong>Reply:</strong> <a href="0068.php">Jeff Squyres: "Re: [OMPI docs] Where to start?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Richard,
<br>
<p>On 10/10/07, Richard Friedman &lt;rchrd_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Sorry for the lack of postings recently.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  But I have had the opportunity to look at the documentation support for
</span><br>
<span class="quotelev1">&gt; some of the other MPI distributions. In particular, the LAM/MPI
</span><br>
<span class="quotelev1">&gt; documentation seems the most interesting so far.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  <a href="http://www.lam-mpi.org/using/docs/">http://www.lam-mpi.org/using/docs/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  They provide a User Guide
</span><br>
<span class="quotelev1">&gt; <a href="http://www.lam-mpi.org/download/files/7.1.4-user.pdf">http://www.lam-mpi.org/download/files/7.1.4-user.pdf</a>
</span><br>
<span class="quotelev1">&gt;  an Installation Guide
</span><br>
<span class="quotelev1">&gt; <a href="http://www.lam-mpi.org/download/files/7.1.4-install.pdf">http://www.lam-mpi.org/download/files/7.1.4-install.pdf</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  and a number of internal API guides.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  The User Guide chapters include
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Release Notes
</span><br>
<span class="quotelev1">&gt; Getting Started
</span><br>
<span class="quotelev1">&gt; Supported MPI Functionality
</span><br>
<span class="quotelev1">&gt; System Services Interface Overview (is there an Open MPI equivalent?)
</span><br>
<span class="quotelev1">&gt; Command-line Quick Reference
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Information about internal modules
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Debugging with TotalView and other debuggers
</span><br>
<span class="quotelev1">&gt; Troubleshooting
</span><br>
<span class="quotelev1">&gt; Misc details The whole thing, in pdf is about 120 pages.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  How close does this outline fit into Open MPI? How much internal details
</span><br>
<span class="quotelev1">&gt; would be useful to users?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  They also have some LAM/MPI specific tutorials at
</span><br>
<span class="quotelev1">&gt;  <a href="http://www.lam-mpi.org/tutorials/">http://www.lam-mpi.org/tutorials/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  All of this looks like an interesting model to follow.
</span><br>
<span class="quotelev1">&gt;  Comments?
</span><br>
<p>This seems a reasonable model to follow, basically because it
<br>
addresses the problem of learning to use MPI from scratch - right from
<br>
installation to debugging.
<br>
<p>I think we can split the docs into sections.
<br>
<p>One section should target end-users - ranging from newbies, to power users.
<br>
<p>Another section could be for developers, parallel programming
<br>
researchers- Internal details of the Open MPI can be a part of this
<br>
section and will be best done with some help from the Open MPI
<br>
developers.
<br>
<p>--Amit
<br>
<pre>
-- 
Amit Kumar Saha
*NetBeans Community Docs Coordinator*
me blogs@ <a href="http://amitksaha.blogspot.com">http://amitksaha.blogspot.com</a>
URL:<a href="http://amitsaha.in.googlepages.com">http://amitsaha.in.googlepages.com</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0064.php">Amit Kumar Saha: "[OMPI docs] License Submission"</a>
<li><strong>Previous message:</strong> <a href="0062.php">Richard Friedman: "[OMPI docs] Where to start?"</a>
<li><strong>In reply to:</strong> <a href="0062.php">Richard Friedman: "[OMPI docs] Where to start?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0068.php">Jeff Squyres: "Re: [OMPI docs] Where to start?"</a>
<li><strong>Reply:</strong> <a href="0068.php">Jeff Squyres: "Re: [OMPI docs] Where to start?"</a>
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
