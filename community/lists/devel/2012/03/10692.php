<?
$subject_val = "[OMPI devel] MCA BTL Fragment lists";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar  9 08:38:14 2012" -->
<!-- isoreceived="20120309133814" -->
<!-- sent="Fri, 09 Mar 2012 15:38:03 +0200" -->
<!-- isosent="20120309133803" -->
<!-- name="Alex Margolin" -->
<!-- email="alex.margolin_at_[hidden]" -->
<!-- subject="[OMPI devel] MCA BTL Fragment lists" -->
<!-- id="4F5A07BB.9070708_at_mail.huji.ac.il" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] MCA BTL Fragment lists<br>
<strong>From:</strong> Alex Margolin (<em>alex.margolin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-09 08:38:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10693.php">George Bosilca: "Re: [OMPI devel] MCA BTL Fragment lists"</a>
<li><strong>Previous message:</strong> <a href="10691.php">Josh Hursey: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26119"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10693.php">George Bosilca: "Re: [OMPI devel] MCA BTL Fragment lists"</a>
<li><strong>Reply:</strong> <a href="10693.php">George Bosilca: "Re: [OMPI devel] MCA BTL Fragment lists"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I'm implementing a new BTL component, and
<br>
<p>1. I read the TCP code and ran into the three fragment lists:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* free list of fragment descriptors */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_free_list_t tcp_frag_eager;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_free_list_t tcp_frag_max;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_free_list_t tcp_frag_user;
<br>
<p>I've looked it up, and found that the documentation for OpenIB refers to 
<br>
the eager term as (in short) the first chuck of a long message, after 
<br>
which the buffer is registered and in the meanwhile chucks from the end 
<br>
of the buffer (beyond a limit much higher then eager-limit) are sent. I 
<br>
didn't find any references relevant to plain TCP. I'm not sure I 
<br>
understand how this is applicable with TCP (and I've seen it in other 
<br>
components as well). For a long message - why would I treat chucks 
<br>
separately?
<br>
In the TCP BTL code, when the fragment is created - shorter chucks are 
<br>
sent to eager while the rest are sent to max. Where the two lists 
<br>
treated differently?
<br>
<p>Thanks,
<br>
Alex
<br>
<p>P.S. what does the role of mca_btl_*_component_control()?
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10693.php">George Bosilca: "Re: [OMPI devel] MCA BTL Fragment lists"</a>
<li><strong>Previous message:</strong> <a href="10691.php">Josh Hursey: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26119"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10693.php">George Bosilca: "Re: [OMPI devel] MCA BTL Fragment lists"</a>
<li><strong>Reply:</strong> <a href="10693.php">George Bosilca: "Re: [OMPI devel] MCA BTL Fragment lists"</a>
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
