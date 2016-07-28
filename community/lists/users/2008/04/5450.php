<?
$subject_val = "Re: [OMPI users] Message compression in OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 22 12:09:04 2008" -->
<!-- isoreceived="20080422160904" -->
<!-- sent="Tue, 22 Apr 2008 12:08:54 -0400" -->
<!-- isosent="20080422160854" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Message compression in OpenMPI" -->
<!-- id="B3E1E7D2-A505-43F6-BED0-9FEB3144A076_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="480DE23E.8070603_at_fgi.fi" -->
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
<strong>Subject:</strong> Re: [OMPI users] Message compression in OpenMPI<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-22 12:08:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5451.php">Arif Ali: "[OMPI users] machines swapping in running job[Scanned]"</a>
<li><strong>Previous message:</strong> <a href="5449.php">Brian W. Barrett: "Re: [OMPI users] Problems compiling OPENMPI !!"</a>
<li><strong>In reply to:</strong> <a href="5445.php">Tomas Ukkonen: "[OMPI users] Message compression in OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5482.php">Tomas Ukkonen: "Re: [OMPI users] Message compression in OpenMPI"</a>
<li><strong>Reply:</strong> <a href="5482.php">Tomas Ukkonen: "Re: [OMPI users] Message compression in OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 22, 2008, at 9:03 AM, Tomas Ukkonen wrote:
<br>
<p><span class="quotelev1">&gt; I read from somewhere that OpenMPI supports
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; some kind of data compression but I couldn't find
</span><br>
<span class="quotelev1">&gt; any information about it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is this true and how it can be used?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Nope, sorry -- not true.
<br>
<p>This just came up in a different context, actually.  We added some  
<br>
preliminary compression on our startup/mpirun messages and found that  
<br>
it really had no effect; any savings that you get in bandwidth (and  
<br>
therefore overall wall clock time) are eaten up by the time necessary  
<br>
to compress/uncompress the messages.  There were a few more things we  
<br>
could have tried, but frankly we had some higher priority items to  
<br>
finish for the upcoming v1.3 series.  :-(
<br>
<p><span class="quotelev1">&gt; Does anyone have any experiences about using it?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is it possible to use compression in just some
</span><br>
<span class="quotelev1">&gt; subset of communications (communicator
</span><br>
<span class="quotelev1">&gt; specific compression settings)?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In our MPI application we are transferring large
</span><br>
<span class="quotelev1">&gt; amounts of sparse/redundant data that compresses
</span><br>
<span class="quotelev1">&gt; very well. Also my initial tests showed significant
</span><br>
<span class="quotelev1">&gt; improvements in performance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>If your particular data is well-suited for fast compression, you might  
<br>
want to compress it before calling MPI_SEND / after calling MPI_RECV.   
<br>
Use the MPI_BYTE datatype to send/receive the messages, and then MPI  
<br>
won't do anything additional for datatype conversions, etc.
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
<li><strong>Next message:</strong> <a href="5451.php">Arif Ali: "[OMPI users] machines swapping in running job[Scanned]"</a>
<li><strong>Previous message:</strong> <a href="5449.php">Brian W. Barrett: "Re: [OMPI users] Problems compiling OPENMPI !!"</a>
<li><strong>In reply to:</strong> <a href="5445.php">Tomas Ukkonen: "[OMPI users] Message compression in OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5482.php">Tomas Ukkonen: "Re: [OMPI users] Message compression in OpenMPI"</a>
<li><strong>Reply:</strong> <a href="5482.php">Tomas Ukkonen: "Re: [OMPI users] Message compression in OpenMPI"</a>
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
