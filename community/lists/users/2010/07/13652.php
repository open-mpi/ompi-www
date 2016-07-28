<?
$subject_val = "Re: [OMPI users] OpenMPI flags conditions";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 15 09:41:26 2010" -->
<!-- isoreceived="20100715134126" -->
<!-- sent="Thu, 15 Jul 2010 09:41:52 -0400" -->
<!-- isosent="20100715134152" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI flags conditions" -->
<!-- id="DEDB5D2E-FD59-479B-B599-10358688FA6A_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTilZf_y2GyuUFm4YTLIckG4RTK-XVE3uWBGn4gLs_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI flags conditions<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-15 09:41:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13653.php">Scott Atchley: "Re: [OMPI users] error in (Open MPI) 1.3.3r21324-ct8.2-b09b-r31"</a>
<li><strong>Previous message:</strong> <a href="13651.php">Jeff Squyres: "Re: [OMPI users] Highly variable performance"</a>
<li><strong>In reply to:</strong> <a href="13650.php">Gabriele Fatigati: "Re: [OMPI users] OpenMPI flags conditions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13662.php">Eugene Loh: "Re: [OMPI users] OpenMPI flags conditions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 15, 2010, at 9:27 AM, Gabriele Fatigati wrote:
<br>
<p><span class="quotelev1">&gt; Mm at the momento no,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; but i think it's a good idea to insert this feature in future OpenMPI release :)
</span><br>
<p>Agreed.
<br>
<p><span class="quotelev1">&gt; We can have parameter set that works well with a precise numbers of procs, and not with a more large number ( or more small number) . The same for message size.
</span><br>
<p>We've actually (very briefly) talked internally about this kind of idea, but no one ever had the time / resources to come up with a logic language that would be necessary to implement such a thing (i.e., at a minimum, you'd have to have some kind of &quot;if&quot; logic in the mca-params.conf file).
<br>
<p>But here's another idea: perhaps it would be a better idea to leverage an existing language (like perl or python or ...) that Open MPI could somehow &quot;eval&quot; at runtime -- the output of which would be the set of .params values that you want to use for the current job.  
<br>
<p>That way, Open MPI stays out of the &quot;language&quot; business (there's lots of fine languages today; why should an MPI implementation invent another one?).  OMPI just adds some bootstrapping to be able to call down to some scripting language during job startup, and perhaps inject some pre-defined variables that perl/python/whatever can use (e.g., num MPI procs, host list, argv, existing MCA params, ...etc.).  
<br>
<p>Lots of hand-waving in there, but if someone wants to run with this idea...  :-)
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
<li><strong>Next message:</strong> <a href="13653.php">Scott Atchley: "Re: [OMPI users] error in (Open MPI) 1.3.3r21324-ct8.2-b09b-r31"</a>
<li><strong>Previous message:</strong> <a href="13651.php">Jeff Squyres: "Re: [OMPI users] Highly variable performance"</a>
<li><strong>In reply to:</strong> <a href="13650.php">Gabriele Fatigati: "Re: [OMPI users] OpenMPI flags conditions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13662.php">Eugene Loh: "Re: [OMPI users] OpenMPI flags conditions"</a>
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
