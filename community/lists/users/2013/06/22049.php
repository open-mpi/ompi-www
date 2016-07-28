<?
$subject_val = "Re: [OMPI users] Set number of processes in another way than -np X";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun  6 12:51:59 2013" -->
<!-- isoreceived="20130606165159" -->
<!-- sent="Thu, 6 Jun 2013 18:51:51 +0200" -->
<!-- isosent="20130606165151" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Set number of processes in another way than -np X" -->
<!-- id="D5B94D08-C4DE-4873-99DB-0FE83886CF50_at_icl.utk.edu" -->
<!-- charset="windows-1252" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-06 12:51:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22050.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Set number of processes in another way than -np X"</a>
<li><strong>Previous message:</strong> <a href="22048.php">Ralph Castain: "Re: [OMPI users] Oversubcription for mimd/mpmd mpiruns"</a>
<li><strong>In reply to:</strong> <a href="22047.php">Ralph Castain: "Re: [OMPI users] Set number of processes in another way than -np X"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22050.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Set number of processes in another way than -np X"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What wrong with only allowing the rank 0 to execute the code before and after the funcCompScalapack function as indicated in the example below:
<br>
<p>int main()
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;//Initialize MPI
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(NULL,NULL);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;myrank);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;if( 0 == rank ) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//some work that must be done by only one node
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#133;..
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;//function that runs internally some scalapack computations
<br>
&nbsp;&nbsp;&nbsp;&nbsp;funcCompScalapack();
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;if( 0 == my rank ) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//other work must be done by the original node
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#133;.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;//finalize MPI
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
<p>void funcCompScalapack()
<br>
{
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
&nbsp;&nbsp;&nbsp;&nbsp;return;
<br>
}
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p>On Jun 6, 2013, at 18:43 , Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I honestly don't know - you'd have to look at the PVM docs. You also might look at OpenMP and try doing it with multiple threads instead of processes, though that limits you to running on a single node.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jun 6, 2013, at 9:37 AM, Jos&#233; Luis Garc&#237;a Pallero &lt;jgpallero_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 2013/6/6 Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 6, 2013, at 8:58 AM, Jos&#233; Luis Garc&#237;a Pallero &lt;jgpallero_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2013/6/6 Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; should work!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank you for your answer.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So I understand that MPI_Comm_spawn() is my function. But I see in the documentation that the first argument is char* command, and command is the name of the program to spawn, but I not want to execute an external program. Only a piece of code in the same program. How can I deal with that.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; You'll have to move that code into a separate program, then pass any data it requires using MPI_Send/receive or a collective operation
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Mmm... bad news. It is impossible, then in MPI. I need all the code in the same executable.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I know this is offtopic in this list, but, can I perform the calculations as I want using PVM? (ScaLAPACK et al. can also run with PVM)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Cheers
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The second argument is char* argv[]. Admits MPI_Comm_spawn() the NULL value for argv[], as MPI_Init()?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I know also that I can do my program by putting the code before and after the call funcCompScalapack() into an if() checking if the node is the root and then these pieces of code will be executed only by the root. But I want to maintain all the program free of MPI code except the funcCompScalapack() function
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cheers
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jun 6, 2013, at 8:24 AM, Jos&#233; Luis Garc&#237;a Pallero &lt;jgpallero_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2013/6/6 Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Afraid not. You could start a single process, and then have that process call MPI_Comm_spawn to launch the rest of them
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Mmmm... sounds good
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'm writing an example program using ScaLAPACK. I have written the ScaLAPACK code in an independent function that must be called after some work in an individual node (the root one). So I need the first part of the program be executed by one process. My example looks like:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; int main()
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     //some work that must be done by only one node
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     .....
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     //function that runs internally some scalapack computations
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     funcCompScalapack();
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     //other work must be done by the original node
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     ....
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     return 0;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; void funcCompScalapack()
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     //Initialize MPI
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     MPI_Init(NULL,NULL);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     //here I think I should write some code in order to inform that the work must be done by a number X or processors
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     //maybe using MPI_Comm_spawn?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     ....
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     //some BLACS and ScaLAPACK computations
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     ....
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     //finalize MPI
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     MPI_Finalize();
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     return;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; When I execute this program as mpirun -np X myprogram, the pieces of code before and after the call to function funcCompScalapack() are executed by X nodes, but these orders must be executed only by one. So my idea is to execute the binary as ./myprogram (the same I think as mpirun -np 1 myprogram) and internally set the number of processes in funcCompScalapack() after the MPI_Init() call.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Is my idea possible?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Jun 6, 2013, at 7:54 AM, Jos&#233; Luis Garc&#237;a Pallero &lt;jgpallero_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hello:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I'm newbie in the use of MPI, so probably I ask some stupid question (or previously asked, but in this case I have searched in the archive and I haven't found anything):
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Exists any other way than -np X in order to pass the number of processes to start for an MPI program? I mean a function of the style MPI_Set_Number_Processes() or similar
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *****************************************
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Jos&#233; Luis Garc&#237;a Pallero
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; jgpallero_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (o&lt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; / / \
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; V_/_
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Use Debian GNU/Linux and enjoy!
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *****************************************
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *****************************************
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Jos&#233; Luis Garc&#237;a Pallero
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; jgpallero_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (o&lt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; / / \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; V_/_
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Use Debian GNU/Linux and enjoy!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *****************************************
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
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
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *****************************************
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jos&#233; Luis Garc&#237;a Pallero
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jgpallero_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (o&lt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; / / \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; V_/_
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Use Debian GNU/Linux and enjoy!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *****************************************
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
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; *****************************************
</span><br>
<span class="quotelev2">&gt;&gt; Jos&#233; Luis Garc&#237;a Pallero
</span><br>
<span class="quotelev2">&gt;&gt; jgpallero_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; (o&lt;
</span><br>
<span class="quotelev2">&gt;&gt; / / \
</span><br>
<span class="quotelev2">&gt;&gt; V_/_
</span><br>
<span class="quotelev2">&gt;&gt; Use Debian GNU/Linux and enjoy!
</span><br>
<span class="quotelev2">&gt;&gt; *****************************************
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22049/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22050.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Set number of processes in another way than -np X"</a>
<li><strong>Previous message:</strong> <a href="22048.php">Ralph Castain: "Re: [OMPI users] Oversubcription for mimd/mpmd mpiruns"</a>
<li><strong>In reply to:</strong> <a href="22047.php">Ralph Castain: "Re: [OMPI users] Set number of processes in another way than -np X"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22050.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Set number of processes in another way than -np X"</a>
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
