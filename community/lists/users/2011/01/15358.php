<?
$subject_val = "Re: [OMPI users] can't use &quot;--mca btl_openib_cpc_include xoob&quot;";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 13 09:11:25 2011" -->
<!-- isoreceived="20110113141125" -->
<!-- sent="Thu, 13 Jan 2011 09:11:17 -0500" -->
<!-- isosent="20110113141117" -->
<!-- name="Shamis, Pavel" -->
<!-- email="shamisp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] can't use &amp;quot;--mca btl_openib_cpc_include xoob&amp;quot;" -->
<!-- id="DA280670-545E-4F92-A8AA-FE59C60FAD05_at_ornl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="167ce1e.a9fc.12d40458d10.Coremail.ksz_at_sccas.cn" -->
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
<strong>Subject:</strong> Re: [OMPI users] can't use &quot;--mca btl_openib_cpc_include xoob&quot;<br>
<strong>From:</strong> Shamis, Pavel (<em>shamisp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-13 09:11:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15359.php">Jeff Squyres: "Re: [OMPI users] Error from mpirun command"</a>
<li><strong>Previous message:</strong> <a href="15357.php">Tena Sakai: "Re: [OMPI users] More newbie question: --hostfile option"</a>
<li><strong>In reply to:</strong> <a href="15247.php">&#227;&#219;&#202;&#165;&#213;&#220;: "[OMPI users] can't use &quot;--mca btl_openib_cpc_include xoob&quot;"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Please see the comments inline .
<br>
<p><p>When I use cmd &quot;mpirun -host LB270210,CB060106,CB060107 -np 3 --mca btl openib,self,sm a_user.out&quot; or &quot;mpirun -host LB270210,CB060106,CB060107 -np 3 --mca btl openib,self,sm --mca btl_openib_cpc_include rdmacm a_user.out&quot;, will print correct result, but use cmd &quot;mpirun -host LB270210,CB060106,CB060107 -np 3 --mca btl openib a_user.out&quot;, will print error mesg.
<br>
<p>I want to know:
<br>
1) When I want to use XRC, I must have a special IB switch?
<br>
<p>You don't have use special ib switches.
<br>
<p>2) How can I use XRC in ompi,and on which situation the XRC feature will bring benifit?
<br>
<p>About XRC benefit you may check this paper : <a href="http://www.open-mpi.org/papers/euro-pvmmpi-2008-xrc/">http://www.open-mpi.org/papers/euro-pvmmpi-2008-xrc/</a>
<br>
<p>How to use.
<br>
By default openib btl use follow QPs configuration - P,128,256,192,128:S,2048,256,128,32:S,12288,256,128,32:S,65536,256,128,32
<br>
You may find some description about this format, here - <a href="https://svn.open-mpi.org/trac/ompi/ticket/1260">https://svn.open-mpi.org/trac/ompi/ticket/1260</a>
<br>
But , bottom line , if you want to switch default QP configuration from RC qps to XRC qps you may use follow command line parameter:
<br>
--mca btl_openib_receive_queues X,128,256,192,128 X,2048,256,128,32 X,12288,256,128,32 X,65536,256,128,32
<br>
<p>3) If this is only way to using XRC that using &quot;-mca btl_openib_cpc_include xoob&quot;?
<br>
Actually this parameter does not enable XRC.  Please see #2.
<br>
4) When using xoob, which transport and network protocol ompi will use?
<br>
If you will use the parameter from #2 , the xoob cpc will be used automatically.
<br>
<p>I hope it helps.
<br>
<p>Pavel (Pasha) Shamis
<br>
<pre>
---
Application Performance Tools Group
Computer Science and Math Division
Oak Ridge National Laboratory
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15359.php">Jeff Squyres: "Re: [OMPI users] Error from mpirun command"</a>
<li><strong>Previous message:</strong> <a href="15357.php">Tena Sakai: "Re: [OMPI users] More newbie question: --hostfile option"</a>
<li><strong>In reply to:</strong> <a href="15247.php">&#227;&#219;&#202;&#165;&#213;&#220;: "[OMPI users] can't use &quot;--mca btl_openib_cpc_include xoob&quot;"</a>
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
