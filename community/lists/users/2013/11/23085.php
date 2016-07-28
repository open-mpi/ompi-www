<?
$subject_val = "Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 27 03:23:05 2013" -->
<!-- isoreceived="20131127082305" -->
<!-- sent="Wed, 27 Nov 2013 08:23:03 +0000" -->
<!-- isosent="20131127082303" -->
<!-- name="Iliev, Hristo" -->
<!-- email="Iliev_at_[hidden]" -->
<!-- subject="Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)" -->
<!-- id="5A5117ABD18DE547BB3D3FE3D0CB318842393A_at_MBX1.rwth-ad.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="3B0E9B7B-6CAD-47D0-AB33-3272641229A3_at_fmglobal.com" -->
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
<strong>From:</strong> Iliev, Hristo (<em>Iliev_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-27 03:23:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23086.php">George Bosilca: "Re: [OMPI users] Does sendrecv guarantee order?"</a>
<li><strong>Previous message:</strong> <a href="23084.php">Saliya Ekanayake: "[OMPI users] Does sendrecv guarantee order?"</a>
<li><strong>In reply to:</strong> <a href="23070.php">Meredith, Karl: "Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23090.php">Meredith, Karl: "Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)"</a>
<li><strong>Reply:</strong> <a href="23090.php">Meredith, Karl: "Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Karl,
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
&gt; -----Original Message-----
&gt; From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Meredith,
&gt; Karl
&gt; Sent: Tuesday, November 26, 2013 9:33 PM
&gt; To: Open MPI Users
&gt; Subject: Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)
&gt; 
&gt; Here are the results of those two commands:
&gt; 
&gt; $ )mpic++ -show
&gt; g++ -I/Users/meredithk/tools/openmpi/include -
&gt; L/Users/meredithk/tools/openmpi/lib -lmpi_cxx -lmpi -lm
&gt; 
&gt; $ )otool -L /Users/meredithk/tools/openmpi/lib/libmpi_cxx.dylib
&gt; /Users/meredithk/tools/openmpi/lib/libmpi_cxx.dylib:
&gt; 	/Users/meredithk/tools/openmpi/lib/libmpi_cxx.1.dylib
&gt; (compatibility version 2.0.0, current version 2.2.0)
&gt; 	/Users/meredithk/tools/openmpi/lib/libmpi.1.dylib (compatibility
&gt; version 2.0.0, current version 2.8.0)
&gt; 	/opt/local/lib/libgcc/libstdc++.6.dylib (compatibility version
7.0.0,
&gt; current version 7.18.0)
&gt; 	/usr/lib/libSystem.B.dylib (compatibility version 1.0.0, current
version
&gt; 1197.1.1)
&gt; 	/opt/local/lib/libgcc/libgcc_s.1.dylib (compatibility version 1.0.0,
&gt; current version 1.0.0)
&gt; 
&gt; It looks like libstdc++ is being used and g++ is being used.
&gt; 
&gt; Karl
&gt; 
&gt; 
&gt; On Nov 25, 2013, at 6:56 PM, Pierre Jolivet &lt;jolivet_at_[hidden]&gt;
wrote:
&gt; 
&gt; &gt; Karl,
&gt; &gt; What does &quot;mpic++ -show&quot; returns ? It is possible that you are
&gt; compiling/linking with &quot;c++&quot;, which will defaults to clang++, while you
&gt; compiled OpenMPI with g++.
&gt; &gt; Since libstdc++ and libc++ have incompatible ABI, that might be why you
&gt; are getting a wrong behavior.
&gt; &gt; Also, it could be worthwhile to have a look at &quot;otool -L
&gt; /Users/meredithk/tools/openmpi/lib/libmpi_cxx.dylib&quot;
&gt; &gt; Pierre
&gt; &gt;
&gt; &gt; On Nov 25, 2013, at 7:38 AM, Meredith, Karl
&gt; &lt;karl.meredith_at_[hidden]&gt; wrote:
&gt; &gt;
&gt; &gt;&gt; I do have DYLD_LIBRARY_PATH set as well, and I get the same problem:
&gt; &gt;&gt;
&gt; &gt;&gt; DYLD_LIBRARY_PATH=/Users/meredithk/tools/openmpi/lib
&gt; &gt;&gt;
&gt; &gt;&gt; Here's the directory listing of /Users/meredithk/tools/openmpi/lib
&gt; &gt;&gt;
&gt; &gt;&gt; $ )ls -1
&gt; &gt;&gt; libmca_common_sm.3.dylib*
&gt; &gt;&gt; libmca_common_sm.dylib@
&gt; &gt;&gt; libmca_common_sm.la*
&gt; &gt;&gt; libmpi.1.dylib*
&gt; &gt;&gt; libmpi.dylib@
&gt; &gt;&gt; libmpi.la*
&gt; &gt;&gt; libmpi_cxx.1.dylib*
&gt; &gt;&gt; libmpi_cxx.dylib@
&gt; &gt;&gt; libmpi_cxx.la*
&gt; &gt;&gt; libmpi_f77.1.dylib*
&gt; &gt;&gt; libmpi_f77.dylib@
&gt; &gt;&gt; libmpi_f77.la*
&gt; &gt;&gt; libmpi_f90.a
&gt; &gt;&gt; libmpi_f90.la*
&gt; &gt;&gt; libompitrace.0.dylib*
&gt; &gt;&gt; libompitrace.dylib@
&gt; &gt;&gt; libompitrace.la*
&gt; &gt;&gt; libopen-pal.4.dylib*
&gt; &gt;&gt; libopen-pal.dylib@
&gt; &gt;&gt; libopen-pal.la*
&gt; &gt;&gt; libopen-rte.4.dylib*
&gt; &gt;&gt; libopen-rte.dylib@
&gt; &gt;&gt; libopen-rte.la*
&gt; &gt;&gt; libopen-trace-format.1.dylib*
&gt; &gt;&gt; libopen-trace-format.a
&gt; &gt;&gt; libopen-trace-format.dylib@
&gt; &gt;&gt; libopen-trace-format.la*
&gt; &gt;&gt; libotfaux.0.dylib*
&gt; &gt;&gt; libotfaux.a
&gt; &gt;&gt; libotfaux.dylib@
&gt; &gt;&gt; libotfaux.la*
&gt; &gt;&gt; libvt-hyb.0.dylib*
&gt; &gt;&gt; libvt-hyb.a
&gt; &gt;&gt; libvt-hyb.dylib@
&gt; &gt;&gt; libvt-hyb.la*
&gt; &gt;&gt; libvt-mpi-unify.0.dylib*
&gt; &gt;&gt; libvt-mpi-unify.a
&gt; &gt;&gt; libvt-mpi-unify.dylib@
&gt; &gt;&gt; libvt-mpi-unify.la*
&gt; &gt;&gt; libvt-mpi.0.dylib*
&gt; &gt;&gt; libvt-mpi.a
&gt; &gt;&gt; libvt-mpi.dylib@
&gt; &gt;&gt; libvt-mpi.la*
&gt; &gt;&gt; libvt-mt.0.dylib*
&gt; &gt;&gt; libvt-mt.a
&gt; &gt;&gt; libvt-mt.dylib@
&gt; &gt;&gt; libvt-mt.la*
&gt; &gt;&gt; libvt-pomp.a
&gt; &gt;&gt; libvt-pomp.la*
&gt; &gt;&gt; libvt.0.dylib*
&gt; &gt;&gt; libvt.a
&gt; &gt;&gt; libvt.dylib@
&gt; &gt;&gt; libvt.la*
&gt; &gt;&gt; mpi.mod*
&gt; &gt;&gt; openmpi/
&gt; &gt;&gt; pkgconfig/
&gt; &gt;&gt;
&gt; &gt;&gt;
&gt; &gt;&gt; I don't notice anything out of ordinary.
&gt; &gt;&gt;
&gt; &gt;&gt; Karl
&gt; &gt;&gt;
&gt; &gt;&gt;
&gt; &gt;&gt; On Nov 25, 2013, at 8:31 AM, Reuti &lt;reuti_at_[hidden]&gt; wrote:
&gt; &gt;&gt;
&gt; &gt;&gt;&gt; Am 25.11.2013 um 14:25 schrieb Meredith, Karl:
&gt; &gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt; I do have these two environment variables set:
&gt; &gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt; LD_LIBRARY_PATH=/Users/meredithk/tools/openmpi/lib
&gt; &gt;&gt;&gt;
&gt; &gt;&gt;&gt; On a Mac it should DYLD_LIBRARY_PATH - and there are *.dylib files in
&gt; your /Users/meredithk/tools/openmpi/lib?
&gt; &gt;&gt;&gt;
&gt; &gt;&gt;&gt; -- Reuti
&gt; &gt;&gt;&gt;
&gt; &gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt; PATH=/Users/meredithk/tools/openmpi/bin
&gt; &gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt; Running mpirun seems to work fine with a simple command, like
&gt; hostname:
&gt; &gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt; $ )mpirun -n 2 hostname
&gt; &gt;&gt;&gt;&gt; meredithk-mac.corp.fmglobal.com
&gt; &gt;&gt;&gt;&gt; meredithk-mac.corp.fmglobal.com
&gt; &gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt; I am trying to run the simple hello_cxx example from the openmpi
&gt; distribution, compiled as such:
&gt; &gt;&gt;&gt;&gt; mpic++ -g    hello_cxx.cc   -o hello_cxx
&gt; &gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt; It compiles fine, without warning or error.  However, when I go to
run
&gt; the example, it stalls on the MPI::Init() command:
&gt; &gt;&gt;&gt;&gt; mpirun -np 1 hello_cxx
&gt; &gt;&gt;&gt;&gt; It never errors out or crashes.  It simply hangs.
&gt; &gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt; I am using the same mpic++ and mpirun version:
&gt; &gt;&gt;&gt;&gt; $ )which mpirun
&gt; &gt;&gt;&gt;&gt; /Users/meredithk/tools/openmpi/bin/mpirun
&gt; &gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt; $ )which mpic++
&gt; &gt;&gt;&gt;&gt; /Users/meredithk/tools/openmpi/bin/mpic++
&gt; &gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt; Not quite sure what else to check.
&gt; &gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt; Karl
&gt; &gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt; On Nov 23, 2013, at 5:29 PM, Ralph Castain &lt;rhc_at_[hidden]&gt;
&gt; wrote:
&gt; &gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt;&gt; Strange - I run on Mavericks now without problem. Can you run
&gt; &quot;mpirun -n 1 hostname&quot;?
&gt; &gt;&gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt;&gt; You also might want to check your PATH and LD_LIBRARY_PATH to
&gt; ensure you have the prefix where you installed OMPI 1.6.5 at the front.
Mac
&gt; distributes a very old version of OMPI with its software and you don't
want
&gt; to pick it up by mistake.
&gt; &gt;&gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt;&gt; On Nov 22, 2013, at 1:45 PM, Meredith, Karl
&gt; &lt;karl.meredith_at_[hidden]&gt; wrote:
&gt; &gt;&gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt;&gt;&gt; I recently upgraded my 2013 Macbook Pro (Retina display) from 10.8
&gt; to 10.9.  I downloaded and installed openmpi-1.6.5 and compiled it with
gcc
&gt; 4.8 (gcc installed from macports).
&gt; &gt;&gt;&gt;&gt;&gt;&gt; openmpi compiled and installed without error.
&gt; &gt;&gt;&gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt;&gt;&gt; However, when I try to run any of the example test cases, the code
&gt; gets stuck inside the first MPI::Init() call and never returns.
&gt; &gt;&gt;&gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt;&gt;&gt; Any thoughts on what might be going wrong?
&gt; &gt;&gt;&gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt;&gt;&gt; The same install on OS 10.8 works fine and the example test cases
&gt; run without error.
&gt; &gt;&gt;&gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt;&gt;&gt; Karl
&gt; &gt;&gt;&gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
&gt; &gt;&gt;&gt;&gt;&gt;&gt; users mailing list
&gt; &gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
&gt; &gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; &gt;&gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt;&gt; _______________________________________________
&gt; &gt;&gt;&gt;&gt;&gt; users mailing list
&gt; &gt;&gt;&gt;&gt;&gt; users_at_[hidden]
&gt; &gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; &gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt; _______________________________________________
&gt; &gt;&gt;&gt;&gt; users mailing list
&gt; &gt;&gt;&gt;&gt; users_at_[hidden]
&gt; &gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; &gt;&gt;&gt;
&gt; &gt;&gt;&gt; _______________________________________________
&gt; &gt;&gt;&gt; users mailing list
&gt; &gt;&gt;&gt; users_at_[hidden]
&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; &gt;&gt;
&gt; &gt;&gt; _______________________________________________
&gt; &gt;&gt; users mailing list
&gt; &gt;&gt; users_at_[hidden]
&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; &gt;
&gt; &gt; _______________________________________________
&gt; &gt; users mailing list
&gt; &gt; users_at_[hidden]
&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; 
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>

</pre>
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23085/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23086.php">George Bosilca: "Re: [OMPI users] Does sendrecv guarantee order?"</a>
<li><strong>Previous message:</strong> <a href="23084.php">Saliya Ekanayake: "[OMPI users] Does sendrecv guarantee order?"</a>
<li><strong>In reply to:</strong> <a href="23070.php">Meredith, Karl: "Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23090.php">Meredith, Karl: "Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)"</a>
<li><strong>Reply:</strong> <a href="23090.php">Meredith, Karl: "Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)"</a>
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
