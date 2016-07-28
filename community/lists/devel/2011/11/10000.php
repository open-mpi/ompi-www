<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25476";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 18 12:13:41 2011" -->
<!-- isoreceived="20111118171341" -->
<!-- sent="Fri, 18 Nov 2011 09:13:37 -0800" -->
<!-- isosent="20111118171337" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r25476" -->
<!-- id="800590CB-8A64-4C67-8C95-290A1336ABA3_at_eecs.utk.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="9CEE221F-0BF1-430F-8FB5-DA3F0A0D69FA_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r25476<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-18 12:13:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10001.php">George Bosilca: "Re: [OMPI devel] Retrying a MPI_SEND"</a>
<li><strong>Previous message:</strong> <a href="9999.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25476"</a>
<li><strong>In reply to:</strong> <a href="9999.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25476"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 18, 2011, at 07:49 , Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; That's a condition which should never be reached, but just to be safe, I have added a &quot;bozo check&quot; that will cause the routine to error out with a message if that situation occurs. I have tried everything - hostfile, dash-host, bizarre combinations of hosts, etc. - and been unable to replicate your described problem.
</span><br>
<p>What I see is that the impossible happened. Every run, consistently and only after the commit r25476. Anyway, this is now fixed by commit r25492. Feel free to remove the bozo check, it sounds very weird to expose that to our users.
<br>
<p><span class="quotelev2">&gt;&gt; Moreover, reading the comments in this file, FREAK me out, as apparently each mapper is allowed to have a different behavior&#133; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Not sure why that would &quot;freak&quot; you out as this has always been the case. Since the project started, we have allowed the user to separately specify mapping, ranking, and binding algorithms so they can reach a wide range of placement patterns. We have also allowed individual mappers to either use the base functions, or to completely ignore them - e.g., the rank-file mapper always ignored the base and just did things its own way.
</span><br>
<p>You're twisting what I said. The comment implies that the mappers don't have a consistent behavior, some being allowed to update some lists while others are not. This is what freak me out, not that they map the processes differently.
<br>
<p><span class="quotelev1">&gt; None of that is new or changed. The only thing that changed is that we extended the range of resource types over which the user can exercise control. Instead of just slots and nodes, it now includes cores, hwthreads, and other strange beasts. So the number of possible combinations is much, much greater than before.
</span><br>
<p>Sure, I read that in the RFC!
<br>
<p><span class="quotelev1">&gt; Don't blame me for the added complexity. I argued against some of this as I'm convinced it will rarely, if ever, be used - but I'm told this is what the user community wants, and so that is what I created.
</span><br>
<p>Again, this was clearly specified in the RFC, and thoroughly discussed in the community. The entire discussion can be found, as usual, in the thread started by the RFC. Absolutely, no issues here.
<br>
<p>&nbsp;&nbsp;george.
<br>
<p><p><span class="quotelev1">&gt; What I did, as I stated, was to ensure that the previous minimal option behavior remains the same - i.e., default behavior and simple options like -bynode result in the same patterns as before. So only gluttons for punishment get exposed to the added complexity.
</span><br>
<p>&nbsp;&nbsp;george.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10001.php">George Bosilca: "Re: [OMPI devel] Retrying a MPI_SEND"</a>
<li><strong>Previous message:</strong> <a href="9999.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25476"</a>
<li><strong>In reply to:</strong> <a href="9999.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25476"</a>
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
