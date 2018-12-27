<?php
# Question: What is this 'parent_name' thing?
# Answer: This identifies an entry as a child of other entries. If
#   'parent_name' is blank for an entry, it means 1 of 2 things:
#       1. it is the parent of some other entries
#       2. It is a top-level FAQ page
#    The way we tell the difference between these two is that if any other
#    entries refer to it in the 'parent_name' field, then it is a parent.
#    Otherwise it is just another FAQ page
#    Note that this is a simple 2 level hierarchy implemented, i.e.
#    children cannot also be parents.

$titles[] = "Rollup of ALL FAQ categories and questions";
$short_titles[] = "Rollup/ALL";
$names[] = "all";
$parent_name[] = "";

$titles[] = "General information about the Open MPI Project";
$short_titles[] = "General information";
$names[] = "general_parent";
$parent_name[] = "";

    $titles[] = "General information about the Open MPI Project";
    $short_titles[] = "General information";
    $names[] = "general";
    $parent_name[] = "general_parent";

    $titles[] = "What kinds of systems / networks / run-time environments does Open MPI support?";
    $short_titles[] = "Supported systems";
    $names[] = "supported-systems";

    $parent_name[] = "general_parent";
    $titles[] = "Contributing to the Open MPI project";
    $short_titles[] = "Contributing";
    $names[] = "contributing";

    $parent_name[] = "general_parent";
    $titles[] = "Developer-level technical information on the internals of Open MPI";
    $short_titles[] = "Developer information";
    $names[] = "developers";
    $parent_name[] = "general_parent";

    $titles[] = "System administrator-level technical information about Open MPI";
    $short_titles[] = "Sysadmin information";
    $names[] = "sysadmin";
    $parent_name[] = "general_parent";

    $titles[] = "Fault tolerance for parallel MPI jobs";
    $short_titles[] = "Fault Tolerance";
    $names[] = "ft";
    $parent_name[] = "general_parent";

$titles[] = "Building";
$short_titles[] = "Building";
$names[] = "build_parent";
$parent_name[] = "";

    $titles[] = "Building Open MPI";
    $short_titles[] = "Building Open MPI";
    $names[] = "building";
    $parent_name[] = "build_parent";

    $titles[] = "Removed MPI constructs";
    $short_titles[] = "Removed MPI constructs";
    $names[] = "mpi-removed";
    $parent_name[] = "build_parent";

    $titles[] = "Compiling MPI applications";
    $short_titles[] = "Compiling MPI apps";
    $names[] = "mpi-apps";
    $parent_name[] = "build_parent";

$titles[] = "Running Jobs with Open MPI";
$short_titles[] = "Running Jobs";
$names[] = "run_parent";
$parent_name[] = "";

    $titles[] = "Running MPI jobs";
    $short_titles[] = "Running MPI jobs";
    $names[] = "running";
    $parent_name[] = "run_parent";

    $titles[] = "Troubleshooting building and running MPI jobs";
    $short_titles[] = "Troubleshooting";
    $names[] = "troubleshooting";
    $parent_name[] = "run_parent";

    $titles[] = "Debugging applications in parallel";
    $short_titles[] = "Parallel debugging";
    $names[] = "debugging";
    $parent_name[] = "run_parent";

    $titles[] = "Running jobs under rsh/ssh";
    $short_titles[] = "rsh/ssh";
    $names[] = "rsh";
    $parent_name[] = "run_parent";

    $titles[] = "Running jobs under BProc";
    $short_titles[] = "BProc";
    $names[] = "bproc";
    $parent_name[] = "run_parent";

    $titles[] = "Running jobs under Torque / PBS Pro";
    $short_titles[] = "Torque / PBS Pro";
    $names[] = "tm";
    $parent_name[] = "run_parent";

    $titles[] = "Running jobs under Slurm";
    $short_titles[] = "Slurm";
    $names[] = "slurm";
    $parent_name[] = "run_parent";

    $titles[] = "Running jobs under SGE";
    $short_titles[] = "SGE";
    $names[] = "sge";
    $parent_name[] = "run_parent";

    $titles[] = "Running on large clusters";
    $short_titles[] = "Large clusters";
    $names[] = "large-clusters";
    $parent_name[] = "run_parent";

