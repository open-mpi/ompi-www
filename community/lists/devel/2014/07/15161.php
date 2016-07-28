<?
$subject_val = "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 15 23:50:22 2014" -->
<!-- isoreceived="20140716035022" -->
<!-- sent="Tue, 15 Jul 2014 20:49:32 -0700" -->
<!-- isosent="20140716034932" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal" -->
<!-- id="ED37C43A-F29D-4310-AC0B-1A702D8E340B_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="274270F8-5C05-42D2-A43C-11C4BA7BB599_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-15 23:49:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15162.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<li><strong>Previous message:</strong> <a href="15160.php">Paul Hargrove: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<li><strong>In reply to:</strong> <a href="15159.php">Ralph Castain: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15162.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<li><strong>Reply:</strong> <a href="15162.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've attached a solution that blocks the segfault without requiring any gyrations. Can someone explain why this isn't adequate?
<br>
<p>Alternate solution was to simply decrement opal_util_initialized in MPI_T_finalize rather than calling finalize itself. Either way resolves the problem in a very simple manner.
<br>
<p><p><p>On Jul 15, 2014, at 6:10 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I'm unsure where Intel's compilers sit on that list.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When you say it works except for reinit, are you saying that the only issue here is that MPI_T_Finalize is calling opal_finalize_util solely because of the valgrind cleanup? And if it didn't do that, we would leak but would otherwise be just fine?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Just checking my understanding. Looking at the code, that would certainly appear to be true due to the reference counter in there, which would prevent us from eventually cleaning up because the counter wouldn't reach zero. However, couldn't we resolve that by (a) having MPI_T_Init set a global flag indicating it was called, and then (b) in opal_finalize, check the flag and add another call to opal_finalize_util if the flag is set?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Seems like all we really need to do is ensure that the init/finalize calls match, and that is far easier to ensure than doing the rest of this stuff.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jul 15, 2014, at 5:48 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Enforcing the portability of this sounds like a huge [almost impossible] mess, without a clean portable solution (more about this below). However, few things should be considered:
</span><br>
<span class="quotelev2">&gt;&gt; - Except for reinit, Open MPI works without it! If we provide such a capability it will be more a convenience capability to keep valgrind happy, than a necessity
</span><br>
<span class="quotelev2">&gt;&gt; - in case the constructor/destructor functionality is available we explicitly control the ordering in which the shared libraries are opened/closed as we control the dl_open/dl_close for most of the shared libraries.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   George.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; PS: Other cases about shared libraries constructor/destructor.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The easy ones.
</span><br>
<span class="quotelev2">&gt;&gt; Mac OS X: <a href="https://developer.apple.com/library/mac/documentation/DeveloperTools/Conceptual/DynamicLibraries/100-Articles/DynamicLibraryDesignGuidelines.html">https://developer.apple.com/library/mac/documentation/DeveloperTools/Conceptual/DynamicLibraries/100-Articles/DynamicLibraryDesignGuidelines.html</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Solaris: <a href="http://docs.oracle.com/cd/E18659_01/html/821-1383/bkamq.html">http://docs.oracle.com/cd/E18659_01/html/821-1383/bkamq.html</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; And the others
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; PGI: <a href="http://www.pgroup.com/userforum/viewtopic.php?t=697&amp;sid=4efce7bfb4e914e42f48f219fc7e6a7e">http://www.pgroup.com/userforum/viewtopic.php?t=697&amp;sid=4efce7bfb4e914e42f48f219fc7e6a7e</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; XLC: beg for forgiveness (there is a -binitifini function but it must be specified at link time)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, Jul 15, 2014 at 8:06 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; The priority appears to have been added in gcc 4.3.
</span><br>
<span class="quotelev2">&gt;&gt; You'll note it is not described in <a href="https://gcc.gnu.org/onlinedocs/gcc-4.2.0/gcc/Function-Attributes.html">https://gcc.gnu.org/onlinedocs/gcc-4.2.0/gcc/Function-Attributes.html</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I also don't think the presence of the priority argument fixes anything...
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; An OpenMPI code author cannot change the &quot;priority&quot; of a ctor or dtor in a precompiled third-party library (libpmi comes to mind).  Nor can one know what value the third part chose (in order to be higher or lower than theirs).  You cannot even be assured the third-party didn't set priority to INT_MIN or INT_MAX (or whatever).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; That text also says nothing about dl_open() and dl_close() which must be considered in Open MPI.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Before assuming constructor/destructor attributes are going to save the world, wash your dog, and pick up the dry cleaning, one should probably verify some minimal level of support on non-gnu tool-chains including vendor compilers (PGI, XLC, etc) and system linkers (Darwin and Solaris).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -Paul
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, Jul 15, 2014 at 4:52 PM, Joshua Ladd &lt;jladd.mlnx_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; According to <a href="http://gcc.gnu.org/onlinedocs/gcc/Function-Attributes.html">http://gcc.gnu.org/onlinedocs/gcc/Function-Attributes.html</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; &quot;constructor 
</span><br>
<span class="quotelev2">&gt;&gt;  destructor 
</span><br>
<span class="quotelev2">&gt;&gt;  constructor (priority)
</span><br>
<span class="quotelev2">&gt;&gt;  destructor (priority)
</span><br>
<span class="quotelev2">&gt;&gt; The constructor attribute causes the function to be called automatically before execution enters main (). Similarly, the destructor attribute causes the function to be called automatically after main () completes or exit () is called. Functions with these attributes are useful for initializing data that is used implicitly during the execution of the program.
</span><br>
<span class="quotelev2">&gt;&gt; You may provide an optional integer priority to control the order in which constructor and destructor functions are run. A constructor with a smaller priority number runs before a constructor with a larger priority number; the opposite relationship holds for destructors. So, if you have a constructor that allocates a resource and a destructor that deallocates the same resource, both functions typically have the same priority. The priorities for constructor and destructor functions are the same as those specified for namespace-scope C++ objects (see C++ Attributes).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; These attributes are not currently implemented for Objective-C.&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, Jul 15, 2014 at 5:20 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, Jul 15, 2014 at 12:49 PM, Pritchard, Howard r &lt;howardp_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I don't think there's anything wrong with using ctor/dtors in shared libraries,
</span><br>
<span class="quotelev2">&gt;&gt; but one does need to make sure that in these functions there's no assumptions
</span><br>
<span class="quotelev2">&gt;&gt; about ordering of them wrt to other ctors/dtors.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The ELF specification is clear that the order of execution of DT_INIT and DT_FINI entries is undefined.
</span><br>
<span class="quotelev2">&gt;&gt; The .ctors and .dtors sections typically used by the GNU toolchain are, I believe, not part of any formal linker specification.
</span><br>
<span class="quotelev2">&gt;&gt; So, I agree w/ Howard that one must take care not to assume anything about order.
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
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15153.php">http://www.open-mpi.org/community/lists/devel/2014/07/15153.php</a>
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
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15155.php">http://www.open-mpi.org/community/lists/devel/2014/07/15155.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15156.php">http://www.open-mpi.org/community/lists/devel/2014/07/15156.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15158.php">http://www.open-mpi.org/community/lists/devel/2014/07/15158.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15161/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15161/fix.diff">fix.diff</a>
</ul>
<!-- attachment="fix.diff" -->
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15161/03-attachment">attachment</a>
</ul>
<!-- attachment="03-attachment" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15161/mpit.c">mpit.c</a>
</ul>
<!-- attachment="mpit.c" -->
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15161/05-attachment">attachment</a>
</ul>
<!-- attachment="05-attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15162.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<li><strong>Previous message:</strong> <a href="15160.php">Paul Hargrove: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<li><strong>In reply to:</strong> <a href="15159.php">Ralph Castain: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15162.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<li><strong>Reply:</strong> <a href="15162.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
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
