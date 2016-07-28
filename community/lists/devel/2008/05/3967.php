<?
$subject_val = "Re: [OMPI devel] RFC: Linuxes shipping libibverbs";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 21 15:38:18 2008" -->
<!-- isoreceived="20080521193818" -->
<!-- sent="Wed, 21 May 2008 15:38:10 -0400" -->
<!-- isosent="20080521193810" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Linuxes shipping libibverbs" -->
<!-- id="BAA68214-4F16-4501-AD0E-C5DBF00F9F7F_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.LNX.4.64.0805211209130.10912_at_marvin.we-be-smart.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Linuxes shipping libibverbs<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-21 15:38:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3968.php">Brian W. Barrett: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Previous message:</strong> <a href="3966.php">Dirk Eddelbuettel: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>In reply to:</strong> <a href="3963.php">Brian W. Barrett: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3968.php">Brian W. Barrett: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Reply:</strong> <a href="3968.php">Brian W. Barrett: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Reply:</strong> <a href="3970.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
One thing I should clarify -- the ibverbs error message from my  
<br>
previous mail is a red herring.  libibverbs prints that message on  
<br>
systems where the kernel portions of the OFED stack are not installed  
<br>
(such as the quick-n-dirty test that I did before -- all I did was  
<br>
install libibverbs without the corresponding kernel stuff).  I  
<br>
installed the whole OFED stack on a machine with no verbs-capable  
<br>
hardware and verified that the libibverbs message does *not* appear  
<br>
when the kernel bits are properly installed and running.
<br>
<p>So we're only talking about the Open MPI warning message here.  More  
<br>
below.
<br>
<p><p><p>On May 21, 2008, at 12:17 PM, Brian W. Barrett wrote:
<br>
<p><span class="quotelev2">&gt;&gt; 2. An out-of-the-box &quot;mpirun a.out&quot; will print warning messages in
</span><br>
<span class="quotelev2">&gt;&gt; perfectly valid/good configurations (no verbs-capable hardware, but
</span><br>
<span class="quotelev2">&gt;&gt; just happen to have libibverbs installed).  This is a Big Deal.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Which is easily solved with a better error message, as Pasha  
</span><br>
<span class="quotelev1">&gt; suggested.
</span><br>
<p>I guess this is where we disagree: I don't believe that the issue is  
<br>
solved by making a &quot;better&quot; message.  Specifically: this is the first  
<br>
case where we're saying &quot;if you run with a valid configuration, you're  
<br>
going to get a warning message and you have to do something extra to  
<br>
turn it off.&quot;
<br>
<p>That just seems darn weird to me, especially when other MPI's don't do  
<br>
the same thing.  Come to think of it, I can't think of many other  
<br>
software packages that do that.
<br>
<p><span class="quotelev2">&gt;&gt; In short: I think it's no longer safe to assume that machines with
</span><br>
<span class="quotelev2">&gt;&gt; libibverbs installed must also have verbs-capable hardware.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But here's the real problem -- with our current selection logic, a  
</span><br>
<span class="quotelev1">&gt; user
</span><br>
<span class="quotelev1">&gt; with libibverbs but no IB cards gets an error message saying &quot;hey,  
</span><br>
<span class="quotelev1">&gt; we need
</span><br>
<span class="quotelev1">&gt; you to set this flag to make this error go away&quot; (or would, per  
</span><br>
<span class="quotelev1">&gt; Pasha's
</span><br>
<span class="quotelev1">&gt; suggestion).  A user with a busted IB stack on a node (which we  
</span><br>
<span class="quotelev1">&gt; still saw
</span><br>
<span class="quotelev1">&gt; pretty often at LANL) starts using TCP and their application runs  
</span><br>
<span class="quotelev1">&gt; like a
</span><br>
<span class="quotelev1">&gt; dog.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I guess it's a matter of how often you see errors in the IB stack that
</span><br>
<span class="quotelev1">&gt; cause nic initialization to fail.  The machines I tend to use still
</span><br>
<span class="quotelev1">&gt; exhibit this problem pretty often, but it's possible I just work on  
</span><br>
<span class="quotelev1">&gt; bad
</span><br>
<span class="quotelev1">&gt; hardware more often than is usual in the wild.
</span><br>
<p>I guess this is the central issue: what *is* the common case?  Which  
<br>
set of users should be forced to do something different?
<br>
<p>I'm claiming that now that the Linux distros are shipping libibverbs,  
<br>
the number of users who have the openib BTL installed but do not have  
<br>
verbs-capable hardware will be *much* larger than those with verbs- 
<br>
capable hardware.  Hence, I think the pain point should be for the  
<br>
smaller group (those with verbs-capable hardware): set an MCA param if  
<br>
you want to see the warning message.
<br>
<p>(we can debate the default value for the BTL-wide base param later --  
<br>
let's first just debate the *concept* as specific to the openib BTL)
<br>
<p><span class="quotelev1">&gt; It would be great if libibverbs could return two different error  
</span><br>
<span class="quotelev1">&gt; messages
</span><br>
<span class="quotelev1">&gt; - one for &quot;there's no IB card in this machine&quot; and one for &quot;there's  
</span><br>
<span class="quotelev1">&gt; an IB
</span><br>
<span class="quotelev1">&gt; card here, but we can't initialize it&quot;.  I think that would make this
</span><br>
<span class="quotelev1">&gt; argument go away.  Open MPI could probably mimic that behavior by  
</span><br>
<span class="quotelev1">&gt; parsing
</span><br>
<span class="quotelev1">&gt; the PCI tables, but that sounds ... painful.
</span><br>
<p>Yes, this capability in libiverbs would be good.  Parsing the PCI  
<br>
tables doesn't sound like our role.
<br>
<p>I'll ask the libibverbs authors about it...
<br>
<p><span class="quotelev1">&gt; I guess the root of my concern is that unexpected behavior with no
</span><br>
<span class="quotelev1">&gt; explanation is (in my mind) the most dangerous case and the one we  
</span><br>
<span class="quotelev1">&gt; should
</span><br>
<span class="quotelev1">&gt; address by default.  And turning this error message off is going to  
</span><br>
<span class="quotelev1">&gt; cause
</span><br>
<span class="quotelev1">&gt; unexpected behavior without explanation.
</span><br>
<p><p>But more information is available, and subject to normal  
<br>
troubleshooting techniques.  And if you're in an environment where you  
<br>
*do* want to use verbs-capable hardware, then setting the MCA param  
<br>
seems perfectly acceptable to me.  IIRC, LANL sets a whole pile of MCA  
<br>
params in the top-level openmpi-mca-params.conf file that are specific  
<br>
to their environment (right?).  If that's true, what's one more param?
<br>
<p>Heck, the OMPI installed by OFED can set an MCA param in openmpi-mca- 
<br>
params.cof by default (which is what most verbs-capable-hardware-users  
<br>
utilize).  That would solve the issue for 98% of the IB/iWARP users  
<br>
out there.  Those who compile from source would need to do it manually.
<br>
<p>I agree that this is less than perfect.  My main point is that I  
<br>
really don't like the idea of &quot;mpirun a.out&quot; will result in warning  
<br>
messages for perfectly valid configurations.
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
<li><strong>Next message:</strong> <a href="3968.php">Brian W. Barrett: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Previous message:</strong> <a href="3966.php">Dirk Eddelbuettel: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>In reply to:</strong> <a href="3963.php">Brian W. Barrett: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3968.php">Brian W. Barrett: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Reply:</strong> <a href="3968.php">Brian W. Barrett: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Reply:</strong> <a href="3970.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
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
