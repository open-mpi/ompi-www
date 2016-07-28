<?
$subject_val = "Re: [OMPI users] MPI_File_write_ordered does not truncate files";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 18 11:17:49 2009" -->
<!-- isoreceived="20090218161749" -->
<!-- sent="Wed, 18 Feb 2009 09:17:40 -0700" -->
<!-- isosent="20090218161740" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_File_write_ordered does not truncate files" -->
<!-- id="E5DA6F6A-6EAF-448D-9A2F-7324B2025656_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="c826e2120902151427v4278e814ydc287e7c0ea58f1e_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_File_write_ordered does not truncate files<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-18 11:17:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8088.php">Jeff Squyres: "Re: [OMPI users] MPI_File_write_ordered does not truncate files"</a>
<li><strong>Previous message:</strong> <a href="8086.php">Jeff Squyres: "[OMPI users] Euro PVM/MPI'09 CFP"</a>
<li><strong>In reply to:</strong> <a href="8072.php">Brian Austin: "[OMPI users] MPI_File_write_ordered does not truncate files"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8088.php">Jeff Squyres: "Re: [OMPI users] MPI_File_write_ordered does not truncate files"</a>
<li><strong>Reply:</strong> <a href="8088.php">Jeff Squyres: "Re: [OMPI users] MPI_File_write_ordered does not truncate files"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can you confirm - are you -really- using 1.1.2???
<br>
<p>You might consider updating to something more recent, like 1.3.0 or at  
<br>
least 1.2.8. It would be interesting to know if you see the same  
<br>
problem.
<br>
<p><p>On Feb 15, 2009, at 3:27 PM, Brian Austin wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I use MPI_File_write_ordered to overwrite an existing file, the  
</span><br>
<span class="quotelev1">&gt; new file is not truncated to the appropriate size.
</span><br>
<span class="quotelev1">&gt; For example, if I first create a new file and write &quot;aa&quot; from two  
</span><br>
<span class="quotelev1">&gt; nodes, the file contains &quot;aaaa&quot;.
</span><br>
<span class="quotelev1">&gt; Then I close the file, and compute for a while.
</span><br>
<span class="quotelev1">&gt; Later, I reopen the file with amode=CREATE | WRONLY and write &quot;b&quot;  
</span><br>
<span class="quotelev1">&gt; from two nodes, the file contains &quot;bbaa&quot;.
</span><br>
<span class="quotelev1">&gt; I would have expected the file to contain only &quot;bb&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Am I misunderstanding something, or is this a bug?
</span><br>
<span class="quotelev1">&gt; Now that I think about it, this seems more like a problem with  
</span><br>
<span class="quotelev1">&gt; MPI_File_Open:
</span><br>
<span class="quotelev1">&gt; this is the behavior I would have expected if I had reopened the  
</span><br>
<span class="quotelev1">&gt; file with amode=CREATE | RDRW.
</span><br>
<span class="quotelev1">&gt; Shouldn't MPI_File_Open truncate the file to 0 when it is opened  
</span><br>
<span class="quotelev1">&gt; WRONLY and not APPEND?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm able to obtain my desired result by calling
</span><br>
<span class="quotelev1">&gt; MPI_File_get_position_shared()
</span><br>
<span class="quotelev1">&gt; MPI_File_set_size()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; -Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PS. I'm using (Open MPI) 1.1.2
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
<li><strong>Next message:</strong> <a href="8088.php">Jeff Squyres: "Re: [OMPI users] MPI_File_write_ordered does not truncate files"</a>
<li><strong>Previous message:</strong> <a href="8086.php">Jeff Squyres: "[OMPI users] Euro PVM/MPI'09 CFP"</a>
<li><strong>In reply to:</strong> <a href="8072.php">Brian Austin: "[OMPI users] MPI_File_write_ordered does not truncate files"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8088.php">Jeff Squyres: "Re: [OMPI users] MPI_File_write_ordered does not truncate files"</a>
<li><strong>Reply:</strong> <a href="8088.php">Jeff Squyres: "Re: [OMPI users] MPI_File_write_ordered does not truncate files"</a>
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
