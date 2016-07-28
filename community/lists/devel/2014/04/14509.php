<?
$subject_val = "Re: [OMPI devel] [devel-core] OMPI MCA components - track external libs versions";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 14 10:48:40 2014" -->
<!-- isoreceived="20140414144840" -->
<!-- sent="Mon, 14 Apr 2014 07:47:20 -0700" -->
<!-- isosent="20140414144720" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [devel-core] OMPI MCA components - track external libs versions" -->
<!-- id="BE9BFE65-F39D-426F-A2E6-9BE901291289_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAO1KyaJwhAJd8Km6b+PNqLwf0YGQ_TLxL7fx+0uRpdx_2=poA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [devel-core] OMPI MCA components - track external libs versions<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-14 10:47:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14510.php">Mike Dubman: "Re: [OMPI devel] [devel-core] OMPI MCA components - track external libs versions"</a>
<li><strong>Previous message:</strong> <a href="14508.php">Mike Dubman: "Re: [OMPI devel] [devel-core] OMPI MCA components - track external libs versions"</a>
<li><strong>In reply to:</strong> <a href="14508.php">Mike Dubman: "Re: [OMPI devel] [devel-core] OMPI MCA components - track external libs versions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14510.php">Mike Dubman: "Re: [OMPI devel] [devel-core] OMPI MCA components - track external libs versions"</a>
<li><strong>Reply:</strong> <a href="14510.php">Mike Dubman: "Re: [OMPI devel] [devel-core] OMPI MCA components - track external libs versions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 14, 2014, at 7:34 AM, Mike Dubman &lt;miked_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; it is unrelated:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. The OMPI can support and built with many different (or all) versions of external library (for example: libmxm or libslurm).
</span><br>
<p>Not true - we do indeed check the library version in all cases where it matters. For example, the case you cite as your true story could easily have been prevented by using OMPI_CHECK_PACKAGE to verify that the libmxm had the required function in it
<br>
<p><span class="quotelev1">&gt; 2. The OMPI utility ompi_info can expose the currently available version of libmxm/libslurm.
</span><br>
<p>Yes - but what good does that do? Bottom line is that you shouldn't have built if that library version isn't supported
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 3. The vendor or end-user wants to certify specific version of libmxm or libslurm to be used in the customer environment.
</span><br>
<span class="quotelev1">&gt; 4. The current way - put a note into libmxm/libslurm Relase Notes, which is not a guarantee that site user/sysadmin will pay attention in production environment.
</span><br>
<p>Again, that's the whole purpose of the configure logic. You are supposed to check the library to ensure it is compatible, not just blindly build and then make the user figure it out
<br>
<p><span class="quotelev1">&gt; 5. The suggestion is to use #2 to write script by user or vendor which will match currently available versions with supported/certified and let admin/user know that there is a mismatch between running and supported version.
</span><br>
<p>Like I said, that's the developer's responsibility to get the configure logic correct - not the user's responsibility to figure it out after-the-fact.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; P.S. based on the true story :)
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, Apr 14, 2014 at 5:19 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; &lt;let's be consistent and shift this to the devel list&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm still confused - how is that helpful? How was the build allowed to complete if the external library version isn't supported?? You should either quietly not-build the affected component, or error out if the user specifically requested that component be built.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This sounds to me like you have a weakness in your configure logic, and are trying to find a bandaid. Perhaps a better solution (that wouldn't cause us to change every component in the code base) would be to just add appropriate tests to your configure logic so you don't incorrectly build against an unsupported library?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Apr 14, 2014, at 7:12 AM, Mike Dubman &lt;miked_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The use-case I`m interested to expose through ompi_info/oshmem_info the compiled-in versions of external libraries.
</span><br>
<span class="quotelev2">&gt;&gt; User/Vendor can write small script on top of ompi_info/oshmem_info to check if running version are in par with supported matrix.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Mon, Apr 14, 2014 at 5:06 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Guess I'm a little confused and trying to understand the issue, so let's consider a couple of cases:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; * If we are building against an unsupported version of an external library, that is supposed to be detected by the configure logic, yes?  So you would output a nice error message at that time, and stop the build process.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; * If we were built against one version of an external library, and someone attempts to run us against a different version, you'd have to detect that somehow at runtime. I'm not sure how you could reliably do that as the problem is likely to manifest itself as an unresolved function (i.e., we use something that doesn't exist in the version being used) or a difference in a function signature. Either way, you'll either fail to load the library or crash.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; So I'm not sure what the added function pointer actually accomplishes. I suppose you could use it during ompi_info to display something about what version you linked against, but that won't help solve either of the above problems.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Could you help explain a little further?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 14, 2014, at 5:57 AM, Mike Dubman &lt;miked_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +devel mailing list (for web mail archive)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Sat, Apr 12, 2014 at 9:04 PM, Mike Dubman &lt;miked_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Could you please suggest if following is addressed in MCA architecture or maybe it is something we should add:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Current MCA API:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The new MCA component should provide descriptor mca_base_component_2_0_0_t which specifies how to init/open/close/query/enable every new component.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Also, the descriptor is used to specify version of MCA framework and version of MCA component.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What is missing:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Some MCA components are wrappers on top of external libraries, i.e.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hwloc (libhwloc.so)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; usnic (libusnic.so)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fca (libfca.so)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mxm (libmxm.so)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; slurm (libslurn.so)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pbs
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pmi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; openib (libibverbs)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vader (knem, ...)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So, it would be very useful if MCA descriptor will have another function pointer which return the version of external dependent library (if applicable).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The ompi_info and oshmem_info will print it if present and will allow sysadmin to track vendor specific dependencies for OMPI (like: mxm compiled with libmxm 2.1, usnic with libusnic v1.0, ...) and warn users if compiled versions do not match vendor recommended.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Please suggest.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel-core mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel-core_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel-core">http://www.open-mpi.org/mailman/listinfo.cgi/devel-core</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel-core mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel-core_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel-core">http://www.open-mpi.org/mailman/listinfo.cgi/devel-core</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel-core mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel-core_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel-core">http://www.open-mpi.org/mailman/listinfo.cgi/devel-core</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14507.php">http://www.open-mpi.org/community/lists/devel/2014/04/14507.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14508.php">http://www.open-mpi.org/community/lists/devel/2014/04/14508.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14509/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14510.php">Mike Dubman: "Re: [OMPI devel] [devel-core] OMPI MCA components - track external libs versions"</a>
<li><strong>Previous message:</strong> <a href="14508.php">Mike Dubman: "Re: [OMPI devel] [devel-core] OMPI MCA components - track external libs versions"</a>
<li><strong>In reply to:</strong> <a href="14508.php">Mike Dubman: "Re: [OMPI devel] [devel-core] OMPI MCA components - track external libs versions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14510.php">Mike Dubman: "Re: [OMPI devel] [devel-core] OMPI MCA components - track external libs versions"</a>
<li><strong>Reply:</strong> <a href="14510.php">Mike Dubman: "Re: [OMPI devel] [devel-core] OMPI MCA components - track external libs versions"</a>
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
