<?
$subject_val = "Re: [OMPI users] Can't start program across network";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 13 16:27:36 2009" -->
<!-- isoreceived="20090313202736" -->
<!-- sent="Fri, 13 Mar 2009 16:27:12 -0400" -->
<!-- isosent="20090313202712" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Can't start program across network" -->
<!-- id="A3E502D1-EFE2-45EE-B723-6B44B94C16A9_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49BA32B3.5090705_at_kuicr.kyoto-u.ac.jp" -->
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
<strong>Subject:</strong> Re: [OMPI users] Can't start program across network<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-13 16:27:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8431.php">Jeff Squyres: "Re: [OMPI users] Problem in MPI::Finalize when freeingintercommunicators"</a>
<li><strong>Previous message:</strong> <a href="8429.php">Jeff Squyres: "Re: [OMPI users] Installation Problems with Openmpi-1.2.9"</a>
<li><strong>In reply to:</strong> <a href="8420.php">Raymond Wan: "[OMPI users] Can't start program across network"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8438.php">Raymond Wan: "Re: [OMPI users] Can't start program across network"</a>
<li><strong>Reply:</strong> <a href="8438.php">Raymond Wan: "Re: [OMPI users] Can't start program across network"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 13, 2009, at 6:17 AM, Raymond Wan wrote:
<br>
<p><span class="quotelev1">&gt; What doesn't work is:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [On Y] mpirun --host Y,Z --np 2 uname -a
</span><br>
<span class="quotelev1">&gt; [On Y] mpirun --host X,Y,Z --np 3 uname -a
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ...and similarly for machine Z.  I can confirm that from any of the  
</span><br>
<span class="quotelev1">&gt; 3 machines, I can ssh to the other without typing in a password.  I  
</span><br>
<span class="quotelev1">&gt; set up the RSA keys correctly [I think].  When I run the above  
</span><br>
<span class="quotelev1">&gt; commands, it just hangs.  Adding &quot;--verbose&quot; doesn't produce any  
</span><br>
<span class="quotelev1">&gt; information...I don't know what it's doing.  I had a longer running  
</span><br>
<span class="quotelev1">&gt; program than &quot;uname&quot; and I didn't see it appear on any of the  
</span><br>
<span class="quotelev1">&gt; machines.  In fact [since it hangs], I don't see uname on &quot;top&quot;,  
</span><br>
<span class="quotelev1">&gt; either.  I do, however, see &quot;mpirun&quot; and &quot;orted&quot; on top, though.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I guess some setup is missing that X has that the other two do not  
</span><br>
<span class="quotelev1">&gt; have.  Any suggestions on how to find out the cause of this  
</span><br>
<span class="quotelev1">&gt; problem?  Thank you!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>Do you see &quot;rsh&quot; or &quot;ssh&quot; in the output of &quot;ps -eadf&quot; when mpirun is  
<br>
hanging, perchance?  If you, what happens if you copy-n-paste those  
<br>
command lines and run them manually?
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
<li><strong>Next message:</strong> <a href="8431.php">Jeff Squyres: "Re: [OMPI users] Problem in MPI::Finalize when freeingintercommunicators"</a>
<li><strong>Previous message:</strong> <a href="8429.php">Jeff Squyres: "Re: [OMPI users] Installation Problems with Openmpi-1.2.9"</a>
<li><strong>In reply to:</strong> <a href="8420.php">Raymond Wan: "[OMPI users] Can't start program across network"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8438.php">Raymond Wan: "Re: [OMPI users] Can't start program across network"</a>
<li><strong>Reply:</strong> <a href="8438.php">Raymond Wan: "Re: [OMPI users] Can't start program across network"</a>
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
