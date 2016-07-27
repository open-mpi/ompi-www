<?
$subject_val = "Re: [MTT devel] mpi_details section with different scenarios for command line params";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  4 07:46:00 2008" -->
<!-- isoreceived="20081104124600" -->
<!-- sent="Tue, 4 Nov 2008 07:45:51 -0500" -->
<!-- isosent="20081104124551" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT devel] mpi_details section with different scenarios for command line params" -->
<!-- id="945529EA-1C2E-4DAA-B630-C732669A4A23_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="b20b52800811040435x3dd92d7bx2edc2caebb614173_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [MTT devel] mpi_details section with different scenarios for command line params<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-04 07:45:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0301.php">Ethan Mallove: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1242"</a>
<li><strong>Previous message:</strong> <a href="0299.php">Mike Dubman: "Re: [MTT devel] mpi_details section with different scenarios for command line params"</a>
<li><strong>In reply to:</strong> <a href="0299.php">Mike Dubman: "Re: [MTT devel] mpi_details section with different scenarios for command line params"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0296.php">Mike Dubman: "Re: [MTT devel] mpi_details section with different scenarios for command line params"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 4, 2008, at 7:35 AM, Mike Dubman wrote:
<br>
<p><span class="quotelev1">&gt; yep. it works. I thought that &quot;exec&quot; for mpirun will be executed  
</span><br>
<span class="quotelev1">&gt; once with all @mca@ params passed to it.
</span><br>
<p>I basically have a top-level &quot;if&quot; that lets me figure out whether I'm  
<br>
running on IB or iWARP systems, and that chooses between two master  
<br>
sets of MCA parameters.
<br>
<p>Let me know if you have any questions about that INI file.
<br>
<p>FYI, Ethan and I reflect quite different ways of running MTT:
<br>
<p>- he likes scripting and putting together pieces of INI on the fly  
<br>
(command line params, etc.)
<br>
- I like having one big INI file and selectively running parts of it
<br>
<p>Both are completely compatible with MTT, and both are good models.  We  
<br>
tried to make MTT flexible enough to be able to handle such different  
<br>
models as these two (as another approach, Indiana U. builds INI files  
<br>
on the fly).
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0301.php">Ethan Mallove: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1242"</a>
<li><strong>Previous message:</strong> <a href="0299.php">Mike Dubman: "Re: [MTT devel] mpi_details section with different scenarios for command line params"</a>
<li><strong>In reply to:</strong> <a href="0299.php">Mike Dubman: "Re: [MTT devel] mpi_details section with different scenarios for command line params"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0296.php">Mike Dubman: "Re: [MTT devel] mpi_details section with different scenarios for command line params"</a>
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
