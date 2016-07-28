<?
$subject_val = "Re: [OMPI devel] Problem running from ompi master";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  1 14:11:26 2015" -->
<!-- isoreceived="20150901181126" -->
<!-- sent="Tue, 1 Sep 2015 18:11:22 +0000" -->
<!-- isosent="20150901181122" -->
<!-- name="Cabral, Matias A" -->
<!-- email="matias.a.cabral_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Problem running from ompi master" -->
<!-- id="39196F20B4590A4A8337B6A6F7F0FD8D843C7578_at_FMSMSX102.amr.corp.intel.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="689F446A-D5E1-4FEF-81C2-BB543C9F5DB2_at_open-mpi.org" -->
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
<strong>From:</strong> Cabral, Matias A (<em>matias.a.cabral_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-01 14:11:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17915.php">Ralph Castain: "Re: [OMPI devel] Problem running from ompi master"</a>
<li><strong>Previous message:</strong> <a href="17913.php">Ralph Castain: "Re: [OMPI devel] Problem running from ompi master"</a>
<li><strong>In reply to:</strong> <a href="17913.php">Ralph Castain: "Re: [OMPI devel] Problem running from ompi master"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17915.php">Ralph Castain: "Re: [OMPI devel] Problem running from ompi master"</a>
<li><strong>Reply:</strong> <a href="17915.php">Ralph Castain: "Re: [OMPI devel] Problem running from ompi master"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>

<br>
RHEL 7.0, building in the repo location.
<br>

<br>
Yes, running autogen.pl to generate configure.
<br>

<br>
I suspect this is unrelated, but I saw this while make install:
<br>

<br>
WARNING!  Common symbols found:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;btl_openib_lex.o: 0000000000000008 C btl_openib_ini_yyleng
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;btl_openib_lex.o: 0000000000000008 C btl_openib_ini_yytext
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;keyval_lex.o: 0000000000000008 C opal_util_keyval_yyleng
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;keyval_lex.o: 0000000000000008 C opal_util_keyval_yytext
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;show_help_lex.o: 0000000000000008 C opal_show_help_yyleng
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;show_help_lex.o: 0000000000000008 C opal_show_help_yytext
<br>
&nbsp;&nbsp;&nbsp;&nbsp;rmaps_rank_file_lex.o: 0000000000000008 C orte_rmaps_rank_file_leng
<br>
&nbsp;&nbsp;&nbsp;&nbsp;rmaps_rank_file_lex.o: 0000000000000008 C orte_rmaps_rank_file_text
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hostfile_lex.o: 0000000000000008 C orte_util_hostfile_leng
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hostfile_lex.o: 0000000000000008 C orte_util_hostfile_text
<br>
make[3]: [install-exec-hook] Error 1 (ignored)
<br>

<br>
Thanks,
<br>

<br>
_MAC
<br>

<br>
From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Ralph Castain
<br>
Sent: Tuesday, September 01, 2015 10:43 AM
<br>
To: Open MPI Developers
<br>
Subject: Re: [OMPI devel] Problem running from ompi master
<br>

<br>
What system is this on? CentOS7? Are you doing a VPATH build, or doing the build in the repo location?
<br>

<br>
Also, I assume you remembered to run autogen.pl before configure, yes?
<br>

<br>

<br>
On Sep 1, 2015, at 10:11 AM, Cabral, Matias A &lt;matias.a.cabral_at_[hidden]&lt;mailto:matias.a.cabral_at_[hidden]&gt;&gt; wrote:
<br>

<br>
Hi Gilles,
<br>

<br>
I deleted everything, re-cloned and re-built (without my patch), but still see the same issue.  The only option I&#226;&#128;&#153;m using with configure is --prefix. I even tried building with --enable-mpirun-prefix-by-default, and also passing the prefix at runtime  (mpirun &#226;&#128;&#147;prefix =/&#226;&#128;&#166;), but I always end with the same issue. Is it possible that the issue is related to configure --prefix ?
<br>

<br>
Thanks,
<br>

<br>
_MAC
<br>

<br>
From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Gilles Gouaillardet
<br>
Sent: Monday, August 31, 2015 5:46 PM
<br>
To: Open MPI Developers
<br>
Subject: Re: [OMPI devel] Problem running from ompi master
<br>

<br>
Hi,
<br>

<br>
this part has been revamped recently.
<br>

<br>
at first, i would recommend you make a fresh install
<br>
remove the install directory, and the build directory if you use VPATH, re-run configure &amp;&amp; make &amp;&amp; make install
<br>
that should hopefully fix the issue
<br>

<br>
Cheers,
<br>

<br>
Gilles
<br>
On 9/1/2015 9:35 AM, Cabral, Matias A wrote:
<br>
Hi,
<br>

<br>
Before submitting a pull req I decided to test some changes on ompi master branch but I&#226;&#128;&#153;m facing an unrelated runtime error with ess pmi not being found. I confirmed PATH and LD_LIBRARY_PATH are set correctly and also that mca_ess_pmi.so where it should.  Any suggestions?
<br>

<br>
Thanks,
<br>
Regards,
<br>

<br>
s-7  ~/devel/ompi&gt; ls ./lib/openmpi/ |grep pmi
<br>
mca_ess_pmi.la
<br>
mca_ess_pmi.so
<br>
mca_pmix_pmix1xx.la
<br>
mca_pmix_pmix1xx.so
<br>

<br>
s-7 ~/devel/ompi&gt; cat ~/.bashrc |grep -e PATH -e LD_LIBRARY_PATH
<br>
export PATH=$HOME/devel/ompi/bin/:$PATH
<br>
export LD_LIBRARY_PATH=$HOME/devel/ompi/lib
<br>

<br>

<br>
s-7 ~ ./bin/mpirun  -host s-7,s-8 -np 2  ./osu_latency
<br>
*** An error occurred in MPI_Init
<br>
*** on a NULL communicator
<br>
*** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
<br>
***    and potentially your MPI job)
<br>
[s-7.abc.com&lt;<a href="http://s-7.abc.com/">http://s-7.abc.com/</a>&gt;:56614] Local abort before MPI_INIT completed successfully; not able to aggregate error messages, and not able to guarantee that all other processes were killed!
<br>
[s-7.abc.com&lt;<a href="http://s-7.abc.com/">http://s-7.abc.com/</a>&gt;:56614] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in file runtime/orte_init.c at line 129
<br>
--------------------------------------------------------------------------
<br>
A requested component was not found, or was unable to be opened.  This
<br>
means that this component is either not installed or is unable to be
<br>
used on your system (e.g., sometimes this means that shared libraries
<br>
that the component requires are unable to be found/loaded).  Note that
<br>
Open MPI stopped checking at the first component that it did not find.
<br>

<br>
Host:      s-7.abc.com&lt;<a href="http://s-7.abc.com/">http://s-7.abc.com/</a>&gt;
<br>
Framework: ess
<br>
Component: pmi
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
It looks like orte_init failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during orte_init; some of which are due to configuration or
<br>
environment problems.  This failure appears to be an internal failure;
<br>
here's some additional information (which may only be relevant to an
<br>
Open MPI developer):
<br>

<br>
&nbsp;&nbsp;orte_ess_base_open failed
<br>
&nbsp;&nbsp;--&gt; Returned value Not found (-13) instead of ORTE_SUCCESS
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
It looks like MPI_INIT failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during MPI_INIT; some of which are due to configuration or environment
<br>
problems.  This failure appears to be an internal failure; here's some
<br>
additional information (which may only be relevant to an Open MPI
<br>
developer):
<br>

<br>
&nbsp;&nbsp;ompi_mpi_init: ompi_rte_init failed
<br>
&nbsp;&nbsp;--&gt; Returned &quot;Not found&quot; (-13) instead of &quot;Success&quot; (0)
<br>
--------------------------------------------------------------------------
<br>
-------------------------------------------------------
<br>
Primary job  terminated normally, but 1 process returned
<br>
a non-zero exit code.. Per user-direction, the job has been aborted.
<br>
-------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
mpirun detected that one or more processes exited with non-zero status, thus causing
<br>
the job to be terminated. The first process to do so was:
<br>

<br>
&nbsp;&nbsp;Process name: [[2886,1],0]
<br>
&nbsp;&nbsp;Exit code:    1
<br>
--------------------------------------------------------------------------
<br>

<br>

<br>

<br>

<br>

<br>
_______________________________________________
<br>

<br>
devel mailing list
<br>

<br>
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
<br>

<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>

<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/08/17908.php">http://www.open-mpi.org/community/lists/devel/2015/08/17908.php</a>
<br>

<br>
_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/09/17912.php">http://www.open-mpi.org/community/lists/devel/2015/09/17912.php</a>
<br>

<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17914/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17915.php">Ralph Castain: "Re: [OMPI devel] Problem running from ompi master"</a>
<li><strong>Previous message:</strong> <a href="17913.php">Ralph Castain: "Re: [OMPI devel] Problem running from ompi master"</a>
<li><strong>In reply to:</strong> <a href="17913.php">Ralph Castain: "Re: [OMPI devel] Problem running from ompi master"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17915.php">Ralph Castain: "Re: [OMPI devel] Problem running from ompi master"</a>
<li><strong>Reply:</strong> <a href="17915.php">Ralph Castain: "Re: [OMPI devel] Problem running from ompi master"</a>
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
