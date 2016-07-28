<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16762";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 20 22:28:37 2007" -->
<!-- isoreceived="20071121032837" -->
<!-- sent="Tue, 20 Nov 2007 20:28:29 -0700" -->
<!-- isosent="20071121032829" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16762" -->
<!-- id="E3B394E5-519D-4E50-89A0-E961F766019C_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="05B54451-31F8-475D-8880-6E5333FB1E7F_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16762<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-20 22:28:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2660.php">Brad Penoff: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r16723"</a>
<li><strong>Previous message:</strong> <a href="2658.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16762"</a>
<li><strong>In reply to:</strong> <a href="2658.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16762"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<a href="https://svn.open-mpi.org/trac/ompi/ticket/1187">https://svn.open-mpi.org/trac/ompi/ticket/1187</a> is the CMR related to  
<br>
this bug.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Nov 20, 2007, at 8:11 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; George --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I assume that this needs to go to 1.2.5 as well, right?  Can you file
</span><br>
<span class="quotelev1">&gt; a CMR?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 20, 2007, at 10:10 PM, bosilca_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Author: bosilca
</span><br>
<span class="quotelev2">&gt;&gt; Date: 2007-11-20 22:10:05 EST (Tue, 20 Nov 2007)
</span><br>
<span class="quotelev2">&gt;&gt; New Revision: 16762
</span><br>
<span class="quotelev2">&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/16762">https://svn.open-mpi.org/trac/ompi/changeset/16762</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Log:
</span><br>
<span class="quotelev2">&gt;&gt; After the 10.5.1 update this bug is still valid. Remove the -g from
</span><br>
<span class="quotelev2">&gt;&gt; all
</span><br>
<span class="quotelev2">&gt;&gt; Leopard versions (until they fix it).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Text files modified:
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/config/ompi_config_asm.m4 |     2 +-
</span><br>
<span class="quotelev2">&gt;&gt;  1 files changed, 1 insertions(+), 1 deletions(-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/config/ompi_config_asm.m4
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
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/config/ompi_config_asm.m4	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/config/ompi_config_asm.m4	2007-11-20 22:10:05 EST (Tue, 20
</span><br>
<span class="quotelev2">&gt;&gt; Nov 2007)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -809,7 +809,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;    OMPI_VAR_SCOPE_PUSH([ompi_config_asm_flags_new
</span><br>
<span class="quotelev2">&gt;&gt; ompi_config_asm_flag])
</span><br>
<span class="quotelev2">&gt;&gt;    AC_MSG_CHECKING([if need to remove -g from CCASFLAGS])
</span><br>
<span class="quotelev2">&gt;&gt;    case &quot;$host&quot; in
</span><br>
<span class="quotelev2">&gt;&gt; -        *-apple-darwin9.0*)
</span><br>
<span class="quotelev2">&gt;&gt; +        *-apple-darwin9.*)
</span><br>
<span class="quotelev2">&gt;&gt;            for ompi_config_asm_flag in $CCASFLAGS; do
</span><br>
<span class="quotelev2">&gt;&gt;                if test &quot;$ompi_config_asm_flag&quot; != &quot;-g&quot;; then
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ompi_config_asm_flags_new=&quot;$ompi_config_asm_flags_new
</span><br>
<span class="quotelev2">&gt;&gt; $ompi_config_asm_flag&quot;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; svn-full mailing list
</span><br>
<span class="quotelev2">&gt;&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
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
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-2659/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2660.php">Brad Penoff: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r16723"</a>
<li><strong>Previous message:</strong> <a href="2658.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16762"</a>
<li><strong>In reply to:</strong> <a href="2658.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16762"</a>
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
