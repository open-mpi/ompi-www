#!/bin/sh -f

# feedback for command line
echo "Running valgrind on node `hostname`"

# create a log file of the form <hostname>.<rank>

# in version 1.2 use undocumented env variable for rank
# in version 1.3 use documented env variable for rank
export rank=$OMPI_COMM_WORLD_RANK
if [ X$rank = X ]; then 
  export rank=$OMPI_MCA_ns_nds_vpid
fi
# on some of my hosts, $HOSTNAME seems not to be set 
export hname=$HOSTNAME
if [ X$hname = X ]; then 
  export hname=`hostname`
fi

export logfile=vg_${hname}.${rank}

# construct a string for xterm title
export TITLE="node #$rank"

# start valgrind in xterm (remove the valgrind options you don't need)
xterm -T "$TITLE" -e valgrind --tool=memcheck --error-limit=no --leak-check=yes --show-reachable=yes -v --log-file=$logfile $* 

exit 0
