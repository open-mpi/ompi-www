<?
$subject_val = "Re: [OMPI devel] RFC: MPI Interface Extensions Infrastructure";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 26 09:57:07 2009" -->
<!-- isoreceived="20090526135707" -->
<!-- sent="Tue, 26 May 2009 09:57:02 -0400" -->
<!-- isosent="20090526135702" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: MPI Interface Extensions Infrastructure" -->
<!-- id="62039942-5FD8-458E-BEB8-333BEED0A290_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="B02B509F-1BE8-4E05-A1C8-F7C4D3710531_at_open-mpi.org" -->
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
<strong>Date:</strong> 2009-05-26 09:57:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6091.php">Jeff Squyres: "Re: [OMPI devel] RFC: MPI Interface Extensions Infrastructure"</a>
<li><strong>Previous message:</strong> <a href="6089.php">Jeff Squyres: "Re: [OMPI devel] MTT usage"</a>
<li><strong>In reply to:</strong> <a href="5997.php">Josh Hursey: "[OMPI devel] RFC: MPI Interface Extensions Infrastructure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6091.php">Jeff Squyres: "Re: [OMPI devel] RFC: MPI Interface Extensions Infrastructure"</a>
<li><strong>Reply:</strong> <a href="6091.php">Jeff Squyres: "Re: [OMPI devel] RFC: MPI Interface Extensions Infrastructure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
As a heads up, this RFC expires today. We discussed it last week  
<br>
during the teleconf and there were no objections.
<br>
<p>I updated the HG branch to the current trunk, and, if there are not  
<br>
objections, I will commit it to the trunk this afternoon [target 1.5].
<br>
<p>Cheers,
<br>
Josh
<br>
<p>On May 11, 2009, at 2:37 PM, Josh Hursey wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What:  Infrastructure for MPI Interface Extensions
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Why:   Allow for experimentation with new interfaces without  
</span><br>
<span class="quotelev1">&gt; changing mpi.h
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Where: Temporary Mercurial branch (link below)
</span><br>
<span class="quotelev1">&gt;   <a href="http://cgi.cs.indiana.edu/~jjhursey/public-tmp/hg/hgwebdir.cgi/mpi-ext/">http://cgi.cs.indiana.edu/~jjhursey/public-tmp/hg/hgwebdir.cgi/mpi-ext/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When:  Apply on trunk before branching for v1.5
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Timeout: 2 weeks - May 26, 2009 after the teleconf.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Description:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; At times developers want to expose non-standard, optional interfaces  
</span><br>
<span class="quotelev1">&gt; to users. These interfaces may represent MPI interfaces to be  
</span><br>
<span class="quotelev1">&gt; presented to the MPI Forum for standardization. In order to add such  
</span><br>
<span class="quotelev1">&gt; an interface to Open MPI you must add it directly to the ompi/mpi/  
</span><br>
<span class="quotelev1">&gt; directory and mpi.h. The combination of standard and non-standard  
</span><br>
<span class="quotelev1">&gt; interfaces inside mpi.h becomes troublesome to many developers and  
</span><br>
<span class="quotelev1">&gt; users.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This branch allows developers to create a directory under ompi/ 
</span><br>
<span class="quotelev1">&gt; mpiext/ for their extension (see ompi/mpiext/example in the HG  
</span><br>
<span class="quotelev1">&gt; branch for an example). By default, all extensions are disabled.  
</span><br>
<span class="quotelev1">&gt; They can be enabled through a configure option '--enable-ext='. This  
</span><br>
<span class="quotelev1">&gt; option takes a list of extensions that should be built as part of  
</span><br>
<span class="quotelev1">&gt; Open MPI. The user can include all of the extensions by referencing  
</span><br>
<span class="quotelev1">&gt; the appropriate header file (e.g., #include &lt;mpi-ext.h&gt; ), and  
</span><br>
<span class="quotelev1">&gt; compiling with the normal wrapper compilers (e.g., mpicc).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This infrastructure was designed and discussed on July 2, 2008 at an  
</span><br>
<span class="quotelev1">&gt; Open MPI developers meeting directly following an MPI Forum meeting.  
</span><br>
<span class="quotelev1">&gt; I have been developing this branch over the past few months under  
</span><br>
<span class="quotelev1">&gt; the advisement of Jeff and Brian. The C interface is functional and  
</span><br>
<span class="quotelev1">&gt; stable. The C++, F77, and F90 interfaces have not been completed.  
</span><br>
<span class="quotelev1">&gt; There are comments in the appropriate build system files  
</span><br>
<span class="quotelev1">&gt; (particularly config/ompi_ext.m4) that indicate where a developer  
</span><br>
<span class="quotelev1">&gt; would need to focus to finish support for these language bindings if  
</span><br>
<span class="quotelev1">&gt; needed. I have not completed them since I do not feel comfortable  
</span><br>
<span class="quotelev1">&gt; enough at this time with these languages to provide such  
</span><br>
<span class="quotelev1">&gt; functionality.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I would like to bring this into the trunk before v1.5 branch. Having  
</span><br>
<span class="quotelev1">&gt; the infrastructure in the trunk will make it easier to maintain off- 
</span><br>
<span class="quotelev1">&gt; trunk experimental interface development.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As part of this RFC, I will also update the 'MPI Extensions' wiki  
</span><br>
<span class="quotelev1">&gt; page to describe how a developer can get started using this  
</span><br>
<span class="quotelev1">&gt; infrastructure:
</span><br>
<span class="quotelev1">&gt;  <a href="https://svn.open-mpi.org/trac/ompi/wiki/MPIExtensions">https://svn.open-mpi.org/trac/ompi/wiki/MPIExtensions</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; How to use the branch:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Configure with this additional option:
</span><br>
<span class="quotelev1">&gt; --enable-ext=example
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Compile the following sample MPI program with 'mpicc' per usual.
</span><br>
<span class="quotelev1">&gt; /*---------------------------------*/
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi-ext.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main(int argc, char *argv[])
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;    int rank, size;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev1">&gt;    MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    OMPI_Progress(&quot;Go OMPI! Go!&quot;);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; /*---------------------------------*/
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
<li><strong>Next message:</strong> <a href="6091.php">Jeff Squyres: "Re: [OMPI devel] RFC: MPI Interface Extensions Infrastructure"</a>
<li><strong>Previous message:</strong> <a href="6089.php">Jeff Squyres: "Re: [OMPI devel] MTT usage"</a>
<li><strong>In reply to:</strong> <a href="5997.php">Josh Hursey: "[OMPI devel] RFC: MPI Interface Extensions Infrastructure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6091.php">Jeff Squyres: "Re: [OMPI devel] RFC: MPI Interface Extensions Infrastructure"</a>
<li><strong>Reply:</strong> <a href="6091.php">Jeff Squyres: "Re: [OMPI devel] RFC: MPI Interface Extensions Infrastructure"</a>
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
