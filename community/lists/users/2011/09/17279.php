<?
$subject_val = "Re: [OMPI users] Flow control in OMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 13 22:53:36 2011" -->
<!-- isoreceived="20110914025336" -->
<!-- sent="Tue, 13 Sep 2011 23:53:31 -0300" -->
<!-- isosent="20110914025331" -->
<!-- name="Rodrigo Silva Oliveira" -->
<!-- email="rsilva_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Flow control in OMPI" -->
<!-- id="CABm3_qqfZyiwAFA3Ei1M1pSK4hRWv-DiSitE0Ra2rwuKJTN--Q_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="B80662E7-8458-48AF-A974-122CD5C6AAD4_at_cisco.com" -->
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
<strong>From:</strong> Rodrigo Silva Oliveira (<em>rsilva_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-13 22:53:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17280.php">devendra rai: "Re: [OMPI users] Question on MPI_Ssend"</a>
<li><strong>Previous message:</strong> <a href="17278.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re:  Problem running under SGE"</a>
<li><strong>In reply to:</strong> <a href="17162.php">Jeff Squyres: "Re: [OMPI users] Flow control in OMPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev2">&gt;&gt; Are you overwhelming the receiver with short, unexpected messages such
</span><br>
that MPI keeps mallocing &gt;&gt; and mallocing and mallocing in an attempt to
<br>
eagerly receive all the messages?  I ask because Open &gt;&gt; MPI only eagerly
<br>
sends short messages -- long messages are queued up at the sender and not
<br>
<span class="quotelev2">&gt;&gt; actually transferred until the receiver starts to receive (aka a
</span><br>
&quot;rendezvous protocol&quot;).
<br>
<p>This is probably what is happening. In general, my processes send a massive
<br>
number of short messages and it is overwhelming the receivers. As I have
<br>
some stage of computation (processes) much slower than others, the first
<br>
ones can not handle the incoming messages in the same rate they are
<br>
delivered to them.
<br>
<p><span class="quotelev2">&gt;&gt; Are you sure that you don't have some other kind of memory error in your
</span><br>
application?
<br>
<p>I have checked and there are not memory problems within the application.
<br>
<p><span class="quotelev2">&gt;&gt; FWIW, you can use MPI_SSEND to do a &quot;synchronous&quot; send, which means that
</span><br>
it won't complete &gt;&gt; until the receiver has started to receive the message.
<br>
&nbsp;This may slow your sender down dramatically, &gt;&gt; however.  If it slows down
<br>
your sender too much, you may have to implement your own flow control.
<br>
<p>MPI_SSEND worked for my application and I did not have the problem, but as
<br>
you said, it slows the senders. A better solution was implement my own flow
<br>
control, as suggested. I have implemented a simple credit-based flow control
<br>
scheme and it solved my problem.
<br>
<p>Thanks a lot for the explanation and suggestions.
<br>
<p>On Tue, Sep 6, 2011 at 9:43 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Are you overwhelming the receiver with short, unexpected messages such that
</span><br>
<span class="quotelev1">&gt; MPI keeps mallocing and mallocing and mallocing in an attempt to eagerly
</span><br>
<span class="quotelev1">&gt; receive all the messages?  I ask because Open MPI only eagerly sends short
</span><br>
<span class="quotelev1">&gt; messages -- long messages are queued up at the sender and not actually
</span><br>
<span class="quotelev1">&gt; transferred until the receiver starts to receive (aka a &quot;rendezvous
</span><br>
<span class="quotelev1">&gt; protocol&quot;).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; While that *can* happen, I'd be a little surprised if it did.  Indeed, it
</span><br>
<span class="quotelev1">&gt; would probably take a little while for that to happen (i.e., the time
</span><br>
<span class="quotelev1">&gt; necessary for the receiver to malloc a small amount N times, where N is
</span><br>
<span class="quotelev1">&gt; large enough to exhaust the virtual memory on your machine, coupled with all
</span><br>
<span class="quotelev1">&gt; the time delay to page out all the old memory and page in on-demand as Open
</span><br>
<span class="quotelev1">&gt; MPI scans for new incoming matches... this could be pretty darn slow).  Is
</span><br>
<span class="quotelev1">&gt; that what is happening?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Are you sure that you don't have some other kind of memory error in your
</span><br>
<span class="quotelev1">&gt; application?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FWIW, you can use MPI_SSEND to do a &quot;synchronous&quot; send, which means that it
</span><br>
<span class="quotelev1">&gt; won't complete until the receiver has started to receive the message.  This
</span><br>
<span class="quotelev1">&gt; may slow your sender down dramatically, however.  If it slows down your
</span><br>
<span class="quotelev1">&gt; sender too much, you may have to implement your own flow control.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 25, 2011, at 10:58 PM, Rodrigo Oliveira wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi there,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am facing some problems in an Open MPI application. Part of the
</span><br>
<span class="quotelev1">&gt; application is composed by a sender and a receiver. The problem is that the
</span><br>
<span class="quotelev1">&gt; sender is so much faster than the receiver, what causes the receiver's
</span><br>
<span class="quotelev1">&gt; memory to be completely used, aborting the application.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I would like to know if there is a flow control scheme implemented in
</span><br>
<span class="quotelev1">&gt; open mpi or if this issue have to be treated at the user application's
</span><br>
<span class="quotelev1">&gt; layer. If exists, how it works and how can I use it in my application?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I did some research about this subject, but I did not find a conclusive
</span><br>
<span class="quotelev1">&gt; explanation.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks a lot.
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17279/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17280.php">devendra rai: "Re: [OMPI users] Question on MPI_Ssend"</a>
<li><strong>Previous message:</strong> <a href="17278.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re:  Problem running under SGE"</a>
<li><strong>In reply to:</strong> <a href="17162.php">Jeff Squyres: "Re: [OMPI users] Flow control in OMPI"</a>
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
