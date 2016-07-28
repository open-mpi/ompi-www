<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jun 28 10:31:46 2006" -->
<!-- isoreceived="20060628143146" -->
<!-- sent="Wed, 28 Jun 2006 10:31:36 -0400" -->
<!-- isosent="20060628143136" -->
<!-- name="Patrick Jessee" -->
<!-- email="pj_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Openmpi 1.1: startup problem caused by	file	descriptor state" -->
<!-- id="44A292C8.7050504_at_fluent.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="1151503499.13451.14.camel_at_boxtop.lanl.gov" -->
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
<strong>From:</strong> Patrick Jessee (<em>pj_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-28 10:31:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1489.php">Terry D. Dontje: "[OMPI users] Re : OpenMPI 1.1: Signal:10, info.si_errno:0(Unknown, error:	0), si_code:1(BUS_ADRALN)"</a>
<li><strong>Previous message:</strong> <a href="1487.php">Eric Thibodeau: "Re: [OMPI users] users Digest, Vol 317, Issue 4"</a>
<li><strong>In reply to:</strong> <a href="1486.php">Brian Barrett: "Re: [OMPI users] Openmpi 1.1: startup problem caused by file	descriptor state"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brian Barrett wrote:
<br>
<p><span class="quotelev1">&gt;On Wed, 2006-06-28 at 09:43 -0400, Patrick Jessee wrote:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Hello.  I've tracked down the source of the previously reported startup 
</span><br>
<span class="quotelev2">&gt;&gt;problem with Openmpi 1.1.  On startup, it fails with the messages:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;mca_oob_tcp_accept: accept() failed with errno 9.
</span><br>
<span class="quotelev2">&gt;&gt;    :
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;This didn't happen with 1.0.2.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;The trigger for this behavior is if standard input happens to be closed 
</span><br>
<span class="quotelev2">&gt;&gt;before calling mpirun.  In this particular case, mpirun was being 
</span><br>
<span class="quotelev2">&gt;&gt;started by a wrapper Bourne shell script that had standard input 
</span><br>
<span class="quotelev2">&gt;&gt;closed.  It's fairly easy to reproduce.  Interestingly, the problem is 
</span><br>
<span class="quotelev2">&gt;&gt;not seen if standard input is opened from an arbitrary device such as 
</span><br>
<span class="quotelev2">&gt;&gt;/dev/null.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;This is the first MPI with which we've seen this behavior, and it didn't 
</span><br>
<span class="quotelev2">&gt;&gt;happen with 1.0.2 so something must have been introduced in 1.1.   
</span><br>
<span class="quotelev2">&gt;&gt;Perhaps 1.1 makes some assumptions about the state of the standard file 
</span><br>
<span class="quotelev2">&gt;&gt;descriptors.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Hopefully this feedback is helpful to someone in resolving the problem.
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Yup, in order to fix some other things with standard input that users
</span><br>
<span class="quotelev1">&gt;rightly were complaining about, we changed some standard input handling
</span><br>
<span class="quotelev1">&gt;between 1.0.2 and 1.1. My recommendation is to just tie it to /dev/null
</span><br>
<span class="quotelev1">&gt;instead.  We're unlikely to fix this issue in the near future.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
Thanks for the reply.  We can work around the issue in the near future; 
<br>
however, this seems like a restriction/assumption that could possibly be 
<br>
addressed in OpenMPI  in the long run. (It's easy to work-around/avoid 
<br>
once you know what the issue/restriction is, but tracking down the 
<br>
problem takes some time.) Anyway,  perhaps this it could be placed on a 
<br>
todo list so it doesn't get lost.  I'd be happy to provide any 
<br>
additional information if needed.
<br>
<p>Regards,
<br>
<p>Patrick
<br>
<p><!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1489.php">Terry D. Dontje: "[OMPI users] Re : OpenMPI 1.1: Signal:10, info.si_errno:0(Unknown, error:	0), si_code:1(BUS_ADRALN)"</a>
<li><strong>Previous message:</strong> <a href="1487.php">Eric Thibodeau: "Re: [OMPI users] users Digest, Vol 317, Issue 4"</a>
<li><strong>In reply to:</strong> <a href="1486.php">Brian Barrett: "Re: [OMPI users] Openmpi 1.1: startup problem caused by file	descriptor state"</a>
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
