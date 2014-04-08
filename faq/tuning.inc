<?php
$q[] = "What is the Modular Component Architecture (MCA)?";

$anchor[] = "mca-def";

$a[] = "The Modular Component Architecture (MCA) is the backbone for
much of Open MPI's functionality.  It is a series of _frameworks_,
_components_, and _modules_ that are assembled at run-time to create
an MPI implementation.

*Frameworks:* An MCA framework manages zero or more components at run
time and is targeted at a specific task (e.g., provide MPI collective
operation functionality).  Each MCA framework supports a single
component type, but may support multiple versions of that type.  The
framework uses the services from the MCA base functionality to find
and/or load components.

*Components:* An MCA component is an implementation of a framework's
interface.  It is a standalone collection of code that can be bundled
into a plugin that can be inserted into the Open MPI code base,
either at run-time and/or compile-time.

*Modules:* An MCA module is an instance of a component (in the C++
sense of the word \"instance\"; an MCA component is analogous to a C++
class).  For example, if a node running an Open MPI application has
multiple ethernet NICs, the Open MPI application will contain one TCP
MPI point-to-point _component_, but two TCP point-to-point _modules_.

Frameworks, components, and modules can be dynamic or static.  That
is, they can be available as plugins or they may be compiled statically
into libraries (e.g., libmpi).
";

/////////////////////////////////////////////////////////////////////////

$q[] = "What are MCA parameters?";

$anchor[] = "mca-params";

$a[] = "MCA parameters are the basic unit of run-time tuning for Open
MPI.  They are simple \"key = value\" pairs that are used extensively
throughout the code base.  The general rules of thumb that the
developers use are:

<ul>
<li>Instead of using a constant for an important value, make it an MCA
parameter</li>
<li>If a task can be implemented in multiple, user-discernible ways,
implement as many as possible and make choosing between them be an MCA
parameter</li>
</ul>

For example, an easy MCA parameter to describe is the boundary between
short and long messages in TCP wire-line transmissions.  \"Short\"
messages are sent eagerly whereas \"long\" messages use a rendezvous
protocol.  The decision point between these two protocols is the
overall size of the message (in bytes).  By making this value an MCA
parameter, it can be changed at run-time by the user or system
administrator to use a sensible value for a particular environment or
set of hardware (e.g., a value suitable for 100 Mbps Ethernet is
probably not suitable for Gigabit Ethernet, and may require a
different value for 10 Gigabit Ethernet).

Note that MCA parameters may be set in several different ways
(described in another FAQ entry).  This allows, for example, system
administrators to fine-tune the Open MPI installation for their
hardware / environment such that normal users can simply use the
default values.

More specifically, HPC environments -- and the applications that run
on them -- tend to be unique.  Providing extensive run-time tuning
capabilities through MCA parameters allows the customization of Open
MPI to each system's / user's / application's particular needs.";

/////////////////////////////////////////////////////////////////////////

$q[] = "What frameworks are in Open MPI?";

$anchor[] = "frameworks";

$a[] = "There are three types of frameworks in Open MPI: those in the
MPI layer (OMPI), those in the run-time layer (ORTE), and those in the
operating system / platform layer (OPAL).

The specific list of frameworks varies between each major release
series of Open MPI.  See the links below to FAQ entries for specific
versions of Open MPI:

<ul>
<li> <a href=\"#frameworks-v1.2-and-prior\">The Open MPI v1.2 series
(and prior)</a></li>
<li> <a href=\"#frameworks-v1.3\">The Open MPI v1.3 series</a></li>
</ul>";

/////////////////////////////////////////////////////////////////////////

$q[] = "What frameworks are in Open MPI v1.2 (and prior)?";

$anchor[] = "frameworks-v1.2-and-prior";

$a[] = "The comprehensive list of frameworks in Open MPI is
continually being augmented.  As of August 2005, here is the current
list:

*OMPI frameworks*
<ul>
<li> *allocator:* Memory allocator
<li> *bml:* BTL management layer (managing multiple devices)</li>
<li> *btl:* Byte transfer layer (point-to-point byte movement)</li>
<li> *coll:* MPI collective algorithms</li>
<li> *io:* MPI-2 I/O functionality</li>
<li> *mpool:* Memory pool management</li>
<li> *pml:* Point-to-point management layer (fragmenting, reassembly,
top-layer protocols, etc.)</li>
<li> *osc*: MPI-2 one-sided communication</li>
<li> *ptl:* (outdated / deprecated) MPI point-to-point transport layer
<li> *rcache:* Memory registration management</li>
<li> *topo:* MPI topology information</li>
</ul>

*ORTE frameworks*

<ul>
<li> *errmgr:* Error manager</li>
<li> *gpr:* General purpose registry</li>
<li> *iof:* I/O forwarding</li>
<li> *ns:* Name server</li>
<li> *oob:* Out-of-band communication</li>
<li> *pls:* Process launch subsystem</li>
<li> *ras:* Resource allocation subsystem</li>
<li> *rds:* Resource discovery subsystem</li>
<li> *rmaps:* Resource mapping subsystem</li>
<li> *rmgr:* Resource manager (upper meta layer for all other Resource
frameworks)</li>
<li> *rml:* Remote messaging layer (routing of OOB messages)</li>
<li> *schema:* Name schemas</li>
<li> *sds:* Startup discovery services</li>
<li> *soh:* State of health</li>
</ul>

*OPAL frameworks*

