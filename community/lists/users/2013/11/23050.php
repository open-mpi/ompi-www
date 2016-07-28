<?
$subject_val = "Re: [OMPI users] [EXTERNAL] Re: open-mpi on Mac OS 10.9 (Mavericks)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 25 08:30:54 2013" -->
<!-- isoreceived="20131125133054" -->
<!-- sent="Mon, 25 Nov 2013 13:30:31 +0000" -->
<!-- isosent="20131125133031" -->
<!-- name="Hammond, Simon David (-EXP)" -->
<!-- email="sdhammo_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [EXTERNAL] Re: open-mpi on Mac OS 10.9 (Mavericks)" -->
<!-- id="74A0D537FED93B4EA49EA78E5A3905C317846A6B_at_EXMB02.srn.sandia.gov" -->
<!-- charset="utf-8" -->
<!-- inreplyto="[OMPI users] [EXTERNAL] Re: open-mpi on Mac OS 10.9 (Mavericks)" -->
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
<strong>From:</strong> Hammond, Simon David (-EXP) (<em>sdhammo_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-25 08:30:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23051.php">Reuti: "Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)"</a>
<li><strong>Previous message:</strong> <a href="23049.php">Meredith, Karl: "Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23053.php">Meredith, Karl: "Re: [OMPI users] [EXTERNAL] Re: open-mpi on Mac OS 10.9 (Mavericks)"</a>
<li><strong>Reply:</strong> <a href="23053.php">Meredith, Karl: "Re: [OMPI users] [EXTERNAL] Re: open-mpi on Mac OS 10.9 (Mavericks)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We have occasionally had a problem like this when we set LD_LIBRARY_PATH only. On OSX you may need to set DYLD_LIBRARY_PATH instead ( set it to the same lib directory )
<br>

<br>
Can you try that and see if it resolves the problem?
<br>

<br>

<br>

<br>
Si Hammond
<br>
Sandia National Laboratories
<br>
Remote Connection
<br>

<br>

<br>
-----Original Message-----
<br>
From: Meredith, Karl [karl.meredith_at_[hidden]&lt;mailto:karl.meredith_at_[hidden]&gt;]
<br>
Sent: Monday, November 25, 2013 06:25 AM Mountain Standard Time
<br>
To: Open MPI Users
<br>
Subject: [EXTERNAL] Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)
<br>

<br>

<br>
I do have these two environment variables set:
<br>

<br>
LD_LIBRARY_PATH=/Users/meredithk/tools/openmpi/lib
<br>
PATH=/Users/meredithk/tools/openmpi/bin
<br>

<br>
Running mpirun seems to work fine with a simple command, like hostname:
<br>

<br>
$ )mpirun -n 2 hostname
<br>
meredithk-mac.corp.fmglobal.com
<br>
meredithk-mac.corp.fmglobal.com
<br>

<br>
I am trying to run the simple hello_cxx example from the openmpi distribution, compiled as such:
<br>
mpic++ -g    hello_cxx.cc   -o hello_cxx
<br>

<br>
It compiles fine, without warning or error.  However, when I go to run the example, it stalls on the MPI::Init() command:
<br>
mpirun -np 1 hello_cxx
<br>
It never errors out or crashes.  It simply hangs.
<br>

<br>
I am using the same mpic++ and mpirun version:
<br>
$ )which mpirun
<br>
/Users/meredithk/tools/openmpi/bin/mpirun
<br>

<br>
$ )which mpic++
<br>
/Users/meredithk/tools/openmpi/bin/mpic++
<br>

<br>
Not quite sure what else to check.
<br>

<br>
Karl
<br>

<br>

<br>
On Nov 23, 2013, at 5:29 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>

<br>
<span class="quotelev1">&gt; Strange - I run on Mavericks now without problem. Can you run &quot;mpirun -n 1 hostname&quot;?
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>

<br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23050/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23051.php">Reuti: "Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)"</a>
<li><strong>Previous message:</strong> <a href="23049.php">Meredith, Karl: "Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23053.php">Meredith, Karl: "Re: [OMPI users] [EXTERNAL] Re: open-mpi on Mac OS 10.9 (Mavericks)"</a>
<li><strong>Reply:</strong> <a href="23053.php">Meredith, Karl: "Re: [OMPI users] [EXTERNAL] Re: open-mpi on Mac OS 10.9 (Mavericks)"</a>
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
