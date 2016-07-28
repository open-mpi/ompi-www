<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jul  9 21:51:20 2007" -->
<!-- isoreceived="20070710015120" -->
<!-- sent="Mon, 09 Jul 2007 19:51:06 -0600" -->
<!-- isosent="20070710015106" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] Multi-environment builds" -->
<!-- id="C2B8422A.33F1%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-09 21:51:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1822.php">Ralf Wildenhues: "Re: [OMPI devel] Multi-environment builds"</a>
<li><strong>Previous message:</strong> <a href="1820.php">Glendenning, Lisa: "Re: [OMPI devel] One-sided operations with Portals"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1822.php">Ralf Wildenhues: "Re: [OMPI devel] Multi-environment builds"</a>
<li><strong>Reply:</strong> <a href="1822.php">Ralf Wildenhues: "Re: [OMPI devel] Multi-environment builds"</a>
<li><strong>Reply:</strong> <a href="1823.php">Bogdan Costescu: "Re: [OMPI devel] Multi-environment builds"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yo all
<br>
<p>I have been working on adding/clarifying support for several environments
<br>
and have encountered a problem that appears to be fairly common out there.
<br>
Namely, machines that have - over the course of history or for specific
<br>
reasons - installed libraries to support multiple environments. For example,
<br>
I can readily find machines that are running TM, but also have LSF and SLURM
<br>
libraries installed (although those environments are not &quot;active&quot; - the
<br>
libraries in some cases are old and stale, usually present because either
<br>
someone wanted to look at them or represent an old installation).
<br>
<p>The problem is that our Open MPI build system automatically detects the
<br>
presence of those libraries, builds the corresponding components, and then
<br>
links those libraries into our system. Unfortunately, this causes two
<br>
side-effects:
<br>
<p>1. we wind up building and loading a bunch of components that we cannot use
<br>
- which impacts memory footprint; and
<br>
<p>2. not every component in every framework runs some library function to
<br>
determine if that environment is actually active. Hence, our selection logic
<br>
can sometimes get confused due to conflicting priorities, resulting in the
<br>
selection of components that cause the system to crash
<br>
<p>A couple of solutions come immediately to mind:
<br>
<p>1. The most obvious one (to me, at least) is to require that people provide
<br>
&quot;--with-xx&quot; when they build the system. Instead of automatically detecting
<br>
an include file and library, and then deciding that the existence of those
<br>
files dictates that we build support for that environment, we would only
<br>
build support for those environments that the builder specifies, and error
<br>
out of the build process if multiple conflicting environments are specified.
<br>
This raises the issue of what to do with rsh, but I think we can handle that
<br>
one by simply building it wherever possible.
<br>
<p>2. We could laboriously go through all the components and ensure that they
<br>
check in their selection logic to see if that environment is active. This
<br>
still causes libraries to be loaded for nothing, but keeps the automatic
<br>
nature of the build system. We would have to deal with those environments
<br>
that may not have a &quot;safe&quot; function we can call to see if they are &quot;alive&quot;,
<br>
or have old/stale libraries that may have differing behavior in their APIs,
<br>
but perhaps those are few enough to not be a big problem.
<br>
<p>Any thoughts on this? It seems like we should solve this as it is becoming
<br>
more prevalent (at least on the machines I test on).
<br>
<p>Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1822.php">Ralf Wildenhues: "Re: [OMPI devel] Multi-environment builds"</a>
<li><strong>Previous message:</strong> <a href="1820.php">Glendenning, Lisa: "Re: [OMPI devel] One-sided operations with Portals"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1822.php">Ralf Wildenhues: "Re: [OMPI devel] Multi-environment builds"</a>
<li><strong>Reply:</strong> <a href="1822.php">Ralf Wildenhues: "Re: [OMPI devel] Multi-environment builds"</a>
<li><strong>Reply:</strong> <a href="1823.php">Bogdan Costescu: "Re: [OMPI devel] Multi-environment builds"</a>
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
