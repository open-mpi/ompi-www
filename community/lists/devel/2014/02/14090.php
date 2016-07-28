<?
$subject_val = "Re: [OMPI devel] Reviewing MPI_Dims_create";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 10 20:39:02 2014" -->
<!-- isoreceived="20140211013902" -->
<!-- sent="Tue, 11 Feb 2014 02:39:00 +0100 (CET)" -->
<!-- isosent="20140211013900" -->
<!-- name="Christoph Niethammer" -->
<!-- email="niethammer_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Reviewing MPI_Dims_create" -->
<!-- id="1609212.230823.1392082740340.JavaMail.root_at_hlrs.de" -->
<!-- charset="utf-8" -->
<!-- inreplyto="58FB4E62-9D6D-40C9-8AC7-C0905FF93B03_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Reviewing MPI_Dims_create<br>
<strong>From:</strong> Christoph Niethammer (<em>niethammer_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-10 20:39:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14091.php">Paul Hargrove: "Re: [OMPI devel] 1.7.5 fails on simple test"</a>
<li><strong>Previous message:</strong> <a href="14089.php">Jeff Squyres (jsquyres): "[OMPI devel] oshmem test suite"</a>
<li><strong>In reply to:</strong> <a href="14085.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Reviewing MPI_Dims_create"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14093.php">Andreas Schäfer: "Re: [OMPI devel] Reviewing MPI_Dims_create"</a>
<li><strong>Reply:</strong> <a href="14093.php">Andreas Schäfer: "Re: [OMPI devel] Reviewing MPI_Dims_create"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
sqrt(2^31)/log(sqrt(2^31))*(1+1.2762/log(sqrt(2^31)))/1024 * 4byte = 18,850133965051 kbyte should do it. ;)
<br>
Amazing - I think our systems are still *too small* - lets go for MPI with int64 types. ^^
<br>
<p>----- Urspr&#195;&#188;ngliche Mail -----
<br>
Von: &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt;
<br>
An: &quot;Open MPI Developers&quot; &lt;devel_at_[hidden]&gt;
<br>
Gesendet: Dienstag, 11. Februar 2014 01:32:53
<br>
Betreff: Re: [OMPI devel] Reviewing MPI_Dims_create
<br>
<p>On Feb 10, 2014, at 7:22 PM, Christoph Niethammer &lt;niethammer_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 2.) Interesting idea: Using the approximation from the cited paper we should only need around 400 MB to store all primes in the int32 range. Potential for applying compression techniques still present. ^^
</span><br>
<p>Per Andreas' last mail, we only need primes up to sqrt(2B) + 1 more.  That *has* to be less than 400MB... right?
<br>
<p>sqrt(2B) = 46340.  So the upper limit on the size required to hold all the primes from 2...46340 is 46340*sizeof(int) = 185,360 bytes (plus one more, per Andreas, so 185,364).
<br>
<p>This is all SWAGing, but I'm assuming the actual number must be *far* less than that...
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
_______________________________________________
devel mailing list
devel_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14091.php">Paul Hargrove: "Re: [OMPI devel] 1.7.5 fails on simple test"</a>
<li><strong>Previous message:</strong> <a href="14089.php">Jeff Squyres (jsquyres): "[OMPI devel] oshmem test suite"</a>
<li><strong>In reply to:</strong> <a href="14085.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Reviewing MPI_Dims_create"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14093.php">Andreas Schäfer: "Re: [OMPI devel] Reviewing MPI_Dims_create"</a>
<li><strong>Reply:</strong> <a href="14093.php">Andreas Schäfer: "Re: [OMPI devel] Reviewing MPI_Dims_create"</a>
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
