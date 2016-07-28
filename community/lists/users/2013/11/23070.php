<?
$subject_val = "Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 26 15:33:31 2013" -->
<!-- isoreceived="20131126203331" -->
<!-- sent="Tue, 26 Nov 2013 15:33:29 -0500" -->
<!-- isosent="20131126203329" -->
<!-- name="Meredith, Karl" -->
<!-- email="karl.meredith_at_[hidden]" -->
<!-- subject="Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)" -->
<!-- id="3B0E9B7B-6CAD-47D0-AB33-3272641229A3_at_fmglobal.com" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="48B0F52B-9AFA-47CB-A3B4-8E31E16B4117_at_ann.jussieu.fr" -->
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
<strong>Date:</strong> 2013-11-26 15:33:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23071.php">Teranishi, Keita: "Re: [OMPI users] [EXTERNAL] Re: (OpenMPI for Cray XE6 ) How to set mca parameters through aprun?"</a>
<li><strong>Previous message:</strong> <a href="23069.php">Pierre Jolivet: "[OMPI users] Bug Iscatterv/Igatherv"</a>
<li><strong>In reply to:</strong> <a href="23062.php">Pierre Jolivet: "Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23085.php">Iliev, Hristo: "Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)"</a>
<li><strong>Reply:</strong> <a href="23085.php">Iliev, Hristo: "Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Here are the results of those two commands:
<br>
<p>$ )mpic++ -show
<br>
g++ -I/Users/meredithk/tools/openmpi/include -L/Users/meredithk/tools/openmpi/lib -lmpi_cxx -lmpi -lm
<br>
<p>$ )otool -L /Users/meredithk/tools/openmpi/lib/libmpi_cxx.dylib
<br>
/Users/meredithk/tools/openmpi/lib/libmpi_cxx.dylib:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/Users/meredithk/tools/openmpi/lib/libmpi_cxx.1.dylib (compatibility version 2.0.0, current version 2.2.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/Users/meredithk/tools/openmpi/lib/libmpi.1.dylib (compatibility version 2.0.0, current version 2.8.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/opt/local/lib/libgcc/libstdc++.6.dylib (compatibility version 7.0.0, current version 7.18.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/usr/lib/libSystem.B.dylib (compatibility version 1.0.0, current version 1197.1.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/opt/local/lib/libgcc/libgcc_s.1.dylib (compatibility version 1.0.0, current version 1.0.0)
<br>
<p>It looks like libstdc++ is being used and g++ is being used.
<br>
<p>Karl
<br>
<p><p>On Nov 25, 2013, at 6:56 PM, Pierre Jolivet &lt;jolivet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Karl,
</span><br>
<span class="quotelev1">&gt; What does &#147;mpic++ -show&#148; returns ? It is possible that you are compiling/linking with &#147;c++&#148;, which will defaults to clang++, while you compiled OpenMPI with g++.
</span><br>
<span class="quotelev1">&gt; Since libstdc++ and libc++ have incompatible ABI, that might be why you are getting a wrong behavior.
</span><br>
<span class="quotelev1">&gt; Also, it could be worthwhile to have a look at &#147;otool -L /Users/meredithk/tools/openmpi/lib/libmpi_cxx.dylib&quot;
</span><br>
<span class="quotelev1">&gt; Pierre
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Nov 25, 2013, at 7:38 AM, Meredith, Karl &lt;karl.meredith_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I do have DYLD_LIBRARY_PATH set as well, and I get the same problem:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; DYLD_LIBRARY_PATH=/Users/meredithk/tools/openmpi/lib
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Here&#146;s the directory listing of /Users/meredithk/tools/openmpi/lib
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; $ )ls -1
</span><br>
<span class="quotelev2">&gt;&gt; libmca_common_sm.3.dylib*
</span><br>
<span class="quotelev2">&gt;&gt; libmca_common_sm.dylib@
</span><br>
<span class="quotelev2">&gt;&gt; libmca_common_sm.la*
</span><br>
<span class="quotelev2">&gt;&gt; libmpi.1.dylib*
</span><br>
<span class="quotelev2">&gt;&gt; libmpi.dylib@
</span><br>
<span class="quotelev2">&gt;&gt; libmpi.la*
</span><br>
<span class="quotelev2">&gt;&gt; libmpi_cxx.1.dylib*
</span><br>
<span class="quotelev2">&gt;&gt; libmpi_cxx.dylib@
</span><br>
<span class="quotelev2">&gt;&gt; libmpi_cxx.la*
</span><br>
<span class="quotelev2">&gt;&gt; libmpi_f77.1.dylib*
</span><br>
<span class="quotelev2">&gt;&gt; libmpi_f77.dylib@
</span><br>
<span class="quotelev2">&gt;&gt; libmpi_f77.la*
</span><br>
<span class="quotelev2">&gt;&gt; libmpi_f90.a
</span><br>
<span class="quotelev2">&gt;&gt; libmpi_f90.la*
</span><br>
<span class="quotelev2">&gt;&gt; libompitrace.0.dylib*
</span><br>
<span class="quotelev2">&gt;&gt; libompitrace.dylib@
</span><br>
<span class="quotelev2">&gt;&gt; libompitrace.la*
</span><br>
<span class="quotelev2">&gt;&gt; libopen-pal.4.dylib*
</span><br>
<span class="quotelev2">&gt;&gt; libopen-pal.dylib@
</span><br>
<span class="quotelev2">&gt;&gt; libopen-pal.la*
</span><br>
<span class="quotelev2">&gt;&gt; libopen-rte.4.dylib*
</span><br>
<span class="quotelev2">&gt;&gt; libopen-rte.dylib@
</span><br>
<span class="quotelev2">&gt;&gt; libopen-rte.la*
</span><br>
<span class="quotelev2">&gt;&gt; libopen-trace-format.1.dylib*
</span><br>
<span class="quotelev2">&gt;&gt; libopen-trace-format.a
</span><br>
<span class="quotelev2">&gt;&gt; libopen-trace-format.dylib@
</span><br>
<span class="quotelev2">&gt;&gt; libopen-trace-format.la*
</span><br>
<span class="quotelev2">&gt;&gt; libotfaux.0.dylib*
</span><br>
<span class="quotelev2">&gt;&gt; libotfaux.a
</span><br>
<span class="quotelev2">&gt;&gt; libotfaux.dylib@
</span><br>
<span class="quotelev2">&gt;&gt; libotfaux.la*
</span><br>
<span class="quotelev2">&gt;&gt; libvt-hyb.0.dylib*
</span><br>
<span class="quotelev2">&gt;&gt; libvt-hyb.a
</span><br>
<span class="quotelev2">&gt;&gt; libvt-hyb.dylib@
</span><br>
<span class="quotelev2">&gt;&gt; libvt-hyb.la*
</span><br>
<span class="quotelev2">&gt;&gt; libvt-mpi-unify.0.dylib*
</span><br>
<span class="quotelev2">&gt;&gt; libvt-mpi-unify.a
</span><br>
<span class="quotelev2">&gt;&gt; libvt-mpi-unify.dylib@
</span><br>
<span class="quotelev2">&gt;&gt; libvt-mpi-unify.la*
</span><br>
<span class="quotelev2">&gt;&gt; libvt-mpi.0.dylib*
</span><br>
<span class="quotelev2">&gt;&gt; libvt-mpi.a
</span><br>
<span class="quotelev2">&gt;&gt; libvt-mpi.dylib@
</span><br>
<span class="quotelev2">&gt;&gt; libvt-mpi.la*
</span><br>
<span class="quotelev2">&gt;&gt; libvt-mt.0.dylib*
</span><br>
<span class="quotelev2">&gt;&gt; libvt-mt.a
</span><br>
<span class="quotelev2">&gt;&gt; libvt-mt.dylib@
</span><br>
<span class="quotelev2">&gt;&gt; libvt-mt.la*
</span><br>
<span class="quotelev2">&gt;&gt; libvt-pomp.a
</span><br>
<span class="quotelev2">&gt;&gt; libvt-pomp.la*
</span><br>
<span class="quotelev2">&gt;&gt; libvt.0.dylib*
</span><br>
<span class="quotelev2">&gt;&gt; libvt.a
</span><br>
<span class="quotelev2">&gt;&gt; libvt.dylib@
</span><br>
<span class="quotelev2">&gt;&gt; libvt.la*
</span><br>
<span class="quotelev2">&gt;&gt; mpi.mod*
</span><br>
<span class="quotelev2">&gt;&gt; openmpi/
</span><br>
<span class="quotelev2">&gt;&gt; pkgconfig/
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I don&#146;t notice anything out of ordinary.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Karl
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 25, 2013, at 8:31 AM, Reuti &lt;reuti_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Am 25.11.2013 um 14:25 schrieb Meredith, Karl:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I do have these two environment variables set:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; LD_LIBRARY_PATH=/Users/meredithk/tools/openmpi/lib
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On a Mac it should DYLD_LIBRARY_PATH - and there are *.dylib files in your /Users/meredithk/tools/openmpi/lib?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- Reuti
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; PATH=/Users/meredithk/tools/openmpi/bin
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Running mpirun seems to work fine with a simple command, like hostname:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $ )mpirun -n 2 hostname
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; meredithk-mac.corp.fmglobal.com
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; meredithk-mac.corp.fmglobal.com
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I am trying to run the simple hello_cxx example from the openmpi distribution, compiled as such:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpic++ -g    hello_cxx.cc   -o hello_cxx
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; It compiles fine, without warning or error.  However, when I go to run the example, it stalls on the MPI::Init() command:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun -np 1 hello_cxx
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; It never errors out or crashes.  It simply hangs.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I am using the same mpic++ and mpirun version:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $ )which mpirun
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /Users/meredithk/tools/openmpi/bin/mpirun
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $ )which mpic++
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /Users/meredithk/tools/openmpi/bin/mpic++
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Not quite sure what else to check.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Karl
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Nov 23, 2013, at 5:29 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Strange - I run on Mavericks now without problem. Can you run &quot;mpirun -n 1 hostname&quot;?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; You also might want to check your PATH and LD_LIBRARY_PATH to ensure you have the prefix where you installed OMPI 1.6.5 at the front. Mac distributes a very old version of OMPI with its software and you don't want to pick it up by mistake.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Nov 22, 2013, at 1:45 PM, Meredith, Karl &lt;karl.meredith_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I recently upgraded my 2013 Macbook Pro (Retina display) from 10.8 to 10.9.  I downloaded and installed openmpi-1.6.5 and compiled it with gcc 4.8 (gcc installed from macports).  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; openmpi compiled and installed without error.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; However, when I try to run any of the example test cases, the code gets stuck inside the first MPI::Init() call and never returns.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Any thoughts on what might be going wrong?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; The same install on OS 10.8 works fine and the example test cases run without error.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Karl
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23071.php">Teranishi, Keita: "Re: [OMPI users] [EXTERNAL] Re: (OpenMPI for Cray XE6 ) How to set mca parameters through aprun?"</a>
<li><strong>Previous message:</strong> <a href="23069.php">Pierre Jolivet: "[OMPI users] Bug Iscatterv/Igatherv"</a>
<li><strong>In reply to:</strong> <a href="23062.php">Pierre Jolivet: "Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23085.php">Iliev, Hristo: "Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)"</a>
<li><strong>Reply:</strong> <a href="23085.php">Iliev, Hristo: "Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)"</a>
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