<ul>
<li> *maffinity:* Memory affinity</li>
<li> *memory:* Memory hooks</li>
<li> *paffinity:* Processor affinity</li>
<li> *timer:* High-resolution timers</li>
</ul>
";
/////////////////////////////////////////////////////////////////////////

$q[] = "What frameworks are in Open MPI v1.3?";

$anchor[] = "frameworks-v1.3";

$a[] = "The comprehensive list of frameworks in Open MPI is
continually being augmented.  As of November 2008, here is the current
list in the Open MPI v1.3 series:

*OMPI frameworks*
<ul>
<li> *allocator:* Memory allocator</li>
<li> *bml:* BTL management layer</li>
<li> *btl:* MPI point-to-point Byte Transfer Layer, used for MPI
            point-to-point messages on some types of networks</li>
<li> *coll:* MPI collective algorithms</li>
<li> *crcp:* Checkpoint/restart coordination protocol</li>
<li> *dpm:* MPI-2 dynamic process management</li>
<li> *io:* MPI-2 I/O</li>
<li> *mpool:* Memory pooling</li>
<li> *mtl:* Matching transport layer, used for MPI point-to-point
           messages MPI-2 one-sided communications</li>
<li> *pml:* MPI point-to-point management layer</li>
<li> *pubsub:* MPI-2 publish/subscribe management</li>
<li> *rcache:* Memory registration cache</li>
<li> *topo:* MPI topology routines</li>
</ul>

*ORTE frameworks*

<ul>
<li> *errmgr:* RTE error manager</li>
<li> *ess:* RTE environment-specfic services</li>
<li> *filem:* Remote file management</li>
<li> *grpcomm:* RTE group communications</li>
<li> *iof:* I/O forwarding</li>
<li> *odls:* OpenRTE daemon local launch subsystem</li>
<li> *oob:* Out of band messaging</li>
<li> *plm:* Process lifecycle management</li>
<li> *ras:* Resource allocation system</li>
<li> *rmaps:* Resource mapping system</li>
<li> *rml:* RTE message layer</li>
<li> *routed:* Routing table for the RML</li>
<li> *snapc:* Snapshot coordination</li>
</ul>

*OPAL frameworks*

<ul>
<li> *backtrace:* Debugging call stack backtrace support</li>
<li> *carto:* Cartography (host/network mapping) support</li>
<li> *crs:* Checkpoint and restart service</li>
<li> *installdirs:* Installation directory relocation services</li>
<li> *maffinity:* Memory affinity</li>
<li> *memchecker:* Run-time memory checking</li>
<li> *memcpy:* Memcpy copy support</li>
<li> *memory:* Memory management hooks</li>
<li> *paffinity:* Processor affinity</li>
<li> *timer:* High-resolution timers</li>
</ul>";

/////////////////////////////////////////////////////////////////////////

$q[] = "How do I know what components are in my Open MPI installation?";

$anchor[] = "components";

$a[] = "The [ompi_info] command, in addition to providing a wealth of
configuration information about your Open MPI installation, will list
all components (and the frameworks that they belong to) that are
available.  These include system-provided components as well as
user-provided components.";

/////////////////////////////////////////////////////////////////////////

$q[] = "How do I install my own components into an Open MPI installation?";

$anchor[] = "install-components";

$a[] = "By default, Open MPI looks in two places for components at
run-time (in order):

<ol>
<li> *\$prefix/lib/openmpi/:* This is the system-provided components
directory, part of the installation tree of Open MPI itself.</li>
<li> *\$HOME/.openmpi/components/:* This is where users can drop their
own components that will automatically be \"seen\" by Open MPI at
run-time.  This is ideal for developmental, private, or otherwise
unstable components.</li>
</ol>

Note that the directories and search ordering used for finding
components in Open MPI is, itself, an MCA parameter.  Setting the
[mca_component_path] changes this value (a colon-delimited list of
directories).

Note also that components are only used on nodes where they are
\"visible.\" Hence, if you [\$prefix/lib/openmpi/] is a directory on a
local disk that is not shared via a network filesystem to other nodes
where you run MPI jobs, then components that are installed to that
directory will *only* be used by MPI jobs running on the local node.

More specifically: components have the same visibility as normal
files.  If you need a component to be available to all nodes where you
run MPI jobs, then you need to ensure that it is visible on all nodes
(typically either by installing it on all nodes for non-networked
filesystem installs, or by installing them in a directory that is
visibile to all nodes via a networked filesystem).  Open MPI does not
automatically send components to remote nodes when MPI jobs are run.";

/////////////////////////////////////////////////////////////////////////

$q[] = "How do I know what MCA parameters are available?";

$anchor[] = "available-mca-params";

$a[] = "The [ompi_info] command can list the parameters for a given
component, all the parameters for a specific framework, or all
parameters.  Most parameters contain a description of the parameter;
all will show the parameter's current value.

For example:

<faqcode>
shell$ ompi_info <font color=red><strong>--param all all</strong></font>
</faqcode>

Shows all the MCA parameters for all components that [ompi_info]
finds, whereas:

<faqcode>
shell$ ompi_info <font color=red><strong>--param btl all</strong></font>
</faqcode>

Shows all the MCA parameters for all BTL components that [ompi_info]
finds.  Finally:

<faqcode>
shell$ ompi_info <font color=red><strong>--param btl tcp</strong></font>
</faqcode>

Shows all the MCA parameters for the TCP BTL component.";

/////////////////////////////////////////////////////////////////////////

$q[] = "How do I set the value of MCA parameters?";

$anchor[] = "setting-mca-params";

