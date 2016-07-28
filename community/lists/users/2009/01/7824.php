<?
$subject_val = "[OMPI users] MPI_THREAD_MULTIPLE not provided";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 26 09:22:02 2009" -->
<!-- isoreceived="20090126142202" -->
<!-- sent="Mon, 26 Jan 2009 06:21:57 -0800 (PST)" -->
<!-- isosent="20090126142157" -->
<!-- name="Ali Copey" -->
<!-- email="alicopey158_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_THREAD_MULTIPLE not provided" -->
<!-- id="234773.67163.qm_at_web54303.mail.re2.yahoo.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] MPI_THREAD_MULTIPLE not provided<br>
<strong>From:</strong> Ali Copey (<em>alicopey158_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-26 09:21:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7825.php">Bernard Secher - SFME/LGLS: "Re: [OMPI users] dead lock in MPI_Finalize"</a>
<li><strong>Previous message:</strong> <a href="7823.php">Reuti: "Re: [OMPI users] Ompi runs thru cmd line but fails when run thru SGE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7836.php">Jeff Squyres: "Re: [OMPI users] MPI_THREAD_MULTIPLE not provided"</a>
<li><strong>Reply:</strong> <a href="7836.php">Jeff Squyres: "Re: [OMPI users] MPI_THREAD_MULTIPLE not provided"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I'm trying to get multiple thread running, and have openMPI 1.2.8 compiled with threading enabled:
<br>
<p>xxx_at_xxx:/usr/lib$ ompi_info | grep Thread
<br>
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; Thread support: posix (mpi: yes, progress: no)
<br>
<p>however, when I attempt to get MPI_THREAD_MULTIPLE, ...FUNNELED or ...SERIALIZED I am returned MPI_THREAD_SINGLE (code fragment follows):
<br>
<p>int provided = MPI::Init_thread(MPI_THREAD_MULTIPLE);
<br>
<p>&#160;&#160;&#160; switch(provided)
<br>
&#160;&#160;&#160; {
<br>
&#160;&#160;&#160; case MPI_THREAD_SINGLE: cout &lt;&lt; &quot;MPI_THREAD_SINGLE&quot;; break;
<br>
&#160;&#160;&#160; case MPI_THREAD_FUNNELED: cout &lt;&lt; &quot;MPI_THREAD_FUNNELED&quot;; break;
<br>
&#160;&#160;&#160; case MPI_THREAD_SERIALIZED: cout &lt;&lt; &quot;MPI_THREAD_SERIALIZED&quot;; break;
<br>
&#160;&#160;&#160; case MPI_THREAD_MULTIPLE: cout &lt;&lt; &quot;MPI_THREAD_MULTIPLE&quot;; break;
<br>
&#160;&#160;&#160; }
<br>
<p>Am I missing a compiler flag somewhere?
<br>
<p>System:
<br>
Linux xxx 2.6.26-1-amd64 #1 SMP Thu Oct 9 14:16:53 UTC 2008 x86_64 GNU/Linux
<br>
<p>Thanks for any help,
<br>
Alex
<br>
<p><p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7824/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7825.php">Bernard Secher - SFME/LGLS: "Re: [OMPI users] dead lock in MPI_Finalize"</a>
<li><strong>Previous message:</strong> <a href="7823.php">Reuti: "Re: [OMPI users] Ompi runs thru cmd line but fails when run thru SGE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7836.php">Jeff Squyres: "Re: [OMPI users] MPI_THREAD_MULTIPLE not provided"</a>
<li><strong>Reply:</strong> <a href="7836.php">Jeff Squyres: "Re: [OMPI users] MPI_THREAD_MULTIPLE not provided"</a>
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
