<?
$subject_val = "Re: [OMPI devel] Warnings from pgcc-13.10";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 17 11:56:44 2014" -->
<!-- isoreceived="20140117165644" -->
<!-- sent="Fri, 17 Jan 2014 08:56:38 -0800" -->
<!-- isosent="20140117165638" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Warnings from pgcc-13.10" -->
<!-- id="8D894860-6F9D-4683-8503-559805E26507_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAvDA162njbVg_gGvd-kjYfA95pzAQfNEmPx+eb3aux0Wx2R7Q_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Warnings from pgcc-13.10<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-17 11:56:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13789.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] RFC: async modex"</a>
<li><strong>Previous message:</strong> <a href="13787.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Paul's testing summary"</a>
<li><strong>In reply to:</strong> <a href="13783.php">Paul Hargrove: "[OMPI devel] Warnings from pgcc-13.10"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13790.php">Larry Baker: "Re: [OMPI devel] Warnings from pgcc-13.10"</a>
<li><strong>Reply:</strong> <a href="13790.php">Larry Baker: "Re: [OMPI devel] Warnings from pgcc-13.10"</a>
<li><strong>Reply:</strong> <a href="13791.php">Paul Hargrove: "Re: [OMPI devel] Warnings from pgcc-13.10"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Paul
<br>
<p>Looking at these, I'm a tad puzzled. It would appear that PGI is complaining about the fixed string being passed in the last three cases as there is no (const char*)foo being used in those areas. Yet we use that same logic elsewhere and your report isn't showing those as warnings.
<br>
<p>Do you think it is the fixed string that is the issue - or is it the (const char*) variable we need to recast?
<br>
<p><p>On Jan 16, 2014, at 11:24 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; My builds of the trunk with pgcc-13.10 turned up the following warnings:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; PGC-W-0095-Type cast required for this conversion (/scratch/scratchdirs/hargrove/OMPI/openmpi-trunk-linux-x86_64-pgi-13.10/openmpi-1.9a1r30302/opal/mca/db/hash/db_hash.c: 354)
</span><br>
<span class="quotelev1">&gt; PGC-W-0095-Type cast required for this conversion (/scratch/scratchdirs/hargrove/OMPI/openmpi-trunk-linux-x86_64-pgi-13.10/openmpi-1.9a1r30302/opal/mca/db/hash/db_hash.c: 376)
</span><br>
<span class="quotelev1">&gt; PGC-W-0095-Type cast required for this conversion (/scratch/scratchdirs/hargrove/OMPI/openmpi-trunk-linux-x86_64-pgi-13.10/openmpi-1.9a1r30302/opal/mca/db/hash/db_hash.c: 452)
</span><br>
<span class="quotelev1">&gt; PGC-W-0095-Type cast required for this conversion (/scratch/scratchdirs/hargrove/OMPI/openmpi-trunk-linux-x86_64-pgi-13.10/openmpi-1.9a1r30302/opal/mca/db/hash/db_hash.c: 534)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; PGC-W-0095-Type cast required for this conversion (/scratch/scratchdirs/hargrove/OMPI/openmpi-trunk-linux-x86_64-pgi-13.10/openmpi-1.9a1r30302/orte/mca/state/base/state_base_fns.c: 766)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; PGC-W-0095-Type cast required for this conversion (/scratch/scratchdirs/hargrove/OMPI/openmpi-trunk-linux-x86_64-pgi-13.10/openmpi-1.9a1r30302/orte/mca/plm/rsh/plm_rsh_component.c: 368)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; PGC-W-0095-Type cast required for this conversion (/scratch/scratchdirs/hargrove/OMPI/openmpi-trunk-linux-x86_64-pgi-13.10/openmpi-1.9a1r30302/orte/mca/plm/rsh/plm_rsh_module.c: 1337)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I believe all of these are related to passing a (const char *) to OPAL_OUTPUT_VERBOSE().
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13788/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13789.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] RFC: async modex"</a>
<li><strong>Previous message:</strong> <a href="13787.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Paul's testing summary"</a>
<li><strong>In reply to:</strong> <a href="13783.php">Paul Hargrove: "[OMPI devel] Warnings from pgcc-13.10"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13790.php">Larry Baker: "Re: [OMPI devel] Warnings from pgcc-13.10"</a>
<li><strong>Reply:</strong> <a href="13790.php">Larry Baker: "Re: [OMPI devel] Warnings from pgcc-13.10"</a>
<li><strong>Reply:</strong> <a href="13791.php">Paul Hargrove: "Re: [OMPI devel] Warnings from pgcc-13.10"</a>
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
