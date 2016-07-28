<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Aug 17 07:48:39 2005" -->
<!-- isoreceived="20050817124839" -->
<!-- sent="Wed, 17 Aug 2005 08:48:37 -0400" -->
<!-- isosent="20050817124837" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re:  Fwd: Regarding MVAPI Component in Open MPI" -->
<!-- id="9e94414e359dc6560a7412ac62b54ec6_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4A388685F814D54CAE412B2DAB7CE91C5AD4C1_at_initexch.topspincom.com" -->
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
<strong>Date:</strong> 2005-08-17 07:48:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0172.php">Tim S. Woodall: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>Previous message:</strong> <a href="0170.php">Sridhar Chirravuri: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>In reply to:</strong> <a href="0170.php">Sridhar Chirravuri: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0172.php">Tim S. Woodall: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>Reply:</strong> <a href="0172.php">Tim S. Woodall: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>Reply:</strong> <a href="0173.php">Jeff Squyres: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 17, 2005, at 8:23 AM, Sridhar Chirravuri wrote:
<br>
<p><span class="quotelev1">&gt; Can someone reply to my mail please?
</span><br>
<p>I think you sent your first mail at 6:48am in my time zone (that is 
<br>
4:48am Los Alamos time -- I strongly doubt that they are at work 
<br>
yet...); I'm still processing my mail from last night and am just now 
<br>
seeing your mail.
<br>
<p>Global software development is challenging.  :-)
<br>
<p><span class="quotelev1">&gt; I checked out the latest code drop r6911 today morning and ran Pallas
</span><br>
<span class="quotelev1">&gt; with in the same node (2 procs). It ran fine. I didn't see any hangs
</span><br>
<span class="quotelev1">&gt; this time whereas I could see the following statements in the pallas
</span><br>
<span class="quotelev1">&gt; output and I feel they are just warnings, which can be ignored. Am I
</span><br>
<span class="quotelev1">&gt; correct?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Request for 0 bytes (coll_basic_reduce_scatter.c, 80)
</span><br>
<span class="quotelev1">&gt; Request for 0 bytes (coll_basic_reduce.c, 194)
</span><br>
<span class="quotelev1">&gt; Request for 0 bytes (coll_basic_reduce_scatter.c, 80)
</span><br>
<span class="quotelev1">&gt; Request for 0 bytes (coll_basic_reduce.c, 194)
</span><br>
<span class="quotelev1">&gt; Request for 0 bytes (coll_basic_reduce_scatter.c, 80)
</span><br>
<span class="quotelev1">&gt; Request for 0 bytes (coll_basic_reduce.c, 194)
</span><br>
<p>Hum.  I was under the impression that George had fixed these, but I get 
<br>
the same warnings.  I'll have a look...
<br>
<p><span class="quotelev1">&gt; Here is the output of sample MPI program which sends a char and recvs a
</span><br>
<span class="quotelev1">&gt; char.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [root_at_micrompi-1 ~]# mpirun -np 2 ./a.out
</span><br>
<span class="quotelev1">&gt; Could not join a running, existing universe
</span><br>
<span class="quotelev1">&gt; Establishing a new one named: default-universe-12913
</span><br>
<span class="quotelev1">&gt; [0,0,0] mca_oob_tcp_init: calling orte_gpr.subscribe
</span><br>
<span class="quotelev1">&gt; [0,0,0] mca_oob_tcp_init: calling orte_gpr.put(orte-job-0)
</span><br>
<span class="quotelev1">&gt; [snipped]
</span><br>
<span class="quotelev1">&gt; [0,0,0]-[0,0,1] mca_oob_tcp_send: tag 2
</span><br>
<span class="quotelev1">&gt; [0,0,0]-[0,0,1] mca_oob_tcp_send: tag 2
</span><br>
<p>This seems to be a *lot* of debugging output -- did you enable that on 
<br>
purpose?  I don't get the majority of that output when I run a hello 
<br>
world or a ring MPI program (I only get the bit about the existing 
<br>
universe).
<br>
<p><span class="quotelev1">&gt; My configure command looks like
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/openmpi --with-btl-mvapi=/usr/local/topspin/
</span><br>
<span class="quotelev1">&gt; --enable-mca-no-build=btl-openib,pml-teg,pml-uniq
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Since I am working with mvapi component, I disabled openib.
</span><br>
<p>Note that you can disable these things at run-time; you don't have to 
<br>
disable it at configure time.  I only mention this for completeness -- 
<br>
either way, it's disabled.
<br>
<p><span class="quotelev1">&gt; But I could see that data is going over TCP/GigE and not on Infiniband.
</span><br>
<p>Tim: what's the status of multi-rail stuff?  I thought I saw a commit 
<br>
recently where the TCP BTL would automatically disable itself if it saw 
<br>
that one or more of the low-latency BTLs was available...?
<br>
<p>Sridhar: Did you try running explicitly requesting mvapi?  Perhaps 
<br>
something like:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun --mca btl mvapi,self ....
<br>
<p>This shouldn't be necessary -- mvapi should select itself automatically 
<br>
-- but perhaps something is going wrong with the mvapi selection 
<br>
sequence...?  Tim/Galen -- got any insight here?
<br>
<p><span class="quotelev1">&gt; I have run pallas, it simply hangs again :-(
</span><br>
<p>I'm confused -- above, you said that you ran pallas and it worked 
<br>
fine...?
<br>
<p>(it does not hang for me when I run with teg or ob1)
<br>
<p><span class="quotelev1">&gt; Note: I added pml=ob1 in the conf file
</span><br>
<span class="quotelev1">&gt; /openmpi/etc/openmpi-mca-params.conf
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any latest options being added to the configure command? Please let me
</span><br>
<span class="quotelev1">&gt; know.
</span><br>
<p>No, nothing changed there AFAIK.
<br>
<p><pre>
-- 
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0172.php">Tim S. Woodall: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>Previous message:</strong> <a href="0170.php">Sridhar Chirravuri: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>In reply to:</strong> <a href="0170.php">Sridhar Chirravuri: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0172.php">Tim S. Woodall: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>Reply:</strong> <a href="0172.php">Tim S. Woodall: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>Reply:</strong> <a href="0173.php">Jeff Squyres: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
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
