<?
$subject_val = "[OMPI devel] Gcc warnings in datatype test code in 1.5rc5";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 24 22:42:52 2010" -->
<!-- isoreceived="20100825024252" -->
<!-- sent="Tue, 24 Aug 2010 19:42:34 -0700" -->
<!-- isosent="20100825024234" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] Gcc warnings in datatype test code in 1.5rc5" -->
<!-- id="4C74831A.7050305_at_lbl.gov" -->
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
<strong>Subject:</strong> [OMPI devel] Gcc warnings in datatype test code in 1.5rc5<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-24 22:42:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8338.php">Paul H. Hargrove: "[OMPI devel] mixed OpenBSD 4.6/i386 results: 1.5rc5 GOOD but 1.4.3rc1 BAD"</a>
<li><strong>Previous message:</strong> <a href="8336.php">Paul H. Hargrove: "Re: [OMPI devel] 1.5rc5 - warnings from Sun C 5.10"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The following was seen in a &quot;make check&quot; with 1.5rc5 on FreeBSD-8.0/i386 
<br>
w/ gcc-4.2.1, but I don't think that these warnings are platform 
<br>
specific.  These warnings do not occur with 1.4.3rc1
<br>
<p>I was vaguely recalling that gcc-4.2.1 might be one of the versions that 
<br>
generates incorrect &quot;discards qualifiers&quot; warnings.  So, I retried w/ 
<br>
gcc-4.4.2, but the results were the same.
<br>
<p>-Paul
<br>
<p><p>gmake[3]: Entering directory 
<br>
`/home/phargrov/openmpi-1.5rc5/BLD-gcc/test/datatype'
<br>
&nbsp;&nbsp;CC     opal_datatype_test.o
<br>
In file included from ../../../test/datatype/opal_datatype_test.c:23:
<br>
../../../test/datatype/opal_ddt_lib.h:52:33: warning: no newline at end 
<br>
of file
<br>
../../../test/datatype/opal_datatype_test.c: In function 'main':
<br>
../../../test/datatype/opal_datatype_test.c:431: warning: assignment 
<br>
discards qualifiers from pointer target type
<br>
../../../test/datatype/opal_datatype_test.c:533: warning: passing 
<br>
argument 1 of 'test_create_blacs_type1' discards qualifiers from pointer 
<br>
target type
<br>
../../../test/datatype/opal_datatype_test.c:534: warning: passing 
<br>
argument 1 of 'test_create_blacs_type2' discards qualifiers from pointer 
<br>
target type
<br>
&nbsp;&nbsp;CC     opal_ddt_lib.o
<br>
In file included from ../../../test/datatype/opal_ddt_lib.c:23:
<br>
../../../test/datatype/opal_ddt_lib.h:52:33: warning: no newline at end 
<br>
of file
<br>
../../../test/datatype/opal_ddt_lib.c: In function 'test_struct':
<br>
../../../test/datatype/opal_ddt_lib.c:154: warning: passing argument 4 
<br>
of 'opal_datatype_create_struct' from incompatible pointer type
<br>
../../../test/datatype/opal_ddt_lib.c: In function 
<br>
'test_struct_char_double':
<br>
../../../test/datatype/opal_ddt_lib.c:173: warning: initialization 
<br>
discards qualifiers from pointer target type
<br>
../../../test/datatype/opal_ddt_lib.c:173: warning: initialization 
<br>
discards qualifiers from pointer target type
<br>
../../../test/datatype/opal_ddt_lib.c: In function 'mpich_typeub':
<br>
../../../test/datatype/opal_ddt_lib.c:642: warning: assignment discards 
<br>
qualifiers from pointer target type
<br>
../../../test/datatype/opal_ddt_lib.c:662: warning: assignment discards 
<br>
qualifiers from pointer target type
<br>
../../../test/datatype/opal_ddt_lib.c: In function 'mpich_typeub2':
<br>
../../../test/datatype/opal_ddt_lib.c:694: warning: assignment discards 
<br>
qualifiers from pointer target type
<br>
../../../test/datatype/opal_ddt_lib.c:695: warning: assignment discards 
<br>
qualifiers from pointer target type
<br>
../../../test/datatype/opal_ddt_lib.c:696: warning: assignment discards 
<br>
qualifiers from pointer target type
<br>
../../../test/datatype/opal_ddt_lib.c: In function 'mpich_typeub3':
<br>
../../../test/datatype/opal_ddt_lib.c:774: warning: assignment discards 
<br>
qualifiers from pointer target type
<br>
../../../test/datatype/opal_ddt_lib.c:775: warning: assignment discards 
<br>
qualifiers from pointer target type
<br>
../../../test/datatype/opal_ddt_lib.c:776: warning: assignment discards 
<br>
qualifiers from pointer target type
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
HPC Research Department                   Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8338.php">Paul H. Hargrove: "[OMPI devel] mixed OpenBSD 4.6/i386 results: 1.5rc5 GOOD but 1.4.3rc1 BAD"</a>
<li><strong>Previous message:</strong> <a href="8336.php">Paul H. Hargrove: "Re: [OMPI devel] 1.5rc5 - warnings from Sun C 5.10"</a>
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
