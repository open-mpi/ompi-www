<?
$subject_val = "[OMPI devel] lotsa errors in new autodetect component";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 21 18:06:38 2009" -->
<!-- isoreceived="20090721220638" -->
<!-- sent="Tue, 21 Jul 2009 18:06:33 -0400" -->
<!-- isosent="20090721220633" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] lotsa errors in new autodetect component" -->
<!-- id="AB80C9D7-0732-4321-B867-45A44CC36709_at_cisco.com" -->
<!-- charset="WINDOWS-1252" -->
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
<strong>Subject:</strong> [OMPI devel] lotsa errors in new autodetect component<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-21 18:06:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6476.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21723"</a>
<li><strong>Previous message:</strong> <a href="6474.php">Sebastian Rinke: "Re: [OMPI devel] BTL receive callback"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is on Linux with a very recent kernel (2.6.30), gcc 4.3.3:
<br>
<p>libtool: compile:  gcc -DHAVE_CONFIG_H -I. -I../../../../opal/include - 
<br>
I../../../../orte/include -I../../../../ompi/include -I../../../../ 
<br>
opal/mca/paffinity/linux/plpa/src/libplpa -I../../../.. -I/users/ 
<br>
jsquyres -g -Wall -Wundef -Wno-long-long -Wsign-compare -Wmissing- 
<br>
prototypes -Wstrict-prototypes -Wcomment -pedantic -Wno-long-double - 
<br>
Werror-implicit-function-declaration -finline-functions -fno-strict- 
<br>
aliasing -pthread -fvisibility=hidden -MT  
<br>
opal_installdirs_autodetect_component.lo -MD -MP -MF .deps/ 
<br>
opal_installdirs_autodetect_component.Tpo -c  
<br>
opal_installdirs_autodetect_component.c  -fPIC -DPIC -o .libs/ 
<br>
opal_installdirs_autodetect_component.o
<br>
opal_installdirs_autodetect_component.c: In function &#145;whatis&#146;:
<br>
opal_installdirs_autodetect_component.c:73: warning: comparison  
<br>
between signed and unsigned
<br>
opal_installdirs_autodetect_component.c: At top level:
<br>
opal_installdirs_autodetect_component.c:112: error: static declaration  
<br>
of &#145;opal_installdirs_autodetect_open&#146; follows non-static declaration
<br>
opal_installdirs_autodetect_component.c:29: error: previous  
<br>
declaration of &#145;opal_installdirs_autodetect_open&#146; was here
<br>
opal_installdirs_autodetect_component.c: In function  
<br>
&#145;opal_installdirs_autodetect_open&#146;:
<br>
opal_installdirs_autodetect_component.c:141: warning: passing argument  
<br>
1 of &#145;opal_free&#146; discards qualifiers from pointer target type
<br>
opal_installdirs_autodetect_component.c:146: warning: assignment  
<br>
discards qualifiers from pointer target type
<br>
opal_installdirs_autodetect_component.c:148: warning: assignment  
<br>
discards qualifiers from pointer target type
<br>
opal_installdirs_autodetect_component.c:151: warning: assignment  
<br>
discards qualifiers from pointer target type
<br>
opal_installdirs_autodetect_component.c:153: warning: assignment  
<br>
discards qualifiers from pointer target type
<br>
opal_installdirs_autodetect_component.c:156: warning: passing argument  
<br>
1 of &#145;opal_free&#146; discards qualifiers from pointer target type
<br>
opal_installdirs_autodetect_component.c:157: warning: passing argument  
<br>
1 of &#145;opal_free&#146; discards qualifiers from pointer target type
<br>
opal_installdirs_autodetect_component.c:161: warning: passing argument  
<br>
1 of &#145;opal_free&#146; discards qualifiers from pointer target type
<br>
opal_installdirs_autodetect_component.c:163: warning: assignment  
<br>
discards qualifiers from pointer target type
<br>
opal_installdirs_autodetect_component.c:164: warning: assignment  
<br>
discards qualifiers from pointer target type
<br>
opal_installdirs_autodetect_component.c:165: warning: assignment  
<br>
discards qualifiers from pointer target type
<br>
opal_installdirs_autodetect_component.c:166: warning: assignment  
<br>
discards qualifiers from pointer target type
<br>
opal_installdirs_autodetect_component.c:167: warning: assignment  
<br>
discards qualifiers from pointer target type
<br>
opal_installdirs_autodetect_component.c:168: warning: assignment  
<br>
discards qualifiers from pointer target type
<br>
opal_installdirs_autodetect_component.c:169: warning: assignment  
<br>
discards qualifiers from pointer target type
<br>
opal_installdirs_autodetect_component.c:170: warning: assignment  
<br>
discards qualifiers from pointer target type
<br>
opal_installdirs_autodetect_component.c:171: warning: assignment  
<br>
discards qualifiers from pointer target type
<br>
opal_installdirs_autodetect_component.c:172: warning: assignment  
<br>
discards qualifiers from pointer target type
<br>
opal_installdirs_autodetect_component.c:173: warning: assignment  
<br>
discards qualifiers from pointer target type
<br>
opal_installdirs_autodetect_component.c:174: warning: assignment  
<br>
discards qualifiers from pointer target type
<br>
opal_installdirs_autodetect_component.c:175: warning: assignment  
<br>
discards qualifiers from pointer target type
<br>
opal_installdirs_autodetect_component.c:176: warning: assignment  
<br>
discards qualifiers from pointer target type
<br>
opal_installdirs_autodetect_component.c:177: warning: assignment  
<br>
discards qualifiers from pointer target type
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6476.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21723"</a>
<li><strong>Previous message:</strong> <a href="6474.php">Sebastian Rinke: "Re: [OMPI devel] BTL receive callback"</a>
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
