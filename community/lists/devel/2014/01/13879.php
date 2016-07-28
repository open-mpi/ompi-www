<?
$subject_val = "Re: [OMPI devel] trunk and v1.7: xlc and lost atomics patch";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 23 10:48:57 2014" -->
<!-- isoreceived="20140123154857" -->
<!-- sent="Thu, 23 Jan 2014 07:48:10 -0800" -->
<!-- isosent="20140123154810" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trunk and v1.7: xlc and lost atomics patch" -->
<!-- id="876858F8-3C97-40B2-B2EB-C759F70A42A5_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAvDA15qyOXcwn5Dbc_34wK7rbomyLuNJ_Gz7ueymVVMb9ucEw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] trunk and v1.7: xlc and lost atomics patch<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-23 10:48:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13880.php">Ralph Castain: "Re: [OMPI devel] [PATCH] make orte-checkpoint communicate with orterun again"</a>
<li><strong>Previous message:</strong> <a href="13878.php">Nathan Hjelm: "Re: [OMPI devel] build failure in trunk"</a>
<li><strong>In reply to:</strong> <a href="13867.php">Paul Hargrove: "[OMPI devel] trunk and v1.7: xlc and lost atomics patch"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sigh - no idea how that patch went into the 1.6 series without first entering the trunk. Thanks so much for tracking it down!
<br>
<p>Now in the trunk and cmr'd for 1.7.4
<br>
<p>On Jan 22, 2014, at 9:23 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Testing the trunk w/ xlc-11.1 on a linux/ppc64 system I see two failures from &quot;make check&quot;.  Specifically the atomic_cmpset and atomic_spinlock tests both get segfaults.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is an issue I first reported against 1.5.5rc2 and v1.6.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It appears that ticket 3040 was opened at the time of my original report, and my patch (attached to the ticket) was applied to v1.6 as r26226.  HOWEVER, the patch never seems to have made into trunk at the time; and thus is not in either v1.7 or trunk today.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Though the ticket indicates (and my testing today confirms) that xlc-11 will botch the atomic both with and without the patch, there *are* versions of xlc which only generate correct atomics with the patch applied.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So, please CMR r26226 from v1.6 to v1.7(.5?) and trunk.
</span><br>
<span class="quotelev1">&gt; The patch still applies cleanly (offset of 1 line).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13879/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13880.php">Ralph Castain: "Re: [OMPI devel] [PATCH] make orte-checkpoint communicate with orterun again"</a>
<li><strong>Previous message:</strong> <a href="13878.php">Nathan Hjelm: "Re: [OMPI devel] build failure in trunk"</a>
<li><strong>In reply to:</strong> <a href="13867.php">Paul Hargrove: "[OMPI devel] trunk and v1.7: xlc and lost atomics patch"</a>
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
