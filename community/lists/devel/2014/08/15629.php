<?
$subject_val = "Re: [OMPI devel] [OMPI users] OpenMPI fails with np &gt; 65";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 13 09:19:45 2014" -->
<!-- isoreceived="20140813131945" -->
<!-- sent="Wed, 13 Aug 2014 09:19:44 -0400" -->
<!-- isosent="20140813131944" -->
<!-- name="Joshua Ladd" -->
<!-- email="jladd.mlnx_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI users] OpenMPI fails with np &amp;gt; 65" -->
<!-- id="CAG4F6z_mwyioR5kTA5tEEb8GfkYUDgA38Hwo97p7jNCsef_Xtg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="53EB2D9A.7070309_at_iferc.org" -->
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
<strong>From:</strong> Joshua Ladd (<em>jladd.mlnx_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-13 09:19:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15630.php">Lenny Verkhovsky: "Re: [OMPI devel] [OMPI users] OpenMPI fails with np &gt; 65"</a>
<li><strong>Previous message:</strong> <a href="15628.php">Ralph Castain: "Re: [OMPI devel] trunk hang when nodes have similar but private network"</a>
<li><strong>In reply to:</strong> <a href="15627.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI users] OpenMPI fails with np &gt; 65"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15630.php">Lenny Verkhovsky: "Re: [OMPI devel] [OMPI users] OpenMPI fails with np &gt; 65"</a>
<li><strong>Reply:</strong> <a href="15630.php">Lenny Verkhovsky: "Re: [OMPI devel] [OMPI users] OpenMPI fails with np &gt; 65"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Lenny,
<br>
<p>Is there any particular reason that you're using the trunk? The reason I
<br>
ask is because the trunk is in an unusually high state of flux at the
<br>
moment with a major move underway. If you're trying to use OMPI for
<br>
production grade runs, I would strongly advise picking up one of the stable
<br>
releases in the 1.8.x series. At this time,1.8.1 is available as the most
<br>
current stable release. The 1.8.2rc3 prerelease candidate is also available:
<br>
<p><a href="http://www.open-mpi.org/software/ompi/v1.8/">http://www.open-mpi.org/software/ompi/v1.8/</a>
<br>
<p>Best,
<br>
<p>Josh
<br>
<p><p><p><p><p><p>On Wed, Aug 13, 2014 at 5:19 AM, Gilles Gouaillardet &lt;
<br>
gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  Lenny,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; that looks related to #4857 which has been fixed in trunk since r32517
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; could you please update your openmpi library and try again ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 2014/08/13 17:00, Lenny Verkhovsky wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Following Jeff's suggestion adding devel mailing list.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi All,
</span><br>
<span class="quotelev1">&gt; I am currently facing strange situation that I can't run OMPI on more than 65 nodes.
</span><br>
<span class="quotelev1">&gt; It seems like environmental issue that does not allow me to open more connections.
</span><br>
<span class="quotelev1">&gt; Any ideas ?
</span><br>
<span class="quotelev1">&gt; Log attached, more info below in the mail.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Running OMPI from trunk
</span><br>
<span class="quotelev1">&gt; [node-119.ssauniversal.ssa.kodiak.nx:02996] [[56978,0],65] ORTE_ERROR_LOG: Error in file base/ess_base_std_orted.c at line 288
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt; Lenny Verkhovsky
</span><br>
<span class="quotelev1">&gt; SW Engineer,  Mellanox Technologies
</span><br>
<span class="quotelev1">&gt; www.mellanox.com&lt;<a href="http://www.mellanox.com">http://www.mellanox.com</a>&gt; &lt;<a href="http://www.mellanox.com">http://www.mellanox.com</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Office:    +972 74 712 9244
</span><br>
<span class="quotelev1">&gt; Mobile:  +972 54 554 0233
</span><br>
<span class="quotelev1">&gt; Fax:        +972 72 257 9400
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; From: users [mailto:users-bounces_at_[hidden] &lt;users-bounces_at_[hidden]&gt;] On Behalf Of Lenny Verkhovsky
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, August 12, 2014 1:13 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] OpenMPI fails with np &gt; 65
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Config:
</span><br>
<span class="quotelev1">&gt; ./configure --enable-openib-rdmacm-ibaddr --prefix /home/sources/ompi-bin --enable-mpirun-prefix-by-default --with-openib=/usr/local --enable-debug --disable-openib-connectx-xrc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Run:
</span><br>
<span class="quotelev1">&gt; /home/sources/ompi-bin/bin/mpirun -np 65 --host ko0067,ko0069,ko0070,ko0074,ko0076,ko0079,ko0080,ko0082,ko0085,ko0087,ko0088,ko0090,ko0096,ko0098,ko0099,ko0101,ko0103,ko0107,ko0111,ko0114,ko0116,ko0125,ko0128,ko0134,ko0141,ko0144,ko0145,ko0148,ko0149,ko0150,ko0152,ko0154,ko0156,ko0157,ko0158,ko0162,ko0164,ko0166,ko0168,ko0170,ko0174,ko0178,ko0181,ko0185,ko0190,ko0192,ko0195,ko0197,ko0200,ko0203,ko0205,ko0207,ko0209,ko0210,ko0211,ko0213,ko0214,ko0217,ko0218,ko0223,ko0228,ko0229,ko0231,ko0235,ko0237 --mca btl openib,self  --mca btl_openib_cpc_include rdmacm --mca pml ob1 --mca btl_openib_if_include mthca0:1 --mca plm_base_verbose 5 --debug-daemons hostname 2&gt;&amp;1|tee &gt; /tmp/mpi.log
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Environment:
</span><br>
<span class="quotelev1">&gt;      According to the attached log it's rsh environment
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Output attached
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Notes:
</span><br>
<span class="quotelev1">&gt; The problem is always with tha last node, 64 connections work, 65 connections fail.
</span><br>
<span class="quotelev1">&gt; node-119.ssauniversal.ssa.kodiak.nx == ko0237
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpi.log line 1034:
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; An invalid value was supplied for an enum variable.
</span><br>
<span class="quotelev1">&gt;   Variable     : orte_debug_daemons
</span><br>
<span class="quotelev1">&gt;   Value        : 1,1
</span><br>
<span class="quotelev1">&gt;   Valid values : 0: f|false|disabled, 1: t|true|enabled
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpi.log line 1059:
</span><br>
<span class="quotelev1">&gt; [node-119.ssauniversal.ssa.kodiak.nx:02996] [[56978,0],65] ORTE_ERROR_LOG: Error in file base/ess_base_std_orted.c at line 288
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Lenny Verkhovsky
</span><br>
<span class="quotelev1">&gt; SW Engineer,  Mellanox Technologies
</span><br>
<span class="quotelev1">&gt; www.mellanox.com&lt;<a href="http://www.mellanox.com">http://www.mellanox.com</a>&gt; &lt;<a href="http://www.mellanox.com">http://www.mellanox.com</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Office:    +972 74 712 9244
</span><br>
<span class="quotelev1">&gt; Mobile:  +972 54 554 0233
</span><br>
<span class="quotelev1">&gt; Fax:        +972 72 257 9400
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; From: users [mailto:users-bounces_at_[hidden] &lt;users-bounces_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; ] On Behalf Of Ralph Castain
</span><br>
<span class="quotelev1">&gt; Sent: Monday, August 11, 2014 4:53 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] OpenMPI fails with np &gt; 65
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Okay, let's start with the basics :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; How was this configured? What environment are you running in (rsh, slurm, ??)? If you configured --enable-debug, then please run it with
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --mca plm_base_verbose 5 --debug-daemons
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and send the output
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 11, 2014, at 12:07 AM, Lenny Verkhovsky &lt;lennyb_at_[hidden]&lt;mailto:lennyb_at_[hidden]&gt; &lt;lennyb_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't think so,
</span><br>
<span class="quotelev1">&gt; It's always the 66th node, even if I swap between 65th and 66th
</span><br>
<span class="quotelev1">&gt; I also get the same error when setting np=66, while having only 65 hosts in hostfile
</span><br>
<span class="quotelev1">&gt; (I am using only tcp btl )
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Lenny Verkhovsky
</span><br>
<span class="quotelev1">&gt; SW Engineer,  Mellanox Technologieswww.mellanox.com&lt;<a href="http://www.mellanox.com/">http://www.mellanox.com/</a>&gt; &lt;<a href="http://www.mellanox.com/">http://www.mellanox.com/</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Office:    +972 74 712 9244
</span><br>
<span class="quotelev1">&gt; Mobile:  +972 54 554 0233
</span><br>
<span class="quotelev1">&gt; Fax:        +972 72 257 9400
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; From: users [mailto:users-bounces_at_[hidden] &lt;users-bounces_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; ] On Behalf Of Ralph Castain
</span><br>
<span class="quotelev1">&gt; Sent: Monday, August 11, 2014 1:07 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] OpenMPI fails with np &gt; 65
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Looks to me like your 65th host is missing the dstore library - is it possible you don't have your paths set correctly on all hosts in your hostfile?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 10, 2014, at 1:13 PM, Lenny Verkhovsky &lt;lennyb_at_[hidden]&lt;mailto:lennyb_at_[hidden]&gt; &lt;lennyb_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Trying to run OpenMPI ( trunk Revision: 32428 ) I faced the problem running OMPI with more than 65 procs.
</span><br>
<span class="quotelev1">&gt; It looks like MPI failes to open 66th connection even with running `hostname` over tcp.
</span><br>
<span class="quotelev1">&gt; It also seems to unrelated to specific host.
</span><br>
<span class="quotelev1">&gt; All hosts are Ubuntu 12.04.1 LTS
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np 66 --hostfile /proj/SSA/Mellanox/tmp//20140810_070156_hostfile.txt --mca btl tcp,self hostname
</span><br>
<span class="quotelev1">&gt; [nodename] [[4452,0],65] ORTE_ERROR_LOG: Error in file base/ess_base_std_orted.c at line 288
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; .......................................
</span><br>
<span class="quotelev1">&gt; It looks like environment issue, but I can't find any limit related.
</span><br>
<span class="quotelev1">&gt; Any ideas ?
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt; Lenny Verkhovsky
</span><br>
<span class="quotelev1">&gt; SW Engineer,  Mellanox Technologieswww.mellanox.com&lt;<a href="http://www.mellanox.com/">http://www.mellanox.com/</a>&gt; &lt;<a href="http://www.mellanox.com/">http://www.mellanox.com/</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Office:    +972 74 712 9244
</span><br>
<span class="quotelev1">&gt; Mobile:  +972 54 554 0233
</span><br>
<span class="quotelev1">&gt; Fax:        +972 72 257 9400
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]&lt;mailto:users_at_[hidden]&gt; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/24961.php">http://www.open-mpi.org/community/lists/users/2014/08/24961.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]&lt;mailto:users_at_[hidden]&gt; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/24964.php">http://www.open-mpi.org/community/lists/users/2014/08/24964.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing listdevel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15626.php">http://www.open-mpi.org/community/lists/devel/2014/08/15626.php</a>
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
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15627.php">http://www.open-mpi.org/community/lists/devel/2014/08/15627.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15629/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15630.php">Lenny Verkhovsky: "Re: [OMPI devel] [OMPI users] OpenMPI fails with np &gt; 65"</a>
<li><strong>Previous message:</strong> <a href="15628.php">Ralph Castain: "Re: [OMPI devel] trunk hang when nodes have similar but private network"</a>
<li><strong>In reply to:</strong> <a href="15627.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI users] OpenMPI fails with np &gt; 65"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15630.php">Lenny Verkhovsky: "Re: [OMPI devel] [OMPI users] OpenMPI fails with np &gt; 65"</a>
<li><strong>Reply:</strong> <a href="15630.php">Lenny Verkhovsky: "Re: [OMPI devel] [OMPI users] OpenMPI fails with np &gt; 65"</a>
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
