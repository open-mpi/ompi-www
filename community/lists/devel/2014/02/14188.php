<?
$subject_val = "[OMPI devel] compile error in trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 20 07:11:21 2014" -->
<!-- isoreceived="20140220121121" -->
<!-- sent="Thu, 20 Feb 2014 14:11:19 +0200" -->
<!-- isosent="20140220121119" -->
<!-- name="Mike Dubman" -->
<!-- email="miked_at_[hidden]" -->
<!-- subject="[OMPI devel] compile error in trunk" -->
<!-- id="CAAO1KyZSiDahhoyUci_JpvtuMECa5nikLpexyEdjtdMAD2nkPQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] compile error in trunk<br>
<strong>From:</strong> Mike Dubman (<em>miked_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-20 07:11:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14189.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] compile error in trunk"</a>
<li><strong>Previous message:</strong> <a href="14187.php">Brice Goglin: "[OMPI devel] udcm_component_query hangs when memlock not infinite"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14189.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] compile error in trunk"</a>
<li><strong>Reply:</strong> <a href="14189.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] compile error in trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
*Hi,*
<br>
<p>*This commit caused the failure:*
<br>
<p><p>&nbsp;&nbsp;&nbsp;1. Comments about 'db' arguments.
<br>
&nbsp;&nbsp;&nbsp;2. Fixes #4205: ensure sizeof(MPI_Count) &lt;= sizeof(size_t)
<br>
<p><p>*13:28:24*   CC       ompi_datatype_args.lo*13:28:24* In file included
<br>
from ../../ompi/datatype/ompi_datatype.h:43,*13:28:24*
<br>
&nbsp;from ompi_datatype_args.c:33:*13:28:24* ../../ompi/include/mpi.h:324:
<br>
error: expected '=', ',', ';', 'asm' or '__attribute__' before
<br>
'MPI_Aint'*13:28:24* ../../ompi/include/mpi.h:325: error: expected
<br>
'=', ',', ';', 'asm' or '__attribute__' before 'MPI_Offset'*13:28:24*
<br>
../../ompi/include/mpi.h:326: error: expected '=', ',', ';', 'asm' or
<br>
'__attribute__' before 'MPI_Count'*13:28:24*
<br>
../../ompi/include/mpi.h:374: error: expected declaration specifiers
<br>
or '...' before 'MPI_Aint'*13:28:24* ../../ompi/include/mpi.h:376:
<br>
error: expected declaration specifiers or '...' before
<br>
'MPI_Offset'*13:28:24* In file included from
<br>
../../ompi/datatype/ompi_datatype.h:43,*13:28:24*
<br>
from ompi_datatype_args.c:33:*13:28:24* ../../ompi/include/mpi.h:1159:
<br>
error: expected declaration specifiers or '...' before
<br>
'MPI_Aint'*13:28:24* ../../ompi/include/mpi.h:1164: error: expected
<br>
declaration specifiers or '...' before 'MPI_Aint'*13:28:24*
<br>
../../ompi/include/mpi.h:1178: error: expected ')' before
<br>
'size'*13:28:24* ../../ompi/include/mpi.h:1331: error: expected
<br>
declaration specifiers or '...' before 'MPI_Offset'*13:28:24*
<br>
../../ompi/include/mpi.h:1332: error: expected declaration specifiers
<br>
or '...' before 'MPI_Offset'*13:28:24* ../../ompi/include/mpi.h:1333:
<br>
error: expected declaration specifiers or '...' before
<br>
'MPI_Offset'*13:28:24* ../../ompi/include/mpi.h:1338: error: expected
<br>
declaration specifiers or '...' before 'MPI_Offset'*13:28:24*
<br>
../../ompi/include/mpi.h:1340: error: expected declaration specifiers
<br>
or '...' before 'MPI_Offset'*13:28:24* ../../ompi/include/mpi.h:1343:
<br>
error: expected declaration specifiers or '...' before
<br>
'MPI_Offset'*13:28:24* ../../ompi/include/mpi.h:1345: error: expected
<br>
declaration specifiers or '...' before 'MPI_Offset'*13:28:24*
<br>
../../ompi/include/mpi.h:1347: error: expected declaration specifiers
<br>
or '...' before 'MPI_Offset'*13:28:24* ../../ompi/include/mpi.h:1349:
<br>
error: expected declaration specifiers or '...' before
<br>
'MPI_Offset'*13:28:24* ../../ompi/include/mpi.h:1351: error: expected
<br>
declaration specifiers or '...' before 'MPI_Offset'*13:28:24*
<br>
../../ompi/include/mpi.h:1353: error: expected declaration specifiers
<br>
or '...' before 'MPI_Offset'*13:28:24* ../../ompi/include/mpi.h:1367:
<br>
error: expected declaration specifiers or '...' before
<br>
'MPI_Offset'*13:28:24* ../../ompi/include/mpi.h:1368: error: expected
<br>
declaration specifiers or '...' before 'MPI_Offset'*13:28:24*
<br>
../../ompi/include/mpi.h:1369: error: expected declaration specifiers
<br>
or '...' before 'MPI_Offset'*13:28:24* ../../ompi/include/mpi.h:1370:
<br>
error: expected declaration specifiers or '...' before
<br>
'MPI_Offset'*13:28:24* ../../ompi/include/mpi.h:1383: error: expected
<br>
declaration specifiers or '...' before 'MPI_Offset'*13:28:24*
<br>
../../ompi/include/mpi.h:1384: error: expected declaration specifiers
<br>
or '...' before 'MPI_Offset'*13:28:24* ../../ompi/include/mpi.h:1385:
<br>
error: expected declaration specifiers or '...' before
<br>
'MPI_Offset'*13:28:24* ../../ompi/include/mpi.h:1388: error: expected
<br>
declaration specifiers or '...' before 'MPI_Offset'*13:28:24*
<br>
../../ompi/include/mpi.h:1404: error: expected declaration specifiers
<br>
or '...' before 'MPI_Aint'*13:28:24* ../../ompi/include/mpi.h:1424:
<br>
error: expected declaration specifiers or '...' before
<br>
'MPI_Aint'*13:28:24* ../../ompi/include/mpi.h:1427: error: expected
<br>
declaration specifiers or '...' before 'MPI_Count'*13:28:24*
<br>
../../ompi/include/mpi.h:1430: error: expected declaration specifiers
<br>
or '...' before 'MPI_Aint'*13:28:24* ../../ompi/include/mpi.h:1550:
<br>
warning: type defaults to 'int' in declaration of 'MPI_Aint'*13:28:24*
<br>
../../ompi/include/mpi.h:1550: error: expected ';', ',' or ')' before
<br>
'sdispls'*13:28:24* ../../ompi/include/mpi.h:1553: warning: type
<br>
defaults to 'int' in declaration of 'MPI_Aint'*13:28:24*
<br>
../../ompi/include/mpi.h:1553: error: expected ';', ',' or ')' before
<br>
'sdispls'*13:28:24* ../../ompi/include/mpi.h:1564: error: expected
<br>
declaration specifiers or '...' before 'MPI_Aint'*13:28:24*
<br>
../../ompi/include/mpi.h:1564: error: expected declaration specifiers
<br>
or '...' before 'MPI_Aint'*13:28:24* ../../ompi/include/mpi.h:1566:
<br>
error: expected declaration specifiers or '...' before
<br>
'MPI_Aint'*13:28:24* ../../ompi/include/mpi.h:1576: error: expected
<br>
declaration specifiers or '...' before 'MPI_Aint'*13:28:24*
<br>
../../ompi/include/mpi.h:1653: error: expected declaration specifiers
<br>
or '...' before 'MPI_Count'*13:28:24* ../../ompi/include/mpi.h:1677:
<br>
warning: type defaults to 'int' in declaration of 'MPI_Aint'*13:28:24*
<br>
../../ompi/include/mpi.h:1677: error: expected ';', ',' or ')' before
<br>
'array_of_displacements'*13:28:24* ../../ompi/include/mpi.h:1681:
<br>
warning: type defaults to 'int' in declaration of 'MPI_Aint'*13:28:24*
<br>
../../ompi/include/mpi.h:1681: error: expected ';', ',' or ')' before
<br>
'array_of_displacements'*13:28:24* ../../ompi/include/mpi.h:1684:
<br>
error: expected declaration specifiers or '...' before
<br>
'MPI_Aint'*13:28:24* ../../ompi/include/mpi.h:1695: warning: type
<br>
defaults to 'int' in declaration of 'MPI_Aint'*13:28:24*
<br>
../../ompi/include/mpi.h:1695: error: expected ';', ',' or ')' before
<br>
'array_of_displacements'*13:28:24* ../../ompi/include/mpi.h:1701:
<br>
error: expected declaration specifiers or '...' before
<br>
'MPI_Aint'*13:28:24* ../../ompi/include/mpi.h:1702: error: expected
<br>
declaration specifiers or '...' before 'MPI_Aint'*13:28:24*
<br>
../../ompi/include/mpi.h:1705: error: expected declaration specifiers
<br>
or '...' before 'MPI_Aint'*13:28:24* ../../ompi/include/mpi.h:1715:
<br>
error: expected declaration specifiers or '...' before
<br>
'MPI_Aint'*13:28:24* ../../ompi/include/mpi.h:1720: error: expected
<br>
declaration specifiers or '...' before 'MPI_Aint'*13:28:24*
<br>
../../ompi/include/mpi.h:1721: error: expected declaration specifiers
<br>
or '...' before 'MPI_Aint'*13:28:24* ../../ompi/include/mpi.h:1722:
<br>
error: expected declaration specifiers or '...' before
<br>
'MPI_Count'*13:28:24* ../../ompi/include/mpi.h:1723: error: expected
<br>
declaration specifiers or '...' before 'MPI_Count'*13:28:24*
<br>
../../ompi/include/mpi.h:1726: error: expected declaration specifiers
<br>
or '...' before 'MPI_Aint'*13:28:24* ../../ompi/include/mpi.h:1727:
<br>
error: expected declaration specifiers or '...' before
<br>
'MPI_Aint'*13:28:24* ../../ompi/include/mpi.h:1728: error: expected
<br>
declaration specifiers or '...' before 'MPI_Count'*13:28:24*
<br>
../../ompi/include/mpi.h:1729: error: expected declaration specifiers
<br>
or '...' before 'MPI_Count'*13:28:24* ../../ompi/include/mpi.h:1731:
<br>
error: expected declaration specifiers or '...' before
<br>
'MPI_Aint'*13:28:24* ../../ompi/include/mpi.h:1734: error: expected
<br>
declaration specifiers or '...' before 'MPI_Aint'*13:28:24*
<br>
../../ompi/include/mpi.h:1740: error: expected declaration specifiers
<br>
or '...' before 'MPI_Aint'*13:28:24* ../../ompi/include/mpi.h:1747:
<br>
error: expected declaration specifiers or '...' before
<br>
'MPI_Count'*13:28:24* ../../ompi/include/mpi.h:1749: error: expected
<br>
declaration specifiers or '...' before 'MPI_Aint'*13:28:24*
<br>
../../ompi/include/mpi.h:1753: error: expected declaration specifiers
<br>
or '...' before 'MPI_Aint'*13:28:24* ../../ompi/include/mpi.h:1761:
<br>
error: expected declaration specifiers or '...' before
<br>
'MPI_Aint'*13:28:24* ../../ompi/include/mpi.h:1762: error: expected
<br>
declaration specifiers or '...' before 'MPI_Aint'*13:28:24*
<br>
../../ompi/include/mpi.h:1775: error: expected declaration specifiers
<br>
or '...' before 'MPI_Aint'*13:28:24* ../../ompi/include/mpi.h:1810:
<br>
error: expected declaration specifiers or '...' before
<br>
'MPI_Aint'*13:28:24* ../../ompi/include/mpi.h:1815: error: expected
<br>
declaration specifiers or '...' before 'MPI_Aint'*13:28:24*
<br>
../../ompi/include/mpi.h:1829: error: expected ')' before
<br>
'size'*13:28:24* ../../ompi/include/mpi.h:1982: error: expected
<br>
declaration specifiers or '...' before 'MPI_Offset'*13:28:24*
<br>
../../ompi/include/mpi.h:1983: error: expected declaration specifiers
<br>
or '...' before 'MPI_Offset'*13:28:24* ../../ompi/include/mpi.h:1984:
<br>
error: expected declaration specifiers or '...' before
<br>
'MPI_Offset'*13:28:24* ../../ompi/include/mpi.h:1989: error: expected
<br>
declaration specifiers or '...' before 'MPI_Offset'*13:28:24*
<br>
../../ompi/include/mpi.h:1991: error: expected declaration specifiers
<br>
or '...' before 'MPI_Offset'*13:28:24* ../../ompi/include/mpi.h:1994:
<br>
error: expected declaration specifiers or '...' before
<br>
'MPI_Offset'*13:28:24* ../../ompi/include/mpi.h:1996: error: expected
<br>
declaration specifiers or '...' before 'MPI_Offset'*13:28:24*
<br>
../../ompi/include/mpi.h:1998: error: expected declaration specifiers
<br>
or '...' before 'MPI_Offset'*13:28:24* ../../ompi/include/mpi.h:2000:
<br>
error: expected declaration specifiers or '...' before
<br>
'MPI_Offset'*13:28:24* ../../ompi/include/mpi.h:2002: error: expected
<br>
declaration specifiers or '...' before 'MPI_Offset'*13:28:24*
<br>
../../ompi/include/mpi.h:2004: error: expected declaration specifiers
<br>
or '...' before 'MPI_Offset'*13:28:24* ../../ompi/include/mpi.h:2018:
<br>
error: expected declaration specifiers or '...' before
<br>
'MPI_Offset'*13:28:24* ../../ompi/include/mpi.h:2019: error: expected
<br>
declaration specifiers or '...' before 'MPI_Offset'*13:28:24*
<br>
../../ompi/include/mpi.h:2020: error: expected declaration specifiers
<br>
or '...' before 'MPI_Offset'*13:28:24* ../../ompi/include/mpi.h:2021:
<br>
error: expected declaration specifiers or '...' before
<br>
'MPI_Offset'*13:28:24* ../../ompi/include/mpi.h:2034: error: expected
<br>
declaration specifiers or '...' before 'MPI_Offset'*13:28:24*
<br>
../../ompi/include/mpi.h:2035: error: expected declaration specifiers
<br>
or '...' before 'MPI_Offset'*13:28:24* ../../ompi/include/mpi.h:2036:
<br>
error: expected declaration specifiers or '...' before
<br>
'MPI_Offset'*13:28:24* ../../ompi/include/mpi.h:2039: error: expected
<br>
declaration specifiers or '...' before 'MPI_Offset'*13:28:24*
<br>
../../ompi/include/mpi.h:2055: error: expected declaration specifiers
<br>
or '...' before 'MPI_Aint'*13:28:24* ../../ompi/include/mpi.h:2075:
<br>
error: expected declaration specifiers or '...' before
<br>
'MPI_Aint'*13:28:24* ../../ompi/include/mpi.h:2080: error: expected
<br>
declaration specifiers or '...' before 'MPI_Count'*13:28:24*
<br>
../../ompi/include/mpi.h:2083: error: expected declaration specifiers
<br>
or '...' before 'MPI_Aint'*13:28:24* ../../ompi/include/mpi.h:2203:
<br>
warning: type defaults to 'int' in declaration of 'MPI_Aint'*13:28:24*
<br>
../../ompi/include/mpi.h:2203: error: expected ';', ',' or ')' before
<br>
'sdispls'*13:28:24* ../../ompi/include/mpi.h:2206: warning: type
<br>
defaults to 'int' in declaration of 'MPI_Aint'*13:28:24*
<br>
../../ompi/include/mpi.h:2206: error: expected ';', ',' or ')' before
<br>
'sdispls'*13:28:24* ../../ompi/include/mpi.h:2217: error: expected
<br>
declaration specifiers or '...' before 'MPI_Aint'*13:28:24*
<br>
../../ompi/include/mpi.h:2217: error: expected declaration specifiers
<br>
or '...' before 'MPI_Aint'*13:28:24* ../../ompi/include/mpi.h:2219:
<br>
error: expected declaration specifiers or '...' before
<br>
'MPI_Aint'*13:28:24* ../../ompi/include/mpi.h:2229: error: expected
<br>
declaration specifiers or '...' before 'MPI_Aint'*13:28:24*
<br>
../../ompi/include/mpi.h:2306: error: expected declaration specifiers
<br>
or '...' before 'MPI_Count'*13:28:24* ../../ompi/include/mpi.h:2329:
<br>
warning: type defaults to 'int' in declaration of 'MPI_Aint'*13:28:24*
<br>
../../ompi/include/mpi.h:2329: error: expected ';', ',' or ')' before
<br>
'array_of_displacements'*13:28:24* ../../ompi/include/mpi.h:2332:
<br>
error: expected declaration specifiers or '...' before
<br>
'MPI_Aint'*13:28:24* ../../ompi/include/mpi.h:2339: warning: type
<br>
defaults to 'int' in declaration of 'MPI_Aint'*13:28:24*
<br>
../../ompi/include/mpi.h:2339: error: expected ';', ',' or ')' before
<br>
'array_of_displacements'*13:28:24* ../../ompi/include/mpi.h:2347:
<br>
warning: type defaults to 'int' in declaration of 'MPI_Aint'*13:28:24*
<br>
../../ompi/include/mpi.h:2347: error: expected ';', ',' or ')' before
<br>
'array_of_displacements'*13:28:24* ../../ompi/include/mpi.h:2353:
<br>
error: expected declaration specifiers or '...' before
<br>
'MPI_Aint'*13:28:24* ../../ompi/include/mpi.h:2354: error: expected
<br>
declaration specifiers or '...' before 'MPI_Aint'*13:28:24*
<br>
../../ompi/include/mpi.h:2357: error: expected declaration specifiers
<br>
or '...' before 'MPI_Aint'*13:28:24* ../../ompi/include/mpi.h:2367:
<br>
error: expected declaration specifiers or '...' before
<br>
'MPI_Aint'*13:28:24* ../../ompi/include/mpi.h:2372: error: expected
<br>
declaration specifiers or '...' before 'MPI_Aint'*13:28:24*
<br>
../../ompi/include/mpi.h:2373: error: expected declaration specifiers
<br>
or '...' before 'MPI_Aint'*13:28:24* ../../ompi/include/mpi.h:2374:
<br>
error: expected declaration specifiers or '...' before
<br>
'MPI_Count'*13:28:24* ../../ompi/include/mpi.h:2375: error: expected
<br>
declaration specifiers or '...' before 'MPI_Count'*13:28:24*
<br>
../../ompi/include/mpi.h:2378: error: expected declaration specifiers
<br>
or '...' before 'MPI_Aint'*13:28:24* ../../ompi/include/mpi.h:2379:
<br>
error: expected declaration specifiers or '...' before
<br>
'MPI_Aint'*13:28:24* ../../ompi/include/mpi.h:2380: error: expected
<br>
declaration specifiers or '...' before 'MPI_Count'*13:28:24*
<br>
../../ompi/include/mpi.h:2381: error: expected declaration specifiers
<br>
or '...' before 'MPI_Count'*13:28:24* ../../ompi/include/mpi.h:2383:
<br>
error: expected declaration specifiers or '...' before
<br>
'MPI_Aint'*13:28:24* ../../ompi/include/mpi.h:2386: error: expected
<br>
declaration specifiers or '...' before 'MPI_Aint'*13:28:24*
<br>
../../ompi/include/mpi.h:2392: error: expected declaration specifiers
<br>
or '...' before 'MPI_Aint'*13:28:24* ../../ompi/include/mpi.h:2399:
<br>
error: expected declaration specifiers or '...' before
<br>
'MPI_Count'*13:28:24* ../../ompi/include/mpi.h:2401: error: expected
<br>
declaration specifiers or '...' before 'MPI_Aint'*13:28:24*
<br>
../../ompi/include/mpi.h:2405: error: expected declaration specifiers
<br>
or '...' before 'MPI_Aint'*13:28:24* ../../ompi/include/mpi.h:2414:
<br>
error: expected declaration specifiers or '...' before
<br>
'MPI_Aint'*13:28:24* ../../ompi/include/mpi.h:2415: error: expected
<br>
declaration specifiers or '...' before 'MPI_Aint'*13:28:24*
<br>
../../ompi/include/mpi.h:2428: error: expected declaration specifiers
<br>
or '...' before 'MPI_Aint'*13:28:25* ompi_datatype_args.c:661: error:
<br>
expected declaration specifiers or '...' before 'MPI_Aint'*13:28:25*
<br>
ompi_datatype_args.c:661: error: conflicting types for
<br>
'__ompi_datatype_create_from_args'*13:28:25* ompi_datatype_args.c:41:
<br>
note: previous declaration of '__ompi_datatype_create_from_args' was
<br>
here*13:28:25* ompi_datatype_args.c: In function
<br>
'__ompi_datatype_create_from_args':*13:28:25*
<br>
ompi_datatype_args.c:689: error: 'a' undeclared (first use in this
<br>
function)*13:28:25* ompi_datatype_args.c:689: error: (Each undeclared
<br>
identifier is reported only once*13:28:25* ompi_datatype_args.c:689:
<br>
error: for each function it appears in.)*13:28:25* make[2]: ***
<br>
[ompi_datatype_args.lo] Error 1
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14188/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14189.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] compile error in trunk"</a>
<li><strong>Previous message:</strong> <a href="14187.php">Brice Goglin: "[OMPI devel] udcm_component_query hangs when memlock not infinite"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14189.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] compile error in trunk"</a>
<li><strong>Reply:</strong> <a href="14189.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] compile error in trunk"</a>
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
