<?
$subject_val = "Re: [OMPI users] shared libraries issue compiling1.3.1/intel10.1.022";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 14 10:49:22 2009" -->
<!-- isoreceived="20090414144922" -->
<!-- sent="Tue, 14 Apr 2009 10:49:17 -0400" -->
<!-- isosent="20090414144917" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] shared libraries issue compiling1.3.1/intel10.1.022" -->
<!-- id="D132E29E-1C5F-4F07-847F-43195FD77398_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="b87c422a0904130907q2215b3e9t73b3a8dc0eb8b294_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] shared libraries issue compiling1.3.1/intel10.1.022<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-14 10:49:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8901.php">Jeff Squyres: "Re: [OMPI users] help: seg fault when freeing communicator"</a>
<li><strong>Previous message:</strong> <a href="8899.php">Jeff Squyres: "Re: [OMPI users] openmpi 1.3.1 : mpirun status is 0 after receivingTERM signal"</a>
<li><strong>In reply to:</strong> <a href="8882.php">Francesco Pietra: "Re: [OMPI users] shared libraries issue compiling 1.3.1/intel10.1.022"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8862.php">Francesco Pietra: "[OMPI users] Fwd: shared libraries issue compiling 1.3.1/intel 10.1.022"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 13, 2009, at 12:07 PM, Francesco Pietra wrote:
<br>
<p><span class="quotelev1">&gt; I knew that but have considered it again. I wonder whether the info at
</span><br>
<span class="quotelev1">&gt; the end of this mail suggests how to operate from the viewpoint of
</span><br>
<span class="quotelev1">&gt; openmpi in compiling a code.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In trying to compile openmpi-1.3.1 on debian amd64 lenny, intels
</span><br>
<span class="quotelev1">&gt; 10.1.022 do not see their librar libimf.so, which is on the unix path
</span><br>
<span class="quotelev1">&gt; as required by your reference. A mixed compilation gcc g++ ifort only
</span><br>
<span class="quotelev1">&gt; succeeded with a Tyan S2895, not with four-socket Supermicro boards,
</span><br>
<span class="quotelev1">&gt; which are of my need.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I'm not sure what you're saying here.  Compiling OMPI shouldn't be  
<br>
influenced on which hardware you have -- it should be a factor of your  
<br>
OS's and compilers...?
<br>
<p><span class="quotelev1">&gt; The problem was solved with gcc g++ gfortran. The openmpi-1.3.1
</span><br>
<span class="quotelev1">&gt; examples run correctly and Amber10 sander.MPI could be built plainly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What remains unfulfilled - along similar lines - is the compilation of
</span><br>
<span class="quotelev1">&gt; Amber9 sander.MPI which I need. Installation of bison fulfilled the
</span><br>
<span class="quotelev1">&gt; request of yacc, and serial compilation passed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I think you need to contact the Amber9 maintainers for help with this;  
<br>
we unfortunately have no visibility into their software, although I  
<br>
will say this:
<br>
<p><span class="quotelev1">&gt; gfortran -c -O0 -fno-second-underscore -march=nocona  -ffree-form  -o
</span><br>
<span class="quotelev1">&gt; evb_init.o _evb_init.f
</span><br>
<span class="quotelev1">&gt; Error: Can't open included file 'mpif-common.h'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>This looks like a broken Open MPI installation and/or not using  
<br>
mpif77 / mpif90 to compile the application.  mpif-common.h should be  
<br>
installed properly such that it can be found via mpif77 / mpif90.
<br>
<p>Contact the Amber maintainers and ask them why they're not using  
<br>
mpif77 / mpif90 to compile their application.  Or, if they're not  
<br>
interested, see if you can fix the Amber9 build process to use  
<br>
mpif77 / mpif90.  Without knowing anything about Amber9, that's my  
<br>
best guess as to how to make it compile properly.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8901.php">Jeff Squyres: "Re: [OMPI users] help: seg fault when freeing communicator"</a>
<li><strong>Previous message:</strong> <a href="8899.php">Jeff Squyres: "Re: [OMPI users] openmpi 1.3.1 : mpirun status is 0 after receivingTERM signal"</a>
<li><strong>In reply to:</strong> <a href="8882.php">Francesco Pietra: "Re: [OMPI users] shared libraries issue compiling 1.3.1/intel10.1.022"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8862.php">Francesco Pietra: "[OMPI users] Fwd: shared libraries issue compiling 1.3.1/intel 10.1.022"</a>
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
