<?
$subject_val = "Re: [OMPI devel] OMPI MCA components - track external libs versions";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 14 08:57:30 2014" -->
<!-- isoreceived="20140414125730" -->
<!-- sent="Mon, 14 Apr 2014 15:57:28 +0300" -->
<!-- isosent="20140414125728" -->
<!-- name="Mike Dubman" -->
<!-- email="miked_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI MCA components - track external libs versions" -->
<!-- id="CAAO1KyYiDJ4V6HQVXbbLQo6xr2-vnFTogq-b3HuUUjzfQMY2Nw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAAO1KyYFRPii+8L68nPm1EH66FhAw+4bsn8kc7KuOOPqKZ-2jQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OMPI MCA components - track external libs versions<br>
<strong>From:</strong> Mike Dubman (<em>miked_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-14 08:57:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14506.php">Ralph Castain: "Re: [OMPI devel] [devel-core] OMPI MCA components - track external libs versions"</a>
<li><strong>Previous message:</strong> <a href="14504.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31376 - trunk/orte/mca/oob/tcp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14506.php">Ralph Castain: "Re: [OMPI devel] [devel-core] OMPI MCA components - track external libs versions"</a>
<li><strong>Reply:</strong> <a href="14506.php">Ralph Castain: "Re: [OMPI devel] [devel-core] OMPI MCA components - track external libs versions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
+devel mailing list (for web mail archive)
<br>
<p><p>On Sat, Apr 12, 2014 at 9:04 PM, Mike Dubman &lt;miked_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Could you please suggest if following is addressed in MCA architecture or
</span><br>
<span class="quotelev1">&gt; maybe it is something we should add:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Current MCA API:
</span><br>
<span class="quotelev1">&gt; The new MCA component should provide descriptor mca_base_component_2_0_0_t
</span><br>
<span class="quotelev1">&gt; which specifies how to init/open/close/query/enable every new component.
</span><br>
<span class="quotelev1">&gt; Also, the descriptor is used to specify version of MCA framework and
</span><br>
<span class="quotelev1">&gt; version of MCA component.
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
<span class="quotelev1">&gt; So, it would be very useful if MCA descriptor will have another function
</span><br>
<span class="quotelev1">&gt; pointer which return the version of external dependent library (if
</span><br>
<span class="quotelev1">&gt; applicable).
</span><br>
<span class="quotelev1">&gt; The ompi_info and oshmem_info will print it if present and will allow
</span><br>
<span class="quotelev1">&gt; sysadmin to track vendor specific dependencies for OMPI (like: mxm compiled
</span><br>
<span class="quotelev1">&gt; with libmxm 2.1, usnic with libusnic v1.0, ...) and warn users if compiled
</span><br>
<span class="quotelev1">&gt; versions do not match vendor recommended.
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14505/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14506.php">Ralph Castain: "Re: [OMPI devel] [devel-core] OMPI MCA components - track external libs versions"</a>
<li><strong>Previous message:</strong> <a href="14504.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31376 - trunk/orte/mca/oob/tcp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14506.php">Ralph Castain: "Re: [OMPI devel] [devel-core] OMPI MCA components - track external libs versions"</a>
<li><strong>Reply:</strong> <a href="14506.php">Ralph Castain: "Re: [OMPI devel] [devel-core] OMPI MCA components - track external libs versions"</a>
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
