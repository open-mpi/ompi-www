<?
$subject_val = "Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 27 09:41:54 2013" -->
<!-- isoreceived="20131127144154" -->
<!-- sent="Wed, 27 Nov 2013 09:41:56 -0500" -->
<!-- isosent="20131127144156" -->
<!-- name="Meredith, Karl" -->
<!-- email="karl.meredith_at_[hidden]" -->
<!-- subject="Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)" -->
<!-- id="C6BC4A03-D69D-41C2-AC13-2FA525F60331_at_fmglobal.com" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="5A5117ABD18DE547BB3D3FE3D0CB318842393A_at_MBX1.rwth-ad.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)<br>
<strong>From:</strong> Meredith, Karl (<em>karl.meredith_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-27 09:41:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23091.php">Ralph Castain: "Re: [OMPI users] Multi-threading support for openib"</a>
<li><strong>Previous message:</strong> <a href="23089.php">Daniel C&#225;mpora: "[OMPI users] Multi-threading support for openib"</a>
<li><strong>In reply to:</strong> <a href="23085.php">Iliev, Hristo: "Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23093.php">Meredith, Karl: "Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)"</a>
<li><strong>Reply:</strong> <a href="23093.php">Meredith, Karl: "Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I&#146;m pretty sure it is using the correct g++
<br>
<p>$ )which g++
<br>
/opt/local/bin/g++
<br>
<p><p>$ )echo $PATH
<br>
/Users/meredithk/tools/openmpi/bin:/opt/local/bin:/opt/local/sbin:/Users/meredithk/tools/bin:/Users/meredithk/OpenFOAM/fireFoam-2.2.x/scripts:/Users/meredithk/OpenFOAM/ThirdParty-2.2.x/platforms/darwinIntel64Gcc46/gperftools-svn/bin:/Applications/paraview.app/Contents/bin:/Users/meredithk/OpenFOAM/ThirdParty-2.2.x/platforms/darwinIntel64Gcc46/paraview-3.12.0/bin:/Users/meredithk/OpenFOAM/meredithk-2.2.x/platforms/darwinIntel64Gcc46DPOpt/bin:/Users/meredithk/OpenFOAM/site/2.2.x/platforms/darwinIntel64Gcc46DPOpt/bin:/Users/meredithk/OpenFOAM/OpenFOAM-2.2.x/platforms/darwinIntel64Gcc46DPOpt/bin:/Users/meredithk/OpenFOAM/OpenFOAM-2.2.x/bin:/Users/meredithk/OpenFOAM/OpenFOAM-2.2.x/wmake:/Developer/usr/bin:/usr/bin:/bin:/usr/sbin:/sbin
<br>
<p><p>$ )g++ --version
<br>
g++ (MacPorts gcc46 4.6.4_3) 4.6.4
<br>
<p><p>Karl
<br>
<p><p><p>On Nov 27, 2013, at 3:23 AM, Iliev, Hristo &lt;Iliev_at_[hidden]&lt;mailto:Iliev_at_[hidden]&gt;&gt; wrote:
<br>
<p>Karl,
<br>
<p>The Xcode command-line tools provide a g++ command that is effectively
<br>
clang++. Since mpic++ invokes g++ without the full path to it, it might pick
<br>
the wrong g++. Make sure that /opt/local/bin is the first item in your
<br>
$PATH.
<br>
<p>Hristo
<br>
<p><pre>
--
Hristo Iliev, PhD - High Performance Computing Team / JARA-HPC
RWTH Aachen University, Center for Computing and Communication
Rechen- und Kommunikationszentrum der RWTH Aachen
Seffenter Weg 23, D-52074 Aachen (Germany)
-----Original Message-----
From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Meredith,
Karl
Sent: Tuesday, November 26, 2013 9:33 PM
To: Open MPI Users
Subject: Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)
Here are the results of those two commands:
$ )mpic++ -show
g++ -I/Users/meredithk/tools/openmpi/include -
L/Users/meredithk/tools/openmpi/lib -lmpi_cxx -lmpi -lm
$ )otool -L /Users/meredithk/tools/openmpi/lib/libmpi_cxx.dylib
/Users/meredithk/tools/openmpi/lib/libmpi_cxx.dylib:
/Users/meredithk/tools/openmpi/lib/libmpi_cxx.1.dylib
(compatibility version 2.0.0, current version 2.2.0)
/Users/meredithk/tools/openmpi/lib/libmpi.1.dylib (compatibility
version 2.0.0, current version 2.8.0)
/opt/local/lib/libgcc/libstdc++.6.dylib (compatibility version
7.0.0,
current version 7.18.0)
/usr/lib/libSystem.B.dylib (compatibility version 1.0.0, current
version
1197.1.1)
/opt/local/lib/libgcc/libgcc_s.1.dylib (compatibility version 1.0.0,
current version 1.0.0)
It looks like libstdc++ is being used and g++ is being used.
Karl
On Nov 25, 2013, at 6:56 PM, Pierre Jolivet &lt;jolivet_at_[hidden]&lt;mailto:jolivet_at_[hidden]&gt;&gt;
wrote:
Karl,
What does &quot;mpic++ -show&quot; returns ? It is possible that you are
compiling/linking with &quot;c++&quot;, which will defaults to clang++, while you
compiled OpenMPI with g++.
Since libstdc++ and libc++ have incompatible ABI, that might be why you
are getting a wrong behavior.
Also, it could be worthwhile to have a look at &quot;otool -L
/Users/meredithk/tools/openmpi/lib/libmpi_cxx.dylib&quot;
Pierre
On Nov 25, 2013, at 7:38 AM, Meredith, Karl
&lt;karl.meredith_at_[hidden]&lt;mailto:karl.meredith_at_[hidden]&gt;&gt; wrote:
I do have DYLD_LIBRARY_PATH set as well, and I get the same problem:
DYLD_LIBRARY_PATH=/Users/meredithk/tools/openmpi/lib
Here's the directory listing of /Users/meredithk/tools/openmpi/lib
$ )ls -1
libmca_common_sm.3.dylib*
libmca_common_sm.dylib@
libmca_common_sm.la*
libmpi.1.dylib*
libmpi.dylib@
libmpi.la*
libmpi_cxx.1.dylib*
libmpi_cxx.dylib@
libmpi_cxx.la*
libmpi_f77.1.dylib*
libmpi_f77.dylib@
libmpi_f77.la*
libmpi_f90.a
libmpi_f90.la*
libompitrace.0.dylib*
libompitrace.dylib@
libompitrace.la*
libopen-pal.4.dylib*
libopen-pal.dylib@
libopen-pal.la*
libopen-rte.4.dylib*
libopen-rte.dylib@
libopen-rte.la*
libopen-trace-format.1.dylib*
libopen-trace-format.a
libopen-trace-format.dylib@
libopen-trace-format.la*
libotfaux.0.dylib*
libotfaux.a
libotfaux.dylib@
libotfaux.la*
libvt-hyb.0.dylib*
libvt-hyb.a
libvt-hyb.dylib@
libvt-hyb.la*
libvt-mpi-unify.0.dylib*
libvt-mpi-unify.a
libvt-mpi-unify.dylib@
libvt-mpi-unify.la*
libvt-mpi.0.dylib*
libvt-mpi.a
libvt-mpi.dylib@
libvt-mpi.la*
libvt-mt.0.dylib*
libvt-mt.a
libvt-mt.dylib@
libvt-mt.la*
libvt-pomp.a
libvt-pomp.la*
libvt.0.dylib*
libvt.a
libvt.dylib@
libvt.la*
mpi.mod*
openmpi/
pkgconfig/
I don't notice anything out of ordinary.
Karl
On Nov 25, 2013, at 8:31 AM, Reuti &lt;reuti_at_[hidden]&lt;mailto:reuti_at_[hidden]&gt;&gt; wrote:
Am 25.11.2013 um 14:25 schrieb Meredith, Karl:
I do have these two environment variables set:
LD_LIBRARY_PATH=/Users/meredithk/tools/openmpi/lib
On a Mac it should DYLD_LIBRARY_PATH - and there are *.dylib files in
your /Users/meredithk/tools/openmpi/lib?
-- Reuti
PATH=/Users/meredithk/tools/openmpi/bin
Running mpirun seems to work fine with a simple command, like
hostname:
$ )mpirun -n 2 hostname
meredithk-mac.corp.fmglobal.com&lt;<a href="http://meredithk-mac.corp.fmglobal.com">http://meredithk-mac.corp.fmglobal.com</a>&gt;
meredithk-mac.corp.fmglobal.com
I am trying to run the simple hello_cxx example from the openmpi
distribution, compiled as such:
mpic++ -g    hello_cxx.cc   -o hello_cxx
It compiles fine, without warning or error.  However, when I go to
run
the example, it stalls on the MPI::Init() command:
mpirun -np 1 hello_cxx
It never errors out or crashes.  It simply hangs.
I am using the same mpic++ and mpirun version:
$ )which mpirun
/Users/meredithk/tools/openmpi/bin/mpirun
$ )which mpic++
/Users/meredithk/tools/openmpi/bin/mpic++
Not quite sure what else to check.
Karl
On Nov 23, 2013, at 5:29 PM, Ralph Castain &lt;rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&gt;
wrote:
Strange - I run on Mavericks now without problem. Can you run
&quot;mpirun -n 1 hostname&quot;?
You also might want to check your PATH and LD_LIBRARY_PATH to
ensure you have the prefix where you installed OMPI 1.6.5 at the front.
Mac
distributes a very old version of OMPI with its software and you don't
want
to pick it up by mistake.
On Nov 22, 2013, at 1:45 PM, Meredith, Karl
&lt;karl.meredith_at_[hidden]&lt;mailto:karl.meredith_at_[hidden]&gt;&gt; wrote:
I recently upgraded my 2013 Macbook Pro (Retina display) from 10.8
to 10.9.  I downloaded and installed openmpi-1.6.5 and compiled it with
gcc
4.8 (gcc installed from macports).
openmpi compiled and installed without error.
However, when I try to run any of the example test cases, the code
gets stuck inside the first MPI::Init() call and never returns.
Any thoughts on what might be going wrong?
The same install on OS 10.8 works fine and the example test cases
run without error.
Karl
_______________________________________________
users mailing list
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
_______________________________________________
users mailing list
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
_______________________________________________
users mailing list
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
_______________________________________________
users mailing list
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
_______________________________________________
users mailing list
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
_______________________________________________
users mailing list
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
_______________________________________________
users mailing list
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&lt;smime.p7s&gt;_______________________________________________
users mailing list
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23091.php">Ralph Castain: "Re: [OMPI users] Multi-threading support for openib"</a>
<li><strong>Previous message:</strong> <a href="23089.php">Daniel C&#225;mpora: "[OMPI users] Multi-threading support for openib"</a>
<li><strong>In reply to:</strong> <a href="23085.php">Iliev, Hristo: "Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23093.php">Meredith, Karl: "Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)"</a>
<li><strong>Reply:</strong> <a href="23093.php">Meredith, Karl: "Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)"</a>
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
