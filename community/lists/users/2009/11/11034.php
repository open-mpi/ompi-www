<?
$subject_val = "Re: [OMPI users] Checkpoint/Restart in OpenMPI for Sergio";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  2 06:12:09 2009" -->
<!-- isoreceived="20091102111209" -->
<!-- sent="Mon, 02 Nov 2009 12:12:40 +0100" -->
<!-- isosent="20091102111240" -->
<!-- name="Sergio D&#237;az" -->
<!-- email="sdiaz_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Checkpoint/Restart in OpenMPI for Sergio" -->
<!-- id="4AEEBEA8.1040509_at_cesga.es" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="459219.52748.qm_at_web54304.mail.re2.yahoo.com" -->
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
<strong>From:</strong> Sergio D&#237;az (<em>sdiaz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-02 06:12:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11035.php">Andreea m. \(Costea\): "Re: [OMPI users] Checkpoint/Restart in OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="11033.php">basant.lakhotiya_at_[hidden]: "Re: [OMPI users] Runtime error while running mpirun"</a>
<li><strong>In reply to:</strong> <a href="11031.php">Andreea m. \(Costea\): "Re: [OMPI users] Checkpoint/Restart in OpenMPI for Sergio"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11035.php">Andreea m. \(Costea\): "Re: [OMPI users] Checkpoint/Restart in OpenMPI"</a>
<li><strong>Reply:</strong> <a href="11035.php">Andreea m. \(Costea\): "Re: [OMPI users] Checkpoint/Restart in OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>The option --enable-ft-thread doesn't exist. By default is enable.
<br>
The options --with-blcr and --with-blcr-libdir have to point to your 
<br>
BLCR installation dir.
<br>
Before compiling openmpi, you have to load the blcr modules.
<br>
<p>When I installed BLCR, my installation dir was in a different directory.
<br>
<p>Regards,
<br>
Sergio
<br>
<p><p><p>Andreea m. (Costea) escribi&#243;:
<br>
<span class="quotelev1">&gt; One more thing:
</span><br>
<span class="quotelev1">&gt; when you installed BLCR did you install it in the same directory with 
</span><br>
<span class="quotelev1">&gt; the sources or in a different one? And when you point to the blcr 
</span><br>
<span class="quotelev1">&gt; directory and the blcr library directory in openmpi configure command, 
</span><br>
<span class="quotelev1">&gt; do you point to the installation or to the sources directory?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Andreea
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --- On *Mon, 11/2/09, Andreea m. (Costea) /&lt;doodlie_snew_at_[hidden]&gt;/* 
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     From: Andreea m. (Costea) &lt;doodlie_snew_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     Subject: Re: [OMPI users] Checkpoint/Restart in OpenMPI
</span><br>
<span class="quotelev1">&gt;     To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     Date: Monday, November 2, 2009, 7:02 AM
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Hi again.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I have installed BLCR, passed all the tests, and now I tried to
</span><br>
<span class="quotelev1">&gt;     install OpenMPI. This is the configuration call:
</span><br>
<span class="quotelev1">&gt;     --------------------------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;     ./configure
</span><br>
<span class="quotelev1">&gt;     --prefix=/home/andreea/MPIrelated/OpenMPI/openmpi_1.3.3/
</span><br>
<span class="quotelev1">&gt;     --enable-ft-thread --with-ft=cr --enable-mpi-threads
</span><br>
<span class="quotelev1">&gt;     --with-blcr=/home/andreea/MPIrelated/BLCR/blcr-0.8.2/builddir/
</span><br>
<span class="quotelev1">&gt;     --with-blcr-libdir=/home/andreea/MPIrelated/BLCR/blcr-0.8.2/builddir/lib
</span><br>
<span class="quotelev1">&gt;     --------------------------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     In the output I got, among others, this warnings:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     configure: WARNING: no usable BFD found; using nm-output file for
</span><br>
<span class="quotelev1">&gt;     addr./symbol mapping
</span><br>
<span class="quotelev1">&gt;     configure: WARNING: Unrecognized options: --enable-ft-thread,
</span><br>
<span class="quotelev1">&gt;     --with-ft, --enable-mpi-threads, --with-blcr, --with-blcr-libdir,
</span><br>
<span class="quotelev1">&gt;     --enable-ltdl-convenience
</span><br>
<span class="quotelev1">&gt;     configure: WARNING: Unrecognized options: --enable-ft-thread,
</span><br>
<span class="quotelev1">&gt;     --with-ft, --enable-mpi-threads, --with-blcr, --with-blcr-libdir,
</span><br>
<span class="quotelev1">&gt;     --enable-ltdl-convenience
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Any ideas?
</span><br>
<span class="quotelev1">&gt;     Thanks,
</span><br>
<span class="quotelev1">&gt;     Andreea
</span><br>
<span class="quotelev1">&gt;     --- On *Fri, 10/30/09, Sergio D&#237;az /&lt;sdiaz_at_[hidden]&gt;/* wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         From: Sergio D&#237;az &lt;sdiaz_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;         Subject: Re: [OMPI users] Checkpoint/Restart in OpenMPI
</span><br>
<span class="quotelev1">&gt;         To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;         Date: Friday, October 30, 2009, 11:28 AM
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Hi Andreea,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         I compiled an installation of openmpi with checkpoint/restart
</span><br>
<span class="quotelev1">&gt;         support and it is working fine and I'm trying to integrate it
</span><br>
<span class="quotelev1">&gt;         with SGE.
</span><br>
<span class="quotelev1">&gt;         Did you set the right option compiling openMPI?
</span><br>
<span class="quotelev1">&gt;         Did you installed  BLCR before?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         I used these options:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         ./configure --prefix=/opt/cesga/openmpi-1.3.3  --with-ft=cr
</span><br>
<span class="quotelev1">&gt;         --enable-mpi-threads --with-blcr=/opt/cesga/blcr-0.8.2 
</span><br>
<span class="quotelev1">&gt;         --with-blcr-libdir=/opt/cesga/blcr-0.8.2/lib -with-sge CC=icc
</span><br>
<span class="quotelev1">&gt;         CXX=icpc F77=ifort FC=ifort
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Regards,
</span><br>
<span class="quotelev1">&gt;         Sergio
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Andreea m. (Costea) escribi&#243;:
</span><br>
<span class="quotelev2">&gt;&gt;         Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         I'm a newbie, and I want to test the checkpoint/restart
</span><br>
<span class="quotelev2">&gt;&gt;         mechanism included in OpenMPI v 1.3.3. I have tried to search
</span><br>
<span class="quotelev2">&gt;&gt;         for some documentation about how to install the OpenMPI
</span><br>
<span class="quotelev2">&gt;&gt;         implementation in order to support checkpoint/restart, and I
</span><br>
<span class="quotelev2">&gt;&gt;         found lots of links to
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         <a href="https://svn.open-mpi.org/trac/ompi/wiki/ProcessFT_CR">https://svn.open-mpi.org/trac/ompi/wiki/ProcessFT_CR</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         which seems not to work. Can you please advise me what to
</span><br>
<span class="quotelev2">&gt;&gt;         read or what steps to follow in order to have everything working?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         I already installed OpenMPI but checkpoint/restart doesn't
</span><br>
<span class="quotelev2">&gt;&gt;         work. During installation, in installation log I found teh
</span><br>
<span class="quotelev2">&gt;&gt;         following lines (don't know if it's my software configuration
</span><br>
<span class="quotelev2">&gt;&gt;         fault or the way I installed OpenMPI):
</span><br>
<span class="quotelev2">&gt;&gt;         --------------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;         --- MCA component pml:crcpw (m4 configuration macro)
</span><br>
<span class="quotelev2">&gt;&gt;         checking for MCA component pml:crcpw compile mode... dso
</span><br>
<span class="quotelev2">&gt;&gt;         checking if MCA component pml:crcpw can compile... no
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         +++ Configuring MCA framework crcp
</span><br>
<span class="quotelev2">&gt;&gt;         checking for no configure components in framework crcp...
</span><br>
<span class="quotelev2">&gt;&gt;         checking for m4 configure components in framework crcp... bkmrk
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         --- MCA component crcp:bkmrk (m4 configuration macro)
</span><br>
<span class="quotelev2">&gt;&gt;         checking for MCA component crcp:bkmrk compile mode... dso
</span><br>
<span class="quotelev2">&gt;&gt;         checking if MCA component crcp:bkmrk can compile... no
</span><br>
<span class="quotelev2">&gt;&gt;         --------------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;         Andreea
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         ------------------------------------------------------------------------
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         -- 
</span><br>
<span class="quotelev1">&gt;         Sergio D&#237;az Montes
</span><br>
<span class="quotelev1">&gt;         Centro de Supercomputacion de Galicia
</span><br>
<span class="quotelev1">&gt;         Avda. de Vigo. s/n (Campus Sur) 15706 Santiago de Compostela
</span><br>
<span class="quotelev1">&gt;         (Spain)
</span><br>
<span class="quotelev1">&gt;         Tel: +34 981 56 98 10 ; Fax: +34 981 59 46 16
</span><br>
<span class="quotelev1">&gt;         email: sdiaz_at_[hidden] ; <a href="http://www.cesga.es/">http://www.cesga.es/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         ------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         -----Inline Attachment Follows-----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         _______________________________________________
</span><br>
<span class="quotelev1">&gt;         users mailing list
</span><br>
<span class="quotelev1">&gt;         users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;         <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<p>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="../../att-11034/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="../../att-11034/02-part" alt="picture">
<!-- attachment="02-part" -->
<hr>
<img src="../../att-11034/image002.jpg" alt="image002.jpg">
<!-- attachment="image002.jpg" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11035.php">Andreea m. \(Costea\): "Re: [OMPI users] Checkpoint/Restart in OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="11033.php">basant.lakhotiya_at_[hidden]: "Re: [OMPI users] Runtime error while running mpirun"</a>
<li><strong>In reply to:</strong> <a href="11031.php">Andreea m. \(Costea\): "Re: [OMPI users] Checkpoint/Restart in OpenMPI for Sergio"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11035.php">Andreea m. \(Costea\): "Re: [OMPI users] Checkpoint/Restart in OpenMPI"</a>
<li><strong>Reply:</strong> <a href="11035.php">Andreea m. \(Costea\): "Re: [OMPI users] Checkpoint/Restart in OpenMPI"</a>
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
