<?
$subject_val = "Re: [OMPI devel] RFC: Adding OMPI_CHECK_WITHDIR checks";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 27 11:51:02 2009" -->
<!-- isoreceived="20090127165102" -->
<!-- sent="Tue, 27 Jan 2009 11:50:56 -0500" -->
<!-- isosent="20090127165056" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Adding OMPI_CHECK_WITHDIR checks" -->
<!-- id="046D7C0A-DFAB-44D2-B899-0BE50BE8D946_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="2CF9DBBF-F472-409E-A89C-245C17FC361A_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Adding OMPI_CHECK_WITHDIR checks<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-27 11:50:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5316.php">Jeff Squyres: "[OMPI devel] BTL/sm meeting on Wed after Forum"</a>
<li><strong>Previous message:</strong> <a href="5314.php">Jeff Squyres: "Re: [OMPI devel] Heterogeneous OpenFabrics hardware"</a>
<li><strong>In reply to:</strong> <a href="5245.php">Jeff Squyres: "[OMPI devel] RFC: Adding OMPI_CHECK_WITHDIR checks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/02/5357.php">Matney Sr, Kenneth D.: "Re: [OMPI devel] RFC: Adding OMPI_CHECK_WITHDIR checks"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/02/5357.php">Matney Sr, Kenneth D.: "Re: [OMPI devel] RFC: Adding OMPI_CHECK_WITHDIR checks"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There was no disagreement about this issue on the teleconf today.  So  
<br>
if no one disagrees here on the list, I'll commit this stuff to the  
<br>
trunk at COB on Thursday 29 Jan 2009 (i.e., the RFC timeout).
<br>
<p><p>On Jan 20, 2009, at 7:44 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; What: Adding OMPI_CHECK_WITHDIR checks in various .m4 files
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Why: Help prevent user errors via --with-&lt;foo&gt;=DIR configure options
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Where: config/*m4 and */mca/*/*/configure.m4 files, affecting the  
</span><br>
<span class="quotelev1">&gt; following environments:
</span><br>
<span class="quotelev1">&gt; - bproc (***)
</span><br>
<span class="quotelev1">&gt; - gm (***)
</span><br>
<span class="quotelev1">&gt; - loadleveler (***)
</span><br>
<span class="quotelev1">&gt; - lsf
</span><br>
<span class="quotelev1">&gt; - mx (***)
</span><br>
<span class="quotelev1">&gt; - open fabrics
</span><br>
<span class="quotelev1">&gt; - portals (***)
</span><br>
<span class="quotelev1">&gt; - psm (***)
</span><br>
<span class="quotelev1">&gt; - tm
</span><br>
<span class="quotelev1">&gt; - udapl
</span><br>
<span class="quotelev1">&gt; - elan (***)
</span><br>
<span class="quotelev1">&gt; - sctp
</span><br>
<span class="quotelev1">&gt; - blcr (***)
</span><br>
<span class="quotelev1">&gt; - libnuma
</span><br>
<span class="quotelev1">&gt; - valgrind
</span><br>
<span class="quotelev1">&gt; ===&gt; I could not easily test the (***) environments
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When: For OMPI v1.4 (could be convinced to make it for v1.3.1)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Timeout: COB Thursday, Jan 29, 2009
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The intent for OMPI v1.3's new OMPI_CHECK_WITHDIR m4 macro was to  
</span><br>
<span class="quotelev1">&gt; fix a case where a user was doing the following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  ./configure --with-openib=/path/to/nonexistent/OFED/installation
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ...but configure succeeded anyway because the sysadmins had  
</span><br>
<span class="quotelev1">&gt; installed OFED into /usr.  Hence, the user was getting something  
</span><br>
<span class="quotelev1">&gt; unexpected.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OMPI_CHECK_WITHDIR does a very basic sanity check on directories  
</span><br>
<span class="quotelev1">&gt; provided by --with-&lt;foo&gt;=DIR configure options.  Specifically, it  
</span><br>
<span class="quotelev1">&gt; checks if the directory exists and if a token file exists in that  
</span><br>
<span class="quotelev1">&gt; directory (specifically, it calls &quot;ls &lt;token_file&gt;&quot;, so wildcards  
</span><br>
<span class="quotelev1">&gt; are acceptable).  If either of those tests fail, configure aborts  
</span><br>
<span class="quotelev1">&gt; with an appropriate error message.  This macro was used in the  
</span><br>
<span class="quotelev1">&gt; openib BTL configure stuff, but we didn't add it anywhere else.  I'm  
</span><br>
<span class="quotelev1">&gt; now adding it everywhere we have a --with-&lt;foo&gt;=DIR, which are in  
</span><br>
<span class="quotelev1">&gt; various .m4 files in the environments described above.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here's the hg where I added OMPI_CHECK_WITHDIR to all the  
</span><br>
<span class="quotelev1">&gt; environments listed above, but was unable to test the (***)  
</span><br>
<span class="quotelev1">&gt; environments:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    <a href="http://www.open-mpi.org/hg/hgwebdir.cgi/jsquyres/">http://www.open-mpi.org/hg/hgwebdir.cgi/jsquyres/</a> 
</span><br>
<span class="quotelev1">&gt; ompi_check_withdir/
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We could bring this patch to v1.3.1 or we could wait until v1.4.  I  
</span><br>
<span class="quotelev1">&gt; don't really care either way.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I plan to bring this work into the trunk next Thursday COB; it would  
</span><br>
<span class="quotelev1">&gt; be great if those who have the (*) environments could pull down the  
</span><br>
<span class="quotelev1">&gt; hg tree before then and give it a whirl so we can fix any problems  
</span><br>
<span class="quotelev1">&gt; beforehand.
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5316.php">Jeff Squyres: "[OMPI devel] BTL/sm meeting on Wed after Forum"</a>
<li><strong>Previous message:</strong> <a href="5314.php">Jeff Squyres: "Re: [OMPI devel] Heterogeneous OpenFabrics hardware"</a>
<li><strong>In reply to:</strong> <a href="5245.php">Jeff Squyres: "[OMPI devel] RFC: Adding OMPI_CHECK_WITHDIR checks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/02/5357.php">Matney Sr, Kenneth D.: "Re: [OMPI devel] RFC: Adding OMPI_CHECK_WITHDIR checks"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/02/5357.php">Matney Sr, Kenneth D.: "Re: [OMPI devel] RFC: Adding OMPI_CHECK_WITHDIR checks"</a>
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
