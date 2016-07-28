<?
$subject_val = "Re: [OMPI users] Message compression in OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 24 07:28:24 2008" -->
<!-- isoreceived="20080424112824" -->
<!-- sent="Thu, 24 Apr 2008 14:28:15 +0300" -->
<!-- isosent="20080424112815" -->
<!-- name="Tomas Ukkonen" -->
<!-- email="tomas.ukkonen_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Message compression in OpenMPI" -->
<!-- id="48106ECF.3010702_at_fgi.fi" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="B3E1E7D2-A505-43F6-BED0-9FEB3144A076_at_cisco.com" -->
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
<strong>From:</strong> Tomas Ukkonen (<em>tomas.ukkonen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-24 07:28:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5483.php">Koun SHIRAI: "[OMPI users] install intel mac with Laopard"</a>
<li><strong>Previous message:</strong> <a href="5481.php">Ingo Josopait: "Re: [OMPI users] Busy waiting [was Re:  (no subject)]"</a>
<li><strong>In reply to:</strong> <a href="5450.php">Jeff Squyres: "Re: [OMPI users] Message compression in OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5452.php">George Bosilca: "Re: [OMPI users] Message compression in OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Apr 22, 2008, at 9:03 AM, Tomas Ukkonen wrote:
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; I read from somewhere that OpenMPI supports
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; some kind of data compression but I couldn't find
</span><br>
<span class="quotelev2">&gt;&gt; any information about it.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is this true and how it can be used?
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt; Nope, sorry -- not true.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This just came up in a different context, actually.  We added some  
</span><br>
<span class="quotelev1">&gt; preliminary compression on our startup/mpirun messages and found that  
</span><br>
<span class="quotelev1">&gt; it really had no effect; any savings that you get in bandwidth (and  
</span><br>
<span class="quotelev1">&gt; therefore overall wall clock time) are eaten up by the time necessary  
</span><br>
<span class="quotelev1">&gt; to compress/uncompress the messages.  There were a few more things we  
</span><br>
<span class="quotelev1">&gt; could have tried, but frankly we had some higher priority items to  
</span><br>
<span class="quotelev1">&gt; finish for the upcoming v1.3 series.  :-(
</span><br>
<span class="quotelev1">&gt;   
</span><br>
Ok, so I have to do it myself. Not a problem really because
<br>
there are only few places where the compression really seems to matter.
<br>
<span class="quotelev2">&gt;&gt; Does anyone have any experiences about using it?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is it possible to use compression in just some
</span><br>
<span class="quotelev2">&gt;&gt; subset of communications (communicator
</span><br>
<span class="quotelev2">&gt;&gt; specific compression settings)?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In our MPI application we are transferring large
</span><br>
<span class="quotelev2">&gt;&gt; amounts of sparse/redundant data that compresses
</span><br>
<span class="quotelev2">&gt;&gt; very well. Also my initial tests showed significant
</span><br>
<span class="quotelev2">&gt;&gt; improvements in performance.
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If your particular data is well-suited for fast compression, you might  
</span><br>
<span class="quotelev1">&gt; want to compress it before calling MPI_SEND / after calling MPI_RECV.   
</span><br>
<span class="quotelev1">&gt; Use the MPI_BYTE datatype to send/receive the messages, and then MPI  
</span><br>
<span class="quotelev1">&gt; won't do anything additional for datatype conversions, etc
</span><br>
Yeah, already did something like this. I have a situation where all
<br>
the nodes are sending large amounts of redundant data at once. The
<br>
combination: &quot;compress --&gt; MPI_SEND --&gt; MPI_RECV --&gt; decompress&quot;
<br>
works of course, but it forces one to allocate large amounts of memory
<br>
(or diskspace) for the compressed data. You can do it manually in parts
<br>
of course, but it would be nice if MPI library could do it behind the
<br>
scenes.
<br>
<p>Thanks,
<br>
<p><pre>
-- 
Tomas Ukkonen
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5482/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5483.php">Koun SHIRAI: "[OMPI users] install intel mac with Laopard"</a>
<li><strong>Previous message:</strong> <a href="5481.php">Ingo Josopait: "Re: [OMPI users] Busy waiting [was Re:  (no subject)]"</a>
<li><strong>In reply to:</strong> <a href="5450.php">Jeff Squyres: "Re: [OMPI users] Message compression in OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5452.php">George Bosilca: "Re: [OMPI users] Message compression in OpenMPI"</a>
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
