<?
$subject_val = "Re: [OMPI devel] [OMPI users] OpenMPI fails with np &gt; 65";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 13 09:29:14 2014" -->
<!-- isoreceived="20140813132914" -->
<!-- sent="Wed, 13 Aug 2014 13:29:11 +0000" -->
<!-- isosent="20140813132911" -->
<!-- name="Lenny Verkhovsky" -->
<!-- email="lennyb_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI users] OpenMPI fails with np &amp;gt; 65" -->
<!-- id="775b9dc50c284fb485dc81e76d2efe3b_at_DB4PR05MB368.eurprd05.prod.outlook.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAG4F6z_mwyioR5kTA5tEEb8GfkYUDgA38Hwo97p7jNCsef_Xtg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI users] OpenMPI fails with np &gt; 65<br>
<strong>From:</strong> Lenny Verkhovsky (<em>lennyb_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-13 09:29:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15631.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] trunk hang when nodes have similar but private network"</a>
<li><strong>Previous message:</strong> <a href="15629.php">Joshua Ladd: "Re: [OMPI devel] [OMPI users] OpenMPI fails with np &gt; 65"</a>
<li><strong>In reply to:</strong> <a href="15629.php">Joshua Ladd: "Re: [OMPI devel] [OMPI users] OpenMPI fails with np &gt; 65"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15634.php">Joshua Ladd: "Re: [OMPI devel] [OMPI users] OpenMPI fails with np &gt; 65"</a>
<li><strong>Reply:</strong> <a href="15634.php">Joshua Ladd: "Re: [OMPI devel] [OMPI users] OpenMPI fails with np &gt; 65"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
I needed the following commit
<br>

<br>
r30875 | vasily | 2014-02-27 13:29:47 +0200 (Thu, 27 Feb 2014) | 3 lines
<br>
OPENIB BTL/CONNECT: Add support for AF_IB addressing in rdmacm.
<br>

<br>
Following Gilles&#226;&#128;&#153;s  mail about known #4857 issue I got update and now I can run with more than 65 hosts.
<br>
( thanks,  Gilles )
<br>

<br>
Since I am facing another problem, I probably should try 1.8rc as you suggested.
<br>
Thanks.
<br>
Lenny Verkhovsky
<br>
SW Engineer,  Mellanox Technologies
<br>
www.mellanox.com&lt;<a href="http://www.mellanox.com">http://www.mellanox.com</a>&gt;
<br>

<br>
Office:    +972 74 712 9244
<br>
Mobile:  +972 54 554 0233
<br>
Fax:        +972 72 257 9400
<br>

<br>
From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Joshua Ladd
<br>
Sent: Wednesday, August 13, 2014 4:20 PM
<br>
To: Open MPI Developers
<br>
Subject: Re: [OMPI devel] [OMPI users] OpenMPI fails with np &gt; 65
<br>

<br>
Lenny,
<br>
Is there any particular reason that you're using the trunk? The reason I ask is because the trunk is in an unusually high state of flux at the moment with a major move underway. If you're trying to use OMPI for production grade runs, I would strongly advise picking up one of the stable releases in the 1.8.x series. At this time,1.8.1 is available as the most current stable release. The 1.8.2rc3 prerelease candidate is also available:
<br>

<br>
<a href="http://www.open-mpi.org/software/ompi/v1.8/">http://www.open-mpi.org/software/ompi/v1.8/</a>
<br>
Best,
<br>
Josh
<br>

<br>

<br>

<br>

<br>
On Wed, Aug 13, 2014 at 5:19 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&lt;mailto:gilles.gouaillardet_at_[hidden]&gt;&gt; wrote:
<br>
Lenny,
<br>

<br>
that looks related to #4857 which has been fixed in trunk since r32517
<br>

<br>
could you please update your openmpi library and try again ?
<br>

<br>
Gilles
<br>

<br>

<br>
On 2014/08/13 17:00, Lenny Verkhovsky wrote:
<br>

<br>
Following Jeff's suggestion adding devel mailing list.
<br>

