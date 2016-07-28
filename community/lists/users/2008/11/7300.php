<?
$subject_val = "Re: [OMPI users] Fwd: Problems installing in Cygwin";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 12 18:52:48 2008" -->
<!-- isoreceived="20081112235248" -->
<!-- sent="Thu, 13 Nov 2008 10:52:43 +1100" -->
<!-- isosent="20081112235243" -->
<!-- name="Neville Clark" -->
<!-- email="openmpi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fwd: Problems installing in Cygwin" -->
<!-- id="1226533963.15431.39.camel_at_roo.qblong.zavalon.com" -->
<!-- inreplyto="1226481233.15431.28.camel_at_roo.qblong.zavalon.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Fwd: Problems installing in Cygwin<br>
<strong>From:</strong> Neville Clark (<em>openmpi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-12 18:52:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7301.php">Scott Beardsley: "[OMPI users] Tight integration and interactive sessions with SGE"</a>
<li><strong>Previous message:</strong> <a href="7299.php">Antonio Molins: "Re: [OMPI users] MPI_Type_create_darray causes MPI_File_set_view	to crash when ndims=2, array_of_gsizes[0]&gt;array_of_gsizes[1]"</a>
<li><strong>In reply to:</strong> <a href="7294.php">Neville Clark: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/10/7133.php">Gustavo Seabra: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>Update to build attempt. I have a successful build using Cygwin with the
<br>
following command 
<br>
$ ./configure --prefix=/opt/openmpi-1.3b2 \
<br>
&nbsp;--enable-mca-no-build=memory_mallopt,paffinity
<br>
<p>But I also had problem with &quot;max&quot; being defined somewhere.
<br>
I was able to locate it to the following line
<br>
#include MCA_timer_IMPLEMENTATION_HEADER
<br>
&nbsp;in &quot;ompi/tools/ompi_info/param.cc&quot;
<br>
adding #define NOMINMAX before the include
<br>
and #undef NOMINMAX after line fixed the problem.
<br>
<p>I have not yet found the file included by above line, but it most likely
<br>
includes windows.h which will define min and max.
<br>
<p>Hopefully this is helpful.
<br>
<p>BUT I would still like help on how to build in native windows.
<br>
<p>Thanks Nev
<br>
<p><p>-----Original Message-----
<br>
From: Neville Clark &lt;openmpi_at_[hidden]&gt;
<br>
Reply-To: Open MPI Users &lt;users_at_[hidden]&gt;
<br>
To: Open MPI Users &lt;users_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] Fwd: Problems installing in Cygwin
<br>
Date: Wed, 12 Nov 2008 20:13:53 +1100
<br>
<p>George (or anyone else that can help),
<br>
<p>I have been trying to build OpenMPI for windows (XP). But so far have
<br>
not been successful. I am trying to build version 1.3b2, because of
<br>
these emails, I have setup two virtual machine to do the windows builds,
<br>
one with cygwin installed and one with Microsoft Visual Studio 9.0
<br>
(express) installed. 
<br>
Using slightly modified command that Gustavo used
<br>
&nbsp;
<br>
./configure --prefix=/home/seabra/local/openmpi-1.3b1 \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--with-mpi-param_check=always --with-threads=posix \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--enable-mpi-threads --disable-io-romio \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--enable-mca-no-build=memory_mallopt,maffinity,paffinity \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--enable-contrib-no-build=vt \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CXX=g++
<br>
<p>I was able to get configure to run, but the 'make all' failed. Before
<br>
trying to debug the Cygwin build (which is very slow), I want to try the
<br>
native windows build, but dont know how to proceed. Is there a MSVC
<br>
project file? Or should I use Cygwin to run configure, but use the
<br>
microsoft compiler and linker?
<br>
<p>I have not yet looked into using SFU.
<br>
<p>Thank you in advance
<br>
Nev
<br>
<p><p>-----Original Message-----
<br>
From: George Bosilca &lt;bosilca_at_[hidden]&gt;
<br>
Reply-To: Open MPI Users &lt;users_at_[hidden]&gt;
<br>
To: Open MPI Users &lt;users_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] Fwd: Problems installing in Cygwin
<br>
Date: Thu, 30 Oct 2008 09:04:48 -0400
<br>
<p>Gustavo,
<br>
<p>As Jeff mentioned this component is not required on Windows. You can  
<br>
disable it completely in Open MPI and everything will continue to work  
<br>
correctly. Please add --enable-mca-no-build=memory_mallopt o maybe the  
<br>
more generic (as there is no need for any memory manager on Windows -- 
<br>
enable-mca-no-build=memory.
<br>
<p>Just a word about performance. I think you already noticed how long  
<br>
the configure step is, and believe it is fast compared with building  
<br>
the whole Open MPI. However, once built, Open MPI (and most of Cygwin  
<br>
applications) only see their performance slightly affected by the fact  
<br>
they run on Cygwin. Even the network performances are correct.
<br>
<p>It is possible to have a native version of Open MPI on Windows. There  
<br>
are two ways to achieve this. First, install SFU, and compile there.  
<br>
It worked last time I checked, but it's not the solution I prefer.  
<br>
Second, you can install the express version of the Microsoft Visual  
<br>
Studio (which is free), and set your PATH, LIB and INCLUDE correctly  
<br>
to point to the installation, and then you can use the cl compiler to  
<br>
build Open MPI even on Windows.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p><p>On Oct 30, 2008, at 8:40 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Oct 29, 2008, at 4:31 PM, Gustavo Seabra wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ugh.  IMHO, Cygwin != POSIX.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The problem is that we're making the assumption that if dlsym() is  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; present,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; RTLD_NEXT is defined.  I guess that's not true for cygwin (lame).   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I suppose
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that we could also check for RTLD_NEXT...?  Is there any other OS  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; where
</span><br>
<span class="quotelev3">&gt;&gt;&gt; dlsym() is present by RTLD_NEXT is not?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Would it be easier to run Linux in a virtual machine on your  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; windows host?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You'll probably get a lot better performance...?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Jeff,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Are you sure RTLD_NEXT is part of the POSIX standard? I may be  
</span><br>
<span class="quotelev2">&gt;&gt; looking
</span><br>
<span class="quotelev2">&gt;&gt; in the wrong place, but apparently it is *not* part of the standard,
</span><br>
<span class="quotelev2">&gt;&gt; at least as defined here:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.opengroup.org/onlinepubs/000095399/basedefs/dlfcn.h.html">http://www.opengroup.org/onlinepubs/000095399/basedefs/dlfcn.h.html</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Fair enough -- my words were ambiguous, and probably overly broad.   
</span><br>
<span class="quotelev1">&gt; I was trying to convey that my prior experience with Cygwin has  
</span><br>
<span class="quotelev1">&gt; biased me to believe that Cygwin tends to be &quot;different&quot; than other  
</span><br>
<span class="quotelev1">&gt; POSIX-like OSs, such as Linux, Solaris, and OS X.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It would seem that this is a GNU extension, so it becomes available
</span><br>
<span class="quotelev2">&gt;&gt; when __USE_GNU is defined. Now, looking at the cygwin version of
</span><br>
<span class="quotelev2">&gt;&gt; dlfcn.h, I see that RTDL_NEXT is *not* defined, but RTDL_LAZY,
</span><br>
<span class="quotelev2">&gt;&gt; RTLD_NOW, RTLD_LOCAL and RTLD_GLOBAL, which makes it compliant with
</span><br>
<span class="quotelev2">&gt;&gt; POSIX, but not GNU.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The 'memory_mallopt_component.c' only checks if 'HAVE_DLSYM' is
</span><br>
<span class="quotelev2">&gt;&gt; defined. If so, it defines __USE_GNU then includes dlfcn.h. This is
</span><br>
<span class="quotelev2">&gt;&gt; ok, assuming you have a GNU version of dlfcn.h, but apparently this  
</span><br>
<span class="quotelev2">&gt;&gt; is
</span><br>
<span class="quotelev2">&gt;&gt; not present in Cygwin...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Understood; this was a more complete/precise meaning for my question  
</span><br>
<span class="quotelev1">&gt; &quot;Is there any other OS where
</span><br>
<span class="quotelev1">&gt; dlsym() is present by RTLD_NEXT is not?&quot;  I suppose we can extend  
</span><br>
<span class="quotelev1">&gt; the configure test to check for RTLD_NEXT as well.  In this way,  
</span><br>
<span class="quotelev1">&gt; that component won't even decide to build itself.  You won't need  
</span><br>
<span class="quotelev1">&gt; this component, because it's only really useful for the OpenFabrics  
</span><br>
<span class="quotelev1">&gt; and [ancient] Myricom GM drivers in Open MPI, neither of which are  
</span><br>
<span class="quotelev1">&gt; likely to be supported in Cygwin.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also FWIW, my understanding is that running another OS in a VM (such  
</span><br>
<span class="quotelev1">&gt; as Linux or your favorite BSD) will run *much* faster than Cygwin.   
</span><br>
<span class="quotelev1">&gt; I have dim recollections of LAM's and OMPI's &quot;configure&quot; script  
</span><br>
<span class="quotelev1">&gt; taking loooooong periods of time (I no longer have easy access to a  
</span><br>
<span class="quotelev1">&gt; Windows machine to do such testing).  Those with more Windows  
</span><br>
<span class="quotelev1">&gt; experience than me attributed it to Windows' process model  
</span><br>
<span class="quotelev1">&gt; implementation, which is quite different than Linux/Solaris/OSX/ 
</span><br>
<span class="quotelev1">&gt; etc.  So I'm just curious: do you have a reason for preferring  
</span><br>
<span class="quotelev1">&gt; Cygwin instead of a VM?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7301.php">Scott Beardsley: "[OMPI users] Tight integration and interactive sessions with SGE"</a>
<li><strong>Previous message:</strong> <a href="7299.php">Antonio Molins: "Re: [OMPI users] MPI_Type_create_darray causes MPI_File_set_view	to crash when ndims=2, array_of_gsizes[0]&gt;array_of_gsizes[1]"</a>
<li><strong>In reply to:</strong> <a href="7294.php">Neville Clark: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/10/7133.php">Gustavo Seabra: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
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
