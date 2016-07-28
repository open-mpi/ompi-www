<?
$subject_val = "[OMPI users] OpenMPI 1.7.2-2.1.3 does not work with OpenFOAM 2.2.2 on OpenSUSE 13.1";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 24 11:40:05 2014" -->
<!-- isoreceived="20140124164005" -->
<!-- sent="Fri, 24 Jan 2014 16:40:03 +0000 (GMT)" -->
<!-- isosent="20140124164003" -->
<!-- name="Elisabeth Beer" -->
<!-- email="elisabethbeer_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI 1.7.2-2.1.3 does not work with OpenFOAM 2.2.2 on OpenSUSE 13.1" -->
<!-- id="1390581603.88141.YahooMailNeo_at_web172901.mail.ir2.yahoo.com" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] OpenMPI 1.7.2-2.1.3 does not work with OpenFOAM 2.2.2 on OpenSUSE 13.1<br>
<strong>From:</strong> Elisabeth Beer (<em>elisabethbeer_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-24 11:40:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23444.php">Fischer, Greg A.: "Re: [OMPI users] simple	test	problem	hangs	on	mpi_finalize	and	consumes all system resources"</a>
<li><strong>Previous message:</strong> <a href="23442.php">Jeff Squyres (jsquyres): "Re: [OMPI users] simple test	problem	hangs	on	mpi_finalize	and	consumes all system resources"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23454.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.7.2-2.1.3 does not work with OpenFOAM 2.2.2 on OpenSUSE 13.1"</a>
<li><strong>Reply:</strong> <a href="23454.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.7.2-2.1.3 does not work with OpenFOAM 2.2.2 on OpenSUSE 13.1"</a>
<li><strong>Reply:</strong> <a href="23488.php">Dave Love: "Re: [OMPI users] OpenMPI 1.7.2-2.1.3 does not work with OpenFOAM 2.2.2 on OpenSUSE 13.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,

I've done an operating system up-grade to OpenSUSE 13.1 and I've up-graded OpenFOAM from 2.2.1 to 2.2.2.

Bevor, OpenMPI worked well.
Now, it does not work at all.

First Step
------------------

After decomposing the domain, I've tried to start parallel computation:
mpirun -np 8 simpleFoam -parallel

I've received that error message:
It looks like opal_init failed for some reason; your parallel process is
likely to abort.  There are many reasons that a parallel process can
fail during opal_init; some of which are due to configuration or
environment problems.  This failure appears to be an internal failure;
here's some additional information (which may only be relevant to an
Open MPI developer):

opal_shmem_base_select failed
--&gt; Returned value -1 instead of OPAL_SUCCESS
--------------------------------------------------------------------------
--------------------------------------------------------------------------
It looks like orte_init failed for some reason; your parallel process is
likely to abort.  There are many reasons that a parallel process can
fail during orte_init; some of which are due to configuration or
environment problems.  This failure appears to be an internal failure;
here's some additional information (which may only be relevant to an
Open MPI developer):

opal_init failed
--&gt; Returned value Error (-1) instead of ORTE_SUCCESS&#160;

I've checked the openmpi version (just to be sure) that was responsible for that error:
mpirun --version
mpirun (Open MPI) 1.7.2


bashrc file of OpenFoam allows to switch between the current systems version an other installed versions.
This version of openmpi (1.7.2) obviously came with OpenSUSE 12.3.

I've received that error with the current systems version 1.7.2

OpenFoam  /etc/bashrc/
export WM_MPLIB=SYSTEMOPENMPI

Second Step
-----------------------
I've changed OpenFoams bashrc-file
export WM_MPLIB=OPENMPI

Then I've downloaded ThirdParty2.2.2 package, including openmpi 1.6.3, to see if I could maybe switch and use that (previous) version.

I've received that error message:

mpirun: error while loading shared libraries: libopen-rte.so.4: cannot open shared object file: No such file or directory

I've add another path to LD_LIBRARY_PATH in my home .bashrc including the new path where the missing file is located:
export LD_LIBRARY_PATH=/.../..../usr/local/lib64

Now I get another error:

Sorry!  You were supposed to get help about:
opal_init:startup:internal-failure
But I couldn't open the help file:
/opt/ThirdParty-2.2.2/platforms/linux64Gcc/openmpi-1.6.3/share/openmpi/help-opal-runtime.txt:
 No such file or directory.  Sorry!
--------------------------------------------------------------------------
[linux-0ze2:01786] [[INVALID],INVALID] ORTE_ERROR_LOG: Error in file runtime/orte_init.c at line 79
[linux-0ze2:01786] [[INVALID],INVALID] ORTE_ERROR_LOG: Error in file orterun.c at line 694

Third Step
-----------------
I've openmpi 1.6.3 uninstalled with 'make uninstall' and finally downloaded and unzipped openmpi-1.4.5 in /opt/

