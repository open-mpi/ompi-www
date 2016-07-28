<?
$subject_val = "Re: [OMPI devel] Problem running from ompi master";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  1 14:53:23 2015" -->
<!-- isoreceived="20150901185323" -->
<!-- sent="Tue, 1 Sep 2015 11:53:10 -0700" -->
<!-- isosent="20150901185310" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Problem running from ompi master" -->
<!-- id="6A480DF6-E8ED-434A-8312-9BBEC0F3C145_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="DEEE2EFF-BBDA-4804-A577-7B9216CC657C_at_open-mpi.org" -->
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
<strong>Date:</strong> 2015-09-01 14:53:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17917.php">Christopher Samuel: "[OMPI devel] PMI2 in Slurm 14.11.8"</a>
<li><strong>Previous message:</strong> <a href="17915.php">Ralph Castain: "Re: [OMPI devel] Problem running from ompi master"</a>
<li><strong>In reply to:</strong> <a href="17915.php">Ralph Castain: "Re: [OMPI devel] Problem running from ompi master"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmmm&#226;&#128;&#166;I cannot reproduce the problem. I configured the same way on a CentOS7 box, and everything runs just fine.
<br>
<p>It has to be something in your library path, I think. Are you by chance adding the prefix location to the end of the ld path instead of the beginning? Or some oddity in your autotool levels? You might check those to be sure, if you haven&#226;&#128;&#153;t built from repo before.
<br>
<p><p><span class="quotelev1">&gt; On Sep 1, 2015, at 11:32 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Those are just warnings that have no impact on things - just a reminder to developers about cleanup we promised to do over time.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I&#226;&#128;&#153;ll try to reproduce this here
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 1, 2015, at 11:11 AM, Cabral, Matias A &lt;matias.a.cabral_at_[hidden] &lt;mailto:matias.a.cabral_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi Ralph, &lt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; RHEL 7.0, building in the repo location.
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; Yes, running autogen.pl to generate configure.
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; I suspect this is unrelated, but I saw this while make install:
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; WARNING!  Common symbols found:
</span><br>
<span class="quotelev2">&gt;&gt;          btl_openib_lex.o: 0000000000000008 C btl_openib_ini_yyleng
</span><br>
<span class="quotelev2">&gt;&gt;          btl_openib_lex.o: 0000000000000008 C btl_openib_ini_yytext
</span><br>
<span class="quotelev2">&gt;&gt;              keyval_lex.o: 0000000000000008 C opal_util_keyval_yyleng
</span><br>
<span class="quotelev2">&gt;&gt;              keyval_lex.o: 0000000000000008 C opal_util_keyval_yytext
</span><br>
<span class="quotelev2">&gt;&gt;           show_help_lex.o: 0000000000000008 C opal_show_help_yyleng
</span><br>
<span class="quotelev2">&gt;&gt;           show_help_lex.o: 0000000000000008 C opal_show_help_yytext
</span><br>
<span class="quotelev2">&gt;&gt;     rmaps_rank_file_lex.o: 0000000000000008 C orte_rmaps_rank_file_leng
</span><br>
<span class="quotelev2">&gt;&gt;     rmaps_rank_file_lex.o: 0000000000000008 C orte_rmaps_rank_file_text
</span><br>
<span class="quotelev2">&gt;&gt;            hostfile_lex.o: 0000000000000008 C orte_util_hostfile_leng
</span><br>
<span class="quotelev2">&gt;&gt;            hostfile_lex.o: 0000000000000008 C orte_util_hostfile_text
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: [install-exec-hook] Error 1 (ignored)
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; _MAC
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; From: devel [mailto:devel-bounces_at_[hidden] &lt;mailto:devel-bounces_at_[hidden]&gt;] On Behalf Of Ralph Castain
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Tuesday, September 01, 2015 10:43 AM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Developers
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI devel] Problem running from ompi master
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; What system is this on? CentOS7? Are you doing a VPATH build, or doing the build in the repo location?
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; Also, I assume you remembered to run autogen.pl before configure, yes?
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 1, 2015, at 10:11 AM, Cabral, Matias A &lt;matias.a.cabral_at_[hidden] &lt;mailto:matias.a.cabral_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; Hi Gilles,
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; I deleted everything, re-cloned and re-built (without my patch), but still see the same issue.  The only option I&#226;&#128;&#153;m using with configure is --prefix. I even tried building with --enable-mpirun-prefix-by-default, and also passing the prefix at runtime  (mpirun &#226;&#128;&#147;prefix =/&#226;&#128;&#166;), but I always end with the same issue. Is it possible that the issue is related to configure --prefix ?
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; _MAC
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; From: devel [mailto:devel-bounces_at_[hidden] &lt;mailto:devel-bounces_at_[hidden]&gt;] On Behalf Of Gilles Gouaillardet
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Monday, August 31, 2015 5:46 PM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Developers
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI devel] Problem running from ompi master
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; this part has been revamped recently.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; at first, i would recommend you make a fresh install
</span><br>
<span class="quotelev2">&gt;&gt; remove the install directory, and the build directory if you use VPATH, re-run configure &amp;&amp; make &amp;&amp; make install
</span><br>
<span class="quotelev2">&gt;&gt; that should hopefully fix the issue
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 9/1/2015 9:35 AM, Cabral, Matias A wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; Before submitting a pull req I decided to test some changes on ompi master branch but I&#226;&#128;&#153;m facing an unrelated runtime error with ess pmi not being found. I confirmed PATH and LD_LIBRARY_PATH are set correctly and also that mca_ess_pmi.so where it should.  Any suggestions?
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; s-7  ~/devel/ompi&gt; ls ./lib/openmpi/ |grep pmi
</span><br>
<span class="quotelev2">&gt;&gt; mca_ess_pmi.la
</span><br>
<span class="quotelev2">&gt;&gt; mca_ess_pmi.so
</span><br>
<span class="quotelev2">&gt;&gt; mca_pmix_pmix1xx.la
</span><br>
<span class="quotelev2">&gt;&gt; mca_pmix_pmix1xx.so
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; s-7 ~/devel/ompi&gt; cat ~/.bashrc |grep -e PATH -e LD_LIBRARY_PATH
</span><br>
<span class="quotelev2">&gt;&gt; export PATH=$HOME/devel/ompi/bin/:$PATH
</span><br>
<span class="quotelev2">&gt;&gt; export LD_LIBRARY_PATH=$HOME/devel/ompi/lib
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; s-7 ~ ./bin/mpirun  -host s-7,s-8 -np 2  ./osu_latency
</span><br>
<span class="quotelev2">&gt;&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev2">&gt;&gt; *** on a NULL communicator
</span><br>
<span class="quotelev2">&gt;&gt; *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
</span><br>
<span class="quotelev2">&gt;&gt; ***    and potentially your MPI job)
</span><br>
<span class="quotelev2">&gt;&gt; [s-7.abc.com &lt;<a href="http://s-7.abc.com/">http://s-7.abc.com/</a>&gt;:56614] Local abort before MPI_INIT completed successfully; not able to aggregate error messages, and not able to guarantee that all other processes were killed!
</span><br>
<span class="quotelev2">&gt;&gt; [s-7.abc.com &lt;<a href="http://s-7.abc.com/">http://s-7.abc.com/</a>&gt;:56614] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in file runtime/orte_init.c at line 129
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; A requested component was not found, or was unable to be opened.  This
</span><br>
<span class="quotelev2">&gt;&gt; means that this component is either not installed or is unable to be
</span><br>
<span class="quotelev2">&gt;&gt; used on your system (e.g., sometimes this means that shared libraries
</span><br>
<span class="quotelev2">&gt;&gt; that the component requires are unable to be found/loaded).  Note that
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI stopped checking at the first component that it did not find.
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; Host:      s-7.abc.com &lt;<a href="http://s-7.abc.com/">http://s-7.abc.com/</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Framework: ess
</span><br>
<span class="quotelev2">&gt;&gt; Component: pmi
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; It looks like orte_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev2">&gt;&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev2">&gt;&gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev2">&gt;&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev2">&gt;&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI developer):
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt;   orte_ess_base_open failed
</span><br>
<span class="quotelev2">&gt;&gt;   --&gt; Returned value Not found (-13) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; It looks like MPI_INIT failed for some reason; your parallel process is
</span><br>
<span class="quotelev2">&gt;&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev2">&gt;&gt; fail during MPI_INIT; some of which are due to configuration or environment
</span><br>
<span class="quotelev2">&gt;&gt; problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev2">&gt;&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev2">&gt;&gt; developer):
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt;   ompi_mpi_init: ompi_rte_init failed
</span><br>
<span class="quotelev2">&gt;&gt;   --&gt; Returned &quot;Not found&quot; (-13) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Primary job  terminated normally, but 1 process returned
</span><br>
<span class="quotelev2">&gt;&gt; a non-zero exit code.. Per user-direction, the job has been aborted.
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpirun detected that one or more processes exited with non-zero status, thus causing
</span><br>
<span class="quotelev2">&gt;&gt; the job to be terminated. The first process to do so was:
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt;   Process name: [[2886,1],0]
</span><br>
<span class="quotelev2">&gt;&gt;   Exit code:    1
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/08/17908.php">http://www.open-mpi.org/community/lists/devel/2015/08/17908.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2015/08/17908.php">http://www.open-mpi.org/community/lists/devel/2015/08/17908.php</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/09/17912.php">http://www.open-mpi.org/community/lists/devel/2015/09/17912.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2015/09/17912.php">http://www.open-mpi.org/community/lists/devel/2015/09/17912.php</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/09/17914.php">http://www.open-mpi.org/community/lists/devel/2015/09/17914.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2015/09/17914.php">http://www.open-mpi.org/community/lists/devel/2015/09/17914.php</a>&gt;
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17916/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17917.php">Christopher Samuel: "[OMPI devel] PMI2 in Slurm 14.11.8"</a>
<li><strong>Previous message:</strong> <a href="17915.php">Ralph Castain: "Re: [OMPI devel] Problem running from ompi master"</a>
<li><strong>In reply to:</strong> <a href="17915.php">Ralph Castain: "Re: [OMPI devel] Problem running from ompi master"</a>
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
