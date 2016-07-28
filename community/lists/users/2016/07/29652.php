<?
$subject_val = "Re: [OMPI users] [OMPI devel]    Class information in OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 12 16:27:14 2016" -->
<!-- isoreceived="20160712202714" -->
<!-- sent="Tue, 12 Jul 2016 20:27:12 +0000" -->
<!-- isosent="20160712202712" -->
<!-- name="Emani, Murali" -->
<!-- email="emani1_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [OMPI devel]    Class information in OpenMPI" -->
<!-- id="D3AAA08A.36BB%emani1_at_llnl.gov" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="E842D0B0-2DC2-4BEF-AD3A-8D4C3DBA9008_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] [OMPI devel]    Class information in OpenMPI<br>
<strong>From:</strong> Emani, Murali (<em>emani1_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-07-12 16:27:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29653.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI-RMA rget doesn't complete the communication after	mpi_wait"</a>
<li><strong>Previous message:</strong> <a href="29651.php">Jeff Squyres (jsquyres): "Re: [OMPI users] [OMPI devel]  Class information in OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="29651.php">Jeff Squyres (jsquyres): "Re: [OMPI users] [OMPI devel]  Class information in OpenMPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Jeff for your inputs.
<br>
<p>&#139; 
<br>
Murali
<br>
<p><p><p><p><p><p>On 7/12/16, 12:12 PM, &quot;devel on behalf of Jeff Squyres (jsquyres)&quot;
<br>
&lt;devel-bounces_at_[hidden] on behalf of jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;Unfortunately, the Open MPI code base is quite large, and changes over
</span><br>
<span class="quotelev1">&gt;time.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;There really is no overall diagram describing the entire code base,
</span><br>
<span class="quotelev1">&gt;sorry.  The OPAL-level doxygen docs are probably the best you'll get, but
</span><br>
<span class="quotelev1">&gt;they're really only the utility classes in the portability layer.  They
</span><br>
<span class="quotelev1">&gt;don't really include the message passing stuff, nor much (anything?) in
</span><br>
<span class="quotelev1">&gt;the ORTE or OMPI layers.  :-\
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 12, 2016, at 3:07 PM, Emani, Murali &lt;emani1_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks Ralph.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The &#140;doxygen&#185; command generated a bunch of html files along with few
</span><br>
<span class="quotelev2">&gt;&gt;class diagrams in &#179;gif&#178;. I think these figures  cover only few
</span><br>
<span class="quotelev2">&gt;&gt;classes/structs and are not exhaustive. I am looking to generate a
</span><br>
<span class="quotelev2">&gt;&gt;complete hierarchical diagram. I will try to see if I can utilize the
</span><br>
<span class="quotelev2">&gt;&gt;generated html to extract this info.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; &#139; 
</span><br>
<span class="quotelev2">&gt;&gt; Murali
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; From: devel &lt;devel-bounces_at_[hidden]&gt; on behalf of Ralph Castain
</span><br>
<span class="quotelev2">&gt;&gt;&lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Reply-To: Open MPI Developers &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Date: Thursday, July 7, 2016 at 3:18 PM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cc: Open MPI Developers &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI devel] [OMPI users] Class information in OpenMPI
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We used to have Doxygen support that would create what you are asking
</span><br>
<span class="quotelev2">&gt;&gt;for, but I don&#185;t think anyone has maintained it in a long time. I ran
</span><br>
<span class="quotelev2">&gt;&gt;&#179;doxygen&#178; at the top-level directory and it did indeed generate a bunch
</span><br>
<span class="quotelev2">&gt;&gt;of html, but I&#185;m not sure it is all that helpful.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; You might take a look and see if it helps enough to be useful. Could be
</span><br>
<span class="quotelev2">&gt;&gt;that someone will contribute updated Doxygen support to make it better&#138;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jul 7, 2016, at 11:57 AM, Emani, Murali &lt;emani1_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi all,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I want to know if there is &#179;class diagram&#178; for OpenMPI code base that
</span><br>
<span class="quotelev3">&gt;&gt;&gt;shows existing classes and dependencies/associations. Are there any
</span><br>
<span class="quotelev3">&gt;&gt;&gt;available tools to extract and visualize this information.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#139; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Murali
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;<a href="http://www.open-mpi.org/community/lists/users/2016/07/29594.php">http://www.open-mpi.org/community/lists/users/2016/07/29594.php</a>
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
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt;<a href="http://www.open-mpi.org/community/lists/users/2016/07/29649.php">http://www.open-mpi.org/community/lists/users/2016/07/29649.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;-- 
</span><br>
<span class="quotelev1">&gt;Jeff Squyres
</span><br>
<span class="quotelev1">&gt;jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt;For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt;<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;devel mailing list
</span><br>
<span class="quotelev1">&gt;devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;Link to this post:
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/community/lists/devel/2016/07/19191.php">http://www.open-mpi.org/community/lists/devel/2016/07/19191.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29653.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI-RMA rget doesn't complete the communication after	mpi_wait"</a>
<li><strong>Previous message:</strong> <a href="29651.php">Jeff Squyres (jsquyres): "Re: [OMPI users] [OMPI devel]  Class information in OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="29651.php">Jeff Squyres (jsquyres): "Re: [OMPI users] [OMPI devel]  Class information in OpenMPI"</a>
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
