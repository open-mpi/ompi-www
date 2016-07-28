<?
$subject_val = "Re: [OMPI users] [Open MPI Announce] Open MPI v1.6.3 released";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  5 16:18:49 2012" -->
<!-- isoreceived="20121105211849" -->
<!-- sent="Mon, 05 Nov 2012 14:18:44 -0700" -->
<!-- isosent="20121105211844" -->
<!-- name="Orion Poplawski" -->
<!-- email="orion_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [Open MPI Announce] Open MPI v1.6.3 released" -->
<!-- id="50982D34.8070306_at_cora.nwra.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="D9DEDDC1-27CD-4F7E-BA3B-756C0A86C6DC_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] [Open MPI Announce] Open MPI v1.6.3 released<br>
<strong>From:</strong> Orion Poplawski (<em>orion_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-05 16:18:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20643.php">Jeff Squyres: "Re: [OMPI users] [Open MPI Announce] Open MPI v1.6.3 released"</a>
<li><strong>Previous message:</strong> <a href="20641.php">Hodge, Gary C: "[OMPI users] gathering problem"</a>
<li><strong>In reply to:</strong> <a href="20631.php">Jeff Squyres: "Re: [OMPI users] [Open MPI Announce] Open MPI v1.6.3 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20643.php">Jeff Squyres: "Re: [OMPI users] [Open MPI Announce] Open MPI v1.6.3 released"</a>
<li><strong>Reply:</strong> <a href="20643.php">Jeff Squyres: "Re: [OMPI users] [Open MPI Announce] Open MPI v1.6.3 released"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 11/03/2012 02:38 PM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Crud.  You are correct.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The VERSION string for the f90 library was incorrectly updated to 4:0:1; it should have been updated to 4:0:3.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have fixed this for v1.6.4.  I'm *anticipating* that there aren't may people who will be bitten by this, so for the time being, at least, I'm publishing this workaround:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. Download Open MPI v1.6.3
</span><br>
<span class="quotelev1">&gt; 2. Untar it, configure it
</span><br>
<span class="quotelev1">&gt; 3. BEFORE you build it (but AFTER you ran configure!), edit ompi/mpi/f90/Makefile
</span><br>
<span class="quotelev1">&gt; 4. Change line 1212 from
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; libmpi_f90_so_version = 4:0:1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; to
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; libmpi_f90_so_version = 4:0:3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 5. Then make the &quot;all&quot; and &quot;install&quot; targets as usual.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If this workaround suffices for those affected, I'd prefer to release v1.6.4 with this fix after Supercomputing (i.e., early/mid December).  Please let me know.
</span><br>
<p>This plan works for me, although the attached change applied before configure 
<br>
seems more straightforward (it's what I'm doing in the Fedora package).
<br>
<p><p><pre>
-- 
Orion Poplawski
Technical Manager                     303-415-9701 x222
NWRA, Boulder Office                  FAX: 303-415-9702
3380 Mitchell Lane                       orion_at_[hidden]
Boulder, CO 80301                   <a href="http://www.nwra.com">http://www.nwra.com</a>

</pre>
<hr>
<ul>
<li>text/x-patch attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20642/openmpi-f90sover.patch">openmpi-f90sover.patch</a>
</ul>
<!-- attachment="openmpi-f90sover.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20643.php">Jeff Squyres: "Re: [OMPI users] [Open MPI Announce] Open MPI v1.6.3 released"</a>
<li><strong>Previous message:</strong> <a href="20641.php">Hodge, Gary C: "[OMPI users] gathering problem"</a>
<li><strong>In reply to:</strong> <a href="20631.php">Jeff Squyres: "Re: [OMPI users] [Open MPI Announce] Open MPI v1.6.3 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20643.php">Jeff Squyres: "Re: [OMPI users] [Open MPI Announce] Open MPI v1.6.3 released"</a>
<li><strong>Reply:</strong> <a href="20643.php">Jeff Squyres: "Re: [OMPI users] [Open MPI Announce] Open MPI v1.6.3 released"</a>
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
