<?
$subject_val = "Re: [OMPI devel] IB tests in OSHMEM";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Dec 14 10:49:05 2013" -->
<!-- isoreceived="20131214154905" -->
<!-- sent="Sat, 14 Dec 2013 17:49:04 +0200" -->
<!-- isosent="20131214154904" -->
<!-- name="Mike Dubman" -->
<!-- email="miked_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] IB tests in OSHMEM" -->
<!-- id="CAAO1KyatmOD2nkzNA9a1MVzKTkDy3UOmwtskySC3gvY98Te4VQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="6A51D429-8034-4C50-83CF-C0A9DA41E1FF_at_open-mpi.org" -->
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
<strong>Date:</strong> 2013-12-14 10:49:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13434.php">Ralph Castain: "[OMPI devel] Assigned cpu list"</a>
<li><strong>Previous message:</strong> <a href="13432.php">Ralph Castain: "Re: [OMPI devel] IB tests in OSHMEM"</a>
<li><strong>In reply to:</strong> <a href="13432.php">Ralph Castain: "Re: [OMPI devel] IB tests in OSHMEM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13454.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re:  IB tests in OSHMEM"</a>
<li><strong>Reply:</strong> <a href="13454.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re:  IB tests in OSHMEM"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
ohh.. i see.
<br>
thanks for clarification.
<br>
This is exactly how it is treated in our internal repo based on 1.7 and we
<br>
will push it into trunk soon.
<br>
<p><p>On Sat, Dec 14, 2013 at 5:01 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I think what Brian is saying is that we don't generally link IB libraries
</span><br>
<span class="quotelev1">&gt; into the upper-level library - instead, they are only linked to the
</span><br>
<span class="quotelev1">&gt; specific components that need them. The core code (i.e., non-component)
</span><br>
<span class="quotelev1">&gt; should not be calling anything in IB itself. So anything that specifies
</span><br>
<span class="quotelev1">&gt; &quot;with IB&quot; should be in the .m4 for the component that will use IB.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The oshmem_configure_options.m4 code should be in the top-level config
</span><br>
<span class="quotelev1">&gt; directory.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 14, 2013, at 6:34 AM, Mike Dubman &lt;miked_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; In our internal oshmem v1.7 based branch it is
</span><br>
<span class="quotelev1">&gt; in oshmem/config/oshmem_configure_options.m4 and not in
</span><br>
<span class="quotelev1">&gt; config/oshmem_configure_options.m4
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
<span class="quotelev1">&gt; On Fri, Dec 13, 2013 at 11:21 PM, Barrett, Brian W &lt;bwbarre_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Mellanox -
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In cleaning up some code, I noticed that the OSHMEM_SETUP_CFLAGS test is
</span><br>
<span class="quotelev2">&gt;&gt; testing for infiniband libraries and then linking them into the OSHMEM
</span><br>
<span class="quotelev2">&gt;&gt; library.  This is fairly different than what we do for the MPI layer; is
</span><br>
<span class="quotelev2">&gt;&gt; there a reason those tests are in the top-level configure and not in a
</span><br>
<span class="quotelev2">&gt;&gt; component's configure test?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brian
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt;   Brian W. Barrett
</span><br>
<span class="quotelev2">&gt;&gt;   Scalable System Software Group
</span><br>
<span class="quotelev2">&gt;&gt;   Sandia National Laboratories
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13433/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13434.php">Ralph Castain: "[OMPI devel] Assigned cpu list"</a>
<li><strong>Previous message:</strong> <a href="13432.php">Ralph Castain: "Re: [OMPI devel] IB tests in OSHMEM"</a>
<li><strong>In reply to:</strong> <a href="13432.php">Ralph Castain: "Re: [OMPI devel] IB tests in OSHMEM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13454.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re:  IB tests in OSHMEM"</a>
<li><strong>Reply:</strong> <a href="13454.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re:  IB tests in OSHMEM"</a>
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
