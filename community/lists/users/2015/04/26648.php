<?
$subject_val = "Re: [OMPI users] OpenMPI 1.8.4 - Java Library - allToAllv()";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  8 10:30:18 2015" -->
<!-- isoreceived="20150408143018" -->
<!-- sent="Wed, 8 Apr 2015 07:30:14 -0700" -->
<!-- isosent="20150408143014" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.8.4 - Java Library - allToAllv()" -->
<!-- id="6949097E-9D51-4D08-ACF5-6F007222899B_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="47DC1CF7-3EA7-46C4-9197-CDA2D38DFC26_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI 1.8.4 - Java Library - allToAllv()<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-08 10:30:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26649.php">Edgar Gabriel: "Re: [OMPI users] OpenMPI 1.8.4 - Java Library - allToAllv()"</a>
<li><strong>Previous message:</strong> <a href="26647.php">Lev Givon: "[OMPI users] parsability of ompi_info --parsable output"</a>
<li><strong>In reply to:</strong> <a href="26638.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.8.4 - Java Library - allToAllv()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26649.php">Edgar Gabriel: "Re: [OMPI users] OpenMPI 1.8.4 - Java Library - allToAllv()"</a>
<li><strong>Reply:</strong> <a href="26649.php">Edgar Gabriel: "Re: [OMPI users] OpenMPI 1.8.4 - Java Library - allToAllv()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In the interim, perhaps another way of addressing this would be to ask: what happens when you run your reproducer with MPICH? Does that work?
<br>
<p>This would at least tell us how another implementation interpreted that function.
<br>
<p><p><span class="quotelev1">&gt; On Apr 7, 2015, at 10:18 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I&#146;m afraid we&#146;ll have to get someone from the Forum to interpret (Howard is a member as well), but here is what I see just below that, in the description section:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The type signature associated with sendcounts[j], sendtype at process i must be equal to the type signature associated with recvcounts[i], recvtype at process j. This implies that the amount of data sent must be equal to the amount of data received, pairwise between every pair of processes
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 7, 2015, at 9:56 AM, Hamidreza Anvari &lt;hr.anvari_at_[hidden] &lt;mailto:hr.anvari_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for your description.
</span><br>
<span class="quotelev2">&gt;&gt; I'm currently doing allToAll() prior to allToAllV(), to communicate length of expected messages.
</span><br>
<span class="quotelev2">&gt;&gt; .
</span><br>
<span class="quotelev2">&gt;&gt; BUT, I still strongly believe that the right implementation of this method is something that I expected earlier!
</span><br>
<span class="quotelev2">&gt;&gt; If you check the MPI specification here:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.mpi-forum.org/docs/mpi-3.0/mpi30-report.pdf">http://www.mpi-forum.org/docs/mpi-3.0/mpi30-report.pdf</a> &lt;<a href="http://www.mpi-forum.org/docs/mpi-3.0/mpi30-report.pdf">http://www.mpi-forum.org/docs/mpi-3.0/mpi30-report.pdf</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Page 170
</span><br>
<span class="quotelev2">&gt;&gt; Line 14
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It is mentioned that &quot;... the number of elements that CAN be received...&quot;. which implies that the actual received message may have shorter length.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; While in cases where it is mandatory to have same value, the modal &quot;MUST&quot; is used. for example at page 171 Line 1, it is mentioned that &quot;... sendtype at process i MUST be equal to the type signature ...&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; SO, I would expect that any consistent implementation of MPI specification handle this message length matching by itself, as I asked originally.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; -- HR
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, Apr 7, 2015 at 6:03 AM, Howard Pritchard &lt;hppritcha_at_[hidden] &lt;mailto:hppritcha_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi HR,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Sorry for not noticing the receive side earlier, but as Ralph implied earlier
</span><br>
<span class="quotelev2">&gt;&gt; in this thread, the MPI standard has more strict type matching for collectives
</span><br>
<span class="quotelev2">&gt;&gt; than for point to point.  Namely, the number of bytes the receiver expects
</span><br>
<span class="quotelev2">&gt;&gt; to receive from a given sender in the alltoallv must match the number of bytes
</span><br>
<span class="quotelev2">&gt;&gt; sent by the sender.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; You were just getting lucky with the older open mpi.  The error message
</span><br>
<span class="quotelev2">&gt;&gt; isn't so great though.  Its likely in the newer open mpi you are using a
</span><br>
<span class="quotelev2">&gt;&gt; collective algorithm for alltoallv that assumes you're app is obeying the
</span><br>
<span class="quotelev2">&gt;&gt; standard.  
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; You are correct that if the ranks don't know how much data will be sent
</span><br>
<span class="quotelev2">&gt;&gt; to them from each rank prior to the alltoallv op, you will need to have some
</span><br>
<span class="quotelev2">&gt;&gt; mechanism for exchanging this info prior to the alltoallv op.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Howard
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 2015-04-06 23:23 GMT-06:00 Hamidreza Anvari &lt;hr.anvari_at_[hidden] &lt;mailto:hr.anvari_at_[hidden]&gt;&gt;:
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If I set the size2 values according to your suggestion, which is the same values as on sending nodes, it works fine.
</span><br>
<span class="quotelev2">&gt;&gt; But by definition it does not need to be exactly the same as the length of sent data, and it is just a maximum length of expected data to receive. If not, it is inevitable to run a allToAll() first to communicate the data sizes, and then doing the main allToAllV(), which is an expensive unnecessary communication overhead.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I just created a reproducer in C++ which gives the error under OpenMPI 1.8.4, but runs correctly under OpenMPI 1.5.4 .
</span><br>
<span class="quotelev2">&gt;&gt; (I've not included the Java version of this reproducer, which I think is not important as current version is enough to reproduce the error. But in case, it is straight forward to convert this code to Java).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; -- HR
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Mon, Apr 6, 2015 at 3:03 PM, Ralph Castain &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; That would imply that the issue is in the underlying C implementation in OMPI, not the Java bindings. The reproducer would definitely help pin it down.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If you change the size2 values to the ones we sent you, does the program by chance work?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Apr 6, 2015, at 1:44 PM, Hamidreza Anvari &lt;hr.anvari_at_[hidden] &lt;mailto:hr.anvari_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'll try that as well.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Meanwhile, I found that my c++ code is running fine on a machine running OpenMPI 1.5.4, but I receive the same error under OpenMPI 1.8.4 for both Java and C++.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Mon, Apr 6, 2015 at 2:21 PM, Howard Pritchard &lt;hppritcha_at_[hidden] &lt;mailto:hppritcha_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello HR,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks!  If you have Java 1.7 installed on your system would you mind trying to test against that version too?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Howard
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2015-04-06 13:09 GMT-06:00 Hamidreza Anvari &lt;hr.anvari_at_[hidden] &lt;mailto:hr.anvari_at_[hidden]&gt;&gt;:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1. I'm using Java/Javac version 1.8.0_20 under OS X 10.10.2.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2. I have used the following configuration for making OpenMPI:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./configure --enable-mpi-java --with-jdk-bindir=&quot;/System/Library/Frameworks/JavaVM.framework/Versions/Current/Commands&quot; --with-jdk-headers=&quot;/System/Library/Frameworks/JavaVM.framework/Versions/Current/Headers&quot; --prefix=&quot;/users/hamidreza/openmpi-1.8.4&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make all install
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3. As a logical point of view, size2 is the maximum expected data to receive, which in turn might be less that this maximum. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 4. I will try to prepare a working reproducer of my error and send it to you.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- HR
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Mon, Apr 6, 2015 at 10:46 AM, Ralph Castain &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I&#146;ve talked to the folks who wrote the Java bindings. One possibility we identified is that there may be an error in your code when you did the translation
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; My immediate thought is that each process can not receive more elements than it was sent to them. That's the reason of truncation error.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; These are the correct values:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; rank 0 - size2: 2,2,1,1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; rank 1 - size2: 1,1,1,1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; rank 2 - size2: 0,1,1,2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; rank 3 - size2: 2,1,2,1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can you check your code to see if perhaps the values you are passing didn&#146;t get translated correctly from your C++ version to the Java version?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Apr 6, 2015, at 5:03 AM, Howard Pritchard &lt;hppritcha_at_[hidden] &lt;mailto:hppritcha_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hello HR,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; It would also be useful to know which java version you are using, as well
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; as the configure options used when building open mpi.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Howard
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2015-04-05 19:10 GMT-06:00 Ralph Castain &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;&gt;:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If not too much trouble, can you extract just the alltoallv portion and provide us with a small reproducer?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Apr 5, 2015, at 12:11 PM, Hamidreza Anvari &lt;hr.anvari_at_[hidden] &lt;mailto:hr.anvari_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I am converting an existing MPI program in C++ to Java using OpenMPI 1.8.4,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; At some point I have a allToAllv() code which works fine in C++ but receives error in Java version:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI.COMM_WORLD.allToAllv(data, subpartition_size, subpartition_offset, MPI.INT &lt;<a href="http://mpi.int/">http://mpi.int/</a>&gt;,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; data2,subpartition_size2,subpartition_offset2,MPI.INT &lt;<a href="http://mpi.int/">http://mpi.int/</a>&gt;);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Error:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *** An error occurred in MPI_Alltoallv
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *** reported by process [3621322753,9223372036854775811]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *** MPI_ERR_TRUNCATE: message truncated
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ***    and potentially your MPI job)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 3 more processes have sent help message help-mpi-errors.txt / mpi_errors_are_fatal
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see all help / error messages
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Here are the values for parameters:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; data.length = 5
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; data2.length = 20
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ---------- Rank 0 of 4 ----------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; subpartition_offset:0,2,3,3,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; subpartition_size:2,1,0,2,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; subpartition_offset2:0,5,10,15,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; subpartition_size2:5,5,5,5,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ----------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ---------- Rank 1 of 4 ----------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; subpartition_offset:0,2,3,4,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; subpartition_size:2,1,1,1,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; subpartition_offset2:0,5,10,15,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; subpartition_size2:5,5,5,5,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ----------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ---------- Rank 2 of 4 ----------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; subpartition_offset:0,1,2,3,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; subpartition_size:1,1,1,2,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; subpartition_offset2:0,5,10,15,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; subpartition_size2:5,5,5,5,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ----------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ---------- Rank 3 of 4 ----------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; subpartition_offset:0,1,2,4,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; subpartition_size:1,1,2,1,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; subpartition_offset2:0,5,10,15,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; subpartition_size2:5,5,5,5,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ----------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Again, this is a code which works in C++ version.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Any help or advice is greatly appreciated.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -- HR
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/04/26610.php">http://www.open-mpi.org/community/lists/users/2015/04/26610.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/04/26610.php">http://www.open-mpi.org/community/lists/users/2015/04/26610.php</a>&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/04/26613.php">http://www.open-mpi.org/community/lists/users/2015/04/26613.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/04/26613.php">http://www.open-mpi.org/community/lists/users/2015/04/26613.php</a>&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/04/26615.php">http://www.open-mpi.org/community/lists/users/2015/04/26615.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/04/26615.php">http://www.open-mpi.org/community/lists/users/2015/04/26615.php</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/04/26616.php">http://www.open-mpi.org/community/lists/users/2015/04/26616.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/04/26616.php">http://www.open-mpi.org/community/lists/users/2015/04/26616.php</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/04/26617.php">http://www.open-mpi.org/community/lists/users/2015/04/26617.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/04/26617.php">http://www.open-mpi.org/community/lists/users/2015/04/26617.php</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/04/26620.php">http://www.open-mpi.org/community/lists/users/2015/04/26620.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/04/26620.php">http://www.open-mpi.org/community/lists/users/2015/04/26620.php</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/04/26622.php">http://www.open-mpi.org/community/lists/users/2015/04/26622.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/04/26622.php">http://www.open-mpi.org/community/lists/users/2015/04/26622.php</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/04/26623.php">http://www.open-mpi.org/community/lists/users/2015/04/26623.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/04/26623.php">http://www.open-mpi.org/community/lists/users/2015/04/26623.php</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/04/26631.php">http://www.open-mpi.org/community/lists/users/2015/04/26631.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/04/26631.php">http://www.open-mpi.org/community/lists/users/2015/04/26631.php</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/04/26634.php">http://www.open-mpi.org/community/lists/users/2015/04/26634.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/04/26634.php">http://www.open-mpi.org/community/lists/users/2015/04/26634.php</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/04/26637.php">http://www.open-mpi.org/community/lists/users/2015/04/26637.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26648/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26649.php">Edgar Gabriel: "Re: [OMPI users] OpenMPI 1.8.4 - Java Library - allToAllv()"</a>
<li><strong>Previous message:</strong> <a href="26647.php">Lev Givon: "[OMPI users] parsability of ompi_info --parsable output"</a>
<li><strong>In reply to:</strong> <a href="26638.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.8.4 - Java Library - allToAllv()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26649.php">Edgar Gabriel: "Re: [OMPI users] OpenMPI 1.8.4 - Java Library - allToAllv()"</a>
<li><strong>Reply:</strong> <a href="26649.php">Edgar Gabriel: "Re: [OMPI users] OpenMPI 1.8.4 - Java Library - allToAllv()"</a>
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
