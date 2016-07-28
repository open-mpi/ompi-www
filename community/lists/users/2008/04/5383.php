<?
$subject_val = "Re: [OMPI users] Fwd: Problem with sending vectors";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Apr 12 09:59:06 2008" -->
<!-- isoreceived="20080412135906" -->
<!-- sent="Sat, 12 Apr 2008 15:58:46 +0200" -->
<!-- isosent="20080412135846" -->
<!-- name="Andreas Sch&#228;fer" -->
<!-- email="gentryx_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fwd: Problem with sending vectors" -->
<!-- id="20080412135846.GB28252_at_neuromancer" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="D7F6BD48-6107-4B72-9B53-52900ADFE3AA_at_cisco.com" -->
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
<strong>From:</strong> Andreas Sch&#228;fer (<em>gentryx_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-12 09:58:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5384.php">Jeff Squyres: "Re: [OMPI users] Oversubscription performance problem"</a>
<li><strong>Previous message:</strong> <a href="5382.php">Jeff Squyres: "Re: [OMPI users] Passing data structure"</a>
<li><strong>In reply to:</strong> <a href="5381.php">Jeff Squyres: "Re: [OMPI users] Fwd: Problem with sending vectors"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 20:39 Fri 11 Apr     , Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Also, it's been a long time since I've done anything serious in C++,  
</span><br>
<span class="quotelev1">&gt; but are you guaranteed that &amp;foo[x] for a vector&lt;&gt; will yield  
</span><br>
<span class="quotelev1">&gt; contiguous memory?
</span><br>
<p>Good question. I was used to believe so, but I just had a look at the
<br>
standard and couldn't find any guarantee on that subject... However,
<br>
if your implementation doesn't work that way, you're pretty much
<br>
screwed, as the vector's interface makes it hard to detect
<br>
non-contiguous blocks.
<br>
<p><span class="quotelev1">&gt; You might be better off using the Boost C++ MPI bindings; they provide  
</span><br>
<span class="quotelev1">&gt; all kinds of nifty things for classes, etc.
</span><br>
<p>True, but sometimes this convenience comes at a cost:
<br>
<p>&quot;When communicating data types over MPI that are not fundamental to
<br>
MPI (such as strings, lists, and user-defined data types), Boost.MPI
<br>
must first serialize these data types into a buffer and then
<br>
communicate them; the receiver then copies the results into a buffer
<br>
before deserializing into an object on the other end. For some data
<br>
types, this overhead can be eliminated by using
<br>
is_mpi_datatype. However, variable-length data types such as strings
<br>
and lists cannot be MPI data types.&quot; [1]
<br>
<p>AFAIK, boost::mpi will thus buffer all vectors to be sent. This might
<br>
not be as efficient as just feeding it a raw pointer and the number of
<br>
elements.
<br>
<p>Cheers!
<br>
-Andreas
<br>
<p>[1] <a href="http://www.boost.org/doc/libs/1_35_0/doc/html/mpi/tutorial.html#mpi.point_to_point">http://www.boost.org/doc/libs/1_35_0/doc/html/mpi/tutorial.html#mpi.point_to_point</a>
<br>
<p><p><pre>
-- 
============================================
Andreas Sch&#228;fer
Cluster and Metacomputing Working Group
Friedrich-Schiller-Universit&#228;t Jena, Germany
PGP/GPG key via keyserver
I'm a bright... <a href="http://www.the-brights.net">http://www.the-brights.net</a>
============================================
(\___/)
(+'.'+)
(&quot;)_(&quot;)
This is Bunny. Copy and paste Bunny into your 
signature to help him gain world domination!

</pre>
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5383/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5384.php">Jeff Squyres: "Re: [OMPI users] Oversubscription performance problem"</a>
<li><strong>Previous message:</strong> <a href="5382.php">Jeff Squyres: "Re: [OMPI users] Passing data structure"</a>
<li><strong>In reply to:</strong> <a href="5381.php">Jeff Squyres: "Re: [OMPI users] Fwd: Problem with sending vectors"</a>
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
