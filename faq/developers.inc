<?php

$q[] = "Open MPI terminology";

$anchor[] = "ompi-terminology";

$a[] = "Open MPI is a large project containing many different
sub-systems and a relatively large code base.  Let's first cover some
fundamental terminology in order to make the rest of the discussion
easier.

Open MPI has three sections of code:

<ul>
<li> *OMPI:* The MPI API and supporting logic</li>
<li> *ORTE:* The Open Run-Time Environment (support for different
back-end run-time systems)</li>
<li> *OPAL:* The Open Portable Access Layer (utility and \"glue\" code
used by OMPI and ORTE)</li>
</ul>

There are strict abstraction barriers in the code between these
sections.  That is, they are compiled into three separate libraries:
[libmpi], [liborte], and [libopal] with a strict dependency order:
OMPI depends on ORTE and OPAL, and ORTE depends on OPAL.  More
specifically, OMPI executables are linked with:

<geshi bash>
shell$ mpicc myapp.c -o myapp
# This actually turns into:
shell$ cc myapp.c -o myapp -lmpi -lopen-rte -lopen-pal ...
</geshi>

More system-level libraries may listed after [-lopal], but you get the
idea.

Strictly speaking, these are not \"layers\" in the classic software
engineering sense (even though it is convenient to refer to them as
such).  They are listed above in dependency order, but that does not
mean that, for example, the OMPI code must go through the ORTE and
OPAL code in order to reach the operating system or a network
interface.

As such, this code organization more reflects abstractions and
software engineering, not a strict hierarchy of functions that must be
traversed in order to reach lower layer.  For example, OMPI can call
OPAL functions directly -- it does not have to go through ORTE.
Indeed, OPAL has a different set of purposes than ORTE, so it wouldn't
even make sense to channel all OPAL access through ORTE.  OMPI can
also directly call the operating system as necessary.  For example,
many top-level MPI API functions are quite performance sensitive; it
would not make sense to force them to traverse an abritrarily deep
call stack just to move some bytes across a network.

Here's a list of terms that are frequently used in discussions about
the Open MPI code base:

<ul>

<li> *MCA:* The Modular Component Architecture (MCA) is the foundation
upon which the entire Open MPI project is built.  It provides all the
component architecture services that the rest of the system use.
Although it is the fundamental heart of the system, it's
implementation is actually quite small and lightweight -- it is
nothing like CORBA, COM, JINI, or many other well-known component
architectures.  It was designed for HPC -- meaning that it is small,
fast, and resonably efficient -- and therefore offers few services
other finding, loading, and unloading components.

<li> *Framework:* An MCA _framework_ is a construct that is created
for a single, targeted purpose.  It provides a public interface that
is used by external code, but it also its own internal services.  A
list of Open MPI frameworks <a
href=\"./?category=tuning#frameworks\">is available here</a>.  An MCA
framework uses the MCA's services to find and load _components_ at run
time -- implementations of the framework's interface.  An easy example
framework to discuss is the MPI framework named \"[btl]\", or the Byte
Transfer Layer.  It is used to sends and receive data on different
kinds of networks.  Hence, Open MPI has [btl] components for shared
memory, TCP, Infiniband, Myrinetc, etc.

<li> *Component:* An MCA _component_ is an implementation of a
framework's interface.  Another common word for component is
\"plugin.\" It is a standalone collection of code that can be bundled
into a plugin that can be inserted into the Open MPI code base, either
at run-time and/or compile-time.

<li> *Module:* An MCA _module_ is an instance of a component (in the
C++ sense of the word \"instance\"; an MCA component is analogous to a
C++ class). For example, if a node running an Open MPI application has
multiple ethernet NICs, the Open MPI application will contain one TCP
[btl] component, but two TCP [btl] modules.  This difference between
components and modules is important becaue modules have private state;
components do not.

</ul>

Frameworks, components, and modules can be dynamic or static. That is,
they can be available as plugins or they may be compiled statically
into libraries (e.g., [libmpi]).";

/////////////////////////////////////////////////////////////////////////

$q[] = "How do I get a copy of the most recent source code?";

$anchor[] = "svn-checkout";

$a[] = "See the instructions <a
href=\"$topdir/svn/obtaining.php\">here</a>.";

