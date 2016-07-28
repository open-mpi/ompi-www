<?
$subject_val = "Re: [OMPI users] Bug report [?] on spawn processes - blocking when morethan one Send/Recv";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 30 21:37:20 2009" -->
<!-- isoreceived="20090331013720" -->
<!-- sent="Mon, 30 Mar 2009 21:37:15 -0400" -->
<!-- isosent="20090331013715" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Bug report [?] on spawn processes - blocking when morethan one Send/Recv" -->
<!-- id="7B4BD7E0-A965-4F7C-B522-88CF14049443_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49D0CFE5.5050404_at_fluorem.com" -->
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
<strong>Date:</strong> 2009-03-30 21:37:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8665.php">Eugene Loh: "Re: [OMPI users] Bogus memcpy or bogus  valgrind record"</a>
<li><strong>Previous message:</strong> <a href="8663.php">Russell McQueeney: "Re: [OMPI users] 'orte_ess_base_select failed'"</a>
<li><strong>In reply to:</strong> <a href="8631.php">Lionel Gamet: "Re: [OMPI users] Bug report [?] on spawn processes - blocking when morethan one Send/Recv"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmm.  It *shouldn't* be related to the OS version.  I'm using RHEL4  
<br>
for my tests; RHEL5 performs pretty much the same way with regards to  
<br>
spawn/connect/accept.  But then again, who knows?  :-\
<br>
<p>Can you try attaching a debugger to the hung processes to see where  
<br>
exactly they're hung?  Perhaps step/next through a bit and see if you  
<br>
can get a gist of where OMPI is (apparently) looping?
<br>
<p><p>On Mar 30, 2009, at 9:57 AM, Lionel Gamet wrote:
<br>
<p><span class="quotelev1">&gt; Hi Jeff and all members of the list,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You were perfectly right about the wrong string lengths, but even if
</span><br>
<span class="quotelev1">&gt; corrected, I do still have the same deadlock problems on this simple
</span><br>
<span class="quotelev1">&gt; child/parent process.
</span><br>
<span class="quotelev1">&gt; Could it be some bug specifically related to the CentOS 5.2 Linux
</span><br>
<span class="quotelev1">&gt; distribution ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best regards
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Lionel
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt; &gt; It does not hang for me...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; But I do notice one odd thing in your extended program: you send 3
</span><br>
<span class="quotelev2">&gt; &gt; characters of the string &quot;hi2&quot; -- that will not include the  
</span><br>
<span class="quotelev1">&gt; trailing \0.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; You might want to send 4 characters to ensure to include the  
</span><br>
<span class="quotelev1">&gt; trailing \0.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Mar 25, 2009, at 9:52 AM, Lionel Gamet wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Dear openmpi users and developers,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I encounter dead-lock problems with spawn processes in openmpi, as
</span><br>
<span class="quotelev3">&gt; &gt;&gt; soon as more than one Send/Recv operation is done.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The test case I used has been extracted from the MPICH2 examples.  
</span><br>
<span class="quotelev1">&gt; It is
</span><br>
<span class="quotelev3">&gt; &gt;&gt; a simple parent/child program. The original version (see attached  
</span><br>
<span class="quotelev1">&gt; file
</span><br>
<span class="quotelev3">&gt; &gt;&gt; parent+child_from_MPICH2.tar.gz) works well under openmpi.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I use commands in run.cmd to compile and execute this example.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I have tried to add one more communication by duplicating the  
</span><br>
<span class="quotelev1">&gt; send/recv
</span><br>
<span class="quotelev3">&gt; &gt;&gt; calls of the original MPICH2 source (see modified files in  
</span><br>
<span class="quotelev1">&gt; attached tar
</span><br>
<span class="quotelev3">&gt; &gt;&gt; archive parent+child_with_more_send_recv.tar.gz) and get dead-lock
</span><br>
<span class="quotelev3">&gt; &gt;&gt; problems when executing this modified version ...
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Can anybody reproduce this ? I am using openmpi version 1.3 on a
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Linux CentOS 5.2 (i386), with all updates of the distribution done.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; See also attached file ompi_info.txt.gz (result of the command  
</span><br>
<span class="quotelev1">&gt; ompi_info
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --all).
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thanks in advance for any hints,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Best regards
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Lionel
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &lt;parent+child_from_MPICH2.tar.gz&gt;&lt;parent 
</span><br>
<span class="quotelev1">&gt; + 
</span><br>
<span class="quotelev1">&gt; child_with_more_send_recv 
</span><br>
<span class="quotelev1">&gt; .tar.gz&gt;&lt;ompi_info.txt.gz&gt;&lt;Lionel_Gamet.vcf&gt;&lt;ATT7299515.txt&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;Lionel_Gamet.vcf&gt;&lt;ATT8227055.txt&gt;
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
<li><strong>Next message:</strong> <a href="8665.php">Eugene Loh: "Re: [OMPI users] Bogus memcpy or bogus  valgrind record"</a>
<li><strong>Previous message:</strong> <a href="8663.php">Russell McQueeney: "Re: [OMPI users] 'orte_ess_base_select failed'"</a>
<li><strong>In reply to:</strong> <a href="8631.php">Lionel Gamet: "Re: [OMPI users] Bug report [?] on spawn processes - blocking when morethan one Send/Recv"</a>
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
