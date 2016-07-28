<?
$subject_val = "Re: [OMPI users] Openmpi performance issue";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 27 19:47:08 2011" -->
<!-- isoreceived="20111228004708" -->
<!-- sent="Tue, 27 Dec 2011 16:47:03 -0800 (PST)" -->
<!-- isosent="20111228004703" -->
<!-- name="Eric Feng" -->
<!-- email="hpc_benchmark_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Openmpi performance issue" -->
<!-- id="1325033223.74409.YahooMailNeo_at_web124715.mail.ne1.yahoo.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="4EFA0753.1060703_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Openmpi performance issue<br>
<strong>From:</strong> Eric Feng (<em>hpc_benchmark_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-27 19:47:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18064.php">Ralph Castain: "Re: [OMPI users] Openmpi performance issue"</a>
<li><strong>Previous message:</strong> <a href="18062.php">Eugene Loh: "Re: [OMPI users] Openmpi performance issue"</a>
<li><strong>In reply to:</strong> <a href="18062.php">Eugene Loh: "Re: [OMPI users] Openmpi performance issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18064.php">Ralph Castain: "Re: [OMPI users] Openmpi performance issue"</a>
<li><strong>Reply:</strong> <a href="18064.php">Ralph Castain: "Re: [OMPI users] Openmpi performance issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I used&#194;&#160;&quot;--bind-to-socket --bysocket&quot;&#194;&#160;&#194;&#160;all the time. It helps performance. I never oversubscribed node.
I have Intel westmere CPUs in each node, all cores will be used for application.

Open MPI version is 1.5.4.

The way i did to install openmpi:
./autogen.sh

./configure
--prefix=/mpi/openmpi-1.5.4 --with-openib CC=icc CXX=icpc F77=ifort FC=ifort --with-knem=/opt/knem





________________________________
 From: Eugene Loh &lt;eugene.loh_at_[hidden]&gt;
To: Open MPI Users &lt;users_at_[hidden]&gt; 
Cc: Eric Feng &lt;hpc_benchmark_at_[hidden]&gt; 
Sent: Wednesday, December 28, 2011 1:58 AM
Subject: Re: [OMPI users] Openmpi performance issue
 

If I remember correctly, both Intel MPI and MVAPICH2 bind processes by default.&#194;&#160; OMPI does not.&#194;&#160; There are many cases where the &quot;bind by default&quot; behavior gives better default performance.&#194;&#160; (There are also cases where it can give catastrophically worse performance.)&#194;&#160; Anyhow, it seems possible to me that this accounts for the difference you're seeing.

To play with binding in OMPI, you can try adding &quot;--bind-to-socket
    --bysocket&quot; to your mpirun command line, though what to try can
    depend on what version of OMPI you're using as well as details of
    your processor (HyperThreads?), your application, etc.&#194;&#160; There's a
    FAQ entry at
    <a href="http://www.open-mpi.org/faq/?category=tuning#using-paffinity">http://www.open-mpi.org/faq/?category=tuning#using-paffinity</a>

On 12/27/2011 6:45 AM, Ralph Castain wrote: 
It depends a lot on the application and how you ran it. Can you provide some info? For example, if you oversubscribed the node, then we dial down the performance to provide better cpu sharing. Another point: we don't bind processes by default while other MPIs do. Etc. 
&gt;
&gt;
&gt;So more info (like the mpirun command line you used, which version you used, how OMPI was configured, etc.) would help.
&gt;
&gt;
&gt;
&gt;
&gt;On Dec 27, 2011, at 6:35 AM, Eric Feng wrote:
&gt;
&gt;Can anyone help me?
&gt;&gt;I got similar performance issue when comparing to mvapich2 which is much faster in each MPI function in real application but similar in IMB benchmark.
&gt;&gt;
&gt;&gt;
&gt;&gt;
&gt;&gt;________________________________
&gt;&gt; From: Eric Feng &lt;hpc_benchmark_at_[hidden]&gt;
&gt;&gt;To: &quot;users_at_[hidden]&quot; &lt;users_at_[hidden]&gt; 
&gt;&gt;Sent: Friday, December 23, 2011 9:12 PM
&gt;&gt;Subject: [OMPI users] Openmpi performance issue
&gt;&gt; 
&gt;&gt;
&gt;&gt;Hello,&#194;&#160;
&gt;&gt;
&gt;&gt;
&gt;&gt;I am running into performance issue with Open MPI, I wish experts here can provide me some help,
&gt;&gt;
&gt;&gt;
&gt;&gt;I have one application calls a lot of sendrecv, and isend/irecv, so waitall. When I run Intel MPI, it is around 30% faster than OpenMPI.
&gt;&gt;However if i test sendrecv using IMB, OpenMPI is even faster than Intel MPI, but when run with real application, Open MPI is much slower than Intel MPI in all MPI functions by looking at profiling results. So this is not some function issue, it has a overall drawback somewhere. Can anyone give me some suggestions of where to tune to make it run faster with real application?
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18063/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18064.php">Ralph Castain: "Re: [OMPI users] Openmpi performance issue"</a>
<li><strong>Previous message:</strong> <a href="18062.php">Eugene Loh: "Re: [OMPI users] Openmpi performance issue"</a>
<li><strong>In reply to:</strong> <a href="18062.php">Eugene Loh: "Re: [OMPI users] Openmpi performance issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18064.php">Ralph Castain: "Re: [OMPI users] Openmpi performance issue"</a>
<li><strong>Reply:</strong> <a href="18064.php">Ralph Castain: "Re: [OMPI users] Openmpi performance issue"</a>
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
