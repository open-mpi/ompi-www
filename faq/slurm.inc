<?php
include_once("$topdir/software/ompi/current/version.inc");

$q[] = "How do I run jobs under Slurm?";

$anchor[] = "slurm-run-jobs";

$a[] = "The short answer is yes, provided you configured OMPI
[--with-slurm]. You can use [mpirun] as normal, or directly launch
your application using srun if OMPI is configured per
<a
href=\"?category=slurm#slurm-direct-srun-mpi-apps\">this FAQ entry</a>.

The longer answer is that Open MPI supports launching parallel jobs in
all three methods that Slurm supports (you can find more info about
Slurm specific recommendations on the <a href=\"https://slurm.schedmd.com/mpi_guide.html#open_mpi\"
>SchedMD web page</a>:

<ol>
<li> Launching via \"[salloc ...]\"</li>
<li> Launching via \"[sbatch ...]\"</li>
<li> Launching via \"[srun -n X my_mpi_application]\"</li>
</ol>

Specifically, you can launch Open MPI's [mpirun] in an interactive
Slurm allocation (via the [salloc] command) or you can submit a
script to Slurm (via the [sbatch] command), or you can \"directly\"
launch MPI executables via [srun].

Open MPI automatically obtains both the list of hosts and how many
processes to start on each host from Slurm directly.  Hence, it is
unnecessary to specify the [--hostfile], [--host], or [-np] options to
[mpirun].  Open MPI will also use Slurm-native mechanisms to launch
and kill processes ([rsh] and/or [ssh] are not required).

For example:

<geshi bash>
# Allocate a Slurm job with 4 nodes
shell$ salloc -N 4 sh
# Now run an Open MPI job on all the nodes allocated by Slurm
# (Note that you need to specify -np for the 1.0 and 1.1 series;
# the -np value is inferred directly from Slurm starting with the
# v1.2 series)
shell$ mpirun my_mpi_application
</geshi>

This will run the 4 MPI processes on the nodes that were allocated by
Slurm.  Equivalently, you can do this:

<geshi bash>
# Allocate a Slurm job with 4 nodes and run your MPI application in it
shell$ salloc -N 4 mpirun my_mpi_aplication
</geshi>

Or, if submitting a script:

<geshi bash>
shell$ cat my_script.sh
#!/bin/sh
mpirun my_mpi_application
shell$ sbatch -N 4 my_script.sh
srun: jobid 1234 submitted
shell$
</geshi>";

/////////////////////////////////////////////////////////////////////////

$q[] = "Does Open MPI support \"srun -n X my_mpi_application\"?";

$anchor[] = "slurm-direct-srun-mpi-apps";

$a[] = "Yes, if you have configured OMPI [--with-pmi=foo], where foo is
the path to the directory where pmi.h/pmi2.h is located. Slurm (&gt; 2.6,
&gt; 14.03) installs PMI-2 support by default.

Older versions of Slurm install PMI-1 by default. If you desire PMI-2,
Slurm requires that you manually install that support. When the
[--with-pmi] option is given, OMPI will automatically determine if PMI-2
support was built and use it in place of PMI-1.";

/////////////////////////////////////////////////////////////////////////

$q[] = "I use Slurm on a cluster with the OpenFabrics network stack.  Do I need to do anything special?";

$anchor[] = "slurm-with-ofed";

$a[] = "Yes.  You need to ensure that Slurm sets up the locked memory
limits properly.  Be sure to see <a
href=\"?category=openfabrics#ib-locked-pages\">this FAQ entry about
locked memory</a> and <a
href=\"?category=openfabrics#ib-locked-pages-more\">this FAQ entry for
references about Slurm</a>.";

/////////////////////////////////////////////////////////////////////////
$q[] = "My job fails / performs poorly when using mpirun under Slurm 20.11";

$anchor[] = "slurm-20.11-mpirun";

$a[] = "Slurm 20.11 changed its default behavior that will affect [mpirun]'s behavior in all versions of Open MPI prior to v4.0.6.

*NOTE:* As of January 2021, the situation regarding Slurm's change to
 its default behavior remains somewhat in flux. The following
 description represents a point-in-time explanation of the impact of
 the change on OMPI and how one can compensate for the problems. Those
 interested in keeping up-to-date on the situation are referred to the
 SchedMD bug tracker (e.g., <a
 href=\"https://bugs.schedmd.com/show_bug.cgi?id=10383\">Issue
 10383</a>, <a
 href=\"https://bugs.schedmd.com/show_bug.cgi?id=10413\">Issue
 10413</a>, and <a
 href=\"https://bugs.schedmd.com/show_bug.cgi?id=10489\">Issue
 10489</a>). This FAQ entry will be updated if/when a final resolution
 within the Slurm community is achieved.

When you use [mpirun] to launch an Open MPI application inside of a
Slurm job (e.g., inside of an [salloc] or [sbatch]), [mpirun] actually
uses [srun] under the covers to launch Open MPI helper daemons on the
nodes in your Slurm allocation.  Those helper daemons are then used to
launch the individual MPI processes.

Starting with Slurm 20.11, by default, [srun] will associate a single
Linux virtual processor with each Slurm task.

More concretely: the Slurm daemon on each node in the Slurm allocation will create a Linux cgroup containing a single Linux virtual processor, and will launch the Open MPI helper daemon into that cgroup.  Consequently, the Open MPI helper daemon _and all MPI processes that are subsequently launched by that Open MPI helper daemon_ will be restricted to running on the single Linux virtual processor contained in the Slurm-created cgroup.

Put simply: in a given Slurm job, the Open MPI helper daemon and all MPI processes on the same node will be restricted to running on a single core (or hardware thread).

Starting with Open MPI v4.0.6, [mpirun] will automatically set the environment variable [SLURM_WHOLE] to [1] before invoking [srun], which will tell Slurm to return to its prior behavior of creating a cgroup that contains all the Linux virtual processors that were allocated to the Slurm job.  This allows the Open MPI helper daemon and all of the MPI processes to spread out across the cores / hardware threads that were allocated to the Slurm job (vs. clumping them all together on a single core / hardware thread) in accordance with whatever binding directives you passed to [mpirun].

If you are using a version of Open MPI before v4.0.6 and SLURM 20.11
or later, you should set the [SLURM_WHOLE] environment variable to [1]
before invoking [mpirun].  For example:

<geshi bash>
shell$ export SLURM_WHOLE=1
shell$ mpirun my_mpi_application
</geshi>";

$q[] = "My job fails / performs poorly when using srun under Slurm 20.11 (and later)";

$anchor[] = "slurm-20.11-srun";

$a[] = "Similar to <a href=\"#slurm-20.11-mpirun\">the Slurm 20.11 issue with [mpirun]</a>, applications that use [srun] to directly launch Open MPI applications _may_ experience a change in behavior compared to prior versions of Slurm.

The consequence of the change in Slurm's default behavior is that if your MPI job requires more than one Linux virtual processor (i.e., more than one core and/or hardware thread), you _may_ need to use additional CLI parameters (e.g., adding [--cpus-per-task=N] to [srun]) to tell Slurm to allocate additional resources to each task in your Slurm job.  For example, if you have a multi-threaded MPI application that benefits from utilizing multiple hardware cores and/or threads, you may need to tell [srun] to allocate more than one Linux virtual processor to each MPI process.

*NOTE:* The actual behavior you encounter is determined by a complex combination of Slurm defaults, defaults set by your system administrator in the Slurm configuration file, and your environment. Fully explaining all the details of these interactions is beyond the scope of the OMPI FAQ - our purpose here is to simply provide users with a high-level explanation should they encounter the problem, and hopefully point them in the direction of potential solutions.

Consult your system administrator, the Slurm bug reports referenced above, and/or the Slurm documentation for more details.";
