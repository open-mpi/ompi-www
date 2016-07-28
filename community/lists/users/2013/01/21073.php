<?
$subject_val = "Re: [OMPI users] Open-mpi running issue and bug";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  3 22:19:33 2013" -->
<!-- isoreceived="20130104031933" -->
<!-- sent="Thu, 3 Jan 2013 19:19:28 -0800 (PST)" -->
<!-- isosent="20130104031928" -->
<!-- name="Edge Edge" -->
<!-- email="edge_diners_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open-mpi running issue and bug" -->
<!-- id="1357269568.19062.YahooMailNeo_at_web162704.mail.bf1.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC3768E824_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Date:</strong> 2013-01-03 22:19:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21074.php">Ralph Castain: "Re: [OMPI users] Open-mpi running issue and bug"</a>
<li><strong>Previous message:</strong> <a href="21072.php">Chuck Yahoo: "Re: [OMPI users] MPI Java Bindings on Mac OSX"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/12/21050.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Open-mpi running issue and bug"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21074.php">Ralph Castain: "Re: [OMPI users] Open-mpi running issue and bug"</a>
<li><strong>Reply:</strong> <a href="21074.php">Ralph Castain: "Re: [OMPI users] Open-mpi running issue and bug"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,

When I issue the following command as shown in the info listed (<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>):
[home_at_edge openmpi-1.6.3]$mpirun --bynode --hostfile my_hostfile.txt --tag-output ompi_info -v ompi full --parsable&#160;
[home_at_edge&#160;openmpi-1.6.3]$ --------------------------------------------------------------------------

It looks like opal_init failed for some reason; your parallel process is
likely to abort. &#160;There are many reasons that a parallel process can
fail during opal_init; some of which are due to configuration or
environment problems. &#160;This failure appears to be an internal failure;
here's some additional information (which may only be relevant to an
Open MPI developer):

&#160; opal_shmem_base_select failed
&#160; --&gt; Returned value -1 instead of OPAL_SUCCESS
--------------------------------------------------------------------------
[home_at_edge:77658] [[INVALID],INVALID] ORTE_ERROR_LOG: Error in file runtime/orte_init.c at line 79
[home_at_edge:77658] [[INVALID],INVALID] ORTE_ERROR_LOG: Error in file orterun.c at line 694

I was downloading &quot;openmpi-1.6.3&quot;.
If I issue the following command in order to install&#160;openmpi-1.6.3.
It gives me the following log info after I issue, ./autogen.sh
log file:
*** Running GNU tools
[Running] autom4te --language=m4sh ompi_get_version.m4sh -o ompi_get_version.sh
[Running] libtoolize --automake --copy --ltdl

-------------------------------------------------------------------------
It seems that the execution of &quot;libtoolize --automake --copy --ltdl&quot; has failed. &#160;See above for
the specific error message that caused it to abort.
-------------------------------------------------------------------------


error log file:
configure.in:2125: installing `confdb/config.guess'
configure.in:2125: installing `confdb/config.sub'
configure.in:210: installing `confdb/install-sh'
configure.in:210: installing `confdb/missing'
adio/ad_bgl/Makefile.am: installing `confdb/depcomp'
configure.in:96: installing `config/compile'
configure.in:34: installing `config/config.guess'
configure.in:34: installing `config/config.sub'
configure.in:8: installing `config/install-sh'
configure.in:8: installing `config/missing'
rfg/Makefile.am: installing `config/depcomp'
configure.in:10: installing `config/config.guess'
configure.in:10: installing `config/config.sub'
configure.in:11: installing `config/install-sh'
configure.in:11: installing `config/missing'
otfauxlib/Makefile.am: installing `config/depcomp'
libtoolize: `COPYING.LIB' not found in `/usr/share/libtool/libltdl'

Thanks and looking forward to hear from you.

best regards
Edge


________________________________
 From: Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
To: Open MPI Users &lt;users_at_[hidden]&gt; 
Cc: Edge Edge &lt;edge_diners_at_[hidden]&gt; 
Sent: Sunday, December 30, 2012 2:07 AM
Subject: Re: [OMPI users] Open-mpi running issue and bug
 
Please sent all the info listed here:

&#160; &#160; <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>


On Dec 28, 2012, at 11:42 AM, Ralph Castain &lt;rhc_at_[hidden]&gt;
wrote:

&gt; What version of OMPI are you using? How was it configured?
&gt; 
&gt; 
&gt; On Dec 28, 2012, at 2:16 AM, Edge Edge &lt;edge_diners_at_[hidden]&gt; wrote:
&gt; 
&gt;&gt; Hi,
&gt;&gt; 
&gt;&gt; Currently I was trying to run mpirun to improve the performance of my running.
&gt;&gt; However it keeps on showing the following bug:
&gt;&gt; 
&gt;&gt; --------------------------------------------------------------------------
&gt;&gt; It looks like opal_init failed for some reason; your parallel process is
&gt;&gt; likely to abort.&#160; There are many reasons that a parallel process can
&gt;&gt; fail during opal_init; some of which are due to configuration or
&gt;&gt; environment problems.&#160; This failure appears to be an internal failure;
&gt;&gt; here's some additional information (which may only be relevant to an
&gt;&gt; Open MPI developer):
&gt;&gt; 
&gt;&gt;&#160;  opal_shmem_base_select failed
&gt;&gt;&#160;  --&gt; Returned value -1 instead of OPAL_SUCCESS
&gt;&gt; --------------------------------------------------------------------------
&gt;&gt; [home:07059] [[INVALID],INVALID] ORTE_ERROR_LOG: Error in file runtime/orte_init.c at line 79
&gt;&gt; [home:07059] [[INVALID],INVALID] ORTE_ERROR_LOG: Error in file orterun.c at line 694
&gt;&gt; make: *** [sample-1.fa] Error 255
&gt;&gt; 
&gt;&gt; Can I know how to solve this bug?
&gt;&gt; I got try to google around but I still fail to find related answer.
&gt;&gt; 
&gt;&gt; Below is the spec of my server:
&gt;&gt; Linux home 2.6.32-71.el6.x86_64 #1 SMP Wed Sep 1 01:33:01 EDT 2010 x86_64 x86_64 x86_64 GNU/Linux
&gt;&gt; 
&gt;&gt; Hope it is useful for you in order to solve the bug.
&gt;&gt; 
&gt;&gt; Thanks.
&gt;&gt; 
&gt;&gt; 
&gt;&gt; best regards
&gt;&gt; Edge
&gt;&gt; 
&gt;&gt; 
&gt;&gt; _______________________________________________
&gt;&gt; users mailing list
&gt;&gt; users_at_[hidden]
&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; 
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21073/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21074.php">Ralph Castain: "Re: [OMPI users] Open-mpi running issue and bug"</a>
<li><strong>Previous message:</strong> <a href="21072.php">Chuck Yahoo: "Re: [OMPI users] MPI Java Bindings on Mac OSX"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/12/21050.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Open-mpi running issue and bug"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21074.php">Ralph Castain: "Re: [OMPI users] Open-mpi running issue and bug"</a>
<li><strong>Reply:</strong> <a href="21074.php">Ralph Castain: "Re: [OMPI users] Open-mpi running issue and bug"</a>
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
