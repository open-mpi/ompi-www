<?
$subject_val = "Re: [OMPI users] Message queue in MPI?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  2 19:00:37 2013" -->
<!-- isoreceived="20130502230037" -->
<!-- sent="Thu, 2 May 2013 19:00:31 -0400" -->
<!-- isosent="20130502230031" -->
<!-- name="Aur&#233;lien Bouteiller" -->
<!-- email="bouteill_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Message queue in MPI?" -->
<!-- id="9F3BBB90-DCBA-48A6-9BB2-DD6300A1C787_at_icl.utk.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CABftzeiUTsZO2BseuRdDQAsEL8q056UhaQ6MW8oQp=3ZKG5Trg_at_mail.gmail.com" -->
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
<strong>From:</strong> Aur&#233;lien Bouteiller (<em>bouteill_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-02 19:00:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21838.php">Stefan Friedel: "[OMPI users] libtool *.la files with references to install dir"</a>
<li><strong>Previous message:</strong> <a href="21836.php">John Chludzinski: "Re: [OMPI users] Message queue in MPI?"</a>
<li><strong>In reply to:</strong> <a href="21836.php">John Chludzinski: "Re: [OMPI users] Message queue in MPI?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
John, 
<br>
<p>there is no buffering in MPI messages (ok, some internal buffering may happen, but it is intentionally reduced to a minimum). 
<br>
<p>An MPI_Send blocks until the output buffer can be reused. That means that for large messages, it will block at least until the matching receive is posted, and approximately until the transfer is complete. 
<br>
<p><p>You may want to look at Bsend and MPI_Buffer_attach, but do not go there, except if you really feel a need for it, this is detrimental to performance.
<br>
<p>Aurelien 
<br>
<p>Le 2 mai 2013 &#224; 15:28, John Chludzinski &lt;john.chludzinski_at_[hidden]&gt; a &#233;crit :
<br>
<p><span class="quotelev1">&gt; I assume there are setting for this?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, May 2, 2013 at 3:23 PM, John Chludzinski &lt;john.chludzinski_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; If I'm using MPI_Send(...) and MPI_Recv(...) in a producer/consumer
</span><br>
<span class="quotelev1">&gt; model and choose not to buffer messages internally (in the app),
</span><br>
<span class="quotelev1">&gt; allowing them to acumulate in the MPI layer, how large of an MPI
</span><br>
<span class="quotelev1">&gt; message queue can I expect before something breaks?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ---John
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
<p><pre>
--
* Dr. Aur&#233;lien Bouteiller
* Researcher at Innovative Computing Laboratory
* University of Tennessee
* 1122 Volunteer Boulevard, suite 309b
* Knoxville, TN 37996
* 865 974 9375
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21838.php">Stefan Friedel: "[OMPI users] libtool *.la files with references to install dir"</a>
<li><strong>Previous message:</strong> <a href="21836.php">John Chludzinski: "Re: [OMPI users] Message queue in MPI?"</a>
<li><strong>In reply to:</strong> <a href="21836.php">John Chludzinski: "Re: [OMPI users] Message queue in MPI?"</a>
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
