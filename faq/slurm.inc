<?php
include_once("$topdir/software/ompi/current/version.inc");

$q[] = "How do I run jobs under SLURM?";

$anchor[] = "slurm-run-jobs";

$a[] = "The short answer is yes, provided you configured OMPI
[--with-slurm]. You can use [mpirun] as normal, or directly launch
your application using srun if OMPI is configured per
<a
href=\"?category=slurm#slurm-direct-srun-mpi-apps\">this FAQ entry</a>.

The longer answer is that Open MPI supports launching parallel jobs in
all three methods that SLURM supports:

<ol>
<li> Launching via \"[salloc ...]\": supported (older versions of SLURM used \"[srun -A ...]\")</li>
<li> Launching via \"[sbatch ...]\": supported (older versions of SLURM used \"[srun -B ...]\")</li>
<li> Launching via \"[srun -n X my_mpi_application]\"</li>
</ol>

Specifically, you can launch Open MPI's [mpirun] in an interactive
SLURM allocation (via the [salloc] command) or you can submit a
script to SLURM (via the [sbatch] command), or you can \"directly\"
launch MPI executables via [srun].

Open MPI automatically obtains both the list of hosts and how many
processes to start on each host from SLURM directly.  Hence, it is
unnecessary to specify the [--hostfile], [--host], or [-np] options to
[mpirun].  Open MPI will also use SLURM-native mechanisms to launch
and kill processes ([rsh] and/or [ssh] are not required).

For example:

<geshi bash>
# Allocate a SLURM job with 4 nodes
shell$ salloc -N 4 sh
# Now run an Open MPI job on all the nodes allocated by SLURM
# (Note that you need to specify -np for the 1.0 and 1.1 series;
# the -np value is inferred directly from SLURM starting with the
# v1.2 series)
shell$ mpirun my_mpi_application
</geshi>

This will run the 4 MPI processes on the nodes that were allocated by
SLURM.  Equivalently, you can do this:

<geshi bash>
# Allocate a SLURM job with 4 nodes and run your MPI application in it
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

$q[] = "I use SLURM on a cluster with the OpenFabrics network stack.  Do I need to do anything special?";

$anchor[] = "slurm-with-ofed";

$a[] = "Yes.  You need to ensure that SLURM sets up the locked memory
limits properly.  Be sure to see <a
href=\"?category=openfabrics#ib-locked-pages\">this FAQ entry about
locked memory</a> and <a
href=\"?category=openfabrics#ib-locked-pages-more\">this FAQ entry for
references about SLURM</a>.";

/////////////////////////////////////////////////////////////////////////

$q[] = "Any issues with Slurm 2.6.3?";

$anchor[] = "slurm-2.6.3-issue";

$a[] = "Yes. The Slurm 2.6.3, 14.03 releases have a bug in their PMI-2
support.

For the slurm-2.6 branch, it is recommended to use the latest version
(2.6.9 as of 2014/4), which is known to work properly with pmi2.

For the slurm-14.03 branch, the fix will be in 14.03.1.";
