<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jul  4 08:52:16 2006" -->
<!-- isoreceived="20060704125216" -->
<!-- sent="Tue, 04 Jul 2006 08:50:06 -0400" -->
<!-- isosent="20060704125006" -->
<!-- name="Terry D. Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.1: Signal:10, info.si_errno:0(Unknown, error:0), si_code:1(BUS_ADRALN) (Terry D., Dontje)" -->
<!-- id="44AA63FE.9050308_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="mailman.1320.1151767096.3329.users_at_open-mpi.org" -->
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
<strong>From:</strong> Terry D. Dontje (<em>Terry.Dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-07-04 08:50:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1541.php">Daniël Mantione: "Re: [OMPI users] OpenMPI 1.1 backward compatible?"</a>
<li><strong>Previous message:</strong> <a href="1539.php">kefeng chen: "Re: [OMPI users] error in running openmpi on remote node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1559.php">Eric Thibodeau: "Re: [OMPI users] OpenMPI 1.1: Signal:10, info.si_errno:0(Unknown, error:0), si_code:1(BUS_ADRALN) (Terry D., Dontje)"</a>
<li><strong>Reply:</strong> <a href="1559.php">Eric Thibodeau: "Re: [OMPI users] OpenMPI 1.1: Signal:10, info.si_errno:0(Unknown, error:0), si_code:1(BUS_ADRALN) (Terry D., Dontje)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brian, it looks like the Address alignment error I saw might have been  
<br>
resolved
<br>
with one of the last set of bug fixes to go into v1.1.  The gold version 
<br>
of v1.1 worked
<br>
once for me.  Unfortunately before I left for the week shutdown (last 
<br>
Thursday) I could
<br>
not test it again and the head of the trunk because our enviroment.
<br>
<p>Eric could you try the most recent v1.1 of Open MPI to see if you still 
<br>
see the bus error?
<br>
<p>thanks,
<br>
<p>--td
<br>
<p><span class="quotelev1"> &gt;Thanks for the patch. The XGrid code is OS X only, so we still have 
</span><br>
some work to do on Solaris. I'm &gt;not sure how this bug lived through 
<br>
testing. I've applied it to our Subversion source and it will be part 
<br>
<span class="quotelev1"> &gt;of the Open MPI 1.1.1 release.
</span><br>
<span class="quotelev1"> &gt;
</span><br>
<span class="quotelev1"> &gt;Thanks, Brian
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1541.php">Daniël Mantione: "Re: [OMPI users] OpenMPI 1.1 backward compatible?"</a>
<li><strong>Previous message:</strong> <a href="1539.php">kefeng chen: "Re: [OMPI users] error in running openmpi on remote node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1559.php">Eric Thibodeau: "Re: [OMPI users] OpenMPI 1.1: Signal:10, info.si_errno:0(Unknown, error:0), si_code:1(BUS_ADRALN) (Terry D., Dontje)"</a>
<li><strong>Reply:</strong> <a href="1559.php">Eric Thibodeau: "Re: [OMPI users] OpenMPI 1.1: Signal:10, info.si_errno:0(Unknown, error:0), si_code:1(BUS_ADRALN) (Terry D., Dontje)"</a>
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
