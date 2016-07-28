<?
$subject_val = "Re: [OMPI devel] RFC: MPI Interface Extensions Infrastructure";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 12 09:37:07 2009" -->
<!-- isoreceived="20090512133707" -->
<!-- sent="Tue, 12 May 2009 09:37:03 -0400" -->
<!-- isosent="20090512133703" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: MPI Interface Extensions Infrastructure" -->
<!-- id="D7C14FF1-EE83-4031-B663-0B10CD43B8BE_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="8F906FDB-44A1-4F9D-8707-691CB288D910_at_cisco.com" -->
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
<strong>Date:</strong> 2009-05-12 09:37:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6007.php">Jeff Squyres: "Re: [OMPI devel] Bug in return status of MPI_WAIT()"</a>
<li><strong>Previous message:</strong> <a href="6005.php">Jeff Squyres: "Re: [OMPI devel] RFC: MPI Interface Extensions Infrastructure"</a>
<li><strong>In reply to:</strong> <a href="6005.php">Jeff Squyres: "Re: [OMPI devel] RFC: MPI Interface Extensions Infrastructure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6008.php">Jeff Squyres: "Re: [OMPI devel] RFC: MPI Interface Extensions Infrastructure"</a>
<li><strong>Reply:</strong> <a href="6008.php">Jeff Squyres: "Re: [OMPI devel] RFC: MPI Interface Extensions Infrastructure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
For the same reasons that Jeff mentioned, I think it is probably  
<br>
better to have a separate mpi-ext.h outside of mpi.h. It just makes  
<br>
things a bit more explicit for the programmer.
<br>
<p>With regard to the #define, should we have one for all extended  
<br>
interfaces (i.e., OMPI_HAVE_MPI_EXT) or one for each set of interfaces  
<br>
(i.e., OMPI_HAVE_MPI_EXT_EXAMPLE, OMPI_HAVE_MPI_EXT_MAGIC, ...)?
<br>
<p>-- Josh
<br>
<p>On May 12, 2009, at 9:14 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; I *believe* we chose to make it a separate &lt;mpi-ext.h&gt; file to drive  
</span><br>
<span class="quotelev1">&gt; the point home to the MPI application developer that these are non- 
</span><br>
<span class="quotelev1">&gt; standard API functions, use at their own risk, yadda yadda yadda.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Maybe it would be worthwhile to have an extra #define that indicates  
</span><br>
<span class="quotelev1">&gt; whether these functions are available, though, so a programmer could  
</span><br>
<span class="quotelev1">&gt; do something like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #if OMPI_HAVE_MPI_EXTENDED_INTERFACES
</span><br>
<span class="quotelev1">&gt;  OMPI_Progress();
</span><br>
<span class="quotelev1">&gt; #else
</span><br>
<span class="quotelev1">&gt; #error &quot;We need progress!!&quot;
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (probably with a shorter #define name, though ;-) )
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 12, 2009, at 8:49 AM, Terry Dontje wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I like this, however wouldn't it possibly be nice to have a the
</span><br>
<span class="quotelev2">&gt;&gt; mpi-ext.h pulled in by mpi.h when the -enable-ext configure option is
</span><br>
<span class="quotelev2">&gt;&gt; used?  That way one would be able to compile and run current tests  
</span><br>
<span class="quotelev2">&gt;&gt; for
</span><br>
<span class="quotelev2">&gt;&gt; regressions without having to change the code.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --td
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I'm [obviously] in favor of this RFC.  :-)
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; On May 11, 2009, at 2:37 PM, Josh Hursey wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; What:  Infrastructure for MPI Interface Extensions
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Why:   Allow for experimentation with new interfaces without  
</span><br>
<span class="quotelev2">&gt;&gt; changing
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; mpi.h
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Where: Temporary Mercurial branch (link below)
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; <a href="http://cgi.cs.indiana.edu/~jjhursey/public-tmp/hg/hgwebdir.cgi/mpi-ext/">http://cgi.cs.indiana.edu/~jjhursey/public-tmp/hg/hgwebdir.cgi/mpi-ext/</a>
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; When:  Apply on trunk before branching for v1.5
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Timeout: 2 weeks - May 26, 2009 after the teleconf.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Description:
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; At times developers want to expose non-standard, optional  
</span><br>
<span class="quotelev2">&gt;&gt; interfaces
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; to users. These interfaces may represent MPI interfaces to be
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; presented to the MPI Forum for standardization. In order to add  
</span><br>
<span class="quotelev2">&gt;&gt; such
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; an interface to Open MPI you must add it directly to the ompi/mpi/
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; directory and mpi.h. The combination of standard and non-standard
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; interfaces inside mpi.h becomes troublesome to many developers and
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; users.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; This branch allows developers to create a directory under ompi/ 
</span><br>
<span class="quotelev2">&gt;&gt; mpiext/
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; for their extension (see ompi/mpiext/example in the HG branch  
</span><br>
<span class="quotelev2">&gt;&gt; for an
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; example). By default, all extensions are disabled. They can be  
</span><br>
<span class="quotelev2">&gt;&gt; enabled
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; through a configure option '--enable-ext='. This option takes a  
</span><br>
<span class="quotelev2">&gt;&gt; list
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; of extensions that should be built as part of Open MPI. The user  
</span><br>
<span class="quotelev2">&gt;&gt; can
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; include all of the extensions by referencing the appropriate  
</span><br>
<span class="quotelev2">&gt;&gt; header
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; file (e.g., #include &lt;mpi-ext.h&gt; ), and compiling with the normal
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; wrapper compilers (e.g., mpicc).
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; This infrastructure was designed and discussed on July 2, 2008  
</span><br>
<span class="quotelev2">&gt;&gt; at an
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Open MPI developers meeting directly following an MPI Forum  
</span><br>
<span class="quotelev2">&gt;&gt; meeting. I
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; have been developing this branch over the past few months under  
</span><br>
<span class="quotelev2">&gt;&gt; the
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; advisement of Jeff and Brian. The C interface is functional and
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; stable. The C++, F77, and F90 interfaces have not been completed.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; There are comments in the appropriate build system files  
</span><br>
<span class="quotelev2">&gt;&gt; (particularly
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; config/ompi_ext.m4) that indicate where a developer would need to
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; focus to finish support for these language bindings if needed. I  
</span><br>
<span class="quotelev2">&gt;&gt; have
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; not completed them since I do not feel comfortable enough at  
</span><br>
<span class="quotelev2">&gt;&gt; this time
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; with these languages to provide such functionality.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; I would like to bring this into the trunk before v1.5 branch.  
</span><br>
<span class="quotelev2">&gt;&gt; Having
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; the infrastructure in the trunk will make it easier to maintain  
</span><br>
<span class="quotelev2">&gt;&gt; off-
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; trunk experimental interface development.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; As part of this RFC, I will also update the 'MPI Extensions'  
</span><br>
<span class="quotelev2">&gt;&gt; wiki page
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; to describe how a developer can get started using this  
</span><br>
<span class="quotelev2">&gt;&gt; infrastructure:
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;    <a href="https://svn.open-mpi.org/trac/ompi/wiki/MPIExtensions">https://svn.open-mpi.org/trac/ompi/wiki/MPIExtensions</a>
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; How to use the branch:
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Configure with this additional option:
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;   --enable-ext=example
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Compile the following sample MPI program with 'mpicc' per usual.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; /*---------------------------------*/
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; #include &lt;mpi-ext.h&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; int main(int argc, char *argv[])
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; {
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;      int rank, size;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;      MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;      MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;      MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;      OMPI_Progress(&quot;Go OMPI! Go!&quot;);
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;      MPI_Finalize();
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;      return 0;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; }
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; /*---------------------------------*/
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
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
<li><strong>Next message:</strong> <a href="6007.php">Jeff Squyres: "Re: [OMPI devel] Bug in return status of MPI_WAIT()"</a>
<li><strong>Previous message:</strong> <a href="6005.php">Jeff Squyres: "Re: [OMPI devel] RFC: MPI Interface Extensions Infrastructure"</a>
<li><strong>In reply to:</strong> <a href="6005.php">Jeff Squyres: "Re: [OMPI devel] RFC: MPI Interface Extensions Infrastructure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6008.php">Jeff Squyres: "Re: [OMPI devel] RFC: MPI Interface Extensions Infrastructure"</a>
<li><strong>Reply:</strong> <a href="6008.php">Jeff Squyres: "Re: [OMPI devel] RFC: MPI Interface Extensions Infrastructure"</a>
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
