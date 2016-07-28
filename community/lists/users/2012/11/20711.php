<?
$subject_val = "Re: [OMPI users] MPI_Recv MPI_THREAD_MULTIPLE";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 13 10:11:21 2012" -->
<!-- isoreceived="20121113151121" -->
<!-- sent="Tue, 13 Nov 2012 07:11:15 -0800" -->
<!-- isosent="20121113151115" -->
<!-- name="Brian Budge" -->
<!-- email="brian.budge_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Recv MPI_THREAD_MULTIPLE" -->
<!-- id="CANjXV68AGTkqws0PpVtA1o+X5cZVnRSrrmb5pZPMQL6UmTdzaw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="4c804451.9c88.13af932f9d6.Coremail.yin_zhao_at_126.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Recv MPI_THREAD_MULTIPLE<br>
<strong>From:</strong> Brian Budge (<em>brian.budge_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-13 10:11:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20712.php">Reuti: "Re: [OMPI users] What is the default install library for PATH and LD_LIBRARY_PATH"</a>
<li><strong>Previous message:</strong> <a href="20710.php">huaibao zhang: "[OMPI users] What is the default install library for PATH and LD_LIBRARY_PATH"</a>
<li><strong>In reply to:</strong> <a href="20709.php">&#213;&#212;&#211;&#161;: "[OMPI users] MPI_Recv MPI_THREAD_MULTIPLE"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Nov 13, 2012 at 1:56 AM, &#232;&#181;&#181;&#229;&#141;&#176; &lt;yin_zhao_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I have a problem here.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My program runs perfectly in MPI version 1.6 series, but it would run into
</span><br>
<span class="quotelev1">&gt; some problem in MPI version 1.4x series. *Does MPI 1.4x version have a
</span><br>
<span class="quotelev1">&gt; bug related in MPI_Recv.*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The log in Node[1] says that &quot;MPI_Recv in node[1] can not probe tag [11]
</span><br>
<span class="quotelev1">&gt; from source[0]&quot;. But in node [0], the log says it Isend message with Tag
</span><br>
<span class="quotelev1">&gt; [11] to dest [1].
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int provided;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI_Init_thread(&amp;argc, &amp;argv, MPI_THR!
</span><br>
<span class="quotelev1">&gt;  EAD_MULTIPLE, &amp;provided);if (provided != MPI_THREAD_MULTIPLE){
</span><br>
<span class="quotelev1">&gt;    printf(&quot;Sorry, your MPI library does not provide MPI_THREAD_MULTIPLE\n&quot;);
</span><br>
<span class="quotelev1">&gt;    MPI_Abort(MPI_COMM_WORLD, 0);}
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *Both of my 1.6x and 1.4x library do not support MPI_THREAD_MULTIPLE. Is
</span><br>
<span class="quotelev1">&gt; this the reason? But why it runs perfect with 1.6x version. *
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks very much for your help.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Esaon
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You need to build openmpi by configuring it with the multi-threading
</span><br>
flags.  Something like --enable-mpi-thread-multiple.  Most distributions
<br>
ship openmpi built without these flags.
<br>
<p>&nbsp;&nbsp;Brian
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20711/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20712.php">Reuti: "Re: [OMPI users] What is the default install library for PATH and LD_LIBRARY_PATH"</a>
<li><strong>Previous message:</strong> <a href="20710.php">huaibao zhang: "[OMPI users] What is the default install library for PATH and LD_LIBRARY_PATH"</a>
<li><strong>In reply to:</strong> <a href="20709.php">&#213;&#212;&#211;&#161;: "[OMPI users] MPI_Recv MPI_THREAD_MULTIPLE"</a>
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
