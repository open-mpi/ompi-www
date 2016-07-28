<?
$subject_val = "Re: [OMPI devel] trunk hangs since r19010";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 28 13:09:10 2008" -->
<!-- isoreceived="20080728170910" -->
<!-- sent="Mon, 28 Jul 2008 13:08:51 -0400" -->
<!-- isosent="20080728170851" -->
<!-- name="Terry Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trunk hangs since r19010" -->
<!-- id="488DFD23.1090701_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="530AC27C-DCEC-4D73-BA67-7195A7B9DD0B_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] trunk hangs since r19010<br>
<strong>From:</strong> Terry Dontje (<em>Terry.Dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-28 13:08:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4474.php">Ralph Castain: "Re: [OMPI devel] Change in hostfile behavior"</a>
<li><strong>Previous message:</strong> <a href="4472.php">Tim Mattox: "Re: [OMPI devel] Change in hostfile behavior"</a>
<li><strong>In reply to:</strong> <a href="4469.php">Jeff Squyres: "Re: [OMPI devel] trunk hangs since r19010"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4476.php">Brad Benton: "Re: [OMPI devel] trunk hangs since r19010"</a>
<li><strong>Reply:</strong> <a href="4476.php">Brad Benton: "Re: [OMPI devel] trunk hangs since r19010"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Jul 28, 2008, at 12:03 PM, George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Interesting. The self is only used for local communications. I don't 
</span><br>
<span class="quotelev2">&gt;&gt; expect that any benchmark execute such communications, but apparently 
</span><br>
<span class="quotelev2">&gt;&gt; I was wrong. Please let me know the failing test, I will take a look 
</span><br>
<span class="quotelev2">&gt;&gt; this evening.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FWIW, my manual tests of a simplistic &quot;ring&quot; program work for all 
</span><br>
<span class="quotelev1">&gt; combinations (openib, openib+self, openib+self+sm).  Shrug.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But for OSU latency, I found that openib, openib+sm work, but 
</span><br>
<span class="quotelev1">&gt; openib+sm+self hangs (same results whether the 2 procs are on the same 
</span><br>
<span class="quotelev1">&gt; node or different nodes).  There is no self communication in 
</span><br>
<span class="quotelev1">&gt; osu_latency, so something else must be going on.
</span><br>
<span class="quotelev1">&gt;
</span><br>
Is it something to do with the MPI_Barrier call?  osu_latency uses 
<br>
MPI_Barrier and from rhc's email it sounds like his code does too.
<br>
<p>--td
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4474.php">Ralph Castain: "Re: [OMPI devel] Change in hostfile behavior"</a>
<li><strong>Previous message:</strong> <a href="4472.php">Tim Mattox: "Re: [OMPI devel] Change in hostfile behavior"</a>
<li><strong>In reply to:</strong> <a href="4469.php">Jeff Squyres: "Re: [OMPI devel] trunk hangs since r19010"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4476.php">Brad Benton: "Re: [OMPI devel] trunk hangs since r19010"</a>
<li><strong>Reply:</strong> <a href="4476.php">Brad Benton: "Re: [OMPI devel] trunk hangs since r19010"</a>
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
