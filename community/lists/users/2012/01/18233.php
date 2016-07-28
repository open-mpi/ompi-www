<?
$subject_val = "Re: [OMPI users] MPI_Comm_create with unequal group arguments";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 20 09:26:10 2012" -->
<!-- isoreceived="20120120142610" -->
<!-- sent="Fri, 20 Jan 2012 09:26:06 -0500" -->
<!-- isosent="20120120142606" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Comm_create with unequal group arguments" -->
<!-- id="CAANzjEku+jwGgaGfZr4CHTxMrJZzu04ER_59AiJcFbNc=p0ptg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4F197387.4030808_at_fysik.dtu.dk" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Comm_create with unequal group arguments<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-20 09:26:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18234.php">Jens Jørgen Mortensen: "Re: [OMPI users] MPI_Comm_create with unequal group arguments"</a>
<li><strong>Previous message:</strong> <a href="18232.php">Josh Hursey: "Re: [OMPI users] Checkpoint an MPI process"</a>
<li><strong>In reply to:</strong> <a href="18231.php">Jens J&#248;rgen Mortensen: "[OMPI users] MPI_Comm_create with unequal group arguments"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18234.php">Jens Jørgen Mortensen: "Re: [OMPI users] MPI_Comm_create with unequal group arguments"</a>
<li><strong>Reply:</strong> <a href="18234.php">Jens Jørgen Mortensen: "Re: [OMPI users] MPI_Comm_create with unequal group arguments"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That behavior is permitted by the MPI 2.2 standard. It seems that our
<br>
documentation is incorrect in this regard. I'll file a bug to fix it.
<br>
<p>Just to clarify, in the MPI 2.2 standard in Section 6.4.2 (Communicator
<br>
Constructors) under MPI_Comm_create it states:
<br>
&quot;Each process must call with a group argument that is a subgroup of the
<br>
group associated with comm; this could be MPI_GROUP_EMPTY. The processes
<br>
may specify different values for the group argument. If a process calls
<br>
with a non-empty group then all processes in that group must call the
<br>
function with the same group as argument, that is the same processes in the
<br>
same order. Otherwise the call is erroneous.&quot;
<br>
<p>Thanks for reporting the man page bug.
<br>
<p>-- Josh
<br>
<p>2012/1/20 Jens J&#248;rgen Mortensen &lt;jensj_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; Hi!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For a long time, I have been calling MPI_Comm_create(comm, group, newcomm)
</span><br>
<span class="quotelev1">&gt; with different values for group on the different processes of comm.  In
</span><br>
<span class="quotelev1">&gt; pseudo-code, I would create two sub-communicators from a world with 4 ranks
</span><br>
<span class="quotelev1">&gt; like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; if world.rank &lt; 2:
</span><br>
<span class="quotelev1">&gt;    comm = world.create([0, 1])
</span><br>
<span class="quotelev1">&gt; else:
</span><br>
<span class="quotelev1">&gt;    comm = world.create([2, 3])
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now I read from the MPI_Comm_create description that this way of calling
</span><br>
<span class="quotelev1">&gt; MPI_Comm_create is erroneous:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  &quot;The call is erroneous if not all group arguments have the same value&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  <a href="http://www.open-mpi.org/doc/**v1.4/man3/MPI_Comm_create.3.**php#toc7<http://www.open-mpi.org/doc/v1.4/man3/MPI_Comm_create.3.php#toc7">http://www.open-mpi.org/doc/**v1.4/man3/MPI_Comm_create.3.**php#toc7<http://www.open-mpi.org/doc/v1.4/man3/MPI_Comm_create.3.php#toc7</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, I guess I have just been lucky that it has worked for me?  Or is it OK
</span><br>
<span class="quotelev1">&gt; to do what I do?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jens J&#248;rgen
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ______________________________**_________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/**mailman/listinfo.cgi/users<http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/**mailman/listinfo.cgi/users<http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Joshua Hursey
Postdoctoral Research Associate
Oak Ridge National Laboratory
<a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18233/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18234.php">Jens Jørgen Mortensen: "Re: [OMPI users] MPI_Comm_create with unequal group arguments"</a>
<li><strong>Previous message:</strong> <a href="18232.php">Josh Hursey: "Re: [OMPI users] Checkpoint an MPI process"</a>
<li><strong>In reply to:</strong> <a href="18231.php">Jens J&#248;rgen Mortensen: "[OMPI users] MPI_Comm_create with unequal group arguments"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18234.php">Jens Jørgen Mortensen: "Re: [OMPI users] MPI_Comm_create with unequal group arguments"</a>
<li><strong>Reply:</strong> <a href="18234.php">Jens Jørgen Mortensen: "Re: [OMPI users] MPI_Comm_create with unequal group arguments"</a>
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
