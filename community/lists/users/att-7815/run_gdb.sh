#!/bin/sh
#

# feedback for command line
echo "starting on node `hostname`"
echo $$

# save the program name
export PROG="$1"

# shift away program name (leaves program params)
shift

# create a command file for gdb, to start it automatically
echo run $*  > gdb.cmd

# in order to automatically close the xterms,
# add the following to lines
#echo quit  >> gdb.cmd
#echo yes >> gdb.cmd

echo "Running GDB on node `hostname`"
# for version 1.2 use undocumented env variable
# for version 1.3 use documented env variable
export ID=$OMPI_COMM_WORLD_RANK
if [ X$ID = X ]; then 
  export ID=$OMPI_MCA_ns_nds_vpid
fi
# start the xterm
export TITLE="node #$ID"
xterm -T "$TITLE" -e gdb -x gdb.cmd $PROG

# cleanup 
rm -f gdb.cmd

exit 0

