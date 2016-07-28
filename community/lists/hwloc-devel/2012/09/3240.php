<?
$subject_val = "[hwloc-devel] plugins status";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  4 09:52:09 2012" -->
<!-- isoreceived="20120904135209" -->
<!-- sent="Tue, 04 Sep 2012 15:52:03 +0200" -->
<!-- isosent="20120904135203" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="[hwloc-devel] plugins status" -->
<!-- id="50460783.4050406_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [hwloc-devel] plugins status<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-04 09:52:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3241.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4815 - branches/components/src"</a>
<li><strong>Previous message:</strong> <a href="3239.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.6a1r4796)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FYI, the components branch seems (almost) in good shape.
<br>
<p>OS support status:
<br>
* Linux OK
<br>
* Solaris OK
<br>
* AIX: configure aborts if you --enable-plugins because libltdl is known
<br>
to be broken. One guy is working at fixing libltdl. We may reenable this
<br>
later.
<br>
* Windows fails to link because hwloc symbols disappear when linking
<br>
with libltdl. The reason is that ltdl symbols are marked with LT_SCOPE:
<br>
<p>/* DLL building support on win32 hosts;  mostly to workaround their
<br>
&nbsp;&nbsp;&nbsp;ridiculous implementation of data symbol exporting. */
<br>
#if !defined(LT_SCOPE)
<br>
#  if defined(__WINDOWS__) || defined(__CYGWIN__)
<br>
#    if defined(DLL_EXPORT)             /* defined by libtool (if required) */
<br>
#      define LT_SCOPE  extern __declspec(dllexport)
<br>
#    endif
<br>
#    if defined(LIBLTDL_DLL_IMPORT)     /* define if linking with this dll */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* note: cygwin/mingw compilers can rely instead on auto-import */
<br>
#      define LT_SCOPE  extern __declspec(dllimport)
<br>
#    endif
<br>
#  endif
<br>
#  if !defined(LT_SCOPE)                /* static linking or !__WINDOWS__ */
<br>
#    define LT_SCOPE    extern
<br>
#  endif
<br>
#endif
<br>
<p><p>Changing HWLOC_DECLSPEC into &quot;extern __declspec(dllexport)&quot; solves the
<br>
problem. Visibility is currently totally disabled on mingw/cygwin in
<br>
hwloc, so it looks like we could add a cygwin/mingw case that use
<br>
dllexport. We didn't need dllexport until now because we generate a
<br>
&quot;.def&quot; file. I hope having both won't break things. I am far from having
<br>
a patch yet, I hope we're not going to break unrelated things.
<br>
<p>The &quot;dllimport&quot; thing above looks like an optimization from what I read
<br>
in google, so we may ignore this. We'll see.
<br>
<p>I haven't tested on Win64 (don't have such a machine).
<br>
<p><p><p>Plugins are disabled by default, so all the above is not too bad anyway.
<br>
<p>I am thinking of adding a fake plugin that does nothing. This will
<br>
guarantee that we'd always have at least one plugin to build/load for
<br>
testing (you need libxml2 or libpci if you want at least one plugin to
<br>
be built). I need to find a good way to add this to make check.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3241.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4815 - branches/components/src"</a>
<li><strong>Previous message:</strong> <a href="3239.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.6a1r4796)"</a>
<!-- nextthread="start" -->
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
