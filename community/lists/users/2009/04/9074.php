<?
$subject_val = "Re: [OMPI users] [Fwd: mpi alltoall memory requirement]";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 23 13:06:31 2009" -->
<!-- isoreceived="20090423170631" -->
<!-- sent="Thu, 23 Apr 2009 22:36:27 +0530" -->
<!-- isosent="20090423170627" -->
<!-- name="gossips J" -->
<!-- email="polk678_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [Fwd: mpi alltoall memory requirement]" -->
<!-- id="aae01bca0904231006u3677006dk7d5aa14d830876eb_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="001636456e3825101304683855ca_at_google.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] [Fwd: mpi alltoall memory requirement]<br>
<strong>From:</strong> gossips J (<em>polk678_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-23 13:06:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9075.php">Viral Mehta: "Re: [OMPI users] [Fwd: mpi alltoall memory requirement]"</a>
<li><strong>Previous message:</strong> <a href="9073.php">Eugene Loh: "Re: [OMPI users] MPI_Bcast from OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="9067.php">viral.vkm_at_[hidden]: "Re: [OMPI users] [Fwd: mpi alltoall memory requirement]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9075.php">Viral Mehta: "Re: [OMPI users] [Fwd: mpi alltoall memory requirement]"</a>
<li><strong>Reply:</strong> <a href="9075.php">Viral Mehta: "Re: [OMPI users] [Fwd: mpi alltoall memory requirement]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What is the NIC you use?
<br>
What OFED build?
<br>
Are you sure about wellness of provider lib/drivers..?
<br>
<p>It is strange that you get out of mem in all to all tests... should not
<br>
happen on 32G system,..!!!
<br>
<p>-polk.
<br>
<p>On 4/23/09, viral.vkm_at_[hidden] &lt;viral.vkm_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; or any link which helps to understand system reuirement for certain test
</span><br>
<span class="quotelev1">&gt; scenario ..
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 23, 2009 12:42pm, viral.vkm_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi
</span><br>
<span class="quotelev2">&gt; &gt; Thanks for your response.
</span><br>
<span class="quotelev2">&gt; &gt; However, I am running
</span><br>
<span class="quotelev2">&gt; &gt; mpiexec .... -ppn 24 -n 192 /opt/IMB-MPI1 alltaoll -msglen /root/temp
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; And file /root/temp contains entry upto 65535 size only. That means
</span><br>
<span class="quotelev1">&gt; alltoall test will run upto 65K size only
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; So, in that case I will require very less memory but then in that case
</span><br>
<span class="quotelev1">&gt; also test is running out-of-memory. Please help someone to understand the
</span><br>
<span class="quotelev1">&gt; scenario.
</span><br>
<span class="quotelev2">&gt; &gt; Or do I need to switch to some algorithm or do I need to set some other
</span><br>
<span class="quotelev1">&gt; environment variables ? or anything like that ?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Apr 22, 2009 6:43pm, Ashley Pittman ashley_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Wed, 2009-04-22 at 12:40 +0530, vkm wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; The same amount of memory required for recvbuf. So at the least each
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; node should have 36GB of memory.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Am I calculating right ? Please correct.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Your calculation looks correct, the conclusion is slightly wrong
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; however. The Application buffers will consume 36Gb of memory, the rest
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; of the application, any comms buffers and the usual OS overhead will be
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; on top of this so putting only 36Gb of ram in your nodes will still
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; leave you short.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Ashley,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9074/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9075.php">Viral Mehta: "Re: [OMPI users] [Fwd: mpi alltoall memory requirement]"</a>
<li><strong>Previous message:</strong> <a href="9073.php">Eugene Loh: "Re: [OMPI users] MPI_Bcast from OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="9067.php">viral.vkm_at_[hidden]: "Re: [OMPI users] [Fwd: mpi alltoall memory requirement]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9075.php">Viral Mehta: "Re: [OMPI users] [Fwd: mpi alltoall memory requirement]"</a>
<li><strong>Reply:</strong> <a href="9075.php">Viral Mehta: "Re: [OMPI users] [Fwd: mpi alltoall memory requirement]"</a>
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
