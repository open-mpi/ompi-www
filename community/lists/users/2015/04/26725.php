<?
$subject_val = "Re: [OMPI users] One-sided communication, a missing/non-existing API call";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 14 14:50:59 2015" -->
<!-- isoreceived="20150414185059" -->
<!-- sent="Tue, 14 Apr 2015 20:50:20 +0200" -->
<!-- isosent="20150414185020" -->
<!-- name="Nick Papior Andersen" -->
<!-- email="nickpapior_at_[hidden]" -->
<!-- subject="Re: [OMPI users] One-sided communication, a missing/non-existing API call" -->
<!-- id="CAAbhqc698CDMuon+EN8s4YX6rd4sbZ+7tZ4p4E=+cZ46hTS1Pg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="552D5F57.8000907_at_hp.com" -->
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
<strong>Date:</strong> 2015-04-14 14:50:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26726.php">Nathan Hjelm: "Re: [OMPI users] One-sided communication, a missing/non-existing API call"</a>
<li><strong>Previous message:</strong> <a href="26724.php">Andy Riebs: "Re: [OMPI users] One-sided communication, a missing/non-existing API call"</a>
<li><strong>In reply to:</strong> <a href="26724.php">Andy Riebs: "Re: [OMPI users] One-sided communication, a missing/non-existing API call"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26727.php">Nick Papior Andersen: "Re: [OMPI users] One-sided communication, a missing/non-existing API call"</a>
<li><strong>Reply:</strong> <a href="26727.php">Nick Papior Andersen: "Re: [OMPI users] One-sided communication, a missing/non-existing API call"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Andy! I will discontinue my hunt in openmpi then ;)
<br>
<p>Isn't SHMEM related only to shared memory nodes?
<br>
Or am I wrong?
<br>
<p>2015-04-14 20:41 GMT+02:00 Andy Riebs &lt;andy.riebs_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt;  Nick,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You may have more luck looking into the OSHMEM layer of Open MPI; SHMEM is
</span><br>
<span class="quotelev1">&gt; designed for one-sided communications.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; BR,
</span><br>
<span class="quotelev1">&gt; Andy
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 04/14/2015 02:36 PM, Nick Papior Andersen wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dear all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I am trying to implement some features using a one-sided communication
</span><br>
<span class="quotelev1">&gt; scheme.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  The problem is that I understand the different one-sided communication
</span><br>
<span class="quotelev1">&gt; schemes as this (basic words):
</span><br>
<span class="quotelev1">&gt; MPI_Get)
</span><br>
<span class="quotelev1">&gt; fetches remote window memory to a local memory space
</span><br>
<span class="quotelev1">&gt; MPI_Get_Accumulate)
</span><br>
<span class="quotelev1">&gt; 1. fetches remote window memory to a local memory space
</span><br>
<span class="quotelev1">&gt; 2. sends a local memory space (different from that used in 1.) to the
</span><br>
<span class="quotelev1">&gt; remote window and does OP on those two quantities
</span><br>
<span class="quotelev1">&gt; MPI_Put)
</span><br>
<span class="quotelev1">&gt; sends local memory space to remote window memory
</span><br>
<span class="quotelev1">&gt; MPI_Accumulate)
</span><br>
<span class="quotelev1">&gt; sends a local memory space to the remote window and does OP on those two
</span><br>
<span class="quotelev1">&gt; quantities
</span><br>
<span class="quotelev1">&gt;  (surprisingly the documentation says that this only works with windows
</span><br>
<span class="quotelev1">&gt; within the same node, note that MPI_Get_Accumulate does not say this
</span><br>
<span class="quotelev1">&gt; constraint)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  ?)
</span><br>
<span class="quotelev1">&gt; Where is the function that fetches remotely and does operation in a local
</span><br>
<span class="quotelev1">&gt; memory space?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Do I really have to do MPI_Get to local memory, then do operation
</span><br>
<span class="quotelev1">&gt; manually? (no it is not difficult, but... ;) )
</span><br>
<span class="quotelev1">&gt; I would like this to exist:
</span><br>
<span class="quotelev1">&gt; MPI_Get_Reduce(origin,...,target,...,MPI_OP,...)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  When I just looked at the API names I thought Get_Accumulate did this,
</span><br>
<span class="quotelev1">&gt; but to my surprise that was not the case at all. :)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  --
</span><br>
<span class="quotelev1">&gt;  Kind regards Nick
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing listusers_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/04/26723.php">http://www.open-mpi.org/community/lists/users/2015/04/26723.php</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/04/26724.php">http://www.open-mpi.org/community/lists/users/2015/04/26724.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Kind regards Nick
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26725/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26726.php">Nathan Hjelm: "Re: [OMPI users] One-sided communication, a missing/non-existing API call"</a>
<li><strong>Previous message:</strong> <a href="26724.php">Andy Riebs: "Re: [OMPI users] One-sided communication, a missing/non-existing API call"</a>
<li><strong>In reply to:</strong> <a href="26724.php">Andy Riebs: "Re: [OMPI users] One-sided communication, a missing/non-existing API call"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26727.php">Nick Papior Andersen: "Re: [OMPI users] One-sided communication, a missing/non-existing API call"</a>
<li><strong>Reply:</strong> <a href="26727.php">Nick Papior Andersen: "Re: [OMPI users] One-sided communication, a missing/non-existing API call"</a>
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
