<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Aug  2 20:35:39 2006" -->
<!-- isoreceived="20060803003539" -->
<!-- sent="Wed, 02 Aug 2006 18:35:37 -0600" -->
<!-- isosent="20060803003537" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="[OMPI devel] trunk changes: F90 shared libraries / New one-sided component" -->
<!-- id="1154565337.2766.10.camel_at_boxtop.lanl.gov" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-08-02 20:35:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0985.php">Jake Dunno: "Re: [OMPI devel] The results of your email commands"</a>
<li><strong>Previous message:</strong> <a href="0983.php">Jeff Squyres: "Re: [OMPI devel] MPI_MAX_INFO_KEY used when MPI_MAX_INFO_VAL should be"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all -
<br>
<p>Two large changes to the SVN trunk just occurred which require an
<br>
autogen.sh on your part.  First, we now (mostly) support building the
<br>
Fortran 90 MPI bindings library as a shared library.  This has been
<br>
something Dan and I have been working on since the Burlington meeting,
<br>
and it's ready for wider testing.  There are some things to pay
<br>
attention to with this change:
<br>
<p>&nbsp;&nbsp;1) If your Fortran 77 and Fortran 90 compilers have different names,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;you *MUST* update to libtool 2.0 or disable F90 support.
<br>
<p>&nbsp;&nbsp;2) If your Fortran 77 and Fortran 90 compilers have the same name,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;you can continue using Libtool 1.5.22
<br>
<p>&nbsp;&nbsp;3) On all platforms other than OS X, the f90 support library is built
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;as a shared library by default (following the way the other
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libraries are built).  OS X always builds a static library due to
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;common block issues.
<br>
<p>Configure will determine if you are using an older version of libtool
<br>
and the Fortran compilers will cause problem.  Libtool 2.0 isn't at a
<br>
stable release yet, but we need to provide a shared library for the
<br>
bindings as part of the 1.2 release, so we'll have to deal with the
<br>
pre-releases of Libtool.  The nightly tarballs of the SVN trunk have
<br>
been created using a pre-release of LT for about the last 2 weeks, so we
<br>
don't anticipate any problems with this.
<br>
<p>Second, there are now two one-sided communication components.  The one
<br>
previously known as &quot;pt2pt&quot; has been renamed &quot;rdma&quot; and there is now a
<br>
new component &quot;pt2pt&quot;.  The new &quot;pt2pt&quot; component is entirely (and
<br>
somewhat inefficiently) implemented over the PML (two-sided) interface
<br>
and was added to support the use of the CM PML / MTLs, which will be
<br>
part of the 1.2 release.  The &quot;rdma&quot; component will be preferred over
<br>
the &quot;pt2pt&quot; component, but will only allow itself to be activated when a
<br>
PML using the BML/BTL infrastructure is being used.  While the &quot;rdma&quot;
<br>
component doesn't use any of the BTL rdma interface at the moment, this
<br>
is something I will be changing in the near future.  So eventually, the
<br>
name will be more fitting than it is right now.
<br>
<p>Both of these changes will require a full autogen.sh ; configure ; make
<br>
cycle when you next SVN update.
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0985.php">Jake Dunno: "Re: [OMPI devel] The results of your email commands"</a>
<li><strong>Previous message:</strong> <a href="0983.php">Jeff Squyres: "Re: [OMPI devel] MPI_MAX_INFO_KEY used when MPI_MAX_INFO_VAL should be"</a>
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
