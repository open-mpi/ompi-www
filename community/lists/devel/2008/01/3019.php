<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17177";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 23 13:25:31 2008" -->
<!-- isoreceived="20080123182531" -->
<!-- sent="Wed, 23 Jan 2008 13:25:23 -0500" -->
<!-- isosent="20080123182523" -->
<!-- name="Aur&#233;lien Bouteiller" -->
<!-- email="bouteill_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r17177" -->
<!-- id="D5AC496A-1B78-45E9-97A1-4679591200C4_at_eecs.utk.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="200801230920.m0N9KY40006090_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r17177<br>
<strong>From:</strong> Aur&#233;lien Bouteiller (<em>bouteill_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-23 13:25:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3020.php">Jeff Squyres: "[OMPI devel] trunk breakage"</a>
<li><strong>Previous message:</strong> <a href="3018.php">Ralph H Castain: "Re: [OMPI devel] dropping a pls module into an Open MPI build"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3023.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17177"</a>
<li><strong>Reply:</strong> <a href="3023.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17177"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Undefined symbols:
<br>
&nbsp;&nbsp;&nbsp;&quot;_opal_carto_base_components_opened&quot;, referenced from:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_opal_carto_base_components_opened$non_lazy_ptr in components.o
<br>
&nbsp;&nbsp;&nbsp;&quot;_opal_carto_base_open&quot;, referenced from:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_info::open_components()      in components.o
<br>
&nbsp;&nbsp;&nbsp;&quot;_opal_carto_base_close&quot;, referenced from:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_info::close_components()      in components.o
<br>
ld: symbol(s) not found
<br>
collect2: ld returned 1 exit status
<br>
make[3]: *** [ompi_info] Error 1
<br>
<p>I think you forgot one file in Makefile.am ;)
<br>
<p>Aurelien
<br>
<p>Le 23 janv. 08 &#224; 04:20, sharonm_at_[hidden] a &#233;crit :
<br>
<p><span class="quotelev1">&gt; Author: sharonm
</span><br>
<span class="quotelev1">&gt; Date: 2008-01-23 04:20:34 EST (Wed, 23 Jan 2008)
</span><br>
<span class="quotelev1">&gt; New Revision: 17177
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/17177">https://svn.open-mpi.org/trac/ompi/changeset/17177</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Move the carto framework to the trunk.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Added:
</span><br>
<span class="quotelev1">&gt;   trunk/opal/class/opal_graph.c   (contents, props changed)
</span><br>
<span class="quotelev1">&gt;   trunk/opal/class/opal_graph.h   (contents, props changed)
</span><br>
<span class="quotelev1">&gt;   trunk/opal/mca/carto/
</span><br>
<span class="quotelev1">&gt;   trunk/opal/mca/carto/Makefile.am   (contents, props changed)
</span><br>
<span class="quotelev1">&gt;   trunk/opal/mca/carto/auto_detect/
</span><br>
<span class="quotelev1">&gt;   trunk/opal/mca/carto/auto_detect/Makefile.am
</span><br>
<span class="quotelev1">&gt;   trunk/opal/mca/carto/auto_detect/carto_auto_detect.h
</span><br>
<span class="quotelev1">&gt;   trunk/opal/mca/carto/auto_detect/carto_auto_detect_component.c
</span><br>
<span class="quotelev1">&gt;   trunk/opal/mca/carto/auto_detect/carto_auto_detect_module.c
</span><br>
<span class="quotelev1">&gt;   trunk/opal/mca/carto/auto_detect/configure.params
</span><br>
<span class="quotelev1">&gt;   trunk/opal/mca/carto/base/
</span><br>
<span class="quotelev1">&gt;   trunk/opal/mca/carto/base/Makefile.am   (contents, props changed)
</span><br>
<span class="quotelev1">&gt;   trunk/opal/mca/carto/base/base.h   (contents, props changed)
</span><br>
<span class="quotelev1">&gt;   trunk/opal/mca/carto/base/carto_base_close.c   (contents, props  
</span><br>
<span class="quotelev1">&gt; changed)
</span><br>
<span class="quotelev1">&gt;   trunk/opal/mca/carto/base/carto_base_graph.c
</span><br>
<span class="quotelev1">&gt;   trunk/opal/mca/carto/base/carto_base_graph.h
</span><br>
<span class="quotelev1">&gt;   trunk/opal/mca/carto/base/carto_base_open.c   (contents, props  
</span><br>
<span class="quotelev1">&gt; changed)
</span><br>
<span class="quotelev1">&gt;   trunk/opal/mca/carto/base/carto_base_select.c   (contents, props  
</span><br>
<span class="quotelev1">&gt; changed)
</span><br>
<span class="quotelev1">&gt;   trunk/opal/mca/carto/base/static-components.h   (contents, props  
</span><br>
<span class="quotelev1">&gt; changed)
</span><br>
<span class="quotelev1">&gt;   trunk/opal/mca/carto/carto.h   (contents, props changed)
</span><br>
<span class="quotelev1">&gt;   trunk/opal/mca/carto/file/
</span><br>
<span class="quotelev1">&gt;   trunk/opal/mca/carto/file/Makefile.am   (contents, props changed)
</span><br>
<span class="quotelev1">&gt;   trunk/opal/mca/carto/file/carto_file.h   (contents, props changed)
</span><br>
<span class="quotelev1">&gt;   trunk/opal/mca/carto/file/carto_file_component.c   (contents,  
</span><br>
<span class="quotelev1">&gt; props changed)
</span><br>
<span class="quotelev1">&gt;   trunk/opal/mca/carto/file/carto_file_lex.c
</span><br>
<span class="quotelev1">&gt;   trunk/opal/mca/carto/file/carto_file_lex.h
</span><br>
<span class="quotelev1">&gt;   trunk/opal/mca/carto/file/carto_file_lex.l
</span><br>
<span class="quotelev1">&gt;   trunk/opal/mca/carto/file/carto_file_module.c   (contents, props  
</span><br>
<span class="quotelev1">&gt; changed)
</span><br>
<span class="quotelev1">&gt;   trunk/opal/mca/carto/file/configure.params   (contents, props  
</span><br>
<span class="quotelev1">&gt; changed)
</span><br>
<span class="quotelev1">&gt;   trunk/opal/mca/carto/file/help-opal-carto-file.txt
</span><br>
<span class="quotelev1">&gt;   trunk/test/carto/
</span><br>
<span class="quotelev1">&gt;   trunk/test/carto/carto-file
</span><br>
<span class="quotelev1">&gt;   trunk/test/carto/carto_test.c
</span><br>
<span class="quotelev1">&gt; Text files modified:
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/runtime/ompi_mpi_finalize.c   |     3 +++
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/runtime/ompi_mpi_init.c       |    11 +++++++++++
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/tools/ompi_info/components.cc |     6 ++++++
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/tools/ompi_info/ompi_info.cc  |     1 +
</span><br>
<span class="quotelev1">&gt;   trunk/opal/class/Makefile.am             |     2 ++
</span><br>
<span class="quotelev1">&gt;   trunk/orte/tools/orterun/orterun.c       |     3 +++
</span><br>
<span class="quotelev1">&gt;   6 files changed, 26 insertions(+), 0 deletions(-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Diff not shown due to size (183702 bytes).
</span><br>
<span class="quotelev1">&gt; To see the diff, run the following command:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	svn diff -r 17176:17177 --no-diff-deleted
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="3020.php">Jeff Squyres: "[OMPI devel] trunk breakage"</a>
<li><strong>Previous message:</strong> <a href="3018.php">Ralph H Castain: "Re: [OMPI devel] dropping a pls module into an Open MPI build"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3023.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17177"</a>
<li><strong>Reply:</strong> <a href="3023.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17177"</a>
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
