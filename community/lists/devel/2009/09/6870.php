<?
$subject_val = "Re: [OMPI devel] Ticket #1982 - Fortran MPI_IN_PLACE issue";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 22 10:33:17 2009" -->
<!-- isoreceived="20090922143317" -->
<!-- sent="Tue, 22 Sep 2009 08:32:54 -0600" -->
<!-- isosent="20090922143254" -->
<!-- name="David Gunter" -->
<!-- email="dog_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Ticket #1982 - Fortran MPI_IN_PLACE issue" -->
<!-- id="77744EB2-D347-4B40-B597-39D3DD4331C2_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="7E305400-76AD-442B-BFDC-13E4577F882E_at_cisco.com" -->
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
<strong>Date:</strong> 2009-09-22 10:32:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6871.php">Lisandro Dalcin: "Re: [OMPI devel] Dynamic languages, dlopen() issues, and symbol 	visibility of libtool ltdl API in current trunk"</a>
<li><strong>Previous message:</strong> <a href="6869.php">Jeff Squyres: "Re: [OMPI devel] Ticket #1982 - Fortran MPI_IN_PLACE issue"</a>
<li><strong>In reply to:</strong> <a href="6869.php">Jeff Squyres: "Re: [OMPI devel] Ticket #1982 - Fortran MPI_IN_PLACE issue"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I don't believe I have an account to add comments - I would appreciate  
<br>
one!
<br>
<p>Thanks,
<br>
david
<br>
<pre>
--
David Gunter
HPC-3: Parallel Tools Team
Los Alamos National Laboratory
On Sep 22, 2009, at 8:24 AM, Jeff Squyres wrote:
&gt; Thanks!  I added these comments to #1982 (don't hesitate to add  
&gt; comments yourself :-) ).
&gt;
&gt;
&gt; On Sep 22, 2009, at 10:05 AM, David Gunter wrote:
&gt;
&gt;&gt; I've been playing around with Jeff's &quot;bogus&quot; tarball and I, too,  
&gt;&gt; see it fail on OS X.  If I make the following changes it works  
&gt;&gt; perfectly:
&gt;&gt;
&gt;&gt; in configure.in
&gt;&gt;
&gt;&gt; 1) replace -fno-common with -fcommon
&gt;&gt; 2) add -flat_namespace as part of the arguments for creating shared  
&gt;&gt; libs.
&gt;&gt;
&gt;&gt; After that, things work fine:
&gt;&gt;
&gt;&gt; (dog_at_domdechant 63%) main
&gt;&gt; Fortran MPI_BOTTOM is          93
&gt;&gt; Assigning C variables
&gt;&gt; MPI_SEND_F: This is BOTTOM: 0x2040 == (0x6020/17, 0x6024/18,  
&gt;&gt; 0x2040/19, 0x602c/20)
&gt;&gt; Fortran MPI_BOTTOM is          19
&gt;&gt; Fortran MPI_BOTTOM is          32
&gt;&gt; MPI_SEND_F: This is BOTTOM: 0x2040 == (0x6020/17, 0x6024/18,  
&gt;&gt; 0x2040/32, 0x602c/20)
&gt;&gt; Fortran MPI_BOTTOM is          32
&gt;&gt;
&gt;&gt; I still don't see what the problem is for the two different  
&gt;&gt; versions of OMPI are.
&gt;&gt;
&gt;&gt; OSX 10.5.8, GCC 4.4.1, most recent libtool, autoconf, automake and  
&gt;&gt; m4.
&gt;&gt;
&gt;&gt; -david
&gt;&gt; --
&gt;&gt; David Gunter
&gt;&gt; HPC-3: Parallel Tools Team
&gt;&gt; Los Alamos National Laboratory
&gt;&gt;
&gt;&gt;
&gt;&gt;
&gt;&gt; _______________________________________________
&gt;&gt; devel mailing list
&gt;&gt; devel_at_[hidden]
&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&gt;
&gt;
&gt; -- 
&gt; Jeff Squyres
&gt; jsquyres_at_[hidden]
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
<li><strong>Next message:</strong> <a href="6871.php">Lisandro Dalcin: "Re: [OMPI devel] Dynamic languages, dlopen() issues, and symbol 	visibility of libtool ltdl API in current trunk"</a>
<li><strong>Previous message:</strong> <a href="6869.php">Jeff Squyres: "Re: [OMPI devel] Ticket #1982 - Fortran MPI_IN_PLACE issue"</a>
<li><strong>In reply to:</strong> <a href="6869.php">Jeff Squyres: "Re: [OMPI devel] Ticket #1982 - Fortran MPI_IN_PLACE issue"</a>
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
