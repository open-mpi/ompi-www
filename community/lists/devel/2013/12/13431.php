<?
$subject_val = "Re: [OMPI devel] IB tests in OSHMEM";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Dec 14 09:34:15 2013" -->
<!-- isoreceived="20131214143415" -->
<!-- sent="Sat, 14 Dec 2013 16:34:14 +0200" -->
<!-- isosent="20131214143414" -->
<!-- name="Mike Dubman" -->
<!-- email="miked_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] IB tests in OSHMEM" -->
<!-- id="CAAO1Kya67v7BbuL2sSkP=-nohwrPv8g0mjN+Vbvte8eM33wRqg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CED0D688.165AC%bwbarre_at_sandia.gov" -->
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
<strong>From:</strong> Mike Dubman (<em>miked_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-14 09:34:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13432.php">Ralph Castain: "Re: [OMPI devel] IB tests in OSHMEM"</a>
<li><strong>Previous message:</strong> <a href="13430.php">Siddhartha Jana: "[OMPI devel] Recommended tool to measure packet counters"</a>
<li><strong>In reply to:</strong> <a href="13429.php">Barrett, Brian W: "[OMPI devel] IB tests in OSHMEM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13432.php">Ralph Castain: "Re: [OMPI devel] IB tests in OSHMEM"</a>
<li><strong>Reply:</strong> <a href="13432.php">Ralph Castain: "Re: [OMPI devel] IB tests in OSHMEM"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
In our internal oshmem v1.7 based branch it is
<br>
in oshmem/config/oshmem_configure_options.m4 and not in
<br>
config/oshmem_configure_options.m4
<br>
<p>Is that a way to go to have it under oshmem/config?
<br>
Will check why it is missing.
<br>
<p>Thanks
<br>
M
<br>
<p><p>On Fri, Dec 13, 2013 at 11:21 PM, Barrett, Brian W &lt;bwbarre_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; Mellanox -
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13431/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13432.php">Ralph Castain: "Re: [OMPI devel] IB tests in OSHMEM"</a>
<li><strong>Previous message:</strong> <a href="13430.php">Siddhartha Jana: "[OMPI devel] Recommended tool to measure packet counters"</a>
<li><strong>In reply to:</strong> <a href="13429.php">Barrett, Brian W: "[OMPI devel] IB tests in OSHMEM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13432.php">Ralph Castain: "Re: [OMPI devel] IB tests in OSHMEM"</a>
<li><strong>Reply:</strong> <a href="13432.php">Ralph Castain: "Re: [OMPI devel] IB tests in OSHMEM"</a>
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
