<?
$subject_val = "Re: [OMPI users] Checkpoint/Restart in OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  2 07:35:44 2009" -->
<!-- isoreceived="20091102123544" -->
<!-- sent="Mon, 02 Nov 2009 13:36:26 +0100" -->
<!-- isosent="20091102123626" -->
<!-- name="Sergio D&#237;az" -->
<!-- email="sdiaz_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Checkpoint/Restart in OpenMPI" -->
<!-- id="4AEED24A.4040009_at_cesga.es" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="107392.23500.qm_at_web54306.mail.re2.yahoo.com" -->
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
<strong>Date:</strong> 2009-11-02 07:36:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11043.php">Shiqing Fan: "Re: [OMPI users] Runtime error while running mpirun"</a>
<li><strong>Previous message:</strong> <a href="11041.php">Andreea m. \(Costea\): "Re: [OMPI users] Checkpoint/Restart in OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="11041.php">Andreea m. \(Costea\): "Re: [OMPI users] Checkpoint/Restart in OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11044.php">Andreea m. \(Costea\): "Re: [OMPI users] Checkpoint/Restart in OpenMPI"</a>
<li><strong>Reply:</strong> <a href="11044.php">Andreea m. \(Costea\): "Re: [OMPI users] Checkpoint/Restart in OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Maybe the variable MPI_HOME??
<br>
<p><p><p>Andreea m. (Costea) escribi&#243;:
<br>
<span class="quotelev1">&gt; Ok...
</span><br>
<span class="quotelev1">&gt; Maybe someone can clear me :)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have BLCR sources in this directory :
</span><br>
<span class="quotelev1">&gt; /home/andreea/MPIrelated/BLCR/blcr-0.8.2
</span><br>
<span class="quotelev1">&gt; it's installation is in this directory:
</span><br>
<span class="quotelev1">&gt; /home/andreea/MPIrelated/BLCR/blcr-0.8.2/builddir
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OpenMPI:
</span><br>
<span class="quotelev1">&gt; sources: /home/andreea/MPIrelated/OpenMPI/SOURCES
</span><br>
<span class="quotelev1">&gt; installation: /home/andreea/MPIrelated/OpenMPI/openmpi_1.3.3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I added to the variables (PATH, LD_LIBRARY_PATH) teh paths from the 
</span><br>
<span class="quotelev1">&gt; installation directories:
</span><br>
<span class="quotelev1">&gt; for PATH I added: /home/andreea/MPIrelated/BLCR/blcr-0.8.2/builddir/bin
</span><br>
<span class="quotelev1">&gt;                             
</span><br>
<span class="quotelev1">&gt; /home/andreea/MPIrelated/OpenMPI/openmpi_1.3.3/bin
</span><br>
<span class="quotelev1">&gt; fro LD_LIBRARY_PATH: /home/andreea/MPIrelated/BLCR/blcr-0.8.2/builddir/lib
</span><br>
<span class="quotelev1">&gt;                                      
</span><br>
<span class="quotelev1">&gt; /home/andreea/MPIrelated/OpenMPI/openmpi_1.3.3/lib
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I want to compile a c program, MPI based, I get errors of not 
</span><br>
<span class="quotelev1">&gt; finding the mpi.h (which is located in the OpenMPI/SOURCES/include 
</span><br>
<span class="quotelev1">&gt; directory). It can't also find the constants like: 
</span><br>
<span class="quotelev1">&gt; MPI_COMM_WORLD,MPI_INT, etc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Help, anyone?
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Andreea
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;     Subject: Re: [OMPI users] Checkpoint/Restart in OpenMPI for Sergio
</span><br>
<span class="quotelev1">&gt;     To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     Date: Monday, November 2, 2009, 1:12 PM
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     The option --enable-ft-thread doesn't exist. By default is enable.
</span><br>
<span class="quotelev1">&gt;     The options --with-blcr and --with-blcr-libdir have to point to
</span><br>
<span class="quotelev1">&gt;     your BLCR installation dir.
</span><br>
<span class="quotelev1">&gt;     Before compiling openmpi, you have to load the blcr modules.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     When I installed BLCR, my installation dir was in a different
</span><br>
<span class="quotelev1">&gt;     directory.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Regards,
</span><br>
<span class="quotelev1">&gt;     Sergio
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Andreea m. (Costea) escribi&#243;:
</span><br>
<span class="quotelev2">&gt;&gt;     One more thing:
</span><br>
<span class="quotelev2">&gt;&gt;     when you installed BLCR did you install it in the same directory
</span><br>
<span class="quotelev2">&gt;&gt;     with the sources or in a different one? And when you point to the
</span><br>
<span class="quotelev2">&gt;&gt;     blcr directory and the blcr library directory in openmpi
</span><br>
<span class="quotelev2">&gt;&gt;     configure command, do you point to the installation or to the
</span><br>
<span class="quotelev2">&gt;&gt;     sources directory?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Regards,
</span><br>
<span class="quotelev2">&gt;&gt;     Andreea
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     --- On *Mon, 11/2/09, Andreea m. (Costea)
</span><br>
<span class="quotelev2">&gt;&gt;     /&lt;doodlie_snew_at_[hidden]&gt;/* wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         From: Andreea m. (Costea) &lt;doodlie_snew_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Subject: Re: [OMPI users] Checkpoint/Restart in OpenMPI
</span><br>
<span class="quotelev2">&gt;&gt;         To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Date: Monday, November 2, 2009, 7:02 AM
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Hi again.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         I have installed BLCR, passed all the tests, and now I tried
</span><br>
<span class="quotelev2">&gt;&gt;         to install OpenMPI. This is the configuration call:
</span><br>
<span class="quotelev2">&gt;&gt;         --------------------------------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;         ./configure
</span><br>
<span class="quotelev2">&gt;&gt;         --prefix=/home/andreea/MPIrelated/OpenMPI/openmpi_1.3.3/
</span><br>
<span class="quotelev2">&gt;&gt;         --enable-ft-thread --with-ft=cr --enable-mpi-threads
</span><br>
<span class="quotelev2">&gt;&gt;         --with-blcr=/home/andreea/MPIrelated/BLCR/blcr-0.8.2/builddir/
</span><br>
<span class="quotelev2">&gt;&gt;         --with-blcr-libdir=/home/andreea/MPIrelated/BLCR/blcr-0.8.2/builddir/lib
</span><br>
<span class="quotelev2">&gt;&gt;         --------------------------------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         In the output I got, among others, this warnings:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         configure: WARNING: no usable BFD found; using nm-output file
</span><br>
<span class="quotelev2">&gt;&gt;         for addr./symbol mapping
</span><br>
<span class="quotelev2">&gt;&gt;         configure: WARNING: Unrecognized options: --enable-ft-thread,
</span><br>
<span class="quotelev2">&gt;&gt;         --with-ft, --enable-mpi-threads, --with-blcr,
</span><br>
<span class="quotelev2">&gt;&gt;         --with-blcr-libdir, --enable-ltdl-convenience
</span><br>
<span class="quotelev2">&gt;&gt;         configure: WARNING: Unrecognized options: --enable-ft-thread,
</span><br>
<span class="quotelev2">&gt;&gt;         --with-ft, --enable-mpi-threads, --with-blcr,
</span><br>
<span class="quotelev2">&gt;&gt;         --with-blcr-libdir, --enable-ltdl-convenience
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Any ideas?
</span><br>
<span class="quotelev2">&gt;&gt;         Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;         Andreea
</span><br>
<span class="quotelev2">&gt;&gt;         --- On *Fri, 10/30/09, Sergio D&#237;az /&lt;sdiaz_at_[hidden]&gt;/* wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             From: Sergio D&#237;az &lt;sdiaz_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             Subject: Re: [OMPI users] Checkpoint/Restart in OpenMPI
</span><br>
<span class="quotelev2">&gt;&gt;             To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             Date: Friday, October 30, 2009, 11:28 AM
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             Hi Andreea,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             I compiled an installation of openmpi with
</span><br>
<span class="quotelev2">&gt;&gt;             checkpoint/restart support and it is working fine and I'm
</span><br>
<span class="quotelev2">&gt;&gt;             trying to integrate it with SGE.
</span><br>
<span class="quotelev2">&gt;&gt;             Did you set the right option compiling openMPI?
</span><br>
<span class="quotelev2">&gt;&gt;             Did you installed  BLCR before?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             I used these options:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             ./configure --prefix=/opt/cesga/openmpi-1.3.3 
</span><br>
<span class="quotelev2">&gt;&gt;             --with-ft=cr --enable-mpi-threads
</span><br>
<span class="quotelev2">&gt;&gt;             --with-blcr=/opt/cesga/blcr-0.8.2 
</span><br>
<span class="quotelev2">&gt;&gt;             --with-blcr-libdir=/opt/cesga/blcr-0.8.2/lib -with-sge
</span><br>
<span class="quotelev2">&gt;&gt;             CC=icc CXX=icpc F77=ifort FC=ifort
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             Regards,
</span><br>
<span class="quotelev2">&gt;&gt;             Sergio
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             Andreea m. (Costea) escribi&#243;:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             I'm a newbie, and I want to test the checkpoint/restart
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             mechanism included in OpenMPI v 1.3.3. I have tried to
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             search for some documentation about how to install the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             OpenMPI implementation in order to support
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             checkpoint/restart, and I found lots of links to
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             <a href="https://svn.open-mpi.org/trac/ompi/wiki/ProcessFT_CR">https://svn.open-mpi.org/trac/ompi/wiki/ProcessFT_CR</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             which seems not to work. Can you please advise me what
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             to read or what steps to follow in order to have
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             everything working?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             I already installed OpenMPI but checkpoint/restart
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             doesn't work. During installation, in installation log I
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             found teh following lines (don't know if it's my
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             software configuration fault or the way I installed
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             OpenMPI):
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             --------------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             --- MCA component pml:crcpw (m4 configuration macro)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             checking for MCA component pml:crcpw compile mode... dso
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             checking if MCA component pml:crcpw can compile... no
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             +++ Configuring MCA framework crcp
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             checking for no configure components in framework crcp...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             checking for m4 configure components in framework
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             crcp... bkmrk
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             --- MCA component crcp:bkmrk (m4 configuration macro)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             checking for MCA component crcp:bkmrk compile mode... dso
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             checking if MCA component crcp:bkmrk can compile... no
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             --------------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             Andreea
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             ------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             -- 
</span><br>
<span class="quotelev2">&gt;&gt;             Sergio D&#237;az Montes
</span><br>
<span class="quotelev2">&gt;&gt;             Centro de Supercomputacion de Galicia
</span><br>
<span class="quotelev2">&gt;&gt;             Avda. de Vigo. s/n (Campus Sur) 15706 Santiago de
</span><br>
<span class="quotelev2">&gt;&gt;             Compostela (Spain)
</span><br>
<span class="quotelev2">&gt;&gt;             Tel: +34 981 56 98 10 ; Fax: +34 981 59 46 16
</span><br>
<span class="quotelev2">&gt;&gt;             email: sdiaz_at_[hidden] ; <a href="http://www.cesga.es/">http://www.cesga.es/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             ------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             -----Inline Attachment Follows-----
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;             users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;             users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;             <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         -----Inline Attachment Follows-----
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;         users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;         users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;         <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     ------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;     users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;     users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     -- 
</span><br>
<span class="quotelev1">&gt;     Sergio D&#237;az Montes
</span><br>
<span class="quotelev1">&gt;     Centro de Supercomputacion de Galicia
</span><br>
<span class="quotelev1">&gt;     Avda. de Vigo. s/n (Campus Sur) 15706 Santiago de Compostela (Spain)
</span><br>
<span class="quotelev1">&gt;     Tel: +34 981 56 98 10 ; Fax: +34 981 59 46 16
</span><br>
<span class="quotelev1">&gt;     email: sdiaz_at_[hidden] ; <a href="http://www.cesga.es/">http://www.cesga.es/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     ------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     -----Inline Attachment Follows-----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     users mailing list
</span><br>
<span class="quotelev1">&gt;     users_at_[hidden] &lt;/mc/compose?to=users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="11043.php">Shiqing Fan: "Re: [OMPI users] Runtime error while running mpirun"</a>
<li><strong>Previous message:</strong> <a href="11041.php">Andreea m. \(Costea\): "Re: [OMPI users] Checkpoint/Restart in OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="11041.php">Andreea m. \(Costea\): "Re: [OMPI users] Checkpoint/Restart in OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11044.php">Andreea m. \(Costea\): "Re: [OMPI users] Checkpoint/Restart in OpenMPI"</a>
<li><strong>Reply:</strong> <a href="11044.php">Andreea m. \(Costea\): "Re: [OMPI users] Checkpoint/Restart in OpenMPI"</a>
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