<br>

<br>

<br>
Hi All,
<br>

<br>
I am currently facing strange situation that I can't run OMPI on more than 65 nodes.
<br>

<br>
It seems like environmental issue that does not allow me to open more connections.
<br>

<br>
Any ideas ?
<br>

<br>
Log attached, more info below in the mail.
<br>

<br>

<br>

<br>
Running OMPI from trunk
<br>

<br>
[node-119.ssauniversal.ssa.kodiak.nx:02996] [[56978,0],65] ORTE_ERROR_LOG: Error in file base/ess_base_std_orted.c at line 288
<br>

<br>

<br>

<br>
Thanks.
<br>

<br>
Lenny Verkhovsky
<br>

<br>
SW Engineer,  Mellanox Technologies
<br>

<br>
www.mellanox.com&lt;<a href="http://www.mellanox.com">http://www.mellanox.com</a>&gt;&lt;<a href="http://www.mellanox.com">http://www.mellanox.com</a>&gt;&lt;<a href="http://www.mellanox.com">http://www.mellanox.com</a>&gt;
<br>

<br>

<br>

<br>

<br>

<br>
Office:    +972 74 712 9244&lt;tel:%2B972%2074%20712%209244&gt;
<br>

<br>
Mobile:  +972 54 554 0233&lt;tel:%2B972%2054%20554%200233&gt;
<br>

<br>
Fax:        +972 72 257 9400&lt;tel:%2B972%2072%20257%209400&gt;
<br>

<br>

<br>

<br>
From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Lenny Verkhovsky
<br>

<br>
Sent: Tuesday, August 12, 2014 1:13 PM
<br>

<br>
To: Open MPI Users
<br>

<br>
Subject: Re: [OMPI users] OpenMPI fails with np &gt; 65
<br>

<br>

<br>

<br>

<br>

<br>
Hi,
<br>

<br>

<br>

<br>
Config:
<br>

<br>
./configure --enable-openib-rdmacm-ibaddr --prefix /home/sources/ompi-bin --enable-mpirun-prefix-by-default --with-openib=/usr/local --enable-debug --disable-openib-connectx-xrc
<br>

<br>

<br>

<br>
Run:
<br>

<br>
/home/sources/ompi-bin/bin/mpirun -np 65 --host ko0067,ko0069,ko0070,ko0074,ko0076,ko0079,ko0080,ko0082,ko0085,ko0087,ko0088,ko0090,ko0096,ko0098,ko0099,ko0101,ko0103,ko0107,ko0111,ko0114,ko0116,ko0125,ko0128,ko0134,ko0141,ko0144,ko0145,ko0148,ko0149,ko0150,ko0152,ko0154,ko0156,ko0157,ko0158,ko0162,ko0164,ko0166,ko0168,ko0170,ko0174,ko0178,ko0181,ko0185,ko0190,ko0192,ko0195,ko0197,ko0200,ko0203,ko0205,ko0207,ko0209,ko0210,ko0211,ko0213,ko0214,ko0217,ko0218,ko0223,ko0228,ko0229,ko0231,ko0235,ko0237 --mca btl openib,self  --mca btl_openib_cpc_include rdmacm --mca pml ob1 --mca btl_openib_if_include mthca0:1 --mca plm_base_verbose 5 --debug-daemons hostname 2&gt;&amp;1|tee &gt; /tmp/mpi.log
<br>

<br>

<br>

<br>
Environment:
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;According to the attached log it's rsh environment
<br>

<br>

<br>

<br>

<br>

<br>
Output attached
<br>

<br>

<br>

<br>
Notes:
<br>

<br>
The problem is always with tha last node, 64 connections work, 65 connections fail.
<br>

<br>
node-119.ssauniversal.ssa.kodiak.nx == ko0237
<br>

<br>

<br>

<br>
mpi.log line 1034:
<br>

<br>
--------------------------------------------------------------------------
<br>

<br>
An invalid value was supplied for an enum variable.
<br>

<br>
&nbsp;&nbsp;Variable     : orte_debug_daemons
<br>