/////////////////////////////////////////////////////////////////////////

$q[] = "Ok, I got a Subversion checkout.  Now how do I build it?";

$anchor[] = "svn-build";

$a[] = "See the instructions <a
href=\"$topdir/svn/building.php\">here</a>.";

/////////////////////////////////////////////////////////////////////////

$q[] = "What is the main tree layout of the Open MPI source tree?  Are
there directory name conventions?";

$anchor[] = "source-tree-layout";

$a[] = "There are a few notable top-level directories in the source
tree:

<ul>
<li> *config/:* M4 scripts supporting the top-level [configure] script
[mpi.h])</li>
<li> *etc/:* Some miscellaneous text files</li>
<li> *include/:* Top-level include files that will be installed</li>
<li> *ompi/:* The Open MPI code base</li>
<li> *orte/:* The Open RTE code base</li>
<li> *opal/:* The OPAL code base</li>
</ul>

Each of the three main source directories ([ompi/], [orte/], and
[opal/]) generate a top-level library named [libmpi], [liborte], and
[libopal], respectively.  They can be built as either static or shared
libraries.  Executables are also produced in subdirectories of some of
the trees.

Each of the sub-project source directories have similar (but not
identical) directory structures under them:

<ul>
<li> *class/:* C++-like \"classes\" (using the OPAL class system)
specific to this project</li>
<li> *include/:* Top-level include files specific to this project</li>
<li> *mca/:* MCA frameworks and components specific to this project</li>
<li> *runtime/:* Startup and shutdown of this project at runtime</li>
<li> *tools/:* Executables specific to this project (currently none in
OPAL)</li>
<li> *util/:* Random utility code</li>
</ul>

There are other top-level directories in each of the three
sub-projects, each having to do with specific logic and code for that
project.  For example, the MPI API implementations can be found under
[ompi/mpi/<strong>LANGUAGE</strong>], where
[<strong>LANGUAGE</strong>] is [c], [cxx], [f77], and [f90].

The layout of the [mca/] trees are strictly defined.  They are of the
form:

<pre>
&lt;project&gt;/mca/&lt;framework name&gt;/&lt;component name&gt;/
</pre>

To be explicit: it is forbidden to have a directory under the [mca]
trees that does not meet this template (with the execption of [base]
directories, explained below).  Hence, only framework and component
code can be in the [mca/] trees.

That is, framework and component names must be valid directory names
(and C variables; more on that later).  For example, the TCP BTL
component is located in the following directory:

<pre>
# In v1.6.x and earlier:
ompi/mca/btl/tcp/

# In v1.7.x and later:
opal/mca/btl/tcp/
</pre>

The name [base] is reserved; there cannot be a framework or component
named \"base.\" Directories named [base] are reserved for the
implementatio of the MCA and frameworks.  Here are a few examples (as
of the v1.8 source tree):

<pre>
# Main implementation of the MCA
opal/mca/base

# Implementation of the btl framework
opal/mca/btl/base

# Implementation of the rml framework
orte/mca/rml/base

# Implementation of the pml framework
ompi/mca/pml/base
</pre>

Under these mandated directories, frameworks and/or components may have
arbitrary directory structures, however.";

/////////////////////////////////////////////////////////////////////////

$q[] = "Is there more information available?";

$anchor[] = "more-information";

$a[] = "Yes.  In early 2006, Cisco hosted an Open MPI workshop where
the Open MPI Team provided several days of intensive
dive-into-the-code tutorials.  The slides from these tutorials <a
href=\"$topdir/papers/workshop-2006/\">are available here</a>.

Additionally, several Greenplum videoed several Open MPI developers
discussing Open MPI internals in 2012.  The videos <a
href=\"$topdir/videos/internals/\">are available here</a>.";

/////////////////////////////////////////////////////////////////////////

$foo ="
open mpi sub-projects: orte, opal
directory layout
  - sub-projects, utilities, mca, frameworks, components
obtaining an SVN checkout
compiling from a SVN checkout
the role of autogen.sh
mca parameters
  - API
  - ompi_info
prefix rule
configure build system
adding a framework
adding a component
how to write for a new p2p network
how to write new MPI collective algorithms
how to write for a new back-end RTE
";
