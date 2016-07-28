<?
$subject_val = "Re: [OMPI devel] ompi_info";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 19 09:27:44 2013" -->
<!-- isoreceived="20130719132744" -->
<!-- sent="Fri, 19 Jul 2013 15:27:37 +0200" -->
<!-- isosent="20130719132737" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] ompi_info" -->
<!-- id="D901FDEF-5CD8-4337-8E75-E3A37C6690FE_at_icl.utk.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC4F729C1F_at_xmb-rcd-x01.cisco.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-19 09:27:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12664.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] ompi_info"</a>
<li><strong>Previous message:</strong> <a href="12662.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: RFC: Change ompi_proc_t endpoint data lookup"</a>
<li><strong>In reply to:</strong> <a href="12658.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] ompi_info"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12664.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] ompi_info"</a>
<li><strong>Reply:</strong> <a href="12664.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] ompi_info"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
My point is the following. I favor consistent behaviors and I'm always in favor of respecting the configuration files. ALWAYS like in the word that mean all cases without exception. Thus, by default, ompi_info as any other component of the Open MPI infrastructure MUST read the configuration files and respect all options provided there. And here was another inconsistency on the &quot;new&quot; approach. ompi_info reports some of the values (like the eager size and friends), while deciding to ignore others (like the list of the active PML and BTL).
<br>
<p>I do concede that there are cases where we need something slightly different, maybe as a convenience. If there is a need for a special case for ompi_info to ignore the configuration files, let's add it. But do't make it the default, instead request a special command line argument for it.
<br>
<p>There were several mentions about he MPI_T in this discussion. If I understand what was said about it, all components are loaded, they register their parameters and them based on user selection some the them are unloaded. Thus my question is: from the tools perspective what is the interest of knowing that a special MPI_T parameter exists but not be able to use it (because the originator component was meanwhile unloaded)? 
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p>On Jul 18, 2013, at 18:12 , &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Jul 18, 2013, at 11:50 AM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; How is this part of the code validated? It might capitalize on some type of &quot;trust&quot;. Unfortunately &#133; I have no such notion.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Not sure what you're asking here.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I would rather take the path of the &quot;least astonishment&quot;, a __consistent__ behavior where we always abide to the configuration files (user level as well as system level). If you want to see every single parameter possibly available to you (based on your rights of course), temporary remove the configuration file. Or we can provide a specific ompi_info option to ignore the configuration files, but not make this the default.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think MPI applications and ompi_info are different cases.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. We've definitely had cases of user (and OMPI developer!) confusion over the years where people would run ompi_info and not see their favorite MCA component listed.  After a while, they figured out it was because they had an env variable/file limiting which components were used (e.g., OMPI_MCA_btl=sm,tcp,self would silently disable all other BTLs in ompi_info output).  This actually seems to be fairly counter-intuitive behavior, if you ask me -- it was done this way as an artifact of the old implementation architecture.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Personally, I think changing ompi_info's behavior to always listing all components is a good idea.  Is there a reason to be concerned about the memory footprint and IO traffic of running ompi_info?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What might be a useful addition, however, is in the above example (user has OMPI_MCA_btl=sm,tcp,self in their environment) to somehow mark all other BTL params as &quot;inactive because of OMPI_MCA_BTL env variable value&quot;, or something like that.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *** If someone wants this behavior, please propose a specific way to mark prettyprint and parsable ompi_info output.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. MPI application behavior has not changed -- if you call MPI_Init, we open exactly the same frameworks/components that were opened before.  But if you're using a tool (i.e., call the MPI_T init function), then you pay an extra price (potentially more dlopens, more memory usage, etc.).  This is the same as it has always been for tools: tools cost something (memory, performance, whatever).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That being said, if you want a different behavior, please propose something specific (e.g., specific new MCA param + value(s) for specific behavior(s)).
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12664.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] ompi_info"</a>
<li><strong>Previous message:</strong> <a href="12662.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: RFC: Change ompi_proc_t endpoint data lookup"</a>
<li><strong>In reply to:</strong> <a href="12658.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] ompi_info"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12664.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] ompi_info"</a>
<li><strong>Reply:</strong> <a href="12664.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] ompi_info"</a>
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
