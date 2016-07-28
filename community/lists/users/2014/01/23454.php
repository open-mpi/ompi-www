<?
$subject_val = "Re: [OMPI users] OpenMPI 1.7.2-2.1.3 does not work with OpenFOAM 2.2.2 on OpenSUSE 13.1";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 24 16:22:28 2014" -->
<!-- isoreceived="20140124212228" -->
<!-- sent="Fri, 24 Jan 2014 13:21:33 -0800" -->
<!-- isosent="20140124212133" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.7.2-2.1.3 does not work with OpenFOAM 2.2.2 on OpenSUSE 13.1" -->
<!-- id="956C00F7-6A56-4F58-BA0F-5359088457BE_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1390581603.88141.YahooMailNeo_at_web172901.mail.ir2.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI 1.7.2-2.1.3 does not work with OpenFOAM 2.2.2 on OpenSUSE 13.1<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-24 16:21:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23455.php">Jeff Squyres (jsquyres): "Re: [OMPI users] simple	test	problem	hangs	on	mpi_finalize	and	consumes all system resources"</a>
<li><strong>Previous message:</strong> <a href="23453.php">Ralph Castain: "Re: [OMPI users] Getting past firewall &amp; something else? in Mac OS X"</a>
<li><strong>In reply to:</strong> <a href="23443.php">Elisabeth Beer: "[OMPI users] OpenMPI 1.7.2-2.1.3 does not work with OpenFOAM 2.2.2 on OpenSUSE 13.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23488.php">Dave Love: "Re: [OMPI users] OpenMPI 1.7.2-2.1.3 does not work with OpenFOAM 2.2.2 on OpenSUSE 13.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It is generally a bad idea to install OMPI in system directories like /usr/local as multiple versions can wind up intermingled with each other, thus causing these kind of problems. I would suggest taking a 1.6.5 tarball and building it with a prefix in your own home directory area. You should then put that location at the *front* of your PATH and LD_LIBRARY_PATH to ensure you get that version instead of something else.
<br>
<p>Next, you need to ensure that any launch to a remote node gets pointed to the same location - easiest way to do that is configure OMPI --enable-orterun-prefix-by-default.
<br>
<p>That should solve the problem.
<br>
<p><p>On Jan 24, 2014, at 8:40 AM, Elisabeth Beer &lt;elisabethbeer_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've done an operating system up-grade to OpenSUSE 13.1 and I've up-graded OpenFOAM from 2.2.1 to 2.2.2.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Bevor, OpenMPI worked well.
</span><br>
<span class="quotelev1">&gt; Now, it does not work at all.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; First Step
</span><br>
<span class="quotelev1">&gt; ------------------
</span><br>
<span class="quotelev1">&gt; After decomposing the domain, I've tried to start parallel computation:
</span><br>
<span class="quotelev1">&gt; mpirun -np 8 simpleFoam -parallel
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've received that error message:
</span><br>
<span class="quotelev1">&gt; It looks like opal_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort. There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during opal_init; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt; environment problems. This failure appears to be an internal failure;
</span><br>
<span class="quotelev1">&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev1">&gt; Open MPI developer):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; opal_shmem_base_select failed
</span><br>
<span class="quotelev1">&gt; --&gt; Returned value -1 instead of OPAL_SUCCESS
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like orte_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort. There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt; environment problems. This failure appears to be an internal failure;
</span><br>
<span class="quotelev1">&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev1">&gt; Open MPI developer):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; opal_init failed
</span><br>
<span class="quotelev1">&gt; --&gt; Returned value Error (-1) instead of ORTE_SUCCESS 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've checked the openmpi version (just to be sure) that was responsible for that error:
</span><br>
<span class="quotelev1">&gt; mpirun --version
</span><br>
<span class="quotelev1">&gt; mpirun (Open MPI) 1.7.2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; bashrc file of OpenFoam allows to switch between the current systems version an other installed versions.
</span><br>
<span class="quotelev1">&gt; This version of openmpi (1.7.2) obviously came with OpenSUSE 12.3.
</span><br>
<span class="quotelev1">&gt; I've received that error with the current systems version 1.7.2
</span><br>
<span class="quotelev1">&gt; OpenFoam /etc/bashrc/
</span><br>
<span class="quotelev1">&gt; export WM_MPLIB=SYSTEMOPENMPI
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Second Step
</span><br>
<span class="quotelev1">&gt; -----------------------
</span><br>
<span class="quotelev1">&gt; I've changed OpenFoams bashrc-file
</span><br>
<span class="quotelev1">&gt; export WM_MPLIB=OPENMPI
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Then I've downloaded ThirdParty2.2.2 package, including openmpi 1.6.3, to see if I could maybe switch and use that (previous) version.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've received that error message:
</span><br>
<span class="quotelev1">&gt; mpirun: error while loading shared libraries: libopen-rte.so.4: cannot open shared object file: No such file or directory
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've add another path to LD_LIBRARY_PATH in my home .bashrc including the new path where the missing file is located:
</span><br>
<span class="quotelev1">&gt; export LD_LIBRARY_PATH=/.../..../usr/local/lib64
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now I get another error:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sorry! You were supposed to get help about:
</span><br>
<span class="quotelev1">&gt; opal_init:startup:internal-failure
</span><br>
<span class="quotelev1">&gt; But I couldn't open the help file:
</span><br>
<span class="quotelev1">&gt; /opt/ThirdParty-2.2.2/platforms/linux64Gcc/openmpi-1.6.3/share/openmpi/help-opal-runtime.txt: No such file or directory. Sorry!
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [linux-0ze2:01786] [[INVALID],INVALID] ORTE_ERROR_LOG: Error in file runtime/orte_init.c at line 79
</span><br>
<span class="quotelev1">&gt; [linux-0ze2:01786] [[INVALID],INVALID] ORTE_ERROR_LOG: Error in file orterun.c at line 694
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Third Step
</span><br>
<span class="quotelev1">&gt; -----------------
</span><br>
<span class="quotelev1">&gt; I've openmpi 1.6.3 uninstalled with 'make uninstall' and finally downloaded and unzipped openmpi-1.4.5 in /opt/
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; shell$ cd openmpi-1.4.5
</span><br>
<span class="quotelev1">&gt; shell$ ./configure --prefix=/usr/local &lt;...lots of output...&gt; 
</span><br>
<span class="quotelev1">&gt; shell$ make all install
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've received following error message:
</span><br>
<span class="quotelev1">&gt; [linux-0ze2:03493] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in file runtime/orte_init.c at line 125
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Sorry!  You were supposed to get help about:
</span><br>
<span class="quotelev1">&gt;     orte_init:startup:internal-failure
</span><br>
<span class="quotelev1">&gt; But I couldn't open the help file:
</span><br>
<span class="quotelev1">&gt;     /usr/local/lib64/openmpi/share/openmpi/help-orte-runtime: No such file or directory.  Sorry!
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [linux-0ze2:03493] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in file orterun.c at line 543
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've changed content of PATH variable with help of export PATH=..... in my users .bashrc file
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; export PATH=/opt/ThirdParty-2.2.2/platforms/linux64Gcc/gperftools-svn/bin:/opt/OpenFOAM-ParaView-3.12.0/bin:/usr/local/lib64/openmpi:/usr/local:/home/lisa/OpenFOAM/lisa-2.2.2/platforms/linux64GccDPOpt/bin:/opt/site/2.2.2/platforms/linux64GccDPOpt/bin:/opt/OpenFOAM-2.2.2/platforms/linux64GccDPOpt/bin:/opt/OpenFOAM-2.2.2/bin:/opt/OpenFOAM-2.2.2/wmake:/home/lisa/bin:/usr/local/bin:/usr/bin:/bin:/usr/bin/X11:/usr/X11R6/bin:/usr/games:/opt/openmpi-1.4.5
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The original PATH
</span><br>
<span class="quotelev1">&gt; /opt/ThirdParty-2.2.2/platforms/linux64Gcc/gperftools-svn/bin:/opt/OpenFOAM-ParaView-3.12.0/bin:/usr/local/lib64/openmpi/bin:/home/lisa/OpenFOAM/lisa-2.2.2/platforms/linux64GccDPOpt/bin:/opt/site/2.2.2/platforms/linux64GccDPOpt/bin:/opt/OpenFOAM-2.2.2/platforms/linux64GccDPOpt/bin:/opt/OpenFOAM-2.2.2/bin:/opt/OpenFOAM-2.2.2/wmake:/home/lisa/bin:/usr/local/bin:/usr/bin:/bin:/usr/bin/X11:/usr/X11R6/bin:/usr/games
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've changed content of LD_LIBRARY_PATH variable with help of export LD_LIBRARY_PATH=..... in my users .bashrc file
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; export LD_LIBRARY_PATH=/opt/ThirdParty-2.2.2/platforms/linux64Gcc/gperftools-svn/lib:/opt/OpenFOAM-ParaView-3.12.0/lib/paraview-3.12:/opt/OpenFOAM-scotch-6.0.0/lib:/usr/local/lib64/openmpi:/opt/ThirdParty-2.2.2/platforms/linux64GccDPOpt/lib/openmpi-1.6.3:/opt/ThirdParty-2.2.2/platforms/linux64Gcc/openmpi-1.6.3/lib:/opt/ThirdParty-2.2.2/platforms/linux64Gcc/openmpi-1.6.3/lib64:/home/lisa/OpenFOAM/lisa-2.2.2/platforms/linux64GccDPOpt/lib:/opt/site/2.2.2/platforms/linux64GccDPOpt/lib:/opt/OpenFOAM-2.2.2/platforms/linux64GccDPOpt/lib:/opt/ThirdParty-2.2.2/platforms/linux64GccDPOpt/lib:/opt/OpenFOAM-2.2.2/platforms/linux64GccDPOpt/lib/dummy:/usr/lib64/mpi/gcc/openmpi/lib64:/usr/local/lib64:/opt/openmpi-1.4.5:/usr/local
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The original LD_LIBRAR_PATH
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /opt/ThirdParty-2.2.2/platforms/linux64Gcc/gperftools-svn/lib:/opt/OpenFOAM-ParaView-3.12.0/lib/paraview-3.12:/opt/OpenFOAM-scotch-6.0.0/lib:/opt/OpenFOAM-2.2.2/platforms/linux64GccDPOpt/lib/openmpi-1.4.5:/opt/ThirdParty-2.2.2/platforms/linux64GccDPOpt/lib/openmpi-1.4.5:/usr/local/lib64/openmpi/lib:/usr/local/lib64/openmpi/lib64:/home/lisa/OpenFOAM/lisa-2.2.2/platforms/linux64GccDPOpt/lib:/opt/site/2.2.2/platforms/linux64GccDPOpt/lib:/opt/OpenFOAM-2.2.2/platforms/linux64GccDPOpt/lib:/opt/ThirdParty-2.2.2/platforms/linux64GccDPOpt/lib:/opt/OpenFOAM-2.2.2/platforms/linux64GccDPOpt/lib/dummy:/usr/lib64/mpi/gcc/openmpi/lib64:/usr/local/lib64
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've changed the file /opt/OpenFOAM-2.2.2/etc/config/settings.sh as well! --&gt; OPENMPI 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; since I've adjusted .bashrc of OpenFoam :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #- MPI implementation:
</span><br>
<span class="quotelev1">&gt; #    WM_MPLIB = SYSTEMOPENMPI | OPENMPI | MPICH | MPICH-GM | HPMPI
</span><br>
<span class="quotelev1">&gt; #               | GAMMA | MPI | QSMPI | SGIMPI
</span><br>
<span class="quotelev1">&gt; export WM_MPLIB=OPENMPI
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # Communications library
</span><br>
<span class="quotelev1">&gt; # ~~~~~~~~~~~~~~~~~~~~~~
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /opt/OpenFOAM-2.2.2/etc/config/settings.sh:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; unset MPI_ARCH_PATH MPI_HOME FOAM_MPI_LIBBIN
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; case &quot;$WM_MPLIB&quot; in
</span><br>
<span class="quotelev1">&gt; SYSTEMOPENMPI)
</span><br>
<span class="quotelev1">&gt;     # Use the system installed openmpi, get library directory via mpicc
</span><br>
<span class="quotelev1">&gt;     export FOAM_MPI=openmpi-system
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     libDir=`mpicc --showme:link | sed -e 's/.*-L\([^ ]*\).*/\1/'`
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     # Bit of a hack: strip off 'lib' and hope this is the path to openmpi
</span><br>
<span class="quotelev1">&gt;     # include files and libraries.
</span><br>
<span class="quotelev1">&gt;     export MPI_ARCH_PATH=&quot;${libDir%/*}&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     _foamAddLib     $libDir
</span><br>
<span class="quotelev1">&gt;     unset libDir
</span><br>
<span class="quotelev1">&gt;     ;;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; OPENMPI)
</span><br>
<span class="quotelev1">&gt;     #export FOAM_MPI=openmpi-1.6.3
</span><br>
<span class="quotelev1">&gt;     export FOAM_MPI=openmpi-1.4.5
</span><br>
<span class="quotelev1">&gt;     # optional configuration tweaks:
</span><br>
<span class="quotelev1">&gt;     _foamSource `$WM_PROJECT_DIR/bin/foamEtcFile config/openmpi.sh`
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     #export MPI_ARCH_PATH=$WM_THIRD_PARTY_DIR/platforms/$WM_ARCH$WM_COMPILER/$FOAM_MPI
</span><br>
<span class="quotelev1">&gt;     export MPI_ARCH_PATH=/usr/local/lib64/openmpi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     # Tell OpenMPI where to find its install directory
</span><br>
<span class="quotelev1">&gt;     export OPAL_PREFIX=$MPI_ARCH_PATH
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     _foamAddPath    $MPI_ARCH_PATH/bin
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     # 64-bit on OpenSuSE 12.1 uses lib64 others use lib
</span><br>
<span class="quotelev1">&gt;     _foamAddLib     $MPI_ARCH_PATH/lib$WM_COMPILER_LIB_ARCH
</span><br>
<span class="quotelev1">&gt;     _foamAddLib     $MPI_ARCH_PATH/lib
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     _foamAddMan     $MPI_ARCH_PATH/share/man
</span><br>
<span class="quotelev1">&gt;     ;;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am quite new and don't have experience neither with Linux nor with MPI. Please let me know if I should provide further information.
</span><br>
<span class="quotelev1">&gt; Please help me to get rid of that error message and make mpi running.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am working on a single workstation with 16 nodes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; Elisabeth 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;config.log.bz2&gt;&lt;ompi_info.txt&gt;&lt;ompi_info_1.7&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23454/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23455.php">Jeff Squyres (jsquyres): "Re: [OMPI users] simple	test	problem	hangs	on	mpi_finalize	and	consumes all system resources"</a>
<li><strong>Previous message:</strong> <a href="23453.php">Ralph Castain: "Re: [OMPI users] Getting past firewall &amp; something else? in Mac OS X"</a>
<li><strong>In reply to:</strong> <a href="23443.php">Elisabeth Beer: "[OMPI users] OpenMPI 1.7.2-2.1.3 does not work with OpenFOAM 2.2.2 on OpenSUSE 13.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23488.php">Dave Love: "Re: [OMPI users] OpenMPI 1.7.2-2.1.3 does not work with OpenFOAM 2.2.2 on OpenSUSE 13.1"</a>
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
