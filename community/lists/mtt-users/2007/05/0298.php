<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun May 20 03:31:14 2007" -->
<!-- isoreceived="20070520073114" -->
<!-- sent="Sun, 20 May 2007 10:31:34 +0300" -->
<!-- isosent="20070520073134" -->
<!-- name="Shai Venter" -->
<!-- email="venters_at_[hidden]" -->
<!-- subject="Re: [MTT users] mtt test build for IMB-MPI1 fails," -->
<!-- id="6C2C79E72C305246B504CBA17B5500C9018256F7_at_mtlexch01.mtl.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="mailman.23.1179417603.31815.mtt-users_at_open-mpi.org" -->
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
<strong>Date:</strong> 2007-05-20 03:31:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0299.php">Jeff Squyres: "Re: [MTT users] mtt test build for IMB-MPI1 fails,"</a>
<li><strong>Previous message:</strong> <a href="0297.php">Jeff Squyres: "Re: [MTT users] How can I know the path to mpicc ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0299.php">Jeff Squyres: "Re: [MTT users] mtt test build for IMB-MPI1 fails,"</a>
<li><strong>Reply:</strong> <a href="0299.php">Jeff Squyres: "Re: [MTT users] mtt test build for IMB-MPI1 fails,"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello again Mr Squyres.
<br>
<p>I am most greatfull for your answers to my questions (2). 
<br>
Actualy, they are both linked to the same issue: my mtt run fails in the
<br>
test build phase for IMB-MPI1.
<br>
<p>It seems that the make file cannot find the mpicc to compile.
<br>
It searches for it in a default path (/bin/mpicc) but it's 
<br>
Usless scince this path is irrelevant.
<br>
<p>I've tried this code:
<br>
<p>module = Shell
<br>
shell_build_command = &lt;&lt;EOT
<br>
cd src
<br>
make clean IMB-MPI1
<br>
EOT
<br>
<p>But still the same error. 
<br>
<p><p>Lets have a look at the output of build error:
<br>
<p>------------------------------------------------------------------------
<br>
<pre>
----
sw169:/usr/local/mtt # cat
scratch/installs/K5a_/tests/imb-2.3/test_built.ini
# This file was automatically created by Config/IniFiles.pm.  Any
changes made manually are likely to be lost!
[test_built]
mpi_version=1.2.2
full_section_name=test build: imb-2.3
result_stdout= &lt;&lt;EOT
/bin/rm -f *.o *~ PI* core IMB-IO IMB-EXT IMB-MPI1 exe_io exe_ext
exe_mpi1
touch exe_mpi1 *.c; rm -rf exe_io exe_ext
make MPI1 CPP=MPI1
make[1]: Entering directory
`/usr/local/mtt/scratch/installs/K5a_/tests/imb-2.3/IMB-2.3/src'
/bin/mpicc  -I/include   -DMPI1 -O -g -c IMB.c
make[1]: /bin/mpicc: Command not found
make[1]: *** [IMB.o] Error 127
make[1]: Leaving directory
`/usr/local/mtt/scratch/installs/K5a_/tests/imb-2.3/IMB-2.3/src'
make: *** [IMB-MPI1] Error 2
EOT
refcount=0
result_message= &lt;&lt;EOT
Shell: command failed &quot;cd src
make clean IMB-MPI1&quot;
EOT
mpi_install_simple_section_name=gcc
test_result=0
exit_status=512
mpi_get_simple_section_name=ompiv1.2
simple_section_name=imb-2.3
srcdir=/usr/local/mtt/scratch/installs/K5a_/tests/imb-2.3/IMB-2.3
start_timestamp=1179655379
test_get_simple_section_name=imb
------------------------------------------------------------------------
----
I feel that it has some thing to do with setting up an enviroment path
variable to the mpi bin dir. I could provide it as an argument to the
&quot;make&quot; file, but I cannot know in advance where mtt creates/installs the
bin dir for each and every mpi installtion.
Hopefully, you'll have an insight on this.
Regards,
Shai Venter.
-----Original Message-----
Today's Topics:
   1. MTT with ompiv1.2 (Shai Venter)
   2. Re: MTT with ompiv1.2 (Jeff Squyres)
   3. How can I know the path to mpicc ? (Shai Venter)
   4. Re: How can I know the path to mpicc ? (Jeff Squyres)
