<?
$subject_val = "Re: [OMPI users] OpenMPI 1.8.4 - Java Library - allToAllv()";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  7 01:24:05 2015" -->
<!-- isoreceived="20150407052405" -->
<!-- sent="Mon, 6 Apr 2015 23:23:44 -0600" -->
<!-- isosent="20150407052344" -->
<!-- name="Hamidreza Anvari" -->
<!-- email="hr.anvari_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.8.4 - Java Library - allToAllv()" -->
<!-- id="CACRiV2h5w+hAYj9GK7-1yo8BuWTcVBvtU-zR=DzyV7A+oXOPDQ_at_mail.gmail.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="FD756345-BBEA-465C-80BD-D963FB5AE137_at_open-mpi.org" -->
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
<strong>From:</strong> Hamidreza Anvari (<em>hr.anvari_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-07 01:23:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26632.php">Filippo Spiga: "Re: [OMPI users] Different HCA from different OpenMP threads (same rank	using MPI_THREAD_MULTIPLE)"</a>
<li><strong>Previous message:</strong> <a href="26630.php">Ray Sheppard: "Re: [OMPI users] Simple openmpi-mca-params.conf question"</a>
<li><strong>In reply to:</strong> <a href="26623.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.8.4 - Java Library - allToAllv()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26634.php">Howard Pritchard: "Re: [OMPI users] OpenMPI 1.8.4 - Java Library - allToAllv()"</a>
<li><strong>Reply:</strong> <a href="26634.php">Howard Pritchard: "Re: [OMPI users] OpenMPI 1.8.4 - Java Library - allToAllv()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>If I set the size2 values according to your suggestion, which is the same
<br>
values as on sending nodes, it works fine.
<br>
But by definition it does not need to be exactly the same as the length of
<br>
sent data, and it is just a maximum length of expected data to receive. If
<br>
not, it is inevitable to run a allToAll() first to communicate the data
<br>
sizes, and then doing the main allToAllV(), which is an expensive
<br>
unnecessary communication overhead.
<br>
<p>I just created a reproducer in C++ which gives the error under OpenMPI
<br>
1.8.4, but runs correctly under OpenMPI 1.5.4 .
<br>
(I've not included the Java version of this reproducer, which I think is
<br>
not important as current version is enough to reproduce the error. But in
<br>
case, it is straight forward to convert this code to Java).
<br>
<p>Thanks,
<br>
-- HR
<br>
<p>On Mon, Apr 6, 2015 at 3:03 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; That would imply that the issue is in the underlying C implementation in
</span><br>
<span class="quotelev1">&gt; OMPI, not the Java bindings. The reproducer would definitely help pin it
</span><br>
<span class="quotelev1">&gt; down.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you change the size2 values to the ones we sent you, does the program
</span><br>
<span class="quotelev1">&gt; by chance work?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 6, 2015, at 1:44 PM, Hamidreza Anvari &lt;hr.anvari_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'll try that as well.
</span><br>
<span class="quotelev1">&gt; Meanwhile, I found that my c++ code is running fine on a machine running
</span><br>
<span class="quotelev1">&gt; OpenMPI 1.5.4, but I receive the same error under OpenMPI 1.8.4 for both
</span><br>
<span class="quotelev1">&gt; Java and C++.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Apr 6, 2015 at 2:21 PM, Howard Pritchard &lt;hppritcha_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello HR,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks!  If you have Java 1.7 installed on your system would you mind
</span><br>
<span class="quotelev2">&gt;&gt; trying to test against that version too?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Howard
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2015-04-06 13:09 GMT-06:00 Hamidreza Anvari &lt;hr.anvari_at_[hidden]&gt;:
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev3">&gt;&gt;&gt; ./configure --enable-mpi-java
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --with-jdk-bindir=&quot;/System/Library/Frameworks/JavaVM.framework/Versions/Current/Commands&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --with-jdk-headers=&quot;/System/Library/Frameworks/JavaVM.framework/Versions/Current/Headers&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --prefix=&quot;/users/hamidreza/openmpi-1.8.4&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make all install
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3. As a logical point of view, size2 is the maximum expected data to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; receive, which in turn might be less that this maximum.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 4. I will try to prepare a working reproducer of my error and send it to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- HR
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Mon, Apr 6, 2015 at 10:46 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I've talked to the folks who wrote the Java bindings. One possibility
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; we identified is that there may be an error in your code when you did the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; translation
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; My immediate thought is that each process can not receive more elements
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; than it was sent to them. That's the reason of truncation error.
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
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Can you check your code to see if perhaps the values you are passing
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; didn't get translated correctly from your C++ version to the Java version?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Apr 6, 2015, at 5:03 AM, Howard Pritchard &lt;hppritcha_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hello HR,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; It would also be useful to know which java version you are using, as
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; well
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
<span class="quotelev4">&gt;&gt;&gt;&gt; 2015-04-05 19:10 GMT-06:00 Ralph Castain &lt;rhc_at_[hidden]&gt;:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; If not too much trouble, can you extract just the alltoallv portion
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; and provide us with a small reproducer?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Apr 5, 2015, at 12:11 PM, Hamidreza Anvari &lt;hr.anvari_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I am converting an existing MPI program in C++ to Java using OpenMPI
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 1.8.4,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; At some point I have a allToAllv() code which works fine in C++ but
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; receives error in Java version:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI.COMM_WORLD.allToAllv(data, subpartition_size, subpartition_offset,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI.INT &lt;<a href="http://mpi.int/">http://mpi.int/</a>&gt;,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; data2,subpartition_size2,subpartition_offset2,MPI.INT
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;<a href="http://mpi.int/">http://mpi.int/</a>&gt;);
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
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; abort,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ***    and potentially your MPI job)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 3 more processes have sent help message help-mpi-errors.txt /
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpi_errors_are_fatal
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see all help /
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; error messages
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
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/04/26610.php">http://www.open-mpi.org/community/lists/users/2015/04/26610.php</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/04/26613.php">http://www.open-mpi.org/community/lists/users/2015/04/26613.php</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/04/26615.php">http://www.open-mpi.org/community/lists/users/2015/04/26615.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/04/26616.php">http://www.open-mpi.org/community/lists/users/2015/04/26616.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/04/26617.php">http://www.open-mpi.org/community/lists/users/2015/04/26617.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/04/26620.php">http://www.open-mpi.org/community/lists/users/2015/04/26620.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/04/26622.php">http://www.open-mpi.org/community/lists/users/2015/04/26622.php</a>
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/04/26623.php">http://www.open-mpi.org/community/lists/users/2015/04/26623.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26631/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/x-c++src attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26631/mpi_code.cpp">mpi_code.cpp</a>
</ul>
<!-- attachment="mpi_code.cpp" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26632.php">Filippo Spiga: "Re: [OMPI users] Different HCA from different OpenMP threads (same rank	using MPI_THREAD_MULTIPLE)"</a>
<li><strong>Previous message:</strong> <a href="26630.php">Ray Sheppard: "Re: [OMPI users] Simple openmpi-mca-params.conf question"</a>
<li><strong>In reply to:</strong> <a href="26623.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.8.4 - Java Library - allToAllv()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26634.php">Howard Pritchard: "Re: [OMPI users] OpenMPI 1.8.4 - Java Library - allToAllv()"</a>
<li><strong>Reply:</strong> <a href="26634.php">Howard Pritchard: "Re: [OMPI users] OpenMPI 1.8.4 - Java Library - allToAllv()"</a>
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
