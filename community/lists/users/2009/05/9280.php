<?
$subject_val = "Re: [OMPI users] Please help me with this simple setup. i am stuck";
include("../../include/msg-header.inc");
?>
<!-- received="Sat May  9 20:33:04 2009" -->
<!-- isoreceived="20090510003304" -->
<!-- sent="Sat, 09 May 2009 20:32:59 -0400" -->
<!-- isosent="20090510003259" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Please help me with this simple setup. i am stuck" -->
<!-- id="4A0620BB.6080008_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C498F5F7-0D98-47E9-9154-9E297C319ADE_at_gmail.com" -->
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
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-09 20:32:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9281.php">Katz, Jacob: "[OMPI users] Wrapping MPI program in a script"</a>
<li><strong>Previous message:</strong> <a href="9279.php">Luis Vitorio Cargnini: "Re: [OMPI users] Please help me with this simple setup. i am stuck"</a>
<li><strong>In reply to:</strong> <a href="9279.php">Luis Vitorio Cargnini: "Re: [OMPI users] Please help me with this simple setup. i am stuck"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9287.php">Jeff Squyres: "Re: [OMPI users] Please help me with this simple setup. i am stuck"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Venu
<br>
<p>As a general suggestion, take a look at the OpenMPI FAQs,
<br>
specially those about running MPI jobs and troubleshooting.
<br>
They will probably drive you in the right direction:
<br>
<p><a href="http://www.open-mpi.org/faq/">http://www.open-mpi.org/faq/</a>
<br>
<p>Luis Vitorio Cargnini wrote:
<br>
<span class="quotelev1">&gt; maybe add the slots=1 for example to your first node
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Le 09-05-09 &#224; 11:42, Venu Gopal a &#233;crit :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I am venu,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have tried to setup a simple 2 node openmpi system.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; on two machines one is running debian lenny (ip 10.0.3.1)
</span><br>
<span class="quotelev2">&gt;&gt; other is running ubuntu hardy (ip 10.0.3.3)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am getting error when i try to execute a file using mpiexec, i am 
</span><br>
<span class="quotelev2">&gt;&gt; sure password is correct. as ssh is working
</span><br>
<span class="quotelev2">&gt;&gt; and the file pi3 is in directory code which in turn is in my home 
</span><br>
<span class="quotelev2">&gt;&gt; directory venu.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; the file pi.c is below
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /* To run this program:                                               */
</span><br>
<span class="quotelev2">&gt;&gt; /*---------------------                                               */
</span><br>
<span class="quotelev2">&gt;&gt; /*                                                                    */
</span><br>
<span class="quotelev2">&gt;&gt; /*                                                                    */
</span><br>
<span class="quotelev2">&gt;&gt; /*    Issue:   time  mpirun  -np  [nprocs]  ./pi      (SGI, Beowulf)  */
</span><br>
<span class="quotelev2">&gt;&gt; /*                                                                    */
</span><br>
<span class="quotelev2">&gt;&gt; /*                                                                    */
</span><br>
<span class="quotelev2">&gt;&gt; /* ------------------------------------------------------------------ */
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; int main(int argc, char *argv[])
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;       int    i, n;
</span><br>
<span class="quotelev2">&gt;&gt;       double h, pi, x;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;       int    me, nprocs;
</span><br>
<span class="quotelev2">&gt;&gt;       double piece;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /* --------------------------------------------------- */
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;       MPI_Init (&amp;argc, &amp;argv);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;       MPI_Comm_size (MPI_COMM_WORLD, &amp;nprocs);
</span><br>
<span class="quotelev2">&gt;&gt;       MPI_Comm_rank (MPI_COMM_WORLD, &amp;me);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /* --------------------------------------------------- */
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;       if (me == 0)
</span><br>
<span class="quotelev2">&gt;&gt;       {
</span><br>
<span class="quotelev2">&gt;&gt;          printf(&quot;%s&quot;, &quot;Input number of intervals:\n&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;          scanf (&quot;%d&quot;, &amp;n);
</span><br>
<p>This is not why your runs are failing,
<br>
but it may cause future runs to fail.
<br>
<p><p>This interactive step above is fine when you are running
<br>
on a single machine,which is your local machine.
<br>
However, it may get tricky if your rank 0 process (i.e. me=0)
<br>
is located on a remote machine. (Where you don't have an interactive 
<br>
shell connection!)
<br>
Who's going to read the &quot;Input number of intervals:&quot; message,
<br>
and who is going to type in the value of &quot;n&quot; for sscanf to read it
<br>
then?
<br>
<p>I suggest that you change this part of the code, remove printf and scanf 
<br>
lines in &quot;if (me==0)&quot; block, and hardwire the value of n (Say n=10000 or 
<br>
100000).
<br>
This is easy to do.
<br>
<p>A little harder alternative is to read n
<br>
from STDIN using argv[1], for instance, redirecting STDIN to a file:
<br>
mpiexec ..... pi  &lt; input_file,
<br>
where input_file has a single number in it (the value of n).
<br>
In this case you need to modify the &quot;if (me == 0)&quot; block to assign 
<br>
argv[1] to n, I guess.
<br>
<p><p><span class="quotelev2">&gt;&gt;       }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /* --------------------------------------------------- */
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;       MPI_Bcast (&amp;n, 1, MPI_INT,
</span><br>
<span class="quotelev2">&gt;&gt;                  0, MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /* --------------------------------------------------- */
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;       h     = 1. / (double) n;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;       piece = 0.;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;       for (i=me+1; i &lt;= n; i+=nprocs)
</span><br>
<span class="quotelev2">&gt;&gt;       {
</span><br>
<span class="quotelev2">&gt;&gt;            x     = (i-1)*h;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;            piece = piece + (
</span><br>
<span class="quotelev2">&gt;&gt;                                    4/
</span><br>
<span class="quotelev2">&gt;&gt;                               (1+(x)*(x))
</span><br>
<span class="quotelev2">&gt;&gt;                                    +
</span><br>
<span class="quotelev2">&gt;&gt;                                    4/
</span><br>
<span class="quotelev2">&gt;&gt;                               (1+(x+h)*(x+h))
</span><br>
<span class="quotelev2">&gt;&gt;                                                ) / 2 * h;
</span><br>
<span class="quotelev2">&gt;&gt;       }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;       printf(&quot;%d: pi = %25.15f\n&quot;, me, piece);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /* --------------------------------------------------- */
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;       MPI_Reduce (&amp;piece, &amp;pi, 1, MPI_DOUBLE,
</span><br>
<span class="quotelev2">&gt;&gt;                   MPI_SUM, 0, MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /* --------------------------------------------------- */
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;       if (me == 0)
</span><br>
<span class="quotelev2">&gt;&gt;       {
</span><br>
<span class="quotelev2">&gt;&gt;          printf(&quot;pi = %25.15f\n&quot;, pi);
</span><br>
<span class="quotelev2">&gt;&gt;       }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /* --------------------------------------------------- */
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;       MPI_Finalize();
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;       return 0;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; the code directory is nfs shared and mounted on the client system 
</span><br>
<span class="quotelev2">&gt;&gt; which is 10.0.3.3.
</span><br>
<p>That is very nice way to set things up,
<br>
much better than having to copy over everything to the local
<br>
file system.
<br>
<p><span class="quotelev2">&gt;&gt; the server system is 10.0.3.1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; i can ping the client from server and also server from client. ssh is 
</span><br>
<span class="quotelev2">&gt;&gt; working bothways.
</span><br>
<p>Did you set up ssh passwordless on both hosts?
<br>
You must have passwordless ssh connection for OpenMPI (or any MPI) to
<br>
work with more than one host.
<br>
<p><span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; the /etc/openmpi/openmpi-default-hostfile is having the line on the 
</span><br>
<span class="quotelev2">&gt;&gt; first node ie. 10.0.3.1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 10.0.3.3 slots=2
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<p>If you want to run on both hosts you need a hostfile with both hosts.
<br>
Assuming both have two slots, something like this:
<br>
<p>10.0.3.1 slots=2
<br>
10.0.3.3 slots=2
<br>
<p>Actually, it may be better to create this file on your execution 
<br>
directory, instead of using the openmpi-default-hostfile.
<br>
If you do so, use also the -hostfile option of mpiexec.
<br>
<p>Alternatively, you can list the hosts on the mpiexec command line,
<br>
using the -host option.
<br>
<p>&quot;man mpiexec&quot; is your friend!
<br>
<p><span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; the other nodes file is just empty. i mean only comments are there.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; this is the error is get when i execute.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; venu_at_mainframe:~$ mpiexec -np 3 ./code/pi3
</span><br>
<span class="quotelev2">&gt;&gt; venu_at_10.0.3.3 &lt;mailto:venu_at_10.0.3.3&gt;'s password:
</span><br>
<p>It looks like 10.0.3.3 is asking for password when ssh tries to connect 
<br>
to it from 10.0.3.1 (where you launched the mpiexec command).
<br>
<p>You must setup ssh with **passwordless** connections!
<br>
Here is one way to do it:
<br>
<p><a href="http://agenda.clustermonkey.net/index.php/Passwordless_SSH_(and_RSH">http://agenda.clustermonkey.net/index.php/Passwordless_SSH_(and_RSH</a>)_Logins
<br>
<p>Or you can Google out equivalent solutions.
<br>
<p><span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Could not execute the executable &quot;./code/pi3&quot;: Exec format error
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<p>Do you have the same architecture on both computers?
<br>
(I.e. both x86, or both x86_64, but not one of each?
<br>
<p><span class="quotelev2">&gt;&gt; This could mean that your PATH or executable name is wrong, or that 
</span><br>
<span class="quotelev2">&gt;&gt; you do not
</span><br>
<span class="quotelev2">&gt;&gt; have the necessary permissions.  Please ensure that the executable is 
</span><br>
<span class="quotelev2">&gt;&gt; able to be
</span><br>
<span class="quotelev2">&gt;&gt; found and executed.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<p>Ssh will put you on your home directory on the remote machine.
<br>
However, your executable is not there, but in whatever/code/pi3.
<br>
<p>You need to use the mpiexec -path option to tell it where to find
<br>
the executable.
<br>
&quot;man mpiexec&quot; is your friend!
<br>
<p><span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Could not execute the executable &quot;./code/pi3&quot;: Exec format error
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This could mean that your PATH or executable name is wrong, or that 
</span><br>
<span class="quotelev2">&gt;&gt; you do not
</span><br>
<span class="quotelev2">&gt;&gt; have the necessary permissions.  Please ensure that the executable is 
</span><br>
<span class="quotelev2">&gt;&gt; able to be
</span><br>
<span class="quotelev2">&gt;&gt; found and executed.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Could not execute the executable &quot;./code/pi3&quot;: Exec format error
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This could mean that your PATH or executable name is wrong, or that 
</span><br>
<span class="quotelev2">&gt;&gt; you do not
</span><br>
<span class="quotelev2">&gt;&gt; have the necessary permissions.  Please ensure that the executable is 
</span><br>
<span class="quotelev2">&gt;&gt; able to be
</span><br>
<span class="quotelev2">&gt;&gt; found and executed.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; now, when i remove that line from 
</span><br>
<span class="quotelev2">&gt;&gt; /etc/openmpi/openmpi-default-hostfile on the first node
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; the program compiles and executes on the first node node.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; same, when i compile it and execute it on the second node, it works.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; only problem is when i try to run it on both.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; i get the error mesage as above.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<p>See the suggestions above.
<br>
<p><span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; someone, please help me. as i am trying to setup this system for the 
</span><br>
<span class="quotelev2">&gt;&gt; first time.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; and i am stuck.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; i am fairly good with linux. so i know my way around linux. but am 
</span><br>
<span class="quotelev2">&gt;&gt; stuck with open mpi.
</span><br>
<p>The main new ingredient, besides Linux, is the newtork.
<br>
First you must tell OpenMPI which hosts in the network
<br>
you want to use (in a correct hostfile).
<br>
Moreover, the two hosts must talk to each other smoothly,
<br>
they must agree about passwordless connections,
<br>
about where the executables are, etc.
<br>
You are the master, and you must tell both hosts how to agree
<br>
on these things.
<br>
<p>You'll get there, just be patient, read the available documentation
<br>
carefully.
<br>
<p>Setup passwordless ssh connections.
<br>
Read the OpenMPI FAQ.
<br>
Read the mpiexec man page.
<br>
<p>They will help you.
<br>
<p>Good luck!
<br>
Gus Correa
<br>
---------------------------------------------------------------------
<br>
Gustavo Correa
<br>
Lamont-Doherty Earth Observatory - Columbia University
<br>
Palisades, NY, 10964-8000 - USA
<br>
---------------------------------------------------------------------
<br>
<p><p><span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Venu Gopal
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
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9281.php">Katz, Jacob: "[OMPI users] Wrapping MPI program in a script"</a>
<li><strong>Previous message:</strong> <a href="9279.php">Luis Vitorio Cargnini: "Re: [OMPI users] Please help me with this simple setup. i am stuck"</a>
<li><strong>In reply to:</strong> <a href="9279.php">Luis Vitorio Cargnini: "Re: [OMPI users] Please help me with this simple setup. i am stuck"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9287.php">Jeff Squyres: "Re: [OMPI users] Please help me with this simple setup. i am stuck"</a>
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
