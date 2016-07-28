<?
$subject_val = "Re: [OMPI users] Some Questions on Building OMPI on Linux Em64t";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 21 15:24:45 2010" -->
<!-- isoreceived="20100521192445" -->
<!-- sent="Fri, 21 May 2010 14:24:36 -0500" -->
<!-- isosent="20100521192436" -->
<!-- name="Michael E. Thomadakis" -->
<!-- email="miket7777_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Some Questions on Building OMPI on Linux Em64t" -->
<!-- id="4BF6DDF4.3020807_at_gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="4BF42BB5.9050605_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Some Questions on Building OMPI on Linux Em64t<br>
<strong>From:</strong> Michael E. Thomadakis (<em>miket7777_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-21 15:24:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13128.php">Jeff Squyres: "Re: [OMPI users] General question on the implementation ofa&quot;scheduler&quot; on client side..."</a>
<li><strong>Previous message:</strong> <a href="13126.php">Patrick Geoffray: "Re: [OMPI users] GM + OpenMPI bug ..."</a>
<li><strong>In reply to:</strong> <a href="13091.php">Michael E. Thomadakis: "[OMPI users] Some Questions on Building OMPI on Linux Em64t"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13140.php">Jeff Squyres: "Re: [OMPI users] Some Questions on Building OMPI on Linux Em64t"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I am resending this because I am not sure if it was sent out to the OMPI 
<br>
list.
<br>
<p>Any help would be greatly appreciated.
<br>
<p>best ....
<br>
<p>Michael
<br>
<p>On 05/19/10 13:19, Michael E. Thomadakis wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; I would like to build OMPI V1.4.2 and make it available to our users at the
</span><br>
<span class="quotelev1">&gt; Supercomputing Center at Texas A&amp;M Univ. Our system is a 2-socket, 4-core Nehalem
</span><br>
<span class="quotelev1">&gt; @2.8GHz, 24GiB DRAM / node, 324 nodes connected to 4xQDR Voltaire fabric,
</span><br>
<span class="quotelev1">&gt; CentOS/RHEL 5.4.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have been trying to find the following information :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1) high-resolution timers: how do I specify the HRT linux timers in the
</span><br>
<span class="quotelev1">&gt; 	--with-timer=TYPE
</span><br>
<span class="quotelev1">&gt;   line of ./configure ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2) I have installed blcr V0.8.2 but when I try to built OMPI and I point to the
</span><br>
<span class="quotelev1">&gt; full installation it complains it cannot find it. Note that I build BLCR with
</span><br>
<span class="quotelev1">&gt; GCC but I am building OMPI with Intel compilers (V11.1)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3) Does OMPI by default use SHM for intra-node message IPC but reverts to IB for
</span><br>
<span class="quotelev1">&gt; inter-node ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 4) How could I select the high-speed transport, say DAPL or OFED IB verbs ? Is
</span><br>
<span class="quotelev1">&gt; there any preference as to the specific high-speed transport over Mellanox/Voltaire QDR IB?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 5) When we launch MPI jobs via PBS/TORQUE do we have control on the task and
</span><br>
<span class="quotelev1">&gt; thread placement on nodes/cores ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 6) Can we suspend/restart cleanly OMPI jobs with the above scheduler ? Any
</span><br>
<span class="quotelev1">&gt; caveats on suspension / resumption of OMPI jobs ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 7) Do you have any performance data comparing OMPI vs say MVAPICHv2 and
</span><br>
<span class="quotelev1">&gt; IntelMPI ? This is not a political issue since I am groing to be providing all
</span><br>
<span class="quotelev1">&gt; these MPI stacks to our users (IntelMPI V4.0 already installed).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you so much for the great s/w ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; best
</span><br>
<span class="quotelev1">&gt; Michael
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; % -------------------------------------------------------------------- \
</span><br>
<span class="quotelev1">&gt; % Michael E. Thomadakis, Ph.D.  Senior Lead Supercomputer Engineer/Res \
</span><br>
<span class="quotelev1">&gt; % E-mail: miket AT tamu DOT edu                   Texas A&amp;M University \
</span><br>
<span class="quotelev1">&gt; % web:<a href="http://alphamike.tamu.edu">http://alphamike.tamu.edu</a>               Supercomputing Center \
</span><br>
<span class="quotelev1">&gt; % Voice:  979-862-3931                    Teague Research Center, 104B \
</span><br>
<span class="quotelev1">&gt; % FAX:    979-847-8643                  College Station, TX 77843, USA \
</span><br>
<span class="quotelev1">&gt; % -------------------------------------------------------------------- \
</span><br>
<span class="quotelev1">&gt;    
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13127/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13128.php">Jeff Squyres: "Re: [OMPI users] General question on the implementation ofa&quot;scheduler&quot; on client side..."</a>
<li><strong>Previous message:</strong> <a href="13126.php">Patrick Geoffray: "Re: [OMPI users] GM + OpenMPI bug ..."</a>
<li><strong>In reply to:</strong> <a href="13091.php">Michael E. Thomadakis: "[OMPI users] Some Questions on Building OMPI on Linux Em64t"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13140.php">Jeff Squyres: "Re: [OMPI users] Some Questions on Building OMPI on Linux Em64t"</a>
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
