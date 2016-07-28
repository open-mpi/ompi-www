<?
$subject_val = "Re: [OMPI users] [EXTERNAL] Re: Question regarding osu-benchamarks 3.1.1";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  1 06:25:55 2012" -->
<!-- isoreceived="20120301112555" -->
<!-- sent="Thu, 1 Mar 2012 06:25:50 -0500" -->
<!-- isosent="20120301112550" -->
<!-- name="Jeffrey Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [EXTERNAL] Re: Question regarding osu-benchamarks 3.1.1" -->
<!-- id="039BE07F-F43B-424F-B70B-BAE1F194E12A_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAOf_+-XqxZgrrs0+5ocxm8N4UdCsjGAw=K_=8HNS6UGqaCiVDg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] [EXTERNAL] Re: Question regarding osu-benchamarks 3.1.1<br>
<strong>From:</strong> Jeffrey Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-01 06:25:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18639.php">Mohamed Adel: "Re: [OMPI users] Simple question on GRID"</a>
<li><strong>Previous message:</strong> <a href="18637.php">Jeffrey Squyres: "Re: [OMPI users] [EXTERNAL] Re: Question regarding osu-benchamarks 3.1.1"</a>
<li><strong>In reply to:</strong> <a href="18627.php">Jingcha Joba: "Re: [OMPI users] [EXTERNAL] Re: Question regarding osu-benchamarks 3.1.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18664.php">Prentice Bisbal: "Re: [OMPI users] [EXTERNAL] Re: Question regarding osu-benchamarks 3.1.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 1, 2012, at 1:17 AM, Jingcha Joba wrote:
<br>
<p><span class="quotelev1">&gt; Aah...
</span><br>
<span class="quotelev1">&gt; So when openMPI is compile with OFED, and run on a Infiniband/RoCE devices, I would use the mpi would simply direct to ofed to do point to point calls in the ofed way?
</span><br>
<p>I'm not quite sure how to parse that.  :-)
<br>
<p>The openib BTL uses verbs functions to effect data transfers between MPI process peers.  The BTL is one of the lower layers in Open MPI for point-to-point communication; BTL plugins are used to effect the device-specific transport stuff for MPI_SEND, MPI_RECV, MPI_PUT, ...etc.  Hence, when you run with the openib BTL and call MPI_SEND (assumedly to a peer that is reachable via an OpenFabrics device), the openib BTL will eventually be called to actually send the message.  The openib BTL will send the message to the peer via calls to some combination of calls to verbs functions.
<br>
<p>Mellanox has also introduced a library called &quot;MXM&quot; that can also be used for underlying MPI message transport (as opposed to using the openib BTL).  See the Open MPI README for some explanations about the different transports that Open MPI can use (specifically: &quot;ob1&quot; vs. &quot;cm&quot;).
<br>
<p><span class="quotelev2">&gt; &gt; More specifically: all things being equal, you don't care which is used.  You just want your message to get to the receiver/target as fast as possible.  One of the main ideas of MPI is to hide those kinds of details from the user.  I.e., you call MPI_SEND.  A miracle occurs.  The message is received on the other side.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; True. Its just that I am digging into the OFED source code and the ompi source code,and trying to understand the way these two interact..
</span><br>
<p>The openib BTL is probably one of the most complex sections of Open MPI, unfortunately.  :-\  The verbs API is *quite* complex, and has many different options that do not work on all types of OpenFabrics hardware.  This leads to many different blocks of code, not all of which are executed on all platforms.  The verbs model of registering memory also leads to a lot of complications, especially since, for performance reasons, MPI has to cache memory registrations and interpose itself in the memory subsystem to catch when registered memory is freed (see the README for some details here).  
<br>
<p>If you have any specific questions about the implementation, post over on the devel list.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18639.php">Mohamed Adel: "Re: [OMPI users] Simple question on GRID"</a>
<li><strong>Previous message:</strong> <a href="18637.php">Jeffrey Squyres: "Re: [OMPI users] [EXTERNAL] Re: Question regarding osu-benchamarks 3.1.1"</a>
<li><strong>In reply to:</strong> <a href="18627.php">Jingcha Joba: "Re: [OMPI users] [EXTERNAL] Re: Question regarding osu-benchamarks 3.1.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18664.php">Prentice Bisbal: "Re: [OMPI users] [EXTERNAL] Re: Question regarding osu-benchamarks 3.1.1"</a>
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
