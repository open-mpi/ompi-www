<?
$subject_val = "Re: [OMPI users] Checkpoint/Restart in OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  2 07:55:54 2009" -->
<!-- isoreceived="20091102125554" -->
<!-- sent="Mon, 02 Nov 2009 13:56:39 +0100" -->
<!-- isosent="20091102125639" -->
<!-- name="Sergio D&#237;az" -->
<!-- email="sdiaz_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Checkpoint/Restart in OpenMPI" -->
<!-- id="4AEED707.1080104_at_cesga.es" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="275005.4171.qm_at_web54305.mail.re2.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Checkpoint/Restart in OpenMPI<br>
<strong>From:</strong> Sergio D&#237;az (<em>sdiaz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-02 07:56:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11046.php">Andreea m. \(Costea\): "Re: [OMPI users] Checkpoint/Restart in OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="11044.php">Andreea m. \(Costea\): "Re: [OMPI users] Checkpoint/Restart in OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="11044.php">Andreea m. \(Costea\): "Re: [OMPI users] Checkpoint/Restart in OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11046.php">Andreea m. \(Costea\): "Re: [OMPI users] Checkpoint/Restart in OpenMPI"</a>
<li><strong>Reply:</strong> <a href="11046.php">Andreea m. \(Costea\): "Re: [OMPI users] Checkpoint/Restart in OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The mpi.h file is also in the installation dir. It is in the include 
<br>
directory of your installation.
<br>
I think that it is a path problem...
<br>
<p><p>Andreea m. (Costea) escribi&#243;:
<br>
<span class="quotelev1">&gt; MPI_HOME is set to be /home/andreea/MPIrelated/OpenMPI/openmpi_1.3.3
</span><br>
<span class="quotelev1">&gt; But as far as I see it needs files that are only in SOURCES... so 
</span><br>
<span class="quotelev1">&gt; maybe I did something wrong in the installation of OpenMPI?
</span><br>
<span class="quotelev1">&gt; If I run an already compiled file it works fine, of course. But it 
</span><br>
<span class="quotelev1">&gt; does not compile
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --- On *Mon, 11/2/09, Sergio D&#237;az /&lt;sdiaz_at_[hidden]&gt;/* wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     From: Sergio D&#237;az &lt;sdiaz_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     Subject: Re: [OMPI users] Checkpoint/Restart in OpenMPI
</span><br>
<span class="quotelev1">&gt;     To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     Date: Monday, November 2, 2009, 2:36 PM
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Maybe the variable MPI_HOME??
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Andreea m. (Costea) escribi&#243;:
</span><br>
<span class="quotelev2">&gt;     &gt; Ok...
</span><br>
<span class="quotelev2">&gt;     &gt; Maybe someone can clear me :)
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; I have BLCR sources in this directory :
</span><br>
<span class="quotelev2">&gt;     &gt; /home/andreea/MPIrelated/BLCR/blcr-0.8.2
</span><br>
<span class="quotelev2">&gt;     &gt; it's installation is in this directory:
</span><br>
<span class="quotelev2">&gt;     &gt; /home/andreea/MPIrelated/BLCR/blcr-0.8.2/builddir
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; OpenMPI:
</span><br>
<span class="quotelev2">&gt;     &gt; sources: /home/andreea/MPIrelated/OpenMPI/SOURCES
</span><br>
<span class="quotelev2">&gt;     &gt; installation: /home/andreea/MPIrelated/OpenMPI/openmpi_1.3.3
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; I added to the variables (PATH, LD_LIBRARY_PATH) teh paths from the
</span><br>
<span class="quotelev2">&gt;     &gt; installation directories:
</span><br>
<span class="quotelev2">&gt;     &gt; for PATH I added:
</span><br>
<span class="quotelev1">&gt;     /home/andreea/MPIrelated/BLCR/blcr-0.8.2/builddir/bin
</span><br>
<span class="quotelev2">&gt;     &gt;                             
</span><br>
<span class="quotelev2">&gt;     &gt; /home/andreea/MPIrelated/OpenMPI/openmpi_1.3.3/bin
</span><br>
<span class="quotelev2">&gt;     &gt; fro LD_LIBRARY_PATH:
</span><br>
<span class="quotelev1">&gt;     /home/andreea/MPIrelated/BLCR/blcr-0.8.2/builddir/lib
</span><br>
<span class="quotelev2">&gt;     &gt;                                     
</span><br>
<span class="quotelev2">&gt;     &gt; /home/andreea/MPIrelated/OpenMPI/openmpi_1.3.3/lib
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; If I want to compile a c program, MPI based, I get errors of not
</span><br>
<span class="quotelev2">&gt;     &gt; finding the mpi.h (which is located in the OpenMPI/SOURCES/include
</span><br>
<span class="quotelev2">&gt;     &gt; directory). It can't also find the constants like:
</span><br>
<span class="quotelev2">&gt;     &gt; MPI_COMM_WORLD,MPI_INT, etc.
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; Help, anyone?
</span><br>
<span class="quotelev2">&gt;     &gt; Thanks,
</span><br>
<span class="quotelev2">&gt;     &gt; Andreea
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; --- On *Mon, 11/2/09, Sergio D&#237;az /&lt;sdiaz_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     &lt;/mc/compose?to=sdiaz_at_[hidden]&gt;&gt;/* wrote:
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt;     From: Sergio D&#237;az &lt;sdiaz_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     &lt;/mc/compose?to=sdiaz_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt;     &gt;     Subject: Re: [OMPI users] Checkpoint/Restart in OpenMPI for
</span><br>
<span class="quotelev1">&gt;     Sergio
</span><br>
<span class="quotelev2">&gt;     &gt;     To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     &lt;/mc/compose?to=users_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt;     &gt;     Date: Monday, November 2, 2009, 1:12 PM
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt;     Hi,
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt;     The option --enable-ft-thread doesn't exist. By default is
</span><br>
<span class="quotelev1">&gt;     enable.
</span><br>
<span class="quotelev2">&gt;     &gt;     The options --with-blcr and --with-blcr-libdir have to point to
</span><br>
<span class="quotelev2">&gt;     &gt;     your BLCR installation dir.
</span><br>
<span class="quotelev2">&gt;     &gt;     Before compiling openmpi, you have to load the blcr modules.
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt;     When I installed BLCR, my installation dir was in a different
</span><br>
<span class="quotelev2">&gt;     &gt;     directory.
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt;     Regards,
</span><br>
<span class="quotelev2">&gt;     &gt;     Sergio
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt;     Andreea m. (Costea) escribi&#243;:
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;     One more thing:
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;     when you installed BLCR did you install it in the same
</span><br>
<span class="quotelev1">&gt;     directory
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;     with the sources or in a different one? And when you point
</span><br>
<span class="quotelev1">&gt;     to the
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;     blcr directory and the blcr library directory in openmpi
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;     configure command, do you point to the installation or to the
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;     sources directory?
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;     Regards,
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;     Andreea
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;     --- On *Mon, 11/2/09, Andreea m. (Costea)
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;     /&lt;doodlie_snew_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     &lt;/mc/compose?to=doodlie_snew_at_[hidden]&gt;&gt;/* wrote:
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;         From: Andreea m. (Costea) &lt;doodlie_snew_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     &lt;/mc/compose?to=doodlie_snew_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;         Subject: Re: [OMPI users] Checkpoint/Restart in OpenMPI
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;         To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     &lt;/mc/compose?to=users_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;         Date: Monday, November 2, 2009, 7:02 AM
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;         Hi again.
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;         I have installed BLCR, passed all the tests, and now I
</span><br>
<span class="quotelev1">&gt;     tried
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;         to install OpenMPI. This is the configuration call:
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;     
</span><br>
<span class="quotelev1">&gt;        --------------------------------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;         ./configure
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;         --prefix=/home/andreea/MPIrelated/OpenMPI/openmpi_1.3.3/
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;         --enable-ft-thread --with-ft=cr --enable-mpi-threads
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;     
</span><br>
<span class="quotelev1">&gt;        --with-blcr=/home/andreea/MPIrelated/BLCR/blcr-0.8.2/builddir/
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;     
</span><br>
<span class="quotelev1">&gt;        --with-blcr-libdir=/home/andreea/MPIrelated/BLCR/blcr-0.8.2/builddir/lib
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;     
</span><br>
<span class="quotelev1">&gt;        --------------------------------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;         In the output I got, among others, this warnings:
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;         configure: WARNING: no usable BFD found; using
</span><br>
<span class="quotelev1">&gt;     nm-output file
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;         for addr./symbol mapping
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;         configure: WARNING: Unrecognized options:
</span><br>
<span class="quotelev1">&gt;     --enable-ft-thread,
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;         --with-ft, --enable-mpi-threads, --with-blcr,
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;         --with-blcr-libdir, --enable-ltdl-convenience
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;         configure: WARNING: Unrecognized options:
</span><br>
<span class="quotelev1">&gt;     --enable-ft-thread,
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;         --with-ft, --enable-mpi-threads, --with-blcr,
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;         --with-blcr-libdir, --enable-ltdl-convenience
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;         Any ideas?
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;         Thanks,
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;         Andreea
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;         --- On *Fri, 10/30/09, Sergio D&#237;az /&lt;sdiaz_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     &lt;/mc/compose?to=sdiaz_at_[hidden]&gt;&gt;/* wrote:
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;             From: Sergio D&#237;az &lt;sdiaz_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     &lt;/mc/compose?to=sdiaz_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;             Subject: Re: [OMPI users] Checkpoint/Restart in OpenMPI
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;             To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     &lt;/mc/compose?to=users_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;             Date: Friday, October 30, 2009, 11:28 AM
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;             Hi Andreea,
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;             I compiled an installation of openmpi with
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;             checkpoint/restart support and it is working fine
</span><br>
<span class="quotelev1">&gt;     and I'm
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;             trying to integrate it with SGE.
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;             Did you set the right option compiling openMPI?
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;             Did you installed  BLCR before?
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;             I used these options:
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;             ./configure --prefix=/opt/cesga/openmpi-1.3.3
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;             --with-ft=cr --enable-mpi-threads
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;             --with-blcr=/opt/cesga/blcr-0.8.2
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;             --with-blcr-libdir=/opt/cesga/blcr-0.8.2/lib -with-sge
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;             CC=icc CXX=icpc F77=ifort FC=ifort
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;             Regards,
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;             Sergio
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;             Andreea m. (Costea) escribi&#243;:
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;             Hi,
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;             I'm a newbie, and I want to test the
</span><br>
<span class="quotelev1">&gt;     checkpoint/restart
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;             mechanism included in OpenMPI v 1.3.3. I have tried to
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;             search for some documentation about how to install the
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;             OpenMPI implementation in order to support
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;             checkpoint/restart, and I found lots of links to
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;             <a href="https://svn.open-mpi.org/trac/ompi/wiki/ProcessFT_CR">https://svn.open-mpi.org/trac/ompi/wiki/ProcessFT_CR</a>
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;             which seems not to work. Can you please advise me what
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;             to read or what steps to follow in order to have
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;             everything working?
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;             I already installed OpenMPI but checkpoint/restart
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;             doesn't work. During installation, in installation
</span><br>
<span class="quotelev1">&gt;     log I
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;             found teh following lines (don't know if it's my
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;             software configuration fault or the way I installed
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;             OpenMPI):
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;         
</span><br>
<span class="quotelev1">&gt;        --------------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;             --- MCA component pml:crcpw (m4 configuration macro)
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;             checking for MCA component pml:crcpw compile
</span><br>
<span class="quotelev1">&gt;     mode... dso
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;             checking if MCA component pml:crcpw can compile... no
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;             +++ Configuring MCA framework crcp
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;             checking for no configure components in framework
</span><br>
<span class="quotelev1">&gt;     crcp...
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;             checking for m4 configure components in framework
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;             crcp... bkmrk
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;             --- MCA component crcp:bkmrk (m4 configuration macro)
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;             checking for MCA component crcp:bkmrk compile
</span><br>
<span class="quotelev1">&gt;     mode... dso
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;             checking if MCA component crcp:bkmrk can compile... no
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;         
</span><br>
<span class="quotelev1">&gt;        --------------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;             Thanks,
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;             Andreea
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;         
</span><br>
<span class="quotelev1">&gt;        ------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;             _______________________________________________
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;             users mailing list
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;             users_at_[hidden] &lt;/mc/compose?to=users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;     &gt;&gt;&gt;             <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;             --
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;             Sergio D&#237;az Montes
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;             Centro de Supercomputacion de Galicia
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;             Avda. de Vigo. s/n (Campus Sur) 15706 Santiago de
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;             Compostela (Spain)
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;             Tel: +34 981 56 98 10 ; Fax: +34 981 59 46 16
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;             email: sdiaz_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     &lt;/mc/compose?to=sdiaz_at_[hidden]&gt; ; <a href="http://www.cesga.es/">http://www.cesga.es/</a>
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;             ------------------------------------------------
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;       
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
Sergio D&#237;az Montes
Centro de Supercomputacion de Galicia
Avda. de Vigo. s/n (Campus Sur) 15706 Santiago de Compostela (Spain)
Tel: +34 981 56 98 10 ; Fax: +34 981 59 46 16
email: sdiaz_at_[hidden] ; <a href="http://www.cesga.es/">http://www.cesga.es/</a>
------------------------------------------------
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11046.php">Andreea m. \(Costea\): "Re: [OMPI users] Checkpoint/Restart in OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="11044.php">Andreea m. \(Costea\): "Re: [OMPI users] Checkpoint/Restart in OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="11044.php">Andreea m. \(Costea\): "Re: [OMPI users] Checkpoint/Restart in OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11046.php">Andreea m. \(Costea\): "Re: [OMPI users] Checkpoint/Restart in OpenMPI"</a>
<li><strong>Reply:</strong> <a href="11046.php">Andreea m. \(Costea\): "Re: [OMPI users] Checkpoint/Restart in OpenMPI"</a>
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