$titles[] = "Tuning";
$short_titles[] = "Tuning";
$names[] = "tune_parent";
$parent_name[] = "";

    $titles[] = "General run-time tuning";
    $short_titles[] = "General tuning";
    $names[] = "tuning";
    $parent_name[] = "tune_parent";

    $titles[] = "Tuning the run-time characteristics of MPI sm communications";
    $short_titles[] = "Shared memory/Vader";
    $names[] = "sm";
    $parent_name[] = "tune_parent";

    $titles[] = "Tuning the run-time characteristics of MPI TCP communications";
    $short_titles[] = "TCP";
    $names[] = "tcp";
    $parent_name[] = "tune_parent";

    $titles[] = "Tuning the run-time characteristics of MPI Myrinet communications";
    $short_titles[] = "Myrinet";
    $names[] = "myrinet";
    $parent_name[] = "tune_parent";

    $titles[] = "Tuning the run-time characteristics of MPI OpenFabrics communications (InfiniBand, RoCE and iWARP)";
    $short_titles[] = "OpenFabrics";
    $names[] = "openfabrics";
    $parent_name[] = "tune_parent";

    # The "infiniband" FAQ category got renamed to "openfabrics".  Putting
    # blank title / short title in for this entry will tell faq_engine
    # that it is not to be displayed in the menu.
    $titles[] = "";
    $short_titles[] = "";
    $names[] = "infiniband";
    $parent_name[] = "";

    $titles[] = "Tuning the run-time characteristics of MPI UDAPL communications";
    $short_titles[] = "UDAPL";
    $names[] = "udapl";
    $parent_name[] = "tune_parent";

    $titles[] = "Performance analysis tools";
    $short_titles[] = "Performance tools";
    $names[] = "perftools";
    $parent_name[] = "tune_parent";

    $titles[] = "Tuning the OMPIO parallel I/O component";
    $short_titles[] = "OMPIO";
    $names[] = "ompio";
    $parent_name[] = "tune_parent";

$titles[] = "Platform Specific Questions";
$short_titles[] = "Platform";
$names[] = "platform_parent";
$parent_name[] = "";

    $titles[] = "OS X";
    $short_titles[] = "OS X";
    $names[] = "osx";
    $parent_name[] = "platform_parent";

    $titles[] = "AIX (unsupported)";
    $short_titles[] = "AIX (unsupported)";
    $names[] = "aix";
    $parent_name[] = "platform_parent";

$titles[] = "Contributed Software";
$short_titles[] = "Contrib";
$names[] = "contrib_parent";
$parent_name[] = "";

    $titles[] = "VampirTrace Integration";
    $short_titles[] = "VampirTrace";
    $names[] = "vampirtrace";
    $parent_name[] = "contrib_parent";

$titles[] = "Languages";
$short_titles[] = "Languages";
$names[] = "langs_parent";
$parent_name[] = "";

    $titles[] = "Java";
    $short_titles[] = "Java";
    $names[] = "java";
    $parent_name[] = "langs_parent";

$titles[] = "CUDA-aware Support";
$short_titles[] = "CUDA-aware";
$names[] = "cuda_parent";
$parent_name[] = "";

    $titles[] = "Building CUDA-aware Open MPI";
    $short_titles[] = "Building CUDA-aware";
    $names[] = "buildcuda";
    $parent_name[] = "cuda_parent";

    $titles[] = "Running CUDA-aware Open MPI";
    $short_titles[] = "Running CUDA-aware";
    $names[] = "runcuda";
    $parent_name[] = "cuda_parent";
