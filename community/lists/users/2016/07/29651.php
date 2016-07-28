<?
$subject_val = "Re: [OMPI users] [OMPI devel]  Class information in OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 12 15:12:42 2016" -->
<!-- isoreceived="20160712191242" -->
<!-- sent="Tue, 12 Jul 2016 19:12:40 +0000" -->
<!-- isosent="20160712191240" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [OMPI devel]  Class information in OpenMPI" -->
<!-- id="E842D0B0-2DC2-4BEF-AD3A-8D4C3DBA9008_at_cisco.com" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="D3AA8C9F.36A6%emani1_at_llnl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] [OMPI devel]  Class information in OpenMPI<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-07-12 15:12:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29652.php">Emani, Murali: "Re: [OMPI users] [OMPI devel]    Class information in OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="29650.php">Emani, Murali: "Re: [OMPI users] [OMPI devel] Class information in OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="29649.php">Emani, Murali: "Re: [OMPI users] [OMPI devel]  Class information in OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29652.php">Emani, Murali: "Re: [OMPI users] [OMPI devel]    Class information in OpenMPI"</a>
<li><strong>Reply:</strong> <a href="29652.php">Emani, Murali: "Re: [OMPI users] [OMPI devel]    Class information in OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Unfortunately, the Open MPI code base is quite large, and changes over time.
<br>
<p>There really is no overall diagram describing the entire code base, sorry.  The OPAL-level doxygen docs are probably the best you'll get, but they're really only the utility classes in the portability layer.  They don't really include the message passing stuff, nor much (anything?) in the ORTE or OMPI layers.  :-\
<br>
<p><p><p><span class="quotelev1">&gt; On Jul 12, 2016, at 3:07 PM, Emani, Murali &lt;emani1_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks Ralph.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The &#145;doxygen&#146; command generated a bunch of html files along with few class diagrams in &#147;gif&#148;. I think these figures  cover only few classes/structs and are not exhaustive. I am looking to generate a complete hierarchical diagram. I will try to see if I can utilize the generated html to extract this info.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &#151; 
</span><br>
<span class="quotelev1">&gt; Murali
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; From: devel &lt;devel-bounces_at_[hidden]&gt; on behalf of Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Reply-To: Open MPI Developers &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date: Thursday, July 7, 2016 at 3:18 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Cc: Open MPI Developers &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] [OMPI users] Class information in OpenMPI
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We used to have Doxygen support that would create what you are asking for, but I don&#146;t think anyone has maintained it in a long time. I ran &#147;doxygen&#148; at the top-level directory and it did indeed generate a bunch of html, but I&#146;m not sure it is all that helpful.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You might take a look and see if it helps enough to be useful. Could be that someone will contribute updated Doxygen support to make it better&#133;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 7, 2016, at 11:57 AM, Emani, Murali &lt;emani1_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi all,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I want to know if there is &#147;class diagram&#148; for OpenMPI code base that shows existing classes and dependencies/associations. Are there any available tools to extract and visualize this information.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; &#151; 
</span><br>
<span class="quotelev2">&gt;&gt; Murali
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/07/29594.php">http://www.open-mpi.org/community/lists/users/2016/07/29594.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/07/29649.php">http://www.open-mpi.org/community/lists/users/2016/07/29649.php</a>
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
<li><strong>Next message:</strong> <a href="29652.php">Emani, Murali: "Re: [OMPI users] [OMPI devel]    Class information in OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="29650.php">Emani, Murali: "Re: [OMPI users] [OMPI devel] Class information in OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="29649.php">Emani, Murali: "Re: [OMPI users] [OMPI devel]  Class information in OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29652.php">Emani, Murali: "Re: [OMPI users] [OMPI devel]    Class information in OpenMPI"</a>
<li><strong>Reply:</strong> <a href="29652.php">Emani, Murali: "Re: [OMPI users] [OMPI devel]    Class information in OpenMPI"</a>
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
