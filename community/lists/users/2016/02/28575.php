<?
$subject_val = "[OMPI users] Adding a new BTL";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 25 01:54:58 2016" -->
<!-- isoreceived="20160225065458" -->
<!-- sent="Thu, 25 Feb 2016 01:54:56 -0500" -->
<!-- isosent="20160225065456" -->
<!-- name="dpchoudh ." -->
<!-- email="dpchoudh_at_[hidden]" -->
<!-- subject="[OMPI users] Adding a new BTL" -->
<!-- id="CAHXxYDgyqLO=o4knmCPm=V3YTpLTkdOiOOR_Cdy0ZW9M3kskvg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] Adding a new BTL<br>
<strong>From:</strong> dpchoudh . (<em>dpchoudh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-25 01:54:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28576.php">Gilles Gouaillardet: "Re: [OMPI users] Adding a new BTL"</a>
<li><strong>Previous message:</strong> <a href="28574.php">Steve O'Hara: "Re: [OMPI users] Raspberry Pi 2 Beowulf Cluster for OpenFOAM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28576.php">Gilles Gouaillardet: "Re: [OMPI users] Adding a new BTL"</a>
<li><strong>Reply:</strong> <a href="28576.php">Gilles Gouaillardet: "Re: [OMPI users] Adding a new BTL"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello all
<br>
<p>I am not sure if this question belongs in the user list or the
<br>
developer list, but because it is a simpler question I am trying the
<br>
user list first.
<br>
<p>I am trying to add a new BTL for a proprietary transport.
<br>
<p>As step #0, I copied the BTL template, renamed the 'template' to
<br>
something else, and ran autogen.sh at the top level directory (of
<br>
openMPI 1.10.2). The Makefile.am is identical to what is provided in
<br>
the template except that all the 'template' has been substituted with
<br>
'lf', the name of the fabric.
<br>
<p>With that, I get the following error:
<br>
<p>&lt;snip&gt;
<br>
<p>autoreconf: running: /usr/bin/autoconf --include=config --force
<br>
--warnings=all,no-obsolete,no-override
<br>
autoreconf: running: /usr/bin/autoheader --include=config --force
<br>
--warnings=all,no-obsolete,no-override
<br>
autoreconf: running: automake --add-missing --copy --force-missing
<br>
--warnings=all,no-obsolete,no-override
<br>
configure.ac:320: installing 'config/compile'
<br>
configure.ac:73: installing 'config/config.guess'
<br>
configure.ac:73: installing 'config/config.sub'
<br>
configure.ac:93: installing 'config/install-sh'
<br>
configure.ac:93: installing 'config/missing'
<br>
ompi/Makefile.am: installing 'config/depcomp'
<br>
ompi/mca/btl/lf/Makefile.am:33: error: MCA_BUILD_opal_btl_lf_DSO does
<br>
not appear in AM_CONDITIONAL
<br>
<p><p>I tried adding a configure.m4 file to the btl directory with the
<br>
following content:
<br>
<p># MCA_btl_lf_CONFIG([action-if-can-compile],
<br>
#                   [action-if-cant-compile])
<br>
# ------------------------------------------------
<br>
AC_DEFUN([MCA_ompi_btl_lf_CONFIG],[
<br>
&nbsp;&nbsp;&nbsp;&nbsp;AC_CONFIG_FILES([ompi/mca/btl/lf/Makefile])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;AC_MSG_FAILURE
<br>
])dnl
<br>
<p><p>but the error remains.
<br>
<p>I am sure I am missing at least one step, but am lost in the huge
<br>
codebase. Please help.
<br>
<p>Thank you
<br>
Durga
<br>
<p>Life is complex. It has real and imaginary parts.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28576.php">Gilles Gouaillardet: "Re: [OMPI users] Adding a new BTL"</a>
<li><strong>Previous message:</strong> <a href="28574.php">Steve O'Hara: "Re: [OMPI users] Raspberry Pi 2 Beowulf Cluster for OpenFOAM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28576.php">Gilles Gouaillardet: "Re: [OMPI users] Adding a new BTL"</a>
<li><strong>Reply:</strong> <a href="28576.php">Gilles Gouaillardet: "Re: [OMPI users] Adding a new BTL"</a>
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
