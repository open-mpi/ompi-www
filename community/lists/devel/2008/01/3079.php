<?
$subject_val = "Re: [OMPI devel] vt compiler warnings and errors";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 29 12:22:29 2008" -->
<!-- isoreceived="20080129172229" -->
<!-- sent="Tue, 29 Jan 2008 12:22:04 -0500" -->
<!-- isosent="20080129172204" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] vt compiler warnings and errors" -->
<!-- id="89316FA9-FED0-4F10-B028-3313B82DF68D_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1201626784.30802.57.camel_at_ricolap" -->
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
<strong>Subject:</strong> Re: [OMPI devel] vt compiler warnings and errors<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-29 12:22:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3080.php">Richard Graham: "[OMPI devel] Orte collectives"</a>
<li><strong>Previous message:</strong> <a href="3078.php">Matthias Jurenz: "Re: [OMPI devel] vt compiler warnings and errors"</a>
<li><strong>In reply to:</strong> <a href="3078.php">Matthias Jurenz: "Re: [OMPI devel] vt compiler warnings and errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3099.php">Tim Prins: "Re: [OMPI devel] vt compiler warnings and errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 29, 2008, at 12:13 PM, Matthias Jurenz wrote:
<br>
<p><span class="quotelev1">&gt; 518:
</span><br>
<span class="quotelev1">&gt; I have added a check whether MPI I/O is available and add the  
</span><br>
<span class="quotelev1">&gt; corresponding VT's
</span><br>
<span class="quotelev1">&gt; configure option to enable/disable MPI I/O support. Therefor I used  
</span><br>
<span class="quotelev1">&gt; the variable
</span><br>
<span class="quotelev1">&gt; &quot;define_mpi_io&quot; from 'ompi/mca/io/configure.m4'. Is that o.k. or  
</span><br>
<span class="quotelev1">&gt; should I use another
</span><br>
<span class="quotelev1">&gt; variable ?
</span><br>
<p><p>You might want to use $enable_mpi_io -- that's the variable that is  
<br>
directly set by the --enable-mpi-io / --disable-mpi-io flag.  The  
<br>
$define_mpi_io flag is set after testing $enable_mpi_io, and is  
<br>
somewhat &quot;internal&quot; to the IO framework configure.m4 (i.e., it could  
<br>
change on you without warning).
<br>
<p>Hence, you might simply check to see if $enable_mpi_io is not &quot;no&quot; (-- 
<br>
enable sets it to yes; --disable sets it to no; if neither is  
<br>
specified, it's empty).
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
<li><strong>Next message:</strong> <a href="3080.php">Richard Graham: "[OMPI devel] Orte collectives"</a>
<li><strong>Previous message:</strong> <a href="3078.php">Matthias Jurenz: "Re: [OMPI devel] vt compiler warnings and errors"</a>
<li><strong>In reply to:</strong> <a href="3078.php">Matthias Jurenz: "Re: [OMPI devel] vt compiler warnings and errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3099.php">Tim Prins: "Re: [OMPI devel] vt compiler warnings and errors"</a>
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
