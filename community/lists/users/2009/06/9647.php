<?
$subject_val = "Re: [OMPI users] Bug in 1.3.2?: sm btl and isend is serializes";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 19 16:56:09 2009" -->
<!-- isoreceived="20090619205609" -->
<!-- sent="Fri, 19 Jun 2009 16:55:59 -0400" -->
<!-- isosent="20090619205559" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Bug in 1.3.2?: sm btl and isend is serializes" -->
<!-- id="7FC6EE14-B57E-4ED3-BF69-51E06E004917_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="82dde0906191028w23ee5bd5gfb16463d9db224df_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Bug in 1.3.2?: sm btl and isend is serializes<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-19 16:55:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9648.php">Eugene Loh: "Re: [OMPI users] Bug in 1.3.2?: sm btl and isend is serializes"</a>
<li><strong>Previous message:</strong> <a href="9646.php">Rajesh Sudarsan: "[OMPI users] Machinefile option in opempi-1.3.2"</a>
<li><strong>In reply to:</strong> <a href="9644.php">Mark Bolstad: "Re: [OMPI users] Bug in 1.3.2?: sm btl and isend is serializes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9648.php">Eugene Loh: "Re: [OMPI users] Bug in 1.3.2?: sm btl and isend is serializes"</a>
<li><strong>Reply:</strong> <a href="9648.php">Eugene Loh: "Re: [OMPI users] Bug in 1.3.2?: sm btl and isend is serializes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Mark,
<br>
<p>MPI does not impose any global order on the messages. The only  
<br>
requirement is that between two peers on the same communicator the  
<br>
messages (or at least the part required for the matching) is delivered  
<br>
in order. This make both execution traces you sent with your original  
<br>
email (shared memory and TCP) valid from the MPI perspective.
<br>
<p>Moreover, MPI doesn't impose any order in the matching when ANY_SOURCE  
<br>
is used. In Open MPI we do the matching _ALWAYS_ starting from rank 0  
<br>
to n in the specified communicator. BEWARE: The remaining of this  
<br>
paragraph is deep black magic of an MPI implementation internals. The  
<br>
main difference between the behavior of SM and TCP here directly  
<br>
reflect their eager size, 4K for SM and 64K for TCP. Therefore, for  
<br>
your example, for TCP all your messages are eager messages (i.e. are  
<br>
completely transfered to the destination process in just one go),  
<br>
while for SM they all require a rendez-vous. This directly impact the  
<br>
ordering of the messages on the receiver, and therefore the order of  
<br>
the matching. However, I have to insist on this, this behavior is  
<br>
correct based on the MPI standard specifications.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p><p><p>On Jun 19, 2009, at 13:28 , Mark Bolstad wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks, but that won't help. In the real application the messages  
</span><br>
<span class="quotelev1">&gt; are at least 25,000 bytes long, mostly much larger.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Mark
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Jun 19, 2009 at 1:17 PM, Eugene Loh &lt;Eugene.Loh_at_[hidden]&gt;  
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Mark Bolstad wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have a small test code that I've managed to duplicate the results  
</span><br>
<span class="quotelev1">&gt; from a larger code. In essence, using the sm btl with ISend, I wind  
</span><br>
<span class="quotelev1">&gt; up with the communication being completely serialized, i.e., all the  
</span><br>
<span class="quotelev1">&gt; calls from process 1 complete, then all from 2, ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I need to do some other stuff, but might spend time on this later.   
</span><br>
<span class="quotelev1">&gt; For now, I'll just observe that your sends are rendezvous sends.   
</span><br>
<span class="quotelev1">&gt; E.g., if you decrease BUFLEN from 25000 to 2500 (namely, from over  
</span><br>
<span class="quotelev1">&gt; 4K to under 4K), the behavior should change (to what you'd expect).   
</span><br>
<span class="quotelev1">&gt; That may or may not help you, but I think it's an important  
</span><br>
<span class="quotelev1">&gt; observation in reasoning about this behavior.
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
<li><strong>Next message:</strong> <a href="9648.php">Eugene Loh: "Re: [OMPI users] Bug in 1.3.2?: sm btl and isend is serializes"</a>
<li><strong>Previous message:</strong> <a href="9646.php">Rajesh Sudarsan: "[OMPI users] Machinefile option in opempi-1.3.2"</a>
<li><strong>In reply to:</strong> <a href="9644.php">Mark Bolstad: "Re: [OMPI users] Bug in 1.3.2?: sm btl and isend is serializes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9648.php">Eugene Loh: "Re: [OMPI users] Bug in 1.3.2?: sm btl and isend is serializes"</a>
<li><strong>Reply:</strong> <a href="9648.php">Eugene Loh: "Re: [OMPI users] Bug in 1.3.2?: sm btl and isend is serializes"</a>
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
