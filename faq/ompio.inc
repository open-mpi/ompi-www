<?php
include_once("$topdir/software/ompi/current/version.inc");

$q[] = "What is the OMPIO?";

$anchor[] = "what-is-ompio";

$a[] = "OMPIO is an implementation of the MPI I/O functions defined in version
two of the Message Passing Interface specification.  The main goals of OMPIO
are three fold.  First, it increases the modularity of the parallel I/O
library by separating MPI I/O functionality into sub-frameworks.  Second, it
allows frameworks to utilize different run-time decision algorithms to
determine which module to use in a particular scenario, enabling non-file
system specific decisions.  Third, it improves the integration of parallel I/O
functions with other components of Open MPI, most notably the derived data
type engine and the progress engine. The integration with the derived data
type engine allows for faster decoding of derived data types and the usage of
optimized data type to data type copy operations.

OMPIO is fundamentally a component of the [io] framework in Open MPI. Upon open
a file, the OMPIO component initiallizes a number of sub-frameworks and their
components, namely

<ul>
<li> *fs framework*: responsible for all file management operations </li>
<li> *fbtl framework*: support for individual blocking and non-blocking
I/O operations</li>
<li> *fcoll framework*: support for collective blocking and non-blocking
I/O operations</li>
<li> *sharedfp framework*: support for all shared file pointer operations.</li>
</ul>
";


/////////////////////////////////////////////////////////////////////////

$q[] = "How can I use OMPIO?";

$anchor[] = "how-can-i-use-omio";

$a[] = "OMPIO is included in all Open MPI releases starting from version
1.7. Note, that in the 1.7, 1.8, and 1.10 series it is however not the default
library used for parallel I/O operations, and thus has to be explicitely
requested by the end-user, e.g.

<geshi bash>
mpirun --mca io ompio -np 64 ./myapplication
</geshi>

OMPIO is the default MPI I/O library used by Open MPI in the current nightly
builts and is scheduled to be the default MPI I/O library in the upcoming 
2.x release of Open MPI. Note, that the version of OMPIO available in the 1.7, 1.8
and 1.10 series is known to have some limitations. ";

/////////////////////////////////////////////////////////////////////////

$q[] = "How do I know what MCA parameters are available for tuning the
performance of OMPIO?";

$anchor[] = "ompio-params";

$a[] = "The [ompi_info] command can display all the parameters available for the
[ompio] io, all fcoll, fs, and sharedfp components:

<geshi bash>
shell$ ompi_info --param io       ompio
shell$ ompi_info --param fcoll    all 
shell$ ompi_info --param fs       all
shell$ ompi_info --param sharedfp all 
</geshi>";

/////////////////////////////////////////////////////////////////////////

$q[] = "How can I choose the right component for a sub-framework of OMPIO";

$anchor[] = "more-ompio";

$a[] = " The OMPIO architecture is designed around sub-frameworks, which allow
to develop relatively small of code optimized for a particular
environment, application or infrastructure.  Although significant
efforts have been invested into making good decisions for default
values and switching points between components, users and/or system
administrators might occasionally want to tune the selection logic of
the components and force the utilization of a particular component.

The simplest way to force the usage of a component is to simply restrict the
list of available components for that framework. For example, an application
wanting to use the [dynamic] fcoll component simply has to pass the name of
the component as a value to the corresponding MCA parameter during mpirun or
any other mechanism available in Open MPI to influence a parameter value, e.g.

<geshi bash>
mpirun --mca fcoll dynamic -np 64 ./myapplication
</geshi>

fs and fbtl components are typically chosen based on the file system
type utilized, e.g. the [pvfs2] component is chosen when the file is
located on an PVFS2 file system, the [lustre] component is chosen for
Lustre file systems etc. 

The fcoll framework provides four different implementation, which
provide different levels of data reorganization across processes.
[two_phase], [dynamic] segmentation, [static]
segmentation and [individual] provide decreasing
communication costs during the shuffle phase of the collective I/O
operations (in the order listed here), but provide also decreasing
contiguity guarantuees of the data items before the aggregators
read/write data to/from the file.  The current decision logic in OMPIO
is using the file view provided by the application as well as file
system level characteristics (stripe width of the file system) in the
selection logic of the fcoll framework.

