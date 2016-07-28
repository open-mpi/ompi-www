<?
$subject_val = "Re: [OMPI users] One-sided communication, a missing/non-existing API call";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 14 15:01:47 2015" -->
<!-- isoreceived="20150414190147" -->
<!-- sent="Tue, 14 Apr 2015 21:01:01 +0200" -->
<!-- isosent="20150414190101" -->
<!-- name="Nick Papior Andersen" -->
<!-- email="nickpapior_at_[hidden]" -->
<!-- subject="Re: [OMPI users] One-sided communication, a missing/non-existing API call" -->
<!-- id="CAAbhqc4t6uh+gaaQAYgP3V-agCATaULvmbAwufTmqEuc-iZ=xA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="20150414185724.GC21644_at_pn1246003.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] One-sided communication, a missing/non-existing API call<br>
<strong>From:</strong> Nick Papior Andersen (<em>nickpapior_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-14 15:01:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26729.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Running mpi with different account"</a>
<li><strong>Previous message:</strong> <a href="26727.php">Nick Papior Andersen: "Re: [OMPI users] One-sided communication, a missing/non-existing API call"</a>
<li><strong>In reply to:</strong> <a href="26726.php">Nathan Hjelm: "Re: [OMPI users] One-sided communication, a missing/non-existing API call"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear,
<br>
<p>Thanks for the clarification.
<br>
<p>2015-04-14 20:57 GMT+02:00 Nathan Hjelm &lt;hjelmn_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The semantics of open shmem's fetching atomics is the same as
</span><br>
<span class="quotelev1">&gt; MPI_Get_accumulate. The old value is returned *not* the new value. This
</span><br>
<span class="quotelev1">&gt; is not an uncommon semantic for atomic operations. So, no, I don't think
</span><br>
<span class="quotelev1">&gt; oshmem will be any better than MPI RMA for this use case.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To OP. Yes, you will have to either apply the reduction locally or
</span><br>
<span class="quotelev1">&gt; perform an MPI_Get if you are interested in the new value at the target
</span><br>
<span class="quotelev1">&gt; process on the origin process.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Apr 14, 2015 at 02:41:27PM -0400, Andy Riebs wrote:
</span><br>
<span class="quotelev2">&gt; &gt;    Nick,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    You may have more luck looking into the OSHMEM layer of Open MPI;
</span><br>
<span class="quotelev1">&gt; SHMEM is
</span><br>
<span class="quotelev2">&gt; &gt;    designed for one-sided communications.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    BR,
</span><br>
<span class="quotelev2">&gt; &gt;    Andy
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    On 04/14/2015 02:36 PM, Nick Papior Andersen wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      Dear all,
</span><br>
<span class="quotelev2">&gt; &gt;      I am trying to implement some features using a one-sided
</span><br>
<span class="quotelev1">&gt; communication
</span><br>
<span class="quotelev2">&gt; &gt;      scheme.
</span><br>
<span class="quotelev2">&gt; &gt;      The problem is that I understand the different one-sided
</span><br>
<span class="quotelev1">&gt; communication
</span><br>
<span class="quotelev2">&gt; &gt;      schemes as this (basic words):
</span><br>
<span class="quotelev2">&gt; &gt;      MPI_Get)
</span><br>
<span class="quotelev2">&gt; &gt;      fetches remote window memory to a local memory space
</span><br>
<span class="quotelev2">&gt; &gt;      MPI_Get_Accumulate)
</span><br>
<span class="quotelev2">&gt; &gt;      1. fetches remote window memory to a local memory space
</span><br>
<span class="quotelev2">&gt; &gt;      2. sends a local memory space (different from that used in 1.) to
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev2">&gt; &gt;      remote window and does OP on those two quantities
</span><br>
<span class="quotelev2">&gt; &gt;      MPI_Put)
</span><br>
<span class="quotelev2">&gt; &gt;      sends local memory space to remote window memory
</span><br>
<span class="quotelev2">&gt; &gt;      MPI_Accumulate)
</span><br>
<span class="quotelev2">&gt; &gt;      sends a local memory space to the remote window and does OP on
</span><br>
<span class="quotelev1">&gt; those two
</span><br>
<span class="quotelev2">&gt; &gt;      quantities
</span><br>
<span class="quotelev2">&gt; &gt;      (surprisingly the documentation says that this only works with
</span><br>
<span class="quotelev1">&gt; windows
</span><br>
<span class="quotelev2">&gt; &gt;      within the same node, note that MPI_Get_Accumulate does not say this
</span><br>
<span class="quotelev2">&gt; &gt;      constraint)
</span><br>
<span class="quotelev2">&gt; &gt;      ?)
</span><br>
<span class="quotelev2">&gt; &gt;      Where is the function that fetches remotely and does operation in a
</span><br>
<span class="quotelev2">&gt; &gt;      local memory space?
</span><br>
<span class="quotelev2">&gt; &gt;      Do I really have to do MPI_Get to local memory, then do operation
</span><br>
<span class="quotelev2">&gt; &gt;      manually? (no it is not difficult, but... ;) )
</span><br>
<span class="quotelev2">&gt; &gt;      I would like this to exist:
</span><br>
<span class="quotelev2">&gt; &gt;      MPI_Get_Reduce(origin,...,target,...,MPI_OP,...)
</span><br>
<span class="quotelev2">&gt; &gt;      When I just looked at the API names I thought Get_Accumulate did
</span><br>
<span class="quotelev1">&gt; this,
</span><br>
<span class="quotelev2">&gt; &gt;      but to my surprise that was not the case at all. :)
</span><br>
<span class="quotelev2">&gt; &gt;      --
</span><br>
<span class="quotelev2">&gt; &gt;      Kind regards Nick
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;  users mailing list
</span><br>
<span class="quotelev2">&gt; &gt;  users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;  Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;  Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/04/26723.php">http://www.open-mpi.org/community/lists/users/2015/04/26723.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/04/26724.php">http://www.open-mpi.org/community/lists/users/2015/04/26724.php</a>
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/04/26726.php">http://www.open-mpi.org/community/lists/users/2015/04/26726.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Kind regards Nick
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26728/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26729.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Running mpi with different account"</a>
<li><strong>Previous message:</strong> <a href="26727.php">Nick Papior Andersen: "Re: [OMPI users] One-sided communication, a missing/non-existing API call"</a>
<li><strong>In reply to:</strong> <a href="26726.php">Nathan Hjelm: "Re: [OMPI users] One-sided communication, a missing/non-existing API call"</a>
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
