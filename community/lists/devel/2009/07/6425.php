<?
$subject_val = "Re: [OMPI devel] DDT and spawn issue?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 15 11:57:19 2009" -->
<!-- isoreceived="20090715155719" -->
<!-- sent="Wed, 15 Jul 2009 11:57:09 -0400" -->
<!-- isosent="20090715155709" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] DDT and spawn issue?" -->
<!-- id="41503449-D0C9-4E26-81EB-E4AACA8988FC_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="D2063199-4268-4E01-ADF8-F4CA6034D0E2_at_cisco.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-15 11:57:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6426.php">Ralph Castain: "Re: [OMPI devel] DDT and spawn issue?"</a>
<li><strong>Previous message:</strong> <a href="6424.php">Jeff Squyres: "[OMPI devel] DDT and spawn issue?"</a>
<li><strong>In reply to:</strong> <a href="6424.php">Jeff Squyres: "[OMPI devel] DDT and spawn issue?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6426.php">Ralph Castain: "Re: [OMPI devel] DDT and spawn issue?"</a>
<li><strong>Reply:</strong> <a href="6426.php">Ralph Castain: "Re: [OMPI devel] DDT and spawn issue?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, this appears to be at least partially part of the problem Edgar  
<br>
is seeing. We're trying to figure out how most of the tests passed so  
<br>
far with a wrong mapping. Interesting enough, while the mapping seems  
<br>
wrong the lookup is symmetric so most of the time we end-up with the  
<br>
correct op by pure luck.
<br>
<p>We're looking into this.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Jul 15, 2009, at 11:50 , Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; I [very briefly] read about the DDT spawn issues, so I went to look  
</span><br>
<span class="quotelev1">&gt; at ompi/op/op.c.  I notice that there's a new comment above the op  
</span><br>
<span class="quotelev1">&gt; datatype&lt;--&gt;op map construction area that says:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    /* XXX TODO */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; svn blame says:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 21641   rusraink     /* XXX TODO */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; r21641 is the big merge from the past weekend where the DDT split  
</span><br>
<span class="quotelev1">&gt; came in.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Has this area been looked at and the comment is out of date?  Or  
</span><br>
<span class="quotelev1">&gt; does it need to be updated with new mappings?  (I honestly have not  
</span><br>
<span class="quotelev1">&gt; looked any farther than this -- the new comment caught my eye)
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6426.php">Ralph Castain: "Re: [OMPI devel] DDT and spawn issue?"</a>
<li><strong>Previous message:</strong> <a href="6424.php">Jeff Squyres: "[OMPI devel] DDT and spawn issue?"</a>
<li><strong>In reply to:</strong> <a href="6424.php">Jeff Squyres: "[OMPI devel] DDT and spawn issue?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6426.php">Ralph Castain: "Re: [OMPI devel] DDT and spawn issue?"</a>
<li><strong>Reply:</strong> <a href="6426.php">Ralph Castain: "Re: [OMPI devel] DDT and spawn issue?"</a>
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