$a[] = "There are three main ways to set MCA parameters, each of which
are searched in order.  

<ol>
<li> *Command line:* The highest-precedence method is setting MCA
parameters on the command line.  For example:

<faqcode>
shell$ mpirun --mca mpi_show_handle_leaks 1 -np 4 a.out
</faqcode>

This sets the MCA parameter [mpi_show_handle_leaks] to the value of 1
before running [a.out] with four processes.  In general, the format
used on the command line is \"<code>--mca &lt;param_name&gt;
&lt;value&gt;</code>\".

Note that when senting multi-word values, you need to use quotes to ensure that the shell and Open MPI understand that they are a single value.  For example:

<faqcode>
shell$ mpirun --mca param <font color=red><strong>\"value with multiple words\"</strong></font> ...
</faqcode></li>

<li> *Environment variable:* Next, environment variables are searched.
Any environment variable named [OMPI_MCA_&lt;param_name&gt;] will be
used.  For example, the following has the same effect as the previous
example (for sh-flavored shells):

<faqcode>
shell$ <font color=red><strong>OMPI_MCA_mpi_show_handle_leaks=1</strong></font>
shell$ <font color=red><strong>export OMPI_MCA_mpi_show_handle_leaks</strong></font>
shell$ mpirun -np 4 a.out
</faqcode>

Or, for csh-flavored shells:

<faqcode>
shell% <font color=red><strong>setenv OMPI_MCA_mpi_show_handle_leaks 1</strong></font>
shell% mpirun -np 4 a.out
</faqcode>

Note that setting environment variables to values with multiple words
requires quoting, such as:

<faqcode>
# sh-flavored shells
shell$ <font color=red><strong>OMPI_MCA_param=\"value with multiple words\"</strong></font>

# csh-flavored shells
shell% setenv OMPI_MCA_param <font color=red><strong>\"value with multiple words\"</strong></font>
</faqcode>

<li> *Aggregate MCA parameter files:* Simple text files can be used to
set MCA parameter values for a specific application.  See <a
href=\"#amca-param-files\">this FAQ entry</a> (Open MPI version 1.3
and higher).</li>

<li> *Files:* Finally, simple text files can be used to set MCA
parameter values.  Parameters are set one per line (comments are
permitted).  For example:

<faqcode>
# This is a comment
# Set the same MCA parameter as in previous examples
mpi_show_handle_leaks = 1
</faqcode>

Note that quotes are *not* necessary for setting multi-word values in
MCA parameter files.  Indeed, if you use quotes in the MCA parameter
file, they will be used as part of the value itself.  For example:

<faqcode>
# The following two values are different:
param1 = value with multiple words
param2 = \"value with multiple words\"
</faqcode>

By default, two files are searched (in order):

<ol>
<li> *\$HOME/.openmpi/mca-params.conf:* The user-supplied set of
values takes the highest precedence.</li>
<li> *\$prefix/etc/openmpi-mca-params.conf:* The system-supplied set
of values has a lower precedence.</li>
</ol>

More specifically, the MCA parameter [mca_param_files] specifies a
colon-delimited path of files to search for MCA parameters.  Files to
the left have lower precedence; files to the right are higher
precedence.

Keep in mind that, just like components, these parameter files are
*only* relevant where they are \"visible\" (see <a
href=\"#install-components\">this FAQ entry</a>).  Specifically,
Open MPI does not read all the values from these files during startup
and then send them to all nodes in the job -- the files are read on
each node during each process' startup.  This is intended behavior: it
allows for per-node customization, which is especially relevant in
heterogeneous environments.</li>
</ol>";

/////////////////////////////////////////////////////////////////////////

$q[] = "What are Aggregate MCA (AMCA) parameter files?";

$anchor[] = "amca-param-files";

$a[] = "Starting with version 1.3, aggregate MCA (AMCA) parameter
files contain MCA parameter key/value pairs similar to the
{{{\$HOME/.openmpi/mca-params.conf}}} file described in <a href=\"#setting-mca-params\">this FAQ entry</a>.

The motivation behind AMCA parameter sets came from the realization
that for certain applications a large number of MCA parameters are
required for the application to run well and/or as the user
expects. Since these MCA parameters are application specific (or even
application run specific) they should not be set in a global manner,
but only pulled in as determined by the user.

MCA parameters set in AMCA parameter files will override any MCA
parameters supplied in global parameter files (e.g.,
[\$HOME/.openmpi/mca-params.conf]), but not command line or environment
parameters.

AMCA parameter files are typically supplied on the command line via
the {{{-am}}} option.

For example, consider a AMCA parameter file called {{{foo.conf}}}
placed in the same directory as the application {{{a.out}}}. A user
will typically run the application as:

<faqcode>
shell\$ mpirun -np 2 a.out
</faqcode>

To use the {{{foo.conf}}} AMCA parameter file this command line
changes to:

<faqcode>
shell\$ mpirun -np 2 -am foo.conf a.out
</faqcode>

If the user wants to override a parameter set in {{{foo.conf}}} they
can add it to the command line as seen below.

<faqcode>
shell\$ mpirun -np 2 -am foo.conf -mca btl tcp,self a.out
</faqcode>

AMCA parameter files can be coupled if more than one file is to be
used. If we have another AMCA parameter file called {{{bar.conf}}}
that we want to use we add it to the command line as follows:

<faqcode>
shell\$ mpirun -np 2 -am foo.conf:bar.conf a.out
</faqcode>

