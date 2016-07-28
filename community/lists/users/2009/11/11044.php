<?
$subject_val = "Re: [OMPI users] Checkpoint/Restart in OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  2 07:49:16 2009" -->
<!-- isoreceived="20091102124916" -->
<!-- sent="Mon, 2 Nov 2009 04:49:11 -0800 (PST)" -->
<!-- isosent="20091102124911" -->
<!-- name="Andreea m. \(Costea\)" -->
<!-- email="doodlie_snew_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Checkpoint/Restart in OpenMPI" -->
<!-- id="275005.4171.qm_at_web54305.mail.re2.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4AEED24A.4040009_at_cesga.es" -->
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
<strong>From:</strong> Andreea m. \(Costea\) (<em>doodlie_snew_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-02 07:49:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11045.php">Sergio Díaz: "Re: [OMPI users] Checkpoint/Restart in OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="11043.php">Shiqing Fan: "Re: [OMPI users] Runtime error while running mpirun"</a>
<li><strong>In reply to:</strong> <a href="11042.php">Sergio D&#237;az: "Re: [OMPI users] Checkpoint/Restart in OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11045.php">Sergio Díaz: "Re: [OMPI users] Checkpoint/Restart in OpenMPI"</a>
<li><strong>Reply:</strong> <a href="11045.php">Sergio Díaz: "Re: [OMPI users] Checkpoint/Restart in OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
MPI_HOME is set to be /home/andreea/MPIrelated/OpenMPI/openmpi_1.3.3
<br>
But as far as I see it needs files that are only in SOURCES... so maybe I did something wrong in the installation of OpenMPI?
<br>
If I run an already compiled file it works fine, of course. But it does not compile 
<br>
<p>--- On Mon, 11/2/09, Sergio D&#237;az &lt;sdiaz_at_[hidden]&gt; wrote:
<br>
<p>From: Sergio D&#237;az &lt;sdiaz_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] Checkpoint/Restart in OpenMPI
<br>
To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
<br>
Date: Monday, November 2, 2009, 2:36 PM
<br>
<p>Maybe the variable MPI_HOME??
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
<span class="quotelev1">&gt;&#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;&#160;&#160;
</span><br>
<span class="quotelev1">&gt; /home/andreea/MPIrelated/OpenMPI/openmpi_1.3.3/bin
</span><br>
<span class="quotelev1">&gt; fro LD_LIBRARY_PATH: /home/andreea/MPIrelated/BLCR/blcr-0.8.2/builddir/lib
</span><br>
<span class="quotelev1">&gt;&#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; 
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
<span class="quotelev1">&gt;&#160; &#160;&#160;&#160;From: Sergio D&#237;az &lt;sdiaz_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&#160; &#160;&#160;&#160;Subject: Re: [OMPI users] Checkpoint/Restart in OpenMPI for Sergio
</span><br>
<span class="quotelev1">&gt;&#160; &#160;&#160;&#160;To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&#160; &#160;&#160;&#160;Date: Monday, November 2, 2009, 1:12 PM
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#160; &#160;&#160;&#160;Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#160; &#160;&#160;&#160;The option --enable-ft-thread doesn't exist. By default is enable.
</span><br>
<span class="quotelev1">&gt;&#160; &#160;&#160;&#160;The options --with-blcr and --with-blcr-libdir have to point to
</span><br>
<span class="quotelev1">&gt;&#160; &#160;&#160;&#160;your BLCR installation dir.
</span><br>
<span class="quotelev1">&gt;&#160; &#160;&#160;&#160;Before compiling openmpi, you have to load the blcr modules.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#160; &#160;&#160;&#160;When I installed BLCR, my installation dir was in a different
</span><br>
<span class="quotelev1">&gt;&#160; &#160;&#160;&#160;directory.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#160; &#160;&#160;&#160;Regards,
</span><br>
<span class="quotelev1">&gt;&#160; &#160;&#160;&#160;Sergio
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#160; &#160;&#160;&#160;Andreea m. (Costea) escribi&#243;:
</span><br>
<span class="quotelev2">&gt;&gt;&#160; &#160;&#160;&#160;One more thing:
</span><br>
<span class="quotelev2">&gt;&gt;&#160; &#160;&#160;&#160;when you installed BLCR did you install it in the same directory
</span><br>
<span class="quotelev2">&gt;&gt;&#160; &#160;&#160;&#160;with the sources or in a different one? And when you point to the
</span><br>
<span class="quotelev2">&gt;&gt;&#160; &#160;&#160;&#160;blcr directory and the blcr library directory in openmpi
</span><br>
<span class="quotelev2">&gt;&gt;&#160; &#160;&#160;&#160;configure command, do you point to the installation or to the
</span><br>
<span class="quotelev2">&gt;&gt;&#160; &#160;&#160;&#160;sources directory?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&#160; &#160;&#160;&#160;Regards,
</span><br>
<span class="quotelev2">&gt;&gt;&#160; &#160;&#160;&#160;Andreea
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&#160; &#160;&#160;&#160;--- On *Mon, 11/2/09, Andreea m. (Costea)
</span><br>
<span class="quotelev2">&gt;&gt;&#160; &#160;&#160;&#160;/&lt;doodlie_snew_at_[hidden]&gt;/* wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&#160; &#160; &#160; &#160;&#160;&#160;From: Andreea m. (Costea) &lt;doodlie_snew_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&#160; &#160; &#160; &#160;&#160;&#160;Subject: Re: [OMPI users] Checkpoint/Restart in OpenMPI
</span><br>
<span class="quotelev2">&gt;&gt;&#160; &#160; &#160; &#160;&#160;&#160;To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&#160; &#160; &#160; &#160;&#160;&#160;Date: Monday, November 2, 2009, 7:02 AM
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&#160; &#160; &#160; &#160;&#160;&#160;Hi again.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&#160; &#160; &#160; &#160;&#160;&#160;I have installed BLCR, passed all the tests, and now I tried
</span><br>
<span class="quotelev2">&gt;&gt;&#160; &#160; &#160; &#160;&#160;&#160;to install OpenMPI. This is the configuration call:
</span><br>
<span class="quotelev2">&gt;&gt;&#160; &#160; &#160; &#160;&#160;&#160;--------------------------------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;&#160; &#160; &#160; &#160;&#160;&#160;./configure
</span><br>
<span class="quotelev2">&gt;&gt;&#160; &#160; &#160; &#160;&#160;&#160;--prefix=/home/andreea/MPIrelated/OpenMPI/openmpi_1.3.3/
</span><br>
<span class="quotelev2">&gt;&gt;&#160; &#160; &#160; &#160;&#160;&#160;--enable-ft-thread --with-ft=cr --enable-mpi-threads
</span><br>
<span class="quotelev2">&gt;&gt;&#160; &#160; &#160; &#160;&#160;&#160;--with-blcr=/home/andreea/MPIrelated/BLCR/blcr-0.8.2/builddir/
</span><br>
<span class="quotelev2">&gt;&gt;&#160; &#160; &#160; &#160;&#160;&#160;--with-blcr-libdir=/home/andreea/MPIrelated/BLCR/blcr-0.8.2/builddir/lib
</span><br>
<span class="quotelev2">&gt;&gt;&#160; &#160; &#160; &#160;&#160;&#160;--------------------------------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&#160; &#160; &#160; &#160;&#160;&#160;In the output I got, among others, this warnings:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&#160; &#160; &#160; &#160;&#160;&#160;configure: WARNING: no usable BFD found; using nm-output file
</span><br>
<span class="quotelev2">&gt;&gt;&#160; &#160; &#160; &#160;&#160;&#160;for addr./symbol mapping
</span><br>
<span class="quotelev2">&gt;&gt;&#160; &#160; &#160; &#160;&#160;&#160;configure: WARNING: Unrecognized options: --enable-ft-thread,
</span><br>
<span class="quotelev2">&gt;&gt;&#160; &#160; &#160; &#160;&#160;&#160;--with-ft, --enable-mpi-threads, --with-blcr,
</span><br>
<span class="quotelev2">&gt;&gt;&#160; &#160; &#160; &#160;&#160;&#160;--with-blcr-libdir, --enable-ltdl-convenience
</span><br>
<span class="quotelev2">&gt;&gt;&#160; &#160; &#160; &#160;&#160;&#160;configure: WARNING: Unrecognized options: --enable-ft-thread,
</span><br>
<span class="quotelev2">&gt;&gt;&#160; &#160; &#160; &#160;&#160;&#160;--with-ft, --enable-mpi-threads, --with-blcr,
</span><br>
<span class="quotelev2">&gt;&gt;&#160; &#160; &#160; &#160;&#160;&#160;--with-blcr-libdir, --enable-ltdl-convenience
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&#160; &#160; &#160; &#160;&#160;&#160;Any ideas?
</span><br>
<span class="quotelev2">&gt;&gt;&#160; &#160; &#160; &#160;&#160;&#160;Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;&#160; &#160; &#160; &#160;&#160;&#160;Andreea
</span><br>
<span class="quotelev2">&gt;&gt;&#160; &#160; &#160; &#160;&#160;&#160;--- On *Fri, 10/30/09, Sergio D&#237;az /&lt;sdiaz_at_[hidden]&gt;/* wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&#160; &#160; &#160; &#160; &#160; &#160;&#160;&#160;From: Sergio D&#237;az &lt;sdiaz_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&#160; &#160; &#160; &#160; &#160; &#160;&#160;&#160;Subject: Re: [OMPI users] Checkpoint/Restart in OpenMPI
</span><br>
<span class="quotelev2">&gt;&gt;&#160; &#160; &#160; &#160; &#160; &#160;&#160;&#160;To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&#160; &#160; &#160; &#160; &#160; &#160;&#160;&#160;Date: Friday, October 30, 2009, 11:28 AM
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&#160; &#160; &#160; &#160; &#160; &#160;&#160;&#160;Hi Andreea,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&#160; &#160; &#160; &#160; &#160; &#160;&#160;&#160;I compiled an installation of openmpi with
</span><br>
<span class="quotelev2">&gt;&gt;&#160; &#160; &#160; &#160; &#160; &#160;&#160;&#160;checkpoint/restart support and it is working fine and I'm
</span><br>
<span class="quotelev2">&gt;&gt;&#160; &#160; &#160; &#160; &#160; &#160;&#160;&#160;trying to integrate it with SGE.
</span><br>
<span class="quotelev2">&gt;&gt;&#160; &#160; &#160; &#160; &#160; &#160;&#160;&#160;Did you set the right option compiling openMPI?
</span><br>
<span class="quotelev2">&gt;&gt;&#160; &#160; &#160; &#160; &#160; &#160;&#160;&#160;Did you installed&#160; BLCR before?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&#160; &#160; &#160; &#160; &#160; &#160;&#160;&#160;I used these options:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&#160; &#160; &#160; &#160; &#160; &#160;&#160;&#160;./configure --prefix=/opt/cesga/openmpi-1.3.3 
</span><br>
<span class="quotelev2">&gt;&gt;&#160; &#160; &#160; &#160; &#160; &#160;&#160;&#160;--with-ft=cr --enable-mpi-threads
</span><br>
<span class="quotelev2">&gt;&gt;&#160; &#160; &#160; &#160; &#160; &#160;&#160;&#160;--with-blcr=/opt/cesga/blcr-0.8.2 
</span><br>
<span class="quotelev2">&gt;&gt;&#160; &#160; &#160; &#160; &#160; &#160;&#160;&#160;--with-blcr-libdir=/opt/cesga/blcr-0.8.2/lib -with-sge
</span><br>
<span class="quotelev2">&gt;&gt;&#160; &#160; &#160; &#160; &#160; &#160;&#160;&#160;CC=icc CXX=icpc F77=ifort FC=ifort
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&#160; &#160; &#160; &#160; &#160; &#160;&#160;&#160;Regards,
</span><br>
<span class="quotelev2">&gt;&gt;&#160; &#160; &#160; &#160; &#160; &#160;&#160;&#160;Sergio
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&#160; &#160; &#160; &#160; &#160; &#160;&#160;&#160;Andreea m. (Costea) escribi&#243;:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&#160; &#160; &#160; &#160; &#160; &#160;&#160;&#160;Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&#160; &#160; &#160; &#160; &#160; &#160;&#160;&#160;I'm a newbie, and I want to test the checkpoint/restart
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&#160; &#160; &#160; &#160; &#160; &#160;&#160;&#160;mechanism included in OpenMPI v 1.3.3. I have tried to
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&#160; &#160; &#160; &#160; &#160; &#160;&#160;&#160;search for some documentation about how to install the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&#160; &#160; &#160; &#160; &#160; &#160;&#160;&#160;OpenMPI implementation in order to support
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&#160; &#160; &#160; &#160; &#160; &#160;&#160;&#160;checkpoint/restart, and I found lots of links to
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&#160; &#160; &#160; &#160; &#160; &#160;&#160;&#160;<a href="https://svn.open-mpi.org/trac/ompi/wiki/ProcessFT_CR">https://svn.open-mpi.org/trac/ompi/wiki/ProcessFT_CR</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&#160; &#160; &#160; &#160; &#160; &#160;&#160;&#160;which seems not to work. Can you please advise me what
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&#160; &#160; &#160; &#160; &#160; &#160;&#160;&#160;to read or what steps to follow in order to have
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&#160; &#160; &#160; &#160; &#160; &#160;&#160;&#160;everything working?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&#160; &#160; &#160; &#160; &#160; &#160;&#160;&#160;I already installed OpenMPI but checkpoint/restart
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&#160; &#160; &#160; &#160; &#160; &#160;&#160;&#160;doesn't work. During installation, in installation log I
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&#160; &#160; &#160; &#160; &#160; &#160;&#160;&#160;found teh following lines (don't know if it's my
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&#160; &#160; &#160; &#160; &#160; &#160;&#160;&#160;software configuration fault or the way I installed
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&#160; &#160; &#160; &#160; &#160; &#160;&#160;&#160;OpenMPI):
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&#160; &#160; &#160; &#160; &#160; &#160;&#160;&#160;--------------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&#160; &#160; &#160; &#160; &#160; &#160;&#160;&#160;--- MCA component pml:crcpw (m4 configuration macro)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&#160; &#160; &#160; &#160; &#160; &#160;&#160;&#160;checking for MCA component pml:crcpw compile mode... dso
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&#160; &#160; &#160; &#160; &#160; &#160;&#160;&#160;checking if MCA component pml:crcpw can compile... no
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&#160; &#160; &#160; &#160; &#160; &#160;&#160;&#160;+++ Configuring MCA framework crcp
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&#160; &#160; &#160; &#160; &#160; &#160;&#160;&#160;checking for no configure components in framework crcp...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&#160; &#160; &#160; &#160; &#160; &#160;&#160;&#160;checking for m4 configure components in framework
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&#160; &#160; &#160; &#160; &#160; &#160;&#160;&#160;crcp... bkmrk
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&#160; &#160; &#160; &#160; &#160; &#160;&#160;&#160;--- MCA component crcp:bkmrk (m4 configuration macro)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&#160; &#160; &#160; &#160; &#160; &#160;&#160;&#160;checking for MCA component crcp:bkmrk compile mode... dso
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&#160; &#160; &#160; &#160; &#160; &#160;&#160;&#160;checking if MCA component crcp:bkmrk can compile... no
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&#160; &#160; &#160; &#160; &#160; &#160;&#160;&#160;--------------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&#160; &#160; &#160; &#160; &#160; &#160;&#160;&#160;Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&#160; &#160; &#160; &#160; &#160; &#160;&#160;&#160;Andreea
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&#160; &#160; &#160; &#160; &#160; &#160;&#160;&#160;------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&#160; &#160; &#160; &#160; &#160; &#160;&#160;&#160;_______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&#160; &#160; &#160; &#160; &#160; &#160;&#160;&#160;users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&#160; &#160; &#160; &#160; &#160; &#160;&#160;&#160;users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&#160; &#160; &#160; &#160; &#160; &#160;&#160;&#160;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&#160; &#160; &#160; &#160; &#160; &#160;&#160;&#160;-- 
</span><br>
<span class="quotelev2">&gt;&gt;&#160; &#160; &#160; &#160; &#160; &#160;&#160;&#160;Sergio D&#237;az Montes
</span><br>
<span class="quotelev2">&gt;&gt;&#160; &#160; &#160; &#160; &#160; &#160;&#160;&#160;Centro de Supercomputacion de Galicia
</span><br>
<span class="quotelev2">&gt;&gt;&#160; &#160; &#160; &#160; &#160; &#160;&#160;&#160;Avda. de Vigo. s/n (Campus Sur) 15706 Santiago de
</span><br>
<span class="quotelev2">&gt;&gt;&#160; &#160; &#160; &#160; &#160; &#160;&#160;&#160;Compostela (Spain)
</span><br>
<span class="quotelev2">&gt;&gt;&#160; &#160; &#160; &#160; &#160; &#160;&#160;&#160;Tel: +34 981 56 98 10 ; Fax: +34 981 59 46 16
</span><br>
<span class="quotelev2">&gt;&gt;&#160; &#160; &#160; &#160; &#160; &#160;&#160;&#160;email: sdiaz_at_[hidden] ; <a href="http://www.cesga.es/">http://www.cesga.es/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&#160; &#160; &#160; &#160; &#160; &#160;&#160;&#160;------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&#160; &#160; &#160; &#160; 


      
</span><br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11044/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11045.php">Sergio Díaz: "Re: [OMPI users] Checkpoint/Restart in OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="11043.php">Shiqing Fan: "Re: [OMPI users] Runtime error while running mpirun"</a>
<li><strong>In reply to:</strong> <a href="11042.php">Sergio D&#237;az: "Re: [OMPI users] Checkpoint/Restart in OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11045.php">Sergio Díaz: "Re: [OMPI users] Checkpoint/Restart in OpenMPI"</a>
<li><strong>Reply:</strong> <a href="11045.php">Sergio Díaz: "Re: [OMPI users] Checkpoint/Restart in OpenMPI"</a>
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
