<?
$subject_val = "Re: [OMPI devel] DDT and spawn issue?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 15 12:00:56 2009" -->
<!-- isoreceived="20090715160056" -->
<!-- sent="Wed, 15 Jul 2009 10:00:49 -0600" -->
<!-- isosent="20090715160049" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] DDT and spawn issue?" -->
<!-- id="71d2d8cc0907150900u3d914bc1u774bb10a82bbaaa8_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="41503449-D0C9-4E26-81EB-E4AACA8988FC_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] DDT and spawn issue?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-15 12:00:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6427.php">Rainer Keller: "Re: [OMPI devel] DDT and spawn issue?"</a>
<li><strong>Previous message:</strong> <a href="6425.php">George Bosilca: "Re: [OMPI devel] DDT and spawn issue?"</a>
<li><strong>In reply to:</strong> <a href="6425.php">George Bosilca: "Re: [OMPI devel] DDT and spawn issue?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6427.php">Rainer Keller: "Re: [OMPI devel] DDT and spawn issue?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks George!!
<br>
<p>On Wed, Jul 15, 2009 at 9:57 AM, George Bosilca &lt;bosilca_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; Yes, this appears to be at least partially part of the problem Edgar is
</span><br>
<span class="quotelev1">&gt; seeing. We're trying to figure out how most of the tests passed so far with
</span><br>
<span class="quotelev1">&gt; a wrong mapping. Interesting enough, while the mapping seems wrong the
</span><br>
<span class="quotelev1">&gt; lookup is symmetric so most of the time we end-up with the correct op by
</span><br>
<span class="quotelev1">&gt; pure luck.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We're looking into this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 15, 2009, at 11:50 , Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I [very briefly] read about the DDT spawn issues, so I went to look at
</span><br>
<span class="quotelev2">&gt;&gt; ompi/op/op.c.  I notice that there's a new comment above the op
</span><br>
<span class="quotelev2">&gt;&gt; datatype&lt;--&gt;op map construction area that says:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   /* XXX TODO */
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; svn blame says:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 21641   rusraink     /* XXX TODO */
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; r21641 is the big merge from the past weekend where the DDT split came in.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Has this area been looked at and the comment is out of date?  Or does it
</span><br>
<span class="quotelev2">&gt;&gt; need to be updated with new mappings?  (I honestly have not looked any
</span><br>
<span class="quotelev2">&gt;&gt; farther than this -- the new comment caught my eye)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-6426/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6427.php">Rainer Keller: "Re: [OMPI devel] DDT and spawn issue?"</a>
<li><strong>Previous message:</strong> <a href="6425.php">George Bosilca: "Re: [OMPI devel] DDT and spawn issue?"</a>
<li><strong>In reply to:</strong> <a href="6425.php">George Bosilca: "Re: [OMPI devel] DDT and spawn issue?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6427.php">Rainer Keller: "Re: [OMPI devel] DDT and spawn issue?"</a>
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
