<?
$subject_val = "Re: [OMPI devel] Ticket #1982 - Fortran MPI_IN_PLACE issue";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 22 10:09:26 2009" -->
<!-- isoreceived="20090922140926" -->
<!-- sent="Tue, 22 Sep 2009 08:09:21 -0600" -->
<!-- isosent="20090922140921" -->
<!-- name="David Gunter" -->
<!-- email="dog_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Ticket #1982 - Fortran MPI_IN_PLACE issue" -->
<!-- id="B4497C55-BF03-4497-892F-B2EBB524EBF6_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="B5C331E5-945F-4DC4-9393-4B905BFFCC9D_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Ticket #1982 - Fortran MPI_IN_PLACE issue<br>
<strong>From:</strong> David Gunter (<em>dog_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-22 10:09:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6869.php">Jeff Squyres: "Re: [OMPI devel] Ticket #1982 - Fortran MPI_IN_PLACE issue"</a>
<li><strong>Previous message:</strong> <a href="6867.php">David Gunter: "[OMPI devel] Ticket #1982 - Fortran MPI_IN_PLACE issue"</a>
<li><strong>In reply to:</strong> <a href="6867.php">David Gunter: "[OMPI devel] Ticket #1982 - Fortran MPI_IN_PLACE issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6869.php">Jeff Squyres: "Re: [OMPI devel] Ticket #1982 - Fortran MPI_IN_PLACE issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I meant to say &quot;configure&quot;, not &quot;configure.in&quot; below.
<br>
<p><pre>
--
David Gunter
HPC-3: Parallel Tools Team
Los Alamos National Laboratory
On Sep 22, 2009, at 8:05 AM, David Gunter wrote:
&gt; I've been playing around with Jeff's &quot;bogus&quot; tarball and I, too, see  
&gt; it fail on OS X.  If I make the following changes it works perfectly:
&gt;
&gt; in configure.in
&gt;
&gt; 1) replace -fno-common with -fcommon
&gt; 2) add -flat_namespace as part of the arguments for creating shared  
&gt; libs.
&gt;
&gt; After that, things work fine:
&gt;
&gt; (dog_at_domdechant 63%) main
&gt; Fortran MPI_BOTTOM is          93
&gt; Assigning C variables
&gt; MPI_SEND_F: This is BOTTOM: 0x2040 == (0x6020/17, 0x6024/18,  
&gt; 0x2040/19, 0x602c/20)
&gt; Fortran MPI_BOTTOM is          19
&gt; Fortran MPI_BOTTOM is          32
&gt; MPI_SEND_F: This is BOTTOM: 0x2040 == (0x6020/17, 0x6024/18,  
&gt; 0x2040/32, 0x602c/20)
&gt; Fortran MPI_BOTTOM is          32
&gt;
&gt; I still don't see what the problem is for the two different versions  
&gt; of OMPI are.
&gt;
&gt; OSX 10.5.8, GCC 4.4.1, most recent libtool, autoconf, automake and m4.
&gt;
&gt; -david
&gt; --
&gt; David Gunter
&gt; HPC-3: Parallel Tools Team
&gt; Los Alamos National Laboratory
&gt;
&gt;
&gt;
&gt; _______________________________________________
&gt; devel mailing list
&gt; devel_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6869.php">Jeff Squyres: "Re: [OMPI devel] Ticket #1982 - Fortran MPI_IN_PLACE issue"</a>
<li><strong>Previous message:</strong> <a href="6867.php">David Gunter: "[OMPI devel] Ticket #1982 - Fortran MPI_IN_PLACE issue"</a>
<li><strong>In reply to:</strong> <a href="6867.php">David Gunter: "[OMPI devel] Ticket #1982 - Fortran MPI_IN_PLACE issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6869.php">Jeff Squyres: "Re: [OMPI devel] Ticket #1982 - Fortran MPI_IN_PLACE issue"</a>
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