----------------------------------------------------------------------
Message: 1
Date: Thu, 17 May 2007 16:50:14 +0300
From: &quot;Shai Venter&quot; &lt;venters_at_[hidden]&gt;
Subject: [MTT users] MTT with ompiv1.2
To: &lt;mtt-users_at_[hidden]&gt;
Message-ID:
	&lt;6C2C79E72C305246B504CBA17B5500C901825449_at_[hidden]&gt;
Content-Type: text/plain; charset=&quot;us-ascii&quot;
Hi There ! 
Regarding the .ini file:
Using setenv in the MPI Get: phase, should set me an Enviroment var,
right ?!
So if , let say, I write setenv = MPIHOMEDIR  &amp;shell(&quot;pwd&quot;)/install
should set MPIHOMEDIR to some path as mentioned. 
Well, I checked for my MPIHOMEDIR  in the env ( cmd line:   env |grep
MPI ) and got nothing. 
What did I not do right?
 
 
 
Shai Venter
Q.A
Mellanox Technologies, Ltd.
www.mellanox.com
+972 (0)4  9097200 ext. 252
+972 (0)50 2888637
 
Date: Thu, 17 May 2007 07:04:22 -0700
From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
Subject: Re: [MTT users] MTT with ompiv1.2
To: General user list for the MPI Testing Tool
	&lt;mtt-users_at_[hidden]&gt;
Message-ID: &lt;4D863C26-EE6F-4F3E-9238-82480DC7D8AD_at_[hidden]&gt;
Content-Type: text/plain; charset=WINDOWS-1252; delsp=yes;
	format=flowed
I don't believe that we currently support setenv in the MPI Get  
phase, mainly because we didn't know that anyone would be using it  
there.
What do you need to do, specifically?
FWIW, MTT should handle all paths internally -- it builds everything  
inside the scratch tree, maintaining the different trees for all the  
different get's and install's.
Jeff Squyres
Cisco Systems
------------------------------
Message: 3
Date: Thu, 17 May 2007 17:20:40 +0300
From: &quot;Shai Venter&quot; &lt;venters_at_[hidden]&gt;
Subject: [MTT users] How can I know the path to mpicc ?
To: &lt;mtt-users_at_[hidden]&gt;
Message-ID:
	&lt;6C2C79E72C305246B504CBA17B5500C90182546D_at_[hidden]&gt;
Content-Type: text/plain; charset=&quot;us-ascii&quot;
Hi there !
Using mtt, I'm trying to build and run  the IMB-MPI1 test. 
I need to provide to the IMB make file,  a path to the bin dir where
mpicc compiler is. 
How do I do that, when mtt creat it's own directory trees for mpi
installations.
mtt gets the test sources for that matter, but fails to build.  
 
Shai Venter
Q.A
Mellanox Technologies, Ltd.
www.mellanox.com
+972 (0)4  9097200 ext. 252
+972 (0)50 2888637
 
Message: 4
Date: Thu, 17 May 2007 07:24:06 -0700
From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
Subject: Re: [MTT users] How can I know the path to mpicc ?
To: General user list for the MPI Testing Tool
	&lt;mtt-users_at_[hidden]&gt;
Message-ID: &lt;AC772252-424C-4110-8B48-2CA41016C1B0_at_[hidden]&gt;
Content-Type: text/plain; charset=WINDOWS-1252; delsp=yes;
	format=flowed
mpicc should be in the path already; MTT should take care of that for  
you.  Here's what I have in the Cisco INI file for the IMB test build  
section:
[Test build: imb]
test_get = imb
save_stdout_on_success = 1
merge_stdout_stderr = 1
module = Shell
shell_build_command = &lt;&lt;EOT
cd src
make clean IMB-MPI1
EOT
Jeff Squyres
Cisco Systems
End of mtt-users Digest, Vol 15, Issue 3
****************************************
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0299.php">Jeff Squyres: "Re: [MTT users] mtt test build for IMB-MPI1 fails,"</a>
<li><strong>Previous message:</strong> <a href="0297.php">Jeff Squyres: "Re: [MTT users] How can I know the path to mpicc ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0299.php">Jeff Squyres: "Re: [MTT users] mtt test build for IMB-MPI1 fails,"</a>
<li><strong>Reply:</strong> <a href="0299.php">Jeff Squyres: "Re: [MTT users] mtt test build for IMB-MPI1 fails,"</a>
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
