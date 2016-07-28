<?
$subject_val = "Re: [OMPI devel] Warnings from pgcc-13.10";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 17 14:00:50 2014" -->
<!-- isoreceived="20140117190050" -->
<!-- sent="Fri, 17 Jan 2014 11:00:36 -0800" -->
<!-- isosent="20140117190036" -->
<!-- name="Larry Baker" -->
<!-- email="baker_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Warnings from pgcc-13.10" -->
<!-- id="CD75A5D2-833C-4208-9D8B-EF0A81166F6B_at_usgs.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="8D894860-6F9D-4683-8503-559805E26507_at_open-mpi.org" -->
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
<strong>From:</strong> Larry Baker (<em>baker_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-17 14:00:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13791.php">Paul Hargrove: "Re: [OMPI devel] Warnings from pgcc-13.10"</a>
<li><strong>Previous message:</strong> <a href="13789.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] RFC: async modex"</a>
<li><strong>In reply to:</strong> <a href="13788.php">Ralph Castain: "Re: [OMPI devel] Warnings from pgcc-13.10"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13791.php">Paul Hargrove: "Re: [OMPI devel] Warnings from pgcc-13.10"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Paul, Ralph,
<br>
<p>I had several issues in 2010 with with PGI pgcc being overly picky about type mismatches.  Attached are my e-mails from that time.  I was working on NetCDF and OpenMPI.  In the OpenMPI report (17 Aug 2010), I found problems in conditional expressions.  The last e-mail in the thread from PGI said they fixed the bugs in the 12.10 release.  But, that e-mail (14 Dec 2012) only cites TPRs 17185 and 17186, not my earlier TPR 17139.  I have not revisited these issues since then, so I don't know if that old bug is still around and is what is biting you.
<br>
<p>Larry Baker
<br>
US Geological Survey
<br>
650-329-5608
<br>
baker_at_[hidden]
<br>
<p><p><p>On 17 Jan 2014, at 8:56 AM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Hi Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Looking at these, I'm a tad puzzled. It would appear that PGI is complaining about the fixed string being passed in the last three cases as there is no (const char*)foo being used in those areas. Yet we use that same logic elsewhere and your report isn't showing those as warnings.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Do you think it is the fixed string that is the issue - or is it the (const char*) variable we need to recast?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jan 16, 2014, at 11:24 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; My builds of the trunk with pgcc-13.10 turned up the following warnings:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; PGC-W-0095-Type cast required for this conversion (/scratch/scratchdirs/hargrove/OMPI/openmpi-trunk-linux-x86_64-pgi-13.10/openmpi-1.9a1r30302/opal/mca/db/hash/db_hash.c: 354)
</span><br>
<span class="quotelev2">&gt;&gt; PGC-W-0095-Type cast required for this conversion (/scratch/scratchdirs/hargrove/OMPI/openmpi-trunk-linux-x86_64-pgi-13.10/openmpi-1.9a1r30302/opal/mca/db/hash/db_hash.c: 376)
</span><br>
<span class="quotelev2">&gt;&gt; PGC-W-0095-Type cast required for this conversion (/scratch/scratchdirs/hargrove/OMPI/openmpi-trunk-linux-x86_64-pgi-13.10/openmpi-1.9a1r30302/opal/mca/db/hash/db_hash.c: 452)
</span><br>
<span class="quotelev2">&gt;&gt; PGC-W-0095-Type cast required for this conversion (/scratch/scratchdirs/hargrove/OMPI/openmpi-trunk-linux-x86_64-pgi-13.10/openmpi-1.9a1r30302/opal/mca/db/hash/db_hash.c: 534)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; PGC-W-0095-Type cast required for this conversion (/scratch/scratchdirs/hargrove/OMPI/openmpi-trunk-linux-x86_64-pgi-13.10/openmpi-1.9a1r30302/orte/mca/state/base/state_base_fns.c: 766)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; PGC-W-0095-Type cast required for this conversion (/scratch/scratchdirs/hargrove/OMPI/openmpi-trunk-linux-x86_64-pgi-13.10/openmpi-1.9a1r30302/orte/mca/plm/rsh/plm_rsh_component.c: 368)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; PGC-W-0095-Type cast required for this conversion (/scratch/scratchdirs/hargrove/OMPI/openmpi-trunk-linux-x86_64-pgi-13.10/openmpi-1.9a1r30302/orte/mca/plm/rsh/plm_rsh_module.c: 1337)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I believe all of these are related to passing a (const char *) to OPAL_OUTPUT_VERBOSE().
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -Paul 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Future Technologies Group
</span><br>
<span class="quotelev2">&gt;&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev2">&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13790/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>message/rfc822 attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13790/pgcc_overly_picky_about_type_mismatch_.eml">pgcc_overly_picky_about_type_mismatch_.eml</a>
</ul>
<!-- attachment="pgcc_overly_picky_about_type_mismatch_.eml" -->
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13790/03-attachment">attachment</a>
</ul>
<!-- attachment="03-attachment" -->
<hr>
<ul>
<li>message/rfc822 attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13790/Re:_pgcc_overly_picky_about_type_mismatch_.eml">Re:_pgcc_overly_picky_about_type_mismatch_.eml</a>
</ul>
<!-- attachment="Re:_pgcc_overly_picky_about_type_mismatch_.eml" -->
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13790/05-attachment">attachment</a>
</ul>
<!-- attachment="05-attachment" -->
<hr>
<ul>
<li>message/rfc822 attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13790/06-Re:_pgcc_overly_picky_about_type_mismatch_.eml">Re:_pgcc_overly_picky_about_type_mismatch_.eml</a>
</ul>
<!-- attachment="06-Re:_pgcc_overly_picky_about_type_mismatch_.eml" -->
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13790/07-attachment">attachment</a>
</ul>
<!-- attachment="07-attachment" -->
<hr>
<ul>
<li>message/rfc822 attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13790/08-Re:_pgcc_overly_picky_about_type_mismatch_.eml">Re:_pgcc_overly_picky_about_type_mismatch_.eml</a>
</ul>
<!-- attachment="08-Re:_pgcc_overly_picky_about_type_mismatch_.eml" -->
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13790/09-attachment">attachment</a>
</ul>
<!-- attachment="09-attachment" -->
<hr>
<ul>
<li>message/rfc822 attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13790/10-Re:_pgcc_overly_picky_about_type_mismatch_.eml">Re:_pgcc_overly_picky_about_type_mismatch_.eml</a>
</ul>
<!-- attachment="10-Re:_pgcc_overly_picky_about_type_mismatch_.eml" -->
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13790/11-attachment">attachment</a>
</ul>
<!-- attachment="11-attachment" -->
<hr>
<ul>
<li>message/rfc822 attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13790/12-Re:_pgcc_overly_picky_about_type_mismatch_.eml">Re:_pgcc_overly_picky_about_type_mismatch_.eml</a>
</ul>
<!-- attachment="12-Re:_pgcc_overly_picky_about_type_mismatch_.eml" -->
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13790/13-attachment">attachment</a>
</ul>
<!-- attachment="13-attachment" -->
<hr>
<ul>
<li>message/rfc822 attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13790/14-Re:_pgcc_overly_picky_about_type_mismatch_.eml">Re:_pgcc_overly_picky_about_type_mismatch_.eml</a>
</ul>
<!-- attachment="14-Re:_pgcc_overly_picky_about_type_mismatch_.eml" -->
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13790/15-attachment">attachment</a>
</ul>
<!-- attachment="15-attachment" -->
<hr>
<ul>
<li>message/rfc822 attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13790/16-Re:_pgcc_overly_picky_about_type_mismatch_.eml">Re:_pgcc_overly_picky_about_type_mismatch_.eml</a>
</ul>
<!-- attachment="16-Re:_pgcc_overly_picky_about_type_mismatch_.eml" -->
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13790/17-attachment">attachment</a>
</ul>
<!-- attachment="17-attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13791.php">Paul Hargrove: "Re: [OMPI devel] Warnings from pgcc-13.10"</a>
<li><strong>Previous message:</strong> <a href="13789.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] RFC: async modex"</a>
<li><strong>In reply to:</strong> <a href="13788.php">Ralph Castain: "Re: [OMPI devel] Warnings from pgcc-13.10"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13791.php">Paul Hargrove: "Re: [OMPI devel] Warnings from pgcc-13.10"</a>
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
