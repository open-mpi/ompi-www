<?
$subject_val = "Re: [OMPI devel] mpirun does not honor rankfile";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 10 16:15:09 2014" -->
<!-- isoreceived="20141110211509" -->
<!-- sent="Mon, 10 Nov 2014 13:15:04 -0800" -->
<!-- isosent="20141110211504" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] mpirun does not honor rankfile" -->
<!-- id="D0A29D6D-EFCA-46E2-8B28-38F78466E22D_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="1415651726158.35504_at_goodyear.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-10 16:15:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16280.php">Adrian Reber: "Re: [OMPI devel] 1.8.3 and PSM errors"</a>
<li><strong>Previous message:</strong> <a href="16278.php">Friedley, Andrew: "Re: [OMPI devel] 1.8.3 and PSM errors"</a>
<li><strong>In reply to:</strong> <a href="16276.php">Tom Wurgler: "Re: [OMPI devel] mpirun does not honor rankfile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16281.php">Tom Wurgler: "Re: [OMPI devel] mpirun does not honor rankfile"</a>
<li><strong>Reply:</strong> <a href="16281.php">Tom Wurgler: "Re: [OMPI devel] mpirun does not honor rankfile"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Here&#146;s what I can do. It looks like LSF is providing PU numbers instead of core numbers, probably to get around the uniqueness issue. This works fine for me as I can just lookup the correct PU number and then bind you to the core that includes that PU. It means you have to provide the physical rankfile in PUs and not cores, but that shouldn&#146;t be an issue for you as that is what LSF is providing.
<br>
<p>I can have that for 1.8.4 if it would be of help.
<br>
<p>No idea what is going on with the second set of nodes - looks to me like the first set is giving you a number corresponding to the first hyperthread on that core, and the second set is just giving you a sequential core number.
<br>
<p><p><span class="quotelev1">&gt; On Nov 10, 2014, at 12:35 PM, Tom Wurgler &lt;twurgl_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On all but the 2 machines with the newer bios (just the first socket):
</span><br>
<span class="quotelev1">&gt; mach1:~ #  lstopo -p --of console
</span><br>
<span class="quotelev1">&gt;   NUMANode P#0 (12GB) + L3 (5118KB)
</span><br>
<span class="quotelev1">&gt;       L2 (512KB) + L1 (64KB) + Core P#0 + PU P#0
</span><br>
<span class="quotelev1">&gt;       L2 (512KB) + L1 (64KB) + Core P#1 + PU P#4
</span><br>
<span class="quotelev1">&gt;       L2 (512KB) + L1 (64KB) + Core P#2 + PU P#8
</span><br>
<span class="quotelev1">&gt;       L2 (512KB) + L1 (64KB) + Core P#3 + PU P#12
</span><br>
<span class="quotelev1">&gt;       L2 (512KB) + L1 (64KB) + Core P#4 + PU P#16
</span><br>
<span class="quotelev1">&gt;       L2 (512KB) + L1 (64KB) + Core P#5 + PU P#20
</span><br>
<span class="quotelev1">&gt;     NUMANode P#1 (12GB) + L3 (5118KB)
</span><br>
<span class="quotelev1">&gt;       L2 (512KB) + L1 (64KB) + Core P#0 + PU P#24
</span><br>
<span class="quotelev1">&gt;       L2 (512KB) + L1 (64KB) + Core P#1 + PU P#28
</span><br>
<span class="quotelev1">&gt;       L2 (512KB) + L1 (64KB) + Core P#2 + PU P#32
</span><br>
<span class="quotelev1">&gt;       L2 (512KB) + L1 (64KB) + Core P#3 + PU P#36
</span><br>
<span class="quotelev1">&gt;       L2 (512KB) + L1 (64KB) + Core P#4 + PU P#40
</span><br>
<span class="quotelev1">&gt;       L2 (512KB) + L1 (64KB) + Core P#5 + PU P#44
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mach1:~ #  lstopo -l --of console
</span><br>
<span class="quotelev1">&gt;     NUMANode L#0 (P#0 12GB) + L3 L#0 (5118KB)
</span><br>
<span class="quotelev1">&gt;       L2 L#0 (512KB) + L1 L#0 (64KB) + Core L#0 + PU L#0 (P#0)
</span><br>
<span class="quotelev1">&gt;       L2 L#1 (512KB) + L1 L#1 (64KB) + Core L#1 + PU L#1 (P#4)
</span><br>
<span class="quotelev1">&gt;       L2 L#2 (512KB) + L1 L#2 (64KB) + Core L#2 + PU L#2 (P#8)
</span><br>
<span class="quotelev1">&gt;       L2 L#3 (512KB) + L1 L#3 (64KB) + Core L#3 + PU L#3 (P#12)
</span><br>
<span class="quotelev1">&gt;       L2 L#4 (512KB) + L1 L#4 (64KB) + Core L#4 + PU L#4 (P#16)
</span><br>
<span class="quotelev1">&gt;       L2 L#5 (512KB) + L1 L#5 (64KB) + Core L#5 + PU L#5 (P#20)
</span><br>
<span class="quotelev1">&gt;     NUMANode L#1 (P#1 12GB) + L3 L#1 (5118KB)
</span><br>
<span class="quotelev1">&gt;       L2 L#6 (512KB) + L1 L#6 (64KB) + Core L#6 + PU L#6 (P#24)
</span><br>
<span class="quotelev1">&gt;       L2 L#7 (512KB) + L1 L#7 (64KB) + Core L#7 + PU L#7 (P#28)
</span><br>
<span class="quotelev1">&gt;       L2 L#8 (512KB) + L1 L#8 (64KB) + Core L#8 + PU L#8 (P#32)
</span><br>
<span class="quotelev1">&gt;       L2 L#9 (512KB) + L1 L#9 (64KB) + Core L#9 + PU L#9 (P#36)
</span><br>
<span class="quotelev1">&gt;       L2 L#10 (512KB) + L1 L#10 (64KB) + Core L#10 + PU L#10 (P#40)
</span><br>
<span class="quotelev1">&gt;       L2 L#11 (512KB) + L1 L#11 (64KB) + Core L#11 + PU L#11 (P#44)
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt; Now for the 2 with the bios update:
</span><br>
<span class="quotelev1">&gt; mach2:~ #  lstopo -p --of console
</span><br>
<span class="quotelev1">&gt;     NUMANode P#0 (12GB) + L3 (5118KB)
</span><br>
<span class="quotelev1">&gt;       L2 (512KB) + L1 (64KB) + Core P#0 + PU P#0
</span><br>
<span class="quotelev1">&gt;       L2 (512KB) + L1 (64KB) + Core P#1 + PU P#1
</span><br>
<span class="quotelev1">&gt;       L2 (512KB) + L1 (64KB) + Core P#2 + PU P#2
</span><br>
<span class="quotelev1">&gt;       L2 (512KB) + L1 (64KB) + Core P#3 + PU P#3
</span><br>
<span class="quotelev1">&gt;       L2 (512KB) + L1 (64KB) + Core P#4 + PU P#4
</span><br>
<span class="quotelev1">&gt;       L2 (512KB) + L1 (64KB) + Core P#5 + PU P#5
</span><br>
<span class="quotelev1">&gt;     NUMANode P#1 (12GB) + L3 (5118KB)
</span><br>
<span class="quotelev1">&gt;       L2 (512KB) + L1 (64KB) + Core P#0 + PU P#6
</span><br>
<span class="quotelev1">&gt;       L2 (512KB) + L1 (64KB) + Core P#1 + PU P#7
</span><br>
<span class="quotelev1">&gt;       L2 (512KB) + L1 (64KB) + Core P#2 + PU P#8
</span><br>
<span class="quotelev1">&gt;       L2 (512KB) + L1 (64KB) + Core P#3 + PU P#9
</span><br>
<span class="quotelev1">&gt;       L2 (512KB) + L1 (64KB) + Core P#4 + PU P#10
</span><br>
<span class="quotelev1">&gt;       L2 (512KB) + L1 (64KB) + Core P#5 + PU P#11
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt; mach2:~ #  lstopo -l --of console
</span><br>
<span class="quotelev1">&gt;     NUMANode L#0 (P#0 12GB) + L3 L#0 (5118KB)
</span><br>
<span class="quotelev1">&gt;       L2 L#0 (512KB) + L1 L#0 (64KB) + Core L#0 + PU L#0 (P#0)
</span><br>
<span class="quotelev1">&gt;       L2 L#1 (512KB) + L1 L#1 (64KB) + Core L#1 + PU L#1 (P#1)
</span><br>
<span class="quotelev1">&gt;       L2 L#2 (512KB) + L1 L#2 (64KB) + Core L#2 + PU L#2 (P#2)
</span><br>
<span class="quotelev1">&gt;       L2 L#3 (512KB) + L1 L#3 (64KB) + Core L#3 + PU L#3 (P#3)
</span><br>
<span class="quotelev1">&gt;       L2 L#4 (512KB) + L1 L#4 (64KB) + Core L#4 + PU L#4 (P#4)
</span><br>
<span class="quotelev1">&gt;       L2 L#5 (512KB) + L1 L#5 (64KB) + Core L#5 + PU L#5 (P#5)
</span><br>
<span class="quotelev1">&gt;     NUMANode L#1 (P#1 12GB) + L3 L#1 (5118KB)
</span><br>
<span class="quotelev1">&gt;       L2 L#6 (512KB) + L1 L#6 (64KB) + Core L#6 + PU L#6 (P#6)
</span><br>
<span class="quotelev1">&gt;       L2 L#7 (512KB) + L1 L#7 (64KB) + Core L#7 + PU L#7 (P#7)
</span><br>
<span class="quotelev1">&gt;       L2 L#8 (512KB) + L1 L#8 (64KB) + Core L#8 + PU L#8 (P#8)
</span><br>
<span class="quotelev1">&gt;       L2 L#9 (512KB) + L1 L#9 (64KB) + Core L#9 + PU L#9 (P#9)
</span><br>
<span class="quotelev1">&gt;       L2 L#10 (512KB) + L1 L#10 (64KB) + Core L#10 + PU L#10 (P#10)
</span><br>
<span class="quotelev1">&gt;       L2 L#11 (512KB) + L1 L#11 (64KB) + Core L#11 + PU L#11 (P#11)
</span><br>
<span class="quotelev1">&gt; We do not use hyperthreading....
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; From: devel &lt;devel-bounces_at_[hidden]&gt; on behalf of Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Sent: Monday, November 10, 2014 2:38 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] mpirun does not honor rankfile
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; So a key point here is that PU in lstopo output equates to hyperthread when hyperthreads are enabled, and those are always uniquely numbered. On my (admittedly puny by comparison) dual-socket Nehalem box, I get this for physical:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ lstopo -p --of console
</span><br>
<span class="quotelev1">&gt; Machine (16GB)
</span><br>
<span class="quotelev1">&gt;   NUMANode P#0 (8127MB) + Socket P#0 + L3 (12MB)
</span><br>
<span class="quotelev1">&gt;     L2 (256KB) + L1d (32KB) + L1i (32KB) + Core P#0
</span><br>
<span class="quotelev1">&gt;       PU P#0
</span><br>
<span class="quotelev1">&gt;       PU P#12
</span><br>
<span class="quotelev1">&gt;     L2 (256KB) + L1d (32KB) + L1i (32KB) + Core P#1
</span><br>
<span class="quotelev1">&gt;       PU P#2
</span><br>
<span class="quotelev1">&gt;       PU P#14
</span><br>
<span class="quotelev1">&gt;     L2 (256KB) + L1d (32KB) + L1i (32KB) + Core P#2
</span><br>
<span class="quotelev1">&gt;       PU P#4
</span><br>
<span class="quotelev1">&gt;       PU P#16
</span><br>
<span class="quotelev1">&gt;     L2 (256KB) + L1d (32KB) + L1i (32KB) + Core P#8
</span><br>
<span class="quotelev1">&gt;       PU P#6
</span><br>
<span class="quotelev1">&gt;       PU P#18
</span><br>
<span class="quotelev1">&gt;     L2 (256KB) + L1d (32KB) + L1i (32KB) + Core P#9
</span><br>
<span class="quotelev1">&gt;       PU P#8
</span><br>
<span class="quotelev1">&gt;       PU P#20
</span><br>
<span class="quotelev1">&gt;     L2 (256KB) + L1d (32KB) + L1i (32KB) + Core P#10
</span><br>
<span class="quotelev1">&gt;       PU P#10
</span><br>
<span class="quotelev1">&gt;       PU P#22
</span><br>
<span class="quotelev1">&gt;   NUMANode P#1 (8192MB) + Socket P#1 + L3 (12MB)
</span><br>
<span class="quotelev1">&gt;     L2 (256KB) + L1d (32KB) + L1i (32KB) + Core P#0
</span><br>
<span class="quotelev1">&gt;       PU P#1
</span><br>
<span class="quotelev1">&gt;       PU P#13
</span><br>
<span class="quotelev1">&gt;     L2 (256KB) + L1d (32KB) + L1i (32KB) + Core P#1
</span><br>
<span class="quotelev1">&gt;       PU P#3
</span><br>
<span class="quotelev1">&gt;       PU P#15
</span><br>
<span class="quotelev1">&gt;     L2 (256KB) + L1d (32KB) + L1i (32KB) + Core P#2
</span><br>
<span class="quotelev1">&gt;       PU P#5
</span><br>
<span class="quotelev1">&gt;       PU P#17
</span><br>
<span class="quotelev1">&gt;     L2 (256KB) + L1d (32KB) + L1i (32KB) + Core P#8
</span><br>
<span class="quotelev1">&gt;       PU P#7
</span><br>
<span class="quotelev1">&gt;       PU P#19
</span><br>
<span class="quotelev1">&gt;     L2 (256KB) + L1d (32KB) + L1i (32KB) + Core P#9
</span><br>
<span class="quotelev1">&gt;       PU P#9
</span><br>
<span class="quotelev1">&gt;       PU P#21
</span><br>
<span class="quotelev1">&gt;     L2 (256KB) + L1d (32KB) + L1i (32KB) + Core P#10
</span><br>
<span class="quotelev1">&gt;       PU P#11
</span><br>
<span class="quotelev1">&gt;       PU P#23
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Note that all the cores and hyperthreads are labeled with &#147;P&#148; because I added the -p option to request physical numbering. As you can see, the core numbering is done on a per-socket basis and are not unique.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I then ask for logical numbering:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ lstopo -l --of console
</span><br>
<span class="quotelev1">&gt; Machine (16GB)
</span><br>
<span class="quotelev1">&gt;   NUMANode L#0 (P#0 8127MB) + Socket L#0 + L3 L#0 (12MB)
</span><br>
<span class="quotelev1">&gt;     L2 L#0 (256KB) + L1d L#0 (32KB) + L1i L#0 (32KB) + Core L#0
</span><br>
<span class="quotelev1">&gt;       PU L#0 (P#0)
</span><br>
<span class="quotelev1">&gt;       PU L#1 (P#12)
</span><br>
<span class="quotelev1">&gt;     L2 L#1 (256KB) + L1d L#1 (32KB) + L1i L#1 (32KB) + Core L#1
</span><br>
<span class="quotelev1">&gt;       PU L#2 (P#2)
</span><br>
<span class="quotelev1">&gt;       PU L#3 (P#14)
</span><br>
<span class="quotelev1">&gt;     L2 L#2 (256KB) + L1d L#2 (32KB) + L1i L#2 (32KB) + Core L#2
</span><br>
<span class="quotelev1">&gt;       PU L#4 (P#4)
</span><br>
<span class="quotelev1">&gt;       PU L#5 (P#16)
</span><br>
<span class="quotelev1">&gt;     L2 L#3 (256KB) + L1d L#3 (32KB) + L1i L#3 (32KB) + Core L#3
</span><br>
<span class="quotelev1">&gt;       PU L#6 (P#6)
</span><br>
<span class="quotelev1">&gt;       PU L#7 (P#18)
</span><br>
<span class="quotelev1">&gt;     L2 L#4 (256KB) + L1d L#4 (32KB) + L1i L#4 (32KB) + Core L#4
</span><br>
<span class="quotelev1">&gt;       PU L#8 (P#8)
</span><br>
<span class="quotelev1">&gt;       PU L#9 (P#20)
</span><br>
<span class="quotelev1">&gt;     L2 L#5 (256KB) + L1d L#5 (32KB) + L1i L#5 (32KB) + Core L#5
</span><br>
<span class="quotelev1">&gt;       PU L#10 (P#10)
</span><br>
<span class="quotelev1">&gt;       PU L#11 (P#22)
</span><br>
<span class="quotelev1">&gt;   NUMANode L#1 (P#1 8192MB) + Socket L#1 + L3 L#1 (12MB)
</span><br>
<span class="quotelev1">&gt;     L2 L#6 (256KB) + L1d L#6 (32KB) + L1i L#6 (32KB) + Core L#6
</span><br>
<span class="quotelev1">&gt;       PU L#12 (P#1)
</span><br>
<span class="quotelev1">&gt;       PU L#13 (P#13)
</span><br>
<span class="quotelev1">&gt;     L2 L#7 (256KB) + L1d L#7 (32KB) + L1i L#7 (32KB) + Core L#7
</span><br>
<span class="quotelev1">&gt;       PU L#14 (P#3)
</span><br>
<span class="quotelev1">&gt;       PU L#15 (P#15)
</span><br>
<span class="quotelev1">&gt;     L2 L#8 (256KB) + L1d L#8 (32KB) + L1i L#8 (32KB) + Core L#8
</span><br>
<span class="quotelev1">&gt;       PU L#16 (P#5)
</span><br>
<span class="quotelev1">&gt;       PU L#17 (P#17)
</span><br>
<span class="quotelev1">&gt;     L2 L#9 (256KB) + L1d L#9 (32KB) + L1i L#9 (32KB) + Core L#9
</span><br>
<span class="quotelev1">&gt;       PU L#18 (P#7)
</span><br>
<span class="quotelev1">&gt;       PU L#19 (P#19)
</span><br>
<span class="quotelev1">&gt;     L2 L#10 (256KB) + L1d L#10 (32KB) + L1i L#10 (32KB) + Core L#10
</span><br>
<span class="quotelev1">&gt;       PU L#20 (P#9)
</span><br>
<span class="quotelev1">&gt;       PU L#21 (P#21)
</span><br>
<span class="quotelev1">&gt;     L2 L#11 (256KB) + L1d L#11 (32KB) + L1i L#11 (32KB) + Core L#11
</span><br>
<span class="quotelev1">&gt;       PU L#22 (P#11)
</span><br>
<span class="quotelev1">&gt;       PU L#23 (P#23)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You see a unique logical number for every core, as you&#146;d expect.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The problem is the core numbering, which is not unique for physical id&#146;s. You might compare your machines to mine using the same commands to see how it looks.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The BIOS can indeed change the numbering pattern, so that might indeed be an issue.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 10, 2014, at 11:27 AM, Tom Wurgler &lt;twurgl_at_[hidden] &lt;mailto:twurgl_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If we run 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; lstopo --output-format fig 
</span><br>
<span class="quotelev2">&gt;&gt; we get a diagram of the socket/numa/core layouts and all but those 2 give &quot;PU P#0&quot;, PU P#4,
</span><br>
<span class="quotelev2">&gt;&gt; PU P#8....in the smallest box.  and in the lower left corner it says &quot;physical&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If we then add an option
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; lstopo --logical --output-format fig
</span><br>
<span class="quotelev2">&gt;&gt; we get PU L#0, PU L#1, PU L#2 ... and its says logical.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On the 2 boxes with the newer bios, both --logical and default physical have the same NUMBERS, even though
</span><br>
<span class="quotelev2">&gt;&gt; one is PU L#  and the other is PU P#, and the numbers just go 0, 1,2,3....
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; So is this a BIOS setting that is causing it to report one way on some and a different way on others?  And LSF takes what it gets?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I am attempting to print the bios settings for each so I can compare them....
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; For a given node, the numbers LSF gives are unique.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; From: devel &lt;devel-bounces_at_[hidden] &lt;mailto:devel-bounces_at_[hidden]&gt;&gt; on behalf of Ralph Castain &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Monday, November 10, 2014 2:09 PM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Developers
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI devel] mpirun does not honor rankfile
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; Hmmm&#133;.and those are, of course, intended to be physical core numbers. I wonder how they are numbering them? The OS index won&#146;t be unique, which is what is causing us trouble, so they must have some way of translating them to provide a unique number.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Nov 10, 2014, at 10:42 AM, Tom Wurgler &lt;twurgl_at_[hidden] &lt;mailto:twurgl_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; LSF gives this, for example, over which we (LSF users) have no control.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rank 0=mach1 slot=0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rank 1=mach1 slot=4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rank 2=mach1 slot=8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rank 3=mach1 slot=12
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rank 4=mach1 slot=16
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rank 5=mach1 slot=20
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rank 6=mach1 slot=24
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rank 7=mach1 slot=28
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rank 8=mach1 slot=32
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rank 9=mach1 slot=36
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rank 10=mach1 slot=40
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rank 11=mach1 slot=44
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rank 12=mach1 slot=1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rank 13=mach1 slot=5
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rank 14=mach1 slot=9
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rank 15=mach1 slot=13
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have also filed a service ticket with LSF to see if they can change to logical numbering etc.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In the meantime we have written a translator, but this is cluster, actually node, specific and should not be called a solution.  Running lstopo on the whole cluster found 2 nodes giving logical numbering and the rest giving physical.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Which is interesting in itself.  We find those 2 nodes having a newer bios level. Still investigating this...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; thanks
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tom
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Tom Wurgler
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Application Systems Principal
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The Goodyear Tire &amp; Rubber Company
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 200 Innovation Way, Akron, OH  44316
</span><br>
<span class="quotelev3">&gt;&gt;&gt; phone.330.796.1656
</span><br>
<span class="quotelev3">&gt;&gt;&gt; twurgl_at_[hidden] &lt;mailto:twurgl_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: devel &lt;devel-bounces_at_[hidden] &lt;mailto:devel-bounces_at_[hidden]&gt;&gt; on behalf of Ralph Castain &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sent: Monday, November 10, 2014 1:16 PM
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: Open MPI Developers
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: Re: [OMPI devel] mpirun does not honor rankfile
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I&#146;ve been taking a look at this, and I believe I can get something implemented shortly. However, one problem I&#146;ve encountered is that physical core indexes are NOT unique in many systems, e.g., x86 when hyperthreads are enabled. So you would have to specify socket:core in order to get a unique location. Alternatively, when hyperthreads are enabled, the physical hyperthread number is unique.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; My question, therefore, is whether or not this is going to work for you? I don&#146;t know what LSF is giving you - can you provide a socket:core, or a physical hyperthread number?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Nov 6, 2014, at 8:34 AM, Ralph Castain &lt;rhc.openmpi_at_[hidden] &lt;mailto:rhc.openmpi_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; IIRC, you prefix the core number with a P to indicate physical
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I&#146;ll see what I can do about getting the physical notation re-implemented - just can&#146;t promise when that will happen
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Nov 6, 2014, at 8:30 AM, Tom Wurgler &lt;twurgl_at_[hidden] &lt;mailto:twurgl_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Well, unless we can get LSF to use physical numbering, we are dead in the water without a translator of some sort.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; We are trying to figure how we can automate the translation in the meantime, but we have a mix of clusters and the mapping is different between them.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; We daily use 1.6.4 openmpi (vs all this current testing has been with 1.8.3).  In reading the 1.8.1 man page for mpirun, it states that
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &quot;Starting with Open MPI v1.7, all socket/core slot locations are be specified as logical indexes (the Open MPI v1.6 series used physical indexes).&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; But testing using rankfiles with 1.6.4, it behaves like 1.8.3, ie using logical indexes.  Is there maybe a switch in 1.6.4 to use physical indexes?  I am not seeing it in the mpirun --help...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; thanks
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; From: devel &lt;devel-bounces_at_[hidden] &lt;mailto:devel-bounces_at_[hidden]&gt;&gt; on behalf of Ralph Castain &lt;rhc.openmpi_at_[hidden] &lt;mailto:rhc.openmpi_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Sent: Thursday, November 6, 2014 11:08 AM
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; To: Open MPI Developers
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subject: Re: [OMPI devel] mpirun does not honor rankfile
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Ugh&#133;.we used to have a switch for that purpose, but it became hard to manage the code. I could reimplement at some point, but it won&#146;t be in the immediate future.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I gather the issue is that the system tools report physical numbering, and so you have to mentally translate to create the rankfile? Or is there an automated script you run to do the translation?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; In other words, is it possible to simplify the translation in the interim? Or is this a show-stopper for you?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Nov 6, 2014, at 7:21 AM, Tom Wurgler &lt;twurgl_at_[hidden] &lt;mailto:twurgl_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; So we used lstopo with a arg of &quot;--logical&quot; and the output showed the core numbering 0,1,2,3...47 instead of
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 0,4,8,12 etc.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; The multiplying by 4 you speak of falls apart when you get to the second socket as its physical numbers are
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 1,5,9,13... and its logical is 12,13,14,15....
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; So the question is can we get mpirun to honor the physical numbering?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; thanks!
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; tom
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; From: devel &lt;devel-bounces_at_[hidden] &lt;mailto:devel-bounces_at_[hidden]&gt;&gt; on behalf of Ralph Castain &lt;rhc.openmpi_at_[hidden] &lt;mailto:rhc.openmpi_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Sent: Wednesday, November 5, 2014 6:30 PM
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; To: Open MPI Developers
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Subject: Re: [OMPI devel] mpirun does not honor rankfile
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I suspect the issue may be with physical vs logical numbering. As I said, we use logical numbering in the rankfile, not physical. So I&#146;m not entirely sure how to translate the cpumask in your final table into the numbering shown in your rankfile listings. Is the cpumask showing a physical core number?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I ask because it sure looks like the logical numbering we use is getting multiplied by 4 to become the cpumask you show. If they logically number their cores by socket (i.e., core 0 is first core in first socket, core 1 is first core in second socket, etc.), then that would explain the output.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Nov 5, 2014, at 2:23 PM, Tom Wurgler &lt;twurgl_at_[hidden] &lt;mailto:twurgl_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Well, further investigation found this:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; If I edit the rank file and change it like this:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; before:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; rank 0=mach1 slot=0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; rank 1=mach1 slot=4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; rank 2=mach1 slot=8
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; rank 3=mach1 slot=12
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; rank 4=mach1 slot=16
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; rank 5=mach1 slot=20
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; rank 6=mach1 slot=24
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; rank 7=mach1 slot=28
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; rank 8=mach1 slot=32
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; rank 9=mach1 slot=36
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; rank 10=mach1 slot=40
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; rank 11=mach1 slot=44
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; rank 12=mach1 slot=1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; rank 13=mach1 slot=5
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; rank 14=mach1 slot=9
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; rank 15=mach1 slot=13
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; after:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; rank 0=mach1 slot=0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; rank 1=mach1 slot=1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; rank 2=mach1 slot=2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; rank 3=mach1 slot=3
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; rank 4=mach1 slot=4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; rank 5=mach1 slot=5
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; rank 6=mach1 slot=6
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; rank 7=mach1 slot=7
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; rank 8=mach1 slot=8
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; rank 9=mach1 slot=9
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; rank 10=mach1 slot=10
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; rank 11=mach1 slot=11
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; rank 12=mach1 slot=12
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; rank 13=mach1 slot=13
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; rank 14=mach1 slot=14
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; rank 15=mach1 slot=15
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; It does what I expect:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   PID COMMAND         CPUMASK     TOTAL [     N0     N1     N2     N3     N4     N5     N6     N7 ]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 12192 my_executable         0                   472.0M [ 472.0M     0      0      0      0      0      0      0  ]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 12193 my_executable         4                   358.0M [ 358.0M     0      0      0      0      0      0      0  ]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 12194 my_executable         8                   450.4M [ 450.4M     0      0      0      0      0      0      0  ]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 12195 my_executable        12                  439.1M [ 439.1M     0      0      0      0      0      0      0  ]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 12196 my_executable        16                  392.1M [ 392.1M     0      0      0      0      0      0      0  ]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 12197 my_executable        20                  420.6M [ 420.6M     0      0      0      0      0      0      0  ]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 12198 my_executable        24                  414.9M [     0  414.9M     0      0      0      0      0      0  ]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 12199 my_executable        28                  388.9M [     0  388.9M     0      0      0      0      0      0  ]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 12200 my_executable        32                  452.7M [     0  452.7M     0      0      0      0      0      0  ]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 12201 my_executable        36                  438.9M [     0  438.9M     0      0      0      0      0      0  ]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 12202 my_executable        40                  369.3M [     0  369.3M     0      0      0      0      0      0  ]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 12203 my_executable        44                  440.5M [     0  440.5M     0      0      0      0      0      0  ]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 12204 my_executable         1                   447.7M [     0      0  447.7M     0      0      0      0      0  ]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 12205 my_executable         5                   367.1M [     0      0  367.1M     0      0      0      0      0  ]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 12206 my_executable         9                   426.5M [     0      0  426.5M     0      0      0      0      0  ]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 12207 my_executable        13                  414.2M [     0      0  414.2M     0      0      0      0      0  ]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; We use hwloc 1.4 to generate a layout of the cores etc.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; So either LSF created the wrong rankfile (via my config errors, most likely) or mpirun can't deal with that rankfile.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I can try the nightly tarball as well.  The hardware is 48 core AMD:  4 sockets, 2 Numa nodes per socket with 6 cores each.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; thanks
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; tom 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; From: devel &lt;devel-bounces_at_[hidden] &lt;mailto:devel-bounces_at_[hidden]&gt;&gt; on behalf of Ralph Castain &lt;rhc.openmpi_at_[hidden] &lt;mailto:rhc.openmpi_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Sent: Wednesday, November 5, 2014 4:27 PM
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; To: Open MPI Developers
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Subject: Re: [OMPI devel] mpirun does not honor rankfile
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hmmm&#133;well, it seems to be working fine in 1.8.4rc1 (I only have 12 cores on my humble machine). However, I can&#146;t test any interactions with LSF, though that shouldn&#146;t be an issue:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; $ mpirun -host bend001 -rf ./rankfile --report-bindings --display-devel-map hostname
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;  Data for JOB [60677,1] offset 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;  Mapper requested: NULL  Last mapper: rank_file  Mapping policy: BYUSER  Ranking policy: SLOT
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;  Binding policy: CPUSET  Cpu set: NULL  PPR: NULL  Cpus-per-rank: 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   Num new daemons: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; New daemon starting vpid INVALID
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   Num nodes: 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;  Data for node: bend001       Launch id: -1 State: 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   Daemon: [[60677,0],0]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Daemon launched: True
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   Num slots: 12
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Slots in use: 12       Oversubscribed: FALSE
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   Num slots allocated: 12
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Max slots: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   Username on node: NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   Num procs: 12
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Next node_rank: 12
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   Data for proc: [[60677,1],0]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   Pid: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Local rank: 0       Node rank: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; App rank: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   State: INITIALIZED
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Restarts: 0 App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Locale: UNKNOWN       Bind location: (null)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;  Binding: 0,12
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   Data for proc: [[60677,1],1]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   Pid: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Local rank: 1       Node rank: 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; App rank: 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   State: INITIALIZED
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Restarts: 0 App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Locale: UNKNOWN       Bind location: (null)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;  Binding: 8,20
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   Data for proc: [[60677,1],2]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   Pid: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Local rank: 2       Node rank: 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; App rank: 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   State: INITIALIZED
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Restarts: 0 App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Locale: UNKNOWN       Bind location: (null)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;  Binding: 5,17
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   Data for proc: [[60677,1],3]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   Pid: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Local rank: 3       Node rank: 3
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; App rank: 3
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   State: INITIALIZED
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Restarts: 0 App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Locale: UNKNOWN       Bind location: (null)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;  Binding: 9,21
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   Data for proc: [[60677,1],4]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   Pid: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Local rank: 4       Node rank: 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; App rank: 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   State: INITIALIZED
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Restarts: 0 App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Locale: UNKNOWN       Bind location: (null)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;  Binding: 11,23
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   Data for proc: [[60677,1],5]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   Pid: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Local rank: 5       Node rank: 5
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; App rank: 5
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   State: INITIALIZED
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Restarts: 0 App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Locale: UNKNOWN       Bind location: (null)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;  Binding: 7,19
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   Data for proc: [[60677,1],6]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   Pid: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Local rank: 6       Node rank: 6
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; App rank: 6
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   State: INITIALIZED
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Restarts: 0 App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Locale: UNKNOWN       Bind location: (null)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;  Binding: 3,15
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   Data for proc: [[60677,1],7]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   Pid: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Local rank: 7       Node rank: 7
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; App rank: 7
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   State: INITIALIZED
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Restarts: 0 App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Locale: UNKNOWN       Bind location: (null)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;  Binding: 6,18
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   Data for proc: [[60677,1],8]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   Pid: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Local rank: 8       Node rank: 8
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; App rank: 8
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   State: INITIALIZED
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Restarts: 0 App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Locale: UNKNOWN       Bind location: (null)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;  Binding: 2,14
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   Data for proc: [[60677,1],9]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   Pid: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Local rank: 9       Node rank: 9
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; App rank: 9
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   State: INITIALIZED
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Restarts: 0 App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Locale: UNKNOWN       Bind location: (null)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;  Binding: 4,16
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   Data for proc: [[60677,1],10]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   Pid: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Local rank: 10       Node rank: 10
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; App rank: 10
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   State: INITIALIZED
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Restarts: 0 App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Locale: UNKNOWN       Bind location: (null)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;  Binding: 10,22
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   Data for proc: [[60677,1],11]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   Pid: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Local rank: 11       Node rank: 11
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; App rank: 11
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   State: INITIALIZED
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Restarts: 0 App_context: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Locale: UNKNOWN       Bind location: (null)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;  Binding: 1,13
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [bend001:24667] MCW rank 1 bound to socket 0[core 4[hwt 0-1]]: [../../../../BB/..][../../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [bend001:24667] MCW rank 2 bound to socket 1[core 8[hwt 0-1]]: [../../../../../..][../../BB/../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [bend001:24667] MCW rank 3 bound to socket 1[core 10[hwt 0-1]]: [../../../../../..][../../../../BB/..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [bend001:24667] MCW rank 4 bound to socket 1[core 11[hwt 0-1]]: [../../../../../..][../../../../../BB]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [bend001:24667] MCW rank 5 bound to socket 1[core 9[hwt 0-1]]: [../../../../../..][../../../BB/../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [bend001:24667] MCW rank 6 bound to socket 1[core 7[hwt 0-1]]: [../../../../../..][../BB/../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [bend001:24667] MCW rank 7 bound to socket 0[core 3[hwt 0-1]]: [../../../BB/../..][../../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [bend001:24667] MCW rank 8 bound to socket 0[core 1[hwt 0-1]]: [../BB/../../../..][../../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [bend001:24667] MCW rank 9 bound to socket 0[core 2[hwt 0-1]]: [../../BB/../../..][../../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [bend001:24667] MCW rank 10 bound to socket 0[core 5[hwt 0-1]]: [../../../../../BB][../../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [bend001:24667] MCW rank 11 bound to socket 1[core 6[hwt 0-1]]: [../../../../../..][BB/../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [bend001:24667] MCW rank 0 bound to socket 0[core 0[hwt 0-1]]: [BB/../../../../..][../../../../../..]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Can you try with the latest nightly 1.8 tarball?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/nightly/v1.8/">http://www.open-mpi.org/nightly/v1.8/</a> &lt;<a href="http://www.open-mpi.org/nightly/v1.8/">http://www.open-mpi.org/nightly/v1.8/</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Note that it is also possible that hwloc isn&#146;t correctly identifying the cores here. Can you tell us something about the hardware? Do you have hardware threads enabled?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I ask because the binding being reported by us is the cpu numbers as identified by hwloc - which may not be the same you are expecting from some hardware vendor&#146;s map. We are using logical processor assignments, not physical. You can use the &#151;report-bindings option to show the resulting map, as above.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Nov 5, 2014, at 7:21 AM, twurgl_at_[hidden] &lt;mailto:twurgl_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I am using openmpi v 1.8.3 and LSF 9.1.3.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; LSF creates a rankfile that looks like:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; RANK_FILE:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ======================================================================
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; rank 0=mach1 slot=0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; rank 1=mach1 slot=4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; rank 2=mach1 slot=8
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; rank 3=mach1 slot=12
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; rank 4=mach1 slot=16
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; rank 5=mach1 slot=20
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; rank 6=mach1 slot=24
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; rank 7=mach1 slot=28
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; rank 8=mach1 slot=32
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; rank 9=mach1 slot=36
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; rank 10=mach1 slot=40
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; rank 11=mach1 slot=44
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; rank 12=mach1 slot=1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; rank 13=mach1 slot=5
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; rank 14=mach1 slot=9
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; rank 15=mach1 slot=13
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; which really are the cores I want to use, in order. 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I logon to this machine and type (all on one line):
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; /apps/share/openmpi/1.8.3.I1217913/bin/mpirun \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  --mca orte_base_help_aggregate 0 \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  -v -display-devel-allocation \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  -display-devel-map \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  --rankfile RANK_FILE \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  --mca btl openib,tcp,sm,self \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  --x LD_LIBRARY_PATH \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  --np 16 \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  my_executable \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  -i model.i \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  -l model.o
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; And I get the following on the screen:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ======================   ALLOCATED NODES   ======================
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mach1: slots=16 max_slots=0 slots_inuse=0 state=UP
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; =================================================================
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Data for JOB [52387,1] offset 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Mapper requested: NULL  Last mapper: rank_file  Mapping policy: BYUSER  Ranking policy: SLOT
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Binding policy: CPUSET  Cpu set: NULL  PPR: NULL  Cpus-per-rank: 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Num new daemons: 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; New daemon starting vpid INVALID
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Num nodes: 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Data for node: mach1       Launch id: -1 State: 2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Daemon: [[52387,0],0]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Daemon launched: True
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Num slots: 16
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Slots in use: 16       Oversubscribed: FALSE
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Num slots allocated: 16
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Max slots: 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Username on node: NULL
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Num procs: 16
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Next node_rank: 16
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Data for proc: [[52387,1],0]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Pid: 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Local rank: 0       Node rank: 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; App rank: 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; State: INITIALIZED
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Restarts: 0 App_context: 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Locale: UNKNOWN       Bind location: (null)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  Binding: 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Data for proc: [[52387,1],1]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Pid: 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Local rank: 1       Node rank: 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; App rank: 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; State: INITIALIZED
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Restarts: 0 App_context: 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Locale: UNKNOWN       Bind location: (null)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  Binding: 16
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Data for proc: [[52387,1],2]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Pid: 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Local rank: 2       Node rank: 2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; App rank: 2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; State: INITIALIZED
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Restarts: 0 App_context: 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Locale: UNKNOWN       Bind location: (null)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  Binding: 32
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Data for proc: [[52387,1],3]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Pid: 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Local rank: 3       Node rank: 3
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; App rank: 3
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; State: INITIALIZED
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Restarts: 0 App_context: 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Locale: UNKNOWN       Bind location: (null)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  Binding: 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Data for proc: [[52387,1],4]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Pid: 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Local rank: 4       Node rank: 4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; App rank: 4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; State: INITIALIZED
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Restarts: 0 App_context: 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Locale: UNKNOWN       Bind location: (null)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  Binding: 17
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Data for proc: [[52387,1],5]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Pid: 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Local rank: 5       Node rank: 5
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; App rank: 5
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; State: INITIALIZED
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Restarts: 0 App_context: 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Locale: UNKNOWN       Bind location: (null)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  Binding: 33
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Data for proc: [[52387,1],6]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Pid: 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Local rank: 6       Node rank: 6
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; App rank: 6
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; State: INITIALIZED
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Restarts: 0 App_context: 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Locale: UNKNOWN       Bind location: (null)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  Binding: 2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Data for proc: [[52387,1],7]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Pid: 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Local rank: 7       Node rank: 7
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; App rank: 7
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; State: INITIALIZED
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Restarts: 0 App_context: 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Locale: UNKNOWN       Bind location: (null)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  Binding: 18
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Data for proc: [[52387,1],8]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Pid: 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Local rank: 8       Node rank: 8
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; App rank: 8
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; State: INITIALIZED
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Restarts: 0 App_context: 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Locale: UNKNOWN       Bind location: (null)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  Binding: 34
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Data for proc: [[52387,1],9]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Pid: 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Local rank: 9       Node rank: 9
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; App rank: 9
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; State: INITIALIZED
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Restarts: 0 App_context: 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Locale: UNKNOWN       Bind location: (null)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  Binding: 3
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Data for proc: [[52387,1],10]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Pid: 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Local rank: 10       Node rank: 10
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; App rank: 10
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; State: INITIALIZED
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Restarts: 0 App_context: 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Locale: UNKNOWN       Bind location: (null)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  Binding: 19
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Data for proc: [[52387,1],11]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Pid: 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Local rank: 11       Node rank: 11
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; App rank: 11
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; State: INITIALIZED
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Restarts: 0 App_context: 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Locale: UNKNOWN       Bind location: (null)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  Binding: 35
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Data for proc: [[52387,1],12]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Pid: 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Local rank: 12       Node rank: 12
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; App rank: 12
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; State: INITIALIZED
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Restarts: 0 App_context: 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Locale: UNKNOWN       Bind location: (null)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  Binding: 4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Data for proc: [[52387,1],13]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Pid: 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Local rank: 13       Node rank: 13
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; App rank: 13
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; State: INITIALIZED
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Restarts: 0 App_context: 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Locale: UNKNOWN       Bind location: (null)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  Binding: 20
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Data for proc: [[52387,1],14]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Pid: 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Local rank: 14       Node rank: 14
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; App rank: 14
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; State: INITIALIZED
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Restarts: 0 App_context: 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Locale: UNKNOWN       Bind location: (null)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  Binding: 36
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Data for proc: [[52387,1],15]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Pid: 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Local rank: 15       Node rank: 15
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; App rank: 15
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; State: INITIALIZED
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Restarts: 0 App_context: 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Locale: UNKNOWN       Bind location: (null)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  Binding: 5
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; And a numa-map of the node shows:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;  PID COMMAND         CPUMASK     TOTAL [     N0     N1     N2     N3     N4     N5     N6     N7 ]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 31044 my_executable         0    443.3M [ 443.3M     0      0      0      0      0      0      0  ]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 31045 my_executable        16    459.7M [ 459.7M     0      0      0      0      0      0      0  ]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 31046 my_executable        32    435.0M [     0  435.0M     0      0      0      0      0      0  ]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 31047 my_executable         1    468.8M [     0      0  468.8M     0      0      0      0      0  ]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 31048 my_executable        17    493.2M [     0      0  493.2M     0      0      0      0      0  ]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 31049 my_executable        33    498.0M [     0      0      0  498.0M     0      0      0      0  ]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 31050 my_executable         2    501.2M [     0      0      0      0  501.2M     0      0      0  ]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 31051 my_executable        18    502.4M [     0      0      0      0  502.4M     0      0      0  ]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 31052 my_executable        34    500.5M [     0      0      0      0      0  500.5M     0      0  ]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 31053 my_executable         3    515.6M [     0      0      0      0      0      0  515.6M     0  ]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 31054 my_executable        19    508.1M [     0      0      0      0      0      0  508.1M     0  ]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 31055 my_executable        35    503.9M [     0      0      0      0      0      0      0  503.9M ]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 31056 my_executable         4    502.1M [ 502.1M     0      0      0      0      0      0      0  ]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 31057 my_executable        20    515.2M [ 515.2M     0      0      0      0      0      0      0  ]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 31058 my_executable        36    508.1M [     0  508.1M     0      0      0      0      0      0  ]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 31059 my_executable         5    446.7M [     0      0  446.7M     0      0      0      0      0  ]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Why didn't mpirun honor the ranfile and put the processes on the correct cores in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; the proper order?  It looks to me like mpirun doesn't like the rankfile...??
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks for any help.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Tom
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16199.php">http://www.open-mpi.org/community/lists/devel/2014/11/16199.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/11/16199.php">http://www.open-mpi.org/community/lists/devel/2014/11/16199.php</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16221.php">http://www.open-mpi.org/community/lists/devel/2014/11/16221.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/11/16221.php">http://www.open-mpi.org/community/lists/devel/2014/11/16221.php</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16229.php">http://www.open-mpi.org/community/lists/devel/2014/11/16229.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/11/16229.php">http://www.open-mpi.org/community/lists/devel/2014/11/16229.php</a>&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16233.php">http://www.open-mpi.org/community/lists/devel/2014/11/16233.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/11/16233.php">http://www.open-mpi.org/community/lists/devel/2014/11/16233.php</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16272.php">http://www.open-mpi.org/community/lists/devel/2014/11/16272.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/11/16272.php">http://www.open-mpi.org/community/lists/devel/2014/11/16272.php</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16274.php">http://www.open-mpi.org/community/lists/devel/2014/11/16274.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/11/16274.php">http://www.open-mpi.org/community/lists/devel/2014/11/16274.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16276.php">http://www.open-mpi.org/community/lists/devel/2014/11/16276.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/11/16276.php">http://www.open-mpi.org/community/lists/devel/2014/11/16276.php</a>&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16279/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16280.php">Adrian Reber: "Re: [OMPI devel] 1.8.3 and PSM errors"</a>
<li><strong>Previous message:</strong> <a href="16278.php">Friedley, Andrew: "Re: [OMPI devel] 1.8.3 and PSM errors"</a>
<li><strong>In reply to:</strong> <a href="16276.php">Tom Wurgler: "Re: [OMPI devel] mpirun does not honor rankfile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16281.php">Tom Wurgler: "Re: [OMPI devel] mpirun does not honor rankfile"</a>
<li><strong>Reply:</strong> <a href="16281.php">Tom Wurgler: "Re: [OMPI devel] mpirun does not honor rankfile"</a>
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
