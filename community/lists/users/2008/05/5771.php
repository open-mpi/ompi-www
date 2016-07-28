<?
$subject_val = "Re: [OMPI users] Problem with NFS + PVFS2 + OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 30 12:37:15 2008" -->
<!-- isoreceived="20080530163715" -->
<!-- sent="Fri, 30 May 2008 13:37:09 -0300" -->
<!-- isosent="20080530163709" -->
<!-- name="Davi Vercillo C. Garcia" -->
<!-- email="davivercillo_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with NFS + PVFS2 + OpenMPI" -->
<!-- id="dd4eed670805300937w75c47af5w6cee1c068fb1c1ed_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20080529203355.GJ7968_at_mcs.anl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem with NFS + PVFS2 + OpenMPI<br>
<strong>From:</strong> Davi Vercillo C. Garcia (<em>davivercillo_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-30 12:37:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5772.php">Cally K: "[OMPI users] Problem with X forwarding"</a>
<li><strong>Previous message:</strong> <a href="5770.php">Ashley Pittman: "[OMPI users] File download sizes"</a>
<li><strong>In reply to:</strong> <a href="5760.php">Robert Latham: "Re: [OMPI users] Problem with NFS + PVFS2 + OpenMPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Sorry but I made a mistake... I'm not trying to use PVFS over NFS but
<br>
PVFS over EXT3. I still don't know this error message...
<br>
<p>On Thu, May 29, 2008 at 5:33 PM, Robert Latham &lt;robl_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; On Thu, May 29, 2008 at 04:48:49PM -0300, Davi Vercillo C. Garcia wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Oh, I see you want to use ordered i/o in your application.  PVFS
</span><br>
<span class="quotelev3">&gt;&gt; &gt; doesn't support that mode.  However, since you know how much data each
</span><br>
<span class="quotelev3">&gt;&gt; &gt; process wants to write, a combination of MPI_Scan (to compute each
</span><br>
<span class="quotelev3">&gt;&gt; &gt; processes offset) and MPI_File_write_at_all (to carry out the
</span><br>
<span class="quotelev3">&gt;&gt; &gt; collective i/o) will give you the same result with likely better
</span><br>
<span class="quotelev3">&gt;&gt; &gt; performance (and has the nice side effect of working with pvfs).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I don't understand very well this... what do I need to change in my code ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI_File_write_ordered has an interesting property (which you probably
</span><br>
<span class="quotelev1">&gt; know since you use it, but i'll spell it out anyway):  writes end up
</span><br>
<span class="quotelev1">&gt; in the file in rank-order, but are not necessarily carried out in
</span><br>
<span class="quotelev1">&gt; rank-order.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Once each process knows the offsets and lengths of the writes the
</span><br>
<span class="quotelev1">&gt; other process will do, that process can writes its data.  Observe that
</span><br>
<span class="quotelev1">&gt; rank 0 can write immediately.  Rank 1 only needs to know how much data
</span><br>
<span class="quotelev1">&gt; rank 0 will write.  and so on.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Rank N can compute its offset by knowing how much data the proceeding
</span><br>
<span class="quotelev1">&gt; N-1 processes want to write.  The most efficent way to collect this is
</span><br>
<span class="quotelev1">&gt; to use MPI_Scan and collect a sum of data:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.mpi-forum.org/docs/mpi-11-html/node84.html#Node84">http://www.mpi-forum.org/docs/mpi-11-html/node84.html#Node84</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Once you've computed these offsets, MPI_File_write_at_all has enough
</span><br>
<span class="quotelev1">&gt; information to cary out a collective write of the data.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ==rob
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Rob Latham
</span><br>
<span class="quotelev1">&gt; Mathematics and Computer Science Division    A215 0178 EA2D B059 8CDF
</span><br>
<span class="quotelev1">&gt; Argonne National Lab, IL USA                 B29D F333 664A 4280 315B
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
<p><p><p><pre>
-- 
Davi Vercillo Carneiro Garcia
Universidade Federal do Rio de Janeiro
Departamento de Ci&#234;ncia da Computa&#231;&#227;o
DCC-IM/UFRJ - <a href="http://www.dcc.ufrj.br">http://www.dcc.ufrj.br</a>
&quot;Good things come to those who... wait.&quot; - Debian Project
&quot;A computer is like air conditioning: it becomes useless when you open
windows.&quot; - Linus Torvalds
&quot;H&#225; duas coisas infinitas, o universo e a burrice humana. E eu estou
em d&#250;vida quanto o primeiro.&quot; - Albert Einstein
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5772.php">Cally K: "[OMPI users] Problem with X forwarding"</a>
<li><strong>Previous message:</strong> <a href="5770.php">Ashley Pittman: "[OMPI users] File download sizes"</a>
<li><strong>In reply to:</strong> <a href="5760.php">Robert Latham: "Re: [OMPI users] Problem with NFS + PVFS2 + OpenMPI"</a>
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
