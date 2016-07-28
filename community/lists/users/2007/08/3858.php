<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Aug 14 17:35:35 2007" -->
<!-- isoreceived="20070814213535" -->
<!-- sent="Tue, 14 Aug 2007 16:35:31 -0500" -->
<!-- isosent="20070814213531" -->
<!-- name="smairal_at_[hidden]" -->
<!-- email="smairal_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_AllReduce design for shared-memory." -->
<!-- id="1187127331.46c22023403f3_at_webmail.ksu.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20070814170447.lxmbupt7gkkogwc4_at_webmail.iu.edu" -->
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
<strong>From:</strong> <a href="mailto:smairal_at_[hidden]?Subject=Re:%20[OMPI%20users]%20MPI_AllReduce%20design%20for%20shared-memory."><em>smairal_at_[hidden]</em></a><br>
<strong>Date:</strong> 2007-08-14 17:35:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3859.php">Jeff Squyres: "Re: [OMPI users] MPI_AllReduce design for shared-memory."</a>
<li><strong>Previous message:</strong> <a href="3857.php">smairal_at_[hidden]: "Re: [OMPI users] MPI_AllReduce design for shared-memory."</a>
<li><strong>Maybe in reply to:</strong> <a href="3837.php">smairal_at_[hidden]: "[OMPI users] MPI_AllReduce design for shared-memory."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks, I understand what you are saying. But my query is regarding the
<br>
design of MPI_AllReduce for shared-memory systems. I mean is there any
<br>
different logic/design of MPI_AllReduce when OpenMPI is used on
<br>
shared-memory systems?
<br>
The standard MPI_AllReduce says,
<br>
1. Each MPI process sends its value (and WAIT for others to send)
<br>
2. Values from all the processes is combined
<br>
3. Computed result is sent back to all processes (all LEAVE)
<br>
Does OpenMPI implement the same logic/design for shared-memory system or
<br>
it has some other way of doing it for shared-memory?
<br>
<p>-Thanks,
<br>
Sarang.
<br>
<p>Quoting &quot;Yuan,  Huapeng&quot; &lt;yuanh_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; HI,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think it has nothing to do with shared memory. It just has
</span><br>
<span class="quotelev1">&gt; something
</span><br>
<span class="quotelev1">&gt; to do with process or thread.
</span><br>
<span class="quotelev1">&gt; So, with interprocess, you can use mpi in shared memory (multicore or
</span><br>
<span class="quotelev1">&gt; distributed shared memory). But for multiple threads in the same
</span><br>
<span class="quotelev1">&gt; process, it cannot be used.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hope this helps.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Quoting smairal_at_[hidden]:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Can anyone help on this?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -Thanks,
</span><br>
<span class="quotelev2">&gt; &gt; Sarang.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Quoting smairal_at_[hidden]:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I am doing a research on parallel techniques for shared-memory
</span><br>
<span class="quotelev3">&gt; &gt;&gt; systems(NUMA). I understand that OpenMPI is intelligent to utilize
</span><br>
<span class="quotelev3">&gt; &gt;&gt; shared-memory system and it uses processor-affinity. Is the
</span><br>
<span class="quotelev1">&gt; OpenMPI
</span><br>
<span class="quotelev3">&gt; &gt;&gt; design of MPI_AllReduce &quot;same&quot; for shared-memory (NUMA) as well as
</span><br>
<span class="quotelev3">&gt; &gt;&gt; distributed system? Can someone please tell me MPI_AllReduce
</span><br>
<span class="quotelev1">&gt; design,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; in
</span><br>
<span class="quotelev3">&gt; &gt;&gt; brief, in terms of processes and their interaction on
</span><br>
<span class="quotelev1">&gt; shared-memory?
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Else please suggest me a good reference for this.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -Thanks,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Sarang.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3859.php">Jeff Squyres: "Re: [OMPI users] MPI_AllReduce design for shared-memory."</a>
<li><strong>Previous message:</strong> <a href="3857.php">smairal_at_[hidden]: "Re: [OMPI users] MPI_AllReduce design for shared-memory."</a>
<li><strong>Maybe in reply to:</strong> <a href="3837.php">smairal_at_[hidden]: "[OMPI users] MPI_AllReduce design for shared-memory."</a>
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
