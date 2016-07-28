<?
$subject_val = "Re: [OMPI devel] Warnings in sctp BTL";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 14 09:47:08 2009" -->
<!-- isoreceived="20090514134708" -->
<!-- sent="Thu, 14 May 2009 09:47:02 -0400" -->
<!-- isosent="20090514134702" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Warnings in sctp BTL" -->
<!-- id="E17EF253-DC48-419A-A8DD-F3F5EC1033D7_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="71d2d8cc0905140634r78fa7dc4t684a6a05ad4e12b7_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Warnings in sctp BTL<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-14 09:47:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6020.php">Rainer Keller: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21234"</a>
<li><strong>Previous message:</strong> <a href="6018.php">Rainer Keller: "Re: [OMPI devel] Warnings in sctp BTL"</a>
<li><strong>In reply to:</strong> <a href="6017.php">Ralph Castain: "Re: [OMPI devel] Warnings in sctp BTL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6018.php">Rainer Keller: "Re: [OMPI devel] Warnings in sctp BTL"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, I do.  All of them are on BTL_ERROR lines; I think these came in  
<br>
last night with the opal attribute updates.
<br>
<p>Looking at last night's MTT, those attribute changes turned up a LOT  
<br>
of warnings in various BTLs...  Doh!
<br>
<p><p>On May 14, 2009, at 9:34 AM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; I'm not entirely sure as I'm unclear as to when this component would  
</span><br>
<span class="quotelev1">&gt; attempt to build. I was building the latest trunk on a new (to me)  
</span><br>
<span class="quotelev1">&gt; system last night (Jeff's cluster) when I saw the warnings.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff: have you seen them before on your cluster?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, May 14, 2009 at 7:22 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt;  
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt; On May 14, 2009, at 1:14 AM, Brad Penoff wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; At UBC, we are trying to find a new student who can maintain the SCTP
</span><br>
<span class="quotelev1">&gt; BTL.  Unfortunately, it is has not been maintained since the progress
</span><br>
<span class="quotelev1">&gt; engine overhaul a while ago.  At the moment, this is still on the TODO
</span><br>
<span class="quotelev1">&gt; list.  I hope to get to this myself, if no student is found.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks; that would be most useful.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph -- did these messages come in due to the opal_attribute  
</span><br>
<span class="quotelev1">&gt; changes from last night?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It was my impression that the SCTP BTL wasn't included in any release
</span><br>
<span class="quotelev1">&gt; by default.  I hope that this is still the case....
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Correct; it is .ompi_ignore'd in the v1.3 SVN tree.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="6020.php">Rainer Keller: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21234"</a>
<li><strong>Previous message:</strong> <a href="6018.php">Rainer Keller: "Re: [OMPI devel] Warnings in sctp BTL"</a>
<li><strong>In reply to:</strong> <a href="6017.php">Ralph Castain: "Re: [OMPI devel] Warnings in sctp BTL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6018.php">Rainer Keller: "Re: [OMPI devel] Warnings in sctp BTL"</a>
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
