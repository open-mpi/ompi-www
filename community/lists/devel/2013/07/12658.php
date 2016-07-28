<?
$subject_val = "Re: [OMPI devel] ompi_info";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 18 12:12:29 2013" -->
<!-- isoreceived="20130718161229" -->
<!-- sent="Thu, 18 Jul 2013 16:12:24 +0000" -->
<!-- isosent="20130718161224" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] ompi_info" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F729C1F_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="A97BE23A-7923-48FA-A5DF-4F33AF85863C_at_icl.utk.edu" -->
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
<strong>Date:</strong> 2013-07-18 12:12:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12659.php">Barrett, Brian W: "[OMPI devel] RFC: Change ompi_proc_t endpoint data lookup"</a>
<li><strong>Previous message:</strong> <a href="12657.php">Nathan Hjelm: "Re: [OMPI devel] ompi_info"</a>
<li><strong>In reply to:</strong> <a href="12655.php">George Bosilca: "Re: [OMPI devel] ompi_info"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12663.php">George Bosilca: "Re: [OMPI devel] ompi_info"</a>
<li><strong>Reply:</strong> <a href="12663.php">George Bosilca: "Re: [OMPI devel] ompi_info"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 18, 2013, at 11:50 AM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; How is this part of the code validated? It might capitalize on some type of &quot;trust&quot;. Unfortunately &#133; I have no such notion.
</span><br>
<p>Not sure what you're asking here.
<br>
<p><span class="quotelev1">&gt; I would rather take the path of the &quot;least astonishment&quot;, a __consistent__ behavior where we always abide to the configuration files (user level as well as system level). If you want to see every single parameter possibly available to you (based on your rights of course), temporary remove the configuration file. Or we can provide a specific ompi_info option to ignore the configuration files, but not make this the default.
</span><br>
<p><p>I think MPI applications and ompi_info are different cases.
<br>
<p>1. We've definitely had cases of user (and OMPI developer!) confusion over the years where people would run ompi_info and not see their favorite MCA component listed.  After a while, they figured out it was because they had an env variable/file limiting which components were used (e.g., OMPI_MCA_btl=sm,tcp,self would silently disable all other BTLs in ompi_info output).  This actually seems to be fairly counter-intuitive behavior, if you ask me -- it was done this way as an artifact of the old implementation architecture.
<br>
<p>Personally, I think changing ompi_info's behavior to always listing all components is a good idea.  Is there a reason to be concerned about the memory footprint and IO traffic of running ompi_info?
<br>
<p>What might be a useful addition, however, is in the above example (user has OMPI_MCA_btl=sm,tcp,self in their environment) to somehow mark all other BTL params as &quot;inactive because of OMPI_MCA_BTL env variable value&quot;, or something like that.
<br>
<p>*** If someone wants this behavior, please propose a specific way to mark prettyprint and parsable ompi_info output.
<br>
<p>2. MPI application behavior has not changed -- if you call MPI_Init, we open exactly the same frameworks/components that were opened before.  But if you're using a tool (i.e., call the MPI_T init function), then you pay an extra price (potentially more dlopens, more memory usage, etc.).  This is the same as it has always been for tools: tools cost something (memory, performance, whatever).
<br>
<p>That being said, if you want a different behavior, please propose something specific (e.g., specific new MCA param + value(s) for specific behavior(s)).
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
<li><strong>Next message:</strong> <a href="12659.php">Barrett, Brian W: "[OMPI devel] RFC: Change ompi_proc_t endpoint data lookup"</a>
<li><strong>Previous message:</strong> <a href="12657.php">Nathan Hjelm: "Re: [OMPI devel] ompi_info"</a>
<li><strong>In reply to:</strong> <a href="12655.php">George Bosilca: "Re: [OMPI devel] ompi_info"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12663.php">George Bosilca: "Re: [OMPI devel] ompi_info"</a>
<li><strong>Reply:</strong> <a href="12663.php">George Bosilca: "Re: [OMPI devel] ompi_info"</a>
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
