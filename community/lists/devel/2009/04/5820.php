<?
$subject_val = "Re: [OMPI devel] 1.3.1 version/subversion discrepancy";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 14 01:30:40 2009" -->
<!-- isoreceived="20090414053040" -->
<!-- sent="Tue, 14 Apr 2009 01:30:30 -0400" -->
<!-- isosent="20090414053030" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.3.1 version/subversion discrepancy" -->
<!-- id="B558C173-279F-470E-BA91-671BF687B4B2_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49E41450.4000008_at_lbl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.3.1 version/subversion discrepancy<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-14 01:30:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5821.php">Rayson Ho: "[OMPI devel] MIPS/Linux port?"</a>
<li><strong>Previous message:</strong> <a href="5819.php">Rob Egan: "[OMPI devel] 1.3.1 version/subversion discrepancy"</a>
<li><strong>In reply to:</strong> <a href="5819.php">Rob Egan: "[OMPI devel] 1.3.1 version/subversion discrepancy"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Rob,
<br>
<p>Thanks for the report. You're right there was a mismatch between what  
<br>
the MPI_Get_version reported and what was in the mpi.h file. It should  
<br>
be correct now, and I'll push the commit into the upcomming release  
<br>
(1.3.2).
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Apr 14, 2009, at 00:42 , Rob Egan wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I just installed Open MPI 1.3.1 and found that the following assertion
</span><br>
<span class="quotelev1">&gt; now fails.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI_Get_version(&amp;version, &amp;subversion);
</span><br>
<span class="quotelev1">&gt; Assert(version == MPI_VERSION &amp;&amp; subversion == MPI_SUBVERSION);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is an excerpt from pyMPI, which I have been using with Open MPI  
</span><br>
<span class="quotelev1">&gt; 1.2.7.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; According to mpi.h, MPI_VERSION == 2 and MPI_SUBVERSION == 1, but the
</span><br>
<span class="quotelev1">&gt; procedure MPI_Get_version returns 2 and 0 for version &amp; subversion
</span><br>
<span class="quotelev1">&gt; respectively.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think this is a quick fix to sync up the mpi.h and get_version.c.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Rob Egan
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
<li><strong>Next message:</strong> <a href="5821.php">Rayson Ho: "[OMPI devel] MIPS/Linux port?"</a>
<li><strong>Previous message:</strong> <a href="5819.php">Rob Egan: "[OMPI devel] 1.3.1 version/subversion discrepancy"</a>
<li><strong>In reply to:</strong> <a href="5819.php">Rob Egan: "[OMPI devel] 1.3.1 version/subversion discrepancy"</a>
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
