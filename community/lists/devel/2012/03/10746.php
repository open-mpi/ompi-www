<?
$subject_val = "Re: [OMPI devel] SUSE verification";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 21 12:01:14 2012" -->
<!-- isoreceived="20120321160114" -->
<!-- sent="Wed, 21 Mar 2012 12:01:08 -0400" -->
<!-- isosent="20120321160108" -->
<!-- name="TERRY DONTJE" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] SUSE verification" -->
<!-- id="4F69FB44.1020406_at_oracle.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="4F69F49C.2080304_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] SUSE verification<br>
<strong>From:</strong> TERRY DONTJE (<em>terry.dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-21 12:01:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10747.php">Nathan Hjelm: "[OMPI devel] RFC: change default for tuned alltoallv to pairwise"</a>
<li><strong>Previous message:</strong> <a href="10745.php">TERRY DONTJE: "[OMPI devel] SUSE verification"</a>
<li><strong>In reply to:</strong> <a href="10745.php">TERRY DONTJE: "[OMPI devel] SUSE verification"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry the below cc line if for Solaris Studio compilers if you have gcc 
<br>
replace &quot;-G&quot; with &quot;-shared&quot;.
<br>
<p>thanks,
<br>
<p>--td
<br>
<p>On 3/21/2012 11:32 AM, TERRY DONTJE wrote:
<br>
<span class="quotelev1">&gt; I ran into a problem on a Suse 10.1 system and was wondering if anyone 
</span><br>
<span class="quotelev1">&gt; has a version of Suse newer than 10.1 that can try the following test 
</span><br>
<span class="quotelev1">&gt; and send me the results.
</span><br>
<span class="quotelev1">&gt; -----testpci----
</span><br>
<span class="quotelev1">&gt; cat &lt;&lt;EOF &gt;testpci.c
</span><br>
<span class="quotelev1">&gt; #include &lt;pci/pci.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int testpci() {
</span><br>
<span class="quotelev1">&gt;     struct pci_access *pciaccess;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     pci_init(pciaccess);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; EOF
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cc -G -m64 testpci.c -lpci
</span><br>
<span class="quotelev1">&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10746/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10747.php">Nathan Hjelm: "[OMPI devel] RFC: change default for tuned alltoallv to pairwise"</a>
<li><strong>Previous message:</strong> <a href="10745.php">TERRY DONTJE: "[OMPI devel] SUSE verification"</a>
<li><strong>In reply to:</strong> <a href="10745.php">TERRY DONTJE: "[OMPI devel] SUSE verification"</a>
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
