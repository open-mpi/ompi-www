<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Aug  9 08:41:47 2005" -->
<!-- isoreceived="20050809134147" -->
<!-- sent="Tue, 9 Aug 2005 08:42:17 -0500" -->
<!-- isosent="20050809134217" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re:  Fwd: Regarding MVAPI Component in Open MPI" -->
<!-- id="7FB6DBB9-F87C-4664-9968-2F972502C39D_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="03dbe55a9dff9bc858665d80379d5b77_at_open-mpi.org" -->
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
<strong>Date:</strong> 2005-08-09 08:42:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0103.php">Sridhar Chirravuri: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>Previous message:</strong> <a href="0101.php">Gleb Natapov: "Memory registration question."</a>
<li><strong>In reply to:</strong> <a href="0100.php">Jeff Squyres: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0103.php">Sridhar Chirravuri: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 9, 2005, at 8:04 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Aug 9, 2005, at 7:24 AM, Sridhar Chirravuri wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have disabled building OpenIB and to do so I have touched
</span><br>
<span class="quotelev2">&gt;&gt; .ompi_ignore. This should not be a problem for MVAPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If the Open IB headers / libraries are not located in compiler-known
</span><br>
<span class="quotelev1">&gt; locations, then you shouldn't need to .ompi_ignore the tree (i.e.,
</span><br>
<span class="quotelev1">&gt; configure won't find the Open IB headers / libraries, and will
</span><br>
<span class="quotelev1">&gt; therefore automatically skip those components).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Again, it is our intention that users will neither know about nor have
</span><br>
<span class="quotelev1">&gt; to touch files in the distribution -- they only need use appropriate
</span><br>
<span class="quotelev1">&gt; options to &quot;configure&quot; and then &quot;make&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm not sure if we have explicit options to disable a component in
</span><br>
<span class="quotelev1">&gt; configure -- Brian, can you comment here?
</span><br>
<p>But of course - we can cook your breakfast as well ;).
<br>
<p>You can explicitly disable a component using the --enable-mca-no- 
<br>
build=NAME.  I know the syntax is a bit wonky, but Autoconf doesn't  
<br>
make this easy :(.  Since you want to disable Open IB, you might do  
<br>
something like:
<br>
<p>&nbsp;&nbsp;&nbsp;./configure [rest of options] --enable-mca-no-build=bml-openib
<br>
<p>Does something bad happen if you try to build with the Open IB  
<br>
component enabled?  If so, could you let us know what happens?  Galen  
<br>
and I are trying to make sure we have all the BTL configure scripts  
<br>
tightened up before we release to the world.  If it's just something  
<br>
about your test environment, no biggie - just want to make sure we  
<br>
don't have a real problem.
<br>
<p>Since you only are interested in the MVAPI port and therefore not at  
<br>
all interested in the TEG PML (the older generation of communication  
<br>
interface), you can build with:
<br>
<p>&nbsp;&nbsp;&nbsp;./configure [rest of options] --enable-mca-no-build=bml-openib,pml- 
<br>
teg,pml-uniq
<br>
<p>which will cause the older generation PMLs to not be built.  I think  
<br>
this is probably going to make life easiest on you.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is there any thing that I am missing while building btl mvapi? Also,
</span><br>
<span class="quotelev2">&gt;&gt; is anyone built for mvapi and tested this OMPI stack. Please let me
</span><br>
<span class="quotelev2">&gt;&gt; know.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Galen Shipman and Tim Woodall are doing all the IB work.
</span><br>
<p>I think that most of your problems will go away once you start using  
<br>
the OB1 PML and therefore actually start using the MVAPI interface.   
<br>
I know that both Galen and I have been running a slightly modified  
<br>
copy of the Intel test suite against the MVAPI driver on a fairly  
<br>
regular basis.  There are one or two minor datatype issues that still  
<br>
need to be worked out, but we should pass all the point to point tests.
<br>
<p>Hope this helps,
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
<li><strong>Next message:</strong> <a href="0103.php">Sridhar Chirravuri: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>Previous message:</strong> <a href="0101.php">Gleb Natapov: "Memory registration question."</a>
<li><strong>In reply to:</strong> <a href="0100.php">Jeff Squyres: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0103.php">Sridhar Chirravuri: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
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
