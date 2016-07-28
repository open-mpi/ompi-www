<?
$subject_val = "Re: [OMPI devel] Trunk build problem";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 28 09:43:39 2012" -->
<!-- isoreceived="20120228144339" -->
<!-- sent="Tue, 28 Feb 2012 08:43:35 -0600" -->
<!-- isosent="20120228144335" -->
<!-- name="Edgar Gabriel" -->
<!-- email="gabriel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Trunk build problem" -->
<!-- id="4F4CE817.7010209_at_cs.uh.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4F4CE6B1.5060906_at_cs.uh.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Trunk build problem<br>
<strong>From:</strong> Edgar Gabriel (<em>gabriel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-28 09:43:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10631.php">Ralph Castain: "Re: [OMPI devel] Trunk build problem"</a>
<li><strong>Previous message:</strong> <a href="10629.php">Edgar Gabriel: "Re: [OMPI devel] Trunk build problem"</a>
<li><strong>In reply to:</strong> <a href="10629.php">Edgar Gabriel: "Re: [OMPI devel] Trunk build problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10631.php">Ralph Castain: "Re: [OMPI devel] Trunk build problem"</a>
<li><strong>Reply:</strong> <a href="10631.php">Ralph Castain: "Re: [OMPI devel] Trunk build problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
sorry, should be fixed with the last commit...
<br>
<p>Thanks
<br>
Edgar
<br>
<p>On 2/28/2012 8:37 AM, Edgar Gabriel wrote:
<br>
<span class="quotelev1">&gt; I'll look into this...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Edgar
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 2/28/2012 8:36 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I tried to build the trunk this morning on a machine where the fcoll framework could build and hit this:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mca/fcoll/dynamic/.libs/libmca_fcoll_dynamic.a(fcoll_dynamic_file_write_all.o): In function `local_heap_sort':
</span><br>
<span class="quotelev2">&gt;&gt; /users/rcastain/openmpi-1.7a1/ompi/mca/fcoll/dynamic/fcoll_dynamic_file_write_all.c:1111: multiple definition of `local_heap_sort'
</span><br>
<span class="quotelev2">&gt;&gt; mca/fcoll/static/.libs/libmca_fcoll_static.a(fcoll_static_file_write_all.o):/users/rcastain/openmpi-1.7a1/ompi/mca/fcoll/static/fcoll_static_file_write_all.c:929: first defined here
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any suggestions?
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
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
<p><pre>
-- 
Edgar Gabriel
Associate Professor
Parallel Software Technologies Lab      <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
Department of Computer Science          University of Houston
Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
Tel: +1 (713) 743-3857                  Fax: +1 (713) 743-3335

</pre>
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10630/signature.asc">OpenPGP digital signature</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10631.php">Ralph Castain: "Re: [OMPI devel] Trunk build problem"</a>
<li><strong>Previous message:</strong> <a href="10629.php">Edgar Gabriel: "Re: [OMPI devel] Trunk build problem"</a>
<li><strong>In reply to:</strong> <a href="10629.php">Edgar Gabriel: "Re: [OMPI devel] Trunk build problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10631.php">Ralph Castain: "Re: [OMPI devel] Trunk build problem"</a>
<li><strong>Reply:</strong> <a href="10631.php">Ralph Castain: "Re: [OMPI devel] Trunk build problem"</a>
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
