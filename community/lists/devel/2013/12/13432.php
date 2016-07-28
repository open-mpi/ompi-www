<?
$subject_val = "Re: [OMPI devel] IB tests in OSHMEM";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Dec 14 10:01:25 2013" -->
<!-- isoreceived="20131214150125" -->
<!-- sent="Sat, 14 Dec 2013 07:01:21 -0800" -->
<!-- isosent="20131214150121" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] IB tests in OSHMEM" -->
<!-- id="6A51D429-8034-4C50-83CF-C0A9DA41E1FF_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAO1Kya67v7BbuL2sSkP=-nohwrPv8g0mjN+Vbvte8eM33wRqg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] IB tests in OSHMEM<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-14 10:01:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13433.php">Mike Dubman: "Re: [OMPI devel] IB tests in OSHMEM"</a>
<li><strong>Previous message:</strong> <a href="13431.php">Mike Dubman: "Re: [OMPI devel] IB tests in OSHMEM"</a>
<li><strong>In reply to:</strong> <a href="13431.php">Mike Dubman: "Re: [OMPI devel] IB tests in OSHMEM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13433.php">Mike Dubman: "Re: [OMPI devel] IB tests in OSHMEM"</a>
<li><strong>Reply:</strong> <a href="13433.php">Mike Dubman: "Re: [OMPI devel] IB tests in OSHMEM"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think what Brian is saying is that we don't generally link IB libraries into the upper-level library - instead, they are only linked to the specific components that need them. The core code (i.e., non-component) should not be calling anything in IB itself. So anything that specifies &quot;with IB&quot; should be in the .m4 for the component that will use IB.
<br>
<p>The oshmem_configure_options.m4 code should be in the top-level config directory.
<br>
<p>On Dec 14, 2013, at 6:34 AM, Mike Dubman &lt;miked_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; In our internal oshmem v1.7 based branch it is in oshmem/config/oshmem_configure_options.m4 and not in config/oshmem_configure_options.m4
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is that a way to go to have it under oshmem/config?
</span><br>
<span class="quotelev1">&gt; Will check why it is missing.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; M
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, Dec 13, 2013 at 11:21 PM, Barrett, Brian W &lt;bwbarre_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Mellanox -
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In cleaning up some code, I noticed that the OSHMEM_SETUP_CFLAGS test is
</span><br>
<span class="quotelev1">&gt; testing for infiniband libraries and then linking them into the OSHMEM
</span><br>
<span class="quotelev1">&gt; library.  This is fairly different than what we do for the MPI layer; is
</span><br>
<span class="quotelev1">&gt; there a reason those tests are in the top-level configure and not in a
</span><br>
<span class="quotelev1">&gt; component's configure test?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;   Brian W. Barrett
</span><br>
<span class="quotelev1">&gt;   Scalable System Software Group
</span><br>
<span class="quotelev1">&gt;   Sandia National Laboratories
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13432/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13433.php">Mike Dubman: "Re: [OMPI devel] IB tests in OSHMEM"</a>
<li><strong>Previous message:</strong> <a href="13431.php">Mike Dubman: "Re: [OMPI devel] IB tests in OSHMEM"</a>
<li><strong>In reply to:</strong> <a href="13431.php">Mike Dubman: "Re: [OMPI devel] IB tests in OSHMEM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13433.php">Mike Dubman: "Re: [OMPI devel] IB tests in OSHMEM"</a>
<li><strong>Reply:</strong> <a href="13433.php">Mike Dubman: "Re: [OMPI devel] IB tests in OSHMEM"</a>
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
