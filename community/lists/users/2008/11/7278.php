<?
$subject_val = "Re: [OMPI users] Can I build development RPM from openmpi-1.2.8-1.src.rpm?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 11 09:53:29 2008" -->
<!-- isoreceived="20081111145329" -->
<!-- sent="Tue, 11 Nov 2008 09:53:23 -0500" -->
<!-- isosent="20081111145323" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Can I build development RPM from openmpi-1.2.8-1.src.rpm?" -->
<!-- id="A9B49D86-6A12-44AD-BA33-2329D1AE7E9C_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="937522.79559.qm_at_web56604.mail.re3.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Can I build development RPM from openmpi-1.2.8-1.src.rpm?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-11 09:53:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7279.php">Jeff Squyres: "Re: [OMPI users] ompi_info hangs"</a>
<li><strong>Previous message:</strong> <a href="7277.php">Fabian H&#195;&#164;nsel: "Re: [OMPI users] timing + /usr/bin/time (was: Re:  dual cores)"</a>
<li><strong>In reply to:</strong> <a href="7269.php">Oleg V. Zhylin: "Re: [OMPI users] Can I build development RPM from openmpi-1.2.8-1.src.rpm?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7280.php">Oleg V. Zhylin: "Re: [OMPI users] Can I build development RPM from openmpi-1.2.8-1.src.rpm?"</a>
<li><strong>Reply:</strong> <a href="7280.php">Oleg V. Zhylin: "Re: [OMPI users] Can I build development RPM from openmpi-1.2.8-1.src.rpm?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 10, 2008, at 8:21 PM, Oleg V. Zhylin wrote:
<br>
<p><span class="quotelev2">&gt;&gt; Are you saying that you have libmpi_f90.so available and
</span><br>
<span class="quotelev2">&gt;&gt; when you try to run, you get missing symbol errors?  Or are
</span><br>
<span class="quotelev2">&gt;&gt; you failing to compile/link at all?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Linking stage fails. When I use mpif90 to produce actual executable  
</span><br>
<span class="quotelev1">&gt; ld reports error that it can't find -lmpi_f90. The libmpi_f90.so is  
</span><br>
<span class="quotelev1">&gt; in /usr/libs but,
</span><br>
<p>/usr/libs is not a standard linker directory.  If libmpi_f90.so is  
<br>
there, it's probably fairly predictable that the linker is not finding  
<br>
it.  Did you really mean /usr/lib?
<br>
<p><span class="quotelev1">&gt; again, as I've discovered ld doesn't even try to look for it. Maybe  
</span><br>
<span class="quotelev1">&gt; this is ld problem, or ld in conjunction with gfortran...
</span><br>
<p>Can you supply all the information listed here:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
<p>Additionally, what's the output when you run &quot;mpif90 --showme&quot;?
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
<li><strong>Next message:</strong> <a href="7279.php">Jeff Squyres: "Re: [OMPI users] ompi_info hangs"</a>
<li><strong>Previous message:</strong> <a href="7277.php">Fabian H&#195;&#164;nsel: "Re: [OMPI users] timing + /usr/bin/time (was: Re:  dual cores)"</a>
<li><strong>In reply to:</strong> <a href="7269.php">Oleg V. Zhylin: "Re: [OMPI users] Can I build development RPM from openmpi-1.2.8-1.src.rpm?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7280.php">Oleg V. Zhylin: "Re: [OMPI users] Can I build development RPM from openmpi-1.2.8-1.src.rpm?"</a>
<li><strong>Reply:</strong> <a href="7280.php">Oleg V. Zhylin: "Re: [OMPI users] Can I build development RPM from openmpi-1.2.8-1.src.rpm?"</a>
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
