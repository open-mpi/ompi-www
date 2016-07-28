<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Aug 17 12:17:57 2007" -->
<!-- isoreceived="20070817161757" -->
<!-- sent="Fri, 17 Aug 2007 12:16:57 -0400" -->
<!-- isosent="20070817161657" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="[OMPI users] sepran package dead lock" -->
<!-- id="ADD764D9-A803-481F-BAEF-7E107E2F4E08_at_umich.edu" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-17 12:16:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3879.php">George Bosilca: "Re: [OMPI users] Process termination problem"</a>
<li><strong>Previous message:</strong> <a href="3877.php">Tom Conerly: "Re: [OMPI users] &quot;bash: orted: command not found&quot; running NPB2.4 with tau"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3884.php">Jeff Squyres: "Re: [OMPI users] sepran package dead lock"</a>
<li><strong>Reply:</strong> <a href="3884.php">Jeff Squyres: "Re: [OMPI users] sepran package dead lock"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We have a user who uses the sepran1206 package.  It works for him on  
<br>
lam, mpich2 and OMPI up to problem sizes i see in the debugger (ddt)  
<br>
that both rank 0 and rank 1 call PMPI_SEND()
<br>
Is PMPI_SEND the same as MPI_SEND?
<br>
<p>also why would it work with lam and mpich2 ?
<br>
<p>If we up the btl_sm_eager_limit it works, (obviously due to the  
<br>
blocking nature of both calling MPI_SEND)
<br>
but I am confused as to why lam works and ompi does not.
<br>
<p>Brock Palen
<br>
Center for Advanced Computing
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3879.php">George Bosilca: "Re: [OMPI users] Process termination problem"</a>
<li><strong>Previous message:</strong> <a href="3877.php">Tom Conerly: "Re: [OMPI users] &quot;bash: orted: command not found&quot; running NPB2.4 with tau"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3884.php">Jeff Squyres: "Re: [OMPI users] sepran package dead lock"</a>
<li><strong>Reply:</strong> <a href="3884.php">Jeff Squyres: "Re: [OMPI users] sepran package dead lock"</a>
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
