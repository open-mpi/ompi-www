<?
$subject_val = "Re: [OMPI users] Segfault on any MPI communication on head node";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 27 15:08:58 2011" -->
<!-- isoreceived="20110927190858" -->
<!-- sent="Tue, 27 Sep 2011 21:08:44 +0200" -->
<!-- isosent="20110927190844" -->
<!-- name="German Hoecht" -->
<!-- email="german.hoecht_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segfault on any MPI communication on head node" -->
<!-- id="4E821F3C.9070601_at_googlemail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4E820A97.20504_at_gtri.gatech.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Segfault on any MPI communication on head node<br>
<strong>From:</strong> German Hoecht (<em>german.hoecht_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-27 15:08:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17452.php">Reuti: "Re: [OMPI users] alternate PBS_NODEFILE"</a>
<li><strong>Previous message:</strong> <a href="17450.php">Reuti: "Re: [OMPI users] EXTERNAL: Re: Trouble compiling 1.4.3 with PGI 10.9 compilers"</a>
<li><strong>In reply to:</strong> <a href="17447.php">Phillip Vassenkov: "Re: [OMPI users] Segfault on any MPI communication on head node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17459.php">Jeff Squyres: "Re: [OMPI users] Segfault on any MPI communication on head node"</a>
<li><strong>Reply:</strong> <a href="17459.php">Jeff Squyres: "Re: [OMPI users] Segfault on any MPI communication on head node"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
char* name[20]; yields 20 (undefined) pointers to char, guess you mean
<br>
char name[20];
<br>
<p>So Brent's suggestion should work as well(?)
<br>
<p>To be safe I would also add:
<br>
gethostname(name,maxlen);
<br>
name[19] = '\0';
<br>
printf(&quot;Hello, world.  I am %d of %d and host %s \n&quot;, rank, ...
<br>
<p>Cheers
<br>
<p>On 09/27/2011 07:40 PM, Phillip Vassenkov wrote:
<br>
<span class="quotelev1">&gt; Thanks, but my main concern is the segfault :P I changed and as I
</span><br>
<span class="quotelev1">&gt; expected it still segfaults.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 9/27/11 9:48 AM, Henderson, Brent wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Here is another possibly non-helpful suggestion.  :)  Change:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;       char* name[20];
</span><br>
<span class="quotelev2">&gt;&gt;       int maxlen = 20;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; To:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;       char name[256];
</span><br>
<span class="quotelev2">&gt;&gt;       int maxlen = 256;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; gethostname() is supposed to properly truncate the hostname it returns
</span><br>
<span class="quotelev2">&gt;&gt; if the actual name is longer than the length provided, but since you
</span><br>
<span class="quotelev2">&gt;&gt; have at least one that is longer than 20 characters, I'm curious.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brent
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]]
</span><br>
<span class="quotelev2">&gt;&gt; On Behalf Of Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Tuesday, September 27, 2011 6:29 AM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] Segfault on any MPI communication on head node
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hmm.  It's not immediately clear to me what's going wrong here.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I hate to ask, but could you install a debugging version of Open MPI
</span><br>
<span class="quotelev2">&gt;&gt; and capture a proper stack trace of the segv?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Also, could you try the 1.4.4 rc and see if that magically fixes the
</span><br>
<span class="quotelev2">&gt;&gt; problem? (I'm about to post a new 1.4.4 rc later this morning, but
</span><br>
<span class="quotelev2">&gt;&gt; either the current one or the one from later today would be a good
</span><br>
<span class="quotelev2">&gt;&gt; datapoint)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 26, 2011, at 5:09 PM, Phillip Vassenkov wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yep, Fedora Core 14 and OpenMPI 1.4.3
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 9/24/11 7:02 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Are you running the same OS version and Open MPI version between the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; head node and regular nodes?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Sep 23, 2011, at 5:27 PM, Vassenkov, Phillip wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hey all,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I've been racking my brains over this for several days and was
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; hoping anyone could enlighten me. I'll describe only the relevant
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; parts of the network/computer systems. There is one head node and a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; multitude of regular nodes. The regular nodes are all identical to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; each other. If I run an mpi program from one of the regular nodes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; to any other regular nodes, everything works. If I include the head
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; node in the hosts file, I get segfaults which I'll paste below
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; along with sample code. The machines are all networked via
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; infiniband and Ethernet. The issue only arises when mpi
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; communication occurs. By this I mean, MPi_Init might succeed but
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the segfault always occurs on MPI_Barrier or MPI_send/recv. I found
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; a work around by disabling the openib btl and enforcing that
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; communications go over infiniband(if I don't force infiniband,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; it'll go over Ethernet). This command works when the head node is
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; included in the hosts file:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpirun --hostfile hostfile --mca btl ^openib --mca
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; btl_tcp_if_include ib0  -np 2 ./b.out
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Sample Code:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #include&lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; int main(int argc, char *argv[])
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     int rank, nprocs;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      char* name[20];
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      int maxlen = 20;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      MPI_Init(&amp;argc,&amp;argv);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      MPI_Comm_size(MPI_COMM_WORLD,&amp;nprocs);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      MPI_Comm_rank(MPI_COMM_WORLD,&amp;rank);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      gethostname(name,maxlen);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      printf(&quot;Hello, world.  I am %d of %d and host %s \n&quot;, rank,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; nprocs,name);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      fflush(stdout);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      return 0;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Segfault:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [pastec:19917] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [pastec:19917] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [pastec:19917] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [pastec:19917] Failing at address: 0x8
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [pastec:19917] [ 0] /lib64/libpthread.so.0() [0x34a880eeb0]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [pastec:19917] [ 1] /usr/lib64/libmthca-rdmav2.so(+0x36aa)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [0x7eff6430b6aa]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [pastec:19917] [ 2]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /usr/lib64/openmpi/lib/openmpi/mca_btl_openib.so(+0x133c9)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [0x7eff66a163c9]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [pastec:19917] [ 3]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /usr/lib64/openmpi/lib/openmpi/mca_btl_openib.so(+0x1eb70)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [0x7eff66a21b70]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [pastec:19917] [ 4]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /usr/lib64/openmpi/lib/openmpi/mca_btl_openib.so(+0x1ec89)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [0x7eff66a21c89]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [pastec:19917] [ 5]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /usr/lib64/openmpi/lib/openmpi/mca_btl_openib.so(+0x1403d)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [0x7eff66a1703d]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [pastec:19917] [ 6]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /usr/lib64/openmpi/lib/openmpi/mca_pml_ob1.so(+0x120e6)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [0x7eff676670e6]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [pastec:19917] [ 7]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /usr/lib64/openmpi/lib/openmpi/mca_pml_ob1.so(+0x6273)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [0x7eff6765b273]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [pastec:19917] [ 8]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /usr/lib64/openmpi/lib/openmpi/mca_coll_tuned.so(+0x1b2f)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [0x7eff65539b2f]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [pastec:19917] [ 9]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /usr/lib64/openmpi/lib/openmpi/mca_coll_tuned.so(+0xa5cf)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [0x7eff655425cf]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [pastec:19917] [10]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /usr/lib64/openmpi/lib/libmpi.so.0(MPI_Barrier+0x9e) [0x3a54c4c94e]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [pastec:19917] [11] ./b.out(main+0x6e) [0x400a42]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [pastec:19917] [12] /lib64/libc.so.6(__libc_start_main+0xfd)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [0x34a841ee5d]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [pastec:19917] [13] ./b.out() [0x400919]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [pastec:19917] *** End of error message ***
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [pastec.gtri.gatech.edu:19913] [[18526,0],0]-[[18526,1],1]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mca_oob_tcp_msg_recv: readv failed: Connection reset by peer (104)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpirun noticed that process rank 1 with PID 19917 on node
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; pastec.gtri.gatech.edu exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
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
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17452.php">Reuti: "Re: [OMPI users] alternate PBS_NODEFILE"</a>
<li><strong>Previous message:</strong> <a href="17450.php">Reuti: "Re: [OMPI users] EXTERNAL: Re: Trouble compiling 1.4.3 with PGI 10.9 compilers"</a>
<li><strong>In reply to:</strong> <a href="17447.php">Phillip Vassenkov: "Re: [OMPI users] Segfault on any MPI communication on head node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17459.php">Jeff Squyres: "Re: [OMPI users] Segfault on any MPI communication on head node"</a>
<li><strong>Reply:</strong> <a href="17459.php">Jeff Squyres: "Re: [OMPI users] Segfault on any MPI communication on head node"</a>
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
