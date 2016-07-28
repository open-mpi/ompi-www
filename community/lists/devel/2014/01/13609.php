<?
$subject_val = "Re: [OMPI devel] 1.7.4rc2r30148 run failure NetBSD6-x86";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan  8 23:50:22 2014" -->
<!-- isoreceived="20140109045022" -->
<!-- sent="Wed, 8 Jan 2014 20:50:17 -0800" -->
<!-- isosent="20140109045017" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.7.4rc2r30148 run failure NetBSD6-x86" -->
<!-- id="11B7D53A-1CA4-495C-8687-5CB9539E7B8A_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="32C8879E-976C-4A19-9B93-7E6CA8F8E00E_at_open-mpi.org" -->
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
<strong>Date:</strong> 2014-01-08 23:50:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13610.php">Paul Hargrove: "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
<li><strong>Previous message:</strong> <a href="13608.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2r30148 - crash in MPI_Init on Linux/x86"</a>
<li><strong>In reply to:</strong> <a href="13604.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc2r30148 run failure NetBSD6-x86"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13611.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2r30148 run failure NetBSD6-x86"</a>
<li><strong>Reply:</strong> <a href="13611.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2r30148 run failure NetBSD6-x86"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmmm...looks to me like the code should protect against this - unless the system isn't correctly reporting binding support. Could you run this with &quot;-mca ess_base_verbose 10&quot;? This will output the topology we found, including the binding support (which isn't in the usual output).
<br>
<p>On Jan 8, 2014, at 8:14 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hmmm...I see the problem. Looks like binding isn't supported on that system for some reason, so we need to turn &quot;off&quot; our auto-binding when we hit that condition. I'll check to see why that isn't happening (was supposed to do so)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jan 8, 2014, at 3:43 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; While I have yet to get a working build on NetBSD for x86-64 h/w, I *have* successfully built Open MPI's current 1.7.4rc tarball on NetBSD-6 for x86.  However, I can't *run* anything:
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
<span class="quotelev2">&gt;&gt; Since this is probably an hwloc-related issue, I also build hwloc-1.7.2 from pristine sources.
</span><br>
<span class="quotelev2">&gt;&gt; I have attached compressed output of lstopo which NOTABLY indicates a failure to bind to both of the CPUs.
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
<span class="quotelev2">&gt;&gt; &lt;ompi_info-netbsd-x86.txt.bz2&gt;&lt;lstopo172-netbsd-x86.txt.bz2&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13609/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13610.php">Paul Hargrove: "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
<li><strong>Previous message:</strong> <a href="13608.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2r30148 - crash in MPI_Init on Linux/x86"</a>
<li><strong>In reply to:</strong> <a href="13604.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc2r30148 run failure NetBSD6-x86"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13611.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2r30148 run failure NetBSD6-x86"</a>
<li><strong>Reply:</strong> <a href="13611.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2r30148 run failure NetBSD6-x86"</a>
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