shell$ cd openmpi-1.4.5

shell$ ./configure --prefix=/usr/local
&lt;...lots of output...&gt; 

shell$ make all install

I've received following error message:
[linux-0ze2:03493] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in file runtime/orte_init.c at line 125
--------------------------------------------------------------------------
Sorry!&#160; You were supposed to get help about:
&#160;&#160;&#160; orte_init:startup:internal-failure
But I couldn't open the help file:
&#160;&#160;&#160; /usr/local/lib64/openmpi/share/openmpi/help-orte-runtime: No such file or directory.&#160; Sorry!
--------------------------------------------------------------------------
[linux-0ze2:03493] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in file orterun.c at line 543

I've changed content of PATH variable with help of export PATH=..... in my users .bashrc file


export PATH=/opt/ThirdParty-2.2.2/platforms/linux64Gcc/gperftools-svn/bin:/opt/OpenFOAM-ParaView-3.12.0/bin:/usr/local/lib64/openmpi:/usr/local:/home/lisa/OpenFOAM/lisa-2.2.2/platforms/linux64GccDPOpt/bin:/opt/site/2.2.2/platforms/linux64GccDPOpt/bin:/opt/OpenFOAM-2.2.2/platforms/linux64GccDPOpt/bin:/opt/OpenFOAM-2.2.2/bin:/opt/OpenFOAM-2.2.2/wmake:/home/lisa/bin:/usr/local/bin:/usr/bin:/bin:/usr/bin/X11:/usr/X11R6/bin:/usr/games:/opt/openmpi-1.4.5


The original PATH
/opt/ThirdParty-2.2.2/platforms/linux64Gcc/gperftools-svn/bin:/opt/OpenFOAM-ParaView-3.12.0/bin:/usr/local/lib64/openmpi/bin:/home/lisa/OpenFOAM/lisa-2.2.2/platforms/linux64GccDPOpt/bin:/opt/site/2.2.2/platforms/linux64GccDPOpt/bin:/opt/OpenFOAM-2.2.2/platforms/linux64GccDPOpt/bin:/opt/OpenFOAM-2.2.2/bin:/opt/OpenFOAM-2.2.2/wmake:/home/lisa/bin:/usr/local/bin:/usr/bin:/bin:/usr/bin/X11:/usr/X11R6/bin:/usr/games




I've changed content of LD_LIBRARY_PATH variable with help of export LD_LIBRARY_PATH=..... in my users .bashrc file

export LD_LIBRARY_PATH=/opt/ThirdParty-2.2.2/platforms/linux64Gcc/gperftools-svn/lib:/opt/OpenFOAM-ParaView-3.12.0/lib/paraview-3.12:/opt/OpenFOAM-scotch-6.0.0/lib:/usr/local/lib64/openmpi:/opt/ThirdParty-2.2.2/platforms/linux64GccDPOpt/lib/openmpi-1.6.3:/opt/ThirdParty-2.2.2/platforms/linux64Gcc/openmpi-1.6.3/lib:/opt/ThirdParty-2.2.2/platforms/linux64Gcc/openmpi-1.6.3/lib64:/home/lisa/OpenFOAM/lisa-2.2.2/platforms/linux64GccDPOpt/lib:/opt/site/2.2.2/platforms/linux64GccDPOpt/lib:/opt/OpenFOAM-2.2.2/platforms/linux64GccDPOpt/lib:/opt/ThirdParty-2.2.2/platforms/linux64GccDPOpt/lib:/opt/OpenFOAM-2.2.2/platforms/linux64GccDPOpt/lib/dummy:/usr/lib64/mpi/gcc/openmpi/lib64:/usr/local/lib64:/opt/openmpi-1.4.5:/usr/local


The original LD_LIBRAR_PATH

/opt/ThirdParty-2.2.2/platforms/linux64Gcc/gperftools-svn/lib:/opt/OpenFOAM-ParaView-3.12.0/lib/paraview-3.12:/opt/OpenFOAM-scotch-6.0.0/lib:/opt/OpenFOAM-2.2.2/platforms/linux64GccDPOpt/lib/openmpi-1.4.5:/opt/ThirdParty-2.2.2/platforms/linux64GccDPOpt/lib/openmpi-1.4.5:/usr/local/lib64/openmpi/lib:/usr/local/lib64/openmpi/lib64:/home/lisa/OpenFOAM/lisa-2.2.2/platforms/linux64GccDPOpt/lib:/opt/site/2.2.2/platforms/linux64GccDPOpt/lib:/opt/OpenFOAM-2.2.2/platforms/linux64GccDPOpt/lib:/opt/ThirdParty-2.2.2/platforms/linux64GccDPOpt/lib:/opt/OpenFOAM-2.2.2/platforms/linux64GccDPOpt/lib/dummy:/usr/lib64/mpi/gcc/openmpi/lib64:/usr/local/lib64



