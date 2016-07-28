<?
$subject_val = "Re: [OMPI users] Adding a new BTL";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 25 17:15:29 2016" -->
<!-- isoreceived="20160225221529" -->
<!-- sent="Thu, 25 Feb 2016 22:15:27 +0000" -->
<!-- isosent="20160225221527" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Adding a new BTL" -->
<!-- id="620B0100-B493-42E1-9310-C7C5DBB1AE47_at_cisco.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAHXxYDiEMXs4kfM69=fzTgFi9accHE6fWuxcnhFedJ79emTpQg_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-25 17:15:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28579.php">dpchoudh .: "Re: [OMPI users] Adding a new BTL"</a>
<li><strong>Previous message:</strong> <a href="28577.php">dpchoudh .: "Re: [OMPI users] Adding a new BTL"</a>
<li><strong>In reply to:</strong> <a href="28577.php">dpchoudh .: "Re: [OMPI users] Adding a new BTL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28579.php">dpchoudh .: "Re: [OMPI users] Adding a new BTL"</a>
<li><strong>Reply:</strong> <a href="28579.php">dpchoudh .: "Re: [OMPI users] Adding a new BTL"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can you send the full output from autogen and configure?
<br>

<br>
Also, this is probably better suited for the Devel list, since we're talking about OMPI internals.
<br>

<br>
Sent from my phone. No type good.
<br>

<br>
On Feb 25, 2016, at 2:06 PM, dpchoudh . &lt;dpchoudh_at_[hidden]&lt;mailto:dpchoudh_at_[hidden]&gt;&gt; wrote:
<br>

<br>
Hello Gilles
<br>

<br>
Thank you very much for your advice. Yes, I copied the templates from the master branch to the 1.10.2 release, since the release does not have them. And yes, changing the Makefile.am as you suggest did make the autogen error go away.
<br>

<br>
However, in the master branch, the autotools seem to be ignoring the new btl directory altogether; i.e. I do not get a Makefile.in from the Makefile.am.
<br>

<br>
In the 1.10.2 release, doing an identical sequence of steps do create a Makefile.in from Makefile.am (via autogen) and a Makefile from Makefile.in (via configure), but of course, the new BTL does not build because the include paths in master and 1.10.2 are different.
<br>

<br>
My Makefile.am and configure.m4 are as follows. Any thoughts on what it would take in the master branch to hook up the new BTL directory?
<br>

<br>
--------opal/mca/btl/lf/configure.m4--------
<br>
# ------------------------------------------------
<br>
AC_DEFUN([MCA_opal_btl_lf_CONFIG],[
<br>
&nbsp;&nbsp;&nbsp;&nbsp;AC_CONFIG_FILES([opal/mca/btl/lf/Makefile])
<br>
])dnl
<br>

<br>
------------opal/mca/btl/lf/Makefile.am-------
<br>
amca_paramdir = $(AMCA_PARAM_SETS_DIR)
<br>
dist_amca_param_DATA = netpipe-btl-lf.txt
<br>

<br>
sources = \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;btl_lf.c \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;btl_lf.h \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;btl_lf_component.c \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;btl_lf_endpoint.c \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;btl_lf_endpoint.h \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;btl_lf_frag.c \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;btl_lf_frag.h \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;btl_lf_proc.c \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;btl_lf_proc.h
<br>

<br>
# Make the output library in this directory, and name it either
<br>
# mca_&lt;type&gt;_&lt;name&gt;.la (for DSO builds) or libmca_&lt;type&gt;_&lt;name&gt;.la
<br>
# (for static builds).
<br>

<br>
if MCA_BUILD_opal_btl_lf_DSO
<br>
lib =
<br>
lib_sources =
<br>
component = mca_btl_lf.la&lt;<a href="http://mca_btl_lf.la">http://mca_btl_lf.la</a>&gt;
<br>
component_sources = $(sources)
<br>
else
<br>
lib = libmca_btl_lf.la&lt;<a href="http://libmca_btl_lf.la">http://libmca_btl_lf.la</a>&gt;
<br>
lib_sources = $(sources)
<br>
component =
<br>
component_sources =
<br>
endif
<br>

<br>
mcacomponentdir = $(opallibdir)
<br>
mcacomponent_LTLIBRARIES = $(component)
<br>
mca_btl_lf_la_SOURCES = $(component_sources)
<br>
mca_btl_lf_la_LDFLAGS = -module -avoid-version
<br>

<br>
noinst_LTLIBRARIES = $(lib)
<br>
libmca_btl_lf_la_SOURCES = $(lib_sources)
<br>
libmca_btl_lf_la_LDFLAGS = -module -avoid-version
<br>

<br>
---------------------------------------------
<br>

<br>
Life is complex. It has real and imaginary parts.
<br>

<br>
On Thu, Feb 25, 2016 at 3:10 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&lt;mailto:gilles.gouaillardet_at_[hidden]&gt;&gt; wrote:
<br>
Did you copy the template from the master branch into the v1.10 branch ?
<br>
if so, you need to replacing MCA_BUILD_opal_btl_lf_DSO with
<br>
MCA_BUILD_ompi_btl_lf_DSO will likely solve your issue.
<br>
you do need a configure.m4 (otherwise your btl will not be built) but
<br>
you do not need AC_MSG_FAILURE
<br>