<br>
&nbsp;&nbsp;Value        : 1,1
<br>

<br>
&nbsp;&nbsp;Valid values : 0: f|false|disabled, 1: t|true|enabled
<br>

<br>
--------------------------------------------------------------------------
<br>

<br>

<br>

<br>
mpi.log line 1059:
<br>

<br>
[node-119.ssauniversal.ssa.kodiak.nx:02996] [[56978,0],65] ORTE_ERROR_LOG: Error in file base/ess_base_std_orted.c at line 288
<br>

<br>

<br>

<br>

<br>

<br>

<br>

<br>
Lenny Verkhovsky
<br>

<br>
SW Engineer,  Mellanox Technologies
<br>

<br>
www.mellanox.com&lt;<a href="http://www.mellanox.com">http://www.mellanox.com</a>&gt;&lt;<a href="http://www.mellanox.com">http://www.mellanox.com</a>&gt;&lt;<a href="http://www.mellanox.com">http://www.mellanox.com</a>&gt;
<br>

<br>

<br>

<br>

<br>

<br>
Office:    +972 74 712 9244&lt;tel:%2B972%2074%20712%209244&gt;
<br>

<br>
Mobile:  +972 54 554 0233&lt;tel:%2B972%2054%20554%200233&gt;
<br>

<br>
Fax:        +972 72 257 9400&lt;tel:%2B972%2072%20257%209400&gt;
<br>

<br>

<br>

<br>
From: users [mailto:users-bounces_at_[hidden]
<br>

<br>
] On Behalf Of Ralph Castain
<br>

<br>
Sent: Monday, August 11, 2014 4:53 PM
<br>

<br>
To: Open MPI Users
<br>

<br>
Subject: Re: [OMPI users] OpenMPI fails with np &gt; 65
<br>

<br>

<br>

<br>
Okay, let's start with the basics :-)
<br>

<br>

<br>

<br>
How was this configured? What environment are you running in (rsh, slurm, ??)? If you configured --enable-debug, then please run it with
<br>

<br>

<br>

<br>
--mca plm_base_verbose 5 --debug-daemons
<br>

<br>

<br>

<br>
and send the output
<br>

<br>

<br>

<br>

<br>

<br>
On Aug 11, 2014, at 12:07 AM, Lenny Verkhovsky &lt;lennyb_at_[hidden]&lt;mailto:lennyb_at_[hidden]&gt;&lt;mailto:lennyb_at_[hidden]&gt;&lt;mailto:lennyb_at_[hidden]&gt;&gt; wrote:
<br>

<br>

<br>

<br>
I don't think so,
<br>

<br>
It's always the 66th node, even if I swap between 65th and 66th
<br>

<br>
I also get the same error when setting np=66, while having only 65 hosts in hostfile
<br>

<br>
(I am using only tcp btl )
<br>

<br>

<br>

<br>

<br>

<br>
Lenny Verkhovsky
<br>

<br>
SW Engineer,  Mellanox Technologies
<br>

<br>
www.mellanox.com&lt;<a href="http://www.mellanox.com">http://www.mellanox.com</a>&gt;&lt;<a href="http://www.mellanox.com/">http://www.mellanox.com/</a>&gt;&lt;<a href="http://www.mellanox.com/">http://www.mellanox.com/</a>&gt;
<br>

<br>

<br>

<br>

<br>

<br>
Office:    +972 74 712 9244&lt;tel:%2B972%2074%20712%209244&gt;
<br>

<br>
Mobile:  +972 54 554 0233&lt;tel:%2B972%2054%20554%200233&gt;
<br>

<br>
Fax:        +972 72 257 9400&lt;tel:%2B972%2072%20257%209400&gt;
<br>

<br>

<br>

<br>
From: users [mailto:users-bounces_at_[hidden]
<br>

<br>
] On Behalf Of Ralph Castain
<br>

<br>
Sent: Monday, August 11, 2014 1:07 AM
<br>

<br>
To: Open MPI Users
<br>

