<?
$subject_val = "Re: [OMPI users] Open-mpi running issue and bug";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan  4 03:08:31 2013" -->
<!-- isoreceived="20130104080831" -->
<!-- sent="Fri, 4 Jan 2013 00:08:21 -0800 (PST)" -->
<!-- isosent="20130104080821" -->
<!-- name="Edge Edge" -->
<!-- email="edge_diners_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open-mpi running issue and bug" -->
<!-- id="1357286901.52654.YahooMailNeo_at_web162701.mail.bf1.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4AEE2DD1-7EB4-4DA3-A8E4-B4E67038D945_at_open-mpi.org" -->
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
<strong>From:</strong> Edge Edge (<em>edge_diners_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-04 03:08:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21076.php">Torbjörn Björkman: "[OMPI users] MPI_IN_PLACE not working for Fortran-compiled code linked with mpicc on Mac OS X"</a>
<li><strong>Previous message:</strong> <a href="21074.php">Ralph Castain: "Re: [OMPI users] Open-mpi running issue and bug"</a>
<li><strong>In reply to:</strong> <a href="21074.php">Ralph Castain: "Re: [OMPI users] Open-mpi running issue and bug"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21085.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Open-mpi running issue and bug"</a>
<li><strong>Reply:</strong> <a href="21085.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Open-mpi running issue and bug"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,

Thanks for your fast reply.
I'm very appreciate it.

It shown the following info when I issue:
./configure

configure: error: cannot find install-sh, install.sh, or shtool in config &quot;.&quot;/config


I was download&#160;openmpi-1.6.3.tar.gz and unzip it.

Thanks and looking forward to hear from you.

best regards
Edge


________________________________
 From: Ralph Castain &lt;rhc_at_[hidden]&gt;
To: Edge Edge &lt;edge_diners_at_[hidden]&gt;; Open MPI Users &lt;users_at_[hidden]&gt; 
Sent: Friday, January 4, 2013 11:53 AM
Subject: Re: [OMPI users] Open-mpi running issue and bug
 

If you are building from a tarball, you don't need nor want to run autogen. All you want to do is run ./configure.

If you attempt to run autogen, you'll have to install all the required tools - including an appropriate libtool. Unless you are adding a component to OMPI, you're better off not doing so.



On Jan 3, 2013, at 7:19 PM, Edge Edge &lt;edge_diners_at_[hidden]&gt; wrote:

Hi,
&gt;
&gt;
&gt;When I issue the following command as shown in the info listed (<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>):
&gt;[home_at_edge openmpi-1.6.3]$mpirun --bynode --hostfile my_hostfile.txt --tag-output ompi_info -v ompi full --parsable&#160;
&gt;[home_at_edge&#160;openmpi-1.6.3]$ --------------------------------------------------------------------------
&gt;
&gt;It looks like opal_init failed for some reason; your parallel process is
&gt;likely to abort. &#160;There are many reasons that a parallel process can
&gt;fail during opal_init; some of which are due to configuration or
&gt;environment problems. &#160;This failure appears to be an internal failure;
&gt;here's some additional information (which may only be relevant to an
&gt;Open MPI developer):
&gt;
&gt;
&gt;&#160; opal_shmem_base_select failed
&gt;&#160; --&gt; Returned value -1 instead of OPAL_SUCCESS
&gt;--------------------------------------------------------------------------
&gt;[home_at_edge:77658] [[INVALID],INVALID] ORTE_ERROR_LOG: Error in file runtime/orte_init.c at line 79
&gt;[home_at_edge:77658] [[INVALID],INVALID] ORTE_ERROR_LOG: Error in file orterun.c at line 694
&gt;
&gt;
&gt;I was downloading &quot;openmpi-1.6.3&quot;.
&gt;If I issue the following command in order to install&#160;openmpi-1.6.3.
&gt;It gives me the following log info after I issue, ./autogen.sh
&gt;log file:
&gt;*** Running GNU tools
&gt;[Running] autom4te --language=m4sh ompi_get_version.m4sh -o ompi_get_version.sh
&gt;[Running] libtoolize --automake --copy --ltdl
&gt;
&gt;
&gt;-------------------------------------------------------------------------
&gt;It seems that the execution of &quot;libtoolize --automake --copy --ltdl&quot; has failed. &#160;See above for
&gt;the specific error message that caused it to abort.
&gt;-------------------------------------------------------------------------
&gt;
&gt;
&gt;error log file:
&gt;configure.in:2125: installing `confdb/config.guess'
&gt;configure.in:2125: installing `confdb/config.sub'
&gt;configure.in:210: installing `confdb/install-sh'
&gt;configure.in:210: installing `confdb/missing'
&gt;adio/ad_bgl/Makefile.am: installing `confdb/depcomp'
&gt;configure.in:96: installing `config/compile'
&gt;configure.in:34: installing `config/config.guess'
&gt;configure.in:34: installing `config/config.sub'
&gt;configure.in:8: installing `config/install-sh'
&gt;configure.in:8: installing `config/missing'
&gt;rfg/Makefile.am: installing `config/depcomp'
&gt;configure.in:10: installing `config/config.guess'
&gt;configure.in:10: installing `config/config.sub'
&gt;configure.in:11: installing `config/install-sh'
&gt;configure.in:11: installing `config/missing'
&gt;otfauxlib/Makefile.am: installing `config/depcomp'
&gt;libtoolize: `COPYING.LIB' not found in `/usr/share/libtool/libltdl'
&gt;
&gt;
&gt;Thanks and looking forward to hear from you.
&gt;
&gt;
&gt;best regards
&gt;Edge
&gt;
&gt;
&gt;
&gt;________________________________
&gt; From: Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
&gt;To: Open MPI Users &lt;users_at_[hidden]&gt; 
&gt;Cc: Edge Edge &lt;edge_diners_at_[hidden]&gt; 
&gt;Sent: Sunday, December 30, 2012 2:07 AM
&gt;Subject: Re: [OMPI users] Open-mpi running issue and bug
&gt; 
&gt;Please sent all the info listed here:
&gt;
&gt;&#160; &#160; <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
&gt;
&gt;
&gt;On Dec 28, 2012, at 11:42 AM, Ralph Castain &lt;rhc_at_[hidden]&gt;
&gt;wrote:
&gt;
&gt;&gt; What version of OMPI are you using? How was it configured?
&gt;&gt; 
&gt;&gt; 
&gt;&gt; On Dec 28, 2012, at 2:16 AM, Edge Edge &lt;edge_diners_at_[hidden]&gt; wrote:
&gt;&gt; 
&gt;&gt;&gt; Hi,
&gt;&gt;&gt; 
&gt;&gt;&gt; Currently I was trying to run mpirun to improve the performance of my running.
&gt;&gt;&gt; However it keeps on showing the following bug:
&gt;&gt;&gt; 
&gt;&gt;&gt; --------------------------------------------------------------------------
&gt;&gt;&gt; It looks like opal_init failed for some reason; your parallel process is
&gt;&gt;&gt; likely to abort.&#160; There are many reasons that a parallel
 process can
&gt;&gt;&gt; fail during opal_init; some of which are due to configuration or
&gt;&gt;&gt; environment problems.&#160; This failure appears to be an internal failure;
&gt;&gt;&gt; here's some additional information (which may only be relevant to an
&gt;&gt;&gt; Open MPI developer):
&gt;&gt;&gt; 
&gt;&gt;&gt;&#160;  opal_shmem_base_select failed
&gt;&gt;&gt;&#160;  --&gt; Returned value -1 instead of OPAL_SUCCESS
&gt;&gt;&gt; --------------------------------------------------------------------------
&gt;&gt;&gt; [home:07059] [[INVALID],INVALID] ORTE_ERROR_LOG: Error in file runtime/orte_init.c at line 79
&gt;&gt;&gt; [home:07059] [[INVALID],INVALID] ORTE_ERROR_LOG: Error in file orterun.c at line 694
&gt;&gt;&gt; make: *** [sample-1.fa] Error 255
&gt;&gt;&gt; 
&gt;&gt;&gt; Can I know how to solve this bug?
&gt;&gt;&gt; I got try to google around but I still fail to find related answer.
&gt;&gt;&gt; 
&gt;&gt;&gt; Below is the spec of my server:
&gt;&gt;&gt;
 Linux home 2.6.32-71.el6.x86_64 #1 SMP Wed Sep 1 01:33:01 EDT 2010 x86_64 x86_64 x86_64 GNU/Linux
