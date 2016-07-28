<?
$subject_val = "Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 25 08:25:09 2013" -->
<!-- isoreceived="20131125132509" -->
<!-- sent="Mon, 25 Nov 2013 08:25:07 -0500" -->
<!-- isosent="20131125132507" -->
<!-- name="Meredith, Karl" -->
<!-- email="karl.meredith_at_[hidden]" -->
<!-- subject="Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)" -->
<!-- id="A585C74D-ECFA-4FD4-A917-3DAB729456B8_at_fmglobal.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AA56851D-120B-438B-AFD5-4A679DA5BFD2_at_open-mpi.org" -->
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
<strong>Date:</strong> 2013-11-25 08:25:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23050.php">Hammond, Simon David (-EXP): "Re: [OMPI users] [EXTERNAL] Re: open-mpi on Mac OS 10.9 (Mavericks)"</a>
<li><strong>Previous message:</strong> <a href="23048.php">Jed Brown: "Re: [OMPI users] MPI process hangs if OpenMPI is compiled with --enable-thread-multiple"</a>
<li><strong>In reply to:</strong> <a href="23038.php">Ralph Castain: "Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23051.php">Reuti: "Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)"</a>
<li><strong>Reply:</strong> <a href="23051.php">Reuti: "Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I do have these two environment variables set:
<br>
<p>LD_LIBRARY_PATH=/Users/meredithk/tools/openmpi/lib
<br>
PATH=/Users/meredithk/tools/openmpi/bin
<br>
<p>Running mpirun seems to work fine with a simple command, like hostname:
<br>
<p>$ )mpirun -n 2 hostname
<br>
meredithk-mac.corp.fmglobal.com
<br>
meredithk-mac.corp.fmglobal.com
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
<p><p>On Nov 23, 2013, at 5:29 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
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
<span class="quotelev1">&gt; On Nov 22, 2013, at 1:45 PM, Meredith, Karl &lt;karl.meredith_at_[hidden]&gt; wrote:
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
<li><strong>Next message:</strong> <a href="23050.php">Hammond, Simon David (-EXP): "Re: [OMPI users] [EXTERNAL] Re: open-mpi on Mac OS 10.9 (Mavericks)"</a>
<li><strong>Previous message:</strong> <a href="23048.php">Jed Brown: "Re: [OMPI users] MPI process hangs if OpenMPI is compiled with --enable-thread-multiple"</a>
<li><strong>In reply to:</strong> <a href="23038.php">Ralph Castain: "Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23051.php">Reuti: "Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)"</a>
<li><strong>Reply:</strong> <a href="23051.php">Reuti: "Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)"</a>
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
