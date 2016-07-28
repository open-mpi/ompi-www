<?
$subject_val = "Re: [OMPI users] execuation time is not stable with 2 processes";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug  4 11:41:50 2010" -->
<!-- isoreceived="20100804154150" -->
<!-- sent="Wed, 04 Aug 2010 08:40:00 -0700" -->
<!-- isosent="20100804154000" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] execuation time is not stable with 2 processes" -->
<!-- id="4C5989D0.9050302_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="885142.65030.qm_at_web56202.mail.re3.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] execuation time is not stable with 2 processes<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-04 11:40:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13912.php">Terry Dontje: "Re: [OMPI users] OpenIB Error in ibv_create_srq"</a>
<li><strong>Previous message:</strong> <a href="13910.php">Allen Barnett: "Re: [OMPI users] OpenIB Error in ibv_create_srq"</a>
<li><strong>In reply to:</strong> <a href="13905.php">Tad Lake: "[OMPI users] execuation time is not stable with 2 processes"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Tad Lake wrote:
<br>
<p><span class="quotelev1">&gt;I run it :
</span><br>
<span class="quotelev1">&gt;  mpirun -np 2 --host node2 ./a.out
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;But the result of time is not stable with difference of 100 times. For example, the max value of time can be 3000, meanwhile the min is 100.
</span><br>
<span class="quotelev1">&gt;
</span><br>
Again, know what results to expect.  Is 3000 a reasonable time and 100 
<br>
too fast?  Or, is 100 a reasonable time and 3000 too slow?  Or other?  
<br>
The expected result should depend on the number of messages (2000), the 
<br>
size of a message (40Kbyte), and the interconnect (apparently shared 
<br>
memory even though you have openib).  2000 messages should take at least 
<br>
thousands of microseconds and when the messages are 40 Kbyte each even 
<br>
longer.
<br>
<p>Try running the timing loop multiple times per program invocation and 
<br>
using MPI_Wtime() for your timer.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13912.php">Terry Dontje: "Re: [OMPI users] OpenIB Error in ibv_create_srq"</a>
<li><strong>Previous message:</strong> <a href="13910.php">Allen Barnett: "Re: [OMPI users] OpenIB Error in ibv_create_srq"</a>
<li><strong>In reply to:</strong> <a href="13905.php">Tad Lake: "[OMPI users] execuation time is not stable with 2 processes"</a>
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
