<?
$subject_val = "Re: [OMPI users] unable to access or execute";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 15 11:20:40 2009" -->
<!-- isoreceived="20090915152040" -->
<!-- sent="Tue, 15 Sep 2009 17:20:32 +0200" -->
<!-- isosent="20090915152032" -->
<!-- name="Dominik T&#225;borsk&#253;" -->
<!-- email="bremby_at_[hidden]" -->
<!-- subject="Re: [OMPI users] unable to access or execute" -->
<!-- id="1253028032.13269.6.camel_at_eddy" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="07DED785-68CA-4460-B5AD-C5C4CABA045C_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] unable to access or execute<br>
<strong>From:</strong> Dominik T&#225;borsk&#253; (<em>bremby_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-15 11:20:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10655.php">Jeff Squyres: "Re: [OMPI users] error durgin execution"</a>
<li><strong>Previous message:</strong> <a href="10653.php">Jeff Squyres: "Re: [OMPI users] unable to access or execute"</a>
<li><strong>In reply to:</strong> <a href="10653.php">Jeff Squyres: "Re: [OMPI users] unable to access or execute"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres p&#195;&#173;&#197;&#161;e v &#195;&#154;t 15. 09. 2009 v 16:55 +0200:
<br>
<span class="quotelev1">&gt; On Sep 15, 2009, at 5:36 AM, Dominik T&#195;&#161;borsk&#195;&#189; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; So I have to manually copy the compiled hello world program to all of
</span><br>
<span class="quotelev2">&gt; &gt; the nodes so that they can be executed? I really didn't expect that...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; How would you expect us to execute something that doesn't exist?  :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>I had a different idea of how it works in my mind... :-)
<br>
<p><span class="quotelev2">&gt; &gt; So, where (in the filesystem) does the executable have to be? On the
</span><br>
<span class="quotelev2">&gt; &gt; same place as on the master?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That's one way to do it.  In general, if you specify a naked  
</span><br>
<span class="quotelev1">&gt; executable name, we look for it in the PATH on each of the target  
</span><br>
<span class="quotelev1">&gt; machines.  We automatically append &quot;.&quot; to your PATH on each node, so  
</span><br>
<span class="quotelev1">&gt; if you &quot;mpirun ... hello&quot; and hello is in your CWD, then we'll find it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As Lenny mentioned, it's a fairly common scenario to use NFS to export  
</span><br>
<span class="quotelev1">&gt; your executable to all nodes where it is needed to run.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Thanks for the answers, I highly appreciate any help! :-)
<br>
<p>Now, openmpi finds the executable, but a new problem appears - it cannot
<br>
create a pipe or something. I'll try to figure it out on my own, but if
<br>
I don't succeed, I'll create a new thread.
<br>
<p>Again, thank you very much, Jeff and Lenny!
<br>
<p>Dominik
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10655.php">Jeff Squyres: "Re: [OMPI users] error durgin execution"</a>
<li><strong>Previous message:</strong> <a href="10653.php">Jeff Squyres: "Re: [OMPI users] unable to access or execute"</a>
<li><strong>In reply to:</strong> <a href="10653.php">Jeff Squyres: "Re: [OMPI users] unable to access or execute"</a>
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
