<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jun  6 07:17:10 2007" -->
<!-- isoreceived="20070606111710" -->
<!-- sent="Wed, 6 Jun 2007 07:16:55 -0400" -->
<!-- isosent="20070606111655" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] how to identify openmpi in configure script" -->
<!-- id="27E00109-764D-4B3C-97F7-9A4DD33A74BF_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="7E66E0AC-E129-44DB-9B3B-19B653766C40_at_gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-06 07:16:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3383.php">Srinath Vadlamani: "[OMPI users] open-mpi with ifort in debug..trouble"</a>
<li><strong>Previous message:</strong> <a href="3381.php">Lie-Quan Lee: "Re: [OMPI users] how to identify openmpi in configure script"</a>
<li><strong>In reply to:</strong> <a href="3381.php">Lie-Quan Lee: "Re: [OMPI users] how to identify openmpi in configure script"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3387.php">Lie-Quan Lee: "Re: [OMPI users] how to identify openmpi in configure script"</a>
<li><strong>Reply:</strong> <a href="3387.php">Lie-Quan Lee: "Re: [OMPI users] how to identify openmpi in configure script"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 5, 2007, at 11:17 PM, Lie-Quan Lee wrote:
<br>
<p><span class="quotelev1">&gt; it is a quite of headache for each compiler/platform to deal with
</span><br>
<span class="quotelev1">&gt; mixed language
</span><br>
<span class="quotelev1">&gt; issues.  I have to compile my application on IBM visual age compiler,
</span><br>
<span class="quotelev1">&gt; Pathscale, Cray X1E compiler,
</span><br>
<span class="quotelev1">&gt; intel/openmpi, intel/mpich, PGI compiler ...
</span><br>
<span class="quotelev1">&gt; And of course, openmpi 1.1 is different on this comparing with
</span><br>
<span class="quotelev1">&gt; openmpi 1.2.2 (-lmpi_f77 is new to 1.2.2 version). :-)
</span><br>
<p><span class="quotelev1">&gt; You are right. MPI forum most like will not take care of this. I just
</span><br>
<span class="quotelev1">&gt; made a wish ... :-)
</span><br>
<p>Understood; I know it's a pain.  :-(
<br>
<p>What I want to understand, however, is what you need to do.  It seems  
<br>
like your needs are a bit different than those of the mainstream --  
<br>
is there a way that we can support you directly instead of forcing  
<br>
you to a) identify openmpi, b) call mpi&lt;foo&gt; --showme:link to get the  
<br>
relevant flags, and c) stitch them together in the manner that you need?
<br>
<p>We take great pains to ensure that the mpi&lt;foo&gt; wrapper compilers  
<br>
&quot;just work&quot; for all the common cases in order to avoid all the &quot;you  
<br>
must identify which MPI you are using&quot; kinds of games.  Your case  
<br>
sounds somewhat unusual, but perhaps there's a way we can get the  
<br>
information to you in a more direct manner...?
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
<li><strong>Next message:</strong> <a href="3383.php">Srinath Vadlamani: "[OMPI users] open-mpi with ifort in debug..trouble"</a>
<li><strong>Previous message:</strong> <a href="3381.php">Lie-Quan Lee: "Re: [OMPI users] how to identify openmpi in configure script"</a>
<li><strong>In reply to:</strong> <a href="3381.php">Lie-Quan Lee: "Re: [OMPI users] how to identify openmpi in configure script"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3387.php">Lie-Quan Lee: "Re: [OMPI users] how to identify openmpi in configure script"</a>
<li><strong>Reply:</strong> <a href="3387.php">Lie-Quan Lee: "Re: [OMPI users] how to identify openmpi in configure script"</a>
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
