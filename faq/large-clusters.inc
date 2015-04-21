<?php
include_once("$topdir/software/ompi/current/version.inc");

$q[] = "How do I reduce startup time for jobs on large clusters?";

$anchor[] = "reducing-startup-time";

$a[] = "There are several ways to reduce the startup time on large
clusters. Some of them are described on this page. We continue to work
on making startup even faster, especially on the large clusters coming
in future years.

Open MPI v$ver_current is significantly faster and more robust than its
predecessors. We recommend that anyone running large jobs and/or on
large clusters make the upgrade to the $ver_current_dir series.  ";

/////////////////////////////////////////////////////////////////////////

$q[] = "Where should I put my libraries: Network vs. local filesystems?";

$anchor[] = "network-vs-local";

$a[] = "Open MPI itself doesn't really care where its libraries are
stored. However, where they are stored does have an impact on startup
times, particularly for large clusters, which can be mitigated
somewhat through use of Open MPI's configuration options.

Startup times will always be minimized by storing the libraries local
to each node, either on local disk or in RAM-disk. The latter is
sometimes problematic since the libraries do consume some space, thus
potentially reducing memory that would have been available for MPI
processes.

There are two main considerations for large clusters that need to
place the Open MPI libraries on networked file systems:

<ul>
<li>While DSO's are more flexible, you definitely do *not* want to use
them when the Open MPI libraries will be mounted on a network file
system! Doing so will lead to significant network traffic and delayed
start times, especially on clusters with a large number of
nodes. Instead, be sure to configure your build with
--disable-dlopen. This will include the DSO's in the main libraries,
resulting in much faster startup times.</li>

<li>Many networked file systems use automount for user level
directories, as well as for some locally administered system
directories. There are many reasons why system administrators may
choose to automount such directories. MPI jobs, however, tend to
launch very quickly, thereby creating a situation wherein a large
number of nodes will nearly simultaneously demand automount of a
specific directory. This can overload NFS servers, resulting in
delayed response or even failed automount requests.

Note that this applies to both automount of directories containing
Open MPI libraries as well as directories containing user
applications. Since these are unlikely to be the same location,
multiple automount requests from each node are possible, thus
increasing the level of traffic.</li> </ul> ";

/////////////////////////////////////////////////////////////////////////

$q[] = "Static vs shared libraries?";

$anchor[] = "static-vs-shared";

$a[] = "It is perfectly fine to use either shared or static
libraries. Shared libraries will save memory when operating multiple
processes per node, especially on clusters with high numbers of cores
on a node, but can also take longer to launch on networked file
systems (see <a
href=\"?category=large-clusters#network-vs-local\">network vs. local
filesystem FAQ entry</a> for suggestions on how to mitigate such
problems).  ";

/////////////////////////////////////////////////////////////////////////

$q[] = "How do I reduce the time to wireup OMPI's out-of-band communication system?";

$anchor[] = "listen-thread";

$a[] = "Open MPI's run-time uses an _out-of-band_ (OOB) communication
subsystem to pass messages during the launch, initialization, and
termination stages for the job. These messages allow mpirun to tell
its daemons what processes to launch, and allow the daemons in turn to
forward stdio to [mpirun], update [mpirun] on process status, etc.

The OOB uses TCP sockets for its communication, with each daemon
opening a socket back to mpirun upon startup. In a large cluster, this
can mean thousands of connections being formed on the node where
mpirun resides, and requires that mpirun actually process all these
connection requests. Mpirun defaults to processing connection requests
sequentially - so on large clusters, a backlog can be created that can
cause remote daemons to timeout waiting for a response.

Fortunately, Open MPI provides an alternative mechanism for processing
connection requests that helps alleviate this problem. Setting the MCA
parameter _oob_tcp_listen_mode_ to _listen_thread_ causes mpirun to
startup a separate thread dedicated to responding to connection
requests. Thus, remote daemons receive a quick response to their
connection request, allowing mpirun to deal with the message as soon
as possible.

This parameter can be included in the default MCA parameter file,
placed in the user's environment, or added to the mpirun command
line. See <a href=\"?category=tuning#setting-mca-params\">this FAQ
entry</a> for more details on how to set MCA parameters.  ";

