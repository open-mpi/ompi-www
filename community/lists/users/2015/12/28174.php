<?
$subject_val = "Re: [OMPI users] Questions about non-blocking collective calls...";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 17 08:58:11 2015" -->
<!-- isoreceived="20151217135811" -->
<!-- sent="Thu, 17 Dec 2015 08:57:38 -0500" -->
<!-- isosent="20151217135738" -->
<!-- name="Eric Chamberland" -->
<!-- email="Eric.Chamberland_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Questions about non-blocking collective calls..." -->
<!-- id="5672BF52.5040306_at_giref.ulaval.ca" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="56282E6B.1050006_at_rist.or.jp" -->
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
<strong>Subject:</strong> Re: [OMPI users] Questions about non-blocking collective calls...<br>
<strong>From:</strong> Eric Chamberland (<em>Eric.Chamberland_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-12-17 08:57:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28175.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Questions about non-blocking collective calls..."</a>
<li><strong>Previous message:</strong> <a href="28173.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMPI non blocking I_Allreduce segfaults when using custom function.."</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/10/27915.php">Gilles Gouaillardet: "Re: [OMPI users] Questions about non-blocking collective calls..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28175.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Questions about non-blocking collective calls..."</a>
<li><strong>Reply:</strong> <a href="28175.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Questions about non-blocking collective calls..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Gilles,
<br>
<p>Le 2015-10-21 20:31, Gilles Gouaillardet a &#233;crit :
<br>
<span class="quotelev1">&gt; #3 difficult question ...
</span><br>
<span class="quotelev1">&gt; first, keep in mind there is currently no progress thread in Open MPI.
</span><br>
<span class="quotelev1">&gt; that means messages can be received only when MPI_Wait* or MPI_Test* is
</span><br>
<span class="quotelev1">&gt; invoked. you might hope messages are received when doing some
</span><br>
<span class="quotelev1">&gt; computation (overlap of computation and communication) but unfortunatly,
</span><br>
<span class="quotelev1">&gt; that does not happen most of the time.
</span><br>
<p>I think you have pointed a problem with MPI usage we programmed.
<br>
<p>We thought in fact that there were message progression done.  Since, for 
<br>
example, we programmed all the MPI_Irecv and MPI_Isend into a class, we 
<br>
never force the MPI_Isend to progress until the class destructor is 
<br>
called.  But if the communication class is an attribute of another 
<br>
class, it can be destroyed very lately into the program execution, 
<br>
leading to a deadlock...
<br>
<p>So I have started to modify our classes to invoke MPI_Wait to make the 
<br>
progression happens.
<br>
<p>No, I put an #ifdef around that code to be able to activate/deactivate it.
<br>
<p>But I would like to know if the MPI I am using is able to do message 
<br>
progression or not: So how do an end-user like me can knows that? 
<br>
Does-it rely on hardware?  Is there a #define by OpenMPI that one can 
<br>
uses into his code?
<br>
<p>Thanks,
<br>
<p>Eric
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28175.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Questions about non-blocking collective calls..."</a>
<li><strong>Previous message:</strong> <a href="28173.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMPI non blocking I_Allreduce segfaults when using custom function.."</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/10/27915.php">Gilles Gouaillardet: "Re: [OMPI users] Questions about non-blocking collective calls..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28175.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Questions about non-blocking collective calls..."</a>
<li><strong>Reply:</strong> <a href="28175.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Questions about non-blocking collective calls..."</a>
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
