<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jun 28 10:37:11 2006" -->
<!-- isoreceived="20060628143711" -->
<!-- sent="Wed, 28 Jun 2006 10:35:03 -0400" -->
<!-- isosent="20060628143503" -->
<!-- name="Terry D. Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="[OMPI users] Re : OpenMPI 1.1: Signal:10, info.si_errno:0(Unknown, error:	0), si_code:1(BUS_ADRALN)" -->
<!-- id="44A29397.2000904_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="mailman.419.1151497825.3329.users_at_open-mpi.org" -->
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
<strong>Date:</strong> 2006-06-28 10:35:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1490.php">Eric Thibodeau: "Re: [OMPI users] Re : OpenMPI 1.1: Signal:10, info.si_errno:0(Unknown, error:	0 ), si_code:1(BUS_ADRALN)"</a>
<li><strong>Previous message:</strong> <a href="1488.php">Patrick Jessee: "Re: [OMPI users] Openmpi 1.1: startup problem caused by	file	descriptor state"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1490.php">Eric Thibodeau: "Re: [OMPI users] Re : OpenMPI 1.1: Signal:10, info.si_errno:0(Unknown, error:	0 ), si_code:1(BUS_ADRALN)"</a>
<li><strong>Reply:</strong> <a href="1490.php">Eric Thibodeau: "Re: [OMPI users] Re : OpenMPI 1.1: Signal:10, info.si_errno:0(Unknown, error:	0 ), si_code:1(BUS_ADRALN)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Frank,
<br>
<p>Can you set your limit coredumpsize to non-zero rerun the program
<br>
and then get the stack via dbx?
<br>
<p>So, I have a similar case of BUS_ADRALN on SPARC systems with an
<br>
older version (June 21st) of the trunk.  I've since run using the latest 
<br>
trunk and the
<br>
bus went away.  I am now going to try this out with v1.1 to see if I get 
<br>
similar
<br>
results.  Your stack would help me try and determine if this is an 
<br>
OpenMPI issue
<br>
or possibly some type of platform problem.
<br>
<p>There is another thread with Eric Thibodeau that I am unsure if it is 
<br>
the same issue
<br>
as either of our situation. 
<br>
<p>--td
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Message: 3
</span><br>
<span class="quotelev1">&gt;Date: Wed, 28 Jun 2006 14:30:12 +0200
</span><br>
<span class="quotelev1">&gt;From: openmpi-user &lt;openmpi-user_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;Subject: Re: [OMPI users] OpenMPI 1.1: Signal:10
</span><br>
<span class="quotelev1">&gt;	info.si_errno:0(Unknown, error:	0), si_code:1(BUS_ADRALN) (Terry D.
</span><br>
<span class="quotelev1">&gt;	Dontje)
</span><br>
<span class="quotelev1">&gt;To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;Message-ID: &lt;44A27654.9060002_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;Content-Type: text/plain; charset=&quot;iso-8859-1&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Hi Terry,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;unfortunately I haven't got a stack trace.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;OS: Mac OS X 10.4.7 Server on the Xgrid-server and Mac OS X 10.4.7 
</span><br>
<span class="quotelev1">&gt;Client on every node (G4 and G5). For testing-purposes I've installed 
</span><br>
<span class="quotelev1">&gt;OpenMPI 1.1 on a Dual-G4-node and on a Dual-G5-node with my Xgrid 
</span><br>
<span class="quotelev1">&gt;consisting of only either the Dual-G4- or the Dual-G5-node. No matter 
</span><br>
<span class="quotelev1">&gt;which configuration, I ran into the bus error.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Yours,
</span><br>
<span class="quotelev1">&gt;Frank
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1490.php">Eric Thibodeau: "Re: [OMPI users] Re : OpenMPI 1.1: Signal:10, info.si_errno:0(Unknown, error:	0 ), si_code:1(BUS_ADRALN)"</a>
<li><strong>Previous message:</strong> <a href="1488.php">Patrick Jessee: "Re: [OMPI users] Openmpi 1.1: startup problem caused by	file	descriptor state"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1490.php">Eric Thibodeau: "Re: [OMPI users] Re : OpenMPI 1.1: Signal:10, info.si_errno:0(Unknown, error:	0 ), si_code:1(BUS_ADRALN)"</a>
<li><strong>Reply:</strong> <a href="1490.php">Eric Thibodeau: "Re: [OMPI users] Re : OpenMPI 1.1: Signal:10, info.si_errno:0(Unknown, error:	0 ), si_code:1(BUS_ADRALN)"</a>
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
