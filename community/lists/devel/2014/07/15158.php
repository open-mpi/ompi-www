<?
$subject_val = "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 15 20:48:26 2014" -->
<!-- isoreceived="20140716004826" -->
<!-- sent="Tue, 15 Jul 2014 20:48:25 -0400" -->
<!-- isosent="20140716004825" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal" -->
<!-- id="CAMJJpkU7AGreFqP0h_W9smufJxm41xoHV8rjOpNd=3=6TYz7Lg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-15 20:48:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15159.php">Ralph Castain: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<li><strong>Previous message:</strong> <a href="15157.php">Ralph Castain: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<li><strong>In reply to:</strong> <a href="15156.php">Paul Hargrove: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15159.php">Ralph Castain: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<li><strong>Reply:</strong> <a href="15159.php">Ralph Castain: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<li><strong>Reply:</strong> <a href="15160.php">Paul Hargrove: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Enforcing the portability of this sounds like a huge [almost impossible]
<br>
mess, without a clean portable solution (more about this below). However,
<br>
few things should be considered:
<br>
- Except for reinit, Open MPI works without it! If we provide such a
<br>
capability it will be more a convenience capability to keep valgrind happy,
<br>
than a necessity
<br>
- in case the constructor/destructor functionality is available we
<br>
explicitly control the ordering in which the shared libraries are
<br>
opened/closed as we control the dl_open/dl_close for most of the shared
<br>
libraries.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p>PS: Other cases about shared libraries constructor/destructor.
<br>
<p>The easy ones.
<br>
Mac OS X:
<br>
<a href="https://developer.apple.com/library/mac/documentation/DeveloperTools/Conceptual/DynamicLibraries/100-Articles/DynamicLibraryDesignGuidelines.html">https://developer.apple.com/library/mac/documentation/DeveloperTools/Conceptual/DynamicLibraries/100-Articles/DynamicLibraryDesignGuidelines.html</a>
<br>
<p>Solaris: <a href="http://docs.oracle.com/cd/E18659_01/html/821-1383/bkamq.html">http://docs.oracle.com/cd/E18659_01/html/821-1383/bkamq.html</a>
<br>
<p>And the others
<br>
<p>PGI:
<br>
<a href="http://www.pgroup.com/userforum/viewtopic.php?t=697&amp;sid=4efce7bfb4e914e42f48f219fc7e6a7e">http://www.pgroup.com/userforum/viewtopic.php?t=697&amp;sid=4efce7bfb4e914e42f48f219fc7e6a7e</a>
<br>
<p>XLC: beg for forgiveness (there is a -binitifini function but it must be
<br>
specified at link time)
<br>
<p><p><p><p><p><p>On Tue, Jul 15, 2014 at 8:06 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; The priority appears to have been added in gcc 4.3.
</span><br>
<span class="quotelev1">&gt; You'll note it is not described in
</span><br>
<span class="quotelev1">&gt; <a href="https://gcc.gnu.org/onlinedocs/gcc-4.2.0/gcc/Function-Attributes.html">https://gcc.gnu.org/onlinedocs/gcc-4.2.0/gcc/Function-Attributes.html</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I also don't think the presence of the priority argument fixes anything...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; An OpenMPI code author cannot change the &quot;priority&quot; of a ctor or dtor in a
</span><br>
<span class="quotelev1">&gt; precompiled third-party library (libpmi comes to mind).  Nor can one know
</span><br>
<span class="quotelev1">&gt; what value the third part chose (in order to be higher or lower than
</span><br>
<span class="quotelev1">&gt; theirs).  You cannot even be assured the third-party didn't set priority to
</span><br>
<span class="quotelev1">&gt; INT_MIN or INT_MAX (or whatever).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That text also says nothing about dl_open() and dl_close() which must be
</span><br>
<span class="quotelev1">&gt; considered in Open MPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Before assuming constructor/destructor attributes are going to save the
</span><br>
<span class="quotelev1">&gt; world, wash your dog, and pick up the dry cleaning, one should probably
</span><br>
<span class="quotelev1">&gt; verify some minimal level of support on non-gnu tool-chains including
</span><br>
<span class="quotelev1">&gt; vendor compilers (PGI, XLC, etc) and system linkers (Darwin and Solaris).
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; According to <a href="http://gcc.gnu.org/onlinedocs/gcc/Function-Attributes.html">http://gcc.gnu.org/onlinedocs/gcc/Function-Attributes.html</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *&quot;constructor *
</span><br>
<span class="quotelev2">&gt;&gt; *  destructor *
</span><br>
<span class="quotelev2">&gt;&gt; * constructor (*priority*)** destructor (priority)* *The constructor
</span><br>
<span class="quotelev2">&gt;&gt; attribute causes the function to be called automatically before execution
</span><br>
<span class="quotelev2">&gt;&gt; enters main (). Similarly, the destructor attribute causes the function to
</span><br>
<span class="quotelev2">&gt;&gt; be called automatically after main () completes or exit () is called.
</span><br>
<span class="quotelev2">&gt;&gt; Functions with these attributes are useful for initializing data that is
</span><br>
<span class="quotelev2">&gt;&gt; used implicitly during the execution of the program. *
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *You may provide an optional integer priority to control the order in
</span><br>
<span class="quotelev2">&gt;&gt; which constructor and destructor functions are run. A constructor with a
</span><br>
<span class="quotelev2">&gt;&gt; smaller priority number runs before a constructor with a larger priority
</span><br>
<span class="quotelev2">&gt;&gt; number; the opposite relationship holds for destructors. So, if you have a
</span><br>
<span class="quotelev2">&gt;&gt; constructor that allocates a resource and a destructor that deallocates the
</span><br>
<span class="quotelev2">&gt;&gt; same resource, both functions typically have the same priority. The
</span><br>
<span class="quotelev2">&gt;&gt; priorities for constructor and destructor functions are the same as those
</span><br>
<span class="quotelev2">&gt;&gt; specified for namespace-scope C++ objects (see C++ Attributes
</span><br>
<span class="quotelev2">&gt;&gt; &lt;<a href="http://gcc.gnu.org/onlinedocs/gcc/C_002b_002b-Attributes.html#C_002b_002b-Attributes">http://gcc.gnu.org/onlinedocs/gcc/C_002b_002b-Attributes.html#C_002b_002b-Attributes</a>&gt;).
</span><br>
<span class="quotelev2">&gt;&gt; *
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *These attributes are not currently implemented for Objective-C.&quot;*
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, Jul 15, 2014 at 5:20 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Tue, Jul 15, 2014 at 12:49 PM, Pritchard, Howard r &lt;howardp_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I don't think there's anything wrong with using ctor/dtors in shared
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; libraries,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; but one does need to make sure that in these functions there's no
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; assumptions
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; about ordering of them wrt to other ctors/dtors.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The ELF specification is clear that the order of execution of DT_INIT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and DT_FINI entries is undefined.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The .ctors and .dtors sections typically used by the GNU toolchain are,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I believe, not part of any formal linker specification.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So, I agree w/ Howard that one must take care not to assume anything
</span><br>
<span class="quotelev3">&gt;&gt;&gt; about order.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Paul
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
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15153.php">http://www.open-mpi.org/community/lists/devel/2014/07/15153.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15155.php">http://www.open-mpi.org/community/lists/devel/2014/07/15155.php</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15156.php">http://www.open-mpi.org/community/lists/devel/2014/07/15156.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15158/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15159.php">Ralph Castain: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<li><strong>Previous message:</strong> <a href="15157.php">Ralph Castain: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<li><strong>In reply to:</strong> <a href="15156.php">Paul Hargrove: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15159.php">Ralph Castain: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<li><strong>Reply:</strong> <a href="15159.php">Ralph Castain: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<li><strong>Reply:</strong> <a href="15160.php">Paul Hargrove: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
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
