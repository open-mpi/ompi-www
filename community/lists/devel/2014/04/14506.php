<?
$subject_val = "Re: [OMPI devel] [devel-core] OMPI MCA components - track external libs versions";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 14 10:07:21 2014" -->
<!-- isoreceived="20140414140721" -->
<!-- sent="Mon, 14 Apr 2014 07:06:01 -0700" -->
<!-- isosent="20140414140601" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [devel-core] OMPI MCA components - track external libs versions" -->
<!-- id="ACF7E8CC-A1DA-4781-ACC1-D627A81E210A_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAO1KyYiDJ4V6HQVXbbLQo6xr2-vnFTogq-b3HuUUjzfQMY2Nw_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2014-04-14 10:06:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14507.php">Ralph Castain: "Re: [OMPI devel] [devel-core] OMPI MCA components - track external libs versions"</a>
<li><strong>Previous message:</strong> <a href="14505.php">Mike Dubman: "Re: [OMPI devel] OMPI MCA components - track external libs versions"</a>
<li><strong>In reply to:</strong> <a href="14505.php">Mike Dubman: "Re: [OMPI devel] OMPI MCA components - track external libs versions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14507.php">Ralph Castain: "Re: [OMPI devel] [devel-core] OMPI MCA components - track external libs versions"</a>
<li><strong>Maybe reply:</strong> <a href="14507.php">Ralph Castain: "Re: [OMPI devel] [devel-core] OMPI MCA components - track external libs versions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Guess I'm a little confused and trying to understand the issue, so let's consider a couple of cases:
<br>
<p>* If we are building against an unsupported version of an external library, that is supposed to be detected by the configure logic, yes?  So you would output a nice error message at that time, and stop the build process.
<br>
<p>* If we were built against one version of an external library, and someone attempts to run us against a different version, you'd have to detect that somehow at runtime. I'm not sure how you could reliably do that as the problem is likely to manifest itself as an unresolved function (i.e., we use something that doesn't exist in the version being used) or a difference in a function signature. Either way, you'll either fail to load the library or crash.
<br>
<p>So I'm not sure what the added function pointer actually accomplishes. I suppose you could use it during ompi_info to display something about what version you linked against, but that won't help solve either of the above problems.
<br>
<p>Could you help explain a little further?
<br>
<p>Thanks
<br>
Ralph
<br>
<p><p>On Apr 14, 2014, at 5:57 AM, Mike Dubman &lt;miked_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; +devel mailing list (for web mail archive)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sat, Apr 12, 2014 at 9:04 PM, Mike Dubman &lt;miked_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Could you please suggest if following is addressed in MCA architecture or maybe it is something we should add:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Current MCA API:
</span><br>
<span class="quotelev1">&gt; The new MCA component should provide descriptor mca_base_component_2_0_0_t which specifies how to init/open/close/query/enable every new component.
</span><br>
<span class="quotelev1">&gt; Also, the descriptor is used to specify version of MCA framework and version of MCA component.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What is missing:
</span><br>
<span class="quotelev1">&gt; Some MCA components are wrappers on top of external libraries, i.e.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; hwloc (libhwloc.so)
</span><br>
<span class="quotelev1">&gt; usnic (libusnic.so)
</span><br>
<span class="quotelev1">&gt; fca (libfca.so)
</span><br>
<span class="quotelev1">&gt; mxm (libmxm.so)
</span><br>
<span class="quotelev1">&gt; slurm (libslurn.so)
</span><br>
<span class="quotelev1">&gt; pbs
</span><br>
<span class="quotelev1">&gt; pmi
</span><br>
<span class="quotelev1">&gt; openib (libibverbs)
</span><br>
<span class="quotelev1">&gt; vader (knem, ...)
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So, it would be very useful if MCA descriptor will have another function pointer which return the version of external dependent library (if applicable).
</span><br>
<span class="quotelev1">&gt; The ompi_info and oshmem_info will print it if present and will allow sysadmin to track vendor specific dependencies for OMPI (like: mxm compiled with libmxm 2.1, usnic with libusnic v1.0, ...) and warn users if compiled versions do not match vendor recommended.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please suggest.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; devel-core mailing list
</span><br>
<span class="quotelev1">&gt; devel-core_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel-core">http://www.open-mpi.org/mailman/listinfo.cgi/devel-core</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14506/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14507.php">Ralph Castain: "Re: [OMPI devel] [devel-core] OMPI MCA components - track external libs versions"</a>
<li><strong>Previous message:</strong> <a href="14505.php">Mike Dubman: "Re: [OMPI devel] OMPI MCA components - track external libs versions"</a>
<li><strong>In reply to:</strong> <a href="14505.php">Mike Dubman: "Re: [OMPI devel] OMPI MCA components - track external libs versions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14507.php">Ralph Castain: "Re: [OMPI devel] [devel-core] OMPI MCA components - track external libs versions"</a>
<li><strong>Maybe reply:</strong> <a href="14507.php">Ralph Castain: "Re: [OMPI devel] [devel-core] OMPI MCA components - track external libs versions"</a>
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
