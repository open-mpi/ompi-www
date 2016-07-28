<?
$subject_val = "Re: [OMPI users] Open-mpi running issue and bug";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan  7 12:36:27 2013" -->
<!-- isoreceived="20130107173627" -->
<!-- sent="Mon, 7 Jan 2013 17:36:21 +0000" -->
<!-- isosent="20130107173621" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open-mpi running issue and bug" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC3808AF8B_at_xmb-aln-x01.cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1357286901.52654.YahooMailNeo_at_web162701.mail.bf1.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open-mpi running issue and bug<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-07 12:36:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21086.php">Lee Eric: "[OMPI users] ARM Compilation Issue"</a>
<li><strong>Previous message:</strong> <a href="21084.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Backward Compatibility of MPI Java Binding"</a>
<li><strong>In reply to:</strong> <a href="21075.php">Edge Edge: "Re: [OMPI users] Open-mpi running issue and bug"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/12/21051.php">Edge Edge: "Re: [OMPI users] Open-mpi running issue and bug"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It sounds like something is wrong with your download -- the official Open MPI 1.6.3 tarball includes config/install-sh.
<br>
<p>Are you getting the 1.6.3 tarball from <a href="http://www.open-mpi.org/software/ompi/v1.6/">http://www.open-mpi.org/software/ompi/v1.6/</a>?  Are you expanding it on a networked filesystem, perchance?  And if so, is the time synchronized between your client machine and the network filesystem server?
<br>
<p><p>On Jan 4, 2013, at 3:08 AM, Edge Edge &lt;edge_diners_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for your fast reply.
</span><br>
<span class="quotelev1">&gt; I'm very appreciate it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It shown the following info when I issue:
</span><br>
<span class="quotelev1">&gt; ./configure
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; configure: error: cannot find install-sh, install.sh, or shtool in config &quot;.&quot;/config
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I was download openmpi-1.6.3.tar.gz and unzip it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks and looking forward to hear from you.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; best regards
</span><br>
<span class="quotelev1">&gt; Edge
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; From: Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To: Edge Edge &lt;edge_diners_at_[hidden]&gt;; Open MPI Users &lt;users_at_[hidden]&gt; 
</span><br>
<span class="quotelev1">&gt; Sent: Friday, January 4, 2013 11:53 AM
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Open-mpi running issue and bug
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you are building from a tarball, you don't need nor want to run autogen. All you want to do is run ./configure.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you attempt to run autogen, you'll have to install all the required tools - including an appropriate libtool. Unless you are adding a component to OMPI, you're better off not doing so.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jan 3, 2013, at 7:19 PM, Edge Edge &lt;edge_diners_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; When I issue the following command as shown in the info listed (<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>):
</span><br>
<span class="quotelev2">&gt;&gt; [home_at_edge openmpi-1.6.3]$mpirun --bynode --hostfile my_hostfile.txt --tag-output ompi_info -v ompi full --parsable 
</span><br>
<span class="quotelev2">&gt;&gt; [home_at_edge openmpi-1.6.3]$ --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; It looks like opal_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev2">&gt;&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev2">&gt;&gt; fail during opal_init; some of which are due to configuration or
</span><br>
<span class="quotelev2">&gt;&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev2">&gt;&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI developer):
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   opal_shmem_base_select failed
</span><br>
<span class="quotelev2">&gt;&gt;   --&gt; Returned value -1 instead of OPAL_SUCCESS
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; [home_at_edge:77658] [[INVALID],INVALID] ORTE_ERROR_LOG: Error in file runtime/orte_init.c at line 79
</span><br>
<span class="quotelev2">&gt;&gt; [home_at_edge:77658] [[INVALID],INVALID] ORTE_ERROR_LOG: Error in file orterun.c at line 694
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I was downloading &quot;openmpi-1.6.3&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; If I issue the following command in order to install openmpi-1.6.3.
</span><br>
<span class="quotelev2">&gt;&gt; It gives me the following log info after I issue, ./autogen.sh
</span><br>
<span class="quotelev2">&gt;&gt; log file:
</span><br>
<span class="quotelev2">&gt;&gt; *** Running GNU tools
</span><br>
<span class="quotelev2">&gt;&gt; [Running] autom4te --language=m4sh ompi_get_version.m4sh -o ompi_get_version.sh
</span><br>
<span class="quotelev2">&gt;&gt; [Running] libtoolize --automake --copy --ltdl
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; It seems that the execution of &quot;libtoolize --automake --copy --ltdl&quot; has failed.  See above for
</span><br>
<span class="quotelev2">&gt;&gt; the specific error message that caused it to abort.
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; error log file:
</span><br>
<span class="quotelev2">&gt;&gt; configure.in:2125: installing `confdb/config.guess'
</span><br>
<span class="quotelev2">&gt;&gt; configure.in:2125: installing `confdb/config.sub'
</span><br>
<span class="quotelev2">&gt;&gt; configure.in:210: installing `confdb/install-sh'
</span><br>
<span class="quotelev2">&gt;&gt; configure.in:210: installing `confdb/missing'
</span><br>
<span class="quotelev2">&gt;&gt; adio/ad_bgl/Makefile.am: installing `confdb/depcomp'
</span><br>
<span class="quotelev2">&gt;&gt; configure.in:96: installing `config/compile'
</span><br>
<span class="quotelev2">&gt;&gt; configure.in:34: installing `config/config.guess'
</span><br>
<span class="quotelev2">&gt;&gt; configure.in:34: installing `config/config.sub'
</span><br>
<span class="quotelev2">&gt;&gt; configure.in:8: installing `config/install-sh'
</span><br>
<span class="quotelev2">&gt;&gt; configure.in:8: installing `config/missing'
</span><br>
<span class="quotelev2">&gt;&gt; rfg/Makefile.am: installing `config/depcomp'
</span><br>
<span class="quotelev2">&gt;&gt; configure.in:10: installing `config/config.guess'
</span><br>
<span class="quotelev2">&gt;&gt; configure.in:10: installing `config/config.sub'
</span><br>
<span class="quotelev2">&gt;&gt; configure.in:11: installing `config/install-sh'
</span><br>
<span class="quotelev2">&gt;&gt; configure.in:11: installing `config/missing'
</span><br>
<span class="quotelev2">&gt;&gt; otfauxlib/Makefile.am: installing `config/depcomp'
</span><br>
<span class="quotelev2">&gt;&gt; libtoolize: `COPYING.LIB' not found in `/usr/share/libtool/libltdl'
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks and looking forward to hear from you.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; best regards
</span><br>
<span class="quotelev2">&gt;&gt; Edge
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; From: Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Cc: Edge Edge &lt;edge_diners_at_[hidden]&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Sunday, December 30, 2012 2:07 AM
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] Open-mpi running issue and bug
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Please sent all the info listed here:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 28, 2012, at 11:42 AM, Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; What version of OMPI are you using? How was it configured?
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; On Dec 28, 2012, at 2:16 AM, Edge Edge &lt;edge_diners_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Currently I was trying to run mpirun to improve the performance of my running.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; However it keeps on showing the following bug:
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; It looks like opal_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; fail during opal_init; some of which are due to configuration or
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Open MPI developer):
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;  opal_shmem_base_select failed
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;  --&gt; Returned value -1 instead of OPAL_SUCCESS
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; [home:07059] [[INVALID],INVALID] ORTE_ERROR_LOG: Error in file runtime/orte_init.c at line 79
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; [home:07059] [[INVALID],INVALID] ORTE_ERROR_LOG: Error in file orterun.c at line 694
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; make: *** [sample-1.fa] Error 255
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Can I know how to solve this bug?
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; I got try to google around but I still fail to find related answer.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Below is the spec of my server:
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Linux home 2.6.32-71.el6.x86_64 #1 SMP Wed Sep 1 01:33:01 EDT 2010 x86_64 x86_64 x86_64 GNU/Linux
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Hope it is useful for you in order to solve the bug.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Thanks.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; best regards
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Edge
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21086.php">Lee Eric: "[OMPI users] ARM Compilation Issue"</a>
<li><strong>Previous message:</strong> <a href="21084.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Backward Compatibility of MPI Java Binding"</a>
<li><strong>In reply to:</strong> <a href="21075.php">Edge Edge: "Re: [OMPI users] Open-mpi running issue and bug"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/12/21051.php">Edge Edge: "Re: [OMPI users] Open-mpi running issue and bug"</a>
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
