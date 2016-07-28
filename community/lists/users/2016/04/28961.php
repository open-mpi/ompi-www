<?
$subject_val = "Re: [OMPI users] OMPI users] Possible bug in MPI_Barrier() ?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 18 20:01:14 2016" -->
<!-- isoreceived="20160419000114" -->
<!-- sent="Tue, 19 Apr 2016 09:01:05 +0900" -->
<!-- isosent="20160419000105" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI users] Possible bug in MPI_Barrier() ?" -->
<!-- id="57157541.90103_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAHXxYDjwKp1Cri-BLW9RDsRHCW6bYonrqVa2wLFxG7-sLwrCcA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OMPI users] Possible bug in MPI_Barrier() ?<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-18 20:01:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28962.php">Jeff Hammond: "Re: [OMPI users] Porting MPI-3 C-program to Fortran"</a>
<li><strong>Previous message:</strong> <a href="28960.php">Tom Rosmond: "[OMPI users] Porting MPI-3 C-program to Fortran"</a>
<li><strong>In reply to:</strong> <a href="28957.php">dpchoudh .: "Re: [OMPI users] OMPI users] Possible bug in MPI_Barrier() ?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
could you also test the nightly tarball of the v2.x and v1.10 branches ?
<br>
<p>when a process sends a message to an other process for the first time,
<br>
it establish a TCP connection if not already present.
<br>
so i A sends to B first, then A connects to B.
<br>
when B wants to send to A, it uses the previously established connection.
<br>
/* fwiw, there is a race condition when A and B send to each other for 
<br>
the first time and at
<br>
the same time, and we do handle that in the tcp btl. */
<br>
<p>a firewall on one node can explain why the application might success or 
<br>
hang depending
<br>
on the order of the nodes in the hostfile.
<br>
you might also try to invoke mpirun on both nodes and see if the 
<br>
behavior is consistent.
<br>
<p>if i read the thread correctly, the runtime behavior on your system is 
<br>
not random but 100% reproductible,
<br>
am i right ?
<br>
<p>you can also
<br>
mpirun --mca btl_tcp_base_verbose 100 ...
<br>
compress and post the logs, we might see something here
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 4/19/2016 4:53 AM, dpchoudh . wrote:
<br>
<span class="quotelev1">&gt; Dear developers
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you all for jumping in to help. Here is what I have found so far:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. Running Netpipe (NPmpi) between the two nodes (in either order) was 
</span><br>
<span class="quotelev1">&gt; successful, but following this test, my original code still hung.
</span><br>
<span class="quotelev1">&gt; 2. Following Gilles's advice, I then added an MPI_Barrier() at the end 
</span><br>
<span class="quotelev1">&gt; of the code, just before MPI_Finalize(), and, to my surprise, the code 
</span><br>
<span class="quotelev1">&gt; ran to completion!
</span><br>
<span class="quotelev1">&gt; 3. Then, I took out the barrier, leaving the code the way it was 
</span><br>
<span class="quotelev1">&gt; before, and it still ran to completion!
</span><br>
<span class="quotelev1">&gt; 4. I tried several variations of call sequence, and all of them ran 
</span><br>
<span class="quotelev1">&gt; successfully.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can't explain why the runtime behavior seems to depend on the phase 
</span><br>
<span class="quotelev1">&gt; of the moon, but, although I cannot prove it, I have a gut feeling 
</span><br>
<span class="quotelev1">&gt; there is a bug somewhere in the development branch. I never run into 
</span><br>
<span class="quotelev1">&gt; this issue when running the release branch. (I sometimes work as MPI 
</span><br>
<span class="quotelev1">&gt; application developer, when I use the release branch, and sometime as 
</span><br>
<span class="quotelev1">&gt; MPI developer, when I use the master branch).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you all, again.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Durga
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1% of the executables have 99% of CPU privilege!
</span><br>
<span class="quotelev1">&gt; Userspace code! Unite!! Occupy the kernel!!!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Apr 18, 2016 at 8:04 AM, George Bosilca &lt;bosilca_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:bosilca_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Durga,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Can you run a simple netpipe over TCP using any of the two
</span><br>
<span class="quotelev1">&gt;     interfaces you mentioned?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     George
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     On Apr 18, 2016 11:08 AM, &quot;Gilles Gouaillardet&quot;
</span><br>
<span class="quotelev1">&gt;     &lt;gilles.gouaillardet_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     &lt;mailto:gilles.gouaillardet_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         An other test is to swap the hostnames.
</span><br>
<span class="quotelev1">&gt;         If the single barrier test fails, this can hint to a firewall.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Gilles Gouaillardet &lt;gilles_at_[hidden]
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:gilles_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;         sudo make uninstall
</span><br>
<span class="quotelev1">&gt;         will not remove modules that are no more built
</span><br>
<span class="quotelev1">&gt;         sudo rm -rf /usr/local/lib/openmpi
</span><br>
<span class="quotelev1">&gt;         is safe thought
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         i confirm i did not see any issue on a system with two networks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         On 4/18/2016 2:53 PM, dpchoudh . wrote:
</span><br>
<span class="quotelev2">&gt;&gt;         Hello Gilles
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         I did a
</span><br>
<span class="quotelev2">&gt;&gt;         sudo make uninstall
</span><br>
<span class="quotelev2">&gt;&gt;         followed by a
</span><br>
<span class="quotelev2">&gt;&gt;         sudo make install
</span><br>
<span class="quotelev2">&gt;&gt;         on both nodes. But that did not make a difference. I will try
</span><br>
<span class="quotelev2">&gt;&gt;         your tarball build suggestion a bit later.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         What I find a bit strange is that only I seem to be getting
</span><br>
<span class="quotelev2">&gt;&gt;         into this issue. What could I be doing wrong? Or am I
</span><br>
<span class="quotelev2">&gt;&gt;         discovering an obscure bug?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Thanks
</span><br>
<span class="quotelev2">&gt;&gt;         Durga
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         1% of the executables have 99% of CPU privilege!
</span><br>
<span class="quotelev2">&gt;&gt;         Userspace code! Unite!! Occupy the kernel!!!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         On Mon, Apr 18, 2016 at 1:21 AM, Gilles Gouaillardet
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;gilles_at_[hidden] &lt;mailto:gilles_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             so you might want to
</span><br>
<span class="quotelev2">&gt;&gt;             rm -rf /usr/local/lib/openmpi
</span><br>
<span class="quotelev2">&gt;&gt;             and run
</span><br>
<span class="quotelev2">&gt;&gt;             make install
</span><br>
<span class="quotelev2">&gt;&gt;             again, just to make sure old stuff does not get in the way
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             Gilles
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             On 4/18/2016 2:12 PM, dpchoudh . wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             Hello Gilles
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             Thank you very much for your feedback. You are right
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             that my original stack trace was on code that was
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             several weeks behind, but updating it just now did not
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             seem to make a difference: I am copying the stack from
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             the latest code below:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             On the master node:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             (gdb) bt
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             #0  0x00007fc0524cbb7d in poll () from /lib64/libc.so.6
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             #1  0x00007fc051e53116 in poll_dispatch (base=0x1aabbe0,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             tv=0x7fff29fcb240) at poll.c:165
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             #2  0x00007fc051e4adb0 in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             opal_libevent2022_event_base_loop (base=0x1aabbe0,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             flags=2) at event.c:1630
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             #3  0x00007fc051de9a00 in opal_progress () at
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             runtime/opal_progress.c:171
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             #4  0x00007fc04ce46b0b in opal_condition_wait
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             (c=0x7fc052d3cde0 &lt;ompi_request_cond&gt;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 m=0x7fc052d3cd60 &lt;ompi_request_lock&gt;) at
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             ../../../../opal/threads/condition.h:76
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             #5  0x00007fc04ce46cec in ompi_request_wait_completion
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             (req=0x1b7b580)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 at ../../../../ompi/request/request.h:383
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             #6  0x00007fc04ce48d4f in mca_pml_ob1_send
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             (buf=0x7fff29fcb480, count=4,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 datatype=0x601080 &lt;ompi_mpi_char&gt;, dst=1, tag=1,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             sendmode=MCA_PML_BASE_SEND_STANDARD,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 comm=0x601280 &lt;ompi_mpi_comm_world&gt;) at
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             pml_ob1_isend.c:259
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             #7  0x00007fc052a62d73 in PMPI_Send (buf=0x7fff29fcb480,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             count=4, type=0x601080 &lt;ompi_mpi_char&gt;, dest=1,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 tag=1, comm=0x601280 &lt;ompi_mpi_comm_world&gt;) at
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             psend.c:78
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             #8  0x0000000000400afa in main (argc=1,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             argv=0x7fff29fcb5e8) at mpitest.c:19
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             (gdb)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             And on the non-master node
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             (gdb) bt
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             #0  0x00007fad2c32148d in nanosleep () from /lib64/libc.so.6
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             #1  0x00007fad2c352014 in usleep () from /lib64/libc.so.6
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             #2  0x00007fad296412de in OPAL_PMIX_PMIX120_PMIx_Fence
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             (procs=0x0, nprocs=0, info=0x0, ninfo=0)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 at src/client/pmix_client_fence.c:100
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             #3  0x00007fad2960e1a6 in pmix120_fence (procs=0x0,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             collect_data=0) at pmix120_client.c:258
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             #4  0x00007fad2c89b2da in ompi_mpi_finalize () at
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             runtime/ompi_mpi_finalize.c:242
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             #5  0x00007fad2c8c5849 in PMPI_Finalize () at pfinalize.c:47
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             #6  0x0000000000400958 in main (argc=1,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             argv=0x7fff163879c8) at mpitest.c:30
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             (gdb)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             And my configuration was done as follows:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             $ ./configure --enable-debug --enable-debug-symbols
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             I double checked to ensure that there is not an older
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             installation of OpenMPI that is getting mixed up with
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             the master branch.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             sudo yum list installed | grep -i mpi
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             shows nothing on both nodes, and pmap -p &lt;pid&gt; shows
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             that all the libraries are coming from /usr/local/lib,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             which seems to be correct. I am also quite sure about
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             the firewall issue (that there is none). I will try out
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             your suggestion on installing from a tarball and see how
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             it goes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             Thanks
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             Durga
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             1% of the executables have 99% of CPU privilege!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             Userspace code! Unite!! Occupy the kernel!!!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             On Mon, Apr 18, 2016 at 12:47 AM, Gilles Gouaillardet
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             &lt;gilles_at_[hidden] &lt;mailto:gilles_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 here is your stack trace
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 #6 0x00007f72a0d09cd5 in mca_pml_ob1_send
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 (buf=0x7fff81057db0, count=4,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                     datatype=0x601080 &lt;ompi_mpi_char&gt;, dst=1, tag=1,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 sendmode=MCA_PML_BASE_SEND_STANDARD, comm=0x601280
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 &lt;ompi_mpi_comm_world&gt;)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 at line 251
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 that would be line 259 in current master, and this
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 file was updated 21 days ago
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 and that suggests your master is not quite up to date.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 even if the message is sent eagerly, the ob1 pml
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 does use an internal request it will wait for.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 btw, did you configure with
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 --enable-mpi-thread-multiple ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 did you configure with
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 --enable-mpirun-prefix-by-default ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 did you configure with --disable-dlopen ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 at first, i d recommend you download a tarball from
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 <a href="https://www.open-mpi.org/nightly/master">https://www.open-mpi.org/nightly/master</a>,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 configure &amp;&amp; make &amp;&amp; make install
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 using a new install dir, and check if the issue is
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 still here or not.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 there could be some side effects if some old modules
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 were not removed and/or if you are
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 not using the modules you expect.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 /* when it hangs, you can pmap &lt;pid&gt; and check the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 path of the openmpi libraries are the one you expect */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 what if you do not send/recv but invoke MPI_Barrier
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 multiple times ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 what if you send/recv a one byte message instead ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 did you double check there is no firewall running on
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 your nodes ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 Cheers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 Gilles
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
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 On 4/18/2016 1:06 PM, dpchoudh . wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 Thank you for your suggestion, Ralph. But it did
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 not make any difference.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 Let me say that my code is about a week stale. I
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 just did a git pull and am building it right now.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 The build takes quite a bit of time, so I avoid
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 doing that unless there is a reason. But what I am
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 trying out is the most basic functionality, so I'd
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 think a week or so of lag would not make a difference.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 Does the stack trace suggest something to you? It
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 seems that the send hangs; but a 4 byte send should
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 be sent eagerly.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 Best regards
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 'Durga
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 1% of the executables have 99% of CPU privilege!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 Userspace code! Unite!! Occupy the kernel!!!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 On Sun, Apr 17, 2016 at 11:55 PM, Ralph Castain
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                     Try adding -mca oob_tcp_if_include eno1 to your
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                     cmd line and see if that makes a difference
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     On Apr 17, 2016, at 8:43 PM, dpchoudh .
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     &lt;dpchoudh_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     &lt;mailto:dpchoudh_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     Hello Gilles and all
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     I am sorry to be bugging the developers, but
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     this issue seems to be nagging me, and I am
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     surprised it does not seem to affect anybody
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     else. But then again, I am using the master
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     branch, and most users are probably using a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     released version.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     This time I am using a totally different
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     cluster. This has NO verbs capable interface;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     just 2 Ethernet (1 of which has no IP address
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     and hence is unusable) plus 1 proprietary
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     interface that currently supports only IP
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     traffic. The two IP interfaces (Ethernet and
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     proprietary) are on different IP subnets.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     My test program is as follows:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     #include &lt;string.h&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     int main(int argc, char *argv[])
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     char host[128];
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     int n;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     MPI_Get_processor_name(host, &amp;n);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     printf(&quot;Hello from %s\n&quot;, host);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     MPI_Comm_size(MPI_COMM_WORLD, &amp;n);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     printf(&quot;The world has %d nodes\n&quot;, n);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     MPI_Comm_rank(MPI_COMM_WORLD, &amp;n);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     printf(&quot;My rank is %d\n&quot;,n);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     //#if 0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     if (n == 0)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     strcpy(host, &quot;ha!&quot;);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     MPI_Send(host, strlen(host) + 1, MPI_CHAR, 1,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     1, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     printf(&quot;sent %s\n&quot;, host);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     }
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     else
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     //int len = strlen(host) + 1;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     bzero(host, 128);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     MPI_Recv(host, 4, MPI_CHAR, 0, 1,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     MPI_COMM_WORLD, MPI_STATUS_IGNORE);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     printf(&quot;Received %s from rank 0\n&quot;, host);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     }
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     //#endif
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     return 0;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     }
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     This program, when run between two nodes,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     hangs. The command was:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     [durga_at_b-1 ~]$ mpirun -np 2 -hostfile
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     ~/hostfile -mca btl self,tcp -mca pml ob1 -mca
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     btl_tcp_if_include eno1 ./mpitest
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     And the hang is with the following output:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     (eno1 is one of the gigEth interfaces, that
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     takes OOB traffic as well)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     Hello from b-1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     The world has 2 nodes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     My rank is 0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     Hello from b-2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     The world has 2 nodes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     My rank is 1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     Note that if I uncomment the #if 0 - #endif
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     (i.e. comment out the MPI_Send()/MPI_Recv()
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     part, the program runs to completion. Also
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     note that the printfs following
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     MPI_Send()/MPI_Recv() do not show up on console.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     Upon attaching gdb, the stack trace from the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     master node is as follows:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     Missing separate debuginfos, use:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     debuginfo-install glibc-2.17-78.el7.x86_64
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     libpciaccess-0.13.4-2.el7.x86_64
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     (gdb) bt
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     #0 0x00007f72a533eb7d in poll () from
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     /lib64/libc.so.6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     #1 0x00007f72a4cb7146 in poll_dispatch
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     (base=0xee33d0, tv=0x7fff81057b70)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                         at poll.c:165
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     #2 0x00007f72a4caede0 in
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     opal_libevent2022_event_base_loop (base=0xee33d0,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                         flags=2) at event.c:1630
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     #3 0x00007f72a4c4e692 in opal_progress () at
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     runtime/opal_progress.c:171
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     #4 0x00007f72a0d07ac1 in opal_condition_wait (
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     c=0x7f72a5bb1e00 &lt;ompi_request_cond&gt;,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     m=0x7f72a5bb1d80 &lt;ompi_request_lock&gt;)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                         at ../../../../opal/threads/condition.h:76
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     #5 0x00007f72a0d07ca2 in
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     ompi_request_wait_completion (req=0x113eb80)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                         at ../../../../ompi/request/request.h:383
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     #6 0x00007f72a0d09cd5 in mca_pml_ob1_send
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     (buf=0x7fff81057db0, count=4,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     datatype=0x601080 &lt;ompi_mpi_char&gt;, dst=1, tag=1,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     sendmode=MCA_PML_BASE_SEND_STANDARD,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     comm=0x601280 &lt;ompi_mpi_comm_world&gt;)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                         at pml_ob1_isend.c:251
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     #7 0x00007f72a58d6be3 in PMPI_Send
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     (buf=0x7fff81057db0, count=4,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     type=0x601080 &lt;ompi_mpi_char&gt;, dest=1, tag=1,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     comm=0x601280 &lt;ompi_mpi_comm_world&gt;) at psend.c:78
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     #8 0x0000000000400afa in main (argc=1,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     argv=0x7fff81057f18) at mpitest.c:19
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     (gdb)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     And the backtrace on the non-master node is:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     (gdb) bt
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     #0 0x00007ff3b377e48d in nanosleep () from
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     /lib64/libc.so.6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     #1 0x00007ff3b37af014 in usleep () from
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     /lib64/libc.so.6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     #2 0x00007ff3b0c922de in
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     OPAL_PMIX_PMIX120_PMIx_Fence (procs=0x0, nprocs=0,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                         info=0x0, ninfo=0) at
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     src/client/pmix_client_fence.c:100
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     #3 0x00007ff3b0c5f1a6 in pmix120_fence
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     (procs=0x0, collect_data=0)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                         at pmix120_client.c:258
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     #4 0x00007ff3b3cf8f4b in ompi_mpi_finalize ()
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                         at runtime/ompi_mpi_finalize.c:242
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     #5 0x00007ff3b3d23295 in PMPI_Finalize () at
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     pfinalize.c:47
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     #6 0x0000000000400958 in main (argc=1,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     argv=0x7fff785e8788) at mpitest.c:30
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     (gdb)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     The hostfile is as follows:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     [durga_at_b-1 ~]$ cat hostfile
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     10.4.70.10 slots=1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     10.4.70.11 slots=1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     #10.4.70.12 slots=1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     And the ifconfig output from the master node
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     is as follows (the other node is similar; all
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     the IP interfaces are in their respective
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     subnets) :
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     [durga_at_b-1 ~]$ ifconfig
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     eno1:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     flags=4163&lt;UP,BROADCAST,RUNNING,MULTICAST&gt; mtu
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     1500
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             inet 10.4.70.10 netmask 255.255.255.0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     broadcast 10.4.70.255
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             inet6 fe80::21e:c9ff:fefe:13df
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     prefixlen 64 scopeid 0x20&lt;link&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             ether 00:1e:c9:fe:13:df txqueuelen
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     1000 (Ethernet)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             RX packets 48215 bytes 27842846 (26.5 MiB)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             RX errors 0 dropped 0 overruns 0 frame 0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             TX packets 52746 bytes 7817568 (7.4 MiB)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             TX errors 0 dropped 0 overruns 0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     carrier 0 collisions 0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             device interrupt 16
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     eno2: flags=4099&lt;UP,BROADCAST,MULTICAST&gt; mtu 1500
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             ether 00:1e:c9:fe:13:e0 txqueuelen
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     1000 (Ethernet)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             RX packets 0 bytes 0 (0.0 B)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             RX errors 0 dropped 0 overruns 0 frame 0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             TX packets 0 bytes 0 (0.0 B)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             TX errors 0 dropped 0 overruns 0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     carrier 0 collisions 0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             device interrupt 17
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     lf0:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     flags=4163&lt;UP,BROADCAST,RUNNING,MULTICAST&gt; mtu
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     2016
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             inet 192.168.1.2 netmask 255.255.255.0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     broadcast 192.168.1.255
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             inet6 fe80::3002:ff:fe33:3333
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     prefixlen 64 scopeid 0x20&lt;link&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             ether 32:02:00:33:33:33 txqueuelen
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     1000 (Ethernet)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             RX packets 10 bytes 512 (512.0 B)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             RX errors 0 dropped 0 overruns 0 frame 0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             TX packets 22 bytes 1536 (1.5 KiB)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             TX errors 0 dropped 0 overruns 0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     carrier 0 collisions 0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     lo: flags=73&lt;UP,LOOPBACK,RUNNING&gt; mtu 65536
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             inet 127.0.0.1 netmask 255.0.0.0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             inet6 ::1  prefixlen 128  scopeid
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     0x10&lt;host&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             loop txqueuelen 0 (Local Loopback)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             RX packets 26 bytes 1378 (1.3 KiB)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             RX errors 0 dropped 0 overruns 0 frame 0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             TX packets 26 bytes 1378 (1.3 KiB)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                             TX errors 0 dropped 0 overruns 0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     carrier 0 collisions 0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     Please help me with this. I am stuck with the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     TCP transport, which is the most basic of all
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     transports.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     Thanks in advance
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     Durga
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     1% of the executables have 99% of CPU privilege!
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     Userspace code! Unite!! Occupy the kernel!!!
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     On Tue, Apr 12, 2016 at 9:32 PM, Gilles
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     Gouaillardet &lt;gilles_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     &lt;mailto:gilles_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                         This is quite unlikely, and fwiw, your
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                         test program works for me.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                         i suggest you check your 3 TCP networks
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                         are usable, for example
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                         $ mpirun -np 2 -hostfile ~/hostfile -mca
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                         btl self,tcp -mca pml ob1 --mca
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                         btl_tcp_if_include xxx ./mpitest
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                         in which xxx is a [list of] interface name :
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                         eth0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                         eth1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                         ib0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                         eth0,eth1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                         eth0,ib0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                         ...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                         eth0,eth1,ib0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                         and see where problem start occuring.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                         btw, are your 3 interfaces in 3 different
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                         subnet ? is routing required between two
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                         interfaces of the same type ?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                         Cheers,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                         Gilles
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                         On 4/13/2016 7:15 AM, dpchoudh . wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         Hi all
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         I have reported this issue before, but
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         then had brushed it off as something that
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         was caused by my modifications to the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         source tree. It looks like that is not
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         the case.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         Just now, I did the following:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         1. Cloned a fresh copy from master.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         2. Configured with the following flags,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         built and installed it in my two-node
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         &quot;cluster&quot;.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         --enable-debug --enable-debug-symbols
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         --disable-dlopen
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         3. Compiled the following program,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         mpitest.c with these flags: -g3 -Wall -Wextra
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         4. Ran it like this:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         [durga_at_smallMPI ~]$ mpirun -np 2
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         -hostfile ~/hostfile -mca btl self,tcp
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         -mca pml ob1 ./mpitest
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         With this, the code hangs at
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         MPI_Barrier() on both nodes, after
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         generating the following output:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         Hello world from processor smallMPI, rank
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         0 out of 2 processors
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         Hello world from processor bigMPI, rank 1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         out of 2 processors
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         smallMPI sent haha!
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         bigMPI received haha!
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         &lt;Hangs until killed by ^C&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         Attaching to the hung process at one node
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         gives the following backtrace:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         (gdb) bt
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         #0 0x00007f55b0f41c3d in poll () from
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         /lib64/libc.so.6
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         #1 0x00007f55b03ccde6 in poll_dispatch
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         (base=0x70e7b0, tv=0x7ffd1bb551c0) at
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         poll.c:165
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         #2 0x00007f55b03c4a90 in
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         opal_libevent2022_event_base_loop
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         (base=0x70e7b0, flags=2) at event.c:1630
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         #3 0x00007f55b02f0144 in opal_progress ()
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         at runtime/opal_progress.c:171
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         #4 0x00007f55b14b4d8b in
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         opal_condition_wait (c=0x7f55b19fec40
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         &lt;ompi_request_cond&gt;, m=0x7f55b19febc0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         &lt;ompi_request_lock&gt;) at
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         ../opal/threads/condition.h:76
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         #5 0x00007f55b14b531b in
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         ompi_request_default_wait_all (count=2,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         requests=0x7ffd1bb55370,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         statuses=0x7ffd1bb55340) at
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         request/req_wait.c:287
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         #6 0x00007f55b157a225 in
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         ompi_coll_base_sendrecv_zero (dest=1,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         stag=-16, source=1, rtag=-16,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         comm=0x601280 &lt;ompi_mpi_comm_world&gt;)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                             at base/coll_base_barrier.c:63
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         #7 0x00007f55b157a92a in
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         ompi_coll_base_barrier_intra_two_procs
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         (comm=0x601280 &lt;ompi_mpi_comm_world&gt;,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         module=0x7c2630) at
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         base/coll_base_barrier.c:308
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         #8 0x00007f55b15aafec in
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         ompi_coll_tuned_barrier_intra_dec_fixed
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         (comm=0x601280 &lt;ompi_mpi_comm_world&gt;,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         module=0x7c2630) at
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         coll_tuned_decision_fixed.c:196
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         #9 0x00007f55b14d36fd in PMPI_Barrier
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         (comm=0x601280 &lt;ompi_mpi_comm_world&gt;) at
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         pbarrier.c:63
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         #10 0x0000000000400b0b in main (argc=1,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         argv=0x7ffd1bb55658) at mpitest.c:26
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         (gdb)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         Thinking that this might be a bug in
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         tuned collectives, since that is what the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         stack shows, I ran the program like this
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         (basically adding the ^tuned part)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         [durga_at_smallMPI ~]$ mpirun -np 2
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         -hostfile ~/hostfile -mca btl self,tcp
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         -mca pml ob1 -mca coll ^tuned ./mpitest
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         It still hangs, but now with a different
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         stack trace:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         (gdb) bt
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         #0 0x00007f910d38ac3d in poll () from
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         /lib64/libc.so.6
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         #1 0x00007f910c815de6 in poll_dispatch
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         (base=0x1a317b0, tv=0x7fff43ee3610) at
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         poll.c:165
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         #2 0x00007f910c80da90 in
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         opal_libevent2022_event_base_loop
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         (base=0x1a317b0, flags=2) at event.c:1630
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         #3 0x00007f910c739144 in opal_progress ()
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         at runtime/opal_progress.c:171
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         #4 0x00007f910db130f7 in
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         opal_condition_wait (c=0x7f910de47c40
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         &lt;ompi_request_cond&gt;, m=0x7f910de47bc0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         &lt;ompi_request_lock&gt;)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                             at
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         ../../../../opal/threads/condition.h:76
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         #5 0x00007f910db132d8 in
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         ompi_request_wait_completion
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         (req=0x1b07680) at
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         ../../../../ompi/request/request.h:383
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         #6 0x00007f910db1533b in mca_pml_ob1_send
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         (buf=0x0, count=0,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         datatype=0x7f910de1e340 &lt;ompi_mpi_byte&gt;,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         dst=1, tag=-16,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         sendmode=MCA_PML_BASE_SEND_STANDARD,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         comm=0x601280 &lt;ompi_mpi_comm_world&gt;) at
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         pml_ob1_isend.c:259
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         #7 0x00007f910d9c3b38 in
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         ompi_coll_base_barrier_intra_basic_linear
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         (comm=0x601280 &lt;ompi_mpi_comm_world&gt;,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         module=0x1b092c0) at
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         base/coll_base_barrier.c:368
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         #8 0x00007f910d91c6fd in PMPI_Barrier
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         (comm=0x601280 &lt;ompi_mpi_comm_world&gt;) at
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         pbarrier.c:63
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         #9 0x0000000000400b0b in main (argc=1,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         argv=0x7fff43ee3a58) at mpitest.c:26
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         (gdb)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         The mpitest.c program is as follows:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         #include &lt;string.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         int main(int argc, char** argv)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         {
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                             int world_size, world_rank, name_len;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                             char
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         hostname[MPI_MAX_PROCESSOR_NAME], buf[8];
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         MPI_Comm_size(MPI_COMM_WORLD, &amp;world_size);
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         MPI_Comm_rank(MPI_COMM_WORLD, &amp;world_rank);
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         MPI_Get_processor_name(hostname, &amp;name_len);
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         printf(&quot;Hello world from processor %s,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         rank %d out of %d processors\n&quot;,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         hostname, world_rank, world_size);
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                             if (world_rank == 1)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                             {
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         MPI_Recv(buf, 6, MPI_CHAR, 0, 99,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         MPI_COMM_WORLD, MPI_STATUS_IGNORE);
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                             printf(&quot;%s received %s\n&quot;, hostname,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         buf);
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                             }
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                             else
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                             {
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         strcpy(buf, &quot;haha!&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         MPI_Send(buf, 6, MPI_CHAR, 1, 99,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                             printf(&quot;%s sent %s\n&quot;, hostname, buf);
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                             }
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         MPI_Finalize();
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                             return 0;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         }
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         The hostfile is as follows:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         10.10.10.10 slots=1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         10.10.10.11 slots=1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         The two nodes are connected by three
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         physical and 3 logical networks:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         Physical: Gigabit Ethernet, 10G iWARP,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         20G Infiniband
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         Logical: IP (all 3), PSM (Qlogic
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         Infiniband), Verbs (iWARP and Infiniband)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         Please note again that this is a fresh,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         brand new clone.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         Is this a bug (perhaps a side effect of
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         --disable-dlopen) or something I am doing
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         wrong?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         Thanks
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         Durga
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         We learn from history that we never learn
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         from history.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         Subscription:<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                         Link to this post:<a href="http://www.open-mpi.org/community/lists/users/2016/04/28930.php">http://www.open-mpi.org/community/lists/users/2016/04/28930.php</a>
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
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         _______________________________________________
</span><br>
<span class="quotelev1">&gt;         users mailing list
</span><br>
<span class="quotelev1">&gt;         users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;         Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;         Link to this post:
</span><br>
<span class="quotelev1">&gt;         <a href="http://www.open-mpi.org/community/lists/users/2016/04/28951.php">http://www.open-mpi.org/community/lists/users/2016/04/28951.php</a>
</span><br>
<span class="quotelev1">&gt;         ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     users mailing list
</span><br>
<span class="quotelev1">&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;     Link to this post:
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/lists/users/2016/04/28954.php">http://www.open-mpi.org/community/lists/users/2016/04/28954.php</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/04/28957.php">http://www.open-mpi.org/community/lists/users/2016/04/28957.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28961/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28962.php">Jeff Hammond: "Re: [OMPI users] Porting MPI-3 C-program to Fortran"</a>
<li><strong>Previous message:</strong> <a href="28960.php">Tom Rosmond: "[OMPI users] Porting MPI-3 C-program to Fortran"</a>
<li><strong>In reply to:</strong> <a href="28957.php">dpchoudh .: "Re: [OMPI users] OMPI users] Possible bug in MPI_Barrier() ?"</a>
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
