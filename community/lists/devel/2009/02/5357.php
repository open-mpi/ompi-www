<?
$subject_val = "Re: [OMPI devel] RFC: Adding OMPI_CHECK_WITHDIR checks";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  2 08:10:28 2009" -->
<!-- isoreceived="20090202131028" -->
<!-- sent="Mon, 02 Feb 2009 08:10:09 -0500" -->
<!-- isosent="20090202131009" -->
<!-- name="Matney Sr, Kenneth D." -->
<!-- email="matneykdsr_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Adding OMPI_CHECK_WITHDIR checks" -->
<!-- id="537C6C0940C6C143AA46A88946B8541710C494B7_at_ORNLEXCHANGE.ornl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="046D7C0A-DFAB-44D2-B899-0BE50BE8D946_at_cisco.com" -->
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
<strong>From:</strong> Matney Sr, Kenneth D. (<em>matneykdsr_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-02 08:10:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5358.php">Jeff Squyres: "Re: [OMPI devel] RFC: Adding OMPI_CHECK_WITHDIR checks"</a>
<li><strong>Previous message:</strong> <a href="5356.php">Graham, Richard L.: "Re: [OMPI devel] RFC: Move of ompi_bitmap_t"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/01/5315.php">Jeff Squyres: "Re: [OMPI devel] RFC: Adding OMPI_CHECK_WITHDIR checks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5358.php">Jeff Squyres: "Re: [OMPI devel] RFC: Adding OMPI_CHECK_WITHDIR checks"</a>
<li><strong>Reply:</strong> <a href="5358.php">Jeff Squyres: "Re: [OMPI devel] RFC: Adding OMPI_CHECK_WITHDIR checks"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Assuming that this update went through, there were no negative
<br>
side-effects for portals.
<br>
<pre>
-- 
Ken
 
-----Original Message-----
From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]] On
Behalf Of Jeff Squyres
Sent: Tuesday, January 27, 2009 11:51 AM
To: Open MPI Developers
Subject: Re: [OMPI devel] RFC: Adding OMPI_CHECK_WITHDIR checks
There was no disagreement about this issue on the teleconf today.  So  
if no one disagrees here on the list, I'll commit this stuff to the  
trunk at COB on Thursday 29 Jan 2009 (i.e., the RFC timeout).
On Jan 20, 2009, at 7:44 PM, Jeff Squyres wrote:
&gt; What: Adding OMPI_CHECK_WITHDIR checks in various .m4 files
&gt;
&gt; Why: Help prevent user errors via --with-&lt;foo&gt;=DIR configure options
&gt;
&gt; Where: config/*m4 and */mca/*/*/configure.m4 files, affecting the  
&gt; following environments:
&gt; - bproc (***)
&gt; - gm (***)
&gt; - loadleveler (***)
&gt; - lsf
&gt; - mx (***)
&gt; - open fabrics
&gt; - portals (***)
&gt; - psm (***)
&gt; - tm
&gt; - udapl
&gt; - elan (***)
&gt; - sctp
&gt; - blcr (***)
&gt; - libnuma
&gt; - valgrind
&gt; ===&gt; I could not easily test the (***) environments
&gt;
&gt; When: For OMPI v1.4 (could be convinced to make it for v1.3.1)
&gt;
&gt; Timeout: COB Thursday, Jan 29, 2009
&gt;
&gt; ------------
&gt;
&gt; The intent for OMPI v1.3's new OMPI_CHECK_WITHDIR m4 macro was to  
&gt; fix a case where a user was doing the following:
&gt;
&gt;  ./configure --with-openib=/path/to/nonexistent/OFED/installation
&gt;
&gt; ...but configure succeeded anyway because the sysadmins had  
&gt; installed OFED into /usr.  Hence, the user was getting something  
&gt; unexpected.
&gt;
&gt; OMPI_CHECK_WITHDIR does a very basic sanity check on directories  
&gt; provided by --with-&lt;foo&gt;=DIR configure options.  Specifically, it  
&gt; checks if the directory exists and if a token file exists in that  
&gt; directory (specifically, it calls &quot;ls &lt;token_file&gt;&quot;, so wildcards  
&gt; are acceptable).  If either of those tests fail, configure aborts  
&gt; with an appropriate error message.  This macro was used in the  
&gt; openib BTL configure stuff, but we didn't add it anywhere else.  I'm  
&gt; now adding it everywhere we have a --with-&lt;foo&gt;=DIR, which are in  
&gt; various .m4 files in the environments described above.
&gt;
&gt; Here's the hg where I added OMPI_CHECK_WITHDIR to all the  
&gt; environments listed above, but was unable to test the (***)  
&gt; environments:
&gt;
&gt;    <a href="http://www.open-mpi.org/hg/hgwebdir.cgi/jsquyres/">http://www.open-mpi.org/hg/hgwebdir.cgi/jsquyres/</a> 
&gt; ompi_check_withdir/
&gt;
&gt; We could bring this patch to v1.3.1 or we could wait until v1.4.  I  
&gt; don't really care either way.
&gt;
&gt; I plan to bring this work into the trunk next Thursday COB; it would  
&gt; be great if those who have the (*) environments could pull down the  
&gt; hg tree before then and give it a whirl so we can fix any problems  
&gt; beforehand.
&gt;
&gt; -- 
&gt; Jeff Squyres
&gt; Cisco Systems
&gt;
&gt; _______________________________________________
&gt; devel mailing list
&gt; devel_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
-- 
Jeff Squyres
Cisco Systems
_______________________________________________
devel mailing list
devel_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5358.php">Jeff Squyres: "Re: [OMPI devel] RFC: Adding OMPI_CHECK_WITHDIR checks"</a>
<li><strong>Previous message:</strong> <a href="5356.php">Graham, Richard L.: "Re: [OMPI devel] RFC: Move of ompi_bitmap_t"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/01/5315.php">Jeff Squyres: "Re: [OMPI devel] RFC: Adding OMPI_CHECK_WITHDIR checks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5358.php">Jeff Squyres: "Re: [OMPI devel] RFC: Adding OMPI_CHECK_WITHDIR checks"</a>
<li><strong>Reply:</strong> <a href="5358.php">Jeff Squyres: "Re: [OMPI devel] RFC: Adding OMPI_CHECK_WITHDIR checks"</a>
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
