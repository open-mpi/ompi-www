<?
$subject_val = "[OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 17 13:23:34 2010" -->
<!-- isoreceived="20100217182334" -->
<!-- sent="Wed, 17 Feb 2010 13:23:26 -0500" -->
<!-- isosent="20100217182326" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning" -->
<!-- id="B4BE40F6-9388-4E2B-B556-D2B238B18ABE_at_cisco.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-17 13:23:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7448.php">Barrett, Brian W: "Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning"</a>
<li><strong>Previous message:</strong> <a href="7446.php">Greg Watson: "Re: [OMPI devel] configure question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7448.php">Barrett, Brian W: "Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning"</a>
<li><strong>Reply:</strong> <a href="7448.php">Barrett, Brian W: "Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning"</a>
<li><strong>Maybe reply:</strong> <a href="7467.php">Graham, Richard L.: "Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning"</a>
<li><strong>Maybe reply:</strong> <a href="7470.php">Graham, Richard L.: "Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
WHAT: Break ABI between 1.4 and 1.5 series.
<br>
<p>WHY: To settle the ABI and .so versioning issues once and for all.
<br>
<p>WHERE: Open MPI's .so versions and the opal_wrapper compiler.
<br>
<p>WHEN: For 1.5[.0].  This is only meaningful if we do it for the *entire* v1.5 series.
<br>
<p>TIMEOUT: Next Tuesday teleconf, 23 Feb 2010
<br>
<p>=======================================================
<br>
<p>BACKGROUND / REQUIRED READING:
<br>
------------------------------
<br>
<p>&nbsp;* Ticket 2092: <a href="https://svn.open-mpi.org/trac/ompi/ticket/2092">https://svn.open-mpi.org/trac/ompi/ticket/2092</a>
<br>
&nbsp;* Libtool .so versioning rules: <a href="https://svn.open-mpi.org/trac/ompi/wiki/ReleaseProcedures">https://svn.open-mpi.org/trac/ompi/wiki/ReleaseProcedures</a>
<br>
<p>Libtool .so version numbers are expressed as c:r:a.  libmpi is currently versioned &quot;correctly&quot;, meaning that we advance the c:r:a triple as necessary for each release.  libopen-pal and libopen-rte, however, are currently fixed at 0:0:0, which is Wrong.  The reasons why they are fixed at 0:0:0 are expressed in #2092.
<br>
<p>SHORT VERSION OF THIS PROPOSAL:
<br>
-------------------------------
<br>
<p>&nbsp;* For v1.5.0, set c:r:a of libmpi to 1:0:0.
<br>
&nbsp;* Starting with v1.5.0, set c:r:a for libopen-rte and libopen-al properly.
<br>
&nbsp;* This means a break in ABI between v1.4.x and v1.5.x, but the ABI will remain constant for all of 1.5.x/1.6.x.
<br>
&nbsp;* The wrapper compilers will need to be updated to recognize the difference between static and dynamic linking.
<br>
<p>LONGER VERSION / MORE DETAILS AND RATIONALE:
<br>
--------------------------------------------
<br>
<p>The fix for these issues involves several dominos falling in order.  You need to read this whole proposal to understand the full scope, sorry.  :-\
<br>
<p>1. We need to fix the wrapper compilers to recognize the difference between shared library linking and static linking.  Right now, the MPI wrappers always do this:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;-lmpi -lopen-rte -lopen-pal
<br>
<p>2. Listing all three libraries is only necessary when linking statically.  When linking dynamically, only the top-level library should be listed (e.g., -lmpi for MPI applications).  The implicit linker dependencies of libmpi.so will automatically pull in libopen-rte.so.  Likewise, the implicit dependencies of libopen-rte.so will automatically pull in libopen-pal.so.  More specifically, when linking dynamically, MPI a.out applications will only explicitly depend on libmpi.so (not libopen-rte.so and not libopen-pal.so).
<br>
<p>3. Hence, the wrappers need to learn the difference between static and dynamic linking: when linking dynamically, only list &quot;-lmpi&quot;.  When linking statically, list all 3 libraries.  This allows minimization of explicit library dependencies in dynamic linking, and is arguably the Right way to do it.
<br>
<p>--&gt; More below about how to make the wrappers understand the difference between static/shared linking.
<br>
<p>4. When MPI applications only depend on libmpi, we can properly version libopen-rte.so and libopen-pal.so.  Hence, for v1.5.0, we will have non-0:0:0 .so versions for these two libraries.
<br>
<p>5. Since MPI application a.out's created by the v1.4 series will have explicit dependencies on all 3 libraries, they will be ABI incompatible with Open MPI v1.5's ORTE and OPAL libraries (as opposed to MPI applications created with updated wrappers in v1.5, which will only depend on libmpi when linking dynamically).
<br>
<p>6. The question then remains: what to set libmpi.so's c:r:a values in v1.5.0?  I say it should be 1:0:0.  Here's why:
<br>
&nbsp;&nbsp;* Recall that we have added some new MPI-2.2 functions in v1.5.  Hence, libmpi.so's &quot;c&quot; needs to increase to 1 and &quot;r&quot; needs to be set to 0.  The questions is what to do with the &quot;a&quot; value.
<br>
&nbsp;&nbsp;* By extension of #5, we should also make libmpi.so be ABI incompatible between v1.4.x and v1.5.x (to prevent some needless confusion -- rather than have libmpi be ABI compatible and libopen-rte and libopen-pal *not* be ABI compatible, I think it would be better to make *all 3* be ABI incompatible).  This means setting the libmpi.so &quot;a&quot; value to 0 (as opposed to setting it to 1).
<br>
<p>Crystal clear?  I thought so.  :-)
<br>
<p>------
<br>
<p>Here's my proposal on how to change the wrapper compilers to understand the difference between static and dynamic linking:
<br>
<p>*** FIRST: give the wrapper the ability to link one library or all libraries
<br>
- wrapper data text files grow a new option: libs_private (a la pkg-config(1) files)
<br>
- wrapper data text files list -l&lt;top_lib&gt; in libs, and everything else in libs_private.  For example, for mpicc:
<br>
&nbsp;&nbsp;libs=-lmpi
<br>
&nbsp;&nbsp;libs_private=-lopen-rte -lopen-pal
<br>
<p>*** NEXT: give the wrappers the ability to switch between just ${libs} or ${libs}+${libs_private}.  Pseudocode:
<br>
- wrapper always adds ${libs} to the argv
<br>
- wrapper examines each argv[x]:
<br>
&nbsp;&nbsp;--ompi:shared) found_in_argv=1 ;;
<br>
&nbsp;&nbsp;--ompi:static) add ${libs_private} ; found_in_argv=1 ;;
<br>
- if (!found_in_argv) 
<br>
&nbsp;&nbsp;- if default set via configure, add ${libs_private} (SEE BELOW)
<br>
<p>*** LAST: give sysadmin ability to set wrapper behavior defaults
<br>
- if --disable-shared is set in OMPI's configure, wrappers default to adding both ${libs} and ${libs_private}
<br>
- new configure option: --enable-wrapper-static-link-by-default (or some better name) which forces wrappers to default add ${libs} and ${libs_private} (--disable... does the opposite)
<br>
<p>Note that per above, wrapper command line options always override configure defaults.
<br>
<p>This is not entirely perfect, for the following reasons:
<br>
<p>1. sysadmins may have to specify a new option to configure (only if they build both static and shared and want users to default to static)
<br>
2. two new options to the wrappers
<br>
3. you can still get in a situation where the wrapper will fail (e.g., wrapper only uses ${libs}, but only the .a's exist, and therefore the link fails)
<br>
<p>I think #1 and #2 are tolerable.  
<br>
<p>I can't think of a reasonable case where #3 can occur without someone mucking with an already-installed OMPI (e.g., &quot;rm $prefix/lib/libmpi.so&quot;).  The only case I can think of where this *might* happen is with RPMs -- ompi (which has libmpi.so) and ompi-devel (which has libmpi.a).  ompi-devel depends on ompi, so you couldn't remove the ompi RPM (libmpi.so) and only leave the ompi-devel RPM (libmpi.a).  Hence, I even think #3 is tolerable.
<br>
<p>Thoughts?  Opinions?  Need caffeine?  WAKE UP!  The proposal's over.  ;-)
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7448.php">Barrett, Brian W: "Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning"</a>
<li><strong>Previous message:</strong> <a href="7446.php">Greg Watson: "Re: [OMPI devel] configure question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7448.php">Barrett, Brian W: "Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning"</a>
<li><strong>Reply:</strong> <a href="7448.php">Barrett, Brian W: "Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning"</a>
<li><strong>Maybe reply:</strong> <a href="7467.php">Graham, Richard L.: "Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning"</a>
<li><strong>Maybe reply:</strong> <a href="7470.php">Graham, Richard L.: "Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning"</a>
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
