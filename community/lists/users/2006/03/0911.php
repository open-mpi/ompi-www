<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Mar 27 08:44:09 2006" -->
<!-- isoreceived="20060327134409" -->
<!-- sent="Mon, 27 Mar 2006 06:44:04 -0700" -->
<!-- isosent="20060327134404" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to establish communication between two separate COM WORLD" -->
<!-- id="4427EC24.50207_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4427A644.60104_at_fujitsu.fr" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-27 08:44:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0912.php">Ali Eghlima: "Re: [OMPI users] How to establish communication between two separate COM WORLD"</a>
<li><strong>Previous message:</strong> <a href="0910.php">Michael Kluskens: "Re: [OMPI users] Absoft fortran detected as g77?"</a>
<li><strong>In reply to:</strong> <a href="0908.php">Jean Latour: "Re: [OMPI users] How to establish communication between two separate COM WORLD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0912.php">Ali Eghlima: "Re: [OMPI users] How to establish communication between two separate COM WORLD"</a>
<li><strong>Reply:</strong> <a href="0912.php">Ali Eghlima: "Re: [OMPI users] How to establish communication between two separate COM WORLD"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<head>
  <meta content="text/html;charset=ISO-8859-1" http-equiv="Content-Type">
  <title></title>
</head>
<body bgcolor="#ffffff" text="#000000">
Actually, in a not-too-distant future release, there will be an option
to mpirun called "--connect" that will allow you to specify that this
job is to be connected to a specified earlier job. The run-time
environment will then spawn the new job and exchange all required
communication information between the two jobs for you. You could
therefore accomplish your desired operation by:<br>
<br>
&gt; nohup mpirun --np xx app1<br>
(system returns job number to you)<br>
&gt; mpirun --np yy --connect job1 app2<br>
(system starts app2 and connects it to job1)<br>
<br>
Should be a little more transparent. No specific coding for making the
connection would be required in your application itself.<br>
<br>
Ralph<br>
<br>
<br>
Jean Latour wrote:
<blockquote cite="mid4427A644.60104@fujitsu.fr" type="cite">Hello,
  <br>
  <br>
It seems to me there is only one way to create a communication between
  <br>
two MPI_COMM_WORLD :&nbsp; use MPI_Open_Port with a specific
  <br>
IP + port address, and then MPI_comm_connect / MPI_comm_accept.
  <br>
  <br>
In order to ease the port number communication, the use of
MPI_publish-name
  <br>
/ MPI_lookup_name is also possible with the constraint that the
"publish"
  <br>
must be done before the "lookup", and this involves some
synchronization
  <br>
between the processes anyway.
  <br>
  <br>
Simple examples can be found in the handbook on MPI : "Using MPI-2"
  <br>
by William Gropp et al.
  <br>
  <br>
Best Regards,
  <br>
Jean
  <br>
  <br>
Ali Eghlima wrote:
  <br>
  <br>
  <blockquote type="cite"><br>
    <br>
Hello,
    <br>
    <br>
I have read MPI-2 documents as well as FAQ. I am confused as the best
way to establish communication
    <br>
between two&nbsp; MPI_COMM_WORLD which has been created by two mpiexec calls
on the same node.
    <br>
    <br>
mpiexec -conf&nbsp; config1
    <br>
&nbsp;&nbsp;&nbsp;&nbsp; This start 20 processes on 7 nodes
    <br>
    <br>
mpiexec -conf&nbsp; config2
    <br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; This start 18 processes on 5 nodes
    <br>
    <br>
I do appreciate any comments or pointer to a document or example.
    <br>
    <br>
Thanks
    <br>
    <br>
Ali,
    <br>
    <br>
&nbsp;
    <br>
    <br>
------------------------------------------------------------------------
    <br>
    <br>
_______________________________________________
    <br>
users mailing list
    <br>
<a class="moz-txt-link-abbreviated" href="mailto:users@open-mpi.org">users@open-mpi.org</a>
    <br>
<a class="moz-txt-link-freetext" href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
    <br>
    <br>
  </blockquote>
  <br>
  <pre wrap="">
<hr size="4" width="90%">
_______________________________________________
users mailing list
<a class="moz-txt-link-abbreviated" href="mailto:users@open-mpi.org">users@open-mpi.org</a>
<a class="moz-txt-link-freetext" href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a></pre>
</blockquote>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0912.php">Ali Eghlima: "Re: [OMPI users] How to establish communication between two separate COM WORLD"</a>
<li><strong>Previous message:</strong> <a href="0910.php">Michael Kluskens: "Re: [OMPI users] Absoft fortran detected as g77?"</a>
<li><strong>In reply to:</strong> <a href="0908.php">Jean Latour: "Re: [OMPI users] How to establish communication between two separate COM WORLD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0912.php">Ali Eghlima: "Re: [OMPI users] How to establish communication between two separate COM WORLD"</a>
<li><strong>Reply:</strong> <a href="0912.php">Ali Eghlima: "Re: [OMPI users] How to establish communication between two separate COM WORLD"</a>
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
