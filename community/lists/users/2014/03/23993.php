<?
$subject_val = "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 27 14:41:50 2014" -->
<!-- isoreceived="20140327184150" -->
<!-- sent="Thu, 27 Mar 2014 18:41:39 +0000" -->
<!-- isosent="20140327184139" -->
<!-- name="Sasso, John (GE Power &amp; Water, Non-GE)" -->
<!-- email="John1.Sasso_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)" -->
<!-- id="4F505D9A84D1D74E9397FB427DDF95BC3FE48C29_at_ALPMBAPA12.e2k.ad.ge.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5334689B.9020200_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)<br>
<strong>From:</strong> Sasso, John (GE Power &amp; Water, Non-GE) (<em>John1.Sasso_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-27 14:41:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23994.php">Gus Correa: "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
<li><strong>Previous message:</strong> <a href="23992.php">Gus Correa: "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
<li><strong>In reply to:</strong> <a href="23992.php">Gus Correa: "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23997.php">Gus Correa: "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
<li><strong>Reply:</strong> <a href="23997.php">Gus Correa: "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you, Gus!  I did go through the mpiexec/mpirun man pages but wasn't quite clear that -report-bindings was what I was looking for.   So what I did is rerun a program w/ --report-bindings but no bindings were reported.
<br>
<p>Scratching my head, I decided to include --bind-to-core as well.  Voila, the bindings are reported!  
<br>
<p>Awesome, but now here is my concern.  If we have OpenMPI-based applications launched as batch jobs via a batch scheduler like SLURM, PBS, LSF, etc. (which decides the placement of the app and dispatches it to the compute hosts), then will including &quot;--report-bindings --bind-to-core&quot; cause problems?   Certainly I can test this, but concerned there may be a case where inclusion of --bind-to-core would cause an unexpected problem I did not account for.
<br>
<p>--john
<br>
<p><p>-----Original Message-----
<br>
From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Gus Correa
<br>
Sent: Thursday, March 27, 2014 2:06 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)
<br>
<p>Hi John
<br>
<p>Take a look at the mpiexec/mpirun options:
<br>
<p>-report-bindings (this one should report what you want)
<br>
<p>and maybe also also:
<br>
<p>-bycore, -bysocket, -bind-to-core, -bind-to-socket, ...
<br>
<p>and similar, if you want more control on where your MPI processes run.
<br>
<p>&quot;man mpiexec&quot; is your friend!
<br>
<p>I hope this helps,
<br>
Gus Correa
<br>
<p>On 03/27/2014 01:53 PM, Sasso, John (GE Power &amp; Water, Non-GE) wrote:
<br>
<span class="quotelev1">&gt; When a piece of software built against OpenMPI fails, I will see an 
</span><br>
<span class="quotelev1">&gt; error referring to the rank of the MPI task which incurred the failure.
</span><br>
<span class="quotelev1">&gt; For example:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI_ABORT was invoked on rank 1236 in communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; with errorcode 1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Unfortunately, I do not have access to the software code, just the 
</span><br>
<span class="quotelev1">&gt; installation directory tree for OpenMPI.  My question is:  Is there a 
</span><br>
<span class="quotelev1">&gt; flag that can be passed to mpirun, or an environment variable set, 
</span><br>
<span class="quotelev1">&gt; which would reveal the mapping of ranks to the hosts they are on?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I do understand that one could have multiple MPI ranks running on the 
</span><br>
<span class="quotelev1">&gt; same host, but finding a way to determine which rank ran on what host 
</span><br>
<span class="quotelev1">&gt; would go a long way in help troubleshooting problems which may be 
</span><br>
<span class="quotelev1">&gt; central to the host.  Thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                    --john
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23994.php">Gus Correa: "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
<li><strong>Previous message:</strong> <a href="23992.php">Gus Correa: "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
<li><strong>In reply to:</strong> <a href="23992.php">Gus Correa: "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23997.php">Gus Correa: "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
<li><strong>Reply:</strong> <a href="23997.php">Gus Correa: "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
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
