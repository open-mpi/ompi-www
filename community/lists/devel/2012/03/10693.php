<?
$subject_val = "Re: [OMPI devel] MCA BTL Fragment lists";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar  9 09:02:08 2012" -->
<!-- isoreceived="20120309140208" -->
<!-- sent="Fri, 9 Mar 2012 09:02:04 -0500" -->
<!-- isosent="20120309140204" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MCA BTL Fragment lists" -->
<!-- id="F3A2F55C-DA48-44FC-8A0D-4087BA77C67D_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4F5A07BB.9070708_at_mail.huji.ac.il" -->
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
<strong>Subject:</strong> Re: [OMPI devel] MCA BTL Fragment lists<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-09 09:02:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10694.php">Josh Hursey: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26118"</a>
<li><strong>Previous message:</strong> <a href="10692.php">Alex Margolin: "[OMPI devel] MCA BTL Fragment lists"</a>
<li><strong>In reply to:</strong> <a href="10692.php">Alex Margolin: "[OMPI devel] MCA BTL Fragment lists"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 9, 2012, at 08:38 , Alex Margolin wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm implementing a new BTL component, and
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. I read the TCP code and ran into the three fragment lists:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    /* free list of fragment descriptors */
</span><br>
<span class="quotelev1">&gt;    ompi_free_list_t tcp_frag_eager;
</span><br>
<span class="quotelev1">&gt;    ompi_free_list_t tcp_frag_max;
</span><br>
<span class="quotelev1">&gt;    ompi_free_list_t tcp_frag_user;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've looked it up, and found that the documentation for OpenIB refers to the eager term as (in short) the first chuck of a long message, after which the buffer is registered and in the meanwhile chucks from the end of the buffer (beyond a limit much higher then eager-limit) are sent. I didn't find any references relevant to plain TCP. I'm not sure I understand how this is applicable with TCP (and I've seen it in other components as well). For a long message - why would I treat chucks separately?
</span><br>
<p>An eager fragment can be received by the peer eagerly (this means without the corresponding receive posted). This is not the case for larger fragments.
<br>
<p><span class="quotelev1">&gt; In the TCP BTL code, when the fragment is created - shorter chucks are sent to eager while the rest are sent to max. Where the two lists treated differently?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Alex
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; P.S. what does the role of mca_btl_*_component_control()?
</span><br>
<p>Amazing, that's an archeological piece of Open MPI history. Fixed in r26121.
<br>
<p>&nbsp;&nbsp;george.
<br>
<p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10694.php">Josh Hursey: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26118"</a>
<li><strong>Previous message:</strong> <a href="10692.php">Alex Margolin: "[OMPI devel] MCA BTL Fragment lists"</a>
<li><strong>In reply to:</strong> <a href="10692.php">Alex Margolin: "[OMPI devel] MCA BTL Fragment lists"</a>
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
