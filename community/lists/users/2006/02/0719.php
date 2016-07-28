<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Feb 27 20:14:41 2006" -->
<!-- isoreceived="20060228011441" -->
<!-- sent="Mon, 27 Feb 2006 20:14:34 -0500" -->
<!-- isosent="20060228011434" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Run failure on Solaris Opteron with Sun Studio 11" -->
<!-- id="529ABDDD-061B-4B6C-9073-18918DCFD8A3_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="440303C0.2060103_at_obs.ujf-grenoble.fr" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-02-27 20:14:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0720.php">Jose Pedro Garcia Mahedero: "Re: [OMPI users] cannot mak a simple ping-pong"</a>
<li><strong>Previous message:</strong> <a href="0718.php">Tim S. Woodall: "Re: [OMPI users] Memory allocation problem with OpenIB"</a>
<li><strong>In reply to:</strong> <a href="0717.php">Pierre Valiron: "Re: [OMPI users] Run failure on Solaris Opteron with Sun Studio 11"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/03/0799.php">Pierre Valiron: "Re: [OMPI users] Run failure on Solaris Opteron with Sun Studio 11"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/03/0799.php">Pierre Valiron: "Re: [OMPI users] Run failure on Solaris Opteron with Sun Studio 11"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 27, 2006, at 8:50 AM, Pierre Valiron wrote:
<br>
<p><span class="quotelev1">&gt; - Make completed nicely, excepted compiling ompi/mpi/f90/mpi.f90  
</span><br>
<span class="quotelev1">&gt; which took nearly half an hour to complete. I suspect the  
</span><br>
<span class="quotelev1">&gt; optimization flags in FFLAGS are not important for applications,  
</span><br>
<span class="quotelev1">&gt; and I could use -O0 or -O1 instead.
</span><br>
<p>You probably won't see any performance impact at all if you compile  
<br>
the Fortran 90 layer of Open MPI with no optimizations.  It's a very  
<br>
thin wrapper and the compiler isn't going to be able to do much with  
<br>
it anyway.  One other thing - if you know your F90 code never sends  
<br>
arrays greater than dimension X (X defaults to 4), you can speed  
<br>
things up immensly by configuring Open MPI with the option --with-f90- 
<br>
max-array-dim=X.
<br>
<p><span class="quotelev1">&gt; - However the resulting executable fails to launch:
</span><br>
<span class="quotelev1">&gt; valiron_at_icare ~/config &gt; mpirun --prefix /users/valiron/lib/ 
</span><br>
<span class="quotelev1">&gt; openmpi-1.0.2a9 -np 2 a.out
</span><br>
<span class="quotelev1">&gt; Segmentation fault (core dumped)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - The problem seems buried into open-mpi:
</span><br>
<span class="quotelev1">&gt; valiron_at_icare ~/config &gt; pstack core
</span><br>
<span class="quotelev1">&gt; core 'core' of 27996:   mpirun --prefix /users/valiron/lib/ 
</span><br>
<span class="quotelev1">&gt; openmpi-1.0.2a9 -np 2 a.out
</span><br>
<span class="quotelev1">&gt; fffffd7fff05dfe0 strlen () + 20
</span><br>
<span class="quotelev1">&gt; fffffd7fff0b6ab3 vsprintf () + 33
</span><br>
<span class="quotelev1">&gt; fffffd7fff2e4211 opal_vasprintf () + 41
</span><br>
<span class="quotelev1">&gt; fffffd7fff2e41c8 opal_asprintf () + 98
</span><br>
<span class="quotelev1">&gt; 00000000004098a3 orterun () + 63
</span><br>
<span class="quotelev1">&gt; 0000000000407214 main () + 34
</span><br>
<span class="quotelev1">&gt; 000000000040708c ???????? ()
</span><br>
<p>Ugh...  Yes, we're probably doing something wrong there.   
<br>
Unfortunately, neither Jeff nor I have access to an Opteron box  
<br>
running Solaris and I can't replicate the problem on either a  
<br>
UltraSparc running Solaris or an Opteron running Linux.  Could you  
<br>
compile Open MPI with CFLAGS set to &quot;-g -O -xtarget=opteron - 
<br>
xarch=amd64&quot;.  Hopefully being able to see the callstack with some  
<br>
line numbers will help a bit.
<br>
<p>Brian
<br>
<p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0720.php">Jose Pedro Garcia Mahedero: "Re: [OMPI users] cannot mak a simple ping-pong"</a>
<li><strong>Previous message:</strong> <a href="0718.php">Tim S. Woodall: "Re: [OMPI users] Memory allocation problem with OpenIB"</a>
<li><strong>In reply to:</strong> <a href="0717.php">Pierre Valiron: "Re: [OMPI users] Run failure on Solaris Opteron with Sun Studio 11"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/03/0799.php">Pierre Valiron: "Re: [OMPI users] Run failure on Solaris Opteron with Sun Studio 11"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/03/0799.php">Pierre Valiron: "Re: [OMPI users] Run failure on Solaris Opteron with Sun Studio 11"</a>
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
