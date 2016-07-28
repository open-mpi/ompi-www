<?
$subject_val = "Re: [OMPI users] BUILDING OPENMPI ON UBUNTU WITH INTEL 11.1";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  3 15:27:07 2011" -->
<!-- isoreceived="20110503192707" -->
<!-- sent="Tue, 3 May 2011 15:27:01 -0400" -->
<!-- isosent="20110503192701" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] BUILDING OPENMPI ON UBUNTU WITH INTEL 11.1" -->
<!-- id="B6660231-2C35-4FD2-ACF0-C88E6FA2D6C8_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1304446511.4dc0462f506b2_at_webmail.adept.co.za" -->
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
<strong>Subject:</strong> Re: [OMPI users] BUILDING OPENMPI ON UBUNTU WITH INTEL 11.1<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-03 15:27:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16431.php">Steph Bredenhann: "Re: [OMPI users] BUILDING OPENMPI ON UBUNTU WITH INTEL 11.1"</a>
<li><strong>Previous message:</strong> <a href="16429.php">Steph Bredenhann: "Re: [OMPI users] BUILDING OPENMPI ON UBUNTU WITH INTEL 11.1"</a>
<li><strong>In reply to:</strong> <a href="16429.php">Steph Bredenhann: "Re: [OMPI users] BUILDING OPENMPI ON UBUNTU WITH INTEL 11.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16431.php">Steph Bredenhann: "Re: [OMPI users] BUILDING OPENMPI ON UBUNTU WITH INTEL 11.1"</a>
<li><strong>Reply:</strong> <a href="16431.php">Steph Bredenhann: "Re: [OMPI users] BUILDING OPENMPI ON UBUNTU WITH INTEL 11.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ah, I see why your output is munged -- there's a bunch of ^M's in there.
<br>
<p>It looks like OMPI's configure script got mucked up somehow.  Did you expand the tarball on a windows machine and copy it over to a Linux box, perchance?  If so, try expanding it directly on your Linux machine.
<br>
<p><p><p>On May 3, 2011, at 2:15 PM, Steph Bredenhann wrote:
<br>
<p><span class="quotelev1">&gt; Thanks for the speedy reply. The required file with information is attached.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I first thought I must send the file to openmpi again, sorry if that was wrong.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Steph Bredenhann Pr.Eng Pr.CPM
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Quoting Jeff Squyres &lt;jsquyres_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Your output appears jumbled.  Can you send all the data listed here:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On May 3, 2011, at 1:36 PM, Steph Bredenhann wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dear Sir/Madam
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I want to build openmpi for use with INTEL compilers (version 11.1) on my
</span><br>
<span class="quotelev2">&gt;&gt; Ubuntu
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 10.10 x64 system. I am using the guidelines from
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://software.intel.com/en-us/articles/performance-tools-for-software-developers-building-open-mpi-with-the-intel-compilers/">http://software.intel.com/en-us/articles/performance-tools-for-software-developers-building-open-mpi-with-the-intel-compilers/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and specifically the following instructions:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./configure --prefix=/usr/local CC=icc CXX=icpc F77=ifort FC=ifort
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ... output of configure ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make all install
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ... output of build and installation ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The result is shown below. As can be seen it was unsuccessful. I'll
</span><br>
<span class="quotelev2">&gt;&gt; appreciate
</span><br>
<span class="quotelev3">&gt;&gt;&gt; some guidance here as I am nearing the deadline for a project that is part
</span><br>
<span class="quotelev2">&gt;&gt; of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; my research for my PhD.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks in advance.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; steph_at_sjb-linux:/src/openmpi-1.4.3$ ./configure --prefix=/opt/openmpi-1.4.3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CC=icc CXX=icpc F77=ifort FC=ifort
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking for a BSD-compatible install... /usr/bin/install -c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking whether build environment is sane... yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; : command not foundconfig/missing: line 3:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; : command not foundconfig/missing: line 5:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; : command not foundconfig/missing: line 9:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; : command not foundconfig/missing: line 14:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; : command not foundconfig/missing: line 19:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; : command not foundconfig/missing: line 24:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; : command not foundconfig/missing: line 29:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /src/openmpi-1.4.3/config/missing: line 49: syntax error near unexpected
</span><br>
<span class="quotelev2">&gt;&gt; token
</span><br>
<span class="quotelev3">&gt;&gt;&gt; `'n
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 'src/openmpi-1.4.3/config/missing: line 49: `case $1 in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure: WARNING: `missing' script is too old or missing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking for a thread-safe mkdir -p... /bin/mkdir -p
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking for gawk... gawk
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking whether make sets $(MAKE)... yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking how to create a ustar tar archive... gnutar
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ============================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; == Configuring Open MPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ============================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *** Checking versions
</span><br>
<span class="quotelev3">&gt;&gt;&gt; : integer expression expected 3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; : integer expression expected 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; .4ecking Open MPI version... 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking Open MPI release date... Oct 05, 2010
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking Open MPI Subversion repository version... r23834
</span><br>
<span class="quotelev3">&gt;&gt;&gt; : integer expression expected 3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; : integer expression expected 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; .4ecking Open Run-Time Environment version... 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking Open Run-Time Environment release date... Oct 05, 2010
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking Open Run-Time Environment Subversion repository version... r23834
</span><br>
<span class="quotelev3">&gt;&gt;&gt; : integer expression expected 3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; : integer expression expected 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; .4ecking Open Portable Access Layer version... 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking Open Portable Access Layer release date... Oct 05, 2010
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking Open Portable Access Layer Subversion repository version... r23834
</span><br>
<span class="quotelev3">&gt;&gt;&gt; : command not found
</span><br>
<span class="quotelev3">&gt;&gt;&gt; : command not found
</span><br>
<span class="quotelev3">&gt;&gt;&gt; : command not found
</span><br>
<span class="quotelev3">&gt;&gt;&gt; : command not found
</span><br>
<span class="quotelev3">&gt;&gt;&gt; : command not found
</span><br>
<span class="quotelev3">&gt;&gt;&gt; : command not found
</span><br>
<span class="quotelev3">&gt;&gt;&gt; : command not found
</span><br>
<span class="quotelev3">&gt;&gt;&gt; : command not found
</span><br>
<span class="quotelev3">&gt;&gt;&gt; : command not found
</span><br>
<span class="quotelev3">&gt;&gt;&gt; : command not found
</span><br>
<span class="quotelev3">&gt;&gt;&gt; : command not found
</span><br>
<span class="quotelev3">&gt;&gt;&gt; : command not found
</span><br>
<span class="quotelev3">&gt;&gt;&gt; : command not found
</span><br>
<span class="quotelev3">&gt;&gt;&gt; : command not found
</span><br>
<span class="quotelev3">&gt;&gt;&gt; : command not found
</span><br>
<span class="quotelev3">&gt;&gt;&gt; : command not found
</span><br>
<span class="quotelev3">&gt;&gt;&gt; : command not found
</span><br>
<span class="quotelev3">&gt;&gt;&gt; : command not found
</span><br>
<span class="quotelev3">&gt;&gt;&gt; : command not found
</span><br>
<span class="quotelev3">&gt;&gt;&gt; : command not found
</span><br>
<span class="quotelev3">&gt;&gt;&gt; : command not found
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *** Initialization, setup
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure: builddir: /src/openmpi-1.4.3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure: srcdir: /src/openmpi-1.4.3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure: error: cannot run /bin/sh config/config.sub
</span><br>
<span class="quotelev3">&gt;&gt;&gt; steph_at_sjb-linux:/src/openmpi-1.4.3$ make all install
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make: *** No rule to make target `all'.  Stop.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; steph_at_sjb-linux:/src/openmpi-1.4.3$ make install
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make: *** No rule to make target `install'.  Stop.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; steph_at_sjb-linux:/src/openmpi-1.4.3$
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Regards
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Steph Bredenhann
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This message was sent by Adept Internet's webmail.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.adept.co.za/">http://www.adept.co.za/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; This message was sent by Adept Internet's webmail. 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.adept.co.za/">http://www.adept.co.za/</a>
</span><br>
<span class="quotelev1">&gt; &lt;ompi-output.tar.bz2&gt;_______________________________________________
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
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16431.php">Steph Bredenhann: "Re: [OMPI users] BUILDING OPENMPI ON UBUNTU WITH INTEL 11.1"</a>
<li><strong>Previous message:</strong> <a href="16429.php">Steph Bredenhann: "Re: [OMPI users] BUILDING OPENMPI ON UBUNTU WITH INTEL 11.1"</a>
<li><strong>In reply to:</strong> <a href="16429.php">Steph Bredenhann: "Re: [OMPI users] BUILDING OPENMPI ON UBUNTU WITH INTEL 11.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16431.php">Steph Bredenhann: "Re: [OMPI users] BUILDING OPENMPI ON UBUNTU WITH INTEL 11.1"</a>
<li><strong>Reply:</strong> <a href="16431.php">Steph Bredenhann: "Re: [OMPI users] BUILDING OPENMPI ON UBUNTU WITH INTEL 11.1"</a>
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
