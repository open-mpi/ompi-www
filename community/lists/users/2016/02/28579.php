<?
$subject_val = "Re: [OMPI users] Adding a new BTL";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 25 17:27:48 2016" -->
<!-- isoreceived="20160225222748" -->
<!-- sent="Thu, 25 Feb 2016 17:27:45 -0500" -->
<!-- isosent="20160225222745" -->
<!-- name="dpchoudh ." -->
<!-- email="dpchoudh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Adding a new BTL" -->
<!-- id="CAHXxYDhUqiVc0_nT+aj71OMLtGkJ2fGZoNitbCjfooW6bcLDWQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="620B0100-B493-42E1-9310-C7C5DBB1AE47_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Adding a new BTL<br>
<strong>From:</strong> dpchoudh . (<em>dpchoudh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-25 17:27:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28580.php">Tang Cheng Yee: "[OMPI users] Problem when installing OpenMPI during make all install"</a>
<li><strong>Previous message:</strong> <a href="28578.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Adding a new BTL"</a>
<li><strong>In reply to:</strong> <a href="28578.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Adding a new BTL"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you, Jeff. I'll start a new thread on this on the devel list.
<br>
<p>Durga
<br>
<p>Life is complex. It has real and imaginary parts.
<br>
<p>On Thu, Feb 25, 2016 at 5:15 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; Can you send the full output from autogen and configure?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also, this is probably better suited for the Devel list, since we're
</span><br>
<span class="quotelev1">&gt; talking about OMPI internals.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sent from my phone. No type good.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 25, 2016, at 2:06 PM, dpchoudh . &lt;dpchoudh_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you very much for your advice. Yes, I copied the templates from the
</span><br>
<span class="quotelev1">&gt; master branch to the 1.10.2 release, since the release does not have them.
</span><br>
<span class="quotelev1">&gt; And yes, changing the Makefile.am as you suggest did make the autogen error
</span><br>
<span class="quotelev1">&gt; go away.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, in the master branch, the autotools seem to be ignoring the new
</span><br>
<span class="quotelev1">&gt; btl directory altogether; i.e. I do not get a Makefile.in from the
</span><br>
<span class="quotelev1">&gt; Makefile.am.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In the 1.10.2 release, doing an identical sequence of steps do create a
</span><br>
<span class="quotelev1">&gt; Makefile.in from Makefile.am (via autogen) and a Makefile from Makefile.in
</span><br>
<span class="quotelev1">&gt; (via configure), but of course, the new BTL does not build because the
</span><br>
<span class="quotelev1">&gt; include paths in master and 1.10.2 are different.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My Makefile.am and configure.m4 are as follows. Any thoughts on what it
</span><br>
<span class="quotelev1">&gt; would take in the master branch to hook up the new BTL directory?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------opal/mca/btl/lf/configure.m4--------
</span><br>
<span class="quotelev1">&gt; # ------------------------------------------------
</span><br>
<span class="quotelev1">&gt; AC_DEFUN([MCA_opal_btl_lf_CONFIG],[
</span><br>
<span class="quotelev1">&gt;     AC_CONFIG_FILES([opal/mca/btl/lf/Makefile])
</span><br>
<span class="quotelev1">&gt; ])dnl
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------opal/mca/btl/lf/Makefile.am-------
</span><br>
<span class="quotelev1">&gt; amca_paramdir = $(AMCA_PARAM_SETS_DIR)
</span><br>
<span class="quotelev1">&gt; dist_amca_param_DATA = netpipe-btl-lf.txt
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; sources = \
</span><br>
<span class="quotelev1">&gt;     btl_lf.c \
</span><br>
<span class="quotelev1">&gt;     btl_lf.h \
</span><br>
<span class="quotelev1">&gt;     btl_lf_component.c \
</span><br>
<span class="quotelev1">&gt;     btl_lf_endpoint.c \
</span><br>
<span class="quotelev1">&gt;     btl_lf_endpoint.h \
</span><br>
<span class="quotelev1">&gt;     btl_lf_frag.c \
</span><br>
<span class="quotelev1">&gt;     btl_lf_frag.h \
</span><br>
<span class="quotelev1">&gt;     btl_lf_proc.c \
</span><br>
<span class="quotelev1">&gt;     btl_lf_proc.h
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # Make the output library in this directory, and name it either
</span><br>
<span class="quotelev1">&gt; # mca_&lt;type&gt;_&lt;name&gt;.la (for DSO builds) or libmca_&lt;type&gt;_&lt;name&gt;.la
</span><br>
<span class="quotelev1">&gt; # (for static builds).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; if MCA_BUILD_opal_btl_lf_DSO
</span><br>
<span class="quotelev1">&gt; lib =
</span><br>
<span class="quotelev1">&gt; lib_sources =
</span><br>
<span class="quotelev1">&gt; component = mca_btl_lf.la
</span><br>
<span class="quotelev1">&gt; component_sources = $(sources)
</span><br>
<span class="quotelev1">&gt; else
</span><br>
<span class="quotelev1">&gt; lib = libmca_btl_lf.la
</span><br>
<span class="quotelev1">&gt; lib_sources = $(sources)
</span><br>
<span class="quotelev1">&gt; component =
</span><br>
<span class="quotelev1">&gt; component_sources =
</span><br>
<span class="quotelev1">&gt; endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mcacomponentdir = $(opallibdir)
</span><br>
<span class="quotelev1">&gt; mcacomponent_LTLIBRARIES = $(component)
</span><br>
<span class="quotelev1">&gt; mca_btl_lf_la_SOURCES = $(component_sources)
</span><br>
<span class="quotelev1">&gt; mca_btl_lf_la_LDFLAGS = -module -avoid-version
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; noinst_LTLIBRARIES = $(lib)
</span><br>
<span class="quotelev1">&gt; libmca_btl_lf_la_SOURCES = $(lib_sources)
</span><br>
<span class="quotelev1">&gt; libmca_btl_lf_la_LDFLAGS = -module -avoid-version
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Life is complex. It has real and imaginary parts.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Feb 25, 2016 at 3:10 AM, Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev1">&gt; gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Did you copy the template from the master branch into the v1.10 branch ?
</span><br>
<span class="quotelev2">&gt;&gt; if so, you need to replacing MCA_BUILD_opal_btl_lf_DSO with
</span><br>
<span class="quotelev2">&gt;&gt; MCA_BUILD_ompi_btl_lf_DSO will likely solve your issue.
</span><br>
<span class="quotelev2">&gt;&gt; you do need a configure.m4 (otherwise your btl will not be built) but
</span><br>
<span class="quotelev2">&gt;&gt; you do not need AC_MSG_FAILURE
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; as far as i am concerned, i would develop in the master branch, and
</span><br>
<span class="quotelev2">&gt;&gt; then back port it into the v1.10 branch when it is ready.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; fwiw, btl used to be in ompi/mca/btl (still the case in v1.10) and
</span><br>
<span class="quotelev2">&gt;&gt; have been moved into opal/mca/btl since v2.x
</span><br>
<span class="quotelev2">&gt;&gt; so it is quite common a bit of porting is required, most of the time,
</span><br>
<span class="quotelev2">&gt;&gt; it consists in replacing OMPI like macros by OPAL like macros
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, Feb 25, 2016 at 3:54 PM, dpchoudh . &lt;dpchoudh_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hello all
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I am not sure if this question belongs in the user list or the
</span><br>
<span class="quotelev3">&gt;&gt; &gt; developer list, but because it is a simpler question I am trying the
</span><br>
<span class="quotelev3">&gt;&gt; &gt; user list first.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I am trying to add a new BTL for a proprietary transport.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; As step #0, I copied the BTL template, renamed the 'template' to
</span><br>
<span class="quotelev3">&gt;&gt; &gt; something else, and ran autogen.sh at the top level directory (of
</span><br>
<span class="quotelev3">&gt;&gt; &gt; openMPI 1.10.2). The Makefile.am is identical to what is provided in
</span><br>
<span class="quotelev3">&gt;&gt; &gt; the template except that all the 'template' has been substituted with
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 'lf', the name of the fabric.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; With that, I get the following error:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &lt;snip&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; autoreconf: running: /usr/bin/autoconf --include=config --force
</span><br>
<span class="quotelev3">&gt;&gt; &gt; --warnings=all,no-obsolete,no-override
</span><br>
<span class="quotelev3">&gt;&gt; &gt; autoreconf: running: /usr/bin/autoheader --include=config --force
</span><br>
<span class="quotelev3">&gt;&gt; &gt; --warnings=all,no-obsolete,no-override
</span><br>
<span class="quotelev3">&gt;&gt; &gt; autoreconf: running: automake --add-missing --copy --force-missing
</span><br>
<span class="quotelev3">&gt;&gt; &gt; --warnings=all,no-obsolete,no-override
</span><br>
<span class="quotelev3">&gt;&gt; &gt; configure.ac:320: installing 'config/compile'
</span><br>
<span class="quotelev3">&gt;&gt; &gt; configure.ac:73: installing 'config/config.guess'
</span><br>
<span class="quotelev3">&gt;&gt; &gt; configure.ac:73: installing 'config/config.sub'
</span><br>
<span class="quotelev3">&gt;&gt; &gt; configure.ac:93: installing 'config/install-sh'
</span><br>
<span class="quotelev3">&gt;&gt; &gt; configure.ac:93: installing 'config/missing'
</span><br>
<span class="quotelev3">&gt;&gt; &gt; ompi/Makefile.am: installing 'config/depcomp'
</span><br>
<span class="quotelev3">&gt;&gt; &gt; ompi/mca/btl/lf/Makefile.am:33: error: MCA_BUILD_opal_btl_lf_DSO does
</span><br>
<span class="quotelev3">&gt;&gt; &gt; not appear in AM_CONDITIONAL
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I tried adding a configure.m4 file to the btl directory with the
</span><br>
<span class="quotelev3">&gt;&gt; &gt; following content:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; # MCA_btl_lf_CONFIG([action-if-can-compile],
</span><br>
<span class="quotelev3">&gt;&gt; &gt; #                   [action-if-cant-compile])
</span><br>
<span class="quotelev3">&gt;&gt; &gt; # ------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt; &gt; AC_DEFUN([MCA_ompi_btl_lf_CONFIG],[
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     AC_CONFIG_FILES([ompi/mca/btl/lf/Makefile])
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     AC_MSG_FAILURE
</span><br>
<span class="quotelev3">&gt;&gt; &gt; ])dnl
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; but the error remains.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I am sure I am missing at least one step, but am lost in the huge
</span><br>
<span class="quotelev3">&gt;&gt; &gt; codebase. Please help.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Thank you
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Durga
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Life is complex. It has real and imaginary parts.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/02/28575.php">http://www.open-mpi.org/community/lists/users/2016/02/28575.php</a>
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/02/28576.php">http://www.open-mpi.org/community/lists/users/2016/02/28576.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/02/28577.php">http://www.open-mpi.org/community/lists/users/2016/02/28577.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/02/28578.php">http://www.open-mpi.org/community/lists/users/2016/02/28578.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28579/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28580.php">Tang Cheng Yee: "[OMPI users] Problem when installing OpenMPI during make all install"</a>
<li><strong>Previous message:</strong> <a href="28578.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Adding a new BTL"</a>
<li><strong>In reply to:</strong> <a href="28578.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Adding a new BTL"</a>
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
