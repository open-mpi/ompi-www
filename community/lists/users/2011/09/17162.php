<?
$subject_val = "Re: [OMPI users] Flow control in OMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  6 08:43:42 2011" -->
<!-- isoreceived="20110906124342" -->
<!-- sent="Tue, 6 Sep 2011 08:43:35 -0400" -->
<!-- isosent="20110906124335" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Flow control in OMPI" -->
<!-- id="B80662E7-8458-48AF-A974-122CD5C6AAD4_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CABm3_qpNuzTgm_3RMNrTmeUWXvGpgWLtu=OcwFdx=at9BiaYyQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Flow control in OMPI<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-06 08:43:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17163.php">Jeff Squyres: "Re: [OMPI users] Bug in openmpi 1.5.4 in paffinity"</a>
<li><strong>Previous message:</strong> <a href="17161.php">Shiqing Fan: "Re: [OMPI users] Mingw - Gfortran - Cmake : 'gettimeofday'"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/08/17107.php">Rodrigo Oliveira: "[OMPI users] Flow control in OMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17279.php">Rodrigo Silva Oliveira: "Re: [OMPI users] Flow control in OMPI"</a>
<li><strong>Reply:</strong> <a href="17279.php">Rodrigo Silva Oliveira: "Re: [OMPI users] Flow control in OMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Are you overwhelming the receiver with short, unexpected messages such that MPI keeps mallocing and mallocing and mallocing in an attempt to eagerly receive all the messages?  I ask because Open MPI only eagerly sends short messages -- long messages are queued up at the sender and not actually transferred until the receiver starts to receive (aka a &quot;rendezvous protocol&quot;).  
<br>
<p>While that *can* happen, I'd be a little surprised if it did.  Indeed, it would probably take a little while for that to happen (i.e., the time necessary for the receiver to malloc a small amount N times, where N is large enough to exhaust the virtual memory on your machine, coupled with all the time delay to page out all the old memory and page in on-demand as Open MPI scans for new incoming matches... this could be pretty darn slow).  Is that what is happening?
<br>
<p>Are you sure that you don't have some other kind of memory error in your application?
<br>
<p>FWIW, you can use MPI_SSEND to do a &quot;synchronous&quot; send, which means that it won't complete until the receiver has started to receive the message.  This may slow your sender down dramatically, however.  If it slows down your sender too much, you may have to implement your own flow control.
<br>
<p><p>On Aug 25, 2011, at 10:58 PM, Rodrigo Oliveira wrote:
<br>
<p><span class="quotelev1">&gt; Hi there,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am facing some problems in an Open MPI application. Part of the application is composed by a sender and a receiver. The problem is that the sender is so much faster than the receiver, what causes the receiver's memory to be completely used, aborting the application.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I would like to know if there is a flow control scheme implemented in open mpi or if this issue have to be treated at the user application's layer. If exists, how it works and how can I use it in my application?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I did some research about this subject, but I did not find a conclusive explanation.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks a lot.
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
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17163.php">Jeff Squyres: "Re: [OMPI users] Bug in openmpi 1.5.4 in paffinity"</a>
<li><strong>Previous message:</strong> <a href="17161.php">Shiqing Fan: "Re: [OMPI users] Mingw - Gfortran - Cmake : 'gettimeofday'"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/08/17107.php">Rodrigo Oliveira: "[OMPI users] Flow control in OMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17279.php">Rodrigo Silva Oliveira: "Re: [OMPI users] Flow control in OMPI"</a>
<li><strong>Reply:</strong> <a href="17279.php">Rodrigo Silva Oliveira: "Re: [OMPI users] Flow control in OMPI"</a>
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
