<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu May 24 17:31:28 2007" -->
<!-- isoreceived="20070524213128" -->
<!-- sent="Thu, 24 May 2007 17:31:17 -0400" -->
<!-- isosent="20070524213117" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] settings not read from env" -->
<!-- id="14F8033F-498B-4FA1-A6A9-CB4537070DEB_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1180026425.6268.26.camel_at_beauty" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-24 17:31:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3322.php">Code Master: "Re: [OMPI users] port(s) and protocol used by openmpi for interprocess communication"</a>
<li><strong>Previous message:</strong> <a href="3320.php">Josh England: "[OMPI users] settings not read from env"</a>
<li><strong>In reply to:</strong> <a href="3320.php">Josh England: "[OMPI users] settings not read from env"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It looks like this is a feature, not a bug.  :-)
<br>
<p>ompi_info is specifically clearing out the environment variables  
<br>
corresponding to framework names (e.g., &quot;btl&quot;).  If ompi_info didn't  
<br>
do that, the OMPI core would only load the components that you have  
<br>
specified in the environment and not show you all available  
<br>
components.  In your example, you'd only be able to see [the  
<br>
parameters for] the tcp and self BTL components.
<br>
<p>So what you're seeing is an artifact of how OMPI loads components;  
<br>
ompi_info is deliberately overriding your environment setting so that  
<br>
all components can be loaded.
<br>
<p>Probably a more obvious thing to do would simply be to a) whack the  
<br>
environment so that we load all components, b) load the components,  
<br>
and then c) restore the environment so that you can see the value  
<br>
that you expected.
<br>
<p><a href="https://svn.open-mpi.org/trac/ompi/changeset/14771">https://svn.open-mpi.org/trac/ompi/changeset/14771</a> puts this behavior  
<br>
on the OMPI development trunk.
<br>
<p><p><p>On May 24, 2007, at 1:07 PM, Josh England wrote:
<br>
<p><span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Found a bug maybe:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm setting the following environment variables:
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_btl=&quot;tcp,self&quot;
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_btl_tcp_if_include=&quot;eth2&quot;
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_btl_tcp_if_exclude=&quot;eth0&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, when I run 'ompi_info --param btl tcp' I see (among other
</span><br>
<span class="quotelev1">&gt; things):
</span><br>
<span class="quotelev1">&gt; MCA btl: parameter &quot;btl&quot; (current value: &lt;none&gt;)
</span><br>
<span class="quotelev1">&gt; MCA btl: parameter &quot;btl_tcp_if_include&quot; (current value: &quot;eth2&quot;)
</span><br>
<span class="quotelev1">&gt; MCA btl: parameter &quot;btl_tcp_if_exclude&quot; (current value: &quot;eth0&quot;)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ^^^ The btl setting in my environment does not seem to be getting set
</span><br>
<span class="quotelev1">&gt; properly.  This looks like a bug, but I might just be doing something
</span><br>
<span class="quotelev1">&gt; wrong.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -JE
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3322.php">Code Master: "Re: [OMPI users] port(s) and protocol used by openmpi for interprocess communication"</a>
<li><strong>Previous message:</strong> <a href="3320.php">Josh England: "[OMPI users] settings not read from env"</a>
<li><strong>In reply to:</strong> <a href="3320.php">Josh England: "[OMPI users] settings not read from env"</a>
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
