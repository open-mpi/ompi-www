<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17250";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jan 26 14:39:09 2008" -->
<!-- isoreceived="20080126193909" -->
<!-- sent="Sat, 26 Jan 2008 14:39:00 -0500 (Eastern Standard Time)" -->
<!-- isosent="20080126193900" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r17250" -->
<!-- id="alpine.WNT.1.00.0801261437050.1836_at_alander" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CB7CBDAE-8DFE-4BBC-8797-8DD1E6CA45E2_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r17250<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-26 14:39:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3055.php">George Bosilca: "[OMPI devel] carto [moved from ompi-core]"</a>
<li><strong>Previous message:</strong> <a href="3053.php">Aur&#233;lien Bouteiller: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17250"</a>
<li><strong>In reply to:</strong> <a href="3053.php">Aur&#233;lien Bouteiller: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17250"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Interesting ... Maybe the simplest solution until opal provide such 
<br>
facilities is to replace
<br>
<p>#ifdef __WINDOWS__
<br>
by
<br>
#ifndef HAVE_INTTYPES_H
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Sat, 26 Jan 2008, Aur&#195;&#169;lien Bouteiller wrote:
<br>
<p><span class="quotelev1">&gt; Do you think Windows is the only system where inttype.h might be
</span><br>
<span class="quotelev1">&gt; udefine ? Have you tried both windows 32bits and windows 64bits ? I
</span><br>
<span class="quotelev1">&gt; still believe that opal should provide a replacement to inttypes.h if
</span><br>
<span class="quotelev1">&gt; it does not exist in the system.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Aurelien
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Le 26 janv. 08 &#195;&#160; 13:43, bosilca_at_[hidden] a &#195;&#169;crit :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Author: bosilca
</span><br>
<span class="quotelev2">&gt;&gt; Date: 2008-01-26 13:43:06 EST (Sat, 26 Jan 2008)
</span><br>
<span class="quotelev2">&gt;&gt; New Revision: 17250
</span><br>
<span class="quotelev2">&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/17250">https://svn.open-mpi.org/trac/ompi/changeset/17250</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Log:
</span><br>
<span class="quotelev2">&gt;&gt; Protect the standard header file, and allow the PML V to compile
</span><br>
<span class="quotelev2">&gt;&gt; on Windows.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Text files modified:
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/ompi/mca/pml/v/vprotocol/pessimist/
</span><br>
<span class="quotelev2">&gt;&gt; vprotocol_pessimist_event.h        |     6 ++++++
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/ompi/mca/pml/v/vprotocol/pessimist/
</span><br>
<span class="quotelev2">&gt;&gt; vprotocol_pessimist_sender_based.c |    12 ++++++------
</span><br>
<span class="quotelev2">&gt;&gt;   2 files changed, 12 insertions(+), 6 deletions(-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/pml/v/vprotocol/pessimist/
</span><br>
<span class="quotelev2">&gt;&gt; vprotocol_pessimist_event.h
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; ======================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/pml/v/vprotocol/pessimist/
</span><br>
<span class="quotelev2">&gt;&gt; vprotocol_pessimist_event.h	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/pml/v/vprotocol/pessimist/
</span><br>
<span class="quotelev2">&gt;&gt; vprotocol_pessimist_event.h	2008-01-26 13:43:06 EST (Sat, 26 Jan 2008)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -14,13 +14,19 @@
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi_config.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal/mca/base/mca_base_param.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;ompi/mca/pml/base/pml_base_request.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +#ifdef HAVE_INTTYPES_H
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;inttypes.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; +#endif  /* HAVE_INTTYPES_H */
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; BEGIN_C_DECLS
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /* Make sure -Wformat is happy... */
</span><br>
<span class="quotelev2">&gt;&gt; typedef uint64_t vprotocol_pessimist_clock_t;
</span><br>
<span class="quotelev2">&gt;&gt; +#ifdef __WINDOWS__
</span><br>
<span class="quotelev2">&gt;&gt; +#define PRIpclock &quot;%llx&quot;
</span><br>
<span class="quotelev2">&gt;&gt; +#else
</span><br>
<span class="quotelev2">&gt;&gt; #define PRIpclock PRIx64
</span><br>
<span class="quotelev2">&gt;&gt; +#endif  /* __WINDOWS__ */
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; typedef enum {
</span><br>
<span class="quotelev2">&gt;&gt;   VPROTOCOL_PESSIMIST_EVENT_TYPE_MATCHING,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/pml/v/vprotocol/pessimist/
</span><br>
<span class="quotelev2">&gt;&gt; vprotocol_pessimist_sender_based.c
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; ======================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/pml/v/vprotocol/pessimist/
</span><br>
<span class="quotelev2">&gt;&gt; vprotocol_pessimist_sender_based.c	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/pml/v/vprotocol/pessimist/
</span><br>
<span class="quotelev2">&gt;&gt; vprotocol_pessimist_sender_based.c	2008-01-26 13:43:06 EST (Sat, 26
</span><br>
<span class="quotelev2">&gt;&gt; Jan 2008)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -52,7 +52,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; static void sb_mmap_file_close(void)
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt; #if defined(__WINDOWS__)
</span><br>
<span class="quotelev2">&gt;&gt; -    closeHandle(sb.sb_fd);
</span><br>
<span class="quotelev2">&gt;&gt; +    CloseHandle(sb.sb_fd);
</span><br>
<span class="quotelev2">&gt;&gt; #else
</span><br>
<span class="quotelev2">&gt;&gt;     int ret = close(sb.sb_fd);
</span><br>
<span class="quotelev2">&gt;&gt;     if(-1 == ret)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -75,12 +75,12 @@
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     sb.sb_addr = (uintptr_t) MapViewOfFile(sb.sb_map,
</span><br>
<span class="quotelev2">&gt;&gt; FILE_MAP_ALL_ACCESS, 0,
</span><br>
<span class="quotelev2">&gt;&gt;                                            sb.sb_offset,
</span><br>
<span class="quotelev2">&gt;&gt; sb.sb_length);
</span><br>
<span class="quotelev2">&gt;&gt; -    if(NULL == sb.sb_addr)
</span><br>
<span class="quotelev2">&gt;&gt; +    if(NULL == (void*)sb.sb_addr)
</span><br>
<span class="quotelev2">&gt;&gt;     {
</span><br>
<span class="quotelev2">&gt;&gt;         V_OUTPUT_ERR(&quot;pml_v: vprotocol_pessimist:
</span><br>
<span class="quotelev2">&gt;&gt; sender_based_alloc: mmap: %s&quot;,
</span><br>
<span class="quotelev2">&gt;&gt;                      GetLastError());
</span><br>
<span class="quotelev2">&gt;&gt; -        closeHandle(sb.sb_map);
</span><br>
<span class="quotelev2">&gt;&gt; -        closeHandle(sb.sb_fd);
</span><br>
<span class="quotelev2">&gt;&gt; +        CloseHandle(sb.sb_map);
</span><br>
<span class="quotelev2">&gt;&gt; +        CloseHandle(sb.sb_fd);
</span><br>
<span class="quotelev2">&gt;&gt;         ompi_mpi_abort(MPI_COMM_NULL, MPI_ERR_NO_SPACE, false);
</span><br>
<span class="quotelev2">&gt;&gt;     }
</span><br>
<span class="quotelev2">&gt;&gt; #else
</span><br>
<span class="quotelev2">&gt;&gt; @@ -111,8 +111,8 @@
</span><br>
<span class="quotelev2">&gt;&gt; static void sb_mmap_free(void)
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt; #if    defined(__WINDOWS__)
</span><br>
<span class="quotelev2">&gt;&gt; -    UnmapViewOfFile(sb.sb_addr);
</span><br>
<span class="quotelev2">&gt;&gt; -    closeHandle(sb.sb_map);
</span><br>
<span class="quotelev2">&gt;&gt; +    UnmapViewOfFile( (LPCVOID)sb.sb_addr);
</span><br>
<span class="quotelev2">&gt;&gt; +    CloseHandle(sb.sb_map);
</span><br>
<span class="quotelev2">&gt;&gt; #else
</span><br>
<span class="quotelev2">&gt;&gt;     int ret = munmap((void *) sb.sb_addr, sb.sb_length);
</span><br>
<span class="quotelev2">&gt;&gt;     if(-1 == ret)
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; svn mailing list
</span><br>
<span class="quotelev2">&gt;&gt; svn_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>&quot;We must accept finite disappointment, but we must never lose infinite
<br>
hope.&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Martin Luther King
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3055.php">George Bosilca: "[OMPI devel] carto [moved from ompi-core]"</a>
<li><strong>Previous message:</strong> <a href="3053.php">Aur&#233;lien Bouteiller: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17250"</a>
<li><strong>In reply to:</strong> <a href="3053.php">Aur&#233;lien Bouteiller: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17250"</a>
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