<br>
Subject: Re: [OMPI users] OpenMPI fails with np &gt; 65
<br>

<br>

<br>

<br>
Looks to me like your 65th host is missing the dstore library - is it possible you don't have your paths set correctly on all hosts in your hostfile?
<br>

<br>

<br>

<br>

<br>

<br>
On Aug 10, 2014, at 1:13 PM, Lenny Verkhovsky &lt;lennyb_at_[hidden]&lt;mailto:lennyb_at_[hidden]&gt;&lt;mailto:lennyb_at_[hidden]&gt;&lt;mailto:lennyb_at_[hidden]&gt;&gt; wrote:
<br>

<br>

<br>

<br>

<br>

<br>
Hi all,
<br>

<br>

<br>

<br>
Trying to run OpenMPI ( trunk Revision: 32428 ) I faced the problem running OMPI with more than 65 procs.
<br>

<br>
It looks like MPI failes to open 66th connection even with running `hostname` over tcp.
<br>

<br>
It also seems to unrelated to specific host.
<br>

<br>
All hosts are Ubuntu 12.04.1 LTS
<br>

<br>

<br>

<br>
mpirun -np 66 --hostfile /proj/SSA/Mellanox/tmp//20140810_070156_hostfile.txt --mca btl tcp,self hostname
<br>

<br>
[nodename] [[4452,0],65] ORTE_ERROR_LOG: Error in file base/ess_base_std_orted.c at line 288
<br>

<br>

<br>

<br>
.......................................
<br>

<br>
It looks like environment issue, but I can't find any limit related.
<br>

<br>
Any ideas ?
<br>

<br>
Thanks.
<br>

<br>
Lenny Verkhovsky
<br>

<br>
SW Engineer,  Mellanox Technologies
<br>

<br>
www.mellanox.com&lt;<a href="http://www.mellanox.com">http://www.mellanox.com</a>&gt;&lt;<a href="http://www.mellanox.com/">http://www.mellanox.com/</a>&gt;&lt;<a href="http://www.mellanox.com/">http://www.mellanox.com/</a>&gt;
<br>

<br>

<br>

<br>

<br>

<br>
Office:    +972 74 712 9244&lt;tel:%2B972%2074%20712%209244&gt;
<br>

<br>
Mobile:  +972 54 554 0233&lt;tel:%2B972%2054%20554%200233&gt;
<br>

<br>
Fax:        +972 72 257 9400&lt;tel:%2B972%2072%20257%209400&gt;
<br>

<br>

<br>

<br>
_______________________________________________
<br>

<br>
users mailing list
<br>

<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]&gt;
<br>

<br>

<br>

<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>

<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/24961.php">http://www.open-mpi.org/community/lists/users/2014/08/24961.php</a>
<br>

<br>

<br>

<br>
_______________________________________________
<br>

<br>
users mailing list
<br>

<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]&gt;&lt;mailto:users_at_[hidden]&gt;
<br>

<br>

<br>

<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>

<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/24964.php">http://www.open-mpi.org/community/lists/users/2014/08/24964.php</a>
<br>

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
Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15626.php">http://www.open-mpi.org/community/lists/devel/2014/08/15626.php</a>
<br>

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
Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15627.php">http://www.open-mpi.org/community/lists/devel/2014/08/15627.php</a>
<br>

<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15630/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15631.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] trunk hang when nodes have similar but private network"</a>
<li><strong>Previous message:</strong> <a href="15629.php">Joshua Ladd: "Re: [OMPI devel] [OMPI users] OpenMPI fails with np &gt; 65"</a>
<li><strong>In reply to:</strong> <a href="15629.php">Joshua Ladd: "Re: [OMPI devel] [OMPI users] OpenMPI fails with np &gt; 65"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15634.php">Joshua Ladd: "Re: [OMPI devel] [OMPI users] OpenMPI fails with np &gt; 65"</a>
<li><strong>Reply:</strong> <a href="15634.php">Joshua Ladd: "Re: [OMPI devel] [OMPI users] OpenMPI fails with np &gt; 65"</a>
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
