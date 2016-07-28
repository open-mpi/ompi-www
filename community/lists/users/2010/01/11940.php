<?
$subject_val = "Re: [OMPI users] speed up this problem by MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 29 11:11:07 2010" -->
<!-- isoreceived="20100129161107" -->
<!-- sent="Fri, 29 Jan 2010 08:11:02 -0800 (PST)" -->
<!-- isosent="20100129161102" -->
<!-- name="Tim" -->
<!-- email="timlee126_at_[hidden]" -->
<!-- subject="Re: [OMPI users] speed up this problem by MPI" -->
<!-- id="751496.27932.qm_at_web63104.mail.re1.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4B630776.3060200_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] speed up this problem by MPI<br>
<strong>From:</strong> Tim (<em>timlee126_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-29 11:11:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11941.php">Richard Treumann: "Re: [OMPI users] speed up this problem by MPI"</a>
<li><strong>Previous message:</strong> <a href="11939.php">Eugene Loh: "Re: [OMPI users] speed up this problem by MPI"</a>
<li><strong>In reply to:</strong> <a href="11939.php">Eugene Loh: "Re: [OMPI users] speed up this problem by MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11941.php">Richard Treumann: "Re: [OMPI users] speed up this problem by MPI"</a>
<li><strong>Reply:</strong> <a href="11941.php">Richard Treumann: "Re: [OMPI users] speed up this problem by MPI"</a>
<li><strong>Reply:</strong> <a href="11942.php">Eugene Loh: "Re: [OMPI users] speed up this problem by MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
By serialization, I mean in the context of data storage and transmission. See <a href="http://en.wikipedia.org/wiki/Serialization">http://en.wikipedia.org/wiki/Serialization</a>
<br>
<p>e.g. in a structure or class, if there is a pointer pointing to some memory outside the structure or class, one has to send the content of the memory besides the structure or class, right?
<br>
<p>--- On Fri, 1/29/10, Eugene Loh &lt;Eugene.Loh_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; From: Eugene Loh &lt;Eugene.Loh_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] speed up this problem by MPI
</span><br>
<span class="quotelev1">&gt; To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date: Friday, January 29, 2010, 11:06 AM
</span><br>
<span class="quotelev1">&gt; Tim wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Sorry, my typo. I meant to say OpenMPI documentation.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; Okay.&#160; &quot;Open (space) MPI&quot; is simply an implementation
</span><br>
<span class="quotelev1">&gt; of the MPI standard -- e.g., <a href="http://www.mpi-forum.org/docs/mpi21-report.pdf">http://www.mpi-forum.org/docs/mpi21-report.pdf</a> .&#160;
</span><br>
<span class="quotelev1">&gt; I imagine an on-line search will turn up a variety of
</span><br>
<span class="quotelev1">&gt; tutorials and explanations of that standard.&#160; But the
</span><br>
<span class="quotelev1">&gt; standard, itself, is somewhat readable.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; How to send/recieve and broadcast objects of
</span><br>
<span class="quotelev1">&gt; self-defined class and of std::vector? If using
</span><br>
<span class="quotelev1">&gt; MPI_Type_struct, the setup becomes complicated if the class
</span><br>
<span class="quotelev1">&gt; has various types of data members, and a data member of
</span><br>
<span class="quotelev1">&gt; another class.
</span><br>
<span class="quotelev2">&gt; &gt;&#160; 
</span><br>
<span class="quotelev1">&gt; I don't really know any C++, but I guess you're looking at
</span><br>
<span class="quotelev1">&gt; it the right way.&#160; That is, use derived MPI data types
</span><br>
<span class="quotelev1">&gt; and &quot;it's complicated&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; How to deal with serialization problems?
</span><br>
<span class="quotelev2">&gt; &gt;&#160; 
</span><br>
<span class="quotelev1">&gt; Which serialization problems?&#160; You seem to have a
</span><br>
<span class="quotelev1">&gt; split/join problem.&#160; The master starts, at some point
</span><br>
<span class="quotelev1">&gt; there is parallel computation, then the masters does more
</span><br>
<span class="quotelev1">&gt; work at the end.
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
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11941.php">Richard Treumann: "Re: [OMPI users] speed up this problem by MPI"</a>
<li><strong>Previous message:</strong> <a href="11939.php">Eugene Loh: "Re: [OMPI users] speed up this problem by MPI"</a>
<li><strong>In reply to:</strong> <a href="11939.php">Eugene Loh: "Re: [OMPI users] speed up this problem by MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11941.php">Richard Treumann: "Re: [OMPI users] speed up this problem by MPI"</a>
<li><strong>Reply:</strong> <a href="11941.php">Richard Treumann: "Re: [OMPI users] speed up this problem by MPI"</a>
<li><strong>Reply:</strong> <a href="11942.php">Eugene Loh: "Re: [OMPI users] speed up this problem by MPI"</a>
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
