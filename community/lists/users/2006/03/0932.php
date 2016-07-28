<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Mar 29 19:02:43 2006" -->
<!-- isoreceived="20060330000243" -->
<!-- sent="Wed, 29 Mar 2006 19:02:27 -0500" -->
<!-- isosent="20060330000227" -->
<!-- name="Jeff Squyres \(jsquyres\)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi-1.0.2a12 on solaris opteron" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AF5B1CAB_at_xmb-rtp-215.amer.cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="[OMPI users] openmpi-1.0.2a12 on solaris opteron" -->
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
<strong>From:</strong> Jeff Squyres \(jsquyres\) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-29 19:02:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0933.php">John Robinson: "Re: [OMPI users] Connecting multiple applications"</a>
<li><strong>Previous message:</strong> <a href="0931.php">Jeffrey Fox: "[OMPI users] sed :36: unescaped newline in pattern substitution"</a>
<li><strong>Maybe in reply to:</strong> <a href="0926.php">Francoise Roch: "[OMPI users] openmpi-1.0.2a12 on solaris opteron"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/04/0957.php">Francoise Roch: "Re: [OMPI users] openmpi-1.0.2a12 on solaris opteron"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/04/0957.php">Francoise Roch: "Re: [OMPI users] openmpi-1.0.2a12 on solaris opteron"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Doh!
<br>
<p>This is a problem that was fixed on the trunk long ago and it somehow never made it over to the v1.0 branch.  Brian ported it over earlier today; it'll be in the 1.0.2a13 that should be on the web site in a few hours.
<br>
<p>Thanks for bringing it to our attention.
<br>
&nbsp;
<br>
<p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Francoise Roch
</span><br>
<span class="quotelev1">&gt; Sent: Wednesday, March 29, 2006 7:08 AM
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] openmpi-1.0.2a12 on solaris opteron
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am attempting to run openmpi-1.0.2a12 on solaris opteron.
</span><br>
<span class="quotelev1">&gt; I compile in 64 bit mode, with Studio11 compilers
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The configure and the make run fine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I compile my application with :
</span><br>
<span class="quotelev1">&gt; mpicc -o myapp myapp.c
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1/ I have the following hieroglyphs and error message when launching 
</span><br>
<span class="quotelev1">&gt; mpirun :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; icare&gt; mpirun -np 4 -host icare ./myapp
</span><br>
<span class="quotelev1">&gt; T0&lt;&#250;&#178;&#254;&#255;&#255;+&#189;T0&lt;&#250;&#178;&#254;&#255;&#255;4&#189;T0&lt;&#250;&#178;&#254;&#255;&#255;=&#189;T0&lt;&#250;&#178;&#254;&#255;&#255;F&#189;ld.so.1: myapp: fatal: 
</span><br>
<span class="quotelev1">&gt; relocation error: file 
</span><br>
<span class="quotelev1">&gt; /users/roch/lib/openmpi-1.0.2a12/lib/libmca_common_sm.so.0: symbol 
</span><br>
<span class="quotelev1">&gt; nanosleep: referenced symbol not found
</span><br>
<span class="quotelev1">&gt; ld.so.1: all2all: fatal: relocation error: file 
</span><br>
<span class="quotelev1">&gt; /users/roch/lib/openmpi-1.0.2a12/lib/libmca_common_sm.so.0: symbol 
</span><br>
<span class="quotelev1">&gt; nanosleep: referenced symbol not found
</span><br>
<span class="quotelev1">&gt; ld.so.1: all2all: fatal: relocation error: file 
</span><br>
<span class="quotelev1">&gt; /users/roch/lib/openmpi-1.0.2a12/lib/libmca_common_sm.so.0: symbol 
</span><br>
<span class="quotelev1">&gt; nanosleep: referenced symbol not found
</span><br>
<span class="quotelev1">&gt; ld.so.1: all2all: fatal: relocation error: file 
</span><br>
<span class="quotelev1">&gt; /users/roch/lib/openmpi-1.0.2a12/lib/libmca_common_sm.so.0: symbol 
</span><br>
<span class="quotelev1">&gt; nanosleep: referenced symbol not found
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The problem is fixed by compiling with -lrt option :
</span><br>
<span class="quotelev1">&gt; mpicc -lrt -o myapp myapp.c
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2/ I attempted to force interface exclusion without success :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; n14 &gt; mpirun --mca btl_tcp_if_exclude bge1 -np 2 -host p14,p39 myapp
</span><br>
<span class="quotelev1">&gt; 9&#255;&#255;&#255;&#255;&#255;&#253;D $ &#189;T &#214;&#161;&#184;&#255;&#255;&#255;&#255;&#253; $ &#189;Process 0 is alive on n14
</span><br>
<span class="quotelev1">&gt; Process 1 is alive on n39
</span><br>
<span class="quotelev1">&gt; [n39:26824] *** An error occurred in MPI_Barrier
</span><br>
<span class="quotelev1">&gt; [n39:26824] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [n39:26824] *** MPI_ERR_INTERN: internal error
</span><br>
<span class="quotelev1">&gt; [n39:26824] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best Regards,
</span><br>
<span class="quotelev1">&gt; Francoise
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
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
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0933.php">John Robinson: "Re: [OMPI users] Connecting multiple applications"</a>
<li><strong>Previous message:</strong> <a href="0931.php">Jeffrey Fox: "[OMPI users] sed :36: unescaped newline in pattern substitution"</a>
<li><strong>Maybe in reply to:</strong> <a href="0926.php">Francoise Roch: "[OMPI users] openmpi-1.0.2a12 on solaris opteron"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/04/0957.php">Francoise Roch: "Re: [OMPI users] openmpi-1.0.2a12 on solaris opteron"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/04/0957.php">Francoise Roch: "Re: [OMPI users] openmpi-1.0.2a12 on solaris opteron"</a>
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
