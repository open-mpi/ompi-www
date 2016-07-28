<?
$subject_val = "Re: [OMPI users] File seeking with shared filepointer issues";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul  1 12:34:49 2011" -->
<!-- isoreceived="20110701163449" -->
<!-- sent="Fri, 1 Jul 2011 11:34:44 -0500" -->
<!-- isosent="20110701163444" -->
<!-- name="Rob Latham" -->
<!-- email="robl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] File seeking with shared filepointer issues" -->
<!-- id="20110701163444.GC26363_at_mcs.anl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1960CD11-316F-462B-BF50-ED20B5B680CD_at_cisco.com" -->
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
<strong>From:</strong> Rob Latham (<em>robl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-01 12:34:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16794.php">Rob Latham: "Re: [OMPI users] File seeking with shared filepointer issues"</a>
<li><strong>Previous message:</strong> <a href="16792.php">christophe petit: "[OMPI users] need help for a mpi 2d heat equation solving code"</a>
<li><strong>In reply to:</strong> <a href="../../2011/06/16754.php">Jeff Squyres: "Re: [OMPI users] File seeking with shared filepointer issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16794.php">Rob Latham: "Re: [OMPI users] File seeking with shared filepointer issues"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sat, Jun 25, 2011 at 06:54:32AM -0400, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; I'm not super-familiar with the IO portions of MPI, but I think that you might be running afoul of the definition of &quot;collective.&quot;  &quot;Collective,&quot; in MPI terms, does *not* mean &quot;synchronize.&quot;  It just means that all functions must invoke it, potentially with the same (or similar) parameters.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hence, I think you're seeing cases where MPI processes are showing correct values, but only because the updates have not completed in the background.  Using a barrier is forcing those updates to complete before you query for the file position.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ...although, as I type that out, that seems weird.  A barrier should not (be guaranteed to) force the completion of collectives (file-based or otherwise).  That could be a side-effect of linear message passing behind the scenes, but that seems like a weird interface.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Rob -- can you comment on this, perchance?  Is this a bug in ROMIO, or if not, how is one supposed to use this interface can get consistent answers in all MPI processes?
</span><br>
<p>man, what a week.  I finally had a chance to look at this more
<br>
closely.
<br>
<p>Let's talk briefly about how ROMIO (the MPI-IO implementation) deals
<br>
with shared file pointers.  There's a hidden file containing exactly 8
<br>
bytes of data: the value of the shared file pointer offset.  In an
<br>
effort to ensure serialized access, ROMIO acquires an fcntl() lock on
<br>
that file before modifying it. 
<br>
<p>Are you writing to NFS, by any chance?  
<br>
<p>If you can get a &quot;negative offset&quot; then clearly the fcntl locks are
<br>
not behaving as expected.  Some file systems / operating systems
<br>
implement them as advisory locks, whereas ROMIO assumes they will be
<br>
mandatory locks. 
<br>
<p>Your code (without the barriers) looks correct to me. 
<br>
<p>==rob
<br>
<p><span class="quotelev1">&gt; On Jun 23, 2011, at 10:04 AM, Christian Anonymous wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I'm having some issues with MPI_File_seek_shared. Consider the following small test C++ program
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;iostream&gt;
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; #define PATH &quot;simdata.bin&quot;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; using namespace std;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; int ThisTask;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; int main(int argc, char *argv[])
</span><br>
<span class="quotelev2">&gt; &gt; {
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Init(&amp;argc,&amp;argv); /* Initialize MPI */
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Comm_rank(MPI_COMM_WORLD,&amp;ThisTask);
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; MPI_File fh;
</span><br>
<span class="quotelev2">&gt; &gt; int success;
</span><br>
<span class="quotelev2">&gt; &gt; MPI_File_open(MPI_COMM_WORLD,(char *) PATH,MPI_MODE_RDONLY,MPI_INFO_NULL,&amp;fh);
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; if(success != MPI_SUCCESS){ //Successfull open?
</span><br>
<span class="quotelev2">&gt; &gt; char err[256];
</span><br>
<span class="quotelev2">&gt; &gt; int err_length, err_class;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Error_class(success,&amp;err_class);
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Error_string(err_class,err,&amp;err_length);
</span><br>
<span class="quotelev2">&gt; &gt; cout &lt;&lt; &quot;Task &quot; &lt;&lt; ThisTask &lt;&lt; &quot;: &quot; &lt;&lt; err &lt;&lt; endl;
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Error_string(success,err,&amp;err_length);
</span><br>
<span class="quotelev2">&gt; &gt; cout &lt;&lt; &quot;Task &quot; &lt;&lt; ThisTask &lt;&lt; &quot;: &quot; &lt;&lt; err &lt;&lt; endl;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Abort(MPI_COMM_WORLD,success);
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; /* START SEEK TEST */
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Offset cur_filepos, eof_filepos;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; MPI_File_get_position_shared(fh,&amp;cur_filepos);
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; //MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt; &gt; MPI_File_seek_shared(fh,0,MPI_SEEK_END); /* Seek is collective */
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; MPI_File_get_position_shared(fh,&amp;eof_filepos);
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; //MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt; &gt; MPI_File_seek_shared(fh,0,MPI_SEEK_SET);
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; cout &lt;&lt; &quot;Task &quot; &lt;&lt; ThisTask &lt;&lt; &quot; reports a filesize of &quot; &lt;&lt; eof_filepos &lt;&lt; &quot;-&quot; &lt;&lt; cur_filepos &lt;&lt; &quot;=&quot; &lt;&lt; eof_filepos-cur_filepos &lt;&lt; endl;
</span><br>
<span class="quotelev2">&gt; &gt; /* END SEEK TEST */
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; /* Finalizing */	
</span><br>
<span class="quotelev2">&gt; &gt; MPI_File_close(&amp;fh);
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Finalize();
</span><br>
<span class="quotelev2">&gt; &gt; return 0;
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Note the comments before each MPI_Barrier. When the program is run by mpirun -np N (N strictly greater than 1), task 0 reports the correct filesize, while every other process reports either 0, minus the filesize or the correct filesize. Uncommenting the MPI_Barrier makes each process report the correct filesize. Is this working as intended? Since MPI_File_seek_shared is a collective, blocking function each process have to synchronise at the return point of the function, but not when the function is called. It seems that the use of MPI_File_seek_shared without an MPI_Barrier call first is very dangerous, or am I missing something?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; Care2 makes it easy for everyone to live a healthy, green lifestyle and impact the causes you care about most. Over 12 Million members! <a href="http://www.care2.com">http://www.care2.com</a> Feed a child by searching the web! Learn how <a href="http://www.care2.com/toolbar">http://www.care2.com/toolbar</a>_______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><pre>
-- 
Rob Latham
Mathematics and Computer Science Division
Argonne National Lab, IL USA
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16794.php">Rob Latham: "Re: [OMPI users] File seeking with shared filepointer issues"</a>
<li><strong>Previous message:</strong> <a href="16792.php">christophe petit: "[OMPI users] need help for a mpi 2d heat equation solving code"</a>
<li><strong>In reply to:</strong> <a href="../../2011/06/16754.php">Jeff Squyres: "Re: [OMPI users] File seeking with shared filepointer issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16794.php">Rob Latham: "Re: [OMPI users] File seeking with shared filepointer issues"</a>
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
