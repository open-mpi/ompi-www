<?
$subject_val = "Re: [OMPI users] BUILDING OPENMPI ON UBUNTU WITH INTEL 11.1";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  3 14:15:20 2011" -->
<!-- isoreceived="20110503181520" -->
<!-- sent="Tue, 03 May 2011 20:15:11 +0200" -->
<!-- isosent="20110503181511" -->
<!-- name="Steph Bredenhann" -->
<!-- email="support_at_[hidden]" -->
<!-- subject="Re: [OMPI users] BUILDING OPENMPI ON UBUNTU WITH INTEL 11.1" -->
<!-- id="1304446511.4dc0462f506b2_at_webmail.adept.co.za" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="44C2FEB6-AE09-49F0-90D7-C70D30C6F9B8_at_cisco.com" -->
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
<strong>From:</strong> Steph Bredenhann (<em>support_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-03 14:15:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16430.php">Jeff Squyres: "Re: [OMPI users] BUILDING OPENMPI ON UBUNTU WITH INTEL 11.1"</a>
<li><strong>Previous message:</strong> <a href="16428.php">Steph Bredenhann: "[OMPI users] BUILDING OPENMPI ON UBUNTU WITH INTEL 11.1"</a>
<li><strong>In reply to:</strong> <a href="16427.php">Jeff Squyres: "Re: [OMPI users] BUILDING OPENMPI ON UBUNTU WITH INTEL 11.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16430.php">Jeff Squyres: "Re: [OMPI users] BUILDING OPENMPI ON UBUNTU WITH INTEL 11.1"</a>
<li><strong>Reply:</strong> <a href="16430.php">Jeff Squyres: "Re: [OMPI users] BUILDING OPENMPI ON UBUNTU WITH INTEL 11.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the speedy reply. The required file with information is attached.
<br>
<p>I first thought I must send the file to openmpi again, sorry if that was wrong.
<br>
<p>Thanks
<br>
<p><p><pre>
-- 
Steph Bredenhann Pr.Eng Pr.CPM
Quoting Jeff Squyres &lt;jsquyres_at_[hidden]&gt;:
&gt; Your output appears jumbled.  Can you send all the data listed here:
&gt;
&gt;     <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
&gt;
&gt; On May 3, 2011, at 1:36 PM, Steph Bredenhann wrote:
&gt;
&gt; &gt; Dear Sir/Madam
&gt; &gt;
&gt; &gt; I want to build openmpi for use with INTEL compilers (version 11.1) on my
&gt; Ubuntu
&gt; &gt; 10.10 x64 system. I am using the guidelines from
&gt; &gt;
&gt;
<a href="http://software.intel.com/en-us/articles/performance-tools-for-software-developers-building-open-mpi-with-the-intel-compilers/">http://software.intel.com/en-us/articles/performance-tools-for-software-developers-building-open-mpi-with-the-intel-compilers/</a>
&gt; &gt; and specifically the following instructions:
&gt; &gt;
&gt; &gt;
&gt; &gt; ./configure --prefix=/usr/local CC=icc CXX=icpc F77=ifort FC=ifort
&gt; &gt; ... output of configure ...
&gt; &gt; make all install
&gt; &gt; ... output of build and installation ...
&gt; &gt;
&gt; &gt; The result is shown below. As can be seen it was unsuccessful. I'll
&gt; appreciate
&gt; &gt; some guidance here as I am nearing the deadline for a project that is part
&gt; of
&gt; &gt; my research for my PhD.
&gt; &gt;
&gt; &gt; Thanks in advance.
&gt; &gt;
&gt; &gt; steph_at_sjb-linux:/src/openmpi-1.4.3$ ./configure --prefix=/opt/openmpi-1.4.3
&gt; &gt; CC=icc CXX=icpc F77=ifort FC=ifort
&gt; &gt; checking for a BSD-compatible install... /usr/bin/install -c
&gt; &gt; checking whether build environment is sane... yes
&gt; &gt; : command not foundconfig/missing: line 3:
&gt; &gt; : command not foundconfig/missing: line 5:
&gt; &gt; : command not foundconfig/missing: line 9:
&gt; &gt; : command not foundconfig/missing: line 14:
&gt; &gt; : command not foundconfig/missing: line 19:
&gt; &gt; : command not foundconfig/missing: line 24:
&gt; &gt; : command not foundconfig/missing: line 29:
&gt; &gt; /src/openmpi-1.4.3/config/missing: line 49: syntax error near unexpected
&gt; token
&gt; &gt; `'n
&gt; &gt; 'src/openmpi-1.4.3/config/missing: line 49: `case $1 in
&gt; &gt; configure: WARNING: `missing' script is too old or missing
&gt; &gt; checking for a thread-safe mkdir -p... /bin/mkdir -p
&gt; &gt; checking for gawk... gawk
&gt; &gt; checking whether make sets $(MAKE)... yes
&gt; &gt; checking how to create a ustar tar archive... gnutar
&gt; &gt;
&gt; &gt;
&gt; ============================================================================
&gt; &gt; == Configuring Open MPI
&gt; &gt;
&gt; ============================================================================
&gt; &gt;
&gt; &gt; *** Checking versions
&gt; &gt; : integer expression expected 3
&gt; &gt; : integer expression expected 0
&gt; &gt; .4ecking Open MPI version... 1
&gt; &gt; checking Open MPI release date... Oct 05, 2010
&gt; &gt; checking Open MPI Subversion repository version... r23834
&gt; &gt; : integer expression expected 3
&gt; &gt; : integer expression expected 0
&gt; &gt; .4ecking Open Run-Time Environment version... 1
&gt; &gt; checking Open Run-Time Environment release date... Oct 05, 2010
&gt; &gt; checking Open Run-Time Environment Subversion repository version... r23834
&gt; &gt; : integer expression expected 3
&gt; &gt; : integer expression expected 0
&gt; &gt; .4ecking Open Portable Access Layer version... 1
&gt; &gt; checking Open Portable Access Layer release date... Oct 05, 2010
&gt; &gt; checking Open Portable Access Layer Subversion repository version... r23834
&gt; &gt; : command not found
&gt; &gt; : command not found
&gt; &gt; : command not found
&gt; &gt; : command not found
&gt; &gt; : command not found
&gt; &gt; : command not found
&gt; &gt; : command not found
&gt; &gt; : command not found
&gt; &gt; : command not found
&gt; &gt; : command not found
&gt; &gt; : command not found
&gt; &gt; : command not found
&gt; &gt; : command not found
&gt; &gt; : command not found
&gt; &gt; : command not found
&gt; &gt; : command not found
&gt; &gt; : command not found
&gt; &gt; : command not found
&gt; &gt; : command not found
&gt; &gt; : command not found
&gt; &gt; : command not found
&gt; &gt;
&gt; &gt; *** Initialization, setup
&gt; &gt; configure: builddir: /src/openmpi-1.4.3
&gt; &gt; configure: srcdir: /src/openmpi-1.4.3
&gt; &gt; configure: error: cannot run /bin/sh config/config.sub
&gt; &gt; steph_at_sjb-linux:/src/openmpi-1.4.3$ make all install
&gt; &gt; make: *** No rule to make target `all'.  Stop.
&gt; &gt; steph_at_sjb-linux:/src/openmpi-1.4.3$ make install
&gt; &gt; make: *** No rule to make target `install'.  Stop.
&gt; &gt; steph_at_sjb-linux:/src/openmpi-1.4.3$
&gt; &gt;
&gt; &gt;
&gt; &gt; Regards
&gt; &gt;
&gt; &gt; Steph Bredenhann
&gt; &gt;
&gt; &gt;
&gt; &gt;
&gt; &gt;
&gt; &gt;
&gt; &gt;
&gt; &gt; --
&gt; &gt; This message was sent by Adept Internet's webmail.
&gt; &gt; <a href="http://www.adept.co.za/">http://www.adept.co.za/</a>
&gt; &gt;
&gt; &gt; _______________________________________________
&gt; &gt; users mailing list
&gt; &gt; users_at_[hidden]
&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;
&gt;
&gt; --
&gt; Jeff Squyres
&gt; jsquyres_at_[hidden]
&gt; For corporate legal information go to:
&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
&gt;
&gt;
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;
-- 
This message was sent by Adept Internet's webmail. 
<a href="http://www.adept.co.za/">http://www.adept.co.za/</a>

</pre>
<p>
<p><hr>
<ul>
<li>application/x-bzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16429/ompi-output.tar.bz2">ompi-output.tar.bz2</a>
</ul>
<!-- attachment="ompi-output.tar.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16430.php">Jeff Squyres: "Re: [OMPI users] BUILDING OPENMPI ON UBUNTU WITH INTEL 11.1"</a>
<li><strong>Previous message:</strong> <a href="16428.php">Steph Bredenhann: "[OMPI users] BUILDING OPENMPI ON UBUNTU WITH INTEL 11.1"</a>
<li><strong>In reply to:</strong> <a href="16427.php">Jeff Squyres: "Re: [OMPI users] BUILDING OPENMPI ON UBUNTU WITH INTEL 11.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16430.php">Jeff Squyres: "Re: [OMPI users] BUILDING OPENMPI ON UBUNTU WITH INTEL 11.1"</a>
<li><strong>Reply:</strong> <a href="16430.php">Jeff Squyres: "Re: [OMPI users] BUILDING OPENMPI ON UBUNTU WITH INTEL 11.1"</a>
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
