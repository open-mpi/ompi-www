<?
$subject_val = "Re: [OMPI users] Help configuring openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 13 17:09:14 2008" -->
<!-- isoreceived="20080513210914" -->
<!-- sent="Tue, 13 May 2008 17:08:59 -0400" -->
<!-- isosent="20080513210859" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Help configuring openmpi" -->
<!-- id="D5F0573D-2999-4C7C-A71F-18FB9365D139_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4829E8C7.3060002_at_wanadoo.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] Help configuring openmpi<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-13 17:08:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5663.php">JUAN CARLOS LARROYA HUGUET: "Re: [OMPI users] Help configuring openmpi"</a>
<li><strong>Previous message:</strong> <a href="5661.php">Tamer: "Re: [OMPI users] openmpi-1.3a1r18241  ompi-restart issue"</a>
<li><strong>In reply to:</strong> <a href="5660.php">Juan Carlos Larroya Huguet: "Re: [OMPI users] Help configuring openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5663.php">JUAN CARLOS LARROYA HUGUET: "Re: [OMPI users] Help configuring openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 13, 2008, at 3:15 PM, Juan Carlos Larroya Huguet wrote:
<br>
<p><span class="quotelev1">&gt; Thanks very much Jeff, you solved my problem. The new CPU times are  
</span><br>
<span class="quotelev1">&gt; correct.
</span><br>
<p>Good!
<br>
<p><span class="quotelev1">&gt; PS: I was working with openmpi 1.2.5, to test  your suggestion I moved
</span><br>
<span class="quotelev1">&gt; to version 1.2.6... I tried to install openmpi in my own path using
</span><br>
<span class="quotelev1">&gt; configure --prefix=my_path but the make install remains sticky to the
</span><br>
<span class="quotelev1">&gt; default path ... /usr/local . I didn't found this problem with the
</span><br>
<span class="quotelev1">&gt; version 1.2.5... To bypass this problem I just modified the
</span><br>
<span class="quotelev1">&gt; ac_default_prefix variable in the configure file to my path... Maybe  
</span><br>
<span class="quotelev1">&gt; you
</span><br>
<span class="quotelev1">&gt; can make follows this issue to the right person/mail list...
</span><br>
<p><p>I'm actually the right person.  :-)
<br>
<p>I'd be very, very surprised if this is broken in OMPI v1.2.6 -- we  
<br>
tested that tarball thoroughly and we're using standard GNU Autoconf  
<br>
to generate the configure script (same one that was used to generate  
<br>
OMPI v1.2.5).
<br>
<p>Can you send the output of &quot;head config.log&quot; from your OMPI source  
<br>
directory?
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
<li><strong>Next message:</strong> <a href="5663.php">JUAN CARLOS LARROYA HUGUET: "Re: [OMPI users] Help configuring openmpi"</a>
<li><strong>Previous message:</strong> <a href="5661.php">Tamer: "Re: [OMPI users] openmpi-1.3a1r18241  ompi-restart issue"</a>
<li><strong>In reply to:</strong> <a href="5660.php">Juan Carlos Larroya Huguet: "Re: [OMPI users] Help configuring openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5663.php">JUAN CARLOS LARROYA HUGUET: "Re: [OMPI users] Help configuring openmpi"</a>
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
