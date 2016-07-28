<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Sep 27 20:44:52 2007" -->
<!-- isoreceived="20070928004452" -->
<!-- sent="Thu, 27 Sep 2007 17:44:47 -0700 (PDT)" -->
<!-- isosent="20070928004447" -->
<!-- name="Mostyn Lewis" -->
<!-- email="Mostyn.Lewis_at_[hidden]" -->
<!-- subject="[OMPI users] aclocal.m4 booboo?" -->
<!-- id="Pine.GSO.4.64.0709271740100.5908_at_aragorn.brc.West.Sun.COM" -->
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
<strong>From:</strong> Mostyn Lewis (<em>Mostyn.Lewis_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-27 20:44:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4086.php">Tim Prins: "Re: [OMPI users] --enable-mca-no-build broken or bad docs?"</a>
<li><strong>Previous message:</strong> <a href="4084.php">Mostyn Lewis: "[OMPI users] --enable-mca-no-build broken or bad docs?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4095.php">Brian Barrett: "Re: [OMPI users] aclocal.m4 booboo?"</a>
<li><strong>Reply:</strong> <a href="4095.php">Brian Barrett: "Re: [OMPI users] aclocal.m4 booboo?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Today's SVN.
<br>
<p>A generated configure has this in it:
<br>
<p>...
<br>
###########################################################################
<br>
# Libtool: part two
<br>
# (after C compiler setup)
<br>
############################################################################
<br>
<p>ompi_show_subtitle &quot;Libtool configuration&quot;
<br>
<p><p><p><p><p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_LT_SHELL_INIT(lt_ltdl_dir='opal/libltdl')
<br>
<p><p><p><p><p>case $enable_ltdl_convenience in
<br>
&nbsp;&nbsp;&nbsp;no) { { echo &quot;$as_me:$LINENO: error: this package needs a convenience libltdl&quot; &gt;&amp;5
<br>
echo &quot;$as_me: error: this package needs a convenience libltdl&quot; &gt;&amp;2;}
<br>
...
<br>
<p>I guess this from aclocal.m4:
<br>
<p>...
<br>
])# LT_CONFIG_LTDL_DIR
<br>
<p># We break this out into a separate macro, so that we can call it safely
<br>
# internally without being caught accidentally by the sed scan in libtoolize.
<br>
m4_defun([_LT_CONFIG_LTDL_DIR],
<br>
[dnl remove trailing slashes
<br>
m4_pushdef([_ARG_DIR], m4_bpatsubst([$1], [/*$]))
<br>
m4_case(_LTDL_DIR,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[], [dnl only set lt_ltdl_dir if _ARG_DIR is not simply `.'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;m4_if(_ARG_DIR, [.],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[m4_define([_LTDL_DIR], _ARG_DIR)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_LT_SHELL_INIT([lt_ltdl_dir=']_ARG_DIR['])])],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[m4_if(_ARG_DIR, _LTDL_DIR,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[m4_fatal([multiple libltdl directories: `]_LTDL_DIR[', `]_ARG_DIR['])])])
<br>
m4_popdef([_ARG_DIR])
<br>
dnl If not otherwise defined, default to the 1.5.x compatible subproject mode:
<br>
m4_if(_LTDL_MODE, [],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[m4_define([_LTDL_MODE], m4_default([$2], [subproject]))
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;m4_if([-1], [m4_bregexp(_LTDL_MODE, [\(subproject\|\(non\)?recursive\)])],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[m4_fatal([unknown libltdl mode: ]_LTDL_MODE)])])
<br>
])# LT_CONFIG_LTDL_DIR
<br>
<p># Initialise:
<br>
m4_define([_LTDL_DIR], [])
<br>
m4_define([_LTDL_MODE], [])
<br>
<p><p># LTDL_CONVENIENCE
<br>
# ----------------
<br>
...
<br>
<p>GNU tools used:
<br>
autoconf 2.61
<br>
automake 1.10
<br>
libtool 2.1a_CVS.092407 (libtool from CVS 3 days ago)
<br>
<p>Regards,
<br>
Mostyn Lewis
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4086.php">Tim Prins: "Re: [OMPI users] --enable-mca-no-build broken or bad docs?"</a>
<li><strong>Previous message:</strong> <a href="4084.php">Mostyn Lewis: "[OMPI users] --enable-mca-no-build broken or bad docs?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4095.php">Brian Barrett: "Re: [OMPI users] aclocal.m4 booboo?"</a>
<li><strong>Reply:</strong> <a href="4095.php">Brian Barrett: "Re: [OMPI users] aclocal.m4 booboo?"</a>
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
