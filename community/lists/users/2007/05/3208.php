<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue May  8 08:22:04 2007" -->
<!-- isoreceived="20070508122204" -->
<!-- sent="Tue, 8 May 2007 08:21:51 -0400" -->
<!-- isosent="20070508122151" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun: &amp;quot;-wd&amp;quot; depreciated?" -->
<!-- id="6A9EB64B-AE00-4955-B28D-E7BE4931AD60_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="351151.5631.qm_at_web33314.mail.mud.yahoo.com" -->
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
<strong>Date:</strong> 2007-05-08 08:21:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3209.php">Jeff Squyres: "Re: [OMPI users] Alpha system &amp; OpenMPI 1.2.1 does not work..."</a>
<li><strong>Previous message:</strong> <a href="3207.php">Rob: "[OMPI users] AlphaServers &amp; OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="3197.php">Rob: "[OMPI users] mpirun: &quot;-wd&quot; depreciated?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Oops -- looks like a typo in the man page.  The real flag is &quot;-wdir&quot;.
<br>
<p>Let me see how we want to fix that: I'm not sure if there's an OMPI  
<br>
member who wants to have &quot;-wd&quot; for backward compatibility.  I'm  
<br>
guessing that we'll either:
<br>
<p>1. s/-wd/-wdir/g in the man page
<br>
2. Add the flag &quot;-wd&quot; which will be a synonym for &quot;-wdir&quot;
<br>
<p>Thanks for bringing it to our attention!
<br>
<p><p><p>On May 7, 2007, at 12:04 AM, Rob wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In the man page of mpirun it says:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   -wd &lt;dir&gt; Change  to the directory &lt;dir&gt; before
</span><br>
<span class="quotelev1">&gt;             the user's program executes....
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I do a 'mpirun --help', there's no mentioning
</span><br>
<span class="quotelev1">&gt; of the -wd flag. Also, when I try using this flag,
</span><br>
<span class="quotelev1">&gt; I get errors without mpi executing anything.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So what about this -wd flag?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Rob.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; __________________________________________________
</span><br>
<span class="quotelev1">&gt; Do You Yahoo!?
</span><br>
<span class="quotelev1">&gt; Tired of spam?  Yahoo! Mail has the best spam protection around
</span><br>
<span class="quotelev1">&gt; <a href="http://mail.yahoo.com">http://mail.yahoo.com</a>
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
<li><strong>Next message:</strong> <a href="3209.php">Jeff Squyres: "Re: [OMPI users] Alpha system &amp; OpenMPI 1.2.1 does not work..."</a>
<li><strong>Previous message:</strong> <a href="3207.php">Rob: "[OMPI users] AlphaServers &amp; OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="3197.php">Rob: "[OMPI users] mpirun: &quot;-wd&quot; depreciated?"</a>
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
