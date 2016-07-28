<?
$subject_val = "Re: [OMPI users] openmpi -cc=&lt;compiler name&gt; option";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 22 17:25:11 2011" -->
<!-- isoreceived="20110922212511" -->
<!-- sent="Thu, 22 Sep 2011 17:25:03 -0400" -->
<!-- isosent="20110922212503" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi -cc=&amp;lt;compiler name&amp;gt; option" -->
<!-- id="085D069D-E7DC-455C-B2A2-6BC80BA13133_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4E7B9D1B.7070004_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi -cc=&lt;compiler name&gt; option<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-22 17:25:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17400.php">German Hoecht: "[OMPI users] maximum size for read buffer in  MPI_File_read/write"</a>
<li><strong>Previous message:</strong> <a href="17398.php">Gus Correa: "Re: [OMPI users] openmpi -cc=&lt;compiler name&gt; option"</a>
<li><strong>In reply to:</strong> <a href="17397.php">Uday Kumar Reddy B: "Re: [OMPI users] openmpi -cc=&lt;compiler name&gt; option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17403.php">Uday Kumar Reddy B: "Re: [OMPI users] openmpi -cc=&lt;compiler name&gt; option"</a>
<li><strong>Reply:</strong> <a href="17403.php">Uday Kumar Reddy B: "Re: [OMPI users] openmpi -cc=&lt;compiler name&gt; option"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 22, 2011, at 4:39 PM, Uday Kumar Reddy B wrote:
<br>
<p><span class="quotelev2">&gt;&gt; More specifically: how is mpicc supposed to know that any given option was intended for mpicc and not the underlying compiler, particularly the ones that it doesn't support?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes, it won't in the general case, but since -cc is accepted by mpich, you can as well assume it is not intended for the underlying compiler. If a user is indeed trying to pass -cc to some unknown compiler, the code is anyway not going to work with MPICH and probably most other MPIs.  In any case, for portability purposes, shouldn't you support -cc?
</span><br>
<p>That would mean that we have to support all the CLI options for MPICH's mpicc.  And they would likewise need to support ours.  And we should also support Platform MPI's mpicc options.  And ...
<br>
<p>It's a slippery slope, and we're not really willing to go down it.
<br>
<p>The real problem is that wrapper compilers are not standardized.  Cray doesn't have one, for example (IIRC).  And IBM AIX MPI doesn't either (also IIRC -- could be wrong on both of these).  Users are unfortunately left in a lurch, and have to work around these issues in their application build systems.  :-(
<br>
<p><span class="quotelev1">&gt; Or one could end up with distributions that compile on some or don't on another. If you indeed would not like to support it, it's better to check for -cc and throw an error than compile with a compiler user didn't intend to - the latter may go unnoticed.
</span><br>
<p>What's the advantage to having mpicc throw the error vs. the underlying compiler?
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
<li><strong>Next message:</strong> <a href="17400.php">German Hoecht: "[OMPI users] maximum size for read buffer in  MPI_File_read/write"</a>
<li><strong>Previous message:</strong> <a href="17398.php">Gus Correa: "Re: [OMPI users] openmpi -cc=&lt;compiler name&gt; option"</a>
<li><strong>In reply to:</strong> <a href="17397.php">Uday Kumar Reddy B: "Re: [OMPI users] openmpi -cc=&lt;compiler name&gt; option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17403.php">Uday Kumar Reddy B: "Re: [OMPI users] openmpi -cc=&lt;compiler name&gt; option"</a>
<li><strong>Reply:</strong> <a href="17403.php">Uday Kumar Reddy B: "Re: [OMPI users] openmpi -cc=&lt;compiler name&gt; option"</a>
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
