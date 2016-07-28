<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon May 21 11:44:11 2007" -->
<!-- isoreceived="20070521154411" -->
<!-- sent="Mon, 21 May 2007 08:43:42 -0700" -->
<!-- isosent="20070521154342" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] mtt test build for IMB-MPI1 fails," -->
<!-- id="C75CDC08-78D4-45EE-8FB8-F9364FDA839D_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20070521154140.GC6879_at_sun.com" -->
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
<strong>Date:</strong> 2007-05-21 11:43:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0302.php">Ethan Mallove: "[MTT users] Failure tracking (RE: #70: Show &quot;new&quot; failures)"</a>
<li><strong>Previous message:</strong> <a href="0300.php">Ethan Mallove: "Re: [MTT users] mtt test build for IMB-MPI1 fails,"</a>
<li><strong>In reply to:</strong> <a href="0300.php">Ethan Mallove: "Re: [MTT users] mtt test build for IMB-MPI1 fails,"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Good point.  No, there is no reason to use PMB 2.2.  It's older and  
<br>
has known bugs.
<br>
<p>I always use IMB 2.3.
<br>
<p><p>On May 21, 2007, at 8:41 AM, Ethan Mallove wrote:
<br>
<p><span class="quotelev1">&gt; Just a guess, but could this could be the source of confusion?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/svn/ompi-tests/trunk/PMB-2.2">https://svn.open-mpi.org/svn/ompi-tests/trunk/PMB-2.2</a>
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/svn/ompi-tests/trunk/IMB_2.3">https://svn.open-mpi.org/svn/ompi-tests/trunk/IMB_2.3</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Should PMB be removed from ompi-tests? I mean, would there
</span><br>
<span class="quotelev1">&gt; ever be a reason to use PMB 2.2 instead of IMB 2.3?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Ethan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, May/21/2007 06:32:53AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; It looks like your makefile is hard-coded to use /bin/mpicc, which
</span><br>
<span class="quotelev2">&gt;&gt; will always be wrong for MTT.  This specifies an absolute location
</span><br>
<span class="quotelev2">&gt;&gt; for mpicc, and does not allow the $PATH to be used.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Where are you getting your copy of IMB from?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The IMB 2.3 that is in the ompi_tests repository has a make_openmpi
</span><br>
<span class="quotelev2">&gt;&gt; that contains the following line:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; CC          = mpicc
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hence, &quot;mpicc&quot; is used, and therefore $PATH is used to find it.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can you modify your makefile this way?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On May 20, 2007, at 12:31 AM, Shai Venter wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello again Mr Squyres.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am most greatfull for your answers to my questions (2).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Actualy, they are both linked to the same issue: my mtt run fails
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; test build phase for IMB-MPI1.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It seems that the make file cannot find the mpicc to compile.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It searches for it in a default path (/bin/mpicc) but it's
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Usless scince this path is irrelevant.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I've tried this code:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; module = Shell
</span><br>
<span class="quotelev3">&gt;&gt;&gt; shell_build_command = &lt;&lt;EOT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cd src
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make clean IMB-MPI1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; EOT
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; But still the same error.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Lets have a look at the output of build error:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------------------------------------------------- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sw169:/usr/local/mtt # cat
</span><br>
<span class="quotelev3">&gt;&gt;&gt; scratch/installs/K5a_/tests/imb-2.3/test_built.ini
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # This file was automatically created by Config/IniFiles.pm.  Any
</span><br>
<span class="quotelev3">&gt;&gt;&gt; changes made manually are likely to be lost!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [test_built]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpi_version=1.2.2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; full_section_name=test build: imb-2.3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; result_stdout= &lt;&lt;EOT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /bin/rm -f *.o *~ PI* core IMB-IO IMB-EXT IMB-MPI1 exe_io exe_ext
</span><br>
<span class="quotelev3">&gt;&gt;&gt; exe_mpi1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; touch exe_mpi1 *.c; rm -rf exe_io exe_ext
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make MPI1 CPP=MPI1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[1]: Entering directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; `/usr/local/mtt/scratch/installs/K5a_/tests/imb-2.3/IMB-2.3/src'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /bin/mpicc  -I/include   -DMPI1 -O -g -c IMB.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[1]: /bin/mpicc: Command not found
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[1]: *** [IMB.o] Error 127
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[1]: Leaving directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; `/usr/local/mtt/scratch/installs/K5a_/tests/imb-2.3/IMB-2.3/src'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make: *** [IMB-MPI1] Error 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; EOT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; refcount=0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; result_message= &lt;&lt;EOT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Shell: command failed &quot;cd src
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make clean IMB-MPI1&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; EOT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpi_install_simple_section_name=gcc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; test_result=0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; exit_status=512
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpi_get_simple_section_name=ompiv1.2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; simple_section_name=imb-2.3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; srcdir=/usr/local/mtt/scratch/installs/K5a_/tests/imb-2.3/IMB-2.3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; start_timestamp=1179655379
</span><br>
<span class="quotelev3">&gt;&gt;&gt; test_get_simple_section_name=imb
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------------------------------------------------- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I feel that it has some thing to do with setting up an enviroment  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; path
</span><br>
<span class="quotelev3">&gt;&gt;&gt; variable to the mpi bin dir. I could provide it as an argument to  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;make&quot; file, but I cannot know in advance where mtt creates/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; installs the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; bin dir for each and every mpi installtion.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hopefully, you'll have an insight on this.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Shai Venter.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Today's Topics:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    1. MTT with ompiv1.2 (Shai Venter)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    2. Re: MTT with ompiv1.2 (Jeff Squyres)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    3. How can I know the path to mpicc ? (Shai Venter)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    4. Re: How can I know the path to mpicc ? (Jeff Squyres)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------------------------------------------------- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Message: 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Date: Thu, 17 May 2007 16:50:14 +0300
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: &quot;Shai Venter&quot; &lt;venters_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: [MTT users] MTT with ompiv1.2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: &lt;mtt-users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Message-ID:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	&lt;6C2C79E72C305246B504CBA17B5500C901825449_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Content-Type: text/plain; charset=&quot;us-ascii&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi There !
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Regarding the .ini file:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Using setenv in the MPI Get: phase, should set me an Enviroment var,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; right ?!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So if , let say, I write setenv = MPIHOMEDIR  &amp;shell(&quot;pwd&quot;)/install
</span><br>
<span class="quotelev3">&gt;&gt;&gt; should set MPIHOMEDIR to some path as mentioned.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Well, I checked for my MPIHOMEDIR  in the env ( cmd line:   env | 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; grep
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI ) and got nothing.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What did I not do right?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Shai Venter
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Q.A
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Mellanox Technologies, Ltd.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; www.mellanox.com
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +972 (0)4  9097200 ext. 252
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +972 (0)50 2888637
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Date: Thu, 17 May 2007 07:04:22 -0700
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: Re: [MTT users] MTT with ompiv1.2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: General user list for the MPI Testing Tool
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	&lt;mtt-users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Message-ID: &lt;4D863C26-EE6F-4F3E-9238-82480DC7D8AD_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Content-Type: text/plain; charset=WINDOWS-1252; delsp=yes;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	format=flowed
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I don't believe that we currently support setenv in the MPI Get
</span><br>
<span class="quotelev3">&gt;&gt;&gt; phase, mainly because we didn't know that anyone would be using it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; there.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What do you need to do, specifically?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; FWIW, MTT should handle all paths internally -- it builds everything
</span><br>
<span class="quotelev3">&gt;&gt;&gt; inside the scratch tree, maintaining the different trees for all the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; different get's and install's.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Message: 3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Date: Thu, 17 May 2007 17:20:40 +0300
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: &quot;Shai Venter&quot; &lt;venters_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: [MTT users] How can I know the path to mpicc ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: &lt;mtt-users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Message-ID:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	&lt;6C2C79E72C305246B504CBA17B5500C90182546D_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Content-Type: text/plain; charset=&quot;us-ascii&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi there !
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Using mtt, I'm trying to build and run  the IMB-MPI1 test.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I need to provide to the IMB make file,  a path to the bin dir where
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpicc compiler is.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; How do I do that, when mtt creat it's own directory trees for mpi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; installations.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mtt gets the test sources for that matter, but fails to build.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Shai Venter
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Q.A
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Mellanox Technologies, Ltd.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; www.mellanox.com
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +972 (0)4  9097200 ext. 252
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +972 (0)50 2888637
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Message: 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Date: Thu, 17 May 2007 07:24:06 -0700
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: Re: [MTT users] How can I know the path to mpicc ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: General user list for the MPI Testing Tool
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	&lt;mtt-users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Message-ID: &lt;AC772252-424C-4110-8B48-2CA41016C1B0_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Content-Type: text/plain; charset=WINDOWS-1252; delsp=yes;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	format=flowed
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpicc should be in the path already; MTT should take care of that  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you.  Here's what I have in the Cisco INI file for the IMB test  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; build
</span><br>
<span class="quotelev3">&gt;&gt;&gt; section:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [Test build: imb]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; test_get = imb
</span><br>
<span class="quotelev3">&gt;&gt;&gt; save_stdout_on_success = 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; merge_stdout_stderr = 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; module = Shell
</span><br>
<span class="quotelev3">&gt;&gt;&gt; shell_build_command = &lt;&lt;EOT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cd src
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make clean IMB-MPI1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; EOT
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cisco Systems
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
<span class="quotelev3">&gt;&gt;&gt; End of mtt-users Digest, Vol 15, Issue 3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ****************************************
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
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
<li><strong>Next message:</strong> <a href="0302.php">Ethan Mallove: "[MTT users] Failure tracking (RE: #70: Show &quot;new&quot; failures)"</a>
<li><strong>Previous message:</strong> <a href="0300.php">Ethan Mallove: "Re: [MTT users] mtt test build for IMB-MPI1 fails,"</a>
<li><strong>In reply to:</strong> <a href="0300.php">Ethan Mallove: "Re: [MTT users] mtt test build for IMB-MPI1 fails,"</a>
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
