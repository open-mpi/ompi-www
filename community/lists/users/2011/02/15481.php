<?
$subject_val = "Re: [OMPI users] How closely tied is a specific release of OpenMPI to the host operating system and other system software?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  2 08:11:33 2011" -->
<!-- isoreceived="20110202131133" -->
<!-- sent="Wed, 2 Feb 2011 08:11:29 -0500" -->
<!-- isosent="20110202131129" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How closely tied is a specific release of OpenMPI to the host operating system and other system software?" -->
<!-- id="05C74CE8-80F9-4E27-810F-389363F930E8_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4D4947BE.5030407_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] How closely tied is a specific release of OpenMPI to the host operating system and other system software?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-02 08:11:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15482.php">Mehdi Bozzo-Rey: "Re: [OMPI users] How closely tied is a specific release of OpenMPIto the host operating system and other system software?"</a>
<li><strong>Previous message:</strong> <a href="15480.php">Jeff Squyres: "Re: [OMPI users] Check whether non-blocking communication has finished?"</a>
<li><strong>In reply to:</strong> <a href="15477.php">Terry Dontje: "Re: [OMPI users] How closely tied is a specific release of OpenMPI to the host operating system and other system software?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15482.php">Mehdi Bozzo-Rey: "Re: [OMPI users] How closely tied is a specific release of OpenMPIto the host operating system and other system software?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 2, 2011, at 7:02 AM, Terry Dontje wrote:
<br>
<p><span class="quotelev1">&gt; 2.  The system libraries on different linux versions are not always the same.  At Oracle we build a binary distribution of OMPI that we test out on several different versions of Linux.  The key here is building on a machine that is essentially the lowest common denominator of all the system software that exists on the machines one will be running on.  This is essentially why Oracle states a bounded set of OS versions a distribution runs on.  An example of this is there is a component in OMPI that was relying on a version of libbfd that changed significantly between Linux version.  Once we got rid of the usage of that library we were ok.  There are not &quot;a lot&quot; of these instances but the number is not zero.  
</span><br>
<p>+1
<br>
<p>If your systems are not running exactly the same versions of software (e.g., different OS's), we typically categorize this as a &quot;heterogeneous&quot; scenario -- with all the caveats that Terry mentions.  You may well likely require a separate OMPI install for each OS, and possibly (likely) even a different compilation of your application for each OS.
<br>
<p>In general, I try to limit my OMPI jobs to homogeneous platforms.  Heterogeneous can be done; it's just somewhat of a pain to get right.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15482.php">Mehdi Bozzo-Rey: "Re: [OMPI users] How closely tied is a specific release of OpenMPIto the host operating system and other system software?"</a>
<li><strong>Previous message:</strong> <a href="15480.php">Jeff Squyres: "Re: [OMPI users] Check whether non-blocking communication has finished?"</a>
<li><strong>In reply to:</strong> <a href="15477.php">Terry Dontje: "Re: [OMPI users] How closely tied is a specific release of OpenMPI to the host operating system and other system software?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15482.php">Mehdi Bozzo-Rey: "Re: [OMPI users] How closely tied is a specific release of OpenMPIto the host operating system and other system software?"</a>
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
