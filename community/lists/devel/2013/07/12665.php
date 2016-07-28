<?
$subject_val = "Re: [OMPI devel] ompi_info";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 19 11:58:00 2013" -->
<!-- isoreceived="20130719155800" -->
<!-- sent="Fri, 19 Jul 2013 15:57:54 +0000" -->
<!-- isosent="20130719155754" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] ompi_info" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F72D873_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC4F72D2C2_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] ompi_info<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-19 11:57:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12666.php">George Bosilca: "Re: [OMPI devel] RFC: Change ompi_proc_t endpoint data lookup"</a>
<li><strong>Previous message:</strong> <a href="12664.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] ompi_info"</a>
<li><strong>In reply to:</strong> <a href="12664.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] ompi_info"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/08/12801.php">George Bosilca: "Re: [OMPI devel] ompi_info"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/08/12801.php">George Bosilca: "Re: [OMPI devel] ompi_info"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've now talked to both George and Nathan.  Let me summarize for the web archives / community:
<br>
<p>1. There are two main points of contention:
<br>
<p>&nbsp;&nbsp;&nbsp;1a. ompi_info has a *very long-standing precedent* behavior of using &lt;framework&gt; MCA params to exclude the display of components (and their params). Users have come to rely on this behavior to test that OMPI is honoring their $HOME/.openmpi-mca-params.conf file (for example) because -- at least prior to new ompi_info -- there was no other way to verify that.
<br>
<p>&nbsp;&nbsp;&nbsp;1b. It seems meaningless for MPI_T_Init to open *all* components when we're just going to be exposing a bunch of components/parameters that will not be used.  Easy example: MPI_T_Init will open all the PMLs, but we'll only end up using one of them.  Why have all the rest?
<br>
<p>2. After talking to Nathan, here's our answers:
<br>
<p>&nbsp;&nbsp;&nbsp;2a. Fair enough.  The long-standing ompi_info behavior precedent alone is probably enough to warrant re-thinking the new ompi_info behavior.  Nathan will implement a compromise (that George was ok with when I talked on the phone with him).  If you have a &lt;framework&gt; parameter somewhere that disables components (e.g., $HOME/.openmpi-mca-params.conf contains &quot;btl = tcp,sm,self&quot;), then ompi_info will somehow mark those components' parameters as &quot;inactive&quot; in the prettyprint and parseable outputs
<br>
<p>&nbsp;&nbsp;&nbsp;2b. Nathan reminded me why we chose to do this.  It requires a little explanation...
<br>
<p>One thing to remember: MPI_T parameters *are* MCA parameters.  Hence, the btl_tcp_if_include MCA parameter is also the btl_tcp_if_include MPI_T parameter.  Put differently: MPI_T and MCA are two interfaces to the same back-end variables.
<br>
<p>Something to note: if you call MPI_Init and then later call MPI_T_init, the latter is effectively a no-op.
<br>
<p>The interesting case is when you call MPI_T_init before you call MPI_Init.  In this case, as has been noted in this thread: we open all components in all frameworks.
<br>
<p>However: what hasn't been noted is that during the subsequent MPI_Init, we do normal selection *and will close unused components* (which also un-registers all their corresponding MPI_T/MCA parameters).  For example:
<br>
<p>1. During MPI_T_init, we'll open all the PMLs: CM, OB1, etc.
<br>
<p>2. Subsequent calls to MPI_T functions can *set* MPI_T/MCA params.  For example, you can use MPI_T to pick the ob1 PML.
<br>
<p>3. When MPI_Init is finally invoked, normal MPI_Init flow is observed; if an MCA param was set to, for example, pick the PML, it will be honored and the non-selected PMLs will be closed.  Consequently, all the MPI_T/MCA params for the closed components will disappear from MPI_T (which is allowed by the spec).  Continuing the example from #2, the CM PML will be closed, and all of its MPI_T/MCA params will disappear.
<br>
<p>Put simply: the point of opening *all* frameworks/components is to find out what all the params are so that the window of time represented by #2 can be utilized to examine/set MCA params as you want before you go into the &quot;normal&quot; MPI process 
<br>
<p>So I think we're ok from this standpoint.
<br>
<p><p><p><p>On Jul 19, 2013, at 10:29 AM, &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; George and I talked about this on the phone; I understand his questions better now.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Nathan and I will get together and work through his questions and come back to everyone with some answers / proposals.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jul 19, 2013, at 9:27 AM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; My point is the following. I favor consistent behaviors and I'm always in favor of respecting the configuration files. ALWAYS like in the word that mean all cases without exception. Thus, by default, ompi_info as any other component of the Open MPI infrastructure MUST read the configuration files and respect all options provided there. And here was another inconsistency on the &quot;new&quot; approach. ompi_info reports some of the values (like the eager size and friends), while deciding to ignore others (like the list of the active PML and BTL).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I do concede that there are cases where we need something slightly different, maybe as a convenience. If there is a need for a special case for ompi_info to ignore the configuration files, let's add it. But do't make it the default, instead request a special command line argument for it.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; There were several mentions about he MPI_T in this discussion. If I understand what was said about it, all components are loaded, they register their parameters and them based on user selection some the them are unloaded. Thus my question is: from the tools perspective what is the interest of knowing that a special MPI_T parameter exists but not be able to use it (because the originator component was meanwhile unloaded)? 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; George.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 18, 2013, at 18:12 , &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jul 18, 2013, at 11:50 AM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; How is this part of the code validated? It might capitalize on some type of &quot;trust&quot;. Unfortunately &#133; I have no such notion.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Not sure what you're asking here.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I would rather take the path of the &quot;least astonishment&quot;, a __consistent__ behavior where we always abide to the configuration files (user level as well as system level). If you want to see every single parameter possibly available to you (based on your rights of course), temporary remove the configuration file. Or we can provide a specific ompi_info option to ignore the configuration files, but not make this the default.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I think MPI applications and ompi_info are different cases.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1. We've definitely had cases of user (and OMPI developer!) confusion over the years where people would run ompi_info and not see their favorite MCA component listed.  After a while, they figured out it was because they had an env variable/file limiting which components were used (e.g., OMPI_MCA_btl=sm,tcp,self would silently disable all other BTLs in ompi_info output).  This actually seems to be fairly counter-intuitive behavior, if you ask me -- it was done this way as an artifact of the old implementation architecture.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Personally, I think changing ompi_info's behavior to always listing all components is a good idea.  Is there a reason to be concerned about the memory footprint and IO traffic of running ompi_info?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What might be a useful addition, however, is in the above example (user has OMPI_MCA_btl=sm,tcp,self in their environment) to somehow mark all other BTL params as &quot;inactive because of OMPI_MCA_BTL env variable value&quot;, or something like that.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *** If someone wants this behavior, please propose a specific way to mark prettyprint and parsable ompi_info output.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2. MPI application behavior has not changed -- if you call MPI_Init, we open exactly the same frameworks/components that were opened before.  But if you're using a tool (i.e., call the MPI_T init function), then you pay an extra price (potentially more dlopens, more memory usage, etc.).  This is the same as it has always been for tools: tools cost something (memory, performance, whatever).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; That being said, if you want a different behavior, please propose something specific (e.g., specific new MCA param + value(s) for specific behavior(s)).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="12666.php">George Bosilca: "Re: [OMPI devel] RFC: Change ompi_proc_t endpoint data lookup"</a>
<li><strong>Previous message:</strong> <a href="12664.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] ompi_info"</a>
<li><strong>In reply to:</strong> <a href="12664.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] ompi_info"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/08/12801.php">George Bosilca: "Re: [OMPI devel] ompi_info"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/08/12801.php">George Bosilca: "Re: [OMPI devel] ompi_info"</a>
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
