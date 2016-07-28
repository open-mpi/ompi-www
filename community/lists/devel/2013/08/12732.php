<?
$subject_val = "[OMPI devel] Trunk build failures";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 19 10:04:12 2013" -->
<!-- isoreceived="20130819140412" -->
<!-- sent="Mon, 19 Aug 2013 14:04:11 +0000" -->
<!-- isosent="20130819140411" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] Trunk build failures" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F80821A_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI devel] Trunk build failures<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-19 10:04:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12733.php">Ralph Castain: "Re: [OMPI devel] Trunk build failures"</a>
<li><strong>Previous message:</strong> <a href="12731.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  OpenSHMEM round 2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12733.php">Ralph Castain: "Re: [OMPI devel] Trunk build failures"</a>
<li><strong>Reply:</strong> <a href="12733.php">Ralph Castain: "Re: [OMPI devel] Trunk build failures"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Did something happen to break the trunk recently?
<br>

<br>
-----
<br>
[7:03] savbu-usnic-a:~/s/o/o/t/ompi_info &#226;&#157;&#175;&#226;&#157;&#175;&#226;&#157;&#175; make
<br>
&nbsp;&nbsp;CC       ompi_info.o
<br>
&nbsp;&nbsp;CC       param.o
<br>
&nbsp;&nbsp;CC       components.o
<br>
&nbsp;&nbsp;CC       version.o
<br>
&nbsp;&nbsp;CCLD     ompi_info
<br>
../../../ompi/.libs/libmpi.so: undefined reference to `mpit_unlock'
<br>
../../../ompi/.libs/libmpi.so: undefined reference to `mpit_init_count'
<br>
../../../ompi/.libs/libmpi.so: undefined reference to `mpit_lock'
<br>
../../../ompi/.libs/libmpi.so: undefined reference to `ompit_var_type_to_datatype'
<br>
../../../ompi/.libs/libmpi.so: undefined reference to `initted'
<br>
../../../ompi/.libs/libmpi.so: undefined reference to `mpit_big_lock'
<br>
collect2: error: ld returned 1 exit status
<br>
make: *** [ompi_info] Error 1
<br>
-----
<br>

<br>
-- 
<br>
Jeff Squyres
<br>
jsquyres_at_[hidden]
<br>
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
<br>

<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12733.php">Ralph Castain: "Re: [OMPI devel] Trunk build failures"</a>
<li><strong>Previous message:</strong> <a href="12731.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  OpenSHMEM round 2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12733.php">Ralph Castain: "Re: [OMPI devel] Trunk build failures"</a>
<li><strong>Reply:</strong> <a href="12733.php">Ralph Castain: "Re: [OMPI devel] Trunk build failures"</a>
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