&gt;&gt;&gt; 
&gt;&gt;&gt; Hope it is useful for you in order to solve the bug.
&gt;&gt;&gt; 
&gt;&gt;&gt; Thanks.
&gt;&gt;&gt; 
&gt;&gt;&gt; 
&gt;&gt;&gt; best regards
&gt;&gt;&gt; Edge
&gt;&gt;&gt; 
&gt;&gt;&gt; 
&gt;&gt;&gt; _______________________________________________
&gt;&gt;&gt; users mailing list
&gt;&gt;&gt; users_at_[hidden]
&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt; 
&gt;&gt; _______________________________________________
&gt;&gt; users mailing list
&gt;&gt; users_at_[hidden]
&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;
&gt;
&gt;
&gt;_______________________________________________
&gt;users mailing list
&gt;users_at_[hidden]
&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21075/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21076.php">Torbjörn Björkman: "[OMPI users] MPI_IN_PLACE not working for Fortran-compiled code linked with mpicc on Mac OS X"</a>
<li><strong>Previous message:</strong> <a href="21074.php">Ralph Castain: "Re: [OMPI users] Open-mpi running issue and bug"</a>
<li><strong>In reply to:</strong> <a href="21074.php">Ralph Castain: "Re: [OMPI users] Open-mpi running issue and bug"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21085.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Open-mpi running issue and bug"</a>
<li><strong>Reply:</strong> <a href="21085.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Open-mpi running issue and bug"</a>
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
