<?
$subject_val = "Re: [OMPI devel] RFC: MPI Interface Extensions Infrastructure";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 26 10:01:05 2009" -->
<!-- isoreceived="20090526140105" -->
<!-- sent="Tue, 26 May 2009 10:00:58 -0400" -->
<!-- isosent="20090526140058" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: MPI Interface Extensions Infrastructure" -->
<!-- id="EB26C2FD-CBBD-46C1-AB20-74672604BC66_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="62039942-5FD8-458E-BEB8-333BEED0A290_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: MPI Interface Extensions Infrastructure<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-26 10:00:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6092.php">Nadia Derbey: "[OMPI devel] problem in the ORTE notifier framework"</a>
<li><strong>Previous message:</strong> <a href="6090.php">Josh Hursey: "Re: [OMPI devel] RFC: MPI Interface Extensions Infrastructure"</a>
<li><strong>In reply to:</strong> <a href="6090.php">Josh Hursey: "Re: [OMPI devel] RFC: MPI Interface Extensions Infrastructure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6095.php">Josh Hursey: "Re: [OMPI devel] RFC: MPI Interface Extensions Infrastructure"</a>
<li><strong>Reply:</strong> <a href="6095.php">Josh Hursey: "Re: [OMPI devel] RFC: MPI Interface Extensions Infrastructure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Exxxcellent.  :-)
<br>
<p>On May 26, 2009, at 9:57 AM, Josh Hursey wrote:
<br>
<p><span class="quotelev1">&gt; As a heads up, this RFC expires today. We discussed it last week
</span><br>
<span class="quotelev1">&gt; during the teleconf and there were no objections.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I updated the HG branch to the current trunk, and, if there are not
</span><br>
<span class="quotelev1">&gt; objections, I will commit it to the trunk this afternoon [target 1.5].
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 11, 2009, at 2:37 PM, Josh Hursey wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; What:  Infrastructure for MPI Interface Extensions
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Why:   Allow for experimentation with new interfaces without
</span><br>
<span class="quotelev2">&gt; &gt; changing mpi.h
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Where: Temporary Mercurial branch (link below)
</span><br>
<span class="quotelev2">&gt; &gt;   <a href="http://cgi.cs.indiana.edu/~jjhursey/public-tmp/hg/hgwebdir.cgi/mpi-ext/">http://cgi.cs.indiana.edu/~jjhursey/public-tmp/hg/hgwebdir.cgi/mpi-ext/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; When:  Apply on trunk before branching for v1.5
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Timeout: 2 weeks - May 26, 2009 after the teleconf.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; Description:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; At times developers want to expose non-standard, optional interfaces
</span><br>
<span class="quotelev2">&gt; &gt; to users. These interfaces may represent MPI interfaces to be
</span><br>
<span class="quotelev2">&gt; &gt; presented to the MPI Forum for standardization. In order to add such
</span><br>
<span class="quotelev2">&gt; &gt; an interface to Open MPI you must add it directly to the ompi/mpi/
</span><br>
<span class="quotelev2">&gt; &gt; directory and mpi.h. The combination of standard and non-standard
</span><br>
<span class="quotelev2">&gt; &gt; interfaces inside mpi.h becomes troublesome to many developers and
</span><br>
<span class="quotelev2">&gt; &gt; users.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This branch allows developers to create a directory under ompi/
</span><br>
<span class="quotelev2">&gt; &gt; mpiext/ for their extension (see ompi/mpiext/example in the HG
</span><br>
<span class="quotelev2">&gt; &gt; branch for an example). By default, all extensions are disabled.
</span><br>
<span class="quotelev2">&gt; &gt; They can be enabled through a configure option '--enable-ext='. This
</span><br>
<span class="quotelev2">&gt; &gt; option takes a list of extensions that should be built as part of
</span><br>
<span class="quotelev2">&gt; &gt; Open MPI. The user can include all of the extensions by referencing
</span><br>
<span class="quotelev2">&gt; &gt; the appropriate header file (e.g., #include &lt;mpi-ext.h&gt; ), and
</span><br>
<span class="quotelev2">&gt; &gt; compiling with the normal wrapper compilers (e.g., mpicc).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This infrastructure was designed and discussed on July 2, 2008 at an
</span><br>
<span class="quotelev2">&gt; &gt; Open MPI developers meeting directly following an MPI Forum meeting.
</span><br>
<span class="quotelev2">&gt; &gt; I have been developing this branch over the past few months under
</span><br>
<span class="quotelev2">&gt; &gt; the advisement of Jeff and Brian. The C interface is functional and
</span><br>
<span class="quotelev2">&gt; &gt; stable. The C++, F77, and F90 interfaces have not been completed.
</span><br>
<span class="quotelev2">&gt; &gt; There are comments in the appropriate build system files
</span><br>
<span class="quotelev2">&gt; &gt; (particularly config/ompi_ext.m4) that indicate where a developer
</span><br>
<span class="quotelev2">&gt; &gt; would need to focus to finish support for these language bindings if
</span><br>
<span class="quotelev2">&gt; &gt; needed. I have not completed them since I do not feel comfortable
</span><br>
<span class="quotelev2">&gt; &gt; enough at this time with these languages to provide such
</span><br>
<span class="quotelev2">&gt; &gt; functionality.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I would like to bring this into the trunk before v1.5 branch. Having
</span><br>
<span class="quotelev2">&gt; &gt; the infrastructure in the trunk will make it easier to maintain off-
</span><br>
<span class="quotelev2">&gt; &gt; trunk experimental interface development.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; As part of this RFC, I will also update the 'MPI Extensions' wiki
</span><br>
<span class="quotelev2">&gt; &gt; page to describe how a developer can get started using this
</span><br>
<span class="quotelev2">&gt; &gt; infrastructure:
</span><br>
<span class="quotelev2">&gt; &gt;  <a href="https://svn.open-mpi.org/trac/ompi/wiki/MPIExtensions">https://svn.open-mpi.org/trac/ompi/wiki/MPIExtensions</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; How to use the branch:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Configure with this additional option:
</span><br>
<span class="quotelev2">&gt; &gt; --enable-ext=example
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Compile the following sample MPI program with 'mpicc' per usual.
</span><br>
<span class="quotelev2">&gt; &gt; /*---------------------------------*/
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;mpi-ext.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; int main(int argc, char *argv[])
</span><br>
<span class="quotelev2">&gt; &gt; {
</span><br>
<span class="quotelev2">&gt; &gt;    int rank, size;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev2">&gt; &gt;    MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    OMPI_Progress(&quot;Go OMPI! Go!&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    MPI_Finalize();
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    return 0;
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt; /*---------------------------------*/
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6092.php">Nadia Derbey: "[OMPI devel] problem in the ORTE notifier framework"</a>
<li><strong>Previous message:</strong> <a href="6090.php">Josh Hursey: "Re: [OMPI devel] RFC: MPI Interface Extensions Infrastructure"</a>
<li><strong>In reply to:</strong> <a href="6090.php">Josh Hursey: "Re: [OMPI devel] RFC: MPI Interface Extensions Infrastructure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6095.php">Josh Hursey: "Re: [OMPI devel] RFC: MPI Interface Extensions Infrastructure"</a>
<li><strong>Reply:</strong> <a href="6095.php">Josh Hursey: "Re: [OMPI devel] RFC: MPI Interface Extensions Infrastructure"</a>
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
