<?
$subject_val = "Re: [OMPI devel] Amateur Guidance";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  3 10:53:36 2008" -->
<!-- isoreceived="20081103155336" -->
<!-- sent="Mon, 03 Nov 2008 10:53:31 -0400" -->
<!-- isosent="20081103145331" -->
<!-- name="Shipman, Galen M." -->
<!-- email="gshipman_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Amateur Guidance" -->
<!-- id="C53488AB.955D%gshipman_at_ornl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="490F1B35.8010406_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Amateur Guidance<br>
<strong>From:</strong> Shipman, Galen M. (<em>gshipman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-03 09:53:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4844.php">Leonardo Fialho: "[OMPI devel] Error after ompi-restart"</a>
<li><strong>Previous message:</strong> <a href="4842.php">Eugene Loh: "Re: [OMPI devel] Amateur Guidance"</a>
<li><strong>In reply to:</strong> <a href="4842.php">Eugene Loh: "Re: [OMPI devel] Amateur Guidance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4845.php">Jeff Squyres: "Re: [OMPI devel] Amateur Guidance"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The TEG paper is woefully out of date, we don't use that interface anymore.
<br>
<p>Try the following for dated, but more relevant info:
<br>
<p><a href="http://www.open-mpi.org/papers/euro-pvmmpi-2006-hpc-protocols">http://www.open-mpi.org/papers/euro-pvmmpi-2006-hpc-protocols</a>
<br>
<p><a href="http://www.open-mpi.org/papers/workshop-2006/wed_01_pt2pt.pdf">http://www.open-mpi.org/papers/workshop-2006/wed_01_pt2pt.pdf</a>
<br>
<p><p>These cover the point-to-point infrastructure which has changed in some ways
<br>
but not dramatically.
<br>
<p>There are quite a few other areas covered here:
<br>
<p><a href="http://www.open-mpi.org/papers/workshop-2006/">http://www.open-mpi.org/papers/workshop-2006/</a>
<br>
<p><p>Happy Hunting.. 
<br>
<p>- Galen 
<br>
<p><p><p>On 11/3/08 11:39 AM, &quot;Eugene Loh&quot; &lt;Eugene.Loh_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Timothy Hayes wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I'm a regular OpenMPI user but I'm new to the strange world of development
</span><br>
<span class="quotelev2">&gt;&gt; and 
</span><br>
<span class="quotelev2">&gt;&gt; hence this mailing list. I'm currently working on a project that involves
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI and I was wondering if I might get some guidance and pointers in the
</span><br>
<span class="quotelev2">&gt;&gt; right direction.
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; The problem I'm having is jumping into the OpenMPI code. I've read two papers
</span><br>
<span class="quotelev2">&gt;&gt; I found on the homepage: &quot;Open MPI: Goals, Concept, and Design of a Next
</span><br>
<span class="quotelev2">&gt;&gt; Generation MPI Implementation&quot; and &quot;TEG: A High-Performance, Scalable,
</span><br>
<span class="quotelev2">&gt;&gt; Multi-Network Point-to-Point Communications Methodology&quot; which gave me some
</span><br>
<span class="quotelev2">&gt;&gt; insight about the MCA, PML and PTL. However, I'm finding it quite difficult
</span><br>
<span class="quotelev2">&gt;&gt; to 
</span><br>
<span class="quotelev2">&gt;&gt; get a foothold into the codebase and I'm wondering if anyone might be able to
</span><br>
<span class="quotelev2">&gt;&gt; point me to a guide or some documentation that might help get me started.
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm very eager to do this project well and contribute to the OpenMPI
</span><br>
<span class="quotelev2">&gt;&gt; community, and if anyone has some advice or pointers I'd really appreciate
</span><br>
<span class="quotelev2">&gt;&gt; it.
</span><br>
<span class="quotelev1">&gt; I'm no expert.  Indeed, I'm quite the opposite.  I started looking at OMPI a
</span><br>
<span class="quotelev1">&gt; few months ago.  As a newbie, I'd say:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There seems to be no really great docs here for developers.  You just need to
</span><br>
<span class="quotelev1">&gt; start reading source code, asking questions, stepping through with a debugger,
</span><br>
<span class="quotelev1">&gt; etc., and immerse yourself for a while ... a few months?  This is a little
</span><br>
<span class="quotelev1">&gt; frustrating since one of the objectives of OMPI is to provide a framework in
</span><br>
<span class="quotelev1">&gt; which a researcher should be able to modify only one component and do
</span><br>
<span class="quotelev1">&gt; something interesting.  Meanwhile, there is no good description of what the
</span><br>
<span class="quotelev1">&gt; interfaces are among the various components nor what they all really do.  And,
</span><br>
<span class="quotelev1">&gt; you do kind of need an understanding of what other pieces are doing and what
</span><br>
<span class="quotelev1">&gt; your component is supposed to do.  So, instead of just reading up on one
</span><br>
<span class="quotelev1">&gt; component and writing it, you end up having to study a big body of source
</span><br>
<span class="quotelev1">&gt; code, reverse engineering a number of its parts, and then try implementing the
</span><br>
<span class="quotelev1">&gt; piece you're interested in playing with.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I do have a bunch of notes I've accumulated that could theoretically help
</span><br>
<span class="quotelev1">&gt; someone else who is trying to learn the same things I am.  My focus has been
</span><br>
<span class="quotelev1">&gt; on the sm BTL, so might not be 100% of interest to you. I've walked through
</span><br>
<span class="quotelev1">&gt; and found the code paths of interest to me, expanded data structures, done
</span><br>
<span class="quotelev1">&gt; some analysis, etc.  I guess I should try to clean these notes up for other
</span><br>
<span class="quotelev1">&gt; people and share them.  There are lots of pointers in there to source code so
</span><br>
<span class="quotelev1">&gt; one can look at the notes and click to see the relevant source code.  These
</span><br>
<span class="quotelev1">&gt; notes are invaluable to me (and the product of 3 buckets full of blood, sweat,
</span><br>
<span class="quotelev1">&gt; and tears), but again reflect my own interests.  The pointers to the source
</span><br>
<span class="quotelev1">&gt; code use OpenGrok -- <a href="http://opensolaris.org/os/project/opengrok/">http://opensolaris.org/os/project/opengrok/</a> -- but you
</span><br>
<span class="quotelev1">&gt; may have your own favorite tools.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Main answer: no great docs to look at.  I think I've asked some OMPI experts
</span><br>
<span class="quotelev1">&gt; and that was basically the answer they gave me.
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4844.php">Leonardo Fialho: "[OMPI devel] Error after ompi-restart"</a>
<li><strong>Previous message:</strong> <a href="4842.php">Eugene Loh: "Re: [OMPI devel] Amateur Guidance"</a>
<li><strong>In reply to:</strong> <a href="4842.php">Eugene Loh: "Re: [OMPI devel] Amateur Guidance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4845.php">Jeff Squyres: "Re: [OMPI devel] Amateur Guidance"</a>
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
