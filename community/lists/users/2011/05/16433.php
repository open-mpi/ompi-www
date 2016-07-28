<?
$subject_val = "Re: [OMPI users] BUILDING OPENMPI ON UBUNTU WITH INTEL 11.1";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  3 16:09:52 2011" -->
<!-- isoreceived="20110503200952" -->
<!-- sent="Tue, 03 May 2011 22:09:02 +0200" -->
<!-- isosent="20110503200902" -->
<!-- name="Steph Bredenhann" -->
<!-- email="s.j.bredenhann_at_[hidden]" -->
<!-- subject="Re: [OMPI users] BUILDING OPENMPI ON UBUNTU WITH INTEL 11.1" -->
<!-- id="1304453342.3438.72.camel_at_sjb-linux" -->
<!-- charset="utf-8" -->
<!-- inreplyto="4DC05EB1.6070308_at_khubla.com" -->
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
<strong>From:</strong> Steph Bredenhann (<em>s.j.bredenhann_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-03 16:09:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16434.php">Paul Cizmas: "[OMPI users] Open MPI 1.4.3 - Mac OS X 10.6.7"</a>
<li><strong>Previous message:</strong> <a href="16432.php">Damien: "Re: [OMPI users] BUILDING OPENMPI ON UBUNTU WITH INTEL 11.1"</a>
<li><strong>In reply to:</strong> <a href="16432.php">Damien: "Re: [OMPI users] BUILDING OPENMPI ON UBUNTU WITH INTEL 11.1"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Done, thanks a lot, the result is attached again for final scrutiny.
<br>
<p>And I have now moved to my Linux box so as NOT to make a mistake with
<br>
Windows again!!!!!
<br>
<p>Regards
<br>
<p><p>Steph
<br>
<p>On Tue, 2011-05-03 at 13:59 -0600, Damien wrote:
<br>
<p><span class="quotelev1">&gt; That last error is because you don't have permission to install
</span><br>
<span class="quotelev1">&gt; to /opt as a regular user.  You need to run that command as  &quot;sudo
</span><br>
<span class="quotelev1">&gt; make install&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Damien
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 03/05/2011 1:55 PM, Steph Bredenhann wrote: 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I think you are a genius!
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; The new result is attached, it was only the last step make install that
</span><br>
<span class="quotelev2">&gt; &gt; looked suspect.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I'll appreciate if you can look at these results?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; While I am at it, thank you a million times for making this available to the
</span><br>
<span class="quotelev2">&gt; &gt; public! Without openmpi I would not have been able to complete my PhD!!!
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Thanks
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt; &gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
</span><br>
<span class="quotelev2">&gt; &gt; Behalf Of Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; Sent: Tuesday, May 03, 2011 21:27
</span><br>
<span class="quotelev2">&gt; &gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt; &gt; Subject: Re: [OMPI users] BUILDING OPENMPI ON UBUNTU WITH INTEL 11.1
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Ah, I see why your output is munged -- there's a bunch of ^M's in there.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; It looks like OMPI's configure script got mucked up somehow.  Did you expand
</span><br>
<span class="quotelev2">&gt; &gt; the tarball on a windows machine and copy it over to a Linux box, perchance?
</span><br>
<span class="quotelev2">&gt; &gt; If so, try expanding it directly on your Linux machine.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On May 3, 2011, at 2:15 PM, Steph Bredenhann wrote:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Thanks for the speedy reply. The required file with information is
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; attached.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I first thought I must send the file to openmpi again, sorry if that was
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; wrong.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Thanks
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Steph Bredenhann Pr.Eng Pr.CPM
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Quoting Jeff Squyres &lt;jsquyres_at_[hidden]&gt;:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Your output appears jumbled.  Can you send all the data listed here:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;    <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; On May 3, 2011, at 1:36 PM, Steph Bredenhann wrote:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; Dear Sir/Madam
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; I want to build openmpi for use with INTEL compilers (version 11.1) 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; on my
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Ubuntu
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 10.10 x64 system. I am using the guidelines from
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://software.intel.com/en-us/articles/performance-tools-for-softwar">http://software.intel.com/en-us/articles/performance-tools-for-softwar</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt; e-developers-building-open-mpi-with-the-intel-compilers/
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; and specifically the following instructions:
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; ./configure --prefix=/usr/local CC=icc CXX=icpc F77=ifort FC=ifort 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; ... output of configure ...
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; make all install
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; ... output of build and installation ...
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; The result is shown below. As can be seen it was unsuccessful. I'll
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; appreciate
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; some guidance here as I am nearing the deadline for a project that 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; is part
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; of
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; my research for my PhD.
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; Thanks in advance.
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; steph_at_sjb-linux:/src/openmpi-1.4.3$ ./configure 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; --prefix=/opt/openmpi-1.4.3 CC=icc CXX=icpc F77=ifort FC=ifort 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; checking for a BSD-compatible install... /usr/bin/install -c 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; checking whether build environment is sane... yes
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; : command not foundconfig/missing: line 3:
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; : command not foundconfig/missing: line 5:
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; : command not foundconfig/missing: line 9:
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; : command not foundconfig/missing: line 14:
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; : command not foundconfig/missing: line 19:
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; : command not foundconfig/missing: line 24:
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; : command not foundconfig/missing: line 29:
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; /src/openmpi-1.4.3/config/missing: line 49: syntax error near 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; unexpected
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; token
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; `'n
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 'src/openmpi-1.4.3/config/missing: line 49: `case $1 in
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; configure: WARNING: `missing' script is too old or missing checking 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; for a thread-safe mkdir -p... /bin/mkdir -p checking for gawk... 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; gawk checking whether make sets $(MAKE)... yes checking how to 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; create a ustar tar archive... gnutar
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; =====================================================================
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; =======
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; == Configuring Open MPI
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; =====================================================================
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; =======
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; *** Checking versions
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; : integer expression expected 3
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; : integer expression expected 0
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; .4ecking Open MPI version... 1
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; checking Open MPI release date... Oct 05, 2010 checking Open MPI 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; Subversion repository version... r23834
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; : integer expression expected 3
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; : integer expression expected 0
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; .4ecking Open Run-Time Environment version... 1 checking Open 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; Run-Time Environment release date... Oct 05, 2010 checking Open 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; Run-Time Environment Subversion repository version... r23834
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; : integer expression expected 3
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; : integer expression expected 0
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; .4ecking Open Portable Access Layer version... 1 checking Open 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; Portable Access Layer release date... Oct 05, 2010 checking Open 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; Portable Access Layer Subversion repository version... r23834
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; : command not found
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; : command not found
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; : command not found
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; : command not found
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; : command not found
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; : command not found
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; : command not found
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; : command not found
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; : command not found
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; : command not found
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; : command not found
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; : command not found
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; : command not found
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; : command not found
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; : command not found
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; : command not found
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; : command not found
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; : command not found
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; : command not found
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; : command not found
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; : command not found
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; *** Initialization, setup
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; configure: builddir: /src/openmpi-1.4.3
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; configure: srcdir: /src/openmpi-1.4.3
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; configure: error: cannot run /bin/sh config/config.sub 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; steph_at_sjb-linux:/src/openmpi-1.4.3$ make all install
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; make: *** No rule to make target `all'.  Stop.
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; steph_at_sjb-linux:/src/openmpi-1.4.3$ make install
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; make: *** No rule to make target `install'.  Stop.
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; steph_at_sjb-linux:/src/openmpi-1.4.3$
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; Regards
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; Steph Bredenhann
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; --
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; This message was sent by Adept Internet's webmail.
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; <a href="http://www.adept.co.za/">http://www.adept.co.za/</a>
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; --
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --
</span><br>
<span class="quotelev3">&gt; &gt; &gt; This message was sent by Adept Internet's webmail. 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.adept.co.za/">http://www.adept.co.za/</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &lt;ompi-output.tar.bz2&gt;_______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p><p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16433/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-bzip-compressed-tar attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16433/ompi-output.tar.bz2">ompi-output.tar.bz2</a>
</ul>
<!-- attachment="ompi-output.tar.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16434.php">Paul Cizmas: "[OMPI users] Open MPI 1.4.3 - Mac OS X 10.6.7"</a>
<li><strong>Previous message:</strong> <a href="16432.php">Damien: "Re: [OMPI users] BUILDING OPENMPI ON UBUNTU WITH INTEL 11.1"</a>
<li><strong>In reply to:</strong> <a href="16432.php">Damien: "Re: [OMPI users] BUILDING OPENMPI ON UBUNTU WITH INTEL 11.1"</a>
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
