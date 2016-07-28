<?
$subject_val = "Re: [OMPI devel] .ompi_info dependency files";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  7 23:34:57 2015" -->
<!-- isoreceived="20150408033457" -->
<!-- sent="Tue, 7 Apr 2015 23:34:55 -0400" -->
<!-- isosent="20150408033455" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] .ompi_info dependency files" -->
<!-- id="CAMJJpkWokwcUZfsxGWFxriLrtC5TtQfpPd-C1zHJ6jqNh7hUTg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="20150407174137.GB1063_at_pn1246003.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] .ompi_info dependency files<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-07 23:34:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17197.php">Paul Hargrove: "Re: [OMPI devel] 1.8.5rc1 is ready for testing"</a>
<li><strong>Previous message:</strong> <a href="17195.php">Ralph Castain: "Re: [OMPI devel] 1.8.5rc1 is ready for testing"</a>
<li><strong>In reply to:</strong> <a href="17191.php">Nathan Hjelm: "[OMPI devel] .ompi_info dependency files"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It is a vestige from a epoch where our shared library symbols were loaded
<br>
in the RTLD_GLOBAL mode. I support your proposal to scrap it out.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p>On Tue, Apr 7, 2015 at 1:41 PM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am working on rewriting some of the MCA component open code to delay
</span><br>
<span class="quotelev1">&gt; dlclose until opal_util_finalize () and I ran into something
</span><br>
<span class="quotelev1">&gt; interesting. Open MPI supports component dependency files ending in
</span><br>
<span class="quotelev1">&gt; .ompi_info. These files can be used to describe dependencies between mca
</span><br>
<span class="quotelev1">&gt; components. This feature seems to be a break in the MCA abstration. I
</span><br>
<span class="quotelev1">&gt; could, for example, make mca_btl_vader.so &quot;depend&quot; on components in
</span><br>
<span class="quotelev1">&gt; ompi (like mca_osc_pt2pt.so).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What is the history of the .ompi_info dependency file format? Can we
</span><br>
<span class="quotelev1">&gt; remove support for it? It would greatly simplify the code in
</span><br>
<span class="quotelev1">&gt; mca_base_component_find.c.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/04/17191.php">http://www.open-mpi.org/community/lists/devel/2015/04/17191.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17196/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17197.php">Paul Hargrove: "Re: [OMPI devel] 1.8.5rc1 is ready for testing"</a>
<li><strong>Previous message:</strong> <a href="17195.php">Ralph Castain: "Re: [OMPI devel] 1.8.5rc1 is ready for testing"</a>
<li><strong>In reply to:</strong> <a href="17191.php">Nathan Hjelm: "[OMPI devel] .ompi_info dependency files"</a>
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
