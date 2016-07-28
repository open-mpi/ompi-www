<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Mar 21 13:03:41 2007" -->
<!-- isoreceived="20070321170341" -->
<!-- sent="Wed, 21 Mar 2007 11:03:36 -0600" -->
<!-- isosent="20070321170336" -->
<!-- name="Mohammad Huwaidi" -->
<!-- email="mohammad_at_[hidden]" -->
<!-- subject="Re: [OMPI users] users Digest, Vol 536, Issue 1" -->
<!-- id="46016568.1030008_at_kelman.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="mailman.27.1174492812.10974.users_at_open-mpi.org" -->
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
<strong>From:</strong> Mohammad Huwaidi (<em>mohammad_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-21 13:03:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2860.php">Mohammad Huwaidi: "[OMPI users] Fault Tolerance"</a>
<li><strong>Previous message:</strong> <a href="2858.php">Sam Adams: "[OMPI users] threading"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I tried to use multi-threading using OpenMPI but it did not workout for 
<br>
me; however, it worked perfectly with MPICH2.
<br>
<p>users-request_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt; Send users mailing list submissions to
</span><br>
<span class="quotelev1">&gt; 	users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; To subscribe or unsubscribe via the World Wide Web, visit
</span><br>
<span class="quotelev1">&gt; 	<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; or, via email, send a message with subject or body 'help' to
</span><br>
<span class="quotelev1">&gt; 	users-request_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You can reach the person managing the list at
</span><br>
<span class="quotelev1">&gt; 	users-owner_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When replying, please edit your Subject line so it is more specific
</span><br>
<span class="quotelev1">&gt; than &quot;Re: Contents of users digest...&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Today's Topics:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    1. Re: multithreading support (Jeff Squyres)
</span><br>
<span class="quotelev1">&gt;    2. Re: Issues with Get/Put and IRecv (Mike Houston)
</span><br>
<span class="quotelev1">&gt;    3. HotI 2007 Call for Papers -- 4th call. Deadline March	31st is
</span><br>
<span class="quotelev1">&gt;       approaching (Weikuan Yu)
</span><br>
<span class="quotelev1">&gt;    4. segfault with netpipe &amp; ompi 1.2 + MX (32bit only)
</span><br>
<span class="quotelev1">&gt;       (Nicolas Niclausse)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Message: 1
</span><br>
<span class="quotelev1">&gt; Date: Tue, 20 Mar 2007 20:57:21 -0400
</span><br>
<span class="quotelev1">&gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] multithreading support
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;B3C1B097-2FC7-46D4-9667-C4C8BE2D0CEA_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=US-ASCII; delsp=yes; format=flowed
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 16, 2007, at 1:35 AM, Chevchenkovic Chevchenkovic wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  Could someone let me know about the status of multithread support in
</span><br>
<span class="quotelev2">&gt;&gt; openMPI and MVAPICH. I  got some details about MVAPICH which says that
</span><br>
<span class="quotelev2">&gt;&gt; it is supported for MVAPICH2 but I am not sure of the same for
</span><br>
<span class="quotelev2">&gt;&gt; openMPI.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Open MPI's threading support is &quot;light testing&quot;, at best.  In  
</span><br>
<span class="quotelev1">&gt; reality, it probably will not work.  Threading support was designed  
</span><br>
<span class="quotelev1">&gt; into the system from the beginning, but we have not really got around  
</span><br>
<span class="quotelev1">&gt; to debugging / testing it yet.  It is possible that we will do so  
</span><br>
<span class="quotelev1">&gt; over the next few months; a few of the Open MPI member organizations  
</span><br>
<span class="quotelev1">&gt; indicated that they will be working on threading support for the v1.3  
</span><br>
<span class="quotelev1">&gt; series (probably towards the end of this year -- v1.3 is very much in  
</span><br>
<span class="quotelev1">&gt; the planning/definition stage at this point).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We cannot really comment on MVAPICH2 here; it's an entirely different  
</span><br>
<span class="quotelev1">&gt; software project.  You'll probably want to post to their mailing list  
</span><br>
<span class="quotelev1">&gt; to get an answer.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><pre>
-- 
Regards,
Mohammad Huwaidi
We can't resolve problems by using the same kind of thinking we used
when we created them.
                                                 --Albert Einstein
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2860.php">Mohammad Huwaidi: "[OMPI users] Fault Tolerance"</a>
<li><strong>Previous message:</strong> <a href="2858.php">Sam Adams: "[OMPI users] threading"</a>
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
