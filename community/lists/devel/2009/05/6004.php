<?
$subject_val = "Re: [OMPI devel] RFC: MPI Interface Extensions Infrastructure";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 12 08:50:47 2009" -->
<!-- isoreceived="20090512125047" -->
<!-- sent="Tue, 12 May 2009 08:49:55 -0400" -->
<!-- isosent="20090512124955" -->
<!-- name="Terry Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: MPI Interface Extensions Infrastructure" -->
<!-- id="4A097073.7020500_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="B5CC2EC7-6FFA-4A71-938C-06250AA94B95_at_cisco.com" -->
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
<strong>From:</strong> Terry Dontje (<em>Terry.Dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-12 08:49:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6005.php">Jeff Squyres: "Re: [OMPI devel] RFC: MPI Interface Extensions Infrastructure"</a>
<li><strong>Previous message:</strong> <a href="6003.php">Jeff Squyres: "Re: [OMPI devel] RFC: MPI Interface Extensions Infrastructure"</a>
<li><strong>In reply to:</strong> <a href="6003.php">Jeff Squyres: "Re: [OMPI devel] RFC: MPI Interface Extensions Infrastructure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6005.php">Jeff Squyres: "Re: [OMPI devel] RFC: MPI Interface Extensions Infrastructure"</a>
<li><strong>Reply:</strong> <a href="6005.php">Jeff Squyres: "Re: [OMPI devel] RFC: MPI Interface Extensions Infrastructure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I like this, however wouldn't it possibly be nice to have a the 
<br>
mpi-ext.h pulled in by mpi.h when the -enable-ext configure option is 
<br>
used?  That way one would be able to compile and run current tests for 
<br>
regressions without having to change the code. 
<br>
<p>--td
<br>
<p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; I'm [obviously] in favor of this RFC.  :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 11, 2009, at 2:37 PM, Josh Hursey wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What:  Infrastructure for MPI Interface Extensions
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Why:   Allow for experimentation with new interfaces without changing
</span><br>
<span class="quotelev2">&gt;&gt; mpi.h
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Where: Temporary Mercurial branch (link below)
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://cgi.cs.indiana.edu/~jjhursey/public-tmp/hg/hgwebdir.cgi/mpi-ext/">http://cgi.cs.indiana.edu/~jjhursey/public-tmp/hg/hgwebdir.cgi/mpi-ext/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When:  Apply on trunk before branching for v1.5
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Timeout: 2 weeks - May 26, 2009 after the teleconf.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Description:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; At times developers want to expose non-standard, optional interfaces
</span><br>
<span class="quotelev2">&gt;&gt; to users. These interfaces may represent MPI interfaces to be
</span><br>
<span class="quotelev2">&gt;&gt; presented to the MPI Forum for standardization. In order to add such
</span><br>
<span class="quotelev2">&gt;&gt; an interface to Open MPI you must add it directly to the ompi/mpi/
</span><br>
<span class="quotelev2">&gt;&gt; directory and mpi.h. The combination of standard and non-standard
</span><br>
<span class="quotelev2">&gt;&gt; interfaces inside mpi.h becomes troublesome to many developers and
</span><br>
<span class="quotelev2">&gt;&gt; users.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This branch allows developers to create a directory under ompi/mpiext/
</span><br>
<span class="quotelev2">&gt;&gt; for their extension (see ompi/mpiext/example in the HG branch for an
</span><br>
<span class="quotelev2">&gt;&gt; example). By default, all extensions are disabled. They can be enabled
</span><br>
<span class="quotelev2">&gt;&gt; through a configure option '--enable-ext='. This option takes a list
</span><br>
<span class="quotelev2">&gt;&gt; of extensions that should be built as part of Open MPI. The user can
</span><br>
<span class="quotelev2">&gt;&gt; include all of the extensions by referencing the appropriate header
</span><br>
<span class="quotelev2">&gt;&gt; file (e.g., #include &lt;mpi-ext.h&gt; ), and compiling with the normal
</span><br>
<span class="quotelev2">&gt;&gt; wrapper compilers (e.g., mpicc).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This infrastructure was designed and discussed on July 2, 2008 at an
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI developers meeting directly following an MPI Forum meeting. I
</span><br>
<span class="quotelev2">&gt;&gt; have been developing this branch over the past few months under the
</span><br>
<span class="quotelev2">&gt;&gt; advisement of Jeff and Brian. The C interface is functional and
</span><br>
<span class="quotelev2">&gt;&gt; stable. The C++, F77, and F90 interfaces have not been completed.
</span><br>
<span class="quotelev2">&gt;&gt; There are comments in the appropriate build system files (particularly
</span><br>
<span class="quotelev2">&gt;&gt; config/ompi_ext.m4) that indicate where a developer would need to
</span><br>
<span class="quotelev2">&gt;&gt; focus to finish support for these language bindings if needed. I have
</span><br>
<span class="quotelev2">&gt;&gt; not completed them since I do not feel comfortable enough at this time
</span><br>
<span class="quotelev2">&gt;&gt; with these languages to provide such functionality.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I would like to bring this into the trunk before v1.5 branch. Having
</span><br>
<span class="quotelev2">&gt;&gt; the infrastructure in the trunk will make it easier to maintain off-
</span><br>
<span class="quotelev2">&gt;&gt; trunk experimental interface development.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; As part of this RFC, I will also update the 'MPI Extensions' wiki page
</span><br>
<span class="quotelev2">&gt;&gt; to describe how a developer can get started using this infrastructure:
</span><br>
<span class="quotelev2">&gt;&gt;    <a href="https://svn.open-mpi.org/trac/ompi/wiki/MPIExtensions">https://svn.open-mpi.org/trac/ompi/wiki/MPIExtensions</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; How to use the branch:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Configure with this additional option:
</span><br>
<span class="quotelev2">&gt;&gt;   --enable-ext=example
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Compile the following sample MPI program with 'mpicc' per usual.
</span><br>
<span class="quotelev2">&gt;&gt; /*---------------------------------*/
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;mpi-ext.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; int main(int argc, char *argv[])
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;      int rank, size;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev2">&gt;&gt;      MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      OMPI_Progress(&quot;Go OMPI! Go!&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      MPI_Finalize();
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      return 0;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; /*---------------------------------*/
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6005.php">Jeff Squyres: "Re: [OMPI devel] RFC: MPI Interface Extensions Infrastructure"</a>
<li><strong>Previous message:</strong> <a href="6003.php">Jeff Squyres: "Re: [OMPI devel] RFC: MPI Interface Extensions Infrastructure"</a>
<li><strong>In reply to:</strong> <a href="6003.php">Jeff Squyres: "Re: [OMPI devel] RFC: MPI Interface Extensions Infrastructure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6005.php">Jeff Squyres: "Re: [OMPI devel] RFC: MPI Interface Extensions Infrastructure"</a>
<li><strong>Reply:</strong> <a href="6005.php">Jeff Squyres: "Re: [OMPI devel] RFC: MPI Interface Extensions Infrastructure"</a>
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
