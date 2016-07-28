<?
$subject_val = "Re: [OMPI users] Set number of processes in another way than -np X";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun  6 11:58:26 2013" -->
<!-- isoreceived="20130606155826" -->
<!-- sent="Thu, 6 Jun 2013 17:58:22 +0200" -->
<!-- isosent="20130606155822" -->
<!-- name="Jos&#233; Luis Garc&#237;a Pallero" -->
<!-- email="jgpallero_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Set number of processes in another way than -np X" -->
<!-- id="CAFemY3aAysTV5GbjCa5MRfiwkTt3Lvj8WSP8CqMG__GAe07eMg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="621A2800-43AC-4D14-8168-3C2E85738F45_at_open-mpi.org" -->
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
<strong>Date:</strong> 2013-06-06 11:58:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22044.php">Ralph Castain: "Re: [OMPI users] Set number of processes in another way than -np X"</a>
<li><strong>Previous message:</strong> <a href="22042.php">Ralph Castain: "Re: [OMPI users] Set number of processes in another way than -np X"</a>
<li><strong>In reply to:</strong> <a href="22042.php">Ralph Castain: "Re: [OMPI users] Set number of processes in another way than -np X"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22044.php">Ralph Castain: "Re: [OMPI users] Set number of processes in another way than -np X"</a>
<li><strong>Reply:</strong> <a href="22044.php">Ralph Castain: "Re: [OMPI users] Set number of processes in another way than -np X"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
2013/6/6 Ralph Castain &lt;rhc_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; should work!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Thank you for your answer.
<br>
<p>So I understand that MPI_Comm_spawn() is my function. But I see in the
<br>
documentation that the first argument is char* command, and command is the
<br>
name of the program to spawn, but I not want to execute an external
<br>
program. Only a piece of code in the same program. How can I deal with
<br>
that. The second argument is char* argv[]. Admits MPI_Comm_spawn() the NULL
<br>
value for argv[], as MPI_Init()?
<br>
<p>I know also that I can do my program by putting the code before and after
<br>
the call funcCompScalapack() into an if() checking if the node is the root
<br>
and then these pieces of code will be executed only by the root. But I want
<br>
to maintain all the program free of MPI code except the funcCompScalapack()
<br>
function
<br>
<p>Cheers
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 6, 2013, at 8:24 AM, Jos&#233; Luis Garc&#237;a Pallero &lt;jgpallero_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2013/6/6 Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Afraid not. You could start a single process, and then have that process
</span><br>
<span class="quotelev2">&gt;&gt; call MPI_Comm_spawn to launch the rest of them
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Mmmm... sounds good
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm writing an example program using ScaLAPACK. I have written the
</span><br>
<span class="quotelev1">&gt; ScaLAPACK code in an independent function that must be called after some
</span><br>
<span class="quotelev1">&gt; work in an individual node (the root one). So I need the first part of the
</span><br>
<span class="quotelev1">&gt; program be executed by one process. My example looks like:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main()
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     //some work that must be done by only one node
</span><br>
<span class="quotelev1">&gt;     .....
</span><br>
<span class="quotelev1">&gt;     //function that runs internally some scalapack computations
</span><br>
<span class="quotelev1">&gt;     funcCompScalapack();
</span><br>
<span class="quotelev1">&gt;     //other work must be done by the original node
</span><br>
<span class="quotelev1">&gt;     ....
</span><br>
<span class="quotelev1">&gt;     return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; void funcCompScalapack()
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     //Initialize MPI
</span><br>
<span class="quotelev1">&gt;     MPI_Init(NULL,NULL);
</span><br>
<span class="quotelev1">&gt;     //here I think I should write some code in order to inform that the
</span><br>
<span class="quotelev1">&gt; work must be done by a number X or processors
</span><br>
<span class="quotelev1">&gt;     //maybe using MPI_Comm_spawn?
</span><br>
<span class="quotelev1">&gt;     ....
</span><br>
<span class="quotelev1">&gt;     //some BLACS and ScaLAPACK computations
</span><br>
<span class="quotelev1">&gt;     ....
</span><br>
<span class="quotelev1">&gt;     //finalize MPI
</span><br>
<span class="quotelev1">&gt;     MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;     return;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I execute this program as mpirun -np X myprogram, the pieces of code
</span><br>
<span class="quotelev1">&gt; before and after the call to function funcCompScalapack() are executed by X
</span><br>
<span class="quotelev1">&gt; nodes, but these orders must be executed only by one. So my idea is to
</span><br>
<span class="quotelev1">&gt; execute the binary as ./myprogram (the same I think as mpirun -np 1
</span><br>
<span class="quotelev1">&gt; myprogram) and internally set the number of processes in
</span><br>
<span class="quotelev1">&gt; funcCompScalapack() after the MPI_Init() call.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is my idea possible?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 6, 2013, at 7:54 AM, Jos&#233; Luis Garc&#237;a Pallero &lt;jgpallero_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm newbie in the use of MPI, so probably I ask some stupid question (or
</span><br>
<span class="quotelev2">&gt;&gt; previously asked, but in this case I have searched in the archive and I
</span><br>
<span class="quotelev2">&gt;&gt; haven't found anything):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Exists any other way than -np X in order to pass the number of processes
</span><br>
<span class="quotelev2">&gt;&gt; to start for an MPI program? I mean a function of the style
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Set_Number_Processes() or similar
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22043/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22044.php">Ralph Castain: "Re: [OMPI users] Set number of processes in another way than -np X"</a>
<li><strong>Previous message:</strong> <a href="22042.php">Ralph Castain: "Re: [OMPI users] Set number of processes in another way than -np X"</a>
<li><strong>In reply to:</strong> <a href="22042.php">Ralph Castain: "Re: [OMPI users] Set number of processes in another way than -np X"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22044.php">Ralph Castain: "Re: [OMPI users] Set number of processes in another way than -np X"</a>
<li><strong>Reply:</strong> <a href="22044.php">Ralph Castain: "Re: [OMPI users] Set number of processes in another way than -np X"</a>
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
