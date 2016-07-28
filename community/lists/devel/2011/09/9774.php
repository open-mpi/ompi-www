<?
$subject_val = "[OMPI devel] RE :  RE :  RE :  Implementation of MPI_Iprobe";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 28 13:21:48 2011" -->
<!-- isoreceived="20110928172148" -->
<!-- sent="Wed, 28 Sep 2011 13:21:43 -0400" -->
<!-- isosent="20110928172143" -->
<!-- name="S&#233;bastien Boisvert" -->
<!-- email="sebastien.boisvert.3_at_[hidden]" -->
<!-- subject="[OMPI devel] RE :  RE :  RE :  Implementation of MPI_Iprobe" -->
<!-- id="C4217F2ABFA5D44BA8F3DCD899E5B0C8F26770073C_at_EXCH-MBX-F.ulaval.ca" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="C1585E37-6347-4A5F-95BB-4B02A460B595_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] RE :  RE :  RE :  Implementation of MPI_Iprobe<br>
<strong>From:</strong> S&#233;bastien Boisvert (<em>sebastien.boisvert.3_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-28 13:21:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9775.php">Xin He: "Re: [OMPI devel] MPI_Bcast using TIPC"</a>
<li><strong>Previous message:</strong> <a href="9773.php">Jeff Squyres: "Re: [OMPI devel] RE :  RE :  Implementation of MPI_Iprobe"</a>
<li><strong>In reply to:</strong> <a href="9773.php">Jeff Squyres: "Re: [OMPI devel] RE :  RE :  Implementation of MPI_Iprobe"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; ________________________________________
</span><br>
<span class="quotelev1">&gt; De : devel-bounces_at_[hidden] [devel-bounces_at_[hidden]] de la part de Jeff Squyres [jsquyres_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; Date d'envoi : 28 septembre 2011 11:18
</span><br>
<span class="quotelev1">&gt; &#192; : Open MPI Developers
</span><br>
<span class="quotelev1">&gt; Objet : Re: [OMPI devel] RE :  RE :  Implementation of MPI_Iprobe
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sep 28, 2011, at 10:04 AM, George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Why not use pre-posted non-blocking receives and MPI_WAIT_ANY?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; That's not very scalable either&#133; Might work for 256 processes, but that's about it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Just get a machine with oodles of RAM and you'll be fine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ;-)
</span><br>
<p><p>Hello,
<br>
<p><p><p>Each of my 256 cores has 3 GB of memory, thus my computation has 768 GB of distributed memory.
<br>
<p>So memory is not a problem at all.
<br>
<p>I only see the problem of starvation for the slave mode RAY_SLAVE_MODE_EXTENSION in Ray. And when there is starvation, the memory usage is just
<br>
~1.6 GB per core.
<br>
<p><p><p>Today, I implemented some profiling in my code to check where the granularity is too large in processData(), which calls call_RAY_SLAVE_MODE_EXTENSION().
<br>
<p>I consider anything abobe or equal to 128 microseconds to be too long for my computation.
<br>
<p><p>This is what I found so far:
<br>
<p>[1,3]&lt;stdout&gt;:Warning, SlaveMode= RAY_SLAVE_MODE_EXTENSION GranularityInMicroseconds= 16106
<br>
[1,3]&lt;stdout&gt;:Number of calls in the stack: 20
<br>
[1,3]&lt;stdout&gt;:0 1317227196433984 microseconds   +0 from previous (0.00%)        in extendSeeds inside code/assembler/SeedExtender.cpp at line 47
<br>
[1,3]&lt;stdout&gt;:1 1317227196433985 microseconds   +1 from previous (0.01%)        in extendSeeds inside code/assembler/SeedExtender.cpp at line 72
<br>
[1,3]&lt;stdout&gt;:2 1317227196433985 microseconds   +0 from previous (0.00%)        in extendSeeds inside code/assembler/SeedExtender.cpp at line 144
<br>
[1,3]&lt;stdout&gt;:3 1317227196433985 microseconds   +0 from previous (0.00%)        in extendSeeds inside code/assembler/SeedExtender.cpp at line 221
<br>
[1,3]&lt;stdout&gt;:4 1317227196433985 microseconds   +0 from previous (0.00%)        in doChoice inside code/assembler/SeedExtender.cpp at line 351
<br>
[1,3]&lt;stdout&gt;:5 1317227196433985 microseconds   +0 from previous (0.00%)        in doChoice inside code/assembler/SeedExtender.cpp at line 389
<br>
[1,3]&lt;stdout&gt;:6 1317227196433986 microseconds   +1 from previous (0.01%)        in doChoice inside code/assembler/SeedExtender.cpp at line 441
<br>
[1,3]&lt;stdout&gt;:7 1317227196433986 microseconds   +0 from previous (0.00%)        in doChoice inside code/assembler/SeedExtender.cpp at line 775
<br>
[1,3]&lt;stdout&gt;:8 1317227196433987 microseconds   +1 from previous (0.01%)        in storeExtensionAndGetNextOne inside code/assembler/SeedExtender.cpp at line 934
<br>
<p>[1,3]&lt;stdout&gt;:9 1317227196433988 microseconds   +1 from previous (0.01%)        in storeExtensionAndGetNextOne inside code/assembler/SeedExtender.cpp at line 960
<br>
[1,3]&lt;stdout&gt;:10        1317227196442360 microseconds   +8372 from previous (51.98%)    in storeExtensionAndGetNextOne inside code/assembler/SeedExtender.cpp at line 989
<br>
<p>[1,3]&lt;stdout&gt;:11        1317227196442651 microseconds   +291 from previous (1.81%)      in storeExtensionAndGetNextOne inside code/assembler/SeedExtender.cpp at line 993
<br>
[1,3]&lt;stdout&gt;:12        1317227196442654 microseconds   +3 from previous (0.02%)        in storeExtensionAndGetNextOne inside code/assembler/SeedExtender.cpp at line 1002
<br>
[1,3]&lt;stdout&gt;:13        1317227196442655 microseconds   +1 from previous (0.01%)        in resetStructures inside code/assembler/ExtensionData.cpp at line 72
<br>
[1,3]&lt;stdout&gt;:14
<br>
[1,3]&lt;stdout&gt;:  1317227196442656 microseconds   +1 from previous (0.01%)        in resetStructures inside code/assembler/ExtensionData.cpp at line 76
<br>
[1,3]&lt;stdout&gt;:15        1317227196447138 microseconds   +4482 from previous (27.83%)    in resetStructures inside code/assembler/ExtensionData.cpp at line 80
<br>
[1,3]&lt;stdout&gt;:16        1317227196450084 microseconds   +2946 from previous (18.29%)    in doChoice inside code/assembler/SeedExtender.cpp at line 883
<br>
[1,3]&lt;stdout&gt;:17        1317227196450087 microseconds   +3 from previous (0.02%)        in doChoice inside code/assembler/SeedExtender.cpp at line 886
<br>
[1,3]&lt;stdout&gt;:18        1317227196450087 microseconds   +0 from previous (0.00%)        in doChoice inside code/assembler/SeedExtender.cpp at line 888
<br>
[1,3]&lt;stdout&gt;:19        1317227196450089 microseconds   +2 from previous (0.01%)        in extendSeeds inside code/assembler/SeedExtender.cpp at line 229
<br>
[1,3]&lt;stdout&gt;:End of stack
<br>
<p><p>So the problem is definitely not with Open-MPI, but doing a round-robin MPI_Iprobe still helps a lot (rotating the source given to MPI_Iprobe at each call to it) when
<br>
the granularity exceeds 128 microseconds.
<br>
<p><p><p><p>But I do think that George's patch (with my minor modification) would provide an MPI_Iprobe that is fair for all drained messages (the round-robin thing).
<br>
<p>But even the patch does not change anything for my problem with MPI_ANY_SOURCE.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I actually was thinking of his specific 256-process case.  I agree that it doesn't scale arbitrarily.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>I think it could scale arbitrarily with Open-MPI ;) (and with any MPI implementations respecting MPI 2.x, for that matter).
<br>
<p><p>I just need to get my granularity below 128 microseconds for all the calls in RAY_SLAVE_MODE_EXTENSION 
<br>
(which is Machine::call_RAY_SLAVE_MODE_EXTENSION() in my code.).
<br>
<p><span class="quotelev1">&gt; Another approach would potentially be to break your 256 processes up into N sub-communicators of M each (where N * M = 256, obviously), and doing a doing a non-blocking receive with ANY_SOURCE and then a WAIT_ANY on all of those.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>I am not sure that would work in my code as my architecture is like:
<br>
<p>while(running){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;receiveMessages();   // blazing fast, receives 0 or 1 message, never more, never less, other messages will wait for the next iteration !
<br>
&nbsp;&nbsp;&nbsp;&nbsp;processMessages();   // consume the one message received, if any, also very fast because it is done with an array mapping tags to function pointers
<br>
&nbsp;&nbsp;&nbsp;&nbsp;processData();       // should be fast, but apparently call_RAY_SLAVE_MODE_EXTENSION is slowish sometimes...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;sendMessages();      // fast, sends at most 17 messages. In most case it is either 0 or 1 message.,..
<br>
}
<br>
<p><p>If I *understand* what you said correctly, doing a WAIT_ANY inside Ray's receiveMessages would hang and/or would lower significantly the speed of the loop, which is not desirable.
<br>
<p>I like to have my loop at ~ 200000 iterations / 100 milliseconds. This yields a very responsive system -- everyone respond within 128 microseconds with my round-robin thing.
<br>
The response time is 10 microseconds on guillimin.clumeq.ca and 100 (use to be 250) on colosse.clumeq.ca if I use MPI_ANY_SOURCE 
<br>
(as reported on the list, see <a href="http://www.open-mpi.org/community/lists/users/2011/09/17321.php">http://www.open-mpi.org/community/lists/users/2011/09/17321.php</a> ), 
<br>
but things get complicated in RAY_SLAVE_MODE_EXTENSION because of buggy granularity.
<br>
<p><p><span class="quotelev1">&gt; The code gets a bit more complex, but it hypothetically extends your scalability.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Or better yet, have your job mimic this idea -- a tree-based gathering system.  Have not just 1 master, but N sub-masters.  Individual compute processes report up to their sub-master, and the sub-master does whatever combinatorial work it can before reporting it to the ultimate master, etc.
</span><br>
<p><p>Ray does have a MASTER_RANK, which is 0. But all the ranks, including 0, are slave ranks too.
<br>
<p>In processData():
<br>
<p><p>/** process data my calling current slave and master methods */
<br>
void Machine::processData(){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MachineMethod masterMethod=m_master_methods[m_master_mode];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(this-&gt;*masterMethod)();
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MachineMethod slaveMethod=m_slave_methods[m_slave_mode];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(this-&gt;*slaveMethod)();
<br>
}
<br>
<p><p>Obviously, m_master_mode is always RAY_MASTER_MODE_DO_NOTHING for any rank that is not MASTER_RANK, which is quite simple to implement:
<br>
<p>void Machine::call_RAY_MASTER_MODE_DO_NOTHING(){}
<br>
<p><p>So, although I understand that the tree-based gathering system you describe would act as some sort of virtual network (like routing packets on the Internet), I don't think that would be helpful
<br>
because the computation granularity in call_RAY_SLAVE_MODE_EXTENSION() is above 128 microseconds anyway (I discovered that today, my bad).
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It depends on your code and how much delegation is possible, how much data you're transferring over the network, how much fairness you want to guarantee, etc.  My point is that there are a bunch of 
</span><br>
<span class="quotelev1">&gt; different options you can pursue outside of the &quot;everyone sends to 1 master&quot; model.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>My communication model is more distributed than &quot;everyone sends to 1 master&quot;. 
<br>
<p>My model is &quot;everyone sends to everyone in a respectful way&quot;.
<br>
<p><p>When I say &quot;respectful way&quot;, I mean that rank A waits for the reply to its first message from rank B before sending anything else to rank B.
<br>
<p>Because of that, 
<br>
<p>- Open-MPI buffers are happy, 
<br>
- memory usage is happy, and 
<br>
- byte transfer layers are not saturated at all and thus are happy too.
<br>
<p><p>And destinations are mostly random because of my hash-based domain decomposition of genomic/biological data.
<br>
<p><p>I will thus improve my granularity but would nonetheless agree that George's patch be merged in Open-MPI's trunk as fairness is always desirable in networking algorithms.
<br>
<p><p><p><p>Thanks a lot !
<br>
<p><p><p>S&#233;bastien Boisvert
<br>
PhD student
<br>
<a href="http://boisvert.info">http://boisvert.info</a>
<br>
<p><span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9775.php">Xin He: "Re: [OMPI devel] MPI_Bcast using TIPC"</a>
<li><strong>Previous message:</strong> <a href="9773.php">Jeff Squyres: "Re: [OMPI devel] RE :  RE :  Implementation of MPI_Iprobe"</a>
<li><strong>In reply to:</strong> <a href="9773.php">Jeff Squyres: "Re: [OMPI devel] RE :  RE :  Implementation of MPI_Iprobe"</a>
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
