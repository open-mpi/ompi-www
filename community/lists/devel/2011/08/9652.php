<?
$subject_val = "Re: [OMPI devel] RFC: adding OMPIO module and new parallel I/O frameworks to trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 16 11:51:33 2011" -->
<!-- isoreceived="20110816155133" -->
<!-- sent="Tue, 16 Aug 2011 11:51:23 -0400" -->
<!-- isosent="20110816155123" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: adding OMPIO module and new parallel I/O frameworks to trunk" -->
<!-- id="EAECDD82-B693-4DA8-877A-A3530D3AE337_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4E45885C.60706_at_cs.uh.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: adding OMPIO module and new parallel I/O frameworks to trunk<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-16 11:51:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9653.php">Matthew Russell: "Re: [OMPI devel] Building Error"</a>
<li><strong>Previous message:</strong> <a href="9651.php">Ralph Castain: "Re: [OMPI devel] ibm/dynamic/loop_spawn"</a>
<li><strong>In reply to:</strong> <a href="9645.php">Edgar Gabriel: "[OMPI devel] RFC: adding OMPIO module and new parallel I/O frameworks to trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9654.php">Graham, Richard L.: "Re: [OMPI devel] RFC: adding OMPIO module and new parallel I/O	frameworks to trunk"</a>
<li><strong>Reply:</strong> <a href="9654.php">Graham, Richard L.: "Re: [OMPI devel] RFC: adding OMPIO module and new parallel I/O	frameworks to trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We talked about this on the call today.
<br>
<p>No one seemed to have any objections; I generally think that this is the good idea.
<br>
<p>Any other comments?
<br>
<p><p>On Aug 12, 2011, at 4:09 PM, Edgar Gabriel wrote:
<br>
<p><span class="quotelev1">&gt; WHAT: add the ompio io module and new parallel io frameworks to trunk
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; TIMEOUT: 08/22/2011
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; DETAILS:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; we would like to bring the ompio module and the new parallel io
</span><br>
<span class="quotelev1">&gt; frameworks to the trunk to expose it to a wider set of platforms and
</span><br>
<span class="quotelev1">&gt; more widespread testing. The current functionality - while not yet
</span><br>
<span class="quotelev1">&gt; providing the full functionality of MPI I/O - is already useful, since
</span><br>
<span class="quotelev1">&gt; all blocking individual and collective I/O operations (arbitrary file
</span><br>
<span class="quotelev1">&gt; views, implicit and explicit offset) are supported. The missing
</span><br>
<span class="quotelev1">&gt; functionality ( non-blocking individual I/O and shared file pointers)
</span><br>
<span class="quotelev1">&gt; are currently being worked on and exist partially as stand-alone libraries.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The current goal is to enable compilation of the new modules and
</span><br>
<span class="quotelev1">&gt; frameworks per default, but not use them unless explicitly requested by
</span><br>
<span class="quotelev1">&gt; the user, i.e. ROMIO will remain the default selection.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Very little existing code is being touched, since most of the new code
</span><br>
<span class="quotelev1">&gt; are new frameworks and modules. If somebody would like to have a look at
</span><br>
<span class="quotelev1">&gt; the code and the changes, here isa public repository with the code.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="https://bitbucket.org/mschaara/ompio">https://bitbucket.org/mschaara/ompio</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The list of modified files are:
</span><br>
<span class="quotelev1">&gt; ?       ompi/mca/fbtl
</span><br>
<span class="quotelev1">&gt; ?       ompi/mca/sharedfp
</span><br>
<span class="quotelev1">&gt; ?       ompi/mca/fcoll
</span><br>
<span class="quotelev1">&gt; ?       ompi/mca/fs
</span><br>
<span class="quotelev1">&gt; ?       ompi/mca/fcache
</span><br>
<span class="quotelev1">&gt; ?       ompi/mca/io/ompio
</span><br>
<span class="quotelev1">&gt; M       ompi/mca/io/romio/src/io_romio_component.c
</span><br>
<span class="quotelev1">&gt; M       ompi/mca/io/base/io_base_file_select.c
</span><br>
<span class="quotelev1">&gt; M       ompi/mca/io/base/io_base_delete.c
</span><br>
<span class="quotelev1">&gt; ?       ompi/config/ompi_check_pvfs2.m4
</span><br>
<span class="quotelev1">&gt; ?       ompi/config/ompi_check_lustre.m4
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Feedback is highly welcome.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Edgar
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Edgar Gabriel
</span><br>
<span class="quotelev1">&gt; Assistant Professor
</span><br>
<span class="quotelev1">&gt; Parallel Software Technologies Lab      <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
</span><br>
<span class="quotelev1">&gt; Department of Computer Science          University of Houston
</span><br>
<span class="quotelev1">&gt; Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
</span><br>
<span class="quotelev1">&gt; Tel: +1 (713) 743-3857                  Fax: +1 (713) 743-3335
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9653.php">Matthew Russell: "Re: [OMPI devel] Building Error"</a>
<li><strong>Previous message:</strong> <a href="9651.php">Ralph Castain: "Re: [OMPI devel] ibm/dynamic/loop_spawn"</a>
<li><strong>In reply to:</strong> <a href="9645.php">Edgar Gabriel: "[OMPI devel] RFC: adding OMPIO module and new parallel I/O frameworks to trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9654.php">Graham, Richard L.: "Re: [OMPI devel] RFC: adding OMPIO module and new parallel I/O	frameworks to trunk"</a>
<li><strong>Reply:</strong> <a href="9654.php">Graham, Richard L.: "Re: [OMPI devel] RFC: adding OMPIO module and new parallel I/O	frameworks to trunk"</a>
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
