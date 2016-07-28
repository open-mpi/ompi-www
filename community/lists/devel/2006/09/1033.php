<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Sep  6 09:54:59 2006" -->
<!-- isoreceived="20060906135459" -->
<!-- sent="Wed, 06 Sep 2006 09:54:45 -0400" -->
<!-- isosent="20060906135445" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [Open MPI] #334: Building with Libtool 2.1a fails to run OpenIB BTL" -->
<!-- id="C1244B65.258DD%jsquyres_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20060906133715.GG31632_at_iam.uni-bonn.de" -->
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
<strong>Date:</strong> 2006-09-06 09:54:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1034.php">Bogdan Costescu: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
<li><strong>Previous message:</strong> <a href="1032.php">Jeff Squyres: "Re: [OMPI devel] [Open MPI] #334: Building with Libtool 2.1a fails to run OpenIB BTL"</a>
<li><strong>In reply to:</strong> <a href="1031.php">Ralf Wildenhues: "Re: [OMPI devel] [Open MPI] #334: Building with Libtool 2.1a fails	to run OpenIB BTL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1032.php">Jeff Squyres: "Re: [OMPI devel] [Open MPI] #334: Building with Libtool 2.1a fails to run OpenIB BTL"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 9/6/06 9:37 AM, &quot;Ralf Wildenhues&quot; &lt;Ralf.Wildenhues_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev2">&gt;&gt; This error is usually happens when libibverbs is dlopened without
</span><br>
<span class="quotelev2">&gt;&gt; RTLD_GLOBAL flag.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ah, yep.  That is a difference between 2.1a and 1.5.x.  Not an
</span><br>
<span class="quotelev1">&gt; undisputed one.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't know enough about the setup to suggest a workaround right away.
</span><br>
<span class="quotelev1">&gt; It may also be useful to bring this up on the Libtool list, as a case
</span><br>
<span class="quotelev1">&gt; in point against this change (or for some way to choose either).
</span><br>
<p>The setup is that we lt_dlopen() the OpenIB BTL (which was linked against
<br>
libibverbs.so), which, in turn, dlopen's mthca.so.  Hence, since mthca.so
<br>
apparently requires at least one symbol from libibverbs.so, that dlopen
<br>
fails.
<br>
<p>I'll mail the LT list.
<br>
<p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1034.php">Bogdan Costescu: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
<li><strong>Previous message:</strong> <a href="1032.php">Jeff Squyres: "Re: [OMPI devel] [Open MPI] #334: Building with Libtool 2.1a fails to run OpenIB BTL"</a>
<li><strong>In reply to:</strong> <a href="1031.php">Ralf Wildenhues: "Re: [OMPI devel] [Open MPI] #334: Building with Libtool 2.1a fails	to run OpenIB BTL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1032.php">Jeff Squyres: "Re: [OMPI devel] [Open MPI] #334: Building with Libtool 2.1a fails to run OpenIB BTL"</a>
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
