<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Feb 24 10:54:17 2006" -->
<!-- isoreceived="20060224155417" -->
<!-- sent="Fri, 24 Feb 2006 16:44:19 +0100" -->
<!-- isosent="20060224154419" -->
<!-- name="Benoit Semelin" -->
<!-- email="benoit.semelin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Toubles with Open-mpi on AMD opteron with gfortran/g95" -->
<!-- id="43FF29D3.1010309_at_obspm.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="200602241553.22249.Keller_at_hlrs.de" -->
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
<strong>From:</strong> Benoit Semelin (<em>benoit.semelin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-02-24 10:44:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0703.php">Scott Weitzenkamp \(sweitzen\): "Re: [OMPI users] couple of subversion questions"</a>
<li><strong>Previous message:</strong> <a href="0701.php">Rainer Keller: "Re: [OMPI users] Toubles with Open-mpi on AMD opteron with gfortran/g95"</a>
<li><strong>In reply to:</strong> <a href="0701.php">Rainer Keller: "Re: [OMPI users] Toubles with Open-mpi on AMD opteron with gfortran/g95"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0705.php">George Bosilca: "Re: [OMPI users] Toubles with Open-mpi on AMD opteron with gfortran/g95"</a>
<li><strong>Reply:</strong> <a href="0705.php">George Bosilca: "Re: [OMPI users] Toubles with Open-mpi on AMD opteron with gfortran/g95"</a>
<li><strong>Reply:</strong> <a href="0708.php">Greg Lindahl: "Re: [OMPI users] Toubles with Open-mpi on AMD opteron with gfortran/g95"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Rainer Keller a &#233;crit :
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Could You please email the config.log file?
</span><br>
<span class="quotelev1">&gt;Also, it would be interesting what version of intel-compiler You are using.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Well I have actually tried with 2 different versions: 8.0.034 and 
<br>
8.1.018. The config.log is attached (I hope this works on the mailing 
<br>
list...)
<br>
<p><span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;The installation works fine with g95 and gfortran (provided I specify
</span><br>
<span class="quotelev2">&gt;&gt;the 64 library in LD_LIBRARY_PATH in the case of gfortran)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;But then, when I compile my code with mpif90, it takes about 15 minutes.
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;Can You strace, on where the compiler is hanging?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
The compiler is not hanging it is completing the task, it just slows 
<br>
down very much for modules that contain MPI calls...
<br>
<p>But in between I found out that if I replace the proprer f90 &quot;USE MPI&quot; 
<br>
by the old &quot; include 'mpif.h' &quot;, it compiles at normal speed...
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;PS: When compiling OpenMPI are You using a combination of gcc for C/C++ and 
</span><br>
<span class="quotelev1">&gt;ifort for Fortan compilation?
</span><br>
<span class="quotelev1">&gt;This will not work, as the compilers have different views on e.g. boolean 
</span><br>
<span class="quotelev1">&gt;variables and values, so parameter passing from Your code into OpenMPI will 
</span><br>
<span class="quotelev1">&gt;be botched up. Currently, You may only use C / Fortran Compiler from one 
</span><br>
<span class="quotelev1">&gt;vendor.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
Okay, I guess this is it. I am indeed using gcc, g++ and intel fortran. 
<br>
Then I should try with icc?
<br>
<p>Benoit.
<br>
<p>
<br><hr>
<ul>
<li>text/x-log attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0702/config.log">config.log</a>
</ul>
<!-- attachment="config.log" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0703.php">Scott Weitzenkamp \(sweitzen\): "Re: [OMPI users] couple of subversion questions"</a>
<li><strong>Previous message:</strong> <a href="0701.php">Rainer Keller: "Re: [OMPI users] Toubles with Open-mpi on AMD opteron with gfortran/g95"</a>
<li><strong>In reply to:</strong> <a href="0701.php">Rainer Keller: "Re: [OMPI users] Toubles with Open-mpi on AMD opteron with gfortran/g95"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0705.php">George Bosilca: "Re: [OMPI users] Toubles with Open-mpi on AMD opteron with gfortran/g95"</a>
<li><strong>Reply:</strong> <a href="0705.php">George Bosilca: "Re: [OMPI users] Toubles with Open-mpi on AMD opteron with gfortran/g95"</a>
<li><strong>Reply:</strong> <a href="0708.php">Greg Lindahl: "Re: [OMPI users] Toubles with Open-mpi on AMD opteron with gfortran/g95"</a>
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
