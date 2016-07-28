<?
$subject_val = "Re: [OMPI users] Bug report [?] on spawn processes - blocking when morethan one Send/Recv";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 30 10:01:50 2009" -->
<!-- isoreceived="20090330140150" -->
<!-- sent="Mon, 30 Mar 2009 15:57:57 +0200" -->
<!-- isosent="20090330135757" -->
<!-- name="Lionel Gamet" -->
<!-- email="Lionel.Gamet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Bug report [?] on spawn processes - blocking when morethan one Send/Recv" -->
<!-- id="49D0CFE5.5050404_at_fluorem.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="037949C8-9D20-4D4C-B6A9-773211C17899_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Bug report [?] on spawn processes - blocking when morethan one Send/Recv<br>
<strong>From:</strong> Lionel Gamet (<em>Lionel.Gamet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-30 09:57:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8632.php">Ethan Mallove: "Re: [OMPI users] Linux opteron infiniband sunstudio configure	problem"</a>
<li><strong>Previous message:</strong> <a href="8630.php">Alessandro Surace: "Re: [OMPI users] PML add procs failed --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)"</a>
<li><strong>In reply to:</strong> <a href="8622.php">Jeff Squyres: "Re: [OMPI users] Bug report [?] on spawn processes - blocking when morethan one Send/Recv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8664.php">Jeff Squyres: "Re: [OMPI users] Bug report [?] on spawn processes - blocking when morethan one Send/Recv"</a>
<li><strong>Reply:</strong> <a href="8664.php">Jeff Squyres: "Re: [OMPI users] Bug report [?] on spawn processes - blocking when morethan one Send/Recv"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff and all members of the list,
<br>
<p>You were perfectly right about the wrong string lengths, but even if
<br>
corrected, I do still have the same deadlock problems on this simple
<br>
child/parent process.
<br>
Could it be some bug specifically related to the CentOS 5.2 Linux
<br>
distribution ?
<br>
<p>Best regards
<br>
<p>Lionel
<br>
<p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; It does not hang for me...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But I do notice one odd thing in your extended program: you send 3 
</span><br>
<span class="quotelev1">&gt; characters of the string &quot;hi2&quot; -- that will not include the trailing \0.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You might want to send 4 characters to ensure to include the trailing \0.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 25, 2009, at 9:52 AM, Lionel Gamet wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dear openmpi users and developers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I encounter dead-lock problems with spawn processes in openmpi, as
</span><br>
<span class="quotelev2">&gt;&gt; soon as more than one Send/Recv operation is done.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The test case I used has been extracted from the MPICH2 examples. It is
</span><br>
<span class="quotelev2">&gt;&gt; a simple parent/child program. The original version (see attached file
</span><br>
<span class="quotelev2">&gt;&gt; parent+child_from_MPICH2.tar.gz) works well under openmpi.
</span><br>
<span class="quotelev2">&gt;&gt; I use commands in run.cmd to compile and execute this example.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have tried to add one more communication by duplicating the send/recv
</span><br>
<span class="quotelev2">&gt;&gt; calls of the original MPICH2 source (see modified files in attached tar
</span><br>
<span class="quotelev2">&gt;&gt; archive parent+child_with_more_send_recv.tar.gz) and get dead-lock
</span><br>
<span class="quotelev2">&gt;&gt; problems when executing this modified version ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can anybody reproduce this ? I am using openmpi version 1.3 on a
</span><br>
<span class="quotelev2">&gt;&gt; Linux CentOS 5.2 (i386), with all updates of the distribution done.
</span><br>
<span class="quotelev2">&gt;&gt; See also attached file ompi_info.txt.gz (result of the command ompi_info
</span><br>
<span class="quotelev2">&gt;&gt; --all).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks in advance for any hints,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Best regards
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Lionel
</span><br>
<span class="quotelev2">&gt;&gt; &lt;parent+child_from_MPICH2.tar.gz&gt;&lt;parent+child_with_more_send_recv.tar.gz&gt;&lt;ompi_info.txt.gz&gt;&lt;Lionel_Gamet.vcf&gt;&lt;ATT7299515.txt&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8632.php">Ethan Mallove: "Re: [OMPI users] Linux opteron infiniband sunstudio configure	problem"</a>
<li><strong>Previous message:</strong> <a href="8630.php">Alessandro Surace: "Re: [OMPI users] PML add procs failed --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)"</a>
<li><strong>In reply to:</strong> <a href="8622.php">Jeff Squyres: "Re: [OMPI users] Bug report [?] on spawn processes - blocking when morethan one Send/Recv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8664.php">Jeff Squyres: "Re: [OMPI users] Bug report [?] on spawn processes - blocking when morethan one Send/Recv"</a>
<li><strong>Reply:</strong> <a href="8664.php">Jeff Squyres: "Re: [OMPI users] Bug report [?] on spawn processes - blocking when morethan one Send/Recv"</a>
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
