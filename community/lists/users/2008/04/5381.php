<?
$subject_val = "Re: [OMPI users] Fwd: Problem with sending vectors";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 11 23:39:39 2008" -->
<!-- isoreceived="20080412033939" -->
<!-- sent="Fri, 11 Apr 2008 20:39:16 -0700" -->
<!-- isosent="20080412033916" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fwd: Problem with sending vectors" -->
<!-- id="D7F6BD48-6107-4B72-9B53-52900ADFE3AA_at_cisco.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20080407144749.GA24030_at_hex.inf-ra.uni-jena.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Fwd: Problem with sending vectors<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-11 23:39:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5382.php">Jeff Squyres: "Re: [OMPI users] Passing data structure"</a>
<li><strong>Previous message:</strong> <a href="5380.php">Jeff Squyres: "Re: [OMPI users] 32-bit openib btl fails on 64-bit OS"</a>
<li><strong>In reply to:</strong> <a href="5334.php">Andreas Sch&#228;fer: "Re: [OMPI users] Fwd: Problem with sending vectors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5383.php">Andreas Schäfer: "Re: [OMPI users] Fwd: Problem with sending vectors"</a>
<li><strong>Reply:</strong> <a href="5383.php">Andreas Schäfer: "Re: [OMPI users] Fwd: Problem with sending vectors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Also, it's been a long time since I've done anything serious in C++,  
<br>
but are you guaranteed that &amp;foo[x] for a vector&lt;&gt; will yield  
<br>
contiguous memory?
<br>
<p>You might be better off using the Boost C++ MPI bindings; they provide  
<br>
all kinds of nifty things for classes, etc.
<br>
<p><p>On Apr 7, 2008, at 7:47 AM, Andreas Sch&#228;fer wrote:
<br>
<span class="quotelev1">&gt; Hi Albert,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 10:13 Mon 07 Apr     , Albert Babinskas wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Some code for the error that i get:
</span><br>
<span class="quotelev1">&gt; [snip]
</span><br>
<span class="quotelev2">&gt;&gt; class Box has two int array inside it like
</span><br>
<span class="quotelev2">&gt;&gt; int a[3];
</span><br>
<span class="quotelev2">&gt;&gt; int b[3];
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry, but &quot;has two int array inside it like&quot; isn't very precise. Do
</span><br>
<span class="quotelev1">&gt; you mean:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; class Box {
</span><br>
<span class="quotelev1">&gt;     int a[3];
</span><br>
<span class="quotelev1">&gt;     int b[3];
</span><br>
<span class="quotelev1">&gt; };
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; or might you also mean:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; class Box {
</span><br>
<span class="quotelev1">&gt;     int a[3];
</span><br>
<span class="quotelev1">&gt;     Foo aLotOf;
</span><br>
<span class="quotelev1">&gt;     Bar otherStuff;
</span><br>
<span class="quotelev1">&gt;     int b[3];
</span><br>
<span class="quotelev1">&gt; };
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Anyways, your MPI_Datatype construction doesn't seem to be right:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Type_contiguous(9, MPI_INT, &amp;MPI_box);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Fist of all, you should be using MPI_Type_create_struct for C++
</span><br>
<span class="quotelev1">&gt; classes in order to ensure that each member is addressed with its
</span><br>
<span class="quotelev1">&gt; correct offset (b/c of compiler memory layout/alignment). And second
</span><br>
<span class="quotelev1">&gt; you said that myclass/Box or whatever is build from two int[3], but in
</span><br>
<span class="quotelev1">&gt; the code above you register 9 ints.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Again, we can't help you if you don't provide us with self-sufficient
</span><br>
<span class="quotelev1">&gt; code; small excerpts mixed with comments won't cut it in most cases.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers
</span><br>
<span class="quotelev1">&gt; -Andreas
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; ============================================
</span><br>
<span class="quotelev1">&gt; Andreas Sch&#228;fer
</span><br>
<span class="quotelev1">&gt; Cluster and Metacomputing Working Group
</span><br>
<span class="quotelev1">&gt; Friedrich-Schiller-Universit&#228;t Jena, Germany
</span><br>
<span class="quotelev1">&gt; PGP/GPG key via keyserver
</span><br>
<span class="quotelev1">&gt; I'm a bright... <a href="http://www.the-brights.net">http://www.the-brights.net</a>
</span><br>
<span class="quotelev1">&gt; ============================================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (\___/)
</span><br>
<span class="quotelev1">&gt; (+'.'+)
</span><br>
<span class="quotelev1">&gt; (&quot;)_(&quot;)
</span><br>
<span class="quotelev1">&gt; This is Bunny. Copy and paste Bunny into your
</span><br>
<span class="quotelev1">&gt; signature to help him gain world domination!
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5382.php">Jeff Squyres: "Re: [OMPI users] Passing data structure"</a>
<li><strong>Previous message:</strong> <a href="5380.php">Jeff Squyres: "Re: [OMPI users] 32-bit openib btl fails on 64-bit OS"</a>
<li><strong>In reply to:</strong> <a href="5334.php">Andreas Sch&#228;fer: "Re: [OMPI users] Fwd: Problem with sending vectors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5383.php">Andreas Schäfer: "Re: [OMPI users] Fwd: Problem with sending vectors"</a>
<li><strong>Reply:</strong> <a href="5383.php">Andreas Schäfer: "Re: [OMPI users] Fwd: Problem with sending vectors"</a>
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
