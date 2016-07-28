<?
$subject_val = "Re: [OMPI users] OpenMPI fails with np &gt; 65";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 13 04:00:10 2014" -->
<!-- isoreceived="20140813080010" -->
<!-- sent="Wed, 13 Aug 2014 08:00:06 +0000" -->
<!-- isosent="20140813080006" -->
<!-- name="Lenny Verkhovsky" -->
<!-- email="lennyb_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI fails with np &amp;gt; 65" -->
<!-- id="d1682af15cc14b308d29ba6bedf8feac_at_DB4PR05MB368.eurprd05.prod.outlook.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="316a22faf4514c919c13a6a29226f6ee_at_DB4PR05MB368.eurprd05.prod.outlook.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI fails with np &gt; 65<br>
<strong>From:</strong> Lenny Verkhovsky (<em>lennyb_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-13 04:00:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25007.php">Edgar Gabriel: "Re: [OMPI users] MPI-I/O issues"</a>
<li><strong>Previous message:</strong> <a href="25005.php">Jorge D'Elia: "Re: [OMPI users] Open MPI 1.8.1: &quot;make all&quot; error: symbol `Lhwloc1' is already defined"</a>
<li><strong>In reply to:</strong> <a href="24985.php">Lenny Verkhovsky: "Re: [OMPI users] OpenMPI fails with np &gt; 65"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Following Jeff's suggestion adding devel mailing list.
<br>
<p>Hi All,
<br>
I am currently facing strange situation that I can't run OMPI on more than 65 nodes.
<br>
It seems like environmental issue that does not allow me to open more connections.
<br>
Any ideas ?
<br>
Log attached, more info below in the mail.
<br>
<p>Running OMPI from trunk
<br>
[node-119.ssauniversal.ssa.kodiak.nx:02996] [[56978,0],65] ORTE_ERROR_LOG: Error in file base/ess_base_std_orted.c at line 288
<br>
<p>Thanks.
<br>
Lenny Verkhovsky
<br>
SW Engineer,  Mellanox Technologies
<br>
www.mellanox.com&lt;<a href="http://www.mellanox.com">http://www.mellanox.com</a>&gt;
<br>
<p>Office:    +972 74 712 9244
<br>
Mobile:  +972 54 554 0233
<br>
Fax:        +972 72 257 9400
<br>
<p>From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Lenny Verkhovsky
<br>
Sent: Tuesday, August 12, 2014 1:13 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] OpenMPI fails with np &gt; 65
<br>
<p><p>Hi,
<br>
<p>Config:
<br>
./configure --enable-openib-rdmacm-ibaddr --prefix /home/sources/ompi-bin --enable-mpirun-prefix-by-default --with-openib=/usr/local --enable-debug --disable-openib-connectx-xrc
<br>
<p>Run:
<br>
/home/sources/ompi-bin/bin/mpirun -np 65 --host ko0067,ko0069,ko0070,ko0074,ko0076,ko0079,ko0080,ko0082,ko0085,ko0087,ko0088,ko0090,ko0096,ko0098,ko0099,ko0101,ko0103,ko0107,ko0111,ko0114,ko0116,ko0125,ko0128,ko0134,ko0141,ko0144,ko0145,ko0148,ko0149,ko0150,ko0152,ko0154,ko0156,ko0157,ko0158,ko0162,ko0164,ko0166,ko0168,ko0170,ko0174,ko0178,ko0181,ko0185,ko0190,ko0192,ko0195,ko0197,ko0200,ko0203,ko0205,ko0207,ko0209,ko0210,ko0211,ko0213,ko0214,ko0217,ko0218,ko0223,ko0228,ko0229,ko0231,ko0235,ko0237 --mca btl openib,self  --mca btl_openib_cpc_include rdmacm --mca pml ob1 --mca btl_openib_if_include mthca0:1 --mca plm_base_verbose 5 --debug-daemons hostname 2&gt;&amp;1|tee &gt; /tmp/mpi.log
<br>
<p>Environment:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;According to the attached log it's rsh environment
<br>
<p><p>Output attached
<br>
<p>Notes:
<br>
The problem is always with tha last node, 64 connections work, 65 connections fail.
<br>
node-119.ssauniversal.ssa.kodiak.nx == ko0237
<br>
<p>mpi.log line 1034:
<br>
--------------------------------------------------------------------------
<br>
An invalid value was supplied for an enum variable.
<br>
&nbsp;&nbsp;Variable     : orte_debug_daemons
<br>
&nbsp;&nbsp;Value        : 1,1
<br>
&nbsp;&nbsp;Valid values : 0: f|false|disabled, 1: t|true|enabled
<br>
--------------------------------------------------------------------------
<br>
<p>mpi.log line 1059:
<br>
[node-119.ssauniversal.ssa.kodiak.nx:02996] [[56978,0],65] ORTE_ERROR_LOG: Error in file base/ess_base_std_orted.c at line 288
<br>
<p><p><p>Lenny Verkhovsky
<br>
SW Engineer,  Mellanox Technologies
<br>
www.mellanox.com&lt;<a href="http://www.mellanox.com">http://www.mellanox.com</a>&gt;
<br>
<p>Office:    +972 74 712 9244
<br>
Mobile:  +972 54 554 0233
<br>
Fax:        +972 72 257 9400
<br>
<p>From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Ralph Castain
<br>
Sent: Monday, August 11, 2014 4:53 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] OpenMPI fails with np &gt; 65
<br>
<p>Okay, let's start with the basics :-)
<br>
<p>How was this configured? What environment are you running in (rsh, slurm, ??)? If you configured --enable-debug, then please run it with
<br>
<p>--mca plm_base_verbose 5 --debug-daemons
<br>
<p>and send the output
<br>
<p><p>On Aug 11, 2014, at 12:07 AM, Lenny Verkhovsky &lt;lennyb_at_[hidden]&lt;mailto:lennyb_at_[hidden]&gt;&gt; wrote:
<br>
<p>I don't think so,
<br>
It's always the 66th node, even if I swap between 65th and 66th
<br>
I also get the same error when setting np=66, while having only 65 hosts in hostfile
<br>
(I am using only tcp btl )
<br>
<p><p>Lenny Verkhovsky
<br>
SW Engineer,  Mellanox Technologies
<br>
www.mellanox.com&lt;<a href="http://www.mellanox.com/">http://www.mellanox.com/</a>&gt;
<br>
<p>Office:    +972 74 712 9244
<br>
Mobile:  +972 54 554 0233
<br>
Fax:        +972 72 257 9400
<br>
<p>From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Ralph Castain
<br>
Sent: Monday, August 11, 2014 1:07 AM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] OpenMPI fails with np &gt; 65
<br>
<p>Looks to me like your 65th host is missing the dstore library - is it possible you don't have your paths set correctly on all hosts in your hostfile?
<br>
<p><p>On Aug 10, 2014, at 1:13 PM, Lenny Verkhovsky &lt;lennyb_at_[hidden]&lt;mailto:lennyb_at_[hidden]&gt;&gt; wrote:
<br>
<p><p>Hi all,
<br>
<p>Trying to run OpenMPI ( trunk Revision: 32428 ) I faced the problem running OMPI with more than 65 procs.
<br>
It looks like MPI failes to open 66th connection even with running `hostname` over tcp.
<br>
It also seems to unrelated to specific host.
<br>
All hosts are Ubuntu 12.04.1 LTS
<br>
<p>mpirun -np 66 --hostfile /proj/SSA/Mellanox/tmp//20140810_070156_hostfile.txt --mca btl tcp,self hostname
<br>
[nodename] [[4452,0],65] ORTE_ERROR_LOG: Error in file base/ess_base_std_orted.c at line 288
<br>
<p>.......................................
<br>
It looks like environment issue, but I can't find any limit related.
<br>
Any ideas ?
<br>
Thanks.
<br>
Lenny Verkhovsky
<br>
SW Engineer,  Mellanox Technologies
<br>
www.mellanox.com&lt;<a href="http://www.mellanox.com/">http://www.mellanox.com/</a>&gt;
<br>
<p>Office:    +972 74 712 9244
<br>
Mobile:  +972 54 554 0233
<br>
Fax:        +972 72 257 9400
<br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/24961.php">http://www.open-mpi.org/community/lists/users/2014/08/24961.php</a>
<br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/24964.php">http://www.open-mpi.org/community/lists/users/2014/08/24964.php</a>
<br>
<p><p><p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25006/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-compressed attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25006/mpi65.tgz">mpi65.tgz</a>
</ul>
<!-- attachment="mpi65.tgz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25007.php">Edgar Gabriel: "Re: [OMPI users] MPI-I/O issues"</a>
<li><strong>Previous message:</strong> <a href="25005.php">Jorge D'Elia: "Re: [OMPI users] Open MPI 1.8.1: &quot;make all&quot; error: symbol `Lhwloc1' is already defined"</a>
<li><strong>In reply to:</strong> <a href="24985.php">Lenny Verkhovsky: "Re: [OMPI users] OpenMPI fails with np &gt; 65"</a>
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
