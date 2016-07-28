<?
$subject_val = "Re: [OMPI users] File seeking with shared filepointer issues";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 27 09:20:41 2011" -->
<!-- isoreceived="20110627132041" -->
<!-- sent="Mon, 27 Jun 2011 15:20:36 +0200" -->
<!-- isosent="20110627132036" -->
<!-- name="pascal.deveze_at_[hidden]" -->
<!-- email="pascal.deveze_at_[hidden]" -->
<!-- subject="Re: [OMPI users] File seeking with shared filepointer issues" -->
<!-- id="OFB7AAD8B4.5F613C35-ONC12578BC.0047823C-C12578BC.00495634_at_fraz.bull.fr" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> Re: [OMPI users] File seeking with shared filepointer issues<br>
<strong>From:</strong> <a href="mailto:pascal.deveze_at_[hidden]?Subject=Re:%20[OMPI%20users]%20File%20seeking%20with%20shared%20filepointer%20issues"><em>pascal.deveze_at_[hidden]</em></a><br>
<strong>Date:</strong> 2011-06-27 09:20:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16771.php">Rodrigo Oliveira: "[OMPI users] Problems with Mpi Accept - ORTE_ERROR_LOG"</a>
<li><strong>Previous message:</strong> <a href="16769.php">Ning Li: "[OMPI users] OpenMPI with NAG compiler and gcc 4.6"</a>
<li><strong>In reply to:</strong> <a href="16762.php">Jeff Squyres: "Re: [OMPI users] File seeking with shared filepointer issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/07/16817.php">Rob Latham: "Re: [OMPI users] File seeking with shared filepointer issues"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/07/16817.php">Rob Latham: "Re: [OMPI users] File seeking with shared filepointer issues"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Christian,
<br>
<p>Suppose you have N processes calling the first MPI_File_get_position_shared
<br>
().
<br>
<p>Some of them are running faster and could execute the call to
<br>
MPI_File_seek_shared() before all the other have got their file position.
<br>
(Note that the &quot;collective&quot; primitive is not a synchronization. In that
<br>
case, all parameters are broadcast to the process 0 and checked by process
<br>
0. All
<br>
the other processes are not blocked).
<br>
<p>So the slow processes can get the file position  that has just been
<br>
modified by the faster.
<br>
<p>That is the reason why, in your program, It is necessary to synchronize all
<br>
processes just before the call to MPI_File_seek_shared().
<br>
<p>Pascal
<br>
<p>users-bounces_at_[hidden] a &#233;crit sur 25/06/2011 12:54:32 :
<br>
<p><span class="quotelev1">&gt; De : Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; A : Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date : 25/06/2011 12:55
</span><br>
<span class="quotelev1">&gt; Objet : Re: [OMPI users] File seeking with shared filepointer issues
</span><br>
<span class="quotelev1">&gt; Envoy&#233; par : users-bounces_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm not super-familiar with the IO portions of MPI, but I think that
</span><br>
<span class="quotelev1">&gt; you might be running afoul of the definition of &quot;collective.&quot;
</span><br>
<span class="quotelev1">&gt; &quot;Collective,&quot; in MPI terms, does *not* mean &quot;synchronize.&quot;  It just
</span><br>
<span class="quotelev1">&gt; means that all functions must invoke it, potentially with the same
</span><br>
<span class="quotelev1">&gt; (or similar) parameters.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hence, I think you're seeing cases where MPI processes are showing
</span><br>
<span class="quotelev1">&gt; correct values, but only because the updates have not completed in
</span><br>
<span class="quotelev1">&gt; the background.  Using a barrier is forcing those updates to
</span><br>
<span class="quotelev1">&gt; complete before you query for the file position.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ...although, as I type that out, that seems weird.  A barrier should
</span><br>
<span class="quotelev1">&gt; not (be guaranteed to) force the completion of collectives (file-
</span><br>
<span class="quotelev1">&gt; based or otherwise).  That could be a side-effect of linear message
</span><br>
<span class="quotelev1">&gt; passing behind the scenes, but that seems like a weird interface.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Rob -- can you comment on this, perchance?  Is this a bug in ROMIO,
</span><br>
<span class="quotelev1">&gt; or if not, how is one supposed to use this interface can get
</span><br>
<span class="quotelev1">&gt; consistent answers in all MPI processes?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 23, 2011, at 10:04 AM, Christian Anonymous wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'm having some issues with MPI_File_seek_shared. Consider the
</span><br>
<span class="quotelev1">&gt; following small test C++ program
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
<span class="quotelev2">&gt; &gt; MPI_File_open(MPI_COMM_WORLD,(char *)
</span><br>
<span class="quotelev1">&gt; PATH,MPI_MODE_RDONLY,MPI_INFO_NULL,&amp;fh);
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
<span class="quotelev2">&gt; &gt; cout &lt;&lt; &quot;Task &quot; &lt;&lt; ThisTask &lt;&lt; &quot; reports a filesize of &quot; &lt;&lt;
</span><br>
<span class="quotelev1">&gt; eof_filepos &lt;&lt; &quot;-&quot; &lt;&lt; cur_filepos &lt;&lt; &quot;=&quot; &lt;&lt; eof_filepos-cur_filepos &lt;&lt;
</span><br>
endl;
<br>
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
<span class="quotelev2">&gt; &gt; Note the comments before each MPI_Barrier. When the program is run
</span><br>
<span class="quotelev1">&gt; by mpirun -np N (N strictly greater than 1), task 0 reports the
</span><br>
<span class="quotelev1">&gt; correct filesize, while every other process reports either 0, minus
</span><br>
<span class="quotelev1">&gt; the filesize or the correct filesize. Uncommenting the MPI_Barrier
</span><br>
<span class="quotelev1">&gt; makes each process report the correct filesize. Is this working as
</span><br>
<span class="quotelev1">&gt; intended? Since MPI_File_seek_shared is a collective, blocking
</span><br>
<span class="quotelev1">&gt; function each process have to synchronise at the return point of the
</span><br>
<span class="quotelev1">&gt; function, but not when the function is called. It seems that the use
</span><br>
<span class="quotelev1">&gt; of MPI_File_seek_shared without an MPI_Barrier call first is very
</span><br>
<span class="quotelev1">&gt; dangerous, or am I missing something?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; Care2 makes it easy for everyone to live a healthy, green
</span><br>
<span class="quotelev1">&gt; lifestyle and impact the causes you care about most. Over 12
</span><br>
Millionmembers!
<br>
<span class="quotelev1">&gt; <a href="http://www.care2.com">http://www.care2.com</a> Feed a child by searching the web! Learn how
</span><br>
<span class="quotelev1">&gt;
</span><br>
<a href="http://www.care2.com/toolbar">http://www.care2.com/toolbar</a>_______________________________________________
<br>
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
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16771.php">Rodrigo Oliveira: "[OMPI users] Problems with Mpi Accept - ORTE_ERROR_LOG"</a>
<li><strong>Previous message:</strong> <a href="16769.php">Ning Li: "[OMPI users] OpenMPI with NAG compiler and gcc 4.6"</a>
<li><strong>In reply to:</strong> <a href="16762.php">Jeff Squyres: "Re: [OMPI users] File seeking with shared filepointer issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/07/16817.php">Rob Latham: "Re: [OMPI users] File seeking with shared filepointer issues"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/07/16817.php">Rob Latham: "Re: [OMPI users] File seeking with shared filepointer issues"</a>
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
