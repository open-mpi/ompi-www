<?
$subject_val = "Re: [OMPI devel] Warning in fcoll";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 29 16:52:41 2012" -->
<!-- isoreceived="20120529205241" -->
<!-- sent="Tue, 29 May 2012 15:53:11 -0500 (CDT)" -->
<!-- isosent="20120529205311" -->
<!-- name="venkates_at_[hidden]" -->
<!-- email="venkates_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Warning in fcoll" -->
<!-- id="55903.192.55.54.36.1338324791.squirrel_at_mail.cs.uh.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4FC53270.9080800_at_cs.uh.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Warning in fcoll<br>
<strong>From:</strong> <a href="mailto:venkates_at_[hidden]?Subject=Re:%20[OMPI%20devel]%20Warning%20in%20fcoll"><em>venkates_at_[hidden]</em></a><br>
<strong>Date:</strong> 2012-05-29 16:53:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11048.php">Jeff Squyres: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>Previous message:</strong> <a href="11046.php">Edgar Gabriel: "Re: [OMPI devel] Warning in fcoll"</a>
<li><strong>In reply to:</strong> <a href="11046.php">Edgar Gabriel: "Re: [OMPI devel] Warning in fcoll"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think this is one of those local functions I defined. I wanted to
<br>
generalize this for all collective operations, such that its a permanent
<br>
fix. I can do this today.
<br>
<p>Regards,
<br>
Vish
<br>
<span class="quotelev1">&gt; I'll look into this...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Edgar
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 5/29/2012 3:24 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Not entirely sure who this might belong to, but thought I should pass it
</span><br>
<span class="quotelev2">&gt;&gt; along - seen during an optimized build on Linux:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; fcoll_static_file_read_all.c: In function
</span><br>
<span class="quotelev2">&gt;&gt; &#145;mca_fcoll_static_file_read_all&#146;:
</span><br>
<span class="quotelev2">&gt;&gt; fcoll_static_file_read_all.c:74: warning: &#145;sorted_file_offsets&#146; may be
</span><br>
<span class="quotelev2">&gt;&gt; used uninitialized in this function
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Edgar Gabriel
</span><br>
<span class="quotelev1">&gt; Associate Professor
</span><br>
<span class="quotelev1">&gt; Parallel Software Technologies Lab      <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
</span><br>
<span class="quotelev1">&gt; Department of Computer Science          University of Houston
</span><br>
<span class="quotelev1">&gt; Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
</span><br>
<span class="quotelev1">&gt; Tel: +1 (713) 743-3857                  Fax: +1 (713) 743-3335
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
<li><strong>Next message:</strong> <a href="11048.php">Jeff Squyres: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>Previous message:</strong> <a href="11046.php">Edgar Gabriel: "Re: [OMPI devel] Warning in fcoll"</a>
<li><strong>In reply to:</strong> <a href="11046.php">Edgar Gabriel: "Re: [OMPI devel] Warning in fcoll"</a>
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
