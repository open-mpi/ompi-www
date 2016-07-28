<?
$subject_val = "Re: [OMPI users] Bad Infiniband latency with subounce";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 18 10:17:52 2010" -->
<!-- isoreceived="20100218151752" -->
<!-- sent="Thu, 18 Feb 2010 17:17:45 +0200" -->
<!-- isosent="20100218151745" -->
<!-- name="Pavel Shamis (Pasha)" -->
<!-- email="pashash_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Bad Infiniband latency with subounce" -->
<!-- id="4B7D5A19.90105_at_dev.mellanox.co.il" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="F44D206478A0FF4A9FE422C463171D66267AE6FE_at_XCH-MW-09V.mw.nos.boeing.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Bad Infiniband latency with subounce<br>
<strong>From:</strong> Pavel Shamis (Pasha) (<em>pashash_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-18 10:17:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12105.php">Mathieu Gontier: "Re: [OMPI users] random MPI_UNIVERSE_SIZE and inter-commicator created by MPI_Comm_spawn"</a>
<li><strong>Previous message:</strong> <a href="12103.php">Mathieu Gontier: "[OMPI users] random MPI_UNIVERSE_SIZE"</a>
<li><strong>In reply to:</strong> <a href="12102.php">Repsher, Stephen J: "Re: [OMPI users] Bad Infiniband latency with subounce"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Steve, thank for the details.
<br>
<p>What is the command line that you use to run the benchmark ?
<br>
Can you try to add follow mca parameters to your command line:
<br>
&quot;--mca btl openib,sm,self --mca btl_openib_max_btls 1&quot;
<br>
<p>Thanks,
<br>
Pasha
<br>
<p>Repsher, Stephen J wrote:
<br>
<span class="quotelev1">&gt; Thanks for keeping on this.... Hopefully this answers all the questions:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The cluster has some blades with XRC, others without.  I've tested on both with the same results. For MVAPICH, a flag is set to turn on XRC; I'm not sure how OpenMPI handles it but my build is configured --enable-openib-connectx-xrc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OpenMPI is built on a head node with a 2-port HCA (1 active) and installed on a shared file system.  The compute blades I'm using are Infinihost IIIs, 1-port HCAs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As for nRepeats in bounce, I could increase it, but if that were the problem then I'd expect MVAPICH to report sporadic results as well.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I just downloaded the OSU benchmarks and tried osu_latency.... It's report ~40 microsecs for OpenMPI, and ~3 micrcosecs for MVAPICH.  Still puzzled...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Steve
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Pavel Shamis (Pasha)
</span><br>
<span class="quotelev1">&gt; Sent: Thursday, February 18, 2010 3:33 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Bad Infiniband latency with subounce
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hey,
</span><br>
<span class="quotelev1">&gt; I only may to add the XRC and RC have the same latency.
</span><br>
<span class="quotelev1">&gt; What is the command line that you use to run this benchmark ?
</span><br>
<span class="quotelev1">&gt; What is the system configuration  (one hca, one active port ) ?
</span><br>
<span class="quotelev1">&gt; Any addition information about system configuration, mpi command line, etc. will help to analyze your issue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Pasha (Mellanox guy :-) )
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; I'll defer to the Mellanox guys to reply more in detail, but here's a few thoughts:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - Is MVAPICH using XRC?  (I never played with XRC much; it would 
</span><br>
<span class="quotelev2">&gt;&gt; surprise me if it caused instability on the order of up to 100 micros 
</span><br>
<span class="quotelev2">&gt;&gt; -- I ask just to see if it is an apples-to-apples comparison)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - The nRepeats value in this code is only 10, meaning that it only seems to be doing 10 iterations on each size.  For small sizes, this might well be not enough to be accurate.  Have you tried increasing it?  Or using a different benchmark app, such as NetPIPE, osu_latency, ...etc.?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 16, 2010, at 8:49 AM, Repsher, Stephen J wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Well the &quot;good&quot; news is I can end your debate over binding here...setting mpi_paffinity_alone 1 did nothing. (And personally as a user, I don't care what the default is so long as info is readily apparent in the main docs...and I did see the FAQs on it).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It did lead me to try another parameter though, -mca mpi_preconnect_all 1, which seems to reduce the measured latency reliably of subounce, but it's still sporadic and order ~10-100 microseconds.  It leads me to think that OpenMPI has issues with the method of measurement, which is simply to send progressively larger blocked messages right after calling MPI_Init (starting at 0 bytes which it times as the latency). OpenMPI's lazy connections clearly mess with this.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; But still not consistently 1-2 microsecs...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Steve
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Behalf Of Ralph Castain
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sent: Monday, February 15, 2010 11:21 PM
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: Re: [OMPI users] Bad Infiniband latency with subounce
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Feb 15, 2010, at 8:44 PM, Terry Frankcombe wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Mon, 2010-02-15 at 20:18 -0700, Ralph Castain wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Did you run it with -mca mpi_paffinity_alone 1? Given this is 1.4.1, you can set the bindings to -bind-to-socket or -bind-to-core. Either will give you improved performance.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; IIRC, MVAPICH defaults to -bind-to-socket. OMPI defaults to no binding.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Is this sensible?  Won't most users want processes bound?  OMPI's 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; supposed to &quot;to the right thing&quot; out of the box, right?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Well, that depends on how you look at it. Been the subject of a lot of debate within the devel community. If you bind by default and it is a shared node cluster, then you can really mess people up. On the other hand, if you don't bind by default, then people that run benchmarks without looking at the options can get bad numbers. Unfortunately, there is no automated way to tell if the cluster is configured for shared use or dedicated nodes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I honestly don't know that &quot;most users want processes bound&quot;. One 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; installation I was at set binding by default using the system mca 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; param file, and got yelled at by a group of users that had threaded 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; apps - and most definitely did -not- want their processes bound. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; After a while, it became clear that nothing we could do would make 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; everyone happy :-/
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I doubt there is a right/wrong answer - at least, we sure can't find one. So we don't bind by default so we &quot;do no harm&quot;, and put out FAQs, man pages, mpirun option help messages, etc. that explain the situation and tell you when/how to bind.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev2">&gt;&gt;     
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
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12105.php">Mathieu Gontier: "Re: [OMPI users] random MPI_UNIVERSE_SIZE and inter-commicator created by MPI_Comm_spawn"</a>
<li><strong>Previous message:</strong> <a href="12103.php">Mathieu Gontier: "[OMPI users] random MPI_UNIVERSE_SIZE"</a>
<li><strong>In reply to:</strong> <a href="12102.php">Repsher, Stephen J: "Re: [OMPI users] Bad Infiniband latency with subounce"</a>
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
