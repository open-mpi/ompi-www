<?
$subject_val = "Re: [OMPI users] Bug report [?] on spawn processes - blocking when morethan one Send/Recv";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 27 22:04:42 2009" -->
<!-- isoreceived="20090328020442" -->
<!-- sent="Fri, 27 Mar 2009 22:04:28 -0400" -->
<!-- isosent="20090328020428" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Bug report [?] on spawn processes - blocking when morethan one Send/Recv" -->
<!-- id="037949C8-9D20-4D4C-B6A9-773211C17899_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49CA3712.70800_at_fluorem.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-27 22:04:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8623.php">Jeff Squyres: "Re: [OMPI users] Does OpenMPI's MPI_Barrier automatically call thetuned version?"</a>
<li><strong>Previous message:</strong> <a href="8621.php">Jeff Squyres: "Re: [OMPI users] 'orte_ess_base_select failed'"</a>
<li><strong>In reply to:</strong> <a href="8579.php">Lionel Gamet: "[OMPI users] Bug report [?] on spawn processes - blocking when more than one Send/Recv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8631.php">Lionel Gamet: "Re: [OMPI users] Bug report [?] on spawn processes - blocking when morethan one Send/Recv"</a>
<li><strong>Reply:</strong> <a href="8631.php">Lionel Gamet: "Re: [OMPI users] Bug report [?] on spawn processes - blocking when morethan one Send/Recv"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It does not hang for me...
<br>
<p>But I do notice one odd thing in your extended program: you send 3  
<br>
characters of the string &quot;hi2&quot; -- that will not include the trailing \0.
<br>
<p>You might want to send 4 characters to ensure to include the trailing  
<br>
\0.
<br>
<p><p><p>On Mar 25, 2009, at 9:52 AM, Lionel Gamet wrote:
<br>
<p><span class="quotelev1">&gt; Dear openmpi users and developers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I encounter dead-lock problems with spawn processes in openmpi, as
</span><br>
<span class="quotelev1">&gt; soon as more than one Send/Recv operation is done.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The test case I used has been extracted from the MPICH2 examples. It  
</span><br>
<span class="quotelev1">&gt; is
</span><br>
<span class="quotelev1">&gt; a simple parent/child program. The original version (see attached file
</span><br>
<span class="quotelev1">&gt; parent+child_from_MPICH2.tar.gz) works well under openmpi.
</span><br>
<span class="quotelev1">&gt; I use commands in run.cmd to compile and execute this example.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have tried to add one more communication by duplicating the send/ 
</span><br>
<span class="quotelev1">&gt; recv
</span><br>
<span class="quotelev1">&gt; calls of the original MPICH2 source (see modified files in attached  
</span><br>
<span class="quotelev1">&gt; tar
</span><br>
<span class="quotelev1">&gt; archive parent+child_with_more_send_recv.tar.gz) and get dead-lock
</span><br>
<span class="quotelev1">&gt; problems when executing this modified version ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can anybody reproduce this ? I am using openmpi version 1.3 on a
</span><br>
<span class="quotelev1">&gt; Linux CentOS 5.2 (i386), with all updates of the distribution done.
</span><br>
<span class="quotelev1">&gt; See also attached file ompi_info.txt.gz (result of the command  
</span><br>
<span class="quotelev1">&gt; ompi_info
</span><br>
<span class="quotelev1">&gt; --all).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance for any hints,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best regards
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Lionel
</span><br>
<span class="quotelev1">&gt; &lt;parent+child_from_MPICH2.tar.gz&gt;&lt;parent 
</span><br>
<span class="quotelev1">&gt; + 
</span><br>
<span class="quotelev1">&gt; child_with_more_send_recv 
</span><br>
<span class="quotelev1">&gt; .tar.gz&gt;&lt;ompi_info.txt.gz&gt;&lt;Lionel_Gamet.vcf&gt;&lt;ATT7299515.txt&gt;
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8623.php">Jeff Squyres: "Re: [OMPI users] Does OpenMPI's MPI_Barrier automatically call thetuned version?"</a>
<li><strong>Previous message:</strong> <a href="8621.php">Jeff Squyres: "Re: [OMPI users] 'orte_ess_base_select failed'"</a>
<li><strong>In reply to:</strong> <a href="8579.php">Lionel Gamet: "[OMPI users] Bug report [?] on spawn processes - blocking when more than one Send/Recv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8631.php">Lionel Gamet: "Re: [OMPI users] Bug report [?] on spawn processes - blocking when morethan one Send/Recv"</a>
<li><strong>Reply:</strong> <a href="8631.php">Lionel Gamet: "Re: [OMPI users] Bug report [?] on spawn processes - blocking when morethan one Send/Recv"</a>
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
