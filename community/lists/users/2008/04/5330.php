<?
$subject_val = "Re: [OMPI users] mpirun script and the SYNCLOC option";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Apr  6 15:25:28 2008" -->
<!-- isoreceived="20080406192528" -->
<!-- sent="Sun, 6 Apr 2008 15:25:15 -0400" -->
<!-- isosent="20080406192515" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun script and the SYNCLOC option" -->
<!-- id="E7E579E6-CA90-4F86-B90C-5A7EB3F866CF_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="664f38be0804061202h736beb2avcc84fa73af021864_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-06 15:25:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5331.php">Andreas Schäfer: "Re: [OMPI users] Problem with sending vectors"</a>
<li><strong>Previous message:</strong> <a href="5329.php">brian janus: "Re: [OMPI users] mpirun script and the SYNCLOC option"</a>
<li><strong>In reply to:</strong> <a href="5329.php">brian janus: "Re: [OMPI users] mpirun script and the SYNCLOC option"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is the site you want (it's MPICH2, not MPICH1, but it's the same  
<br>
people):
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.mcs.anl.gov/research/projects/mpich2/">http://www.mcs.anl.gov/research/projects/mpich2/</a>
<br>
<p>Good luck!
<br>
<p><p>On Apr 6, 2008, at 3:02 PM, brian janus wrote:
<br>
<span class="quotelev1">&gt; Brock,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks much for the quick reply and information. I thought I might  
</span><br>
<span class="quotelev1">&gt; have been in the wrong place. :) After a google search for that  
</span><br>
<span class="quotelev1">&gt; list, I came up with several options. Do you happen to have a site  
</span><br>
<span class="quotelev1">&gt; URL or other link for the list your talking about? I want to make  
</span><br>
<span class="quotelev1">&gt; sure I'm on the right list
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks very much! :)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sun, Apr 6, 2008 at 1:53 PM, Brock Palen &lt;brockp_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; This if for MPICH's mpirun not OpenMPI's mpi run.  You will need to  
</span><br>
<span class="quotelev1">&gt; direct questions to the MPICH team and mailing list.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also be aware that if that is for MPICH-1.x  they nolonger develop  
</span><br>
<span class="quotelev1">&gt; it and should move to MPICH-2.x  Or switch to another MPI stack like  
</span><br>
<span class="quotelev1">&gt; OpenMPI etc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brock Palen
</span><br>
<span class="quotelev1">&gt; www.umich.edu/~brockp
</span><br>
<span class="quotelev1">&gt; Center for Advanced Computing
</span><br>
<span class="quotelev1">&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev1">&gt; (734)936-1985
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 6, 2008, at 2:50 PM, brian janus wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I'm new here so forgive me if I ask any dumb questions. But the  
</span><br>
<span class="quotelev2">&gt;&gt; first question I have concerns the mpirun script below.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My question is, what does the SYNCLOC=/bin/sync line for in the  
</span><br>
<span class="quotelev2">&gt;&gt; script below do, and what complications could arise (if any), from  
</span><br>
<span class="quotelev2">&gt;&gt; disabling this option by commenting out the line like #SYNCLOC=/bin/ 
</span><br>
<span class="quotelev2">&gt;&gt; sync. In some code we are running, we have found that disabling  
</span><br>
<span class="quotelev2">&gt;&gt; this option allows high priority jobs to complete in only a couple  
</span><br>
<span class="quotelev2">&gt;&gt; of seconds, whereas before they would take several minutes.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What does SYNCLOC do, and if its disabled, what kind of problems  
</span><br>
<span class="quotelev2">&gt;&gt; might that cause?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #! /bin/sh
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; # MPIRUN for MPICH
</span><br>
<span class="quotelev2">&gt;&gt; # (Don't change the above line - we use it to identify MPICH mpirun  
</span><br>
<span class="quotelev2">&gt;&gt; as
</span><br>
<span class="quotelev2">&gt;&gt; # opposed to others (e.g., SGI's mpirun)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; # This script tries to start jobs on whatever kind of machine  
</span><br>
<span class="quotelev2">&gt;&gt; you're on.
</span><br>
<span class="quotelev2">&gt;&gt; # Strategy - This program is built with a default device it uses in
</span><br>
<span class="quotelev2">&gt;&gt; # certain ways. The user can override this default from the command  
</span><br>
<span class="quotelev2">&gt;&gt; line.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; # This sh script is designed to use other scripts to provide the  
</span><br>
<span class="quotelev2">&gt;&gt; commands
</span><br>
<span class="quotelev2">&gt;&gt; # to run each system, using the . filename.sh mechanism
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; # Debuggers should be handled by running
</span><br>
<span class="quotelev2">&gt;&gt; # mpirun.db.&lt;debugger_name&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; # e.g., mpirun.db.gdb or mpirun.db.xxgdb.
</span><br>
<span class="quotelev2">&gt;&gt; # This will allow users to add there own debuggers
</span><br>
<span class="quotelev2">&gt;&gt; # (with -debug=&lt;debugger_name&gt;)
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; # Set default variables
</span><br>
<span class="quotelev2">&gt;&gt; AUTOMOUNTFIX=&quot;sed -e s@/tmp_mnt/@/@g&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; DEFAULT_DEVICE=ch_p4
</span><br>
<span class="quotelev2">&gt;&gt; RSHCOMMAND=&quot;/usr/bin/ssh&quot;
</span><br>
<span class="quotelev2">&gt;&gt; SYNCLOC=/bin/sync     # &lt;---------- WE DISABLED THIS WITH A #COMMENT#
</span><br>
<span class="quotelev2">&gt;&gt; CC=&quot;cc&quot;
</span><br>
<span class="quotelev2">&gt;&gt; COMM=
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; GLOBUSDIR=@GLOBUSDIR@
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; CLINKER=&quot;cc&quot;
</span><br>
<span class="quotelev2">&gt;&gt; prefix=/cluster/cairo/software/mpich-1.2.5.2
</span><br>
<span class="quotelev2">&gt;&gt; bindir=/cluster/cairo/software/mpich-1.2.5.2/bin
</span><br>
<span class="quotelev2">&gt;&gt; # This value for datadir is the default value setup by configure
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; datadir=/cluster/cairo/software/mpich-1.2.5.2/share
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; DEFAULT_MACHINE=ch_p4
</span><br>
<span class="quotelev2">&gt;&gt; DEFAULT_ARCH=LINUX
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; # Derived variables
</span><br>
<span class="quotelev2">&gt;&gt; MPIRUN_BIN=$bindir
</span><br>
<span class="quotelev2">&gt;&gt; MPIRUN_HOME=$MPIRUN_BIN
</span><br>
<span class="quotelev2">&gt;&gt; MPIVERSION=&quot;1.2.5 (release) of : 2003/01/13 16:21:53&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #set verbose
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; # Local routines
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; # End of routine
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; # Special, system specific values
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; # polling_mode is for systems that can select between polling and
</span><br>
<span class="quotelev2">&gt;&gt; # interrupt-driven operation.  Currently, only IBM POE is so  
</span><br>
<span class="quotelev2">&gt;&gt; supported
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; # (TMC CMMD has some support for this choice of mode)
</span><br>
<span class="quotelev2">&gt;&gt; polling_mode=1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; # Parse command line arguments
</span><br>
<span class="quotelev2">&gt;&gt; # The ultimate goal is to determine what kind of parallel machine  
</span><br>
<span class="quotelev2">&gt;&gt; this
</span><br>
<span class="quotelev2">&gt;&gt; # is we are running on. Then we know how to start jobs...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; # Process common arguments (currently does ALL, but should pass  
</span><br>
<span class="quotelev2">&gt;&gt; unrecognized
</span><br>
<span class="quotelev2">&gt;&gt; # ones to called files)
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; hasprinthelp=1
</span><br>
<span class="quotelev2">&gt;&gt; . $MPIRUN_HOME/mpirun.args
</span><br>
<span class="quotelev2">&gt;&gt; argsset=1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; # Jump to the correct code for the device (by pseudo machine)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; mpirun_version=&quot;&quot;
</span><br>
<span class="quotelev2">&gt;&gt; case $machine in
</span><br>
<span class="quotelev2">&gt;&gt;     ch_cmmd)
</span><br>
<span class="quotelev2">&gt;&gt; 	mpirun_version=$MPIRUN_HOME/mpirun.ch_cmmd
</span><br>
<span class="quotelev2">&gt;&gt; 	;;
</span><br>
<span class="quotelev2">&gt;&gt;     ibmspx|ch_eui|ch_mpl)
</span><br>
<span class="quotelev2">&gt;&gt; 	mpirun_version=$MPIRUN_HOME/mpirun.ch_mpl
</span><br>
<span class="quotelev2">&gt;&gt; 	;;
</span><br>
<span class="quotelev2">&gt;&gt;     anlspx)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 	mpirun_version=$MPIRUN_HOME/mpirun.anlspx
</span><br>
<span class="quotelev2">&gt;&gt; 	;;
</span><br>
<span class="quotelev2">&gt;&gt;     ch_meiko|meiko)
</span><br>
<span class="quotelev2">&gt;&gt; 	mpirun_version=$MPIRUN_HOME/mpirun.meiko
</span><br>
<span class="quotelev2">&gt;&gt; 	;;
</span><br>
<span class="quotelev2">&gt;&gt;     cray_t3d|t3d)
</span><br>
<span class="quotelev2">&gt;&gt; 	mpirun_version=$MPIRUN_HOME/mpirun.t3d
</span><br>
<span class="quotelev2">&gt;&gt; 	;;
</span><br>
<span class="quotelev2">&gt;&gt;     ch_nc)
</span><br>
<span class="quotelev2">&gt;&gt; 	mpirun_version=$MPIRUN_HOME/mpirun.ch_nc
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 	;;
</span><br>
<span class="quotelev2">&gt;&gt;     paragon|ch_nx|nx)
</span><br>
<span class="quotelev2">&gt;&gt; 	mpirun_version=$MPIRUN_HOME/mpirun.paragon
</span><br>
<span class="quotelev2">&gt;&gt; 	;;
</span><br>
<span class="quotelev2">&gt;&gt;     inteldelta)
</span><br>
<span class="quotelev2">&gt;&gt; 	mpirun_version=$MPIRUN_HOME/mpirun.delta
</span><br>
<span class="quotelev2">&gt;&gt; 	;;
</span><br>
<span class="quotelev2">&gt;&gt;     i860|ipsc860)
</span><br>
<span class="quotelev2">&gt;&gt; 	mpirun_version=$MPIRUN_HOME/mpirun.i860
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 	;;
</span><br>
<span class="quotelev2">&gt;&gt;     p4|ch_p4|sgi_mp)
</span><br>
<span class="quotelev2">&gt;&gt; 	mpirun_version=$MPIRUN_HOME/mpirun.ch_p4
</span><br>
<span class="quotelev2">&gt;&gt; 	;;
</span><br>
<span class="quotelev2">&gt;&gt;     gm|ch_gm|myrinet)
</span><br>
<span class="quotelev2">&gt;&gt;         mpirun_version=$MPIRUN_HOME/mpirun.ch_gm
</span><br>
<span class="quotelev2">&gt;&gt; 	;;
</span><br>
<span class="quotelev2">&gt;&gt;     execer)
</span><br>
<span class="quotelev2">&gt;&gt; 	mpirun_version=$MPIRUN_HOME/mpirun.execer
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 	;;
</span><br>
<span class="quotelev2">&gt;&gt;     ch_shmem|ch_spp|smp|convex_spp)
</span><br>
<span class="quotelev2">&gt;&gt; 	# sgi_mp is reserved for the p4 version
</span><br>
<span class="quotelev2">&gt;&gt; 	mpirun_version=$MPIRUN_HOME/mpirun.ch_shmem
</span><br>
<span class="quotelev2">&gt;&gt;     	;;
</span><br>
<span class="quotelev2">&gt;&gt;     ksr|symm_ptx)
</span><br>
<span class="quotelev2">&gt;&gt; 	mpirun_version=$MPIRUN_HOME/mpirun.p4shmem
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 	;;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     ch_tcp|tcp)
</span><br>
<span class="quotelev2">&gt;&gt; 	mpirun_version=$MPIRUN_HOME/mpirun.ch_tcp
</span><br>
<span class="quotelev2">&gt;&gt; 	;;
</span><br>
<span class="quotelev2">&gt;&gt;     globus)
</span><br>
<span class="quotelev2">&gt;&gt; 	mpirun_version=$MPIRUN_HOME/mpirun.globus
</span><br>
<span class="quotelev2">&gt;&gt; 	;;
</span><br>
<span class="quotelev2">&gt;&gt;     *)
</span><br>
<span class="quotelev2">&gt;&gt; 	#
</span><br>
<span class="quotelev2">&gt;&gt; 	# This allows us to add a device without changing the base mpirun
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 	# code
</span><br>
<span class="quotelev2">&gt;&gt; 	if [ -x $MPIRUN_HOME/mpirun.$device ] ; then
</span><br>
<span class="quotelev2">&gt;&gt; 	    mpirun_version=$MPIRUN_HOME/mpirun.$device
</span><br>
<span class="quotelev2">&gt;&gt; 	elif [ -x $MPIRUN_HOME/mpirun.$default_device ] ; then
</span><br>
<span class="quotelev2">&gt;&gt; 	    mpirun_version=$MPIRUN_HOME/mpirun.$default_device
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 	    device=$default_device
</span><br>
<span class="quotelev2">&gt;&gt; 	else
</span><br>
<span class="quotelev2">&gt;&gt; 	    echo &quot;Cannot find MPIRUN machine file for machine $machine&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 	    echo &quot;and architecture $arch .&quot;
</span><br>
<span class="quotelev2">&gt;&gt;             if [ -n &quot;$device&quot; ] ; then
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 	        echo &quot;(Looking for $MPIRUN_HOME/mpirun.$device)&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 	    else
</span><br>
<span class="quotelev2">&gt;&gt; 	        echo &quot;(No device specified.)&quot;
</span><br>
<span class="quotelev2">&gt;&gt;             fi
</span><br>
<span class="quotelev2">&gt;&gt; 	    # . $MPIRUN_HOME/mpirun.default
</span><br>
<span class="quotelev2">&gt;&gt; 	    exit 1
</span><br>
<span class="quotelev2">&gt;&gt; 	fi
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   	;;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; esac
</span><br>
<span class="quotelev2">&gt;&gt; exitstatus=1
</span><br>
<span class="quotelev2">&gt;&gt; if [ -n &quot;$mpirun_version&quot; ] ; then
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     if [ -x $mpirun_version ] ; then
</span><br>
<span class="quotelev2">&gt;&gt;         # The mpirun script *must* set exitstatus (or exit itself)
</span><br>
<span class="quotelev2">&gt;&gt;         . $mpirun_version
</span><br>
<span class="quotelev2">&gt;&gt;     else
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        	echo &quot;$mpirun_version is not available.&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 	    exit 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     fi
</span><br>
<span class="quotelev2">&gt;&gt; else
</span><br>
<span class="quotelev2">&gt;&gt;     echo &quot;No mpirun script for this configuration!&quot;
</span><br>
<span class="quotelev2">&gt;&gt;     exit 1
</span><br>
<span class="quotelev2">&gt;&gt; fi
</span><br>
<span class="quotelev2">&gt;&gt; exit $exitstatus
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5331.php">Andreas Schäfer: "Re: [OMPI users] Problem with sending vectors"</a>
<li><strong>Previous message:</strong> <a href="5329.php">brian janus: "Re: [OMPI users] mpirun script and the SYNCLOC option"</a>
<li><strong>In reply to:</strong> <a href="5329.php">brian janus: "Re: [OMPI users] mpirun script and the SYNCLOC option"</a>
<!-- nextthread="start" -->
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
