<?
$subject_val = "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 27 14:06:20 2014" -->
<!-- isoreceived="20140327180620" -->
<!-- sent="Thu, 27 Mar 2014 14:06:19 -0400" -->
<!-- isosent="20140327180619" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)" -->
<!-- id="5334689B.9020200_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4F505D9A84D1D74E9397FB427DDF95BC3FE48C08_at_ALPMBAPA12.e2k.ad.ge.com" -->
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
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-27 14:06:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23993.php">Sasso, John (GE Power & Water, Non-GE): "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
<li><strong>Previous message:</strong> <a href="23991.php">Joe Landman: "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
<li><strong>In reply to:</strong> <a href="23990.php">Sasso, John (GE Power &amp; Water, Non-GE): "[OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23993.php">Sasso, John (GE Power & Water, Non-GE): "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
<li><strong>Reply:</strong> <a href="23993.php">Sasso, John (GE Power & Water, Non-GE): "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
<li><strong>Reply:</strong> <a href="23994.php">Gus Correa: "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi John
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
<span class="quotelev1">&gt; flag that can be passed to mpirun, or an environment variable set, which
</span><br>
<span class="quotelev1">&gt; would reveal the mapping of ranks to the hosts they are on?
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23993.php">Sasso, John (GE Power & Water, Non-GE): "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
<li><strong>Previous message:</strong> <a href="23991.php">Joe Landman: "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
<li><strong>In reply to:</strong> <a href="23990.php">Sasso, John (GE Power &amp; Water, Non-GE): "[OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23993.php">Sasso, John (GE Power & Water, Non-GE): "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
<li><strong>Reply:</strong> <a href="23993.php">Sasso, John (GE Power & Water, Non-GE): "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
<li><strong>Reply:</strong> <a href="23994.php">Gus Correa: "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
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
