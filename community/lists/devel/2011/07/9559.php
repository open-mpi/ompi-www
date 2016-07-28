<?
$subject_val = "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 26 03:54:22 2011" -->
<!-- isoreceived="20110726075422" -->
<!-- sent="Tue, 26 Jul 2011 09:54:17 +0200" -->
<!-- isosent="20110726075417" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Open MPI + HWLOC + Static build  issue" -->
<!-- id="4E2E72A9.2010903_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="BA9B139C-7A9C-4EF7-87A2-B36BB1235B49_at_ornl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Open MPI + HWLOC + Static build  issue<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-26 03:54:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9560.php">Shamis, Pavel: "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
<li><strong>Previous message:</strong> <a href="9558.php">Shamis, Pavel: "[OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
<li><strong>In reply to:</strong> <a href="9558.php">Shamis, Pavel: "[OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9560.php">Shamis, Pavel: "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
<li><strong>Reply:</strong> <a href="9560.php">Shamis, Pavel: "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Pavel,
<br>
Do you have libnuma headers and dynamic lib installed without static lib
<br>
installed ? Which distro is this?
<br>
Brice
<br>
<p><p><p>Le 25/07/2011 23:56, Shamis, Pavel a &#233;crit :
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have been trying to compile Open MPI (trunk) static version with hwloc, the last is enabled by default in trunk.
</span><br>
<span class="quotelev1">&gt; The build platform is AMD machine, that has dynamic libnuma version only.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Problem:
</span><br>
<span class="quotelev1">&gt; Open MPI fails to link orted, because it can't find static version of libnuma.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Workaround:
</span><br>
<span class="quotelev1">&gt; add --without-hwloc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Real solution:
</span><br>
<span class="quotelev1">&gt; Is it a way to keep hwloc enabled when static libnuma isn't presented on the system ? If it's a such way, I would like to know how to enable it.
</span><br>
<span class="quotelev1">&gt; Otherwise, I think configure script should handle such scenario, it means disable hwloc and enable some other alternative.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Pavel (Pasha) Shamis
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt; Application Performance Tools Group
</span><br>
<span class="quotelev1">&gt; Computer Science and Math Division
</span><br>
<span class="quotelev1">&gt; Oak Ridge National Laboratory
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9560.php">Shamis, Pavel: "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
<li><strong>Previous message:</strong> <a href="9558.php">Shamis, Pavel: "[OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
<li><strong>In reply to:</strong> <a href="9558.php">Shamis, Pavel: "[OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9560.php">Shamis, Pavel: "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
<li><strong>Reply:</strong> <a href="9560.php">Shamis, Pavel: "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
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
