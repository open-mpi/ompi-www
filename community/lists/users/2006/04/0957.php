<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Apr  4 07:42:08 2006" -->
<!-- isoreceived="20060404114208" -->
<!-- sent="Tue, 04 Apr 2006 13:38:41 +0200" -->
<!-- isosent="20060404113841" -->
<!-- name="Francoise Roch" -->
<!-- email="roch_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi-1.0.2a12 on solaris opteron" -->
<!-- id="44325AC1.50603_at_obs.ujf-grenoble.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="C835B9C9CB0F1C4E9DA48913C9E8F8AF5B1CAB_at_xmb-rtp-215.amer.cisco.com" -->
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
<strong>Date:</strong> 2006-04-04 07:38:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0958.php">Brian Barrett: "Re: [OMPI users] openmpi-1.0.2a12 on solaris opteron"</a>
<li><strong>Previous message:</strong> <a href="0956.php">Ralph Castain: "Re: [OMPI users] cygwin support"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/03/0932.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] openmpi-1.0.2a12 on solaris opteron"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0958.php">Brian Barrett: "Re: [OMPI users] openmpi-1.0.2a12 on solaris opteron"</a>
<li><strong>Reply:</strong> <a href="0958.php">Brian Barrett: "Re: [OMPI users] openmpi-1.0.2a12 on solaris opteron"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; Doh!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is a problem that was fixed on the trunk long ago and it somehow never made it over to the v1.0 branch.  Brian ported it over earlier today; it'll be in the 1.0.2a13 that should be on the web site in a few hours.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>That's Ok for the reference problem, that was fixed in
<br>
the 1.0.2a13 version. But I still got the hieroglyphs when running 
<br>
mpirun, and I still got the same error attempting to force interface 
<br>
exclusion, with this new version.
<br>
<p>Thanks in advance for any help.
<br>
<p>Francoise
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;-----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt;From: users-bounces_at_[hidden] 
</span><br>
<span class="quotelev2">&gt;&gt;[mailto:users-bounces_at_[hidden]] On Behalf Of Francoise Roch
</span><br>
<span class="quotelev2">&gt;&gt;Sent: Wednesday, March 29, 2006 7:08 AM
</span><br>
<span class="quotelev2">&gt;&gt;To: users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;Subject: [OMPI users] openmpi-1.0.2a12 on solaris opteron
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;I am attempting to run openmpi-1.0.2a12 on solaris opteron.
</span><br>
<span class="quotelev2">&gt;&gt;I compile in 64 bit mode, with Studio11 compilers
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;The configure and the make run fine.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;I compile my application with :
</span><br>
<span class="quotelev2">&gt;&gt;mpicc -o myapp myapp.c
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;1/ I have the following hieroglyphs and error message when launching 
</span><br>
<span class="quotelev2">&gt;&gt;mpirun :
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;icare&gt; mpirun -np 4 -host icare ./myapp
</span><br>
<span class="quotelev2">&gt;&gt;T0&lt;&#250;&#178;&#254;&#255;&#255;+&#189;T0&lt;&#250;&#178;&#254;&#255;&#255;4&#189;T0&lt;&#250;&#178;&#254;&#255;&#255;=&#189;T0&lt;&#250;&#178;&#254;&#255;&#255;F&#189;ld.so.1: myapp: fatal: 
</span><br>
<span class="quotelev2">&gt;&gt;relocation error: file 
</span><br>
<span class="quotelev2">&gt;&gt;/users/roch/lib/openmpi-1.0.2a12/lib/libmca_common_sm.so.0: symbol 
</span><br>
<span class="quotelev2">&gt;&gt;nanosleep: referenced symbol not found
</span><br>
<span class="quotelev2">&gt;&gt;ld.so.1: all2all: fatal: relocation error: file 
</span><br>
<span class="quotelev2">&gt;&gt;/users/roch/lib/openmpi-1.0.2a12/lib/libmca_common_sm.so.0: symbol 
</span><br>
<span class="quotelev2">&gt;&gt;nanosleep: referenced symbol not found
</span><br>
<span class="quotelev2">&gt;&gt;ld.so.1: all2all: fatal: relocation error: file 
</span><br>
<span class="quotelev2">&gt;&gt;/users/roch/lib/openmpi-1.0.2a12/lib/libmca_common_sm.so.0: symbol 
</span><br>
<span class="quotelev2">&gt;&gt;nanosleep: referenced symbol not found
</span><br>
<span class="quotelev2">&gt;&gt;ld.so.1: all2all: fatal: relocation error: file 
</span><br>
<span class="quotelev2">&gt;&gt;/users/roch/lib/openmpi-1.0.2a12/lib/libmca_common_sm.so.0: symbol 
</span><br>
<span class="quotelev2">&gt;&gt;nanosleep: referenced symbol not found
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;The problem is fixed by compiling with -lrt option :
</span><br>
<span class="quotelev2">&gt;&gt;mpicc -lrt -o myapp myapp.c
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;2/ I attempted to force interface exclusion without success :
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;n14 &gt; mpirun --mca btl_tcp_if_exclude bge1 -np 2 -host p14,p39 myapp
</span><br>
<span class="quotelev2">&gt;&gt;9&#255;&#255;&#255;&#255;&#255;&#253;D $ &#189;T &#214;&#161;&#184;&#255;&#255;&#255;&#255;&#253; $ &#189;Process 0 is alive on n14
</span><br>
<span class="quotelev2">&gt;&gt;Process 1 is alive on n39
</span><br>
<span class="quotelev2">&gt;&gt;[n39:26824] *** An error occurred in MPI_Barrier
</span><br>
<span class="quotelev2">&gt;&gt;[n39:26824] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev2">&gt;&gt;[n39:26824] *** MPI_ERR_INTERN: internal error
</span><br>
<span class="quotelev2">&gt;&gt;[n39:26824] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Best Regards,
</span><br>
<span class="quotelev2">&gt;&gt;Francoise
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;-- 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="0958.php">Brian Barrett: "Re: [OMPI users] openmpi-1.0.2a12 on solaris opteron"</a>
<li><strong>Previous message:</strong> <a href="0956.php">Ralph Castain: "Re: [OMPI users] cygwin support"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/03/0932.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] openmpi-1.0.2a12 on solaris opteron"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0958.php">Brian Barrett: "Re: [OMPI users] openmpi-1.0.2a12 on solaris opteron"</a>
<li><strong>Reply:</strong> <a href="0958.php">Brian Barrett: "Re: [OMPI users] openmpi-1.0.2a12 on solaris opteron"</a>
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
