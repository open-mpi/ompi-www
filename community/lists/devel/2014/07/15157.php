<?
$subject_val = "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 15 20:43:27 2014" -->
<!-- isoreceived="20140716004327" -->
<!-- sent="Tue, 15 Jul 2014 17:42:38 -0700" -->
<!-- isosent="20140716004238" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal" -->
<!-- id="A385E19B-8E36-402F-9228-8F5C41A16B6D_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAvDA17fftWQFOYSDMapiL1ksp_BD9-41=Y1h3SmnyPVEfnsbg_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2014-07-15 20:42:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15158.php">George Bosilca: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<li><strong>Previous message:</strong> <a href="15156.php">Paul Hargrove: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<li><strong>In reply to:</strong> <a href="15156.php">Paul Hargrove: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15158.php">George Bosilca: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I wonder if we aren't using a howitzer to swat a gnat. It seems to me that this is loaded with potential problems, as Paul describes, and I shudder to think of how hard this is going to be when we consider all the compiler/environment combinations we support and the range of libraries our various pieces build against.
<br>
<p>Wouldn't it be easier for us to spend a little time on each framework and set it up to better handle init/fini/init cycles? It seems to me that this is going to be far more involved than just cleaning up class object instantiations, and indeed in some cases is going to take careful teardown of 3rd party libraries we link against.
<br>
<p>I know that will be more work than creating some simple &quot;destructor&quot;, but I suspect it has far more likelihood for success and a much lower degree of risk.
<br>
<p><p>On Jul 15, 2014, at 5:06 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; The priority appears to have been added in gcc 4.3.
</span><br>
<span class="quotelev1">&gt; You'll note it is not described in <a href="https://gcc.gnu.org/onlinedocs/gcc-4.2.0/gcc/Function-Attributes.html">https://gcc.gnu.org/onlinedocs/gcc-4.2.0/gcc/Function-Attributes.html</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I also don't think the presence of the priority argument fixes anything...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; An OpenMPI code author cannot change the &quot;priority&quot; of a ctor or dtor in a precompiled third-party library (libpmi comes to mind).  Nor can one know what value the third part chose (in order to be higher or lower than theirs).  You cannot even be assured the third-party didn't set priority to INT_MIN or INT_MAX (or whatever).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That text also says nothing about dl_open() and dl_close() which must be considered in Open MPI.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Before assuming constructor/destructor attributes are going to save the world, wash your dog, and pick up the dry cleaning, one should probably verify some minimal level of support on non-gnu tool-chains including vendor compilers (PGI, XLC, etc) and system linkers (Darwin and Solaris).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, Jul 15, 2014 at 4:52 PM, Joshua Ladd &lt;jladd.mlnx_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; According to <a href="http://gcc.gnu.org/onlinedocs/gcc/Function-Attributes.html">http://gcc.gnu.org/onlinedocs/gcc/Function-Attributes.html</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;constructor 
</span><br>
<span class="quotelev1">&gt;  destructor 
</span><br>
<span class="quotelev1">&gt;  constructor (priority)
</span><br>
<span class="quotelev1">&gt;  destructor (priority)
</span><br>
<span class="quotelev1">&gt; The constructor attribute causes the function to be called automatically before execution enters main (). Similarly, the destructor attribute causes the function to be called automatically after main () completes or exit () is called. Functions with these attributes are useful for initializing data that is used implicitly during the execution of the program.
</span><br>
<span class="quotelev1">&gt; You may provide an optional integer priority to control the order in which constructor and destructor functions are run. A constructor with a smaller priority number runs before a constructor with a larger priority number; the opposite relationship holds for destructors. So, if you have a constructor that allocates a resource and a destructor that deallocates the same resource, both functions typically have the same priority. The priorities for constructor and destructor functions are the same as those specified for namespace-scope C++ objects (see C++ Attributes).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; These attributes are not currently implemented for Objective-C.&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, Jul 15, 2014 at 5:20 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, Jul 15, 2014 at 12:49 PM, Pritchard, Howard r &lt;howardp_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; I don't think there's anything wrong with using ctor/dtors in shared libraries,
</span><br>
<span class="quotelev1">&gt; but one does need to make sure that in these functions there's no assumptions
</span><br>
<span class="quotelev1">&gt; about ordering of them wrt to other ctors/dtors.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The ELF specification is clear that the order of execution of DT_INIT and DT_FINI entries is undefined.
</span><br>
<span class="quotelev1">&gt; The .ctors and .dtors sections typically used by the GNU toolchain are, I believe, not part of any formal linker specification.
</span><br>
<span class="quotelev1">&gt; So, I agree w/ Howard that one must take care not to assume anything about order.
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15153.php">http://www.open-mpi.org/community/lists/devel/2014/07/15153.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15155.php">http://www.open-mpi.org/community/lists/devel/2014/07/15155.php</a>
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15156.php">http://www.open-mpi.org/community/lists/devel/2014/07/15156.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15157/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15158.php">George Bosilca: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<li><strong>Previous message:</strong> <a href="15156.php">Paul Hargrove: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<li><strong>In reply to:</strong> <a href="15156.php">Paul Hargrove: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15158.php">George Bosilca: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
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
