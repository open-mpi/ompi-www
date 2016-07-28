<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Aug 18 05:20:56 2005" -->
<!-- isoreceived="20050818102056" -->
<!-- sent="Thu, 18 Aug 2005 15:50:50 +0530" -->
<!-- isosent="20050818102050" -->
<!-- name="Sridhar Chirravuri" -->
<!-- email="sridhar_at_[hidden]" -->
<!-- subject="Re:  Fwd: Regarding MVAPI Component in Open MPI" -->
<!-- id="4A388685F814D54CAE412B2DAB7CE91C5AD4CF_at_initexch.topspincom.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto=" Fwd: Regarding MVAPI Component in Open MPI" -->
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
<strong>From:</strong> Sridhar Chirravuri (<em>sridhar_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-08-18 05:20:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0186.php">Jeff Squyres: "1.0 platforms / compilers"</a>
<li><strong>Previous message:</strong> <a href="0184.php">Brian Barrett: "Re:  ob1 -&gt; default?"</a>
<li><strong>Maybe in reply to:</strong> <a href="0074.php">Jeff Squyres: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Thanks for the info about IMB. I will download the latest one.
<br>
<p>Pallas was running fine in intra-node case. But it is hanging in
<br>
inter-node case.
<br>
<p>I have a small MPI program which send/recv a char. I have tested this
<br>
program across the nodes (inter-node) as follows. It ran fine across the
<br>
nodes.
<br>
<p>Note: I have used the same options given by Tim while running pallas,
<br>
mpi-ping and my small test mprogram.
<br>
<p># mpirun -np 2 -mca pml ob1 -mca btl_base_include self,mvapi -mca
<br>
btl_base_debug 1 ./a.out
<br>
<p>I have run mpi-ping.c file which is attached in the file given by OMPI
<br>
Developer. This program hangs. I have run pallas (only pingpong) in
<br>
inter-node case, it hangs too. 
<br>
<p>Attached zip file contains the following files
<br>
<p>Test_out.txt --&gt; Works fine in inter-node case. Send/recv only one char.
<br>
mpi_ping.txt --&gt; Hangs in inter-node case. I need to press ctrl+C
<br>
Pmb_out.txt --&gt; Hangs in inter-node case. Just ran pingpong. I need to
<br>
press ctrl+C
<br>
Test.c ---&gt; my small MPI program
<br>
<p>The debug info is there in the above .txt files. Tim might be interested
<br>
to look at the debug output.
<br>
<p>I have run pallas in intra-node case (same machine) and it hangs in
<br>
intra-node case too. This output is something similar to pmb_out.txt
<br>
except the IP address and port number.
<br>
<p># mpirun -np 2 -mca pml ob1 -mca btl_base_include self,mvapi -mca
<br>
btl_base_debug 1 ./PMB-MPI1
<br>
<p>But when I run without any options, it runs fine.
<br>
<p>#mpirun -np 2 ./PMB-MPI1 
<br>
<p><p>Thanks
<br>
-Sridhar
<br>
<p><p>-----Original Message-----
<br>
From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]] On
<br>
Behalf Of Jeff Squyres
<br>
Sent: Wednesday, August 17, 2005 6:19 PM
<br>
To: Open MPI Developers
<br>
Subject: Re: [O-MPI devel] Fwd: Regarding MVAPI Component in Open MPI
<br>
<p>On Aug 17, 2005, at 8:23 AM, Sridhar Chirravuri wrote:
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
<p><span class="quotelev1">&gt; Here is the output of sample MPI program which sends a char and recvs
</span><br>
a
<br>
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
<p><span class="quotelev1">&gt; But I could see that data is going over TCP/GigE and not on
</span><br>
Infiniband.
<br>
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
_______________________________________________
devel mailing list
devel_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>

</pre>
<p>
<p><hr>
<ul>
<li>application/x-gzip attachment: <a href="../../att-0185/output.tar.gz">output.tar.gz</a>
</ul>
<!-- attachment="output.tar.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0186.php">Jeff Squyres: "1.0 platforms / compilers"</a>
<li><strong>Previous message:</strong> <a href="0184.php">Brian Barrett: "Re:  ob1 -&gt; default?"</a>
<li><strong>Maybe in reply to:</strong> <a href="0074.php">Jeff Squyres: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
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