I've changed the file /opt/OpenFOAM-2.2.2/etc/config/settings.sh as well! --&gt; OPENMPI 


since I've adjusted .bashrc of OpenFoam :

#- MPI implementation:
#&#160;&#160;&#160; WM_MPLIB = SYSTEMOPENMPI | OPENMPI | MPICH | MPICH-GM | HPMPI
#&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; | GAMMA | MPI | QSMPI | SGIMPI
export WM_MPLIB=OPENMPI


# Communications library
# ~~~~~~~~~~~~~~~~~~~~~~



/opt/OpenFOAM-2.2.2/etc/config/settings.sh:

unset MPI_ARCH_PATH MPI_HOME FOAM_MPI_LIBBIN

case &quot;$WM_MPLIB&quot; in
SYSTEMOPENMPI)
&#160;&#160;&#160; # Use the system installed openmpi, get library directory via mpicc
&#160;&#160;&#160; export FOAM_MPI=openmpi-system

&#160;&#160;&#160; libDir=`mpicc --showme:link | sed -e 's/.*-L\([^ ]*\).*/\1/'`

&#160;&#160;&#160; # Bit of a hack: strip off 'lib' and hope this is the path to openmpi
&#160;&#160;&#160; # include files and libraries.
&#160;&#160;&#160; export MPI_ARCH_PATH=&quot;${libDir%/*}&quot;

&#160;&#160;&#160; _foamAddLib&#160;&#160;&#160;&#160; $libDir
&#160;&#160;&#160; unset libDir
&#160;&#160;&#160; ;;

OPENMPI)
&#160;&#160;&#160; #export FOAM_MPI=openmpi-1.6.3
&#160;&#160;&#160; export FOAM_MPI=openmpi-1.4.5
&#160;&#160;&#160; # optional configuration tweaks:
&#160;&#160;&#160; _foamSource `$WM_PROJECT_DIR/bin/foamEtcFile config/openmpi.sh`

&#160;&#160;&#160; #export MPI_ARCH_PATH=$WM_THIRD_PARTY_DIR/platforms/$WM_ARCH$WM_COMPILER/$FOAM_MPI
&#160;&#160;&#160; export MPI_ARCH_PATH=/usr/local/lib64/openmpi

&#160;&#160;&#160; # Tell OpenMPI where to find its install directory
&#160;&#160;&#160; export OPAL_PREFIX=$MPI_ARCH_PATH

&#160;&#160;&#160; _foamAddPath&#160;&#160;&#160; $MPI_ARCH_PATH/bin

&#160;&#160;&#160; # 64-bit on OpenSuSE 12.1 uses lib64 others use lib
&#160;&#160;&#160; _foamAddLib&#160;&#160;&#160;&#160; $MPI_ARCH_PATH/lib$WM_COMPILER_LIB_ARCH
&#160;&#160;&#160; _foamAddLib&#160;&#160;&#160;&#160; $MPI_ARCH_PATH/lib

&#160;&#160;&#160; _foamAddMan&#160;&#160;&#160;&#160; $MPI_ARCH_PATH/share/man
&#160;&#160;&#160; ;;



I am quite new and don't have experience neither with Linux nor with MPI. Please let me know if I should provide further information.
Please help me to get rid of that error message and make mpi running.

I am working on a single workstation with 16 nodes.



Best regards,
Elisabeth 
<br>



<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23443/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-bzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23443/config.log.bz2">config.log.bz2</a>
</ul>
<!-- attachment="config.log.bz2" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23443/ompi_info.txt">ompi_info.txt</a>
</ul>
<!-- attachment="ompi_info.txt" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23443/ompi_info_1.7">ompi_info_1.7</a>
</ul>
<!-- attachment="ompi_info_1.7" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23444.php">Fischer, Greg A.: "Re: [OMPI users] simple	test	problem	hangs	on	mpi_finalize	and	consumes all system resources"</a>
<li><strong>Previous message:</strong> <a href="23442.php">Jeff Squyres (jsquyres): "Re: [OMPI users] simple test	problem	hangs	on	mpi_finalize	and	consumes all system resources"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23454.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.7.2-2.1.3 does not work with OpenFOAM 2.2.2 on OpenSUSE 13.1"</a>
<li><strong>Reply:</strong> <a href="23454.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.7.2-2.1.3 does not work with OpenFOAM 2.2.2 on OpenSUSE 13.1"</a>
<li><strong>Reply:</strong> <a href="23488.php">Dave Love: "Re: [OMPI users] OpenMPI 1.7.2-2.1.3 does not work with OpenFOAM 2.2.2 on OpenSUSE 13.1"</a>
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