/////////////////////////////////////////////////////////////////////////

$q[] = "Why is my job failing because of file descriptor limits?";

$anchor[] = "fd-limits";

$a[] = "This is a known issue in Open MPI releases prior to the v1.3
series. The problem lies in the connection topology for Open MPI's
out-of-band (OOB) communication subsystem. Prior to the 1.3 series, a
fully-connected topology was used that required every process to open
a connection to every other process in the job. This can rapidly
overwhelm the usual system limits.

There are two methods you can use to circumvent the problem. First,
upgrade to the v1.3 series if you can - this would be our recommended
approach as there are considerable improvements in that series vs. the
v1.2 one.

If you cannot upgrade and must stay with the v1.2 series, then you
need to increase the number of file descriptors in your system
limits. This commonly requires that your system administrator increase
the number of file descriptors allowed by the system itself. The
number required depends both on the number of nodes in your cluster
and the max number of processes you plan to run on each node. Assuming
you want to allow jobs that fully occupy the cluster, than the minimum
number of file descriptors you will need is roughly
(#procs_on_a_node+1) * #procs_in_the_job.

It is always wise to have a few extra just in case :-)

Note that this only covers the file descriptors needed for the
out-of-band communication subsystem.  It specifically does not address
file descriptors needed to support the MPI TCP transport, if that is
being used on your system. If it is, then additional file descriptors
will be required for those TCP sockets. Unfortunately, a simple
formula cannot be provided for that value as it depends completely on
the number of point-to-point TCP connections being made. If you
believe that users may want to fully connect an MPI job via TCP, then
it would be safest to simply double the number of file descriptors
calculated above.

This can, of course, get to be a _really_ big number...which is why
you might want to consider upgrading to the v1.3 series, where OMPI
only opens #nodes OOB connections on each node. We are currently
working on even more sparsely connected topologies for very large
clusters, with the goal of constraining the number of connections
opened on a node to an arbitrary number as specified by an MCA
parameter.";

/////////////////////////////////////////////////////////////////////////

$q[] = "I know my cluster's configuration - how can I take advantage of that knowledge?";

$anchor[] = "preconfigure-cluster";

$a[] = "Clusters rarely change from day-to-day, and large clusters
rarely change at all.  If you know your cluster's configuration, there
are several steps you can take to both reduce Open MPI's memory
footprint and reduce the launch time of large-scale applications.
These steps use a combination of build-time configuration options to
eliminate components - thus eliminating their libraries and avoiding
unnecessary component open/close operations - as well as run-time MCA
parameters to specify what modules to use by default for most users.

One way to save memory is to avoid building components that will
actually never be selected by the system. Unless MCA parameters
specify which components to open, built components are always opened
and tested as to whether or not they should be selected for use. If
you know that a component can build on your system, but due to your
cluster's configuration will never actually be selected, then it is
best to simply configure OMPI to not build that component by using the
_--enable-mca-no-build_ configure option.

For example, if you know that your system will only utilize the
\"ob1\" component of the PML framework, then you can _no_build_ all
the others. This not only reduces memory in the libraries, but also
reduces memory footprint that is consumed by Open MPI opening all the
built components to see which of them can be selected to run.

In some cases, however, a user may optionally choose to use a
component other than the default.  For example, you may want to build
all of the _routed_ framework components, even though the vast
majority of users will simply use the default _binomial_
component. This means you have to allow the system to build the other
components, even though they may rarely be used.

You can still save launch time and memory, though, by setting the
_routed=binomial_ MCA parameter in the default MCA parameter
file. This causes OMPI to not open the other components during
startup, but allows users to override this on their command line or in
their environment so no functionality is lost - you just save some
memory and time.

Rather than have to figure this all out by hand, we are working on a
new OMPI tool called _ompi-profiler_. When run on a cluster, it will
tell you the selection results of all frameworks - i.e., for each
framework on each node, which component was selected to run - and a
variety of other information that will help you tailor Open MPI for
your cluster.

Stay tuned for more info as we continue to work on ways
to improve your performance...";
