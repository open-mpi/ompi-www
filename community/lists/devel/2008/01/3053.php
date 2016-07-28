<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17250";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jan 26 14:27:38 2008" -->
<!-- isoreceived="20080126192738" -->
<!-- sent="Sat, 26 Jan 2008 14:27:22 -0500" -->
<!-- isosent="20080126192722" -->
<!-- name="Aur&#233;lien Bouteiller" -->
<!-- email="bouteill_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r17250" -->
<!-- id="CB7CBDAE-8DFE-4BBC-8797-8DD1E6CA45E2_at_eecs.utk.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="200801261843.m0QIh6cw017700_at_sourcehaven.osl.iu.edu" -->
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
<strong>From:</strong> Aur&#233;lien Bouteiller (<em>bouteill_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-26 14:27:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3054.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17250"</a>
<li><strong>Previous message:</strong> <a href="3052.php">Jeff Squyres: "Re: [OMPI devel] configure patch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3054.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17250"</a>
<li><strong>Reply:</strong> <a href="3054.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17250"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Do you think Windows is the only system where inttype.h might be  
<br>
udefine ? Have you tried both windows 32bits and windows 64bits ? I  
<br>
still believe that opal should provide a replacement to inttypes.h if  
<br>
it does not exist in the system.
<br>
<p>Aurelien
<br>
<p>Le 26 janv. 08 &#224; 13:43, bosilca_at_[hidden] a &#233;crit :
<br>
<p><span class="quotelev1">&gt; Author: bosilca
</span><br>
<span class="quotelev1">&gt; Date: 2008-01-26 13:43:06 EST (Sat, 26 Jan 2008)
</span><br>
<span class="quotelev1">&gt; New Revision: 17250
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/17250">https://svn.open-mpi.org/trac/ompi/changeset/17250</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Protect the standard header file, and allow the PML V to compile
</span><br>
<span class="quotelev1">&gt; on Windows.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Text files modified:
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/pml/v/vprotocol/pessimist/ 
</span><br>
<span class="quotelev1">&gt; vprotocol_pessimist_event.h        |     6 ++++++
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/pml/v/vprotocol/pessimist/ 
</span><br>
<span class="quotelev1">&gt; vprotocol_pessimist_sender_based.c |    12 ++++++------
</span><br>
<span class="quotelev1">&gt;   2 files changed, 12 insertions(+), 6 deletions(-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/pml/v/vprotocol/pessimist/ 
</span><br>
<span class="quotelev1">&gt; vprotocol_pessimist_event.h
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/pml/v/vprotocol/pessimist/ 
</span><br>
<span class="quotelev1">&gt; vprotocol_pessimist_event.h	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/pml/v/vprotocol/pessimist/ 
</span><br>
<span class="quotelev1">&gt; vprotocol_pessimist_event.h	2008-01-26 13:43:06 EST (Sat, 26 Jan 2008)
</span><br>
<span class="quotelev1">&gt; @@ -14,13 +14,19 @@
</span><br>
<span class="quotelev1">&gt; #include &quot;ompi_config.h&quot;
</span><br>
<span class="quotelev1">&gt; #include &quot;opal/mca/base/mca_base_param.h&quot;
</span><br>
<span class="quotelev1">&gt; #include &quot;ompi/mca/pml/base/pml_base_request.h&quot;
</span><br>
<span class="quotelev1">&gt; +#ifdef HAVE_INTTYPES_H
</span><br>
<span class="quotelev1">&gt; #include &lt;inttypes.h&gt;
</span><br>
<span class="quotelev1">&gt; +#endif  /* HAVE_INTTYPES_H */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; BEGIN_C_DECLS
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /* Make sure -Wformat is happy... */
</span><br>
<span class="quotelev1">&gt; typedef uint64_t vprotocol_pessimist_clock_t;
</span><br>
<span class="quotelev1">&gt; +#ifdef __WINDOWS__
</span><br>
<span class="quotelev1">&gt; +#define PRIpclock &quot;%llx&quot;
</span><br>
<span class="quotelev1">&gt; +#else
</span><br>
<span class="quotelev1">&gt; #define PRIpclock PRIx64
</span><br>
<span class="quotelev1">&gt; +#endif  /* __WINDOWS__ */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; typedef enum {
</span><br>
<span class="quotelev1">&gt;   VPROTOCOL_PESSIMIST_EVENT_TYPE_MATCHING,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/pml/v/vprotocol/pessimist/ 
</span><br>
<span class="quotelev1">&gt; vprotocol_pessimist_sender_based.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/pml/v/vprotocol/pessimist/ 
</span><br>
<span class="quotelev1">&gt; vprotocol_pessimist_sender_based.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/pml/v/vprotocol/pessimist/ 
</span><br>
<span class="quotelev1">&gt; vprotocol_pessimist_sender_based.c	2008-01-26 13:43:06 EST (Sat, 26  
</span><br>
<span class="quotelev1">&gt; Jan 2008)
</span><br>
<span class="quotelev1">&gt; @@ -52,7 +52,7 @@
</span><br>
<span class="quotelev1">&gt; static void sb_mmap_file_close(void)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; #if defined(__WINDOWS__)
</span><br>
<span class="quotelev1">&gt; -    closeHandle(sb.sb_fd);
</span><br>
<span class="quotelev1">&gt; +    CloseHandle(sb.sb_fd);
</span><br>
<span class="quotelev1">&gt; #else
</span><br>
<span class="quotelev1">&gt;     int ret = close(sb.sb_fd);
</span><br>
<span class="quotelev1">&gt;     if(-1 == ret)
</span><br>
<span class="quotelev1">&gt; @@ -75,12 +75,12 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     sb.sb_addr = (uintptr_t) MapViewOfFile(sb.sb_map,  
</span><br>
<span class="quotelev1">&gt; FILE_MAP_ALL_ACCESS, 0,
</span><br>
<span class="quotelev1">&gt;                                            sb.sb_offset,  
</span><br>
<span class="quotelev1">&gt; sb.sb_length);
</span><br>
<span class="quotelev1">&gt; -    if(NULL == sb.sb_addr)
</span><br>
<span class="quotelev1">&gt; +    if(NULL == (void*)sb.sb_addr)
</span><br>
<span class="quotelev1">&gt;     {
</span><br>
<span class="quotelev1">&gt;         V_OUTPUT_ERR(&quot;pml_v: vprotocol_pessimist:  
</span><br>
<span class="quotelev1">&gt; sender_based_alloc: mmap: %s&quot;,
</span><br>
<span class="quotelev1">&gt;                      GetLastError());
</span><br>
<span class="quotelev1">&gt; -        closeHandle(sb.sb_map);
</span><br>
<span class="quotelev1">&gt; -        closeHandle(sb.sb_fd);
</span><br>
<span class="quotelev1">&gt; +        CloseHandle(sb.sb_map);
</span><br>
<span class="quotelev1">&gt; +        CloseHandle(sb.sb_fd);
</span><br>
<span class="quotelev1">&gt;         ompi_mpi_abort(MPI_COMM_NULL, MPI_ERR_NO_SPACE, false);
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; #else
</span><br>
<span class="quotelev1">&gt; @@ -111,8 +111,8 @@
</span><br>
<span class="quotelev1">&gt; static void sb_mmap_free(void)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; #if    defined(__WINDOWS__)
</span><br>
<span class="quotelev1">&gt; -    UnmapViewOfFile(sb.sb_addr);
</span><br>
<span class="quotelev1">&gt; -    closeHandle(sb.sb_map);
</span><br>
<span class="quotelev1">&gt; +    UnmapViewOfFile( (LPCVOID)sb.sb_addr);
</span><br>
<span class="quotelev1">&gt; +    CloseHandle(sb.sb_map);
</span><br>
<span class="quotelev1">&gt; #else
</span><br>
<span class="quotelev1">&gt;     int ret = munmap((void *) sb.sb_addr, sb.sb_length);
</span><br>
<span class="quotelev1">&gt;     if(-1 == ret)
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn mailing list
</span><br>
<span class="quotelev1">&gt; svn_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3054.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17250"</a>
<li><strong>Previous message:</strong> <a href="3052.php">Jeff Squyres: "Re: [OMPI devel] configure patch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3054.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17250"</a>
<li><strong>Reply:</strong> <a href="3054.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17250"</a>
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