AMCA parameter files are loaded in priority order. This means that
{{{foo.conf}}} AMCA file has priority over the {{{bar.conf}}} file. So
if the {{{bar.conf}}} file sets the MCA parameter
{{{mpi_leave_pinned=0}}} and the {{{foo.conf}}} file sets this MCA
parameter to {{{mpi_leave_pinned=1}}} then the latter will be used.

The location of AMCA parameter files are resolved in a similar way as
the shell. If no path operator is provided (i.e., {{{foo.conf}}}) then
Open MPI will search the {{{\$SYSCONFDIR/amca-param-sets directory}}} then
the current working directory. If a relative path is specified then
only that path will be searched (i.e., {{{./foo.conf}}},
{{{baz/foo.conf}}}). If an absolute path is specified then only that
path will be searched (i.e., {{{/bip/boop/foo.conf}}}).

Though the typical use case for AMCA parameter files is to be
specified on the command line, they can also be set as MCA parameters
in the environment. The MCA parameter (mca_base_param_file_prefix)
contains a ':' separated list of AMCA parameter files exactly as they
would be passed to the {{{-am}}} command line option. The MCA
parameter (mca_base_param_file_path) specifies the path to search for
AMCA files with relative paths. By default this is
{{{\$SYSCONFDIR/amca-param-sets/:\$CWD}}}.";

/////////////////////////////////////////////////////////////////////////

$q[] = "How do I select which components are used?";

$anchor[] = "selecting-components";

$a[] = "Each MCA framework has a top-level MCA parameter that helps
guide which components are selected to be used at run-time.
Specifically, there is an MCA parameter of the same name as each MCA
framework that can be used to _include_ or _exclude_ components from a
given run.

For example, the [btl] MCA parameter is used to control which BTL
components are used (i.e., MPI point-to-point communications; see <A
HREF=\"#frameworks\">this FAQ entry</a> for a full list of MCA
frameworks).  It can take as a value a comma-separated list of
components with the optional prefix \"[^]\".  For example:

<faqcode>
# Tell Open MPI to exclude the tcp and openib BTL components
# and implicitly include all the rest
shell$ mpirun <font color=red><strong>--mca btl ^tcp,openib</strong></font> ...

# Tell Open MPI to include *only* the components listed here and
# implicitly ignore all the rest (i.e., the loopback, shared memory,
# and OpenFabrics (a.k.a., \"OpenIB\") MPI point-to-point components):
shell$ mpirun <font color=red><strong>--mca btl self,sm,openib</strong></font> ...
</faqcode>

