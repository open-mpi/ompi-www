<?
$subject_val = "Re: [OMPI devel] 1.7.4rc: mpirun hangs on ia64";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 22 04:38:26 2014" -->
<!-- isoreceived="20140122093826" -->
<!-- sent="Wed, 22 Jan 2014 01:38:24 -0800" -->
<!-- isosent="20140122093824" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.7.4rc: mpirun hangs on ia64" -->
<!-- id="CAAvDA15W2on+B_OCPVE+1sQWuCSzeQ9rArF2EpTVtTs30hQyxg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAAvDA14iup5h==iSXVFf5C=9y2JZxBg-Ry8VHAU7RqAO+-0ibw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.7.4rc: mpirun hangs on ia64<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-22 04:38:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13838.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc: mpirun hangs on ia64"</a>
<li><strong>Previous message:</strong> <a href="13836.php">Paul Hargrove: "[OMPI devel] 1.7.4rc: mpirun hangs on ia64"</a>
<li><strong>In reply to:</strong> <a href="13836.php">Paul Hargrove: "[OMPI devel] 1.7.4rc: mpirun hangs on ia64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13838.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc: mpirun hangs on ia64"</a>
<li><strong>Reply:</strong> <a href="13838.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc: mpirun hangs on ia64"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Following-up as promised:
<br>
<p>Output from an --enable-debug build is attached.
<br>
<p>-Paul
<br>
<p><p>On Tue, Jan 21, 2014 at 11:25 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Yes, this is familiar. See:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2013/11/13182.php">http://www.open-mpi.org/community/lists/devel/2013/11/13182.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I understand correctly, the thread ended with:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 03 December 2013, Sylvestre Ledru wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; FYI, Debian has stopped supporting ia64 for its next release....
</span><br>
<span class="quotelev2">&gt;&gt; So, I stopped working on that issue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Well, I have access to a Linux/IA64 system and my trials with
</span><br>
<span class="quotelev1">&gt; openmpi-1.7.4rc2r30361 appear to hang, much as Sylvestre had reported w/
</span><br>
<span class="quotelev1">&gt; 1.6.5.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am atatching output from a build W/O --enable debug for the command:
</span><br>
<span class="quotelev1">&gt; $ mpirun -mca plm_base_verbose 5 -mca ras_base_verbose 5 -mca
</span><br>
<span class="quotelev1">&gt; rmaps_base_verbose 5 -mca ess_base_verbose 5 -np 1 ./ring_c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I will follow-up with an --enable-debug build when possible.
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13837/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-bzip2 attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13837/log.txt.bz2">log.txt.bz2</a>
</ul>
<!-- attachment="log.txt.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13838.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc: mpirun hangs on ia64"</a>
<li><strong>Previous message:</strong> <a href="13836.php">Paul Hargrove: "[OMPI devel] 1.7.4rc: mpirun hangs on ia64"</a>
<li><strong>In reply to:</strong> <a href="13836.php">Paul Hargrove: "[OMPI devel] 1.7.4rc: mpirun hangs on ia64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13838.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc: mpirun hangs on ia64"</a>
<li><strong>Reply:</strong> <a href="13838.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc: mpirun hangs on ia64"</a>
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
