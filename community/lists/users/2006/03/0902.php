<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Mar 24 18:30:45 2006" -->
<!-- isoreceived="20060324233045" -->
<!-- sent="Fri, 24 Mar 2006 18:30:37 -0500" -->
<!-- isosent="20060324233037" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] PBS Professional" -->
<!-- id="2B8C9323-F862-45F9-9268-61D92D3C538D_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="op.s6xxdw0fies9li_at_rygel.lnxi.com" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-24 18:30:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0903.php">Troy Telford: "Re: [OMPI users] PBS Professional"</a>
<li><strong>Previous message:</strong> <a href="0901.php">Troy Telford: "[OMPI users] PBS Professional"</a>
<li><strong>In reply to:</strong> <a href="0901.php">Troy Telford: "[OMPI users] PBS Professional"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0903.php">Troy Telford: "Re: [OMPI users] PBS Professional"</a>
<li><strong>Reply:</strong> <a href="0903.php">Troy Telford: "Re: [OMPI users] PBS Professional"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 24, 2006, at 6:11 PM, Troy Telford wrote:
<br>
<p><span class="quotelev1">&gt; Noticing the FAQ, <a href="http://www.open-mpi.org/faq/">http://www.open-mpi.org/faq/</a>? 
</span><br>
<span class="quotelev1">&gt; category=building#build-rte
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Rather than simply running `./confiugre --disable-shared --enable  
</span><br>
<span class="quotelev1">&gt; static`
</span><br>
<span class="quotelev1">&gt; and having /everything/ compiled statically, is it possible to compile
</span><br>
<span class="quotelev1">&gt; only the bare minimum to get the tm module working, and leave the  
</span><br>
<span class="quotelev1">&gt; rest as
</span><br>
<span class="quotelev1">&gt; dynamically loadable?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --enable-mca-static=pls:tm,ras:tm doesn't seem to cut it, as  
</span><br>
<span class="quotelev1">&gt; liborte is
</span><br>
<span class="quotelev1">&gt; still compiled dynamically; and I don't know enough of the Open MPI
</span><br>
<span class="quotelev1">&gt; architecture to say if this is even feasable...
</span><br>
<p>My (admittedly somewhat limited) knowledge of linkers and loaders  
<br>
and whatnot would seem to imply that this is not possible, not from  
<br>
an Open MPI architecture standpoint, but from a &quot;how Linux works&quot;  
<br>
standpoint.  If --enable-mca-static=pls:tm,ras:tm doesn't work when  
<br>
liborte is compiled dynamically (I know this works without warning on  
<br>
x86 Linux - I take it by your comment that it didn't work with x86_64  
<br>
Linux).
<br>
<p>So that leaves us with compiling liborte statically.  If we do this,  
<br>
then we really can't have dynamically loaded modules, because they  
<br>
all depend on code in liborte and the loader isn't going to be able  
<br>
to patch that up when they are loaded.  So unless someone knows a  
<br>
fairly trivial way of getting around that, I think we're stuck.
<br>
<p><span class="quotelev1">&gt; I do realize that it would be easier if PBS Professional were compiled
</span><br>
<span class="quotelev1">&gt; with -fPIC so that a DSO tm module could be built; I've asked Altair's
</span><br>
<span class="quotelev1">&gt; support to do so in the past, and received a response to the effect of
</span><br>
<span class="quotelev1">&gt; &quot;it's in the suggestion box; no idea if it will happen.&quot;
</span><br>
<p>That's just poor response, but that's generally been my opinion of  
<br>
Altair lately.  I'm aware this limits the usability of one of the  
<br>
prime features of Open MPI, but the truth is, it's their poor product  
<br>
that is the problem.  The freely available derivatives of PBS all  
<br>
seemed more than happy to help with building the tm libraries with - 
<br>
fPIC.
<br>
<p>Brian
<br>
<p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0903.php">Troy Telford: "Re: [OMPI users] PBS Professional"</a>
<li><strong>Previous message:</strong> <a href="0901.php">Troy Telford: "[OMPI users] PBS Professional"</a>
<li><strong>In reply to:</strong> <a href="0901.php">Troy Telford: "[OMPI users] PBS Professional"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0903.php">Troy Telford: "Re: [OMPI users] PBS Professional"</a>
<li><strong>Reply:</strong> <a href="0903.php">Troy Telford: "Re: [OMPI users] PBS Professional"</a>
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
