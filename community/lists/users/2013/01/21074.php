<?
$subject_val = "Re: [OMPI users] Open-mpi running issue and bug";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  3 22:53:41 2013" -->
<!-- isoreceived="20130104035341" -->
<!-- sent="Thu, 3 Jan 2013 19:53:33 -0800" -->
<!-- isosent="20130104035333" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open-mpi running issue and bug" -->
<!-- id="4AEE2DD1-7EB4-4DA3-A8E4-B4E67038D945_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1357269568.19062.YahooMailNeo_at_web162704.mail.bf1.yahoo.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-03 22:53:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21075.php">Edge Edge: "Re: [OMPI users] Open-mpi running issue and bug"</a>
<li><strong>Previous message:</strong> <a href="21073.php">Edge Edge: "Re: [OMPI users] Open-mpi running issue and bug"</a>
<li><strong>In reply to:</strong> <a href="21073.php">Edge Edge: "Re: [OMPI users] Open-mpi running issue and bug"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21075.php">Edge Edge: "Re: [OMPI users] Open-mpi running issue and bug"</a>
<li><strong>Reply:</strong> <a href="21075.php">Edge Edge: "Re: [OMPI users] Open-mpi running issue and bug"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If you are building from a tarball, you don't need nor want to run autogen. All you want to do is run ./configure.
<br>
<p>If you attempt to run autogen, you'll have to install all the required tools - including an appropriate libtool. Unless you are adding a component to OMPI, you're better off not doing so.
<br>
<p><p>On Jan 3, 2013, at 7:19 PM, Edge Edge &lt;edge_diners_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When I issue the following command as shown in the info listed (<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>):
</span><br>
<span class="quotelev1">&gt; [home_at_edge openmpi-1.6.3]$mpirun --bynode --hostfile my_hostfile.txt --tag-output ompi_info -v ompi full --parsable 
</span><br>
<span class="quotelev1">&gt; [home_at_edge openmpi-1.6.3]$ --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like opal_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during opal_init; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev1">&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev1">&gt; Open MPI developer):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   opal_shmem_base_select failed
</span><br>
<span class="quotelev1">&gt;   --&gt; Returned value -1 instead of OPAL_SUCCESS
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [home_at_edge:77658] [[INVALID],INVALID] ORTE_ERROR_LOG: Error in file runtime/orte_init.c at line 79
</span><br>
<span class="quotelev1">&gt; [home_at_edge:77658] [[INVALID],INVALID] ORTE_ERROR_LOG: Error in file orterun.c at line 694
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I was downloading &quot;openmpi-1.6.3&quot;.
</span><br>
<span class="quotelev1">&gt; If I issue the following command in order to install openmpi-1.6.3.
</span><br>
<span class="quotelev1">&gt; It gives me the following log info after I issue, ./autogen.sh
</span><br>
<span class="quotelev1">&gt; log file:
</span><br>
<span class="quotelev1">&gt; *** Running GNU tools
</span><br>
<span class="quotelev1">&gt; [Running] autom4te --language=m4sh ompi_get_version.m4sh -o ompi_get_version.sh
</span><br>
<span class="quotelev1">&gt; [Running] libtoolize --automake --copy --ltdl
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It seems that the execution of &quot;libtoolize --automake --copy --ltdl&quot; has failed.  See above for
</span><br>
<span class="quotelev1">&gt; the specific error message that caused it to abort.
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; error log file:
</span><br>
<span class="quotelev1">&gt; configure.in:2125: installing `confdb/config.guess'
</span><br>
<span class="quotelev1">&gt; configure.in:2125: installing `confdb/config.sub'
</span><br>
<span class="quotelev1">&gt; configure.in:210: installing `confdb/install-sh'
</span><br>
<span class="quotelev1">&gt; configure.in:210: installing `confdb/missing'
</span><br>
<span class="quotelev1">&gt; adio/ad_bgl/Makefile.am: installing `confdb/depcomp'
</span><br>
<span class="quotelev1">&gt; configure.in:96: installing `config/compile'
</span><br>
<span class="quotelev1">&gt; configure.in:34: installing `config/config.guess'
</span><br>
<span class="quotelev1">&gt; configure.in:34: installing `config/config.sub'
</span><br>
<span class="quotelev1">&gt; configure.in:8: installing `config/install-sh'
</span><br>
<span class="quotelev1">&gt; configure.in:8: installing `config/missing'
</span><br>
<span class="quotelev1">&gt; rfg/Makefile.am: installing `config/depcomp'
</span><br>
<span class="quotelev1">&gt; configure.in:10: installing `config/config.guess'
</span><br>
<span class="quotelev1">&gt; configure.in:10: installing `config/config.sub'
</span><br>
<span class="quotelev1">&gt; configure.in:11: installing `config/install-sh'
</span><br>
<span class="quotelev1">&gt; configure.in:11: installing `config/missing'
</span><br>
<span class="quotelev1">&gt; otfauxlib/Makefile.am: installing `config/depcomp'
</span><br>
<span class="quotelev1">&gt; libtoolize: `COPYING.LIB' not found in `/usr/share/libtool/libltdl'
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
<span class="quotelev1">&gt; From: Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt; 
</span><br>
<span class="quotelev1">&gt; Cc: Edge Edge &lt;edge_diners_at_[hidden]&gt; 
</span><br>
<span class="quotelev1">&gt; Sent: Sunday, December 30, 2012 2:07 AM
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Open-mpi running issue and bug
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please sent all the info listed here:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Dec 28, 2012, at 11:42 AM, Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; What version of OMPI are you using? How was it configured?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Dec 28, 2012, at 2:16 AM, Edge Edge &lt;edge_diners_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Currently I was trying to run mpirun to improve the performance of my running.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; However it keeps on showing the following bug:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt; It looks like opal_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev3">&gt; &gt;&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev3">&gt; &gt;&gt; fail during opal_init; some of which are due to configuration or
</span><br>
<span class="quotelev3">&gt; &gt;&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Open MPI developer):
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  opal_shmem_base_select failed
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  --&gt; Returned value -1 instead of OPAL_SUCCESS
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [home:07059] [[INVALID],INVALID] ORTE_ERROR_LOG: Error in file runtime/orte_init.c at line 79
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [home:07059] [[INVALID],INVALID] ORTE_ERROR_LOG: Error in file orterun.c at line 694
</span><br>
<span class="quotelev3">&gt; &gt;&gt; make: *** [sample-1.fa] Error 255
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Can I know how to solve this bug?
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I got try to google around but I still fail to find related answer.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Below is the spec of my server:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Linux home 2.6.32-71.el6.x86_64 #1 SMP Wed Sep 1 01:33:01 EDT 2010 x86_64 x86_64 x86_64 GNU/Linux
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hope it is useful for you in order to solve the bug.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thanks.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; best regards
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Edge
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21074/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21075.php">Edge Edge: "Re: [OMPI users] Open-mpi running issue and bug"</a>
<li><strong>Previous message:</strong> <a href="21073.php">Edge Edge: "Re: [OMPI users] Open-mpi running issue and bug"</a>
<li><strong>In reply to:</strong> <a href="21073.php">Edge Edge: "Re: [OMPI users] Open-mpi running issue and bug"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21075.php">Edge Edge: "Re: [OMPI users] Open-mpi running issue and bug"</a>
<li><strong>Reply:</strong> <a href="21075.php">Edge Edge: "Re: [OMPI users] Open-mpi running issue and bug"</a>
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
