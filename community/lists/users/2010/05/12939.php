<?
$subject_val = "Re: [OMPI users] How do I run OpenMPI safely on aNehalem	standalone machine?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  6 15:00:33 2010" -->
<!-- isoreceived="20100506190033" -->
<!-- sent="Thu, 6 May 2010 15:00:25 -0400" -->
<!-- isosent="20100506190025" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How do I run OpenMPI safely on aNehalem	standalone machine?" -->
<!-- id="5B713D83-3D49-4FD2-A474-9691C79568CB_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20100505235456.GA5622_at_sopalepc" -->
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
<strong>Subject:</strong> Re: [OMPI users] How do I run OpenMPI safely on aNehalem	standalone machine?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-06 15:00:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12940.php">Eugene Loh: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?"</a>
<li><strong>Previous message:</strong> <a href="12938.php">Richard Walsh: "Re: [OMPI users] Can NWChem be run with OpenMPI over an InfiniBand	interconnect ... ??"</a>
<li><strong>In reply to:</strong> <a href="12914.php">Douglas Guptill: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12904.php">Prentice Bisbal: "Re: [OMPI users] How do I run OpenMPI safely on a	Nehalem	standalone machine?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 5, 2010, at 7:54 PM, Douglas Guptill wrote:
<br>
<p><span class="quotelev1">&gt; P.S.  Yes, I know OpenMPI 1.2.8 is old.  We have been using it for 2
</span><br>
<span class="quotelev1">&gt; years with no apparent problems.  
</span><br>
<p>It ain't broke; don't fix it -- nothing wrong with that.
<br>
<p><span class="quotelev1">&gt; When I saw comments like &quot;machine hung&quot; for 1.4.1,
</span><br>
<p>FWIW, I find it hard to believe that Open MPI is the cause of machine hangs.  Open MPI is user-level process stuff, which should generally not be able to crash Linux.  If user-level processes can hang Linux, then something else is probably broken.  
<br>
<p>But also FWIW, we have found various MPI benchmarks and test applications can be *excellent* at finding underlying server / network problems.  I can't think of a case offhand where Open MPI &quot;caused&quot; a machine to hang/crash/die/whatever that wasn't ultimately tracked down to some other root cause.  
<br>
<p><span class="quotelev1">&gt; and &quot;data loss&quot; for 1.3.x, I put aside thoughts of upgrading.
</span><br>
<p>We definitely did have a big problem with OpenFabrics registered memory in Open MPI 1.3.0 and 1.3.1 (corrected in 1.3.2).  Shame on us.  :-(  
<br>
<p>But to continue the &quot;FWIW&quot; from above: we actually do *millions* of regression tests before Open MPI is released -- literally.  All of us were convinced that 1.3.0 and 1.3.1 were ok to release; the data corruption issues caught us by surprise.  Yuck.  Those kinds of bugs are the worst.  :-(
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
<li><strong>Next message:</strong> <a href="12940.php">Eugene Loh: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?"</a>
<li><strong>Previous message:</strong> <a href="12938.php">Richard Walsh: "Re: [OMPI users] Can NWChem be run with OpenMPI over an InfiniBand	interconnect ... ??"</a>
<li><strong>In reply to:</strong> <a href="12914.php">Douglas Guptill: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12904.php">Prentice Bisbal: "Re: [OMPI users] How do I run OpenMPI safely on a	Nehalem	standalone machine?"</a>
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
