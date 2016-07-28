<?
$subject_val = "Re: [OMPI devel] [Open MPI] #3351: JAVA scatter error";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 20 08:20:49 2012" -->
<!-- isoreceived="20121220132049" -->
<!-- sent="Thu, 20 Dec 2012 08:20:09 -0500" -->
<!-- isosent="20121220132009" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [Open MPI] #3351: JAVA scatter error" -->
<!-- id="76638D45-01BF-47D5-A00D-8266D0EC1F6D_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201212191422.qBJEM2hs005209_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [Open MPI] #3351: JAVA scatter error<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-20 08:20:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11859.php">Jeff Squyres: "Re: [OMPI devel] openmpi-1.7rc5 on cygwin ; results and patches"</a>
<li><strong>Previous message:</strong> <a href="11857.php">marco atzeri: "Re: [OMPI devel] openmpi-1.7rc5 on cygwin ; results and patches"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
(taking the liberty of moving this thread to the devel list...)
<br>
<p><p>On Dec 19, 2012, at 9:22 AM, Siegmar Gross wrote:
<br>
<p><span class="quotelev2">&gt;&gt; I think the real shortcoming is that there is no Datatype.Resized
</span><br>
<span class="quotelev2">&gt;&gt; function.  That can be fixed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Are you sure? That would at least solve one problem.
</span><br>
<p>I think so.  We &quot;own&quot; the bindings now, so adding a method is hypothetically possible.  I can have a look at adding that over the holidays, but I make no promises...
<br>
<p><span class="quotelev2">&gt;&gt; I noticed that if I used [][] in my version of the Scatter program,
</span><br>
<span class="quotelev2">&gt;&gt; I got random results.  But if I used [] and did my own offset
</span><br>
<span class="quotelev2">&gt;&gt; indexing, it worked.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think if you want a 2D-matrix you should use a Java matrix and not
</span><br>
<span class="quotelev1">&gt; a special one with your own offset indexing. In my opinion that is
</span><br>
<span class="quotelev1">&gt; something a C programmer can/would do (I'm a C programmer myself with
</span><br>
<span class="quotelev1">&gt; a little Java knowledge), but the benefit of Java is that the programmer
</span><br>
<span class="quotelev1">&gt; should not know about addresses, memory layouts and similar things.
</span><br>
<p>Understood, and I agree.
<br>
<p>But if Java doesn't give any guarantees about memory layout, then how is MPI supposed to handle this?
<br>
<p><span class="quotelev1">&gt; Now
</span><br>
<span class="quotelev1">&gt; I sound like my colleagues who always claim that my Java programs look
</span><br>
<span class="quotelev1">&gt; more like C programs than Java programs :-(. I know nothing about the
</span><br>
<span class="quotelev1">&gt; memory layout of a Java matrix or if the layout is stable during the
</span><br>
<span class="quotelev1">&gt; lifetime of the object, but I think that the Java interface should deal
</span><br>
<span class="quotelev1">&gt; with all these things if that is possible.
</span><br>
<p>It's quite possible/likely that Java implementations do deal with this stuff -- they *have* to, right?
<br>
<p>But they don't necessarily expose it to external libraries (like MPI), thereby making it impossible to do low-level actions, like directly accessing memory.  (again, I could be wrong here -- I'm NOT a Java expert!)
<br>
<p>FWIW: Fortran 2008 had similar issues.  The MPI Forum had to directly interact with the Fortran language standards body to get them to change some of these guarantees so that MPI could access some of Fortran's lower-layer information.
<br>
<p><span class="quotelev1">&gt; I suppose that Open MPI will
</span><br>
<span class="quotelev1">&gt; not succeed in the Java world if it requires &quot;special&quot; matrices and a
</span><br>
<span class="quotelev1">&gt; special offset indexing. Perhaps some members of this list have very
</span><br>
<span class="quotelev1">&gt; good Java knowledge or even know the exact layout of Java matrices so
</span><br>
<span class="quotelev1">&gt; that Datatype.Vector can build a Java column vector from a Java matrix
</span><br>
<span class="quotelev1">&gt; which even contains valid values.
</span><br>
<p>Any Java expert input would be welcomed here...
<br>
<p><span class="quotelev2">&gt;&gt; Remember: there is no standard for MPI and Java.  So there is no
</span><br>
<span class="quotelev2">&gt;&gt; &quot;must&quot;.  :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I know and I'm grateful that you try nevertheless to offer a Java
</span><br>
<span class="quotelev1">&gt; interface. Hopefully you will not misunderstand my &quot;must&quot;. It wasn't
</span><br>
<span class="quotelev1">&gt; complaining, but trying to express that a &quot;normal&quot; Java user would
</span><br>
<span class="quotelev1">&gt; expect that he can implement an MPI program without special knowledge
</span><br>
<span class="quotelev1">&gt; about data layouts.
</span><br>
<p>Fair enough.  Don't worry; I greatly appreciate the time and input that you're spending on this.  :-)
<br>
<p><span class="quotelev2">&gt;&gt; ...snip...
</span><br>
<span class="quotelev2">&gt;&gt; Again, here's my disclaimer that I'm not a Java guy... :-)  But does
</span><br>
<span class="quotelev2">&gt;&gt; this mean you need to define an operator[] method on your class, and
</span><br>
<span class="quotelev2">&gt;&gt; that would allow this casting to work?  (not that I'm sure what this
</span><br>
<span class="quotelev2">&gt;&gt; method would need to *do*, but this is a first step...)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Alternatively the buffer parameter type could be changed from &quot;Object&quot;
</span><br>
<span class="quotelev1">&gt; to &quot;Object[]&quot;. Then everybody would know that an array is expected
</span><br>
<span class="quotelev1">&gt; (even for a single value). However, I don't know if that has a
</span><br>
<span class="quotelev1">&gt; consequence which breaks other things. Is a different parameter type
</span><br>
<span class="quotelev1">&gt; possible or out-of any question?
</span><br>
<p><p>I got an out-of-band answer from a Java-expert friend yesterday that suggested a better way to do this -- he suggested using a ByteArrayOutputStream.
<br>
<p>I'll try to look at this over the holidays.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11859.php">Jeff Squyres: "Re: [OMPI devel] openmpi-1.7rc5 on cygwin ; results and patches"</a>
<li><strong>Previous message:</strong> <a href="11857.php">marco atzeri: "Re: [OMPI devel] openmpi-1.7rc5 on cygwin ; results and patches"</a>
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
