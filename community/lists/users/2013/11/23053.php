<?
$subject_val = "Re: [OMPI users] [EXTERNAL] Re: open-mpi on Mac OS 10.9 (Mavericks)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 25 09:10:00 2013" -->
<!-- isoreceived="20131125141000" -->
<!-- sent="Mon, 25 Nov 2013 09:09:59 -0500" -->
<!-- isosent="20131125140959" -->
<!-- name="Meredith, Karl" -->
<!-- email="karl.meredith_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [EXTERNAL] Re: open-mpi on Mac OS 10.9 (Mavericks)" -->
<!-- id="1BEFC490-3B1A-41B0-B36C-902C1DBB87FC_at_fmglobal.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="74A0D537FED93B4EA49EA78E5A3905C317846A6B_at_EXMB02.srn.sandia.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] [EXTERNAL] Re: open-mpi on Mac OS 10.9 (Mavericks)<br>
<strong>From:</strong> Meredith, Karl (<em>karl.meredith_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-25 09:09:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23054.php">George Bosilca: "Re: [OMPI users] [EXTERNAL] Re: open-mpi on Mac OS 10.9 (Mavericks)"</a>
<li><strong>Previous message:</strong> <a href="23052.php">Meredith, Karl: "Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)"</a>
<li><strong>In reply to:</strong> <a href="23050.php">Hammond, Simon David (-EXP): "Re: [OMPI users] [EXTERNAL] Re: open-mpi on Mac OS 10.9 (Mavericks)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23054.php">George Bosilca: "Re: [OMPI users] [EXTERNAL] Re: open-mpi on Mac OS 10.9 (Mavericks)"</a>
<li><strong>Reply:</strong> <a href="23054.php">George Bosilca: "Re: [OMPI users] [EXTERNAL] Re: open-mpi on Mac OS 10.9 (Mavericks)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I do have DYLD_LIBRARY_PATH set to the same paths as LD_LIBRARY_PATH.  This does not resolve the problem.  The code still hangs on MPI::Init().
<br>
<p>Another thing I tried is I recompiled openmpi with the debug flags activated:
<br>
./configure --prefix=$HOME/tools/openmpi --enable-debug
<br>
make
<br>
make install
<br>
<p>Then, I attached to the running process using gdb.  I tried to do a back trace and see where it was hanging up at, but all I got was this:
<br>
Attaching to process 45231
<br>
Reading symbols from /Users/meredithk/tools/openmpi-1.6.5/examples/hello_cxx...Reading symbols from /Users/meredithk/tools/openmpi-1.6.5/examples/hello_cxx.dSYM/Contents/Resources/DWARF/hello_cxx...done.
<br>
done.
<br>
0x00007fff8c1859aa in ?? ()
<br>
(gdb) bt
<br>
#0  0x00007fff8c1859aa in ?? ()
<br>
#1  0x0000000106b73ea0 in ?? ()
<br>
#2  0x706d6e65706f2f2f in ?? ()
<br>
#3  0x0000000000000001 in ?? ()
<br>
#4  0x0000000000000000 in ?? ()
<br>
<p>This output from gdb was not terribly helpful to me.
<br>
<p>Karl
<br>
<p><p>On Nov 25, 2013, at 8:30 AM, Hammond, Simon David (-EXP) &lt;sdhammo_at_[hidden]&lt;mailto:sdhammo_at_[hidden]&gt;&gt; wrote:
<br>
<p>We have occasionally had a problem like this when we set LD_LIBRARY_PATH only. On OSX you may need to set DYLD_LIBRARY_PATH instead ( set it to the same lib directory )
<br>
<p>Can you try that and see if it resolves the problem?
<br>
<p><p><p>Si Hammond
<br>
Sandia National Laboratories
<br>
Remote Connection
<br>
<p><p>-----Original Message-----
<br>
From: Meredith, Karl [karl.meredith_at_[hidden]&lt;mailto:karl.meredith_at_[hidden]&gt;]
<br>
Sent: Monday, November 25, 2013 06:25 AM Mountain Standard Time
<br>
To: Open MPI Users
<br>
Subject: [EXTERNAL] Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)
<br>
<p><p>I do have these two environment variables set:
<br>
<p>LD_LIBRARY_PATH=/Users/meredithk/tools/openmpi/lib
<br>
PATH=/Users/meredithk/tools/openmpi/bin
<br>
<p>Running mpirun seems to work fine with a simple command, like hostname:
<br>
<p>$ )mpirun -n 2 hostname
<br>
meredithk-mac.corp.fmglobal.com&lt;<a href="http://meredithk-mac.corp.fmglobal.com">http://meredithk-mac.corp.fmglobal.com</a>&gt;
<br>
meredithk-mac.corp.fmglobal.com&lt;<a href="http://meredithk-mac.corp.fmglobal.com">http://meredithk-mac.corp.fmglobal.com</a>&gt;
<br>
<p>I am trying to run the simple hello_cxx example from the openmpi distribution, compiled as such:
<br>
mpic++ -g    hello_cxx.cc   -o hello_cxx
<br>
<p>It compiles fine, without warning or error.  However, when I go to run the example, it stalls on the MPI::Init() command:
<br>
mpirun -np 1 hello_cxx
<br>
It never errors out or crashes.  It simply hangs.
<br>
<p>I am using the same mpic++ and mpirun version:
<br>
$ )which mpirun
<br>
/Users/meredithk/tools/openmpi/bin/mpirun
<br>
<p>$ )which mpic++
<br>
/Users/meredithk/tools/openmpi/bin/mpic++
<br>
<p>Not quite sure what else to check.
<br>
<p>Karl
<br>
<p><p>On Nov 23, 2013, at 5:29 PM, Ralph Castain &lt;rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Strange - I run on Mavericks now without problem. Can you run &quot;mpirun -n 1 hostname&quot;?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You also might want to check your PATH and LD_LIBRARY_PATH to ensure you have the prefix where you installed OMPI 1.6.5 at the front. Mac distributes a very old version of OMPI with its software and you don't want to pick it up by mistake.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 22, 2013, at 1:45 PM, Meredith, Karl &lt;karl.meredith_at_[hidden]&lt;mailto:karl.meredith_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I recently upgraded my 2013 Macbook Pro (Retina display) from 10.8 to 10.9.  I downloaded and installed openmpi-1.6.5 and compiled it with gcc 4.8 (gcc installed from macports).
</span><br>
<span class="quotelev2">&gt;&gt; openmpi compiled and installed without error.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; However, when I try to run any of the example test cases, the code gets stuck inside the first MPI::Init() call and never returns.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any thoughts on what might be going wrong?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The same install on OS 10.8 works fine and the example test cases run without error.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Karl
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23054.php">George Bosilca: "Re: [OMPI users] [EXTERNAL] Re: open-mpi on Mac OS 10.9 (Mavericks)"</a>
<li><strong>Previous message:</strong> <a href="23052.php">Meredith, Karl: "Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)"</a>
<li><strong>In reply to:</strong> <a href="23050.php">Hammond, Simon David (-EXP): "Re: [OMPI users] [EXTERNAL] Re: open-mpi on Mac OS 10.9 (Mavericks)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23054.php">George Bosilca: "Re: [OMPI users] [EXTERNAL] Re: open-mpi on Mac OS 10.9 (Mavericks)"</a>
<li><strong>Reply:</strong> <a href="23054.php">George Bosilca: "Re: [OMPI users] [EXTERNAL] Re: open-mpi on Mac OS 10.9 (Mavericks)"</a>
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
