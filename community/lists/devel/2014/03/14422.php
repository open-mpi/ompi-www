<?
$subject_val = "Re: [OMPI devel] &#181;&#170;&#206;`: &#181;&#170;&#206;`: doubt on latency result with OpenMPI library";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 28 13:02:45 2014" -->
<!-- isoreceived="20140328170245" -->
<!-- sent="Fri, 28 Mar 2014 17:02:43 +0000" -->
<!-- isosent="20140328170243" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] &amp;#181;&amp;#170;&amp;#206;`: &amp;#181;&amp;#170;&amp;#206;`: doubt on latency result with OpenMPI library" -->
<!-- id="8FD64AE8-B36D-4E39-98D9-5D162CECC9A2_at_cisco.com" -->
<!-- charset="big5" -->
<!-- inreplyto="53CFE433-D8D5-490A-A8EE-87A6DBA6C131_at_ornl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] &#181;&#170;&#206;`: &#181;&#170;&#206;`: doubt on latency result with OpenMPI library<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-28 13:02:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14423.php">Joshua Ladd: "Re: [OMPI devel] &#180;&#240;&#184;&#180;: &#180;&#240;&#184;&#180;: doubt on latency result with OpenMPI library"</a>
<li><strong>Previous message:</strong> <a href="14421.php">Shamis, Pavel: "Re: [OMPI devel] &#181;&#170;&#206;`: &#181;&#170;&#206;`: doubt on latency result with OpenMPI library"</a>
<li><strong>In reply to:</strong> <a href="14421.php">Shamis, Pavel: "Re: [OMPI devel] &#181;&#170;&#206;`: &#181;&#170;&#206;`: doubt on latency result with OpenMPI library"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14427.php">Wang,Yanfei(SYS): "[OMPI devel] &#180;&#240;&#184;&#180;:  &#180;&#240;&#184;&#180;:  &#180;&#240;&#184;&#180;: &#180;&#240;&#184;&#180;: doubt on latency result with OpenMPI library"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 28, 2014, at 12:18 PM, &quot;Shamis, Pavel&quot; &lt;shamisp_at_[hidden]&gt; wrote:
<br>

<br>
<span class="quotelev2">&gt;&gt; Technically you may setup RoCE connection without RDMA CM. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The version of the RoCE support that I implemented (in an alternative MPI implementation) did it through the regular OOB
</span><br>
<span class="quotelev1">&gt; channel. As I remember the only difference is the fact that you have to exchange mac instead of guid plus some other small tricks. The problem
</span><br>
<span class="quotelev1">&gt; of this approach is in the VLAN support, which is more challenging to implement this way. Therefore RDMACM is sort of &quot;preferred&quot; method.
</span><br>

<br>

<br>
Huh.  Didn't know that.
<br>

<br>
-- 
<br>
Jeff Squyres
<br>
jsquyres_at_[hidden]
<br>
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
<br>

<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14423.php">Joshua Ladd: "Re: [OMPI devel] &#180;&#240;&#184;&#180;: &#180;&#240;&#184;&#180;: doubt on latency result with OpenMPI library"</a>
<li><strong>Previous message:</strong> <a href="14421.php">Shamis, Pavel: "Re: [OMPI devel] &#181;&#170;&#206;`: &#181;&#170;&#206;`: doubt on latency result with OpenMPI library"</a>
<li><strong>In reply to:</strong> <a href="14421.php">Shamis, Pavel: "Re: [OMPI devel] &#181;&#170;&#206;`: &#181;&#170;&#206;`: doubt on latency result with OpenMPI library"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14427.php">Wang,Yanfei(SYS): "[OMPI devel] &#180;&#240;&#184;&#180;:  &#180;&#240;&#184;&#180;:  &#180;&#240;&#184;&#180;: &#180;&#240;&#184;&#180;: doubt on latency result with OpenMPI library"</a>
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
