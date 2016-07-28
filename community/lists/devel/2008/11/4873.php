<?
$subject_val = "Re: [OMPI devel] Additional excluded tcp inteface";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  7 16:27:22 2008" -->
<!-- isoreceived="20081107212722" -->
<!-- sent="Fri, 07 Nov 2008 16:27:15 -0500" -->
<!-- isosent="20081107212715" -->
<!-- name="Rolf Vandevaart" -->
<!-- email="Rolf.Vandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Additional excluded tcp inteface" -->
<!-- id="4914B2B3.8070701_at_Sun.COM" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20081107162357.GN2784_at_ltw.loris.tv" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Additional excluded tcp inteface<br>
<strong>From:</strong> Rolf Vandevaart (<em>Rolf.Vandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-07 16:27:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4874.php">Terry Dontje: "[OMPI devel] Dropped message for the non-existing communicator"</a>
<li><strong>Previous message:</strong> <a href="4872.php">Jeff Squyres: "Re: [OMPI devel] Modex and others"</a>
<li><strong>In reply to:</strong> <a href="4866.php">Adrian Knoth: "Re: [OMPI devel] Additional excluded tcp inteface"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 11/07/08 11:23, Adrian Knoth wrote:
<br>
<span class="quotelev1">&gt; On Fri, Nov 07, 2008 at 09:49:43AM -0500, Rolf Vandevaart wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I do not think anyone will have a problem with this, but just thought I 
</span><br>
<span class="quotelev2">&gt;&gt; would mention that I am planning on adding an additional interface to 
</span><br>
<span class="quotelev2">&gt;&gt; the excluded list for the tcp btl.  I want to add &quot;sppp&quot; to the list. 
</span><br>
<span class="quotelev2">&gt;&gt; This is an internal interface to one of our servers and needs to be 
</span><br>
<span class="quotelev2">&gt;&gt; treated like the &quot;lo&quot; interface.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is it possible to detect this interface and exclude it right from the
</span><br>
<span class="quotelev1">&gt; beginning in opal/util/if.c? Special flags that apply to this interface,
</span><br>
<span class="quotelev1">&gt; so we have a classification?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Just my $0.02
</span><br>
<span class="quotelev1">&gt; 
</span><br>
I considered this.  I believe the sppp0 is a &quot;point-to-point&quot; interface, 
<br>
so I see that the IPv6 code has actually done something like this.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(0 != (cur_ifaddrs-&gt;ifa_flags &amp; IFF_LOOPBACK)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|| 0!= (cur_ifaddrs-&gt;ifa_flags &amp; IFF_POINTOPOINT)) {
<br>
#if 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;skipping loopback interface %s.\n&quot;, 
<br>
cur_ifaddrs-&gt;ifa_name);
<br>
#endif
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;continue;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>However, the IPv4 code does not do this.  In fact, the loopback check is 
<br>
#ifdef'ed out.
<br>
#if 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if ((ifr-&gt;ifr_flags &amp; IFF_LOOPBACK) != 0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;continue;
<br>
#endif
<br>
<p>So, in order for things to work properly in both case, I wanted to mimic 
<br>
what was done for lo interfaces.  I am leery about duplicating the IPv6 
<br>
code in the IPv4 code as I looked at earlier discussions on the mailing 
<br>
list saying that was a bad idea.
<br>
<p><a href="http://www.open-mpi.org/community/lists/devel/2008/02/3290.php">http://www.open-mpi.org/community/lists/devel/2008/02/3290.php</a>
<br>
<p>So, just adding it to the list of the excluded interfaces seemed the 
<br>
safest fix to me.
<br>
<p>Rolf
<br>
<p><pre>
-- 
=========================
rolf.vandevaart_at_[hidden]
781-442-3043
=========================
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4874.php">Terry Dontje: "[OMPI devel] Dropped message for the non-existing communicator"</a>
<li><strong>Previous message:</strong> <a href="4872.php">Jeff Squyres: "Re: [OMPI devel] Modex and others"</a>
<li><strong>In reply to:</strong> <a href="4866.php">Adrian Knoth: "Re: [OMPI devel] Additional excluded tcp inteface"</a>
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
