<?
$subject_val = "Re: [OMPI devel] 1.4.5rc3 released";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 31 05:42:34 2012" -->
<!-- isoreceived="20120131104234" -->
<!-- sent="Tue, 31 Jan 2012 05:42:26 -0500" -->
<!-- isosent="20120131104226" -->
<!-- name="TERRY DONTJE" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.4.5rc3 released" -->
<!-- id="4F27C592.1070008_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4F2724EE.90401_at_lbl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.4.5rc3 released<br>
<strong>From:</strong> TERRY DONTJE (<em>terry.dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-31 05:42:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10287.php">Jeff Squyres: "Re: [OMPI devel] 1.4.5rc3 released"</a>
<li><strong>Previous message:</strong> <a href="10285.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.5rc3 released"</a>
<li><strong>In reply to:</strong> <a href="10282.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.5rc3 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10287.php">Jeff Squyres: "Re: [OMPI devel] 1.4.5rc3 released"</a>
<li><strong>Reply:</strong> <a href="10287.php">Jeff Squyres: "Re: [OMPI devel] 1.4.5rc3 released"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Good catch, for some reason the CMR of the patch I attached to ticket 
<br>
#2977 didn't apply the CXX part.  I've reopened the ticket asking Jeff 
<br>
to apply that part of the patch :-).
<br>
<p>Thanks,
<br>
<p>--td
<br>
<p>On 1/30/2012 6:17 PM, Paul H. Hargrove wrote:
<br>
<span class="quotelev1">&gt; I don't plan to rerun the dozens of different platforms for which I 
</span><br>
<span class="quotelev1">&gt; reported 1.4.5rc2 as PASSing.
</span><br>
<span class="quotelev1">&gt; I will try to recheck all the FAILure cases I reported.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If anybody wants me to retest any specific platforms, please let me know.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I do see that Terry did NOT yet add &quot;use CXX=CC but not CXX=sunCC&quot; to 
</span><br>
<span class="quotelev1">&gt; the README.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 1/30/2012 2:25 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; A few little fixes incorporated; posted in the usual location:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      <a href="http://www.open-mpi.org/software/ompi/v1.4/">http://www.open-mpi.org/software/ompi/v1.4/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The shared library versions still need to be updated before final 
</span><br>
<span class="quotelev2">&gt;&gt; release.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ----
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Combined patch from Fujitsu. Fixes a collections of typos over the
</span><br>
<span class="quotelev2">&gt;&gt; code and man pages.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modify Solaris Studio Complier notes about using xarch
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Fixes #2967: pretty much copy the text from MPI-2.2 in the description
</span><br>
<span class="quotelev2">&gt;&gt; of the group argument to MPI_COMM_CREATE.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Fixes #2844: ensure to take the value of --with(out)-memory-manager
</span><br>
<span class="quotelev2">&gt;&gt; into account when configuring the components of the faramework.  If
</span><br>
<span class="quotelev2">&gt;&gt; --without-memory-manager was given, then we really don't want any
</span><br>
<span class="quotelev2">&gt;&gt; memory managers to be used.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; NEWS and README updated
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.781.442.2631
Oracle *- Performance Technologies*
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10286/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10287.php">Jeff Squyres: "Re: [OMPI devel] 1.4.5rc3 released"</a>
<li><strong>Previous message:</strong> <a href="10285.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.5rc3 released"</a>
<li><strong>In reply to:</strong> <a href="10282.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.5rc3 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10287.php">Jeff Squyres: "Re: [OMPI devel] 1.4.5rc3 released"</a>
<li><strong>Reply:</strong> <a href="10287.php">Jeff Squyres: "Re: [OMPI devel] 1.4.5rc3 released"</a>
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
