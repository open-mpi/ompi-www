<?
$subject_val = "Re: [OMPI users] runtime warnings with MPI_File_write_ordered";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 28 18:14:54 2008" -->
<!-- isoreceived="20080728221454" -->
<!-- sent="Mon, 28 Jul 2008 18:14:45 -0400" -->
<!-- isosent="20080728221445" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] runtime warnings with MPI_File_write_ordered" -->
<!-- id="8B5B49F5-F3B7-410B-AF56-D6FA37D5CDCF_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="BEAAC23C-201D-4759-B539-B0372C33E4A4_at_cisco.com" -->
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
<strong>Date:</strong> 2008-07-28 18:14:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6174.php">George Bosilca: "Re: [OMPI users] Scope of MPI derived data types in MPI_COMM_WORLD"</a>
<li><strong>Previous message:</strong> <a href="6172.php">Jeff Squyres: "Re: [OMPI users] how to make a process start and then join a MPI group"</a>
<li><strong>In reply to:</strong> <a href="6120.php">Jeff Squyres: "Re: [OMPI users] runtime warnings with MPI_File_write_ordered"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
After a bunch of e-mails back and forth, it turned out to be an errant  
<br>
fprintf in OMPI's integration of ROMIO.  I've fixed it for the  
<br>
upcoming v1.3 series.
<br>
<p>Thanks for your patience, ROMIO guys!
<br>
<p><p>On Jul 23, 2008, at 5:27 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; I forwarded this on to the ROMIO maintainers; let's see what they  
</span><br>
<span class="quotelev1">&gt; say...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 18, 2008, at 11:38 AM, Edgar Gabriel wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; here is a patch that we use on our development version to silence  
</span><br>
<span class="quotelev2">&gt;&gt; that warning, you have to apply it to.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ompi/ompi/mca/io/romio/romio/mpi-io/io_romio_close.c
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I would not like to commit that to the repository since I can not  
</span><br>
<span class="quotelev2">&gt;&gt; oversee whether it causes problems in some other settings/scenario/ 
</span><br>
<span class="quotelev2">&gt;&gt; file systems. However, it fixed for us the problems when  
</span><br>
<span class="quotelev2">&gt;&gt; experimenting with shared file pointers (e.g.  
</span><br>
<span class="quotelev2">&gt;&gt; MPI_File_write_ordered) and did not create any issues so far.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Application of that patch at your own risk:-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; Edgar
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brian Austin wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sorry about my previous message, it was sent before I'd finished  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; composing it.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Whenever I use MPI_File_write_ordered(), all but one process send  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the following message to stderr.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ADIOI_GEN_DELETE (line 22): **io No such file or directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have read
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2008/01/4936.php">http://www.open-mpi.org/community/lists/users/2008/01/4936.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; which suggests that this message appears because my program is  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; trying to delete a file that does not exist, but my program does  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; not explicitly delete any files. I've included a test program to  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; demonstrate the message.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is there anything I can do to avoid or suppress this message?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The message I referred to before says that I could &quot;ignore errors  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; from MPI_File_delete&quot;.  How do I do that?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brian
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; int
</span><br>
<span class="quotelev3">&gt;&gt;&gt; main( int argc, char *argv[]){
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; char buff[2] = &quot;a&quot;;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_File fh;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Status status;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Init( &amp;argc, &amp;argv );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_File_open( MPI_COMM_WORLD, &quot;foo.txt&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        MPI_MODE_CREATE | MPI_MODE_WRONLY,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        MPI_INFO_NULL, &amp;fh );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_File_write_ordered( fh, buff, 1, MPI_BYTE, &amp;status );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_File_close( &amp;fh );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Finalize();
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; return 0;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }//main
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 42d41
</span><br>
<span class="quotelev2">&gt;&gt; &lt;
</span><br>
<span class="quotelev2">&gt;&gt; 66,73c65
</span><br>
<span class="quotelev2">&gt;&gt; &lt; 	    int rank;
</span><br>
<span class="quotelev2">&gt;&gt; &lt; 	    MPI_Comm_rank ( (fh)-&gt;comm, &amp;rank );
</span><br>
<span class="quotelev2">&gt;&gt; &lt; 	    if ( rank == 0 ) {
</span><br>
<span class="quotelev2">&gt;&gt; &lt; 		ADIO_Close((fh)-&gt;shared_fp_fd, &amp;error_code);
</span><br>
<span class="quotelev2">&gt;&gt; &lt; 	    }
</span><br>
<span class="quotelev2">&gt;&gt; &lt; 	    else {
</span><br>
<span class="quotelev2">&gt;&gt; &lt; 		error_code = MPI_SUCCESS;
</span><br>
<span class="quotelev2">&gt;&gt; &lt; 	    }
</span><br>
<span class="quotelev2">&gt;&gt; ---
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	    ADIO_Close((fh)-&gt;shared_fp_fd, &amp;error_code);
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6174.php">George Bosilca: "Re: [OMPI users] Scope of MPI derived data types in MPI_COMM_WORLD"</a>
<li><strong>Previous message:</strong> <a href="6172.php">Jeff Squyres: "Re: [OMPI users] how to make a process start and then join a MPI group"</a>
<li><strong>In reply to:</strong> <a href="6120.php">Jeff Squyres: "Re: [OMPI users] runtime warnings with MPI_File_write_ordered"</a>
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