Note that [^] can _only_ be the prefix of the entire value because the
inclusive and exclusive behavior are mutually exclusive.
Specifically, since the exclusive behavior means \"use all components
_except_ these,\" it does not make sense to mix it with the inclusive
behavior of not specifying it (i.e., \"use all of these components\").
Hence, something like this:

<faqcode>
shell$ mpirun <font color=red><strong>--mca btl self,sm,openib,^tcp</strong></font> ...
</faqcode>

does not make sense because it says both \"use only the [self], [sm],
and [openib] components\" and \"use all components except [tcp]\" and
will result in an error.

Just as with all MCA parameters, the [btl] parameter (and all
framework parameters) <A HREf=\"#setting-mca-params\">can be set in
multiple different ways</A>.";

/////////////////////////////////////////////////////////////////////////

$q[] = "What is processor affinity?  Does Open MPI support it?";

$anchor[] = "paffinity-defs";

$a[] = "Open MPI supports processor affinity on a variety of systems
through process binding, in which each MPI process, along with its
threads, is \"bound\" to a specific subset of processing resources
(cores, sockets, etc.).  That is, the operating system will constrain
that process to run on only that subset.  (Other processes might be
allowed on the same resources.)

Affinity can improve performance by inhibiting excessive process
movement -- for example, away from \"hot\" caches or NUMA memory.
Judicious bindings can improve performance by reducing resource contention
(by spreading processes apart from one another) or improving interprocess
communications (by placing processes close to one another).  Binding can
also improve performance reproducibility by eliminating variable process
placement.  Unfortunately, binding can also degrade performance by
inhibiting the OS capability to balance loads.

You can run the \"[ompi_info]\" command and look for \"[paffinity]\"
components to see if your system is supported.  For example:

<faqcode>
$ ompi_info | grep paffinity
           MCA paffinity: linux (MCA v1.0, API v1.0, Component v1.0)
</faqcode>

Note that processor affinity probably should *not* be used when a node
is over-subscribed (i.e., more processes are launched than there are
processors).  This can lead to a serious degradation in performance
(even more than simply oversubscribing the node).  Open MPI will
usually detect this situation and automatically disable the use of
processor affinity (and display run-time warnings to this effect).

<a href=\"#using-paffinity\">Also see this FAQ entry</a> for how to use
processor and memory affinity in Open MPI.";

/////////////////////////////////////////////////////////////////////////

$q[] = "What is memory affinity?  Does Open MPI support it?";

$anchor[] = "maffinity-defs";

$maffinity_warning = "Note that memory affinity support is enabled
_only when processor affinity is enabled._ Specifically: using memory
affinity does not make sense if processor affinity is not enabled
because processes may allocate local memory and then move to a
different processor, potentially remote from the memory that it just
allocated.";

$a[] = "Memory affinity is only relevant for Non-Uniform Memory Access
(NUMA) machines, such as \"big iron\" SGI and Cray machines, or many
models of multi-processor Opteron machines.  In a NUMA architecture,
memory is physically distributed throughout the machine even though it
is virtually treated as a single address space.  That is, memory may
be physically local to one or more processors -- and therefore remote
to other processors.

Simply put: some memory will be faster to access (for a given process)
than others.

Open MPI supports general and specific memory affinity, meaning that
it generally tries to allocate all memory local to the processor that
asked for it.  When shared memory is used for communication, Open MPI
uses memory affinity to make certain pages local to specific
processes in order to minimize memory network/bus traffic. 

Open MPI supports memory affinity on a variety of systems.  You can
run the \"[ompi_info]\" command and look for \"[maffinity]\"
components to see if your system is supported.  For example:

<faqcode>
$ ompi_info | grep maffinity
           MCA maffinity: libnuma (MCA v1.0, API v1.0, Component v1.0)
</faqcode>

$maffinity_warning

<a href=\"#using-paffinity\">Also see this FAQ entry</a> for how to use
processor and memory affinity in Open MPI.";

/////////////////////////////////////////////////////////////////////////

$q[] = "How do I tell Open MPI to use processor and/or memory affinity?";

$anchor[] = "using-paffinity";

$a[] = "Assuming that your system supports processor and memory
affinity (check [ompi_info] for \"[paffinity]\" and \"[maffinity]\"
components), you can explicitly tell Open MPI to use them when running
MPI jobs.

$maffinity_warning

Also note that processor and memory affinity is meaningless (but
harmless) on uniprocessor machines.

How to enable / use processor and memory affinity in Open MPI depends
on which version you are using:

<ul>
<li> <a href=\"#using-paffinity-v1.2\">Open MPI v1.2.x</a> (contains introduction to [mpi_paffinity_alone])</li>
<li> <a href=\"#using-paffinity-v1.3\">Open MPI v1.3.x</a> (contains introduction to rank files)</li>
<li> <a href=\"#using-paffinity-v1.4\">Open MPI v1.4.x</a> (contains introduction to [--by*] and [--bind-to-*] options)</li>
<li> <a href=\"#using-paffinity-v1.5\">Open MPI v1.5.x</a></li>
</ul>";

/////////////////////////////////////////////////////////////////////////

$q[] = "How do I tell Open MPI to use processor and/or memory affinity
in Open MPI v1.2.x?  (What is <tt>mpi_paffinity_alone</tt>?)";

$anchor[] = "using-paffinity-v1.2";

$a[] = "Open MPI 1.2 offers only crude control, with the MCA
parameter \"[mpi_paffinity_alone]\".  For example:

<faqcode>
$ mpirun --mca mpi_paffinity_alone 1 -np 4 a.out
</faqcode>

(Just like any other MCA parameter, [mpi_paffinity_alone] can be set
<a href=\"#setting-mca-params\">via any of the normal MCA parameter
mechanisms</a>.)

On each node where your job is running, your job's MPI processes will
be bound, one-to-one, in the order of their global MPI ranks, to the
lowest-numbered processing units (for example, cores or hardware threads)
on the node as identified by the OS.  Further, memory affinity will also
be enabled if it is supported on the node,
<a href=\"#maffinity-defs\">as described in a different FAQ entry</a>.

If multiple jobs are launched on the same node in this manner, they will
compete for the same processing units and severe performance degradation
will likely result.  Therefore, this MCA parameter is best used when you
know your job will be \"alone\" on the nodes where it will run.

Since each process is bound to a single processing unit, performance will
likely suffer catastrophically if processes are multi-threaded.

Depending on how processing units on your node are numbered, the binding
pattern may be good, bad, or even disastrous.  For example, performance
might be best if processes are spread out over all processor sockets on
the node.  The processor ID numbering, however, might lead to
[mpi_paffinity_alone] filling one socket before moving to another.
Indeed, on nodes with multiple hardware threads per core (e.g.,
\"HyperThreads\", \"SMT\", etc.), the numbering could lead to multiple
processes being bound to a core before the next core is considered.
In such cases, you should probably upgrade to a newer version of Open MPI
or use a different, external mechanism for processor binding.

Note that Open MPI will automatically disable processor affinity on
any node that is oversubscribed (i.e., where more Open MPI processes
are launched in a single job on a node than it has processors) and
will print out warnings to that effect.

Also note, however, that processor affinity is _not_ exclusionary with
Degraded performance mode.  Degraded mode is _usually_ only used when
oversubscribing nodes (i.e., running more processes on a node than it
has processors -- see <a
href=\"./?category=running#oversubscribing\">this FAQ entry</a> for
more details about oversubscribing, as well as a definition of
Degraded performance mode).  It is possible manually to select
Degraded performance mode _and_ use processor affinity as long as you
are not oversubscribing.";

/////////////////////////////////////////////////////////////////////////

$q[] = "How do I tell Open MPI to use processor and/or memory affinity
in Open MPI v1.3.x?  (What are rank files?)";

$anchor[] = "using-paffinity-v1.3";

$a[] = "Open MPI 1.3 supports the [mpi_paffinity_alone] MCA parameter
that is described in <a href=\"#using-paffinity-v1.2\">this FAQ
entry.</a>

Open MPI 1.3 (and higher) also allows a different binding to be specified
for each process via a _rankfile_.  Consider the following example:

<faqcode>
shell$ cat rankfile
rank 0=host0 slot=2
rank 1=host1 slot=4-7,0
rank 2=host2 slot=1:0
rank 3=host3 slot=1:2-3
shell$ mpirun -np 4 -hostfile hostfile <font color=red><strong>--rankfile                 rankfile</strong></font> ./my_mpi_application
  <i>or</i>
shell$ mpirun -np 4 -hostfile hostfile <font color=red><strong>--mca rmaps_rank_file_path rankfile</strong></font> ./my_mpi_application
</faqcode>

The rank file specifies a host node and _slot list_ binding for each
MPI process in your job.  Note:

<ul>
<li>Typically, the slot list is a comma-delimited list of ranges.  The
numbering is OS/BIOS-dependent and refers to the finest grained processing
units identified by the OS -- for example, cores or hardware threads.</li>
<li>Alternatively, a colon can be used in the slot list for _socket:core_
designations.  For example, _1:2-3_ means cores 2-3 of socket 1.</li>
<li>It is strongly recommended that you provide a full rankfile when
using such affinity settings, otherwise there would be a very high
probability of processor oversubscription and performance degradation.</li>
<li>The hosts specified in the rankfile must be known to mpirun,
for example via a list of hosts in a hostfile or as obtained from a
resource manager.</li>
<li>The number of processes [np] must be provided on the [mpirun] cmd
line.</li>
<li>If some processing units are not available -- e.g., due to
unpopulated sockets, idled cores, or BIOS settings -- the syntax assumes
a logical numbering in which numbers are contiguous despite the physical
gaps.  You may refer to actual physical numbers with a \"p\" prefix.
For example, _rank 4=host3 slot=<font color=red><strong>p</strong></font>3:2_
will bind rank4 to the physical socket3 : physical core2 pair.</li>
</ul>

Rank files are also discussed on the [mpirun] man page.

If you want to use the same \"slot list\" binding for each process,
presumably in cases where there is only one process per node, you can
specify this slot list on the command line rather than having to use a
rank file:

<faqcode>
shell$ mpirun -np 4 -hostfile hostfile <font color=red><strong>--slot-list 0:1 </strong></font>./my_mpi_application
</faqcode>

Remember, every process will use the same slot list.  If multiple processes
run on the same host, they will bind to the same resources -- in this case,
socket0:core1, presumably oversubscribing that core and ruining performance.

Slot lists can be used to bind to multiple slots, which would be helpful for
multi-threaded processes.  For example:

<ul>
<li>Two  threads per process: <tt>rank 0=host1 slot=0,1</tt></li>
<li>Four threads per process: <tt>rank 0=host1 slot=0,1,2,3</tt></li>
</ul>

Note that no thread will be bound to a specific slot within the list. OMPI
only supports _process_ level affinity;  each thread will be bound to all
of the slots within the list.";

/////////////////////////////////////////////////////////////////////////

$q[] = "How do I tell Open MPI to use processor and/or memory affinity
in Open MPI v1.4.x?  (How do I use the <tt>--by*</tt> and <tt>--bind-to-*</tt> options?)";

$anchor[] = "using-paffinity-v1.4";

$a[] = "Open MPI 1.4 supports all the same processor affinity controls
as <a href=\"#using-paffinity-v1.3\">Open MPI v1.3</a>, but also
supports additional command-line binding switches to [mpirun]:

<ul>
<li> [--bind-to-none]: Do not bind processes.
     *<font color=\"red\">(Default)</font>* </li>
<li> [--bind-to-core]: Bind each MPI process to a core.</li>
<li> [--bind-to-socket]: Bind each MPI process to a processor socket.</li>
<li> [--report-bindings]: Report how the launched processes were bound
     by Open MPI.</li>
</ul>

In the case of cores with multiple hardware threads (e.g., HyperThreads or
SMT), only the first hardware thread on each core is used with the
[--bind-to-*] options.  This will hopefully be fixed in the Open MPI v1.5 series.

The above options are typically most useful when used with the
following switches that indicate how processes are to be laid out in
the MPI job.  To be clear: *if the following options are used without
a [--bind-to-*] option, they only have the effect of deciding which
node a process will run on.*  Only the [--bind-to-*] options actually
bind a process to a specific (set of) hardware resource(s).

<ul>
<li> [--byslot]: Alias for [--bycore].</li>
<li> [--bycore]: When laying out processes, put sequential MPI
     processes on adjacent processor cores.  *<font
     color=\"red\">(Default)</font>* </li>
<li> [--bysocket]: When laying out processes, put sequential MPI
     processes on adjacent processor sockets.</li>
<li> [--bynode]: When laying out processes, put sequential MPI
     processes on adjacent nodes.</li>
</ul>

Note that [--bycore] and [--bysocket] lay processes out in terms of the
actual hardware rather than by some node-dependent numbering, which
is what [mpi_paffinity_alone] does as described
<a href=\"#using-paffinity-v1.2\">in this FAQ entry.</a>

Finally, there is poorly-named a \"combination\" option that effects both process
layout counting and binding: [--cpus-per-proc] (and an even more poorly-named
alias [--cpus-per-rank]).  

<blockquote>
_Editor's note:_ I feel that these options are poorly named for two
reasons: 1) \"cpu\" is not consistently defined (e.g., it may be a
core, or may be a hardware thread, or it may be something else), and
2) even though many users use the terms \"rank\" and \"MPI process\"
interchangeably, they are *NOT* the same thing.
</blockquote>

