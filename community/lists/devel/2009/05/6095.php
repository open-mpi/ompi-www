<?
$subject_val = "Re: [OMPI devel] RFC: MPI Interface Extensions Infrastructure";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 26 16:50:41 2009" -->
<!-- isoreceived="20090526205041" -->
<!-- sent="Tue, 26 May 2009 16:50:36 -0400" -->
<!-- isosent="20090526205036" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: MPI Interface Extensions Infrastructure" -->
<!-- id="6924EBCE-6659-4F75-892E-F5873D2C0728_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="EB26C2FD-CBBD-46C1-AB20-74672604BC66_at_cisco.com" -->
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
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-26 16:50:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6096.php">Eugene Loh: "Re: [OMPI devel] RFC: Diagnostoc framework for MPI"</a>
<li><strong>Previous message:</strong> <a href="6094.php">Greg Watson: "Re: [OMPI devel] XML stdout/stderr"</a>
<li><strong>In reply to:</strong> <a href="6091.php">Jeff Squyres: "Re: [OMPI devel] RFC: MPI Interface Extensions Infrastructure"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This was committed in r21272
<br>
<p>Let me know if you have any problems with this commit.
<br>
<p>Cheers,
<br>
Josh
<br>
<p>On May 26, 2009, at 10:00 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Exxxcellent.  :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 26, 2009, at 9:57 AM, Josh Hursey wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; As a heads up, this RFC expires today. We discussed it last week
</span><br>
<span class="quotelev2">&gt;&gt; during the teleconf and there were no objections.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I updated the HG branch to the current trunk, and, if there are not
</span><br>
<span class="quotelev2">&gt;&gt; objections, I will commit it to the trunk this afternoon [target  
</span><br>
<span class="quotelev2">&gt;&gt; 1.5].
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt; Josh
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On May 11, 2009, at 2:37 PM, Josh Hursey wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; What:  Infrastructure for MPI Interface Extensions
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Why:   Allow for experimentation with new interfaces without
</span><br>
<span class="quotelev3">&gt;&gt; &gt; changing mpi.h
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Where: Temporary Mercurial branch (link below)
</span><br>
<span class="quotelev3">&gt;&gt; &gt;   <a href="http://cgi.cs.indiana.edu/~jjhursey/public-tmp/hg/hgwebdir.cgi/mpi-ext/">http://cgi.cs.indiana.edu/~jjhursey/public-tmp/hg/hgwebdir.cgi/mpi-ext/</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; When:  Apply on trunk before branching for v1.5
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Timeout: 2 weeks - May 26, 2009 after the teleconf.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;  
</span><br>
<span class="quotelev2">&gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Description:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; At times developers want to expose non-standard, optional  
</span><br>
<span class="quotelev2">&gt;&gt; interfaces
</span><br>
<span class="quotelev3">&gt;&gt; &gt; to users. These interfaces may represent MPI interfaces to be
</span><br>
<span class="quotelev3">&gt;&gt; &gt; presented to the MPI Forum for standardization. In order to add  
</span><br>
<span class="quotelev2">&gt;&gt; such
</span><br>
<span class="quotelev3">&gt;&gt; &gt; an interface to Open MPI you must add it directly to the ompi/mpi/
</span><br>
<span class="quotelev3">&gt;&gt; &gt; directory and mpi.h. The combination of standard and non-standard
</span><br>
<span class="quotelev3">&gt;&gt; &gt; interfaces inside mpi.h becomes troublesome to many developers and
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; This branch allows developers to create a directory under ompi/
</span><br>
<span class="quotelev3">&gt;&gt; &gt; mpiext/ for their extension (see ompi/mpiext/example in the HG
</span><br>
<span class="quotelev3">&gt;&gt; &gt; branch for an example). By default, all extensions are disabled.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; They can be enabled through a configure option '--enable-ext='.  
</span><br>
<span class="quotelev2">&gt;&gt; This
</span><br>
<span class="quotelev3">&gt;&gt; &gt; option takes a list of extensions that should be built as part of
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Open MPI. The user can include all of the extensions by referencing
</span><br>
<span class="quotelev3">&gt;&gt; &gt; the appropriate header file (e.g., #include &lt;mpi-ext.h&gt; ), and
</span><br>
<span class="quotelev3">&gt;&gt; &gt; compiling with the normal wrapper compilers (e.g., mpicc).
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; This infrastructure was designed and discussed on July 2, 2008 at  
</span><br>
<span class="quotelev2">&gt;&gt; an
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Open MPI developers meeting directly following an MPI Forum  
</span><br>
<span class="quotelev2">&gt;&gt; meeting.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I have been developing this branch over the past few months under
</span><br>
<span class="quotelev3">&gt;&gt; &gt; the advisement of Jeff and Brian. The C interface is functional and
</span><br>
<span class="quotelev3">&gt;&gt; &gt; stable. The C++, F77, and F90 interfaces have not been completed.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; There are comments in the appropriate build system files
</span><br>
<span class="quotelev3">&gt;&gt; &gt; (particularly config/ompi_ext.m4) that indicate where a developer
</span><br>
<span class="quotelev3">&gt;&gt; &gt; would need to focus to finish support for these language bindings  
</span><br>
<span class="quotelev2">&gt;&gt; if
</span><br>
<span class="quotelev3">&gt;&gt; &gt; needed. I have not completed them since I do not feel comfortable
</span><br>
<span class="quotelev3">&gt;&gt; &gt; enough at this time with these languages to provide such
</span><br>
<span class="quotelev3">&gt;&gt; &gt; functionality.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I would like to bring this into the trunk before v1.5 branch.  
</span><br>
<span class="quotelev2">&gt;&gt; Having
</span><br>
<span class="quotelev3">&gt;&gt; &gt; the infrastructure in the trunk will make it easier to maintain  
</span><br>
<span class="quotelev2">&gt;&gt; off-
</span><br>
<span class="quotelev3">&gt;&gt; &gt; trunk experimental interface development.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; As part of this RFC, I will also update the 'MPI Extensions' wiki
</span><br>
<span class="quotelev3">&gt;&gt; &gt; page to describe how a developer can get started using this
</span><br>
<span class="quotelev3">&gt;&gt; &gt; infrastructure:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;  <a href="https://svn.open-mpi.org/trac/ompi/wiki/MPIExtensions">https://svn.open-mpi.org/trac/ompi/wiki/MPIExtensions</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;  
</span><br>
<span class="quotelev2">&gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt; &gt; How to use the branch:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Configure with this additional option:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; --enable-ext=example
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Compile the following sample MPI program with 'mpicc' per usual.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; /*---------------------------------*/
</span><br>
<span class="quotelev3">&gt;&gt; &gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; #include &lt;mpi-ext.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; int main(int argc, char *argv[])
</span><br>
<span class="quotelev3">&gt;&gt; &gt; {
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    int rank, size;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    OMPI_Progress(&quot;Go OMPI! Go!&quot;);
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    MPI_Finalize();
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    return 0;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; }
</span><br>
<span class="quotelev3">&gt;&gt; &gt; /*---------------------------------*/
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<span class="quotelev2">&gt;&gt;
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
<li><strong>Next message:</strong> <a href="6096.php">Eugene Loh: "Re: [OMPI devel] RFC: Diagnostoc framework for MPI"</a>
<li><strong>Previous message:</strong> <a href="6094.php">Greg Watson: "Re: [OMPI devel] XML stdout/stderr"</a>
<li><strong>In reply to:</strong> <a href="6091.php">Jeff Squyres: "Re: [OMPI devel] RFC: MPI Interface Extensions Infrastructure"</a>
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
