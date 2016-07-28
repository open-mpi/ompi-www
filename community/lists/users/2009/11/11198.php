<?
$subject_val = "Re: [OMPI users] Number of Sockets used by OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Nov 15 11:41:27 2009" -->
<!-- isoreceived="20091115164127" -->
<!-- sent="Sun, 15 Nov 2009 08:41:22 -0800" -->
<!-- isosent="20091115164122" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Number of Sockets used by OpenMPI" -->
<!-- id="348DD064-746A-4A1A-B794-91D7C48DD5F5_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="afc7dbc60911131814y716a09ffsbdcb21ad7d8664c7_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Number of Sockets used by OpenMPI<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-15 11:41:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11199.php">Jeff Squyres: "Re: [OMPI users] TCP sockets opened by OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="11197.php">Charles Salvia: "[OMPI users] TCP sockets opened by OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="11190.php">Charles Salvia: "Re: [OMPI users] Number of Sockets used by OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11203.php">George Bosilca: "Re: [OMPI users] Number of Sockets used by OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 13, 2009, at 6:14 PM, Charles Salvia wrote:
<br>
<p><span class="quotelev1">&gt; I am using OMPI 1.3.3.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I didn't realize that earlier versions may behave differently.  Is  
</span><br>
<span class="quotelev1">&gt; there perhaps an advantage/disadvantage to using 1 socket to connect  
</span><br>
<span class="quotelev1">&gt; to each process, versus 2 sockets (one for sending and one for  
</span><br>
<span class="quotelev1">&gt; receiving)?
</span><br>
<p>Not really.  There's still only 1 network wire.  The kernel already  
<br>
has separate sending and receiving buffers for a single socket.   
<br>
Adding another socket would just consume more kernel resources.
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
<li><strong>Next message:</strong> <a href="11199.php">Jeff Squyres: "Re: [OMPI users] TCP sockets opened by OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="11197.php">Charles Salvia: "[OMPI users] TCP sockets opened by OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="11190.php">Charles Salvia: "Re: [OMPI users] Number of Sockets used by OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11203.php">George Bosilca: "Re: [OMPI users] Number of Sockets used by OpenMPI"</a>
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
