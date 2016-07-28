<?
$subject_val = "Re: [OMPI users] Odd MPI_Bcast behavior";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 17 12:40:23 2008" -->
<!-- isoreceived="20080917164023" -->
<!-- sent="Wed, 17 Sep 2008 12:40:16 -0400" -->
<!-- isosent="20080917164016" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Odd MPI_Bcast behavior" -->
<!-- id="BB6DE216-B913-42F6-B636-7E6F518807B4_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="OF5E52542C.9187C126-ON852574C7.0058C1E1-852574C7.005ACFC4_at_us.ibm.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Odd MPI_Bcast behavior<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-17 12:40:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6588.php">Shafagh Jafer: "Re: [OMPI users] errors returned from openmpi-1.2.7 source code"</a>
<li><strong>Previous message:</strong> <a href="6586.php">Gregory D Abram: "Re: [OMPI users] Odd MPI_Bcast behavior"</a>
<li><strong>In reply to:</strong> <a href="6586.php">Gregory D Abram: "Re: [OMPI users] Odd MPI_Bcast behavior"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6584.php">Eugene Loh: "Re: [OMPI users] Odd MPI_Bcast behavior"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The patch is in 1.2.6 and beyond.
<br>
<p>It's not really a serialization issue -- it's an &quot;early completion&quot;  
<br>
optimization, meaning that as soon as the underlying network stack  
<br>
indicates that the buffer has been copied, OMPI marks the request as  
<br>
complete and returns.  But the data may not actually have been pushed  
<br>
out on the network wire yet (so to speak) -- it may still require  
<br>
additional API-driven progress before the message actually departs for  
<br>
the peer.  While it may sound counterintuitive, this is actually an  
<br>
acceptable compromise/optimization for MPI applications that dip into  
<br>
the MPI layer frequently -- they'll naturally progress anything that  
<br>
has been queued up but not fully sent yet.  Disabling early completion  
<br>
means that OMPI won't mark the request as complete until the message  
<br>
requires no further progression from OMPI for it to be transited to  
<br>
the peer (e.g., the network hardware can completely take over the  
<br>
progression).
<br>
<p>Hence, in your case, it looks serialized because you put in a big  
<br>
sleep().  If you called other MPI functions instead of sleep, it  
<br>
wouldn't appear as serialized.
<br>
<p>Make sense?  (yes, I know it's a fine line distinction ;-) )
<br>
<p>OMPI v1.3 internally differentiates between &quot;early completion&quot; and  
<br>
&quot;out on the wire&quot; so that it can automatically tell the difference  
<br>
(i.e., we changed our message progression engine to recognize the  
<br>
difference).  This change was seen as too big to port back to the  
<br>
v1.2. series, so the compromise was to put the &quot;disable early  
<br>
completion&quot; flag in the v1.2 series.
<br>
<p><p>On Sep 17, 2008, at 12:31 PM, Gregory D Abram wrote:
<br>
<p><span class="quotelev1">&gt; Wow. I am indeed on IB.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So a program that calls an MPI_Bcast, then does a bunch of setup  
</span><br>
<span class="quotelev1">&gt; work that should be done in parallel before re-synchronizing, in  
</span><br>
<span class="quotelev1">&gt; fact serializes the setup work? I see its not quite that bad - If I  
</span><br>
<span class="quotelev1">&gt; run my little program on 5 nodes, I get 0 immediately, 1,2 and 4  
</span><br>
<span class="quotelev1">&gt; after 5 seconds and 3 after 10, revealing, I guess, the tree  
</span><br>
<span class="quotelev1">&gt; distribution.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ticket 1224 isn't terribly clear - is this patch already in 1.2.6 or  
</span><br>
<span class="quotelev1">&gt; 1.2.7, or do I have to download source, patch and build?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Greg
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;graycol.gif&gt;Jeff Squyres ---09/17/2008 12:03:21 PM---Are you using  
</span><br>
<span class="quotelev1">&gt; IB, perchance?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Sent by: users-bounces_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 09/17/08 11:55 AM
</span><br>
<span class="quotelev1">&gt; Please respond to
</span><br>
<span class="quotelev1">&gt; Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; &lt;ecblank.gif&gt;
</span><br>
<span class="quotelev1">&gt; To
</span><br>
<span class="quotelev1">&gt; &lt;ecblank.gif&gt;
</span><br>
<span class="quotelev1">&gt; Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; &lt;ecblank.gif&gt;
</span><br>
<span class="quotelev1">&gt; cc
</span><br>
<span class="quotelev1">&gt; &lt;ecblank.gif&gt;
</span><br>
<span class="quotelev1">&gt; &lt;ecblank.gif&gt;
</span><br>
<span class="quotelev1">&gt; Subject
</span><br>
<span class="quotelev1">&gt; &lt;ecblank.gif&gt;
</span><br>
<span class="quotelev1">&gt; Re: [OMPI users] Odd MPI_Bcast behavior
</span><br>
<span class="quotelev1">&gt; &lt;ecblank.gif&gt;
</span><br>
<span class="quotelev1">&gt; &lt;ecblank.gif&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Are you using IB, perchance?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We have an &quot;early completion&quot; optimization in the 1.2 series that can
</span><br>
<span class="quotelev1">&gt; cause this kind of behavior.  For apps that dip into the MPI layer
</span><br>
<span class="quotelev1">&gt; frequently, it doesn't matter.  But for those that do not dip into the
</span><br>
<span class="quotelev1">&gt; MPI layer frequently, it can cause delays like this.  See <a href="http://www.open-mpi.org/faq/?category=openfabrics#v1.2-use-early-completion">http://www.open-mpi.org/faq/?category=openfabrics#v1.2-use-early-completion</a>
</span><br>
<span class="quotelev1">&gt;  for a few more details.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you're not using IB, let us know.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 17, 2008, at 10:34 AM, Gregory D Abram wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have a little program which initializes, calls MPI_Bcast, prints a
</span><br>
<span class="quotelev2">&gt; &gt; message, waits five seconds, and finalized. I sure thought that each
</span><br>
<span class="quotelev2">&gt; &gt; participating process would print the message immediately, then all
</span><br>
<span class="quotelev2">&gt; &gt; would wait and exit - thats what happens with mvapich 1.0.0.  On
</span><br>
<span class="quotelev2">&gt; &gt; OpenMPI 1.2.5, though, I get the message immediately from proc 0,
</span><br>
<span class="quotelev2">&gt; &gt; then 5 seconds later, from proc 1, and then 5 seconds later, it
</span><br>
<span class="quotelev2">&gt; &gt; exits- as if MPI_Finalize on proc 0 flushed the MPI_Bcast. If I add
</span><br>
<span class="quotelev2">&gt; &gt; a MPI_Barrier after the MPI_Bcast, it works as I'd expect. Is this
</span><br>
<span class="quotelev2">&gt; &gt; behavior correct? If so, I so I have a bunch of code to change in
</span><br>
<span class="quotelev2">&gt; &gt; order to work correctly on OpenMPI.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Greg
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Here's the code:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; main(int argc, char *argv[])
</span><br>
<span class="quotelev2">&gt; &gt; {
</span><br>
<span class="quotelev2">&gt; &gt; char hostname[256]; int r, s;
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; gethostname(hostname, sizeof(hostname));
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Comm_rank(MPI_COMM_WORLD, &amp;r);
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Comm_size(MPI_COMM_WORLD, &amp;s);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; fprintf(stderr, &quot;%d of %d: %s\n&quot;, r, s, hostname);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; int i = 99999;
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Bcast(&amp;i, sizeof(i), MPI_UNSIGNED_CHAR, 0, MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt; &gt; // MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; fprintf(stderr, &quot;%d: got it\n&quot;, r);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; sleep(5);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Finalize();
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6588.php">Shafagh Jafer: "Re: [OMPI users] errors returned from openmpi-1.2.7 source code"</a>
<li><strong>Previous message:</strong> <a href="6586.php">Gregory D Abram: "Re: [OMPI users] Odd MPI_Bcast behavior"</a>
<li><strong>In reply to:</strong> <a href="6586.php">Gregory D Abram: "Re: [OMPI users] Odd MPI_Bcast behavior"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6584.php">Eugene Loh: "Re: [OMPI users] Odd MPI_Bcast behavior"</a>
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
