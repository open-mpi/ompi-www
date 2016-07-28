<?
$subject_val = "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 27 15:21:09 2014" -->
<!-- isoreceived="20140327192109" -->
<!-- sent="Thu, 27 Mar 2014 19:20:55 +0000" -->
<!-- isosent="20140327192055" -->
<!-- name="Sasso, John (GE Power &amp; Water, Non-GE)" -->
<!-- email="John1.Sasso_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)" -->
<!-- id="4F505D9A84D1D74E9397FB427DDF95BC3FE48C5D_at_ALPMBAPA12.e2k.ad.ge.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="3F85E285-9360-4B62-8FEE-BA8381248515_at_gmail.com" -->
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
<strong>Date:</strong> 2014-03-27 15:20:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23999.php">Gus Correa: "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
<li><strong>Previous message:</strong> <a href="23997.php">Gus Correa: "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
<li><strong>In reply to:</strong> <a href="23995.php">Ralph Castain: "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23999.php">Gus Correa: "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you!  That also works and is very helpful.
<br>
<p>-----Original Message-----
<br>
From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Ralph Castain
<br>
Sent: Thursday, March 27, 2014 3:03 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)
<br>
<p>Or use --display-map to see the process to node assignments
<br>
<p>Sent from my iPhone
<br>
<p><span class="quotelev1">&gt; On Mar 27, 2014, at 11:47 AM, Gus Correa &lt;gus_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; PS - The (OMPI 1.6.5) mpiexec default is -bind-to-none, in which case 
</span><br>
<span class="quotelev1">&gt; -report-bindings won't report anything.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So, if you are using the default,
</span><br>
<span class="quotelev1">&gt; you can apply Joe Landman's suggestion (or alternatively use the 
</span><br>
<span class="quotelev1">&gt; MPI_Get_processor_name function, in lieu of uname(&amp;uts); cpu_name = 
</span><br>
<span class="quotelev1">&gt; uts.nodename; ).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, many MPI applications benefit from some type of hardware 
</span><br>
<span class="quotelev1">&gt; binding, maybe yours will do also, and as a bonus -report-bindings will tell you where each rank ran.
</span><br>
<span class="quotelev1">&gt; mpiexec's -tag-output is also helpful for debugging, but won't tell 
</span><br>
<span class="quotelev1">&gt; you the node name, just the MPI rank.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You can setup a lot of these things as your preferred defaults, via 
</span><br>
<span class="quotelev1">&gt; mca parameters, and omit them from the mpiexec command line.
</span><br>
<span class="quotelev1">&gt; The trick is to match each mpiexec option to the appropriate mca 
</span><br>
<span class="quotelev1">&gt; parameter, as the names are not exactly the same.
</span><br>
<span class="quotelev1">&gt; &quot;ompi-info --all&quot; may help in that regard.
</span><br>
<span class="quotelev1">&gt; See this FAQ:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=tuning#setting-mca-params">http://www.open-mpi.org/faq/?category=tuning#setting-mca-params</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Again, the OMPI FAQ page is your friend!  :) 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/">http://www.open-mpi.org/faq/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I hope this helps,
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 03/27/2014 02:06 PM, Gus Correa wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi John
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Take a look at the mpiexec/mpirun options:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -report-bindings (this one should report what you want)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; and maybe also also:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -bycore, -bysocket, -bind-to-core, -bind-to-socket, ...
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; and similar, if you want more control on where your MPI processes run.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; &quot;man mpiexec&quot; is your friend!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I hope this helps,
</span><br>
<span class="quotelev2">&gt;&gt; Gus Correa
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 03/27/2014 01:53 PM, Sasso, John (GE Power &amp; Water, Non-GE) wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When a piece of software built against OpenMPI fails, I will see an 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; error referring to the rank of the MPI task which incurred the failure.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For example:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_ABORT was invoked on rank 1236 in communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with errorcode 1.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Unfortunately, I do not have access to the software code, just the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; installation directory tree for OpenMPI.  My question is:  Is there 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a flag that can be passed to mpirun, or an environment variable set, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; which would reveal the mapping of ranks to the hosts they are on?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I do understand that one could have multiple MPI ranks running on 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the same host, but finding a way to determine which rank ran on what 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; host would go a long way in help troubleshooting problems which may 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; be central to the host.  Thanks!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   --john
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
_______________________________________________
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
<li><strong>Next message:</strong> <a href="23999.php">Gus Correa: "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
<li><strong>Previous message:</strong> <a href="23997.php">Gus Correa: "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
<li><strong>In reply to:</strong> <a href="23995.php">Ralph Castain: "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23999.php">Gus Correa: "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
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
