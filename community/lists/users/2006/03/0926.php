<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Mar 29 07:08:44 2006" -->
<!-- isoreceived="20060329120844" -->
<!-- sent="Wed, 29 Mar 2006 14:08:06 +0200" -->
<!-- isosent="20060329120806" -->
<!-- name="Francoise Roch" -->
<!-- email="roch_at_[hidden]" -->
<!-- subject="[OMPI users] openmpi-1.0.2a12 on solaris opteron" -->
<!-- id="442A78A6.6080808_at_obs.ujf-grenoble.fr" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Francoise Roch (<em>roch_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-29 07:08:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0927.php">Michael Kluskens: "[OMPI users] XMPI ?"</a>
<li><strong>Previous message:</strong> <a href="0925.php">Michael Kluskens: "Re: [OMPI users] Absoft fortran detected as g77?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0932.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] openmpi-1.0.2a12 on solaris opteron"</a>
<li><strong>Maybe reply:</strong> <a href="0932.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] openmpi-1.0.2a12 on solaris opteron"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I am attempting to run openmpi-1.0.2a12 on solaris opteron.
<br>
I compile in 64 bit mode, with Studio11 compilers
<br>
<p>The configure and the make run fine.
<br>
<p>I compile my application with :
<br>
mpicc -o myapp myapp.c
<br>
<p>1/ I have the following hieroglyphs and error message when launching 
<br>
mpirun :
<br>
<p>icare&gt; mpirun -np 4 -host icare ./myapp
<br>
T0&lt;&#250;&#178;&#254;&#255;&#255;+&#189;T0&lt;&#250;&#178;&#254;&#255;&#255;4&#189;T0&lt;&#250;&#178;&#254;&#255;&#255;=&#189;T0&lt;&#250;&#178;&#254;&#255;&#255;F&#189;ld.so.1: myapp: fatal: 
<br>
relocation error: file 
<br>
/users/roch/lib/openmpi-1.0.2a12/lib/libmca_common_sm.so.0: symbol 
<br>
nanosleep: referenced symbol not found
<br>
ld.so.1: all2all: fatal: relocation error: file 
<br>
/users/roch/lib/openmpi-1.0.2a12/lib/libmca_common_sm.so.0: symbol 
<br>
nanosleep: referenced symbol not found
<br>
ld.so.1: all2all: fatal: relocation error: file 
<br>
/users/roch/lib/openmpi-1.0.2a12/lib/libmca_common_sm.so.0: symbol 
<br>
nanosleep: referenced symbol not found
<br>
ld.so.1: all2all: fatal: relocation error: file 
<br>
/users/roch/lib/openmpi-1.0.2a12/lib/libmca_common_sm.so.0: symbol 
<br>
nanosleep: referenced symbol not found
<br>
<p>The problem is fixed by compiling with -lrt option :
<br>
mpicc -lrt -o myapp myapp.c
<br>
<p>2/ I attempted to force interface exclusion without success :
<br>
<p>n14 &gt; mpirun --mca btl_tcp_if_exclude bge1 -np 2 -host p14,p39 myapp
<br>
9&#255;&#255;&#255;&#255;&#255;&#253;D $ &#189;T &#214;&#161;&#184;&#255;&#255;&#255;&#255;&#253; $ &#189;Process 0 is alive on n14
<br>
Process 1 is alive on n39
<br>
[n39:26824] *** An error occurred in MPI_Barrier
<br>
[n39:26824] *** on communicator MPI_COMM_WORLD
<br>
[n39:26824] *** MPI_ERR_INTERN: internal error
<br>
[n39:26824] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
<p><p>Best Regards,
<br>
Francoise
<br>
<p><pre>
-- 
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0927.php">Michael Kluskens: "[OMPI users] XMPI ?"</a>
<li><strong>Previous message:</strong> <a href="0925.php">Michael Kluskens: "Re: [OMPI users] Absoft fortran detected as g77?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0932.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] openmpi-1.0.2a12 on solaris opteron"</a>
<li><strong>Maybe reply:</strong> <a href="0932.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] openmpi-1.0.2a12 on solaris opteron"</a>
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
