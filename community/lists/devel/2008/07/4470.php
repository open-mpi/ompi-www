<?
$subject_val = "Re: [OMPI devel] trunk hangs since r19010";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 28 12:19:45 2008" -->
<!-- isoreceived="20080728161945" -->
<!-- sent="Mon, 28 Jul 2008 10:19:33 -0600" -->
<!-- isosent="20080728161933" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trunk hangs since r19010" -->
<!-- id="AE51C02B-868D-4D7C-A108-CBF9BB6DE437_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-28 12:19:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4471.php">Jeff Squyres: "Re: [OMPI devel] trunk hangs since r19010"</a>
<li><strong>Previous message:</strong> <a href="4469.php">Jeff Squyres: "Re: [OMPI devel] trunk hangs since r19010"</a>
<li><strong>In reply to:</strong> <a href="4469.php">Jeff Squyres: "Re: [OMPI devel] trunk hangs since r19010"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4473.php">Terry Dontje: "Re: [OMPI devel] trunk hangs since r19010"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
My test wasn't a benchmark - I was just testing with a little program  
<br>
that calls mpi_init, mpi_barrier, and mpi_finalize.
<br>
<p>A test with just mpi_init/finalize works fine, so it looks like we  
<br>
simply hang when trying to communicate. This also only happens on  
<br>
multi-node operations.
<br>
<p>On Jul 28, 2008, at 10:16 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Jul 28, 2008, at 12:03 PM, George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Interesting. The self is only used for local communications. I  
</span><br>
<span class="quotelev2">&gt;&gt; don't expect that any benchmark execute such communications, but  
</span><br>
<span class="quotelev2">&gt;&gt; apparently I was wrong. Please let me know the failing test, I will  
</span><br>
<span class="quotelev2">&gt;&gt; take a look this evening.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FWIW, my manual tests of a simplistic &quot;ring&quot; program work for all  
</span><br>
<span class="quotelev1">&gt; combinations (openib, openib+self, openib+self+sm).  Shrug.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But for OSU latency, I found that openib, openib+sm work, but openib 
</span><br>
<span class="quotelev1">&gt; +sm+self hangs (same results whether the 2 procs are on the same  
</span><br>
<span class="quotelev1">&gt; node or different nodes).  There is no self communication in  
</span><br>
<span class="quotelev1">&gt; osu_latency, so something else must be going on.
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4471.php">Jeff Squyres: "Re: [OMPI devel] trunk hangs since r19010"</a>
<li><strong>Previous message:</strong> <a href="4469.php">Jeff Squyres: "Re: [OMPI devel] trunk hangs since r19010"</a>
<li><strong>In reply to:</strong> <a href="4469.php">Jeff Squyres: "Re: [OMPI devel] trunk hangs since r19010"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4473.php">Terry Dontje: "Re: [OMPI devel] trunk hangs since r19010"</a>
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
