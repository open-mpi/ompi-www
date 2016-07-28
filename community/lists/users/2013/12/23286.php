<?
$subject_val = "Re: [OMPI users] &quot;-bind-to	numa&quot;	of	openmpi-1.7.4rc1	dosen't	work	for our	magny cours	based 32	core node";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 23 23:33:20 2013" -->
<!-- isoreceived="20131224043320" -->
<!-- sent="Tue, 24 Dec 2013 13:33:11 +0900" -->
<!-- isosent="20131224043311" -->
<!-- name="tmishima_at_[hidden]" -->
<!-- email="tmishima_at_[hidden]" -->
<!-- subject="Re: [OMPI users] &amp;quot;-bind-to	numa&amp;quot;	of	openmpi-1.7.4rc1	dosen't	work	for our	magny cours	based 32	core node" -->
<!-- id="OF5B9C860C.7570FB63-ON49257C4B.0018E0B5-49257C4B.0019055D_at_jcity.maeda.co.jp" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="DDC3CAB3-B2CC-4922-B93B-75EB6A1208A0_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] &quot;-bind-to	numa&quot;	of	openmpi-1.7.4rc1	dosen't	work	for our	magny cours	based 32	core node<br>
<strong>From:</strong> <a href="mailto:tmishima_at_[hidden]?Subject=Re:%20[OMPI%20users]%20&amp;amp;quot;-bind-to	numa&amp;amp;quot;	of	openmpi-1.7.4rc1	dosen't	work	for%20our	magny%20cours	based%2032	core%20node"><em>tmishima_at_[hidden]</em></a><br>
<strong>Date:</strong> 2013-12-23 23:33:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23287.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Segmentation fault on OMPI 1.6.5 built with gcc	4.4.7 and PGI pgfortran 11.10"</a>
<li><strong>Previous message:</strong> <a href="23285.php">Ralph Castain: "Re: [OMPI users] Segmentation fault on OMPI 1.6.5 built with gcc 4.4.7 and PGI pgfortran 11.10"</a>
<li><strong>In reply to:</strong> <a href="23282.php">Ralph Castain: "Re: [OMPI users] &quot;-bind-to	numa&quot;	of	openmpi-1.7.4rc1	dosen't	work	for our magny cours	based 32	core node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23289.php">tmishima_at_[hidden]: "Re: [OMPI users] &quot;-bind-to	numa&quot;	of	openmpi-1.7.4rc1	dosen't	work	for	our	magny cours	based 32	core node"</a>
<li><strong>Reply:</strong> <a href="23289.php">tmishima_at_[hidden]: "Re: [OMPI users] &quot;-bind-to	numa&quot;	of	openmpi-1.7.4rc1	dosen't	work	for	our	magny cours	based 32	core node"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p>Here is the output when I put &quot;-mca rmaps_base_verbose 10 --display-map&quot;
<br>
and where it stopped(by gdb), which shows it stopped in a function of lama.
<br>
<p>I usually use PGI 13.10, so I tried to change it to gnu compiler.
<br>
Then, it works. Therefore, this problem depends on compiler.
<br>
<p>That's all what I could find today.
<br>
<p>Regards,
<br>
Tetsuya Mishima
<br>
<p>[mishima_at_manage ~]$ gdb
<br>
GNU gdb (GDB) CentOS (7.0.1-42.el5.centos.1)
<br>
....
<br>
(gdb) attach 14666
<br>
....
<br>
0x00002aaaab4c5c33 in rmaps_lama_prune_max_tree ()
<br>
at ./rmaps_lama_max_tree.c:814
<br>
<p>[mishima_at_manage demos]$ mpirun -np 2 -mca rmaps lama -report-bindings -mca
<br>
rmaps_base_verbose 10 --display-map myprog
<br>
[manage.cluster:21503] mca: base: components_register: registering rmaps
<br>
components
<br>
[manage.cluster:21503] mca: base: components_register: found loaded
<br>
component lama
<br>
[manage.cluster:21503] mca:rmaps:lama: Priority   0
<br>
[manage.cluster:21503] mca:rmaps:lama: Map   : NULL
<br>
[manage.cluster:21503] mca:rmaps:lama: Bind  : NULL
<br>
[manage.cluster:21503] mca:rmaps:lama: MPPR  : NULL
<br>
[manage.cluster:21503] mca:rmaps:lama: Order : NULL
<br>
[manage.cluster:21503] mca: base: components_register: component lama
<br>
register function successful
<br>
[manage.cluster:21503] mca: base: components_open: opening rmaps components
<br>
[manage.cluster:21503] mca: base: components_open: found loaded component
<br>
lama
<br>
[manage.cluster:21503] mca:rmaps:select: checking available component lama
<br>
[manage.cluster:21503] mca:rmaps:select: Querying component [lama]
<br>
[manage.cluster:21503] [[23940,0],0]: Final mapper priorities
<br>
[manage.cluster:21503]  Mapper: lama Priority: 0
<br>
[manage.cluster:21503] mca:rmaps: mapping job [23940,1]
<br>
[manage.cluster:21503] mca:rmaps: creating new map for job [23940,1]
<br>
[manage.cluster:21503] mca:rmaps: nprocs 2
<br>
[manage.cluster:21503] mca:rmaps:lama: Mapping job [23940,1]
<br>
[manage.cluster:21503] mca:rmaps:lama: Revised Parameters -----
<br>
[manage.cluster:21503] mca:rmaps:lama: Map   : csbnh
<br>
[manage.cluster:21503] mca:rmaps:lama: Bind  : 1c
<br>
[manage.cluster:21503] mca:rmaps:lama: MPPR  : (null)
<br>
[manage.cluster:21503] mca:rmaps:lama: Order : s
<br>
[manage.cluster:21503] mca:rmaps:lama: ---------------------------------
<br>
[manage.cluster:21503] mca:rmaps:lama: ----- Binding  : [1c]
<br>
[manage.cluster:21503] mca:rmaps:lama: ----- Binding  :    1 x       Core
<br>
[manage.cluster:21503] mca:rmaps:lama: ---------------------------------
<br>
[manage.cluster:21503] mca:rmaps:lama: ----- Mapping  : [csbnh]
<br>
[manage.cluster:21503] mca:rmaps:lama: ----- Mapping  : (0)       Core (7
<br>
vs 0)
<br>
[manage.cluster:21503] mca:rmaps:lama: ----- Mapping  : (1)     Socket (3
<br>
vs 1)
<br>
[manage.cluster:21503] mca:rmaps:lama: ----- Mapping  : (2)      Board (1
<br>
vs 3)
<br>
[manage.cluster:21503] mca:rmaps:lama: ----- Mapping  : (3)    Machine (0
<br>
vs 7)
<br>
[manage.cluster:21503] mca:rmaps:lama: ----- Mapping  : (4) Hw. Thread (8
<br>
vs 8)
<br>
[manage.cluster:21503] mca:rmaps:lama: ---------------------------------
<br>
[manage.cluster:21503] mca:rmaps:lama: ----- MPPR     : [(null)]
<br>
[manage.cluster:21503] mca:rmaps:lama: ---------------------------------
<br>
[manage.cluster:21503] mca:rmaps:lama: ----- Ordering : [s]
<br>
[manage.cluster:21503] mca:rmaps:lama: ----- Ordering : Sequential
<br>
[manage.cluster:21503] mca:rmaps:lama: ---------------------------------
<br>
[manage.cluster:21503] AVAILABLE NODES FOR MAPPING:
<br>
[manage.cluster:21503]     node: manage daemon: 0
<br>
[manage.cluster:21503] mca:rmaps:lama: ---------------------------------
<br>
[manage.cluster:21503] mca:rmaps:lama: ----- Building the Max Tree...
<br>
[manage.cluster:21503] mca:rmaps:lama: ---------------------------------
<br>
[manage.cluster:21503] mca:rmaps:lama: ----- Converting Remote Tree: manage
<br>
<p>[mishima_at_manage demos]$ ompi_info | grep &quot;C compiler family&quot;
<br>
&nbsp;&nbsp;C compiler family name: GNU
<br>
[mishima_at_manage demos]$ mpirun -np 2 -mca rmaps lama myprog
<br>
Hello world from process 0 of 2
<br>
Hello world from process 1 of 2
<br>
<p><p><p><span class="quotelev1">&gt; On Dec 21, 2013, at 8:16 PM, tmishima_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Ralph, thanks. I'll try it on Tuseday.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Let me confirm one thing. I don't put &quot;-with-libevent&quot; when I build
</span><br>
<span class="quotelev2">&gt; &gt; openmpi.
</span><br>
<span class="quotelev2">&gt; &gt; Is there any possibility to build with external libevent automatically?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No - only happens if you direct it
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Tetsuya Mishima
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Not entirely sure - add &quot;-mca rmaps_base_verbose 10 --display-map&quot; to
</span><br>
<span class="quotelev2">&gt; &gt; your cmd line and let's see if it finishes the mapping.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Unless you specifically built with an external libevent (which I
</span><br>
doubt),
<br>
<span class="quotelev2">&gt; &gt; there is no conflict. The connection issue is unlikely to be a factor
</span><br>
here
<br>
<span class="quotelev2">&gt; &gt; as it works when not using the lama mapper.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Dec 21, 2013, at 3:43 PM, tmishima_at_[hidden] wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Thank you, Ralph.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Then, this problem should depend on our environment.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; But, at least, inversion problem is not the cause because
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; node05 has normal hier order.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I can not connect to our cluster now. Tuesday, going
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; back to my office, I'll send you further report.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Before that, please let me know your configuration. I will
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; follow your configuation as much as possible. Our configuraion
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; is very simple, only -with-tm -with-ibverbs -disable-ipv6.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; (on CentOS 5.8)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; The 1.7 series is a llite bit unstable on our cluster yet.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Similar freezing(hang up) was observed with 1.7.3. At that
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; time, lama worked well but putting &quot;-rank-by something&quot; caused
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; same freezing (curiously, rank-by works with 1.7.4rc1).
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I checked where it stopped using gdb, then I found that it
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; stopped to wait for event in a function of libevent(I can not
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; recall the name).
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Is this related to your &quot;connection issue in the OOB
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; subsystem&quot;? Or libevent version conflict? I guess these two
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; problems are related each other. They stopped at very early
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; stage before reaching mapping function because no message
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; appeared before freezing, which is my random guess.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Could you give me any hint or comment?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Tetsuya Mishima
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; It seems to be working fine for me:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [rhc_at_bend001 tcp]$ mpirun -np 2 -host bend001 -report-bindings -mca
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; rmaps_lama_bind 1c -mca rmaps lama hostname
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; bend001
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [bend001:17005] MCW rank 1 bound to socket 0[core 1[hwt 0-1]]:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [../BB/../../../..][../../../../../..]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [bend001:17005] MCW rank 0 bound to socket 0[core 0[hwt 0-1]]:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [BB/../../../../..][../../../../../..]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; bend001
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [rhc_at_bend001 tcp]$
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; (I also checked the internals using &quot;-mca rmaps_base_verbose 10&quot;) so
</span><br>
<span class="quotelev2">&gt; &gt; it
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; could be your hier inversion causing problems again. Or it could be
</span><br>
<span class="quotelev2">&gt; &gt; that
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; you are hitting a connection issue we are seeing in
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; some scenarios in the OOB subsystem - though if you are able to run
</span><br>
<span class="quotelev2">&gt; &gt; using
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; a non-lama mapper, that would seem unlikely.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; On Dec 20, 2013, at 8:09 PM, tmishima_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Thank you very much. I tried many things such as:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; mpirun -np 2 -host node05 -report-bindings -mca rmaps lama -mca
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; rmaps_lama_bind 1c myprog
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; But every try failed. At least they were accepted by openmpi-1.7.3
</span><br>
as
<br>
<span class="quotelev2">&gt; &gt; far
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; as I remember.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Anyway, please check it when you have a time, because using lama
</span><br>
comes
<br>
<span class="quotelev4">&gt; &gt;&gt;&gt; from
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; my curiosity.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Tetsuya Mishima
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; I'll try to take a look at it - my expectation is that lama might
</span><br>
get
<br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; stuck because you didn't tell it a pattern to map, and I doubt that
</span><br>
<span class="quotelev2">&gt; &gt; code
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; path has seen much testing.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; On Dec 20, 2013, at 5:52 PM, tmishima_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Hi Ralph, I'm glad to hear that, thanks.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; By the way, yesterday I tried to check how lama in 1.7.4rc treat
</span><br>
numa
<br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; node.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Then, even wiht this simple command line, it freezed without any
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; massage:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; mpirun -np 2 -host node05 -mca rmaps lama myprog
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Could you check what happened?
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Is it better to open new thread or continue this thread?
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Tetsuya Mishima
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; I'll make it work so that NUMA can be either above or below socket
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; On Dec 20, 2013, at 2:57 AM, tmishima_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Hi Brice,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Thank you for your comment. I understand what you mean.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; My opinion was made just considering easy way to adjust the code for
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; inversion of hierarchy in object tree.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Tetsuya Mishima
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; I don't think there's any such difference.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Also, all these NUMA architectures are reported the same by hwloc,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; and
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; therefore used the same in Open MPI.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; And yes, L3 and NUMA are topologically-identical on AMD Magny-Cours
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; (and
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; most recent AMD and Intel platforms).
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Brice
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Le 20/12/2013 11:33, tmishima_at_[hidden] a &#233;crit :
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; The numa-node in AMD Mangy-Cours/Interlagos is so called cc(cache
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; coherent)NUMA,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; which seems to be a little bit different from the traditional numa
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; defined
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; in openmpi.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; I notice that ccNUMA object is almost same as L3cache object.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; So &quot;-bind-to l3cache&quot; or &quot;-map-by l3cache&quot; is valid for what I want
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; to
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; do.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Therefore, &quot;do not touch it&quot; is one of the solution, I think ...
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Anyway, mixing up these two types of numa is the problem.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Tetsuya Mishima
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; I can wait it'll be fixed in 1.7.5 or later, because putting
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; &quot;-bind-to
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; numa&quot;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; and &quot;-map-by numa&quot; at the same time works as a workaround.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Tetsuya Mishima
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Yeah, it will impact everything that uses hwloc topology maps, I
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; fear.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; One side note: you'll need to add --hetero-nodes to your cmd
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; line.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; If
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; we
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; don't see that, we assume that all the node topologies are
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; identical
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; -
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; which clearly isn't true here.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; I'll try to resolve the hier inversion over the holiday - won't
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; be
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; for
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 1.7.4, but hopefully for 1.7.5
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; On Dec 18, 2013, at 9:44 PM, tmishima_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; I think it's normal for AMD opteron having 8/16 cores such as
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; magny cours or interlagos. Because it usually has 2 numa nodes
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; in a cpu(socket), numa-node can not include a socket. This type
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; of hierarchy would be natural.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; (node03 is Dell PowerEdge R815 and maybe quite common, I guess)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; By the way, I think this inversion should affect rmaps_lama
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; mapping.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Tetsuya Mishima
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Ick - yeah, that would be a problem. I haven't seen that type
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; of
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; hierarchical inversion before - is node03 a different type of
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; chip?
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Might take awhile for me to adjust the code to handle hier
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; inversion... :-(
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; On Dec 18, 2013, at 9:05 PM, tmishima_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; I found the reason. I attached the main part of output with 32
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; core node(node03) and 8 core node(node05) at the bottom.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; From this information, socket of node03 includes numa-node.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; On the other hand, numa-node of node05 includes socket.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; The direction of object tree is opposite.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Since &quot;-map-by socket&quot; may be assumed as default,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; for node05, &quot;-bind-to numa and -map-by socket&quot; means
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; upward search. For node03, this should be downward.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; I guess that openmpi-1.7.4rc1 will always assume numa-node
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; includes socket. Is it right? Then, upward search is assumed
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; in orte_rmaps_base_compute_bindings even for node03 when I
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; put &quot;-bind-to numa and -map-by socket&quot; option.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [node03.cluster:15508] [[38286,0],0] rmaps:base:compute_usage
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [node03.cluster:15508] mca:rmaps: compute bindings for job
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [38286,1]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; with
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; policy NUMA
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [node03.cluster:15508] mca:rmaps: bind upwards for job
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [38286,1]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; with
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; bindings NUMA
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [node03.cluster:15508] [[38286,0],0] bind:upward target
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; NUMANode
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; type
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Machine
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; That's the reason of this trouble. Therefore, adding &quot;-map-by
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; core&quot;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; works.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; (mapping pattern seems to be strange ...)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [mishima_at_node03 demos]$ mpirun -np 8 -bind-to numa -map-by
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; core
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; -report-bindings myprog
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [node03.cluster:15885] [[38679,0],0] bind:upward target
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; NUMANode
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; type
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Cache
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [node03.cluster:15885] [[38679,0],0] bind:upward target
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; NUMANode
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; type
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Cache
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [node03.cluster:15885] [[38679,0],0] bind:upward target
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; NUMANode
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; type
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Cache
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [node03.cluster:15885] [[38679,0],0] bind:upward target
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; NUMANode
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; type
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; NUMANode
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [node03.cluster:15885] [[38679,0],0] bind:upward target
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; NUMANode
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; type
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Cache
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [node03.cluster:15885] [[38679,0],0] bind:upward target
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; NUMANode
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; type
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Cache
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [node03.cluster:15885] [[38679,0],0] bind:upward target
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; NUMANode
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; type
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Cache
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [node03.cluster:15885] [[38679,0],0] bind:upward target
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; NUMANode
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; type
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; NUMANode
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [node03.cluster:15885] [[38679,0],0] bind:upward target
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; NUMANode
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; type
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Cache
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [node03.cluster:15885] [[38679,0],0] bind:upward target
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; NUMANode
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; type
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Cache
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [node03.cluster:15885] [[38679,0],0] bind:upward target
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; NUMANode
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; type
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Cache
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [node03.cluster:15885] [[38679,0],0] bind:upward target
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; NUMANode
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; type
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; NUMANode
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [node03.cluster:15885] [[38679,0],0] bind:upward target
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; NUMANode
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; type
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Cache
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [node03.cluster:15885] [[38679,0],0] bind:upward target
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; NUMANode
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; type
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Cache
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [node03.cluster:15885] [[38679,0],0] bind:upward target
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; NUMANode
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; type
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Cache
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [node03.cluster:15885] [[38679,0],0] bind:upward target
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; NUMANode
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; type
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; NUMANode
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [node03.cluster:15885] [[38679,0],0] bind:upward target
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; NUMANode
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; type
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Cache
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [node03.cluster:15885] [[38679,0],0] bind:upward target
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; NUMANode
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; type
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Cache
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [node03.cluster:15885] [[38679,0],0] bind:upward target
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; NUMANode
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; type
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Cache
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [node03.cluster:15885] [[38679,0],0] bind:upward target
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; NUMANode
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; type
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; NUMANode
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [node03.cluster:15885] [[38679,0],0] bind:upward target
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; NUMANode
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; type
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Cache
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [node03.cluster:15885] [[38679,0],0] bind:upward target
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; NUMANode
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; type
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Cache
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [node03.cluster:15885] [[38679,0],0] bind:upward target
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; NUMANode
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; type
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Cache
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [node03.cluster:15885] [[38679,0],0] bind:upward target
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; NUMANode
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; type
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; NUMANode
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [node03.cluster:15885] [[38679,0],0] bind:upward target
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; NUMANode
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; type
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Cache
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [node03.cluster:15885] [[38679,0],0] bind:upward target
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; NUMANode
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; type
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Cache
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [node03.cluster:15885] [[38679,0],0] bind:upward target
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; NUMANode
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; type
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Cache
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [node03.cluster:15885] [[38679,0],0] bind:upward target
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; NUMANode
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; type
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; NUMANode
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [node03.cluster:15885] [[38679,0],0] bind:upward target
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; NUMANode
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; type
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Cache
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [node03.cluster:15885] [[38679,0],0] bind:upward target
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; NUMANode
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; type
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Cache
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [node03.cluster:15885] [[38679,0],0] bind:upward target
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; NUMANode
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; type
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Cache
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [node03.cluster:15885] [[38679,0],0] bind:upward target
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; NUMANode
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; type
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; NUMANode
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [node03.cluster:15885] MCW rank 2 bound to socket 0[core 0[hwt
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 0]],
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; socket
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 0[core 1[hwt 0]], socket 0[core 2[hwt 0]], so
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; cket 0[core 3[hwt 0]]:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [B/B/B/B/./././.][./././././././.][./././././././.][./././././././.]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [node03.cluster:15885] MCW rank 3 bound to socket 0[core 0[hwt
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 0]],
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; socket
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 0[core 1[hwt 0]], socket 0[core 2[hwt 0]], so
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; cket 0[core 3[hwt 0]]:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [B/B/B/B/./././.][./././././././.][./././././././.][./././././././.]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [node03.cluster:15885] MCW rank 4 bound to socket 0[core 4[hwt
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 0]],
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; socket
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 0[core 5[hwt 0]], socket 0[core 6[hwt 0]], so
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; cket 0[core 7[hwt 0]]:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [././././B/B/B/B][./././././././.][./././././././.][./././././././.]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [node03.cluster:15885] MCW rank 5 bound to socket 0[core 4[hwt
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 0]],
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; socket
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 0[core 5[hwt 0]], socket 0[core 6[hwt 0]], so
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; cket 0[core 7[hwt 0]]:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [././././B/B/B/B][./././././././.][./././././././.][./././././././.]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [node03.cluster:15885] MCW rank 6 bound to socket 0[core 4[hwt
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 0]],
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; socket
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 0[core 5[hwt 0]], socket 0[core 6[hwt 0]], so
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; cket 0[core 7[hwt 0]]:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [././././B/B/B/B][./././././././.][./././././././.][./././././././.]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [node03.cluster:15885] MCW rank 7 bound to socket 0[core 4[hwt
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 0]],
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; socket
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 0[core 5[hwt 0]], socket 0[core 6[hwt 0]], so
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; cket 0[core 7[hwt 0]]:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [././././B/B/B/B][./././././././.][./././././././.][./././././././.]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [node03.cluster:15885] MCW rank 0 bound to socket 0[core 0[hwt
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 0]],
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; socket
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 0[core 1[hwt 0]], socket 0[core 2[hwt 0]], so
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; cket 0[core 3[hwt 0]]:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [B/B/B/B/./././.][./././././././.][./././././././.][./././././././.]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [node03.cluster:15885] MCW rank 1 bound to socket 0[core 0[hwt
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 0]],
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; socket
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 0[core 1[hwt 0]], socket 0[core 2[hwt 0]], so
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; cket 0[core 3[hwt 0]]:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [B/B/B/B/./././.][./././././././.][./././././././.][./././././././.]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Hello world from process 6 of 8
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Hello world from process 5 of 8
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Hello world from process 0 of 8
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Hello world from process 7 of 8
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Hello world from process 3 of 8
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Hello world from process 4 of 8
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Hello world from process 2 of 8
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Hello world from process 1 of 8
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Tetsuya Mishima
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [node03.cluster:15508] Type: Machine Number of child objects:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 4
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;   Name=NULL
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;   total=132358820KB
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;   Backend=Linux
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;   OSName=Linux
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;   OSRelease=2.6.18-308.16.1.el5
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;   OSVersion=&quot;#1 SMP Tue Oct 2 22:01:43 EDT 2012&quot;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;   Architecture=x86_64
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;   Cpuset:  0xffffffff
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;   Online:  0xffffffff
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;   Allowed: 0xffffffff
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;   Bind CPU proc:   TRUE
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;   Bind CPU thread: TRUE
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;   Bind MEM proc:   FALSE
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;   Bind MEM thread: TRUE
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;   Type: Socket Number of child objects: 2
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;           Name=NULL
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;           total=33071780KB
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;           CPUModel=&quot;AMD Opteron(tm) Processor 6136&quot;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;           Cpuset:  0x000000ff
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;           Online:  0x000000ff
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;           Allowed: 0x000000ff
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;           Type: NUMANode Number of child objects: 1
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [node05.cluster:21750] Type: Machine Number of child objects:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 2
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;   Name=NULL
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;   total=33080072KB
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;   Backend=Linux&gt;&gt;&gt;&gt;   OSName=Linux
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;   OSRelease=2.6.18-308.16.1.el5
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;   OSVersion=&quot;#1 SMP Tue Oct 2 22:01:43 EDT 2012&quot;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;   Architecture=x86_64
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;   Cpuset:  0x000000ff
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;   Online:  0x000000ff
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;   Allowed: 0x000000ff
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;   Bind CPU proc:   TRUE
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;   Bind CPU thread: TRUE
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;   Bind MEM proc:   FALSE
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;   Bind MEM thread: TRUE
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;   Type: NUMANode Number of child objects: 1
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;           Name=NULL
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;           local=16532232KB
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;           total=16532232KB
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;           Cpuset:  0x0000000f
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;           Online:  0x0000000f
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;           Allowed: 0x0000000f
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;           Type: Socket Number of child objects: 1
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Hmm...try adding &quot;-mca rmaps_base_verbose 10 -mca
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; ess_base_verbose
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 5&quot;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; to
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; your cmd line and let's see what it thinks it found.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; On Dec 18, 2013, at 6:55 PM, tmishima_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Hi, I report one more problem with openmpi-1.7.4rc1,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; which is more serious.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; For our 32 core nodes(AMD magny cours based) which has
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 8 numa-nodes, &quot;-bind-to numa&quot; does not work. Without
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; this option, it works. For your infomation, at the
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; bottom of this mail, I added the lstopo information
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; of the node.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Tetsuya Mishima
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [mishima_at_manage ~]$ qsub -I -l nodes=1:ppn=32&gt;&gt; qsub: waiting for
</span><br>
job
<br>
<span class="quotelev2">&gt; &gt; 8352.manage.cluster to start
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; qsub: job 8352.manage.cluster ready
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [mishima_at_node03 demos]$ mpirun -np 8 -report-bindings
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; -bind-to
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; numa
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; myprog
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [node03.cluster:15316] [[37582,0],0] bind:upward target
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; NUMANode
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; type
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Machine
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
--------------------------------------------------------------------------
<br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; A request was made to bind to NUMA, but an appropriate
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; target
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; could
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; not
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; be found on node node03.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
--------------------------------------------------------------------------
<br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [mishima_at_node03 ~]$ cd ~/Desktop/openmpi-1.7/demos/
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [mishima_at_node03 demos]$ mpirun -np 8 -report-bindings myprog
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [node03.cluster:15282] MCW rank 2 bound to socket 1[core 8
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [hwt
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 0]]:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [./././././././.][B/././././././.][./././././././.][
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; ./././././././.]&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node03.cluster:15282] MCW rank
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 3 bound to socket 1[core 9[hwt
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 0]]:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [./././././././.][./B/./././././.][./././././././.][
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; ./././././././.]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [node03.cluster:15282] MCW rank 4 bound to socket 2[core 16
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [hwt
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 0]]:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [./././././././.][./././././././.][B/././././././.]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [./././././././.]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [node03.cluster:15282] MCW rank 5 bound to socket 2[core 17
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [hwt
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 0]]:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [./././././././.][./././././././.][./B/./././././.]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [./././././././.]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [node03.cluster:15282] MCW rank 6 bound to socket 3[core 24
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [hwt
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 0]]:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [./././././././.][./././././././.][./././././././.]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [B/././././././.]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [node03.cluster:15282] MCW rank 7 bound to socket 3[core 25
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [hwt
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 0]]:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [./././././././.][./././././././.][./././././././.]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [./B/./././././.]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [node03.cluster:15282] MCW rank 0 bound to socket 0[core 0
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [hwt
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 0]]:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [B/././././././.][./././././././.][./././././././.][
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; ./././././././.]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [node03.cluster:15282] MCW rank 1 bound to socket 0[core 1
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [hwt
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 0]]:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [./B/./././././.][./././././././.][./././././././.][
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; ./././././././.]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Hello world from process 2 of 8
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Hello world from process 5 of 8
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Hello world from process 4 of 8
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Hello world from process 3 of 8&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hello world from
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; process 1 of 8
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Hello world from process 7 of 8
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Hello world from process 6 of 8
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Hello world from process 0 of 8
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [mishima_at_node03 demos]$ ~/opt/hwloc/bin/lstopo-no-graphics
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Machine (126GB)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Socket L#0 (32GB)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; NUMANode L#0 (P#0 16GB) + L3 L#0 (5118KB)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; L2 L#0 (512KB) + L1d L#0 (64KB) + L1i L#0 (64KB) + Core L#0
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; PU
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; L#0
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; (P#0)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; L2 L#1 (512KB) + L1d L#1 (64KB) + L1i L#1 (64KB) + Core L#1
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; PU
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; L#1
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; (P#1)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; L2 L#2 (512KB) + L1d L#2 (64KB) + L1i L#2 (64KB) + Core L#2
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; PU
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; L#2
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; (P#2)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; L2 L#3 (512KB) + L1d L#3 (64KB) + L1i L#3 (64KB) + Core L#3
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; PU
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; L#3
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; (P#3)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; NUMANode L#1 (P#1 16GB) + L3 L#1 (5118KB)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; L2 L#4 (512KB) + L1d L#4 (64KB) + L1i L#4 (64KB) + Core L#4
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; PU
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; L#4
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; (P#4)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; L2 L#5 (512KB) + L1d L#5 (64KB) + L1i L#5 (64KB) + Core L#5
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; PU
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; L#5
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; (P#5)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; L2 L#6 (512KB) + L1d L#6 (64KB) + L1i L#6 (64KB) + Core L#6
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; PU
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; L#6
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; (P#6)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; L2 L#7 (512KB) + L1d L#7 (64KB) + L1i L#7 (64KB) + Core L#7
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; PU&gt;&gt;&gt;&gt;&gt;&gt; L#7
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; (P#7)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Socket L#1 (32GB)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; NUMANode L#2 (P#6 16GB) + L3 L#2 (5118KB)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; L2 L#8 (512KB) + L1d L#8 (64KB) + L1i L#8 (64KB) + Core L#8
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; PU
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; L#8
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; (P#8)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; L2 L#9 (512KB) + L1d L#9 (64KB) + L1i L#9 (64KB) + Core L#9
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; PU
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; L#9
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; (P#9)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; L2 L#10 (512KB) + L1d L#10 (64KB) + L1i L#10 (64KB) + Core
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; L#10
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; PU
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; L#10 (P#10)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; L2 L#11 (512KB) + L1d L#11 (64KB) + L1i L#11 (64KB) + Core
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; L#11
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; PU
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; L#11 (P#11)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; NUMANode L#3 (P#7 16GB) + L3 L#3 (5118KB)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; L2 L#12 (512KB) + L1d L#12 (64KB) + L1i L#12 (64KB) + Core
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; L#12
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; PU
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; L#12 (P#12)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; L2 L#13 (512KB) + L1d L#13 (64KB) + L1i L#13 (64KB) + Core
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; L#13
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; PU
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; L#13 (P#13)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; L2 L#14 (512KB) + L1d L#14 (64KB) + L1i L#14 (64KB) + Core
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; L#14
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; PU
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; L#14 (P#14)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; L2 L#15 (512KB) + L1d L#15 (64KB) + L1i L#15 (64KB) + Core
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; L#15
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; PU
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; L#15 (P#15)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Socket L#2 (32GB)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; NUMANode L#4 (P#4 16GB) + L3 L#4 (5118KB)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; L2 L#16 (512KB) + L1d L#16 (64KB) + L1i L#16 (64KB) + Core
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; L#16
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; PU
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; L#16 (P#16)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; L2 L#17 (512KB) + L1d L#17 (64KB) + L1i L#17 (64KB) + Core
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; L#17
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; PU
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; L#17 (P#17)&gt; &gt;&gt;&gt;&gt;&gt;    L2 L#18 (512KB) + L1d L#18 (64KB) +
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; L1i
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; L#18 (64KB) + Core L#18
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; PU
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; L#18 (P#18)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; L2 L#19 (512KB) + L1d L#19 (64KB) + L1i L#19 (64KB) + Core
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; L#19
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; PU
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; L#19 (P#19)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; NUMANode L#5 (P#5 16GB) + L3 L#5 (5118KB)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; L2 L#20 (512KB) + L1d L#20 (64KB) + L1i L#20 (64KB) + Core
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; L#20
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; PU
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; L#20 (P#20)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; L2 L#21 (512KB) + L1d L#21 (64KB) + L1i L#21 (64KB) + Core
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; L#21
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; PU
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; L#21 (P#21)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; L2 L#22 (512KB) + L1d L#22 (64KB) + L1i L#22 (64KB) + Core
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; L#22
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; PU
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; L#22 (P#22)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; L2 L#23 (512KB) + L1d L#23 (64KB) + L1i L#23 (64KB) + Core
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; L#23
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; PU
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; L#23 (P#23)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Socket L#3 (32GB)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; NUMANode L#6 (P#2 16GB) + L3 L#6 (5118KB)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; L2 L#24 (512KB) + L1d L#24 (64KB) + L1i L#24 (64KB) + Core
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; L#24
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; PU
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; L#24 (P#24)&gt;&gt;&gt;&gt;&gt;    L2 L#25 (512KB) + L1d L#25 (64KB) + L1i
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; L#25
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; (64KB) + Core L#25 +
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; PU
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; L#25 (P#25)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; L2 L#26 (512KB) + L1d L#26 (64KB) + L1i L#26 (64KB) + Core
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; L#26
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; PU
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; L#26 (P#26)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; L2 L#27 (512KB) + L1d L#27 (64KB) + L1i L#27 (64KB) + Core
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; L#27
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; PU
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; L#27 (P#27)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; NUMANode L#7 (P#3 16GB) + L3 L#7 (5118KB)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; L2 L#28 (512KB) + L1d L#28 (64KB) + L1i L#28 (64KB) + Core
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; L#28
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; PU
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; L#28 (P#28)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; L2 L#29 (512KB) + L1d L#29 (64KB) + L1i L#29 (64KB) + Core
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; L#29
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; PU
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; L#29 (P#29)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; L2 L#30 (512KB) + L1d L#30 (64KB) + L1i L#30 (64KB) + Core
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; L#30
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; PU
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; L#30 (P#30)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; L2 L#31 (512KB) + L1d L#31 (64KB) + L1i L#31 (64KB) + Core
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; L#31
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; PU
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; L#31 (P#31)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; HostBridge L#0
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; PCIBridge
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; PCI 14e4:1639
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;  Net L#0 &quot;eth0&quot;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; PCI 14e4:1639
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;  Net L#1 &quot;eth1&quot;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; PCIBridge
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; PCI 14e4:1639
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;  Net L#2 &quot;eth2&quot;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; PCI 14e4:1639
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;  Net L#3 &quot;eth3&quot;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; PCIBridge
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; PCIBridge
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;  PCIBridge
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;    PCI 1000:0072
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;      Block L#4 &quot;sdb&quot;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;      Block L#5 &quot;sda&quot;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; PCI 1002:4390
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Block L#6 &quot;sr0&quot;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; PCIBridge
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; PCI 102b:0532
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; HostBridge L#7
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; PCIBridge
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; PCI 15b3:6274
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;  Net L#7 &quot;ib0&quot;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;  OpenFabrics L#8 &quot;mthca0&quot;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; users_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>_______________________________________________
<br>
<p><span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; users_at_[hidden]<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23287.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Segmentation fault on OMPI 1.6.5 built with gcc	4.4.7 and PGI pgfortran 11.10"</a>
<li><strong>Previous message:</strong> <a href="23285.php">Ralph Castain: "Re: [OMPI users] Segmentation fault on OMPI 1.6.5 built with gcc 4.4.7 and PGI pgfortran 11.10"</a>
<li><strong>In reply to:</strong> <a href="23282.php">Ralph Castain: "Re: [OMPI users] &quot;-bind-to	numa&quot;	of	openmpi-1.7.4rc1	dosen't	work	for our magny cours	based 32	core node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23289.php">tmishima_at_[hidden]: "Re: [OMPI users] &quot;-bind-to	numa&quot;	of	openmpi-1.7.4rc1	dosen't	work	for	our	magny cours	based 32	core node"</a>
<li><strong>Reply:</strong> <a href="23289.php">tmishima_at_[hidden]: "Re: [OMPI users] &quot;-bind-to	numa&quot;	of	openmpi-1.7.4rc1	dosen't	work	for	our	magny cours	based 32	core node"</a>
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