The sharedfp framework provides different implementation of the
shared file pointer operations depending on file system features
(specifically: support for file locking) ([lockedfile]), locality of the MPI
processes in the communicator that has been used to open the file ([sm]), or
guarantuess by the application on using only a subset of the available
functionality (i.e. write operations only)([individual]). Furthermore, a
component which utilizes an additional process that is spawned upon opening a
file ([addproc]) is available in the nightly builts, but not in the v2.x series.";

/////////////////////////////////////////////////////////////////////////

$q[] = "How can I tune OMPIO parameters to improve performance?";

$anchor[] = "even-more-ompio";

$a[] = "The most important parameters influencing the performance of an I/O
operation are listed below:

<ul>
<li> [io_ompio_cycle_buffer_size]:
Data size issued by individual reads/writes per call. By default, an
individual read/write operation will be executed as one chunk. Splitting the
operation up into multiple, smaller chunks can lead to performance
improvements in certain scenarios.</li>

<li> [io_ompio_bytes_per_agg]:
Size of temporary buffer for collective I/O operations on aggregator
processes. Default value is 32MB.  Tuning this parameter has a very high
impact on the performance of collective operations (See recommendations for
tuning collective operations below).</li>

<li> [io_ompio_num_aggregators]:
number of aggregators used in collective I/O operations.  Setting this
parameter to a value larger zero disables the internal automatic aggregator
selection logic of OMPIO.  Tuning this parameter has a very high impact on the
performance of collective operations (See recommendations for tuning
collective operations below). </li>

<li> [io_ompio_grouping_option]: 
algorithm used to automatically decide the number of aggregators
used. Applications working with regular 2-D or 3-D data decomposition
can try changing this parameter to 4 (hybrid) algorithm.
</ul>";

/////////////////////////////////////////////////////////////////////////

$q[] = "What are the main parameters of the fs framework and components?";

$anchor[] = "fs-parametesrs";

$a[] = "
The main parameters of the fs components allow to manipulate the layout of a
new file on a parallel file system. 

<ul>
<li> [fs_pvfs2_stripe_size]: sets the number of storage servers for
a new file on a PVFS2 file system. If not set, system default will be
used. Note, that this parameter can also be set through the
*stripe_size* Info object.</li>

<li> [fs_pvfs2_stripe_width]:sets the size of an individual block
for a new file on a PVFS2 file system. If not set, system default will
be used. Note, that this parameter can also be set through the
*stripe_width* Info object. </li>

<li> [fs_lustre_stripe_size]: sets the number of storage servers for
a new file on a Lustre file system. If not set, system default will be
used. Note, that this parameter can also be set through the
*stripe_size* Info object.</li>

<li> [fs_lustre_stripe_width]:sets the size of an individual block
for a new file on a Lustre file system. If not set, system default will
be used. Note, that this parameter can also be set through the
*stripe_width* Info object. </li>
</ul>
.";

////////////////////////////////////////////////////////////////////////
$q[] = "What are the main parameters of the fbtl framework and components?";

$anchor[] = "fbtl-parametesrs";

$a[] = "No performance relevant parameters are available for the fbtl
components at this point.";

/////////////////////////////////////////////////////////////////////////
$q[] = "What are the main parameters of the fcoll framework and components?";

$anchor[] = "fcoll-parametesrs";

$a[] = "The design of the fcoll frameworks maximizes the utilization of
parameters of the OMPIO component, in order to minimize the number of similar
MCA parameter in each component. For example, the 
[two_phase], [dynamic], [static] components all retrieve the 
*io_ompio_bytes_per_agg* parameter to define the collective buffer size and 
the *io_ompio_num_aggregators* parameter to force the utilization of a given
number of aggregators.";

/////////////////////////////////////////////////////////////////////////
$q[] = "What are the main parameters of the sharedfp framework and components?";

$anchor[] = "sharedfp-parametesrs";

$a[] = "No performance relevant parameters are available for the sharedfp
components at this point.";

/////////////////////////////////////////////////////////////////////////
$q[] = "How do I tune collective I/O operations?";

$anchor[] = "coll-io-tuning";

$a[] = "The most influential parameter that can be tuned in advance is the
*io_ompio_bytes_per_agg* parameter of the [ompio] component. This parameter is
essential for the selection of the collective I/O component as well for
determining the optimal number of aggregators for a collective I/O
operation. It is a file system specific value, independent of the application
scenario. To determine the correct value on your system, take an I/O
benchmark, e.g. the IMB or IOR benchmark, and run an individual, single
process write test. E.g. for IMB

<geshi bash>
mpirun -np 1 ./IMB-IO S_write_indv
</geshi>

