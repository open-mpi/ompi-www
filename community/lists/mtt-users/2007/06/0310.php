<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Jun  3 03:06:06 2007" -->
<!-- isoreceived="20070603070606" -->
<!-- sent="Sun, 3 Jun 2007 10:06:51 +0300" -->
<!-- isosent="20070603070651" -->
<!-- name="Shai Venter" -->
<!-- email="venters_at_[hidden]" -->
<!-- subject="Re: [MTT users] mtt-users Digest, Vol 15, Issue 5" -->
<!-- id="6C2C79E72C305246B504CBA17B5500C90199AFEA_at_mtlexch01.mtl.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="mailman.5762.1179762252.26964.mtt-users_at_open-mpi.org" -->
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
<strong>From:</strong> Shai Venter (<em>venters_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-03 03:06:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0311.php">Jeff Squyres: "Re: [MTT users] mtt-users Digest, Vol 15, Issue 5"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2007/05/0309.php">Tim Mattox: "Re: [MTT users] Few trunk results this morning?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0311.php">Jeff Squyres: "Re: [MTT users] mtt-users Digest, Vol 15, Issue 5"</a>
<li><strong>Reply:</strong> <a href="0311.php">Jeff Squyres: "Re: [MTT users] mtt-users Digest, Vol 15, Issue 5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hard-coded indeed it was. One more hurdle overcomed.
<br>
Thanks and good day.
<br>
<p>Regards,
<br>
Shai Venter.
<br>
-----Original Message-----
<br>
From: mtt-users-bounces_at_[hidden]
<br>
[mailto:mtt-users-bounces_at_[hidden]] On Behalf Of
<br>
mtt-users-request_at_[hidden]
<br>
Sent: Monday, May 21, 2007 6:44 PM
<br>
To: mtt-users_at_[hidden]
<br>
Subject: mtt-users Digest, Vol 15, Issue 5
<br>
<p>Send mtt-users mailing list submissions to
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mtt-users_at_[hidden]
<br>
<p>To subscribe or unsubscribe via the World Wide Web, visit
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
<br>
or, via email, send a message with subject or body 'help' to
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mtt-users-request_at_[hidden]
<br>
<p>You can reach the person managing the list at
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mtt-users-owner_at_[hidden]
<br>
<p>When replying, please edit your Subject line so it is more specific
<br>
than &quot;Re: Contents of mtt-users digest...&quot;
<br>
<p><p>Today's Topics:
<br>
<p>&nbsp;&nbsp;&nbsp;1. Re: mtt test build for IMB-MPI1 fails, (Jeff Squyres)
<br>
&nbsp;&nbsp;&nbsp;2. Re: mtt test build for IMB-MPI1 fails, (Ethan Mallove)
<br>
&nbsp;&nbsp;&nbsp;3. Re: mtt test build for IMB-MPI1 fails, (Jeff Squyres)
<br>
<p><p>----------------------------------------------------------------------
<br>
<p>Message: 1
<br>
Date: Mon, 21 May 2007 06:32:53 -0700
<br>
From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
<br>
Subject: Re: [MTT users] mtt test build for IMB-MPI1 fails,
<br>
To: General user list for the MPI Testing Tool
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;mtt-users_at_[hidden]&gt;
<br>
Message-ID: &lt;72EBB18F-34BC-4635-A012-A122E925B99C_at_[hidden]&gt;
<br>
Content-Type: text/plain; charset=US-ASCII; delsp=yes; format=flowed
<br>
<p>It looks like your makefile is hard-coded to use /bin/mpicc, which  
<br>
will always be wrong for MTT.  This specifies an absolute location  
<br>
for mpicc, and does not allow the $PATH to be used.
<br>
<p>Where are you getting your copy of IMB from?
<br>
<p>The IMB 2.3 that is in the ompi_tests repository has a make_openmpi  
<br>
that contains the following line:
<br>
<p>CC          = mpicc
<br>
<p>Hence, &quot;mpicc&quot; is used, and therefore $PATH is used to find it.
<br>
<p>Can you modify your makefile this way?
<br>
<p><p>On May 20, 2007, at 12:31 AM, Shai Venter wrote:
<br>
<p><span class="quotelev1">&gt; Hello again Mr Squyres.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am most greatfull for your answers to my questions (2).
</span><br>
<span class="quotelev1">&gt; Actualy, they are both linked to the same issue: my mtt run fails  
</span><br>
<span class="quotelev1">&gt; in the
</span><br>
<span class="quotelev1">&gt; test build phase for IMB-MPI1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It seems that the make file cannot find the mpicc to compile.
</span><br>
<span class="quotelev1">&gt; It searches for it in a default path (/bin/mpicc) but it's
</span><br>
<span class="quotelev1">&gt; Usless scince this path is irrelevant.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've tried this code:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; module = Shell
</span><br>
<span class="quotelev1">&gt; shell_build_command = &lt;&lt;EOT
</span><br>
<span class="quotelev1">&gt; cd src
</span><br>
<span class="quotelev1">&gt; make clean IMB-MPI1
</span><br>
<span class="quotelev1">&gt; EOT
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But still the same error.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Lets have a look at the output of build error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------
</span><br>
<p><span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; sw169:/usr/local/mtt # cat
</span><br>
<span class="quotelev1">&gt; scratch/installs/K5a_/tests/imb-2.3/test_built.ini
</span><br>
<span class="quotelev1">&gt; # This file was automatically created by Config/IniFiles.pm.  Any
</span><br>
<span class="quotelev1">&gt; changes made manually are likely to be lost!
</span><br>
<span class="quotelev1">&gt; [test_built]
</span><br>
<span class="quotelev1">&gt; mpi_version=1.2.2
</span><br>
<span class="quotelev1">&gt; full_section_name=test build: imb-2.3
</span><br>
<span class="quotelev1">&gt; result_stdout= &lt;&lt;EOT
</span><br>
<span class="quotelev1">&gt; /bin/rm -f *.o *~ PI* core IMB-IO IMB-EXT IMB-MPI1 exe_io exe_ext
</span><br>
<span class="quotelev1">&gt; exe_mpi1
</span><br>
<span class="quotelev1">&gt; touch exe_mpi1 *.c; rm -rf exe_io exe_ext
</span><br>
<span class="quotelev1">&gt; make MPI1 CPP=MPI1
</span><br>
<span class="quotelev1">&gt; make[1]: Entering directory
</span><br>
<span class="quotelev1">&gt; `/usr/local/mtt/scratch/installs/K5a_/tests/imb-2.3/IMB-2.3/src'
</span><br>
<span class="quotelev1">&gt; /bin/mpicc  -I/include   -DMPI1 -O -g -c IMB.c
</span><br>
<span class="quotelev1">&gt; make[1]: /bin/mpicc: Command not found
</span><br>
<span class="quotelev1">&gt; make[1]: *** [IMB.o] Error 127
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/usr/local/mtt/scratch/installs/K5a_/tests/imb-2.3/IMB-2.3/src'
</span><br>
<span class="quotelev1">&gt; make: *** [IMB-MPI1] Error 2
</span><br>
<span class="quotelev1">&gt; EOT
</span><br>
<span class="quotelev1">&gt; refcount=0
</span><br>
<span class="quotelev1">&gt; result_message= &lt;&lt;EOT
</span><br>
<span class="quotelev1">&gt; Shell: command failed &quot;cd src
</span><br>
<span class="quotelev1">&gt; make clean IMB-MPI1&quot;
</span><br>
<span class="quotelev1">&gt; EOT
</span><br>
<span class="quotelev1">&gt; mpi_install_simple_section_name=gcc
</span><br>
<span class="quotelev1">&gt; test_result=0
</span><br>
<span class="quotelev1">&gt; exit_status=512
</span><br>
<span class="quotelev1">&gt; mpi_get_simple_section_name=ompiv1.2
</span><br>
<span class="quotelev1">&gt; simple_section_name=imb-2.3
</span><br>
<span class="quotelev1">&gt; srcdir=/usr/local/mtt/scratch/installs/K5a_/tests/imb-2.3/IMB-2.3
</span><br>
<span class="quotelev1">&gt; start_timestamp=1179655379
</span><br>
<span class="quotelev1">&gt; test_get_simple_section_name=imb
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------
</span><br>
<p><span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I feel that it has some thing to do with setting up an enviroment path
</span><br>
<span class="quotelev1">&gt; variable to the mpi bin dir. I could provide it as an argument to the
</span><br>
<span class="quotelev1">&gt; &quot;make&quot; file, but I cannot know in advance where mtt creates/ 
</span><br>
<span class="quotelev1">&gt; installs the
</span><br>
<span class="quotelev1">&gt; bin dir for each and every mpi installtion.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hopefully, you'll have an insight on this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Shai Venter.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Today's Topics:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    1. MTT with ompiv1.2 (Shai Venter)
</span><br>
<span class="quotelev1">&gt;    2. Re: MTT with ompiv1.2 (Jeff Squyres)
</span><br>
<span class="quotelev1">&gt;    3. How can I know the path to mpicc ? (Shai Venter)
</span><br>
<span class="quotelev1">&gt;    4. Re: How can I know the path to mpicc ? (Jeff Squyres)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Message: 1
</span><br>
<span class="quotelev1">&gt; Date: Thu, 17 May 2007 16:50:14 +0300
</span><br>
<span class="quotelev1">&gt; From: &quot;Shai Venter&quot; &lt;venters_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: [MTT users] MTT with ompiv1.2
</span><br>
<span class="quotelev1">&gt; To: &lt;mtt-users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID:
</span><br>
<span class="quotelev1">&gt; 	&lt;6C2C79E72C305246B504CBA17B5500C901825449_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=&quot;us-ascii&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi There !
</span><br>
<span class="quotelev1">&gt; Regarding the .ini file:
</span><br>
<span class="quotelev1">&gt; Using setenv in the MPI Get: phase, should set me an Enviroment var,
</span><br>
<span class="quotelev1">&gt; right ?!
</span><br>
<span class="quotelev1">&gt; So if , let say, I write setenv = MPIHOMEDIR  &amp;shell(&quot;pwd&quot;)/install
</span><br>
<span class="quotelev1">&gt; should set MPIHOMEDIR to some path as mentioned.
</span><br>
<span class="quotelev1">&gt; Well, I checked for my MPIHOMEDIR  in the env ( cmd line:   env |grep
</span><br>
<span class="quotelev1">&gt; MPI ) and got nothing.
</span><br>
<span class="quotelev1">&gt; What did I not do right?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Shai Venter
</span><br>
<span class="quotelev1">&gt; Q.A
</span><br>
<span class="quotelev1">&gt; Mellanox Technologies, Ltd.
</span><br>
<span class="quotelev1">&gt; www.mellanox.com
</span><br>
<span class="quotelev1">&gt; +972 (0)4  9097200 ext. 252
</span><br>
<span class="quotelev1">&gt; +972 (0)50 2888637
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Date: Thu, 17 May 2007 07:04:22 -0700
</span><br>
<span class="quotelev1">&gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [MTT users] MTT with ompiv1.2
</span><br>
<span class="quotelev1">&gt; To: General user list for the MPI Testing Tool
</span><br>
<span class="quotelev1">&gt; 	&lt;mtt-users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;4D863C26-EE6F-4F3E-9238-82480DC7D8AD_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=WINDOWS-1252; delsp=yes;
</span><br>
<span class="quotelev1">&gt; 	format=flowed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't believe that we currently support setenv in the MPI Get
</span><br>
<span class="quotelev1">&gt; phase, mainly because we didn't know that anyone would be using it
</span><br>
<span class="quotelev1">&gt; there.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What do you need to do, specifically?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FWIW, MTT should handle all paths internally -- it builds everything
</span><br>
<span class="quotelev1">&gt; inside the scratch tree, maintaining the different trees for all the
</span><br>
<span class="quotelev1">&gt; different get's and install's.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Message: 3
</span><br>
<span class="quotelev1">&gt; Date: Thu, 17 May 2007 17:20:40 +0300
</span><br>
<span class="quotelev1">&gt; From: &quot;Shai Venter&quot; &lt;venters_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: [MTT users] How can I know the path to mpicc ?
</span><br>
<span class="quotelev1">&gt; To: &lt;mtt-users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID:
</span><br>
<span class="quotelev1">&gt; 	&lt;6C2C79E72C305246B504CBA17B5500C90182546D_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=&quot;us-ascii&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi there !
</span><br>
<span class="quotelev1">&gt; Using mtt, I'm trying to build and run  the IMB-MPI1 test.
</span><br>
<span class="quotelev1">&gt; I need to provide to the IMB make file,  a path to the bin dir where
</span><br>
<span class="quotelev1">&gt; mpicc compiler is.
</span><br>
<span class="quotelev1">&gt; How do I do that, when mtt creat it's own directory trees for mpi
</span><br>
<span class="quotelev1">&gt; installations.
</span><br>
<span class="quotelev1">&gt; mtt gets the test sources for that matter, but fails to build.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Shai Venter
</span><br>
<span class="quotelev1">&gt; Q.A
</span><br>
<span class="quotelev1">&gt; Mellanox Technologies, Ltd.
</span><br>
<span class="quotelev1">&gt; www.mellanox.com
</span><br>
<span class="quotelev1">&gt; +972 (0)4  9097200 ext. 252
</span><br>
<span class="quotelev1">&gt; +972 (0)50 2888637
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Message: 4
</span><br>
<span class="quotelev1">&gt; Date: Thu, 17 May 2007 07:24:06 -0700
</span><br>
<span class="quotelev1">&gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [MTT users] How can I know the path to mpicc ?
</span><br>
<span class="quotelev1">&gt; To: General user list for the MPI Testing Tool
</span><br>
<span class="quotelev1">&gt; 	&lt;mtt-users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;AC772252-424C-4110-8B48-2CA41016C1B0_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=WINDOWS-1252; delsp=yes;
</span><br>
<span class="quotelev1">&gt; 	format=flowed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpicc should be in the path already; MTT should take care of that for
</span><br>
<span class="quotelev1">&gt; you.  Here's what I have in the Cisco INI file for the IMB test build
</span><br>
<span class="quotelev1">&gt; section:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [Test build: imb]
</span><br>
<span class="quotelev1">&gt; test_get = imb
</span><br>
<span class="quotelev1">&gt; save_stdout_on_success = 1
</span><br>
<span class="quotelev1">&gt; merge_stdout_stderr = 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; module = Shell
</span><br>
<span class="quotelev1">&gt; shell_build_command = &lt;&lt;EOT
</span><br>
<span class="quotelev1">&gt; cd src
</span><br>
<span class="quotelev1">&gt; make clean IMB-MPI1
</span><br>
<span class="quotelev1">&gt; EOT
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; End of mtt-users Digest, Vol 15, Issue 3
</span><br>
<span class="quotelev1">&gt; ****************************************
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
------------------------------
Message: 2
Date: Mon, 21 May 2007 11:41:40 -0400
From: Ethan Mallove &lt;ethan.mallove_at_[hidden]&gt;
Subject: Re: [MTT users] mtt test build for IMB-MPI1 fails,
To: General user list for the MPI Testing Tool
	&lt;mtt-users_at_[hidden]&gt;
Message-ID: &lt;20070521154140.GC6879_at_[hidden]&gt;
Content-Type: text/plain; charset=us-ascii
Just a guess, but could this could be the source of confusion?
<a href="https://svn.open-mpi.org/svn/ompi-tests/trunk/PMB-2.2">https://svn.open-mpi.org/svn/ompi-tests/trunk/PMB-2.2</a>
<a href="https://svn.open-mpi.org/svn/ompi-tests/trunk/IMB_2.3">https://svn.open-mpi.org/svn/ompi-tests/trunk/IMB_2.3</a>
Should PMB be removed from ompi-tests? I mean, would there
ever be a reason to use PMB 2.2 instead of IMB 2.3?
-Ethan
On Mon, May/21/2007 06:32:53AM, Jeff Squyres wrote:
&gt; It looks like your makefile is hard-coded to use /bin/mpicc, which  
&gt; will always be wrong for MTT.  This specifies an absolute location  
&gt; for mpicc, and does not allow the $PATH to be used.
&gt; 
&gt; Where are you getting your copy of IMB from?
&gt; 
&gt; The IMB 2.3 that is in the ompi_tests repository has a make_openmpi  
&gt; that contains the following line:
&gt; 
&gt; CC          = mpicc
&gt; 
&gt; Hence, &quot;mpicc&quot; is used, and therefore $PATH is used to find it.
&gt; 
&gt; Can you modify your makefile this way?
&gt; 
&gt; 
&gt; On May 20, 2007, at 12:31 AM, Shai Venter wrote:
&gt; 
&gt; &gt; Hello again Mr Squyres.
&gt; &gt;
&gt; &gt; I am most greatfull for your answers to my questions (2).
&gt; &gt; Actualy, they are both linked to the same issue: my mtt run fails  
&gt; &gt; in the
&gt; &gt; test build phase for IMB-MPI1.
&gt; &gt;
&gt; &gt; It seems that the make file cannot find the mpicc to compile.
&gt; &gt; It searches for it in a default path (/bin/mpicc) but it's
&gt; &gt; Usless scince this path is irrelevant.
&gt; &gt;
&gt; &gt; I've tried this code:
&gt; &gt;
&gt; &gt; module = Shell
&gt; &gt; shell_build_command = &lt;&lt;EOT
&gt; &gt; cd src
&gt; &gt; make clean IMB-MPI1
&gt; &gt; EOT
&gt; &gt;
&gt; &gt; But still the same error.
&gt; &gt;
&gt; &gt;
&gt; &gt; Lets have a look at the output of build error:
&gt; &gt;
&gt; &gt;
---------------------------------------------------------------------- 
&gt; &gt; --
&gt; &gt; ----
&gt; &gt; sw169:/usr/local/mtt # cat
&gt; &gt; scratch/installs/K5a_/tests/imb-2.3/test_built.ini
&gt; &gt; # This file was automatically created by Config/IniFiles.pm.  Any
&gt; &gt; changes made manually are likely to be lost!
&gt; &gt; [test_built]
&gt; &gt; mpi_version=1.2.2
&gt; &gt; full_section_name=test build: imb-2.3
&gt; &gt; result_stdout= &lt;&lt;EOT
&gt; &gt; /bin/rm -f *.o *~ PI* core IMB-IO IMB-EXT IMB-MPI1 exe_io exe_ext
&gt; &gt; exe_mpi1
&gt; &gt; touch exe_mpi1 *.c; rm -rf exe_io exe_ext
&gt; &gt; make MPI1 CPP=MPI1
&gt; &gt; make[1]: Entering directory
&gt; &gt; `/usr/local/mtt/scratch/installs/K5a_/tests/imb-2.3/IMB-2.3/src'
&gt; &gt; /bin/mpicc  -I/include   -DMPI1 -O -g -c IMB.c
&gt; &gt; make[1]: /bin/mpicc: Command not found
&gt; &gt; make[1]: *** [IMB.o] Error 127
&gt; &gt; make[1]: Leaving directory
&gt; &gt; `/usr/local/mtt/scratch/installs/K5a_/tests/imb-2.3/IMB-2.3/src'
&gt; &gt; make: *** [IMB-MPI1] Error 2
&gt; &gt; EOT
&gt; &gt; refcount=0
&gt; &gt; result_message= &lt;&lt;EOT
&gt; &gt; Shell: command failed &quot;cd src
&gt; &gt; make clean IMB-MPI1&quot;
&gt; &gt; EOT
&gt; &gt; mpi_install_simple_section_name=gcc
&gt; &gt; test_result=0
&gt; &gt; exit_status=512
&gt; &gt; mpi_get_simple_section_name=ompiv1.2
&gt; &gt; simple_section_name=imb-2.3
&gt; &gt; srcdir=/usr/local/mtt/scratch/installs/K5a_/tests/imb-2.3/IMB-2.3
&gt; &gt; start_timestamp=1179655379
&gt; &gt; test_get_simple_section_name=imb
&gt; &gt;
&gt; &gt;
---------------------------------------------------------------------- 
&gt; &gt; --
&gt; &gt; ----
&gt; &gt;
&gt; &gt;
&gt; &gt;
&gt; &gt; I feel that it has some thing to do with setting up an enviroment
path
&gt; &gt; variable to the mpi bin dir. I could provide it as an argument to
the
&gt; &gt; &quot;make&quot; file, but I cannot know in advance where mtt creates/ 
&gt; &gt; installs the
&gt; &gt; bin dir for each and every mpi installtion.
&gt; &gt;
&gt; &gt; Hopefully, you'll have an insight on this.
&gt; &gt;
&gt; &gt; Regards,
&gt; &gt; Shai Venter.
&gt; &gt;
&gt; &gt;
&gt; &gt;
&gt; &gt; -----Original Message-----
&gt; &gt;
&gt; &gt; Today's Topics:
&gt; &gt;
&gt; &gt;    1. MTT with ompiv1.2 (Shai Venter)
&gt; &gt;    2. Re: MTT with ompiv1.2 (Jeff Squyres)
&gt; &gt;    3. How can I know the path to mpicc ? (Shai Venter)
&gt; &gt;    4. Re: How can I know the path to mpicc ? (Jeff Squyres)
&gt; &gt;
&gt; &gt;
&gt; &gt;
----------------------------------------------------------------------
&gt; &gt;
&gt; &gt; Message: 1
&gt; &gt; Date: Thu, 17 May 2007 16:50:14 +0300
&gt; &gt; From: &quot;Shai Venter&quot; &lt;venters_at_[hidden]&gt;
&gt; &gt; Subject: [MTT users] MTT with ompiv1.2
&gt; &gt; To: &lt;mtt-users_at_[hidden]&gt;
&gt; &gt; Message-ID:
&gt; &gt; 	&lt;6C2C79E72C305246B504CBA17B5500C901825449_at_[hidden]&gt;
&gt; &gt; Content-Type: text/plain; charset=&quot;us-ascii&quot;
&gt; &gt;
&gt; &gt; Hi There !
&gt; &gt; Regarding the .ini file:
&gt; &gt; Using setenv in the MPI Get: phase, should set me an Enviroment var,
&gt; &gt; right ?!
&gt; &gt; So if , let say, I write setenv = MPIHOMEDIR  &amp;shell(&quot;pwd&quot;)/install
&gt; &gt; should set MPIHOMEDIR to some path as mentioned.
&gt; &gt; Well, I checked for my MPIHOMEDIR  in the env ( cmd line:   env
|grep
&gt; &gt; MPI ) and got nothing.
&gt; &gt; What did I not do right?
&gt; &gt;
&gt; &gt;
&gt; &gt;
&gt; &gt; Shai Venter
&gt; &gt; Q.A
&gt; &gt; Mellanox Technologies, Ltd.
&gt; &gt; www.mellanox.com
&gt; &gt; +972 (0)4  9097200 ext. 252
&gt; &gt; +972 (0)50 2888637
&gt; &gt;
&gt; &gt; Date: Thu, 17 May 2007 07:04:22 -0700
&gt; &gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
&gt; &gt; Subject: Re: [MTT users] MTT with ompiv1.2
&gt; &gt; To: General user list for the MPI Testing Tool
&gt; &gt; 	&lt;mtt-users_at_[hidden]&gt;
&gt; &gt; Message-ID: &lt;4D863C26-EE6F-4F3E-9238-82480DC7D8AD_at_[hidden]&gt;
&gt; &gt; Content-Type: text/plain; charset=WINDOWS-1252; delsp=yes;
&gt; &gt; 	format=flowed
&gt; &gt;
&gt; &gt; I don't believe that we currently support setenv in the MPI Get
&gt; &gt; phase, mainly because we didn't know that anyone would be using it
&gt; &gt; there.
&gt; &gt;
&gt; &gt; What do you need to do, specifically?
&gt; &gt;
&gt; &gt; FWIW, MTT should handle all paths internally -- it builds everything
&gt; &gt; inside the scratch tree, maintaining the different trees for all the
&gt; &gt; different get's and install's.
&gt; &gt;
&gt; &gt;
&gt; &gt; Jeff Squyres
&gt; &gt; Cisco Systems
&gt; &gt;
&gt; &gt;
&gt; &gt;
&gt; &gt;
&gt; &gt; ------------------------------
&gt; &gt;
&gt; &gt; Message: 3
&gt; &gt; Date: Thu, 17 May 2007 17:20:40 +0300
&gt; &gt; From: &quot;Shai Venter&quot; &lt;venters_at_[hidden]&gt;
&gt; &gt; Subject: [MTT users] How can I know the path to mpicc ?
&gt; &gt; To: &lt;mtt-users_at_[hidden]&gt;
&gt; &gt; Message-ID:
&gt; &gt; 	&lt;6C2C79E72C305246B504CBA17B5500C90182546D_at_[hidden]&gt;
&gt; &gt; Content-Type: text/plain; charset=&quot;us-ascii&quot;
&gt; &gt;
&gt; &gt; Hi there !
&gt; &gt; Using mtt, I'm trying to build and run  the IMB-MPI1 test.
&gt; &gt; I need to provide to the IMB make file,  a path to the bin dir where
&gt; &gt; mpicc compiler is.
&gt; &gt; How do I do that, when mtt creat it's own directory trees for mpi
&gt; &gt; installations.
&gt; &gt; mtt gets the test sources for that matter, but fails to build.
&gt; &gt;
&gt; &gt; Shai Venter
&gt; &gt; Q.A
&gt; &gt; Mellanox Technologies, Ltd.
&gt; &gt; www.mellanox.com
&gt; &gt; +972 (0)4  9097200 ext. 252
&gt; &gt; +972 (0)50 2888637
&gt; &gt;
&gt; &gt;
&gt; &gt; Message: 4
&gt; &gt; Date: Thu, 17 May 2007 07:24:06 -0700
&gt; &gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
&gt; &gt; Subject: Re: [MTT users] How can I know the path to mpicc ?
&gt; &gt; To: General user list for the MPI Testing Tool
&gt; &gt; 	&lt;mtt-users_at_[hidden]&gt;
&gt; &gt; Message-ID: &lt;AC772252-424C-4110-8B48-2CA41016C1B0_at_[hidden]&gt;
&gt; &gt; Content-Type: text/plain; charset=WINDOWS-1252; delsp=yes;
&gt; &gt; 	format=flowed
&gt; &gt;
&gt; &gt; mpicc should be in the path already; MTT should take care of that
for
&gt; &gt; you.  Here's what I have in the Cisco INI file for the IMB test
build
&gt; &gt; section:
&gt; &gt;
&gt; &gt; [Test build: imb]
&gt; &gt; test_get = imb
&gt; &gt; save_stdout_on_success = 1
&gt; &gt; merge_stdout_stderr = 1
&gt; &gt;
&gt; &gt; module = Shell
&gt; &gt; shell_build_command = &lt;&lt;EOT
&gt; &gt; cd src
&gt; &gt; make clean IMB-MPI1
&gt; &gt; EOT
&gt; &gt;
&gt; &gt;
&gt; &gt;
&gt; &gt; Jeff Squyres
&gt; &gt; Cisco Systems
&gt; &gt;
&gt; &gt;
&gt; &gt;
&gt; &gt;
&gt; &gt;
&gt; &gt; End of mtt-users Digest, Vol 15, Issue 3
&gt; &gt; ****************************************
&gt; &gt;
&gt; &gt; _______________________________________________
&gt; &gt; mtt-users mailing list
&gt; &gt; mtt-users_at_[hidden]
&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
&gt; 
&gt; 
&gt; -- 
&gt; Jeff Squyres
&gt; Cisco Systems
&gt; 
&gt; _______________________________________________
&gt; mtt-users mailing list
&gt; mtt-users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
------------------------------
Message: 3
Date: Mon, 21 May 2007 08:43:42 -0700
From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
Subject: Re: [MTT users] mtt test build for IMB-MPI1 fails,
To: General user list for the MPI Testing Tool
	&lt;mtt-users_at_[hidden]&gt;
Message-ID: &lt;C75CDC08-78D4-45EE-8FB8-F9364FDA839D_at_[hidden]&gt;
Content-Type: text/plain; charset=US-ASCII; delsp=yes; format=flowed
Good point.  No, there is no reason to use PMB 2.2.  It's older and  
has known bugs.
I always use IMB 2.3.
On May 21, 2007, at 8:41 AM, Ethan Mallove wrote:
&gt; Just a guess, but could this could be the source of confusion?
&gt;
&gt; <a href="https://svn.open-mpi.org/svn/ompi-tests/trunk/PMB-2.2">https://svn.open-mpi.org/svn/ompi-tests/trunk/PMB-2.2</a>
&gt; <a href="https://svn.open-mpi.org/svn/ompi-tests/trunk/IMB_2.3">https://svn.open-mpi.org/svn/ompi-tests/trunk/IMB_2.3</a>
&gt;
&gt; Should PMB be removed from ompi-tests? I mean, would there
&gt; ever be a reason to use PMB 2.2 instead of IMB 2.3?
&gt;
&gt; -Ethan
&gt;
&gt;
&gt; On Mon, May/21/2007 06:32:53AM, Jeff Squyres wrote:
&gt;&gt; It looks like your makefile is hard-coded to use /bin/mpicc, which
&gt;&gt; will always be wrong for MTT.  This specifies an absolute location
&gt;&gt; for mpicc, and does not allow the $PATH to be used.
&gt;&gt;
&gt;&gt; Where are you getting your copy of IMB from?
&gt;&gt;
&gt;&gt; The IMB 2.3 that is in the ompi_tests repository has a make_openmpi
&gt;&gt; that contains the following line:
&gt;&gt;
&gt;&gt; CC          = mpicc
&gt;&gt;
&gt;&gt; Hence, &quot;mpicc&quot; is used, and therefore $PATH is used to find it.
&gt;&gt;
&gt;&gt; Can you modify your makefile this way?
&gt;&gt;
&gt;&gt;
&gt;&gt; On May 20, 2007, at 12:31 AM, Shai Venter wrote:
&gt;&gt;
&gt;&gt;&gt; Hello again Mr Squyres.
&gt;&gt;&gt;
&gt;&gt;&gt; I am most greatfull for your answers to my questions (2).
&gt;&gt;&gt; Actualy, they are both linked to the same issue: my mtt run fails
&gt;&gt;&gt; in the
&gt;&gt;&gt; test build phase for IMB-MPI1.
&gt;&gt;&gt;
&gt;&gt;&gt; It seems that the make file cannot find the mpicc to compile.
&gt;&gt;&gt; It searches for it in a default path (/bin/mpicc) but it's
&gt;&gt;&gt; Usless scince this path is irrelevant.
&gt;&gt;&gt;
&gt;&gt;&gt; I've tried this code:
&gt;&gt;&gt;
&gt;&gt;&gt; module = Shell
&gt;&gt;&gt; shell_build_command = &lt;&lt;EOT
&gt;&gt;&gt; cd src
&gt;&gt;&gt; make clean IMB-MPI1
&gt;&gt;&gt; EOT
&gt;&gt;&gt;
&gt;&gt;&gt; But still the same error.
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt; Lets have a look at the output of build error:
&gt;&gt;&gt;
&gt;&gt;&gt; --------------------------------------------------------------------
&gt;&gt;&gt; --
&gt;&gt;&gt; --
&gt;&gt;&gt; ----
&gt;&gt;&gt; sw169:/usr/local/mtt # cat
&gt;&gt;&gt; scratch/installs/K5a_/tests/imb-2.3/test_built.ini
&gt;&gt;&gt; # This file was automatically created by Config/IniFiles.pm.  Any
&gt;&gt;&gt; changes made manually are likely to be lost!
&gt;&gt;&gt; [test_built]
&gt;&gt;&gt; mpi_version=1.2.2
&gt;&gt;&gt; full_section_name=test build: imb-2.3
&gt;&gt;&gt; result_stdout= &lt;&lt;EOT
&gt;&gt;&gt; /bin/rm -f *.o *~ PI* core IMB-IO IMB-EXT IMB-MPI1 exe_io exe_ext
&gt;&gt;&gt; exe_mpi1
&gt;&gt;&gt; touch exe_mpi1 *.c; rm -rf exe_io exe_ext
&gt;&gt;&gt; make MPI1 CPP=MPI1
&gt;&gt;&gt; make[1]: Entering directory
&gt;&gt;&gt; `/usr/local/mtt/scratch/installs/K5a_/tests/imb-2.3/IMB-2.3/src'
&gt;&gt;&gt; /bin/mpicc  -I/include   -DMPI1 -O -g -c IMB.c
&gt;&gt;&gt; make[1]: /bin/mpicc: Command not found
&gt;&gt;&gt; make[1]: *** [IMB.o] Error 127
&gt;&gt;&gt; make[1]: Leaving directory
&gt;&gt;&gt; `/usr/local/mtt/scratch/installs/K5a_/tests/imb-2.3/IMB-2.3/src'
&gt;&gt;&gt; make: *** [IMB-MPI1] Error 2
&gt;&gt;&gt; EOT
&gt;&gt;&gt; refcount=0
&gt;&gt;&gt; result_message= &lt;&lt;EOT
&gt;&gt;&gt; Shell: command failed &quot;cd src
&gt;&gt;&gt; make clean IMB-MPI1&quot;
&gt;&gt;&gt; EOT
&gt;&gt;&gt; mpi_install_simple_section_name=gcc
&gt;&gt;&gt; test_result=0
&gt;&gt;&gt; exit_status=512
&gt;&gt;&gt; mpi_get_simple_section_name=ompiv1.2
&gt;&gt;&gt; simple_section_name=imb-2.3
&gt;&gt;&gt; srcdir=/usr/local/mtt/scratch/installs/K5a_/tests/imb-2.3/IMB-2.3
&gt;&gt;&gt; start_timestamp=1179655379
&gt;&gt;&gt; test_get_simple_section_name=imb
&gt;&gt;&gt;
&gt;&gt;&gt; --------------------------------------------------------------------
&gt;&gt;&gt; --
&gt;&gt;&gt; --
&gt;&gt;&gt; ----
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt; I feel that it has some thing to do with setting up an enviroment  
&gt;&gt;&gt; path
&gt;&gt;&gt; variable to the mpi bin dir. I could provide it as an argument to  
&gt;&gt;&gt; the
&gt;&gt;&gt; &quot;make&quot; file, but I cannot know in advance where mtt creates/
&gt;&gt;&gt; installs the
&gt;&gt;&gt; bin dir for each and every mpi installtion.
&gt;&gt;&gt;
&gt;&gt;&gt; Hopefully, you'll have an insight on this.
&gt;&gt;&gt;
&gt;&gt;&gt; Regards,
&gt;&gt;&gt; Shai Venter.
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt; -----Original Message-----
&gt;&gt;&gt;
&gt;&gt;&gt; Today's Topics:
&gt;&gt;&gt;
&gt;&gt;&gt;    1. MTT with ompiv1.2 (Shai Venter)
&gt;&gt;&gt;    2. Re: MTT with ompiv1.2 (Jeff Squyres)
&gt;&gt;&gt;    3. How can I know the path to mpicc ? (Shai Venter)
&gt;&gt;&gt;    4. Re: How can I know the path to mpicc ? (Jeff Squyres)
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt; --------------------------------------------------------------------
&gt;&gt;&gt; --
&gt;&gt;&gt;
&gt;&gt;&gt; Message: 1
&gt;&gt;&gt; Date: Thu, 17 May 2007 16:50:14 +0300
&gt;&gt;&gt; From: &quot;Shai Venter&quot; &lt;venters_at_[hidden]&gt;
&gt;&gt;&gt; Subject: [MTT users] MTT with ompiv1.2
&gt;&gt;&gt; To: &lt;mtt-users_at_[hidden]&gt;
&gt;&gt;&gt; Message-ID:
&gt;&gt;&gt; 	&lt;6C2C79E72C305246B504CBA17B5500C901825449_at_[hidden]&gt;
&gt;&gt;&gt; Content-Type: text/plain; charset=&quot;us-ascii&quot;
&gt;&gt;&gt;
&gt;&gt;&gt; Hi There !
&gt;&gt;&gt; Regarding the .ini file:
&gt;&gt;&gt; Using setenv in the MPI Get: phase, should set me an Enviroment var,
&gt;&gt;&gt; right ?!
&gt;&gt;&gt; So if , let say, I write setenv = MPIHOMEDIR  &amp;shell(&quot;pwd&quot;)/install
&gt;&gt;&gt; should set MPIHOMEDIR to some path as mentioned.
&gt;&gt;&gt; Well, I checked for my MPIHOMEDIR  in the env ( cmd line:   env | 
&gt;&gt;&gt; grep
&gt;&gt;&gt; MPI ) and got nothing.
&gt;&gt;&gt; What did I not do right?
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt; Shai Venter
&gt;&gt;&gt; Q.A
&gt;&gt;&gt; Mellanox Technologies, Ltd.
&gt;&gt;&gt; www.mellanox.com
&gt;&gt;&gt; +972 (0)4  9097200 ext. 252
&gt;&gt;&gt; +972 (0)50 2888637
&gt;&gt;&gt;
&gt;&gt;&gt; Date: Thu, 17 May 2007 07:04:22 -0700
&gt;&gt;&gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
&gt;&gt;&gt; Subject: Re: [MTT users] MTT with ompiv1.2
&gt;&gt;&gt; To: General user list for the MPI Testing Tool
&gt;&gt;&gt; 	&lt;mtt-users_at_[hidden]&gt;
&gt;&gt;&gt; Message-ID: &lt;4D863C26-EE6F-4F3E-9238-82480DC7D8AD_at_[hidden]&gt;
&gt;&gt;&gt; Content-Type: text/plain; charset=WINDOWS-1252; delsp=yes;
&gt;&gt;&gt; 	format=flowed
&gt;&gt;&gt;
&gt;&gt;&gt; I don't believe that we currently support setenv in the MPI Get
&gt;&gt;&gt; phase, mainly because we didn't know that anyone would be using it
&gt;&gt;&gt; there.
&gt;&gt;&gt;
&gt;&gt;&gt; What do you need to do, specifically?
&gt;&gt;&gt;
&gt;&gt;&gt; FWIW, MTT should handle all paths internally -- it builds everything
&gt;&gt;&gt; inside the scratch tree, maintaining the different trees for all the
&gt;&gt;&gt; different get's and install's.
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt; Jeff Squyres
&gt;&gt;&gt; Cisco Systems
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt; ------------------------------
&gt;&gt;&gt;
&gt;&gt;&gt; Message: 3
&gt;&gt;&gt; Date: Thu, 17 May 2007 17:20:40 +0300
&gt;&gt;&gt; From: &quot;Shai Venter&quot; &lt;venters_at_[hidden]&gt;
&gt;&gt;&gt; Subject: [MTT users] How can I know the path to mpicc ?
&gt;&gt;&gt; To: &lt;mtt-users_at_[hidden]&gt;
&gt;&gt;&gt; Message-ID:
&gt;&gt;&gt; 	&lt;6C2C79E72C305246B504CBA17B5500C90182546D_at_[hidden]&gt;
&gt;&gt;&gt; Content-Type: text/plain; charset=&quot;us-ascii&quot;
&gt;&gt;&gt;
&gt;&gt;&gt; Hi there !
&gt;&gt;&gt; Using mtt, I'm trying to build and run  the IMB-MPI1 test.
&gt;&gt;&gt; I need to provide to the IMB make file,  a path to the bin dir where
&gt;&gt;&gt; mpicc compiler is.
&gt;&gt;&gt; How do I do that, when mtt creat it's own directory trees for mpi
&gt;&gt;&gt; installations.
&gt;&gt;&gt; mtt gets the test sources for that matter, but fails to build.
&gt;&gt;&gt;
&gt;&gt;&gt; Shai Venter
&gt;&gt;&gt; Q.A
&gt;&gt;&gt; Mellanox Technologies, Ltd.
&gt;&gt;&gt; www.mellanox.com
&gt;&gt;&gt; +972 (0)4  9097200 ext. 252
&gt;&gt;&gt; +972 (0)50 2888637
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt; Message: 4
&gt;&gt;&gt; Date: Thu, 17 May 2007 07:24:06 -0700
&gt;&gt;&gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
&gt;&gt;&gt; Subject: Re: [MTT users] How can I know the path to mpicc ?
&gt;&gt;&gt; To: General user list for the MPI Testing Tool
&gt;&gt;&gt; 	&lt;mtt-users_at_[hidden]&gt;
&gt;&gt;&gt; Message-ID: &lt;AC772252-424C-4110-8B48-2CA41016C1B0_at_[hidden]&gt;
&gt;&gt;&gt; Content-Type: text/plain; charset=WINDOWS-1252; delsp=yes;
&gt;&gt;&gt; 	format=flowed
&gt;&gt;&gt;
&gt;&gt;&gt; mpicc should be in the path already; MTT should take care of that  
&gt;&gt;&gt; for
&gt;&gt;&gt; you.  Here's what I have in the Cisco INI file for the IMB test  
&gt;&gt;&gt; build
&gt;&gt;&gt; section:
&gt;&gt;&gt;
&gt;&gt;&gt; [Test build: imb]
&gt;&gt;&gt; test_get = imb
&gt;&gt;&gt; save_stdout_on_success = 1
&gt;&gt;&gt; merge_stdout_stderr = 1
&gt;&gt;&gt;
&gt;&gt;&gt; module = Shell
&gt;&gt;&gt; shell_build_command = &lt;&lt;EOT
&gt;&gt;&gt; cd src
&gt;&gt;&gt; make clean IMB-MPI1
&gt;&gt;&gt; EOT
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt; Jeff Squyres
&gt;&gt;&gt; Cisco Systems
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt; End of mtt-users Digest, Vol 15, Issue 3
&gt;&gt;&gt; ****************************************
&gt;&gt;&gt;
&gt;&gt;&gt; _______________________________________________
&gt;&gt;&gt; mtt-users mailing list
&gt;&gt;&gt; mtt-users_at_[hidden]
&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
&gt;&gt;
&gt;&gt;
&gt;&gt; -- 
&gt;&gt; Jeff Squyres
&gt;&gt; Cisco Systems
&gt;&gt;
&gt;&gt; _______________________________________________
&gt;&gt; mtt-users mailing list
&gt;&gt; mtt-users_at_[hidden]
&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
&gt; _______________________________________________
&gt; mtt-users mailing list
&gt; mtt-users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
-- 
Jeff Squyres
Cisco Systems
------------------------------
_______________________________________________
mtt-users mailing list
mtt-users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
End of mtt-users Digest, Vol 15, Issue 5
****************************************
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0311.php">Jeff Squyres: "Re: [MTT users] mtt-users Digest, Vol 15, Issue 5"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2007/05/0309.php">Tim Mattox: "Re: [MTT users] Few trunk results this morning?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0311.php">Jeff Squyres: "Re: [MTT users] mtt-users Digest, Vol 15, Issue 5"</a>
<li><strong>Reply:</strong> <a href="0311.php">Jeff Squyres: "Re: [MTT users] mtt-users Digest, Vol 15, Issue 5"</a>
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
