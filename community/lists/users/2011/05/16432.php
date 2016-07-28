<?
$subject_val = "Re: [OMPI users] BUILDING OPENMPI ON UBUNTU WITH INTEL 11.1";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  3 15:59:55 2011" -->
<!-- isoreceived="20110503195955" -->
<!-- sent="Tue, 03 May 2011 13:59:45 -0600" -->
<!-- isosent="20110503195945" -->
<!-- name="Damien" -->
<!-- email="damien_at_[hidden]" -->
<!-- subject="Re: [OMPI users] BUILDING OPENMPI ON UBUNTU WITH INTEL 11.1" -->
<!-- id="4DC05EB1.6070308_at_khubla.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="002b01cc09cc$205ce900$6116bb00$_at_enpave.net" -->
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
<strong>From:</strong> Damien (<em>damien_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-03 15:59:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16433.php">Steph Bredenhann: "Re: [OMPI users] BUILDING OPENMPI ON UBUNTU WITH INTEL 11.1"</a>
<li><strong>Previous message:</strong> <a href="16431.php">Steph Bredenhann: "Re: [OMPI users] BUILDING OPENMPI ON UBUNTU WITH INTEL 11.1"</a>
<li><strong>In reply to:</strong> <a href="16431.php">Steph Bredenhann: "Re: [OMPI users] BUILDING OPENMPI ON UBUNTU WITH INTEL 11.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16433.php">Steph Bredenhann: "Re: [OMPI users] BUILDING OPENMPI ON UBUNTU WITH INTEL 11.1"</a>
<li><strong>Reply:</strong> <a href="16433.php">Steph Bredenhann: "Re: [OMPI users] BUILDING OPENMPI ON UBUNTU WITH INTEL 11.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That last error is because you don't have permission to install to /opt 
<br>
as a regular user.  You need to run that command as  &quot;sudo make install&quot;.
<br>
<p>Damien
<br>
<p>On 03/05/2011 1:55 PM, Steph Bredenhann wrote:
<br>
<span class="quotelev1">&gt; I think you are a genius!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The new result is attached, it was only the last step make install that
</span><br>
<span class="quotelev1">&gt; looked suspect.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'll appreciate if you can look at these results?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; While I am at it, thank you a million times for making this available to the
</span><br>
<span class="quotelev1">&gt; public! Without openmpi I would not have been able to complete my PhD!!!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
</span><br>
<span class="quotelev1">&gt; Behalf Of Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, May 03, 2011 21:27
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] BUILDING OPENMPI ON UBUNTU WITH INTEL 11.1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ah, I see why your output is munged -- there's a bunch of ^M's in there.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It looks like OMPI's configure script got mucked up somehow.  Did you expand
</span><br>
<span class="quotelev1">&gt; the tarball on a windows machine and copy it over to a Linux box, perchance?
</span><br>
<span class="quotelev1">&gt; If so, try expanding it directly on your Linux machine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 3, 2011, at 2:15 PM, Steph Bredenhann wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for the speedy reply. The required file with information is
</span><br>
<span class="quotelev1">&gt; attached.
</span><br>
<span class="quotelev2">&gt;&gt; I first thought I must send the file to openmpi again, sorry if that was
</span><br>
<span class="quotelev1">&gt; wrong.
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Steph Bredenhann Pr.Eng Pr.CPM
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Quoting Jeff Squyres&lt;jsquyres_at_[hidden]&gt;:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Your output appears jumbled.  Can you send all the data listed here:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On May 3, 2011, at 1:36 PM, Steph Bredenhann wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Dear Sir/Madam
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I want to build openmpi for use with INTEL compilers (version 11.1)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; on my
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ubuntu
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 10.10 x64 system. I am using the guidelines from
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://software.intel.com/en-us/articles/performance-tools-for-softwar">http://software.intel.com/en-us/articles/performance-tools-for-softwar</a>
</span><br>
<span class="quotelev2">&gt;&gt; e-developers-building-open-mpi-with-the-intel-compilers/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and specifically the following instructions:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ./configure --prefix=/usr/local CC=icc CXX=icpc F77=ifort FC=ifort
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ... output of configure ...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make all install
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ... output of build and installation ...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The result is shown below. As can be seen it was unsuccessful. I'll
</span><br>
<span class="quotelev3">&gt;&gt;&gt; appreciate
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; some guidance here as I am nearing the deadline for a project that
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; is part
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; my research for my PhD.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks in advance.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; steph_at_sjb-linux:/src/openmpi-1.4.3$ ./configure
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --prefix=/opt/openmpi-1.4.3 CC=icc CXX=icpc F77=ifort FC=ifort
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; checking for a BSD-compatible install... /usr/bin/install -c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; checking whether build environment is sane... yes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; : command not foundconfig/missing: line 3:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; : command not foundconfig/missing: line 5:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; : command not foundconfig/missing: line 9:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; : command not foundconfig/missing: line 14:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; : command not foundconfig/missing: line 19:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; : command not foundconfig/missing: line 24:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; : command not foundconfig/missing: line 29:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /src/openmpi-1.4.3/config/missing: line 49: syntax error near
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; unexpected
</span><br>
<span class="quotelev3">&gt;&gt;&gt; token
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; `'n
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 'src/openmpi-1.4.3/config/missing: line 49: `case $1 in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; configure: WARNING: `missing' script is too old or missing checking
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; for a thread-safe mkdir -p... /bin/mkdir -p checking for gawk...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; gawk checking whether make sets $(MAKE)... yes checking how to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; create a ustar tar archive... gnutar
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =====================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =======
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; == Configuring Open MPI
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =====================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =======
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *** Checking versions
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; : integer expression expected 3
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; : integer expression expected 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; .4ecking Open MPI version... 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; checking Open MPI release date... Oct 05, 2010 checking Open MPI
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subversion repository version... r23834
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; : integer expression expected 3
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; : integer expression expected 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; .4ecking Open Run-Time Environment version... 1 checking Open
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Run-Time Environment release date... Oct 05, 2010 checking Open
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Run-Time Environment Subversion repository version... r23834
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; : integer expression expected 3
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; : integer expression expected 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; .4ecking Open Portable Access Layer version... 1 checking Open
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Portable Access Layer release date... Oct 05, 2010 checking Open
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Portable Access Layer Subversion repository version... r23834
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; : command not found
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; : command not found
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; : command not found
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; : command not found
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; : command not found
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; : command not found
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; : command not found
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; : command not found
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; : command not found
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; : command not found
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; : command not found
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; : command not found
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; : command not found
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; : command not found
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; : command not found
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; : command not found
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; : command not found
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; : command not found
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; : command not found
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; : command not found
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; : command not found
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *** Initialization, setup
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; configure: builddir: /src/openmpi-1.4.3
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; configure: srcdir: /src/openmpi-1.4.3
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; configure: error: cannot run /bin/sh config/config.sub
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; steph_at_sjb-linux:/src/openmpi-1.4.3$ make all install
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make: *** No rule to make target `all'.  Stop.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; steph_at_sjb-linux:/src/openmpi-1.4.3$ make install
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make: *** No rule to make target `install'.  Stop.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; steph_at_sjb-linux:/src/openmpi-1.4.3$
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Regards
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Steph Bredenhann
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This message was sent by Adept Internet's webmail.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.adept.co.za/">http://www.adept.co.za/</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; This message was sent by Adept Internet's webmail.
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.adept.co.za/">http://www.adept.co.za/</a>
</span><br>
<span class="quotelev2">&gt;&gt; &lt;ompi-output.tar.bz2&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16432/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16433.php">Steph Bredenhann: "Re: [OMPI users] BUILDING OPENMPI ON UBUNTU WITH INTEL 11.1"</a>
<li><strong>Previous message:</strong> <a href="16431.php">Steph Bredenhann: "Re: [OMPI users] BUILDING OPENMPI ON UBUNTU WITH INTEL 11.1"</a>
<li><strong>In reply to:</strong> <a href="16431.php">Steph Bredenhann: "Re: [OMPI users] BUILDING OPENMPI ON UBUNTU WITH INTEL 11.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16433.php">Steph Bredenhann: "Re: [OMPI users] BUILDING OPENMPI ON UBUNTU WITH INTEL 11.1"</a>
<li><strong>Reply:</strong> <a href="16433.php">Steph Bredenhann: "Re: [OMPI users] BUILDING OPENMPI ON UBUNTU WITH INTEL 11.1"</a>
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
