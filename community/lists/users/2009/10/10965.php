<?
$subject_val = "Re: [OMPI users] Openmpi not using IB and no warning message";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 26 15:20:55 2009" -->
<!-- isoreceived="20091026192055" -->
<!-- sent="Mon, 26 Oct 2009 15:20:50 -0400" -->
<!-- isosent="20091026192050" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Openmpi not using IB and no warning message" -->
<!-- id="AD4D631C-46D0-4FE8-ABC3-B68381973F20_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="cb60cbc40910142314l64a13627n7a664554230c62ef_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Openmpi not using IB and no warning message<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-26 15:20:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10966.php">Brock Palen: "[OMPI users] memchecker overhead?"</a>
<li><strong>Previous message:</strong> <a href="10964.php">Iris Pernille Lohmann: "[OMPI users] segmentation fault: Address not mapped"</a>
<li><strong>In reply to:</strong> <a href="10918.php">Sangamesh B: "Re: [OMPI users] Openmpi not using IB and no warning message"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 15, 2009, at 2:14 AM, Sangamesh B wrote:
<br>
<p><span class="quotelev1">&gt;      I've run ibpingpong tests. They are working fine.
</span><br>
<p>Sorry for the delay in replying.
<br>
<p>Good.
<br>
<p><span class="quotelev1">&gt;  Are there any additional tests available which will make sure that  
</span><br>
<span class="quotelev1">&gt; &quot;there is no problem with IB software and Open MPI. The problem is  
</span><br>
<span class="quotelev1">&gt; with Application or IB hardware&quot;?
</span><br>
<p>George mentioned the point that using &quot;--mca btl openib,self&quot; will  
<br>
only allow OMPI to use those two networks.  So you should be good  
<br>
there -- with those command line options, it'll either run on IB or it  
<br>
will fail to run if the IB is not working.
<br>
<p>Unfortunately, OMPI currently only has a negative acknowledgement when  
<br>
you're *not* using high-performance networks -- it doesn't give you a  
<br>
positive acknowledgement when it *is* using a high-performance network  
<br>
(because this is the much more common case).
<br>
<p><span class="quotelev1">&gt;     Because we've faced some critical problems:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2009/10/10843.php">http://www.open-mpi.org/community/lists/users/2009/10/10843.php</a>
</span><br>
<p>This one *appears* to be an application issue.  But there was no  
<br>
information provided beyond the initial posting, so it's impossible to  
<br>
say.
<br>
<p><span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2009/09/10700.php">http://www.open-mpi.org/community/lists/users/2009/09/10700.php</a>
</span><br>
<p>Pasha had a good reply to this post:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/lists/users/2009/09/10705.php">http://www.open-mpi.org/community/lists/users/2009/09/10705.php</a>
<br>
<p>If he's right (and he usually is :-) ), then one of your IB ports when  
<br>
from ACTIVE to DOWN during the run, potentially indicating bad  
<br>
hardware (i.e., Open MPI simply reported the error -- it's possible/ 
<br>
likely that Open MPI didn't *cause* the error).  Pasha suggested using  
<br>
ibdiagnet to verify your fabric.  Failing that, you might want to  
<br>
contact your IB/cluster vendor for assistance with a layer-0  
<br>
diagnostic of your IB fabric.
<br>
<p>Hope that helps!
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10966.php">Brock Palen: "[OMPI users] memchecker overhead?"</a>
<li><strong>Previous message:</strong> <a href="10964.php">Iris Pernille Lohmann: "[OMPI users] segmentation fault: Address not mapped"</a>
<li><strong>In reply to:</strong> <a href="10918.php">Sangamesh B: "Re: [OMPI users] Openmpi not using IB and no warning message"</a>
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
