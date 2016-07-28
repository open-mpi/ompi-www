<?
$subject_val = "[OMPI devel] predefined ompi_t types break strict-aliasing rules";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 24 08:09:08 2009" -->
<!-- isoreceived="20090424120908" -->
<!-- sent="Fri, 24 Apr 2009 13:08:58 +0100" -->
<!-- isosent="20090424120858" -->
<!-- name="Number Cruncher" -->
<!-- email="number.cruncher_at_[hidden]" -->
<!-- subject="[OMPI devel] predefined ompi_t types break strict-aliasing rules" -->
<!-- id="49F1ABDA.4030109_at_ntlworld.com" -->
<!-- charset="windows-1252" -->
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
<strong>Subject:</strong> [OMPI devel] predefined ompi_t types break strict-aliasing rules<br>
<strong>From:</strong> Number Cruncher (<em>number.cruncher_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-24 08:08:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5863.php">Jeff Squyres: "Re: [OMPI devel] predefined ompi_t types break strict-aliasing rules"</a>
<li><strong>Previous message:</strong> <a href="5861.php">Rainer Keller: "Re: [OMPI devel] RFC: Final cleanup of included headers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5863.php">Jeff Squyres: "Re: [OMPI devel] predefined ompi_t types break strict-aliasing rules"</a>
<li><strong>Reply:</strong> <a href="5863.php">Jeff Squyres: "Re: [OMPI devel] predefined ompi_t types break strict-aliasing rules"</a>
<li><strong>Maybe reply:</strong> <a href="5864.php">Number Cruncher: "Re: [OMPI devel] predefined ompi_t types break strict-aliasing rules"</a>
<li><strong>Maybe reply:</strong> <a href="5914.php">Number Cruncher: "Re: [OMPI devel] predefined ompi_t types break strict-aliasing rules"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
With, or without, C++ bindings, I'm getting serious warnings when 
<br>
compiling *any* C++ program which #includes &lt;mpi.h&gt;:
<br>
<p>Program (helloMPI.cpp):
<br>
#include &lt;iostream&gt;
<br>
#include &lt;mpi.h&gt;
<br>
int
<br>
main(int argc, char *argv[])
<br>
{
<br>
&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;&nbsp;int myRank;
<br>
&nbsp;&nbsp;&nbsp;if(!MPI_Comm_rank(MPI_COMM_WORLD, &amp;myRank)) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;std::cout &lt;&lt; &quot;Hello World from &quot; &lt;&lt; myRank &lt;&lt; std::endl;
<br>
&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
<p>Compiler (g++ 4.1.2) output when using optimization (-O2):
<br>
/opt/cfs/include/openmpi/ompi/mpi/cxx/datatype.h: In constructor 
<br>
&#145;MPI::Datatype::Datatype()&#146;:
<br>
/opt/cfs/include/openmpi/ompi/mpi/cxx/datatype.h:68: warning: 
<br>
type-punning to incomplete type might break strict-aliasing rules
<br>
/opt/cfs/include/openmpi/ompi/mpi/cxx/request.h: In constructor 
<br>
&#145;MPI::Request::Request()&#146;:
<br>
/opt/cfs/include/openmpi/ompi/mpi/cxx/request.h:60: warning: 
<br>
type-punning to incomplete type might break strict-aliasing rules
<br>
/opt/cfs/include/openmpi/ompi/mpi/cxx/group.h: In constructor 
<br>
&#145;MPI::Group::Group()&#146;:
<br>
/opt/cfs/include/openmpi/ompi/mpi/cxx/group.h:61: warning: type-punning 
<br>
to incomplete type might break strict-aliasing rules
<br>
....... [many more]
<br>
<p>Without the C++ bindings, I still get:
<br>
helloMPI.cpp: In function &#145;int main(int, char**)&#146;:
<br>
helloMPI.cpp:8: warning: type-punning to incomplete type might break 
<br>
strict-aliasing rules
<br>
<p>I've followed the discussion at ompi/communicator/communicator.h and 
<br>
looked at the major changeset at 
<br>
<a href="https://svn.open-mpi.org/trac/ompi/changeset/20627">https://svn.open-mpi.org/trac/ompi/changeset/20627</a> .
<br>
<p>The problem is that, with optimization enabled, the compiler can assume 
<br>
that &quot;an object of one type is assumed never to reside at the same 
<br>
address as an object of a different type, unless the types are almost 
<br>
the same&quot; (gcc info page). In this case ompi_predefined_*_t are not 
<br>
fully defined by the time the C++ compiler expands the macro 
<br>
MPI_COMM_WORLD to:
<br>
((ompi_communicator_t *)&amp;(ompi_mpi_comm_world))
<br>
<p>The compiler complains because ompi_mpi_comm_world is declared as an 
<br>
&quot;extern struct ompi_predefined_communicator_t&quot; but the type is 
<br>
incomplete, so it can't tell whether the cast is a permissible 
<br>
almost-the-same type pun (e.g. an &quot;int&quot; can alias an &quot;unsigned&quot;).
<br>
<p>I think this is potentially a serious performance issue for anyone using 
<br>
OpenMPI in a C++ environment, and the profuse warnings preclude it's use 
<br>
in our build system.
<br>
<p>The bad news is that the only work around I have is to insert (void *) 
<br>
casts between (MPI_TYPENAME) and the address operator, e.g.:
<br>
#define MPI_COMM_WORLD (((MPI_Comm)(void *)&amp;(ompi_mpi_comm_world)))
<br>
<p>An alternative might be to make the full type definition available by 
<br>
#including some of the internal developer headers such as 
<br>
ompi/communicator/communicator.h
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5863.php">Jeff Squyres: "Re: [OMPI devel] predefined ompi_t types break strict-aliasing rules"</a>
<li><strong>Previous message:</strong> <a href="5861.php">Rainer Keller: "Re: [OMPI devel] RFC: Final cleanup of included headers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5863.php">Jeff Squyres: "Re: [OMPI devel] predefined ompi_t types break strict-aliasing rules"</a>
<li><strong>Reply:</strong> <a href="5863.php">Jeff Squyres: "Re: [OMPI devel] predefined ompi_t types break strict-aliasing rules"</a>
<li><strong>Maybe reply:</strong> <a href="5864.php">Number Cruncher: "Re: [OMPI devel] predefined ompi_t types break strict-aliasing rules"</a>
<li><strong>Maybe reply:</strong> <a href="5914.php">Number Cruncher: "Re: [OMPI devel] predefined ompi_t types break strict-aliasing rules"</a>
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