This option does the following:

<ul>
<li> Takes an integer argument (<code>ncpus</code>) that indicates how
many operating system processor IDs (which may be cores or may be
hardware threads) should be bound to each MPI process.</li>
<li> Allocates and binds [ncpus] OS processor IDs to each MPI process.
For example, on a machine with 4 processor sockets, each with 4
processor cores, each with one hardware thread:
<faqcode>
shell$ mpirun -np 8 --cpus-per-proc 2 my_mpi_process
</faqcode>
This command will bind each MPI process to <code>ncpus=</code>2
cores.  All cores on the machine will be used.</li>
<li> Note that [ncpus] cannot be more than the number of OS processor
IDs in a single processor socket.  Put loosely: [--cpus-per-proc] only
allows binding to multiple cores/threads within a single socket.</li>
</ul>

The [--cpus-per-proc] can also be used with the [--bind-to-*] options
in some cases, but this code is not well tested and may result in
unexpected binding behavior.  Test carefully to see where processes
actually get bound before relying on the behavior for production runs.
The [--cpus-per-proc] and other affinity-related command line options
are likely to be revamped some time during the <a
href=\"#using-paffinity-v1.5\">Open MPI v1.5 series</a>.";


/////////////////////////////////////////////////////////////////////////

$q[] = "How do I tell Open MPI to use processor and/or memory affinity
in Open MPI v1.5.x?";

