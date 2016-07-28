<?
$subject_val = "Re: [OMPI users] OpenMPI 1.8.4 - Java Library - allToAllv()";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  8 10:41:35 2015" -->
<!-- isoreceived="20150408144135" -->
<!-- sent="Wed, 08 Apr 2015 09:41:28 -0500" -->
<!-- isosent="20150408144128" -->
<!-- name="Edgar Gabriel" -->
<!-- email="gabriel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.8.4 - Java Library - allToAllv()" -->
<!-- id="55253E18.1020606_at_cs.uh.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="6949097E-9D51-4D08-ACF5-6F007222899B_at_open-mpi.org" -->
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
<strong>From:</strong> Edgar Gabriel (<em>gabriel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-08 10:41:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26650.php">Ralph Castain: "Re: [OMPI users] 1.8.3 executable with 1.8.4 mpirun/orted?"</a>
<li><strong>Previous message:</strong> <a href="26648.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.8.4 - Java Library - allToAllv()"</a>
<li><strong>In reply to:</strong> <a href="26648.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.8.4 - Java Library - allToAllv()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26681.php">Ahmed Salama: "[OMPI users] run openmpi 1.8 in both linux and windows 7"</a>
<li><strong>Reply:</strong> <a href="26681.php">Ahmed Salama: "[OMPI users] run openmpi 1.8 in both linux and windows 7"</a>
<li><strong>Reply:</strong> <a href="26755.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI 1.8.4 - Java Library - allToAllv()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think the following paragraph might be useful. Its in MPI-3, page 142 
<br>
lines 16-20:
<br>
<p>&quot;The type-matching conditions for the collective operations are more 
<br>
strict than the corresponding conditions between sender and receiver in 
<br>
point-to-point. Namely, for collective operations, the amount of data 
<br>
sent must exactly match the amount of data specified by the receiver. 
<br>
Different type maps (the layout in memory, see Section 4.1) between 
<br>
sender and receiver are still allowed&quot;.
<br>
<p><p>Thanks
<br>
Edgar
<br>
<p>On 4/8/2015 9:30 AM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; In the interim, perhaps another way of addressing this would be to ask:
</span><br>
<span class="quotelev1">&gt; what happens when you run your reproducer with MPICH? Does that work?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This would at least tell us how another implementation interpreted that
</span><br>
<span class="quotelev1">&gt; function.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 7, 2015, at 10:18 AM, Ralph Castain &lt;rhc_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I&#146;m afraid we&#146;ll have to get someone from the Forum to interpret
</span><br>
<span class="quotelev2">&gt;&gt; (Howard is a member as well), but here is what I see just below that,
</span><br>
<span class="quotelev2">&gt;&gt; in the description section:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /The type signature associated with sendcounts[j], sendtype at
</span><br>
<span class="quotelev2">&gt;&gt; process i must be equal to the type signature associated
</span><br>
<span class="quotelev2">&gt;&gt; with recvcounts[i], recvtype at process j. This implies that the
</span><br>
<span class="quotelev2">&gt;&gt; amount of data sent must be equal to the amount of data received,
</span><br>
<span class="quotelev2">&gt;&gt; pairwise between every pair of processes/
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Apr 7, 2015, at 9:56 AM, Hamidreza Anvari &lt;hr.anvari_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;mailto:hr.anvari_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks for your description.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm currently doing allToAll() prior to allToAllV(), to communicate
</span><br>
<span class="quotelev3">&gt;&gt;&gt; length of expected messages.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; .
</span><br>
<span class="quotelev3">&gt;&gt;&gt; BUT, I still strongly believe that the right implementation of this
</span><br>
<span class="quotelev3">&gt;&gt;&gt; method is something that I expected earlier!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If you check the MPI specification here:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.mpi-forum.org/docs/mpi-3.0/mpi30-report.pdf">http://www.mpi-forum.org/docs/mpi-3.0/mpi30-report.pdf</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Page 170
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Line 14
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It is mentioned that &quot;... the number of elements that CAN be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; received...&quot;. which implies that the actual received message may have
</span><br>
<span class="quotelev3">&gt;&gt;&gt; shorter length.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; While in cases where it is mandatory to have same value, the modal
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;MUST&quot; is used. for example at page 171 Line 1, it is mentioned that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;... sendtype at process i MUST be equal to the type signature ...&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; SO, I would expect that any consistent implementation of MPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; specification handle this message length matching by itself, as I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; asked originally.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- HR
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Tue, Apr 7, 2015 at 6:03 AM, Howard Pritchard &lt;hppritcha_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;mailto:hppritcha_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Hi HR,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Sorry for not noticing the receive side earlier, but as Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     implied earlier
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     in this thread, the MPI standard has more strict type matching
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     for collectives
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     than for point to point.  Namely, the number of bytes the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     receiver expects
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     to receive from a given sender in the alltoallv must match the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     number of bytes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     sent by the sender.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     You were just getting lucky with the older open mpi.  The error
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     message
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     isn't so great though.  Its likely in the newer open mpi you are
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     using a
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     collective algorithm for alltoallv that assumes you're app is
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     obeying the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     standard.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     You are correct that if the ranks don't know how much data will
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     be sent
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     to them from each rank prior to the alltoallv op, you will need
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     to have some
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     mechanism for exchanging this info prior to the alltoallv op.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Howard
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     2015-04-06 23:23 GMT-06:00 Hamidreza Anvari &lt;hr.anvari_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     &lt;mailto:hr.anvari_at_[hidden]&gt;&gt;:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Hello,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         If I set the size2 values according to your suggestion, which
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         is the same values as on sending nodes, it works fine.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         But by definition it does not need to be exactly the same as
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         the length of sent data, and it is just a maximum length of
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         expected data to receive. If not, it is inevitable to run a
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         allToAll() first to communicate the data sizes, and then
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         doing the main allToAllV(), which is an expensive unnecessary
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         communication overhead.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         I just created a reproducer in C++ which gives the error
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         under OpenMPI 1.8.4, but runs correctly under OpenMPI 1.5.4 .
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         (I've not included the Java version of this reproducer, which
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         I think is not important as current version is enough to
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         reproduce the error. But in case, it is straight forward to
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         convert this code to Java).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         -- HR
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         On Mon, Apr 6, 2015 at 3:03 PM, Ralph Castain
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             That would imply that the issue is in the underlying C
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             implementation in OMPI, not the Java bindings. The
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             reproducer would definitely help pin it down.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             If you change the size2 values to the ones we sent you,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             does the program by chance work?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             On Apr 6, 2015, at 1:44 PM, Hamidreza Anvari
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             &lt;hr.anvari_at_[hidden] &lt;mailto:hr.anvari_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             I'll try that as well.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             Meanwhile, I found that my c++ code is running fine on a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             machine running OpenMPI 1.5.4, but I receive the same
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             error under OpenMPI 1.8.4 for both Java and C++.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             On Mon, Apr 6, 2015 at 2:21 PM, Howard Pritchard
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             &lt;hppritcha_at_[hidden] &lt;mailto:hppritcha_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 Hello HR,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 Thanks!  If you have Java 1.7 installed on your
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 system would you mind trying to test against that
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 version too?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 Thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 Howard
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 2015-04-06 13:09 GMT-06:00 Hamidreza Anvari
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 &lt;hr.anvari_at_[hidden] &lt;mailto:hr.anvari_at_[hidden]&gt;&gt;:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                     Hello,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                     1. I'm using Java/Javac version 1.8.0_20 under
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                     OS X 10.10.2.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                     2. I have used the following configuration for
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                     making OpenMPI:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                     ./configure --enable-mpi-java
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                     --with-jdk-bindir=&quot;/System/Library/Frameworks/JavaVM.framework/Versions/Current/Commands&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                     --with-jdk-headers=&quot;/System/Library/Frameworks/JavaVM.framework/Versions/Current/Headers&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                     --prefix=&quot;/users/hamidreza/openmpi-1.8.4&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                     make all install
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                     3. As a logical point of view, size2 is the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                     maximum expected data to receive, which in turn
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                     might be less that this maximum.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                     4. I will try to prepare a working reproducer of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                     my error and send it to you.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                     Thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                     -- HR
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                     On Mon, Apr 6, 2015 at 10:46 AM, Ralph Castain
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                     &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                         I&#146;ve talked to the folks who wrote the Java
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                         bindings. One possibility we identified is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                         that there may be an error in your code when
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                         you did the translation
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                         My immediate thought is that each process
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                         can not receive more elements than it was
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                         sent to them. That's the reason of
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                         truncation error.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                         These are the correct values:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                         rank 0 - size2: 2,2,1,1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                         rank 1 - size2: 1,1,1,1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                         rank 2 - size2: 0,1,1,2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                         rank 3 - size2: 2,1,2,1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                         Can you check your code to see if perhaps
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                         the values you are passing didn&#146;t get
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                         translated correctly from your C++ version
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                         to the Java version?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                         On Apr 6, 2015, at 5:03 AM, Howard
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                         Pritchard &lt;hppritcha_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                         &lt;mailto:hppritcha_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                         Hello HR,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                         It would also be useful to know which java
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                         version you are using, as well
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                         as the configure options used when building
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                         open mpi.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                         Thanks,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                         Howard
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                         2015-04-05 19:10 GMT-06:00 Ralph Castain
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                         &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;&gt;:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             If not too much trouble, can you
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             extract just the alltoallv portion and
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             provide us with a small reproducer?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                             On Apr 5, 2015, at 12:11 PM, Hamidreza
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                             Anvari &lt;hr.anvari_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                             &lt;mailto:hr.anvari_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                             Hello,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                             I am converting an existing MPI
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                             program in C++ to Java using OpenMPI
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                             1.8.4,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                             At some point I have a allToAllv()
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                             code which works fine in C++ but
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                             receives error in Java version:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                             MPI.COMM_WORLD.allToAllv(data,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                             subpartition_size,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                             subpartition_offset, MPI.INT
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                             &lt;<a href="http://mpi.int/">http://mpi.int/</a>&gt;,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                             data2,subpartition_size2,subpartition_offset2,MPI.INT
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                             &lt;<a href="http://mpi.int/">http://mpi.int/</a>&gt;);
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                             Error:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                             *** An error occurred in MPI_Alltoallv
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                             *** reported by process
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                             [3621322753,9223372036854775811]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                             *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                             *** MPI_ERR_TRUNCATE: message truncated
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                             *** MPI_ERRORS_ARE_FATAL (processes in
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                             this communicator will now abort,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                             ***    and potentially your MPI job)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                             3 more processes have sent help
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                             message help-mpi-errors.txt /
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                             mpi_errors_are_fatal
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                             Set MCA parameter
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                             &quot;orte_base_help_aggregate&quot; to 0 to see
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                             all help / error messages
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                             Here are the values for parameters:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                             data.length = 5
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                             data2.length = 20
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                             ---------- Rank 0 of 4 ----------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                             subpartition_offset:0,2,3,3,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                             subpartition_size:2,1,0,2,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                             subpartition_offset2:0,5,10,15,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                             subpartition_size2:5,5,5,5,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                             ----------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                             ---------- Rank 1 of 4 ----------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                             subpartition_offset:0,2,3,4,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                             subpartition_size:2,1,1,1,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                             subpartition_offset2:0,5,10,15,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                             subpartition_size2:5,5,5,5,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                             ----------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                             ---------- Rank 2 of 4 ----------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                             subpartition_offset:0,1,2,3,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                             subpartition_size:1,1,1,2,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                             subpartition_offset2:0,5,10,15,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                             subpartition_size2:5,5,5,5,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                             ----------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                             ---------- Rank 3 of 4 ----------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                             subpartition_offset:0,1,2,4,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                             subpartition_size:1,1,2,1,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                             subpartition_offset2:0,5,10,15,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                             subpartition_size2:5,5,5,5,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                             ----------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                             Again, this is a code which works in
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                             C++ version.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                             Any help or advice is greatly appreciated.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                             Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                             -- HR
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                             _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                             users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                             users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                             &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                             Subscription:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                             <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                             Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                             <a href="http://www.open-mpi.org/community/lists/users/2015/04/26610.php">http://www.open-mpi.org/community/lists/users/2015/04/26610.php</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Subscription:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             Link to this post:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             <a href="http://www.open-mpi.org/community/lists/users/2015/04/26613.php">http://www.open-mpi.org/community/lists/users/2015/04/26613.php</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                         _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                         users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                         users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                         Subscription:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                         <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                         Link to this post:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                         <a href="http://www.open-mpi.org/community/lists/users/2015/04/26615.php">http://www.open-mpi.org/community/lists/users/2015/04/26615.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                         _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                         users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                         users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                         Subscription:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                         <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                         Link to this post:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                         <a href="http://www.open-mpi.org/community/lists/users/2015/04/26616.php">http://www.open-mpi.org/community/lists/users/2015/04/26616.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                     _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                     users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                     Subscription:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                     Link to this post:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                     <a href="http://www.open-mpi.org/community/lists/users/2015/04/26617.php">http://www.open-mpi.org/community/lists/users/2015/04/26617.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 Subscription:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 Link to this post:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 <a href="http://www.open-mpi.org/community/lists/users/2015/04/26620.php">http://www.open-mpi.org/community/lists/users/2015/04/26620.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             Subscription:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             Link to this post:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             <a href="http://www.open-mpi.org/community/lists/users/2015/04/26622.php">http://www.open-mpi.org/community/lists/users/2015/04/26622.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             Subscription:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             <a href="http://www.open-mpi.org/community/lists/users/2015/04/26623.php">http://www.open-mpi.org/community/lists/users/2015/04/26623.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         <a href="http://www.open-mpi.org/community/lists/users/2015/04/26631.php">http://www.open-mpi.org/community/lists/users/2015/04/26631.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     <a href="http://www.open-mpi.org/community/lists/users/2015/04/26634.php">http://www.open-mpi.org/community/lists/users/2015/04/26634.php</a>
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
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/04/26637.php">http://www.open-mpi.org/community/lists/users/2015/04/26637.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/04/26648.php">http://www.open-mpi.org/community/lists/users/2015/04/26648.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
Edgar Gabriel
Associate Professor
Parallel Software Technologies Lab      <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
Department of Computer Science          University of Houston
Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
Tel: +1 (713) 743-3857                  Fax: +1 (713) 743-3335
--
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26650.php">Ralph Castain: "Re: [OMPI users] 1.8.3 executable with 1.8.4 mpirun/orted?"</a>
<li><strong>Previous message:</strong> <a href="26648.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.8.4 - Java Library - allToAllv()"</a>
<li><strong>In reply to:</strong> <a href="26648.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.8.4 - Java Library - allToAllv()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26681.php">Ahmed Salama: "[OMPI users] run openmpi 1.8 in both linux and windows 7"</a>
<li><strong>Reply:</strong> <a href="26681.php">Ahmed Salama: "[OMPI users] run openmpi 1.8 in both linux and windows 7"</a>
<li><strong>Reply:</strong> <a href="26755.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI 1.8.4 - Java Library - allToAllv()"</a>
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
