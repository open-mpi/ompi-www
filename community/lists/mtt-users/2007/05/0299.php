<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon May 21 09:33:10 2007" -->
<!-- isoreceived="20070521133310" -->
<!-- sent="Mon, 21 May 2007 06:32:53 -0700" -->
<!-- isosent="20070521133253" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] mtt test build for IMB-MPI1 fails," -->
<!-- id="72EBB18F-34BC-4635-A012-A122E925B99C_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="6C2C79E72C305246B504CBA17B5500C9018256F7_at_mtlexch01.mtl.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-21 09:32:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0300.php">Ethan Mallove: "Re: [MTT users] mtt test build for IMB-MPI1 fails,"</a>
<li><strong>Previous message:</strong> <a href="0298.php">Shai Venter: "Re: [MTT users] mtt test build for IMB-MPI1 fails,"</a>
<li><strong>In reply to:</strong> <a href="0298.php">Shai Venter: "Re: [MTT users] mtt test build for IMB-MPI1 fails,"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0300.php">Ethan Mallove: "Re: [MTT users] mtt test build for IMB-MPI1 fails,"</a>
<li><strong>Reply:</strong> <a href="0300.php">Ethan Mallove: "Re: [MTT users] mtt test build for IMB-MPI1 fails,"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It looks like your makefile is hard-coded to use /bin/mpicc, which  
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
<span class="quotelev1">&gt; --
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
<span class="quotelev1">&gt; --
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
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0300.php">Ethan Mallove: "Re: [MTT users] mtt test build for IMB-MPI1 fails,"</a>
<li><strong>Previous message:</strong> <a href="0298.php">Shai Venter: "Re: [MTT users] mtt test build for IMB-MPI1 fails,"</a>
<li><strong>In reply to:</strong> <a href="0298.php">Shai Venter: "Re: [MTT users] mtt test build for IMB-MPI1 fails,"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0300.php">Ethan Mallove: "Re: [MTT users] mtt test build for IMB-MPI1 fails,"</a>
<li><strong>Reply:</strong> <a href="0300.php">Ethan Mallove: "Re: [MTT users] mtt test build for IMB-MPI1 fails,"</a>
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
