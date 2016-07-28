<?
$subject_val = "[OMPI users] One-sided communication, a missing/non-existing API call";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 14 14:37:36 2015" -->
<!-- isoreceived="20150414183736" -->
<!-- sent="Tue, 14 Apr 2015 20:36:54 +0200" -->
<!-- isosent="20150414183654" -->
<!-- name="Nick Papior Andersen" -->
<!-- email="nickpapior_at_[hidden]" -->
<!-- subject="[OMPI users] One-sided communication, a missing/non-existing API call" -->
<!-- id="CAAbhqc6R=vRvonLcWEqNBxhPMAeLf43OQOXhY9qkFCp8U27NFw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] One-sided communication, a missing/non-existing API call<br>
<strong>From:</strong> Nick Papior Andersen (<em>nickpapior_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-14 14:36:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26724.php">Andy Riebs: "Re: [OMPI users] One-sided communication, a missing/non-existing API call"</a>
<li><strong>Previous message:</strong> <a href="26722.php">Ralph Castain: "Re: [OMPI users] 1.8.4 behaves completely different from 1.6.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26724.php">Andy Riebs: "Re: [OMPI users] One-sided communication, a missing/non-existing API call"</a>
<li><strong>Reply:</strong> <a href="26724.php">Andy Riebs: "Re: [OMPI users] One-sided communication, a missing/non-existing API call"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all,
<br>
<p>I am trying to implement some features using a one-sided communication
<br>
scheme.
<br>
<p>The problem is that I understand the different one-sided communication
<br>
schemes as this (basic words):
<br>
MPI_Get)
<br>
fetches remote window memory to a local memory space
<br>
MPI_Get_Accumulate)
<br>
1. fetches remote window memory to a local memory space
<br>
2. sends a local memory space (different from that used in 1.) to the
<br>
remote window and does OP on those two quantities
<br>
MPI_Put)
<br>
sends local memory space to remote window memory
<br>
MPI_Accumulate)
<br>
sends a local memory space to the remote window and does OP on those two
<br>
quantities
<br>
(surprisingly the documentation says that this only works with windows
<br>
within the same node, note that MPI_Get_Accumulate does not say this
<br>
constraint)
<br>
<p>?)
<br>
Where is the function that fetches remotely and does operation in a local
<br>
memory space?
<br>
<p>Do I really have to do MPI_Get to local memory, then do operation manually?
<br>
(no it is not difficult, but... ;) )
<br>
I would like this to exist:
<br>
MPI_Get_Reduce(origin,...,target,...,MPI_OP,...)
<br>
<p>When I just looked at the API names I thought Get_Accumulate did this, but
<br>
to my surprise that was not the case at all. :)
<br>
<p><pre>
-- 
Kind regards Nick
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26723/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26724.php">Andy Riebs: "Re: [OMPI users] One-sided communication, a missing/non-existing API call"</a>
<li><strong>Previous message:</strong> <a href="26722.php">Ralph Castain: "Re: [OMPI users] 1.8.4 behaves completely different from 1.6.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26724.php">Andy Riebs: "Re: [OMPI users] One-sided communication, a missing/non-existing API call"</a>
<li><strong>Reply:</strong> <a href="26724.php">Andy Riebs: "Re: [OMPI users] One-sided communication, a missing/non-existing API call"</a>
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
