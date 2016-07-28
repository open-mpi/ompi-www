<?
$subject_val = "Re: [OMPI devel] 1.7.4rc2r30148 run failure NetBSD6-x86";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 10 00:06:05 2014" -->
<!-- isoreceived="20140110050605" -->
<!-- sent="Thu, 9 Jan 2014 21:05:55 -0800" -->
<!-- isosent="20140110050555" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.7.4rc2r30148 run failure NetBSD6-x86" -->
<!-- id="8E037D5C-408F-4E97-B2F4-B3C77AC49D52_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAvDA14Q1wjY8rE63UCVj=trzTHDo-_8V0MaL=C2z2gDH0MsSw_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-10 00:05:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13675.php">Ralph Castain: "Re: [OMPI devel] Portals vs Portals4 in 1.7.4"</a>
<li><strong>Previous message:</strong> <a href="13673.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc2r30168 - odd run failure"</a>
<li><strong>In reply to:</strong> <a href="13672.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2r30148 run failure NetBSD6-x86"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13677.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2r30148 run failure NetBSD6-x86"</a>
<li><strong>Reply:</strong> <a href="13677.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2r30148 run failure NetBSD6-x86"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Really have to thank you for your persistence, Paul. Truly appreciated.
<br>
<p>Glad to hear you can run ring_c. I'm going to let Jeff handle the path.c and ANON issue as those are both configury things he was working today.
<br>
<p>Not sure why the shmem fortran examples would try to build - will pass that off to Jeff as well (sorry Jeff!)
<br>
<p>On Jan 9, 2014, at 9:01 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My NetBSD builds fail on the new opal/util/path.c, but by adding
</span><br>
<span class="quotelev1">&gt;   #undef HAVE_STATFS
</span><br>
<span class="quotelev1">&gt; near the top of path.c I can get past that.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Next I hit the MAP_ANON-vs-MAP_ANONYMOUS issue and fixed that manually.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Next I hit the attempt to build shmem fortran examples despite the lack of a fortran compiler.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I *was* able to finally confirm that I can now run ring_c.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, Jan 9, 2014 at 12:07 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for fielding all these issues I've been finding.
</span><br>
<span class="quotelev1">&gt; I will plan to run tonight's trunk tarball through all of the systems where I've seen any issues.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, Jan 9, 2014 at 8:40 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Should now be fixed in trunk (silently fall back to not binding if cores not found) - scheduled for 1.7.4. If you could test the next trunk tarball, that would help as I can't actually test it on my machines
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jan 9, 2014, at 6:25 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I see the issue - there are no &quot;cores&quot; on this topology, only &quot;pu's&quot;, so &quot;bind-to core&quot; is going to fail even though binding is supported. Will adjust.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 8, 2014, at 9:06 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Requested verbose output below.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Paul
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -bash-4.2$ mpirun -mca ess_base_verbose 10 -np 1 examples/ring_c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [pcp-j-17:02150] mca: base: components_register: registering ess components
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [pcp-j-17:02150] mca: base: components_register: found loaded component env
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [pcp-j-17:02150] mca: base: components_register: component env has no register or open function
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [pcp-j-17:02150] mca: base: components_register: found loaded component hnp
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [pcp-j-17:02150] mca: base: components_register: component hnp has no register or open function
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [pcp-j-17:02150] mca: base: components_register: found loaded component singleton
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [pcp-j-17:02150] mca: base: components_register: component singleton register function successful
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [pcp-j-17:02150] mca: base: components_register: found loaded component tool
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [pcp-j-17:02150] mca: base: components_register: component tool has no register or open function
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [pcp-j-17:02150] mca: base: components_open: opening ess components
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [pcp-j-17:02150] mca: base: components_open: found loaded component env
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [pcp-j-17:02150] mca: base: components_open: component env open function successful
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [pcp-j-17:02150] mca: base: components_open: found loaded component hnp
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [pcp-j-17:02150] mca: base: components_open: component hnp open function successful
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [pcp-j-17:02150] mca: base: components_open: found loaded component singleton
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [pcp-j-17:02150] mca: base: components_open: component singleton open function successful
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [pcp-j-17:02150] mca: base: components_open: found loaded component tool
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [pcp-j-17:02150] mca: base: components_open: component tool open function successful
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [pcp-j-17:02150] mca:base:select: Auto-selecting ess components
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [pcp-j-17:02150] mca:base:select:(  ess) Querying component [env]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [pcp-j-17:02150] mca:base:select:(  ess) Skipping component [env]. Query failed to return a module
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [pcp-j-17:02150] mca:base:select:(  ess) Querying component [hnp]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [pcp-j-17:02150] mca:base:select:(  ess) Query of component [hnp] set priority to 100
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [pcp-j-17:02150] mca:base:select:(  ess) Querying component [singleton]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [pcp-j-17:02150] mca:base:select:(  ess) Skipping component [singleton]. Query failed to return a module
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [pcp-j-17:02150] mca:base:select:(  ess) Querying component [tool]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [pcp-j-17:02150] mca:base:select:(  ess) Skipping component [tool]. Query failed to return a module
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [pcp-j-17:02150] mca:base:select:(  ess) Selected component [hnp]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [pcp-j-17:02150] mca: base: close: component env closed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [pcp-j-17:02150] mca: base: close: unloading component env
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [pcp-j-17:02150] mca: base: close: component singleton closed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [pcp-j-17:02150] mca: base: close: unloading component singleton
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [pcp-j-17:02150] mca: base: close: component tool closed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [pcp-j-17:02150] mca: base: close: unloading component tool
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [pcp-j-17:02150] [[INVALID],INVALID] Topology Info:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [pcp-j-17:02150] Type: Machine Number of child objects: 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Name=NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Backend=NetBSD
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         OSName=NetBSD
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         OSRelease=6.1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         OSVersion=&quot;NetBSD 6.1 (CUSTOM) #0: Fri Sep 20 13:19:58 PDT 2013 phargrov_at_pcp-j-17:/home/phargrov/CUSTOM&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Architecture=i386
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Backend=x86
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Cpuset:  0x00000003
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Online:  0x00000003
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Allowed: 0x00000003
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Bind CPU proc:   TRUE
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Bind CPU thread: TRUE
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Bind MEM proc:   FALSE
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Bind MEM thread: FALSE
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Type: PU Number of child objects: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 Name=NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 Cpuset:  0x00000001
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 Online:  0x00000001
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 Allowed: 0x00000001
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Type: PU Number of child objects: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 Name=NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 Cpuset:  0x00000002
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 Online:  0x00000002
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 Allowed: 0x00000002
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; While computing bindings, we found no available cpus on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the following node:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Node:  pcp-j-17
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Please check your allocation.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [pcp-j-17:02150] mca: base: close: component hnp closed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [pcp-j-17:02150] mca: base: close: unloading component hnp
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Wed, Jan 8, 2014 at 8:50 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hmmm...looks to me like the code should protect against this - unless the system isn't correctly reporting binding support. Could you run this with &quot;-mca ess_base_verbose 10&quot;? This will output the topology we found, including the binding support (which isn't in the usual output).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jan 8, 2014, at 8:14 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hmmm...I see the problem. Looks like binding isn't supported on that system for some reason, so we need to turn &quot;off&quot; our auto-binding when we hit that condition. I'll check to see why that isn't happening (was supposed to do so)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Jan 8, 2014, at 3:43 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; While I have yet to get a working build on NetBSD for x86-64 h/w, I *have* successfully built Open MPI's current 1.7.4rc tarball on NetBSD-6 for x86.  However, I can't *run* anything:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Attempting the ring_c example on 2 cores:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -bash-4.2$ mpirun -mca btl sm,self -np 2 examples/ring_c
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; While computing bindings, we found no available cpus on
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the following node:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   Node:  pcp-j-17
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Please check your allocation.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The failure is the same w/o &quot;-mca btl sm,self&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Singleton runs fail just as the np=2 run did.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I've attached compressed output from &quot;ompi_info --all&quot;.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Since this is probably an hwloc-related issue, I also build hwloc-1.7.2 from pristine sources.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I have attached compressed output of lstopo which NOTABLY indicates a failure to bind to both of the CPUs.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; For now, an explicit &quot;--bind-to none&quot; is working for me.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Please let me know what additional info may be required.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -Paul
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;ompi_info-netbsd-x86.txt.bz2&gt;&lt;lstopo172-netbsd-x86.txt.bz2&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Future Technologies Group
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13674/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13675.php">Ralph Castain: "Re: [OMPI devel] Portals vs Portals4 in 1.7.4"</a>
<li><strong>Previous message:</strong> <a href="13673.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc2r30168 - odd run failure"</a>
<li><strong>In reply to:</strong> <a href="13672.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2r30148 run failure NetBSD6-x86"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13677.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2r30148 run failure NetBSD6-x86"</a>
<li><strong>Reply:</strong> <a href="13677.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2r30148 run failure NetBSD6-x86"</a>
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
