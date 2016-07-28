<?
$subject_val = "Re: [OMPI users] How to check if Send was made or not before performing a recv";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Dec 12 18:50:23 2010" -->
<!-- isoreceived="20101212235023" -->
<!-- sent="Sun, 12 Dec 2010 18:50:18 -0500" -->
<!-- isosent="20101212235018" -->
<!-- name="Alaukik Aggarwal" -->
<!-- email="alaukik.aggarwal_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to check if Send was made or not before performing a recv" -->
<!-- id="AANLkTin=KnpzQeo_kWARwdsAtJjWCSPzrX-nf2TTvxrA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4D046953.9010506_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] How to check if Send was made or not before performing a recv<br>
<strong>From:</strong> Alaukik Aggarwal (<em>alaukik.aggarwal_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-12 18:50:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15090.php">Daofeng Li: "Re: [OMPI users] error mesages appeared but program runs successfully?"</a>
<li><strong>Previous message:</strong> <a href="15088.php">jody: "Re: [OMPI users] Guaranteed run rank 0 on a given machine?"</a>
<li><strong>In reply to:</strong> <a href="15087.php">Eugene Loh: "Re: [OMPI users] How to check if Send was made or not before performing a recv"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I was talking about functionality of MPI_Iprobe only.
<br>
<p>Thanks :)
<br>
<p>On Sun, Dec 12, 2010 at 1:18 AM, Eugene Loh &lt;eugene.loh_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Alaukik Aggarwal wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for your reply. I used this to solve the problem.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But I think there should be an in-built construct for this.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What would such a construct look like? &#160;If you need information from the
</span><br>
<span class="quotelev1">&gt; remote processes, they need to send messages (in the two-sided model). &#160;If
</span><br>
<span class="quotelev1">&gt; you want to time out after a while, you can have MPI_Iprobe() checks for
</span><br>
<span class="quotelev1">&gt; in-coming messages and then give up after some period of time. &#160;I just don't
</span><br>
<span class="quotelev1">&gt; know what you'd be looking for.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you have concrete ideas you would really want, you should address them to
</span><br>
<span class="quotelev1">&gt; the MPI Forum, which is in charge of defining MPI calls.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sat, Dec 11, 2010 at 10:28 AM, Eugene Loh &lt;eugene.loh_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Alaukik Aggarwal wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I am using Open MPI 1.4.3.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I have to perform a receive operation from processes that are sending
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; data. It might happen that some of the processes don't send data
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (might have completed in-fact).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; So, how do I perform check on which processes to receive data from and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; which processes to skip?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [code]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; if(id != master)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#160; &#160; MPI::COMM_WORLD.Send(&amp;dist, NUM_VERTEX, MPI_LONG, master, 1234);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; if(id == master)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#160; &#160; for(int eachId = 1; eachId&lt;procs ; eachId++)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#160; &#160; MPI::COMM_WORLD.Recv(&amp;dist1, NUM_VERTEX, MPI_LONG, eachId, 1234);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [/code]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15090.php">Daofeng Li: "Re: [OMPI users] error mesages appeared but program runs successfully?"</a>
<li><strong>Previous message:</strong> <a href="15088.php">jody: "Re: [OMPI users] Guaranteed run rank 0 on a given machine?"</a>
<li><strong>In reply to:</strong> <a href="15087.php">Eugene Loh: "Re: [OMPI users] How to check if Send was made or not before performing a recv"</a>
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
