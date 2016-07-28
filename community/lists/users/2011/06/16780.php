<?
$subject_val = "Re: [OMPI users] File seeking with shared filepointer issues";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 29 02:58:03 2011" -->
<!-- isoreceived="20110629065803" -->
<!-- sent="Tue, 28 Jun 2011 23:57:56 -0700" -->
<!-- isosent="20110629065756" -->
<!-- name="Christian Anonymous" -->
<!-- email="mpibot_at_[hidden]" -->
<!-- subject="Re: [OMPI users] File seeking with shared filepointer issues" -->
<!-- id="71304EC99DAE4AE9AD1916C2846BC0C4_at_mail2world.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="[OMPI users] File seeking with shared filepointer issues" -->
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
<strong>From:</strong> Christian Anonymous (<em>mpibot_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-29 02:57:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16781.php">rohan nigam: "[OMPI users] Problem in static linking and usage of openmpi with icc (and gcc)"</a>
<li><strong>Previous message:</strong> <a href="16779.php">Ralph Castain: "Re: [OMPI users] Problems with Mpi Accept - ORTE_ERROR_LOG"</a>
<li><strong>Maybe in reply to:</strong> <a href="16752.php">Christian Anonymous: "[OMPI users] File seeking with shared filepointer issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/07/16803.php">Christian Anonymous: "Re: [OMPI users] File seeking with shared filepointer issues"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you for your answer.
<br>
<p>Since a collective operation does not mean synchronization, I guess this
<br>
also means that I should put an MPI_Barrier after the seek in order to
<br>
ensure that no process changes the file pointer while an other process
<br>
accesses it. To be honest this interface to MPI_File_seek_shared seems a
<br>
bit clumsy and very error-prone. It would make more sense to absorb
<br>
these 2 MPI_Barriers into the function itself.
<br>
<p>Christian
<br>
<p>&lt;-----Original Message-----&gt; 
<br>
<span class="quotelev1">&gt;From: pascal.deveze_at_[hidden] [pascal.deveze_at_[hidden]]
</span><br>
<span class="quotelev1">&gt;Sent: 6/27/2011 3:21:36 PM
</span><br>
<span class="quotelev1">&gt;To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;Subject: Re: [OMPI users] File seeking with shared filepointer issues
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Christian,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Suppose you have N processes calling the first
</span><br>
MPI_File_get_position_shared
<br>
<span class="quotelev1">&gt;().
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Some of them are running faster and could execute the call to
</span><br>
<span class="quotelev1">&gt;MPI_File_seek_shared() before all the other have got their file
</span><br>
position.
<br>
<span class="quotelev1">&gt;(Note that the &quot;collective&quot; primitive is not a synchronization. In that
</span><br>
<span class="quotelev1">&gt;case, all parameters are broadcast to the process 0 and checked by
</span><br>
process
<br>
<span class="quotelev1">&gt;0. All
</span><br>
<span class="quotelev1">&gt;the other processes are not blocked).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;So the slow processes can get the file position that has just been
</span><br>
<span class="quotelev1">&gt;modified by the faster.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;That is the reason why, in your program, It is necessary to synchronize
</span><br>
all
<br>
<span class="quotelev1">&gt;processes just before the call to MPI_File_seek_shared().
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Pascal
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;users-bounces_at_[hidden] a &#233;crit sur 25/06/2011 12:54:32 :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; De : Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; A : Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Date : 25/06/2011 12:55
</span><br>
<span class="quotelev2">&gt;&gt; Objet : Re: [OMPI users] File seeking with shared filepointer issues
</span><br>
<span class="quotelev2">&gt;&gt; Envoy&#233; par : users-bounces_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm not super-familiar with the IO portions of MPI, but I think that
</span><br>
<span class="quotelev2">&gt;&gt; you might be running afoul of the definition of &quot;collective.&quot;
</span><br>
<span class="quotelev2">&gt;&gt; &quot;Collective,&quot; in MPI terms, does *not* mean &quot;synchronize.&quot; It just
</span><br>
<span class="quotelev2">&gt;&gt; means that all functions must invoke it, potentially with the same
</span><br>
<span class="quotelev2">&gt;&gt; (or similar) parameters.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hence, I think you're seeing cases where MPI processes are showing
</span><br>
<span class="quotelev2">&gt;&gt; correct values, but only because the updates have not completed in
</span><br>
<span class="quotelev2">&gt;&gt; the background. Using a barrier is forcing those updates to
</span><br>
<span class="quotelev2">&gt;&gt; complete before you query for the file position.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ...although, as I type that out, that seems weird. A barrier should
</span><br>
<span class="quotelev2">&gt;&gt; not (be guaranteed to) force the completion of collectives (file-
</span><br>
<span class="quotelev2">&gt;&gt; based or otherwise). That could be a side-effect of linear message
</span><br>
<span class="quotelev2">&gt;&gt; passing behind the scenes, but that seems like a weird interface.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Rob -- can you comment on this, perchance? Is this a bug in ROMIO,
</span><br>
<span class="quotelev2">&gt;&gt; or if not, how is one supposed to use this interface can get
</span><br>
<span class="quotelev2">&gt;&gt; consistent answers in all MPI processes?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 23, 2011, at 10:04 AM, Christian Anonymous wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I'm having some issues with MPI_File_seek_shared. Consider the
</span><br>
<span class="quotelev2">&gt;&gt; following small test C++ program
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; #include &lt;iostream&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; #define PATH &quot;simdata.bin&quot;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; using namespace std;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; int ThisTask;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; int main(int argc, char *argv[])
</span><br>
<span class="quotelev3">&gt;&gt; &gt; {
</span><br>
<span class="quotelev3">&gt;&gt; &gt; MPI_Init(&amp;argc,&amp;argv); /* Initialize MPI */
</span><br>
<span class="quotelev3">&gt;&gt; &gt; MPI_Comm_rank(MPI_COMM_WORLD,&amp;ThisTask);
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; MPI_File fh;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; int success;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; MPI_File_open(MPI_COMM_WORLD,(char *)
</span><br>
<span class="quotelev2">&gt;&gt; PATH,MPI_MODE_RDONLY,MPI_INFO_NULL,&amp;fh);
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; if(success != MPI_SUCCESS){ //Successfull open?
</span><br>
<span class="quotelev3">&gt;&gt; &gt; char err[256];
</span><br>
<span class="quotelev3">&gt;&gt; &gt; int err_length, err_class;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; MPI_Error_class(success,&amp;err_class);
</span><br>
<span class="quotelev3">&gt;&gt; &gt; MPI_Error_string(err_class,err,&amp;err_length);
</span><br>
<span class="quotelev3">&gt;&gt; &gt; cout &lt;&lt; &quot;Task &quot; &lt;&lt; ThisTask &lt;&lt; &quot;: &quot; &lt;&lt; err &lt;&lt; endl;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; MPI_Error_string(success,err,&amp;err_length);
</span><br>
<span class="quotelev3">&gt;&gt; &gt; cout &lt;&lt; &quot;Task &quot; &lt;&lt; ThisTask &lt;&lt; &quot;: &quot; &lt;&lt; err &lt;&lt; endl;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; MPI_Abort(MPI_COMM_WORLD,success);
</span><br>
<span class="quotelev3">&gt;&gt; &gt; }
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; /* START SEEK TEST */
</span><br>
<span class="quotelev3">&gt;&gt; &gt; MPI_Offset cur_filepos, eof_filepos;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; MPI_File_get_position_shared(fh,&amp;cur_filepos);
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; //MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev3">&gt;&gt; &gt; MPI_File_seek_shared(fh,0,MPI_SEEK_END); /* Seek is collective */
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; MPI_File_get_position_shared(fh,&amp;eof_filepos);
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; //MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev3">&gt;&gt; &gt; MPI_File_seek_shared(fh,0,MPI_SEEK_SET);
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; cout &lt;&lt; &quot;Task &quot; &lt;&lt; ThisTask &lt;&lt; &quot; reports a filesize of &quot; &lt;&lt;
</span><br>
<span class="quotelev2">&gt;&gt; eof_filepos &lt;&lt; &quot;-&quot; &lt;&lt; cur_filepos &lt;&lt; &quot;=&quot; &lt;&lt; eof_filepos-cur_filepos
</span><br>
&lt;&lt;
<br>
<span class="quotelev1">&gt;endl;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; /* END SEEK TEST */
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; /* Finalizing */
</span><br>
<span class="quotelev3">&gt;&gt; &gt; MPI_File_close(&amp;fh);
</span><br>
<span class="quotelev3">&gt;&gt; &gt; MPI_Finalize();
</span><br>
<span class="quotelev3">&gt;&gt; &gt; return 0;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; }
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Note the comments before each MPI_Barrier. When the program is run
</span><br>
<span class="quotelev2">&gt;&gt; by mpirun -np N (N strictly greater than 1), task 0 reports the
</span><br>
<span class="quotelev2">&gt;&gt; correct filesize, while every other process reports either 0, minus
</span><br>
<span class="quotelev2">&gt;&gt; the filesize or the correct filesize. Uncommenting the MPI_Barrier
</span><br>
<span class="quotelev2">&gt;&gt; makes each process report the correct filesize. Is this working as
</span><br>
<span class="quotelev2">&gt;&gt; intended? Since MPI_File_seek_shared is a collective, blocking
</span><br>
<span class="quotelev2">&gt;&gt; function each process have to synchronise at the return point of the
</span><br>
<span class="quotelev2">&gt;&gt; function, but not when the function is called. It seems that the use
</span><br>
<span class="quotelev2">&gt;&gt; of MPI_File_seek_shared without an MPI_Barrier call first is very
</span><br>
<span class="quotelev2">&gt;&gt; dangerous, or am I missing something?
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Care2 makes it easy for everyone to live a healthy, green
</span><br>
<span class="quotelev2">&gt;&gt; lifestyle and impact the causes you care about most. Over 12
</span><br>
<span class="quotelev1">&gt;Millionmembers!
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.care2.com">http://www.care2.com</a> Feed a child by searching the web! Learn how
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;<a href="http://www.care2.com/toolbar">http://www.care2.com/toolbar</a>___________________________________________
</span><br>
____
<br>
<span class="quotelev3">&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;users mailing list
</span><br>
<span class="quotelev1">&gt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p>&lt;P&gt;&lt;p&gt;&lt;font face=&quot;Arial, Helvetica, sans-serif&quot; size=&quot;2&quot; style=&quot;font-size:13.5px&quot;&gt;_______________________________________________________________&lt;BR&gt;Care2 makes it easy for everyone to live a healthy, green lifestyle
<br>
and impact the causes you care about most. Over 12 Million members!
<br>
<a href="http://www.care2.com">http://www.care2.com</a>
<br>
<p>Feed a child by searching the web! Learn how <a href="http://www.care2.com/toolbar</font">http://www.care2.com/toolbar</font</a>&gt;
<br>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16780/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16781.php">rohan nigam: "[OMPI users] Problem in static linking and usage of openmpi with icc (and gcc)"</a>
<li><strong>Previous message:</strong> <a href="16779.php">Ralph Castain: "Re: [OMPI users] Problems with Mpi Accept - ORTE_ERROR_LOG"</a>
<li><strong>Maybe in reply to:</strong> <a href="16752.php">Christian Anonymous: "[OMPI users] File seeking with shared filepointer issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/07/16803.php">Christian Anonymous: "Re: [OMPI users] File seeking with shared filepointer issues"</a>
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
