<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17177";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 23 14:57:08 2008" -->
<!-- isoreceived="20080123195708" -->
<!-- sent="Wed, 23 Jan 2008 14:56:58 -0500" -->
<!-- isosent="20080123195658" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r17177" -->
<!-- id="746A8E4D-FDF2-44EA-9933-9290B185DA91_at_eecs.utk.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="D5AC496A-1B78-45E9-97A1-4679591200C4_at_eecs.utk.edu" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-23 14:56:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3024.php">Ralph H Castain: "Re: [OMPI devel] trunk breakage"</a>
<li><strong>Previous message:</strong> <a href="3022.php">Jeff Squyres: "Re: [OMPI devel] OMPI/ORTE and tools"</a>
<li><strong>In reply to:</strong> <a href="3019.php">Aur&#233;lien Bouteiller: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17177"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Or the visibility attribute in the .h file. Please add OPAL_DECLSPEC  
<br>
to all functions that are visible from outside the carto component.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;George.
<br>
<p>On Jan 23, 2008, at 1:25 PM, Aur&#233;lien Bouteiller wrote:
<br>
<p><span class="quotelev1">&gt; Undefined symbols:
</span><br>
<span class="quotelev1">&gt;   &quot;_opal_carto_base_components_opened&quot;, referenced from:
</span><br>
<span class="quotelev1">&gt;       _opal_carto_base_components_opened$non_lazy_ptr in components.o
</span><br>
<span class="quotelev1">&gt;   &quot;_opal_carto_base_open&quot;, referenced from:
</span><br>
<span class="quotelev1">&gt;       ompi_info::open_components()      in components.o
</span><br>
<span class="quotelev1">&gt;   &quot;_opal_carto_base_close&quot;, referenced from:
</span><br>
<span class="quotelev1">&gt;       ompi_info::close_components()      in components.o
</span><br>
<span class="quotelev1">&gt; ld: symbol(s) not found
</span><br>
<span class="quotelev1">&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev1">&gt; make[3]: *** [ompi_info] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think you forgot one file in Makefile.am ;)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Aurelien
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Le 23 janv. 08 &#224; 04:20, sharonm_at_[hidden] a &#233;crit :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Author: sharonm
</span><br>
<span class="quotelev2">&gt;&gt; Date: 2008-01-23 04:20:34 EST (Wed, 23 Jan 2008)
</span><br>
<span class="quotelev2">&gt;&gt; New Revision: 17177
</span><br>
<span class="quotelev2">&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/17177">https://svn.open-mpi.org/trac/ompi/changeset/17177</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Log:
</span><br>
<span class="quotelev2">&gt;&gt; Move the carto framework to the trunk.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Added:
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/opal/class/opal_graph.c   (contents, props changed)
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/opal/class/opal_graph.h   (contents, props changed)
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/opal/mca/carto/
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/opal/mca/carto/Makefile.am   (contents, props changed)
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/opal/mca/carto/auto_detect/
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/opal/mca/carto/auto_detect/Makefile.am
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/opal/mca/carto/auto_detect/carto_auto_detect.h
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/opal/mca/carto/auto_detect/carto_auto_detect_component.c
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/opal/mca/carto/auto_detect/carto_auto_detect_module.c
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/opal/mca/carto/auto_detect/configure.params
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/opal/mca/carto/base/
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/opal/mca/carto/base/Makefile.am   (contents, props changed)
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/opal/mca/carto/base/base.h   (contents, props changed)
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/opal/mca/carto/base/carto_base_close.c   (contents, props
</span><br>
<span class="quotelev2">&gt;&gt; changed)
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/opal/mca/carto/base/carto_base_graph.c
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/opal/mca/carto/base/carto_base_graph.h
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/opal/mca/carto/base/carto_base_open.c   (contents, props
</span><br>
<span class="quotelev2">&gt;&gt; changed)
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/opal/mca/carto/base/carto_base_select.c   (contents, props
</span><br>
<span class="quotelev2">&gt;&gt; changed)
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/opal/mca/carto/base/static-components.h   (contents, props
</span><br>
<span class="quotelev2">&gt;&gt; changed)
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/opal/mca/carto/carto.h   (contents, props changed)
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/opal/mca/carto/file/
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/opal/mca/carto/file/Makefile.am   (contents, props changed)
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/opal/mca/carto/file/carto_file.h   (contents, props changed)
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/opal/mca/carto/file/carto_file_component.c   (contents,
</span><br>
<span class="quotelev2">&gt;&gt; props changed)
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/opal/mca/carto/file/carto_file_lex.c
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/opal/mca/carto/file/carto_file_lex.h
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/opal/mca/carto/file/carto_file_lex.l
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/opal/mca/carto/file/carto_file_module.c   (contents, props
</span><br>
<span class="quotelev2">&gt;&gt; changed)
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/opal/mca/carto/file/configure.params   (contents, props
</span><br>
<span class="quotelev2">&gt;&gt; changed)
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/opal/mca/carto/file/help-opal-carto-file.txt
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/test/carto/
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/test/carto/carto-file
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/test/carto/carto_test.c
</span><br>
<span class="quotelev2">&gt;&gt; Text files modified:
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/runtime/ompi_mpi_finalize.c   |     3 +++
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/runtime/ompi_mpi_init.c       |    11 +++++++++++
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/tools/ompi_info/components.cc |     6 ++++++
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/tools/ompi_info/ompi_info.cc  |     1 +
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/opal/class/Makefile.am             |     2 ++
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/orte/tools/orterun/orterun.c       |     3 +++
</span><br>
<span class="quotelev2">&gt;&gt;  6 files changed, 26 insertions(+), 0 deletions(-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Diff not shown due to size (183702 bytes).
</span><br>
<span class="quotelev2">&gt;&gt; To see the diff, run the following command:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 	svn diff -r 17176:17177 --no-diff-deleted
</span><br>
<span class="quotelev2">&gt;&gt;
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
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-3023/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3024.php">Ralph H Castain: "Re: [OMPI devel] trunk breakage"</a>
<li><strong>Previous message:</strong> <a href="3022.php">Jeff Squyres: "Re: [OMPI devel] OMPI/ORTE and tools"</a>
<li><strong>In reply to:</strong> <a href="3019.php">Aur&#233;lien Bouteiller: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17177"</a>
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
