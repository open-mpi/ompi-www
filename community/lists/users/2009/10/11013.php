<?
$subject_val = "Re: [OMPI users] Checkpoint/Restart in OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 30 05:30:26 2009" -->
<!-- isoreceived="20091030093026" -->
<!-- sent="Fri, 30 Oct 2009 10:28:19 +0100" -->
<!-- isosent="20091030092819" -->
<!-- name="Sergio D&#237;az" -->
<!-- email="sdiaz_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Checkpoint/Restart in OpenMPI" -->
<!-- id="4AEAB1B3.2050007_at_cesga.es" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="57272.88433.qm_at_web54306.mail.re2.yahoo.com" -->
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
<strong>Date:</strong> 2009-10-30 05:28:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11014.php">Andreea m. \(Costea\): "Re: [OMPI users] Checkpoint/Restart in OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="11012.php">Andreea m. \(Costea\): "[OMPI users] Checkpoint/Restart in OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="11012.php">Andreea m. \(Costea\): "[OMPI users] Checkpoint/Restart in OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11014.php">Andreea m. \(Costea\): "Re: [OMPI users] Checkpoint/Restart in OpenMPI"</a>
<li><strong>Reply:</strong> <a href="11014.php">Andreea m. \(Costea\): "Re: [OMPI users] Checkpoint/Restart in OpenMPI"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/11/11036.php">Andreea m. \(Costea\): "Re: [OMPI users] Checkpoint/Restart in OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Andreea,
<br>
<p>I compiled an installation of openmpi with checkpoint/restart support 
<br>
and it is working fine and I'm trying to integrate it with SGE.
<br>
Did you set the right option compiling openMPI?
<br>
Did you installed  BLCR before?
<br>
<p>I used these options:
<br>
<p>./configure --prefix=/opt/cesga/openmpi-1.3.3  --with-ft=cr 
<br>
--enable-mpi-threads --with-blcr=/opt/cesga/blcr-0.8.2  
<br>
--with-blcr-libdir=/opt/cesga/blcr-0.8.2/lib -with-sge CC=icc CXX=icpc 
<br>
F77=ifort FC=ifort
<br>
<p>Regards,
<br>
Sergio
<br>
<p>Andreea m. (Costea) escribi&#243;:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm a newbie, and I want to test the checkpoint/restart mechanism 
</span><br>
<span class="quotelev1">&gt; included in OpenMPI v 1.3.3. I have tried to search for some 
</span><br>
<span class="quotelev1">&gt; documentation about how to install the OpenMPI implementation in order 
</span><br>
<span class="quotelev1">&gt; to support checkpoint/restart, and I found lots of links to
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/ompi/wiki/ProcessFT_CR">https://svn.open-mpi.org/trac/ompi/wiki/ProcessFT_CR</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; which seems not to work. Can you please advise me what to read or what 
</span><br>
<span class="quotelev1">&gt; steps to follow in order to have everything working?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I already installed OpenMPI but checkpoint/restart doesn't work. 
</span><br>
<span class="quotelev1">&gt; During installation, in installation log I found teh following lines 
</span><br>
<span class="quotelev1">&gt; (don't know if it's my software configuration fault or the way I 
</span><br>
<span class="quotelev1">&gt; installed OpenMPI):
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --- MCA component pml:crcpw (m4 configuration macro)
</span><br>
<span class="quotelev1">&gt; checking for MCA component pml:crcpw compile mode... dso
</span><br>
<span class="quotelev1">&gt; checking if MCA component pml:crcpw can compile... no
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +++ Configuring MCA framework crcp
</span><br>
<span class="quotelev1">&gt; checking for no configure components in framework crcp...
</span><br>
<span class="quotelev1">&gt; checking for m4 configure components in framework crcp... bkmrk
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --- MCA component crcp:bkmrk (m4 configuration macro)
</span><br>
<span class="quotelev1">&gt; checking for MCA component crcp:bkmrk compile mode... dso
</span><br>
<span class="quotelev1">&gt; checking if MCA component crcp:bkmrk can compile... no
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Andreea
</span><br>
<span class="quotelev1">&gt;
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11013/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-11013/image002.jpg" alt="image002.jpg">
<!-- attachment="image002.jpg" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11014.php">Andreea m. \(Costea\): "Re: [OMPI users] Checkpoint/Restart in OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="11012.php">Andreea m. \(Costea\): "[OMPI users] Checkpoint/Restart in OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="11012.php">Andreea m. \(Costea\): "[OMPI users] Checkpoint/Restart in OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11014.php">Andreea m. \(Costea\): "Re: [OMPI users] Checkpoint/Restart in OpenMPI"</a>
<li><strong>Reply:</strong> <a href="11014.php">Andreea m. \(Costea\): "Re: [OMPI users] Checkpoint/Restart in OpenMPI"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/11/11036.php">Andreea m. \(Costea\): "Re: [OMPI users] Checkpoint/Restart in OpenMPI"</a>
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
