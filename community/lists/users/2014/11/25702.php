<?
$subject_val = "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  6 11:09:07 2014" -->
<!-- isoreceived="20141106160907" -->
<!-- sent="Thu, 6 Nov 2014 16:09:05 +0000" -->
<!-- isosent="20141106160905" -->
<!-- name="Michael.Rachner_at_[hidden]" -->
<!-- email="Michael.Rachner_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF" -->
<!-- id="8337B490252F0944BF1D38541059627E1737109E_at_DLREXMBX01.intra.dlr.de" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="F93F352B-A317-4236-8F4F-9AAFA28B6D34_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF<br>
<strong>From:</strong> <a href="mailto:Michael.Rachner_at_[hidden]?Subject=Re:%20[OMPI%20users]%20OPENMPI-1.8.3:%20missing%20fortran%20bindings%20for%20MPI_SIZEOF"><em>Michael.Rachner_at_[hidden]</em></a><br>
<strong>Date:</strong> 2014-11-06 11:09:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25703.php">Ralph Castain: "Re: [OMPI users] Randomly long (100ms vs 7000+ms) fulfillment of MPI_Ibcast"</a>
<li><strong>Previous message:</strong> <a href="25701.php">Saliya Ekanayake: "Re: [OMPI users] What could cause a segfault in OpenMPI?"</a>
<li><strong>In reply to:</strong> <a href="25700.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25744.php">Dave Love: "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Mr. Squyres,
<br>
<p>Thank you for your clear answer on the state of the interfaces in the mpi modules of OPENMPI.  A good state!
<br>
And I have coded sufficiently bugs myself, so I do not become too angry about the bugs of others.
<br>
If I should stumble upon missing Ftn-bindings in the future, I will send you a hint.
<br>
<p>Greetings to you all!
<br>
&nbsp;Michael Rachner
<br>
<p><p>-----Urspr&#252;ngliche Nachricht-----
<br>
Von: users [mailto:users-bounces_at_[hidden]] Im Auftrag von Jeff Squyres (jsquyres)
<br>
Gesendet: Donnerstag, 6. November 2014 15:10
<br>
An: Open MPI User's List
<br>
Betreff: Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF
<br>
<p>On Nov 6, 2014, at 8:55 AM, &lt;Michael.Rachner_at_[hidden]&gt; &lt;Michael.Rachner_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I agree fully with omitting the explicit interfaces from  mpif.h   . It is an important  resort for legacy codes.
</span><br>
<span class="quotelev1">&gt; But, in the mpi and mpi_f08 module  explicit interfaces are required for  all(!)  MPI-routines.
</span><br>
<span class="quotelev1">&gt; So far, this is not fulfilled in MPI-versions I know. 
</span><br>
<p>Bugs happen.
<br>
<p>I think you're saying that we don't intend to have all the routines in the mpi and mpi_f08 modules.  That's not correct.  We *do* have all explicit MPI interface in the mpi and mpi_f08 modules.  If some are missing -- like WIN_ALLOCATE was just discovered to be missing in the 1.8.3 release -- those are bugs.  We try really hard to avoid bugs, but sometimes they happen.  :-(
<br>
<p>Are you aware of other routines that are missing from the OMPI mpi / mpi_f08 modules?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
_______________________________________________
users mailing list
users_at_[hidden]
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/11/25700.php">http://www.open-mpi.org/community/lists/users/2014/11/25700.php</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25703.php">Ralph Castain: "Re: [OMPI users] Randomly long (100ms vs 7000+ms) fulfillment of MPI_Ibcast"</a>
<li><strong>Previous message:</strong> <a href="25701.php">Saliya Ekanayake: "Re: [OMPI users] What could cause a segfault in OpenMPI?"</a>
<li><strong>In reply to:</strong> <a href="25700.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25744.php">Dave Love: "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF"</a>
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
