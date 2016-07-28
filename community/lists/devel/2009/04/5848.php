<?
$subject_val = "Re: [OMPI devel] bug in mca_mpool_base_module_create()";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 21 10:51:11 2009" -->
<!-- isoreceived="20090421145111" -->
<!-- sent="Tue, 21 Apr 2009 10:51:01 -0400" -->
<!-- isosent="20090421145101" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] bug in mca_mpool_base_module_create()" -->
<!-- id="36AB621B-B79A-48AF-950C-7D5C215A5B7E_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="DE7C090B-231D-4355-9ABB-A2FA6B755A4F_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] bug in mca_mpool_base_module_create()<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-21 10:51:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5849.php">Jeff Squyres: "Re: [OMPI devel] bug in mca_mpool_base_module_create()"</a>
<li><strong>Previous message:</strong> <a href="5847.php">Jeff Squyres: "Re: [OMPI devel] bug in mca_mpool_base_module_create()"</a>
<li><strong>In reply to:</strong> <a href="5847.php">Jeff Squyres: "Re: [OMPI devel] bug in mca_mpool_base_module_create()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5849.php">Jeff Squyres: "Re: [OMPI devel] bug in mca_mpool_base_module_create()"</a>
<li><strong>Reply:</strong> <a href="5849.php">Jeff Squyres: "Re: [OMPI devel] bug in mca_mpool_base_module_create()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I wonder why the mpool is so special that it doesn't inherit the logic  
<br>
from the MCA base with regard to opening only the components that  
<br>
match the user input?
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Apr 21, 2009, at 08:43 , Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Thanks!  I've committed a slightly different fix here:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    <a href="https://svn.open-mpi.org/trac/ompi/changeset/21044">https://svn.open-mpi.org/trac/ompi/changeset/21044</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 20, 2009, at 10:39 AM, Roberto Ammendola wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I found a small bug in function mca_mpool_base_module_create()  
</span><br>
<span class="quotelev2">&gt;&gt; where if a
</span><br>
<span class="quotelev2">&gt;&gt; bad name is provided for mpool component, last iterated component is
</span><br>
<span class="quotelev2">&gt;&gt; returned, instead of NULL. I suggest a solution:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ===================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- ompi/mca/mpool/base/mpool_base_lookup.c     (revision 21042)
</span><br>
<span class="quotelev2">&gt;&gt; +++ ompi/mca/mpool/base/mpool_base_lookup.c     (working copy)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -75,11 +75,14 @@
</span><br>
<span class="quotelev2">&gt;&gt;     for (item = opal_list_get_first(&amp;mca_mpool_base_components);
</span><br>
<span class="quotelev2">&gt;&gt;          item != opal_list_get_end(&amp;mca_mpool_base_components);
</span><br>
<span class="quotelev2">&gt;&gt;          item = opal_list_get_next(item)) {
</span><br>
<span class="quotelev2">&gt;&gt; +         mca_mpool_base_component_t* c;
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt;          mca_base_component_list_item_t *cli =
</span><br>
<span class="quotelev2">&gt;&gt;            (mca_base_component_list_item_t *) item;
</span><br>
<span class="quotelev2">&gt;&gt; -         component =
</span><br>
<span class="quotelev2">&gt;&gt; +         c =
</span><br>
<span class="quotelev2">&gt;&gt;            (mca_mpool_base_component_t *) cli-&gt;cli_component;
</span><br>
<span class="quotelev2">&gt;&gt; -         if(0 == strcmp(component-&gt;mpool_version.mca_component_name,
</span><br>
<span class="quotelev2">&gt;&gt; name)) {
</span><br>
<span class="quotelev2">&gt;&gt; +         if(0 == strcmp(c-&gt;mpool_version.mca_component_name,  
</span><br>
<span class="quotelev2">&gt;&gt; name)) {
</span><br>
<span class="quotelev2">&gt;&gt; +             component = c;
</span><br>
<span class="quotelev2">&gt;&gt;              break;
</span><br>
<span class="quotelev2">&gt;&gt;          }
</span><br>
<span class="quotelev2">&gt;&gt;     }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5849.php">Jeff Squyres: "Re: [OMPI devel] bug in mca_mpool_base_module_create()"</a>
<li><strong>Previous message:</strong> <a href="5847.php">Jeff Squyres: "Re: [OMPI devel] bug in mca_mpool_base_module_create()"</a>
<li><strong>In reply to:</strong> <a href="5847.php">Jeff Squyres: "Re: [OMPI devel] bug in mca_mpool_base_module_create()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5849.php">Jeff Squyres: "Re: [OMPI devel] bug in mca_mpool_base_module_create()"</a>
<li><strong>Reply:</strong> <a href="5849.php">Jeff Squyres: "Re: [OMPI devel] bug in mca_mpool_base_module_create()"</a>
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
