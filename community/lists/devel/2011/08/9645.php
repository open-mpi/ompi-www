<?
$subject_val = "[OMPI devel] RFC: adding OMPIO module and new parallel I/O frameworks to trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 12 16:09:00 2011" -->
<!-- isoreceived="20110812200900" -->
<!-- sent="Fri, 12 Aug 2011 15:09:00 -0500" -->
<!-- isosent="20110812200900" -->
<!-- name="Edgar Gabriel" -->
<!-- email="gabriel_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: adding OMPIO module and new parallel I/O frameworks to trunk" -->
<!-- id="4E45885C.60706_at_cs.uh.edu" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: adding OMPIO module and new parallel I/O frameworks to trunk<br>
<strong>From:</strong> Edgar Gabriel (<em>gabriel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-12 16:09:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9646.php">Eugene Loh: "[OMPI devel] ibm/dynamic/loop_spawn"</a>
<li><strong>Previous message:</strong> <a href="9644.php">Jeff Squyres: "[OMPI devel] open-mpi.org scheduled outage"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9652.php">Jeff Squyres: "Re: [OMPI devel] RFC: adding OMPIO module and new parallel I/O frameworks to trunk"</a>
<li><strong>Reply:</strong> <a href="9652.php">Jeff Squyres: "Re: [OMPI devel] RFC: adding OMPIO module and new parallel I/O frameworks to trunk"</a>
<li><strong>Reply:</strong> <a href="9697.php">Edgar Gabriel: "Re: [OMPI devel] RFC: adding OMPIO module and new parallel I/O frameworks to trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
WHAT: add the ompio io module and new parallel io frameworks to trunk
<br>
<p>TIMEOUT: 08/22/2011
<br>
<p>DETAILS:
<br>
<p>we would like to bring the ompio module and the new parallel io
<br>
frameworks to the trunk to expose it to a wider set of platforms and
<br>
more widespread testing. The current functionality - while not yet
<br>
providing the full functionality of MPI I/O - is already useful, since
<br>
all blocking individual and collective I/O operations (arbitrary file
<br>
views, implicit and explicit offset) are supported. The missing
<br>
functionality ( non-blocking individual I/O and shared file pointers)
<br>
are currently being worked on and exist partially as stand-alone libraries.
<br>
<p>The current goal is to enable compilation of the new modules and
<br>
frameworks per default, but not use them unless explicitly requested by
<br>
the user, i.e. ROMIO will remain the default selection.
<br>
<p>Very little existing code is being touched, since most of the new code
<br>
are new frameworks and modules. If somebody would like to have a look at
<br>
the code and the changes, here isa public repository with the code.
<br>
<p><a href="https://bitbucket.org/mschaara/ompio">https://bitbucket.org/mschaara/ompio</a>
<br>
<p>The list of modified files are:
<br>
?       ompi/mca/fbtl
<br>
?       ompi/mca/sharedfp
<br>
?       ompi/mca/fcoll
<br>
?       ompi/mca/fs
<br>
?       ompi/mca/fcache
<br>
?       ompi/mca/io/ompio
<br>
M       ompi/mca/io/romio/src/io_romio_component.c
<br>
M       ompi/mca/io/base/io_base_file_select.c
<br>
M       ompi/mca/io/base/io_base_delete.c
<br>
?       ompi/config/ompi_check_pvfs2.m4
<br>
?       ompi/config/ompi_check_lustre.m4
<br>
<p>Feedback is highly welcome.
<br>
<p>Thanks
<br>
Edgar
<br>
<p><pre>
-- 
Edgar Gabriel
Assistant Professor
Parallel Software Technologies Lab      <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
Department of Computer Science          University of Houston
Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
Tel: +1 (713) 743-3857                  Fax: +1 (713) 743-3335

</pre>
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9645/signature.asc">OpenPGP digital signature</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9646.php">Eugene Loh: "[OMPI devel] ibm/dynamic/loop_spawn"</a>
<li><strong>Previous message:</strong> <a href="9644.php">Jeff Squyres: "[OMPI devel] open-mpi.org scheduled outage"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9652.php">Jeff Squyres: "Re: [OMPI devel] RFC: adding OMPIO module and new parallel I/O frameworks to trunk"</a>
<li><strong>Reply:</strong> <a href="9652.php">Jeff Squyres: "Re: [OMPI devel] RFC: adding OMPIO module and new parallel I/O frameworks to trunk"</a>
<li><strong>Reply:</strong> <a href="9697.php">Edgar Gabriel: "Re: [OMPI devel] RFC: adding OMPIO module and new parallel I/O frameworks to trunk"</a>
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
