<?
$subject_val = "Re: [OMPI users] Set number of processes in another way than -np X";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun  6 14:30:28 2013" -->
<!-- isoreceived="20130606183028" -->
<!-- sent="Thu, 6 Jun 2013 13:30:22 -0500" -->
<!-- isosent="20130606183022" -->
<!-- name="Edscott Wilson" -->
<!-- email="edscott.wilson.garcia_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Set number of processes in another way than -np X" -->
<!-- id="CA+4=zZjU-kMONG=P2ZbS1yqKMS=J2BfNNkz3zEc9RRNdSrBNCw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1AE9AE1A-0632-4BDF-BA7F-13B8DBBDD5E4_at_cisco.com" -->
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
<strong>From:</strong> Edscott Wilson (<em>edscott.wilson.garcia_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-06 14:30:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22053.php">Shamis, Pavel: "Re: [OMPI users] OMPI Coll Framework and RDMA"</a>
<li><strong>Previous message:</strong> <a href="22051.php">Jingcha Joba: "[OMPI users] OMPI Coll Framework and RDMA"</a>
<li><strong>In reply to:</strong> <a href="22050.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Set number of processes in another way than -np X"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Pvm is not dead. It's &quot;stable&quot;.
<br>
<p><p>2013/6/6 Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt;  The traditional way to do this stuff in MPI is
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  If rank==0 do_master_stuff
</span><br>
<span class="quotelev1">&gt; Else do_slave_stuff
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Sounds like that pattern should apply to your app.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Pvm has been dead for years.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sent from my phone. No type good.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 6, 2013, at 9:43 AM, &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I honestly don't know - you'd have to look at the PVM docs. You also
</span><br>
<span class="quotelev1">&gt; might look at OpenMP and try doing it with multiple threads instead of
</span><br>
<span class="quotelev1">&gt; processes, though that limits you to running on a single node.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  On Jun 6, 2013, at 9:37 AM, Jos&#233; Luis Garc&#237;a Pallero &lt;jgpallero_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  2013/6/6 Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  On Jun 6, 2013, at 8:58 AM, Jos&#233; Luis Garc&#237;a Pallero &lt;
</span><br>
<span class="quotelev2">&gt;&gt; jgpallero_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   2013/6/6 Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; should work!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Thank you for your answer.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  So I understand that MPI_Comm_spawn() is my function. But I see in the
</span><br>
<span class="quotelev2">&gt;&gt; documentation that the first argument is char* command, and command is the
</span><br>
<span class="quotelev2">&gt;&gt; name of the program to spawn, but I not want to execute an external
</span><br>
<span class="quotelev2">&gt;&gt; program. Only a piece of code in the same program. How can I deal with
</span><br>
<span class="quotelev2">&gt;&gt; that.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  You'll have to move that code into a separate program, then pass any
</span><br>
<span class="quotelev2">&gt;&gt; data it requires using MPI_Send/receive or a collective operation
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Mmm... bad news. It is impossible, then in MPI. I need all the code in
</span><br>
<span class="quotelev1">&gt; the same executable.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I know this is offtopic in this list, but, can I perform the
</span><br>
<span class="quotelev1">&gt; calculations as I want using PVM? (ScaLAPACK et al. can also run with PVM)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Cheers
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   The second argument is char* argv[]. Admits MPI_Comm_spawn() the NULL
</span><br>
<span class="quotelev2">&gt;&gt; value for argv[], as MPI_Init()?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  I know also that I can do my program by putting the code before and
</span><br>
<span class="quotelev2">&gt;&gt; after the call funcCompScalapack() into an if() checking if the node is the
</span><br>
<span class="quotelev2">&gt;&gt; root and then these pieces of code will be executed only by the root. But I
</span><br>
<span class="quotelev2">&gt;&gt; want to maintain all the program free of MPI code except the
</span><br>
<span class="quotelev2">&gt;&gt; funcCompScalapack() function
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Cheers
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  On Jun 6, 2013, at 8:24 AM, Jos&#233; Luis Garc&#237;a Pallero &lt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jgpallero_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  2013/6/6 Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Afraid not. You could start a single process, and then have that
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; process call MPI_Comm_spawn to launch the rest of them
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Mmmm... sounds good
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  I'm writing an example program using ScaLAPACK. I have written the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ScaLAPACK code in an independent function that must be called after some
</span><br>
<span class="quotelev3">&gt;&gt;&gt; work in an individual node (the root one). So I need the first part of the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; program be executed by one process. My example looks like:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  int main()
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      //some work that must be done by only one node
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     .....
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      //function that runs internally some scalapack computations
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      funcCompScalapack();
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      //other work must be done by the original node
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     ....
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      return 0;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  void funcCompScalapack()
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      //Initialize MPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      MPI_Init(NULL,NULL);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      //here I think I should write some code in order to inform that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the work must be done by a number X or processors
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      //maybe using MPI_Comm_spawn?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     ....
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      //some BLACS and ScaLAPACK computations
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     ....
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      //finalize MPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      MPI_Finalize();
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      return;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  When I execute this program as mpirun -np X myprogram, the pieces of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; code before and after the call to function funcCompScalapack() are executed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; by X nodes, but these orders must be executed only by one. So my idea is to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; execute the binary as ./myprogram (the same I think as mpirun -np 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; myprogram) and internally set the number of processes in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; funcCompScalapack() after the MPI_Init() call.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Is my idea possible?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  On Jun 6, 2013, at 7:54 AM, Jos&#233; Luis Garc&#237;a Pallero &lt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; jgpallero_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    Hello:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  I'm newbie in the use of MPI, so probably I ask some stupid question
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (or previously asked, but in this case I have searched in the archive and I
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; haven't found anything):
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  Exists any other way than -np X in order to pass the number of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; processes to start for an MPI program? I mean a function of the style
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI_Set_Number_Processes() or similar
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  Thanks
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
<span class="quotelev4">&gt;&gt;&gt;&gt;   _______________________________________________
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
<span class="quotelev3">&gt;&gt;&gt;  _______________________________________________
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
<span class="quotelev2">&gt;&gt;  _______________________________________________
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
<span class="quotelev1">&gt;  _______________________________________________
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
<span class="quotelev1">&gt;   _______________________________________________
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
------------------------------------------------------------------------------------
Dr. Edscott Wilson Garcia
Applied Mathematics and Computing
Mexican Petroleum Institute
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22052/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22053.php">Shamis, Pavel: "Re: [OMPI users] OMPI Coll Framework and RDMA"</a>
<li><strong>Previous message:</strong> <a href="22051.php">Jingcha Joba: "[OMPI users] OMPI Coll Framework and RDMA"</a>
<li><strong>In reply to:</strong> <a href="22050.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Set number of processes in another way than -np X"</a>
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
