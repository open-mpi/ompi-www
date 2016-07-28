<?
$subject_val = "[OMPI devel] [bug/fix] correction of a small bug in conf file parsing";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 30 11:30:39 2013" -->
<!-- isoreceived="20130530153039" -->
<!-- sent="Thu, 30 May 2013 17:30:25 +0200" -->
<!-- isosent="20130530153025" -->
<!-- name="Piotr Lesnicki" -->
<!-- email="piotr.lesnicki_at_[hidden]" -->
<!-- subject="[OMPI devel] [bug/fix] correction of a small bug in conf file parsing" -->
<!-- id="51A77091.8090903_at_ext.bull.net" -->
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
<strong>Subject:</strong> [OMPI devel] [bug/fix] correction of a small bug in conf file parsing<br>
<strong>From:</strong> Piotr Lesnicki (<em>piotr.lesnicki_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-30 11:30:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12422.php">alankrutha reddy: "[OMPI devel] Regarding registering openib memory"</a>
<li><strong>Previous message:</strong> <a href="12420.php">Jeff Squyres (jsquyres): "[OMPI devel] Open MPI 1.6.5rc1 has been released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/06/12475.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [bug/fix] correction of a small bug in conf file	parsing"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/06/12475.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [bug/fix] correction of a small bug in conf file	parsing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>The parser of key/value configuration files (like
<br>
'openmpi-mca-params.conf') has some small bugs:
<br>
<p>- a parsing error occurs when there is no new line at the end of the
<br>
&nbsp;&nbsp;&nbsp;file (and the error shows while reading the next conf file)
<br>
- error messages display wrong line numbers
<br>
- error messages show nothing meaninful when a new line replaces an
<br>
&nbsp;&nbsp;&nbsp;expected token
<br>
<p>I attached a patch of the lex production rules of the keyval
<br>
parser to correct this.
<br>
<p><p><p># steps to reproduce (all versions):
<br>
$ cp $OPAL_PREFIX/etc/openmpi-mca-params.conf .
<br>
$ (head -n -1 openmpi-mca-params.conf ; tail -n1 openmpi-mca-params.conf 
<br>
| tr -d '\n') &gt; params.conf
<br>
$ export OMPI_MCA_mca_param_files=$PWD/params.conf
<br>
$ mpicc -v
<br>
[berlin73:00360] keyval parser: error 1 reading file 
<br>
/home_nfs/lesnickp/tmp/params.conf at line 160:
<br>
&nbsp;&nbsp;&nbsp;#
<br>
[berlin73:00360] keyval parser: error 1 reading file 
<br>
/home_nfs/lesnickp/local/openmpi-1.6.3/share/openmpi/mpicc-wrapper-data.txt 
<br>
at line 1:
<br>
&nbsp;&nbsp;&nbsp;# There can be multiple blocks of configuration data, chosen by
<br>
[...]
<br>
<p><p><pre>
-- 
Piotr LESNICKI

</pre>
<hr>
<ul>
<li>text/x-patch attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12421/lex.patch">lex.patch</a>
</ul>
<!-- attachment="lex.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12422.php">alankrutha reddy: "[OMPI devel] Regarding registering openib memory"</a>
<li><strong>Previous message:</strong> <a href="12420.php">Jeff Squyres (jsquyres): "[OMPI devel] Open MPI 1.6.5rc1 has been released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/06/12475.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [bug/fix] correction of a small bug in conf file	parsing"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/06/12475.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [bug/fix] correction of a small bug in conf file	parsing"</a>
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
