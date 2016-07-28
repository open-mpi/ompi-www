<?
$subject_val = "Re: [OMPI devel] RFC: adding OMPIO module and new parallel I/O	frameworks to trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 16 13:38:13 2011" -->
<!-- isoreceived="20110816173813" -->
<!-- sent="Tue, 16 Aug 2011 13:38:05 -0400" -->
<!-- isosent="20110816173805" -->
<!-- name="Graham, Richard L." -->
<!-- email="rlgraham_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: adding OMPIO module and new parallel I/O	frameworks to trunk" -->
<!-- id="003F1DF6-7912-4C44-9FF1-84F1489F4CF7_at_ornl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="EAECDD82-B693-4DA8-877A-A3530D3AE337_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: adding OMPIO module and new parallel I/O	frameworks to trunk<br>
<strong>From:</strong> Graham, Richard L. (<em>rlgraham_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-16 13:38:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9655.php">Larry Baker: "Re: [OMPI devel] Building Error"</a>
<li><strong>Previous message:</strong> <a href="9653.php">Matthew Russell: "Re: [OMPI devel] Building Error"</a>
<li><strong>In reply to:</strong> <a href="9652.php">Jeff Squyres: "Re: [OMPI devel] RFC: adding OMPIO module and new parallel I/O frameworks to trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9697.php">Edgar Gabriel: "Re: [OMPI devel] RFC: adding OMPIO module and new parallel I/O frameworks to trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am in favor.
<br>
<p>Rich
<br>
<p>On Aug 16, 2011, at 11:51 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; We talked about this on the call today.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; No one seemed to have any objections; I generally think that this is the good idea.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any other comments?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Aug 12, 2011, at 4:09 PM, Edgar Gabriel wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; WHAT: add the ompio io module and new parallel io frameworks to trunk
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; TIMEOUT: 08/22/2011
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; DETAILS:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; we would like to bring the ompio module and the new parallel io
</span><br>
<span class="quotelev2">&gt;&gt; frameworks to the trunk to expose it to a wider set of platforms and
</span><br>
<span class="quotelev2">&gt;&gt; more widespread testing. The current functionality - while not yet
</span><br>
<span class="quotelev2">&gt;&gt; providing the full functionality of MPI I/O - is already useful, since
</span><br>
<span class="quotelev2">&gt;&gt; all blocking individual and collective I/O operations (arbitrary file
</span><br>
<span class="quotelev2">&gt;&gt; views, implicit and explicit offset) are supported. The missing
</span><br>
<span class="quotelev2">&gt;&gt; functionality ( non-blocking individual I/O and shared file pointers)
</span><br>
<span class="quotelev2">&gt;&gt; are currently being worked on and exist partially as stand-alone libraries.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The current goal is to enable compilation of the new modules and
</span><br>
<span class="quotelev2">&gt;&gt; frameworks per default, but not use them unless explicitly requested by
</span><br>
<span class="quotelev2">&gt;&gt; the user, i.e. ROMIO will remain the default selection.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Very little existing code is being touched, since most of the new code
</span><br>
<span class="quotelev2">&gt;&gt; are new frameworks and modules. If somebody would like to have a look at
</span><br>
<span class="quotelev2">&gt;&gt; the code and the changes, here isa public repository with the code.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; hxxps://bitbucket.org/mschaara/ompio
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The list of modified files are:
</span><br>
<span class="quotelev2">&gt;&gt; ?       ompi/mca/fbtl
</span><br>
<span class="quotelev2">&gt;&gt; ?       ompi/mca/sharedfp
</span><br>
<span class="quotelev2">&gt;&gt; ?       ompi/mca/fcoll
</span><br>
<span class="quotelev2">&gt;&gt; ?       ompi/mca/fs
</span><br>
<span class="quotelev2">&gt;&gt; ?       ompi/mca/fcache
</span><br>
<span class="quotelev2">&gt;&gt; ?       ompi/mca/io/ompio
</span><br>
<span class="quotelev2">&gt;&gt; M       ompi/mca/io/romio/src/io_romio_component.c
</span><br>
<span class="quotelev2">&gt;&gt; M       ompi/mca/io/base/io_base_file_select.c
</span><br>
<span class="quotelev2">&gt;&gt; M       ompi/mca/io/base/io_base_delete.c
</span><br>
<span class="quotelev2">&gt;&gt; ?       ompi/config/ompi_check_pvfs2.m4
</span><br>
<span class="quotelev2">&gt;&gt; ?       ompi/config/ompi_check_lustre.m4
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Feedback is highly welcome.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; Edgar
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Edgar Gabriel
</span><br>
<span class="quotelev2">&gt;&gt; Assistant Professor
</span><br>
<span class="quotelev2">&gt;&gt; Parallel Software Technologies Lab      hxxp://pstl.cs.uh.edu
</span><br>
<span class="quotelev2">&gt;&gt; Department of Computer Science          University of Houston
</span><br>
<span class="quotelev2">&gt;&gt; Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
</span><br>
<span class="quotelev2">&gt;&gt; Tel: +1 (713) 743-3857                  Fax: +1 (713) 743-3335
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; hxxp://www.open-mpi.org/mailman/listinfo.cgi/devel
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; hxxp://www.cisco.com/web/about/doing_business/legal/cri/
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
<span class="quotelev1">&gt; hxxp://www.open-mpi.org/mailman/listinfo.cgi/devel
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9655.php">Larry Baker: "Re: [OMPI devel] Building Error"</a>
<li><strong>Previous message:</strong> <a href="9653.php">Matthew Russell: "Re: [OMPI devel] Building Error"</a>
<li><strong>In reply to:</strong> <a href="9652.php">Jeff Squyres: "Re: [OMPI devel] RFC: adding OMPIO module and new parallel I/O frameworks to trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9697.php">Edgar Gabriel: "Re: [OMPI devel] RFC: adding OMPIO module and new parallel I/O frameworks to trunk"</a>
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
