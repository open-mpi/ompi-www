<?
$subject_val = "[OMPI users] mpirun script and the SYNCLOC option";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Apr  6 14:50:40 2008" -->
<!-- isoreceived="20080406185040" -->
<!-- sent="Sun, 6 Apr 2008 13:50:30 -0500" -->
<!-- isosent="20080406185030" -->
<!-- name="brian janus" -->
<!-- email="brian.janus_at_[hidden]" -->
<!-- subject="[OMPI users] mpirun script and the SYNCLOC option" -->
<!-- id="664f38be0804061150n421de9fdm326e86de8214d179_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>Subject:</strong> [OMPI users] mpirun script and the SYNCLOC option<br>
<strong>From:</strong> brian janus (<em>brian.janus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-06 14:50:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5328.php">Brock Palen: "Re: [OMPI users] mpirun script and the SYNCLOC option"</a>
<li><strong>Previous message:</strong> <a href="5326.php">brian janus: "Re: [OMPI users] Introduce myself."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5328.php">Brock Palen: "Re: [OMPI users] mpirun script and the SYNCLOC option"</a>
<li><strong>Reply:</strong> <a href="5328.php">Brock Palen: "Re: [OMPI users] mpirun script and the SYNCLOC option"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm new here so forgive me if I ask any dumb questions. But the first
<br>
question I have concerns the mpirun script below.
<br>
<p>My question is, what does the SYNCLOC=/bin/sync line for in the script below
<br>
do, and what complications could arise (if any), from disabling this option
<br>
by commenting out the line like #SYNCLOC=/bin/sync. In some code we are
<br>
running, we have found that disabling this option allows high priority jobs
<br>
to complete in only a couple of seconds, whereas before they would take
<br>
several minutes.
<br>
<p>What does SYNCLOC do, and if its disabled, what kind of problems might that
<br>
cause?
<br>
<p>#! /bin/sh
<br>
<p># MPIRUN for MPICH
<br>
# (Don't change the above line - we use it to identify MPICH mpirun as
<br>
# opposed to others (e.g., SGI's mpirun)
<br>
<p>#
<br>
# This script tries to start jobs on whatever kind of machine you're on.
<br>
# Strategy - This program is built with a default device it uses in
<br>
# certain ways. The user can override this default from the command line.
<br>
<p>#
<br>
# This sh script is designed to use other scripts to provide the commands
<br>
# to run each system, using the . filename.sh mechanism
<br>
#
<br>
# Debuggers should be handled by running
<br>
# mpirun.db.&lt;debugger_name&gt;
<br>
<p># e.g., mpirun.db.gdb or mpirun.db.xxgdb.
<br>
# This will allow users to add there own debuggers
<br>
# (with -debug=&lt;debugger_name&gt;)
<br>
#
<br>
# Set default variables
<br>
AUTOMOUNTFIX=&quot;sed -e s@/tmp_mnt/@/@g&quot;
<br>
<p>DEFAULT_DEVICE=ch_p4
<br>
RSHCOMMAND=&quot;/usr/bin/ssh&quot;
<br>
SYNCLOC=/bin/sync     # *&lt;---------- WE DISABLED THIS WITH A #COMMENT#*
<br>
CC=&quot;cc&quot;
<br>
COMM=
<br>
GLOBUSDIR=@GLOBUSDIR@
<br>
<p>CLINKER=&quot;cc&quot;
<br>
prefix=/cluster/cairo/software/mpich-1.2.5.2
<br>
bindir=/cluster/cairo/software/mpich-1.2.5.2/bin
<br>
# This value for datadir is the default value setup by configure
<br>
datadir=/cluster/cairo/software/mpich-1.2.5.2/share
<br>
<p>DEFAULT_MACHINE=ch_p4
<br>
DEFAULT_ARCH=LINUX
<br>
<p># Derived variables
<br>
MPIRUN_BIN=$bindir
<br>
MPIRUN_HOME=$MPIRUN_BIN
<br>
MPIVERSION=&quot;1.2.5 (release) of : 2003/01/13 16:21:53&quot;
<br>
<p>#set verbose
<br>
#
<br>
# Local routines
<br>
<p>#
<br>
# End of routine
<br>
<p>#
<br>
#
<br>
# Special, system specific values
<br>
#
<br>
# polling_mode is for systems that can select between polling and
<br>
# interrupt-driven operation.  Currently, only IBM POE is so supported
<br>
<p># (TMC CMMD has some support for this choice of mode)
<br>
polling_mode=1
<br>
<p># Parse command line arguments
<br>
# The ultimate goal is to determine what kind of parallel machine this
<br>
# is we are running on. Then we know how to start jobs...
<br>
<p>#
<br>
# Process common arguments (currently does ALL, but should pass unrecognized
<br>
# ones to called files)
<br>
#
<br>
hasprinthelp=1
<br>
. $MPIRUN_HOME/mpirun.args
<br>
argsset=1
<br>
<p>#
<br>
# Jump to the correct code for the device (by pseudo machine)
<br>
<p>#
<br>
mpirun_version=&quot;&quot;
<br>
case $machine in
<br>
&nbsp;&nbsp;&nbsp;&nbsp;ch_cmmd)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun_version=$MPIRUN_HOME/mpirun.ch_cmmd
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;;;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;ibmspx|ch_eui|ch_mpl)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun_version=$MPIRUN_HOME/mpirun.ch_mpl
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;;;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;anlspx)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun_version=$MPIRUN_HOME/mpirun.anlspx
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;;;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;ch_meiko|meiko)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun_version=$MPIRUN_HOME/mpirun.meiko
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;;;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;cray_t3d|t3d)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun_version=$MPIRUN_HOME/mpirun.t3d
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;;;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;ch_nc)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun_version=$MPIRUN_HOME/mpirun.ch_nc
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;;;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;paragon|ch_nx|nx)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun_version=$MPIRUN_HOME/mpirun.paragon
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;;;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;inteldelta)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun_version=$MPIRUN_HOME/mpirun.delta
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;;;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;i860|ipsc860)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun_version=$MPIRUN_HOME/mpirun.i860
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;;;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;p4|ch_p4|sgi_mp)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun_version=$MPIRUN_HOME/mpirun.ch_p4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;;;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;gm|ch_gm|myrinet)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun_version=$MPIRUN_HOME/mpirun.ch_gm
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;;;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;execer)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun_version=$MPIRUN_HOME/mpirun.execer
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;;;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;ch_shmem|ch_spp|smp|convex_spp)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# sgi_mp is reserved for the p4 version
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun_version=$MPIRUN_HOME/mpirun.ch_shmem
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;;;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;ksr|symm_ptx)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun_version=$MPIRUN_HOME/mpirun.p4shmem
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;;;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;ch_tcp|tcp)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun_version=$MPIRUN_HOME/mpirun.ch_tcp
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;;;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;globus)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun_version=$MPIRUN_HOME/mpirun.globus
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;;;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;*)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# This allows us to add a device without changing the base mpirun
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# code
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if [ -x $MPIRUN_HOME/mpirun.$device ] ; then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun_version=$MPIRUN_HOME/mpirun.$device
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;elif [ -x $MPIRUN_HOME/mpirun.$default_device ] ; then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun_version=$MPIRUN_HOME/mpirun.$default_device
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;device=$default_device
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo &quot;Cannot find MPIRUN machine file for machine $machine&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo &quot;and architecture $arch .&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if [ -n &quot;$device&quot; ] ; then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo &quot;(Looking for $MPIRUN_HOME/mpirun.$device)&quot;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo &quot;(No device specified.)&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fi
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# . $MPIRUN_HOME/mpirun.default
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;exit 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fi
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;;;
<br>
esac
<br>
exitstatus=1
<br>
if [ -n &quot;$mpirun_version&quot; ] ; then
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;if [ -x $mpirun_version ] ; then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# The mpirun script *must* set exitstatus (or exit itself)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;. $mpirun_version
<br>
&nbsp;&nbsp;&nbsp;&nbsp;else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo &quot;$mpirun_version is not available.&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;exit 1
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;fi
<br>
else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;echo &quot;No mpirun script for this configuration!&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;exit 1
<br>
fi
<br>
exit $exitstatus
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5327/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5328.php">Brock Palen: "Re: [OMPI users] mpirun script and the SYNCLOC option"</a>
<li><strong>Previous message:</strong> <a href="5326.php">brian janus: "Re: [OMPI users] Introduce myself."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5328.php">Brock Palen: "Re: [OMPI users] mpirun script and the SYNCLOC option"</a>
<li><strong>Reply:</strong> <a href="5328.php">Brock Palen: "Re: [OMPI users] mpirun script and the SYNCLOC option"</a>
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>
