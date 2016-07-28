<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Apr 24 17:36:00 2006" -->
<!-- isoreceived="20060424213600" -->
<!-- sent="Mon, 24 Apr 2006 17:35:57 -0400" -->
<!-- isosent="20060424213557" -->
<!-- name="Jeff Squyres \(jsquyres\)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] users Digest, Vol 261, Issue 4" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AF708F72_at_xmb-rtp-215.amer.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] users Digest, Vol 261, Issue 4" -->
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
<strong>From:</strong> Jeff Squyres \(jsquyres\) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-04-24 17:35:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1128.php">George Bosilca: "Re: [OMPI users] MPI_LONG_LONG_INT != MPI_LONG_LONG"</a>
<li><strong>Previous message:</strong> <a href="1126.php">Audet, Martin: "[OMPI users] MPI_LONG_LONG_INT != MPI_LONG_LONG"</a>
<li><strong>Maybe in reply to:</strong> <a href="1119.php">Laurent.POREZ_at_[hidden]: "Re: [OMPI users] users Digest, Vol 261, Issue 4"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of 
</span><br>
<span class="quotelev1">&gt; Laurent.POREZ_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Sent: Friday, April 21, 2006 4:54 AM
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] users Digest, Vol 261, Issue 4
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; That being said, we are not opposed to putting port number 
</span><br>
<span class="quotelev1">&gt; controls in
</span><br>
<span class="quotelev2">&gt; &gt; Open MPI.  Especially if it really is a problem for 
</span><br>
<span class="quotelev1">&gt; someone, not just a
</span><br>
<span class="quotelev2">&gt; &gt; hypothetical problem ;-).  But such controls should not be added to
</span><br>
<span class="quotelev2">&gt; &gt; support firewalled operations, because -- at a minimum -- 
</span><br>
<span class="quotelev1">&gt; unless you do
</span><br>
<span class="quotelev2">&gt; &gt; a bunch of other firewall configuration, it will not be enough.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This point is a real problem for me (but I may be the only 
</span><br>
<span class="quotelev1">&gt; one in the world...).
</span><br>
<span class="quotelev1">&gt; I have to build a system that uses MPI softwares and non MPI COTS.
</span><br>
<span class="quotelev1">&gt; I can't change TCP ports used by the COTS.
</span><br>
<span class="quotelev1">&gt; Restricting MPI TCP/UDP port range loks like being the best 
</span><br>
<span class="quotelev1">&gt; solution for me.
</span><br>
<p>Ok.  Can you describe what you're doing / what you need?  If the fear is
<br>
that you'll conflict with other user-level applications that are using
<br>
fixed port numbers, you may have this problem with other applications
<br>
that use dynamic TCP ports as well.
<br>
<p>Some scenarios may already be handled, too.  For example, if you have
<br>
your user-level, fixed port applications being launched and are
<br>
guaranteed to be running before the MPI processes are running, then
<br>
there's no problem (because OMPI -- just like any application that uses
<br>
dynamic TCP ports -- will only use ports that are not already in use).
<br>
Or, if your applications are using restricted ports (e.g., below 1024),
<br>
then OMPI will not conflict because we do not currently use restricted
<br>
ports.
<br>
<p>Specifically, I think you only need to restrict OMPI's ports if you want
<br>
to launch your non-MPI apps that use fixed, non-restricted ports either
<br>
at the &quot;same&quot; time or after MPI apps are launched, then I can see how
<br>
this would be necessary (although the chances of a collision are pretty
<br>
small, they are nonzero).
<br>
<p>Indeed, with a quick peek in /etc/services, I see a fair number of
<br>
services that have port numbers &gt;1024 (subversion, postgres, finger,
<br>
...etc.).  It strikes me that many (all?) of these fit the &quot;will be
<br>
launched at boot up time, so even though they're not in the restricted
<br>
range, they'll be the first ones to ask for that port and therefore
<br>
there's no problem&quot; category.  My point here: there's precedent for this
<br>
model.
<br>
<p>Does that help?  Or do you still need TCP port restrictions?
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
<li><strong>Next message:</strong> <a href="1128.php">George Bosilca: "Re: [OMPI users] MPI_LONG_LONG_INT != MPI_LONG_LONG"</a>
<li><strong>Previous message:</strong> <a href="1126.php">Audet, Martin: "[OMPI users] MPI_LONG_LONG_INT != MPI_LONG_LONG"</a>
<li><strong>Maybe in reply to:</strong> <a href="1119.php">Laurent.POREZ_at_[hidden]: "Re: [OMPI users] users Digest, Vol 261, Issue 4"</a>
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
