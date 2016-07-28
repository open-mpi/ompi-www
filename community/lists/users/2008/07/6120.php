<?
$subject_val = "Re: [OMPI users] runtime warnings with MPI_File_write_ordered";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 23 17:27:09 2008" -->
<!-- isoreceived="20080723212709" -->
<!-- sent="Wed, 23 Jul 2008 17:27:02 -0400" -->
<!-- isosent="20080723212702" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] runtime warnings with MPI_File_write_ordered" -->
<!-- id="BEAAC23C-201D-4759-B539-B0372C33E4A4_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4880B8FA.8050405_at_cs.uh.edu" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-23 17:27:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6121.php">Bill Broadley: "Re: [OMPI users] Can't use tcp instead of openib/infinipath"</a>
<li><strong>Previous message:</strong> <a href="6119.php">Jeff Squyres: "Re: [OMPI users] problems with MPI_Waitsome/MPI_Allstart and OpenMPI on gigabit and IB networks"</a>
<li><strong>In reply to:</strong> <a href="6092.php">Edgar Gabriel: "Re: [OMPI users] runtime warnings with MPI_File_write_ordered"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6173.php">Jeff Squyres: "Re: [OMPI users] runtime warnings with MPI_File_write_ordered"</a>
<li><strong>Reply:</strong> <a href="6173.php">Jeff Squyres: "Re: [OMPI users] runtime warnings with MPI_File_write_ordered"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I forwarded this on to the ROMIO maintainers; let's see what they say...
<br>
<p>On Jul 18, 2008, at 11:38 AM, Edgar Gabriel wrote:
<br>
<p><span class="quotelev1">&gt; here is a patch that we use on our development version to silence  
</span><br>
<span class="quotelev1">&gt; that warning, you have to apply it to.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ompi/ompi/mca/io/romio/romio/mpi-io/io_romio_close.c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I would not like to commit that to the repository since I can not  
</span><br>
<span class="quotelev1">&gt; oversee whether it causes problems in some other settings/scenario/ 
</span><br>
<span class="quotelev1">&gt; file systems. However, it fixed for us the problems when  
</span><br>
<span class="quotelev1">&gt; experimenting with shared file pointers (e.g.  
</span><br>
<span class="quotelev1">&gt; MPI_File_write_ordered) and did not create any issues so far.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Application of that patch at your own risk:-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Edgar
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian Austin wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sorry about my previous message, it was sent before I'd finished  
</span><br>
<span class="quotelev2">&gt;&gt; composing it.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Whenever I use MPI_File_write_ordered(), all but one process send  
</span><br>
<span class="quotelev2">&gt;&gt; the following message to stderr.
</span><br>
<span class="quotelev2">&gt;&gt; ADIOI_GEN_DELETE (line 22): **io No such file or directory
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have read
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2008/01/4936.php">http://www.open-mpi.org/community/lists/users/2008/01/4936.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; which suggests that this message appears because my program is  
</span><br>
<span class="quotelev2">&gt;&gt; trying to delete a file that does not exist, but my program does  
</span><br>
<span class="quotelev2">&gt;&gt; not explicitly delete any files. I've included a test program to  
</span><br>
<span class="quotelev2">&gt;&gt; demonstrate the message.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is there anything I can do to avoid or suppress this message?
</span><br>
<span class="quotelev2">&gt;&gt; The message I referred to before says that I could &quot;ignore errors  
</span><br>
<span class="quotelev2">&gt;&gt; from MPI_File_delete&quot;.  How do I do that?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Brian
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; int
</span><br>
<span class="quotelev2">&gt;&gt; main( int argc, char *argv[]){
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  char buff[2] = &quot;a&quot;;
</span><br>
<span class="quotelev2">&gt;&gt;  MPI_File fh;
</span><br>
<span class="quotelev2">&gt;&gt;  MPI_Status status;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  MPI_Init( &amp;argc, &amp;argv );
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  MPI_File_open( MPI_COMM_WORLD, &quot;foo.txt&quot;,
</span><br>
<span class="quotelev2">&gt;&gt;         MPI_MODE_CREATE | MPI_MODE_WRONLY,
</span><br>
<span class="quotelev2">&gt;&gt;         MPI_INFO_NULL, &amp;fh );
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  MPI_File_write_ordered( fh, buff, 1, MPI_BYTE, &amp;status );
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  MPI_File_close( &amp;fh );
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  MPI_Finalize();
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  return 0;
</span><br>
<span class="quotelev2">&gt;&gt; }//main
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 42d41
</span><br>
<span class="quotelev1">&gt; &lt;
</span><br>
<span class="quotelev1">&gt; 66,73c65
</span><br>
<span class="quotelev1">&gt; &lt; 	    int rank;
</span><br>
<span class="quotelev1">&gt; &lt; 	    MPI_Comm_rank ( (fh)-&gt;comm, &amp;rank );
</span><br>
<span class="quotelev1">&gt; &lt; 	    if ( rank == 0 ) {
</span><br>
<span class="quotelev1">&gt; &lt; 		ADIO_Close((fh)-&gt;shared_fp_fd, &amp;error_code);
</span><br>
<span class="quotelev1">&gt; &lt; 	    }
</span><br>
<span class="quotelev1">&gt; &lt; 	    else {
</span><br>
<span class="quotelev1">&gt; &lt; 		error_code = MPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt; &lt; 	    }
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev2">&gt;&gt; 	    ADIO_Close((fh)-&gt;shared_fp_fd, &amp;error_code);
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="6121.php">Bill Broadley: "Re: [OMPI users] Can't use tcp instead of openib/infinipath"</a>
<li><strong>Previous message:</strong> <a href="6119.php">Jeff Squyres: "Re: [OMPI users] problems with MPI_Waitsome/MPI_Allstart and OpenMPI on gigabit and IB networks"</a>
<li><strong>In reply to:</strong> <a href="6092.php">Edgar Gabriel: "Re: [OMPI users] runtime warnings with MPI_File_write_ordered"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6173.php">Jeff Squyres: "Re: [OMPI users] runtime warnings with MPI_File_write_ordered"</a>
<li><strong>Reply:</strong> <a href="6173.php">Jeff Squyres: "Re: [OMPI users] runtime warnings with MPI_File_write_ordered"</a>
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
