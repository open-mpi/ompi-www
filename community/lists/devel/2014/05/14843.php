<?
$subject_val = "Re: [OMPI devel] ompi_info not Giving Complete Output";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 26 14:06:23 2014" -->
<!-- isoreceived="20140526180623" -->
<!-- sent="Mon, 26 May 2014 18:06:20 +0000" -->
<!-- isosent="20140526180620" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] ompi_info not Giving Complete Output" -->
<!-- id="75A2EC4F-86A6-46C0-AB18-D08A90E788CC_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="250E85F2-3BB6-4507-8357-B17CAE6AE8B3_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] ompi_info not Giving Complete Output<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-26 14:06:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14844.php">Ralph Castain: "[OMPI devel] PMIx web page updated"</a>
<li><strong>Previous message:</strong> <a href="14842.php">Ralph Castain: "Re: [OMPI devel] ompi_info not Giving Complete Output"</a>
<li><strong>In reply to:</strong> <a href="14842.php">Ralph Castain: "Re: [OMPI devel] ompi_info not Giving Complete Output"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14845.php">Kevin Brown: "Re: [OMPI devel] ompi_info not Giving Complete Output"</a>
<li><strong>Reply:</strong> <a href="14845.php">Kevin Brown: "Re: [OMPI devel] ompi_info not Giving Complete Output"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Or use --all.
<br>
<p><p>On May 26, 2014, at 10:21 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Try adding &quot;--level 9&quot; to the cmd line. It's a new &quot;feature&quot; to try and reduce the volume of data being thrown at the user as the majority of params are frequently of use only to us developers
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On May 26, 2014, at 7:14 AM, Kevin Brown &lt;brown.k.aa_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Greetings,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I've just noticed that ompi_info (Open MPI v. 1.8.1) is not giving a complete listing when ran with the following options:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; rc000:~ &gt; ~/opt/openmpi-1.8.1-base/bin/ompi_info --param all all
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_tcp_if_include&quot; (current value: &quot;&quot;,
</span><br>
<span class="quotelev2">&gt;&gt;                           data source: default, level: 1 user/basic, type:
</span><br>
<span class="quotelev2">&gt;&gt;                           string)
</span><br>
<span class="quotelev2">&gt;&gt;                           Comma-delimited list of devices and/or CIDR
</span><br>
<span class="quotelev2">&gt;&gt;                           notation of networks to use for MPI communication
</span><br>
<span class="quotelev2">&gt;&gt;                           (e.g., &quot;eth0,192.168.0.0/16&quot;).  Mutually exclusive
</span><br>
<span class="quotelev2">&gt;&gt;                           with btl_tcp_if_exclude.
</span><br>
<span class="quotelev2">&gt;&gt;                  MCA btl: parameter &quot;btl_tcp_if_exclude&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt;                           &quot;127.0.0.1/8,sppp&quot;, data source: default, level: 1
</span><br>
<span class="quotelev2">&gt;&gt;                           user/basic, type: string)
</span><br>
<span class="quotelev2">&gt;&gt;                           Comma-delimited list of devices and/or CIDR
</span><br>
<span class="quotelev2">&gt;&gt;                           notation of networks to NOT use for MPI
</span><br>
<span class="quotelev2">&gt;&gt;                           communication -- all devices not matching these
</span><br>
<span class="quotelev2">&gt;&gt;                           specifications will be used (e.g.,
</span><br>
<span class="quotelev2">&gt;&gt;                           &quot;eth0,192.168.0.0/16&quot;).  If set to a non-default
</span><br>
<span class="quotelev2">&gt;&gt;                           value, it is mutually exclusive with
</span><br>
<span class="quotelev2">&gt;&gt;                           btl_tcp_if_include.
</span><br>
<span class="quotelev2">&gt;&gt; rc000:~ &gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The info shown above is the only output given by the command. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Configuration info has been attached to this mail.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Is this correct behavior?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Kevin
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Kevin A. Brown | Tokyo Institute of Technology  | E-mail: brown.k.aa_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;configs_and_outputs.tar.bz2&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14841.php">http://www.open-mpi.org/community/lists/devel/2014/05/14841.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14842.php">http://www.open-mpi.org/community/lists/devel/2014/05/14842.php</a>
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
<li><strong>Next message:</strong> <a href="14844.php">Ralph Castain: "[OMPI devel] PMIx web page updated"</a>
<li><strong>Previous message:</strong> <a href="14842.php">Ralph Castain: "Re: [OMPI devel] ompi_info not Giving Complete Output"</a>
<li><strong>In reply to:</strong> <a href="14842.php">Ralph Castain: "Re: [OMPI devel] ompi_info not Giving Complete Output"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14845.php">Kevin Brown: "Re: [OMPI devel] ompi_info not Giving Complete Output"</a>
<li><strong>Reply:</strong> <a href="14845.php">Kevin Brown: "Re: [OMPI devel] ompi_info not Giving Complete Output"</a>
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
