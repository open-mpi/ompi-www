<?
$subject_val = "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 27 14:47:43 2014" -->
<!-- isoreceived="20140327184743" -->
<!-- sent="Thu, 27 Mar 2014 14:47:42 -0400" -->
<!-- isosent="20140327184742" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)" -->
<!-- id="5334724E.4020606_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-27 14:47:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23995.php">Ralph Castain: "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
<li><strong>Previous message:</strong> <a href="23993.php">Sasso, John (GE Power &amp; Water, Non-GE): "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
<li><strong>In reply to:</strong> <a href="23992.php">Gus Correa: "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23995.php">Ralph Castain: "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
<li><strong>Reply:</strong> <a href="23995.php">Ralph Castain: "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
PS - The (OMPI 1.6.5) mpiexec default is -bind-to-none,
<br>
in which case -report-bindings won't report anything.
<br>
<p>So, if you are using the default,
<br>
you can apply Joe Landman's suggestion
<br>
(or alternatively use the MPI_Get_processor_name function,
<br>
in lieu of uname(&amp;uts); cpu_name = uts.nodename; ).
<br>
<p>However, many MPI applications benefit from some type of hardware 
<br>
binding, maybe yours will do also, and as a bonus
<br>
-report-bindings will tell you where each rank ran.
<br>
mpiexec's -tag-output is also helpful for debugging,
<br>
but won't tell you the node name, just the MPI rank.
<br>
<p>You can setup a lot of these things as your preferred defaults,
<br>
via mca parameters, and omit them from the mpiexec command line.
<br>
The trick is to match each mpiexec option to
<br>
the appropriate mca parameter, as the names are not exactly the same.
<br>
&quot;ompi-info --all&quot; may help in that regard.
<br>
See this FAQ:
<br>
<a href="http://www.open-mpi.org/faq/?category=tuning#setting-mca-params">http://www.open-mpi.org/faq/?category=tuning#setting-mca-params</a>
<br>
<p>Again, the OMPI FAQ page is your friend!  :)
<br>
<a href="http://www.open-mpi.org/faq/">http://www.open-mpi.org/faq/</a>
<br>
<p>I hope this helps,
<br>
Gus Correa
<br>
<p>On 03/27/2014 02:06 PM, Gus Correa wrote:
<br>
<span class="quotelev1">&gt; Hi John
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Take a look at the mpiexec/mpirun options:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -report-bindings (this one should report what you want)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and maybe also also:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -bycore, -bysocket, -bind-to-core, -bind-to-socket, ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and similar, if you want more control on where your MPI processes run.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;man mpiexec&quot; is your friend!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I hope this helps,
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 03/27/2014 01:53 PM, Sasso, John (GE Power &amp; Water, Non-GE) wrote:
</span><br>
<span class="quotelev2">&gt;&gt; When a piece of software built against OpenMPI fails, I will see an
</span><br>
<span class="quotelev2">&gt;&gt; error referring to the rank of the MPI task which incurred the failure.
</span><br>
<span class="quotelev2">&gt;&gt; For example:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; MPI_ABORT was invoked on rank 1236 in communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; with errorcode 1.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Unfortunately, I do not have access to the software code, just the
</span><br>
<span class="quotelev2">&gt;&gt; installation directory tree for OpenMPI.  My question is:  Is there a
</span><br>
<span class="quotelev2">&gt;&gt; flag that can be passed to mpirun, or an environment variable set, which
</span><br>
<span class="quotelev2">&gt;&gt; would reveal the mapping of ranks to the hosts they are on?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I do understand that one could have multiple MPI ranks running on the
</span><br>
<span class="quotelev2">&gt;&gt; same host, but finding a way to determine which rank ran on what host
</span><br>
<span class="quotelev2">&gt;&gt; would go a long way in help troubleshooting problems which may be
</span><br>
<span class="quotelev2">&gt;&gt; central to the host.  Thanks!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                    --john
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23995.php">Ralph Castain: "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
<li><strong>Previous message:</strong> <a href="23993.php">Sasso, John (GE Power &amp; Water, Non-GE): "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
<li><strong>In reply to:</strong> <a href="23992.php">Gus Correa: "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23995.php">Ralph Castain: "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
<li><strong>Reply:</strong> <a href="23995.php">Ralph Castain: "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
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
