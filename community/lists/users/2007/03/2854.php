<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Mar 20 20:57:37 2007" -->
<!-- isoreceived="20070321005737" -->
<!-- sent="Tue, 20 Mar 2007 20:57:21 -0400" -->
<!-- isosent="20070321005721" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] multithreading support" -->
<!-- id="B3C1B097-2FC7-46D4-9667-C4C8BE2D0CEA_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1c16cdf90703152235xfc164a0v5e14f72bc0b4ece0_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2007-03-20 20:57:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2855.php">Mike Houston: "Re: [OMPI users] Issues with Get/Put and IRecv"</a>
<li><strong>Previous message:</strong> <a href="2853.php">Jeff Squyres: "Re: [OMPI users] Signal 13"</a>
<li><strong>In reply to:</strong> <a href="2813.php">Chevchenkovic Chevchenkovic: "[OMPI users] multithreading support"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 16, 2007, at 1:35 AM, Chevchenkovic Chevchenkovic wrote:
<br>
<p><span class="quotelev1">&gt;  Could someone let me know about the status of multithread support in
</span><br>
<span class="quotelev1">&gt; openMPI and MVAPICH. I  got some details about MVAPICH which says that
</span><br>
<span class="quotelev1">&gt; it is supported for MVAPICH2 but I am not sure of the same for
</span><br>
<span class="quotelev1">&gt; openMPI.
</span><br>
<p>Open MPI's threading support is &quot;light testing&quot;, at best.  In  
<br>
reality, it probably will not work.  Threading support was designed  
<br>
into the system from the beginning, but we have not really got around  
<br>
to debugging / testing it yet.  It is possible that we will do so  
<br>
over the next few months; a few of the Open MPI member organizations  
<br>
indicated that they will be working on threading support for the v1.3  
<br>
series (probably towards the end of this year -- v1.3 is very much in  
<br>
the planning/definition stage at this point).
<br>
<p>We cannot really comment on MVAPICH2 here; it's an entirely different  
<br>
software project.  You'll probably want to post to their mailing list  
<br>
to get an answer.
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
<li><strong>Next message:</strong> <a href="2855.php">Mike Houston: "Re: [OMPI users] Issues with Get/Put and IRecv"</a>
<li><strong>Previous message:</strong> <a href="2853.php">Jeff Squyres: "Re: [OMPI users] Signal 13"</a>
<li><strong>In reply to:</strong> <a href="2813.php">Chevchenkovic Chevchenkovic: "[OMPI users] multithreading support"</a>
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
