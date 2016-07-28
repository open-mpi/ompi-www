<?
$subject_val = "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 26 10:45:00 2011" -->
<!-- isoreceived="20110726144500" -->
<!-- sent="Tue, 26 Jul 2011 10:44:55 -0400" -->
<!-- isosent="20110726144455" -->
<!-- name="Shamis, Pavel" -->
<!-- email="shamisp_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Open MPI + HWLOC + Static build  issue" -->
<!-- id="6DC24821-E3E0-4FEE-B22B-16A9D20A0180_at_ornl.gov" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4E2E72A9.2010903_at_inria.fr" -->
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
<strong>From:</strong> Shamis, Pavel (<em>shamisp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-26 10:44:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9561.php">Josh Hursey: "[OMPI devel] Fwd: Upgrade trac on sourcehaven"</a>
<li><strong>Previous message:</strong> <a href="9559.php">Brice Goglin: "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
<li><strong>In reply to:</strong> <a href="9559.php">Brice Goglin: "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/08/9591.php">Brice Goglin: "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Brice,
<br>
<p>On this system libnuma dynamic lib and header files are installed without static lib.
<br>
Distro: SLES 10.1 based  machine
<br>
<p><p>Pavel (Pasha) Shamis
<br>
<pre>
---
Application Performance Tools Group
Computer Science and Math Division
Oak Ridge National Laboratory
On Jul 26, 2011, at 3:54 AM, Brice Goglin wrote:
&gt; Hello Pavel,
&gt; Do you have libnuma headers and dynamic lib installed without static lib
&gt; installed ? Which distro is this?
&gt; Brice
&gt; 
&gt; 
&gt; 
&gt; Le 25/07/2011 23:56, Shamis, Pavel a &#233;crit :
&gt;&gt; Hello,
&gt;&gt; 
&gt;&gt; I have been trying to compile Open MPI (trunk) static version with hwloc, the last is enabled by default in trunk.
&gt;&gt; The build platform is AMD machine, that has dynamic libnuma version only.
&gt;&gt; 
&gt;&gt; Problem:
&gt;&gt; Open MPI fails to link orted, because it can't find static version of libnuma.
&gt;&gt; 
&gt;&gt; Workaround:
&gt;&gt; add --without-hwloc
&gt;&gt; 
&gt;&gt; Real solution:
&gt;&gt; Is it a way to keep hwloc enabled when static libnuma isn't presented on the system ? If it's a such way, I would like to know how to enable it.
&gt;&gt; Otherwise, I think configure script should handle such scenario, it means disable hwloc and enable some other alternative.
&gt;&gt; 
&gt;&gt; Regards,
&gt;&gt; 
&gt;&gt; Pavel (Pasha) Shamis
&gt;&gt; ---
&gt;&gt; Application Performance Tools Group
&gt;&gt; Computer Science and Math Division
&gt;&gt; Oak Ridge National Laboratory
&gt;&gt; 
&gt;&gt; 
&gt;&gt; 
&gt;&gt; 
&gt;&gt; 
&gt;&gt; 
&gt;&gt; 
&gt;&gt; _______________________________________________
&gt;&gt; devel mailing list
&gt;&gt; devel_at_[hidden]
&gt;&gt; hxxp://www.open-mpi.org/mailman/listinfo.cgi/devel
&gt; 
&gt; _______________________________________________
&gt; devel mailing list
&gt; devel_at_[hidden]
&gt; hxxp://www.open-mpi.org/mailman/listinfo.cgi/devel
&gt; 
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9561.php">Josh Hursey: "[OMPI devel] Fwd: Upgrade trac on sourcehaven"</a>
<li><strong>Previous message:</strong> <a href="9559.php">Brice Goglin: "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
<li><strong>In reply to:</strong> <a href="9559.php">Brice Goglin: "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/08/9591.php">Brice Goglin: "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
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
