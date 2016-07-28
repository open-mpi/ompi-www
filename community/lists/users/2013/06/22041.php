<?
$subject_val = "Re: [OMPI users] Set number of processes in another way than -np X";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun  6 11:25:00 2013" -->
<!-- isoreceived="20130606152500" -->
<!-- sent="Thu, 6 Jun 2013 17:24:57 +0200" -->
<!-- isosent="20130606152457" -->
<!-- name="Jos&#233; Luis Garc&#237;a Pallero" -->
<!-- email="jgpallero_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Set number of processes in another way than -np X" -->
<!-- id="CAFemY3aG8DOg1zjYrrYPFqTk93cH0OgvE1t+mdhk9z0ugN9hOQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="D411FF0E-AA2E-43BF-A672-3CCBBB3B2F95_at_open-mpi.org" -->
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
<strong>Date:</strong> 2013-06-06 11:24:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22042.php">Ralph Castain: "Re: [OMPI users] Set number of processes in another way than -np X"</a>
<li><strong>Previous message:</strong> <a href="22040.php">Ralph Castain: "Re: [OMPI users] Set number of processes in another way than -np X"</a>
<li><strong>In reply to:</strong> <a href="22040.php">Ralph Castain: "Re: [OMPI users] Set number of processes in another way than -np X"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22042.php">Ralph Castain: "Re: [OMPI users] Set number of processes in another way than -np X"</a>
<li><strong>Reply:</strong> <a href="22042.php">Ralph Castain: "Re: [OMPI users] Set number of processes in another way than -np X"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
2013/6/6 Ralph Castain &lt;rhc_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; Afraid not. You could start a single process, and then have that process
</span><br>
<span class="quotelev1">&gt; call MPI_Comm_spawn to launch the rest of them
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Mmmm... sounds good
<br>
<p>I'm writing an example program using ScaLAPACK. I have written the
<br>
ScaLAPACK code in an independent function that must be called after some
<br>
work in an individual node (the root one). So I need the first part of the
<br>
program be executed by one process. My example looks like:
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
&nbsp;&nbsp;&nbsp;&nbsp;//here I think I should write some code in order to inform that the
<br>
work must be done by a number X or processors
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
<p>When I execute this program as mpirun -np X myprogram, the pieces of code
<br>
before and after the call to function funcCompScalapack() are executed by X
<br>
nodes, but these orders must be executed only by one. So my idea is to
<br>
execute the binary as ./myprogram (the same I think as mpirun -np 1
<br>
myprogram) and internally set the number of processes in
<br>
funcCompScalapack() after the MPI_Init() call.
<br>
<p>Is my idea possible?
<br>
<p>Thanks
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 6, 2013, at 7:54 AM, Jos&#233; Luis Garc&#237;a Pallero &lt;jgpallero_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm newbie in the use of MPI, so probably I ask some stupid question (or
</span><br>
<span class="quotelev1">&gt; previously asked, but in this case I have searched in the archive and I
</span><br>
<span class="quotelev1">&gt; haven't found anything):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Exists any other way than -np X in order to pass the number of processes
</span><br>
<span class="quotelev1">&gt; to start for an MPI program? I mean a function of the style
</span><br>
<span class="quotelev1">&gt; MPI_Set_Number_Processes() or similar
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22041/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22042.php">Ralph Castain: "Re: [OMPI users] Set number of processes in another way than -np X"</a>
<li><strong>Previous message:</strong> <a href="22040.php">Ralph Castain: "Re: [OMPI users] Set number of processes in another way than -np X"</a>
<li><strong>In reply to:</strong> <a href="22040.php">Ralph Castain: "Re: [OMPI users] Set number of processes in another way than -np X"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22042.php">Ralph Castain: "Re: [OMPI users] Set number of processes in another way than -np X"</a>
<li><strong>Reply:</strong> <a href="22042.php">Ralph Castain: "Re: [OMPI users] Set number of processes in another way than -np X"</a>
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
