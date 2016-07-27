<?
$subject_val = "Re: [hwloc-devel] towards PLPA-like API in 1.0";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 12 13:05:38 2009" -->
<!-- isoreceived="20091112180538" -->
<!-- sent="Thu, 12 Nov 2009 10:05:32 -0800" -->
<!-- isosent="20091112180532" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] towards PLPA-like API in 1.0" -->
<!-- id="19B840D6-400D-4BD7-BD2A-C8540CF1FEE5_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4AFC4C62.40702_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] towards PLPA-like API in 1.0<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-12 13:05:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0388.php">Samuel Thibault: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
<li><strong>Previous message:</strong> <a href="0386.php">Brice Goglin: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
<li><strong>In reply to:</strong> <a href="0385.php">Brice Goglin: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0388.php">Samuel Thibault: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
<li><strong>Reply:</strong> <a href="0388.php">Samuel Thibault: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
<li><strong>Reply:</strong> <a href="0389.php">Brice Goglin: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
<li><strong>Reply:</strong> <a href="0419.php">Brice Goglin: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 12, 2009, at 9:56 AM, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; Well, the list of good ideas will be very short then :) Most remaining
</span><br>
<span class="quotelev1">&gt; functions are about manipulating core and socket ids, we don't need  
</span><br>
<span class="quotelev1">&gt; that
</span><br>
<span class="quotelev1">&gt; at all in hwloc anymore.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My feeling is that converting an application from PLPA's
</span><br>
<span class="quotelev1">&gt; core_id/socket_id API into the hwloc API will be non-trivial. So at
</span><br>
<span class="quotelev1">&gt; least the current hwloc_plpa_* functions will be document a bit how to
</span><br>
<span class="quotelev1">&gt; switch to the hwloc API.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>FWIW, having a &quot;simple&quot; API like that might be a Good Thing...?
<br>
<p>I.e., just be able to bind to a specific thread/core/socket with a  
<br>
minimum fuss/muss. Even if such an API would be mainly syntactic sugar  
<br>
for other hwloc functionality -- there definitely is something to be  
<br>
said for &quot;make the simple things simple&quot;.  It will definitely (IMNSHO)  
<br>
extend hwloc's reach into a larger class of applications.  Meaning:  
<br>
there are a variety of hard-coded apps out there that we'll never see;  
<br>
apps that run on specific servers for specific purposes, where the  
<br>
developers hard code in there &quot;bind to cores 1-4&quot; or &quot;bind to sockets  
<br>
1,3&quot; because they already know the setup and this app is not intended  
<br>
to be portable.
<br>
<p>It may be useful to have the API be extensible; one thing I have heard  
<br>
rumors about coming in the not-distant future is the concept of  
<br>
&quot;boards&quot; (multiple motherboards in a single box).  I.e., socket IDs  
<br>
may be repeated; they are differentiated by board number.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0388.php">Samuel Thibault: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
<li><strong>Previous message:</strong> <a href="0386.php">Brice Goglin: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
<li><strong>In reply to:</strong> <a href="0385.php">Brice Goglin: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0388.php">Samuel Thibault: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
<li><strong>Reply:</strong> <a href="0388.php">Samuel Thibault: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
<li><strong>Reply:</strong> <a href="0389.php">Brice Goglin: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
<li><strong>Reply:</strong> <a href="0419.php">Brice Goglin: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
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
