<?
$subject_val = "Re: [OMPI users] Displaying Selected MCA Modules";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 25 14:01:32 2008" -->
<!-- isoreceived="20080625180132" -->
<!-- sent="Wed, 25 Jun 2008 14:01:24 -0400" -->
<!-- isosent="20080625180124" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Displaying Selected MCA Modules" -->
<!-- id="870EF3FD-79D5-4FB2-B3CF-C63B19D1BCF6_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="48619BAE.70301_at_penguincomputing.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Displaying Selected MCA Modules<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-25 14:01:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5990.php">jody: "[OMPI users] mca parameters: meaning and use"</a>
<li><strong>Previous message:</strong> <a href="5988.php">Ralph Castain: "Re: [OMPI users] Displaying Selected MCA Modules"</a>
<li><strong>In reply to:</strong> <a href="5987.php">Joshua Bernstein: "Re: [OMPI users] Displaying Selected MCA Modules"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5971.php">Joshua Bernstein: "Re: [OMPI users] Displaying Selected MCA Modules"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 24, 2008, at 9:13 PM, Joshua Bernstein wrote:
<br>
<p><span class="quotelev1">&gt; Exactly, but for now, if I make sure the NODES envar is setup  
</span><br>
<span class="quotelev1">&gt; correctly and make sure the OpenMPI is NFS mounted, and I actually  
</span><br>
<span class="quotelev1">&gt; have to copy out the mca libraries (libcache doesn't seem to work),  
</span><br>
<span class="quotelev1">&gt; I actually end up with something running!
</span><br>
<p><p>FWIW, you might be getting tripped up on the fact that OMPI uses  
<br>
dlopen to find all of its DSO's (i.e., the stuff in $libdir/openmpi).   
<br>
If scyld proxies dlopen back to the head node, it could work, but if  
<br>
not, you might want to build OMPI with the &quot;--disable-dlopen&quot;  
<br>
configure option.  This puts all the plugins inside libmpi.so (and  
<br>
friends), and disables the use of dlopen.  This might make operation  
<br>
via your magic .so transporting to back-end nodes work properly.
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
<li><strong>Next message:</strong> <a href="5990.php">jody: "[OMPI users] mca parameters: meaning and use"</a>
<li><strong>Previous message:</strong> <a href="5988.php">Ralph Castain: "Re: [OMPI users] Displaying Selected MCA Modules"</a>
<li><strong>In reply to:</strong> <a href="5987.php">Joshua Bernstein: "Re: [OMPI users] Displaying Selected MCA Modules"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5971.php">Joshua Bernstein: "Re: [OMPI users] Displaying Selected MCA Modules"</a>
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
