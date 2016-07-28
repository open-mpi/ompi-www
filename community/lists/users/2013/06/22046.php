<?
$subject_val = "Re: [OMPI users] Set number of processes in another way than -np X";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun  6 12:38:03 2013" -->
<!-- isoreceived="20130606163803" -->
<!-- sent="Thu, 6 Jun 2013 18:37:59 +0200" -->
<!-- isosent="20130606163759" -->
<!-- name="Jos&#233; Luis Garc&#237;a Pallero" -->
<!-- email="jgpallero_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Set number of processes in another way than -np X" -->
<!-- id="CAFemY3ZFUdC7s1bOWUEBsxP6f-V3N9WaZ2Re8194PTX_8g_NYA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="DDF2A1F4-2398-4BCF-8F12-4508D53576E6_at_open-mpi.org" -->
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
<strong>From:</strong> Jos&#233; Luis Garc&#237;a Pallero (<em>jgpallero_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-06 12:37:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22047.php">Ralph Castain: "Re: [OMPI users] Set number of processes in another way than -np X"</a>
<li><strong>Previous message:</strong> <a href="22045.php">Nima Aghajari: "Re: [OMPI users] Oversubcription for mimd/mpmd mpiruns"</a>
<li><strong>In reply to:</strong> <a href="22044.php">Ralph Castain: "Re: [OMPI users] Set number of processes in another way than -np X"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22047.php">Ralph Castain: "Re: [OMPI users] Set number of processes in another way than -np X"</a>
<li><strong>Reply:</strong> <a href="22047.php">Ralph Castain: "Re: [OMPI users] Set number of processes in another way than -np X"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
2013/6/6 Ralph Castain &lt;rhc_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 6, 2013, at 8:58 AM, Jos&#233; Luis Garc&#237;a Pallero &lt;jgpallero_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2013/6/6 Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; should work!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you for your answer.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So I understand that MPI_Comm_spawn() is my function. But I see in the
</span><br>
<span class="quotelev1">&gt; documentation that the first argument is char* command, and command is the
</span><br>
<span class="quotelev1">&gt; name of the program to spawn, but I not want to execute an external
</span><br>
<span class="quotelev1">&gt; program. Only a piece of code in the same program. How can I deal with
</span><br>
<span class="quotelev1">&gt; that.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You'll have to move that code into a separate program, then pass any data
</span><br>
<span class="quotelev1">&gt; it requires using MPI_Send/receive or a collective operation
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Mmm... bad news. It is impossible, then in MPI. I need all the code in the
<br>
same executable.
<br>
<p>I know this is offtopic in this list, but, can I perform the calculations
<br>
as I want using PVM? (ScaLAPACK et al. can also run with PVM)
<br>
<p>Cheers
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The second argument is char* argv[]. Admits MPI_Comm_spawn() the NULL
</span><br>
<span class="quotelev1">&gt; value for argv[], as MPI_Init()?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I know also that I can do my program by putting the code before and after
</span><br>
<span class="quotelev1">&gt; the call funcCompScalapack() into an if() checking if the node is the root
</span><br>
<span class="quotelev1">&gt; and then these pieces of code will be executed only by the root. But I want
</span><br>
<span class="quotelev1">&gt; to maintain all the program free of MPI code except the funcCompScalapack()
</span><br>
<span class="quotelev1">&gt; function
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 6, 2013, at 8:24 AM, Jos&#233; Luis Garc&#237;a Pallero &lt;jgpallero_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2013/6/6 Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Afraid not. You could start a single process, and then have that process
</span><br>
<span class="quotelev3">&gt;&gt;&gt; call MPI_Comm_spawn to launch the rest of them
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Mmmm... sounds good
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm writing an example program using ScaLAPACK. I have written the
</span><br>
<span class="quotelev2">&gt;&gt; ScaLAPACK code in an independent function that must be called after some
</span><br>
<span class="quotelev2">&gt;&gt; work in an individual node (the root one). So I need the first part of the
</span><br>
<span class="quotelev2">&gt;&gt; program be executed by one process. My example looks like:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; int main()
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;     //some work that must be done by only one node
</span><br>
<span class="quotelev2">&gt;&gt;     .....
</span><br>
<span class="quotelev2">&gt;&gt;     //function that runs internally some scalapack computations
</span><br>
<span class="quotelev2">&gt;&gt;     funcCompScalapack();
</span><br>
<span class="quotelev2">&gt;&gt;     //other work must be done by the original node
</span><br>
<span class="quotelev2">&gt;&gt;     ....
</span><br>
<span class="quotelev2">&gt;&gt;     return 0;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; void funcCompScalapack()
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;     //Initialize MPI
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Init(NULL,NULL);
</span><br>
<span class="quotelev2">&gt;&gt;     //here I think I should write some code in order to inform that the
</span><br>
<span class="quotelev2">&gt;&gt; work must be done by a number X or processors
</span><br>
<span class="quotelev2">&gt;&gt;     //maybe using MPI_Comm_spawn?
</span><br>
<span class="quotelev2">&gt;&gt;     ....
</span><br>
<span class="quotelev2">&gt;&gt;     //some BLACS and ScaLAPACK computations
</span><br>
<span class="quotelev2">&gt;&gt;     ....
</span><br>
<span class="quotelev2">&gt;&gt;     //finalize MPI
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Finalize();
</span><br>
<span class="quotelev2">&gt;&gt;     return;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When I execute this program as mpirun -np X myprogram, the pieces of code
</span><br>
<span class="quotelev2">&gt;&gt; before and after the call to function funcCompScalapack() are executed by X
</span><br>
<span class="quotelev2">&gt;&gt; nodes, but these orders must be executed only by one. So my idea is to
</span><br>
<span class="quotelev2">&gt;&gt; execute the binary as ./myprogram (the same I think as mpirun -np 1
</span><br>
<span class="quotelev2">&gt;&gt; myprogram) and internally set the number of processes in
</span><br>
<span class="quotelev2">&gt;&gt; funcCompScalapack() after the MPI_Init() call.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is my idea possible?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jun 6, 2013, at 7:54 AM, Jos&#233; Luis Garc&#237;a Pallero &lt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jgpallero_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm newbie in the use of MPI, so probably I ask some stupid question (or
</span><br>
<span class="quotelev3">&gt;&gt;&gt; previously asked, but in this case I have searched in the archive and I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; haven't found anything):
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Exists any other way than -np X in order to pass the number of processes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to start for an MPI program? I mean a function of the style
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Set_Number_Processes() or similar
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks
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
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; *****************************************
</span><br>
<span class="quotelev1">&gt; Jos&#233; Luis Garc&#237;a Pallero
</span><br>
<span class="quotelev1">&gt; jgpallero_at_[hidden]
</span><br>
<span class="quotelev1">&gt; (o&lt;
</span><br>
<span class="quotelev1">&gt; / / \
</span><br>
<span class="quotelev1">&gt; V_/_
</span><br>
<span class="quotelev1">&gt; Use Debian GNU/Linux and enjoy!
</span><br>
<span class="quotelev1">&gt; *****************************************
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
*****************************************
Jos&#233; Luis Garc&#237;a Pallero
jgpallero_at_[hidden]
(o&lt;
/ / \
V_/_
Use Debian GNU/Linux and enjoy!
*****************************************
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22046/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22047.php">Ralph Castain: "Re: [OMPI users] Set number of processes in another way than -np X"</a>
<li><strong>Previous message:</strong> <a href="22045.php">Nima Aghajari: "Re: [OMPI users] Oversubcription for mimd/mpmd mpiruns"</a>
<li><strong>In reply to:</strong> <a href="22044.php">Ralph Castain: "Re: [OMPI users] Set number of processes in another way than -np X"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22047.php">Ralph Castain: "Re: [OMPI users] Set number of processes in another way than -np X"</a>
<li><strong>Reply:</strong> <a href="22047.php">Ralph Castain: "Re: [OMPI users] Set number of processes in another way than -np X"</a>
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
