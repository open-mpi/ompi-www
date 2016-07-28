<?
$subject_val = "Re: [OMPI users] File seeking with shared filepointer issues";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jul  2 14:07:28 2011" -->
<!-- isoreceived="20110702180728" -->
<!-- sent="Sat, 2 Jul 2011 11:07:21 -0700" -->
<!-- isosent="20110702180721" -->
<!-- name="Christian Anonymous" -->
<!-- email="mpibot_at_[hidden]" -->
<!-- subject="Re: [OMPI users] File seeking with shared filepointer issues" -->
<!-- id="311B802517274A538E0D54C636C1CAC9_at_mail2world.com" -->
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
<strong>From:</strong> Christian Anonymous (<em>mpibot_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-02 14:07:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16796.php">Jeff Squyres (jsquyres): "Re: [OMPI users] The hostfile  could not be found"</a>
<li><strong>Previous message:</strong> <a href="16794.php">Rob Latham: "Re: [OMPI users] File seeking with shared filepointer issues"</a>
<li><strong>Maybe in reply to:</strong> <a href="../../2011/06/16744.php">Christian Anonymous: "[OMPI users] File seeking with shared filepointer issues"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ah, this clears things up a bit. I still feel that using shared
<br>
fileseeks is a dangerous practice however, so I will steer clear of them
<br>
for now. I did this small experiment on a Macbook Pro with Snow Leopard
<br>
10.6.7, so the file system is HFS+. I just did the file size example
<br>
since it was simple, I do not have any real interest in the filesize
<br>
read this way.
<br>
<p>Christian
<br>
<p>&lt;-----Original Message-----&gt; 
<br>
<span class="quotelev1">&gt;From: Rob Latham [robl_at_[hidden]]
</span><br>
<span class="quotelev1">&gt;Sent: 7/1/2011 11:13:29 PM
</span><br>
<span class="quotelev1">&gt;To: jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt;Cc: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;Subject: Re: [OMPI users] File seeking with shared filepointer issues
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Sat, Jun 25, 2011 at 06:54:32AM -0400, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Rob -- can you comment on this, perchance? Is this a bug in ROMIO, or
</span><br>
if not, how is one supposed 
<br>
<span class="quotelev1">&gt;to use this interface can get consistent answers in all MPI processes?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Maybe the problem here is that shared file pointers were intended for
</span><br>
<span class="quotelev1">&gt;things like reading from a work queue or writing to a log file.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Determining the file size or the position of the file pointer is a
</span><br>
<span class="quotelev1">&gt;little racy, since some other process can sneak in and change things
</span><br>
<span class="quotelev1">&gt;(getting the shared file pointer is independent but setting it is
</span><br>
<span class="quotelev1">&gt;collective)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;When writing a log file or reading from a work queue the exact value
</span><br>
<span class="quotelev1">&gt;of the shared file pointer is actually irrelevant. The program just
</span><br>
<span class="quotelev1">&gt;wants &quot;the next&quot; item, or &quot;the last&quot; item. 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;The more robust way to do this file size determination, if that's
</span><br>
<span class="quotelev1">&gt;really what you want, is to have rank
</span><br>
<span class="quotelev1">&gt;0 do the work and broadcast the result to everyone else. 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;==rob
</span><br>
<span class="quotelev1">&gt;
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
following small test C++ 
<br>
<span class="quotelev1">&gt;program
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
PATH,MPI_MODE_RDONLY,MPI_INFO_NULL,&amp;fh);
<br>
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
eof_filepos &lt;&lt; &quot;-&quot; 
<br>
<span class="quotelev1">&gt;&lt;&lt; cur_filepos &lt;&lt; &quot;=&quot; &lt;&lt; eof_filepos-cur_filepos &lt;&lt; endl;
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
by mpirun -np N (N strictly 
<br>
<span class="quotelev1">&gt;greater than 1), task 0 reports the correct filesize, while every other
</span><br>
process reports either 0, minus the 
<br>
<span class="quotelev1">&gt;filesize or the correct filesize. Uncommenting the MPI_Barrier makes
</span><br>
each process report the correct 
<br>
<span class="quotelev1">&gt;filesize. Is this working as intended? Since MPI_File_seek_shared is a
</span><br>
collective, blocking function each 
<br>
<span class="quotelev1">&gt;process have to synchronise at the return point of the function, but
</span><br>
not when the function is called. It 
<br>
<span class="quotelev1">&gt;seems that the use of MPI_File_seek_shared without an MPI_Barrier call
</span><br>
first is very dangerous, or am I 
<br>
<span class="quotelev1">&gt;missing something?
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Care2 makes it easy for everyone to live a healthy, green lifestyle
</span><br>
and impact the causes you care 
<br>
<span class="quotelev1">&gt;about most. Over 12 Million members! <a href="http://www.care2.com">http://www.care2.com</a> Feed a child
</span><br>
by searching the web! Learn 
<br>
<span class="quotelev1">&gt;how
</span><br>
<a href="http://www.care2.com/toolbar">http://www.care2.com/toolbar</a>____________________________________________
<br>
___
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;-- 
</span><br>
<span class="quotelev1">&gt;Rob Latham
</span><br>
<span class="quotelev1">&gt;Mathematics and Computer Science Division
</span><br>
<span class="quotelev1">&gt;Argonne National Lab, IL USA
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="../../att-16795/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16796.php">Jeff Squyres (jsquyres): "Re: [OMPI users] The hostfile  could not be found"</a>
<li><strong>Previous message:</strong> <a href="16794.php">Rob Latham: "Re: [OMPI users] File seeking with shared filepointer issues"</a>
<li><strong>Maybe in reply to:</strong> <a href="../../2011/06/16744.php">Christian Anonymous: "[OMPI users] File seeking with shared filepointer issues"</a>
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
