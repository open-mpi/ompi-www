<?
$subject_val = "Re: [OMPI users] Infiniband requirements";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 25 20:36:25 2009" -->
<!-- isoreceived="20090626003625" -->
<!-- sent="Thu, 25 Jun 2009 20:36:19 -0400" -->
<!-- isosent="20090626003619" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Infiniband requirements" -->
<!-- id="A2C32BC8-1014-450C-B08C-C8574B9510B7_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="0228C6B6F0A7447C8B0B30FB7E65B37E_at_inspiron9100" -->
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
<strong>Subject:</strong> Re: [OMPI users] Infiniband requirements<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-25 20:36:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9727.php">Jeff Squyres: "Re: [OMPI users] 50%performance	reduction	due	to	OpenMPI	v	1.3.2forcing allMPI	traffic over	Ethernet	instead	of	using	Infiniband"</a>
<li><strong>Previous message:</strong> <a href="9725.php">Gus Correa: "Re: [OMPI users] Infiniband requirements"</a>
<li><strong>In reply to:</strong> <a href="9714.php">Jim Kress: "[OMPI users] Infiniband requirements"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9688.php">Jim Kress ORG: "Re: [OMPI users] 50% performance reduction due to OpenMPI v 1.3.2	forcing all MPI	traffic over Ethernet instead of using Infiniband"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 25, 2009, at 12:53 PM, Jim Kress wrote:
<br>
<p><span class="quotelev1">&gt; Is it correct to assume that, when one is configuring openmpi v1.3.2  
</span><br>
<span class="quotelev1">&gt; and if
</span><br>
<span class="quotelev1">&gt; one leaves out the
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --with-openib=/dir
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; from the ./configure command line, that InfiniBand support will NOT  
</span><br>
<span class="quotelev1">&gt; be built
</span><br>
<span class="quotelev1">&gt; into openmpi v1.3.2?  Then, if an Ethernet network is present that  
</span><br>
<span class="quotelev1">&gt; connects
</span><br>
<span class="quotelev1">&gt; all the nodes, openmpi will use that network?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>No, that is not a safe assumption.  Sorry for being a bit tardy in  
<br>
this discussion -- it's been a crazy week.  :-)
<br>
<p>The best thing to do is to actually look at the output of configure.   
<br>
We actually put a lot of effort to actually make the output be fairly  
<br>
descriptive and informative about what the build process will do when  
<br>
configure is complete.  I find it easiest to dump the output of  
<br>
configure to a file and looking at it later in a text editor.  For  
<br>
example, searching for btl:openib in my configure output, I see:
<br>
<p>--- MCA component btl:openib (m4 configuration macro)
<br>
...bunch of stuff...
<br>
checking if MCA component btl:openib can compile... yes
<br>
<p>The last line of the section indicates whether that plugin  
<br>
(&quot;component&quot;) is going to build or not.  In my case, the openib plugin  
<br>
was happy and was going to build.
<br>
<p>If it's not happy / won't build, then the reason why will be in one of  
<br>
the lines above it (e.g., some header files not found, etc.).
<br>
<p>We have some &quot;rules of thumb&quot; about --with-&lt;foo&gt; options for configure  
<br>
(including --with-openib); thanks to Gus' questions a month or three  
<br>
ago, I amended our FAQ to list all of them:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/faq/?category=building#default-build">http://www.open-mpi.org/faq/?category=building#default-build</a>
<br>
<p><span class="quotelev1">&gt; Also, is it required to add
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --enable-static
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; to the ./configure command line to make sure Infiniband support is
</span><br>
<span class="quotelev1">&gt; available?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>No.  I rarely (never?) build statically.  Indeed, configuring with  
<br>
OpenFabrics support statically is a rather dicey proposition.  See:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/faq/?category=mpi-apps#static-mpi-apps">http://www.open-mpi.org/faq/?category=mpi-apps#static-mpi-apps</a>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/faq/?category=mpi-apps#static-ofa-mpi-apps">http://www.open-mpi.org/faq/?category=mpi-apps#static-ofa-mpi-apps</a>
<br>
<p><span class="quotelev1">&gt; If I do not then the ompi_info --config command yields
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>ompi_info --config is not the important one that you want to look at  
<br>
here.
<br>
<p>You want to do what I suggested before: &quot;ompi_info | grep btl&quot; and  
<br>
look for the &quot;openib&quot; component.  If you run &quot;ompi_info&quot; with no  
<br>
options, it shows you all the plugins that are installed.  You want to  
<br>
see that the openib plugin is successfully installed.
<br>
<p>It's [somewhat] irrelevant as to which libraries are shown in the  
<br>
ompi_info --config output; that's under-the-covers mumbo-jumbo that  
<br>
you shouldn't usually need to worry about.
<br>
<p>Hope that helps!
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9727.php">Jeff Squyres: "Re: [OMPI users] 50%performance	reduction	due	to	OpenMPI	v	1.3.2forcing allMPI	traffic over	Ethernet	instead	of	using	Infiniband"</a>
<li><strong>Previous message:</strong> <a href="9725.php">Gus Correa: "Re: [OMPI users] Infiniband requirements"</a>
<li><strong>In reply to:</strong> <a href="9714.php">Jim Kress: "[OMPI users] Infiniband requirements"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9688.php">Jim Kress ORG: "Re: [OMPI users] 50% performance reduction due to OpenMPI v 1.3.2	forcing all MPI	traffic over Ethernet instead of using Infiniband"</a>
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
