#!/bin/sh -f

# feedback for command line
echo "Running on node `hostname`"

# for version 1.2 use undocumented env variable
# for version 1.3 use documented env variable
export ID=$OMPI_COMM_WORLD_RANK
if [ X$ID = X ]; then 
  export ID=$OMPI_MCA_ns_nds_vpid
fi

export TITLE="node #$ID"
# start terminal  
xterm -T "$TITLE" -hold  -e  $* 

exit 0
