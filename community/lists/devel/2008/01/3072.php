<?
$subject_val = "Re: [OMPI devel] Configure error/warning in nightly tarball";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 29 08:41:38 2008" -->
<!-- isoreceived="20080129134138" -->
<!-- sent="Tue, 29 Jan 2008 08:41:36 -0500" -->
<!-- isosent="20080129134136" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Configure error/warning in nightly tarball" -->
<!-- id="884A9228-B887-40E7-94F7-A70312FECBD3_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="D4295501-3AEB-4529-904B-F957358CD4FC_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Configure error/warning in nightly tarball<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-29 08:41:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3073.php">Jeff Squyres: "[OMPI devel] vt compiler warnings and errors"</a>
<li><strong>Previous message:</strong> <a href="3071.php">Jeff Squyres: "Re: [OMPI devel] Configure error/warning in nightly tarball"</a>
<li><strong>In reply to:</strong> <a href="3071.php">Jeff Squyres: "Re: [OMPI devel] Configure error/warning in nightly tarball"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks :)
<br>
<p>For anyone interested Jeff filed a ticket on this bug here:
<br>
&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/ticket/1205">https://svn.open-mpi.org/trac/ompi/ticket/1205</a>
<br>
<p>-- Josh
<br>
<p>On Jan 29, 2008, at 8:16 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Good catch.  It seems to be an issue with component priority.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'll dig into it...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 28, 2008, at 6:49 PM, Josh Hursey wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I noticed that when running configure on the nightly snapshot tarball
</span><br>
<span class="quotelev2">&gt;&gt; the following errors (warnings really, since it didn't stop
</span><br>
<span class="quotelev2">&gt;&gt; configure) were produced. These seem to be remnants from the
</span><br>
<span class="quotelev2">&gt;&gt; autogen.sh script pointing to files that do not (and should not)
</span><br>
<span class="quotelev2">&gt;&gt; exist in the distribution.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ---------------------
</span><br>
<span class="quotelev2">&gt;&gt; shell$ ./configure --prefix=/foo/bar/
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; grep: ./orte/mca/gpr/proxy/configure.params: No such file or  
</span><br>
<span class="quotelev2">&gt;&gt; directory
</span><br>
<span class="quotelev2">&gt;&gt; grep: ./orte/mca/gpr/replica/configure.params: No such file or
</span><br>
<span class="quotelev2">&gt;&gt; directory
</span><br>
<span class="quotelev2">&gt;&gt; grep: ./orte/mca/gpr/null/configure.params: No such file or directory
</span><br>
<span class="quotelev2">&gt;&gt; ---------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any thoughts on how to fix this? I was using the r17175 nightly
</span><br>
<span class="quotelev2">&gt;&gt; tarball.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt; Josh
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="3073.php">Jeff Squyres: "[OMPI devel] vt compiler warnings and errors"</a>
<li><strong>Previous message:</strong> <a href="3071.php">Jeff Squyres: "Re: [OMPI devel] Configure error/warning in nightly tarball"</a>
<li><strong>In reply to:</strong> <a href="3071.php">Jeff Squyres: "Re: [OMPI devel] Configure error/warning in nightly tarball"</a>
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
