<?
$subject_val = "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 27 16:07:16 2014" -->
<!-- isoreceived="20140327200716" -->
<!-- sent="Thu, 27 Mar 2014 20:06:23 +0000" -->
<!-- isosent="20140327200623" -->
<!-- name="Sasso, John (GE Power &amp; Water, Non-GE)" -->
<!-- email="John1.Sasso_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)" -->
<!-- id="4F505D9A84D1D74E9397FB427DDF95BC3FE48CDD_at_ALPMBAPA12.e2k.ad.ge.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="53347B61.60905_at_ldeo.columbia.edu" -->
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
<strong>Date:</strong> 2014-03-27 16:06:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24001.php">Reuti: "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
<li><strong>Previous message:</strong> <a href="23999.php">Gus Correa: "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
<li><strong>In reply to:</strong> <a href="23999.php">Gus Correa: "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24003.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
<li><strong>Reply:</strong> <a href="24003.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, I noticed that I could not find --display-map in any of the man pages.  Intentional?
<br>
<p><p>-----Original Message-----
<br>
From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Gus Correa
<br>
Sent: Thursday, March 27, 2014 3:26 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)
<br>
<p>On 03/27/2014 03:02 PM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Or use --display-map to see the process to node assignments
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Aha!
<br>
That one was not on my radar.
<br>
Maybe because somehow I can't find it in the OMPI 1.6.5 mpiexec man page.
<br>
However, it seems to work with that version also, which is great.
<br>
(--display-map goes to stdout, whereas -report-bindings goes to stderr,
<br>
right?)
<br>
Thanks, Ralph!
<br>
<p>Gus Correa
<br>
<p><span class="quotelev1">&gt; Sent from my iPhone
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 27, 2014, at 11:47 AM, Gus Correa &lt;gus_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; PS - The (OMPI 1.6.5) mpiexec default is -bind-to-none, in which case 
</span><br>
<span class="quotelev2">&gt;&gt; -report-bindings won't report anything.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So, if you are using the default,
</span><br>
<span class="quotelev2">&gt;&gt; you can apply Joe Landman's suggestion (or alternatively use the 
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Get_processor_name function, in lieu of uname(&amp;uts); cpu_name = 
</span><br>
<span class="quotelev2">&gt;&gt; uts.nodename; ).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; However, many MPI applications benefit from some type of hardware 
</span><br>
<span class="quotelev2">&gt;&gt; binding, maybe yours will do also, and as a bonus -report-bindings will tell you where each rank ran.
</span><br>
<span class="quotelev2">&gt;&gt; mpiexec's -tag-output is also helpful for debugging, but won't tell 
</span><br>
<span class="quotelev2">&gt;&gt; you the node name, just the MPI rank.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You can setup a lot of these things as your preferred defaults, via 
</span><br>
<span class="quotelev2">&gt;&gt; mca parameters, and omit them from the mpiexec command line.
</span><br>
<span class="quotelev2">&gt;&gt; The trick is to match each mpiexec option to the appropriate mca 
</span><br>
<span class="quotelev2">&gt;&gt; parameter, as the names are not exactly the same.
</span><br>
<span class="quotelev2">&gt;&gt; &quot;ompi-info --all&quot; may help in that regard.
</span><br>
<span class="quotelev2">&gt;&gt; See this FAQ:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=tuning#setting-mca-params">http://www.open-mpi.org/faq/?category=tuning#setting-mca-params</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Again, the OMPI FAQ page is your friend!  :) 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/faq/">http://www.open-mpi.org/faq/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I hope this helps,
</span><br>
<span class="quotelev2">&gt;&gt; Gus Correa
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 03/27/2014 02:06 PM, Gus Correa wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi John
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Take a look at the mpiexec/mpirun options:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -report-bindings (this one should report what you want)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and maybe also also:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -bycore, -bysocket, -bind-to-core, -bind-to-socket, ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and similar, if you want more control on where your MPI processes run.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;man mpiexec&quot; is your friend!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I hope this helps,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gus Correa
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On 03/27/2014 01:53 PM, Sasso, John (GE Power &amp; Water, Non-GE) wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; When a piece of software built against OpenMPI fails, I will see an 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; error referring to the rank of the MPI task which incurred the failure.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; For example:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI_ABORT was invoked on rank 1236 in communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; with errorcode 1.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Unfortunately, I do not have access to the software code, just the 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; installation directory tree for OpenMPI.  My question is:  Is there 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; a flag that can be passed to mpirun, or an environment variable 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; set, which would reveal the mapping of ranks to the hosts they are on?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I do understand that one could have multiple MPI ranks running on 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the same host, but finding a way to determine which rank ran on 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; what host would go a long way in help troubleshooting problems 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; which may be central to the host.  Thanks!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                    --john
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="24001.php">Reuti: "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
<li><strong>Previous message:</strong> <a href="23999.php">Gus Correa: "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
<li><strong>In reply to:</strong> <a href="23999.php">Gus Correa: "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24003.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
<li><strong>Reply:</strong> <a href="24003.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
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
