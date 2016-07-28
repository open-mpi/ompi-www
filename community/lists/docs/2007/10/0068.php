<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct 24 17:00:57 2007" -->
<!-- isoreceived="20071024210057" -->
<!-- sent="Wed, 24 Oct 2007 17:00:46 -0400" -->
<!-- isosent="20071024210046" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI docs] Where to start?" -->
<!-- id="10D7A793-BA1B-4892-A8BD-E5F1722DC80D_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="547db2260710111204i4ed811f3rff24e949779842da_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-24 17:00:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0069.php">Jeff Squyres: "Re: [OMPI docs] ICLA posted"</a>
<li><strong>Previous message:</strong> <a href="0067.php">Amit Kumar Saha: "[OMPI docs] ICLA posted"</a>
<li><strong>In reply to:</strong> <a href="0063.php">Amit Kumar Saha: "Re: [OMPI docs] Where to start?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 11, 2007, at 3:04 PM, Amit Kumar Saha wrote:
<br>
<p><span class="quotelev2">&gt;&gt;  But I have had the opportunity to look at the documentation  
</span><br>
<span class="quotelev2">&gt;&gt; support for
</span><br>
<span class="quotelev2">&gt;&gt; some of the other MPI distributions. In particular, the LAM/MPI
</span><br>
<span class="quotelev2">&gt;&gt; documentation seems the most interesting so far.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  <a href="http://www.lam-mpi.org/using/docs/">http://www.lam-mpi.org/using/docs/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  They provide a User Guide
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.lam-mpi.org/download/files/7.1.4-user.pdf">http://www.lam-mpi.org/download/files/7.1.4-user.pdf</a>
</span><br>
<span class="quotelev2">&gt;&gt;  an Installation Guide
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.lam-mpi.org/download/files/7.1.4-install.pdf">http://www.lam-mpi.org/download/files/7.1.4-install.pdf</a>
</span><br>
<p>Heh.  I wrote all of these.  :-)
<br>
<p><span class="quotelev2">&gt;&gt;  and a number of internal API guides.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  The User Guide chapters include
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Release Notes
</span><br>
<span class="quotelev2">&gt;&gt; Getting Started
</span><br>
<span class="quotelev2">&gt;&gt; Supported MPI Functionality
</span><br>
<span class="quotelev2">&gt;&gt; System Services Interface Overview (is there an Open MPI equivalent?)
</span><br>
<span class="quotelev2">&gt;&gt; Command-line Quick Reference
</span><br>
<span class="quotelev2">&gt;&gt; Information about internal modules
</span><br>
<span class="quotelev2">&gt;&gt; Debugging with TotalView and other debuggers
</span><br>
<span class="quotelev2">&gt;&gt; Troubleshooting
</span><br>
<span class="quotelev2">&gt;&gt; Misc details
</span><br>
<p><span class="quotelev2">&gt;&gt; The whole thing, in pdf is about 120 pages.
</span><br>
<p>It took a long time to write.  :-)
<br>
<p><span class="quotelev2">&gt;&gt;  How close does this outline fit into Open MPI? How much internal  
</span><br>
<span class="quotelev2">&gt;&gt; details
</span><br>
<span class="quotelev2">&gt;&gt; would be useful to users?
</span><br>
<p>I think it's a reasonable outline for Open MPI as well -- I think the  
<br>
topics are more-or-less MPI-independent.  And even if they weren't,  
<br>
Open MPI is a direct descendent of LAM/MPI, so the topics are  
<br>
definitely relevant.
<br>
<p>But then again, I'm slightly biased.  ;-)
<br>
<p>We have the LaTeX source for all of those docs if it would be  
<br>
helpful.  I.e., the content can be cut-n-pasted into a new format (I  
<br>
think we all agree that LaTeX is not the way that we want to go for  
<br>
OMPI docs).
<br>
<p><span class="quotelev2">&gt;&gt;  They also have some LAM/MPI specific tutorials at
</span><br>
<span class="quotelev2">&gt;&gt;  <a href="http://www.lam-mpi.org/tutorials/">http://www.lam-mpi.org/tutorials/</a>
</span><br>
<p>Some of these, transmorgified for OMPI, would also be useful.
<br>
<p><span class="quotelev2">&gt;&gt;  All of this looks like an interesting model to follow.
</span><br>
<span class="quotelev2">&gt;&gt;  Comments?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This seems a reasonable model to follow, basically because it
</span><br>
<span class="quotelev1">&gt; addresses the problem of learning to use MPI from scratch - right from
</span><br>
<span class="quotelev1">&gt; installation to debugging.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think we can split the docs into sections.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; One section should target end-users - ranging from newbies, to  
</span><br>
<span class="quotelev1">&gt; power users.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Another section could be for developers, parallel programming
</span><br>
<span class="quotelev1">&gt; researchers- Internal details of the Open MPI can be a part of this
</span><br>
<span class="quotelev1">&gt; section and will be best done with some help from the Open MPI
</span><br>
<span class="quotelev1">&gt; developers.
</span><br>
<p>I'd like to target end-user documentation first.  Once that is  
<br>
significantly under way, then perhaps we can talk about developer  
<br>
documentation.
<br>
<p>Note that by &quot;end user&quot;, I mean the following groups of people:
<br>
<p>- people who build and run MPI applications
<br>
- people who write MPI applications
<br>
- system administrators who install Open MPI
<br>
<p>And by &quot;developer&quot;, I mean:
<br>
<p>- people who develop Open MPI
<br>
<p>More specifically, &quot;people who write MPI applications&quot; is covered in  
<br>
&quot;end user&quot; documentation -- not &quot;developer&quot; documentation.  The  
<br>
distinction is because I do not want to re-hash the MPI standard in  
<br>
Open MPI documentation.
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
<li><strong>Next message:</strong> <a href="0069.php">Jeff Squyres: "Re: [OMPI docs] ICLA posted"</a>
<li><strong>Previous message:</strong> <a href="0067.php">Amit Kumar Saha: "[OMPI docs] ICLA posted"</a>
<li><strong>In reply to:</strong> <a href="0063.php">Amit Kumar Saha: "Re: [OMPI docs] Where to start?"</a>
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
