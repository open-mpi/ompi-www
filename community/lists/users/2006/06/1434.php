<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jun 16 10:12:03 2006" -->
<!-- isoreceived="20060616141203" -->
<!-- sent="Fri, 16 Jun 2006 10:11:57 -0400" -->
<!-- isosent="20060616141157" -->
<!-- name="Jeff Squyres \(jsquyres\)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI C++ examples of user defined MPI types(inherited classes)?" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AFA43412_at_xmb-rtp-215.amer.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] OpenMPI C++ examples of user defined MPI types(inherited classes)?" -->
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
<strong>Date:</strong> 2006-06-16 10:11:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1435.php">Pak Lui: "Re: [OMPI users] pls:rsh: execv failed with errno=2"</a>
<li><strong>Previous message:</strong> <a href="1433.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Openmpi 1.0.3svn10374 not launching apps throughTMinterface"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It's on the to-do list to include some simple MPI examples in Open MPI.
<br>
<p>Here's a sample C++ MPI program from the LAM MPI test suite.  It creates
<br>
a bunch of different derived datatypes with the C++ MPI API:
<br>
<p><a href="https://sourcehaven.osl.iu.edu/svn/trillium/trunk/lamtests/dtyp/datatype">https://sourcehaven.osl.iu.edu/svn/trillium/trunk/lamtests/dtyp/datatype</a>
<br>
_cxx.cc
<br>
<p>Although it doesn't use these to send/receive, you can just use these
<br>
datatypes as the datatype argument in the various Send and Recv
<br>
functions with corresponding buffers that match the datatype.
<br>
<p><p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Jose Quiroga
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, June 13, 2006 8:54 PM
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] OpenMPI C++ examples of user defined 
</span><br>
<span class="quotelev1">&gt; MPI types(inherited classes)?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi everybody,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can anyone point me to some little C++ examples from
</span><br>
<span class="quotelev1">&gt; which to get the main idea of sending/receiving
</span><br>
<span class="quotelev1">&gt; messages containing user defined MPI types (MPI
</span><br>
<span class="quotelev1">&gt; inherited classes?)?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks a lot.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; JLQ.
</span><br>
<span class="quotelev1">&gt; MPI and OpenMPI newbe.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; __________________________________________________
</span><br>
<span class="quotelev1">&gt; Do You Yahoo!?
</span><br>
<span class="quotelev1">&gt; Tired of spam?  Yahoo! Mail has the best spam protection around 
</span><br>
<span class="quotelev1">&gt; <a href="http://mail.yahoo.com">http://mail.yahoo.com</a> 
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
<li><strong>Next message:</strong> <a href="1435.php">Pak Lui: "Re: [OMPI users] pls:rsh: execv failed with errno=2"</a>
<li><strong>Previous message:</strong> <a href="1433.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Openmpi 1.0.3svn10374 not launching apps throughTMinterface"</a>
<!-- nextthread="start" -->
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
