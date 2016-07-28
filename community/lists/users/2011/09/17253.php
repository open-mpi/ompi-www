<?
$subject_val = "Re: [OMPI users] IO issue with OpenMPI 1.4.1 and earlier versions";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 13 08:30:59 2011" -->
<!-- isoreceived="20110913123059" -->
<!-- sent="Tue, 13 Sep 2011 08:30:51 -0400" -->
<!-- isosent="20110913123051" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] IO issue with OpenMPI 1.4.1 and earlier versions" -->
<!-- id="46C38A0B-7F70-416C-B609-C967EB384FA4_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="980556946.263985.1315881865124.JavaMail.root_at_zm09.stanford.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] IO issue with OpenMPI 1.4.1 and earlier versions<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-13 08:30:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17254.php">devendra rai: "Re: [OMPI users] Question on MPI_Ssend"</a>
<li><strong>Previous message:</strong> <a href="17252.php">nn3003: "Re: [OMPI users] #cpus/socket"</a>
<li><strong>In reply to:</strong> <a href="17242.php">Steve Jones: "[OMPI users] IO issue with OpenMPI 1.4.1 and earlier versions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17289.php">Steve Jones: "Re: [OMPI users] IO issue with OpenMPI 1.4.1 and earlier versions"</a>
<li><strong>Reply:</strong> <a href="17289.php">Steve Jones: "Re: [OMPI users] IO issue with OpenMPI 1.4.1 and earlier versions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 12, 2011, at 10:44 PM, Steve Jones wrote:
<br>
<p><span class="quotelev1">&gt; We've run into an IO issue with 1.4.1 and earlier versions. We're able to reproduce the issue in around 120 lines of code to help, I'd like to find if there's something we're simply doing incorrectly with the build or if it's in fact a known bug. I've included the following in order:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. Configure options used on all versions tested
</span><br>
<span class="quotelev1">&gt; 2. Successful run on 1.4.3
</span><br>
<span class="quotelev1">&gt; 3. Failed run on 1.3.1
</span><br>
<span class="quotelev1">&gt; 4. Failed run on 1.4.1
</span><br>
<p>It looks like <a href="https://svn.open-mpi.org/trac/ompi/changeset/22888">https://svn.open-mpi.org/trac/ompi/changeset/22888</a> fixed a problem with OMPI's ROMIO that was included in 1.4.2.  This could well be the issue.
<br>
<p>Note, however, that MPI-IO-written files are not guaranteed to be readable outside of MPI-IO.  What happens if you read the file back via MPI-IO?
<br>
<p><span class="quotelev1">&gt; An additional thing to note is we can load the 1.4.2 or 1.4.3 environment and successfully run the 1.4.1 or 1.3.1 executable.
</span><br>
<p>Open MPI's ABI guarantees started at 1.3.2, meaning that any MPI application executable compiled with 1.3.2 or later should be able to run with an OMPI environment 1.3.2 all the way through the end of the 1.4.x series.
<br>
<p>Hence, it is consistent that your 1.4.1 executable works properly when run in a 1.4.3 environment if the ROMIO fix was deployed in 1.4.2.
<br>
<p>NOTE: Your 1.3.1 executable *may* work with later OMPI environments, but it is not guaranteed (and I absolutely would not rely on it).  Here's the text in the README about our ABI policy:
<br>
<p>-----
<br>
Application Binary Interface (ABI) Compatibility
<br>
------------------------------------------------
<br>
<p>Open MPI provided forward application binary interface (ABI)
<br>
compatibility for MPI applications starting with v1.3.2.  Prior to
<br>
that version, no ABI guarantees were provided.  
<br>
<p>NOTE: Prior to v1.3.2, subtle and strange failures are almost
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;guaranteed to occur if applications were compiled and linked
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;against shared libraries from one version of Open MPI and then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;run with another.  The Open MPI team strongly discourages making
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;any ABI assumptions before v1.3.2.
<br>
<p>Starting with v1.3.2, Open MPI provides forward ABI compatibility --
<br>
with respect to the MPI API only -- in all versions of a given feature
<br>
release series and its corresponding super stable series.  For
<br>
example, on a single platform, an MPI application linked against Open
<br>
MPI v1.3.2 shared libraries can be updated to point to the shared
<br>
libraries in any successive v1.3.x or v1.4 release and still work
<br>
properly (e.g., via the LD_LIBRARY_PATH environment variable or other
<br>
operating system mechanism).
<br>
<p>Note that in v1.4.4, a fix was applied to the &quot;large&quot; size of the &quot;use
<br>
mpi&quot; F90 MPI bindings module: two of MPI_SCATTERV's parameters had the
<br>
wrong type and were corrected.  Note that this fix *only* applies if
<br>
Open MPI was configured with a Fortran 90 compiler and the
<br>
--with-mpi-f90-size=large configure option.
<br>
<p>However, in order to preserve ABI with all releases since v1.3.2, the
<br>
old/incorrect MPI_SCATTERV interface was preserved and a new/corrected
<br>
interface was added (note that Fortran 90 has function overloading,
<br>
similar to C++; hence, both the old and new interface can be accessed
<br>
via &quot;call MPI_Scatterv(...)&quot;).
<br>
<p>Applications that use the old/incorrect MPI_SCATTERV binding will
<br>
continue to compile/link just like they did with releases since
<br>
v1.3.2.  However, application developers are ***STRONGLY*** encouraged
<br>
to fix their applications to use the correct bindings for the
<br>
following reasons:
<br>
<p>&nbsp;&nbsp;- The parameter type mismatch may cause application crashes or
<br>
&nbsp;&nbsp;&nbsp;&nbsp;silent data corruption.
<br>
&nbsp;&nbsp;- An annoying message (which cannot be disabled) is sent to stdout
<br>
&nbsp;&nbsp;&nbsp;&nbsp;warning the user that they are using an incorrect interface.
<br>
&nbsp;&nbsp;- The old/incorrect interface will be removed in Open MPI v1.7
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(i.e., applications that use the old/incorrect binding will not
<br>
&nbsp;&nbsp;&nbsp;&nbsp;compile with Open MPI v1.7).
<br>
<p>Open MPI reserves the right to break ABI compatibility at new feature
<br>
release series.  For example, the same MPI application from above
<br>
(linked against Open MPI v1.3.2 shared libraries) will *not* work with
<br>
Open MPI v1.5 shared libraries.
<br>
-----
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17254.php">devendra rai: "Re: [OMPI users] Question on MPI_Ssend"</a>
<li><strong>Previous message:</strong> <a href="17252.php">nn3003: "Re: [OMPI users] #cpus/socket"</a>
<li><strong>In reply to:</strong> <a href="17242.php">Steve Jones: "[OMPI users] IO issue with OpenMPI 1.4.1 and earlier versions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17289.php">Steve Jones: "Re: [OMPI users] IO issue with OpenMPI 1.4.1 and earlier versions"</a>
<li><strong>Reply:</strong> <a href="17289.php">Steve Jones: "Re: [OMPI users] IO issue with OpenMPI 1.4.1 and earlier versions"</a>
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
