<?
$subject_val = "Re: [OMPI users] Sending vector elements of type T using MPI_Ssend, plz help.";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  2 10:30:17 2011" -->
<!-- isoreceived="20111102143017" -->
<!-- sent="Wed, 02 Nov 2011 15:28:42 +0100" -->
<!-- isosent="20111102142842" -->
<!-- name="German Hoecht" -->
<!-- email="german.hoecht_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Sending vector elements of type T using MPI_Ssend, plz help." -->
<!-- id="4EB1539A.4000303_at_googlemail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="63DF1A10-4AA1-4B61-80AF-9ACD99247365_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Sending vector elements of type T using MPI_Ssend, plz help.<br>
<strong>From:</strong> German Hoecht (<em>german.hoecht_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-02 10:28:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17667.php">Durga Choudhury: "Re: [OMPI users] probl&#232;me with MPI_FINALIZE"</a>
<li><strong>Previous message:</strong> <a href="17665.php">Jeff Squyres (jsquyres): "Re: [OMPI users] probl&#195;&#168;me with MPI_FINALIZE"</a>
<li><strong>In reply to:</strong> <a href="17664.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Sending vector elements of type T using MPI_Ssend, plz help."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>you could try the following (template):
<br>
<p>MPI_Send( &amp;vec[first_element],  num_elements*sizeof(T), MPI_BYTE, ..)
<br>
MPI_Recv( &amp;vec[first_element],  num_elements*sizeof(T), MPI_BYTE, ..)
<br>
<p>As far as I know STL vectors use contiguous memory for the values of the
<br>
vector.
<br>
However, I didn't test this and boost.mpi may be the safest solution.
<br>
<p>Cheers
<br>
<p>On 11/02/2011 01:28 PM, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; You might want to look at boost.mpi. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sent from my phone. No type good. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Nov 1, 2011, at 2:58 PM, &quot;Mudassar Majeed&quot; &lt;mudassarm30_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;mailto:mudassarm30_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Dear MPI people,
</span><br>
<span class="quotelev2">&gt;&gt;                                 I have a vector class with template as
</span><br>
<span class="quotelev2">&gt;&gt; follows,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; template &lt;typename T&gt;
</span><br>
<span class="quotelev2">&gt;&gt; class Vector
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It is a wrapper on the STL vector class. The element type is T that
</span><br>
<span class="quotelev2">&gt;&gt; will be replaced by the actual instantiated type on the runtime. I
</span><br>
<span class="quotelev2">&gt;&gt; have not seen any support in C++ templates for checking the type of T.
</span><br>
<span class="quotelev2">&gt;&gt; I need to send elements of type T that are in the Vector v; using the
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Ssend ........ plz help me how can I do that. How can I send few
</span><br>
<span class="quotelev2">&gt;&gt; elements may be starting from 4th element to the 10th element in the
</span><br>
<span class="quotelev2">&gt;&gt; vector.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; regards,
</span><br>
<span class="quotelev2">&gt;&gt; Mudassar
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17667.php">Durga Choudhury: "Re: [OMPI users] probl&#232;me with MPI_FINALIZE"</a>
<li><strong>Previous message:</strong> <a href="17665.php">Jeff Squyres (jsquyres): "Re: [OMPI users] probl&#195;&#168;me with MPI_FINALIZE"</a>
<li><strong>In reply to:</strong> <a href="17664.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Sending vector elements of type T using MPI_Ssend, plz help."</a>
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
