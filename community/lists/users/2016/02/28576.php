<?
$subject_val = "Re: [OMPI users] Adding a new BTL";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 25 03:10:30 2016" -->
<!-- isoreceived="20160225081030" -->
<!-- sent="Thu, 25 Feb 2016 17:10:29 +0900" -->
<!-- isosent="20160225081029" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Adding a new BTL" -->
<!-- id="CAAkFZ5sBY-gp9=z6gDNAdWykE7zfQLT2EiJ+DaY-84SLMfL5ag_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAHXxYDgyqLO=o4knmCPm=V3YTpLTkdOiOOR_Cdy0ZW9M3kskvg_at_mail.gmail.com" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-25 03:10:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28577.php">dpchoudh .: "Re: [OMPI users] Adding a new BTL"</a>
<li><strong>Previous message:</strong> <a href="28575.php">dpchoudh .: "[OMPI users] Adding a new BTL"</a>
<li><strong>In reply to:</strong> <a href="28575.php">dpchoudh .: "[OMPI users] Adding a new BTL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28577.php">dpchoudh .: "Re: [OMPI users] Adding a new BTL"</a>
<li><strong>Reply:</strong> <a href="28577.php">dpchoudh .: "Re: [OMPI users] Adding a new BTL"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
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
<p>as far as i am concerned, i would develop in the master branch, and
<br>
then back port it into the v1.10 branch when it is ready.
<br>
<p>fwiw, btl used to be in ompi/mca/btl (still the case in v1.10) and
<br>
have been moved into opal/mca/btl since v2.x
<br>
so it is quite common a bit of porting is required, most of the time,
<br>
it consists in replacing OMPI like macros by OPAL like macros
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Thu, Feb 25, 2016 at 3:54 PM, dpchoudh . &lt;dpchoudh_at_[hidden]&gt; wrote:
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
<span class="quotelev1">&gt; configure.ac:320: installing 'config/compile'
</span><br>
<span class="quotelev1">&gt; configure.ac:73: installing 'config/config.guess'
</span><br>
<span class="quotelev1">&gt; configure.ac:73: installing 'config/config.sub'
</span><br>
<span class="quotelev1">&gt; configure.ac:93: installing 'config/install-sh'
</span><br>
<span class="quotelev1">&gt; configure.ac:93: installing 'config/missing'
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
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/02/28575.php">http://www.open-mpi.org/community/lists/users/2016/02/28575.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28577.php">dpchoudh .: "Re: [OMPI users] Adding a new BTL"</a>
<li><strong>Previous message:</strong> <a href="28575.php">dpchoudh .: "[OMPI users] Adding a new BTL"</a>
<li><strong>In reply to:</strong> <a href="28575.php">dpchoudh .: "[OMPI users] Adding a new BTL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28577.php">dpchoudh .: "Re: [OMPI users] Adding a new BTL"</a>
<li><strong>Reply:</strong> <a href="28577.php">dpchoudh .: "Re: [OMPI users] Adding a new BTL"</a>
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
