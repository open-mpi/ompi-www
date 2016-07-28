<?
$subject_val = "Re: [OMPI users] Q: OpenMPI's use of /tmp and hanging apps via FS problems?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 18 08:48:16 2008" -->
<!-- isoreceived="20080818124816" -->
<!-- sent="Mon, 18 Aug 2008 06:48:05 -0600" -->
<!-- isosent="20080818124805" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Q: OpenMPI's use of /tmp and hanging apps via FS problems?" -->
<!-- id="E70338FB-92EC-450D-8BDE-939772C2C64C_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="2b5e0c120808161240h54be8806se5db96a4b776dfe9_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Q: OpenMPI's use of /tmp and hanging apps via FS problems?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-18 08:48:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6379.php">Tim Mattox: "Re: [OMPI users] memory leak in alltoallw"</a>
<li><strong>Previous message:</strong> <a href="6377.php">Rolf Vandevaart: "Re: [OMPI users] problem with alltoall with ppn=8"</a>
<li><strong>In reply to:</strong> <a href="6366.php">Brian Dobbins: "[OMPI users] Q: OpenMPI's use of /tmp and hanging apps via FS problems?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Brian
<br>
<p>On Aug 16, 2008, at 1:40 PM, Brian Dobbins wrote:
<br>
<p><span class="quotelev1">&gt; Hi guys,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   I was hoping someone here could shed some light on OpenMPI's use  
</span><br>
<span class="quotelev1">&gt; of /tmp (or, I guess, TMPDIR) and save me from diving into the  
</span><br>
<span class="quotelev1">&gt; source.. ;)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   The background is that I'm trying to run some applications on a  
</span><br>
<span class="quotelev1">&gt; system which has a flaky parallel file system which TMPDIR is mapped  
</span><br>
<span class="quotelev1">&gt; to - so, on start up, OpenMPI creates it's 'openmpi-sessions-&lt;user&gt;'  
</span><br>
<span class="quotelev1">&gt; directory there, and under that, a few files.  Sometimes I see 1  
</span><br>
<span class="quotelev1">&gt; subdirectory (usually a 0), sometimes a 0 and a 1, etc.  In one of  
</span><br>
<span class="quotelev1">&gt; these, sometimes I see files such as 'shared_memory_pool.&lt;host&gt;',  
</span><br>
<span class="quotelev1">&gt; and 'shared_memory_module.&lt;host&gt;'.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   My questions are, one, what are the various numbers / files for?   
</span><br>
<span class="quotelev1">&gt; (If there's a write-up on this somewhere, just point me towards it!)
</span><br>
<p>The numbers just correspond to the jobid and vpid of the processes on  
<br>
the node. We use them to ensure that each process has its own  
<br>
&quot;trusted&quot; location where it can store tmp files without concerns for  
<br>
stepping on each other. These directories generally do not get used  
<br>
except for storing the shared memory files and for debugging output in  
<br>
the case of an internal OMPI error.
<br>
<p>The shared_memory files are backing files for shared memory operations.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   And two, the real question, are these 'files' used during runtime,  
</span><br>
<span class="quotelev1">&gt; or only upon startup / shutdown?  I'm having issues with various  
</span><br>
<span class="quotelev1">&gt; codes, especially those heavy on messages and I/O, failing to  
</span><br>
<span class="quotelev1">&gt; complete a run, and haven't resorted to sifting through strace's  
</span><br>
<span class="quotelev1">&gt; output yet.  This doesn't happen all the time, but I've seen it  
</span><br>
<span class="quotelev1">&gt; happen reliably now with one particular code - it's success rate (it  
</span><br>
<span class="quotelev1">&gt; DOES succeed sometimes) is about 25% right now.  My best guess is  
</span><br>
<span class="quotelev1">&gt; that this is because the file system is overloaded, thus not  
</span><br>
<span class="quotelev1">&gt; allowing timely I/O or access to OpenMPI's files, but I wanted to  
</span><br>
<span class="quotelev1">&gt; get a quick understanding of how these files are used by OpenMPI and  
</span><br>
<span class="quotelev1">&gt; whether the FS does indeed seem a likely culprit before going with  
</span><br>
<span class="quotelev1">&gt; that theory for sure.
</span><br>
<p>I would guess that you are having a problem with shared memory  
<br>
operations. Try using &quot;-mca btl ^sm&quot; on your cmd line to turn off  
<br>
shared memory and see if your success rate goes up - if so, then you  
<br>
have identified the problem!
<br>
<p>Ralph
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Thanks very much,
</span><br>
<span class="quotelev1">&gt;   - Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian Dobbins
</span><br>
<span class="quotelev1">&gt; Yale Engineering HPC
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
<li><strong>Next message:</strong> <a href="6379.php">Tim Mattox: "Re: [OMPI users] memory leak in alltoallw"</a>
<li><strong>Previous message:</strong> <a href="6377.php">Rolf Vandevaart: "Re: [OMPI users] problem with alltoall with ppn=8"</a>
<li><strong>In reply to:</strong> <a href="6366.php">Brian Dobbins: "[OMPI users] Q: OpenMPI's use of /tmp and hanging apps via FS problems?"</a>
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
