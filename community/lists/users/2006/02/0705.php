<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Feb 24 15:50:37 2006" -->
<!-- isoreceived="20060224205037" -->
<!-- sent="Fri, 24 Feb 2006 15:48:48 -0500" -->
<!-- isosent="20060224204848" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Toubles with Open-mpi on AMD opteron with gfortran/g95" -->
<!-- id="E9F416D6-80F8-4392-A402-DAE0893D6ABB_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="43FF29D3.1010309_at_obspm.fr" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-02-24 15:48:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0706.php">Xiaoning (David) Yang: "[OMPI users] Run Open MPI on MAC OS"</a>
<li><strong>Previous message:</strong> <a href="0704.php">Pierre Valiron: "Re: [OMPI users] Configure failure on Solaris Opteron with Sun	Studio 11"</a>
<li><strong>In reply to:</strong> <a href="0702.php">Benoit Semelin: "Re: [OMPI users] Toubles with Open-mpi on AMD opteron with gfortran/g95"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0708.php">Greg Lindahl: "Re: [OMPI users] Toubles with Open-mpi on AMD opteron with gfortran/g95"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 24, 2006, at 10:44 AM, Benoit Semelin wrote:
<br>
<p><span class="quotelev1">&gt; Well I have actually tried with 2 different versions: 8.0.034 and  
</span><br>
<span class="quotelev1">&gt; 8.1.018. The config.log is attached (I hope this works on the  
</span><br>
<span class="quotelev1">&gt; mailing list...)
</span><br>
<p>I'm using 3 version of the intel compiler. These 2 plus the latest  
<br>
9.0 version and I was able to compile everything with any problems.  
<br>
Open MPI provide a clean interface for f90 that is different from the  
<br>
f77. We generate all possible functions (overloading them) depending  
<br>
on the type of arguments. It's a big file, and when I say big ...  
<br>
it's big. So it take a while to build and it take a while for the F90  
<br>
codes to get compiled. But, it's a clean F90 code ...
<br>
<p><span class="quotelev1">&gt; The compiler is not hanging it is completing the task, it just  
</span><br>
<span class="quotelev1">&gt; slows down very much for modules that contain MPI calls...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But in between I found out that if I replace the proprer f90 &quot;USE  
</span><br>
<span class="quotelev1">&gt; MPI&quot; by the old &quot; include 'mpif.h' &quot;, it compiles at normal speed...
</span><br>
<p>That's a solution that works but you will get some warnings. If you  
<br>
want there is an option for configure which will decrease the maximum  
<br>
dimension array for the F90 interface. By default is set to 4 but you  
<br>
can move it down to 2. Please set --with-f90-max-array-dim=2 at  
<br>
configure time, and the compilation of any F90 will be a lot faster,  
<br>
while you will still have a clean F90 interface.
<br>
<p><span class="quotelev1">&gt; Okay, I guess this is it. I am indeed using gcc, g++ and intel  
</span><br>
<span class="quotelev1">&gt; fortran. Then I should try with icc?
</span><br>
<p>If you're not mixing F90 and C in the same program it will work  
<br>
without problems. If you mix C and F90 it should work ...
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0706.php">Xiaoning (David) Yang: "[OMPI users] Run Open MPI on MAC OS"</a>
<li><strong>Previous message:</strong> <a href="0704.php">Pierre Valiron: "Re: [OMPI users] Configure failure on Solaris Opteron with Sun	Studio 11"</a>
<li><strong>In reply to:</strong> <a href="0702.php">Benoit Semelin: "Re: [OMPI users] Toubles with Open-mpi on AMD opteron with gfortran/g95"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0708.php">Greg Lindahl: "Re: [OMPI users] Toubles with Open-mpi on AMD opteron with gfortran/g95"</a>
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
