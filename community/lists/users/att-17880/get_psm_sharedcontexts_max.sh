#!/bin/sh
# Copyright (c) 2011. QLogic Corporation. All rights reserved.

# This script is used to calculate the number of contexts to be used
# for this job on a particular node. It is used when running MPI jobs
# over PSM. There is no need to use this script for:
#   - serial jobs
#   - threaded jobs (eg. OpenMP) with no MPI component
#   - MPI jobs running entirely within a node (ie. over shared memory)
#   - MPI jobs that do not run over PSM (eg. over IB Verbs or sockets)
# Running the script and setting the $PSM_SHAREDCONTEXTS_MAX environment
# variable will simply have no effect in these cases.

# The script takes one optional parameter which is the number of MPI 
# processes (MPI ranks) that this job will run on this node. This 
# could be provided by the job scheduler or MPI environment.
# If this is not specified the value will be taken from one of the
# following environment variables (highest priority first):
#    $OMPI_COMM_WORLD_LOCAL_SIZE
#    $MPI_LOCALNRANKS 
#    $PSC_MPI_PPN
# This value must be provided by one of these mechanisms for the script 
# to compute its result. The computed value is provided on stdout, and 
# the script also returns an error code which will be 0 for success 
# and non-zero for failure.

# On success the environment variable $PSM_SHAREDCONTEXTS_MAX should be
# set to the computed value, otherwise it should not be set. This must be
# done for each MPI process in the job so that each MPI process gets the
# right value for $PSM_SHAREDCONTEXTS_MAX. Note that the same value of
# $PSM_SHAREDCONTEXTS_MAX will be used for every MPI process on the same node,
# but different values could be computed on other nodes depending on the
# number of processes, cores and contexts on each node.

# Typical usage in a shell script is as follows:
#
# contexts=`./get_psm_sharedcontexts_max.sh`
# if [ "$?" = "0" ] ; then
#   export PSM_SHAREDCONTEXTS_MAX=$contexts
# fi
#
# When using a job scheduler, this would run as a "pre-execution" script.

# The following 3 variables may be over-ridden here if desired, otherwise
# they will be automatically computed.

# The number of processes per context. This script will calculate an
# appropriate ratio based on the number of cores divided by the number
# of contexts. You may over-ride it here if you wish to force a specific
# value. The value must be 1, 2, 3 or 4 since these are the context 
# sharing ratios supported by PSM and the TrueScale architecture. The
# various values are:
#   1 = no context sharing, every process will have its own context giving
#       maximum performance for that job.
#   2 = 2-way context sharing, optimize for more performance, fewer jobs
#   3 = 3-way context sharing, middle ground between 2 and 4
#   4 = 4-way context sharing, optimize for most jobs
processes_per_context=""

# The number of cores on this node. This will be automatically calculated
# from /proc/cpuinfo but you may enter the number here if it is known
# and constant across all nodes.
cores=""	

# The number of user contexts provided by adapters on this node. This will
# be automatically calculated by detecting the adapter type, but you may
# enter the number here if it is known and constant across all nodes.
contexts=""

# Set this variable if you wish to get debugging output from the script.
debug=""

# The shared contexts ratio must be 1 (no sharing), 2, 3 or 4.
min_processes_per_context=1	# do not decrease this
max_processes_per_context=4	# do not increase this

# This is the number of MPI processes that this job will run on this node.
processes=""

# Get the number of local processes in this job.
if [ "$#" -ge 1 ] ; then
  processes=$1
elif [ x"$OMPI_COMM_WORLD_LOCAL_SIZE" != x"" ] ; then
  processes="$OMPI_COMM_WORLD_LOCAL_SIZE"
elif [ x"$MPI_LOCALNRANKS" != x"" ] ; then
  processes="$MPI_LOCALNRANKS"
elif [ x"$PSC_MPI_PPN" != x"" ] ; then
  processes="$PSC_MPI_PPN"
fi
echo `hostname`":$processes"
# Get the number of cores on this node (unless already specified).
if [ x"$cores" = x"" ] ; then
  cores=`grep -c "^processor" /proc/cpuinfo`
fi

# Get the number of user contexts on this node (unless already specified).
if [ x"$contexts" = x"" ] ; then
  contexts=0
  for i in `seq 0 9` ; do
    if [ -f /sys/class/infiniband/qib${i}/nctxts ] ; then
      nctxts=`cat /sys/class/infiniband/qib${i}/nctxts`
      contexts=`expr $contexts + $nctxts`
    fi
  done
  if [ $contexts == 0 ] ; then
    contexts=`ipath_control -iv 2> /dev/null | awk ' \
      (substr($7,1,1) == "3") { contexts += 8; } \
      (substr($7,1,1) == "4") { contexts += 4; } \
      (substr($7,1,1) == "5") { contexts += 16; } \
      (substr($7,1,1) == "6") { contexts += 16; } \
      BEGIN { contexts = 0 } \
      END { print contexts }' 2> /dev/null`
  fi
fi

# Output debugging information.
if [ x"$debug" != x"" ] ; then
  echo "# number of processes is $processes" 1>&2
  echo "# number of cores is $cores" 1>&2
  echo "# number of contexts is $contexts" 1>&2
  echo "# min_processes_per_context is $min_processes_per_context" 1>&2
  echo "# max_processes_per_context is $max_processes_per_context" 1>&2
fi

# Make sure that we have all the information needed.
if [ x"$processes" = x"" -o x"$processes" = x"0" ] ; then
  exit 1
fi
if [ x"$cores" = x"" -o x"$cores" = x"0" ] ; then
  exit 2
fi
if [ x"$contexts" = x"" -o x"$contexts" = x"0" ] ; then
  exit 3
fi

# Calculate the desired context sharing ratio (unless already specified).
if [ x"$processes_per_context" = x"" ] ; then
  # This is round_up(cores / contexts).
  # Round up so that we won't run out of contexts if it doesn't divide evenly.
  processes_per_context=`expr \( $cores + $contexts - 1 \) / $contexts`
fi

# Apply sharing minimum if specified.
if [ x"$min_processes_per_context" != x"" ] ; then
  if [ $processes_per_context -lt $min_processes_per_context ] ; then
    processes_per_context=$min_processes_per_context
  fi
fi

# Apply sharing maximum if specified
if [ x"$max_processes_per_context" != x"" ] ; then
  if [ $processes_per_context -gt $max_processes_per_context ] ; then
    processes_per_context=$max_processes_per_context
  fi
fi

if [ x"$debug" != x"" ] ; then
  echo "# processes_per_context is $processes_per_context" 1>&2
fi

# The number of shared contexts for this job is round_up(processes / ratio).
# Round up so that we don't exceed max ratio if it doesn't divide evenly.
psm_sharedcontexts_max=`expr \( $processes + $processes_per_context - 1 \) / \
                        $processes_per_context`

# Apply sensible minimum - must have at least one context
if [ $psm_sharedcontexts_max -lt 1 ] ; then
  psm_sharedcontexts_max=1
fi

# Apply sensible maximum - must not exceed total contexts
if [ $psm_sharedcontexts_max -gt $contexts ] ; then
  psm_sharedcontexts_max=$contexts
fi

# Final debug of the computed number of contexts to use.
if [ x"$debug" != x"" ] ; then
  echo "# psm_sharedcontexts_max is $psm_sharedcontexts_max" 1>&2
fi

# The computed number of contexts is returned on stdout.
echo $psm_sharedcontexts_max

# We have success.
exit 0
