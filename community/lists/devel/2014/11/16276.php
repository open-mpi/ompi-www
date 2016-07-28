<?
$subject_val = "Re: [OMPI devel] mpirun does not honor rankfile";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 10 15:35:30 2014" -->
<!-- isoreceived="20141110203530" -->
<!-- sent="Mon, 10 Nov 2014 20:35:26 +0000" -->
<!-- isosent="20141110203526" -->
<!-- name="Tom Wurgler" -->
<!-- email="twurgl_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] mpirun does not honor rankfile" -->
<!-- id="1415651726158.35504_at_goodyear.com" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="B1B965AA-0B93-40D5-A821-0011C6288186_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] mpirun does not honor rankfile<br>
<strong>From:</strong> Tom Wurgler (<em>twurgl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-10 15:35:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16277.php">Adrian Reber: "Re: [OMPI devel] 1.8.3 and PSM errors"</a>
<li><strong>Previous message:</strong> <a href="16275.php">Ralph Castain: "Re: [OMPI devel] mpirun does not honor rankfile"</a>
<li><strong>In reply to:</strong> <a href="16275.php">Ralph Castain: "Re: [OMPI devel] mpirun does not honor rankfile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16279.php">Ralph Castain: "Re: [OMPI devel] mpirun does not honor rankfile"</a>
<li><strong>Reply:</strong> <a href="16279.php">Ralph Castain: "Re: [OMPI devel] mpirun does not honor rankfile"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On all but the 2 machines with the newer bios (just the first socket):
<br>
<p>mach1:~ #  lstopo -p --of console
<br>
<p>&nbsp;&nbsp;NUMANode P#0 (12GB) + L3 (5118KB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 (512KB) + L1 (64KB) + Core P#0 + PU P#0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 (512KB) + L1 (64KB) + Core P#1 + PU P#4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 (512KB) + L1 (64KB) + Core P#2 + PU P#8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 (512KB) + L1 (64KB) + Core P#3 + PU P#12
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 (512KB) + L1 (64KB) + Core P#4 + PU P#16
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 (512KB) + L1 (64KB) + Core P#5 + PU P#20
<br>
&nbsp;&nbsp;&nbsp;&nbsp;NUMANode P#1 (12GB) + L3 (5118KB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 (512KB) + L1 (64KB) + Core P#0 + PU P#24
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 (512KB) + L1 (64KB) + Core P#1 + PU P#28
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 (512KB) + L1 (64KB) + Core P#2 + PU P#32
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 (512KB) + L1 (64KB) + Core P#3 + PU P#36
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 (512KB) + L1 (64KB) + Core P#4 + PU P#40
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 (512KB) + L1 (64KB) + Core P#5 + PU P#44
<br>
<p>mach1:~ #  lstopo -l --of console
<br>
&nbsp;&nbsp;&nbsp;&nbsp;NUMANode L#0 (P#0 12GB) + L3 L#0 (5118KB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#0 (512KB) + L1 L#0 (64KB) + Core L#0 + PU L#0 (P#0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#1 (512KB) + L1 L#1 (64KB) + Core L#1 + PU L#1 (P#4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#2 (512KB) + L1 L#2 (64KB) + Core L#2 + PU L#2 (P#8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#3 (512KB) + L1 L#3 (64KB) + Core L#3 + PU L#3 (P#12)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#4 (512KB) + L1 L#4 (64KB) + Core L#4 + PU L#4 (P#16)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#5 (512KB) + L1 L#5 (64KB) + Core L#5 + PU L#5 (P#20)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;NUMANode L#1 (P#1 12GB) + L3 L#1 (5118KB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#6 (512KB) + L1 L#6 (64KB) + Core L#6 + PU L#6 (P#24)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#7 (512KB) + L1 L#7 (64KB) + Core L#7 + PU L#7 (P#28)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#8 (512KB) + L1 L#8 (64KB) + Core L#8 + PU L#8 (P#32)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#9 (512KB) + L1 L#9 (64KB) + Core L#9 + PU L#9 (P#36)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#10 (512KB) + L1 L#10 (64KB) + Core L#10 + PU L#10 (P#40)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#11 (512KB) + L1 L#11 (64KB) + Core L#11 + PU L#11 (P#44)
<br>
<p><p>Now for the 2 with the bios update:
<br>
<p>mach2:~ #  lstopo -p --of console
<br>
&nbsp;&nbsp;&nbsp;&nbsp;NUMANode P#0 (12GB) + L3 (5118KB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 (512KB) + L1 (64KB) + Core P#0 + PU P#0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 (512KB) + L1 (64KB) + Core P#1 + PU P#1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 (512KB) + L1 (64KB) + Core P#2 + PU P#2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 (512KB) + L1 (64KB) + Core P#3 + PU P#3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 (512KB) + L1 (64KB) + Core P#4 + PU P#4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 (512KB) + L1 (64KB) + Core P#5 + PU P#5
<br>
&nbsp;&nbsp;&nbsp;&nbsp;NUMANode P#1 (12GB) + L3 (5118KB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 (512KB) + L1 (64KB) + Core P#0 + PU P#6
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 (512KB) + L1 (64KB) + Core P#1 + PU P#7
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 (512KB) + L1 (64KB) + Core P#2 + PU P#8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 (512KB) + L1 (64KB) + Core P#3 + PU P#9
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 (512KB) + L1 (64KB) + Core P#4 + PU P#10
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 (512KB) + L1 (64KB) + Core P#5 + PU P#11
<br>
<p><p>mach2:~ #  lstopo -l --of console
<br>
&nbsp;&nbsp;&nbsp;&nbsp;NUMANode L#0 (P#0 12GB) + L3 L#0 (5118KB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#0 (512KB) + L1 L#0 (64KB) + Core L#0 + PU L#0 (P#0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#1 (512KB) + L1 L#1 (64KB) + Core L#1 + PU L#1 (P#1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#2 (512KB) + L1 L#2 (64KB) + Core L#2 + PU L#2 (P#2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#3 (512KB) + L1 L#3 (64KB) + Core L#3 + PU L#3 (P#3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#4 (512KB) + L1 L#4 (64KB) + Core L#4 + PU L#4 (P#4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#5 (512KB) + L1 L#5 (64KB) + Core L#5 + PU L#5 (P#5)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;NUMANode L#1 (P#1 12GB) + L3 L#1 (5118KB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#6 (512KB) + L1 L#6 (64KB) + Core L#6 + PU L#6 (P#6)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#7 (512KB) + L1 L#7 (64KB) + Core L#7 + PU L#7 (P#7)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#8 (512KB) + L1 L#8 (64KB) + Core L#8 + PU L#8 (P#8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#9 (512KB) + L1 L#9 (64KB) + Core L#9 + PU L#9 (P#9)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#10 (512KB) + L1 L#10 (64KB) + Core L#10 + PU L#10 (P#10)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#11 (512KB) + L1 L#11 (64KB) + Core L#11 + PU L#11 (P#11)
<br>
<p>We do not use hyperthreading....
<br>
<p><p><p>________________________________
<br>
From: devel &lt;devel-bounces_at_[hidden]&gt; on behalf of Ralph Castain &lt;rhc_at_[hidden]&gt;
<br>
Sent: Monday, November 10, 2014 2:38 PM
<br>
To: Open MPI Developers
<br>
Subject: Re: [OMPI devel] mpirun does not honor rankfile
<br>
<p>So a key point here is that PU in lstopo output equates to hyperthread when hyperthreads are enabled, and those are always uniquely numbered. On my (admittedly puny by comparison) dual-socket Nehalem box, I get this for physical:
<br>
<p>$ lstopo -p --of console
<br>
Machine (16GB)
<br>
&nbsp;&nbsp;NUMANode P#0 (8127MB) + Socket P#0 + L3 (12MB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 (256KB) + L1d (32KB) + L1i (32KB) + Core P#0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU P#0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU P#12
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 (256KB) + L1d (32KB) + L1i (32KB) + Core P#1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU P#2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU P#14
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 (256KB) + L1d (32KB) + L1i (32KB) + Core P#2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU P#4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU P#16
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 (256KB) + L1d (32KB) + L1i (32KB) + Core P#8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU P#6
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU P#18
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 (256KB) + L1d (32KB) + L1i (32KB) + Core P#9
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU P#8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU P#20
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 (256KB) + L1d (32KB) + L1i (32KB) + Core P#10
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU P#10
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU P#22
<br>
&nbsp;&nbsp;NUMANode P#1 (8192MB) + Socket P#1 + L3 (12MB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 (256KB) + L1d (32KB) + L1i (32KB) + Core P#0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU P#1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU P#13
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 (256KB) + L1d (32KB) + L1i (32KB) + Core P#1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU P#3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU P#15
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 (256KB) + L1d (32KB) + L1i (32KB) + Core P#2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU P#5
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU P#17
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 (256KB) + L1d (32KB) + L1i (32KB) + Core P#8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU P#7
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU P#19
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 (256KB) + L1d (32KB) + L1i (32KB) + Core P#9
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU P#9
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU P#21
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 (256KB) + L1d (32KB) + L1i (32KB) + Core P#10
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU P#11
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU P#23
<br>
<p>Note that all the cores and hyperthreads are labeled with &#147;P&#148; because I added the -p option to request physical numbering. As you can see, the core numbering is done on a per-socket basis and are not unique.
<br>
<p>If I then ask for logical numbering:
<br>
<p>$ lstopo -l --of console
<br>
Machine (16GB)
<br>
&nbsp;&nbsp;NUMANode L#0 (P#0 8127MB) + Socket L#0 + L3 L#0 (12MB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 L#0 (256KB) + L1d L#0 (32KB) + L1i L#0 (32KB) + Core L#0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#0 (P#0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#1 (P#12)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 L#1 (256KB) + L1d L#1 (32KB) + L1i L#1 (32KB) + Core L#1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#2 (P#2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#3 (P#14)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 L#2 (256KB) + L1d L#2 (32KB) + L1i L#2 (32KB) + Core L#2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#4 (P#4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#5 (P#16)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 L#3 (256KB) + L1d L#3 (32KB) + L1i L#3 (32KB) + Core L#3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#6 (P#6)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#7 (P#18)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 L#4 (256KB) + L1d L#4 (32KB) + L1i L#4 (32KB) + Core L#4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#8 (P#8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#9 (P#20)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 L#5 (256KB) + L1d L#5 (32KB) + L1i L#5 (32KB) + Core L#5
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#10 (P#10)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#11 (P#22)
<br>
&nbsp;&nbsp;NUMANode L#1 (P#1 8192MB) + Socket L#1 + L3 L#1 (12MB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 L#6 (256KB) + L1d L#6 (32KB) + L1i L#6 (32KB) + Core L#6
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#12 (P#1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#13 (P#13)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 L#7 (256KB) + L1d L#7 (32KB) + L1i L#7 (32KB) + Core L#7
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#14 (P#3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#15 (P#15)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 L#8 (256KB) + L1d L#8 (32KB) + L1i L#8 (32KB) + Core L#8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#16 (P#5)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#17 (P#17)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 L#9 (256KB) + L1d L#9 (32KB) + L1i L#9 (32KB) + Core L#9
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#18 (P#7)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#19 (P#19)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 L#10 (256KB) + L1d L#10 (32KB) + L1i L#10 (32KB) + Core L#10
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#20 (P#9)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#21 (P#21)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 L#11 (256KB) + L1d L#11 (32KB) + L1i L#11 (32KB) + Core L#11
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#22 (P#11)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#23 (P#23)
<br>
<p>You see a unique logical number for every core, as you&#146;d expect.
<br>
<p>The problem is the core numbering, which is not unique for physical id&#146;s. You might compare your machines to mine using the same commands to see how it looks.
<br>
<p>The BIOS can indeed change the numbering pattern, so that might indeed be an issue.
<br>
<p><p>On Nov 10, 2014, at 11:27 AM, Tom Wurgler &lt;twurgl_at_[hidden]&lt;mailto:twurgl_at_[hidden]&gt;&gt; wrote:
<br>
<p>If we run
<br>
<span class="quotelev1">&gt; lstopo --output-format fig
</span><br>
we get a diagram of the socket/numa/core layouts and all but those 2 give &quot;PU P#0&quot;, PU P#4,
<br>
PU P#8....in the smallest box.  and in the lower left corner it says &quot;physical&quot;
<br>
<p>If we then add an option
<br>
<p><span class="quotelev1">&gt; lstopo --logical --output-format fig
</span><br>
we get PU L#0, PU L#1, PU L#2 ... and its says logical.
<br>
<p>On the 2 boxes with the newer bios, both --logical and default physical have the same NUMBERS, even though
<br>
one is PU L#  and the other is PU P#, and the numbers just go 0, 1,2,3....
<br>
<p>So is this a BIOS setting that is causing it to report one way on some and a different way on others?  And LSF takes what it gets?
<br>
<p>I am attempting to print the bios settings for each so I can compare them....
<br>
<p>For a given node, the numbers LSF gives are unique.
<br>
<p>________________________________
<br>
From: devel &lt;devel-bounces_at_[hidden]&lt;mailto:devel-bounces_at_[hidden]&gt;&gt; on behalf of Ralph Castain &lt;rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&gt;
<br>
Sent: Monday, November 10, 2014 2:09 PM
<br>
To: Open MPI Developers
<br>
Subject: Re: [OMPI devel] mpirun does not honor rankfile
<br>
<p>Hmmm&#133;.and those are, of course, intended to be physical core numbers. I wonder how they are numbering them? The OS index won&#146;t be unique, which is what is causing us trouble, so they must have some way of translating them to provide a unique number.
<br>
<p><p>On Nov 10, 2014, at 10:42 AM, Tom Wurgler &lt;twurgl_at_[hidden]&lt;mailto:twurgl_at_[hidden]&gt;&gt; wrote:
<br>
<p>LSF gives this, for example, over which we (LSF users) have no control.
<br>
<p>rank 0=mach1 slot=0
<br>
rank 1=mach1 slot=4
<br>
rank 2=mach1 slot=8
<br>
rank 3=mach1 slot=12
<br>
rank 4=mach1 slot=16
<br>
rank 5=mach1 slot=20
<br>
rank 6=mach1 slot=24
<br>
rank 7=mach1 slot=28
<br>
rank 8=mach1 slot=32
<br>
rank 9=mach1 slot=36
<br>
rank 10=mach1 slot=40
<br>
rank 11=mach1 slot=44
<br>
rank 12=mach1 slot=1
<br>
rank 13=mach1 slot=5
<br>
rank 14=mach1 slot=9
<br>
rank 15=mach1 slot=13
<br>
<p>I have also filed a service ticket with LSF to see if they can change to logical numbering etc.
<br>
<p>In the meantime we have written a translator, but this is cluster, actually node, specific and should not be called a solution.  Running lstopo on the whole cluster found 2 nodes giving logical numbering and the rest giving physical.
<br>
Which is interesting in itself.  We find those 2 nodes having a newer bios level. Still investigating this...
<br>
<p>thanks
<br>
tom
<br>
<p>Tom Wurgler
<br>
Application Systems Principal
<br>
The Goodyear Tire &amp; Rubber Company
<br>
200 Innovation Way, Akron, OH  44316
<br>
phone.330.796.1656
<br>
twurgl_at_[hidden]&lt;mailto:twurgl_at_[hidden]&gt;
<br>
<p><p><p><p><p>________________________________
<br>
From: devel &lt;devel-bounces_at_[hidden]&lt;mailto:devel-bounces_at_[hidden]&gt;&gt; on behalf of Ralph Castain &lt;rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&gt;
<br>
Sent: Monday, November 10, 2014 1:16 PM
<br>
To: Open MPI Developers
<br>
Subject: Re: [OMPI devel] mpirun does not honor rankfile
<br>
<p>I&#146;ve been taking a look at this, and I believe I can get something implemented shortly. However, one problem I&#146;ve encountered is that physical core indexes are NOT unique in many systems, e.g., x86 when hyperthreads are enabled. So you would have to specify socket:core in order to get a unique location. Alternatively, when hyperthreads are enabled, the physical hyperthread number is unique.
<br>
<p>My question, therefore, is whether or not this is going to work for you? I don&#146;t know what LSF is giving you - can you provide a socket:core, or a physical hyperthread number?
<br>
<p><p>On Nov 6, 2014, at 8:34 AM, Ralph Castain &lt;rhc.openmpi_at_[hidden]&lt;mailto:rhc.openmpi_at_[hidden]&gt;&gt; wrote:
<br>
<p>IIRC, you prefix the core number with a P to indicate physical
<br>
<p>I&#146;ll see what I can do about getting the physical notation re-implemented - just can&#146;t promise when that will happen
<br>
<p><p>On Nov 6, 2014, at 8:30 AM, Tom Wurgler &lt;twurgl_at_[hidden]&lt;mailto:twurgl_at_[hidden]&gt;&gt; wrote:
<br>
<p>Well, unless we can get LSF to use physical numbering, we are dead in the water without a translator of some sort.
<br>
<p>We are trying to figure how we can automate the translation in the meantime, but we have a mix of clusters and the mapping is different between them.
<br>
<p>We daily use 1.6.4 openmpi (vs all this current testing has been with 1.8.3).  In reading the 1.8.1 man page for mpirun, it states that
<br>
<p>&quot;Starting with Open MPI v1.7, all socket/core slot locations are be specified as logical indexes (the Open MPI v1.6 series used physical indexes).&quot;
<br>
<p>But testing using rankfiles with 1.6.4, it behaves like 1.8.3, ie using logical indexes.  Is there maybe a switch in 1.6.4 to use physical indexes?  I am not seeing it in the mpirun --help...
<br>
thanks
<br>
<p><p><p><p><p><p><p>________________________________
<br>
From: devel &lt;devel-bounces_at_[hidden]&lt;mailto:devel-bounces_at_[hidden]&gt;&gt; on behalf of Ralph Castain &lt;rhc.openmpi_at_[hidden]&lt;mailto:rhc.openmpi_at_[hidden]&gt;&gt;
<br>
Sent: Thursday, November 6, 2014 11:08 AM
<br>
To: Open MPI Developers
<br>
Subject: Re: [OMPI devel] mpirun does not honor rankfile
<br>
<p>Ugh&#133;.we used to have a switch for that purpose, but it became hard to manage the code. I could reimplement at some point, but it won&#146;t be in the immediate future.
<br>
<p>I gather the issue is that the system tools report physical numbering, and so you have to mentally translate to create the rankfile? Or is there an automated script you run to do the translation?
<br>
<p>In other words, is it possible to simplify the translation in the interim? Or is this a show-stopper for you?
<br>
<p><p>On Nov 6, 2014, at 7:21 AM, Tom Wurgler &lt;twurgl_at_[hidden]&lt;mailto:twurgl_at_[hidden]&gt;&gt; wrote:
<br>
<p>So we used lstopo with a arg of &quot;--logical&quot; and the output showed the core numbering 0,1,2,3...47 instead of
<br>
0,4,8,12 etc.
<br>
<p>The multiplying by 4 you speak of falls apart when you get to the second socket as its physical numbers are
<br>
1,5,9,13... and its logical is 12,13,14,15....
<br>
<p>So the question is can we get mpirun to honor the physical numbering?
<br>
<p>thanks!
<br>
tom
<br>
<p>________________________________
<br>
From: devel &lt;devel-bounces_at_[hidden]&lt;mailto:devel-bounces_at_[hidden]&gt;&gt; on behalf of Ralph Castain &lt;rhc.openmpi_at_[hidden]&lt;mailto:rhc.openmpi_at_[hidden]&gt;&gt;
<br>
Sent: Wednesday, November 5, 2014 6:30 PM
<br>
To: Open MPI Developers
<br>
Subject: Re: [OMPI devel] mpirun does not honor rankfile
<br>
<p>I suspect the issue may be with physical vs logical numbering. As I said, we use logical numbering in the rankfile, not physical. So I&#146;m not entirely sure how to translate the cpumask in your final table into the numbering shown in your rankfile listings. Is the cpumask showing a physical core number?
<br>
<p>I ask because it sure looks like the logical numbering we use is getting multiplied by 4 to become the cpumask you show. If they logically number their cores by socket (i.e., core 0 is first core in first socket, core 1 is first core in second socket, etc.), then that would explain the output.
<br>
<p><p>On Nov 5, 2014, at 2:23 PM, Tom Wurgler &lt;twurgl_at_[hidden]&lt;mailto:twurgl_at_[hidden]&gt;&gt; wrote:
<br>
<p>Well, further investigation found this:
<br>
<p>If I edit the rank file and change it like this:
<br>
<p>before:
<br>
rank 0=mach1 slot=0
<br>
rank 1=mach1 slot=4
<br>
rank 2=mach1 slot=8
<br>
rank 3=mach1 slot=12
<br>
rank 4=mach1 slot=16
<br>
rank 5=mach1 slot=20
<br>
rank 6=mach1 slot=24
<br>
rank 7=mach1 slot=28
<br>
rank 8=mach1 slot=32
<br>
rank 9=mach1 slot=36
<br>
rank 10=mach1 slot=40
<br>
rank 11=mach1 slot=44
<br>
rank 12=mach1 slot=1
<br>
rank 13=mach1 slot=5
<br>
rank 14=mach1 slot=9
<br>
rank 15=mach1 slot=13
<br>
<p>after:
<br>
rank 0=mach1 slot=0
<br>
rank 1=mach1 slot=1
<br>
rank 2=mach1 slot=2
<br>
rank 3=mach1 slot=3
<br>
rank 4=mach1 slot=4
<br>
rank 5=mach1 slot=5
<br>
rank 6=mach1 slot=6
<br>
rank 7=mach1 slot=7
<br>
rank 8=mach1 slot=8
<br>
rank 9=mach1 slot=9
<br>
rank 10=mach1 slot=10
<br>
rank 11=mach1 slot=11
<br>
rank 12=mach1 slot=12
<br>
rank 13=mach1 slot=13
<br>
rank 14=mach1 slot=14
<br>
rank 15=mach1 slot=15
<br>
<p>It does what I expect:
<br>
&nbsp;&nbsp;PID COMMAND         CPUMASK     TOTAL [     N0     N1     N2     N3     N4     N5     N6     N7 ]
<br>
12192 my_executable         0                   472.0M [ 472.0M     0      0      0      0      0      0      0  ]
<br>
12193 my_executable         4                   358.0M [ 358.0M     0      0      0      0      0      0      0  ]
<br>
12194 my_executable         8                   450.4M [ 450.4M     0      0      0      0      0      0      0  ]
<br>
12195 my_executable        12                  439.1M [ 439.1M     0      0      0      0      0      0      0  ]
<br>
12196 my_executable        16                  392.1M [ 392.1M     0      0      0      0      0      0      0  ]
<br>
12197 my_executable        20                  420.6M [ 420.6M     0      0      0      0      0      0      0  ]
<br>
12198 my_executable        24                  414.9M [     0  414.9M     0      0      0      0      0      0  ]
<br>
12199 my_executable        28                  388.9M [     0  388.9M     0      0      0      0      0      0  ]
<br>
12200 my_executable        32                  452.7M [     0  452.7M     0      0      0      0      0      0  ]
<br>
12201 my_executable        36                  438.9M [     0  438.9M     0      0      0      0      0      0  ]
<br>
12202 my_executable        40                  369.3M [     0  369.3M     0      0      0      0      0      0  ]
<br>
12203 my_executable        44                  440.5M [     0  440.5M     0      0      0      0      0      0  ]
<br>
12204 my_executable         1                   447.7M [     0      0  447.7M     0      0      0      0      0  ]
<br>
12205 my_executable         5                   367.1M [     0      0  367.1M     0      0      0      0      0  ]
<br>
12206 my_executable         9                   426.5M [     0      0  426.5M     0      0      0      0      0  ]
<br>
12207 my_executable        13                  414.2M [     0      0  414.2M     0      0      0      0      0  ]
<br>
<p>We use hwloc 1.4 to generate a layout of the cores etc.
<br>
<p>So either LSF created the wrong rankfile (via my config errors, most likely) or mpirun can't deal with that rankfile.
<br>
<p>I can try the nightly tarball as well.  The hardware is 48 core AMD:  4 sockets, 2 Numa nodes per socket with 6 cores each.
<br>
<p>thanks
<br>
tom
<br>
<p><p><p><p><p>________________________________
<br>
From: devel &lt;devel-bounces_at_[hidden]&lt;mailto:devel-bounces_at_[hidden]&gt;&gt; on behalf of Ralph Castain &lt;rhc.openmpi_at_[hidden]&lt;mailto:rhc.openmpi_at_[hidden]&gt;&gt;
<br>
Sent: Wednesday, November 5, 2014 4:27 PM
<br>
To: Open MPI Developers
<br>
Subject: Re: [OMPI devel] mpirun does not honor rankfile
<br>
<p>Hmmm&#133;well, it seems to be working fine in 1.8.4rc1 (I only have 12 cores on my humble machine). However, I can&#146;t test any interactions with LSF, though that shouldn&#146;t be an issue:
<br>
<p>$ mpirun -host bend001 -rf ./rankfile --report-bindings --display-devel-map hostname
<br>
&nbsp;Data for JOB [60677,1] offset 0
<br>
<p>&nbsp;Mapper requested: NULL  Last mapper: rank_file  Mapping policy: BYUSER  Ranking policy: SLOT
<br>
&nbsp;Binding policy: CPUSET  Cpu set: NULL  PPR: NULL  Cpus-per-rank: 1
<br>
&nbsp;&nbsp;Num new daemons: 0 New daemon starting vpid INVALID
<br>
&nbsp;&nbsp;Num nodes: 1
<br>
<p>&nbsp;Data for node: bend001      Launch id: -1 State: 2
<br>
&nbsp;&nbsp;Daemon: [[60677,0],0] Daemon launched: True
<br>
&nbsp;&nbsp;Num slots: 12 Slots in use: 12      Oversubscribed: FALSE
<br>
&nbsp;&nbsp;Num slots allocated: 12 Max slots: 0
<br>
&nbsp;&nbsp;Username on node: NULL
<br>
&nbsp;&nbsp;Num procs: 12 Next node_rank: 12
<br>
&nbsp;&nbsp;Data for proc: [[60677,1],0]
<br>
&nbsp;&nbsp;Pid: 0 Local rank: 0      Node rank: 0 App rank: 0
<br>
&nbsp;&nbsp;State: INITIALIZED Restarts: 0 App_context: 0 Locale: UNKNOWN      Bind location: (null)  Binding: 0,12
<br>
&nbsp;&nbsp;Data for proc: [[60677,1],1]
<br>
&nbsp;&nbsp;Pid: 0 Local rank: 1      Node rank: 1 App rank: 1
<br>
&nbsp;&nbsp;State: INITIALIZED Restarts: 0 App_context: 0 Locale: UNKNOWN      Bind location: (null)  Binding: 8,20
<br>
&nbsp;&nbsp;Data for proc: [[60677,1],2]
<br>
&nbsp;&nbsp;Pid: 0 Local rank: 2      Node rank: 2 App rank: 2
<br>
&nbsp;&nbsp;State: INITIALIZED Restarts: 0 App_context: 0 Locale: UNKNOWN      Bind location: (null)  Binding: 5,17
<br>
&nbsp;&nbsp;Data for proc: [[60677,1],3]
<br>
&nbsp;&nbsp;Pid: 0 Local rank: 3      Node rank: 3 App rank: 3
<br>
&nbsp;&nbsp;State: INITIALIZED Restarts: 0 App_context: 0 Locale: UNKNOWN      Bind location: (null)  Binding: 9,21
<br>
&nbsp;&nbsp;Data for proc: [[60677,1],4]
<br>
&nbsp;&nbsp;Pid: 0 Local rank: 4      Node rank: 4 App rank: 4
<br>
&nbsp;&nbsp;State: INITIALIZED Restarts: 0 App_context: 0 Locale: UNKNOWN      Bind location: (null)  Binding: 11,23
<br>
&nbsp;&nbsp;Data for proc: [[60677,1],5]
<br>
&nbsp;&nbsp;Pid: 0 Local rank: 5      Node rank: 5 App rank: 5
<br>
&nbsp;&nbsp;State: INITIALIZED Restarts: 0 App_context: 0 Locale: UNKNOWN      Bind location: (null)  Binding: 7,19
<br>
&nbsp;&nbsp;Data for proc: [[60677,1],6]
<br>
&nbsp;&nbsp;Pid: 0 Local rank: 6      Node rank: 6 App rank: 6
<br>
&nbsp;&nbsp;State: INITIALIZED Restarts: 0 App_context: 0 Locale: UNKNOWN      Bind location: (null)  Binding: 3,15
<br>
&nbsp;&nbsp;Data for proc: [[60677,1],7]
<br>
&nbsp;&nbsp;Pid: 0 Local rank: 7      Node rank: 7 App rank: 7
<br>
&nbsp;&nbsp;State: INITIALIZED Restarts: 0 App_context: 0 Locale: UNKNOWN      Bind location: (null)  Binding: 6,18
<br>
&nbsp;&nbsp;Data for proc: [[60677,1],8]
<br>
&nbsp;&nbsp;Pid: 0 Local rank: 8      Node rank: 8 App rank: 8
<br>
&nbsp;&nbsp;State: INITIALIZED Restarts: 0 App_context: 0 Locale: UNKNOWN      Bind location: (null)  Binding: 2,14
<br>
&nbsp;&nbsp;Data for proc: [[60677,1],9]
<br>
&nbsp;&nbsp;Pid: 0 Local rank: 9      Node rank: 9 App rank: 9
<br>
&nbsp;&nbsp;State: INITIALIZED Restarts: 0 App_context: 0 Locale: UNKNOWN      Bind location: (null)  Binding: 4,16
<br>
&nbsp;&nbsp;Data for proc: [[60677,1],10]
<br>
&nbsp;&nbsp;Pid: 0 Local rank: 10      Node rank: 10 App rank: 10
<br>
&nbsp;&nbsp;State: INITIALIZED Restarts: 0 App_context: 0 Locale: UNKNOWN      Bind location: (null)  Binding: 10,22
<br>
&nbsp;&nbsp;Data for proc: [[60677,1],11]
<br>
&nbsp;&nbsp;Pid: 0 Local rank: 11      Node rank: 11 App rank: 11
<br>
&nbsp;&nbsp;State: INITIALIZED Restarts: 0 App_context: 0 Locale: UNKNOWN      Bind location: (null)  Binding: 1,13
<br>
[bend001:24667] MCW rank 1 bound to socket 0[core 4[hwt 0-1]]: [../../../../BB/..][../../../../../..]
<br>
[bend001:24667] MCW rank 2 bound to socket 1[core 8[hwt 0-1]]: [../../../../../..][../../BB/../../..]
<br>
[bend001:24667] MCW rank 3 bound to socket 1[core 10[hwt 0-1]]: [../../../../../..][../../../../BB/..]
<br>
[bend001:24667] MCW rank 4 bound to socket 1[core 11[hwt 0-1]]: [../../../../../..][../../../../../BB]
<br>
[bend001:24667] MCW rank 5 bound to socket 1[core 9[hwt 0-1]]: [../../../../../..][../../../BB/../..]
<br>
[bend001:24667] MCW rank 6 bound to socket 1[core 7[hwt 0-1]]: [../../../../../..][../BB/../../../..]
<br>
[bend001:24667] MCW rank 7 bound to socket 0[core 3[hwt 0-1]]: [../../../BB/../..][../../../../../..]
<br>
[bend001:24667] MCW rank 8 bound to socket 0[core 1[hwt 0-1]]: [../BB/../../../..][../../../../../..]
<br>
[bend001:24667] MCW rank 9 bound to socket 0[core 2[hwt 0-1]]: [../../BB/../../..][../../../../../..]
<br>
[bend001:24667] MCW rank 10 bound to socket 0[core 5[hwt 0-1]]: [../../../../../BB][../../../../../..]
<br>
[bend001:24667] MCW rank 11 bound to socket 1[core 6[hwt 0-1]]: [../../../../../..][BB/../../../../..]
<br>
[bend001:24667] MCW rank 0 bound to socket 0[core 0[hwt 0-1]]: [BB/../../../../..][../../../../../..]
<br>
<p>Can you try with the latest nightly 1.8 tarball?
<br>
<p><a href="http://www.open-mpi.org/nightly/v1.8/">http://www.open-mpi.org/nightly/v1.8/</a>
<br>
<p>Note that it is also possible that hwloc isn&#146;t correctly identifying the cores here. Can you tell us something about the hardware? Do you have hardware threads enabled?
<br>
<p>I ask because the binding being reported by us is the cpu numbers as identified by hwloc - which may not be the same you are expecting from some hardware vendor&#146;s map. We are using logical processor assignments, not physical. You can use the &#151;report-bindings option to show the resulting map, as above.
<br>
<p><p><p>On Nov 5, 2014, at 7:21 AM, twurgl_at_[hidden]&lt;mailto:twurgl_at_[hidden]&gt; wrote:
<br>
<p>I am using openmpi v 1.8.3 and LSF 9.1.3.
<br>
<p>LSF creates a rankfile that looks like:
<br>
<p>RANK_FILE:
<br>
======================================================================
<br>
rank 0=mach1 slot=0
<br>
rank 1=mach1 slot=4
<br>
rank 2=mach1 slot=8
<br>
rank 3=mach1 slot=12
<br>
rank 4=mach1 slot=16
<br>
rank 5=mach1 slot=20
<br>
rank 6=mach1 slot=24
<br>
rank 7=mach1 slot=28
<br>
rank 8=mach1 slot=32
<br>
rank 9=mach1 slot=36
<br>
rank 10=mach1 slot=40
<br>
rank 11=mach1 slot=44
<br>
rank 12=mach1 slot=1
<br>
rank 13=mach1 slot=5
<br>
rank 14=mach1 slot=9
<br>
rank 15=mach1 slot=13
<br>
<p>which really are the cores I want to use, in order.
<br>
<p>I logon to this machine and type (all on one line):
<br>
<p>/apps/share/openmpi/1.8.3.I1217913/bin/mpirun \
<br>
&nbsp;--mca orte_base_help_aggregate 0 \
<br>
&nbsp;-v -display-devel-allocation \
<br>
&nbsp;-display-devel-map \
<br>
&nbsp;--rankfile RANK_FILE \
<br>
&nbsp;--mca btl openib,tcp,sm,self \
<br>
&nbsp;--x LD_LIBRARY_PATH \
<br>
&nbsp;--np 16 \
<br>
&nbsp;my_executable \
<br>
&nbsp;-i model.i \
<br>
&nbsp;-l model.o
<br>
<p>And I get the following on the screen:
<br>
<p>======================   ALLOCATED NODES   ======================
<br>
mach1: slots=16 max_slots=0 slots_inuse=0 state=UP
<br>
=================================================================
<br>
Data for JOB [52387,1] offset 0
<br>
<p>Mapper requested: NULL  Last mapper: rank_file  Mapping policy: BYUSER  Ranking policy: SLOT
<br>
Binding policy: CPUSET  Cpu set: NULL  PPR: NULL  Cpus-per-rank: 1
<br>
Num new daemons: 0 New daemon starting vpid INVALID
<br>
Num nodes: 1
<br>
<p>Data for node: mach1      Launch id: -1 State: 2
<br>
Daemon: [[52387,0],0] Daemon launched: True
<br>
Num slots: 16 Slots in use: 16      Oversubscribed: FALSE
<br>
Num slots allocated: 16 Max slots: 0
<br>
Username on node: NULL
<br>
Num procs: 16 Next node_rank: 16
<br>
Data for proc: [[52387,1],0]
<br>
Pid: 0 Local rank: 0      Node rank: 0 App rank: 0
<br>
State: INITIALIZED Restarts: 0 App_context: 0 Locale: UNKNOWN      Bind location: (null)  Binding: 0
<br>
Data for proc: [[52387,1],1]
<br>
Pid: 0 Local rank: 1      Node rank: 1 App rank: 1
<br>
State: INITIALIZED Restarts: 0 App_context: 0 Locale: UNKNOWN      Bind location: (null)  Binding: 16
<br>
Data for proc: [[52387,1],2]
<br>
Pid: 0 Local rank: 2      Node rank: 2 App rank: 2
<br>
State: INITIALIZED Restarts: 0 App_context: 0 Locale: UNKNOWN      Bind location: (null)  Binding: 32
<br>
Data for proc: [[52387,1],3]
<br>
Pid: 0 Local rank: 3      Node rank: 3 App rank: 3
<br>
State: INITIALIZED Restarts: 0 App_context: 0 Locale: UNKNOWN      Bind location: (null)  Binding: 1
<br>
Data for proc: [[52387,1],4]
<br>
Pid: 0 Local rank: 4      Node rank: 4 App rank: 4
<br>
State: INITIALIZED Restarts: 0 App_context: 0 Locale: UNKNOWN      Bind location: (null)  Binding: 17
<br>
Data for proc: [[52387,1],5]
<br>
Pid: 0 Local rank: 5      Node rank: 5 App rank: 5
<br>
State: INITIALIZED Restarts: 0 App_context: 0 Locale: UNKNOWN      Bind location: (null)  Binding: 33
<br>
Data for proc: [[52387,1],6]
<br>
Pid: 0 Local rank: 6      Node rank: 6 App rank: 6
<br>
State: INITIALIZED Restarts: 0 App_context: 0 Locale: UNKNOWN      Bind location: (null)  Binding: 2
<br>
Data for proc: [[52387,1],7]
<br>
Pid: 0 Local rank: 7      Node rank: 7 App rank: 7
<br>
State: INITIALIZED Restarts: 0 App_context: 0 Locale: UNKNOWN      Bind location: (null)  Binding: 18
<br>
Data for proc: [[52387,1],8]
<br>
Pid: 0 Local rank: 8      Node rank: 8 App rank: 8
<br>
State: INITIALIZED Restarts: 0 App_context: 0 Locale: UNKNOWN      Bind location: (null)  Binding: 34
<br>
Data for proc: [[52387,1],9]
<br>
Pid: 0 Local rank: 9      Node rank: 9 App rank: 9
<br>
State: INITIALIZED Restarts: 0 App_context: 0 Locale: UNKNOWN      Bind location: (null)  Binding: 3
<br>
Data for proc: [[52387,1],10]
<br>
Pid: 0 Local rank: 10      Node rank: 10 App rank: 10
<br>
State: INITIALIZED Restarts: 0 App_context: 0 Locale: UNKNOWN      Bind location: (null)  Binding: 19
<br>
Data for proc: [[52387,1],11]
<br>
Pid: 0 Local rank: 11      Node rank: 11 App rank: 11
<br>
State: INITIALIZED Restarts: 0 App_context: 0 Locale: UNKNOWN      Bind location: (null)  Binding: 35
<br>
Data for proc: [[52387,1],12]
<br>
Pid: 0 Local rank: 12      Node rank: 12 App rank: 12
<br>
State: INITIALIZED Restarts: 0 App_context: 0 Locale: UNKNOWN      Bind location: (null)  Binding: 4
<br>
Data for proc: [[52387,1],13]
<br>
Pid: 0 Local rank: 13      Node rank: 13 App rank: 13
<br>
State: INITIALIZED Restarts: 0 App_context: 0 Locale: UNKNOWN      Bind location: (null)  Binding: 20
<br>
Data for proc: [[52387,1],14]
<br>
Pid: 0 Local rank: 14      Node rank: 14 App rank: 14
<br>
State: INITIALIZED Restarts: 0 App_context: 0 Locale: UNKNOWN      Bind location: (null)  Binding: 36
<br>
Data for proc: [[52387,1],15]
<br>
Pid: 0 Local rank: 15      Node rank: 15 App rank: 15
<br>
State: INITIALIZED Restarts: 0 App_context: 0 Locale: UNKNOWN      Bind location: (null)  Binding: 5
<br>
<p>And a numa-map of the node shows:
<br>
<p>&nbsp;PID COMMAND         CPUMASK     TOTAL [     N0     N1     N2     N3     N4     N5     N6     N7 ]
<br>
31044 my_executable         0    443.3M [ 443.3M     0      0      0      0      0      0      0  ]
<br>
31045 my_executable        16    459.7M [ 459.7M     0      0      0      0      0      0      0  ]
<br>
31046 my_executable        32    435.0M [     0  435.0M     0      0      0      0      0      0  ]
<br>
31047 my_executable         1    468.8M [     0      0  468.8M     0      0      0      0      0  ]
<br>
31048 my_executable        17    493.2M [     0      0  493.2M     0      0      0      0      0  ]
<br>
31049 my_executable        33    498.0M [     0      0      0  498.0M     0      0      0      0  ]
<br>
31050 my_executable         2    501.2M [     0      0      0      0  501.2M     0      0      0  ]
<br>
31051 my_executable        18    502.4M [     0      0      0      0  502.4M     0      0      0  ]
<br>
31052 my_executable        34    500.5M [     0      0      0      0      0  500.5M     0      0  ]
<br>
31053 my_executable         3    515.6M [     0      0      0      0      0      0  515.6M     0  ]
<br>
31054 my_executable        19    508.1M [     0      0      0      0      0      0  508.1M     0  ]
<br>
31055 my_executable        35    503.9M [     0      0      0      0      0      0      0  503.9M ]
<br>
31056 my_executable         4    502.1M [ 502.1M     0      0      0      0      0      0      0  ]
<br>
31057 my_executable        20    515.2M [ 515.2M     0      0      0      0      0      0      0  ]
<br>
31058 my_executable        36    508.1M [     0  508.1M     0      0      0      0      0      0  ]
<br>
31059 my_executable         5    446.7M [     0      0  446.7M     0      0      0      0      0  ]
<br>
<pre>
--
Why didn't mpirun honor the ranfile and put the processes on the correct cores in
the proper order?  It looks to me like mpirun doesn't like the rankfile...??
Thanks for any help.
Tom
_______________________________________________
devel mailing list
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16199.php">http://www.open-mpi.org/community/lists/devel/2014/11/16199.php</a>
_______________________________________________
devel mailing list
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16221.php">http://www.open-mpi.org/community/lists/devel/2014/11/16221.php</a>
_______________________________________________
devel mailing list
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16229.php">http://www.open-mpi.org/community/lists/devel/2014/11/16229.php</a>
_______________________________________________
devel mailing list
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16233.php">http://www.open-mpi.org/community/lists/devel/2014/11/16233.php</a>
_______________________________________________
devel mailing list
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16272.php">http://www.open-mpi.org/community/lists/devel/2014/11/16272.php</a>
_______________________________________________
devel mailing list
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16274.php">http://www.open-mpi.org/community/lists/devel/2014/11/16274.php</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16276/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16277.php">Adrian Reber: "Re: [OMPI devel] 1.8.3 and PSM errors"</a>
<li><strong>Previous message:</strong> <a href="16275.php">Ralph Castain: "Re: [OMPI devel] mpirun does not honor rankfile"</a>
<li><strong>In reply to:</strong> <a href="16275.php">Ralph Castain: "Re: [OMPI devel] mpirun does not honor rankfile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16279.php">Ralph Castain: "Re: [OMPI devel] mpirun does not honor rankfile"</a>
<li><strong>Reply:</strong> <a href="16279.php">Ralph Castain: "Re: [OMPI devel] mpirun does not honor rankfile"</a>
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
