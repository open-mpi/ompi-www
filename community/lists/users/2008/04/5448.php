<?
$subject_val = "Re: [OMPI users] Problems compiling OPENMPI !!";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 22 09:36:30 2008" -->
<!-- isoreceived="20080422133630" -->
<!-- sent="Tue, 22 Apr 2008 09:36:15 -0400" -->
<!-- isosent="20080422133615" -->
<!-- name="koppole_at_[hidden]" -->
<!-- email="koppole_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems compiling OPENMPI !!" -->
<!-- id="8CA7294F2CA0392-4C0-5DCA_at_webmail-dd08.sysops.aol.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="8CA728A19270F72-4C0-5765_at_webmail-dd08.sysops.aol.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problems compiling OPENMPI !!<br>
<strong>From:</strong> <a href="mailto:koppole_at_[hidden]?Subject=Re:%20[OMPI%20users]%20Problems%20compiling%20OPENMPI%20!!"><em>koppole_at_[hidden]</em></a><br>
<strong>Date:</strong> 2008-04-22 09:36:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5449.php">Brian W. Barrett: "Re: [OMPI users] Problems compiling OPENMPI !!"</a>
<li><strong>Previous message:</strong> <a href="5447.php">Josh Hursey: "Re: [OMPI users] How to restart a job twice"</a>
<li><strong>In reply to:</strong> <a href="5440.php">koppole_at_[hidden]: "Re: [OMPI users] Problems compiling OPENMPI !!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5449.php">Brian W. Barrett: "Re: [OMPI users] Problems compiling OPENMPI !!"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>I have sent the tar'ed and gzipped make.log and config.log file along 
<br>
with my original email. For your benefit, I will send you the files 
<br>
directly to your email so that we dont duplicate the files on the 
<br>
archive server.
<br>
<p>Cheers,
<br>
<p>Sampath.
<br>
<p><p><p>From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
<br>
<p>Subject: Re: [OMPI users] Problems compiling OPENMPI !!
<br>
<p>To: Open MPI Users &lt;users_at_[hidden]&gt;
<br>
<p>Message-ID: &lt;EC22D215-DE82-4994-945D-BF3E4BFB3A12_at_[hidden]&gt;
<br>
<p>Content-Type: text/plain; charset=US-ASCII; format=flowed; delsp=yes
<br>
<p><p><p>Please send all the information listed here:
<br>
<p><p><p><a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
<p><p><p>-----Original Message-----
<br>
<p>From: koppole_at_[hidden]
<br>
<p>To: users_at_[hidden]
<br>
<p>Sent: Tue, 22 Apr 2008 2:18 pm
<br>
<p>Subject: Re: Problems compiling OPENMPI !!
<br>
<p><p><p>Hi Jeff,
<br>
<p><p><p>Yes. my C++ compiler works quite well. I have compiled and run a number
<br>
<p>of programs with it. Further more, I could comfortably install mpich2
<br>
<p>with this compiler with no problems.
<br>
<p><p><p>What is surprising is : during configure ... I get:
<br>
<p><p><p>.....
<br>
<p>&nbsp;&nbsp;
<br>
=========================================================================
<br>
===
<br>
<p><p><p><p><p>== Modular Component Architecture (MCA) setup
<br>
<p><p><p><p><p>=========================================================================
<br>
===
<br>
<p><p><p><p><p>checking for subdir args...
<br>
<p>'--prefix=/usr/people/camm/kopposa1/openmpi' 'FC=ifort64' 'F77=ifort64'
<br>
<p>'F95=ifort64' 'CC=icc64'
<br>
<p><p><p><p><p>&nbsp;'CXX=icpc'
<br>
<p><p><p><p><p>checking for gcc... gcc
<br>
<p><p><p><p><p>checking whether we are using the GNU Objective C compiler... yes
<br>
<p><p><p><p><p>checking whether gcc accepts -g... yes
<br>
<p><p><p><p><p>.......
<br>
<p><p><p><p><p><p><p><p><p>Intel C compiler is not a gnu objective C compiler. I don't know why
<br>
<p>openmpi thinks that this is a GNU Compiler.
<br>
<p><p><p><p><p><p><p><p><p>Thanks for your time,
<br>
<p><p><p><p><p>Cheers,
<br>
<p><p><p><p><p>Sampath.
<br>
<p><p><p><p><p><p><p><p><p><p><p><p><p>From: Jeff Squyres (jsquyres_at_[hidden])
<br>
<p><p><p><p><p>Date: 2008-04-22 08:05:16
<br>
<p><p><p><p><p><p><p><p><p>Is your C++ compiler installer properly? Can you build and run other C
<br>
<p><p><p><p><p>++ programs that use the STL?
<br>
<p><p><p><p><p><p><p><p><p><p><p><p><p>-----Original Message-----
<br>
<p><p><p><p><p>From: koppole_at_[hidden]
<br>
<p><p><p><p><p>To: users_at_[hidden]
<br>
<p><p><p><p><p>Sent: Tue, 22 Apr 2008 11:01 am
<br>
<p><p><p><p><p>Subject: Problems compiling OPENMPI !!
<br>
<p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p>Hello there,
<br>
<p><p><p><p><p><p><p><p><p><p><p><p><p>I downloaded openmpi-1.2.5.tar and &quot;un-tar&quot;'ed it with tar -xvf
<br>
<p><p><p><p><p>openmpi-1.2.5.tar which created a directory openmpi-1.2.5.
<br>
<p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p>I then created a build directory and called
<br>
<p><p><p><p><p><p><p><p><p><p><p><p><p>../openmpi-1.2.5/configure --prefix=$home/openmpi FC=ifort64
<br>
<p><p><p><p><p>F77=ifort64 F95=ifort64 CC=icc64 CXX=icpc | &amp; tee config.out
<br>
<p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p>Everything went fine.
<br>
<p><p><p><p><p><p><p><p><p><p><p><p><p>I then said : make -j 8 | &amp; tee make.out and the compilation crashed
<br>
<p><p><p><p><p>with:
<br>
<p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p>/bin/sh ../../../libtool --tag=CXX   --mode=link icpc  -O3 -DNDEBUG
<br>
<p><p><p><p><p>-finline-functions -pthread  -export-dynamic   -o libmpi_cxx.la -rpath
<br>
<p><p><p><p><p>/usr/people/camm/kopposa1/openmpi/lib mpicxx.lo intercepts.lo comm.lo
<br>
<p><p><p><p><p>datatype.lo file.lo win.lo  -lnsl -lutil
<br>
<p><p><p><p><p><p><p><p><p><p><p><p><p>libtool: link: icpc -shared  .libs/mpicxx.o .libs/intercepts.o
<br>
<p><p><p><p><p>.libs/comm.o .libs/datatype.o .libs/file.o .libs/win.o   -lnsl -lutil
<br>
<p><p><p><p><p>-L/usr/prog/intel/cce/101015/lib
<br>
<p><p><p><p><p>-L/usr/lib/gcc/x86_64-redhat-linux/3.4.6/
<br>
<p><p><p><p><p>-L/usr/lib/gcc/x86_64-redhat-linux/3.4.6/../../../../lib64 -limf -lsvml
<br>
<p><p><p><p><p>-lipgo /usr/people/camm/kopposa1/gcc64/lib/../lib64/libstdc++.a
<br>
<p><p><p><p><p>-L/scratch/gcc/x86_64-unknown-linux-gnu/libstdc++-v3/src
<br>
<p><p><p><p><p>-L/scratch/gcc/x86_64-unknown-linux-gnu/libstdc++-v3/src/.libs
<br>
<p><p><p><p><p>-L/scratch/gcc/./gcc -L/lib/../lib64 -L/usr/lib/../lib64 -lm -lgcc
<br>
<p><p><p><p><p>-lintlc -lpthread -lgcc_s -lirc_s -ldl -lc  -pthread   -pthread
<br>
<p><p><p><p><p>-Wl,-soname -Wl,libmpi_cxx.so.0 -o .libs/libmpi_cxx.so.0.0.0
<br>
<p><p><p><p><p><p><p><p><p><p><p><p><p>ld:
<br>
<p><p><p><p><p>/usr/people/camm/kopposa1/gcc64/lib/../lib64/libstdc++.a(ios_init.o):
<br>
<p><p><p><p><p>relocation R_X86_64_32 against `pthread_cancel' can not be used when
<br>
<p><p><p><p><p>making a shared object; recompile with -fPIC
<br>
<p><p><p><p><p><p><p><p><p><p><p><p><p>/usr/people/camm/kopposa1/gcc64/lib/../lib64/libstdc++.a: could not
<br>
<p><p><p><p><p>read symbols: Bad value
<br>
<p><p><p><p><p><p><p><p><p><p><p><p><p>make[3]: *** [libmpi_cxx.la] Error 1
<br>
<p><p><p><p><p><p><p><p><p><p><p><p><p>make[3]: Leaving directory `/scratch/openmpi/ompi/mpi/cxx'
<br>
<p><p><p><p><p><p><p><p><p><p><p><p><p>make[2]: *** [all-recursive] Error 1
<br>
<p><p><p><p><p><p><p><p><p><p><p><p><p>make[2]: Leaving directory `/scratch/openmpi/ompi/mpi'
<br>
<p><p><p><p><p><p><p><p><p><p><p><p><p>make[1]: *** [all-recursive] Error 1
<br>
<p><p><p><p><p><p><p><p><p><p><p><p><p>make[1]: Leaving directory `/scratch/openmpi/ompi'
<br>
<p><p><p><p><p><p><p><p><p><p><p><p><p>make: *** [all-recursive] Error 1
<br>
<p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p>FYI: I am attaching the zipped make.out and config.out files.
<br>
<p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p>Thanks a lot for your help,
<br>
<p><p><p><p><p><p><p><p><p><p><p><p><p>Cheers,
<br>
<p><p><p><p><p><p><p><p><p><p><p><p><p>Sampath.
<br>
<p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p>Sampath Koppole,
<br>
<p><p><p><p><p><p><p><p><p><p><p><p><p>The Computational Molecular Biophysics Group,
<br>
<p><p><p><p><p><p><p><p><p><p><p><p><p>Interdisciplinary Center for Scientific Computing (IWR),
<br>
<p><p><p><p><p><p><p><p><p><p><p><p><p>368, Im Neuenheimer Feld,
<br>
<p><p><p><p><p><p><p><p><p><p><p><p><p>Heidelberg. D-69120.
<br>
<p><p><p><p><p><p><p><p><p><p><p><p><p>Germany.
<br>
<p><p><p><p><p><p><p><p><p><p><p><p><p>Web Home : <a href="http://www.sampath.koppole.com">http://www.sampath.koppole.com</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5449.php">Brian W. Barrett: "Re: [OMPI users] Problems compiling OPENMPI !!"</a>
<li><strong>Previous message:</strong> <a href="5447.php">Josh Hursey: "Re: [OMPI users] How to restart a job twice"</a>
<li><strong>In reply to:</strong> <a href="5440.php">koppole_at_[hidden]: "Re: [OMPI users] Problems compiling OPENMPI !!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5449.php">Brian W. Barrett: "Re: [OMPI users] Problems compiling OPENMPI !!"</a>
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