For IMB, use the values obtained for AGGREGATE test cases. Plot the bandwidth
over the message length. The recommended value for 
*io_ompio_bytes_per_agg* is the smallest message length which
achieves (close to) maximum bandwidth from that processes perspective. (Note: Make sure
that the *io_ompio_cycle_buffer_size* parameter is set to -1 when
running this test, which is its default value).  The value of
*io_ompio_bytes_per_agg* could be set by system administrators
into the system wide Open MPI configuration file, or by users
individually. See ". 
"<a HREF=\"http://www.open-mpi.org/faq/?category=tuning#setting-mca-params\">"
." the FAQ entry </A> on setting MCA parameters. for all details.

For more exhaustive tuning of I/O parameters, we recommend the
utilization of the " . "<A
HREF=\"http://www.open-mpi.org/projects/otpo/\">" ." Open Tool for Parameter
Optimization (OTPO)</A> a tool specifically designed to explore the
MCA parameter space of Open MPI.";

/////////////////////////////////////////////////////////////////////////
$q[] = "When should I use the [individual] sharedfp component and what are its
limitations?";

$anchor[] = "sharedfp-individual";

$a[] = "The [individual] sharedfp component provides an approximation of
shared file pointer operations that can be used for * write operations
only*. It is only recommended in scenarios, where neither the [sm] nor the
[lockedfile] component can be used, e.g. due to the fact that more than one
node are being used and the file system does not support locking.

Conceptually, each process writes the data of a write_shared operation into a
separate file along with a time stamp. In every collective operation (latest
in file_close), data from all individual files are merged into the actual
output file, using the time stamps as the main criteria.

The component has certain limitations and restrictions, such as its relience on the
synchronization accuracy of the clock on the cluster to determine the order
between entries in the final file, which might lead to some deviations
compared to the actual calling sequence.

If you need support for shared file pointers operations beyond one node, for
read and write operations, on a file system not supporting file locking,
consider using the [addproc] component, which spawns an additional process
upon opening a file.";

/////////////////////////////////////////////////////////////////////////
$q[] = "What other features of OMPIO are available?";

$anchor[] = "ompio-other-features";

$a[] = "OMPIO has a number of additional features, mostly directed
towards developers, which could occasionally also be useful to interested
end-users. These can typically be controlled through MCA parameters.
c

<ul>
<li> [io_ompio_sharedfp_lazy_open]
By default, [ompio] does not establish the necessary data structures required
for shared file pointer operations during file_open. It delays generating
these data structures until the first utilization of a shared file pointer
routine. This is done mostly to minimize the memory footprint of [ompio], and
due to the fact that shared file pointer operations are rarely used compared
to the other functions. Setting this parameter to 0 disables this
optimization.</li>

<li> [io_ompio_coll_timing_info]
Setting this parameter will lead to a short report upon closing a file
indicating the amount of time spent in communication and I/O operations of
collective I/O operations only.</li>

<li> [io_ompio_record_file_offset_info]
Setting this parameter will report neighborhood relationship of processes
based on the file view used. This is occasionally important for understanding
performance characteristics of I/O operations.  Note, that using this features
requires an additional compile time flag when compiling [ompio].

The output file generated as a result of this flag provides the access pattern
of processes to the file recorded as neighborhood relationships of processes
as a matrix. For example, if the first four bytes of a file is being accessed
by process 0, the next four bytes by process 1, processes 0 and 1 are said to
have a neighborhood relationship since they access neighboring elements of the file.
For each neighborhood relation detected in the file, the value for the
corresponding pair of processes is increased by one.

Data is provided in compressed row storage format. To minimize the amount of
data writting using this feature, only non-zero values are being displayed.
The first row in the output file indicates the number of non-zero elements in
the matrix, the second number is the number of elements in the row index. 
The third row of the output file gives all the column
indexes. The fourth row lists all the values and the fifth row gives the row
index. A row index represents the position in the value array where a new row
starts.</li>
</ul>";

/////////////////////////////////////////////////////////////////////////
$q[] = "Known limitations";

$anchor[] = "ompio-known-limitations";

$a[] = "OMPIO in version 2.x of Open MPI implements most of the I/O
functionality of the MPI specification. There are however two not very
commonly used functions that are not implemented as of today:
<ul>
<li> switching from the relaxed consistency semantics of MPI to stricter, sequential
consistency through the MPI_File_set_atomiticity functions</li>
<li> Using user defined data representations are not supported</li>
</ul>";


