<?
$subject_val = "Re: [OMPI devel] Warnings from pgcc-13.10";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 17 14:28:13 2014" -->
<!-- isoreceived="20140117192813" -->
<!-- sent="Fri, 17 Jan 2014 11:28:12 -0800" -->
<!-- isosent="20140117192812" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Warnings from pgcc-13.10" -->
<!-- id="CAAvDA17Bdea7N2pp4khBZOcrTf5TgAk9oW1me4_OnhLiuPzYpg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-17 14:28:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13792.php">Larry Baker: "Re: [OMPI devel] Warnings from pgcc-13.10"</a>
<li><strong>Previous message:</strong> <a href="13790.php">Larry Baker: "Re: [OMPI devel] Warnings from pgcc-13.10"</a>
<li><strong>In reply to:</strong> <a href="13788.php">Ralph Castain: "Re: [OMPI devel] Warnings from pgcc-13.10"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13792.php">Larry Baker: "Re: [OMPI devel] Warnings from pgcc-13.10"</a>
<li><strong>Reply:</strong> <a href="13792.php">Larry Baker: "Re: [OMPI devel] Warnings from pgcc-13.10"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>You are probably right that the string literals are a likely cause (type
<br>
char[] ? ).
<br>
I will poke at this a bit by adding (char *) casts to see which argument(s)
<br>
are actually the cause and get back to you.
<br>
<p>-Paul
<br>
<p><p>On Fri, Jan 17, 2014 at 8:56 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Looking at these, I'm a tad puzzled. It would appear that PGI is
</span><br>
<span class="quotelev1">&gt; complaining about the fixed string being passed in the last three cases as
</span><br>
<span class="quotelev1">&gt; there is no (const char*)foo being used in those areas. Yet we use that
</span><br>
<span class="quotelev1">&gt; same logic elsewhere and your report isn't showing those as warnings.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do you think it is the fixed string that is the issue - or is it the
</span><br>
<span class="quotelev1">&gt; (const char*) variable we need to recast?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 16, 2014, at 11:24 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My builds of the trunk with pgcc-13.10 turned up the following warnings:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PGC-W-0095-Type cast required for this conversion
</span><br>
<span class="quotelev1">&gt; (/scratch/scratchdirs/hargrove/OMPI/openmpi-trunk-linux-x86_64-pgi-13.10/openmpi-1.9a1r30302/opal/mca/db/hash/db_hash.c:
</span><br>
<span class="quotelev1">&gt; 354)
</span><br>
<span class="quotelev1">&gt; PGC-W-0095-Type cast required for this conversion
</span><br>
<span class="quotelev1">&gt; (/scratch/scratchdirs/hargrove/OMPI/openmpi-trunk-linux-x86_64-pgi-13.10/openmpi-1.9a1r30302/opal/mca/db/hash/db_hash.c:
</span><br>
<span class="quotelev1">&gt; 376)
</span><br>
<span class="quotelev1">&gt; PGC-W-0095-Type cast required for this conversion
</span><br>
<span class="quotelev1">&gt; (/scratch/scratchdirs/hargrove/OMPI/openmpi-trunk-linux-x86_64-pgi-13.10/openmpi-1.9a1r30302/opal/mca/db/hash/db_hash.c:
</span><br>
<span class="quotelev1">&gt; 452)
</span><br>
<span class="quotelev1">&gt; PGC-W-0095-Type cast required for this conversion
</span><br>
<span class="quotelev1">&gt; (/scratch/scratchdirs/hargrove/OMPI/openmpi-trunk-linux-x86_64-pgi-13.10/openmpi-1.9a1r30302/opal/mca/db/hash/db_hash.c:
</span><br>
<span class="quotelev1">&gt; 534)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PGC-W-0095-Type cast required for this conversion
</span><br>
<span class="quotelev1">&gt; (/scratch/scratchdirs/hargrove/OMPI/openmpi-trunk-linux-x86_64-pgi-13.10/openmpi-1.9a1r30302/orte/mca/state/base/state_base_fns.c:
</span><br>
<span class="quotelev1">&gt; 766)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PGC-W-0095-Type cast required for this conversion
</span><br>
<span class="quotelev1">&gt; (/scratch/scratchdirs/hargrove/OMPI/openmpi-trunk-linux-x86_64-pgi-13.10/openmpi-1.9a1r30302/orte/mca/plm/rsh/plm_rsh_component.c:
</span><br>
<span class="quotelev1">&gt; 368)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PGC-W-0095-Type cast required for this conversion
</span><br>
<span class="quotelev1">&gt; (/scratch/scratchdirs/hargrove/OMPI/openmpi-trunk-linux-x86_64-pgi-13.10/openmpi-1.9a1r30302/orte/mca/plm/rsh/plm_rsh_module.c:
</span><br>
<span class="quotelev1">&gt; 1337)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I believe all of these are related to passing a (const char *) to
</span><br>
<span class="quotelev1">&gt; OPAL_OUTPUT_VERBOSE().
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
<span class="quotelev1">&gt;  _______________________________________________
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
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13791/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13792.php">Larry Baker: "Re: [OMPI devel] Warnings from pgcc-13.10"</a>
<li><strong>Previous message:</strong> <a href="13790.php">Larry Baker: "Re: [OMPI devel] Warnings from pgcc-13.10"</a>
<li><strong>In reply to:</strong> <a href="13788.php">Ralph Castain: "Re: [OMPI devel] Warnings from pgcc-13.10"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13792.php">Larry Baker: "Re: [OMPI devel] Warnings from pgcc-13.10"</a>
<li><strong>Reply:</strong> <a href="13792.php">Larry Baker: "Re: [OMPI devel] Warnings from pgcc-13.10"</a>
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
