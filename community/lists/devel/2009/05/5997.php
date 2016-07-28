<?
$subject_val = "[OMPI devel] RFC: MPI Interface Extensions Infrastructure";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 11 14:37:24 2009" -->
<!-- isoreceived="20090511183724" -->
<!-- sent="Mon, 11 May 2009 14:37:20 -0400" -->
<!-- isosent="20090511183720" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: MPI Interface Extensions Infrastructure" -->
<!-- id="B02B509F-1BE8-4E05-A1C8-F7C4D3710531_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: MPI Interface Extensions Infrastructure<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-11 14:37:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5998.php">Bryan Lally: "[OMPI devel] possible bug in 1.3.2 sm transport"</a>
<li><strong>Previous message:</strong> <a href="5996.php">Ralph Castain: "Re: [OMPI devel] Configuring openmpi-1.3.2 with &quot;--without-rte-support&quot;. FLAG."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6003.php">Jeff Squyres: "Re: [OMPI devel] RFC: MPI Interface Extensions Infrastructure"</a>
<li><strong>Reply:</strong> <a href="6003.php">Jeff Squyres: "Re: [OMPI devel] RFC: MPI Interface Extensions Infrastructure"</a>
<li><strong>Reply:</strong> <a href="6090.php">Josh Hursey: "Re: [OMPI devel] RFC: MPI Interface Extensions Infrastructure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What:  Infrastructure for MPI Interface Extensions
<br>
<p>Why:   Allow for experimentation with new interfaces without changing  
<br>
mpi.h
<br>
<p>Where: Temporary Mercurial branch (link below)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://cgi.cs.indiana.edu/~jjhursey/public-tmp/hg/hgwebdir.cgi/mpi-ext/">http://cgi.cs.indiana.edu/~jjhursey/public-tmp/hg/hgwebdir.cgi/mpi-ext/</a>
<br>
<p>When:  Apply on trunk before branching for v1.5
<br>
<p>Timeout: 2 weeks - May 26, 2009 after the teleconf.
<br>
<p>---------------------------------------------------------------------
<br>
Description:
<br>
<p>At times developers want to expose non-standard, optional interfaces  
<br>
to users. These interfaces may represent MPI interfaces to be  
<br>
presented to the MPI Forum for standardization. In order to add such  
<br>
an interface to Open MPI you must add it directly to the ompi/mpi/  
<br>
directory and mpi.h. The combination of standard and non-standard  
<br>
interfaces inside mpi.h becomes troublesome to many developers and  
<br>
users.
<br>
<p>This branch allows developers to create a directory under ompi/mpiext/  
<br>
for their extension (see ompi/mpiext/example in the HG branch for an  
<br>
example). By default, all extensions are disabled. They can be enabled  
<br>
through a configure option '--enable-ext='. This option takes a list  
<br>
of extensions that should be built as part of Open MPI. The user can  
<br>
include all of the extensions by referencing the appropriate header  
<br>
file (e.g., #include &lt;mpi-ext.h&gt; ), and compiling with the normal  
<br>
wrapper compilers (e.g., mpicc).
<br>
<p>This infrastructure was designed and discussed on July 2, 2008 at an  
<br>
Open MPI developers meeting directly following an MPI Forum meeting. I  
<br>
have been developing this branch over the past few months under the  
<br>
advisement of Jeff and Brian. The C interface is functional and  
<br>
stable. The C++, F77, and F90 interfaces have not been completed.  
<br>
There are comments in the appropriate build system files (particularly  
<br>
config/ompi_ext.m4) that indicate where a developer would need to  
<br>
focus to finish support for these language bindings if needed. I have  
<br>
not completed them since I do not feel comfortable enough at this time  
<br>
with these languages to provide such functionality.
<br>
<p>I would like to bring this into the trunk before v1.5 branch. Having  
<br>
the infrastructure in the trunk will make it easier to maintain off- 
<br>
trunk experimental interface development.
<br>
<p>As part of this RFC, I will also update the 'MPI Extensions' wiki page  
<br>
to describe how a developer can get started using this infrastructure:
<br>
&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/wiki/MPIExtensions">https://svn.open-mpi.org/trac/ompi/wiki/MPIExtensions</a>
<br>
<p>---------------------------------------------------------------------
<br>
How to use the branch:
<br>
<p>Configure with this additional option:
<br>
&nbsp;&nbsp;--enable-ext=example
<br>
<p>Compile the following sample MPI program with 'mpicc' per usual.
<br>
/*---------------------------------*/
<br>
#include &lt;stdio.h&gt;
<br>
#include &lt;mpi.h&gt;
<br>
#include &lt;mpi-ext.h&gt;
<br>
<p>int main(int argc, char *argv[])
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int rank, size;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OMPI_Progress(&quot;Go OMPI! Go!&quot;);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
/*---------------------------------*/
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5998.php">Bryan Lally: "[OMPI devel] possible bug in 1.3.2 sm transport"</a>
<li><strong>Previous message:</strong> <a href="5996.php">Ralph Castain: "Re: [OMPI devel] Configuring openmpi-1.3.2 with &quot;--without-rte-support&quot;. FLAG."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6003.php">Jeff Squyres: "Re: [OMPI devel] RFC: MPI Interface Extensions Infrastructure"</a>
<li><strong>Reply:</strong> <a href="6003.php">Jeff Squyres: "Re: [OMPI devel] RFC: MPI Interface Extensions Infrastructure"</a>
<li><strong>Reply:</strong> <a href="6090.php">Josh Hursey: "Re: [OMPI devel] RFC: MPI Interface Extensions Infrastructure"</a>
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
