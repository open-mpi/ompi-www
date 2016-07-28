<?
$subject_val = "Re: [OMPI users] MPI_GET beyond 2 GB displacement";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  7 21:12:10 2010" -->
<!-- isoreceived="20100708011210" -->
<!-- sent="Thu, 8 Jul 2010 09:11:45 +0800" -->
<!-- isosent="20100708011145" -->
<!-- name="Changsheng Jiang" -->
<!-- email="jiangzuoyan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_GET beyond 2 GB displacement" -->
<!-- id="AANLkTikvcu-zPpei-4UepxS2ZU4yTAajBPStSm2MslqQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="1B835886-DABC-4C3F-AABC-6E19177E9DB4_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_GET beyond 2 GB displacement<br>
<strong>From:</strong> Changsheng Jiang (<em>jiangzuoyan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-07 21:11:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13527.php">Jed Brown: "Re: [OMPI users] EXTERNAL: Re:  MPI_GET beyond 2 GB displacement"</a>
<li><strong>Previous message:</strong> <a href="13525.php">David Zhang: "Re: [OMPI users] Open MPI error MPI_ERR_TRUNCATE: message truncated"</a>
<li><strong>In reply to:</strong> <a href="13511.php">Jeff Squyres: "Re: [OMPI users] MPI_GET beyond 2 GB displacement"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Does it means we have to split the MPI_Get to many 2GB parts?
<br>
<p>I have a MPI programm which first serialize a object, sending to other
<br>
process. The char array after serialize is just below 2GB now, but the data
<br>
is increasing.
<br>
<p>One method is to build a large type with MPI_Type_vector, align the char
<br>
array to the upper bound. Send and Recv using the created large size type. I
<br>
think this is better than split send and recv.
<br>
<p>Is there any graceful methods to avoid the problem? Or, I think, using
<br>
size_t(or ssize_t) as the length parameters is more reasonable in new mpi
<br>
implementation?
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Changsheng Jiang
<br>
<p><p>On Thu, Jul 8, 2010 at 01:39, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Sorry for the delay in replying.  :-(
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It's because for a 32 bit signed int, at 2GB, the value turns negative.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 29, 2010, at 1:46 PM, Price, Brian M (N-KCI) wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; OpenMPI version: 1.3.3
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Platform: IBM P5
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Built OpenMPI 64-bit (i.e., CFLAGS=-q64, CXXFLAGS=-q64, -FFLAGS=-q64,
</span><br>
<span class="quotelev1">&gt; -FCFLAGS=-q64)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; FORTRAN 90 test program:
</span><br>
<span class="quotelev2">&gt; &gt; -          Create a large array (3.6 GB of 32-bit INTs)
</span><br>
<span class="quotelev2">&gt; &gt; -          Initialize MPI
</span><br>
<span class="quotelev2">&gt; &gt; -          Create a large window to encompass large array (3.6 GB)
</span><br>
<span class="quotelev2">&gt; &gt; -          Have PE 0 get 1 32-bit INT from PE1
</span><br>
<span class="quotelev2">&gt; &gt; o   Lock the window
</span><br>
<span class="quotelev2">&gt; &gt; o   MPI_GET
</span><br>
<span class="quotelev2">&gt; &gt; o   Unlock the window
</span><br>
<span class="quotelev2">&gt; &gt; -          Free the window
</span><br>
<span class="quotelev2">&gt; &gt; -          Finalize MPI
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Built FORTRAN 90 test program 64-bit using OpenMPI wrapper compiler
</span><br>
<span class="quotelev1">&gt; (mpif90 &#226;&#128;&#147;q64).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Why would this MPI_GET work fine with displacements all the way up to
</span><br>
<span class="quotelev1">&gt; just under 2 GB, and then fail as soon as the displacement hits 2 GB?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The MPI_GET succeeds with a displacement of 2147483644 (4 bytes less than
</span><br>
<span class="quotelev1">&gt; 2 GB).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I get a segmentation fault (address not mapped) when the displacement is
</span><br>
<span class="quotelev1">&gt; 2147483648 (2 GB) or larger.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13526/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13527.php">Jed Brown: "Re: [OMPI users] EXTERNAL: Re:  MPI_GET beyond 2 GB displacement"</a>
<li><strong>Previous message:</strong> <a href="13525.php">David Zhang: "Re: [OMPI users] Open MPI error MPI_ERR_TRUNCATE: message truncated"</a>
<li><strong>In reply to:</strong> <a href="13511.php">Jeff Squyres: "Re: [OMPI users] MPI_GET beyond 2 GB displacement"</a>
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
