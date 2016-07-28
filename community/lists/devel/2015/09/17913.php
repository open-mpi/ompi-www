<?
$subject_val = "Re: [OMPI devel] Problem running from ompi master";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  1 13:43:29 2015" -->
<!-- isoreceived="20150901174329" -->
<!-- sent="Tue, 1 Sep 2015 10:43:24 -0700" -->
<!-- isosent="20150901174324" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Problem running from ompi master" -->
<!-- id="689F446A-D5E1-4FEF-81C2-BB543C9F5DB2_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="39196F20B4590A4A8337B6A6F7F0FD8D843C7520_at_FMSMSX102.amr.corp.intel.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Problem running from ompi master<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-01 13:43:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17914.php">Cabral, Matias A: "Re: [OMPI devel] Problem running from ompi master"</a>
<li><strong>Previous message:</strong> <a href="17912.php">Cabral, Matias A: "Re: [OMPI devel] Problem running from ompi master"</a>
<li><strong>In reply to:</strong> <a href="17912.php">Cabral, Matias A: "Re: [OMPI devel] Problem running from ompi master"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17914.php">Cabral, Matias A: "Re: [OMPI devel] Problem running from ompi master"</a>
<li><strong>Reply:</strong> <a href="17914.php">Cabral, Matias A: "Re: [OMPI devel] Problem running from ompi master"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What system is this on? CentOS7? Are you doing a VPATH build, or doing the build in the repo location?
<br>
<p>Also, I assume you remembered to run autogen.pl before configure, yes?
<br>
<p><p><span class="quotelev1">&gt; On Sep 1, 2015, at 10:11 AM, Cabral, Matias A &lt;matias.a.cabral_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Gilles, &lt;&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I deleted everything, re-cloned and re-built (without my patch), but still see the same issue.  The only option I&#226;&#128;&#153;m using with configure is --prefix. I even tried building with --enable-mpirun-prefix-by-default, and also passing the prefix at runtime  (mpirun &#226;&#128;&#147;prefix =/&#226;&#128;&#166;), but I always end with the same issue. Is it possible that the issue is related to configure --prefix ?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; _MAC
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; From: devel [mailto:devel-bounces_at_[hidden] &lt;mailto:devel-bounces_at_[hidden]&gt;] On Behalf Of Gilles Gouaillardet
</span><br>
<span class="quotelev1">&gt; Sent: Monday, August 31, 2015 5:46 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] Problem running from ompi master
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; this part has been revamped recently.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; at first, i would recommend you make a fresh install
</span><br>
<span class="quotelev1">&gt; remove the install directory, and the build directory if you use VPATH, re-run configure &amp;&amp; make &amp;&amp; make install
</span><br>
<span class="quotelev1">&gt; that should hopefully fix the issue
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 9/1/2015 9:35 AM, Cabral, Matias A wrote:
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Before submitting a pull req I decided to test some changes on ompi master branch but I&#226;&#128;&#153;m facing an unrelated runtime error with ess pmi not being found. I confirmed PATH and LD_LIBRARY_PATH are set correctly and also that mca_ess_pmi.so where it should.  Any suggestions?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; s-7  ~/devel/ompi&gt; ls ./lib/openmpi/ |grep pmi
</span><br>
<span class="quotelev1">&gt; mca_ess_pmi.la
</span><br>
<span class="quotelev1">&gt; mca_ess_pmi.so
</span><br>
<span class="quotelev1">&gt; mca_pmix_pmix1xx.la
</span><br>
<span class="quotelev1">&gt; mca_pmix_pmix1xx.so
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; s-7 ~/devel/ompi&gt; cat ~/.bashrc |grep -e PATH -e LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt; export PATH=$HOME/devel/ompi/bin/:$PATH
</span><br>
<span class="quotelev1">&gt; export LD_LIBRARY_PATH=$HOME/devel/ompi/lib
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; s-7 ~ ./bin/mpirun  -host s-7,s-8 -np 2  ./osu_latency
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; *** on a NULL communicator
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
</span><br>
<span class="quotelev1">&gt; ***    and potentially your MPI job)
</span><br>
<span class="quotelev1">&gt; [s-7.abc.com &lt;<a href="http://s-7.abc.com/">http://s-7.abc.com/</a>&gt;:56614] Local abort before MPI_INIT completed successfully; not able to aggregate error messages, and not able to guarantee that all other processes were killed!
</span><br>
<span class="quotelev1">&gt; [s-7.abc.com &lt;<a href="http://s-7.abc.com/">http://s-7.abc.com/</a>&gt;:56614] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in file runtime/orte_init.c at line 129
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; A requested component was not found, or was unable to be opened.  This
</span><br>
<span class="quotelev1">&gt; means that this component is either not installed or is unable to be
</span><br>
<span class="quotelev1">&gt; used on your system (e.g., sometimes this means that shared libraries
</span><br>
<span class="quotelev1">&gt; that the component requires are unable to be found/loaded).  Note that
</span><br>
<span class="quotelev1">&gt; Open MPI stopped checking at the first component that it did not find.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Host:      s-7.abc.com &lt;<a href="http://s-7.abc.com/">http://s-7.abc.com/</a>&gt;
</span><br>
<span class="quotelev1">&gt; Framework: ess
</span><br>
<span class="quotelev1">&gt; Component: pmi
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like orte_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev1">&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev1">&gt; Open MPI developer):
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;   orte_ess_base_open failed
</span><br>
<span class="quotelev1">&gt;   --&gt; Returned value Not found (-13) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like MPI_INIT failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during MPI_INIT; some of which are due to configuration or environment
</span><br>
<span class="quotelev1">&gt; problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev1">&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev1">&gt; developer):
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;   ompi_mpi_init: ompi_rte_init failed
</span><br>
<span class="quotelev1">&gt;   --&gt; Returned &quot;Not found&quot; (-13) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Primary job  terminated normally, but 1 process returned
</span><br>
<span class="quotelev1">&gt; a non-zero exit code.. Per user-direction, the job has been aborted.
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun detected that one or more processes exited with non-zero status, thus causing
</span><br>
<span class="quotelev1">&gt; the job to be terminated. The first process to do so was:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;   Process name: [[2886,1],0]
</span><br>
<span class="quotelev1">&gt;   Exit code:    1
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/08/17908.php">http://www.open-mpi.org/community/lists/devel/2015/08/17908.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2015/08/17908.php">http://www.open-mpi.org/community/lists/devel/2015/08/17908.php</a>&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/09/17912.php">http://www.open-mpi.org/community/lists/devel/2015/09/17912.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2015/09/17912.php">http://www.open-mpi.org/community/lists/devel/2015/09/17912.php</a>&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17913/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17914.php">Cabral, Matias A: "Re: [OMPI devel] Problem running from ompi master"</a>
<li><strong>Previous message:</strong> <a href="17912.php">Cabral, Matias A: "Re: [OMPI devel] Problem running from ompi master"</a>
<li><strong>In reply to:</strong> <a href="17912.php">Cabral, Matias A: "Re: [OMPI devel] Problem running from ompi master"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17914.php">Cabral, Matias A: "Re: [OMPI devel] Problem running from ompi master"</a>
<li><strong>Reply:</strong> <a href="17914.php">Cabral, Matias A: "Re: [OMPI devel] Problem running from ompi master"</a>
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
