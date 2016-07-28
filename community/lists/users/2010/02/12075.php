<?
$subject_val = "Re: [OMPI users] parameters for newer IB card on older OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 10 15:43:18 2010" -->
<!-- isoreceived="20100210204318" -->
<!-- sent="Wed, 10 Feb 2010 15:43:12 -0500" -->
<!-- isosent="20100210204312" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] parameters for newer IB card on older OpenMPI" -->
<!-- id="E2D5BB9A-2837-471D-8AE2-3DCC849D7E4C_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="E14980C5-4CBC-4304-8A76-9AE6342EE8A6_at_umich.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] parameters for newer IB card on older OpenMPI<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-10 15:43:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12076.php">Anton Starikov: "[OMPI users] Torque+BCLR+OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="12074.php">Brock Palen: "[OMPI users] parameters for newer IB card on older OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="12074.php">Brock Palen: "[OMPI users] parameters for newer IB card on older OpenMPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 10, 2010, at 3:14 PM, Brock Palen wrote:
<br>
<p><span class="quotelev1">&gt; Is there any reason I can not unpack a newer MPI and backport the 
</span><br>
<span class="quotelev1">&gt; config for these newer cards to this version of openMPI?
</span><br>
<p>That should be fine.  You can probably just copy the .ini file from newer Open MPI to your installation.
<br>
<p>I don't *think* we made any changes (e.g., added new fields), but just in case we did, keep a copy of your old .ini file around until you've verified that the new one works.
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
<li><strong>Next message:</strong> <a href="12076.php">Anton Starikov: "[OMPI users] Torque+BCLR+OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="12074.php">Brock Palen: "[OMPI users] parameters for newer IB card on older OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="12074.php">Brock Palen: "[OMPI users] parameters for newer IB card on older OpenMPI"</a>
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
