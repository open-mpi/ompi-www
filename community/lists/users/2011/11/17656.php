<?
$subject_val = "Re: [OMPI users] Sending vector elements of type T using MPI_Ssend, plz help.";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  2 08:28:19 2011" -->
<!-- isoreceived="20111102122819" -->
<!-- sent="Wed, 2 Nov 2011 08:28:08 -0400" -->
<!-- isosent="20111102122808" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Sending vector elements of type T using MPI_Ssend, plz help." -->
<!-- id="63DF1A10-4AA1-4B61-80AF-9ACD99247365_at_cisco.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="1320173770.53115.YahooMailNeo_at_web121718.mail.ne1.yahoo.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-02 08:28:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17657.php">Jeff Squyres (jsquyres): "Re: [OMPI users] probl&#195;&#168;me with MPI_FINALIZE"</a>
<li><strong>Previous message:</strong> <a href="17655.php">Blosch, Edwin L: "[OMPI users] How to set up state-less node /tmp for OpenMPI usage"</a>
<li><strong>In reply to:</strong> <a href="17654.php">Mudassar Majeed: "[OMPI users] Sending vector elements of type T using MPI_Ssend, plz help."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17658.php">German Hoecht: "Re: [OMPI users] Sending vector elements of type T using MPI_Ssend, plz help."</a>
<li><strong>Reply:</strong> <a href="17658.php">German Hoecht: "Re: [OMPI users] Sending vector elements of type T using MPI_Ssend, plz help."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You might want to look at boost.mpi. 
<br>
<p>Sent from my phone. No type good. 
<br>
<p>On Nov 1, 2011, at 2:58 PM, &quot;Mudassar Majeed&quot; &lt;mudassarm30_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Dear MPI people, 
</span><br>
<span class="quotelev1">&gt;                                 I have a vector class with template as follows,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; template &lt;typename T&gt;
</span><br>
<span class="quotelev1">&gt; class Vector
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It is a wrapper on the STL vector class. The element type is T that will be replaced by the actual instantiated type on the runtime. I have not seen any support in C++ templates for checking the type of T. I need to send elements of type T that are in the Vector v; using the MPI_Ssend ........ plz help me how can I do that. How can I send few elements may be starting from 4th element to the 10th element in the vector.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; regards,
</span><br>
<span class="quotelev1">&gt; Mudassar
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="../../att-17656/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17657.php">Jeff Squyres (jsquyres): "Re: [OMPI users] probl&#195;&#168;me with MPI_FINALIZE"</a>
<li><strong>Previous message:</strong> <a href="17655.php">Blosch, Edwin L: "[OMPI users] How to set up state-less node /tmp for OpenMPI usage"</a>
<li><strong>In reply to:</strong> <a href="17654.php">Mudassar Majeed: "[OMPI users] Sending vector elements of type T using MPI_Ssend, plz help."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17658.php">German Hoecht: "Re: [OMPI users] Sending vector elements of type T using MPI_Ssend, plz help."</a>
<li><strong>Reply:</strong> <a href="17658.php">German Hoecht: "Re: [OMPI users] Sending vector elements of type T using MPI_Ssend, plz help."</a>
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
