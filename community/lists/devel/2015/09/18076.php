<?
$subject_val = "Re: [OMPI devel] PMIX vs Solaris";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 18 02:13:05 2015" -->
<!-- isoreceived="20150918061305" -->
<!-- sent="Thu, 17 Sep 2015 23:13:00 -0700" -->
<!-- isosent="20150918061300" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] PMIX vs Solaris" -->
<!-- id="CAAvDA16XoPt6uVa+csCG_kLpbSOyk1Yo4jEGN2ctKwXrtXkGxw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="55FBA87F.3040309_at_rist.or.jp" -->
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
<strong>Subject:</strong> Re: [OMPI devel] PMIX vs Solaris<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-18 02:13:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18077.php">Ralph Castain: "Re: [OMPI devel] PMIX vs Solaris"</a>
<li><strong>Previous message:</strong> <a href="18075.php">Gilles Gouaillardet: "Re: [OMPI devel] PMIX vs Solaris"</a>
<li><strong>In reply to:</strong> <a href="18075.php">Gilles Gouaillardet: "Re: [OMPI devel] PMIX vs Solaris"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18077.php">Ralph Castain: "Re: [OMPI devel] PMIX vs Solaris"</a>
<li><strong>Reply:</strong> <a href="18077.php">Ralph Castain: "Re: [OMPI devel] PMIX vs Solaris"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Any suggestion how I (as a non-root user) can avoid seeing this hwloc error
<br>
message on every run?
<br>
<p>-Paul
<br>
<p>On Thu, Sep 17, 2015 at 11:00 PM, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Paul,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; IIRC, the &quot;Permission denied&quot; is coming from hwloc that cannot collect all
</span><br>
<span class="quotelev1">&gt; the info it would like.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 9/18/2015 2:34 PM, Paul Hargrove wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tried tonight's master tarball on Solaris 11.2 on x86-64 with the Studio
</span><br>
<span class="quotelev1">&gt; Compilers  (default ILP32 output) and saw the following result
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ mpirun -mca btl sm,self -np 2 examples/ring_c'
</span><br>
<span class="quotelev1">&gt; Error opening /devices/pci_at_0,0:reg: Permission denied
</span><br>
<span class="quotelev1">&gt; [pcp-d-4:00492] PMIX ERROR: ERROR in file
</span><br>
<span class="quotelev1">&gt; /export/home/phargrov/OMPI/openmpi-master-solaris11-x86-ss12u3/openmpi-dev-2559-g567c9e3/opal/mca/pmix/pmix1xx/pmix/src/client/pmix_client.c
</span><br>
<span class="quotelev1">&gt; at line 181
</span><br>
<span class="quotelev1">&gt; [pcp-d-4:00491] PMIX ERROR: UNREACHABLE in file
</span><br>
<span class="quotelev1">&gt; /export/home/phargrov/OMPI/openmpi-master-solaris11-x86-ss12u3/openmpi-dev-2559-g567c9e3/opal/mca/pmix/pmix1xx/pmix/src/server/pmix_server_listener.c
</span><br>
<span class="quotelev1">&gt; at line 463
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't know if the Permission denied error is related to the subsequent
</span><br>
<span class="quotelev1">&gt; PMIX errors, but any message that says &quot;UNREACHABLE&quot; is clearly worth
</span><br>
<span class="quotelev1">&gt; reporting.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                           &lt;PHHargrove_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev1">&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing listdevel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/09/18074.php">http://www.open-mpi.org/community/lists/devel/2015/09/18074.php</a>
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/09/18075.php">http://www.open-mpi.org/community/lists/devel/2015/09/18075.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18076/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18077.php">Ralph Castain: "Re: [OMPI devel] PMIX vs Solaris"</a>
<li><strong>Previous message:</strong> <a href="18075.php">Gilles Gouaillardet: "Re: [OMPI devel] PMIX vs Solaris"</a>
<li><strong>In reply to:</strong> <a href="18075.php">Gilles Gouaillardet: "Re: [OMPI devel] PMIX vs Solaris"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18077.php">Ralph Castain: "Re: [OMPI devel] PMIX vs Solaris"</a>
<li><strong>Reply:</strong> <a href="18077.php">Ralph Castain: "Re: [OMPI devel] PMIX vs Solaris"</a>
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
