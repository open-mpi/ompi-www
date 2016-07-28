<?
$subject_val = "Re: [OMPI users] MPI hangs on multiple nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Sep 25 22:13:43 2011" -->
<!-- isoreceived="20110926021343" -->
<!-- sent="Mon, 26 Sep 2011 09:13:35 +0700" -->
<!-- isosent="20110926021335" -->
<!-- name="Ole Nielsen" -->
<!-- email="ole.moller.nielsen_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI hangs on multiple nodes" -->
<!-- id="CALcLSfroZ21ma5nCBWGk6MHzjZH396b=T1LCwFEjRL_s_wtUMw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="[OMPI users] MPI hangs on multiple nodes" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI hangs on multiple nodes<br>
<strong>From:</strong> Ole Nielsen (<em>ole.moller.nielsen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-25 22:13:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17435.php">Yevgeny Kliteynik: "Re: [OMPI users] RE : RE : Latency of 250 microseconds with	Open-MPI 1.4.3, Mellanox Infiniband and 256 MPI ranks"</a>
<li><strong>Previous message:</strong> <a href="17433.php">Martin Siegert: "Re: [OMPI users] PATH settings"</a>
<li><strong>Maybe in reply to:</strong> <a href="17347.php">Ole Nielsen: "[OMPI users] MPI hangs on multiple nodes"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all - thanks to everyone for all the hints. Problem has been solved.
<br>
To summarise for the benefit of anyone else who may encounter the issue of
<br>
MPI hanging when trying to connect through the network:
<br>
<p><p>&nbsp;&nbsp;&nbsp;1. Followed Rolf's advice and also hints from
<br>
&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/faq/?category=tcp">http://www.open-mpi.org/faq/?category=tcp</a>) and ran MPI with the option
<br>
&nbsp;&nbsp;&nbsp;btl_base_verbose.
<br>
&nbsp;&nbsp;&nbsp;2. This revealed that MPI was trying to connect through the wrong IP
<br>
&nbsp;&nbsp;&nbsp;addresses for some nodes:
<br>
&nbsp;&nbsp;&nbsp;<a href="http://www.aifdr.org/projects/system_administration/ticket/17#comment:4">http://www.aifdr.org/projects/system_administration/ticket/17#comment:4</a>
<br>
&nbsp;&nbsp;&nbsp;3. This in turn, was due to our cluster was using different eth* to mac
<br>
&nbsp;&nbsp;&nbsp;address mappings leading DHCP to issues the wrong addresses:
<br>
&nbsp;&nbsp;&nbsp;<a href="http://www.aifdr.org/projects/system_administration/ticket/9#comment:10">http://www.aifdr.org/projects/system_administration/ticket/9#comment:10</a> -
<br>
&nbsp;&nbsp;&nbsp;Interestingly, we had no problem with ping and ssh, so maybe MPI defaults to
<br>
&nbsp;&nbsp;&nbsp;using eth0?
<br>
&nbsp;&nbsp;&nbsp;4. After much fiddling with udev/rules.d we gave up on that and just
<br>
&nbsp;&nbsp;&nbsp;assigned static addresses to eth0 (I am now convinced udev/rules.d doesn't
<br>
&nbsp;&nbsp;&nbsp;work :-))
<br>
<p>After that everything works beautifully.
<br>
The morale is KISS - Keep everything as simple as you can.
<br>
<p>Onto some more earthquake and tsunami modelling.
<br>
<p>Cheers
<br>
Ole
<br>
<p><p><p>On Tue, Sep 20, 2011 at 9:44 PM, &lt;users-request_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Send users mailing list submissions to
</span><br>
<span class="quotelev1">&gt;        users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To subscribe or unsubscribe via the World Wide Web, visit
</span><br>
<span class="quotelev1">&gt;        <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; or, via email, send a message with subject or body 'help' to
</span><br>
<span class="quotelev1">&gt;        users-request_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You can reach the person managing the list at
</span><br>
<span class="quotelev1">&gt;        users-owner_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When replying, please edit your Subject line so it is more specific
</span><br>
<span class="quotelev1">&gt; than &quot;Re: Contents of users digest...&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Today's Topics:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   1. Re: RE :  MPI hangs on multiple nodes (Gus Correa)
</span><br>
<span class="quotelev1">&gt;   2. Typo in MPI_Cart_coords man page (Jeremiah Willcock)
</span><br>
<span class="quotelev1">&gt;   3. Re: RE :  MPI hangs on multiple nodes (Gus Correa)
</span><br>
<span class="quotelev1">&gt;   4. How could OpenMPI (or MVAPICH) affect floating-point      results?
</span><br>
<span class="quotelev1">&gt;      (Blosch, Edwin L)
</span><br>
<span class="quotelev1">&gt;   5. MPI hangs on multiple nodes (Ole Nielsen)
</span><br>
<span class="quotelev1">&gt;   6. MPI hangs on multiple nodes (Ole Nielsen)
</span><br>
<span class="quotelev1">&gt;   7. Re: How could OpenMPI (or MVAPICH) affect floating-point
</span><br>
<span class="quotelev1">&gt;      results? (Reuti)
</span><br>
<span class="quotelev1">&gt;   8. Re: How could OpenMPI (or MVAPICH) affect floating-point
</span><br>
<span class="quotelev1">&gt;      results? (Tim Prince)
</span><br>
<span class="quotelev1">&gt;   9. Re: How could OpenMPI (or MVAPICH) affect floating-point
</span><br>
<span class="quotelev1">&gt;      results? (Jeff Squyres)
</span><br>
<span class="quotelev1">&gt;  10. Re: MPI hangs on multiple nodes (Jeff Squyres)
</span><br>
<span class="quotelev1">&gt;  11. Re: Latency of 250 microseconds with Open-MPI 1.4.3, Mellanox
</span><br>
<span class="quotelev1">&gt;      Infiniband and 256 MPI ranks (Yevgeny Kliteynik)
</span><br>
<span class="quotelev1">&gt;  12. Re: How could OpenMPI (or MVAPICH) affect floating-point
</span><br>
<span class="quotelev1">&gt;      results? (Reuti)
</span><br>
<span class="quotelev1">&gt;  13. Re: MPI hangs on multiple nodes (Rolf vandeVaart)
</span><br>
<span class="quotelev1">&gt;  14. Re: Open MPI and Objective C (Barrett, Brian W)
</span><br>
<span class="quotelev1">&gt;  15. Re: How could OpenMPI (or MVAPICH) affect floating-point
</span><br>
<span class="quotelev1">&gt;      results? (Samuel K. Gutierrez)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Message: 1
</span><br>
<span class="quotelev1">&gt; Date: Mon, 19 Sep 2011 13:13:08 -0400
</span><br>
<span class="quotelev1">&gt; From: Gus Correa &lt;gus_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] RE :  MPI hangs on multiple nodes
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;4E777824.60507_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=ISO-8859-1; format=flowed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Eugene
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You're right, it is blocking send, buffers can be reused after MPI_Send
</span><br>
<span class="quotelev1">&gt; returns.
</span><br>
<span class="quotelev1">&gt; My bad, I only read your answer to Sebastien and Ole
</span><br>
<span class="quotelev1">&gt; after I posted mine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Could MPI run out of [internal] buffers to hold the messages, perhaps?
</span><br>
<span class="quotelev1">&gt; The messages aren't that big anyway [5000 doubles].
</span><br>
<span class="quotelev1">&gt; Could MPI behave differently regarding internal
</span><br>
<span class="quotelev1">&gt; buffering when communication is intra-node vs. across the network?
</span><br>
<span class="quotelev1">&gt; [It works intra-node, according to Ole's posting.]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I suppose Ole rebuilt OpenMPI on his newly installed Ubuntu.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Eugene Loh wrote:
</span><br>
<span class="quotelev2">&gt; &gt; I'm missing the point on the buffer re-use.  It seems to me that the
</span><br>
<span class="quotelev2">&gt; &gt; sample program passes some buffer around in a ring.  Each process
</span><br>
<span class="quotelev2">&gt; &gt; receives the buffer with a blocking receive and then forwards it with a
</span><br>
<span class="quotelev2">&gt; &gt; blocking send.  The blocking send does not return until the send buffer
</span><br>
<span class="quotelev2">&gt; &gt; is safe to reuse.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On 9/19/2011 7:37 AM, Gus Correa wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; You could try the examples/connectivity.c program in the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; OpenMPI source tree, to test if everything is alright.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; It also hints how to solve the buffer re-use issue
</span><br>
<span class="quotelev3">&gt; &gt;&gt; that Sebastien [rightfully] pointed out [i.e., declare separate
</span><br>
<span class="quotelev3">&gt; &gt;&gt; buffers for MPI_Send and MPI_Recv].
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; S?bastien Boisvert wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Is it safe to re-use the same buffer (variable A) for MPI_Send and
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; MPI_Recv given that MPI_Send may be eager depending on
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; the MCA parameters ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Message: 2
</span><br>
<span class="quotelev1">&gt; Date: Mon, 19 Sep 2011 15:14:42 -0400 (EDT)
</span><br>
<span class="quotelev1">&gt; From: Jeremiah Willcock &lt;jewillco_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] Typo in MPI_Cart_coords man page
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;alpine.LRH.2.00.1109191513310.14686_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: TEXT/PLAIN; format=flowed; charset=US-ASCII
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The bottom of the MPI_Cart_coords man page (in SVN trunk as well as some
</span><br>
<span class="quotelev1">&gt; releases) states:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The inverse mapping, rank-to-coordinates translation is provided by
</span><br>
<span class="quotelev1">&gt; MPI_Cart_coords.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Although that is true, we are already in the man page for MPI_Cart_coords
</span><br>
<span class="quotelev1">&gt; and so the reverse is the mapping from coordinates to rank.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Jeremiah Willcock
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Message: 3
</span><br>
<span class="quotelev1">&gt; Date: Mon, 19 Sep 2011 16:19:40 -0400
</span><br>
<span class="quotelev1">&gt; From: Gus Correa &lt;gus_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] RE :  MPI hangs on multiple nodes
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;4E77A3DC.80902_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=iso-8859-1; format=flowed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Ole, Eugene
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For what it is worth, I tried Ole's program here,
</span><br>
<span class="quotelev1">&gt; as Devendra Rai had done before.
</span><br>
<span class="quotelev1">&gt; I ran it across two nodes, with a total of 16 processes.
</span><br>
<span class="quotelev1">&gt; I tried mca parameters for openib Infiniband,
</span><br>
<span class="quotelev1">&gt; then for tcp on Gigabit Ethernet.
</span><br>
<span class="quotelev1">&gt; Both work.
</span><br>
<span class="quotelev1">&gt; I am using OpenMPI 1.4.3 compiled with GCC 4.1.2 on CentOS 5.2.
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gus Correa wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi Eugene
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; You're right, it is blocking send, buffers can be reused after MPI_Send
</span><br>
<span class="quotelev2">&gt; &gt; returns.
</span><br>
<span class="quotelev2">&gt; &gt; My bad, I only read your answer to Sebastien and Ole
</span><br>
<span class="quotelev2">&gt; &gt; after I posted mine.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Could MPI run out of [internal] buffers to hold the messages, perhaps?
</span><br>
<span class="quotelev2">&gt; &gt; The messages aren't that big anyway [5000 doubles].
</span><br>
<span class="quotelev2">&gt; &gt; Could MPI behave differently regarding internal
</span><br>
<span class="quotelev2">&gt; &gt; buffering when communication is intra-node vs. across the network?
</span><br>
<span class="quotelev2">&gt; &gt; [It works intra-node, according to Ole's posting.]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I suppose Ole rebuilt OpenMPI on his newly installed Ubuntu.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Gus Correa
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Eugene Loh wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I'm missing the point on the buffer re-use.  It seems to me that the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; sample program passes some buffer around in a ring.  Each process
</span><br>
<span class="quotelev3">&gt; &gt;&gt; receives the buffer with a blocking receive and then forwards it with
</span><br>
<span class="quotelev3">&gt; &gt;&gt; a blocking send.  The blocking send does not return until the send
</span><br>
<span class="quotelev3">&gt; &gt;&gt; buffer is safe to reuse.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On 9/19/2011 7:37 AM, Gus Correa wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; You could try the examples/connectivity.c program in the
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; OpenMPI source tree, to test if everything is alright.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; It also hints how to solve the buffer re-use issue
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; that Sebastien [rightfully] pointed out [i.e., declare separate
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; buffers for MPI_Send and MPI_Recv].
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; S?bastien Boisvert wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Is it safe to re-use the same buffer (variable A) for MPI_Send and
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; MPI_Recv given that MPI_Send may be eager depending on
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; the MCA parameters ?
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Message: 4
</span><br>
<span class="quotelev1">&gt; Date: Mon, 19 Sep 2011 16:41:08 -0600
</span><br>
<span class="quotelev1">&gt; From: &quot;Blosch, Edwin L&quot; &lt;edwin.l.blosch_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] How could OpenMPI (or MVAPICH) affect
</span><br>
<span class="quotelev1">&gt;        floating-point  results?
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID:
</span><br>
<span class="quotelev1">&gt;        &lt;E9F276A0010AF44ABD2C03ED2EDAE7DB275FAAD498_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=&quot;us-ascii&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am observing differences in floating-point results from an application
</span><br>
<span class="quotelev1">&gt; program that appear to be related to whether I link with OpenMPI 1.4.3 or
</span><br>
<span class="quotelev1">&gt; MVAPICH 1.2.0.  Both packages were built with the same installation of Intel
</span><br>
<span class="quotelev1">&gt; 11.1, as well as the application program; identical flags passed to the
</span><br>
<span class="quotelev1">&gt; compiler in each case.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've tracked down some differences in a compute-only routine where I've
</span><br>
<span class="quotelev1">&gt; printed out the inputs to the routine (to 18 digits) ; the inputs are
</span><br>
<span class="quotelev1">&gt; identical.  The output numbers are different in the 16th place (perhaps a
</span><br>
<span class="quotelev1">&gt; few in the 15th place).  These differences only show up for optimized code,
</span><br>
<span class="quotelev1">&gt; not for -O0.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My assumption is that some optimized math intrinsic is being replaced
</span><br>
<span class="quotelev1">&gt; dynamically, but I do not know how to confirm this.  Anyone have guidance to
</span><br>
<span class="quotelev1">&gt; offer? Or similar experience?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks very much
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just for what it's worth, here's the output of ldd:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; % ldd application_mvapich
</span><br>
<span class="quotelev1">&gt;        linux-vdso.so.1 =&gt;  (0x00007fffe3746000)
</span><br>
<span class="quotelev1">&gt;        libstdc++.so.6 =&gt; /usr/lib64/libstdc++.so.6 (0x00002b5b45fc1000)
</span><br>
<span class="quotelev1">&gt;        libmpich.so.1.0 =&gt;
</span><br>
<span class="quotelev1">&gt; /usr/mpi/intel/mvapich-1.2.0/lib/shared/libmpich.so.1.0 (0x00002b5b462cd000)
</span><br>
<span class="quotelev1">&gt;        libibverbs.so.1 =&gt; /usr/lib64/libibverbs.so.1 (0x00002b5b465ed000)
</span><br>
<span class="quotelev1">&gt;        libibumad.so.3 =&gt; /usr/lib64/libibumad.so.3 (0x00002b5b467fc000)
</span><br>
<span class="quotelev1">&gt;        libpthread.so.0 =&gt; /lib64/libpthread.so.0 (0x00002b5b46a04000)
</span><br>
<span class="quotelev1">&gt;        librt.so.1 =&gt; /lib64/librt.so.1 (0x00002b5b46c21000)
</span><br>
<span class="quotelev1">&gt;        libm.so.6 =&gt; /lib64/libm.so.6 (0x00002b5b46e2a000)
</span><br>
<span class="quotelev1">&gt;        libdl.so.2 =&gt; /lib64/libdl.so.2 (0x00002b5b47081000)
</span><br>
<span class="quotelev1">&gt;        libc.so.6 =&gt; /lib64/libc.so.6 (0x00002b5b47285000)
</span><br>
<span class="quotelev1">&gt;        libgcc_s.so.1 =&gt; /lib64/libgcc_s.so.1 (0x00002b5b475e3000)
</span><br>
<span class="quotelev1">&gt;        /lib64/ld-linux-x86-64.so.2 (0x00002b5b45da0000)
</span><br>
<span class="quotelev1">&gt;        libimf.so =&gt; /opt/intel/Compiler/11.1/072/lib/intel64/libimf.so
</span><br>
<span class="quotelev1">&gt; (0x00002b5b477fb000)
</span><br>
<span class="quotelev1">&gt;        libsvml.so =&gt; /opt/intel/Compiler/11.1/072/lib/intel64/libsvml.so
</span><br>
<span class="quotelev1">&gt; (0x00002b5b47b8f000)
</span><br>
<span class="quotelev1">&gt;        libintlc.so.5 =&gt;
</span><br>
<span class="quotelev1">&gt; /opt/intel/Compiler/11.1/072/lib/intel64/libintlc.so.5 (0x00002b5b47da5000)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; % ldd application_openmpi
</span><br>
<span class="quotelev1">&gt;       linux-vdso.so.1 =&gt;  (0x00007fff6ebff000)
</span><br>
<span class="quotelev1">&gt;        libstdc++.so.6 =&gt; /usr/lib64/libstdc++.so.6 (0x00002b6e7c17d000)
</span><br>
<span class="quotelev1">&gt;        libmpi_f90.so.0 =&gt;
</span><br>
<span class="quotelev1">&gt; /usr/mpi/intel/openmpi-1.4.3/lib64/libmpi_f90.so.0 (0x00002b6e7c489000)
</span><br>
<span class="quotelev1">&gt;        libmpi_f77.so.0 =&gt;
</span><br>
<span class="quotelev1">&gt; /usr/mpi/intel/openmpi-1.4.3/lib64/libmpi_f77.so.0 (0x00002b6e7c68d000)
</span><br>
<span class="quotelev1">&gt;        libmpi.so.0 =&gt; /usr/mpi/intel/openmpi-1.4.3/lib64/libmpi.so.0
</span><br>
<span class="quotelev1">&gt; (0x00002b6e7c8ca000)
</span><br>
<span class="quotelev1">&gt;        libopen-rte.so.0 =&gt;
</span><br>
<span class="quotelev1">&gt; /usr/mpi/intel/openmpi-1.4.3/lib64/libopen-rte.so.0 (0x00002b6e7cb9c000)
</span><br>
<span class="quotelev1">&gt;        libopen-pal.so.0 =&gt;
</span><br>
<span class="quotelev1">&gt; /usr/mpi/intel/openmpi-1.4.3/lib64/libopen-pal.so.0 (0x00002b6e7ce01000)
</span><br>
<span class="quotelev1">&gt;        libdl.so.2 =&gt; /lib64/libdl.so.2 (0x00002b6e7d077000)
</span><br>
<span class="quotelev1">&gt;        libnsl.so.1 =&gt; /lib64/libnsl.so.1 (0x00002b6e7d27c000)
</span><br>
<span class="quotelev1">&gt;        libutil.so.1 =&gt; /lib64/libutil.so.1 (0x00002b6e7d494000)
</span><br>
<span class="quotelev1">&gt;        libm.so.6 =&gt; /lib64/libm.so.6 (0x00002b6e7d697000)
</span><br>
<span class="quotelev1">&gt;        libpthread.so.0 =&gt; /lib64/libpthread.so.0 (0x00002b6e7d8ee000)
</span><br>
<span class="quotelev1">&gt;        libc.so.6 =&gt; /lib64/libc.so.6 (0x00002b6e7db0b000)
</span><br>
<span class="quotelev1">&gt;        libgcc_s.so.1 =&gt; /lib64/libgcc_s.so.1 (0x00002b6e7de69000)
</span><br>
<span class="quotelev1">&gt;        /lib64/ld-linux-x86-64.so.2 (0x00002b6e7bf5c000)
</span><br>
<span class="quotelev1">&gt;        libifport.so.5 =&gt;
</span><br>
<span class="quotelev1">&gt; /opt/intel/Compiler/11.1/072/lib/intel64/libifport.so.5 (0x00002b6e7e081000)
</span><br>
<span class="quotelev1">&gt;        libifcoremt.so.5 =&gt;
</span><br>
<span class="quotelev1">&gt; /opt/intel/Compiler/11.1/072/lib/intel64/libifcoremt.so.5
</span><br>
<span class="quotelev1">&gt; (0x00002b6e7e1ba000)
</span><br>
<span class="quotelev1">&gt;        libimf.so =&gt; /opt/intel/Compiler/11.1/072/lib/intel64/libimf.so
</span><br>
<span class="quotelev1">&gt; (0x00002b6e7e45f000)
</span><br>
<span class="quotelev1">&gt;        libsvml.so =&gt; /opt/intel/Compiler/11.1/072/lib/intel64/libsvml.so
</span><br>
<span class="quotelev1">&gt; (0x00002b6e7e7f4000)
</span><br>
<span class="quotelev1">&gt;        libintlc.so.5 =&gt;
</span><br>
<span class="quotelev1">&gt; /opt/intel/Compiler/11.1/072/lib/intel64/libintlc.so.5 (0x00002b6e7ea0a000)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -------------- next part --------------
</span><br>
<span class="quotelev1">&gt; HTML attachment scrubbed and removed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Message: 5
</span><br>
<span class="quotelev1">&gt; Date: Tue, 20 Sep 2011 07:48:04 +0700
</span><br>
<span class="quotelev1">&gt; From: Ole Nielsen &lt;ole.moller.nielsen_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] MPI hangs on multiple nodes
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Message-ID:
</span><br>
<span class="quotelev1">&gt;        &lt;CALcLSfqsYwZR_yGmTpuGwcX7AbJKntCxfQrP2quX--S5tdQtOA_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=&quot;iso-8859-1&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for your suggestion Gus, we need a way of debugging what is going
</span><br>
<span class="quotelev1">&gt; on.
</span><br>
<span class="quotelev1">&gt; I am pretty sure the problem lies with our cluster configuration. I know
</span><br>
<span class="quotelev1">&gt; MPI
</span><br>
<span class="quotelev1">&gt; simply relies on the underlying network. However, we can ping and ssh to
</span><br>
<span class="quotelev1">&gt; all
</span><br>
<span class="quotelev1">&gt; nodes (and in between and pair as well) so it is currently a mystery why
</span><br>
<span class="quotelev1">&gt; MPI
</span><br>
<span class="quotelev1">&gt; doesn't communicate across nodes on our cluster.
</span><br>
<span class="quotelev1">&gt; Two further questions for the group
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   1. I would love to run the test program connectivity.c, but cannot find
</span><br>
<span class="quotelev1">&gt;   it anywhere. Can anyone help please?
</span><br>
<span class="quotelev1">&gt;   2. After having left the job hanging over night we got the message
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [node5][[9454,1],1][../../../../../../ompi/mca/btl/tcp/btl_tcp_frag.c:216:mca_btl_tcp_frag_recv]
</span><br>
<span class="quotelev1">&gt;   mca_btl_tcp_frag_recv: readv failed: Connection timed out (110). Does
</span><br>
<span class="quotelev1">&gt; anyone
</span><br>
<span class="quotelev1">&gt;   know what this means?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers and thanks
</span><br>
<span class="quotelev1">&gt; Ole
</span><br>
<span class="quotelev1">&gt; PS - I don't see how separate buffers would help. Recall that the test
</span><br>
<span class="quotelev1">&gt; program I use works fine on other installations and indeed when run on one
</span><br>
<span class="quotelev1">&gt; the cores of one Node.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Message: 11
</span><br>
<span class="quotelev1">&gt; Date: Mon, 19 Sep 2011 10:37:02 -0400
</span><br>
<span class="quotelev1">&gt; From: Gus Correa &lt;gus_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] RE :  MPI hangs on multiple nodes
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;4E77538E.3070007_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=iso-8859-1; format=flowed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Ole
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You could try the examples/connectivity.c program in the
</span><br>
<span class="quotelev1">&gt; OpenMPI source tree, to test if everything is alright.
</span><br>
<span class="quotelev1">&gt; It also hints how to solve the buffer re-use issue
</span><br>
<span class="quotelev1">&gt; that Sebastien [rightfully] pointed out [i.e., declare separate
</span><br>
<span class="quotelev1">&gt; buffers for MPI_Send and MPI_Recv].
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt; -------------- next part --------------
</span><br>
<span class="quotelev1">&gt; HTML attachment scrubbed and removed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Message: 6
</span><br>
<span class="quotelev1">&gt; Date: Tue, 20 Sep 2011 09:23:44 +0700
</span><br>
<span class="quotelev1">&gt; From: Ole Nielsen &lt;ole.moller.nielsen_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] MPI hangs on multiple nodes
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Message-ID:
</span><br>
<span class="quotelev1">&gt;        &lt;CALcLSfonKTtkp9L8XMTFg_4LRFYP2o1qXVNXykiCMC5gq=oVQg_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=&quot;iso-8859-1&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi all - and sorry for the multiple postings, but I have more information.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1: After a reboot of two nodes I ran again, and the inter-node freeze
</span><br>
<span class="quotelev1">&gt; didn't
</span><br>
<span class="quotelev1">&gt; happen until the third iteration. I take that to mean that the basic
</span><br>
<span class="quotelev1">&gt; communication works, but that something is saturating. Is there some notion
</span><br>
<span class="quotelev1">&gt; of buffer size somewhere in the MPI system that could explain this?
</span><br>
<span class="quotelev1">&gt; 2: The nodes have 4 ethernet cards each. Could the mapping be a problem?
</span><br>
<span class="quotelev1">&gt; 3: The cpus are running at a 100% for all processes involved in the freeze
</span><br>
<span class="quotelev1">&gt; 4: The same test program (
</span><br>
<span class="quotelev1">&gt; <a href="http://code.google.com/p/pypar/source/browse/source/mpi_test.c">http://code.google.com/p/pypar/source/browse/source/mpi_test.c</a>) works fine
</span><br>
<span class="quotelev1">&gt; when run within one node so the problem must be with MPI and/or our
</span><br>
<span class="quotelev1">&gt; network.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 5: The network and ssh works otherwise fine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Again many thanks for any hint that can get us going again. The main thing
</span><br>
<span class="quotelev1">&gt; we need is some diagnostics that may point to what causes this problem for
</span><br>
<span class="quotelev1">&gt; MPI.
</span><br>
<span class="quotelev1">&gt; Cheers
</span><br>
<span class="quotelev1">&gt; Ole Nielsen
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here's the output which shows the freeze in the third iteration:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; nielso_at_alamba:~/sandpit/pypar/source$ mpirun --hostfile /etc/mpihosts
</span><br>
<span class="quotelev1">&gt; --host
</span><br>
<span class="quotelev1">&gt; node5,node6 --npernode 2 a.out
</span><br>
<span class="quotelev1">&gt; Number of processes = 4
</span><br>
<span class="quotelev1">&gt; Test repeated 3 times for reliability
</span><br>
<span class="quotelev1">&gt; I am process 2 on node node6
</span><br>
<span class="quotelev1">&gt; P2: Waiting to receive from to P1
</span><br>
<span class="quotelev1">&gt; P2: Sending to to P3
</span><br>
<span class="quotelev1">&gt; I am process 3 on node node6
</span><br>
<span class="quotelev1">&gt; P3: Waiting to receive from to P2
</span><br>
<span class="quotelev1">&gt; I am process 1 on node node5
</span><br>
<span class="quotelev1">&gt; P1: Waiting to receive from to P0
</span><br>
<span class="quotelev1">&gt; P1: Sending to to P2
</span><br>
<span class="quotelev1">&gt; P1: Waiting to receive from to P0
</span><br>
<span class="quotelev1">&gt; I am process 0 on node node5
</span><br>
<span class="quotelev1">&gt; Run 1 of 3
</span><br>
<span class="quotelev1">&gt; P0: Sending to P1
</span><br>
<span class="quotelev1">&gt; P0: Waiting to receive from P3
</span><br>
<span class="quotelev1">&gt; P2: Waiting to receive from to P1
</span><br>
<span class="quotelev1">&gt; P3: Sending to to P0
</span><br>
<span class="quotelev1">&gt; P3: Waiting to receive from to P2
</span><br>
<span class="quotelev1">&gt; P1: Sending to to P2
</span><br>
<span class="quotelev1">&gt; P0: Received from to P3
</span><br>
<span class="quotelev1">&gt; Run 2 of 3
</span><br>
<span class="quotelev1">&gt; P0: Sending to P1
</span><br>
<span class="quotelev1">&gt; P0: Waiting to receive from P3
</span><br>
<span class="quotelev1">&gt; P1: Waiting to receive from to P0
</span><br>
<span class="quotelev1">&gt; -------------- next part --------------
</span><br>
<span class="quotelev1">&gt; HTML attachment scrubbed and removed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Message: 7
</span><br>
<span class="quotelev1">&gt; Date: Tue, 20 Sep 2011 13:25:28 +0200
</span><br>
<span class="quotelev1">&gt; From: Reuti &lt;reuti_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] How could OpenMPI (or MVAPICH) affect
</span><br>
<span class="quotelev1">&gt;        floating-point results?
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID:
</span><br>
<span class="quotelev1">&gt;        &lt;4E155B3E-104F-465C-BF2B-8D145C010FD2_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=windows-1252
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Am 20.09.2011 um 00:41 schrieb Blosch, Edwin L:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am observing differences in floating-point results from an application
</span><br>
<span class="quotelev1">&gt; program that appear to be related to whether I link with OpenMPI 1.4.3 or
</span><br>
<span class="quotelev1">&gt; MVAPICH 1.2.0.  Both packages were built with the same installation of Intel
</span><br>
<span class="quotelev1">&gt; 11.1, as well as the application program; identical flags passed to the
</span><br>
<span class="quotelev1">&gt; compiler in each case.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I?ve tracked down some differences in a compute-only routine where I?ve
</span><br>
<span class="quotelev1">&gt; printed out the inputs to the routine (to 18 digits) ; the inputs are
</span><br>
<span class="quotelev1">&gt; identical.  The output numbers are different in the 16th place (perhaps a
</span><br>
<span class="quotelev1">&gt; few in the 15th place).  These differences only show up for optimized code,
</span><br>
<span class="quotelev1">&gt; not for ?O0.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; My assumption is that some optimized math intrinsic is being replaced
</span><br>
<span class="quotelev1">&gt; dynamically, but I do not know how to confirm this.  Anyone have guidance to
</span><br>
<span class="quotelev1">&gt; offer? Or similar experience?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; yes, I face it often but always at a magnitude where it's not of any
</span><br>
<span class="quotelev1">&gt; concern (and not related to any MPI). Due to the limited precision in
</span><br>
<span class="quotelev1">&gt; computers, a simple reordering of operation (although being equivalent in a
</span><br>
<span class="quotelev1">&gt; mathematical sense) can lead to different results. Removing the anomalies
</span><br>
<span class="quotelev1">&gt; with -O0 could proof that.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The other point I heard especially for the x86 instruction set is, that the
</span><br>
<span class="quotelev1">&gt; internal FPU has still 80 bits, while the presentation in memory is only 64
</span><br>
<span class="quotelev1">&gt; bit. Hence when all can be done in the registers, the result can be
</span><br>
<span class="quotelev1">&gt; different compared to the case when some interim results need to be stored
</span><br>
<span class="quotelev1">&gt; to RAM. For the Portland compiler there is a switch -Kieee -pc64 to force it
</span><br>
<span class="quotelev1">&gt; to stay always in 64 bit, and a similar one for Intel is -mp (now
</span><br>
<span class="quotelev1">&gt; -fltconsistency) and -mp1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.pgroup.com/doc/pgiref.pdf">http://www.pgroup.com/doc/pgiref.pdf</a> (page 42)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://software.intel.com/file/6335">http://software.intel.com/file/6335</a> (page 260)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You could try with the mentioned switches whether you get more consistent
</span><br>
<span class="quotelev1">&gt; output.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If there would be a MPI ABI, and you could just drop in any MPI library, it
</span><br>
<span class="quotelev1">&gt; would be quite easy to spot the real point where the discrepancy occured.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks very much
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Ed
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Just for what it?s worth, here?s the output of ldd:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; % ldd application_mvapich
</span><br>
<span class="quotelev2">&gt; &gt;         linux-vdso.so.1 =&gt;  (0x00007fffe3746000)
</span><br>
<span class="quotelev2">&gt; &gt;         libstdc++.so.6 =&gt; /usr/lib64/libstdc++.so.6 (0x00002b5b45fc1000)
</span><br>
<span class="quotelev2">&gt; &gt;         libmpich.so.1.0 =&gt;
</span><br>
<span class="quotelev1">&gt; /usr/mpi/intel/mvapich-1.2.0/lib/shared/libmpich.so.1.0 (0x00002b5b462cd000)
</span><br>
<span class="quotelev2">&gt; &gt;         libibverbs.so.1 =&gt; /usr/lib64/libibverbs.so.1
</span><br>
<span class="quotelev1">&gt; (0x00002b5b465ed000)
</span><br>
<span class="quotelev2">&gt; &gt;         libibumad.so.3 =&gt; /usr/lib64/libibumad.so.3 (0x00002b5b467fc000)
</span><br>
<span class="quotelev2">&gt; &gt;         libpthread.so.0 =&gt; /lib64/libpthread.so.0 (0x00002b5b46a04000)
</span><br>
<span class="quotelev2">&gt; &gt;         librt.so.1 =&gt; /lib64/librt.so.1 (0x00002b5b46c21000)
</span><br>
<span class="quotelev2">&gt; &gt;         libm.so.6 =&gt; /lib64/libm.so.6 (0x00002b5b46e2a000)
</span><br>
<span class="quotelev2">&gt; &gt;         libdl.so.2 =&gt; /lib64/libdl.so.2 (0x00002b5b47081000)
</span><br>
<span class="quotelev2">&gt; &gt;         libc.so.6 =&gt; /lib64/libc.so.6 (0x00002b5b47285000)
</span><br>
<span class="quotelev2">&gt; &gt;         libgcc_s.so.1 =&gt; /lib64/libgcc_s.so.1 (0x00002b5b475e3000)
</span><br>
<span class="quotelev2">&gt; &gt;         /lib64/ld-linux-x86-64.so.2 (0x00002b5b45da0000)
</span><br>
<span class="quotelev2">&gt; &gt;         libimf.so =&gt; /opt/intel/Compiler/11.1/072/lib/intel64/libimf.so
</span><br>
<span class="quotelev1">&gt; (0x00002b5b477fb000)
</span><br>
<span class="quotelev2">&gt; &gt;         libsvml.so =&gt; /opt/intel/Compiler/11.1/072/lib/intel64/libsvml.so
</span><br>
<span class="quotelev1">&gt; (0x00002b5b47b8f000)
</span><br>
<span class="quotelev2">&gt; &gt;         libintlc.so.5 =&gt;
</span><br>
<span class="quotelev1">&gt; /opt/intel/Compiler/11.1/072/lib/intel64/libintlc.so.5 (0x00002b5b47da5000)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; % ldd application_openmpi
</span><br>
<span class="quotelev2">&gt; &gt;        linux-vdso.so.1 =&gt;  (0x00007fff6ebff000)
</span><br>
<span class="quotelev2">&gt; &gt;         libstdc++.so.6 =&gt; /usr/lib64/libstdc++.so.6 (0x00002b6e7c17d000)
</span><br>
<span class="quotelev2">&gt; &gt;         libmpi_f90.so.0 =&gt;
</span><br>
<span class="quotelev1">&gt; /usr/mpi/intel/openmpi-1.4.3/lib64/libmpi_f90.so.0 (0x00002b6e7c489000)
</span><br>
<span class="quotelev2">&gt; &gt;         libmpi_f77.so.0 =&gt;
</span><br>
<span class="quotelev1">&gt; /usr/mpi/intel/openmpi-1.4.3/lib64/libmpi_f77.so.0 (0x00002b6e7c68d000)
</span><br>
<span class="quotelev2">&gt; &gt;         libmpi.so.0 =&gt; /usr/mpi/intel/openmpi-1.4.3/lib64/libmpi.so.0
</span><br>
<span class="quotelev1">&gt; (0x00002b6e7c8ca000)
</span><br>
<span class="quotelev2">&gt; &gt;         libopen-rte.so.0 =&gt;
</span><br>
<span class="quotelev1">&gt; /usr/mpi/intel/openmpi-1.4.3/lib64/libopen-rte.so.0 (0x00002b6e7cb9c000)
</span><br>
<span class="quotelev2">&gt; &gt;         libopen-pal.so.0 =&gt;
</span><br>
<span class="quotelev1">&gt; /usr/mpi/intel/openmpi-1.4.3/lib64/libopen-pal.so.0 (0x00002b6e7ce01000)
</span><br>
<span class="quotelev2">&gt; &gt;         libdl.so.2 =&gt; /lib64/libdl.so.2 (0x00002b6e7d077000)
</span><br>
<span class="quotelev2">&gt; &gt;         libnsl.so.1 =&gt; /lib64/libnsl.so.1 (0x00002b6e7d27c000)
</span><br>
<span class="quotelev2">&gt; &gt;         libutil.so.1 =&gt; /lib64/libutil.so.1 (0x00002b6e7d494000)
</span><br>
<span class="quotelev2">&gt; &gt;         libm.so.6 =&gt; /lib64/libm.so.6 (0x00002b6e7d697000)
</span><br>
<span class="quotelev2">&gt; &gt;         libpthread.so.0 =&gt; /lib64/libpthread.so.0 (0x00002b6e7d8ee000)
</span><br>
<span class="quotelev2">&gt; &gt;         libc.so.6 =&gt; /lib64/libc.so.6 (0x00002b6e7db0b000)
</span><br>
<span class="quotelev2">&gt; &gt;         libgcc_s.so.1 =&gt; /lib64/libgcc_s.so.1 (0x00002b6e7de69000)
</span><br>
<span class="quotelev2">&gt; &gt;         /lib64/ld-linux-x86-64.so.2 (0x00002b6e7bf5c000)
</span><br>
<span class="quotelev2">&gt; &gt;         libifport.so.5 =&gt;
</span><br>
<span class="quotelev1">&gt; /opt/intel/Compiler/11.1/072/lib/intel64/libifport.so.5 (0x00002b6e7e081000)
</span><br>
<span class="quotelev2">&gt; &gt;         libifcoremt.so.5 =&gt;
</span><br>
<span class="quotelev1">&gt; /opt/intel/Compiler/11.1/072/lib/intel64/libifcoremt.so.5
</span><br>
<span class="quotelev1">&gt; (0x00002b6e7e1ba000)
</span><br>
<span class="quotelev2">&gt; &gt;         libimf.so =&gt; /opt/intel/Compiler/11.1/072/lib/intel64/libimf.so
</span><br>
<span class="quotelev1">&gt; (0x00002b6e7e45f000)
</span><br>
<span class="quotelev2">&gt; &gt;         libsvml.so =&gt; /opt/intel/Compiler/11.1/072/lib/intel64/libsvml.so
</span><br>
<span class="quotelev1">&gt; (0x00002b6e7e7f4000)
</span><br>
<span class="quotelev2">&gt; &gt;         libintlc.so.5 =&gt;
</span><br>
<span class="quotelev1">&gt; /opt/intel/Compiler/11.1/072/lib/intel64/libintlc.so.5 (0x00002b6e7ea0a000)
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Message: 8
</span><br>
<span class="quotelev1">&gt; Date: Tue, 20 Sep 2011 07:52:41 -0400
</span><br>
<span class="quotelev1">&gt; From: Tim Prince &lt;n8tm_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] How could OpenMPI (or MVAPICH) affect
</span><br>
<span class="quotelev1">&gt;        floating-point results?
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;4E787E89.5090205_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=windows-1252; format=flowed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 9/20/2011 7:25 AM, Reuti wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Am 20.09.2011 um 00:41 schrieb Blosch, Edwin L:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I am observing differences in floating-point results from an application
</span><br>
<span class="quotelev1">&gt; program that appear to be related to whether I link with OpenMPI 1.4.3 or
</span><br>
<span class="quotelev1">&gt; MVAPICH 1.2.0.  Both packages were built with the same installation of Intel
</span><br>
<span class="quotelev1">&gt; 11.1, as well as the application program; identical flags passed to the
</span><br>
<span class="quotelev1">&gt; compiler in each case.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I?ve tracked down some differences in a compute-only routine where I?ve
</span><br>
<span class="quotelev1">&gt; printed out the inputs to the routine (to 18 digits) ; the inputs are
</span><br>
<span class="quotelev1">&gt; identical.  The output numbers are different in the 16th place (perhaps a
</span><br>
<span class="quotelev1">&gt; few in the 15th place).  These differences only show up for optimized code,
</span><br>
<span class="quotelev1">&gt; not for ?O0.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; My assumption is that some optimized math intrinsic is being replaced
</span><br>
<span class="quotelev1">&gt; dynamically, but I do not know how to confirm this.  Anyone have guidance to
</span><br>
<span class="quotelev1">&gt; offer? Or similar experience?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; yes, I face it often but always at a magnitude where it's not of any
</span><br>
<span class="quotelev1">&gt; concern (and not related to any MPI). Due to the limited precision in
</span><br>
<span class="quotelev1">&gt; computers, a simple reordering of operation (although being equivalent in a
</span><br>
<span class="quotelev1">&gt; mathematical sense) can lead to different results. Removing the anomalies
</span><br>
<span class="quotelev1">&gt; with -O0 could proof that.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The other point I heard especially for the x86 instruction set is, that
</span><br>
<span class="quotelev1">&gt; the internal FPU has still 80 bits, while the presentation in memory is only
</span><br>
<span class="quotelev1">&gt; 64 bit. Hence when all can be done in the registers, the result can be
</span><br>
<span class="quotelev1">&gt; different compared to the case when some interim results need to be stored
</span><br>
<span class="quotelev1">&gt; to RAM. For the Portland compiler there is a switch -Kieee -pc64 to force it
</span><br>
<span class="quotelev1">&gt; to stay always in 64 bit, and a similar one for Intel is -mp (now
</span><br>
<span class="quotelev1">&gt; -fltconsistency) and -mp1.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; Diagnostics below indicate that ifort 11.1 64-bit is in use.  The
</span><br>
<span class="quotelev1">&gt; options aren't the same as Reuti's &quot;now&quot; version (a 32-bit compiler
</span><br>
<span class="quotelev1">&gt; which hasn't been supported for 3 years or more?).
</span><br>
<span class="quotelev1">&gt; With ifort 10.1 and more recent, you would set at least
</span><br>
<span class="quotelev1">&gt; -assume protect_parens -prec-div -prec-sqrt
</span><br>
<span class="quotelev1">&gt; if you are interested in numerical consistency.  If you don't want
</span><br>
<span class="quotelev1">&gt; auto-vectorization of sum reductions, you would use instead
</span><br>
<span class="quotelev1">&gt; -fp-model source -ftz
</span><br>
<span class="quotelev1">&gt; (ftz sets underflow mode back to abrupt, while &quot;source&quot; sets gradual).
</span><br>
<span class="quotelev1">&gt; It may be possible to expose 80-bit x87 by setting the ancient -mp
</span><br>
<span class="quotelev1">&gt; option, but such a course can't be recommended without additional cautions.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Quoted comment from OP seem to show a somewhat different question: Does
</span><br>
<span class="quotelev1">&gt; OpenMPI implement any operations in a different way from MVAPICH?  I
</span><br>
<span class="quotelev1">&gt; would think it probable that the answer could be affirmative for
</span><br>
<span class="quotelev1">&gt; operations such as allreduce, but this leads well outside my expertise
</span><br>
<span class="quotelev1">&gt; with respect to specific MPI implementations.  It isn't out of the
</span><br>
<span class="quotelev1">&gt; question to suspect that such differences might be aggravated when using
</span><br>
<span class="quotelev1">&gt; excessively aggressive ifort options such as -fast.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;          libifport.so.5 =&gt;
</span><br>
<span class="quotelev1">&gt;  /opt/intel/Compiler/11.1/072/lib/intel64/libifport.so.5
</span><br>
<span class="quotelev1">&gt; (0x00002b6e7e081000)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;          libifcoremt.so.5 =&gt;
</span><br>
<span class="quotelev1">&gt;  /opt/intel/Compiler/11.1/072/lib/intel64/libifcoremt.so.5
</span><br>
<span class="quotelev1">&gt; (0x00002b6e7e1ba000)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;          libimf.so =&gt;
</span><br>
<span class="quotelev1">&gt;  /opt/intel/Compiler/11.1/072/lib/intel64/libimf.so (0x00002b6e7e45f000)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;          libsvml.so =&gt;
</span><br>
<span class="quotelev1">&gt;  /opt/intel/Compiler/11.1/072/lib/intel64/libsvml.so (0x00002b6e7e7f4000)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;          libintlc.so.5 =&gt;
</span><br>
<span class="quotelev1">&gt;  /opt/intel/Compiler/11.1/072/lib/intel64/libintlc.so.5 (0x00002b6e7ea0a000)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Tim Prince
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Message: 9
</span><br>
<span class="quotelev1">&gt; Date: Tue, 20 Sep 2011 07:55:26 -0400
</span><br>
<span class="quotelev1">&gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] How could OpenMPI (or MVAPICH) affect
</span><br>
<span class="quotelev1">&gt;        floating-point results?
</span><br>
<span class="quotelev1">&gt; To: tprince_at_[hidden], Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;911CADEC-4F9B-4197-8ADE-6F731B44B3F3_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=us-ascii
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 20, 2011, at 7:52 AM, Tim Prince wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Quoted comment from OP seem to show a somewhat different question: Does
</span><br>
<span class="quotelev1">&gt; OpenMPI implement any operations in a different way from MVAPICH?  I would
</span><br>
<span class="quotelev1">&gt; think it probable that the answer could be affirmative for operations such
</span><br>
<span class="quotelev1">&gt; as allreduce, but this leads well outside my expertise with respect to
</span><br>
<span class="quotelev1">&gt; specific MPI implementations.  It isn't out of the question to suspect that
</span><br>
<span class="quotelev1">&gt; such differences might be aggravated when using excessively aggressive ifort
</span><br>
<span class="quotelev1">&gt; options such as -fast.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is 'zactly what I was going to say -- reductions between Open MPI and
</span><br>
<span class="quotelev1">&gt; MVAPICH may well perform global arithmetic operations in different orders.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Message: 10
</span><br>
<span class="quotelev1">&gt; Date: Tue, 20 Sep 2011 08:11:34 -0400
</span><br>
<span class="quotelev1">&gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] MPI hangs on multiple nodes
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;DDDBC7A5-A13B-459F-B4CC-984195A40204_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=us-ascii
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 19, 2011, at 10:23 PM, Ole Nielsen wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi all - and sorry for the multiple postings, but I have more
</span><br>
<span class="quotelev1">&gt; information.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +1 on Eugene's comments.  The test program looks fine to me.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FWIW, you don't need -lmpi to compile your program; OMPI's wrapper compiler
</span><br>
<span class="quotelev1">&gt; allows you to just:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    mpicc mpi_test.c -o mpi_test -Wall
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; 1: After a reboot of two nodes I ran again, and the inter-node freeze
</span><br>
<span class="quotelev1">&gt; didn't happen until the third iteration. I take that to mean that the basic
</span><br>
<span class="quotelev1">&gt; communication works, but that something is saturating. Is there some notion
</span><br>
<span class="quotelev1">&gt; of buffer size somewhere in the MPI system that could explain this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hmm.  This is not a good sign; it somewhat indicates a problem with your
</span><br>
<span class="quotelev1">&gt; OS.  Based on this email and your prior emails, I'm guessing you're using
</span><br>
<span class="quotelev1">&gt; TCP for communication, and that the problem is based on inter-node
</span><br>
<span class="quotelev1">&gt; communication (e.g., the problem would occur even if you only run 1 process
</span><br>
<span class="quotelev1">&gt; per machine, but does not occur if you run all N processes on a single
</span><br>
<span class="quotelev1">&gt; machine, per your #4, below).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; 2: The nodes have 4 ethernet cards each. Could the mapping be a problem?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Shouldn't be.  If it runs at all, then it should run fine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do you have all your ethernet cards on a single subnet, or multiple
</span><br>
<span class="quotelev1">&gt; subnets?  I have heard of problems when you have multiple ethernet cards on
</span><br>
<span class="quotelev1">&gt; the same subnet -- I believe there's some non-determinism in than case in
</span><br>
<span class="quotelev1">&gt; what wire/NIC a packet will actually go out, which may be problematic for
</span><br>
<span class="quotelev1">&gt; OMPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; 3: The cpus are running at a 100% for all processes involved in the
</span><br>
<span class="quotelev1">&gt; freeze
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That's probably right.  OMPI aggressively polls for progress as a way to
</span><br>
<span class="quotelev1">&gt; decrease latency.  So all processes are trying to make progress, and
</span><br>
<span class="quotelev1">&gt; therefore are aggressively polling, eating up 100% of the CPU.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; 4: The same test program (
</span><br>
<span class="quotelev1">&gt; <a href="http://code.google.com/p/pypar/source/browse/source/mpi_test.c">http://code.google.com/p/pypar/source/browse/source/mpi_test.c</a>) works fine
</span><br>
<span class="quotelev1">&gt; when run within one node so the problem must be with MPI and/or our network.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This helps identify the issue as the TCP communication, not the shared
</span><br>
<span class="quotelev1">&gt; memory communication.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; 5: The network and ssh works otherwise fine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Good.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Again many thanks for any hint that can get us going again. The main
</span><br>
<span class="quotelev1">&gt; thing we need is some diagnostics that may point to what causes this problem
</span><br>
<span class="quotelev1">&gt; for MPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you are running with multiple NICs on the same subnet, change them to
</span><br>
<span class="quotelev1">&gt; multiple subnets and see if it starts working fine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If they're on different subnets, try using the btl_tcp_if_include /
</span><br>
<span class="quotelev1">&gt; btl_tcp_if_exclude MCA parameters to exclude certain networks and see if
</span><br>
<span class="quotelev1">&gt; they're the problematic ones.  Keep in mind that ..._include and ..._exclude
</span><br>
<span class="quotelev1">&gt; are mutually exclusive; you should only specify one.  And if you specify
</span><br>
<span class="quotelev1">&gt; exclude, be sure to exclude loopback.  E.g:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  mpirun --mca btl_if_include eth0,eth1 -np 16 --hostfile hostfile mpi_test
</span><br>
<span class="quotelev1">&gt; or
</span><br>
<span class="quotelev1">&gt;  mpirun --mca btl_if_exclude lo0,eth1 -np 16 --hostfile hostfile mpi_test
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Message: 11
</span><br>
<span class="quotelev1">&gt; Date: Tue, 20 Sep 2011 15:14:44 +0300
</span><br>
<span class="quotelev1">&gt; From: Yevgeny Kliteynik &lt;kliteyn_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Latency of 250 microseconds with Open-MPI
</span><br>
<span class="quotelev1">&gt;        1.4.3, Mellanox Infiniband and 256 MPI ranks
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;4E7883B4.7080309_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=ISO-8859-1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi S?bastien,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I understand you correctly, you are running your application on two
</span><br>
<span class="quotelev1">&gt; different MPIs on two different clusters with two different IB vendors.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Could you make a comparison more &quot;apples to apples&quot;-ish?
</span><br>
<span class="quotelev1">&gt; For instance:
</span><br>
<span class="quotelev1">&gt;  - run the same version of Open MPI on both clusters
</span><br>
<span class="quotelev1">&gt;  - run the same version of MVAPICH on both clusters
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- YK
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 18-Sep-11 1:59 AM, S?bastien Boisvert wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hello,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Open-MPI 1.4.3 on Mellanox Infiniband hardware gives a latency of 250
</span><br>
<span class="quotelev1">&gt; microseconds with 256 MPI ranks on super-computer A (name is colosse).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The same software gives a latency of 10 microseconds with MVAPICH2 and
</span><br>
<span class="quotelev1">&gt; QLogic Infiniband hardware with 512 MPI ranks on super-computer B (name is
</span><br>
<span class="quotelev1">&gt; guillimin).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Here are the relevant information listed in
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 1. Check the FAQ first.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; done !
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 2. The version of Open MPI that you're using.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Open-MPI 1.4.3
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 3. The config.log file from the top-level Open MPI directory, if
</span><br>
<span class="quotelev1">&gt; available (please compress!).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; See below.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Command file: <a href="http://pastebin.com/mW32ntSJ">http://pastebin.com/mW32ntSJ</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 4. The output of the &quot;ompi_info --all&quot; command from the node where you're
</span><br>
<span class="quotelev1">&gt; invoking mpirun.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ompi_info -a on colosse: <a href="http://pastebin.com/RPyY9s24">http://pastebin.com/RPyY9s24</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 5. If running on more than one node -- especially if you're having
</span><br>
<span class="quotelev1">&gt; problems launching Open MPI processes -- also include the output of the
</span><br>
<span class="quotelev1">&gt; &quot;ompi_info -v ompi full --parsable&quot; command from each node on which you're
</span><br>
<span class="quotelev1">&gt; trying to run.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am not having problems launching Open-MPI processes.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 6. A detailed description of what is failing.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Open-MPI 1.4.3 on Mellanox Infiniband hardware give a latency of 250
</span><br>
<span class="quotelev1">&gt; microseconds with 256 MPI ranks on super-computer A (name is colosse).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The same software gives a latency of 10 microseconds with MVAPICH2 and
</span><br>
<span class="quotelev1">&gt; QLogic Infiniband hardware on 512 MPI ranks on super-computer B (name is
</span><br>
<span class="quotelev1">&gt; guillimin).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Details follow.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am developing a distributed genome assembler that runs with the
</span><br>
<span class="quotelev1">&gt; message-passing interface (I am a PhD student).
</span><br>
<span class="quotelev2">&gt; &gt; It is called Ray. Link: <a href="http://github.com/sebhtml/ray">http://github.com/sebhtml/ray</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I recently added the option -test-network-only so that Ray can be used to
</span><br>
<span class="quotelev1">&gt; test the latency. Each MPI rank has to send 100000 messages (4000 bytes
</span><br>
<span class="quotelev1">&gt; each), one by one.
</span><br>
<span class="quotelev2">&gt; &gt; The destination of any message is picked up at random.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On colosse, a super-computer located at Laval University, I get an
</span><br>
<span class="quotelev1">&gt; average latency of 250 microseconds with the test done in Ray.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; See <a href="http://pastebin.com/9nyjSy5z">http://pastebin.com/9nyjSy5z</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On colosse, the hardware is Mellanox Infiniband QDR ConnectX and the MPI
</span><br>
<span class="quotelev1">&gt; middleware is Open-MPI 1.4.3 compiled with gcc 4.4.2.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; colosse has 8 compute cores per node (Intel Nehalem).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Testing the latency with ibv_rc_pingpong on colosse gives 11
</span><br>
<span class="quotelev1">&gt; microseconds.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    local address:  LID 0x048e, QPN 0x1c005c, PSN 0xf7c66b
</span><br>
<span class="quotelev2">&gt; &gt;    remote address: LID 0x018c, QPN 0x2c005c, PSN 0x5428e6
</span><br>
<span class="quotelev2">&gt; &gt; 8192000 bytes in 0.01 seconds = 5776.64 Mbit/sec
</span><br>
<span class="quotelev2">&gt; &gt; 1000 iters in 0.01 seconds = 11.35 usec/iter
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; So I know that the Infiniband has a correct latency between two HCAs
</span><br>
<span class="quotelev1">&gt; because of the output of ibv_rc_pingpong.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Adding the parameter --mca btl_openib_verbose 1 to mpirun shows that
</span><br>
<span class="quotelev1">&gt; Open-MPI detects the hardware correctly:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [r107-n57][[59764,1],0][btl_openib_ini.c:166:ompi_btl_openib_ini_query]
</span><br>
<span class="quotelev1">&gt; Querying INI files for vendor 0x02c9, part ID 26428
</span><br>
<span class="quotelev2">&gt; &gt; [r107-n57][[59764,1],0][btl_openib_ini.c:185:ompi_btl_openib_ini_query]
</span><br>
<span class="quotelev1">&gt; Found corresponding INI values: Mellanox Hermon
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; see <a href="http://pastebin.com/pz03f0B3">http://pastebin.com/pz03f0B3</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; So I don't think this is the problem described in the FAQ (
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=openfabrics#mellanox-connectx-poor-latency">http://www.open-mpi.org/faq/?category=openfabrics#mellanox-connectx-poor-latency</a>)
</span><br>
<span class="quotelev2">&gt; &gt; and on the mailing list (
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2007/10/4238.php">http://www.open-mpi.org/community/lists/users/2007/10/4238.php</a> ) because
</span><br>
<span class="quotelev1">&gt; the INI values are found.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Running the network test implemented in Ray on 32 MPI ranks, I get an
</span><br>
<span class="quotelev1">&gt; average latency of 65 microseconds.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; See <a href="http://pastebin.com/nWDmGhvM">http://pastebin.com/nWDmGhvM</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thus, with 256 MPI ranks I get an average latency of 250 microseconds and
</span><br>
<span class="quotelev1">&gt; with 32 MPI ranks I get 65 microseconds.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Running the network test on 32 MPI ranks again but only allowing the MPI
</span><br>
<span class="quotelev1">&gt; rank 0 to send messages gives a latency of 10 microseconds for this rank.
</span><br>
<span class="quotelev2">&gt; &gt; See <a href="http://pastebin.com/dWMXsHpa">http://pastebin.com/dWMXsHpa</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Because I get 10 microseconds in the network test in Ray when only the
</span><br>
<span class="quotelev1">&gt; MPI rank sends messages, I would say that there may be some I/O contention.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; To test this hypothesis, I re-ran the test, but allowed only 1 MPI rank
</span><br>
<span class="quotelev1">&gt; per node to send messages (there are 8 MPI ranks per node and a total of 32
</span><br>
<span class="quotelev1">&gt; MPI ranks).
</span><br>
<span class="quotelev2">&gt; &gt; Ranks 0, 8, 16 and 24 all reported 13 microseconds. See
</span><br>
<span class="quotelev1">&gt; <a href="http://pastebin.com/h84Fif3g">http://pastebin.com/h84Fif3g</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The next test was to allow 2 MPI ranks on each node to send messages.
</span><br>
<span class="quotelev1">&gt; Ranks 0, 1, 8, 9, 16, 17, 24, and 25 reported 15 microseconds.
</span><br>
<span class="quotelev2">&gt; &gt; See <a href="http://pastebin.com/REdhJXkS">http://pastebin.com/REdhJXkS</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; With 3 MPI ranks per node that can send messages, ranks 0, 1, 2, 8, 9,
</span><br>
<span class="quotelev1">&gt; 10, 16, 17, 18, 24, 25, 26 reported 20 microseconds. See
</span><br>
<span class="quotelev1">&gt; <a href="http://pastebin.com/TCd6xpuC">http://pastebin.com/TCd6xpuC</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Finally, with 4 MPI ranks per node that can send messages, I got 23
</span><br>
<span class="quotelev1">&gt; microseconds. See <a href="http://pastebin.com/V8zjae7s">http://pastebin.com/V8zjae7s</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; So the MPI ranks on a given node seem to fight for access to the HCA
</span><br>
<span class="quotelev1">&gt; port.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Each colosse node has 1 port (ibv_devinfo) and the max_mtu is 2048 bytes.
</span><br>
<span class="quotelev1">&gt; See <a href="http://pastebin.com/VXMAZdeZ">http://pastebin.com/VXMAZdeZ</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; At this point, some may think that there may be a bug in the network test
</span><br>
<span class="quotelev1">&gt; itself. So I tested the same code on another super-computer.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On guillimin, a super-computer located at McGill University, I get an
</span><br>
<span class="quotelev1">&gt; average latency (with Ray -test-network-only) of 10 microseconds when
</span><br>
<span class="quotelev1">&gt; running Ray on 512 MPI ranks.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; See <a href="http://pastebin.com/nCKF8Xg6">http://pastebin.com/nCKF8Xg6</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On guillimin, the hardware is Qlogic Infiniband QDR and the MPI
</span><br>
<span class="quotelev1">&gt; middleware is MVAPICH2 1.6.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thus, I know that the network test in Ray works as expected because
</span><br>
<span class="quotelev1">&gt; results on guillimin show a latency of 10 microseconds for 512 MPI ranks.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; guillimin also has 8 compute cores per node (Intel Nehalem).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On guillimin, each node has one port (ibv_devinfo) and the max_mtu of
</span><br>
<span class="quotelev1">&gt; HCAs is 4096 bytes. See <a href="http://pastebin.com/35T8N5t8">http://pastebin.com/35T8N5t8</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; In Ray, only the following MPI functions are utilised:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; - MPI_Init
</span><br>
<span class="quotelev2">&gt; &gt; - MPI_Comm_rank
</span><br>
<span class="quotelev2">&gt; &gt; - MPI_Comm_size
</span><br>
<span class="quotelev2">&gt; &gt; - MPI_Finalize
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; - MPI_Isend
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; - MPI_Request_free
</span><br>
<span class="quotelev2">&gt; &gt; - MPI_Test
</span><br>
<span class="quotelev2">&gt; &gt; - MPI_Get_count
</span><br>
<span class="quotelev2">&gt; &gt; - MPI_Start
</span><br>
<span class="quotelev2">&gt; &gt; - MPI_Recv_init
</span><br>
<span class="quotelev2">&gt; &gt; - MPI_Cancel
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; - MPI_Get_processor_name
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 7. Please include information about your network:
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/faq/?category=openfabrics#ofa-troubleshoot">http://www.open-mpi.org/faq/?category=openfabrics#ofa-troubleshoot</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Type: Infiniband
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    7.1. Which OpenFabrics version are you running?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ofed-scripts-1.4.2-0_sunhpc1
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; libibverbs-1.1.3-2.el5
</span><br>
<span class="quotelev2">&gt; &gt; libibverbs-utils-1.1.3-2.el5
</span><br>
<span class="quotelev2">&gt; &gt; libibverbs-devel-1.1.3-2.el5
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    7.2. What distro and version of Linux are you running? What is your
</span><br>
<span class="quotelev1">&gt; kernel version?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; CentOS release 5.6 (Final)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Linux colosse1 2.6.18-238.19.1.el5 #1 SMP Fri Jul 15 07:31:24 EDT 2011
</span><br>
<span class="quotelev1">&gt; x86_64 x86_64 x86_64 GNU/Linux
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    7.3. Which subnet manager are you running? (e.g., OpenSM, a
</span><br>
<span class="quotelev1">&gt; vendor-specific subnet manager, etc.)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; opensm-libs-3.3.3-1.el5_6.1
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    7.4. What is the output of the ibv_devinfo command
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      hca_id: mlx4_0
</span><br>
<span class="quotelev2">&gt; &gt;              fw_ver:                         2.7.000
</span><br>
<span class="quotelev2">&gt; &gt;              node_guid:                      5080:0200:008d:8f88
</span><br>
<span class="quotelev2">&gt; &gt;              sys_image_guid:                 5080:0200:008d:8f8b
</span><br>
<span class="quotelev2">&gt; &gt;              vendor_id:                      0x02c9
</span><br>
<span class="quotelev2">&gt; &gt;              vendor_part_id:                 26428
</span><br>
<span class="quotelev2">&gt; &gt;              hw_ver:                         0xA0
</span><br>
<span class="quotelev2">&gt; &gt;              board_id:                       X6275_QDR_IB_2.5
</span><br>
<span class="quotelev2">&gt; &gt;              phys_port_cnt:                  1
</span><br>
<span class="quotelev2">&gt; &gt;                      port:   1
</span><br>
<span class="quotelev2">&gt; &gt;                              state:                  active (4)
</span><br>
<span class="quotelev2">&gt; &gt;                              max_mtu:                2048 (4)
</span><br>
<span class="quotelev2">&gt; &gt;                              active_mtu:             2048 (4)
</span><br>
<span class="quotelev2">&gt; &gt;                              sm_lid:                 1222
</span><br>
<span class="quotelev2">&gt; &gt;                              port_lid:               659
</span><br>
<span class="quotelev2">&gt; &gt;                              port_lmc:               0x00
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    7.5. What is the output of the ifconfig command
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    Not using IPoIB.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    7.6. If running under Bourne shells, what is the output of the &quot;ulimit
</span><br>
<span class="quotelev1">&gt; -l&quot; command?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [sboisver12_at_colosse1 ~]$ ulimit -l
</span><br>
<span class="quotelev2">&gt; &gt; 6000000
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The two differences I see between guillimin and colosse are
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; - Open-MPI 1.4.3 (colosse) v. MVAPICH2 1.6 (guillimin)
</span><br>
<span class="quotelev2">&gt; &gt; - Mellanox (colosse) v. QLogic (guillimin)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Does anyone experienced such a high latency with Open-MPI 1.4.3 on
</span><br>
<span class="quotelev1">&gt; Mellanox HCAs ?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thank you for your time.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                  S?bastien Boisvert
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Message: 12
</span><br>
<span class="quotelev1">&gt; Date: Tue, 20 Sep 2011 14:25:09 +0200
</span><br>
<span class="quotelev1">&gt; From: Reuti &lt;reuti_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] How could OpenMPI (or MVAPICH) affect
</span><br>
<span class="quotelev1">&gt;        floating-point results?
</span><br>
<span class="quotelev1">&gt; To: tprince_at_[hidden], Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID:
</span><br>
<span class="quotelev1">&gt;        &lt;01FAE7A2-F1A2-410A-8CEE-D84E91449189_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=windows-1252
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Am 20.09.2011 um 13:52 schrieb Tim Prince:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On 9/20/2011 7:25 AM, Reuti wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Am 20.09.2011 um 00:41 schrieb Blosch, Edwin L:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I am observing differences in floating-point results from an
</span><br>
<span class="quotelev1">&gt; application program that appear to be related to whether I link with OpenMPI
</span><br>
<span class="quotelev1">&gt; 1.4.3 or MVAPICH 1.2.0.  Both packages were built with the same installation
</span><br>
<span class="quotelev1">&gt; of Intel 11.1, as well as the application program; identical flags passed to
</span><br>
<span class="quotelev1">&gt; the compiler in each case.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I?ve tracked down some differences in a compute-only routine where I?ve
</span><br>
<span class="quotelev1">&gt; printed out the inputs to the routine (to 18 digits) ; the inputs are
</span><br>
<span class="quotelev1">&gt; identical.  The output numbers are different in the 16th place (perhaps a
</span><br>
<span class="quotelev1">&gt; few in the 15th place).  These differences only show up for optimized code,
</span><br>
<span class="quotelev1">&gt; not for ?O0.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; My assumption is that some optimized math intrinsic is being replaced
</span><br>
<span class="quotelev1">&gt; dynamically, but I do not know how to confirm this.  Anyone have guidance to
</span><br>
<span class="quotelev1">&gt; offer? Or similar experience?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; yes, I face it often but always at a magnitude where it's not of any
</span><br>
<span class="quotelev1">&gt; concern (and not related to any MPI). Due to the limited precision in
</span><br>
<span class="quotelev1">&gt; computers, a simple reordering of operation (although being equivalent in a
</span><br>
<span class="quotelev1">&gt; mathematical sense) can lead to different results. Removing the anomalies
</span><br>
<span class="quotelev1">&gt; with -O0 could proof that.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The other point I heard especially for the x86 instruction set is, that
</span><br>
<span class="quotelev1">&gt; the internal FPU has still 80 bits, while the presentation in memory is only
</span><br>
<span class="quotelev1">&gt; 64 bit. Hence when all can be done in the registers, the result can be
</span><br>
<span class="quotelev1">&gt; different compared to the case when some interim results need to be stored
</span><br>
<span class="quotelev1">&gt; to RAM. For the Portland compiler there is a switch -Kieee -pc64 to force it
</span><br>
<span class="quotelev1">&gt; to stay always in 64 bit, and a similar one for Intel is -mp (now
</span><br>
<span class="quotelev1">&gt; -fltconsistency) and -mp1.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Diagnostics below indicate that ifort 11.1 64-bit is in use.  The options
</span><br>
<span class="quotelev1">&gt; aren't the same as Reuti's &quot;now&quot; version (a 32-bit compiler which hasn't
</span><br>
<span class="quotelev1">&gt; been supported for 3 years or more?).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In the 11.1 documentation they are also still listed:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://software.intel.com/sites/products/documentation/hpc/compilerpro/en-us/fortran/lin/compiler_f/index.htm">http://software.intel.com/sites/products/documentation/hpc/compilerpro/en-us/fortran/lin/compiler_f/index.htm</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I read it in the way, that -mp is deprecated syntax (therefore listed under
</span><br>
<span class="quotelev1">&gt; &quot;Alternate Options&quot;), but -fltconsistency is still a valid and supported
</span><br>
<span class="quotelev1">&gt; option.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; With ifort 10.1 and more recent, you would set at least
</span><br>
<span class="quotelev2">&gt; &gt; -assume protect_parens -prec-div -prec-sqrt
</span><br>
<span class="quotelev2">&gt; &gt; if you are interested in numerical consistency.  If you don't want
</span><br>
<span class="quotelev1">&gt; auto-vectorization of sum reductions, you would use instead
</span><br>
<span class="quotelev2">&gt; &gt; -fp-model source -ftz
</span><br>
<span class="quotelev2">&gt; &gt; (ftz sets underflow mode back to abrupt, while &quot;source&quot; sets gradual).
</span><br>
<span class="quotelev2">&gt; &gt; It may be possible to expose 80-bit x87 by setting the ancient -mp
</span><br>
<span class="quotelev1">&gt; option, but such a course can't be recommended without additional cautions.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Quoted comment from OP seem to show a somewhat different question: Does
</span><br>
<span class="quotelev1">&gt; OpenMPI implement any operations in a different way from MVAPICH?  I would
</span><br>
<span class="quotelev1">&gt; think it probable that the answer could be affirmative for operations such
</span><br>
<span class="quotelev1">&gt; as allreduce, but this leads well outside my expertise with respect to
</span><br>
<span class="quotelev1">&gt; specific MPI implementations.  It isn't out of the question to suspect that
</span><br>
<span class="quotelev1">&gt; such differences might be aggravated when using excessively aggressive ifort
</span><br>
<span class="quotelev1">&gt; options such as -fast.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;         libifport.so.5 =&gt;
</span><br>
<span class="quotelev1">&gt;  /opt/intel/Compiler/11.1/072/lib/intel64/libifport.so.5
</span><br>
<span class="quotelev1">&gt; (0x00002b6e7e081000)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;         libifcoremt.so.5 =&gt;
</span><br>
<span class="quotelev1">&gt;  /opt/intel/Compiler/11.1/072/lib/intel64/libifcoremt.so.5
</span><br>
<span class="quotelev1">&gt; (0x00002b6e7e1ba000)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;         libimf.so =&gt;
</span><br>
<span class="quotelev1">&gt;  /opt/intel/Compiler/11.1/072/lib/intel64/libimf.so (0x00002b6e7e45f000)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;         libsvml.so =&gt;
</span><br>
<span class="quotelev1">&gt;  /opt/intel/Compiler/11.1/072/lib/intel64/libsvml.so (0x00002b6e7e7f4000)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;         libintlc.so.5 =&gt;
</span><br>
<span class="quotelev1">&gt;  /opt/intel/Compiler/11.1/072/lib/intel64/libintlc.so.5 (0x00002b6e7ea0a000)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Tim Prince
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Message: 13
</span><br>
<span class="quotelev1">&gt; Date: Tue, 20 Sep 2011 05:34:51 -0700
</span><br>
<span class="quotelev1">&gt; From: Rolf vandeVaart &lt;rvandevaart_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] MPI hangs on multiple nodes
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID:
</span><br>
<span class="quotelev1">&gt;        &lt;3AF945EBF4D3EC41AFE44EED9B0585F32689F8C549_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=&quot;us-ascii&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 1: After a reboot of two nodes I ran again, and the inter-node freeze
</span><br>
<span class="quotelev1">&gt; didn't
</span><br>
<span class="quotelev2">&gt; &gt;happen until the third iteration. I take that to mean that the basic
</span><br>
<span class="quotelev2">&gt; &gt;communication works, but that something is saturating. Is there some
</span><br>
<span class="quotelev1">&gt; notion
</span><br>
<span class="quotelev2">&gt; &gt;of buffer size somewhere in the MPI system that could explain this?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;Hmm.  This is not a good sign; it somewhat indicates a problem with your
</span><br>
<span class="quotelev1">&gt; OS.
</span><br>
<span class="quotelev2">&gt; &gt;Based on this email and your prior emails, I'm guessing you're using TCP
</span><br>
<span class="quotelev1">&gt; for
</span><br>
<span class="quotelev2">&gt; &gt;communication, and that the problem is based on inter-node communication
</span><br>
<span class="quotelev2">&gt; &gt;(e.g., the problem would occur even if you only run 1 process per machine,
</span><br>
<span class="quotelev2">&gt; &gt;but does not occur if you run all N processes on a single machine, per
</span><br>
<span class="quotelev1">&gt; your #4,
</span><br>
<span class="quotelev2">&gt; &gt;below).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I agree with Jeff here.  Open MPI uses lazy connections to establish
</span><br>
<span class="quotelev1">&gt; connections and round robins through the interfaces.
</span><br>
<span class="quotelev1">&gt; So, the first few communications could work as they are using interfaces
</span><br>
<span class="quotelev1">&gt; that could communicate between the nodes, but the third iteration uses an
</span><br>
<span class="quotelev1">&gt; interface that for some reason cannot establish the connection.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; One flag you can use that may help is --mca btl_base_verbose 20, like this;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun --mca btl_base_verbose 20 connectivity_c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It will dump out a bunch of stuff, but there will be a few lines that look
</span><br>
<span class="quotelev1">&gt; like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [...snip...]
</span><br>
<span class="quotelev1">&gt; [dt:09880] btl: tcp: attempting to connect() to [[58627,1],1] address
</span><br>
<span class="quotelev1">&gt; 10.20.14.101 on port 1025
</span><br>
<span class="quotelev1">&gt; [...snip...]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Rolf
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; This email message is for the sole use of the intended recipient(s) and may
</span><br>
<span class="quotelev1">&gt; contain
</span><br>
<span class="quotelev1">&gt; confidential information.  Any unauthorized review, use, disclosure or
</span><br>
<span class="quotelev1">&gt; distribution
</span><br>
<span class="quotelev1">&gt; is prohibited.  If you are not the intended recipient, please contact the
</span><br>
<span class="quotelev1">&gt; sender by
</span><br>
<span class="quotelev1">&gt; reply email and destroy all copies of the original message.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Message: 14
</span><br>
<span class="quotelev1">&gt; Date: Tue, 20 Sep 2011 13:12:48 +0000
</span><br>
<span class="quotelev1">&gt; From: &quot;Barrett, Brian W&quot; &lt;bwbarre_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Open MPI and Objective C
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID:
</span><br>
<span class="quotelev1">&gt;        &lt;69A29AB53D57F54D81061A9E4E45B8FD0F991C75_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=&quot;us-ascii&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The problem you're running into is not due to Open MPI.  The Objective C
</span><br>
<span class="quotelev1">&gt; and C compilers on OS X (and most platforms) are the same binary, so you
</span><br>
<span class="quotelev1">&gt; should be able to use mpicc without any problems.  It will see the .m
</span><br>
<span class="quotelev1">&gt; extension and switch to Objective C mode.  However, NSLog is in the
</span><br>
<span class="quotelev1">&gt; Foundation framework, so you must add the compiler option
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  -framework Foundation
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; to the compiler flags (both when compiling and linking).  If you ripped out
</span><br>
<span class="quotelev1">&gt; all the MPI and used gcc directly to compile your example code, you'd run
</span><br>
<span class="quotelev1">&gt; into the same linker error without the -framework option.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hope this helps,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;  Brian W. Barrett
</span><br>
<span class="quotelev1">&gt;  Scalable System Software Group
</span><br>
<span class="quotelev1">&gt;  Sandia National Laboratories
</span><br>
<span class="quotelev1">&gt; ________________________________________
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [users-bounces_at_[hidden]] on behalf of
</span><br>
<span class="quotelev1">&gt; Jeff Squyres [jsquyres_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; Sent: Monday, September 19, 2011 6:46 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Open MPI and Objective C
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You'll probably have to run &quot;mpicc --showme&quot; to see all the flags that OMPI
</span><br>
<span class="quotelev1">&gt; is passing to the underlying compiler, and use those (or equivalents) to the
</span><br>
<span class="quotelev1">&gt; ObjC compiler.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 19, 2011, at 8:34 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Nothing to do with us - you call a function &quot;NSLog&quot; that Objective C
</span><br>
<span class="quotelev1">&gt; doesn't recognize. That isn't an MPI function.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Sep 18, 2011, at 8:20 PM, Scott Wilcox wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I have been asked to convert some C++ code using Open MPI to Objective C
</span><br>
<span class="quotelev1">&gt; and I am having problems getting a simple Obj C program to compile.  I have
</span><br>
<span class="quotelev1">&gt; searched through the FAQs and have not found anything specific.  Is it an
</span><br>
<span class="quotelev1">&gt; incorrect assumption that the C interfaces work with Obj C, or am I missing
</span><br>
<span class="quotelev1">&gt; something?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thanks in advance for your help!
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Scott
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; open MPI version: 1.4.3
</span><br>
<span class="quotelev3">&gt; &gt;&gt; OSX 10.5.1
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; file: main.m
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; #import &lt;Foundation/Foundation.h&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; #import &quot;mpi.h&quot;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; int main (int argc, char** argv)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; {
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    //***
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    // Variable Declaration
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    //***
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    int theRank;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    int theSize;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    //***
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    // Initializing Message Passing Interface
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    //***
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    MPI_Init(&amp;argc,&amp;argv);
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    MPI_Comm_size(MPI_COMM_WORLD,&amp;theSize);
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    MPI_Comm_rank(MPI_COMM_WORLD,&amp;theRank);
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    //*** end
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    NSLog(@&quot;Executing open MPI Objective C&quot;);
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; }
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Compile:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [87]UNC ONLY: SAW&gt;mpicc main.m -o test
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Undefined symbols:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   &quot;___CFConstantStringClassReference&quot;, referenced from:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;       cfstring=Executing open MPI Objective C in ccj1AlL9.o
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   &quot;_NSLog&quot;, referenced from:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;       _main in ccj1AlL9.o
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ld: symbol(s) not found
</span><br>
<span class="quotelev3">&gt; &gt;&gt; collect2: ld returned 1 exit status
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
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
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Message: 15
</span><br>
<span class="quotelev1">&gt; Date: Tue, 20 Sep 2011 08:44:07 -0600
</span><br>
<span class="quotelev1">&gt; From: &quot;Samuel K. Gutierrez&quot; &lt;samuel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] How could OpenMPI (or MVAPICH) affect
</span><br>
<span class="quotelev1">&gt;        floating-point results?
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;91688AE1-DF54-4957-A0A0-902FC2E9B2D3_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=windows-1252
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Maybe you can leverage some of the techniques outlined in:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Robert W. Robey, Jonathan M. Robey, and Rob Aulwes. 2011. In search of
</span><br>
<span class="quotelev1">&gt; numerical consistency in parallel programming. Parallel Comput. 37, 4-5
</span><br>
<span class="quotelev1">&gt; (April 2011), 217-229. DOI=10.1016/j.parco.2011.02.009
</span><br>
<span class="quotelev1">&gt; <a href="http://dx.doi.org/10.1016/j.parco.2011.02.009">http://dx.doi.org/10.1016/j.parco.2011.02.009</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hope that helps,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Samuel K. Gutierrez
</span><br>
<span class="quotelev1">&gt; Los Alamos National Laboratory
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 20, 2011, at 6:25 AM, Reuti wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Am 20.09.2011 um 13:52 schrieb Tim Prince:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On 9/20/2011 7:25 AM, Reuti wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Am 20.09.2011 um 00:41 schrieb Blosch, Edwin L:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; I am observing differences in floating-point results from an
</span><br>
<span class="quotelev1">&gt; application program that appear to be related to whether I link with OpenMPI
</span><br>
<span class="quotelev1">&gt; 1.4.3 or MVAPICH 1.2.0.  Both packages were built with the same installation
</span><br>
<span class="quotelev1">&gt; of Intel 11.1, as well as the application program; identical flags passed to
</span><br>
<span class="quotelev1">&gt; the compiler in each case.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; I?ve tracked down some differences in a compute-only routine where
</span><br>
<span class="quotelev1">&gt; I?ve printed out the inputs to the routine (to 18 digits) ; the inputs are
</span><br>
<span class="quotelev1">&gt; identical.  The output numbers are different in the 16th place (perhaps a
</span><br>
<span class="quotelev1">&gt; few in the 15th place).  These differences only show up for optimized code,
</span><br>
<span class="quotelev1">&gt; not for ?O0.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; My assumption is that some optimized math intrinsic is being replaced
</span><br>
<span class="quotelev1">&gt; dynamically, but I do not know how to confirm this.  Anyone have guidance to
</span><br>
<span class="quotelev1">&gt; offer? Or similar experience?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; yes, I face it often but always at a magnitude where it's not of any
</span><br>
<span class="quotelev1">&gt; concern (and not related to any MPI). Due to the limited precision in
</span><br>
<span class="quotelev1">&gt; computers, a simple reordering of operation (although being equivalent in a
</span><br>
<span class="quotelev1">&gt; mathematical sense) can lead to different results. Removing the anomalies
</span><br>
<span class="quotelev1">&gt; with -O0 could proof that.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; The other point I heard especially for the x86 instruction set is, that
</span><br>
<span class="quotelev1">&gt; the internal FPU has still 80 bits, while the presentation in memory is only
</span><br>
<span class="quotelev1">&gt; 64 bit. Hence when all can be done in the registers, the result can be
</span><br>
<span class="quotelev1">&gt; different compared to the case when some interim results need to be stored
</span><br>
<span class="quotelev1">&gt; to RAM. For the Portland compiler there is a switch -Kieee -pc64 to force it
</span><br>
<span class="quotelev1">&gt; to stay always in 64 bit, and a similar one for Intel is -mp (now
</span><br>
<span class="quotelev1">&gt; -fltconsistency) and -mp1.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Diagnostics below indicate that ifort 11.1 64-bit is in use.  The
</span><br>
<span class="quotelev1">&gt; options aren't the same as Reuti's &quot;now&quot; version (a 32-bit compiler which
</span><br>
<span class="quotelev1">&gt; hasn't been supported for 3 years or more?).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; In the 11.1 documentation they are also still listed:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://software.intel.com/sites/products/documentation/hpc/compilerpro/en-us/fortran/lin/compiler_f/index.htm">http://software.intel.com/sites/products/documentation/hpc/compilerpro/en-us/fortran/lin/compiler_f/index.htm</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I read it in the way, that -mp is deprecated syntax (therefore listed
</span><br>
<span class="quotelev1">&gt; under &quot;Alternate Options&quot;), but -fltconsistency is still a valid and
</span><br>
<span class="quotelev1">&gt; supported option.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -- Reuti
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; With ifort 10.1 and more recent, you would set at least
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -assume protect_parens -prec-div -prec-sqrt
</span><br>
<span class="quotelev3">&gt; &gt;&gt; if you are interested in numerical consistency.  If you don't want
</span><br>
<span class="quotelev1">&gt; auto-vectorization of sum reductions, you would use instead
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -fp-model source -ftz
</span><br>
<span class="quotelev3">&gt; &gt;&gt; (ftz sets underflow mode back to abrupt, while &quot;source&quot; sets gradual).
</span><br>
<span class="quotelev3">&gt; &gt;&gt; It may be possible to expose 80-bit x87 by setting the ancient -mp
</span><br>
<span class="quotelev1">&gt; option, but such a course can't be recommended without additional cautions.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Quoted comment from OP seem to show a somewhat different question: Does
</span><br>
<span class="quotelev1">&gt; OpenMPI implement any operations in a different way from MVAPICH?  I would
</span><br>
<span class="quotelev1">&gt; think it probable that the answer could be affirmative for operations such
</span><br>
<span class="quotelev1">&gt; as allreduce, but this leads well outside my expertise with respect to
</span><br>
<span class="quotelev1">&gt; specific MPI implementations.  It isn't out of the question to suspect that
</span><br>
<span class="quotelev1">&gt; such differences might be aggravated when using excessively aggressive ifort
</span><br>
<span class="quotelev1">&gt; options such as -fast.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;        libifport.so.5 =&gt;
</span><br>
<span class="quotelev1">&gt;  /opt/intel/Compiler/11.1/072/lib/intel64/libifport.so.5
</span><br>
<span class="quotelev1">&gt; (0x00002b6e7e081000)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;        libifcoremt.so.5 =&gt;
</span><br>
<span class="quotelev1">&gt;  /opt/intel/Compiler/11.1/072/lib/intel64/libifcoremt.so.5
</span><br>
<span class="quotelev1">&gt; (0x00002b6e7e1ba000)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;        libimf.so =&gt;
</span><br>
<span class="quotelev1">&gt;  /opt/intel/Compiler/11.1/072/lib/intel64/libimf.so (0x00002b6e7e45f000)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;        libsvml.so =&gt;
</span><br>
<span class="quotelev1">&gt;  /opt/intel/Compiler/11.1/072/lib/intel64/libsvml.so (0x00002b6e7e7f4000)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;        libintlc.so.5 =&gt;
</span><br>
<span class="quotelev1">&gt;  /opt/intel/Compiler/11.1/072/lib/intel64/libintlc.so.5 (0x00002b6e7ea0a000)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Tim Prince
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; End of users Digest, Vol 2018, Issue 1
</span><br>
<span class="quotelev1">&gt; **************************************
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17434/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17435.php">Yevgeny Kliteynik: "Re: [OMPI users] RE : RE : Latency of 250 microseconds with	Open-MPI 1.4.3, Mellanox Infiniband and 256 MPI ranks"</a>
<li><strong>Previous message:</strong> <a href="17433.php">Martin Siegert: "Re: [OMPI users] PATH settings"</a>
<li><strong>Maybe in reply to:</strong> <a href="17347.php">Ole Nielsen: "[OMPI users] MPI hangs on multiple nodes"</a>
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
