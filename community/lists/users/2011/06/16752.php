<?
$subject_val = "[OMPI users] File seeking with shared filepointer issues";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 23 10:04:28 2011" -->
<!-- isoreceived="20110623140428" -->
<!-- sent="Thu, 23 Jun 2011 07:04:22 -0700" -->
<!-- isosent="20110623140422" -->
<!-- name="Christian Anonymous" -->
<!-- email="mpibot_at_[hidden]" -->
<!-- subject="[OMPI users] File seeking with shared filepointer issues" -->
<!-- id="BBD81CC6CCFB4D3DA16B5D76CAC04B9C_at_mail2world.com" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] File seeking with shared filepointer issues<br>
<strong>From:</strong> Christian Anonymous (<em>mpibot_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-23 10:04:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16753.php">Mathieu Gontier: "Re: [OMPI users] [ompi-1.4.2] Infiniband issue on smoky @ ornl"</a>
<li><strong>Previous message:</strong> <a href="16751.php">Ralph Castain: "Re: [OMPI users] [ompi-1.4.2] Infiniband issue on smoky @ ornl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16762.php">Jeff Squyres: "Re: [OMPI users] File seeking with shared filepointer issues"</a>
<li><strong>Reply:</strong> <a href="16762.php">Jeff Squyres: "Re: [OMPI users] File seeking with shared filepointer issues"</a>
<li><strong>Maybe reply:</strong> <a href="16780.php">Christian Anonymous: "Re: [OMPI users] File seeking with shared filepointer issues"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/07/16803.php">Christian Anonymous: "Re: [OMPI users] File seeking with shared filepointer issues"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm having some issues with MPI_File_seek_shared. Consider the following
<br>
small test C++ program
<br>
<p><p>#include &lt;iostream&gt;
<br>
#include &lt;mpi.h&gt;
<br>
<p><p>#define PATH &quot;simdata.bin&quot;
<br>
<p>using namespace std;
<br>
<p>int ThisTask;
<br>
<p>int main(int argc, char *argv[])
<br>
{
<br>
MPI_Init(&amp;argc,&amp;argv); /* Initialize MPI */
<br>
MPI_Comm_rank(MPI_COMM_WORLD,&amp;ThisTask);
<br>
<p>MPI_File fh;
<br>
int success;
<br>
MPI_File_open(MPI_COMM_WORLD,(char *)
<br>
PATH,MPI_MODE_RDONLY,MPI_INFO_NULL,&amp;fh);
<br>
<p>if(success != MPI_SUCCESS){ //Successfull open?
<br>
char err[256];
<br>
int err_length, err_class;
<br>
<p>MPI_Error_class(success,&amp;err_class);
<br>
MPI_Error_string(err_class,err,&amp;err_length);
<br>
cout &lt;&lt; &quot;Task &quot; &lt;&lt; ThisTask &lt;&lt; &quot;: &quot; &lt;&lt; err &lt;&lt; endl;
<br>
MPI_Error_string(success,err,&amp;err_length);
<br>
cout &lt;&lt; &quot;Task &quot; &lt;&lt; ThisTask &lt;&lt; &quot;: &quot; &lt;&lt; err &lt;&lt; endl;
<br>
<p>MPI_Abort(MPI_COMM_WORLD,success);
<br>
}
<br>
<p><p>/* START SEEK TEST */
<br>
MPI_Offset cur_filepos, eof_filepos;
<br>
<p>MPI_File_get_position_shared(fh,&amp;cur_filepos);
<br>
<p>//MPI_Barrier(MPI_COMM_WORLD);
<br>
MPI_File_seek_shared(fh,0,MPI_SEEK_END); /* Seek is collective */
<br>
<p>MPI_File_get_position_shared(fh,&amp;eof_filepos);
<br>
<p>//MPI_Barrier(MPI_COMM_WORLD);
<br>
MPI_File_seek_shared(fh,0,MPI_SEEK_SET);
<br>
<p>cout &lt;&lt; &quot;Task &quot; &lt;&lt; ThisTask &lt;&lt; &quot; reports a filesize of &quot; &lt;&lt; eof_filepos
<br>
&lt;&lt; &quot;-&quot; &lt;&lt; cur_filepos &lt;&lt; &quot;=&quot; &lt;&lt; eof_filepos-cur_filepos &lt;&lt; endl;
<br>
/* END SEEK TEST */
<br>
<p>/* Finalizing */ 
<br>
MPI_File_close(&amp;fh);
<br>
MPI_Finalize();
<br>
return 0;
<br>
}
<br>
<p>Note the comments before each MPI_Barrier. When the program is run by
<br>
mpirun -np N (N strictly greater than 1), task 0 reports the correct
<br>
filesize, while every other process reports either 0, minus the filesize
<br>
or the correct filesize. Uncommenting the MPI_Barrier makes each process
<br>
report the correct filesize. Is this working as intended? Since
<br>
MPI_File_seek_shared is a collective, blocking function each process
<br>
have to synchronise at the return point of the function, but not when
<br>
the function is called. It seems that the use of MPI_File_seek_shared
<br>
without an MPI_Barrier call first is very dangerous, or am I missing
<br>
something? 
<br>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16752/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16753.php">Mathieu Gontier: "Re: [OMPI users] [ompi-1.4.2] Infiniband issue on smoky @ ornl"</a>
<li><strong>Previous message:</strong> <a href="16751.php">Ralph Castain: "Re: [OMPI users] [ompi-1.4.2] Infiniband issue on smoky @ ornl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16762.php">Jeff Squyres: "Re: [OMPI users] File seeking with shared filepointer issues"</a>
<li><strong>Reply:</strong> <a href="16762.php">Jeff Squyres: "Re: [OMPI users] File seeking with shared filepointer issues"</a>
<li><strong>Maybe reply:</strong> <a href="16780.php">Christian Anonymous: "Re: [OMPI users] File seeking with shared filepointer issues"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/07/16803.php">Christian Anonymous: "Re: [OMPI users] File seeking with shared filepointer issues"</a>
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
