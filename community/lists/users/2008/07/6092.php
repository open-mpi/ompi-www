<?
$subject_val = "Re: [OMPI users] runtime warnings with MPI_File_write_ordered";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 18 11:38:39 2008" -->
<!-- isoreceived="20080718153839" -->
<!-- sent="Fri, 18 Jul 2008 10:38:34 -0500" -->
<!-- isosent="20080718153834" -->
<!-- name="Edgar Gabriel" -->
<!-- email="gabriel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] runtime warnings with MPI_File_write_ordered" -->
<!-- id="4880B8FA.8050405_at_cs.uh.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="137fe0320807171225m5d16162cg9fb9b333571243a4_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] runtime warnings with MPI_File_write_ordered<br>
<strong>From:</strong> Edgar Gabriel (<em>gabriel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-18 11:38:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6093.php">Bill Broadley: "[OMPI users] Can't use tcp instead of openib/infinipath"</a>
<li><strong>Previous message:</strong> <a href="6091.php">Brian Austin: "[OMPI users] runtime warnings with MPI_File_write_ordered"</a>
<li><strong>In reply to:</strong> <a href="6091.php">Brian Austin: "[OMPI users] runtime warnings with MPI_File_write_ordered"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6120.php">Jeff Squyres: "Re: [OMPI users] runtime warnings with MPI_File_write_ordered"</a>
<li><strong>Reply:</strong> <a href="6120.php">Jeff Squyres: "Re: [OMPI users] runtime warnings with MPI_File_write_ordered"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
here is a patch that we use on our development version to silence that 
<br>
warning, you have to apply it to.
<br>
<p>ompi/ompi/mca/io/romio/romio/mpi-io/io_romio_close.c
<br>
<p>I would not like to commit that to the repository since I can not 
<br>
oversee whether it causes problems in some other settings/scenario/file 
<br>
systems. However, it fixed for us the problems when experimenting with 
<br>
shared file pointers (e.g. MPI_File_write_ordered) and did not create 
<br>
any issues so far.
<br>
<p>Application of that patch at your own risk:-)
<br>
<p>Thanks
<br>
Edgar
<br>
<p><p>Brian Austin wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry about my previous message, it was sent before I'd finished 
</span><br>
<span class="quotelev1">&gt; composing it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Whenever I use MPI_File_write_ordered(), all but one process send the 
</span><br>
<span class="quotelev1">&gt; following message to stderr.
</span><br>
<span class="quotelev1">&gt; ADIOI_GEN_DELETE (line 22): **io No such file or directory
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have read
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2008/01/4936.php">http://www.open-mpi.org/community/lists/users/2008/01/4936.php</a>
</span><br>
<span class="quotelev1">&gt; which suggests that this message appears because my program is trying 
</span><br>
<span class="quotelev1">&gt; to delete a file that does not exist, but my program does not 
</span><br>
<span class="quotelev1">&gt; explicitly delete any files. I've included a test program to 
</span><br>
<span class="quotelev1">&gt; demonstrate the message.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there anything I can do to avoid or suppress this message?
</span><br>
<span class="quotelev1">&gt; The message I referred to before says that I could &quot;ignore errors from 
</span><br>
<span class="quotelev1">&gt; MPI_File_delete&quot;.  How do I do that?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int
</span><br>
<span class="quotelev1">&gt; main( int argc, char *argv[]){
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   char buff[2] = &quot;a&quot;;
</span><br>
<span class="quotelev1">&gt;   MPI_File fh;
</span><br>
<span class="quotelev1">&gt;   MPI_Status status;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   MPI_Init( &amp;argc, &amp;argv );
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   MPI_File_open( MPI_COMM_WORLD, &quot;foo.txt&quot;,
</span><br>
<span class="quotelev1">&gt;          MPI_MODE_CREATE | MPI_MODE_WRONLY,
</span><br>
<span class="quotelev1">&gt;          MPI_INFO_NULL, &amp;fh );
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   MPI_File_write_ordered( fh, buff, 1, MPI_BYTE, &amp;status );
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   MPI_File_close( &amp;fh );
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   return 0;
</span><br>
<span class="quotelev1">&gt; }//main
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>text/x-patch attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6092/silence_io_warning.patch">silence_io_warning.patch</a>
</ul>
<!-- attachment="silence_io_warning.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6093.php">Bill Broadley: "[OMPI users] Can't use tcp instead of openib/infinipath"</a>
<li><strong>Previous message:</strong> <a href="6091.php">Brian Austin: "[OMPI users] runtime warnings with MPI_File_write_ordered"</a>
<li><strong>In reply to:</strong> <a href="6091.php">Brian Austin: "[OMPI users] runtime warnings with MPI_File_write_ordered"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6120.php">Jeff Squyres: "Re: [OMPI users] runtime warnings with MPI_File_write_ordered"</a>
<li><strong>Reply:</strong> <a href="6120.php">Jeff Squyres: "Re: [OMPI users] runtime warnings with MPI_File_write_ordered"</a>
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
