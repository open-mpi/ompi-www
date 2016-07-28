<?
$subject_val = "Re: [OMPI users] Set number of processes in another way than -np X";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun  6 11:31:56 2013" -->
<!-- isoreceived="20130606153156" -->
<!-- sent="Thu, 6 Jun 2013 08:31:47 -0700" -->
<!-- isosent="20130606153147" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Set number of processes in another way than -np X" -->
<!-- id="621A2800-43AC-4D14-8168-3C2E85738F45_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAFemY3aG8DOg1zjYrrYPFqTk93cH0OgvE1t+mdhk9z0ugN9hOQ_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-06 11:31:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22043.php">José Luis García Pallero: "Re: [OMPI users] Set number of processes in another way than -np X"</a>
<li><strong>Previous message:</strong> <a href="22041.php">Jos&#233; Luis Garc&#237;a Pallero: "Re: [OMPI users] Set number of processes in another way than -np X"</a>
<li><strong>In reply to:</strong> <a href="22041.php">Jos&#233; Luis Garc&#237;a Pallero: "Re: [OMPI users] Set number of processes in another way than -np X"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22043.php">José Luis García Pallero: "Re: [OMPI users] Set number of processes in another way than -np X"</a>
<li><strong>Reply:</strong> <a href="22043.php">José Luis García Pallero: "Re: [OMPI users] Set number of processes in another way than -np X"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
should work!
<br>
<p>On Jun 6, 2013, at 8:24 AM, Jos&#233; Luis Garc&#237;a Pallero &lt;jgpallero_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 2013/6/6 Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Afraid not. You could start a single process, and then have that process call MPI_Comm_spawn to launch the rest of them
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Mmmm... sounds good
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm writing an example program using ScaLAPACK. I have written the ScaLAPACK code in an independent function that must be called after some work in an individual node (the root one). So I need the first part of the program be executed by one process. My example looks like:
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
<span class="quotelev1">&gt;     //here I think I should write some code in order to inform that the work must be done by a number X or processors
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
<span class="quotelev1">&gt; When I execute this program as mpirun -np X myprogram, the pieces of code before and after the call to function funcCompScalapack() are executed by X nodes, but these orders must be executed only by one. So my idea is to execute the binary as ./myprogram (the same I think as mpirun -np 1 myprogram) and internally set the number of processes in funcCompScalapack() after the MPI_Init() call.
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
<span class="quotelev1">&gt; On Jun 6, 2013, at 7:54 AM, Jos&#233; Luis Garc&#237;a Pallero &lt;jgpallero_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hello:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm newbie in the use of MPI, so probably I ask some stupid question (or previously asked, but in this case I have searched in the archive and I haven't found anything):
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Exists any other way than -np X in order to pass the number of processes to start for an MPI program? I mean a function of the style MPI_Set_Number_Processes() or similar
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22042/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22043.php">José Luis García Pallero: "Re: [OMPI users] Set number of processes in another way than -np X"</a>
<li><strong>Previous message:</strong> <a href="22041.php">Jos&#233; Luis Garc&#237;a Pallero: "Re: [OMPI users] Set number of processes in another way than -np X"</a>
<li><strong>In reply to:</strong> <a href="22041.php">Jos&#233; Luis Garc&#237;a Pallero: "Re: [OMPI users] Set number of processes in another way than -np X"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22043.php">José Luis García Pallero: "Re: [OMPI users] Set number of processes in another way than -np X"</a>
<li><strong>Reply:</strong> <a href="22043.php">José Luis García Pallero: "Re: [OMPI users] Set number of processes in another way than -np X"</a>
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
