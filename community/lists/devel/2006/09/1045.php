<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Sep  7 13:51:24 2006" -->
<!-- isoreceived="20060907175124" -->
<!-- sent="Thu, 7 Sep 2006 19:51:28 +0200" -->
<!-- isosent="20060907175128" -->
<!-- name="Adrian Knoth" -->
<!-- email="adi_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [IPv6] new component oob/tcp6" -->
<!-- id="20060907175128.GQ6454_at_drcomp.erfurt.thur.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C125B714.25C20%jsquyres_at_cisco.com" -->
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
<strong>From:</strong> Adrian Knoth (<em>adi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-09-07 13:51:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1046.php">Eng. A.A. Isola: "[OMPI devel] MPI2 Client-Server routines OpenMPI BUG!!!"</a>
<li><strong>Previous message:</strong> <a href="1044.php">Jeff Squyres: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
<li><strong>In reply to:</strong> <a href="1039.php">Jeff Squyres: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1053.php">Jeff Squyres: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
<li><strong>Reply:</strong> <a href="1053.php">Jeff Squyres: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
<li><strong>Reply:</strong> <a href="1054.php">Adrian Knoth: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Sep 07, 2006 at 11:46:28AM -0400, Jeff Squyres wrote:
<br>
<p><span class="quotelev2">&gt; &gt; On Fri, Sep 01, 2006 at 07:01:25AM -0600, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Do you agree to go on with two oob components, tcp and tcp6?
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Yes, I think that's the right approach
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; It's a deal. ;)
</span><br>
<span class="quotelev1">&gt; Actually, I would disagree here (sorry for jumping in late! :-( ).
</span><br>
<p>No problem, just two hours ago, Christian and me decided to drop
<br>
the idea of oob/tcp6 and go on with only one oob-tcp-component.
<br>
<p>It shouldn't be that hard and I'll try it tonight or tomorrow.
<br>
<p><span class="quotelev1">&gt; Can we just have one component that handles both ivp4 and ivp6?
</span><br>
<p>Yes. At least that's what I try to code ;)
<br>
<p><span class="quotelev1">&gt; Appropriate #if's can be added
</span><br>
<p>Are already present.
<br>
<p><span class="quotelev1">&gt; (I'm willing to help with the configure.m4 mojo -- the
</span><br>
<p>That's good. Just check for struct sockaddr_in6 and add
<br>
-DIPV6 to the CFLAGS. This flag is currently needed by
<br>
opal/util/if.* and orte/mca/oob/tcp/*, so one might limit
<br>
it to the two corresponding makefiles.
<br>
<p>We can also set/define IPV6 in something_config.h.
<br>
It'd also be a good idea to have a --disable-ipv6 configure flag.
<br>
<p><p><pre>
-- 
mail: adi_at_[hidden]  	<a href="http://adi.thur.de">http://adi.thur.de</a>	PGP: v2-key via keyserver
Die Nase ist die Bohrinsel des kleinen Mannes
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1046.php">Eng. A.A. Isola: "[OMPI devel] MPI2 Client-Server routines OpenMPI BUG!!!"</a>
<li><strong>Previous message:</strong> <a href="1044.php">Jeff Squyres: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
<li><strong>In reply to:</strong> <a href="1039.php">Jeff Squyres: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1053.php">Jeff Squyres: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
<li><strong>Reply:</strong> <a href="1053.php">Jeff Squyres: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
<li><strong>Reply:</strong> <a href="1054.php">Adrian Knoth: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
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
