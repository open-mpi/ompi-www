<?
$subject_val = "Re: [OMPI devel] 1.7.4rc2r30148 run failure NetBSD6-x86";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  9 00:07:02 2014" -->
<!-- isoreceived="20140109050702" -->
<!-- sent="Wed, 8 Jan 2014 21:06:59 -0800" -->
<!-- isosent="20140109050659" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.7.4rc2r30148 run failure NetBSD6-x86" -->
<!-- id="CAAvDA15eyYRqCnH1JKGBJ3kCMKeqeb1n6N2p+yAw1A0BJbKTLw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="11B7D53A-1CA4-495C-8687-5CB9539E7B8A_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.7.4rc2r30148 run failure NetBSD6-x86<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-09 00:06:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13612.php">Paul Hargrove: "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
<li><strong>Previous message:</strong> <a href="13610.php">Paul Hargrove: "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
<li><strong>In reply to:</strong> <a href="13609.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc2r30148 run failure NetBSD6-x86"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13623.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc2r30148 run failure NetBSD6-x86"</a>
<li><strong>Reply:</strong> <a href="13623.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc2r30148 run failure NetBSD6-x86"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Requested verbose output below.
<br>
-Paul
<br>
<p>-bash-4.2$ mpirun -mca ess_base_verbose 10 -np 1 examples/ring_c
<br>
[pcp-j-17:02150] mca: base: components_register: registering ess components
<br>
[pcp-j-17:02150] mca: base: components_register: found loaded component env
<br>
[pcp-j-17:02150] mca: base: components_register: component env has no
<br>
register or open function
<br>
[pcp-j-17:02150] mca: base: components_register: found loaded component hnp
<br>
[pcp-j-17:02150] mca: base: components_register: component hnp has no
<br>
register or open function
<br>
[pcp-j-17:02150] mca: base: components_register: found loaded component
<br>
singleton
<br>
[pcp-j-17:02150] mca: base: components_register: component singleton
<br>
register function successful
<br>
[pcp-j-17:02150] mca: base: components_register: found loaded component tool
<br>
[pcp-j-17:02150] mca: base: components_register: component tool has no
<br>
register or open function
<br>
[pcp-j-17:02150] mca: base: components_open: opening ess components
<br>
[pcp-j-17:02150] mca: base: components_open: found loaded component env
<br>
[pcp-j-17:02150] mca: base: components_open: component env open function
<br>
successful
<br>
[pcp-j-17:02150] mca: base: components_open: found loaded component hnp
<br>
[pcp-j-17:02150] mca: base: components_open: component hnp open function
<br>
successful
<br>
[pcp-j-17:02150] mca: base: components_open: found loaded component
<br>
singleton
<br>
[pcp-j-17:02150] mca: base: components_open: component singleton open
<br>
function successful
<br>
[pcp-j-17:02150] mca: base: components_open: found loaded component tool
<br>
[pcp-j-17:02150] mca: base: components_open: component tool open function
<br>
successful
<br>
[pcp-j-17:02150] mca:base:select: Auto-selecting ess components
<br>
[pcp-j-17:02150] mca:base:select:(  ess) Querying component [env]
<br>
[pcp-j-17:02150] mca:base:select:(  ess) Skipping component [env]. Query
<br>
failed to return a module
<br>
[pcp-j-17:02150] mca:base:select:(  ess) Querying component [hnp]
<br>
[pcp-j-17:02150] mca:base:select:(  ess) Query of component [hnp] set
<br>
priority to 100
<br>
[pcp-j-17:02150] mca:base:select:(  ess) Querying component [singleton]
<br>
[pcp-j-17:02150] mca:base:select:(  ess) Skipping component [singleton].
<br>
Query failed to return a module
<br>
[pcp-j-17:02150] mca:base:select:(  ess) Querying component [tool]
<br>
[pcp-j-17:02150] mca:base:select:(  ess) Skipping component [tool]. Query
<br>
failed to return a module
<br>
[pcp-j-17:02150] mca:base:select:(  ess) Selected component [hnp]
<br>
[pcp-j-17:02150] mca: base: close: component env closed
<br>
[pcp-j-17:02150] mca: base: close: unloading component env
<br>
[pcp-j-17:02150] mca: base: close: component singleton closed
<br>
[pcp-j-17:02150] mca: base: close: unloading component singleton
<br>
[pcp-j-17:02150] mca: base: close: component tool closed
<br>
[pcp-j-17:02150] mca: base: close: unloading component tool
<br>
[pcp-j-17:02150] [[INVALID],INVALID] Topology Info:
<br>
[pcp-j-17:02150] Type: Machine Number of child objects: 2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Name=NULL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Backend=NetBSD
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OSName=NetBSD
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OSRelease=6.1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OSVersion=&quot;NetBSD 6.1 (CUSTOM) #0: Fri Sep 20 13:19:58 PDT 2013
<br>
phargrov_at_pcp-j-17:/home/phargrov/CUSTOM&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Architecture=i386
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Backend=x86
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cpuset:  0x00000003
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Online:  0x00000003
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Allowed: 0x00000003
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bind CPU proc:   TRUE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bind CPU thread: TRUE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bind MEM proc:   FALSE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bind MEM thread: FALSE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Type: PU Number of child objects: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Name=NULL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cpuset:  0x00000001
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Online:  0x00000001
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Allowed: 0x00000001
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Type: PU Number of child objects: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Name=NULL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cpuset:  0x00000002
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Online:  0x00000002
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Allowed: 0x00000002
<br>
--------------------------------------------------------------------------
<br>
While computing bindings, we found no available cpus on
<br>
the following node:
<br>
<p>&nbsp;&nbsp;Node:  pcp-j-17
<br>
<p>Please check your allocation.
<br>
--------------------------------------------------------------------------
<br>
[pcp-j-17:02150] mca: base: close: component hnp closed
<br>
[pcp-j-17:02150] mca: base: close: unloading component hnp
<br>
<p><p><p>On Wed, Jan 8, 2014 at 8:50 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hmmm...looks to me like the code should protect against this - unless the
</span><br>
<span class="quotelev1">&gt; system isn't correctly reporting binding support. Could you run this with
</span><br>
<span class="quotelev1">&gt; &quot;-mca ess_base_verbose 10&quot;? This will output the topology we found,
</span><br>
<span class="quotelev1">&gt; including the binding support (which isn't in the usual output).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 8, 2014, at 8:14 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hmmm...I see the problem. Looks like binding isn't supported on that
</span><br>
<span class="quotelev1">&gt; system for some reason, so we need to turn &quot;off&quot; our auto-binding when we
</span><br>
<span class="quotelev1">&gt; hit that condition. I'll check to see why that isn't happening (was
</span><br>
<span class="quotelev1">&gt; supposed to do so)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 8, 2014, at 3:43 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; While I have yet to get a working build on NetBSD for x86-64 h/w, I *have*
</span><br>
<span class="quotelev1">&gt; successfully built Open MPI's current 1.7.4rc tarball on NetBSD-6 for x86.
</span><br>
<span class="quotelev1">&gt;  However, I can't *run* anything:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Attempting the ring_c example on 2 cores:
</span><br>
<span class="quotelev1">&gt; -bash-4.2$ mpirun -mca btl sm,self -np 2 examples/ring_c
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; While computing bindings, we found no available cpus on
</span><br>
<span class="quotelev1">&gt; the following node:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Node:  pcp-j-17
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please check your allocation.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The failure is the same w/o &quot;-mca btl sm,self&quot;
</span><br>
<span class="quotelev1">&gt; Singleton runs fail just as the np=2 run did.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've attached compressed output from &quot;ompi_info --all&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Since this is probably an hwloc-related issue, I also build hwloc-1.7.2
</span><br>
<span class="quotelev1">&gt; from pristine sources.
</span><br>
<span class="quotelev1">&gt; I have attached compressed output of lstopo which NOTABLY indicates a
</span><br>
<span class="quotelev1">&gt; failure to bind to both of the CPUs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For now, an explicit &quot;--bind-to none&quot; is working for me.
</span><br>
<span class="quotelev1">&gt; Please let me know what additional info may be required.
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
<span class="quotelev1">&gt;  &lt;ompi_info-netbsd-x86.txt.bz2&gt;&lt;lstopo172-netbsd-x86.txt.bz2&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13611/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13612.php">Paul Hargrove: "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
<li><strong>Previous message:</strong> <a href="13610.php">Paul Hargrove: "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
<li><strong>In reply to:</strong> <a href="13609.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc2r30148 run failure NetBSD6-x86"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13623.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc2r30148 run failure NetBSD6-x86"</a>
<li><strong>Reply:</strong> <a href="13623.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc2r30148 run failure NetBSD6-x86"</a>
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
