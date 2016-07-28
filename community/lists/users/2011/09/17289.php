<?
$subject_val = "Re: [OMPI users] IO issue with OpenMPI 1.4.1 and earlier versions";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 14 12:53:16 2011" -->
<!-- isoreceived="20110914165316" -->
<!-- sent="Wed, 14 Sep 2011 09:53:11 -0700 (PDT)" -->
<!-- isosent="20110914165311" -->
<!-- name="Steve Jones" -->
<!-- email="stevejones_at_[hidden]" -->
<!-- subject="Re: [OMPI users] IO issue with OpenMPI 1.4.1 and earlier versions" -->
<!-- id="824726025.330099.1316019191380.JavaMail.root_at_zm09.stanford.edu" -->
<!-- charset="utf-8" -->
<!-- inreplyto="46C38A0B-7F70-416C-B609-C967EB384FA4_at_cisco.com" -->
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
<strong>From:</strong> Steve Jones (<em>stevejones_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-14 12:53:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17290.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: Can you set the gid of the	processes	created by mpirun?"</a>
<li><strong>Previous message:</strong> <a href="17288.php">Steve Jones: "Re: [OMPI users] IO issue with OpenMPI 1.4.1 and earlier versions"</a>
<li><strong>In reply to:</strong> <a href="17253.php">Jeff Squyres: "Re: [OMPI users] IO issue with OpenMPI 1.4.1 and earlier versions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17256.php">Rob Latham: "Re: [OMPI users] IO issue with OpenMPI 1.4.1 and earlier versions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
----- Original Message -----
<br>
<span class="quotelev1">&gt; On Sep 12, 2011, at 10:44 PM, Steve Jones wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; We've run into an IO issue with 1.4.1 and earlier versions. We're
</span><br>
<span class="quotelev2">&gt; &gt; able to reproduce the issue in around 120 lines of code to help, I'd
</span><br>
<span class="quotelev2">&gt; &gt; like to find if there's something we're simply doing incorrectly
</span><br>
<span class="quotelev2">&gt; &gt; with the build or if it's in fact a known bug. I've included the
</span><br>
<span class="quotelev2">&gt; &gt; following in order:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 1. Configure options used on all versions tested
</span><br>
<span class="quotelev2">&gt; &gt; 2. Successful run on 1.4.3
</span><br>
<span class="quotelev2">&gt; &gt; 3. Failed run on 1.3.1
</span><br>
<span class="quotelev2">&gt; &gt; 4. Failed run on 1.4.1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It looks like <a href="https://svn.open-mpi.org/trac/ompi/changeset/22888">https://svn.open-mpi.org/trac/ompi/changeset/22888</a> fixed
</span><br>
<span class="quotelev1">&gt; a problem with OMPI's ROMIO that was included in 1.4.2. This could
</span><br>
<span class="quotelev1">&gt; well be the issue.
</span><br>
<p>Hi Jeff,
<br>
<p>It looks like this was the issue. Thanks for pointing me towards it and the information on ABI compatibility. I must not have been following well as I was under the impression we needed to rebuild for each new version of MPI introduced.
<br>
<p>Talk soon.
<br>
<p>Steve
<br>
<p><span class="quotelev1">&gt; Note, however, that MPI-IO-written files are not guaranteed to be
</span><br>
<span class="quotelev1">&gt; readable outside of MPI-IO. What happens if you read the file back via
</span><br>
<span class="quotelev1">&gt; MPI-IO?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; An additional thing to note is we can load the 1.4.2 or 1.4.3
</span><br>
<span class="quotelev2">&gt; &gt; environment and successfully run the 1.4.1 or 1.3.1 executable.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Open MPI's ABI guarantees started at 1.3.2, meaning that any MPI
</span><br>
<span class="quotelev1">&gt; application executable compiled with 1.3.2 or later should be able to
</span><br>
<span class="quotelev1">&gt; run with an OMPI environment 1.3.2 all the way through the end of the
</span><br>
<span class="quotelev1">&gt; 1.4.x series.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hence, it is consistent that your 1.4.1 executable works properly when
</span><br>
<span class="quotelev1">&gt; run in a 1.4.3 environment if the ROMIO fix was deployed in 1.4.2.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; NOTE: Your 1.3.1 executable *may* work with later OMPI environments,
</span><br>
<span class="quotelev1">&gt; but it is not guaranteed (and I absolutely would not rely on it).
</span><br>
<span class="quotelev1">&gt; Here's the text in the README about our ABI policy:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; Application Binary Interface (ABI) Compatibility
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Open MPI provided forward application binary interface (ABI)
</span><br>
<span class="quotelev1">&gt; compatibility for MPI applications starting with v1.3.2. Prior to
</span><br>
<span class="quotelev1">&gt; that version, no ABI guarantees were provided.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; NOTE: Prior to v1.3.2, subtle and strange failures are almost
</span><br>
<span class="quotelev1">&gt; guaranteed to occur if applications were compiled and linked
</span><br>
<span class="quotelev1">&gt; against shared libraries from one version of Open MPI and then
</span><br>
<span class="quotelev1">&gt; run with another. The Open MPI team strongly discourages making
</span><br>
<span class="quotelev1">&gt; any ABI assumptions before v1.3.2.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Starting with v1.3.2, Open MPI provides forward ABI compatibility --
</span><br>
<span class="quotelev1">&gt; with respect to the MPI API only -- in all versions of a given feature
</span><br>
<span class="quotelev1">&gt; release series and its corresponding super stable series. For
</span><br>
<span class="quotelev1">&gt; example, on a single platform, an MPI application linked against Open
</span><br>
<span class="quotelev1">&gt; MPI v1.3.2 shared libraries can be updated to point to the shared
</span><br>
<span class="quotelev1">&gt; libraries in any successive v1.3.x or v1.4 release and still work
</span><br>
<span class="quotelev1">&gt; properly (e.g., via the LD_LIBRARY_PATH environment variable or other
</span><br>
<span class="quotelev1">&gt; operating system mechanism).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Note that in v1.4.4, a fix was applied to the &quot;large&quot; size of the &quot;use
</span><br>
<span class="quotelev1">&gt; mpi&quot; F90 MPI bindings module: two of MPI_SCATTERV's parameters had the
</span><br>
<span class="quotelev1">&gt; wrong type and were corrected. Note that this fix *only* applies if
</span><br>
<span class="quotelev1">&gt; Open MPI was configured with a Fortran 90 compiler and the
</span><br>
<span class="quotelev1">&gt; --with-mpi-f90-size=large configure option.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, in order to preserve ABI with all releases since v1.3.2, the
</span><br>
<span class="quotelev1">&gt; old/incorrect MPI_SCATTERV interface was preserved and a new/corrected
</span><br>
<span class="quotelev1">&gt; interface was added (note that Fortran 90 has function overloading,
</span><br>
<span class="quotelev1">&gt; similar to C++; hence, both the old and new interface can be accessed
</span><br>
<span class="quotelev1">&gt; via &quot;call MPI_Scatterv(...)&quot;).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Applications that use the old/incorrect MPI_SCATTERV binding will
</span><br>
<span class="quotelev1">&gt; continue to compile/link just like they did with releases since
</span><br>
<span class="quotelev1">&gt; v1.3.2. However, application developers are ***STRONGLY*** encouraged
</span><br>
<span class="quotelev1">&gt; to fix their applications to use the correct bindings for the
</span><br>
<span class="quotelev1">&gt; following reasons:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - The parameter type mismatch may cause application crashes or
</span><br>
<span class="quotelev1">&gt; silent data corruption.
</span><br>
<span class="quotelev1">&gt; - An annoying message (which cannot be disabled) is sent to stdout
</span><br>
<span class="quotelev1">&gt; warning the user that they are using an incorrect interface.
</span><br>
<span class="quotelev1">&gt; - The old/incorrect interface will be removed in Open MPI v1.7
</span><br>
<span class="quotelev1">&gt; (i.e., applications that use the old/incorrect binding will not
</span><br>
<span class="quotelev1">&gt; compile with Open MPI v1.7).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Open MPI reserves the right to break ABI compatibility at new feature
</span><br>
<span class="quotelev1">&gt; release series. For example, the same MPI application from above
</span><br>
<span class="quotelev1">&gt; (linked against Open MPI v1.3.2 shared libraries) will *not* work with
</span><br>
<span class="quotelev1">&gt; Open MPI v1.5 shared libraries.
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17290.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: Can you set the gid of the	processes	created by mpirun?"</a>
<li><strong>Previous message:</strong> <a href="17288.php">Steve Jones: "Re: [OMPI users] IO issue with OpenMPI 1.4.1 and earlier versions"</a>
<li><strong>In reply to:</strong> <a href="17253.php">Jeff Squyres: "Re: [OMPI users] IO issue with OpenMPI 1.4.1 and earlier versions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17256.php">Rob Latham: "Re: [OMPI users] IO issue with OpenMPI 1.4.1 and earlier versions"</a>
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
