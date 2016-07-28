<?
$subject_val = "Re: [OMPI devel] SC13 birds of a feather - thermal monitoring";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 20 14:48:25 2014" -->
<!-- isoreceived="20140120194825" -->
<!-- sent="Mon, 20 Jan 2014 11:47:58 -0800" -->
<!-- isosent="20140120194758" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] SC13 birds of a feather - thermal monitoring" -->
<!-- id="F5396C2C-9FF4-4273-8675-9D860448A29F_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI devel] SC13 birds of a feather - thermal monitoring" -->
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
<strong>Subject:</strong> Re: [OMPI devel] SC13 birds of a feather - thermal monitoring<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-20 14:47:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13817.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  1.7.4rc: build failure on mips32"</a>
<li><strong>Previous message:</strong> <a href="13815.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] RFC: async modex"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just as a follow-up to this: I have added a sensor module to monitor core temperatures per this email thread. I haven't added the cooling devices from this last bit as the info I could find under there didn't seem all that helpful right now - mostly just how fast the fan is running on a scale of 0-10. I can see the possible value at some point, but figured it could wait.
<br>
<p>Chris: let me know if you would like to use this capability and I'll pass along instructions.
<br>
<p><p>On Dec 4, 2013, at 9:37 PM, Christopher Samuel &lt;samuel_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; -----BEGIN PGP SIGNED MESSAGE-----
</span><br>
<span class="quotelev1">&gt; Hash: SHA1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 05/12/13 01:52, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ralph -- let's chat about this in Chicago next Friday.  I'll add
</span><br>
<span class="quotelev2">&gt;&gt; it to the agenda on the wiki.  I assume this would not be
</span><br>
<span class="quotelev2">&gt;&gt; difficult stuff; we don't really need to do anything fancy at all.
</span><br>
<span class="quotelev2">&gt;&gt; I think we just want to sketch out what exactly we want to do, and
</span><br>
<span class="quotelev2">&gt;&gt; it could probably be done in a day or three.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There's also stuff that ACPI can expose under:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /sys/class/thermal/thermal_zone*/temp
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; though it might need a bit more prodding to work out what's what there.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; (Thanks for the idea, Samuel!)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My pleasure!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; All the best,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Chris
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - -- 
</span><br>
<span class="quotelev1">&gt; Christopher Samuel        Senior Systems Administrator
</span><br>
<span class="quotelev1">&gt; VLSCI - Victorian Life Sciences Computation Initiative
</span><br>
<span class="quotelev1">&gt; Email: samuel_at_[hidden] Phone: +61 (0)3 903 55545
</span><br>
<span class="quotelev1">&gt; <a href="http://www.vlsci.org.au/">http://www.vlsci.org.au/</a>      <a href="http://twitter.com/vlsci">http://twitter.com/vlsci</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----BEGIN PGP SIGNATURE-----
</span><br>
<span class="quotelev1">&gt; Version: GnuPG v1.4.14 (GNU/Linux)
</span><br>
<span class="quotelev1">&gt; Comment: Using GnuPG with Thunderbird - <a href="http://www.enigmail.net/">http://www.enigmail.net/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; iEYEARECAAYFAlKgESUACgkQO2KABBYQAh+44gCeIsDplsMAiwC4PJBbco5vurVy
</span><br>
<span class="quotelev1">&gt; PbwAn0h9kJYIoeK1Y/mlowwHLBRb1oQX
</span><br>
<span class="quotelev1">&gt; =WFYZ
</span><br>
<span class="quotelev1">&gt; -----END PGP SIGNATURE-----
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13817.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  1.7.4rc: build failure on mips32"</a>
<li><strong>Previous message:</strong> <a href="13815.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] RFC: async modex"</a>
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
