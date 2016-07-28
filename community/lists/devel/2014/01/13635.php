<?
$subject_val = "Re: [OMPI devel] 1.7.4rc2r30148 run failure NetBSD6-x86";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  9 15:07:42 2014" -->
<!-- isoreceived="20140109200742" -->
<!-- sent="Thu, 9 Jan 2014 12:07:28 -0800" -->
<!-- isosent="20140109200728" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.7.4rc2r30148 run failure NetBSD6-x86" -->
<!-- id="CAAvDA14Z7SYA+2X4TsA9iORRRhr834koioGacWcQz2tLGysstA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C40FE350-92AA-4F4E-9ED7-497196E261F1_at_open-mpi.org" -->
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
<strong>Date:</strong> 2014-01-09 15:07:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13636.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc2r30148 run failure NetBSD6-x86"</a>
<li><strong>Previous message:</strong> <a href="13634.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] trunk - non-portable examples/Makefie"</a>
<li><strong>In reply to:</strong> <a href="13629.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc2r30148 run failure NetBSD6-x86"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13636.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc2r30148 run failure NetBSD6-x86"</a>
<li><strong>Reply:</strong> <a href="13636.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc2r30148 run failure NetBSD6-x86"</a>
<li><strong>Reply:</strong> <a href="13672.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2r30148 run failure NetBSD6-x86"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>Thanks for fielding all these issues I've been finding.
<br>
I will plan to run tonight's trunk tarball through all of the systems where
<br>
I've seen any issues.
<br>
<p>-Paul
<br>
<p><p>On Thu, Jan 9, 2014 at 8:40 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Should now be fixed in trunk (silently fall back to not binding if cores
</span><br>
<span class="quotelev1">&gt; not found) - scheduled for 1.7.4. If you could test the next trunk tarball,
</span><br>
<span class="quotelev1">&gt; that would help as I can't actually test it on my machines
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 9, 2014, at 6:25 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I see the issue - there are no &quot;cores&quot; on this topology, only &quot;pu's&quot;, so
</span><br>
<span class="quotelev1">&gt; &quot;bind-to core&quot; is going to fail even though binding is supported. Will
</span><br>
<span class="quotelev1">&gt; adjust.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 8, 2014, at 9:06 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Requested verbose output below.
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -bash-4.2$ mpirun -mca ess_base_verbose 10 -np 1 examples/ring_c
</span><br>
<span class="quotelev1">&gt; [pcp-j-17:02150] mca: base: components_register: registering ess components
</span><br>
<span class="quotelev1">&gt; [pcp-j-17:02150] mca: base: components_register: found loaded component env
</span><br>
<span class="quotelev1">&gt; [pcp-j-17:02150] mca: base: components_register: component env has no
</span><br>
<span class="quotelev1">&gt; register or open function
</span><br>
<span class="quotelev1">&gt; [pcp-j-17:02150] mca: base: components_register: found loaded component hnp
</span><br>
<span class="quotelev1">&gt; [pcp-j-17:02150] mca: base: components_register: component hnp has no
</span><br>
<span class="quotelev1">&gt; register or open function
</span><br>
<span class="quotelev1">&gt; [pcp-j-17:02150] mca: base: components_register: found loaded component
</span><br>
<span class="quotelev1">&gt; singleton
</span><br>
<span class="quotelev1">&gt; [pcp-j-17:02150] mca: base: components_register: component singleton
</span><br>
<span class="quotelev1">&gt; register function successful
</span><br>
<span class="quotelev1">&gt; [pcp-j-17:02150] mca: base: components_register: found loaded component
</span><br>
<span class="quotelev1">&gt; tool
</span><br>
<span class="quotelev1">&gt; [pcp-j-17:02150] mca: base: components_register: component tool has no
</span><br>
<span class="quotelev1">&gt; register or open function
</span><br>
<span class="quotelev1">&gt; [pcp-j-17:02150] mca: base: components_open: opening ess components
</span><br>
<span class="quotelev1">&gt; [pcp-j-17:02150] mca: base: components_open: found loaded component env
</span><br>
<span class="quotelev1">&gt; [pcp-j-17:02150] mca: base: components_open: component env open function
</span><br>
<span class="quotelev1">&gt; successful
</span><br>
<span class="quotelev1">&gt; [pcp-j-17:02150] mca: base: components_open: found loaded component hnp
</span><br>
<span class="quotelev1">&gt; [pcp-j-17:02150] mca: base: components_open: component hnp open function
</span><br>
<span class="quotelev1">&gt; successful
</span><br>
<span class="quotelev1">&gt; [pcp-j-17:02150] mca: base: components_open: found loaded component
</span><br>
<span class="quotelev1">&gt; singleton
</span><br>
<span class="quotelev1">&gt; [pcp-j-17:02150] mca: base: components_open: component singleton open
</span><br>
<span class="quotelev1">&gt; function successful
</span><br>
<span class="quotelev1">&gt; [pcp-j-17:02150] mca: base: components_open: found loaded component tool
</span><br>
<span class="quotelev1">&gt; [pcp-j-17:02150] mca: base: components_open: component tool open function
</span><br>
<span class="quotelev1">&gt; successful
</span><br>
<span class="quotelev1">&gt; [pcp-j-17:02150] mca:base:select: Auto-selecting ess components
</span><br>
<span class="quotelev1">&gt; [pcp-j-17:02150] mca:base:select:(  ess) Querying component [env]
</span><br>
<span class="quotelev1">&gt; [pcp-j-17:02150] mca:base:select:(  ess) Skipping component [env]. Query
</span><br>
<span class="quotelev1">&gt; failed to return a module
</span><br>
<span class="quotelev1">&gt; [pcp-j-17:02150] mca:base:select:(  ess) Querying component [hnp]
</span><br>
<span class="quotelev1">&gt; [pcp-j-17:02150] mca:base:select:(  ess) Query of component [hnp] set
</span><br>
<span class="quotelev1">&gt; priority to 100
</span><br>
<span class="quotelev1">&gt; [pcp-j-17:02150] mca:base:select:(  ess) Querying component [singleton]
</span><br>
<span class="quotelev1">&gt; [pcp-j-17:02150] mca:base:select:(  ess) Skipping component [singleton].
</span><br>
<span class="quotelev1">&gt; Query failed to return a module
</span><br>
<span class="quotelev1">&gt; [pcp-j-17:02150] mca:base:select:(  ess) Querying component [tool]
</span><br>
<span class="quotelev1">&gt; [pcp-j-17:02150] mca:base:select:(  ess) Skipping component [tool]. Query
</span><br>
<span class="quotelev1">&gt; failed to return a module
</span><br>
<span class="quotelev1">&gt; [pcp-j-17:02150] mca:base:select:(  ess) Selected component [hnp]
</span><br>
<span class="quotelev1">&gt; [pcp-j-17:02150] mca: base: close: component env closed
</span><br>
<span class="quotelev1">&gt; [pcp-j-17:02150] mca: base: close: unloading component env
</span><br>
<span class="quotelev1">&gt; [pcp-j-17:02150] mca: base: close: component singleton closed
</span><br>
<span class="quotelev1">&gt; [pcp-j-17:02150] mca: base: close: unloading component singleton
</span><br>
<span class="quotelev1">&gt; [pcp-j-17:02150] mca: base: close: component tool closed
</span><br>
<span class="quotelev1">&gt; [pcp-j-17:02150] mca: base: close: unloading component tool
</span><br>
<span class="quotelev1">&gt; [pcp-j-17:02150] [[INVALID],INVALID] Topology Info:
</span><br>
<span class="quotelev1">&gt; [pcp-j-17:02150] Type: Machine Number of child objects: 2
</span><br>
<span class="quotelev1">&gt;         Name=NULL
</span><br>
<span class="quotelev1">&gt;         Backend=NetBSD
</span><br>
<span class="quotelev1">&gt;         OSName=NetBSD
</span><br>
<span class="quotelev1">&gt;         OSRelease=6.1
</span><br>
<span class="quotelev1">&gt;         OSVersion=&quot;NetBSD 6.1 (CUSTOM) #0: Fri Sep 20 13:19:58 PDT 2013
</span><br>
<span class="quotelev1">&gt; phargrov_at_pcp-j-17:/home/phargrov/CUSTOM&quot;
</span><br>
<span class="quotelev1">&gt;         Architecture=i386
</span><br>
<span class="quotelev1">&gt;         Backend=x86
</span><br>
<span class="quotelev1">&gt;         Cpuset:  0x00000003
</span><br>
<span class="quotelev1">&gt;         Online:  0x00000003
</span><br>
<span class="quotelev1">&gt;         Allowed: 0x00000003
</span><br>
<span class="quotelev1">&gt;         Bind CPU proc:   TRUE
</span><br>
<span class="quotelev1">&gt;         Bind CPU thread: TRUE
</span><br>
<span class="quotelev1">&gt;         Bind MEM proc:   FALSE
</span><br>
<span class="quotelev1">&gt;         Bind MEM thread: FALSE
</span><br>
<span class="quotelev1">&gt;         Type: PU Number of child objects: 0
</span><br>
<span class="quotelev1">&gt;                 Name=NULL
</span><br>
<span class="quotelev1">&gt;                 Cpuset:  0x00000001
</span><br>
<span class="quotelev1">&gt;                 Online:  0x00000001
</span><br>
<span class="quotelev1">&gt;                 Allowed: 0x00000001
</span><br>
<span class="quotelev1">&gt;         Type: PU Number of child objects: 0
</span><br>
<span class="quotelev1">&gt;                 Name=NULL
</span><br>
<span class="quotelev1">&gt;                 Cpuset:  0x00000002
</span><br>
<span class="quotelev1">&gt;                 Online:  0x00000002
</span><br>
<span class="quotelev1">&gt;                 Allowed: 0x00000002
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
<span class="quotelev1">&gt; [pcp-j-17:02150] mca: base: close: component hnp closed
</span><br>
<span class="quotelev1">&gt; [pcp-j-17:02150] mca: base: close: unloading component hnp
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Jan 8, 2014 at 8:50 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hmmm...looks to me like the code should protect against this - unless the
</span><br>
<span class="quotelev2">&gt;&gt; system isn't correctly reporting binding support. Could you run this with
</span><br>
<span class="quotelev2">&gt;&gt; &quot;-mca ess_base_verbose 10&quot;? This will output the topology we found,
</span><br>
<span class="quotelev2">&gt;&gt; including the binding support (which isn't in the usual output).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 8, 2014, at 8:14 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hmmm...I see the problem. Looks like binding isn't supported on that
</span><br>
<span class="quotelev2">&gt;&gt; system for some reason, so we need to turn &quot;off&quot; our auto-binding when we
</span><br>
<span class="quotelev2">&gt;&gt; hit that condition. I'll check to see why that isn't happening (was
</span><br>
<span class="quotelev2">&gt;&gt; supposed to do so)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 8, 2014, at 3:43 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; While I have yet to get a working build on NetBSD for x86-64 h/w, I
</span><br>
<span class="quotelev2">&gt;&gt; *have* successfully built Open MPI's current 1.7.4rc tarball on NetBSD-6
</span><br>
<span class="quotelev2">&gt;&gt; for x86.  However, I can't *run* anything:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Attempting the ring_c example on 2 cores:
</span><br>
<span class="quotelev2">&gt;&gt; -bash-4.2$ mpirun -mca btl sm,self -np 2 examples/ring_c
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; While computing bindings, we found no available cpus on
</span><br>
<span class="quotelev2">&gt;&gt; the following node:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   Node:  pcp-j-17
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Please check your allocation.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The failure is the same w/o &quot;-mca btl sm,self&quot;
</span><br>
<span class="quotelev2">&gt;&gt; Singleton runs fail just as the np=2 run did.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I've attached compressed output from &quot;ompi_info --all&quot;.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Since this is probably an hwloc-related issue, I also build hwloc-1.7.2
</span><br>
<span class="quotelev2">&gt;&gt; from pristine sources.
</span><br>
<span class="quotelev2">&gt;&gt; I have attached compressed output of lstopo which NOTABLY indicates a
</span><br>
<span class="quotelev2">&gt;&gt; failure to bind to both of the CPUs.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; For now, an explicit &quot;--bind-to none&quot; is working for me.
</span><br>
<span class="quotelev2">&gt;&gt; Please let me know what additional info may be required.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Paul
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
<span class="quotelev2">&gt;&gt;  &lt;ompi_info-netbsd-x86.txt.bz2&gt;&lt;lstopo172-netbsd-x86.txt.bz2&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13635/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13636.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc2r30148 run failure NetBSD6-x86"</a>
<li><strong>Previous message:</strong> <a href="13634.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] trunk - non-portable examples/Makefie"</a>
<li><strong>In reply to:</strong> <a href="13629.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc2r30148 run failure NetBSD6-x86"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13636.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc2r30148 run failure NetBSD6-x86"</a>
<li><strong>Reply:</strong> <a href="13636.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc2r30148 run failure NetBSD6-x86"</a>
<li><strong>Reply:</strong> <a href="13672.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2r30148 run failure NetBSD6-x86"</a>
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
