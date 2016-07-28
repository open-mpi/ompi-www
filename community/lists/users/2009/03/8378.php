<?
$subject_val = "Re: [OMPI users] OpenMPI program getting stuck at poll()";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 10 11:50:03 2009" -->
<!-- isoreceived="20090310155003" -->
<!-- sent="Tue, 10 Mar 2009 17:49:58 +0200" -->
<!-- isosent="20090310154958" -->
<!-- name="Lenny Verkhovsky" -->
<!-- email="lenny.verkhovsky_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI program getting stuck at poll()" -->
<!-- id="453d39990903100849q2a3859d1o9c7231d743cf0eb3_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C5DAAD37.B64C%prasanna_at_searchme.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI program getting stuck at poll()<br>
<strong>From:</strong> Lenny Verkhovsky (<em>lenny.verkhovsky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-10 11:49:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8379.php">Serge: "[OMPI users] Upgrade from Open MPI 1.2 to 1.3"</a>
<li><strong>Previous message:</strong> <a href="8377.php">Lenny Verkhovsky: "Re: [OMPI users] Problem with MPI_Comm_spawn_multiple &amp; MPI_Info_fre"</a>
<li><strong>In reply to:</strong> <a href="8371.php">Prasanna Ranganathan: "[OMPI users] OpenMPI program getting stuck at poll()"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
can you try Open MPI 1.3 version.
<br>
<p><p>On 3/9/09, Prasanna Ranganathan &lt;prasanna_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Hi all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   I have a distributed program running on 400+ nodes and using OpenMPI. I
</span><br>
<span class="quotelev1">&gt; have run the same binary with nearly the same setup successfully previously.
</span><br>
<span class="quotelev1">&gt; However in my last two runs the program seems to be getting stuck after a
</span><br>
<span class="quotelev1">&gt; while before it completes. The stack trace at the time it gets stuck is as
</span><br>
<span class="quotelev1">&gt; follows:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   #0  0x00002ad0000c00df in poll () from /lib/libc.so.6
</span><br>
<span class="quotelev1">&gt;  #1  0x00002acfffa49c27 in opal_poll_dispatch () from
</span><br>
<span class="quotelev1">&gt; /usr/lib64/libopen-pal.so.0
</span><br>
<span class="quotelev1">&gt;  #2  0x00002acfffa47add in opal_event_base_loop () from
</span><br>
<span class="quotelev1">&gt; /usr/lib64/libopen-pal.so.0
</span><br>
<span class="quotelev1">&gt;  #3  0x00002acfffa43203 in opal_progress () from /usr/lib64/libopen-pal.so.0
</span><br>
<span class="quotelev1">&gt;  #4  0x00002acfff78b315 in ompi_request_test_some () from
</span><br>
<span class="quotelev1">&gt; /usr/lib64/libmpi.so.0
</span><br>
<span class="quotelev1">&gt;  #5  0x00002acfff7adf7a in PMPI_Testsome () from /usr/lib64/libmpi.so.0
</span><br>
<span class="quotelev1">&gt;  ....
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I checked all the nodes and they seem to be up and doing fine. Any
</span><br>
<span class="quotelev1">&gt; suggestions/hints on what might be happening here would help greatly. Thanks
</span><br>
<span class="quotelev1">&gt; in advance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I am using OpenMPI 1.2.7 on gentoo linux.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Prasanna.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;  users mailing list
</span><br>
<span class="quotelev1">&gt;  users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;  <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8379.php">Serge: "[OMPI users] Upgrade from Open MPI 1.2 to 1.3"</a>
<li><strong>Previous message:</strong> <a href="8377.php">Lenny Verkhovsky: "Re: [OMPI users] Problem with MPI_Comm_spawn_multiple &amp; MPI_Info_fre"</a>
<li><strong>In reply to:</strong> <a href="8371.php">Prasanna Ranganathan: "[OMPI users] OpenMPI program getting stuck at poll()"</a>
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
