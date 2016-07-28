<?
$subject_val = "Re: [OMPI users] btl_tcp_if_include setting";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 14 10:42:06 2013" -->
<!-- isoreceived="20131014144206" -->
<!-- sent="Mon, 14 Oct 2013 14:42:05 +0000" -->
<!-- isosent="20131014144205" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] btl_tcp_if_include setting" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F957CA4_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5974AF7F-7C50-4514-9181-CAE5EF718693_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] btl_tcp_if_include setting<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-14 10:42:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22787.php">Ray Sheppard: "Re: [OMPI users] btl_tcp_if_include setting"</a>
<li><strong>Previous message:</strong> <a href="22785.php">Ralph Castain: "Re: [OMPI users] btl_tcp_if_include setting"</a>
<li><strong>In reply to:</strong> <a href="22785.php">Ralph Castain: "Re: [OMPI users] btl_tcp_if_include setting"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22787.php">Ray Sheppard: "Re: [OMPI users] btl_tcp_if_include setting"</a>
<li><strong>Reply:</strong> <a href="22787.php">Ray Sheppard: "Re: [OMPI users] btl_tcp_if_include setting"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
More info on Ralph's comment is available here:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/faq/?category=tuning#setting-mca-params">http://www.open-mpi.org/faq/?category=tuning#setting-mca-params</a>
<br>
<p><p>On Oct 14, 2013, at 10:36 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; It won't be a configure switch, but you can put the following in your default system mca param file:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; btl_tcp_if_include=ipogif0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You'll find that file in &lt;prefix&gt;/etc - it is called openmpi-mca-params.conf. Users won't have to enter it after that since we pick that file up by default.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Oct 14, 2013, at 7:27 AM, Ray Sheppard &lt;rsheppar_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;  I am setting up version 1.7.2 for a Cray XE-6.  The build nodes have different interfaces than the compute nodes. I have been able to set it up, but users need to embed the following into their mpirun command:
</span><br>
<span class="quotelev2">&gt;&gt; --mca btl_tcp_if_include ipogif0 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Currently, The ompi_info shows as below.  I have been trying to figure out the correct configure switch to add to the build to remove the need for a permanent mpirun switch, but seem to be not getting it right.  Any suggestions are welcomed. Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;     Ray
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ompi_info --param btl all
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_tcp_if_include&quot; (current value: &quot;&quot;,
</span><br>
<span class="quotelev2">&gt;&gt;                          data source: default, level: 1 user/basic, type:
</span><br>
<span class="quotelev2">&gt;&gt;                          string)
</span><br>
<span class="quotelev2">&gt;&gt;                          Comma-delimited list of devices and/or CIDR
</span><br>
<span class="quotelev2">&gt;&gt;                          notation of networks to use for MPI communication
</span><br>
<span class="quotelev2">&gt;&gt;                          (e.g., &quot;eth0,192.168.0.0/16&quot;).  Mutually exclusive
</span><br>
<span class="quotelev2">&gt;&gt;                          with btl_tcp_if_exclude.
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA btl: parameter &quot;btl_tcp_if_exclude&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt;                          &quot;127.0.0.1/8,sppp&quot;, data source: default, level: 1
</span><br>
<span class="quotelev2">&gt;&gt;                          user/basic, type: string)
</span><br>
<span class="quotelev2">&gt;&gt;                          Comma-delimited list of devices and/or CIDR
</span><br>
<span class="quotelev2">&gt;&gt;                          notation of networks to NOT use for MPI
</span><br>
<span class="quotelev2">&gt;&gt;                          communication -- all devices not matching these
</span><br>
<span class="quotelev2">&gt;&gt;                          specifications will be used (e.g.,
</span><br>
<span class="quotelev2">&gt;&gt;                          &quot;eth0,192.168.0.0/16&quot;).  If set to a non-default
</span><br>
<span class="quotelev2">&gt;&gt;                          value, it is mutually exclusive with
</span><br>
<span class="quotelev2">&gt;&gt;                          btl_tcp_if_include.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="22787.php">Ray Sheppard: "Re: [OMPI users] btl_tcp_if_include setting"</a>
<li><strong>Previous message:</strong> <a href="22785.php">Ralph Castain: "Re: [OMPI users] btl_tcp_if_include setting"</a>
<li><strong>In reply to:</strong> <a href="22785.php">Ralph Castain: "Re: [OMPI users] btl_tcp_if_include setting"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22787.php">Ray Sheppard: "Re: [OMPI users] btl_tcp_if_include setting"</a>
<li><strong>Reply:</strong> <a href="22787.php">Ray Sheppard: "Re: [OMPI users] btl_tcp_if_include setting"</a>
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
