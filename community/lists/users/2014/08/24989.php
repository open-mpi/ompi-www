<?
$subject_val = "Re: [OMPI users] OpenMPI fails with np &gt; 65";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 12 08:59:02 2014" -->
<!-- isoreceived="20140812125902" -->
<!-- sent="Tue, 12 Aug 2014 12:59:01 +0000" -->
<!-- isosent="20140812125901" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI fails with np &amp;gt; 65" -->
<!-- id="F98ABC56-2A93-4B09-99F2-1103C1F47548_at_cisco.com" -->
<!-- charset="Windows-1252" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-12 08:59:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24990.php">Jeff Squyres (jsquyres): "Re: [OMPI users] ORTE daemon has unexpectedly failed after launch"</a>
<li><strong>Previous message:</strong> <a href="24988.php">Timur Ismagilov: "[OMPI users]  ORTE daemon has unexpectedly failed after launch"</a>
<li><strong>In reply to:</strong> <a href="24985.php">Lenny Verkhovsky: "Re: [OMPI users] OpenMPI fails with np &gt; 65"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25006.php">Lenny Verkhovsky: "Re: [OMPI users] OpenMPI fails with np &gt; 65"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Lenny --
<br>
<p>Since this is about the development trunk, how about sending these kinds of mails to the devel_at_[hidden] list?  Not all the OMPI developers are on the user's list, and this very definitely is not a user-level question.
<br>
<p><p>On Aug 12, 2014, at 6:12 AM, Lenny Verkhovsky &lt;lennyb_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  
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
<span class="quotelev1">&gt;      According to the attached log it&#146;s rsh environment
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
<span class="quotelev1">&gt; www.mellanox.com
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
<span class="quotelev1">&gt; From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Ralph Castain
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
<span class="quotelev1">&gt; On Aug 11, 2014, at 12:07 AM, Lenny Verkhovsky &lt;lennyb_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don&#146;t think so,
</span><br>
<span class="quotelev1">&gt; It&#146;s always the 66th node, even if I swap between 65th and 66th
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
<span class="quotelev1">&gt; SW Engineer,  Mellanox Technologies
</span><br>
<span class="quotelev1">&gt; www.mellanox.com
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
<span class="quotelev1">&gt; From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Ralph Castain
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
<span class="quotelev1">&gt; On Aug 10, 2014, at 1:13 PM, Lenny Verkhovsky &lt;lennyb_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; mpirun -np 66 --hostfile /proj/SSA/Mellanox/tmp//20140810_070156_hostfile.txt --mca btl tcp,self hostname
</span><br>
<span class="quotelev1">&gt; [nodename] [[4452,0],65] ORTE_ERROR_LOG: Error in file base/ess_base_std_orted.c at line 288
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &#133;&#133;&#133;&#133;&#133;&#133;&#133;&#133;&#133;&#133;&#133;&#133;&#133;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It looks like environment issue, but I can&#146;t find any limit related.
</span><br>
<span class="quotelev1">&gt; Any ideas ?
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt; Lenny Verkhovsky
</span><br>
<span class="quotelev1">&gt; SW Engineer,  Mellanox Technologies
</span><br>
<span class="quotelev1">&gt; www.mellanox.com
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
<span class="quotelev1">&gt; users_at_[hidden]
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
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/24964.php">http://www.open-mpi.org/community/lists/users/2014/08/24964.php</a>
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; &lt;mpi65.tgz&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/24985.php">http://www.open-mpi.org/community/lists/users/2014/08/24985.php</a>
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
<li><strong>Next message:</strong> <a href="24990.php">Jeff Squyres (jsquyres): "Re: [OMPI users] ORTE daemon has unexpectedly failed after launch"</a>
<li><strong>Previous message:</strong> <a href="24988.php">Timur Ismagilov: "[OMPI users]  ORTE daemon has unexpectedly failed after launch"</a>
<li><strong>In reply to:</strong> <a href="24985.php">Lenny Verkhovsky: "Re: [OMPI users] OpenMPI fails with np &gt; 65"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25006.php">Lenny Verkhovsky: "Re: [OMPI users] OpenMPI fails with np &gt; 65"</a>
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
