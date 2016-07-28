<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Aug 26 12:50:16 2007" -->
<!-- isoreceived="20070826165016" -->
<!-- sent="Sun, 26 Aug 2007 18:44:18 +0200" -->
<!-- isosent="20070826164418" -->
<!-- name="Bernd Schubert" -->
<!-- email="bernd-schubert_at_[hidden]" -->
<!-- subject="[OMPI users] buildsystem / adio-lustre-mpich2-v02.patch" -->
<!-- id="fasal5$gfu$1_at_sea.gmane.org" -->
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
<strong>From:</strong> Bernd Schubert (<em>bernd-schubert_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-26 12:44:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3924.php">Lev Givon: "[OMPI users] running jobs on a remote XGrid cluster via mpirun"</a>
<li><strong>Previous message:</strong> <a href="3922.php">Brian Barrett: "Re: [OMPI users] failure to link on macosx"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3954.php">Robert Latham: "Re: [OMPI users] buildsystem / adio-lustre-mpich2-v02.patch"</a>
<li><strong>Reply:</strong> <a href="3954.php">Robert Latham: "Re: [OMPI users] buildsystem / adio-lustre-mpich2-v02.patch"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I'm presently trying to add lustre support to open-mpi's romio using this
<br>
patch <a href="http://ft.ornl.gov/projects/io/src/adio-lustre-mpich2-v02.patch">http://ft.ornl.gov/projects/io/src/adio-lustre-mpich2-v02.patch</a>.
<br>
<p>It basically applies, only a few C files have been renamed in open-mpi, but
<br>
the autotools build system gives me headaches.
<br>
<p>Lets look into romio/romio/adio/Makefile.am:
<br>
<p>e.g. 
<br>
<p>if BUILD_XFS
<br>
XFS_DIR = ad_xfs
<br>
XFS_LIB = ad_xfs/libadio_xfs.la
<br>
else
<br>
XFS_DIR =
<br>
XFS_LIB =
<br>
endif
<br>
<p>Fine, adding a similar entry for lustre is easy, but now we need to define
<br>
BUILD_XFS. So where does this come from?
<br>
There is romio/romio/Makefile.in 
<br>
<p>BUILD_UFS_FALSE = @BUILD_UFS_FALSE@
<br>
BUILD_UFS_TRUE = @BUILD_UFS_TRUE@
<br>
BUILD_XFS_FALSE = @BUILD_XFS_FALSE@
<br>
BUILD_XFS_TRUE = @BUILD_XFS_TRUE@
<br>
CC = @CC@
<br>
<p>But Makefile.in is auto-generated from Makefile.am, so lets look into
<br>
Makefile.am:
<br>
<p># Copyright  ... 
<br>
<p>include $(top_srcdir)/Makefile.options
<br>
<p>SUBDIRS = include adio mpi-io
<br>
DIST_SUBDIRS = $(SUBDIRS) doc util
<br>
<p>EXTRA_DIST = README COPYRIGHT README_OMPI
<br>
<p>noinst_LTLIBRARIES = libromio_dist.la
<br>
libromio_dist_la_SOURCES =
<br>
libromio_dist_la_LIBADD  = \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;adio/libadio.la \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpi-io/libmpi-io.la \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpi-io/glue/openmpi/libglue.la @ROMIO_LIBLIST@
<br>
libromio_dist_la_DEPENDENCIES = \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;adio/libadio.la \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpi-io/libmpi-io.la \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpi-io/glue/openmpi/libglue.la
<br>
<p>Not a single line about any file system. Grepping further for
<br>
BUILD_XFS_FALSE doesn't return any results. So maybe its in
<br>
$(top_srcdir)/Makefile.options. 
<br>
<p>bernd_at_bathl openmpi-1.2.3&gt;find . -name 'Makefile.options'
<br>
./ompi/mca/io/romio/romio/Makefile.options
<br>
./config/Makefile.options
<br>
<p>./config/Makefile.options hardly doesn't qualify as $(top_srcdir), so it
<br>
must be ./ompi/mca/io/romio/romio/Makefile.options:
<br>
<p># Copyright
<br>
<p>AUTOMAKE_OPTIONS        = foreign dist-bzip2
<br>
<p># $(top_ompi_srcdir)                - mca_base_param.h
<br>
# $(top_ompi_srcdir)/opal/include   - opal_config_bottom.h
<br>
# $(top_ompi_builddir)/opal/include - opal_config.h
<br>
# $(top_ompi_builddir)/ompi/include - mpi.h
<br>
# $(top_srcdir)/include             - vpath support
<br>
# $(top_srcdir)/adio/include        - vpath support
<br>
<p>AM_CPPFLAGS = \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-DOMPI_BUILDING=1 \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-I$(top_ompi_srcdir) \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-I$(top_ompi_srcdir)/opal/include \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-I$(top_ompi_builddir)/opal/include \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-I$(top_ompi_builddir)/ompi/include \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-I$(top_srcdir)/include \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-I$(top_srcdir)/adio/include
<br>
<p><p>Not a single line about filesystems, *grumble*.
<br>
<p>Now lets assume I eventually find the proper autotools files to patch lustre
<br>
support in, how can I distribute that patch? In principle I would have to
<br>
distribute a patch that also patches the auto-generated configure,
<br>
automake.in, etc files. But even if romio won't change on the next release
<br>
of open-mpi, the autotools files probably will (and even only because they
<br>
have been created with a newer autotools version).
<br>
You might already assume it, but I really hate this stupid autotools build
<br>
system, I'm strongly supporting people who call it autohell.
<br>
<p>Any plans for a sane build system?
<br>
<p><p>Thanks,
<br>
Bernd
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3924.php">Lev Givon: "[OMPI users] running jobs on a remote XGrid cluster via mpirun"</a>
<li><strong>Previous message:</strong> <a href="3922.php">Brian Barrett: "Re: [OMPI users] failure to link on macosx"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3954.php">Robert Latham: "Re: [OMPI users] buildsystem / adio-lustre-mpich2-v02.patch"</a>
<li><strong>Reply:</strong> <a href="3954.php">Robert Latham: "Re: [OMPI users] buildsystem / adio-lustre-mpich2-v02.patch"</a>
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
