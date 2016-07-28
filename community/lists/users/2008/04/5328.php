<?
$subject_val = "Re: [OMPI users] mpirun script and the SYNCLOC option";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Apr  6 14:54:54 2008" -->
<!-- isoreceived="20080406185454" -->
<!-- sent="Sun, 6 Apr 2008 14:53:43 -0400" -->
<!-- isosent="20080406185343" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun script and the SYNCLOC option" -->
<!-- id="0E6292C7-C0DB-4404-A991-63C202056678_at_umich.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="664f38be0804061150n421de9fdm326e86de8214d179_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun script and the SYNCLOC option<br>
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-06 14:53:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5329.php">brian janus: "Re: [OMPI users] mpirun script and the SYNCLOC option"</a>
<li><strong>Previous message:</strong> <a href="5327.php">brian janus: "[OMPI users] mpirun script and the SYNCLOC option"</a>
<li><strong>In reply to:</strong> <a href="5327.php">brian janus: "[OMPI users] mpirun script and the SYNCLOC option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5329.php">brian janus: "Re: [OMPI users] mpirun script and the SYNCLOC option"</a>
<li><strong>Reply:</strong> <a href="5329.php">brian janus: "Re: [OMPI users] mpirun script and the SYNCLOC option"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This if for MPICH's mpirun not OpenMPI's mpi run.  You will need to  
<br>
direct questions to the MPICH team and mailing list.
<br>
<p>Also be aware that if that is for MPICH-1.x  they nolonger develop it  
<br>
and should move to MPICH-2.x  Or switch to another MPI stack like  
<br>
OpenMPI etc.
<br>
<p>Brock Palen
<br>
www.umich.edu/~brockp
<br>
Center for Advanced Computing
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<p><p><p>On Apr 6, 2008, at 2:50 PM, brian janus wrote:
<br>
<p><span class="quotelev1">&gt; I'm new here so forgive me if I ask any dumb questions. But the  
</span><br>
<span class="quotelev1">&gt; first question I have concerns the mpirun script below.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My question is, what does the SYNCLOC=/bin/sync line for in the  
</span><br>
<span class="quotelev1">&gt; script below do, and what complications could arise (if any), from  
</span><br>
<span class="quotelev1">&gt; disabling this option by commenting out the line like #SYNCLOC=/bin/ 
</span><br>
<span class="quotelev1">&gt; sync. In some code we are running, we have found that disabling  
</span><br>
<span class="quotelev1">&gt; this option allows high priority jobs to complete in only a couple  
</span><br>
<span class="quotelev1">&gt; of seconds, whereas before they would take several minutes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What does SYNCLOC do, and if its disabled, what kind of problems  
</span><br>
<span class="quotelev1">&gt; might that cause?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #! /bin/sh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # MPIRUN for MPICH
</span><br>
<span class="quotelev1">&gt; # (Don't change the above line - we use it to identify MPICH mpirun as
</span><br>
<span class="quotelev1">&gt; # opposed to others (e.g., SGI's mpirun)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # This script tries to start jobs on whatever kind of machine  
</span><br>
<span class="quotelev1">&gt; you're on.
</span><br>
<span class="quotelev1">&gt; # Strategy - This program is built with a default device it uses in
</span><br>
<span class="quotelev1">&gt; # certain ways. The user can override this default from the command  
</span><br>
<span class="quotelev1">&gt; line.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # This sh script is designed to use other scripts to provide the  
</span><br>
<span class="quotelev1">&gt; commands
</span><br>
<span class="quotelev1">&gt; # to run each system, using the . filename.sh mechanism
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # Debuggers should be handled by running
</span><br>
<span class="quotelev1">&gt; # mpirun.db.&lt;debugger_name&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # e.g., mpirun.db.gdb or mpirun.db.xxgdb.
</span><br>
<span class="quotelev1">&gt; # This will allow users to add there own debuggers
</span><br>
<span class="quotelev1">&gt; # (with -debug=&lt;debugger_name&gt;)
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # Set default variables
</span><br>
<span class="quotelev1">&gt; AUTOMOUNTFIX=&quot;sed -e s@/tmp_mnt/@/@g&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; DEFAULT_DEVICE=ch_p4
</span><br>
<span class="quotelev1">&gt; RSHCOMMAND=&quot;/usr/bin/ssh&quot;
</span><br>
<span class="quotelev1">&gt; SYNCLOC=/bin/sync     # &lt;---------- WE DISABLED THIS WITH A #COMMENT#
</span><br>
<span class="quotelev1">&gt; CC=&quot;cc&quot;
</span><br>
<span class="quotelev1">&gt; COMM=
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; GLOBUSDIR=@GLOBUSDIR@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; CLINKER=&quot;cc&quot;
</span><br>
<span class="quotelev1">&gt; prefix=/cluster/cairo/software/mpich-1.2.5.2
</span><br>
<span class="quotelev1">&gt; bindir=/cluster/cairo/software/mpich-1.2.5.2/bin
</span><br>
<span class="quotelev1">&gt; # This value for datadir is the default value setup by configure
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; datadir=/cluster/cairo/software/mpich-1.2.5.2/share
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; DEFAULT_MACHINE=ch_p4
</span><br>
<span class="quotelev1">&gt; DEFAULT_ARCH=LINUX
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # Derived variables
</span><br>
<span class="quotelev1">&gt; MPIRUN_BIN=$bindir
</span><br>
<span class="quotelev1">&gt; MPIRUN_HOME=$MPIRUN_BIN
</span><br>
<span class="quotelev1">&gt; MPIVERSION=&quot;1.2.5 (release) of : 2003/01/13 16:21:53&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #set verbose
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # Local routines
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # End of routine
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # Special, system specific values
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # polling_mode is for systems that can select between polling and
</span><br>
<span class="quotelev1">&gt; # interrupt-driven operation.  Currently, only IBM POE is so supported
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # (TMC CMMD has some support for this choice of mode)
</span><br>
<span class="quotelev1">&gt; polling_mode=1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # Parse command line arguments
</span><br>
<span class="quotelev1">&gt; # The ultimate goal is to determine what kind of parallel machine this
</span><br>
<span class="quotelev1">&gt; # is we are running on. Then we know how to start jobs...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # Process common arguments (currently does ALL, but should pass  
</span><br>
<span class="quotelev1">&gt; unrecognized
</span><br>
<span class="quotelev1">&gt; # ones to called files)
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; hasprinthelp=1
</span><br>
<span class="quotelev1">&gt; . $MPIRUN_HOME/mpirun.args
</span><br>
<span class="quotelev1">&gt; argsset=1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # Jump to the correct code for the device (by pseudo machine)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; mpirun_version=&quot;&quot;
</span><br>
<span class="quotelev1">&gt; case $machine in
</span><br>
<span class="quotelev1">&gt;     ch_cmmd)
</span><br>
<span class="quotelev1">&gt; 	mpirun_version=$MPIRUN_HOME/mpirun.ch_cmmd
</span><br>
<span class="quotelev1">&gt; 	;;
</span><br>
<span class="quotelev1">&gt;     ibmspx|ch_eui|ch_mpl)
</span><br>
<span class="quotelev1">&gt; 	mpirun_version=$MPIRUN_HOME/mpirun.ch_mpl
</span><br>
<span class="quotelev1">&gt; 	;;
</span><br>
<span class="quotelev1">&gt;     anlspx)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	mpirun_version=$MPIRUN_HOME/mpirun.anlspx
</span><br>
<span class="quotelev1">&gt; 	;;
</span><br>
<span class="quotelev1">&gt;     ch_meiko|meiko)
</span><br>
<span class="quotelev1">&gt; 	mpirun_version=$MPIRUN_HOME/mpirun.meiko
</span><br>
<span class="quotelev1">&gt; 	;;
</span><br>
<span class="quotelev1">&gt;     cray_t3d|t3d)
</span><br>
<span class="quotelev1">&gt; 	mpirun_version=$MPIRUN_HOME/mpirun.t3d
</span><br>
<span class="quotelev1">&gt; 	;;
</span><br>
<span class="quotelev1">&gt;     ch_nc)
</span><br>
<span class="quotelev1">&gt; 	mpirun_version=$MPIRUN_HOME/mpirun.ch_nc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	;;
</span><br>
<span class="quotelev1">&gt;     paragon|ch_nx|nx)
</span><br>
<span class="quotelev1">&gt; 	mpirun_version=$MPIRUN_HOME/mpirun.paragon
</span><br>
<span class="quotelev1">&gt; 	;;
</span><br>
<span class="quotelev1">&gt;     inteldelta)
</span><br>
<span class="quotelev1">&gt; 	mpirun_version=$MPIRUN_HOME/mpirun.delta
</span><br>
<span class="quotelev1">&gt; 	;;
</span><br>
<span class="quotelev1">&gt;     i860|ipsc860)
</span><br>
<span class="quotelev1">&gt; 	mpirun_version=$MPIRUN_HOME/mpirun.i860
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	;;
</span><br>
<span class="quotelev1">&gt;     p4|ch_p4|sgi_mp)
</span><br>
<span class="quotelev1">&gt; 	mpirun_version=$MPIRUN_HOME/mpirun.ch_p4
</span><br>
<span class="quotelev1">&gt; 	;;
</span><br>
<span class="quotelev1">&gt;     gm|ch_gm|myrinet)
</span><br>
<span class="quotelev1">&gt;         mpirun_version=$MPIRUN_HOME/mpirun.ch_gm
</span><br>
<span class="quotelev1">&gt; 	;;
</span><br>
<span class="quotelev1">&gt;     execer)
</span><br>
<span class="quotelev1">&gt; 	mpirun_version=$MPIRUN_HOME/mpirun.execer
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	;;
</span><br>
<span class="quotelev1">&gt;     ch_shmem|ch_spp|smp|convex_spp)
</span><br>
<span class="quotelev1">&gt; 	# sgi_mp is reserved for the p4 version
</span><br>
<span class="quotelev1">&gt; 	mpirun_version=$MPIRUN_HOME/mpirun.ch_shmem
</span><br>
<span class="quotelev1">&gt;     	;;
</span><br>
<span class="quotelev1">&gt;     ksr|symm_ptx)
</span><br>
<span class="quotelev1">&gt; 	mpirun_version=$MPIRUN_HOME/mpirun.p4shmem
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	;;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     ch_tcp|tcp)
</span><br>
<span class="quotelev1">&gt; 	mpirun_version=$MPIRUN_HOME/mpirun.ch_tcp
</span><br>
<span class="quotelev1">&gt; 	;;
</span><br>
<span class="quotelev1">&gt;     globus)
</span><br>
<span class="quotelev1">&gt; 	mpirun_version=$MPIRUN_HOME/mpirun.globus
</span><br>
<span class="quotelev1">&gt; 	;;
</span><br>
<span class="quotelev1">&gt;     *)
</span><br>
<span class="quotelev1">&gt; 	#
</span><br>
<span class="quotelev1">&gt; 	# This allows us to add a device without changing the base mpirun
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	# code
</span><br>
<span class="quotelev1">&gt; 	if [ -x $MPIRUN_HOME/mpirun.$device ] ; then
</span><br>
<span class="quotelev1">&gt; 	    mpirun_version=$MPIRUN_HOME/mpirun.$device
</span><br>
<span class="quotelev1">&gt; 	elif [ -x $MPIRUN_HOME/mpirun.$default_device ] ; then
</span><br>
<span class="quotelev1">&gt; 	    mpirun_version=$MPIRUN_HOME/mpirun.$default_device
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	    device=$default_device
</span><br>
<span class="quotelev1">&gt; 	else
</span><br>
<span class="quotelev1">&gt; 	    echo &quot;Cannot find MPIRUN machine file for machine $machine&quot;
</span><br>
<span class="quotelev1">&gt; 	    echo &quot;and architecture $arch .&quot;
</span><br>
<span class="quotelev1">&gt;             if [ -n &quot;$device&quot; ] ; then
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	        echo &quot;(Looking for $MPIRUN_HOME/mpirun.$device)&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	    else
</span><br>
<span class="quotelev1">&gt; 	        echo &quot;(No device specified.)&quot;
</span><br>
<span class="quotelev1">&gt;             fi
</span><br>
<span class="quotelev1">&gt; 	    # . $MPIRUN_HOME/mpirun.default
</span><br>
<span class="quotelev1">&gt; 	    exit 1
</span><br>
<span class="quotelev1">&gt; 	fi
</span><br>
<span class="quotelev1">&gt;   	;;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; esac
</span><br>
<span class="quotelev1">&gt; exitstatus=1
</span><br>
<span class="quotelev1">&gt; if [ -n &quot;$mpirun_version&quot; ] ; then
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     if [ -x $mpirun_version ] ; then
</span><br>
<span class="quotelev1">&gt;         # The mpirun script *must* set exitstatus (or exit itself)
</span><br>
<span class="quotelev1">&gt;         . $mpirun_version
</span><br>
<span class="quotelev1">&gt;     else
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        	echo &quot;$mpirun_version is not available.&quot;
</span><br>
<span class="quotelev1">&gt; 	    exit 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     fi
</span><br>
<span class="quotelev1">&gt; else
</span><br>
<span class="quotelev1">&gt;     echo &quot;No mpirun script for this configuration!&quot;
</span><br>
<span class="quotelev1">&gt;     exit 1
</span><br>
<span class="quotelev1">&gt; fi
</span><br>
<span class="quotelev1">&gt; exit $exitstatus
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5328/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5329.php">brian janus: "Re: [OMPI users] mpirun script and the SYNCLOC option"</a>
<li><strong>Previous message:</strong> <a href="5327.php">brian janus: "[OMPI users] mpirun script and the SYNCLOC option"</a>
<li><strong>In reply to:</strong> <a href="5327.php">brian janus: "[OMPI users] mpirun script and the SYNCLOC option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5329.php">brian janus: "Re: [OMPI users] mpirun script and the SYNCLOC option"</a>
<li><strong>Reply:</strong> <a href="5329.php">brian janus: "Re: [OMPI users] mpirun script and the SYNCLOC option"</a>
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
