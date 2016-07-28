<?
$subject_val = "Re: [OMPI users] Please help me with this simple setup. i am stuck";
include("../../include/msg-header.inc");
?>
<!-- received="Sat May  9 12:28:45 2009" -->
<!-- isoreceived="20090509162845" -->
<!-- sent="Sat, 9 May 2009 12:28:31 -0400" -->
<!-- isosent="20090509162831" -->
<!-- name="Luis Vitorio Cargnini" -->
<!-- email="lvcargnini_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Please help me with this simple setup. i am stuck" -->
<!-- id="C498F5F7-0D98-47E9-9154-9E297C319ADE_at_gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="82b4d5c90905090842n77809fb7g37d6b27a60894f3a_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Please help me with this simple setup. i am stuck<br>
<strong>From:</strong> Luis Vitorio Cargnini (<em>lvcargnini_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-09 12:28:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9280.php">Gus Correa: "Re: [OMPI users] Please help me with this simple setup. i am stuck"</a>
<li><strong>Previous message:</strong> <a href="9278.php">Venu Gopal: "[OMPI users] Please help me with this simple setup. i am stuck"</a>
<li><strong>In reply to:</strong> <a href="9278.php">Venu Gopal: "[OMPI users] Please help me with this simple setup. i am stuck"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9280.php">Gus Correa: "Re: [OMPI users] Please help me with this simple setup. i am stuck"</a>
<li><strong>Reply:</strong> <a href="9280.php">Gus Correa: "Re: [OMPI users] Please help me with this simple setup. i am stuck"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
maybe add the slots=1 for example to your first node
<br>
<p>Le 09-05-09 &#224; 11:42, Venu Gopal a &#233;crit :
<br>
<p><span class="quotelev1">&gt; I am venu,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have tried to setup a simple 2 node openmpi system.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; on two machines one is running debian lenny (ip 10.0.3.1)
</span><br>
<span class="quotelev1">&gt; other is running ubuntu hardy (ip 10.0.3.3)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am getting error when i try to execute a file using mpiexec, i am  
</span><br>
<span class="quotelev1">&gt; sure password is correct. as ssh is working
</span><br>
<span class="quotelev1">&gt; and the file pi3 is in directory code which in turn is in my home  
</span><br>
<span class="quotelev1">&gt; directory venu.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; the file pi.c is below
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /* To run this  
</span><br>
<span class="quotelev1">&gt; program:                                               */
</span><br>
<span class="quotelev1">&gt; / 
</span><br>
<span class="quotelev1">&gt; *---------------------                                                
</span><br>
<span class="quotelev1">&gt; */
</span><br>
<span class="quotelev1">&gt; / 
</span><br>
<span class="quotelev1">&gt; *                                                                     
</span><br>
<span class="quotelev1">&gt; */
</span><br>
<span class="quotelev1">&gt; / 
</span><br>
<span class="quotelev1">&gt; *                                                                     
</span><br>
<span class="quotelev1">&gt; */
</span><br>
<span class="quotelev1">&gt; /*    Issue:   time  mpirun  -np  [nprocs]  ./pi      (SGI,  
</span><br>
<span class="quotelev1">&gt; Beowulf)  */
</span><br>
<span class="quotelev1">&gt; / 
</span><br>
<span class="quotelev1">&gt; *                                                                     
</span><br>
<span class="quotelev1">&gt; */
</span><br>
<span class="quotelev1">&gt; / 
</span><br>
<span class="quotelev1">&gt; *                                                                     
</span><br>
<span class="quotelev1">&gt; */
</span><br>
<span class="quotelev1">&gt; /*  
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------ */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main(int argc, char *argv[])
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;       int    i, n;
</span><br>
<span class="quotelev1">&gt;       double h, pi, x;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       int    me, nprocs;
</span><br>
<span class="quotelev1">&gt;       double piece;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /* --------------------------------------------------- */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       MPI_Init (&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       MPI_Comm_size (MPI_COMM_WORLD, &amp;nprocs);
</span><br>
<span class="quotelev1">&gt;       MPI_Comm_rank (MPI_COMM_WORLD, &amp;me);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /* --------------------------------------------------- */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       if (me == 0)
</span><br>
<span class="quotelev1">&gt;       {
</span><br>
<span class="quotelev1">&gt;          printf(&quot;%s&quot;, &quot;Input number of intervals:\n&quot;);
</span><br>
<span class="quotelev1">&gt;          scanf (&quot;%d&quot;, &amp;n);
</span><br>
<span class="quotelev1">&gt;       }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /* --------------------------------------------------- */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       MPI_Bcast (&amp;n, 1, MPI_INT,
</span><br>
<span class="quotelev1">&gt;                  0, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /* --------------------------------------------------- */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       h     = 1. / (double) n;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       piece = 0.;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       for (i=me+1; i &lt;= n; i+=nprocs)
</span><br>
<span class="quotelev1">&gt;       {
</span><br>
<span class="quotelev1">&gt;            x     = (i-1)*h;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;            piece = piece + (
</span><br>
<span class="quotelev1">&gt;                                    4/
</span><br>
<span class="quotelev1">&gt;                               (1+(x)*(x))
</span><br>
<span class="quotelev1">&gt;                                    +
</span><br>
<span class="quotelev1">&gt;                                    4/
</span><br>
<span class="quotelev1">&gt;                               (1+(x+h)*(x+h))
</span><br>
<span class="quotelev1">&gt;                                                ) / 2 * h;
</span><br>
<span class="quotelev1">&gt;       }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       printf(&quot;%d: pi = %25.15f\n&quot;, me, piece);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /* --------------------------------------------------- */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       MPI_Reduce (&amp;piece, &amp;pi, 1, MPI_DOUBLE,
</span><br>
<span class="quotelev1">&gt;                   MPI_SUM, 0, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /* --------------------------------------------------- */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       if (me == 0)
</span><br>
<span class="quotelev1">&gt;       {
</span><br>
<span class="quotelev1">&gt;          printf(&quot;pi = %25.15f\n&quot;, pi);
</span><br>
<span class="quotelev1">&gt;       }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /* --------------------------------------------------- */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; the code directory is nfs shared and mounted on the client system  
</span><br>
<span class="quotelev1">&gt; which is 10.0.3.3.
</span><br>
<span class="quotelev1">&gt; the server system is 10.0.3.1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i can ping the client from server and also server from client. ssh  
</span><br>
<span class="quotelev1">&gt; is working bothways.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; the /etc/openmpi/openmpi-default-hostfile is having the line on the  
</span><br>
<span class="quotelev1">&gt; first node ie. 10.0.3.1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 10.0.3.3 slots=2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; the other nodes file is just empty. i mean only comments are there.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; this is the error is get when i execute.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; venu_at_mainframe:~$ mpiexec -np 3 ./code/pi3
</span><br>
<span class="quotelev1">&gt; venu_at_10.0.3.3's password:
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Could not execute the executable &quot;./code/pi3&quot;: Exec format error
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This could mean that your PATH or executable name is wrong, or that  
</span><br>
<span class="quotelev1">&gt; you do not
</span><br>
<span class="quotelev1">&gt; have the necessary permissions.  Please ensure that the executable  
</span><br>
<span class="quotelev1">&gt; is able to be
</span><br>
<span class="quotelev1">&gt; found and executed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Could not execute the executable &quot;./code/pi3&quot;: Exec format error
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This could mean that your PATH or executable name is wrong, or that  
</span><br>
<span class="quotelev1">&gt; you do not
</span><br>
<span class="quotelev1">&gt; have the necessary permissions.  Please ensure that the executable  
</span><br>
<span class="quotelev1">&gt; is able to be
</span><br>
<span class="quotelev1">&gt; found and executed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Could not execute the executable &quot;./code/pi3&quot;: Exec format error
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This could mean that your PATH or executable name is wrong, or that  
</span><br>
<span class="quotelev1">&gt; you do not
</span><br>
<span class="quotelev1">&gt; have the necessary permissions.  Please ensure that the executable  
</span><br>
<span class="quotelev1">&gt; is able to be
</span><br>
<span class="quotelev1">&gt; found and executed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; now, when i remove that line from /etc/openmpi/openmpi-default- 
</span><br>
<span class="quotelev1">&gt; hostfile on the first node
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; the program compiles and executes on the first node node.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; same, when i compile it and execute it on the second node, it works.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; only problem is when i try to run it on both.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i get the error mesage as above.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; someone, please help me. as i am trying to setup this system for the  
</span><br>
<span class="quotelev1">&gt; first time.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and i am stuck.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i am fairly good with linux. so i know my way around linux. but am  
</span><br>
<span class="quotelev1">&gt; stuck with open mpi.
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Venu Gopal
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
<p><p><p>
<p>
<br><p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9279/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9279/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9279/PGP.sig">Ceci est une signature &#233;lectronique PGP</a>
</ul>
<!-- attachment="PGP.sig" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9280.php">Gus Correa: "Re: [OMPI users] Please help me with this simple setup. i am stuck"</a>
<li><strong>Previous message:</strong> <a href="9278.php">Venu Gopal: "[OMPI users] Please help me with this simple setup. i am stuck"</a>
<li><strong>In reply to:</strong> <a href="9278.php">Venu Gopal: "[OMPI users] Please help me with this simple setup. i am stuck"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9280.php">Gus Correa: "Re: [OMPI users] Please help me with this simple setup. i am stuck"</a>
<li><strong>Reply:</strong> <a href="9280.php">Gus Correa: "Re: [OMPI users] Please help me with this simple setup. i am stuck"</a>
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
