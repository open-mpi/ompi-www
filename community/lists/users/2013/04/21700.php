<?
$subject_val = "[OMPI users] Is Open MPI 1.6.4 viable on Mac OS X 10.6.8 ?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 10 00:34:12 2013" -->
<!-- isoreceived="20130410043412" -->
<!-- sent="Wed, 10 Apr 2013 01:33:54 -0300" -->
<!-- isosent="20130410043354" -->
<!-- name="Gustavo Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="[OMPI users] Is Open MPI 1.6.4 viable on Mac OS X 10.6.8 ?" -->
<!-- id="35FF53E7-5C5A-420B-AA25-94DD95E896CD_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] Is Open MPI 1.6.4 viable on Mac OS X 10.6.8 ?<br>
<strong>From:</strong> Gustavo Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-10 00:33:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21701.php">Jakub Nowacki: "[OMPI users] Greenplum's MR+"</a>
<li><strong>Previous message:</strong> <a href="21699.php">Pradeep Jha: "Re: [OMPI users] mpirun error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21702.php">Ralph Castain: "Re: [OMPI users] Is Open MPI 1.6.4 viable on Mac OS X 10.6.8 ?"</a>
<li><strong>Reply:</strong> <a href="21702.php">Ralph Castain: "Re: [OMPI users] Is Open MPI 1.6.4 viable on Mac OS X 10.6.8 ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Open MPI Pros
<br>
<p>Somehow I am stuck offsite and I have to test/develop an MPI program on a super duper 
<br>
2006 vintage Mac PowerBookPro with Mac OS X 10.6.8 (Snow Leopard).
<br>
This is a 32-bit machine with dual core Intel Core Duo processors and 2GB RAM.
<br>
<p>Well, my under-development program using FFTW3 and OMPI 1.6.4 runs
<br>
flawlessly on Linux, but I am offsite and I have to use the darn Mac,
<br>
where I get all sorts of weird errors out of the blue, which are 
<br>
very likely to be associated to the Mac OS X underlying memory management
<br>
system.
<br>
<p>I say so because the OMPI test programs (connectivity_c.c, etc), which do NOT
<br>
allocate memory (other than the MPI internal buffers, if so), run correctly, but once I 
<br>
start using dynamic memory arrays, boomer, it breaks (but only on the Mac).
<br>
<p>I enclose below one of the error messages, FYI.
<br>
[It shows up as a segfault, but the array and buffer boundaries are correct,
<br>
and the program runs perfectly on Linux.  RAM is OK also, my batch of test
<br>
data is small. No automatic arrays on the code either.]
<br>
<p>I read the OMPI FAQ on runtime issues, and a couple of them mention trouble for OMPI 
<br>
with the Mac OS X memory management scheme.  However, those FAQ are quite old,
<br>
refer to OMPI 1.2 and 1.3 series only, recommend linking to an OMPI library 
<br>
that seems to have been phased out (-lopenmpi-malloc), and didn't shed the light
<br>
I was hoping for.
<br>
<p>So, before I give this effort up as not viable, here are a few questions:
<br>
<p>Are there specific recommendations on how to build OMPI 1.6.4 on Mac OS X 1.6.8?
<br>
Are there any additional linker flags that should be used to build OMPI applications under OS X?
<br>
Are there any runtime options that should be added to mpiexec to make OMPI programs
<br>
that allocate memory dynamically to run correctly on Mac OS X?
<br>
<p>Thank you,
<br>
Gus Correa
<br>
************************ Error message *************************************************************
<br>
[1,0]&lt;stderr&gt;:[Macintosh-72:36578] *** Process received signal ***
<br>
[1,0]&lt;stderr&gt;:[Macintosh-72:36578] Signal: Segmentation fault (11)
<br>
[1,0]&lt;stderr&gt;:[Macintosh-72:36578] Signal code: Address not mapped (1)
<br>
[1,0]&lt;stderr&gt;:[Macintosh-72:36578] Failing at address: 0x6648000
<br>
[1,0]&lt;stderr&gt;:[Macintosh-72:36578] [ 0] 2   libSystem.B.dylib                   0x9728c05b _sigtramp + 43
<br>
[1,0]&lt;stderr&gt;:[Macintosh-72:36578] [ 1] 3   ???                                 0xffffffff 0x0 + 4294967295
<br>
[1,0]&lt;stderr&gt;:[Macintosh-72:36578] [ 2] 4   wcdp3d                              0x0001be49 main + 1864
<br>
[1,0]&lt;stderr&gt;:[Macintosh-72:36578] [ 3] 5   wcdp3d                              0x000027ad start + 53
<br>
[1,0]&lt;stderr&gt;:[Macintosh-72:36578] [ 4] 6   ???                                 0x00000002 0x0 + 2
<br>
[1,0]&lt;stderr&gt;:[Macintosh-72:36578] *** End of error message ***
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21701.php">Jakub Nowacki: "[OMPI users] Greenplum's MR+"</a>
<li><strong>Previous message:</strong> <a href="21699.php">Pradeep Jha: "Re: [OMPI users] mpirun error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21702.php">Ralph Castain: "Re: [OMPI users] Is Open MPI 1.6.4 viable on Mac OS X 10.6.8 ?"</a>
<li><strong>Reply:</strong> <a href="21702.php">Ralph Castain: "Re: [OMPI users] Is Open MPI 1.6.4 viable on Mac OS X 10.6.8 ?"</a>
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
