<?
$subject_val = "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 22 05:53:54 2011" -->
<!-- isoreceived="20111122105354" -->
<!-- sent="Tue, 22 Nov 2011 05:53:41 -0500" -->
<!-- isosent="20111122105341" -->
<!-- name="TERRY DONTJE" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)" -->
<!-- id="4ECB7F35.9070300_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4ECB7E20.2050103_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)<br>
<strong>From:</strong> TERRY DONTJE (<em>terry.dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-22 05:53:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10013.php">Jeff Squyres: "Re: [OMPI devel] Open MPI 1.4.4 Configuration Lefover from 1.4.2"</a>
<li><strong>Previous message:</strong> <a href="10011.php">TERRY DONTJE: "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
<li><strong>In reply to:</strong> <a href="10011.php">TERRY DONTJE: "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10022.php">Lukas Razik: "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
<li><strong>Reply:</strong> <a href="10022.php">Lukas Razik: "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 11/22/2011 5:49 AM, TERRY DONTJE wrote:
<br>
<span class="quotelev1">&gt; The error you are seeing is usually indicative of some code operating 
</span><br>
<span class="quotelev1">&gt; on memory that isn't aligned properly for a SPARC instruction being 
</span><br>
<span class="quotelev1">&gt; used.  The address that is causing the failure is odd aligned which is 
</span><br>
<span class="quotelev1">&gt; more than likely the culprit.  If you have a core dump and can 
</span><br>
<span class="quotelev1">&gt; disassemble the code that is being ran at the time it probably will be 
</span><br>
<span class="quotelev1">&gt; some sort of instruction requiring an alignment.  If the MPI you are 
</span><br>
<span class="quotelev1">&gt; using is something you built can you try and build OMPI with -g and 
</span><br>
<span class="quotelev1">&gt; get the line number in the PML that is failing?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I haven't seen this type of error for some time but I do all of my 
</span><br>
<span class="quotelev1">&gt; SPARC testing on Solaris with Solaris Studio Compilers.  You may want 
</span><br>
<span class="quotelev1">&gt; to try to compile the benchmark with &quot;-m32&quot; to see if that helps.  
</span><br>
<span class="quotelev1">&gt; Though being an odd address I suspect it might not.  If you can use 
</span><br>
<span class="quotelev1">&gt; the Studio Compilers you could try giving the compilers the 
</span><br>
<span class="quotelev1">&gt; -xmemalign=8i option when building the benchmark and see if that 
</span><br>
<span class="quotelev1">&gt; resolves the issue.  This would help to assure the issue is just an 
</span><br>
<span class="quotelev1">&gt; alignment of data we are slicing and dicing as opposed to wrongly 
</span><br>
<span class="quotelev1">&gt; addressing memory.
</span><br>
<span class="quotelev1">&gt;
</span><br>
After thinking about this you probably won't be able to use the Studio 
<br>
Compilers because they only support compiling on Linux with x86 
<br>
platforms not Linux with SPARC.  Not sure if gcc has anything like the 
<br>
xmemalign options.
<br>
<p><pre>
-- 
Oracle
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.781.442.2631
Oracle *- Performance Technologies*
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10012/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/devel/att-10012/02-part" alt="picture">
<!-- attachment="02-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10013.php">Jeff Squyres: "Re: [OMPI devel] Open MPI 1.4.4 Configuration Lefover from 1.4.2"</a>
<li><strong>Previous message:</strong> <a href="10011.php">TERRY DONTJE: "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
<li><strong>In reply to:</strong> <a href="10011.php">TERRY DONTJE: "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10022.php">Lukas Razik: "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
<li><strong>Reply:</strong> <a href="10022.php">Lukas Razik: "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
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
