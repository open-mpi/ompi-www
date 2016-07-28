<?
$subject_val = "Re: [OMPI users] dlopening openmpi libs (was: Re: Problems in 1.3 loading shared libs when usingVampirServer)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 25 12:10:45 2009" -->
<!-- isoreceived="20090325161045" -->
<!-- sent="Wed, 25 Mar 2009 12:10:40 -0400 (EDT)" -->
<!-- isosent="20090325161040" -->
<!-- name="Brian W. Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] dlopening openmpi libs (was: Re: Problems in 1.3 loading shared libs when usingVampirServer)" -->
<!-- id="alpine.DEB.1.10.0903251153070.30076_at_marvin.we-be-smart.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49C7E70A.4040003_at_mpip-mainz.mpg.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] dlopening openmpi libs (was: Re: Problems in 1.3 loading shared libs when usingVampirServer)<br>
<strong>From:</strong> Brian W. Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-25 12:10:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8583.php">Jeff Squyres: "Re: [OMPI users] dlopening openmpi libs (was: Re: Problems in 1.3 loading shared libs when usingVampirServer)"</a>
<li><strong>Previous message:</strong> <a href="8581.php">Daniel Sp&#229;ngberg: "Re: [OMPI users] problem with overlapping communication with calculation"</a>
<li><strong>In reply to:</strong> <a href="8551.php">Olaf Lenz: "[OMPI users] dlopening openmpi libs (was: Re: Problems in 1.3 loading shared libs when	usingVampirServer)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8583.php">Jeff Squyres: "Re: [OMPI users] dlopening openmpi libs (was: Re: Problems in 1.3 loading shared libs when usingVampirServer)"</a>
<li><strong>Reply:</strong> <a href="8583.php">Jeff Squyres: "Re: [OMPI users] dlopening openmpi libs (was: Re: Problems in 1.3 loading shared libs when usingVampirServer)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, 23 Mar 2009, Olaf Lenz wrote:
<br>
<p><span class="quotelev1">&gt; and the solution that is described there still looks as though it should 
</span><br>
<span class="quotelev1">&gt; still work now, or shouldn't it? Just link all the OpenMPI plugins against 
</span><br>
<span class="quotelev1">&gt; the base OpenMPI libraries, and it should work. Or am I wrong?
</span><br>
<p>I believe your suggestion will not work, certainly not portably.  In fact, 
<br>
it will die in horrible ways.  We used to link in the way you suggested, 
<br>
and what you end up with is a bunch of copies of libmpi, all in their own 
<br>
namespace.  Hardly helpful :).
<br>
<p>Unfortunately, there are only three rational solutions I've thought of to 
<br>
the problem:
<br>
<p>* Do nothing, my prefered solution
<br>
* Stop building components by default
<br>
* Have libmpi be a thin wrapper, which dlopens Open MPI's guts into the 
<br>
public namespace, and the guts then dlopen all the components.
<br>
<p>Obviously, the first serves the greatest community and involves the least 
<br>
amount of work.  However, packagers such as the Linux distributions should 
<br>
make a decision about how to best package Open MPI -- perhaps shipping 
<br>
it built with components is not the ideal solution for their 
<br>
infrastructure.
<br>
<p>I did want to point out one incorrect statement in your e-mail.  While 
<br>
specifying &quot;--enable-shared --enable-static&quot; to configure will cause 
<br>
components to be linked into libmpi rather than built as stand-alone 
<br>
entities, a better way to accomplish that is &quot;--enable-mca-static&quot;, which 
<br>
will build all the components into libmpi.so, but not also cause libmpi.a 
<br>
to be built.
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8583.php">Jeff Squyres: "Re: [OMPI users] dlopening openmpi libs (was: Re: Problems in 1.3 loading shared libs when usingVampirServer)"</a>
<li><strong>Previous message:</strong> <a href="8581.php">Daniel Sp&#229;ngberg: "Re: [OMPI users] problem with overlapping communication with calculation"</a>
<li><strong>In reply to:</strong> <a href="8551.php">Olaf Lenz: "[OMPI users] dlopening openmpi libs (was: Re: Problems in 1.3 loading shared libs when	usingVampirServer)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8583.php">Jeff Squyres: "Re: [OMPI users] dlopening openmpi libs (was: Re: Problems in 1.3 loading shared libs when usingVampirServer)"</a>
<li><strong>Reply:</strong> <a href="8583.php">Jeff Squyres: "Re: [OMPI users] dlopening openmpi libs (was: Re: Problems in 1.3 loading shared libs when usingVampirServer)"</a>
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