$anchor[] = "using-paffinity-v1.5";

$a[] = "Open MPI 1.5 currently has the same processor affinity
controls as <a href=\"#using-paffinity-v1.4\">Open MPI v1.4</a>.  This
FAQ entry is a placemarker for future enhancements to the 1.5 series'
processor and memory affinity features.

Stay tuned!";

/////////////////////////////////////////////////////////////////////////

$q[] = "Does Open MPI support calling fork(), system(), or popen() in MPI processes?";

$anchor[] = "fork-warning";

$a[] = "It depends on a lot of factors, including (but not limited to):

<ul>
<li> The operating system</li>
<li> The underlying compute hardware</li>
<li> The network stack (a see <a href=\"?category=openfabrics#ofa-fork\">this FAQ entry</a> for more details)</li>
<li> Interactions with other middleware in the MPI process</li>
</ul>

In some cases, Open MPI will determine that it is not safe to
[fork()].  In these cases, Open MPI will register a [pthread_atfork()]
callback to print a warning when the process forks.  

This warning is helpful for legacy MPI applications where the current
maintainers are unaware that system() or popen() is being invoked from
an obscure subroutine nestled deep in millions of line of Fortran code
(we've seen this kind of scenario many times).

However, this atfork handler can be dangerous because there is no way
to _unregister_ an atfork handler.  Hence, packages that
dynamically open Open MPI's libraries (e.g., Python bindings for Open
MPI) may fail if they finalize and unload libmpi, but later call
fork.  The atfork system will try to invoke Open MPI's atfork handler;
nothing good can come of that.

For such scenarios, or if you simply want to disable printing the
warning, Open MPI can be set to never register the atfork handler with
the [mpi_warn_on_fork] MCA parameter.  For example:

<faqcode>
shell$ mpirun --mca mpi_warn_on_fork 0 ...
</faqcode>

Of course, systems that dlopen libmpi may not use Open MPI's [mpirun],
and therefore may need to use <a href=\"#setting-mca-params\">a
different mechanism to set MCA parameters</a>.";

/////////////////////////////////////////////////////////////////////////

$q[] = "I want to run some performance benchmarks with Open MPI.  How do I do that?";

$anchor[] = "running-perf-numbers";

$a[] = "Running benchmarks correctly is an extremely difficult task to
do correctly.  There are many, many factors to take into account; it
is *not* as simple as just compiling and running a stock benchmark
application.  This FAQ entry is by no means a definitive guide, but it
does try to offer some suggestions for generating accurate, meaningful
benchmarks.

<ol>

<li> Decide *exactly* what you are benchmarking and setup your system
accordingly.  For example, if you are trying to benchmark maximum
performance, then many of the suggestions listed below are extremely
relevant (be the only user on the systems and network in question, be
the only software running, use processor affinity, etc.).  If you're
trying to benchmark average performance, some of the suggestions below
may be less relevant.  Regardless, it is critical to *know* exactly
what you're trying to benchmark, and *know* (not guess) both your
system and the benchmark application itself well enough to understand
what the results mean. 

To be specific, many benchmark applications are not well understood
for exactly what they are testing.  There have been many cases where
users run a given benchmark application and wrongfully conclude that
their system's performance is bad -- solely on the basis of a single
benchmark that they did not understand.  Read the documentation of the
benchmark carefully, and possibly even look into the code itself to
see exactly what it is testing.  

Case in point: not all ping-pong benchmarks are created equal.  Most
users assume that a ping-pong benchmark is a ping-pong benchmark is a
ping-pong benchmark.  But this is not true; the common ping-pong
benchmarks tend to test subtly different things (e.g., NetPIPE, TCP
bench, IMB, OSU, etc.).  *Make sure you understand what your
benchmark is actually testing.* </li>

<li> Make sure that you are the *only* user on the systems where you
are running the benchmark to eliminate contention from other
processes. </li>

<li> Make sure that you are the *only* user on the entire network /
interconnect to eliminate network traffic contention from other
processes.  This is usually somewhat difficult to do, especially in
larger, shared systems.  But your most accurate, repeatable results
will be achieved when you are the only user on the entire
network. </li>

<li> Disable all services and daemons that are not being used.  Even
\"harmless\" daemons consume system resources (such as RAM) and cause
\"jitter\" by occassionally waking up, consuming CPU cycles, reading
or writing to disk, etc.  The optimum benchmark system has an absolute
minimum number of system services running. </li>

<li> Use processor affinity on multi-processor/core machines to
disallow the operating system from swapping MPI processes between
processor (and causing unnecessary cache thrashing, for
example). 

On NUMA architectures, having the processes getting bumped from one
socket to another is more expensive in terms of cache locality (with
all of the cache coherency overhead that comes with the lack of it)
than in terms of hypertransport routing (see below).

Non-NUMA architectures such as the Intel Woodcrest have a flat access
time to the South Bridge, but cache locality is still important so CPU
affinity is always a good thing to do.</li>

<li> Be sure to understand your system's architecture, particularly
with respect to the memory, disk, and network characteristics, and
test accordingly.  For example, on NUMA architectures, most common
being Opteron, the South Bridge is connected through a hypertransport
link to one CPU on one socket.  Which socket depends on the
motherboard, but it should be described in the motherboard
documentation (it's not always socket 0!).  If a process on the other
socket needs to write something to a NIC on a PCIE bus behind the
South Bridge, it needs to first hop through the first socket.  On
modern machines (circa late 2006), this hop cost usually something
like 100ns (i.e., 0.1 us).  If the socket is further away, like in a 4
or 8-socket configuration, there could potentially be more hops,
leading to more latency.</li>

<li> Compile your benchmark with the appropriate compiler optimization
flags.  With some MPI implementations, the compiler wrappers (like
<tt>mpicc</tt>, <tt>mpif90</tt>, etc.) add optimization flags automatically.
Open MPI does not.  Add <tt>-O</tt> or other flags explicitly.

<li> Make sure your benchmark runs for a sufficient amount of time.
Short-running benchmarks are generally less accurate because they take
fewer samples; longer-running jobs tend to take more samples 

<li> If your benchmark is trying to benchmark extremely short events
(such as the time required for a single ping-pong of messages):

<ul>
<li> Perform some \"warmup\" events first.  Many MPI implementations
(including Open MPI) -- and other subsystems upon which the MPI uses
-- may use \"lazy\" semantics to setup and maintain streams of
communications.  Hence, the first event (or first few events)
may well take significantly longer than subsequent events.</li>

<li> Use a high-resolution timer if possible -- [gettimeofday()] only
returns milisecond precision (sometimes on the order of several
microseconds).</li>

<li> Run the event many, many times (hundreds or thousands, depending
on the event and the time it takes).  Not only does this provide a
more samples, it may also be necessary, especially when the precision
of the timer your using may be several orders of magnitude less
precise than the even you're trying to benchmark.</li>
</ul>

<li> Decide whether you are reporting minimum, average, or maximum
numbers, and have good reasons why. </li>

<li> Accurately label and report all results.  Reproducability is a
major goal of benchmarking; benchmark results are effectively useless
if they are not precisely labeled as to exactly what they are
reporting.  Keep a log and detailed notes about the ''exact'' system
configuration that ou are benchmarking.  Note, for example, all
hardware and software characteristics (to include hardware, firmware,
and software versions as appropriate). </li>

</ol>";

/////////////////////////////////////////////////////////////////////////

$q[] = "I am getting a MPI_Win_free error from IMB-EXT -- what do I do?";

$anchor[] = "imb-win-free-error";

$a[] = "
When you run IMB-EXT with Open MPI, you'll see a
message like this:

<faqcode>
[node01.example.com:2228] *** An error occurred in MPI_Win_free
[node01.example.com:2228] *** on win 
[node01.example.com:2228] *** MPI_ERR_RMA_SYNC: error while executing rma sync
[node01.example.com:2228] *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</faqcode>

This is due to a bug in the Intel MPI Benchmarks, known to be in at
least versions v3.1 and v3.2.  Intel was notified of this bug in May
of 2009, but there hasn't been a new IMB release since then.

Here is a small patch that fixes the bug in IMB v3.2:

<faqcode>
diff -u imb-3.2-orig/src/IMB_window.c imb-3.2-fixed/src/IMB_window.c
--- imb-3.2-orig/src/IMB_window.c     2008-10-21 04:17:31.000000000 -0400
+++ imb-3.2-fixed/src/IMB_window.c      2009-07-20 09:02:45.000000000 -0400
@@ -140,6 +140,9 @@
                          c_info->rank, 0, 1, c_info->r_data_type,
                          c_info->WIN);
           MPI_ERRHAND(ierr);
           }
+          /* Added a call to MPI_WIN_FENCE, per MPI-2.1 11.2.1 */
+          ierr = MPI_Win_fence(0, c_info->WIN);
+          MPI_ERRHAND(ierr);
           ierr = MPI_Win_free(&c_info->WIN);
           MPI_ERRHAND(ierr);
           }
</faqcode>

And here is the corresponding patch for IMB v3.1:

<faqcode>
Index: IMB_3.1/src/IMB_window.c
===================================================================
--- IMB_3.1/src/IMB_window.c(revision 1641)
+++ IMB_3.1/src/IMB_window.c(revision 1642)
@@ -140,6 +140,10 @@
                          c_info->rank, 0, 1, c_info->r_data_type, c_info->WIN);
           MPI_ERRHAND(ierr);
           }
+          /* Added a call to MPI_WIN_FENCE here, per MPI-2.1
+             11.2.1 */
+          ierr = MPI_Win_fence(0, c_info->WIN);
+          MPI_ERRHAND(ierr);
           ierr = MPI_Win_free(&c_info->WIN);
           MPI_ERRHAND(ierr);
 }
</faqcode>";
