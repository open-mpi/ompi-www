<?
$subject_val = "Re: [OMPI users] mpirun links wrong library with BLACS tester";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 28 06:35:40 2010" -->
<!-- isoreceived="20100128113540" -->
<!-- sent="Thu, 28 Jan 2010 05:35:34 -0600" -->
<!-- isosent="20100128113534" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun links wrong library with BLACS tester" -->
<!-- id="58D723FE08DC6A4398E6596E38F3FA170566C4_at_XMB-RCD-205.cisco.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="[OMPI users] mpirun links wrong library with BLACS tester" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun links wrong library with BLACS tester<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-28 06:35:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11907.php">Ralph Castain: "Re: [OMPI users] Non-homogeneous Cluster Implementation"</a>
<li><strong>Previous message:</strong> <a href="11905.php">jody: "Re: [OMPI users] Non-homogeneous Cluster Implementation"</a>
<li><strong>Maybe in reply to:</strong> <a href="11904.php">Fawzi Mohamed: "[OMPI users] mpirun links wrong library with BLACS tester"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11912.php">Fawzi Mohamed: "Re: [OMPI users] mpirun links wrong library with BLACS tester"</a>
<li><strong>Reply:</strong> <a href="11912.php">Fawzi Mohamed: "Re: [OMPI users] mpirun links wrong library with BLACS tester"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What was blacs compiled against, lam or ompi?
<br>

<br>
What is your LD_LIBRARY_PATH set to?
<br>

<br>
Are you ensuring to use ompi's mpirun (vs, for example, lam's mpirun)
<br>

<br>
-jms
<br>
Sent from my PDA.  No type good.
<br>

<br>
----- Original Message -----
<br>
From: users-bounces_at_[hidden] &lt;users-bounces_at_[hidden]&gt;
<br>
To: users_at_[hidden] &lt;users_at_[hidden]&gt;
<br>
Sent: Wed Jan 27 21:11:21 2010
<br>
Subject: [OMPI users] mpirun links wrong library with BLACS tester
<br>

<br>
I have installed openmpi 1.4.1 locally for one user on a cluster,  
<br>
where some other mpi were installed.
<br>

<br>
when I try to run an executable through mpirun (I am running the BLACS  
<br>
tester) I get
<br>
xFbtest_MPI-LINUX-0: error while loading shared libraries: liblam.so. 
<br>
0: cannot open shared object file: No such file or directory
<br>

<br>
if I run the executable it works
<br>
ldd always shows the correct libraries (even when run in mpirun) and  
<br>
no liblam
<br>
also the environment looks normal in both cases (both PATH and  
<br>
LD_RUN_PATH have the installation as first path).
<br>
I did try to  set -rpath to */lib and */lib/openmpi, and generally  
<br>
reduce the environment to a basic one, and use that in all the shells  
<br>
both when compiling and running, but to no avail.
<br>
The examples in the openmpi directory seem to work without problems.
<br>
I did manage to run the blacs tester, but in no reproducible way (I  
<br>
really don't know what I did to make it work and it stopped working  
<br>
really fast (the same binary)).
<br>
The same setup works in another machine (and I think BLACS flags are ok)
<br>

<br>
I am getting really crazy, any pointer at what else I could try would  
<br>
be greatly appreciated.
<br>

<br>
gcc (GCC) 4.1.2 20071124 (Red Hat 4.1.2-42)
<br>
G95 (GCC 4.0.3 (g95 0.92!) Jun 24 2009)
<br>

<br>
thanks
<br>
Fawzi
<br>

<br>

<br>

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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11906/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11907.php">Ralph Castain: "Re: [OMPI users] Non-homogeneous Cluster Implementation"</a>
<li><strong>Previous message:</strong> <a href="11905.php">jody: "Re: [OMPI users] Non-homogeneous Cluster Implementation"</a>
<li><strong>Maybe in reply to:</strong> <a href="11904.php">Fawzi Mohamed: "[OMPI users] mpirun links wrong library with BLACS tester"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11912.php">Fawzi Mohamed: "Re: [OMPI users] mpirun links wrong library with BLACS tester"</a>
<li><strong>Reply:</strong> <a href="11912.php">Fawzi Mohamed: "Re: [OMPI users] mpirun links wrong library with BLACS tester"</a>
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
