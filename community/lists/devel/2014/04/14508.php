<?
$subject_val = "Re: [OMPI devel] [devel-core] OMPI MCA components - track external libs versions";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 14 10:35:02 2014" -->
<!-- isoreceived="20140414143502" -->
<!-- sent="Mon, 14 Apr 2014 17:34:59 +0300" -->
<!-- isosent="20140414143459" -->
<!-- name="Mike Dubman" -->
<!-- email="miked_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [devel-core] OMPI MCA components - track external libs versions" -->
<!-- id="CAAO1KyaJwhAJd8Km6b+PNqLwf0YGQ_TLxL7fx+0uRpdx_2=poA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="D062C9D2-82A4-4765-B0B0-8BBD761F2D11_at_open-mpi.org" -->
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
<strong>From:</strong> Mike Dubman (<em>miked_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-14 10:34:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14509.php">Ralph Castain: "Re: [OMPI devel] [devel-core] OMPI MCA components - track external libs versions"</a>
<li><strong>Previous message:</strong> <a href="14507.php">Ralph Castain: "Re: [OMPI devel] [devel-core] OMPI MCA components - track external libs versions"</a>
<li><strong>In reply to:</strong> <a href="14507.php">Ralph Castain: "Re: [OMPI devel] [devel-core] OMPI MCA components - track external libs versions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14509.php">Ralph Castain: "Re: [OMPI devel] [devel-core] OMPI MCA components - track external libs versions"</a>
<li><strong>Reply:</strong> <a href="14509.php">Ralph Castain: "Re: [OMPI devel] [devel-core] OMPI MCA components - track external libs versions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
it is unrelated:
<br>
<p>1. The OMPI can support and built with many different (or all) versions of
<br>
external library (for example: libmxm or libslurm).
<br>
2. The OMPI utility ompi_info can expose the currently available version of
<br>
libmxm/libslurm.
<br>
<p>3. The vendor or end-user wants to certify specific version of libmxm or
<br>
libslurm to be used in the customer environment.
<br>
4. The current way - put a note into libmxm/libslurm Relase Notes, which is
<br>
not a guarantee that site user/sysadmin will pay attention in production
<br>
environment.
<br>
5. The suggestion is to use #2 to write script by user or vendor which will
<br>
match currently available versions with supported/certified and let
<br>
admin/user know that there is a mismatch between running and supported
<br>
version.
<br>
<p>P.S. based on the true story :)
<br>
<p><p><p>On Mon, Apr 14, 2014 at 5:19 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; &lt;let's be consistent and shift this to the devel list&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm still confused - how is that helpful? How was the build allowed to
</span><br>
<span class="quotelev1">&gt; complete if the external library version isn't supported?? You should
</span><br>
<span class="quotelev1">&gt; either quietly not-build the affected component, or error out if the user
</span><br>
<span class="quotelev1">&gt; specifically requested that component be built.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This sounds to me like you have a weakness in your configure logic, and
</span><br>
<span class="quotelev1">&gt; are trying to find a bandaid. Perhaps a better solution (that wouldn't
</span><br>
<span class="quotelev1">&gt; cause us to change every component in the code base) would be to just add
</span><br>
<span class="quotelev1">&gt; appropriate tests to your configure logic so you don't incorrectly build
</span><br>
<span class="quotelev1">&gt; against an unsupported library?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 14, 2014, at 7:12 AM, Mike Dubman &lt;miked_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The use-case I`m interested to expose through ompi_info/oshmem_info the
</span><br>
<span class="quotelev1">&gt; compiled-in versions of external libraries.
</span><br>
<span class="quotelev1">&gt; User/Vendor can write small script on top of ompi_info/oshmem_info to
</span><br>
<span class="quotelev1">&gt; check if running version are in par with supported matrix.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Apr 14, 2014 at 5:06 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Guess I'm a little confused and trying to understand the issue, so let's
</span><br>
<span class="quotelev2">&gt;&gt; consider a couple of cases:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; * If we are building against an unsupported version of an external
</span><br>
<span class="quotelev2">&gt;&gt; library, that is supposed to be detected by the configure logic, yes?  So
</span><br>
<span class="quotelev2">&gt;&gt; you would output a nice error message at that time, and stop the build
</span><br>
<span class="quotelev2">&gt;&gt; process.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; * If we were built against one version of an external library, and
</span><br>
<span class="quotelev2">&gt;&gt; someone attempts to run us against a different version, you'd have to
</span><br>
<span class="quotelev2">&gt;&gt; detect that somehow at runtime. I'm not sure how you could reliably do that
</span><br>
<span class="quotelev2">&gt;&gt; as the problem is likely to manifest itself as an unresolved function
</span><br>
<span class="quotelev2">&gt;&gt; (i.e., we use something that doesn't exist in the version being used) or a
</span><br>
<span class="quotelev2">&gt;&gt; difference in a function signature. Either way, you'll either fail to load
</span><br>
<span class="quotelev2">&gt;&gt; the library or crash.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So I'm not sure what the added function pointer actually accomplishes. I
</span><br>
<span class="quotelev2">&gt;&gt; suppose you could use it during ompi_info to display something about what
</span><br>
<span class="quotelev2">&gt;&gt; version you linked against, but that won't help solve either of the above
</span><br>
<span class="quotelev2">&gt;&gt; problems.
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
<span class="quotelev2">&gt;&gt; On Apr 14, 2014, at 5:57 AM, Mike Dubman &lt;miked_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; +devel mailing list (for web mail archive)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sat, Apr 12, 2014 at 9:04 PM, Mike Dubman &lt;miked_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Could you please suggest if following is addressed in MCA architecture
</span><br>
<span class="quotelev3">&gt;&gt;&gt; or maybe it is something we should add:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Current MCA API:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The new MCA component should provide descriptor
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mca_base_component_2_0_0_t which specifies how to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; init/open/close/query/enable every new component.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Also, the descriptor is used to specify version of MCA framework and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; version of MCA component.
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
<span class="quotelev3">&gt;&gt;&gt; So, it would be very useful if MCA descriptor will have another function
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pointer which return the version of external dependent library (if
</span><br>
<span class="quotelev3">&gt;&gt;&gt; applicable).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The ompi_info and oshmem_info will print it if present and will allow
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sysadmin to track vendor specific dependencies for OMPI (like: mxm compiled
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with libmxm 2.1, usnic with libusnic v1.0, ...) and warn users if compiled
</span><br>
<span class="quotelev3">&gt;&gt;&gt; versions do not match vendor recommended.
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel-core mailing list
</span><br>
<span class="quotelev1">&gt; devel-core_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel-core">http://www.open-mpi.org/mailman/listinfo.cgi/devel-core</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14507.php">http://www.open-mpi.org/community/lists/devel/2014/04/14507.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14508/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14509.php">Ralph Castain: "Re: [OMPI devel] [devel-core] OMPI MCA components - track external libs versions"</a>
<li><strong>Previous message:</strong> <a href="14507.php">Ralph Castain: "Re: [OMPI devel] [devel-core] OMPI MCA components - track external libs versions"</a>
<li><strong>In reply to:</strong> <a href="14507.php">Ralph Castain: "Re: [OMPI devel] [devel-core] OMPI MCA components - track external libs versions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14509.php">Ralph Castain: "Re: [OMPI devel] [devel-core] OMPI MCA components - track external libs versions"</a>
<li><strong>Reply:</strong> <a href="14509.php">Ralph Castain: "Re: [OMPI devel] [devel-core] OMPI MCA components - track external libs versions"</a>
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
