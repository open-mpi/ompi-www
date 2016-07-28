<?
$subject_val = "Re: [OMPI devel] sbgp problem";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 30 15:44:21 2012" -->
<!-- isoreceived="20121030194421" -->
<!-- sent="Tue, 30 Oct 2012 14:44:22 -0500" -->
<!-- isosent="20121030194422" -->
<!-- name="Edgar Gabriel" -->
<!-- email="gabriel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] sbgp problem" -->
<!-- id="50902E16.8040509_at_cs.uh.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="DBA695F5-5766-4073-B146-FAF465A69C23_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] sbgp problem<br>
<strong>From:</strong> Edgar Gabriel (<em>gabriel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-30 15:44:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11683.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27451 - in trunk: ompi/mca/allocator/bucket ompi/mca/bcol/basesmuma	ompi/mca/bml/base ompi/mca/btl ompi/mca/btl/base	ompi/mca/btl/openib ompi/mca/btl/sm ompi/mca/btl/smcuda	ompi/mca/btl/template ompi/mca/btl/va..."</a>
<li><strong>Previous message:</strong> <a href="11681.php">Ralph Castain: "Re: [OMPI devel] 1.7 rc4 compilation error"</a>
<li><strong>In reply to:</strong> <a href="11680.php">Ralph Castain: "Re: [OMPI devel] sbgp problem"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
as far as I can tell right now, yes, its the final thing...
<br>
<p>Thanks
<br>
Edgar
<br>
<p>On 10/30/2012 2:05 PM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Grrrrrr....bloody verb @##$@$.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Okay, I'll make that edit. Is that the last thing required to fix this problem?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Oct 30, 2012, at 11:57 AM, Edgar Gabriel &lt;gabriel_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; so the sbgp problem that I mentioned on the call this morning
</span><br>
<span class="quotelev2">&gt;&gt; unfortunately is not resolved by just adding the common/verbs directory
</span><br>
<span class="quotelev2">&gt;&gt; into the 1.7 branch.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We looked a bit into it, and the problem/difference between in the file
</span><br>
<span class="quotelev2">&gt;&gt; ompi/sbgp/ibnet/sbgp_ibnet_component.c which has the following include
</span><br>
<span class="quotelev2">&gt;&gt; statement:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/common/ofautils/common_ofautils.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The same file on trunk includes however
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/common/verbs/common_verbs.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If I make this change in the 1.7, things compile properly, otherwise we
</span><br>
<span class="quotelev2">&gt;&gt; still have the error message
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; bgp_ibnet_component.c: In function 'ibnet_load_devices':
</span><br>
<span class="quotelev2">&gt;&gt; sbgp_ibnet_component.c:527:5: error: implicit declaration of function
</span><br>
<span class="quotelev2">&gt;&gt; 'ompi_ibv_get_device_list'
</span><br>
<span class="quotelev2">&gt;&gt; sbgp_ibnet_component.c:527:13: warning: assignment makes pointer from
</span><br>
<span class="quotelev2">&gt;&gt; integer without a cast
</span><br>
<span class="quotelev2">&gt;&gt; sbgp_ibnet_component.c:553:5: error: implicit declaration of function
</span><br>
<span class="quotelev2">&gt;&gt; 'ompi_ibv_free_device_list'
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: *** [sbgp_ibnet_component.lo] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: *** Waiting for unfinished jobs....
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; Edgar
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Edgar Gabriel
</span><br>
<span class="quotelev2">&gt;&gt; Associate Professor
</span><br>
<span class="quotelev2">&gt;&gt; Parallel Software Technologies Lab      <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
</span><br>
<span class="quotelev2">&gt;&gt; Department of Computer Science          University of Houston
</span><br>
<span class="quotelev2">&gt;&gt; Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
</span><br>
<span class="quotelev2">&gt;&gt; Tel: +1 (713) 743-3857                  Fax: +1 (713) 743-3335
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
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11682/signature.asc">OpenPGP digital signature</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11683.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r27451 - in trunk: ompi/mca/allocator/bucket ompi/mca/bcol/basesmuma	ompi/mca/bml/base ompi/mca/btl ompi/mca/btl/base	ompi/mca/btl/openib ompi/mca/btl/sm ompi/mca/btl/smcuda	ompi/mca/btl/template ompi/mca/btl/va..."</a>
<li><strong>Previous message:</strong> <a href="11681.php">Ralph Castain: "Re: [OMPI devel] 1.7 rc4 compilation error"</a>
<li><strong>In reply to:</strong> <a href="11680.php">Ralph Castain: "Re: [OMPI devel] sbgp problem"</a>
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
