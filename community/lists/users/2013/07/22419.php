<?
$subject_val = "Re: [OMPI users] requirement on ssh when run openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 31 19:24:13 2013" -->
<!-- isoreceived="20130731232413" -->
<!-- sent="Wed, 31 Jul 2013 23:23:57 +0000" -->
<!-- isosent="20130731232357" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] requirement on ssh when run openmpi" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F78DEA1_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="30c2f966.1831.14036e85a8c.Coremail.qsmeng_at_126.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] requirement on ssh when run openmpi<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-31 19:23:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/08/22420.php">Paul Kapinos: "Re: [OMPI users] Big job, InfiniBand, MPI_Alltoallv and ibv_create_qp failed"</a>
<li><strong>Previous message:</strong> <a href="22418.php">meng : "Re: [OMPI users] requirement on ssh when run openmpi"</a>
<li><strong>In reply to:</strong> <a href="22418.php">meng : "Re: [OMPI users] requirement on ssh when run openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/08/22421.php">Reuti: "Re: [OMPI users] requirement on ssh when run openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 31, 2013, at 6:45 PM, meng &lt;qsmeng_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;       I install openmpi at /usr/local/openmpi-1.6.5 on both computers. and the two computers now can access each other without passwd required. I set the path and ld_library_path in .bashrc and source it.
</span><br>
<span class="quotelev1">&gt;      I still get the problems as before. In detail, the problem is as follows:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  bash: orted: command not found
</span><br>
<p>This error means that you're not setting the path properly on the remote node for non-interactive sessions.  Try this:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;ssh REMOTE_NODE env | grep PATH
<br>
<p>I think you'll find that the path for OMPI is not in the output.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/08/22420.php">Paul Kapinos: "Re: [OMPI users] Big job, InfiniBand, MPI_Alltoallv and ibv_create_qp failed"</a>
<li><strong>Previous message:</strong> <a href="22418.php">meng : "Re: [OMPI users] requirement on ssh when run openmpi"</a>
<li><strong>In reply to:</strong> <a href="22418.php">meng : "Re: [OMPI users] requirement on ssh when run openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/08/22421.php">Reuti: "Re: [OMPI users] requirement on ssh when run openmpi"</a>
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
