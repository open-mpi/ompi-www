<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Sep  6 11:39:07 2006" -->
<!-- isoreceived="20060906153907" -->
<!-- sent="Wed, 06 Sep 2006 11:38:54 -0400" -->
<!-- isosent="20060906153854" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Gfortran, Mac OS X and MPI_CART_CREATE problem" -->
<!-- id="C12463CE.2593F%jsquyres_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="eb51483d0608120824j5d355542m445011ca21200733_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-09-06 11:38:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1831.php">George Bosilca: "Re: [OMPI users] Does current Intel dual processor support MPI?"</a>
<li><strong>Previous message:</strong> <a href="1829.php">Brian Barrett: "Re: [OMPI users] Probable MPI2 bug?"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/08/1741.php">Nym: "[OMPI users] Gfortran, Mac OS X and MPI_CART_CREATE problem"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Greetings; sorry for the late reply.
<br>
<p>Can you send the code that you're using?  I am able to compile the F90
<br>
bindings on my OSX laptop (10.4.7) and compile / run some sample F90 MPI
<br>
apps with OMPI 1.1.1.
<br>
<p><span class="quotelev1">&gt;From your config.out, it looks like your F90 bindings were compiled
</span><br>
properly.
<br>
<p><p>On 8/12/06 11:24 AM, &quot;Nym&quot; &lt;neverwillreply_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've been trying to compile OpenMPI with gfortran on Mac OS X, and use
</span><br>
<span class="quotelev1">&gt; it with an MPI app that compiles and works using MPICH2 on a Linux
</span><br>
<span class="quotelev1">&gt; system.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have tried using both versions 1.1 and the pre-release 1.1.1, and I
</span><br>
<span class="quotelev1">&gt; get the same result. Attached at the configuration logs and make outputs
</span><br>
<span class="quotelev1">&gt; from compiling OpenMPI with version 1.1.1. (However only the configure
</span><br>
<span class="quotelev1">&gt; output and make all output are included, and they are bzip2'ed and not
</span><br>
<span class="quotelev1">&gt; gzip'ed. I tried to include everything specified on
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>, and have it tared, but it was
</span><br>
<span class="quotelev1">&gt; over 100kb)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The compilation of OpenMPI seems to finish successfully. However, when
</span><br>
<span class="quotelev1">&gt; compiling my MPI app I get the error
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Error: Generic subroutine 'mpi_cart_create' at (1) is not an intrinsic
</span><br>
<span class="quotelev1">&gt; subroutine
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Other MPI calls, such as MPI_REDUCE, and MPI_SENDRECV do not bring up
</span><br>
<span class="quotelev1">&gt; any errors. The call is of the following form, with the variable
</span><br>
<span class="quotelev1">&gt; declarations shown:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; INTEGER, PARAMETER :: numDims = 2
</span><br>
<span class="quotelev1">&gt; INTEGER :: dimSizes(0:numDims-1)
</span><br>
<span class="quotelev1">&gt; LOGICAL :: dimPeriodics(0:numDims-1)
</span><br>
<span class="quotelev1">&gt; LOGICAL :: reorderRanks
</span><br>
<span class="quotelev1">&gt; INTEGER :: comm
</span><br>
<span class="quotelev1">&gt; INTEGER :: err
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; CALL MPI_CART_CREATE(MPI_COMM_WORLD, numDims, dimSizes, dimPeriodics, &amp;
</span><br>
<span class="quotelev1">&gt;           reorderRanks, comm, err)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; After some investigation, if I replace the logicals with Integers I
</span><br>
<span class="quotelev1">&gt; get it to compile. I haven't manage to test it yet due to some
</span><br>
<span class="quotelev1">&gt; gfortran error elsewhere. However, I'm not that keen on using integers
</span><br>
<span class="quotelev1">&gt; when they should be logicals. Also, I think according to the
</span><br>
<span class="quotelev1">&gt; specification, 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.netlib.org/utk/papers/mpi-book/node153.html#SECTION0075100000000000">http://www.netlib.org/utk/papers/mpi-book/node153.html#SECTION0075100000000000</a>
</span><br>
<span class="quotelev1">&gt; 0000
</span><br>
<span class="quotelev1">&gt; , logicals should be accepted.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there a way to get MPI_CART_CREATE working with logicals on my system?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Nym.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; p.s. I also apologise if this has been sent twice.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1831.php">George Bosilca: "Re: [OMPI users] Does current Intel dual processor support MPI?"</a>
<li><strong>Previous message:</strong> <a href="1829.php">Brian Barrett: "Re: [OMPI users] Probable MPI2 bug?"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/08/1741.php">Nym: "[OMPI users] Gfortran, Mac OS X and MPI_CART_CREATE problem"</a>
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
