<?
$subject_val = "Re: [OMPI devel] [OMPI users] Adding a new BTL";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 25 19:02:48 2016" -->
<!-- isoreceived="20160226000248" -->
<!-- sent="Fri, 26 Feb 2016 09:02:47 +0900" -->
<!-- isosent="20160226000247" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI users] Adding a new BTL" -->
<!-- id="CAAkFZ5uw4EYuAMw5Qp91MXYZzuBQH2Lx1JfZT69L-UQ+nDOufA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAHXxYDheXUACi96UkOXpN9A+RxX=F5GSsg1BeHnBwgMnkxSM9Q_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI users] Adding a new BTL<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-25 19:02:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18627.php">dpchoudh .: "Re: [OMPI devel] [OMPI users] Adding a new BTL"</a>
<li><strong>Previous message:</strong> <a href="18625.php">dpchoudh .: "Re: [OMPI devel] [OMPI users] Adding a new BTL"</a>
<li><strong>In reply to:</strong> <a href="18625.php">dpchoudh .: "Re: [OMPI devel] [OMPI users] Adding a new BTL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18627.php">dpchoudh .: "Re: [OMPI devel] [OMPI users] Adding a new BTL"</a>
<li><strong>Reply:</strong> <a href="18627.php">dpchoudh .: "Re: [OMPI devel] [OMPI users] Adding a new BTL"</a>
<li><strong>Reply:</strong> <a href="18629.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI users] Adding a new BTL"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
on master/v2.x, you also have to
<br>
<p>rm -f opal/mca/btl/lf/.opal_ignore
<br>
<p>(and this file would have been .ompi_ignore on v1.10)
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Fri, Feb 26, 2016 at 7:44 AM, dpchoudh . &lt;dpchoudh_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hello Jeff and other developers:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Attached are five files:
</span><br>
<span class="quotelev1">&gt; 1-2: Full output from autogen.pl and configure, captured with: ./&lt;cmd&gt; 2&gt;&amp;1
</span><br>
<span class="quotelev1">&gt; | tee &lt;cmd&gt;.log
</span><br>
<span class="quotelev1">&gt; 3. Makefile.am of the specific BTL directory
</span><br>
<span class="quotelev1">&gt; 4. configure.m4 of the same directory
</span><br>
<span class="quotelev1">&gt; 5. config.log, as generated internally by autotools
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you
</span><br>
<span class="quotelev1">&gt; Durga
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Life is complex. It has real and imaginary parts.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Feb 25, 2016 at 5:15 PM, Jeff Squyres (jsquyres)
</span><br>
<span class="quotelev1">&gt; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can you send the full output from autogen and configure?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Also, this is probably better suited for the Devel list, since we're
</span><br>
<span class="quotelev2">&gt;&gt; talking about OMPI internals.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sent from my phone. No type good.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 25, 2016, at 2:06 PM, dpchoudh . &lt;dpchoudh_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello Gilles
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you very much for your advice. Yes, I copied the templates from the
</span><br>
<span class="quotelev2">&gt;&gt; master branch to the 1.10.2 release, since the release does not have them.
</span><br>
<span class="quotelev2">&gt;&gt; And yes, changing the Makefile.am as you suggest did make the autogen error
</span><br>
<span class="quotelev2">&gt;&gt; go away.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; However, in the master branch, the autotools seem to be ignoring the new
</span><br>
<span class="quotelev2">&gt;&gt; btl directory altogether; i.e. I do not get a Makefile.in from the
</span><br>
<span class="quotelev2">&gt;&gt; Makefile.am.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In the 1.10.2 release, doing an identical sequence of steps do create a
</span><br>
<span class="quotelev2">&gt;&gt; Makefile.in from Makefile.am (via autogen) and a Makefile from Makefile.in
</span><br>
<span class="quotelev2">&gt;&gt; (via configure), but of course, the new BTL does not build because the
</span><br>
<span class="quotelev2">&gt;&gt; include paths in master and 1.10.2 are different.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My Makefile.am and configure.m4 are as follows. Any thoughts on what it
</span><br>
<span class="quotelev2">&gt;&gt; would take in the master branch to hook up the new BTL directory?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------opal/mca/btl/lf/configure.m4--------
</span><br>
<span class="quotelev2">&gt;&gt; # ------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; AC_DEFUN([MCA_opal_btl_lf_CONFIG],[
</span><br>
<span class="quotelev2">&gt;&gt;     AC_CONFIG_FILES([opal/mca/btl/lf/Makefile])
</span><br>
<span class="quotelev2">&gt;&gt; ])dnl
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ------------opal/mca/btl/lf/Makefile.am-------
</span><br>
<span class="quotelev2">&gt;&gt; amca_paramdir = $(AMCA_PARAM_SETS_DIR)
</span><br>
<span class="quotelev2">&gt;&gt; dist_amca_param_DATA = netpipe-btl-lf.txt
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; sources = \
</span><br>
<span class="quotelev2">&gt;&gt;     btl_lf.c \
</span><br>
<span class="quotelev2">&gt;&gt;     btl_lf.h \
</span><br>
<span class="quotelev2">&gt;&gt;     btl_lf_component.c \
</span><br>
<span class="quotelev2">&gt;&gt;     btl_lf_endpoint.c \
</span><br>
<span class="quotelev2">&gt;&gt;     btl_lf_endpoint.h \
</span><br>
<span class="quotelev2">&gt;&gt;     btl_lf_frag.c \
</span><br>
<span class="quotelev2">&gt;&gt;     btl_lf_frag.h \
</span><br>
<span class="quotelev2">&gt;&gt;     btl_lf_proc.c \
</span><br>
<span class="quotelev2">&gt;&gt;     btl_lf_proc.h
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; # Make the output library in this directory, and name it either
</span><br>
<span class="quotelev2">&gt;&gt; # mca_&lt;type&gt;_&lt;name&gt;.la (for DSO builds) or libmca_&lt;type&gt;_&lt;name&gt;.la
</span><br>
<span class="quotelev2">&gt;&gt; # (for static builds).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; if MCA_BUILD_opal_btl_lf_DSO
</span><br>
<span class="quotelev2">&gt;&gt; lib =
</span><br>
<span class="quotelev2">&gt;&gt; lib_sources =
</span><br>
<span class="quotelev2">&gt;&gt; component = mca_btl_lf.la
</span><br>
<span class="quotelev2">&gt;&gt; component_sources = $(sources)
</span><br>
<span class="quotelev2">&gt;&gt; else
</span><br>
<span class="quotelev2">&gt;&gt; lib = libmca_btl_lf.la
</span><br>
<span class="quotelev2">&gt;&gt; lib_sources = $(sources)
</span><br>
<span class="quotelev2">&gt;&gt; component =
</span><br>
<span class="quotelev2">&gt;&gt; component_sources =
</span><br>
<span class="quotelev2">&gt;&gt; endif
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mcacomponentdir = $(opallibdir)
</span><br>
<span class="quotelev2">&gt;&gt; mcacomponent_LTLIBRARIES = $(component)
</span><br>
<span class="quotelev2">&gt;&gt; mca_btl_lf_la_SOURCES = $(component_sources)
</span><br>
<span class="quotelev2">&gt;&gt; mca_btl_lf_la_LDFLAGS = -module -avoid-version
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; noinst_LTLIBRARIES = $(lib)
</span><br>
<span class="quotelev2">&gt;&gt; libmca_btl_lf_la_SOURCES = $(lib_sources)
</span><br>
<span class="quotelev2">&gt;&gt; libmca_btl_lf_la_LDFLAGS = -module -avoid-version
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ---------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Life is complex. It has real and imaginary parts.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, Feb 25, 2016 at 3:10 AM, Gilles Gouaillardet
</span><br>
<span class="quotelev2">&gt;&gt; &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Did you copy the template from the master branch into the v1.10 branch ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; if so, you need to replacing MCA_BUILD_opal_btl_lf_DSO with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MCA_BUILD_ompi_btl_lf_DSO will likely solve your issue.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you do need a configure.m4 (otherwise your btl will not be built) but
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you do not need AC_MSG_FAILURE
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; as far as i am concerned, i would develop in the master branch, and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; then back port it into the v1.10 branch when it is ready.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fwiw, btl used to be in ompi/mca/btl (still the case in v1.10) and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; have been moved into opal/mca/btl since v2.x
</span><br>
<span class="quotelev3">&gt;&gt;&gt; so it is quite common a bit of porting is required, most of the time,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it consists in replacing OMPI like macros by OPAL like macros
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Thu, Feb 25, 2016 at 3:54 PM, dpchoudh . &lt;dpchoudh_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Hello all
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; I am not sure if this question belongs in the user list or the
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; developer list, but because it is a simpler question I am trying the
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; user list first.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; I am trying to add a new BTL for a proprietary transport.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; As step #0, I copied the BTL template, renamed the 'template' to
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; something else, and ran autogen.sh at the top level directory (of
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; openMPI 1.10.2). The Makefile.am is identical to what is provided in
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; the template except that all the 'template' has been substituted with
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; 'lf', the name of the fabric.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; With that, I get the following error:
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; &lt;snip&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; autoreconf: running: /usr/bin/autoconf --include=config --force
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; --warnings=all,no-obsolete,no-override
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; autoreconf: running: /usr/bin/autoheader --include=config --force
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; --warnings=all,no-obsolete,no-override
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; autoreconf: running: automake --add-missing --copy --force-missing
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; --warnings=all,no-obsolete,no-override
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; configure.ac:320: installing 'config/compile'
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; configure.ac:73: installing 'config/config.guess'
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; configure.ac:73: installing 'config/config.sub'
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; configure.ac:93: installing 'config/install-sh'
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; configure.ac:93: installing 'config/missing'
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; ompi/Makefile.am: installing 'config/depcomp'
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; ompi/mca/btl/lf/Makefile.am:33: error: MCA_BUILD_opal_btl_lf_DSO does
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; not appear in AM_CONDITIONAL
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; I tried adding a configure.m4 file to the btl directory with the
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; following content:
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; # MCA_btl_lf_CONFIG([action-if-can-compile],
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; #                   [action-if-cant-compile])
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; # ------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; AC_DEFUN([MCA_ompi_btl_lf_CONFIG],[
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;     AC_CONFIG_FILES([ompi/mca/btl/lf/Makefile])
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;     AC_MSG_FAILURE
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; ])dnl
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; but the error remains.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; I am sure I am missing at least one step, but am lost in the huge
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; codebase. Please help.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Thank you
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Durga
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Life is complex. It has real and imaginary parts.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Link to this post:
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; <a href="http://www.open-mpi.org/community/lists/users/2016/02/28575.php">http://www.open-mpi.org/community/lists/users/2016/02/28575.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/02/28576.php">http://www.open-mpi.org/community/lists/users/2016/02/28576.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/02/28577.php">http://www.open-mpi.org/community/lists/users/2016/02/28577.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/02/28578.php">http://www.open-mpi.org/community/lists/users/2016/02/28578.php</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/02/18625.php">http://www.open-mpi.org/community/lists/devel/2016/02/18625.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18627.php">dpchoudh .: "Re: [OMPI devel] [OMPI users] Adding a new BTL"</a>
<li><strong>Previous message:</strong> <a href="18625.php">dpchoudh .: "Re: [OMPI devel] [OMPI users] Adding a new BTL"</a>
<li><strong>In reply to:</strong> <a href="18625.php">dpchoudh .: "Re: [OMPI devel] [OMPI users] Adding a new BTL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18627.php">dpchoudh .: "Re: [OMPI devel] [OMPI users] Adding a new BTL"</a>
<li><strong>Reply:</strong> <a href="18627.php">dpchoudh .: "Re: [OMPI devel] [OMPI users] Adding a new BTL"</a>
<li><strong>Reply:</strong> <a href="18629.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI users] Adding a new BTL"</a>
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
