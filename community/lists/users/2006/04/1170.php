<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Apr 30 19:37:49 2006" -->
<!-- isoreceived="20060430233749" -->
<!-- sent="Sun, 30 Apr 2006 19:37:48 -0400" -->
<!-- isosent="20060430233748" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Default number of slots when using Torque" -->
<!-- id="99BFD841-57C1-4567-9071-D027B30DA9BB_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="754FC8FE0A97A94B906344259F447D4A017982B7_at_ES23SNLNT.srn.sandia.gov" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-04-30 19:37:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/05/1171.php">Amit Schreiber: "[OMPI users] MPI_Open_port returns port 0.0.0:2000"</a>
<li><strong>Previous message:</strong> <a href="1169.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Default number of slots when using Torque"</a>
<li><strong>In reply to:</strong> <a href="1167.php">Ogden, Jeffry Brandon: "[OMPI users] Default number of slots when using Torque"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 28, 2006, at 6:19 PM, Ogden, Jeffry Brandon wrote:
<br>
<p><span class="quotelev1">&gt; How does the orterun launch determine the default number of slots per
</span><br>
<span class="quotelev1">&gt; node when running in a Torque job?  Is there debug output from orterun
</span><br>
<span class="quotelev1">&gt; that will show me this?
</span><br>
<p>The default number of slots will be the number of &quot;cpus&quot; assigned by  
<br>
Torque, which with every version of Torque I've seen, is the number  
<br>
of times that host is listed in $PBS_NODEFILE (although we get the  
<br>
information through a different mechanism).
<br>
<p>It appears that we don't have a good way to feed that information  
<br>
back to the user through a debugging flag or anything like that,  
<br>
although we probably should add that feature at some point.
<br>
<p><p>Brian
<br>
<p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/05/1171.php">Amit Schreiber: "[OMPI users] MPI_Open_port returns port 0.0.0:2000"</a>
<li><strong>Previous message:</strong> <a href="1169.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Default number of slots when using Torque"</a>
<li><strong>In reply to:</strong> <a href="1167.php">Ogden, Jeffry Brandon: "[OMPI users] Default number of slots when using Torque"</a>
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
