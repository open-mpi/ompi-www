<?
$subject_val = "Re: [OMPI devel] compile error in trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 20 08:09:09 2014" -->
<!-- isoreceived="20140220130909" -->
<!-- sent="Thu, 20 Feb 2014 13:09:07 +0000" -->
<!-- isosent="20140220130907" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] compile error in trunk" -->
<!-- id="BDDAC6A4-BFBB-4375-B719-95EDD9F616D2_at_cisco.com" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="CAAO1KyZSiDahhoyUci_JpvtuMECa5nikLpexyEdjtdMAD2nkPQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] compile error in trunk<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-20 08:09:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14190.php">Jeff Squyres (jsquyres): "[OMPI devel] oshmem tests"</a>
<li><strong>Previous message:</strong> <a href="14188.php">Mike Dubman: "[OMPI devel] compile error in trunk"</a>
<li><strong>In reply to:</strong> <a href="14188.php">Mike Dubman: "[OMPI devel] compile error in trunk"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Was just fixed in <a href="https://svn.open-mpi.org/trac/ompi/changeset/30780">https://svn.open-mpi.org/trac/ompi/changeset/30780</a>.
<br>
<p><p>On Feb 20, 2014, at 7:11 AM, Mike Dubman &lt;miked_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; This commit caused the failure:
</span><br>
<span class="quotelev1">&gt; 	&#149; Comments about 'db' arguments. 
</span><br>
<span class="quotelev1">&gt; 	&#149; Fixes #4205: ensure sizeof(MPI_Count) &lt;= sizeof(size_t) 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:24 
</span><br>
<span class="quotelev1">&gt;   CC       ompi_datatype_args.lo
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:24 
</span><br>
<span class="quotelev1">&gt; In file included from ../../ompi/datatype/ompi_datatype.h:43,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:24 
</span><br>
<span class="quotelev1">&gt;                  from ompi_datatype_args.c:33:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:24 
</span><br>
<span class="quotelev1">&gt; ../../ompi/include/mpi.h:324: error: expected '=', ',', ';', 'asm' or '__attribute__' before 'MPI_Aint'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:24 
</span><br>
<span class="quotelev1">&gt; ../../ompi/include/mpi.h:325: error: expected '=', ',', ';', 'asm' or '__attribute__' before 'MPI_Offset'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:24 
</span><br>
<span class="quotelev1">&gt; ../../ompi/include/mpi.h:326: error: expected '=', ',', ';', 'asm' or '__attribute__' before 'MPI_Count'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:24 
</span><br>
<span class="quotelev1">&gt; ../../ompi/include/mpi.h:374: error: expected declaration specifiers or '...' before 'MPI_Aint'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:24 
</span><br>
<span class="quotelev1">&gt; ../../ompi/include/mpi.h:376: error: expected declaration specifiers or '...' before 'MPI_Offset'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:24 
</span><br>
<span class="quotelev1">&gt; In file included from ../../ompi/datatype/ompi_datatype.h:43,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:24 
</span><br>
<span class="quotelev1">&gt;                  from ompi_datatype_args.c:33:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:24 
</span><br>
<span class="quotelev1">&gt; ../../ompi/include/mpi.h:1159: error: expected declaration specifiers or '...' before 'MPI_Aint'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:24 
</span><br>
<span class="quotelev1">&gt; ../../ompi/include/mpi.h:1164: error: expected declaration specifiers or '...' before 'MPI_Aint'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:24 
</span><br>
<span class="quotelev1">&gt; ../../ompi/include/mpi.h:1178: error: expected ')' before 'size'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:24 
</span><br>
<span class="quotelev1">&gt; ../../ompi/include/mpi.h:1331: error: expected declaration specifiers or '...' before 'MPI_Offset'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:24 
</span><br>
<span class="quotelev1">&gt; ../../ompi/include/mpi.h:1332: error: expected declaration specifiers or '...' before 'MPI_Offset'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:24 
</span><br>
<span class="quotelev1">&gt; ../../ompi/include/mpi.h:1333: error: expected declaration specifiers or '...' before 'MPI_Offset'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:24 
</span><br>
<span class="quotelev1">&gt; ../../ompi/include/mpi.h:1338: error: expected declaration specifiers or '...' before 'MPI_Offset'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:24 
</span><br>
<span class="quotelev1">&gt; ../../ompi/include/mpi.h:1340: error: expected declaration specifiers or '...' before 'MPI_Offset'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:24 
</span><br>
<span class="quotelev1">&gt; ../../ompi/include/mpi.h:1343: error: expected declaration specifiers or '...' before 'MPI_Offset'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:24 
</span><br>
<span class="quotelev1">&gt; ../../ompi/include/mpi.h:1345: error: expected declaration specifiers or '...' before 'MPI_Offset'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:24 
</span><br>
<span class="quotelev1">&gt; ../../ompi/include/mpi.h:1347: error: expected declaration specifiers or '...' before 'MPI_Offset'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:24 
</span><br>
<span class="quotelev1">&gt; ../../ompi/include/mpi.h:1349: error: expected declaration specifiers or '...' before 'MPI_Offset'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:24 
</span><br>
<span class="quotelev1">&gt; ../../ompi/include/mpi.h:1351: error: expected declaration specifiers or '...' before 'MPI_Offset'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:24 
</span><br>
<span class="quotelev1">&gt; ../../ompi/include/mpi.h:1353: error: expected declaration specifiers or '...' before 'MPI_Offset'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:24 
</span><br>
<span class="quotelev1">&gt; ../../ompi/include/mpi.h:1367: error: expected declaration specifiers or '...' before 'MPI_Offset'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:24 
</span><br>
<span class="quotelev1">&gt; ../../ompi/include/mpi.h:1368: error: expected declaration specifiers or '...' before 'MPI_Offset'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:24 
</span><br>
<span class="quotelev1">&gt; ../../ompi/include/mpi.h:1369: error: expected declaration specifiers or '...' before 'MPI_Offset'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:24 
</span><br>
<span class="quotelev1">&gt; ../../ompi/include/mpi.h:1370: error: expected declaration specifiers or '...' before 'MPI_Offset'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:24 
</span><br>
<span class="quotelev1">&gt; ../../ompi/include/mpi.h:1383: error: expected declaration specifiers or '...' before 'MPI_Offset'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:24 
</span><br>
<span class="quotelev1">&gt; ../../ompi/include/mpi.h:1384: error: expected declaration specifiers or '...' before 'MPI_Offset'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:24 
</span><br>
<span class="quotelev1">&gt; ../../ompi/include/mpi.h:1385: error: expected declaration specifiers or '...' before 'MPI_Offset'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:24 
</span><br>
<span class="quotelev1">&gt; ../../ompi/include/mpi.h:1388: error: expected declaration specifiers or '...' before 'MPI_Offset'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:24 
</span><br>
<span class="quotelev1">&gt; ../../ompi/include/mpi.h:1404: error: expected declaration specifiers or '...' before 'MPI_Aint'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:24 
</span><br>
<span class="quotelev1">&gt; ../../ompi/include/mpi.h:1424: error: expected declaration specifiers or '...' before 'MPI_Aint'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:24 
</span><br>
<span class="quotelev1">&gt; ../../ompi/include/mpi.h:1427: error: expected declaration specifiers or '...' before 'MPI_Count'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:24 
</span><br>
<span class="quotelev1">&gt; ../../ompi/include/mpi.h:1430: error: expected declaration specifiers or '...' before 'MPI_Aint'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:24 
</span><br>
<span class="quotelev1">&gt; ../../ompi/include/mpi.h:1550: warning: type defaults to 'int' in declaration of 'MPI_Aint'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:24 
</span><br>
<span class="quotelev1">&gt; ../../ompi/include/mpi.h:1550: error: expected ';', ',' or ')' before 'sdispls'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:24 
</span><br>
<span class="quotelev1">&gt; ../../ompi/include/mpi.h:1553: warning: type defaults to 'int' in declaration of 'MPI_Aint'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:24 
</span><br>
<span class="quotelev1">&gt; ../../ompi/include/mpi.h:1553: error: expected ';', ',' or ')' before 'sdispls'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:24 
</span><br>
<span class="quotelev1">&gt; ../../ompi/include/mpi.h:1564: error: expected declaration specifiers or '...' before 'MPI_Aint'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:24 
</span><br>
<span class="quotelev1">&gt; ../../ompi/include/mpi.h:1564: error: expected declaration specifiers or '...' before 'MPI_Aint'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:24 
</span><br>
<span class="quotelev1">&gt; ../../ompi/include/mpi.h:1566: error: expected declaration specifiers or '...' before 'MPI_Aint'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:24 
</span><br>
<span class="quotelev1">&gt; ../../ompi/include/mpi.h:1576: error: expected declaration specifiers or '...' before 'MPI_Aint'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:24 
</span><br>
<span class="quotelev1">&gt; ../../ompi/include/mpi.h:1653: error: expected declaration specifiers or '...' before 'MPI_Count'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:24 
</span><br>
<span class="quotelev1">&gt; ../../ompi/include/mpi.h:1677: warning: type defaults to 'int' in declaration of 'MPI_Aint'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:24 
</span><br>
<span class="quotelev1">&gt; ../../ompi/include/mpi.h:1677: error: expected ';', ',' or ')' before 'array_of_displacements'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:24 
</span><br>
<span class="quotelev1">&gt; ../../ompi/include/mpi.h:1681: warning: type defaults to 'int' in declaration of 'MPI_Aint'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:24 
</span><br>
<span class="quotelev1">&gt; ../../ompi/include/mpi.h:1681: error: expected ';', ',' or ')' before 'array_of_displacements'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:24 
</span><br>
<span class="quotelev1">&gt; ../../ompi/include/mpi.h:1684: error: expected declaration specifiers or '...' before 'MPI_Aint'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:24 
</span><br>
<span class="quotelev1">&gt; ../../ompi/include/mpi.h:1695: warning: type defaults to 'int' in declaration of 'MPI_Aint'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:24 
</span><br>
<span class="quotelev1">&gt; ../../ompi/include/mpi.h:1695: error: expected ';', ',' or ')' before 'array_of_displacements'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:24 
</span><br>
<span class="quotelev1">&gt; ../../ompi/include/mpi.h:1701: error: expected declaration specifiers or '...' before 'MPI_Aint'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:24 
</span><br>
<span class="quotelev1">&gt; ../../ompi/include/mpi.h:1702: error: expected declaration specifiers or '...' before 'MPI_Aint'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:24 
</span><br>
<span class="quotelev1">&gt; ../../ompi/include/mpi.h:1705: error: expected declaration specifiers or '...' before 'MPI_Aint'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:24 
</span><br>
<span class="quotelev1">&gt; ../../ompi/include/mpi.h:1715: error: expected declaration specifiers or '...' before 'MPI_Aint'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:24 
</span><br>
<span class="quotelev1">&gt; ../../ompi/include/mpi.h:1720: error: expected declaration specifiers or '...' before 'MPI_Aint'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:24 
</span><br>
<span class="quotelev1">&gt; ../../ompi/include/mpi.h:1721: error: expected declaration specifiers or '...' before 'MPI_Aint'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:24 
</span><br>
<span class="quotelev1">&gt; ../../ompi/include/mpi.h:1722: error: expected declaration specifiers or '...' before 'MPI_Count'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:24 
</span><br>
<span class="quotelev1">&gt; ../../ompi/include/mpi.h:1723: error: expected declaration specifiers or '...' before 'MPI_Count'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:24 
</span><br>
<span class="quotelev1">&gt; ../../ompi/include/mpi.h:1726: error: expected declaration specifiers or '...' before 'MPI_Aint'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:24 
</span><br>
<span class="quotelev1">&gt; ../../ompi/include/mpi.h:1727: error: expected declaration specifiers or '...' before 'MPI_Aint'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:24 
</span><br>
<span class="quotelev1">&gt; ../../ompi/include/mpi.h:1728: error: expected declaration specifiers or '...' before 'MPI_Count'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:24 
</span><br>
<span class="quotelev1">&gt; ../../ompi/include/mpi.h:1729: error: expected declaration specifiers or '...' before 'MPI_Count'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:24 
</span><br>
<span class="quotelev1">&gt; ../../ompi/include/mpi.h:1731: error: expected declaration specifiers or '...' before 'MPI_Aint'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:24 
</span><br>
<span class="quotelev1">&gt; ../../ompi/include/mpi.h:1734: error: expected declaration specifiers or '...' before 'MPI_Aint'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:24 
</span><br>
<span class="quotelev1">&gt; ../../ompi/include/mpi.h:1740: error: expected declaration specifiers or '...' before 'MPI_Aint'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:24 
</span><br>
<span class="quotelev1">&gt; ../../ompi/include/mpi.h:1747: error: expected declaration specifiers or '...' before 'MPI_Count'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:24 
</span><br>
<span class="quotelev1">&gt; ../../ompi/include/mpi.h:1749: error: expected declaration specifiers or '...' before 'MPI_Aint'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:24 
</span><br>
<span class="quotelev1">&gt; ../../ompi/include/mpi.h:1753: error: expected declaration specifiers or '...' before 'MPI_Aint'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:24 
</span><br>
<span class="quotelev1">&gt; ../../ompi/include/mpi.h:1761: error: expected declaration specifiers or '...' before 'MPI_Aint'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:24 
</span><br>
<span class="quotelev1">&gt; ../../ompi/include/mpi.h:1762: error: expected declaration specifiers or '...' before 'MPI_Aint'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:24 
</span><br>
<span class="quotelev1">&gt; ../../ompi/include/mpi.h:1775: error: expected declaration specifiers or '...' before 'MPI_Aint'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:24 
</span><br>
<span class="quotelev1">&gt; ../../ompi/include/mpi.h:1810: error: expected declaration specifiers or '...' before 'MPI_Aint'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:24 
</span><br>
<span class="quotelev1">&gt; ../../ompi/include/mpi.h:1815: error: expected declaration specifiers or '...' before 'MPI_Aint'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:24 
</span><br>
<span class="quotelev1">&gt; ../../ompi/include/mpi.h:1829: error: expected ')' before 'size'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:24 
</span><br>
<span class="quotelev1">&gt; ../../ompi/include/mpi.h:1982: error: expected declaration specifiers or '...' before 'MPI_Offset'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:24 
</span><br>
<span class="quotelev1">&gt; ../../ompi/include/mpi.h:1983: error: expected declaration specifiers or '...' before 'MPI_Offset'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:24 
</span><br>
<span class="quotelev1">&gt; ../../ompi/include/mpi.h:1984: error: expected declaration specifiers or '...' before 'MPI_Offset'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:24 
</span><br>
<span class="quotelev1">&gt; ../../ompi/include/mpi.h:1989: error: expected declaration specifiers or '...' before 'MPI_Offset'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:24 
</span><br>
<span class="quotelev1">&gt; ../../ompi/include/mpi.h:1991: error: expected declaration specifiers or '...' before 'MPI_Offset'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:24 
</span><br>
<span class="quotelev1">&gt; ../../ompi/include/mpi.h:1994: error: expected declaration specifiers or '...' before 'MPI_Offset'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:24 
</span><br>
<span class="quotelev1">&gt; ../../ompi/include/mpi.h:1996: error: expected declaration specifiers or '...' before 'MPI_Offset'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:24 
</span><br>
<span class="quotelev1">&gt; ../../ompi/include/mpi.h:1998: error: expected declaration specifiers or '...' before 'MPI_Offset'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:24 
</span><br>
<span class="quotelev1">&gt; ../../ompi/include/mpi.h:2000: error: expected declaration specifiers or '...' before 'MPI_Offset'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:24 
</span><br>
<span class="quotelev1">&gt; ../../ompi/include/mpi.h:2002: error: expected declaration specifiers or '...' before 'MPI_Offset'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:24 
</span><br>
<span class="quotelev1">&gt; ../../ompi/include/mpi.h:2004: error: expected declaration specifiers or '...' before 'MPI_Offset'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:24 
</span><br>
<span class="quotelev1">&gt; ../../ompi/include/mpi.h:2018: error: expected declaration specifiers or '...' before 'MPI_Offset'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:24 
</span><br>
<span class="quotelev1">&gt; ../../ompi/include/mpi.h:2019: error: expected declaration specifiers or '...' before 'MPI_Offset'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:24 
</span><br>
<span class="quotelev1">&gt; ../../ompi/include/mpi.h:2020: error: expected declaration specifiers or '...' before 'MPI_Offset'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:24 
</span><br>
<span class="quotelev1">&gt; ../../ompi/include/mpi.h:2021: error: expected declaration specifiers or '...' before 'MPI_Offset'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:24 
</span><br>
<span class="quotelev1">&gt; ../../ompi/include/mpi.h:2034: error: expected declaration specifiers or '...' before 'MPI_Offset'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:24 
</span><br>
<span class="quotelev1">&gt; ../../ompi/include/mpi.h:2035: error: expected declaration specifiers or '...' before 'MPI_Offset'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:24 
</span><br>
<span class="quotelev1">&gt; ../../ompi/include/mpi.h:2036: error: expected declaration specifiers or '...' before 'MPI_Offset'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:24 
</span><br>
<span class="quotelev1">&gt; ../../ompi/include/mpi.h:2039: error: expected declaration specifiers or '...' before 'MPI_Offset'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:24 
</span><br>
<span class="quotelev1">&gt; ../../ompi/include/mpi.h:2055: error: expected declaration specifiers or '...' before 'MPI_Aint'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:24 
</span><br>
<span class="quotelev1">&gt; ../../ompi/include/mpi.h:2075: error: expected declaration specifiers or '...' before 'MPI_Aint'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:24 
</span><br>
<span class="quotelev1">&gt; ../../ompi/include/mpi.h:2080: error: expected declaration specifiers or '...' before 'MPI_Count'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:24 
</span><br>
<span class="quotelev1">&gt; ../../ompi/include/mpi.h:2083: error: expected declaration specifiers or '...' before 'MPI_Aint'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:24 
</span><br>
<span class="quotelev1">&gt; ../../ompi/include/mpi.h:2203: warning: type defaults to 'int' in declaration of 'MPI_Aint'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:24 
</span><br>
<span class="quotelev1">&gt; ../../ompi/include/mpi.h:2203: error: expected ';', ',' or ')' before 'sdispls'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:24 
</span><br>
<span class="quotelev1">&gt; ../../ompi/include/mpi.h:2206: warning: type defaults to 'int' in declaration of 'MPI_Aint'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:24 
</span><br>
<span class="quotelev1">&gt; ../../ompi/include/mpi.h:2206: error: expected ';', ',' or ')' before 'sdispls'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:24 
</span><br>
<span class="quotelev1">&gt; ../../ompi/include/mpi.h:2217: error: expected declaration specifiers or '...' before 'MPI_Aint'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:24 
</span><br>
<span class="quotelev1">&gt; ../../ompi/include/mpi.h:2217: error: expected declaration specifiers or '...' before 'MPI_Aint'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:24 
</span><br>
<span class="quotelev1">&gt; ../../ompi/include/mpi.h:2219: error: expected declaration specifiers or '...' before 'MPI_Aint'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:24 
</span><br>
<span class="quotelev1">&gt; ../../ompi/include/mpi.h:2229: error: expected declaration specifiers or '...' before 'MPI_Aint'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:24 
</span><br>
<span class="quotelev1">&gt; ../../ompi/include/mpi.h:2306: error: expected declaration specifiers or '...' before 'MPI_Count'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:24 
</span><br>
<span class="quotelev1">&gt; ../../ompi/include/mpi.h:2329: warning: type defaults to 'int' in declaration of 'MPI_Aint'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:24 
</span><br>
<span class="quotelev1">&gt; ../../ompi/include/mpi.h:2329: error: expected ';', ',' or ')' before 'array_of_displacements'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:24 
</span><br>
<span class="quotelev1">&gt; ../../ompi/include/mpi.h:2332: error: expected declaration specifiers or '...' before 'MPI_Aint'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:24 
</span><br>
<span class="quotelev1">&gt; ../../ompi/include/mpi.h:2339: warning: type defaults to 'int' in declaration of 'MPI_Aint'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:24 
</span><br>
<span class="quotelev1">&gt; ../../ompi/include/mpi.h:2339: error: expected ';', ',' or ')' before 'array_of_displacements'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:24 
</span><br>
<span class="quotelev1">&gt; ../../ompi/include/mpi.h:2347: warning: type defaults to 'int' in declaration of 'MPI_Aint'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:24 
</span><br>
<span class="quotelev1">&gt; ../../ompi/include/mpi.h:2347: error: expected ';', ',' or ')' before 'array_of_displacements'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:24 
</span><br>
<span class="quotelev1">&gt; ../../ompi/include/mpi.h:2353: error: expected declaration specifiers or '...' before 'MPI_Aint'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:24 
</span><br>
<span class="quotelev1">&gt; ../../ompi/include/mpi.h:2354: error: expected declaration specifiers or '...' before 'MPI_Aint'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:24 
</span><br>
<span class="quotelev1">&gt; ../../ompi/include/mpi.h:2357: error: expected declaration specifiers or '...' before 'MPI_Aint'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:24 
</span><br>
<span class="quotelev1">&gt; ../../ompi/include/mpi.h:2367: error: expected declaration specifiers or '...' before 'MPI_Aint'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:24 
</span><br>
<span class="quotelev1">&gt; ../../ompi/include/mpi.h:2372: error: expected declaration specifiers or '...' before 'MPI_Aint'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:24 
</span><br>
<span class="quotelev1">&gt; ../../ompi/include/mpi.h:2373: error: expected declaration specifiers or '...' before 'MPI_Aint'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:24 
</span><br>
<span class="quotelev1">&gt; ../../ompi/include/mpi.h:2374: error: expected declaration specifiers or '...' before 'MPI_Count'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:24 
</span><br>
<span class="quotelev1">&gt; ../../ompi/include/mpi.h:2375: error: expected declaration specifiers or '...' before 'MPI_Count'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:24 
</span><br>
<span class="quotelev1">&gt; ../../ompi/include/mpi.h:2378: error: expected declaration specifiers or '...' before 'MPI_Aint'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:24 
</span><br>
<span class="quotelev1">&gt; ../../ompi/include/mpi.h:2379: error: expected declaration specifiers or '...' before 'MPI_Aint'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:24 
</span><br>
<span class="quotelev1">&gt; ../../ompi/include/mpi.h:2380: error: expected declaration specifiers or '...' before 'MPI_Count'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:24 
</span><br>
<span class="quotelev1">&gt; ../../ompi/include/mpi.h:2381: error: expected declaration specifiers or '...' before 'MPI_Count'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:24 
</span><br>
<span class="quotelev1">&gt; ../../ompi/include/mpi.h:2383: error: expected declaration specifiers or '...' before 'MPI_Aint'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:24 
</span><br>
<span class="quotelev1">&gt; ../../ompi/include/mpi.h:2386: error: expected declaration specifiers or '...' before 'MPI_Aint'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:24 
</span><br>
<span class="quotelev1">&gt; ../../ompi/include/mpi.h:2392: error: expected declaration specifiers or '...' before 'MPI_Aint'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:24 
</span><br>
<span class="quotelev1">&gt; ../../ompi/include/mpi.h:2399: error: expected declaration specifiers or '...' before 'MPI_Count'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:24 
</span><br>
<span class="quotelev1">&gt; ../../ompi/include/mpi.h:2401: error: expected declaration specifiers or '...' before 'MPI_Aint'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:24 
</span><br>
<span class="quotelev1">&gt; ../../ompi/include/mpi.h:2405: error: expected declaration specifiers or '...' before 'MPI_Aint'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:24 
</span><br>
<span class="quotelev1">&gt; ../../ompi/include/mpi.h:2414: error: expected declaration specifiers or '...' before 'MPI_Aint'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:24 
</span><br>
<span class="quotelev1">&gt; ../../ompi/include/mpi.h:2415: error: expected declaration specifiers or '...' before 'MPI_Aint'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:24 
</span><br>
<span class="quotelev1">&gt; ../../ompi/include/mpi.h:2428: error: expected declaration specifiers or '...' before 'MPI_Aint'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:25 
</span><br>
<span class="quotelev1">&gt; ompi_datatype_args.c:661: error: expected declaration specifiers or '...' before 'MPI_Aint'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:25 
</span><br>
<span class="quotelev1">&gt; ompi_datatype_args.c:661: error: conflicting types for '__ompi_datatype_create_from_args'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:25 
</span><br>
<span class="quotelev1">&gt; ompi_datatype_args.c:41: note: previous declaration of '__ompi_datatype_create_from_args' was here
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:25 
</span><br>
<span class="quotelev1">&gt; ompi_datatype_args.c: In function '__ompi_datatype_create_from_args':
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:25 
</span><br>
<span class="quotelev1">&gt; ompi_datatype_args.c:689: error: 'a' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:25 
</span><br>
<span class="quotelev1">&gt; ompi_datatype_args.c:689: error: (Each undeclared identifier is reported only once
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:25 
</span><br>
<span class="quotelev1">&gt; ompi_datatype_args.c:689: error: for each function it appears in.)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 13:28:25 make[2]: *** [ompi_datatype_args.lo] Error 1
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14190.php">Jeff Squyres (jsquyres): "[OMPI devel] oshmem tests"</a>
<li><strong>Previous message:</strong> <a href="14188.php">Mike Dubman: "[OMPI devel] compile error in trunk"</a>
<li><strong>In reply to:</strong> <a href="14188.php">Mike Dubman: "[OMPI devel] compile error in trunk"</a>
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
