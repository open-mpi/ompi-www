<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jun 29 15:39:41 2006" -->
<!-- isoreceived="20060629193941" -->
<!-- sent="Thu, 29 Jun 2006 21:39:41 +0200" -->
<!-- isosent="20060629193941" -->
<!-- name="openmpi-user" -->
<!-- email="openmpi-user_at_[hidden]" -->
<!-- subject="Re: [OMPI users] users Digest, Vol 318, Issue 1" -->
<!-- id="44A42C7D.60703_at_fraka-mp.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="mailman.693.1151589366.3329.users_at_open-mpi.org" -->
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
<strong>From:</strong> openmpi-user (<em>openmpi-user_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-29 15:39:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1501.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] OpenMPI 1.1 backward compatible?"</a>
<li><strong>Previous message:</strong> <a href="1499.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] auto detect hosts"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
@Terry
<br>
<p>I hope this is of any help (debugged with TotalView):
<br>
<p>Enclose you will find a graph from TotalView as well as this:
<br>
/Created process 2 (7633), named &quot;mpirun&quot;
<br>
Thread 2.1 has appeared
<br>
Thread 2.2 has appeared
<br>
Thread 2.1 received a signal (Segmentation Violation)/
<br>
<p>and the stack trace:
<br>
/     _mca_pls_xgrid_set_node_name,              FP=bffff090
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-[PlsXGridClient launchJob:],              FP=bffff100
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_orte_pls_xgrid_launch,                    FP=bffff240
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_orte_rmgr_urm_spawn,                      FP=bffff290
<br>
orterun,                                   FP=bffff310
<br>
main,                                      FP=bffff3b0
<br>
_start,                                    FP=bffff400/
<br>
<p>and this (bold crashed):
<br>
/     0x00257680:         0x805e0044  lwz       rtoc,68(r30)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0x00257684:         0x38000001  li        r0,1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*0x00257688:         0x90020010  stw       r0,16(rtoc)*
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0x0025768c:         0x805e0044  lwz       rtoc,68(r30)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0x00257690:         0x38008000  li        r0,-32768/
<br>
<p>from function /_mca_pls_xgrid_set_node_name/ in /mca_pls_xgrid.so/
<br>
<p>Unfortunately I'm not yet familiar with TotalView, so let me know if you 
<br>
like to get more output (sorry: haven't found dbx for Mac OS X -&gt; that's 
<br>
why TotalView was used)
<br>
<p>Yours,
<br>
Frank
<br>
<p>users-request_at_[hidden] wrote:
<br>
<p>------------------------------
<br>
<p>Message: 2
<br>
Date: Wed, 28 Jun 2006 10:35:03 -0400
<br>
From: &quot;Terry D. Dontje&quot; &lt;Terry.Dontje_at_[hidden]&gt;
<br>
Subject: [OMPI users] Re : OpenMPI 1.1: Signal:10,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;info.si_errno:0(Unknown, error:	0), si_code:1(BUS_ADRALN)
<br>
To: users_at_[hidden]
<br>
Message-ID: &lt;44A29397.2000904_at_[hidden]&gt;
<br>
Content-Type: text/plain; format=flowed; charset=ISO-8859-1
<br>
<p>Frank,
<br>
<p>Can you set your limit coredumpsize to non-zero rerun the program
<br>
and then get the stack via dbx?
<br>
<p>So, I have a similar case of BUS_ADRALN on SPARC systems with an
<br>
older version (June 21st) of the trunk.  I've since run using the latest 
<br>
trunk and the
<br>
bus went away.  I am now going to try this out with v1.1 to see if I get 
<br>
similar
<br>
results.  Your stack would help me try and determine if this is an 
<br>
OpenMPI issue
<br>
or possibly some type of platform problem.
<br>
<p>There is another thread with Eric Thibodeau that I am unsure if it is 
<br>
the same issue
<br>
as either of our situation. 
<br>
<p>--td
<br>
<p><p><span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;Message: 3
</span><br>
<span class="quotelev2">&gt; &gt;Date: Wed, 28 Jun 2006 14:30:12 +0200
</span><br>
<span class="quotelev2">&gt; &gt;From: openmpi-user &lt;openmpi-user_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt;Subject: Re: [OMPI users] OpenMPI 1.1: Signal:10
</span><br>
<span class="quotelev2">&gt; &gt;	info.si_errno:0(Unknown, error:	0), si_code:1(BUS_ADRALN) (Terry D.
</span><br>
<span class="quotelev2">&gt; &gt;	Dontje)
</span><br>
<span class="quotelev2">&gt; &gt;To: users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;Message-ID: &lt;44A27654.9060002_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt;Content-Type: text/plain; charset=&quot;iso-8859-1&quot;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;Hi Terry,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;unfortunately I haven't got a stack trace.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;OS: Mac OS X 10.4.7 Server on the Xgrid-server and Mac OS X 10.4.7 
</span><br>
<span class="quotelev2">&gt; &gt;Client on every node (G4 and G5). For testing-purposes I've installed 
</span><br>
<span class="quotelev2">&gt; &gt;OpenMPI 1.1 on a Dual-G4-node and on a Dual-G5-node with my Xgrid 
</span><br>
<span class="quotelev2">&gt; &gt;consisting of only either the Dual-G4- or the Dual-G5-node. No matter 
</span><br>
<span class="quotelev2">&gt; &gt;which configuration, I ran into the bus error.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;Yours,
</span><br>
<span class="quotelev2">&gt; &gt;Frank
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p><p><p>------------------------------
<br>
<p><p><p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1500/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1500/_mca_pls_xgrid_set_node_name.dot">_mca_pls_xgrid_set_node_name.dot</a>
</ul>
<!-- attachment="_mca_pls_xgrid_set_node_name.dot" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1501.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] OpenMPI 1.1 backward compatible?"</a>
<li><strong>Previous message:</strong> <a href="1499.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] auto detect hosts"</a>
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
