<?
$subject_val = "Re: [OMPI users] Set number of processes in another way than -np X";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun  6 12:59:51 2013" -->
<!-- isoreceived="20130606165951" -->
<!-- sent="Thu, 6 Jun 2013 16:59:46 +0000" -->
<!-- isosent="20130606165946" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Set number of processes in another way than -np X" -->
<!-- id="1AE9AE1A-0632-4BDF-BA7F-13B8DBBDD5E4_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="BCAB827F-AD43-4CB2-869E-715380ABEF41_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Set number of processes in another way than -np X<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-06 12:59:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22051.php">Jingcha Joba: "[OMPI users] OMPI Coll Framework and RDMA"</a>
<li><strong>Previous message:</strong> <a href="22049.php">George Bosilca: "Re: [OMPI users] Set number of processes in another way than -np X"</a>
<li><strong>In reply to:</strong> <a href="22047.php">Ralph Castain: "Re: [OMPI users] Set number of processes in another way than -np X"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22052.php">Edscott Wilson: "Re: [OMPI users] Set number of processes in another way than -np X"</a>
<li><strong>Reply:</strong> <a href="22052.php">Edscott Wilson: "Re: [OMPI users] Set number of processes in another way than -np X"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The traditional way to do this stuff in MPI is
<br>
<p>If rank==0 do_master_stuff
<br>
Else do_slave_stuff
<br>
<p>Sounds like that pattern should apply to your app.
<br>
<p>Pvm has been dead for years.
<br>
<p>Sent from my phone. No type good.
<br>
<p>On Jun 6, 2013, at 9:43 AM, &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
<br>
<p>I honestly don't know - you'd have to look at the PVM docs. You also might look at OpenMP and try doing it with multiple threads instead of processes, though that limits you to running on a single node.
<br>
<p>On Jun 6, 2013, at 9:37 AM, Jos&#233; Luis Garc&#237;a Pallero &lt;jgpallero_at_[hidden]&lt;mailto:jgpallero_at_[hidden]&gt;&gt; wrote:
<br>
<p>2013/6/6 Ralph Castain &lt;rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&gt;
<br>
<p>On Jun 6, 2013, at 8:58 AM, Jos&#233; Luis Garc&#237;a Pallero &lt;jgpallero_at_[hidden]&lt;mailto:jgpallero_at_[hidden]&gt;&gt; wrote:
<br>
<p>2013/6/6 Ralph Castain &lt;rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&gt;
<br>
should work!
<br>
<p>Thank you for your answer.
<br>
<p>So I understand that MPI_Comm_spawn() is my function. But I see in the documentation that the first argument is char* command, and command is the name of the program to spawn, but I not want to execute an external program. Only a piece of code in the same program. How can I deal with that.
<br>
<p>You'll have to move that code into a separate program, then pass any data it requires using MPI_Send/receive or a collective operation
<br>
<p>Mmm... bad news. It is impossible, then in MPI. I need all the code in the same executable.
<br>
<p>I know this is offtopic in this list, but, can I perform the calculations as I want using PVM? (ScaLAPACK et al. can also run with PVM)
<br>
<p>Cheers
<br>
<p><p>The second argument is char* argv[]. Admits MPI_Comm_spawn() the NULL value for argv[], as MPI_Init()?
<br>
<p>I know also that I can do my program by putting the code before and after the call funcCompScalapack() into an if() checking if the node is the root and then these pieces of code will be executed only by the root. But I want to maintain all the program free of MPI code except the funcCompScalapack() function
<br>
<p>Cheers
<br>
<p>On Jun 6, 2013, at 8:24 AM, Jos&#233; Luis Garc&#237;a Pallero &lt;jgpallero_at_[hidden]&lt;mailto:jgpallero_at_[hidden]&gt;&gt; wrote:
<br>
<p>2013/6/6 Ralph Castain &lt;rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&gt;
<br>
Afraid not. You could start a single process, and then have that process call MPI_Comm_spawn to launch the rest of them
<br>
<p>Mmmm... sounds good
<br>
<p>I'm writing an example program using ScaLAPACK. I have written the ScaLAPACK code in an independent function that must be called after some work in an individual node (the root one). So I need the first part of the program be executed by one process. My example looks like:
<br>
<p>int main()
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;//some work that must be done by only one node
<br>
&nbsp;&nbsp;&nbsp;&nbsp;.....
<br>
&nbsp;&nbsp;&nbsp;&nbsp;//function that runs internally some scalapack computations
<br>
&nbsp;&nbsp;&nbsp;&nbsp;funcCompScalapack();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;//other work must be done by the original node
<br>
&nbsp;&nbsp;&nbsp;&nbsp;....
<br>
&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
<p>void funcCompScalapack()
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;//Initialize MPI
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(NULL,NULL);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;//here I think I should write some code in order to inform that the work must be done by a number X or processors
<br>
&nbsp;&nbsp;&nbsp;&nbsp;//maybe using MPI_Comm_spawn?
<br>
&nbsp;&nbsp;&nbsp;&nbsp;....
<br>
&nbsp;&nbsp;&nbsp;&nbsp;//some BLACS and ScaLAPACK computations
<br>
&nbsp;&nbsp;&nbsp;&nbsp;....
<br>
&nbsp;&nbsp;&nbsp;&nbsp;//finalize MPI
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;return;
<br>
}
<br>
<p>When I execute this program as mpirun -np X myprogram, the pieces of code before and after the call to function funcCompScalapack() are executed by X nodes, but these orders must be executed only by one. So my idea is to execute the binary as ./myprogram (the same I think as mpirun -np 1 myprogram) and internally set the number of processes in funcCompScalapack() after the MPI_Init() call.
<br>
<p>Is my idea possible?
<br>
<p>Thanks
<br>
<p><p>On Jun 6, 2013, at 7:54 AM, Jos&#233; Luis Garc&#237;a Pallero &lt;jgpallero_at_[hidden]&lt;mailto:jgpallero_at_[hidden]&gt;&gt; wrote:
<br>
<p>Hello:
<br>
<p>I'm newbie in the use of MPI, so probably I ask some stupid question (or previously asked, but in this case I have searched in the archive and I haven't found anything):
<br>
<p>Exists any other way than -np X in order to pass the number of processes to start for an MPI program? I mean a function of the style MPI_Set_Number_Processes() or similar
<br>
<p>Thanks
<br>
<p><pre>
--
*****************************************
Jos&#233; Luis Garc&#237;a Pallero
jgpallero_at_[hidden]&lt;mailto:jgpallero_at_[hidden]&gt;
(o&lt;
/ / \
V_/_
Use Debian GNU/Linux and enjoy!
*****************************************
_______________________________________________
users mailing list
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
_______________________________________________
users mailing list
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
--
*****************************************
Jos&#233; Luis Garc&#237;a Pallero
jgpallero_at_[hidden]&lt;mailto:jgpallero_at_[hidden]&gt;
(o&lt;
/ / \
V_/_
Use Debian GNU/Linux and enjoy!
*****************************************
_______________________________________________
users mailing list
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
_______________________________________________
users mailing list
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
--
*****************************************
Jos&#233; Luis Garc&#237;a Pallero
jgpallero_at_[hidden]&lt;mailto:jgpallero_at_[hidden]&gt;
(o&lt;
/ / \
V_/_
Use Debian GNU/Linux and enjoy!
*****************************************
_______________________________________________
users mailing list
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
_______________________________________________
users mailing list
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
--
*****************************************
Jos&#233; Luis Garc&#237;a Pallero
jgpallero_at_[hidden]&lt;mailto:jgpallero_at_[hidden]&gt;
(o&lt;
/ / \
V_/_
Use Debian GNU/Linux and enjoy!
*****************************************
_______________________________________________
users mailing list
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
_______________________________________________
users mailing list
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22050/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22051.php">Jingcha Joba: "[OMPI users] OMPI Coll Framework and RDMA"</a>
<li><strong>Previous message:</strong> <a href="22049.php">George Bosilca: "Re: [OMPI users] Set number of processes in another way than -np X"</a>
<li><strong>In reply to:</strong> <a href="22047.php">Ralph Castain: "Re: [OMPI users] Set number of processes in another way than -np X"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22052.php">Edscott Wilson: "Re: [OMPI users] Set number of processes in another way than -np X"</a>
<li><strong>Reply:</strong> <a href="22052.php">Edscott Wilson: "Re: [OMPI users] Set number of processes in another way than -np X"</a>
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
