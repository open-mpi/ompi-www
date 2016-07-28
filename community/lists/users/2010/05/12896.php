<?
$subject_val = "Re: [OMPI users] How do I run OpenMPI	safely	on	a	Nehalem	standalone machine?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  4 23:38:30 2010" -->
<!-- isoreceived="20100505033830" -->
<!-- sent="Tue, 04 May 2010 23:38:21 -0400" -->
<!-- isosent="20100505033821" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How do I run OpenMPI	safely	on	a	Nehalem	standalone machine?" -->
<!-- id="4BE0E82D.7080701_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="727C3357-E9D5-428B-BC21-E78A9CF2FAEB_at_cox.net" -->
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
<strong>Subject:</strong> Re: [OMPI users] How do I run OpenMPI	safely	on	a	Nehalem	standalone machine?<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-04 23:38:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12897.php">John Hearns: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem standalone machine?"</a>
<li><strong>Previous message:</strong> <a href="12895.php">Doug Reeder: "Re: [OMPI users] How do I run OpenMPI safely	on	a	Nehalem	standalone machine?"</a>
<li><strong>In reply to:</strong> <a href="12895.php">Doug Reeder: "Re: [OMPI users] How do I run OpenMPI safely	on	a	Nehalem	standalone machine?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12897.php">John Hearns: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem standalone machine?"</a>
<li><strong>Reply:</strong> <a href="12897.php">John Hearns: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem standalone machine?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Doug
<br>
<p>Thank you for your input.
<br>
I fully agree with you.
<br>
I do not expect to get much from hyperthreading in terms of performance.
<br>
However, at this point I am just interested in having Open MPI working
<br>
right with *both* HT on and HT off.
<br>
<p>Anyway, back to your comment about the usefulness of HT.
<br>
This is all hearsay, the hands waving argument I heard about the Intel
<br>
hyperthreading (HT), and its IBM cousin &quot;symmetric multi-threading&quot;
<br>
(SMT), and most likely some other equivalents out there.
<br>
You kind of suggested some of these points in your message.
<br>
In any case, please don't quote me on that,
<br>
although just posting this on the list already puts me on the spot.
<br>
<p>An expert could jump in and correct me, please.
<br>
<p>1) HT/SMT works well for those codes that have many
<br>
branch/decisions (like if/else), as the new instructions to
<br>
be fetched/executed are not predictable, and by having two threads
<br>
active on a single core can harness those idle core/CPU cycles
<br>
when the &quot;other&quot; thread is fetching a new non-predictable
<br>
instruction after the frequent branches/decisions.
<br>
<p>2) Predictable instructions, on the other hand, can be piplelined
<br>
to be executed, and do not leave much of CPU idle cycles.
<br>
<p>Most of our scientific codes (finite element, finite differences,
<br>
finite volume, spectral, linear algebra solvers) are NOT characterized
<br>
by branches, but by big repetitive inner loops that do not leave
<br>
much of idle CPU cycles.
<br>
(Well, at least when they are thoughtfully written.)
<br>
<p>I.e., they are mostly made of predictable instructions that fit
<br>
nicely in the CPU pipeline.
<br>
Hence, the active thread becomes greedy,
<br>
and doesn't give much of a chance
<br>
to the &quot;other&quot; thread to get the hold of the CPU.
<br>
Hence, hyperthreading on these codes is not helpful.
<br>
<p>That is the (common) wisdom about HT/SMT I was told.
<br>
<p>3) However, I saw one person reporting modest gains in speedup
<br>
(10-20%) when running an ocean model (finite differences, domain
<br>
decomposition, OpenMPI, actually a Mac OS-X cluster).
<br>
It may have been here in this list, IIRR.
<br>
<p>I myself experienced speedup numbers on this range, maybe up to 30%,
<br>
not on Linux, but on a IBM Power6 big machine
<br>
(32 CPUs/node, look like 64 CPUs/node with SMT turned on).
<br>
On these IBM machines SMT is turned on/off by the user,
<br>
via environment variables, which is very convenient.
<br>
This was when I ran a coupled
<br>
climate model (5 executables in MPMD mode using the IBM MPI).
<br>
<p>4) I am not so surprised by the numbers you reported.
<br>
Based on the common wisdom above, the more optimized
<br>
the loops on your code are, the less useful HT becomes.
<br>
You may need to screw up the code a bit, say, by inserting
<br>
branch/decisions in your inner loops, for HT to be of help.
<br>
However, the net gain by doing that may be actually a loss
<br>
w.r.t. to just running the optimized code without HT, I would guess.
<br>
There is nothing like a clean and clever algorithm.
<br>
<p>Cheers,
<br>
Gus Correa
<br>
(still struggling to get Open MPI to get along with HT,
<br>
but now self-promoted to parallel programming theoretician :) )
<br>
---------------------------------------------------------------------
<br>
Gustavo Correa
<br>
Lamont-Doherty Earth Observatory - Columbia University
<br>
Palisades, NY, 10964-8000 - USA
<br>
---------------------------------------------------------------------
<br>
<p><p>Doug Reeder wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have a mac with two quad core nehalem chips (8 cores). The sysctl 
</span><br>
<span class="quotelev1">&gt; command shows 16 cpus (apparently w/ hyperthreading). I have a finite 
</span><br>
<span class="quotelev1">&gt; element code that runs in parallel using openmpi. Running on the single 
</span><br>
<span class="quotelev1">&gt; machine using openmpi -np 8 runs in about 2/3 time that running with -np 
</span><br>
<span class="quotelev1">&gt; 16 does. The program is very well optimized for parallel processing so I 
</span><br>
<span class="quotelev1">&gt; strongly suspect that hyperthreading is not helping. The program fairly 
</span><br>
<span class="quotelev1">&gt; aggressively uses 100% of each cpu it is on so I don't think 
</span><br>
<span class="quotelev1">&gt; hyperthreading gets much of a chance to split the cpu activity. I would 
</span><br>
<span class="quotelev1">&gt; certainly welcome input/insight from an intel hardware engineer. I make 
</span><br>
<span class="quotelev1">&gt; sure that I don't ask for more processors than there are physical cores 
</span><br>
<span class="quotelev1">&gt; and that seems to work.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Doug Reeder
</span><br>
<span class="quotelev1">&gt; On May 4, 2010, at 7:06 PM, Gus Correa wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you so much for your help.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You are right, paffinity is turned off (default):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; **************
</span><br>
<span class="quotelev2">&gt;&gt; /opt/sw/openmpi/1.4.2/gnu-4.4.3-4/bin/ompi_info --param opal all | 
</span><br>
<span class="quotelev2">&gt;&gt; grep paffinity
</span><br>
<span class="quotelev2">&gt;&gt;                MCA opal: parameter &quot;opal_paffinity_alone&quot; (current 
</span><br>
<span class="quotelev2">&gt;&gt; value: &quot;0&quot;, data source: default value, synonyms: mpi_paffinity_alone, 
</span><br>
<span class="quotelev2">&gt;&gt; mpi_paffinity_alone)
</span><br>
<span class="quotelev2">&gt;&gt; **************
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I will try your suggestion to turn off HT tomorrow,
</span><br>
<span class="quotelev2">&gt;&gt; and report back here.
</span><br>
<span class="quotelev2">&gt;&gt; Douglas Guptill kindly sent a recipe to turn HT off via BIOS settings.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt; Gus Correa
</span><br>
<span class="quotelev2">&gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Gustavo Correa
</span><br>
<span class="quotelev2">&gt;&gt; Lamont-Doherty Earth Observatory - Columbia University
</span><br>
<span class="quotelev2">&gt;&gt; Palisades, NY, 10964-8000 - USA
</span><br>
<span class="quotelev2">&gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On May 4, 2010, at 4:51 PM, Gus Correa wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi Ralph
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; One possibility is that the sm btl might not like that you have 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; hyperthreading enabled.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I remember that hyperthreading was discussed months ago,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; in the previous incarnation of this problem/thread/discussion on 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;Nehalem vs. Open MPI&quot;.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (It sounds like one of those supreme court cases ... )
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I don't really administer that machine,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; or any machine with hyperthreading,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; so I am not much familiar to the HT nitty-gritty.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; How do I turn off hyperthreading?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Is it a BIOS or a Linux thing?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I may try that.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I believe it can be turned off via an admin-level cmd, but I'm not 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; certain about it
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Another thing to check: do you have any paffinity settings turned on
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (e.g., mpi_paffinity_alone)?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I didn't turn on or off any paffinity setting explicitly,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; either in the command line or in the mca config file.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; All that I did on the tests was to turn off &quot;sm&quot;,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; or just use the default settings.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I wonder if paffinity is on by default, is it?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Should I turn it off?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It is off by default - I mention it because sometimes people have it 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; set in the default MCA param file and don't realize it is on. Sounds 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; okay here, though.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Our paffinity system doesn't handle hyperthreading at this time.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OK, so *if* paffinity is on by default (Is it?),
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and hyperthreading is also on, as it is now,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I must turn off one of them, maybe both, right?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I may go combinatorial about this tomorrow.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Can't do it today.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Darn locked office door!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I would say don't worry about the paffinity right now - sounds like 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it is off. You can always check, though, by running &quot;ompi_info 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --param opal all&quot; and checking for the setting of the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; opal_paffinity_alone variable
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I'm just suspicious of the HT since you have a quad-core machine,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and the limit where things work seems to be 4...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; It may be.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If you tell me how to turn off HT (I'll google around for it 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; meanwhile),
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I will do it tomorrow, if I get a chance to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; hard reboot that pesky machine now locked behind a door.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yeah, I'm beginning to believe it is the HT that is causing the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; problem...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks again for your help.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Gus
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On May 4, 2010, at 3:44 PM, Gus Correa wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Hi Jeff
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Sure, I will certainly try v1.4.2.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I am downloading it right now.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; As of this morning, when I first downloaded,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; the web site still had 1.4.1.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Maybe I should have refreshed the web page on my browser.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I will tell you how it goes.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Gus
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Gus -- Can you try v1.4.2 which was just released today?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; On May 4, 2010, at 4:18 PM, Gus Correa wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi Ralph
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thank you very much.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; The &quot;-mca btl ^sm&quot; workaround seems to have solved the problem,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; at least for the little hello_c.c test.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I just ran it fine up to 128 processes.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I confess I am puzzled by this workaround.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; * Why should we turn off &quot;sm&quot; in a standalone machine,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; where everything is supposed to operate via shared memory?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; * Do I incur in a performance penalty by not using &quot;sm&quot;?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; * What other mechanism is actually used by OpenMPI for process
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; communication in this case?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; It seems to be using tcp, because when I try -np 256 I get this 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; error:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [spinoza:02715] [[11518,0],0] ORTE_ERROR_LOG: The system limit 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; on number
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; of network connections a process can open was reached in file
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ../../../../../orte/mca/oob/tcp/oob_tcp.c at line 447
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Error: system limit exceeded on number of network connections 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; that can
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; be open
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; This can be resolved by setting the mca parameter
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; opal_set_max_sys_limits to 1,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; increasing your limit descriptor setting (using limit or ulimit 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; commands),
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; or asking the system administrator to increase the system limit.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Anyway, no big deal, because we don't intend to oversubrcribe the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; processors on real jobs anyway (and the very error message 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; suggests a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; workaround to increase np, if needed).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Many thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Gus Correa
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I would certainly try it -mca btl ^sm and see if that solves 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; the problem.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On May 4, 2010, at 2:38 PM, Eugene Loh wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Gus Correa wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Dear Open MPI experts
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I need your help to get Open MPI right on a standalone
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; machine with Nehalem processors.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; How to tweak the mca parameters to avoid problems
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; with Nehalem (and perhaps AMD processors also),
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; where MPI programs hang, was discussed here before.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; However, I lost track of the details, how to work around the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; problem,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; and if it was fully fixed already perhaps.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Yes, perhaps the problem you're seeing is not what you 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; remember being discussed.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Perhaps you're thinking of 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="https://svn.open-mpi.org/trac/ompi/ticket/2043">https://svn.open-mpi.org/trac/ompi/ticket/2043</a> .  It's 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; presumably fixed.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I am now facing the problem directly on a single Nehalem box.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I installed OpenMPI 1.4.1 from source,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; and compiled the test hello_c.c with mpicc.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Then I tried to run it with:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 1) mpirun -np 4 a.out
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; It ran OK (but seemed to be slow).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 2) mpirun -np 16 a.out
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; It hung, and brought the machine to a halt.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Any words of wisdom are appreciated.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; More info:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; * OpenMPI 1.4.1 installed from source (tarball from your site).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; * Compilers are gcc/g++/gfortran 4.4.3-4.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; * OS is Fedora Core 12.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; * The machine is a Dell box with Intel Xeon 5540 (quad core)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; processors on a two-way motherboard and 48GB of RAM.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; * /proc/cpuinfo indicates that hyperthreading is turned on.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (I can see 16 &quot;processors&quot;.)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; **
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; What should I do?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Use -mca btl ^sm  ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Use -mca btl -mca btl_sm_num_fifos=some_number ? (Which number?)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Use Both?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Do something else?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="12897.php">John Hearns: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem standalone machine?"</a>
<li><strong>Previous message:</strong> <a href="12895.php">Doug Reeder: "Re: [OMPI users] How do I run OpenMPI safely	on	a	Nehalem	standalone machine?"</a>
<li><strong>In reply to:</strong> <a href="12895.php">Doug Reeder: "Re: [OMPI users] How do I run OpenMPI safely	on	a	Nehalem	standalone machine?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12897.php">John Hearns: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem standalone machine?"</a>
<li><strong>Reply:</strong> <a href="12897.php">John Hearns: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem standalone machine?"</a>
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
