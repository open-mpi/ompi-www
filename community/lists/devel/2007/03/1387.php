<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Mar 29 17:49:13 2007" -->
<!-- isoreceived="20070329214913" -->
<!-- sent="Thu, 29 Mar 2007 17:48:49 -0400" -->
<!-- isosent="20070329214849" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Hi!! need to find internal state changes" -->
<!-- id="941AFABC-55F9-4875-B532-64B04C8249F6_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1402.128.61.117.200.1175193271.squirrel_at_webmail.cc.gatech.edu" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-29 17:48:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1388.php">Jeff Squyres: "Re: [OMPI devel] . always in the PATH"</a>
<li><strong>Previous message:</strong> <a href="1386.php">pooja_at_[hidden]: "[OMPI devel] Hi!! need to find internal state changes"</a>
<li><strong>In reply to:</strong> <a href="1386.php">pooja_at_[hidden]: "[OMPI devel] Hi!! need to find internal state changes"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 29, 2007, at 2:34 PM, pooja_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; I am Pooja and I am doing a project in my High performance  
</span><br>
<span class="quotelev1">&gt; computing lab.
</span><br>
<span class="quotelev1">&gt; In this project I need to find the internal state chnages of  
</span><br>
<span class="quotelev1">&gt; Openmpi.For
</span><br>
<span class="quotelev1">&gt; eg:When does MPi_send is used how does messages are actually send  
</span><br>
<span class="quotelev1">&gt; and how
</span><br>
<span class="quotelev1">&gt; does control messages are send.
</span><br>
<p>This is a fairly complex question; the chain of events from MPI_SEND  
<br>
down to when the message actually hits the wire is long and complex.   
<br>
Control messages for the MPI layer are dependent upon which device is  
<br>
being used (in the case of the MPI layer, this device is called the  
<br>
Byte Transfer Layer (BTL)).  For example, the TCP device sends  
<br>
entirely different control messages then the openib/InfiniBand device.
<br>
<p>Which ones are you interested in?
<br>
<p>We have a paper describing the MPI long message protocols over RDMA  
<br>
interconnects here: <a href="http://www.open-mpi.org/papers/euro-pvmmpi-2006">http://www.open-mpi.org/papers/euro-pvmmpi-2006</a>- 
<br>
hpc-protocols.  It doesn't explicitly describe the control messages,  
<br>
but it does give you an idea of what protocols are used and you can  
<br>
infer at least some of the control messages from that (there are  
<br>
others dealing with network credit management, connection  
<br>
establishment, etc.).
<br>
<p>There are also slides from a workshop that we gave in 2005 about the  
<br>
internals of Open MPI: <a href="http://www.open-mpi.org/papers/">http://www.open-mpi.org/papers/</a> 
<br>
workshop-2006/.  These also don't speak specifically about the  
<br>
control messages that are sent, but there's a starting point for  
<br>
understanding the overall system.
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
<li><strong>Next message:</strong> <a href="1388.php">Jeff Squyres: "Re: [OMPI devel] . always in the PATH"</a>
<li><strong>Previous message:</strong> <a href="1386.php">pooja_at_[hidden]: "[OMPI devel] Hi!! need to find internal state changes"</a>
<li><strong>In reply to:</strong> <a href="1386.php">pooja_at_[hidden]: "[OMPI devel] Hi!! need to find internal state changes"</a>
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