<br>
as far as i am concerned, i would develop in the master branch, and
<br>
then back port it into the v1.10 branch when it is ready.
<br>

<br>
fwiw, btl used to be in ompi/mca/btl (still the case in v1.10) and
<br>
have been moved into opal/mca/btl since v2.x
<br>
so it is quite common a bit of porting is required, most of the time,
<br>
it consists in replacing OMPI like macros by OPAL like macros
<br>

<br>
Cheers,
<br>

<br>
Gilles
<br>

<br>
On Thu, Feb 25, 2016 at 3:54 PM, dpchoudh . &lt;dpchoudh_at_[hidden]&lt;mailto:dpchoudh_at_[hidden]&gt;&gt; wrote:
<br>
<span class="quotelev1">&gt; Hello all
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am not sure if this question belongs in the user list or the
</span><br>
<span class="quotelev1">&gt; developer list, but because it is a simpler question I am trying the
</span><br>
<span class="quotelev1">&gt; user list first.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am trying to add a new BTL for a proprietary transport.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As step #0, I copied the BTL template, renamed the 'template' to
</span><br>
<span class="quotelev1">&gt; something else, and ran autogen.sh at the top level directory (of
</span><br>
<span class="quotelev1">&gt; openMPI 1.10.2). The Makefile.am is identical to what is provided in
</span><br>
<span class="quotelev1">&gt; the template except that all the 'template' has been substituted with
</span><br>
<span class="quotelev1">&gt; 'lf', the name of the fabric.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; With that, I get the following error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;snip&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; autoreconf: running: /usr/bin/autoconf --include=config --force
</span><br>
<span class="quotelev1">&gt; --warnings=all,no-obsolete,no-override
</span><br>
<span class="quotelev1">&gt; autoreconf: running: /usr/bin/autoheader --include=config --force
</span><br>
<span class="quotelev1">&gt; --warnings=all,no-obsolete,no-override
</span><br>
<span class="quotelev1">&gt; autoreconf: running: automake --add-missing --copy --force-missing
</span><br>
<span class="quotelev1">&gt; --warnings=all,no-obsolete,no-override
</span><br>
<span class="quotelev1">&gt; configure.ac:320&lt;<a href="http://configure.ac:320">http://configure.ac:320</a>&gt;: installing 'config/compile'
</span><br>
<span class="quotelev1">&gt; configure.ac:73&lt;<a href="http://configure.ac:73">http://configure.ac:73</a>&gt;: installing 'config/config.guess'
</span><br>
<span class="quotelev1">&gt; configure.ac:73&lt;<a href="http://configure.ac:73">http://configure.ac:73</a>&gt;: installing 'config/config.sub'
</span><br>
<span class="quotelev1">&gt; configure.ac:93&lt;<a href="http://configure.ac:93">http://configure.ac:93</a>&gt;: installing 'config/install-sh'
</span><br>
<span class="quotelev1">&gt; configure.ac:93&lt;<a href="http://configure.ac:93">http://configure.ac:93</a>&gt;: installing 'config/missing'
</span><br>
<span class="quotelev1">&gt; ompi/Makefile.am: installing 'config/depcomp'
</span><br>
<span class="quotelev1">&gt; ompi/mca/btl/lf/Makefile.am:33: error: MCA_BUILD_opal_btl_lf_DSO does
</span><br>
<span class="quotelev1">&gt; not appear in AM_CONDITIONAL
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tried adding a configure.m4 file to the btl directory with the
</span><br>
<span class="quotelev1">&gt; following content:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # MCA_btl_lf_CONFIG([action-if-can-compile],
</span><br>
<span class="quotelev1">&gt; #                   [action-if-cant-compile])
</span><br>
<span class="quotelev1">&gt; # ------------------------------------------------
</span><br>
<span class="quotelev1">&gt; AC_DEFUN([MCA_ompi_btl_lf_CONFIG],[
</span><br>
<span class="quotelev1">&gt;     AC_CONFIG_FILES([ompi/mca/btl/lf/Makefile])
</span><br>
<span class="quotelev1">&gt;     AC_MSG_FAILURE
</span><br>
<span class="quotelev1">&gt; ])dnl
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; but the error remains.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am sure I am missing at least one step, but am lost in the huge
</span><br>
<span class="quotelev1">&gt; codebase. Please help.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you
</span><br>
<span class="quotelev1">&gt; Durga
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Life is complex. It has real and imaginary parts.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/02/28575.php">http://www.open-mpi.org/community/lists/users/2016/02/28575.php</a>
</span><br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/02/28576.php">http://www.open-mpi.org/community/lists/users/2016/02/28576.php</a>
<br>

<br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/02/28577.php">http://www.open-mpi.org/community/lists/users/2016/02/28577.php</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28578/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28579.php">dpchoudh .: "Re: [OMPI users] Adding a new BTL"</a>
<li><strong>Previous message:</strong> <a href="28577.php">dpchoudh .: "Re: [OMPI users] Adding a new BTL"</a>
<li><strong>In reply to:</strong> <a href="28577.php">dpchoudh .: "Re: [OMPI users] Adding a new BTL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28579.php">dpchoudh .: "Re: [OMPI users] Adding a new BTL"</a>
<li><strong>Reply:</strong> <a href="28579.php">dpchoudh .: "Re: [OMPI users] Adding a new BTL"</a>
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
